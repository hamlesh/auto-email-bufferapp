auto-email-bufferapp
====================

Simple set of PHP scripts that enable you to schedule additions to your bufferapp account, using the email to buffer method.

Requirements
============

- php
- Mail.php (http://pear.php.net/package/Mail/)
- Ability to edit/setup CRON jobs

Usage
=====

1. Edit config.php with your info - already setup for gmail, just drop your logins in
2. Copy the example.php to create the message you'd like to schedule to buffer
3. Edit cron to run php /path/to/your/file.php

For pointers around using CRON see http://zxv.me/XAWV8w

I have included linkedin.php. which is my scheduled "Are we connected on Linkedin?" post.

DON'T use this code to spam, the idea behind this is to simplify/automate life, not irritate people.
Be sure to follow the buffer best practise, and keep posts spread out, interesting, and relevant.

As its simple PHP, at some point I may add support for a bank of updates, so linkedin.php would have a 
number of possible messages it could use, and pick one at random.

You can create as many message.php type files as you like, just be sensible when calling them via CRON.

Contact
=======

See hamlesh.com for contact info - for help/pointers ask me on twitter (http://twitter.com/hamlesh)
