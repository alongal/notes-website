---
extends: _layouts.post
section: content
title: Laravel Query Builder - Sanitising raw queries
date: 1970-01-01
description: Laravel Query Builder - Sanitising raw queries
cover_image: 
---

[https://fideloper.com/laravel-raw-queries](https://fideloper.com/laravel-raw-queries)
<br><br>
To sanitise raw query builders input to avoid SQL injection, use the `bindings` array parameter after your query. 
```php
$query = "
    select *
    from scans 
    where scans.`read_at` is null 
    and TIMESTAMPDIFF(MINUTE, scans.created_at, now()) > 10
    and scans.created_at > :from_date
    order by scans.created_at desc 
";

$result = DB::select(DB::raw($query), ['from_date' => '2019-10-20']);
```
***There is no need to put quotes ("") if you are dealing with strings. The function will take care of it for you***