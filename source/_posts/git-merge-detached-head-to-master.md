---
extends: _layouts.post
section: content
title: Git - How to merge detached HEAD to master
date: 1970-01-01
description: Git - How to merge detached HEAD to master
cover_image: 
---

[https://stackoverflow.com/questions/7124486/what-to-do-with-commit-made-in-a-detached-head](https://stackoverflow.com/questions/7124486/what-to-do-with-commit-made-in-a-detached-head)
<br><br>
Create a branch where you are, then switch to master and merge it:
```bash
git branch my-temporary-work
git checkout master
git merge my-temporary-work
```