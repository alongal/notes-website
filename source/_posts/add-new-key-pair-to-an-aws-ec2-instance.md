---
extends: _layouts.post
section: content
title: Add new key pair for an AWS Ec2 instance
date: 1970-01-01
description: Add new key pair for an AWS Ec2 instance
cover_image: 
---

[https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html)
<br><br>
- Create a private key for your instance with AWS Console <br>
- Retrieving the public key for your key pair using this command <br> 

```bash
ssh-keygen -y -f /path_to_key_pair/my-key-pair.pem
```

- Copy the result  <br>
- Access your instance  <br>
- Edit the file `~/.ssh/authorized_keys` and paste this line <br> 
- add the name of the key to the end of the line  <br> 

Example: <br> 

```bash
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQClKsfkNkuSevGj3eYhCe53pcjqP3maAhDFcvBS7O6V
hz2ItxCih+PnDSUaw+WNQn/mZphTk/a/gU8jEzoOWbkM4yxyb/wB96xbiFveSFJuOp/d6RJhJOI0iBXr
lsLnBItntckiJ7FbtxJMXLvvwJryDUilBMTjYtwB+QhYXUMOzce5Pjz5/i8SeJtjnV3iAoG/cQk+0FzZ
qaeJAAHco+CY/5WrUBkrHmFJr6HcXkvJdWPkYQS3xqC0+FmUZofz221CBt5IMucxXPkX4rWi+z7wB3Rb
BQoQzd8v7yeb7OzlPnWOyN0qFU0XA246RA8QFYiCNYwI3f05p6KLxEXAMPLE my-key-pair
```