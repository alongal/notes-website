---
extends: _layouts.post
section: content
title: Find top folders that take disk space on linux
date: 1970-01-01
description: Find top folders that take disk space on linux
cover_image: 
---

[https://www.tecmint.com/find-top-large-directories-and-files-sizes-in-linux/](https://www.tecmint.com/find-top-large-directories-and-files-sizes-in-linux/)
[https://askubuntu.com/questions/1224/how-do-i-determine-the-total-size-of-a-directory-folder-from-the-command-line](https://askubuntu.com/questions/1224/how-do-i-determine-the-total-size-of-a-directory-folder-from-the-command-line)
<br><br>
Navigate to the older that you want to check
```bash
sudo du -hs * | sort -rh | head -10
```
Recursively listing all files and directories
```bash
du -h --max-depth=1 /path/to/directory
```
