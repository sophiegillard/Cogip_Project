# Namespace in your PHP project

Namespaces are qualifiers that solve two different problems:

- They allow for better organization by grouping classes that work together to perform a task
- They allow the same name to be used for more than one class
For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.

Sources: [https://www.w3schools.com/php/php_namespaces.asp](https://www.w3schools.com/php/php_namespaces.asp)


## Declaring a namespace

```php 
namespace App\Controller 

class InvoiceController extends Controller  
{
    //
}
```

### Using a namespace

```php 
use App\Controller\InvoiceController;

$invoice = new InvoiceController();
```

### How to install namespacing in your project?

```
composer init
```

Locate your composer.json and update it 

```json 
"autoload": {
        "psr-4": {
            "App\\": "src/" // You can change this line
        }
    },
```

It means, that all the files located in the src folder, will start with the **App\\** namespace. Now, if you have subfolders, like for example, **Controllers**, your namespace in this file, will be **App\\Controller**.
