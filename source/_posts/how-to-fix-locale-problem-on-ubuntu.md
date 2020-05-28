---
extends: _layouts.post
section: content
title: How to fix the LOCALE problem on Ubuntu
date: 1970-01-01
description: How to fix the LOCALE problem on Ubuntu
cover_image: 
---

[https://askubuntu.com/questions/599808/cannot-set-lc-ctype-to-default-locale-no-such-file-or-directory](https://askubuntu.com/questions/599808/cannot-set-lc-ctype-to-default-locale-no-such-file-or-directory)
<br><br>
```bash
locale
export LC_ALL="en_US.UTF-8"
```