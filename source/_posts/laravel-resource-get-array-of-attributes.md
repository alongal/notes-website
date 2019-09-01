---
extends: _layouts.post
section: content
title: Laravel - How to get attributes from Resource object. 
date: 1970-01-01
description: Laravel - How to get attributes from Resource object. 
cover_image: 
---

<br><br>
```php
$attributes = (new ConsoleUserResource($this))->toArray($request);
```
Now you can manipulate the attributes array
```php
$attributes['last_trained_at'] = $user->getLastScan();
```