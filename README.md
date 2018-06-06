# Crispy Unicorn
Built using Laravel PHP and Ember.js

## Summary
* Lavarel Homestead running on Vagrant Box
* Backend API routes completed, frontend main page completed
* Servers have not been integrated yet, app is accessible through two addresses: rainbowconnection.com and localhost:4200

## Decisions made
The first major decision was on how to store the bi-directional data. In order to simplify database seeding it was decided to store each relationship only once, and to avoid duplicates the relationship was ordered from smaller to bigger.

Initially the API routes where configured so that each user would have all of it's connections served, however, since Ember.js also uses models the API data was modified so that the associations are created in the frontend.

## Launch Instructions
* Clone project
* Run `vagrant up`
* Create mysql database `rainbow` via GUI (Sequel Pro) or via command line:
  * `vagrant ssh` or `homestead ssh` depending on how you SSH into Homestead
  * Connect to MySQL `mysql -uhomestead -p`
  * Enter `secret` (Homestead's default MySQL password)
  * Enter command `CREATE DATABASE rainbow`;

### Installing watchman on vagrant box
```
# checkout, compile & install
git clone https://github.com/facebook/watchman.git
cd watchman/
git checkout v4.9.0
sudo apt-get install -y autoconf automake build-essential python-dev libssl-dev libtool pkg-config
./autogen.sh
./configure
make
sudo make install
```
## Schema
### Users
column name | data type | details
-|-|-
id | integer | not null, primary key
first_name | string | not null
last_name | string | not null
fav_color_id | integer | not null, foreign key, references colors table

### Colors
column name | data type | details
-|-|-
id | integer | not null, primary key
color_name | string |
color_code | string | not null

### Connections
column name | data type | details
-|-|-
id | integer | not null, primary key
smaller_id | integer | not null, foreign key, references users table
bigger_id | integer | not null, foreign key, references users table
When creating new connections the smallest user id out of the two users will be used to establish the relationship. When deleting connections, the user ids will be sorted by size and then the database will be queried.
