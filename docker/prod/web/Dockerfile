FROM nginx:1.23

ENV TZ Asia/Tokyo

COPY ./docker/prod/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/prod/web/default.conf /etc/nginx/conf.d/default.conf

RUN apt-get remove --purge expiry chsh umount mount unix_chkpwd su chage chfn wall gpasswd newgrp passwd
