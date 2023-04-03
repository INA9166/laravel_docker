FROM nginx:1.23

ENV TZ Asia/Tokyo

COPY ./docker/prod/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/prod/web/default.conf /etc/nginx/conf.d/default.conf
