---
extends: _layouts.post
section: content
title: How to allow PING to my AWS server
date: 1970-01-01
description: How to allow PING to my AWS server
cover_image: 
---

[https://stackoverflow.com/questions/21981796/cannot-ping-aws-ec2-instance](https://stackoverflow.com/questions/21981796/cannot-ping-aws-ec2-instance)
<br><br>
```bash
Add a new EC2 security group inbound rule:
  - Type: Custom ICMP rule
  - Protocol: Echo Request
  - Port: N/A
  - Source: your choice (I would select Anywhere to be able to ping from any machine)
```