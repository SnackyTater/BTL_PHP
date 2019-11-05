create database bookstore;
create table book (bookID int not null, bookName varchar(100) not null, gerne varchar(20), author varchar(255), bookDescription varchar(1000), price int not null, primary key(bookID));
create table bill (billID int not null, bookID int, quantity int, customerName varchar(100), customerAddress varchar(255), billDate date, total int, primary key(billID), foreign key(bookID) references book(bookID));
create table user (userID int not null, userName varchar(50) not null, password varchar(20) not null, phone varchar(11), role int, primary key(userID));

