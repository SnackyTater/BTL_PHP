create database bookstore
create table book (bookID int not null auto_increment, bookName varchar(100) not null, gerne varchar(20), author varchar(255), bookDescription varchar(255), price int not null, primary key(bookID));
create table bill (billID int not null auto_increment, bookID int, customerName varchar(100), customerAddress varchar(255), billDate date, primary key(billID));
