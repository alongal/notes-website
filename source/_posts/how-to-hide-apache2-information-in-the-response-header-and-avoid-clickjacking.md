---
extends: _layouts.post
section: content
title: How to hide Apache2 information in the response header and avoid Clickjacking
date: 1970-01-01
description: How to hide Apache2 information in the response header and avoid Clickjacking
cover_image: 
---

[https://blog.insiderattack.net/apache-security-configuring-secure-response-headers-e8a83b72ce5e](https://blog.insiderattack.net/apache-security-configuring-secure-response-headers-e8a83b72ce5e)
<br><br>
In order to hide Apache2 information on the web request response header (information such as the version of Apache2 and the version of the operating system), add these lines at the bottom of `/etc/apache2/apache2.conf` file
```
ServerTokens ProductOnly
ServerSignature Off
```

To avoid Clickjacking you can add these lines also to the `/etc/apache2/apache2.conf` file
```
Header set X-Frame-Options SAMEORIGIN
Header set X-XSS-Protection 1;mode=block
Header set X-Content-Type-Options nosniff
```
The most important line is the this one `Header set X-Frame-Options SAMEORIGIN`. It will not allow your site to be included inside of an iFrame, unless it comes from your domain. 