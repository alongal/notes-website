---
extends: _layouts.post
section: content
title: MySql split values to multiple rows using REPLACE and SUBSTRING_INDEX
date: 1970-01-01
description: MySql split values to multiple rows using REPLACE and SUBSTRING_INDEX
cover_image: 
---

[https://stackoverflow.com/questions/17942508/sql-split-values-to-multiple-rows](https://stackoverflow.com/questions/17942508/sql-split-values-to-multiple-rows)
<br><br>
```sql
select * 
from (

select t1.id as user_id, replace (replace (  REPLACE(t1.name, '"', ''), '[', '') , ']', '') as category
from (

select
  users.id,
  SUBSTRING_INDEX(SUBSTRING_INDEX(users.`categories`, ',', numbers.n), ',', -1) name
from
  (select 1 n union all
   select 2 union all select 3 union all
   select 4 union all select 5) numbers INNER JOIN users
  on CHAR_LENGTH(users.`categories`)
     -CHAR_LENGTH(REPLACE(users.`categories`, ',', ''))>=numbers.n-1
order by
  id, n
  
  ) as t1 
    
  ) as t2 
join users on users.id = t2.user_id 
```