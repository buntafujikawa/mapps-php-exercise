create table users (
	id int not null auto_increment primary key,
	name varchar(255),
	email varchar(255) unique,
	team enum('blue','red','yellow'),
	score double,
	created datetime
);

select * from users
select count(*) from users;

insert into users (name,email,team,score,created) values
('fujikawa','sugosumadesu@gmail.com','blue',  1.5,'2050-10-08 11:22:33'),
('fujiyama','sugo@gmail.com',        'red',   7.5,'2022-11-28 11:22:33'),
('yamamura','sugosuma@gmail.com',    'yellow',3.5,'2011-09-18 11:22:33'),
('yamakawa','su@gmail.com',          'blue',  4.5,'2010-08-08 11:22:33');

create table posts (
	id int not null primary key auto_increment,
	user_id int not null,
	title varchar(255),
	body text,
	created datetime
);

insert into posts (user_id,title,body,created) values
(1, 'title-1 by fujikawa', 'body-1', '2012-05-19 12:12:12'),
(1, 'title-2 by fujikawa', 'body-2', '2013-06-29 13:12:12'),
(2, 'title-3 by fujiyama', 'body-3', '2014-07-29 14:12:12'),
(3, 'title-4 by yamamura', 'body-4', '2015-08-09 15:12:12');