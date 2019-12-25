---
extends: _layouts.post
section: content
title: How to get file url from storage drive
date: 1970-01-01
description: How to get file url from storage drive
cover_image: 
---

[https://stackoverflow.com/questions/28964412/how-to-get-file-path-using-storage-facade-in-laravel-5](https://stackoverflow.com/questions/28964412/how-to-get-file-path-using-storage-facade-in-laravel-5)
<br><br>
```php
$url = Storage::disk('s3')->url($filename)
```
`s3` can be replaced with any drive name that you have set up