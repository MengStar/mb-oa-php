#FROM registry.cn-hangzhou.aliyuncs.com/diligentyang/centos6.7_nginx_1.10_php5.6.29:v1.0
#ADD ./root/ /var/
#EXPOSE 80 443
#CMD  chmod -R 777 /var && service php-fpm start && service nginx  && tail -f /var/log/yum.log
#看来这个镜像不能用 有点问题