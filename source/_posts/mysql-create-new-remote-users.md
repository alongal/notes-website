---
extends: _layouts.post
section: content
title: MySQL - Allow all remote connections, MySQL - (readonly and admin)
date: 1970-01-01
description: MySQL - Allow all remote connections, MySQL - (readonly and admin)
cover_image: 
---

[http://stackoverflow.com/questions/10236000/allow-all-remote-connections-mysql](http://stackoverflow.com/questions/10236000/allow-all-remote-connections-mysql)
<br><br>
Important Note:<br>
You CAN’T grant permissions if you are not logged in as localhost.<br> 
It will give you an error such as: `Mysql - Access denied for user 'root'@'x.x.x.x'` <br>
If you want to do it remotely you MUST login using the SSH option. That will make you log in as the localhost. <br>
<br>
To Grant ALL privileges to remote user **(NOT RECOMMENDED. DON'T DO IT)** 
```mysql
GRANT ALL ON *.* to user@'%' IDENTIFIED BY 'password’;
``` 
To See all database users
```mysql
SELECT * FROM mysql.user;
```
To Drop a user
```mysql
DROP USER 'root'@'%';
```
To create new remote user with the name `alon` and password `123456`
```mysql
CREATE USER 'alon'@'%' IDENTIFIED BY '123456';
```
To grant root privileges to a user from a specific ip address
```mysql
GRANT ALL ON *.* to 'root'@'110.140.194.8' IDENTIFIED BY '123456';
```
HOW TO GRANT READ ONLY PRIVILEGES TO USER <br>
[http://serverfault.com/questions/115950/how-do-i-change-the-privileges-for-mysql-user-that-is-already-created](http://serverfault.com/questions/115950/how-do-i-change-the-privileges-for-mysql-user-that-is-already-created)
```mysql
revoke all privileges on *.* from 'user'@'host';
grant SELECT ON `db_name`.* TO 'user'@'host';
flush privileges;
```