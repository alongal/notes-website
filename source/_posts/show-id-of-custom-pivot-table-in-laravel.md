---
extends: _layouts.post
section: content
title: Laravel - How to get the id of custom pivot table
date: 1970-01-01
description: Laravel - How to get the id of custom pivot table
cover_image: 
---

Let's say you have a custom pivot table that is defined this way
```php
lass UserReward extends Pivot
{
    ...
    ...
    ...
}
```
If you simply work with this table you as a model you will realise that the ID of the table was omitted. <br>
To get the ID add the you need to override the `$incrementing` property of the parent Pivot table.
```php
lass UserReward extends Pivot
{
    public $incrementing = true;
    ...
    ...
    ...
}
```