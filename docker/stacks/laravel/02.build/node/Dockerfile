FROM node:16-buster

# RUN apk --update add --no-cache git



WORKDIR /app

ARG uid=999

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && echo "deb http://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
    && apt-get update \
    && apt-get install -y git yarn \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


RUN usermod -u $uid node


# RUN npm install -g bower
# RUN echo '{ "allow_root": true }' > /root/.bowerrc
# RUN mkdir /app
# WORKDIR /app
# # RUN  chmod -R 777 /app
# # RUN npm config set unsafe-perm true
# COPY  /mnt/usb/docker/stacks/laravel/01.source /01.source
# RUN deluser --remove-home node  
