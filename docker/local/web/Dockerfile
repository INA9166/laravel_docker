FROM nginx:1.23

ENV TZ Asia/Tokyo

COPY ./docker/local/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/local/web/default.conf /etc/nginx/conf.d/default.conf

RUN chmod u-s /usr/bin/newgrp && \
chmod u-s /usr/bin/passwd && \
chmod u-s /usr/bin/gpasswd && \
chmod u-s /bin/mount && \
chmod u-s /bin/umount && \
chmod u-s /bin/su && \
chmod u-s /usr/bin/chfn && \
chmod u-s /usr/bin/chsh && \
chmod g-s /usr/bin/chage && \
chmod g-s /usr/bin/wall && \
chmod g-s /sbin/unix_chkpwd && \
chmod g-s /usr/bin/expiry

