FROM nginx:1.23

ENV TZ Asia/Tokyo

COPY ./docker/proc/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/proc/web/default.conf /etc/nginx/conf.d/default.conf
