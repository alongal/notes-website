---
extends: _layouts.post
section: content
title: How to truncate a table in MySQL? (A lot faster than delete)
date: 1970-01-01
description: How to truncate a table in MySQL? (A lot faster than delete)
cover_image: 
---

[https://tableplus.com/blog/2018/08/mysql-how-to-truncate-all-tables.html](https://tableplus.com/blog/2018/08/mysql-how-to-truncate-all-tables.html)
<br><br>
```sql
TRUNCATE TABLE table1;
```
This is a lot faster than doing `DELETE FROM table1`