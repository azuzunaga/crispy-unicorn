# Crispy Unicorn
Built using Laravel PHP and Ember.js

## Schema
### Users
column name | data type | details
-|-|-
id | integer | not null, primary key
firstname | string | not null
lastname | string | not null
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
