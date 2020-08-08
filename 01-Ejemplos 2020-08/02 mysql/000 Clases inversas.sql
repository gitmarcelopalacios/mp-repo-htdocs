-- Aplicar todo sobre PhpMyAdmin 
-- Clase Algoritmos y Estructuras de Datos II

/* 
SELECCIONE TODAS LA COLUMNAS 
DESDE LA TABLA CLIENTES
*/
SELECT * FROM Customers;

/* 
SELECCIONE TODAS LA COLUMNAS
DESDE LA TABLA PRODUCTOS
*/
SELECT * FROM Products;

/* 
SELECCIONE TODAS LA COLUMNAS
DESDE LA TABLA TRANSPORTISTAS
*/
SELECT * FROM Suppliers;

/* 
SELECCIONE LAS COLUMNAS NOMBRE DE CLIENTE Y CIUDAD
DESDE LA TABLA CLIENTES
*/
SELECT CustomerName, City FROM Customers;

/*
SELECCIONE LA COLUMNA PAIS DESDE LA TABLA CLIENTES
*/
SELECT Country FROM Customers;

/*
seleccione de la tabla clientes 
todos los paises distintos 
ordenado por pais.
*/
SELECT DISTINCT Country FROM Customers ORDER By Country;

/*
contame todas las country distintas que hay en customers
*/
SELECT COUNT(DISTINCT Country) FROM Customers;

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS SEA MEXICO
*/
SELECT * FROM Customers
WHERE Country='Mexico';

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS SEA 1
*/
SELECT * FROM Customers
WHERE CustomerID=1;

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS SEA ALEMANIA 
Y LA CIUDAD SEA BERLIN
*/
SELECT * FROM Customers
WHERE Country='Germany' AND City='Berlin';

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL CIUDAD SEA BERLIN 
O MUNICH
*/
SELECT * FROM Customers
WHERE City='Berlin' OR City='München';

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS SEA ALEMANIA 
O ESPAÑA
*/
SELECT * FROM Customers
WHERE Country='Germany' OR Country='Spain';

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS SEA ALEMANIA 
O ESPAÑA
*/
SELECT * FROM Customers
WHERE NOT Country='Germany';

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS SE ALEMANIA 
Y LAS CIUDADES SEAN BERLIN O MUNICH
*/
SELECT * FROM Customers
WHERE Country='Germany' AND (City='Berlin' OR City='München');

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
DONDE EL PAIS NO SE NI ALEMANIA, NI ESTADOS UNIDOS.
*/
SELECT * FROM Customers
WHERE NOT Country='Germany' AND NOT Country='USA';

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
ORDENADO POR NOMBRE DE PAIS ASCENDENTEMENTE.
*/
SELECT * FROM Customers
ORDER BY Country;

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
ORDENADO POR NOMBRE DE PAIS DESCENDENTEMENTE.
*/
SELECT * FROM Customers
ORDER BY Country DESC;

/*
SELECCIONE TODAS LAS COLUMNAS
DESDE LA TABLA CLIENTES
ORDENADO POR NOMBRE DE PAIS DESCENDENTEMENTE.
*/
SELECT * FROM Customers
ORDER BY Country, CustomerName;

/*
INSERTE EN LA TABLA CLIENTES
DENTRO DE LAS COLUMNAS Nombre Cliente, Nombre Contacto, Direccion, Ciudad, Codigo postal, País
LOS VALORES 'Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway'
*/
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal', 'Jeremías Bertoldi', 'Skagen 21', 'Stavanger', '4006', 'Norway');

/*
INSERTE EN LA TABLA CLIENTES
DENTRO DE LAS COLUMNAS Nombre Cliente, Ciudad, País
LOS VALORES 'Cardinal', 'Stavanger', 'Norway'
*/
INSERT INTO Customers (CustomerName, City, Country)
VALUES ('Lorenzo Tiranti', 'Stavanger', 'Norway');

