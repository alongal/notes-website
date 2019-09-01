---
extends: _layouts.post
section: content
title: Give user write access to folder (ubuntu:www-data) / ubuntu / group
date: 1970-01-01
description: Give user write access to folder (ubuntu:www-data) / ubuntu / group
cover_image: 
---

[http://askubuntu.com/questions/402980/give-user-write-access-to-folder](http://askubuntu.com/questions/402980/give-user-write-access-to-folder)
<br><br>
The simplest way is to use `chown`:
```bash
sudo chown -R ubuntu:www-data /www
```
