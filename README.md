# asset_tracking
This is an sandbox project I did, with MVC (Model View Control), and dynamic web content. \
It has bare bones to view a tiny (one table) database of assets. \
There is no CSS

so far, you can:
---
- [x] Query by Asset
- [x] Query by Model
- [x] Query by Building
- [ ] Query by Room
- [ ] Query by Year
- [ ] Query multiple fields at once
- [x] Add assets

Get it up and running in linux in no time!
---
Required packages:
> sudo apt-get install __apache2 php5 php5-mysql mysql-server__

clone it into /var/www/html/
> git clone https://github.com/t4d3/asset_tracking /var/www/html/asset_tracking

Add the acme database into mySQL, add the user, and import the tables
> CREATE DATABASE assets; \
> GRANT ALL on assets.* TO 'assettracker'@'localhost' IDENTIFIED BY 'BSyLffx50SSxitDI'; \
> exit
>
> mysql -u root -p assets < /var/www/html/asset_tracking/sql/database.sql

If apache and mysql is running, you should be good to go!
> sudo service apache2 restart

It should now be viewable at http://localhost/asset_tracking