/*
SELECCION LAS COLUMNAS DE NOMBRE DE CLIENTE, 
NOMBRE DE CONTACTO Y DOMICILIO
DESDE LA TABLA CUSTOMERS
DONDE EL DOMICILIO SEA NULO.
*/
SELECT CustomerName, ContactName, Address
FROM Customers
WHERE Address IS NULL;

/*
SELECCION LAS COLUMNAS DE NOMBRE DE CLIENTE, 
NOMBRE DE CONTACTO Y DOMICILIO
DESDE LA TABLA CUSTOMERS
DONDE EL DOMICILIO NO SEA NULO.
*/
SELECT CustomerName, ContactName, Address
FROM Customers
WHERE Address IS NOT NULL;

/*
ACTUALICE LA TABLA CUSTOMERS
ASIGNELE A NOMBRE DE CONTACTO 'Alfred Schmidt' Y A CIUDAD 'Frankfurt'
DONDE ID DE CLIENTE SEA 1
*/
UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
WHERE CustomerID = 1;

/*
ACTUALICE LA TABLA CUSTOMERS
ASIGNELE A NOMBRE DE CONTACTO 'Juan'
DONDE EL PAIS SEA MEXICO
*/
UPDATE Customers
SET ContactName='Juan'
WHERE Country='Mexico';

/*
ACTUALICE LA TABLA CUSTOMERS
ASIGNELE A NOMBRE DE CONTACTO 'Juan'
A TODOS LOS REGISTROS OJO!
*/
UPDATE Customers
SET ContactName='Juan';

/*
ELIMINE DE LA TABLA CLIENTES
TODOS LOS NOMBRES DE CONTACTOS LLAMADOS 'Alfreds Futterkiste'
*/
DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';


/*
ELIMINE DE LA TABLA CLIENTES
TODOS SUS REGISTROS OJO !!!
*/
DELETE FROM Customers;

/*
SELECCIONE LOS CUATRO PRIMEROS REGISTROS Y TODAS SUS COLUMNAS
DESDE LA TABLA CUSTOMERS

EL TOP SE REEMPLAZA CON LIMIT
EN MYSQL

SELECCIONA TODAS LAS COLUMNAS DESDE LA TABLA
CUSTOMERS Y NOS MUESTRA SOLO LAS 4 PRIMERAS
FILAS SELECCIONADAS.

*/

SELECT * FROM Customers LIMIT 4

/*
SELECCIONE TODAS LAS COMUMNAS
DE LA TABLA CUSTOMERS
MUESTRE SOLO 3 FILAS
*/

SELECT * 
FROM Customers
LIMIT 3;

/*
SELECCIONE TODAS LAS COMUMNAS
DE LA TABLA CUSTOMERS
MUESTRE SOLO 3 FILAS
*/

*** FIJATE EN MYSQL ROWNUM

SELECT * FROM Customers
WHERE ROWNUM <= 3;

SELECT TOP 50 PERCENT * FROM Customers;

SELECT TOP 3 * FROM Customers
WHERE Country='Germany';

**** HASTA ACA


/*
SELECCIONE TODAS LAS COMUMNAS
DE LA TABLA CUSTOMERS
DONDE EL PAIS SEA ALEMANIA
MUESTRE SOLO 3 FILAS
*/

SELECT * 
FROM Customers
WHERE Country='Germany'
LIMIT 3;

*** VER DESPUES

SELECT * FROM Customers
WHERE Country='Germany' AND ROWNUM <= 3;

/*
SELECCIONE EL PRECIO MINIMO
CON EL TITULO PRECIOMINIMO
DE LA TABLA PRODUCTOS
*/

SELECT MIN(Price) AS PrecioMinimo
FROM Products;

SELECT MAX(Price) AS LargestPrice
FROM Products;

SELECT COUNT(ProductID)
FROM Products;

SELECT AVG(Price)
FROM Products;

SELECT SUM(Quantity)
FROM OrderDetails;

