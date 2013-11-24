# Setup

### Create skiresort subdirectory

Create a subdir with the name of the skiresort in `/httpdocs/files/apps`
on the ftp host:

    /httpdocs/files/apps/tanigawadake

### Deploy app

Upload the cakephp skiresort_app_backend app into this subfolder

    /httpdocs/files/apps/tanigawadake/app
    ├── Config
    ├── Console
    ├── Controller
    ├── Locale
    ├── Model
    ├── Plugin
    ├── Test
    ├── Vendor
    ├── View
    ├── tmp
    └── webroot

e.g. with git ftp push [1]

    git ftp push -u <ftp-user> -p <ftp-pw> - ftp://<ftp-host>/httpdocs/files/apps/tanigawadake/app

### Database setup

* Create new database resort_app_\<resort\> (e.g.  resort_app_tanigawadake)
* Run `schema.sql` to create tables (`Config/Schema/schema.sql`)
* Copy `database.php.default` to `database.php` and edit the necessary fields.

### Test application and Create User

* Open the URL in your browser `http://\<host\>/files/apps/\<resort\>/app`

e.g. http://winterlife.com/files/apps/tanigawadake/app

Go to the Users tab and create a new user.

The events can now be accessed via `http://\<host\>/files/apps/\<resort\>/app/events.xml`

e.g. http://winterlife.com/files/apps/tanigawadake/app/events.xml

### Legacy URL Support

For skiresorts where the app expects the events xml file to be located
at

    http://winterlife.com/files/apps/<resort>/xml/trpevents.xml

add a rewrite rule for the existing xml file location in a .htaccess
file in the resort directory:

    # /httpdocs/files/apps/<resort>/.htaccess
    <IfModule mod_rewrite.c>
        RewriteEngine on
        RewriteRule xml/trpevents.xml app/webroot/index.php/events.xml [L]
    </IfModule>

# Development

Use cake to run a development server

    ./Console/cake server -p 3000

The following url's are then available:

    # Admin interface
    http://localhost:3000/
    # Events XML route
    http://localhost:3000/events.xml

[1] https://github.com/resmo/git-ftp
