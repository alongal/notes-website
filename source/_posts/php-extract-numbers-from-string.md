---
extends: _layouts.post
section: content
title: PHP - Extract numbers from string
date: 1970-01-01
description: PHP - Extract numbers from string
cover_image: 
---

[https://stackoverflow.com/questions/6278296/extract-numbers-from-a-string](https://stackoverflow.com/questions/6278296/extract-numbers-from-a-string)
<br><br>
String example: `~8500~TOTALTOPAY`<br>
Using regex
```php
preg_match('/\d+/', '~8500~TOTALTOPAY', $matches);
$number = $matches[0];
```
Or, if you don't want to use regex
```php
$number = intVal(filter_var('~8500~TOTALTOPAY', FILTER_SANITIZE_NUMBER_INT));
```