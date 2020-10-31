---
extends: _layouts.post
section: content
title: How to list and delete files older than one year in Ubuntu
date: 1970-01-01
description: How to list and delete files older than one year in Ubuntu
cover_image: 
---

[https://askubuntu.com/questions/413529/delete-files-older-than-one-year-on-linux](https://askubuntu.com/questions/413529/delete-files-older-than-one-year-on-linux)
<br><br>
To list the files
```bash
find /path/to/files/ -mtime +365 -exec ls {} \;
```
To delete the files
```bash
find /path/to/files/ -mtime +365 -exec rm {} \;
```