if [ -z $1 ]
then
	destination="/DATA/htdocs/dunecatsnacks-2013"
else
	destination=$1
fi

echo "Deploying site to $destination..."

webuser="www-data"

databaseconfig="protected/config/database.php"
yiiruntime="protected/runtime"

# this is an environment-unique file not in source control
scp $destination/$databaseconfig ./$databaseconfig
chown :$webuser ./$databaseconfig

# this is site-specific runtime logs and data. We don't want to wipe these and they aren't in sourcecontrol
scp -r $destination/$yiiruntime ./$yiiruntime
chown -R :$webuser ./$yiiruntime

rsync -rltv --delete-delay --delete-excluded --delay-updates --force --group --chmod=ug+w,+rx --exclude-from=rsync-ignore ./ $destination

# Remove from repo
rm -rf ./$databaseconfig
rm -rf ./$yiiruntime
