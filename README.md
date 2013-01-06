## wordpress-heroku

A very minimal wordpress distribution for deployment to heroku.

## Installation

* Clone the repository. Create your heroku app and add the heroku remote - both beyond the scope of this README.
* Add the cleardb heroku addon to get mysql. This repo assumes the mysql connection string lives in CLEARDB_DATABASE_URL - you can easily change this, of course.
* Generate the keys/salts via: ./bin/create_heroku_auth_key_config.sh - this will emit the necessary heroku config directives that create the keys/salts picked up by wp-config.php. Review and run the command create_heroku_auth_key_config emits to create the keys.
* Push to the heroku remote. You should now be able to visit your heroku URL and configure the application.

## Media and changes to files

You can't host ephemeral files on heroku (and you can't update wordpress through heroku, either). That means you must update the wordpress core and plugins locally and then push to the heroku remote to deploy.

Media has to be hosted somewhere else - fortunately this is fairly easy via the "WP Read-only" plugin.

* Create an s3 bucket to hold your files.
* Log in to your site.
* Activate the "WP Read-only" plugin. Configure it and add your s3 key, secret, and bucket values.
* Test media uploads by visiting the library and uploading a file. 


