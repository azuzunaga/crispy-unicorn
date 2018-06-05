# Crispy Unicorn
Built using Laravel PHP and Ember.js

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

## Launch Instructions
* Run `vagrant up`
* Create mysql database `rainbow` via GUI (Sequel Pro) or via command line:
  * `vagrant ssh` or `homestead ssh` depending on how you SSH into Homestead
  * Connect to MySQL `mysql -uhomestead -p`
  * Enter `secret` (Homestead's default MySQL password)
  * Enter command `CREATE DATABASE rainbow`;
