---
extends: _layouts.post
section: content
title: Laravel - create event and listener
date: 1970-01-01
description: Laravel - create event and listener
cover_image: 
---

[https://medium.com/@InaniT0/laravels-events-and-listeners-are-just-kids-game-e0de15a19d9a](https://medium.com/@InaniT0/laravels-events-and-listeners-are-just-kids-game-e0de15a19d9a)
<br><br>
Laravel events has 3 parts to it: `Event`, `Listener` and the `EventServiceProvider` that defines them.<br><br>
Create an event:
```bash
php artisan make:event ReceiptUploaded
```
<br><br>
Create a listener to this event
```bash
php artisan make:listener ContinueWithReceiptProcessing --event=ReceiptUploaded
```
<br><br>
Glue them together in `App\Providers\EventServiceProvider`
```php
class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ReceiptUploaded::class => [
            ContinueWithReceiptProcessing::class,
        ],
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
```