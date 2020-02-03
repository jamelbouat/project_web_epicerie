
CREATE DATABASE Rennes_Epicerie;

DROP TABLE IF EXISTS admins;
CREATE TABLE admins (
  `adminId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adminLogin` varchar(50) NOT NULL,
  `adminPassword` varchar(400) NOT NULL,
  PRIMARY KEY (`adminId`)
);

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
  `customerId` 	int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customerFirstName` varchar(50) NOT NULL,
  `customerLastName` varchar(50) NOT NULL,
  `customerAddress` varchar(50) NOT NULL,
  `customerCity` varchar(50) NOT NULL,
  `customerPhone` varchar(50) NOT NULL,
  `customerPostalCode` varchar(15) DEFAULT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `customerPassword` varchar(400) NOT NULL,
  PRIMARY KEY (`customerId`)
);

DROP TABLE IF EXISTS products;
CREATE TABLE products (
  `productId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productName` varchar(70) NOT NULL,
  `productScale` enum('kilo','liter','unit'),
  `productPrice` decimal(10,2) NOT NULL,
  `productDescription` text NOT NULL,
  `productImage` varchar(100) NULL,
  `productType` enum('drink','fruit','vegetable','meat','dairy'),
  PRIMARY KEY (`productId`)
);

DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
  `orderId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `orderDate` date NOT NULL,
  `customerId` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`orderId`),
  FOREIGN KEY (`customerId`) REFERENCES customers(`customerId`)
);

DROP TABLE IF EXISTS orderDetails;
CREATE TABLE orderDetails (
  `orderId` int(11) UNSIGNED NOT NULL,
  `productId` int(11) UNSIGNED NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  PRIMARY KEY (`orderId`,`productId`),
  FOREIGN KEY (`orderId`) REFERENCES orders(`orderId`),
  FOREIGN KEY (`productId`) REFERENCES products(`productId`)
);