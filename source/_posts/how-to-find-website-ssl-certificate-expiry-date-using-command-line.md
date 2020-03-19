---
extends: _layouts.post
section: content
title: How To Find Website SSL Certificate Expiry Date Using Command Line
date: 1970-01-01
description: How To Find Website SSL Certificate Expiry Date Using Command Line
cover_image: 
---

[https://serverfault.com/questions/661978/displaying-a-remote-ssl-certificate-details-using-cli-tools](https://serverfault.com/questions/661978/displaying-a-remote-ssl-certificate-details-using-cli-tools)
<br><br>
```bash
echo | openssl s_client -showcerts -servername stampme.com -connect stampme.com:443 2>/dev/null | openssl x509 -inform pem -noout -text | grep "Not After"
```