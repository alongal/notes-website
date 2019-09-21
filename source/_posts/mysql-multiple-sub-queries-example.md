---
extends: _layouts.post
section: content
title: MySql - Multiple Subqueries example
date: 1970-01-01
description: Multiple Subqueries example
cover_image: 
---

Here is an example of how to use multiple sub-queries to get specific data that is unrelated to one another:
```mysql
select 
(select sum(stamps.amount) as stamps from stamps where stamps.user_id = 33) as stamps,
(select count(`user_reward`.`user_id`) from `user_reward` where user_reward.`redeemed_at` is null and user_reward.`user_id` = 33) as redeemable_rewards,
(select count(notifications.id) from notifications where notifications.`user_id` = 33) as notifications,
(select count(redemptions.`id`) as redeems from `redemptions` join `user_reward` on `user_reward`.id = redemptions.`user_reward_id` where user_reward.`user_id` = 33) redeems,
(select stamps.created_at from stamps where stamps.`user_id` = 33 order by stamps.id desc limit 1) as last_stamp_at
```
Will result 
```mysql
stamps | redeemable_rewards | notifications | redeems | last_stamp_at 
  NULL |                  0 |             0 |       0 |          NULL
```