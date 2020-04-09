---
extends: _layouts.post
section: content
title: Find top folders that take disk space on linux
date: 1970-01-01
description: Find top folders that take disk space on linux
cover_image: 
---

[https://www.tecmint.com/find-top-large-directories-and-files-sizes-in-linux/](https://www.tecmint.com/find-top-large-directories-and-files-sizes-in-linux/)
<br><br>
Navigate to the older that you want to check
```bash
sudo du -hs * | sort -rh | head -10
```