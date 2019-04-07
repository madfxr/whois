# WHOIS Lookup Utility for TLD, gTLD, ccTLD & mTLD

A web-based application that works to search WHOIS data in TLD category managed by Internet Assigned Numbers Authority (IANA) such as TLD, gTLD, ccTLD and mTLD

## Requirements
- Git (GitLab & GitHub)
- Nginx
- PHP-FPM
- PHP

## Installation
First, you need to install Git, Nginx, PHP-FPM and PHP on your server and the following commands you can follow:

```
yum update -y
yum install git nginx php php-fpm -y
adduser whois
passwd whois
cd /home/
git clone https://github.com/xnxmx/whois.git
find . -type d -print0 | xargs -0 chmod 0755
find . -type f -print0 | xargs -0 chmod 0644
```
The next step, you have to configure Nginx and PHP-FPM

## Notes
- This application can only be used when Web Server is running
- Make sure you have configured the Web Server
