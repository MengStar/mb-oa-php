FROM garland/xampp-base
ADD httpd-xampp.conf /opt/lampp/etc/extra/httpd-xampp.conf
ADD ./root/ /opt/lampp/htdocs/
CMD chmod -R 777 /opt/lampp/htdocs && /opt/lampp/lampp start && tail -f /opt/lampp/etc/extra/httpd-xampp.conf