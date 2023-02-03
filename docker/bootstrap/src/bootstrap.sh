#!/bin/sh

echo "This is yet another test"

php maintenance/install.php\
 --dbname="${MYSQL_SCHEMA}"\
 --dbserver="${MYSQL_HOST}"\
 --installdbuser=root\
 --installdbpass="${MYSQL_ROOT_PASSWORD}"\
 --dbuser="${MYSQL_USER}"\
 --dbpass="${MYSQL_PASSWORD}"\
 --server="${SERVER_URL}"\
 --scriptpath="${SERVER_PATH}"\
 --lang="${WIKI_LANGUAGE}"\
 --pass="${WIKI_ADMIN_PASSWORD}"\
 "${WIKI_TITLE}"\
 "${WIKI_ADMIN_USERNAME}"

sleep 3600