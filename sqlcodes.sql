Create database ireport;
use ireport;
CREATE TABLE `users` (
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL
);

CREATE TABLE `ireports` (
`Location` varchar(100) NOT NULL primary key,
  `Vehicle_Type` varchar(100) NOT NULL,
  `Plate_Number` varchar(100) NOT NULL ,
`Description` text NOT NULL,
`Report_Date` timestamp NOT NULL
);

create table admin (
  email varchar (100),
  password varchar(100)
  );
  
  insert into admin VALUES ('admin@ireport.com','admin12345')
  
  