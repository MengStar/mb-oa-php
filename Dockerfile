FROM registry.cn-hangzhou.aliyuncs.com/diligentyang/centos6.7_nginx_1.10_php5.6.29:v1.0
ADD ./root/ /var/www/
ADD nginx.conf /local/soft/nginx/conf/nginx.conf
EXPOSE 80 443
CMD  chmod -R 777 /var && service php-fpm start && service nginx  && tail -f /var/log/yum.log