SELECT * FROM Customers
WHERE CustomerName LIKE 'a%';

SELECT * FROM Customers
WHERE CustomerName LIKE '%a';

SELECT * FROM Customers
WHERE CustomerName LIKE '%or%';

SELECT * FROM Customers
WHERE CustomerName LIKE '_r%';

SELECT * FROM Customers
WHERE CustomerName LIKE 'a__%';

SELECT * FROM Customers
WHERE ContactName LIKE 'a%o';

SELECT * FROM Customers
WHERE CustomerName NOT LIKE 'a%';

SELECT * FROM Customers
WHERE City LIKE 'ber%';

SELECT * FROM Customers
WHERE City LIKE '%es%';

SELECT * FROM Customers
WHERE City LIKE '_ondon';

SELECT * FROM Customers
WHERE City LIKE 'L_n_on';

SELECT * FROM Customers
WHERE City LIKE '[bsp]%';

SELECT * FROM Customers
WHERE City LIKE '[a-c]%';

SELECT * FROM Customers
WHERE City LIKE '[!bsp]%';

SELECT * FROM Customers
WHERE City NOT LIKE '[bsp]%';

SELECT * FROM Customers
WHERE Country IN ('Germany', 'France', 'UK');

SELECT * FROM Customers
WHERE Country NOT IN ('Germany', 'France', 'UK');

SELECT * FROM Customers
WHERE Country IN (SELECT Country FROM Suppliers);

SELECT * FROM Products
WHERE Price BETWEEN 10 AND 20;

SELECT * FROM Products
WHERE Price NOT BETWEEN 10 AND 20;

SELECT * FROM Products
WHERE Price BETWEEN 10 AND 20
AND CategoryID NOT IN (1,2,3);

SELECT * FROM Products
WHERE ProductName BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'
ORDER BY ProductName;

SELECT * FROM Products
WHERE ProductName BETWEEN "Carnarvon Tigers" AND "Chef Anton's Cajun Seasoning"
ORDER BY ProductName;

SELECT * FROM Products
WHERE ProductName NOT BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'
ORDER BY ProductName;

SELECT * FROM Orders
WHERE OrderDate BETWEEN #01/07/1996# AND #31/07/1996#;

SELECT * FROM Orders
WHERE OrderDate BETWEEN '1996-07-01' AND '1996-07-31';

SELECT CustomerID AS ID, CustomerName AS Customer
FROM Customers;

SELECT CustomerName AS Customer, ContactName AS [Contact Person]
FROM Customers;

SELECT CustomerName, Address + ', ' + PostalCode + ' ' + City + ', ' + Country AS Address
FROM Customers;

SELECT CustomerName, CONCAT(Address,', ',PostalCode,', ',City,', ',Country) AS Address
FROM Customers;

SELECT o.OrderID, o.OrderDate, c.CustomerName
FROM Customers AS c, Orders AS o
WHERE c.CustomerName='Around the Horn' AND c.CustomerID=o.CustomerID;

SELECT Orders.OrderID, Orders.OrderDate, Customers.CustomerName
FROM Customers, Orders
WHERE Customers.CustomerName='Around the Horn' AND Customers.CustomerID=Orders.CustomerID;

SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

SELECT Orders.OrderID, Customers.CustomerName
FROM Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;

SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
FROM ((Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);

SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
ORDER BY Customers.CustomerName;

SELECT Orders.OrderID, Employees.LastName, Employees.FirstName
FROM Orders
RIGHT JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
ORDER BY Orders.OrderID;

SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID
ORDER BY Customers.CustomerName;

SELECT A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.City
FROM Customers A, Customers B
WHERE A.CustomerID <> B.CustomerID
AND A.City = B.City
ORDER BY A.City;

SELECT City FROM Customers
UNION
SELECT City FROM Suppliers
ORDER BY City;

SELECT City FROM Customers
UNION ALL
SELECT City FROM Suppliers
ORDER BY City;

SELECT City, Country FROM Customers
WHERE Country='Germany'
UNION
SELECT City, Country FROM Suppliers
WHERE Country='Germany'
ORDER BY City;

SELECT City, Country FROM Customers
WHERE Country='Germany'
UNION ALL
SELECT City, Country FROM Suppliers
WHERE Country='Germany'
ORDER BY City;

SELECT 'Customer' As Type, ContactName, City, Country
FROM Customers
UNION
SELECT 'Supplier', ContactName, City, Country
FROM Suppliers;

SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country;

SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
ORDER BY COUNT(CustomerID) DESC;

SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
GROUP BY ShipperName;

SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5;

SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5
ORDER BY COUNT(CustomerID) DESC;

SELECT Employees.LastName, COUNT(Orders.OrderID) AS NumberOfOrders
FROM (Orders
INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID)
GROUP BY LastName
HAVING COUNT(Orders.OrderID) > 10;

SELECT Employees.LastName, COUNT(Orders.OrderID) AS NumberOfOrders
FROM Orders
INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
WHERE LastName = 'Davolio' OR LastName = 'Fuller'
GROUP BY LastName
HAVING COUNT(Orders.OrderID) > 25;

SELECT SupplierName
FROM Suppliers
WHERE EXISTS (SELECT ProductName FROM Products WHERE 
Products.SupplierID = Suppliers.supplierID AND Price < 20);

SELECT SupplierName
FROM Suppliers
WHERE EXISTS (SELECT ProductName FROM Products WHERE 
Products.SupplierID = Suppliers.supplierID AND Price = 22);

SELECT ProductName
FROM Products
WHERE ProductID = ANY (SELECT ProductID FROM OrderDetails WHERE Quantity = 10);

SELECT ProductName
FROM Products
WHERE ProductID = ANY (SELECT ProductID FROM OrderDetails WHERE Quantity > 99);

SELECT ProductName
FROM Products
WHERE ProductID = ALL (SELECT ProductID FROM OrderDetails WHERE Quantity = 10);

SELECT * INTO CustomersBackup2017
FROM Customers;

SELECT CustomerName, ContactName INTO CustomersBackup2017
FROM Customers;

SELECT * INTO CustomersGermany
FROM Customers
WHERE Country = 'Germany';

INSERT INTO Customers (CustomerName, City, Country)
SELECT SupplierName, City, Country FROM Suppliers;

INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
SELECT SupplierName, ContactName, Address, City, PostalCode, Country FROM Suppliers;

INSERT INTO Customers (CustomerName, City, Country)
SELECT SupplierName, City, Country FROM Suppliers
WHERE Country='Germany';

SELECT OrderID, Quantity,
CASE
    WHEN Quantity > 30 THEN 'The quantity is greater than 30'
    WHEN Quantity = 30 THEN 'The quantity is 30'
    ELSE 'The quantity is under 30'
END AS QuantityText
FROM OrderDetails;

SELECT CustomerName, City, Country
FROM Customers
ORDER BY
(CASE
    WHEN City IS NULL THEN Country
    ELSE City
END);

CREATE PROCEDURE SelectAllCustomers
AS
SELECT * FROM Customers
GO;

EXEC SelectAllCustomers;

CREATE DATABASE testDB;

DROP DATABASE testDB;

BACKUP DATABASE testDB
TO DISK = 'D:\backups\testDB.bak';

BACKUP DATABASE testDB
TO DISK = 'D:\backups\testDB.bak'
WITH DIFFERENTIAL;

CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);

CREATE TABLE TestTable AS
SELECT customername, contactname
FROM customers;

DROP TABLE Shippers;

ALTER TABLE Customers
ADD Email varchar(255);

ALTER TABLE Customers
DROP COLUMN Email;

ALTER TABLE Persons
ADD DateOfBirth date;

ALTER TABLE Persons
ALTER COLUMN DateOfBirth year;

