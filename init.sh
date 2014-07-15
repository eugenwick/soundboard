#!/bin/bash
#initialize Database
mysql -u root << EOF
drop database tsb;
create database tsb;
create table tsb.queue (
	id int NOT NULL AUTO_INCREMENT,
	sound VARCHAR(100),
	PRIMARY KEY (id),
    created DATETIME not null
);
#GRANT ALL ON tsb.* TO tsb@localhost identified by 'deiThie3';
EOF
