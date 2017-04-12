## PHP / Zend Framework client for Hiboutik API

### Requirements


### Installation




### Features

The module describe the following element from hiboutik

* Attribute => Done
* Brand => Done
* Category => Done
* Customer => Done
* CustomerList => Done
* Event => Done
* InventoryInput => Done
* Item => Done
* NumberOfCustomer => Done
* PaymentType => Done
* Product => Done
* Sale => Done
* Size => Done
* SizeType => Done
* Store => Done
* Supplier => Done
* Tag => Done
* Tax => Done


### Store Services
* GET Store by ID => Done
* LIST Stores => Done


### Products Services
* LIST Products => Done



* LIST Brands
* Create a Brand
* UPDATE a Brand
* LIST Calendar Events by Store ID and Date
* CREATE an Event on a calendar
* DELETE an Event on a calendar
* LIST Categories
* CREATE a Category
* UPDATE a Category
* LIST Products by Category ID
* LIST Customer
* CREATE a Customer
* LIST Customer List
* GET a Customer List by List ID
* CREATE count of Customer for a Shop
* LIST Customer Addresses
* GET Customer details
* LIST Products sold by Customer ID
* UPDATE a Customer Attribute
* LIST Customers Tags
* LIST Tags by Customer ID
* ADD Tags for a Customer By Customer ID
* DELETE Tags for by Customer ID and Tag ID
* LIST Customer by Parameters
* CREATE Inventory Count
* LIST Inventory Inputs
* CREATE an Inventory Input
* GET Inventory Input Details by ID
* ADD Product to an Inventory Input
* LIST Payment Types by Store ID
* LIST Payment due date by Store ID
* LIST Products with Pagination
* CREATE a Product
* UPDATE a Product
* LIST Products sold by Store ID and Date
* UPDATE a Product Attribute
* GET Product detail by ID
* SEARCH Products by string
* SEARCH Products by Category ID
* SEARCH Products by Tax ID
* SEARCH Products by Tag ID
* LIST Products Tags
* ADD Tag to a Product
* Delete Tag from a Product by Tag ID
* LIST Stock available for a Product by Product ID
* LIST Stock Transfer
* GET Stock Transfer detail by Transfer ID
* ADD Product to a Transfer by Transfer ID
* DELETE a Stock Transfer Detail by ID
* LIST Product sold by Store ID and Date
* ADD Comment to a Sale
* CREATE a Sale
* CREATE a Product to a Sale
* GET Detail for a Sale
* LIST Closed sales by Store ID and Date
* UPDATE Date Z for a Sale by Sale ID
* SEARCH Customers by Parameters
* LIST Size by Size Type ID
* LIST Size Type
* LIST Stock available for Warehouse ID by Warehouse ID
* LIST Stock available for Product by Product ID
* LIST Inventory Inputs for a Warehouse by Warehouse ID
* LIST Stock Transfer
* CREATE a Stock Transfer
* GET Stock Transfer Detail by Transfer ID
* ADD Product to a Stock Transfer Detail by Transfer ID
* DELETE a Stock Transfer Detail by ID
* LIST Suppliers
* CREATE a Supplier
* UPDATE a Supplier
* DELETE a Supplier by ID
* LIST Tags for Customers
* GET Customers Tags by Customer ID
* ADD a Tag to a Customer by Customer ID
* DELETE Customer Tag by Tag ID and Customer ID
* LIST Tags for Products
* LIST Tags By Product ID
* ADD a Tag for a Product
* DELETE Tag for a Product
* LIST Products by Tax ID
* LIST Taxes
* CREATE a Time Tracking Check IN for a Card
* CREATE a Time Tracking Check OUT for a Card
* LIST Users
* UPDATE User Password
* LIST Stock Available by Warehouse ID
* LIST Inventory Inputs by Warehouse ID
* LIST Warehouses
* LIST Payment Types By Store ID and Date
* LIST Taxes By Store ID and Date
* LIST Categories By Store ID and Date
* LIST Accounting Accounts By Store ID and Date
* UPDATE Date_z by Sale ID


























* GET /stores
* GET /stores/{id}
* GET /products
* GET /products/{id}

The following access point are still TODO:
* GET /categories
* POST /categories
* PUT /categories
* GET /products/search/category/{category_id}
* GET /customers/
