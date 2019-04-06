FROM mattrayner/lamp:latest-1604-php5

WORKDIR /app
COPY . .

WORKDIR /
CMD ["/run.sh"]