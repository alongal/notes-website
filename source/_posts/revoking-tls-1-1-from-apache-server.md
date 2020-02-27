---
extends: _layouts.post
section: content
title: Revoke TLS1.0 and TLS1.1 from Apache server
date: 1970-01-01
description: Revoke TLS1.0 and TLS1.1 from Apache server
cover_image: 
---

[https://www.leaderssl.com/news/471-how-to-disable-outdated-versions-of-ssl-tls-in-apache](https://www.leaderssl.com/news/471-how-to-disable-outdated-versions-of-ssl-tls-in-apache)
[https://www.digicert.com/kb/ssl-support/ssl-enabling-perfect-forward-secrecy.htm](https://www.digicert.com/kb/ssl-support/ssl-enabling-perfect-forward-secrecy.htm)
<br><br>
In your `/etc/apache2/mods-available/ssl.conf` file <br>
Comment this line 
```bash
SSLProtocol all -SSLv3
```
And add this line 
```bash
SSLProtocol TLSv1.2
```
Also, uncomment this line within the file
```bash
SSLHonorCipherOrder on
```
In your `/etc/apache2/sites-available/000-default.conf` file <br>
Change every `SSLProtocol all` line to be `SSLProtocol TLSv1.2` <br>
For example
```bash
<VirtualHost *:443>
        ServerName mydomain.com.au

        DocumentRoot /www

        SSLEngine on
        SSLProtocol TLSv1.2
        SSLCACertificateFile /home/ubuntu/security/star_mydomain-bundle.crt
        SSLCertificateFile /home/ubuntu/security/star_mydomain.crt
        SSLCertificateKeyFile /home/ubuntu/security/star_mydomain.key
</VirtualHost>
```
Restart your server with
```bash
sudo service apache2 restart
```

You can test your server security certificate [here](https://www.ssllabs.com/ssltest/analyze). 