---
extends: _layouts.post
section: content
title: How do I change the privileges for MySQL user that is already created?
date: 1970-01-01
description: How do I change the privileges for MySQL user that is already created?
cover_image: 
---

[https://serverfault.com/questions/115950/how-do-i-change-the-privileges-for-mysql-user-that-is-already-created](https://serverfault.com/questions/115950/how-do-i-change-the-privileges-for-mysql-user-that-is-already-created)
<br><br>
To list users:
```mysql
select * from mysql.user;
```
To show privileges:
```mysql
show grants for 'user'@'host';
```
To change privileges, first revoke. Such as:
```mysql
revoke all privileges on *.* from 'user'@'host';
```
Then grant the appropriate privileges as desired:
```mysql
grant SELECT,INSERT,UPDATE,DELETE ON `db`.* TO 'user'@'host';
```
Finally, flush:
```mysql
flush privileges;
```