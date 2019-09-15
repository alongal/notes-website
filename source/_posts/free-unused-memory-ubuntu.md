---
extends: _layouts.post
section: content
title: How to Free up Unused Memory in Ubuntu/Linux Mint
date: 1970-01-01
description: How to Free up Unused Memory in Ubuntu/Linux Mint
cover_image: 
---

[http://www.upubuntu.com/2013/01/how-to-free-up-unused-memory-in.html](http://www.upubuntu.com/2013/01/how-to-free-up-unused-memory-in.html)
<br><br>
```bash
sudo sysctl -w vm.drop_caches=3
```
Or
```bash
sudo sync && echo 3 | sudo tee /proc/sys/vm/drop_caches
```
**NOTE:** You can use cron jobs to schedule the commands above to run at specific time intervals.