#!/usr/bin/env bash

# To set file permissions to execute:
# git update-index --chmod=+x .platform/hooks/postdeploy/10-install-scheduler.sh
# git ls-files --stage

# Logfile can be found at:  /var/log/eb-hooks.log

echo "10-install-scheduler.sh is running..."

cd /var/app/current/
cat bin/_crontab.txt | crontab
cp bin/*.sh  /opt/
chmod 755 /opt/*.sh
echo "Installed scheduler"
crontab -l

