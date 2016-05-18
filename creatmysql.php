<?php 
require_once "conn.php";


$sql = "CREATE TABLE Persons 
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";

mysql_query($sql,$con);


$sql1 = "CREATE TABLE shopping
(
shoppingID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(shoppingID),
name varchar(15),
price varchar(15),
ver varchar(20),
remark varchar(60)
)";

mysql_query($sql1,$con);

?>