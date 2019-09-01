---
extends: _layouts.post
section: content
title: Post JSON with header parameters using Zttp
date: 1970-01-01
description: Post JSON with header parameters using Zttp
cover_image: 
---

[https://github.com/kitetail/zttp](https://github.com/kitetail/zttp)
<br><br>
```php
$url = "https://example.com";
$token = "257f669bf737dacdcf428da50cdb46339a5b2617a523309170d09c42cbb14b56d94a6a2f5fa719e4";
$details = [
    'start_datetime' => '2019-04-01 00:01:00',
    'end_datetime' => '2019-04-30 17:00:00',
    'users' => ['all']
];

$r = Zttp::withOptions(['headers' => [
    'Authorization' => 'Bearer ' . $token,
]])->post($url, $details)->json();
```