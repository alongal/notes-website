---
extends: _layouts.post
section: content
title: Set Laravel's Auth user
date: 1970-01-01
description: Set Laravel's Auth user
cover_image: 
---

[https://stackoverflow.com/questions/24563134/set-laravels-auth-user](https://stackoverflow.com/questions/24563134/set-laravels-auth-user)
<br><br>
```php
$user = User::find(1);
Auth::login($user);
```