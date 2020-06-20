---
extends: _layouts.post
section: content
title: How to create a reverse port tunneling to your personal computer using an EC2 instance
date: 1970-01-01
description: How to create a reverse port tunneling to your personal computer using an EC2 instance
cover_image: 
---

[https://www.tecmint.com/create-ssh-tunneling-port-forwarding-in-linux/](https://www.tecmint.com/create-ssh-tunneling-port-forwarding-in-linux/) <br>
[https://www.maketecheasier.com/reverse-ssh-tunnel-allow-external-connections/](https://www.maketecheasier.com/reverse-ssh-tunnel-allow-external-connections/) <br>
[https://gist.github.com/dapplebeforedawn/6206454](https://gist.github.com/dapplebeforedawn/6206454) <br>
[https://www.youtube.com/watch?v=aOmIqUs0fbY](https://www.youtube.com/watch?v=aOmIqUs0fbY) <br>
[https://www.youtube.com/watch?v=AtuAdk4MwWw](https://www.youtube.com/watch?v=AtuAdk4MwWw) 
<br><br>
Important: make sure your EC2 instance security group allows access to port 10002 
```bash
ssh -R 10002:localhost:80 -i <your-ec2-cert.pem> <username>@<server-ip>
```
For example:
```bash
ssh -R 10002:localhost:80 -i my-cert.pem ubuntu@1.123.55.200
```
** Port doesn't have to be 10002, this is just an example, but whenever port you chose, make sure to open that port on your EC2 instance. 