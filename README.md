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
* Copy `database.php.sample` to `database.php` and edit the necessary fields.

[1] https://github.com/resmo/git-ftp
