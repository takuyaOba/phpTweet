# DB設計



## users Table


| Field             | Type             | Null | Key | Default | Extra          |
|-------------------|------------------|------|-----|---------|----------------|
| id                | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| name              | varchar(191)     | NO   |     | NULL    |                |
| email             | varchar(191)     | NO   | UNI | NULL    |                |
| email_verified_at | timestamp        | YES  |     | NULL    |                |
| password          | varchar(191)     | NO   |     | NULL    |                |
| remember_token    | varchar(100)     | YES  |     | NULL    |                |
| created_at        | timestamp        | YES  |     | NULL    |                |
| updated_at        | timestamp        | YES  |     | NULL    |                |



## password_resets

| Field      | Type         | Null | Key | Default | Extra |
|-----------+--------------+------+-----+---------+-------+
| email      | varchar(191) | NO   | MUL | NULL    |       |
| token      | varchar(191) | NO   |     | NULL    |       |
| created_at | timestamp    | YES  |     | NULL    |       |


## books Table

| Field      | Type             | Null | Key | Default | Extra          |
|-----------|------------------|------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| name       | varchar(50)      | NO   |     | NULL    |                |
| price      | int(11)          | NO   |     | NULL    |                |
| author     | varchar(50)      | YES  |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
| user_id    | int(10) unsigned | NO   | MUL | NULL    |                |




