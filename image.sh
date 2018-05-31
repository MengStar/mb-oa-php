#!/usr/bin/env bash
#利用插件生成可执行镜像
#先生成一个可执行的镜像mb-oa，然后commit，在提交
docker commit mb-oa registry.cn-hangzhou.aliyuncs.com/mengstar/mb-oa   &&
docker push registry.cn-hangzhou.aliyuncs.com/mengstar/mb-oa