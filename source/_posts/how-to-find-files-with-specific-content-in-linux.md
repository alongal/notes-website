---
extends: _layouts.post
section: content
title: How to find/grep files with specific content in Linux?
date: 1970-01-01
description: How to find/grep files with specific content in Linux?
cover_image: 
---

[https://stackoverflow.com/questions/16956810/how-do-i-find-all-files-containing-specific-text-on-linux](https://stackoverflow.com/questions/16956810/how-do-i-find-all-files-containing-specific-text-on-linux)
<br><br>
```bash
grep -rnw '/path/to/somewhere/' -e 'pattern'
```

if you like to search the current folder and all sub folders run the command like this: 
```bash
grep -rnw . -e 'pattern'
```