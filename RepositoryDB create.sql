create table FactInvoiceHeader (
	invoicenumber int primary key identity(10000, 1),
	customer_id int,
	invoicedate date,
	duedate date
);
create table FactInvoicesRow (
	invoicenumber int,
	rownumber int,
	amount decimal(6,3),
	cost decimal(6,3),
	contracttype_id int,
	contract_id int
	);
create table DimCountry (
	id int,
	countryname varchar (45)
);
create table DimCustomer (
	id int,
	customername varchar(200),
	country_id int
);
create table DimContractType (
	id int,
	name varchar(45)
);
create table DimContract (
	id int,
	startdate date,
	enddate date,
	interval int,
	customer_id int,
	contracttype_id int,
	fixedprice decimal(6,3)
);