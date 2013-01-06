#!/bin/bash

KEYS='AUTH_KEY SECURE_AUTH_KEY LOGGED_IN_KEY NONCE_KEY AUTH_SALT SECURE_AUTH_SALT LOGGED_IN_SALT NONCE_SALT'

OUTPUT='heroku config:set '
KEY_OUTPUT=''

for KEY in $KEYS
do
  KEY_VALUE=`< /dev/urandom tr -dc A-Za-z0-9_ | head -c64`
  KEY_OUTPUT="$KEY_OUTPUT WP_$KEY='$KEY_VALUE'"
done

echo -n "$OUTPUT $KEY_OUTPUT"
