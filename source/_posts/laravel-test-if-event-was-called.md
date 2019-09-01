---
extends: _layouts.post
section: content
title: Laravel - Test if event was called/dispatched
date: 1970-01-01
description: Laravel - Test if event was called/dispatched
cover_image: 
---

[https://laravel.com/docs/5.8/mocking#event-fake](https://laravel.com/docs/5.8/mocking#event-fake)
<br><br>
To test if event was called use the `Event::fake()` function.<br>
Also use it to prevent the event from continue running during tests and 
execute the event/listener code. 
```php
use Illuminate\Support\Facades\Event;
.
.
Event::fake();
.
.
Event::assertDispatched(ReceiptUploaded::class);
```