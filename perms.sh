#!/bin/sh
chown -R nginx:nginx /usr/share/nginx/html/
find . -type f | xargs chmod 664
find ./bin -type f | xargs chmod 775
find . -type d | xargs chmod 775
find . -type d | xargs chmod +s
