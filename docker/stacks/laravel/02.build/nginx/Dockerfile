FROM nginx:alpine

# RUN apk update

RUN rm /etc/nginx/conf.d/default.conf
COPY default.conf /etc/nginx/conf.d/default.conf

WORKDIR /app
