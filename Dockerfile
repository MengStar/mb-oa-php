FROM garland/xampp-base
EXPOSE 80
ADD httpd-xampp.conf /opt/lampp/etc/extra/httpd-xampp.conf
ADD ./root/ /opt/lampp/htdocs/
CMD chmod -R 777 /opt/lampp/htdocs && /opt/lampp/lampp startapache && tail -f /opt/lampp/etc/extra/httpd-xampp.conf