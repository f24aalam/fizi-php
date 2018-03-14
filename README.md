# fizi-php
Some heplfull php classes

## Getting Started

 1. Download or Clone Repository
 2. Unzip The folder and copy unzipped folder to your root directory
 3. Edit the DBConfig.php File (enter server name, database name etc)
 4. Include the required class in your php file and create its object

## Usage

1. Database Connectivity Class
```php
include_once("fizi-php\DatabaseOps.php");
$dbops = new DatabaseOps();

//Store the data in database
$sql = "insert into table_name(column_one,column_two,...) values('value_one','value_two',...)";
$result = $dbops->setData($sql);
if($result){
  echo "Data inserted successfully.";
}
```
2. Validation Class
```php
include_once("fizi-php\Validation.php");
$valid = new Validation();

//result variable contain the trimed data
$result = $valid->getTrimData($data);
```

***Thank You.***
