FROM ubuntu:18.04
MAINTAINER  qbf

RUN apt-get update 
RUN apt-get -y upgrade
RUN apt-get install -y curl vim

ADD ./www/ /usr/share/nginx/html
ADD ./sql-data/mydb.sql /tmp/mydb.sql

#CMD ["", ""]