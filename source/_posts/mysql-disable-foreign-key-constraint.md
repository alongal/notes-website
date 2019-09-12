---
extends: _layouts.post
section: content
title: How to temporarily disable a foreign key constraint in MySQL?
date: 1970-01-01
description: How to temporarily disable a foreign key constraint in MySQL?
cover_image: 
---

[https://stackoverflow.com/questions/15501673/how-to-temporarily-disable-a-foreign-key-constraint-in-mysql](https://stackoverflow.com/questions/15501673/how-to-temporarily-disable-a-foreign-key-constraint-in-mysql)
<br><br>
Make sure you have the ngrok file in your `/usr/local/bin` directory
```mysql
SET FOREIGN_KEY_CHECKS=0;
```
```mysql
SET FOREIGN_KEY_CHECKS=1;
```