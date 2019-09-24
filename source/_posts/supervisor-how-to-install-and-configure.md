---
extends: _layouts.post
section: content
title: Supervisor - How to install and configure on Ubuntu
date: 1970-01-01
description: Supervisor - How to install and configure on Ubuntu
cover_image: 
---

[https://www.digitalocean.com/community/tutorials/how-to-install-and-manage-supervisor-on-ubuntu-and-debian-vps](https://www.digitalocean.com/community/tutorials/how-to-install-and-manage-supervisor-on-ubuntu-and-debian-vps)
<br><br>
Installation
```bash
sudo apt-get install supervisor
```
Restart
```bash
sudo service supervisor restart
```
Configuration files can be found at **/etc/supervisor/conf.d** for example:
```bash
/etc/supervisor/conf.d/long_script.conf
```
Example of configuration file for a Laravel application
```bash
[program:m_laravel_app_listen_script]
process_name=%(program_name)s_%(process_num)02d
command=php /www/MyLaravelApp/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
stderr_logfile=/var/log/long.err.log
stdout_logfile=/var/log/long.out.log
numprocs = 8
```
When updating one of the script file, need to reread and update supervisor 
```bash
sudo supervisorctl reread
sudo supervisorctl update
```
To check the status run 
```bash
sudo supervisorctl status
```
Or, start the controller and the run **status**
```bash
sudo supervisorctl
``` 
