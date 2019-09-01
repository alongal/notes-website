---
extends: _layouts.post
section: content
title: Laravel - Check whether password is correct or not in Laravel
date: 1970-01-01
description: Laravel - Check whether password is correct or not in Laravel
cover_image: 
---

[https://stackoverflow.com/questions/38518543/check-whether-password-is-correct-or-not-in-laravel](https://stackoverflow.com/questions/38518543/check-whether-password-is-correct-or-not-in-laravel)
<br><br>
There are couple of ways:<br><br>
Out of the container
```php
$user = User::find($id);
$hasher = app('hash');
if ($hasher->check('passwordToCheck', $user->password)) {
    // Success
}
```
Using the Facade
```php
$user = User::find($id);
if (Hash::check('passwordToCheck', $user->password)) {
    // Success
}
```