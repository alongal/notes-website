---
extends: _layouts.post
section: content
title: Unix - How do erase the contents of a file but keep the file intact
date: 1970-01-01
description: Unix - How do erase the contents of a file but keep the file intact
cover_image: 
---

[http://superuser.com/questions/218214/how-do-erase-the-contents-of-a-error-log-file-but-keep-the-file-intact](http://superuser.com/questions/218214/how-do-erase-the-contents-of-a-error-log-file-but-keep-the-file-intact)
<br><br>
```bash
truncate -s0 file_name
```