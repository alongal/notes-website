---
extends: _layouts.post
section: content
title: How to remove the Intellij .idea folder from github repository 
date: 1970-01-01
description: How to remove the Intellij .idea folder from github repository
cover_image: 
---

[https://coderwall.com/p/qaiaog/remove-intellij-folders-from-your-github-repo](https://coderwall.com/p/qaiaog/remove-intellij-folders-from-your-github-repo)
<br><br>
Make sure you have the ngrok file in your `/usr/local/bin` directory
```bash
1. echo '.idea' >> .gitignore
2. git rm -r --cached .idea
3. git add .gitignore
4. git commit -m 'untracking .idea'
5. git push origin master
```