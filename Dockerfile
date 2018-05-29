FROM registry.cn-hangzhou.aliyuncs.com/mengstar/mb-oa
EXPOSE 80
ADD httpd-xampp.conf /opt/lampp/etc/extra/httpd-xampp.conf
ADD ./root/ /opt/lampp/htdocs/
#CMD chmod -R 777 /opt/lampp/htdocs && /opt/lampp/lampp startapache && tail -f /opt/lampp/etc/extra/httpd-xampp.conf 会被覆盖
ENTRYPOINT chmod -R 777 /opt/lampp/htdocs && /opt/lampp/lampp startapache && tail -100f /opt/lampp/etc/extra/httpd-xampp.conf
