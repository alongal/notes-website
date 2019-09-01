---
extends: _layouts.post
section: content
title: Find UNIX epoch time from command line
date: 1970-01-01
description: Find UNIX epoch time from command line
cover_image: 
---

[https://stackoverflow.com/questions/1362570/find-out-the-time-since-unix-epoch-for-a-certain-date-time](https://stackoverflow.com/questions/1362570/find-out-the-time-since-unix-epoch-for-a-certain-date-time)
<br><br>
```bash
date +%s
```
<br><br>
If you want to copy to memory use `pbcopy`
```bash
date +%s | pbcopy
```