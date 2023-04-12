FROM nginx:1.23

ENV TZ Asia/Tokyo

COPY ./docker/prod/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/prod/web/default.conf /etc/nginx/conf.d/default.conf

RUN rm -rf /usr/bin/expiry \
/usr/bin/chsh \
/bin/umount \
/bin/mount \
/sbin/unix_chkpwd \
/bin/su \
/usr/bin/chage \
/usr/bin/chfn \
/usr/bin/wall \
/usr/bin/gpasswd \
/usr/bin/newgrp \
/usr/bin/passwd
