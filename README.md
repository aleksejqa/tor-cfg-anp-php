# Tor cfg

/etc/sudoers.d/admin

Defaults env_keep="VESTA"<br>
Defaults:admin !syslog<br>
Defaults:admin !requiretty<br>
Defaults:root !requiretty<br>

admin   ALL=NOPASSWD:/usr/local/vesta/bin/*<br>
admin   ALL=NOPASSWD:/usr/bin/php<br>
