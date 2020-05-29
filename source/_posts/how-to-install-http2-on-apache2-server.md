---
extends: _layouts.post
section: content
title: How to configure http2 protocol on Apache2.4 web server
date: 1970-01-01
description: How to configure http2 protocol on Apache2.4 web server
cover_image: 
---

[https://www.youtube.com/watch?v=8OM_eqRAsMM](https://www.youtube.com/watch?v=8OM_eqRAsMM) <br>
[https://develike.com/en/articles/configuring-apache-to-support-php-fpm-on-debian-ubuntu](https://develike.com/en/articles/configuring-apache-to-support-php-fpm-on-debian-ubuntu) <br>
[https://helgeklein.com/blog/2018/11/enabling-http-2-in-apache-on-ubuntu-18-04/](https://helgeklein.com/blog/2018/11/enabling-http-2-in-apache-on-ubuntu-18-04/) <br>

This is only available on Apache2.4.17 and above. <br>
It will only work on Ubuntu 16.04 and above. 
<br><br>
1 . First check the apache version
```bash
apache2 -v  
```
2 . If need to upgrade do the following
```bash
sudo add-apt-repository ppa:ondrej/apache2
sudo apt-get update
sudo apt-get install apache2 -y
``` 
3 . Now you can enable http2 mod
```bash
sudo a2enmod http2
```
4 . And put this directive in your sites-available/000-default.conf file 
```bash
Protocols h2 http/1.1
```  
5 . Restart apache
```dockerfile
sudo service apache2 restart
```