<?php

class chatModel extends model
{
    /**
     * Reset user status.
     *
     * @param  string $status
     * @access public
     * @return bool
     */
    public function resetUserStatus($status = 'offline')
    {
        $this->dao->update(TABLE_USER)->set('status')->eq($status)->exec();
        return !dao::isError();
    }

    /**
     * Create a system chat.
     *
     * @access public
     * @return bool
     */
    public function createSystemChat()
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $chat = $this->dao->select('*')->from(TABLE_IM_CHAT)->where('type')->eq('system')->andWhere('account_id')->eq($accountId)->fetch();
        if (!$chat) {
            $chat = new stdclass();
            $chat->gid = $this->createGID();
            $chat->name = 'system group';
            $chat->type = 'system';
            $chat->createdBy = 'system';
            $chat->createdDate = helper::now();
            $chat->account_id = $accountId;
            $this->dao->insert(TABLE_IM_CHAT)->data($chat)->exec();
        }
        return !dao::isError();
    }

    /**
     * Get signed time.
     *
     * @param  string $account
     * @access public
     * @return string | int
     */
    public function getSignedTime($account = '')
    {
        $this->app->loadModuleConfig('attend');
        if (strpos(',all,xuanxuan,', ",{$this->config->attend->signInClient},") === false) return '';

       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $attend = $this->dao->select('*')->from(TABLE_ATTEND)->where('account')->eq($account)->andWhere('`date`')->eq(date('Y-m-d'))->andWhere('account_id')->eq($accountId)->fetch();
        if ($attend) return strtotime("$attend->date $attend->signIn");

        return time();
    }

    /**
     * Foramt user object
     *
     * @param  object $user
     * @access public
     * @return object
     */
    public function formatUsers($users)
    {
        if (is_array($users)) {
            foreach ($users as $user) {
                $user = $this->formatUsers($user);
            }
            return $users;
        }

        $user = $users;

        $user->id = (int)$user->id;
        $user->dept = (int)$user->dept;
        $user->avatar = !empty($user->avatar) ? commonModel::getSysURL() . $user->avatar : $user->avatar;

        if (isset($user->deleted)) $user->deleted = (int)$user->deleted;

        return $user;
    }

    /**
     * Get a user.
     *
     * @param  int $userID
     * @access public
     * @return object
     */
    public function getUserByUserID($userID = 0)
    {
        $user = $this->dao->select('id, account, realname, avatar, role, dept, status, admin, gender, email, mobile, phone, site, qq, deleted')->from(TABLE_USER)->where('id')->eq($userID)->fetch();
        if ($user) {
            $user = $this->formatUsers($user);
        }

        return $user;
    }

    /**
     * Get user list.
     *
     * @param  string $status
     * @param  array $idList
     * @access public
     * @return array
     */
    public function getUserList($status = '', $idList = array(), $idAsKey = true)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;
        $dao = $this->dao->select('id, account, realname, avatar, role, dept, status, admin, gender, email, mobile, phone, site, qq, deleted')
            ->from(TABLE_USER)->where('1')
            ->andWhere('account_id')->eq($accountId)
            ->beginIF(!$idList)->andWhere('deleted')->eq('0')->fi()
            ->beginIF($status && $status == 'online')->andWhere('status')->ne('offline')->fi()
            ->beginIF($status && $status != 'online')->andWhere('status')->eq($status)->fi()
            ->beginIF($idList)->andWhere('id')->in($idList)->fi();
        if ($idAsKey) {
            $users = $dao->fetchAll('id');
        } else {
            $users = $dao->fetchAll();
        }

        $users = $this->formatUsers($users);

        return $users;
    }

    /**
     * Edit a user.
     *
     * @param  object $user
     * @access public
     * @return object
     */
    public function editUser($user = null)
    {
        if (empty($user->id)) return null;
        $this->dao->update(TABLE_USER)->data($user)->where('id')->eq($user->id)->exec();
        return $this->getUserByUserID($user->id);
    }

    /**
     * Get member list by gid.
     *
     * @param  string $gid
     * @access public
     * @return array
     */
    public function getMemberListByGID($gid = '')
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $chat = $this->getByGID($gid);
        if (!$chat) return array();

        if ($chat->type == 'system') {
            $memberList = $this->dao->select('id')->from(TABLE_USER)->where('deleted')->eq('0')->andWhere('account_id')->eq($accountId)->fetchPairs();
        } else {
            $memberList = $this->dao->select('user as id')
                ->from(TABLE_IM_CHATUSER)
                ->where('quit')->eq('0000-00-00 00:00:00')
                ->andWhere('account_id')->eq($accountId)
                ->beginIF($gid)->andWhere('cgid')->eq($gid)->fi()
                ->fetchPairs();
        }

        $members = array();
        foreach ($memberList as $member) $members[] = (int)$member;

        return $members;
    }

    /**
     * Get message list.
     *
     * @param  array $idList
     * @access public
     * @return array
     */
    public function getMessageList($idList = array(), $pager = null, $startDate = '')
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $messages = $this->dao->select('*')
            ->from(TABLE_IM_MESSAGE)
            ->where('1')
            ->andWhere('account_id')->eq($accountId)
            ->beginIF($idList)->andWhere('id')->in($idList)->fi()
            ->beginIF($startDate)->andWhere('date')->ge($startDate)->fi()
            ->orderBy('id_desc')
            ->page($pager)
            ->fetchAll();

        foreach ($messages as $message) {
            $message->id = (int)$message->id;
            $message->order = (int)$message->order;
            $message->user = (int)$message->user;
            $message->date = strtotime($message->date);
        }

        return $messages;
    }

    /**
     * Get message list by cgid.
     *
     * @param  string $cgid
     * @access public
     * @return array
     */
    public function getMessageListByCGID($cgid = '', $pager = null, $startDate = '')
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $messages = $this->dao->select('*')->from(TABLE_IM_MESSAGE)
            ->where('cgid')->eq($cgid)
            ->andWhere('account_id')->eq($accountId)
            ->beginIF($startDate)->andWhere('date')->ge($startDate)->fi()
            ->orderBy('id_desc')
            ->page($pager)
            ->fetchAll();

        foreach ($messages as $message) {
            $message->id = (int)$message->id;
            $message->order = (int)$message->order;
            $message->user = (int)$message->user;
            $message->date = strtotime($message->date);
        }

        return $messages;
    }

    /**
     * Foramt chat object
     *
     * @param  object $chat
     * @access public
     * @return object
     */
    public function formatChats($chats)
    {
        if (is_array($chats)) {
            foreach ($chats as $chat) {
                $this->formatChats($chat);
            }
            return $chats;
        }

        $chat = $chats;

        $chat->id = (int)$chat->id;
        $chat->subject = (int)$chat->subject;
        $chat->public = (int)$chat->public;
        $chat->createdDate = strtotime($chat->createdDate);
        $chat->editedDate = $chat->editedDate == '0000-00-00 00:00:00' ? 0 : strtotime($chat->editedDate);
        $chat->lastActiveTime = $chat->lastActiveTime == '0000-00-00 00:00:00' ? 0 : strtotime($chat->lastActiveTime);
        $chat->dismissDate = $chat->dismissDate == '0000-00-00 00:00:00' ? 0 : strtotime($chat->dismissDate);

        if ($chat->type == 'one2one') $chat->name = '';

        if (isset($chat->star)) $chat->star = (int)$chat->star;
        if (isset($chat->hide)) $chat->hide = (int)$chat->hide;
        if (isset($chat->mute)) $chat->mute = (int)$chat->mute;

        return $chat;
    }

    /**
     * Get chat list.
     *
     * @param  bool $public
     * @access public
     * @return array
     */
    public function getList($public = true)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $chats = $this->dao->select('*')->from(TABLE_IM_CHAT)
            ->where('public')->eq($public)
            ->andWhere('account_id')->eq($accountId)
            ->beginIF($public)->andWhere('dismissDate')->eq('0000-00-00 00:00:00')->fi()
            ->fetchAll();

        $this->formatChats($chats);

        return $chats;
    }

    /**
     * Get chat list by userID.
     *
     * @param  int $userID
     * @param  bool $star
     * @access public
     * @return array
     */
    public function getListByUserID($userID = 0, $star = false)
    {  if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $systemChat = $this->dao->select('*, 0 as star, 0 as hide, 0 as mute')
            ->from(TABLE_IM_CHAT)
            ->where('type')->eq('system')
            ->andWhere('account_id')->eq($accountId)
            ->fetchAll();

        $chats = $this->dao->select('t1.*, t2.star, t2.hide, t2.mute, t2.category')
            ->from(TABLE_IM_CHAT)->alias('t1')
            ->leftjoin(TABLE_IM_CHATUSER)->alias('t2')->on('t1.gid=t2.cgid')
            ->where('t2.quit')->eq('0000-00-00 00:00:00')
            ->andWhere('t2.user')->eq($userID)
            ->andWhere('t1.account_id')->eq($accountId)
            ->andWhere('t2.account_id')->eq($accountId)
            ->beginIF($star)->andWhere('t2.star')->eq($star)->fi()
            ->fetchAll();

        $chats = array_merge($systemChat, $chats);

        $this->formatChats($chats);

        return $chats;
    }

    /**
     * Get a chat by gid.
     *
     * @param  string $gid
     * @param  bool $members
     * @access public
     * @return object
     */
    public function getByGID($gid = '', $members = false)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $chat = $this->dao->select('*')->from(TABLE_IM_CHAT)->where('gid')->eq($gid)->andWhere('account_id')->eq($accountId)->fetch();

        if ($chat) {
            $this->formatChats($chat);

            if ($members) $chat->members = $this->getMemberListByGID($gid);
        }

        return $chat;
    }

    /**
     * Get offline messages.
     *
     * @param  int $userID
     * @access public
     * @return array
     */
    public function getOfflineMessages($userID = 0)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $messages = $this->dao->select('t2.*')->from(TABLE_IM_MESSAGESTATUS)->alias('t1')
            ->leftJoin(TABLE_IM_MESSAGE)->alias('t2')->on('t2.gid = t1.gid')
            ->where('t1.user')->eq($userID)
            ->andWhere('t1.account_id')->eq($accountId)
            ->andWhere('t2.account_id')->eq($accountId)
            ->andWhere('t1.status')->eq('waiting')
            ->andWhere('t2.type')->ne('notify')
            ->orderBy('t2.order desc, t2.id desc')
            ->fetchAll();
        if (empty($messages)) return array();

        $this->dao->update(TABLE_IM_MESSAGESTATUS)
            ->set('status')->eq('sent')
            ->where('user')->eq($userID)
            ->andWhere('account_id')->eq($accountId)
            ->andWhere('status')->eq('waiting')
            ->exec();
        return $messages;
    }

    /**
     * Create a chat.
     *
     * @param  string $gid
     * @param  string $name
     * @param  string $type
     * @param  array $members
     * @param  int $subjectID
     * @param  bool $public
     * @param  int $userID
     * @access public
     * @return object
     */
    public function create($gid = '', $name = '', $type = '', $members = array(), $subjectID = 0, $public = false, $userID = 0)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $user = $this->getUserByUserID($userID);

        $chat = new stdclass();
        $chat->gid = $gid;
        $chat->name = $name;
        $chat->type = $type;
        $chat->subject = $subjectID;
        $chat->createdBy = !empty($user->account) ? $user->account : '';
        $chat->createdDate = helper::now();
        $chat->account_id = $accountId;

        if ($public) $chat->public = 1;

        $this->dao->insert(TABLE_IM_CHAT)->data($chat)->exec();

        /* Add members to chat. */
        foreach ($members as $member) {
            $this->joinChat($gid, $member);
        }

        return $this->getByGID($gid, true);
    }

    /**
     * Update a chat.
     *
     * @param  object $chat
     * @param  int $userID
     * @access public
     * @return object
     */
    public function update($chat = null, $userID = 0)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        if ($chat) {
            $user = $this->getUserByUserID($userID);
            $chat->editedBy = !empty($user->account) ? $user->account : '';
            $chat->editedDate = helper::now();
            $this->dao->update(TABLE_IM_CHAT)->data($chat)->where('gid')->eq($chat->gid)->andWhere('account_id')->eq($accountId)->batchCheck($this->config->chat->require->edit, 'notempty')->exec();
        }

        /* Return the changed chat. */
        return $this->getByGID($chat->gid, true);
    }

    /**
     * Set admins of a chat.
     *
     * @param  string $gid
     * @param  array $admins
     * @param  bool $isAdmin
     * @access public
     * @return object
     */
    public function setAdmin($gid = '', $admins = array(), $isAdmin = true)
    {

       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $chat = $this->getByGID($gid);
        $adminList = explode(',', $chat->admins);
        foreach ($admins as $admin) {
            if ($isAdmin) {
                $adminList[] = $admin;
            } else {
                $key = array_search($admin, $adminList);
                if ($key) unset($adminList[$key]);
            }
        }
        $adminList = implode(',', $adminList);
        $this->dao->update(TABLE_IM_CHAT)->set('admins')->eq($adminList)->where('gid')->eq($gid)->andWhere('account_id')->eq($accountId)->exec();

        return $this->getByGID($gid, true);
    }

    /**
     * Star or cancel star a chat.
     *
     * @param  string $gid
     * @param  bool $star
     * @param  int $userID
     * @access public
     * @return object
     */
    public function starChat($gid = '', $star = true, $userID = 0)
    {
        $this->dao->update(TABLE_IM_CHATUSER)
            ->set('star')->eq($star)
            ->where('cgid')->eq($gid)
            ->andWhere('user')->eq($userID)
            ->exec();

        return $this->getByGID($gid, true);
    }

    /**
     * Hide or display a chat.
     *
     * @param  string $gid
     * @param  bool $hide
     * @param  int $userID
     * @access public
     * @return bool
     */
    public function hideChat($gid = '', $hide = true, $userID = 0)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $this->dao->update(TABLE_IM_CHATUSER)
            ->set('hide')->eq($hide)
            ->where('cgid')->eq($gid)
            ->andWhere('user')->eq($userID)
            ->andWhere('account_id')->eq($accountId)
            ->exec();

        return !dao::isError();
    }

    /**
     * Set category for a chat
     *
     * @param  array $gids
     * @param  string $category
     * @param  int $userID
     * @access public
     * @return void
     */
    public function categoryChat($gids = array(), $category = '', $userID = 0)
    {
        $this->dao->update(TABLE_IM_CHATUSER)
            ->set('category')->eq($category)
            ->where('cgid')->in($gids)
            ->andWhere('user')->eq($userID)
            ->exec();

        return !dao::isError();
    }

    /**
     * Join or quit a chat.
     *
     * @param  string $gid
     * @param  int $userID
     * @param  bool $join
     * @access public
     * @return bool
     */
    public function joinChat($gid = '', $userID = 0, $join = true)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        if ($join) {
            /* Join chat. */
            $data = $this->dao->select('*')->from(TABLE_IM_CHATUSER)->where('cgid')->eq($gid)->andWhere('user')->eq($userID)->andWhere('account_id')->eq($accountId)->fetch();
            if ($data) {
                /* If user hasn't quit the chat then return. */
                if ($data->quit == '0000-00-00 00:00:00') return true;

                /* If user has quited the chat then update the record. */
                $data = new stdclass();
                $data->join = helper::now();
                $data->quit = '0000-00-00 00:00:00';
                $this->dao->update(TABLE_IM_CHATUSER)->data($data)->where('cgid')->eq($gid)->andWhere('user')->eq($userID)->andWhere('account_id')->eq($accountId)->exec();

                return !dao::isError();
            }

            /* Create a new record about user's chat info. */
            $data = new stdclass();
            $data->cgid = $gid;
            $data->user = $userID;
            $data->join = helper::now();
            $data->account_id = $accountId;
            $this->dao->insert(TABLE_IM_CHATUSER)->data($data)->exec();

            $id = $this->dao->lastInsertID();

            $this->dao->update(TABLE_IM_CHATUSER)->set('`order`')->eq($id)->where('id')->eq($id)->andWhere('account_id')->eq($accountId)->exec();
        } else {
            /* Quit chat. */
            $this->dao->update(TABLE_IM_CHATUSER)->set('quit')->eq(helper::now())->where('cgid')->eq($gid)->andWhere('user')->eq($userID)->andWhere('account_id')->eq($accountId)->exec();
        }
        return !dao::isError();
    }

    /**
     * Create messages.
     *
     * @param  array $messageList
     * @param  int $userID
     * @access public
     * @return array
     */
    public function createMessage($messageList = array(), $userID = 0)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;
        $idList = array();
        $chatList = array();
        foreach ($messageList as $message) {
            $msg = $this->dao->select('*')->from(TABLE_IM_MESSAGE)->where('gid')->eq($message->gid)->andWhere('account_id')->eq($accountId)->fetch();
            if ($msg) {
                if ($msg->contentType == 'image' || $msg->contentType == 'file') {
                    $this->dao->update(TABLE_IM_MESSAGE)->set('content')->eq($message->content)->where('id')->eq($msg->id)->andWhere('account_id')->eq($accountId)->exec();
                }
                $idList[] = $msg->id;
            } elseif (!$msg) {
                if (!(isset($message->user) && $message->user)) $message->user = $userID;
                if (!(isset($message->date) && $message->date)) $message->date = helper::now();

                $message->account_id = $accountId;
                $this->dao->insert(TABLE_IM_MESSAGE)->data($message)->exec();
                $idList[] = $this->dao->lastInsertID();

                $data = new stdClass();
                $data->user = $message->user;
                $data->gid = $message->gid;
                $data->status = 'sent';
                $data->account_id = $accountId;
                $this->dao->insert(TABLE_IM_MESSAGESTATUS)->data($data)->exec();
            }
            $chatList[$message->cgid] = $message->cgid;
        }
        if (empty($idList)) return array();

        $this->dao->update(TABLE_IM_CHAT)->set('lastActiveTime')->eq(helper::now())->where('gid')->in($chatList)->andWhere('account_id')->eq($accountId)->exec();

        return $this->getMessageList($idList);
    }

    /**
     * Save offline messages.
     *
     * @param  array $messages
     * @param  array $users
     * @access public
     * @return bool
     */
    public function saveOfflineMessages($messages = array(), $users = array())
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;
        foreach ($users as $user) {
            foreach ($messages as $message) {
                $data = new stdClass();
                $data->user = $user;
                $data->gid = $message->gid;
                $data->status = 'waiting';
                $data->account_id = $accountId;
                $this->dao->replace(TABLE_IM_MESSAGESTATUS)->data($data)->exec();
            }
        }
        return !dao::isError();
    }

    /**
     * Get offline notify.
     * @param $userID
     * @return array
     */
    public function getOfflineNotify($userID)
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;
        $messages = $this->dao->select('t2.*')->from(TABLE_IM_MESSAGESTATUS)->alias('t1')
            ->leftjoin(TABLE_IM_MESSAGE)->alias('t2')->on("t2.gid = t1.gid")
            ->where('t1.user')->eq($userID)
            ->andWhere('t1.account_id')->eq($accountId)
            ->andWhere('t2.account_id')->eq($accountId)
            ->andWhere('t1.status')->eq('waiting')
            ->andWhere('t2.type')->eq('notify')
            ->fetchAll();

        if (empty($messages)) return array();
        $notify = $this->formatNotify($messages);
        $gids = array();
        foreach ($notify as $message) $gids[] = $message->gid;

        $this->dao->update(TABLE_IM_MESSAGESTATUS)->set('status')->eq('sent')->where('gid')->in($gids)->andWhere('user')->eq($userID)->andWhere('account_id')->eq($accountId)->exec();
        return $notify;
    }

    /**
     * Get notify.
     * @access public
     * @return array
     */
    public function getNotify(){
        $objs =  $this->getAccountIds();
        $data = array();
        foreach ($objs as $obj){
            $data[$obj->account_id] = $this->getUserList($obj->account_id);
        }

        return $data;
    }
    /**
     * Get accountIds.
     * @access public
     * @return array
     */
    public function getAccountIds(){
        return $this->dao->select('distinct account_id')->from(TABLE_USER)->fetchAll();
    }
    /**
     * Get notify.
     * @access public
     * @return array
     */
    public function getNotifyByAcccountId($accountId)
    {
        $onlineUsers = $this->getUserList('online');
        if (empty($onlineUsers)) return array();
        $onlineUsers = array_keys($onlineUsers);

        $messages = $this->dao->select('t2.*')->from(TABLE_IM_MESSAGESTATUS)->alias('t1')
            ->leftJoin(TABLE_IM_MESSAGE)->alias('t2')->on('t2.gid = t1.gid')
            ->where('t1.status')->eq('waiting')
            ->andWhere('t2.type')->eq('notify')
            ->andWhere('t1.user')->in($onlineUsers)
            ->andWhere('t1.account_id')->eq($accountId)
            ->andWhere('t2.account_id')->eq($accountId)
            ->groupBy('t1.gid')
            ->fetchAll();
        if (empty($messages)) return array();

        $notify = $this->formatNotify($messages);
        $data = array();
        $gids = array();
        foreach ($notify as $message) {
            foreach ($onlineUsers as $userID) {
                if ((empty($message->user) && empty($message->users)) || in_array($userID, $message->users)) {
                    $gids[$userID][] = $message->gid;
                    $data[$userID][] = $message;
                }
            }
        }

        foreach ($gids as $userID => $gid) {
            $this->dao->update(TABLE_IM_MESSAGESTATUS)
                ->set('status')->eq('sent')
                ->where('gid')->in($gid)
                ->andWhere('user')->eq($userID)
                ->andWhere('account_id')->eq($accountId)
                ->exec();
        }
        return $data;
    }

    /**
     * Foramt messages for notify.
     * @param object $messages
     * @access public
     * @return array
     */
    public function formatNotify($messages)
    {
        $notify = array();
        foreach ($messages as $message) {
            $data = new stdClass();
            $messageData = json_decode($message->data);
            $data->id = $message->id;
            $data->gid = $message->gid;
            $data->content = $message->content;
            $data->date = strtotime($message->date);
            $data->contentType = $message->contentType;
            $data->title = $messageData->title;
            $data->subtitle = $messageData->subtitle;
            $data->url = $messageData->url;
            $data->actions = $messageData->actions;
            $data->sender = $messageData->sender;
            $data->users = $messageData->target;

            $notify[] = $data;
        }
        return $notify;
    }

    /**
     * Upgrade offline user status.
     * @param array $offline
     * @access public
     * @return bool
     */
    public function offlineUser($offline = array())
    {
        if (empty($offline)) return true;

       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        $this->dao->update(TABLE_USER)->set('status')->eq('offline')->where('id')->in($offline)->andWhere('account_id')->eq($accountId)->exec();
        return !dao::isError();
    }

    /**
     * Add offline messages according to the gid of messages that failed to be sent.
     * @param array $sendfail
     * @access public
     * @return bool
     */
    public function sendFailMessage($sendfail = array())
    {
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;

        foreach ($sendfail as $userID => $gid) {
            if (empty($gid)) continue;
            $idList = $this->dao->select('id')->from(TABLE_IM_MESSAGE)->where('gid')->in($gid)->andWhere('account_id')->eq($accountId)->fetchPairs();
            $messages = $this->getMessageList($idList);
            $this->saveOfflineMessages($messages, $userID);
        }
        return !dao::isError();
    }

    /**
     * Upgrade xuanxuan.
     *
     * @access public
     * @return void
     */
    public function upgrade()
    {
        $version = $this->getVersion();
        if (version_compare($this->config->xuanxuan->version, $version, '<=')) {
            $output = <<<EOT
<html>
  <head><meta charset='utf-8'></head>
  <body>
    <div style='text-align: center'>
      <h1>{$this->lang->chat->latestVersion}</h1>
    </div>
  </body>
</html>
EOT;
            die($output);
        }

        switch ($version) {
            case '1.0'  :
                $this->loadModel('upgrade')->execSQL($this->getUpgradeFile($version));
            case '1.1.0':
            case '1.3.0':
                $this->loadModel('upgrade')->execSQL($this->getUpgradeFile($version));
            case '1.4.0':
               if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;
                $this->loadModel('upgrade')->execSQL($this->getUpgradeFile($version));
                $messagesList = $this->dao->select('*')->from(TABLE_IM_USERMESSAGE)->where('account_id')->eq($accountId)->fetchAll();
                if (!empty($messagesList)) foreach ($messagesList as $messages) {
                    $messages = json_decode($messages->message);
                    foreach ($messages as $message) {
                        $data = new stdClass();
                        $data->user = $messages->uesr;
                        $data->gid = $message->gid;
                        $data->status = 'waiting';
                        $data->account_id = $accountId;
                        $this->dao->insert(TABLE_IM_MESSAGESTATUS)->data($data)->exec();
                    }
                }
            default:
                $this->loadModel('setting')->setItem('system.sys.xuanxuan.global.version', $this->config->xuanxuan->version);
        }

        if (dao::isError()) {
            $error = dao::getError(true);
            $output = <<<EOT
<html>
  <head><meta charset='utf-8'></head>
  <body>
    <div style='text-align: center'>
      <h1>{$this->lang->chat->upgradeFail}</h1>
      <p>{$error}</p>
    </div>
  </body>
</html>
EOT;
        } else {
            $output = <<<EOT
<html>
  <head><meta charset='utf-8'></head>
  <body>
    <div style='text-align: center'>
      <h1>{$this->lang->chat->upgradeSuccess}</h1>
    </div>
  </body>
</html>
EOT;
        }
        die($output);
    }

    /**
     * Get version of xuanxuan.
     *
     * @access public
     * @return string
     */
    public function getVersion()
    {
        $version = !empty($this->config->xuanxuan->global->version) ? $this->config->xuanxuan->global->version : '1.0';
        return $version;
    }

    /**
     * Get upgrade file.
     *
     * @param  string $version
     * @access public
     * @return string
     */
    public function getUpgradeFile($version = '1.0')
    {
        return $this->app->getBasepath() . 'db' . DS . 'upgradexuanxuan' . $version . '.sql';
    }

    /**
     * Insert message for notify.
     * @param array $target
     * @param string $title
     * @param string $subtitle
     * @param string $content
     * @param string $contentType
     * @param string $url
     * @param array $actions
     * @param int $sender
     * @access public
     * @return bool
     */
    public function createNotify($target = '', $title = '', $subtitle = '', $content = '', $contentType = 'text', $url = '', $actions = array(), $sender = 0)
    {
        $users = $this->getUserList('', $target);
       if(isset($this->app->userID))$accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
       if(!isset($accountId)) $accountId = $this->app->accountId;
        $info = array();
        $info['title'] = $title;
        $info['subtitle'] = $subtitle;
        $info['url'] = $url;
        $info['actions'] = $actions;
        $info['sender'] = $sender;
        $info['target'] = array_keys($users);

        $notify = new stdClass();
        $notify->gid = $this->createGID();
        $notify->cgid = '#notification';
        $notify->user = 0;
        $notify->date = helper::now();
        $notify->order = 0;
        $notify->type = 'notify';
        $notify->content = $content;
        $notify->contentType = $contentType;
        $notify->data = json_encode($info);
        $notify->account_id = $accountId;
        $this->dao->insert(TABLE_IM_MESSAGE)->data($notify)->exec();

        foreach ($info['target'] as $user) {
            $data = new stdClass();
            $data->user = $user;
            $data->gid = $notify->gid;
            $data->status = 'waiting';
            $data->account_id = $accountId;
            $this->dao->insert(TABLE_IM_MESSAGESTATUS)->data($data)->exec();
        }
        return !dao::isError();
    }

    /**
     * Create gid.
     * @access public
     * @return string
     */
    public function createGID()
    {
        $id = md5(time() . mt_rand());
        return substr($id, 0, 8) . '-' . substr($id, 8, 4) . '-' . substr($id, 12, 4) . '-' . substr($id, 16, 4) . '-' . substr($id, 20, 12);
    }

    public function checkUserChange()
    {
//       $accountId = $this->dao->select('account_id')->from(TABLE_USER)->where('id')->eq($this->app->userID)->fetch()->account_id;
//       if(!isset($accountId)) $accountId = $this->app->accountId;
        $data = $this->dao->select('id')->from(TABLE_ACTION)
            ->where('objectType')->eq('user')
            ->andWhere('action')->in('created,edited,deleted')
            ->andWhere('date')->gt(date(DT_DATETIME1, strtotime('-1 Minute')))
//            ->andWhere('account_id')->eq($accountId)
            ->fetch();
        return empty($data) ? 'no' : 'yes';
    }
}
