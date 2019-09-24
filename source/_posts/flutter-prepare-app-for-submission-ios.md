---
extends: _layouts.post
section: content
title: Flutter - Prepare app for submission for iOS
date: 1970-01-01
description: Flutter - Prepare app for submission for iOS
cover_image: 
---

```bash
1. flutter build ios --release
2. open ios/Runner.xcworkspace
3. Check that the Display name, Version, Build are correct
4. Check that the Signing release key is correct
5. Select Product/Clean Build Folder
6. Select Product/Archive
```