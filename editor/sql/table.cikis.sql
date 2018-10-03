-- 
-- Editor SQL for DB table cikis
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `cikis` (
	`id` int(10) NOT NULL auto_increment,
	`order_code` varchar(255),
	`customer_name` varchar(255),
	PRIMARY KEY( `id` )
);