---
extends: _layouts.post
section: content
title: How to Change MySQL Password Policy Level
date: 1970-01-01
description: How to Change MySQL Password Policy Level
cover_image: 
---

[https://tecadmin.net/change-mysql-password-policy-level/](https://tecadmin.net/change-mysql-password-policy-level/)
<br><br>
While changing the password, I got the error: **ERROR 1819 (HY000): Your password does not satisfy the current policy requirements**
```mysql
mysql> SHOW VARIABLES LIKE 'validate_password%';
 
+--------------------------------------+--------+
| Variable_name                        | Value  |
+--------------------------------------+--------+
| validate_password_check_user_name    | OFF    |
| validate_password_dictionary_file    |        |
| validate_password_length             | 8      |
| validate_password_mixed_case_count   | 1      |
| validate_password_number_count       | 1      |
| validate_password_policy             | MEDIUM |
| validate_password_special_char_count | 1      |
+--------------------------------------+--------+
7 rows in set (0.06 sec)
```
The default level is MEDIUM, we can change it to LOW by using the below query. The LOW level required only password’s length to min 8 characters.
```mysql
mysql> SET GLOBAL validate_password_policy=LOW;
 
Query OK, 0 rows affected (0.02 sec)
```
To make this setting permanent edit MySQL configuration (my.cnf) file and add below settings.
```mysql
[mysqld]
validate_password_policy=LOW
```