FROM nginx:1.23

ENV TZ Asia/Tokyo
ENV DOCKER_CONTENT_TRUST=1

COPY ./docker/local/web/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/local/web/default.conf /etc/nginx/conf.d/default.conf
