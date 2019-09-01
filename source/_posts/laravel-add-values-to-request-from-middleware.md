---
extends: _layouts.post
section: content
title: Laravel - How to add values to request array from middleware 
date: 1970-01-01
description: Laravel - How to add values to request array from middleware
cover_image: 
---

[https://laraveldaily.com/how-to-artificially-add-values-to-request-array/](https://laraveldaily.com/how-to-artificially-add-values-to-request-array/)
<br><br>
Middleware file:
```php
$request->request->add(['user' => $user]);
```

Controller file:
```php
$name = $request->user->name;
```
<br>
**Example:** 
<br>
<br>
Middleware file:
```php
class MyMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = User::whereToken($request->user_token)->first();

        if (is_null($user)) throw new InvalidUserTokenException();

        $request->request->add(['user' => $user]);

        return $next($request);
    }
}
```

Controller file:
```php
class MyController extends Controller
{
    public function __construct()
    {
        $this->middleware('mymiddleware');
    }

    public function store(Request $request)
    {
        return $request->user;
    }
}
```
