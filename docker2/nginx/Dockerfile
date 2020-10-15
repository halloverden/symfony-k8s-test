ARG VERSION

# Dev image
FROM nginx:${VERSION}-alpine as dev

# Copy nginx config
COPY ./docker2/nginx/default.conf /etc/nginx/conf.d/default.conf

# Prod image
FROM dev as prod

COPY ./public/index.php /app/public/index.php
