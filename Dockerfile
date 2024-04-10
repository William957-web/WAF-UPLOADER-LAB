FROM dockerfiles/centos-lamp
COPY . /var/www/html
RUN rm /var/www/html/Dockerfile
RUN chmod 777 /var/www/html/
RUN mkdir /var/www/html/uploads
RUN chmod 777 /var/www/html/uploads
RUN echo 'ICED{You_jus7_mad3_my_w@f_become_waffle}' > /flag-$(xxd -l 6 -p /dev/urandom)
