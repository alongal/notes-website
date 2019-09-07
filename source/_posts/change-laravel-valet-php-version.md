---
extends: _layouts.post
section: content
title: Accessing localhost From Anywhere - with ngrok
date: 1970-01-01
description: Accessing localhost From Anywhere - with ngrok
cover_image: 
---

[https://getgrav.org/blog/macos-mojave-apache-multiple-php-versions](https://getgrav.org/blog/macos-mojave-apache-multiple-php-versions)
[https://stackoverflow.com/questions/40276967/uninstall-laravel-valet](https://stackoverflow.com/questions/40276967/uninstall-laravel-valet)
[https://laravel.com/docs/5.8/valet#installation](https://laravel.com/docs/5.8/valet#installation)
<br><br>
First make sure you have the php version you want to switch to
```bash
brew install php@7.2
brew unlink php@7.1 && brew link --force --overwrite php@7.2
```
Second, make sure you updated valet to the latest version. 
```bash
sudo brew services stop nginx
sudo brew services stop dnsmasq
sudo brew services stop php@7.2
composer global remove laravel/valet
sudo rm -r ~/.valet
rm /usr/local/bin/valet
```
Now you can re-install valet and configure it to the new php 
```bash
composer global require laravel/valet
valet install
valet restart
valet use php@7.2
valet use php
```