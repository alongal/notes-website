---
extends: _layouts.post
section: content
title: PHP - Decode Json object into an array instead of an object
date: 1970-01-01
description: PHP - Decode Json object into an array instead of an object
cover_image: 
---

[https://stackoverflow.com/questions/5164404/json-decode-to-array](https://stackoverflow.com/questions/5164404/json-decode-to-array)
<br><br>
```php
json_decode($jsondata, true);
```
Example (in tinker):<br>
```php
>>> $json = '{ "name":"John", "age":30, "car":null }';
=> "{ "name":"John", "age":30, "car":null }"

>>> json_decode($json, true);
=> [
     "name" => "John",
     "age" => 30,
     "car" => null,
   ]

>>> json_decode($json)
=> {#2954
     +"name": "John",
     +"age": 30,
     +"car": null,
   }
>>>
```