ALTER TABLE Persons
DROP COLUMN DateOfBirth;

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    Age int
);

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    UNIQUE (ID)
);

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    CONSTRAINT UC_Person UNIQUE (ID,LastName)
);

ALTER TABLE Persons
ADD UNIQUE (ID);

ALTER TABLE Persons
ADD CONSTRAINT UC_Person UNIQUE (ID,LastName);

ALTER TABLE Persons
DROP INDEX UC_Person;

ALTER TABLE Persons
DROP CONSTRAINT UC_Person;

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    PRIMARY KEY (ID)
);

CREATE TABLE Persons (
    ID int NOT NULL PRIMARY KEY,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int
);

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    CONSTRAINT PK_Person PRIMARY KEY (ID,LastName)
);

ALTER TABLE Persons
ADD PRIMARY KEY (ID);

ALTER TABLE Persons
ADD CONSTRAINT PK_Person PRIMARY KEY (ID,LastName);

ALTER TABLE Persons
DROP PRIMARY KEY;

CREATE TABLE Orders (
    OrderID int NOT NULL,
    OrderNumber int NOT NULL,
    PersonID int,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
);

CREATE TABLE Orders (
    OrderID int NOT NULL,
    OrderNumber int NOT NULL,
    PersonID int,
    PRIMARY KEY (OrderID),
    CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID)
    REFERENCES Persons(PersonID)
);

ALTER TABLE Orders
ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

ALTER TABLE Orders
ADD CONSTRAINT FK_PersonOrder
FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

ALTER TABLE Orders
DROP FOREIGN KEY FK_PersonOrder;

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    CHECK (Age>=18)
);

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    City varchar(255),
    CONSTRAINT CHK_Person CHECK (Age>=18 AND City='Sandnes')
);

ALTER TABLE Persons
ADD CHECK (Age>=18);

ALTER TABLE Persons
ADD CONSTRAINT CHK_PersonAge CHECK (Age>=18 AND City='Sandnes');

ALTER TABLE Persons
DROP CHECK CHK_PersonAge;

CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    City varchar(255) DEFAULT 'Sandnes'
);

CREATE TABLE Orders (
    ID int NOT NULL,
    OrderNumber int NOT NULL,
    OrderDate date DEFAULT GETDATE()
);

ALTER TABLE Persons
ALTER City SET DEFAULT 'Sandnes';

ALTER TABLE Persons
ALTER City DROP DEFAULT;

CREATE INDEX idx_lastname
ON Persons (LastName);

CREATE INDEX idx_pname
ON Persons (LastName, FirstName);

ALTER TABLE table_name
DROP INDEX index_name;

CREATE TABLE Persons (
    Personid int NOT NULL AUTO_INCREMENT,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    PRIMARY KEY (Personid)
);

ALTER TABLE Persons AUTO_INCREMENT=100;

INSERT INTO Persons (FirstName,LastName)
VALUES ('Lars','Monsen');

CREATE TABLE Persons (
    Personid int IDENTITY(1,1) PRIMARY KEY,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int
);

INSERT INTO Persons (FirstName,LastName)
VALUES ('Lars','Monsen');

SELECT * FROM Orders WHERE OrderDate='2008-11-11'

SELECT * FROM Orders WHERE OrderDate='2008-11-11'

CREATE VIEW [Brazil Customers] AS
SELECT CustomerName, ContactName
FROM Customers
WHERE Country = 'Brazil';

SELECT * FROM [Brazil Customers];

CREATE VIEW [Products Above Average Price] AS
SELECT ProductName, Price
FROM Products
WHERE Price > (SELECT AVG(Price) FROM Products);

SELECT * FROM [Products Above Average Price];

CREATE OR REPLACE VIEW [Brazil Customers] AS
SELECT CustomerName, ContactName, City
FROM Customers
WHERE Country = 'Brazil';

DROP VIEW [Brazil Customers];
































