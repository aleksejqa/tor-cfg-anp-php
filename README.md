# tor-cfg-anp-php



/etc/sudoers.d/admin

 Created by vesta installer
Defaults env_keep="VESTA"
Defaults:admin !syslog
Defaults:admin !requiretty
Defaults:root !requiretty

sudo is limited to vesta scripts
admin   ALL=NOPASSWD:/usr/local/vesta/bin/*
admin   ALL=NOPASSWD:/usr/bin/php
