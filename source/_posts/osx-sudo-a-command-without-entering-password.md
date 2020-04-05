---
extends: _layouts.post
section: content
title: OSX - Sudo a command without entering the password
date: 1970-01-01
description: OSX - Sudo a command without entering the password
cover_image: 
---

[https://superuser.com/questions/67765/sudo-with-password-in-one-command-line](https://superuser.com/questions/67765/sudo-with-password-in-one-command-line)
<br><br>
```bash
$echo <password> | sudo -S <command>
```