---
extends: _layouts.post
section: content
title: PHP - Check if string contains another string
date: 1970-01-01
description: PHP - Check if string contains another string
cover_image: 
---

[https://stackoverflow.com/questions/4366730/how-do-i-check-if-a-string-contains-a-specific-word](https://stackoverflow.com/questions/4366730/how-do-i-check-if-a-string-contains-a-specific-word)
<br><br>
This will check if the word `are` is included in the sentence `How are you?` 
```php
$a = 'How are you?';

if (strpos($a, 'are') !== false) {
    echo 'true';
}
```