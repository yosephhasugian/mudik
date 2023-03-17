[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=plastic)](https://opensource.org/licenses/MIT)

[![Poweredby: CodeIgniter](https://img.shields.io/badge/CodeIgniter-v3.1.10-lightgrey.svg?style=plastic&logo=codeigniter&logoColor=white&labelColor=orange)](https://codeigniter.com/) [![Poweredby: PHP](https://img.shields.io/badge/php-%3E=5.6-lightgrey.svg?style=plastic&logo=php&logoColor=white&labelColor=8892BF)](http://www.php.net/) [![Poweredby: MySQL](https://img.shields.io/badge/MySQL-%3E=5.7-lightgrey.svg?style=plastic&logo=mysql&logoColor=white&labelColor=0074a3)](https://www.mysql.com)

# Example PHP project for Basic CRUD operations
I did not write the code for this example, but simply used one that I found from a web search so I won't take credit for it. You can find the link to the original page below in References. I found that by following the instructions of the original article, there were extra steps needed to taken for the project to work. You can see what these are from commit [*95a77f2*](https://github.com/t12ung/ci3_crud_example/commit/95a77f228868434322757720c38c8545211886df).

### Additional Set-Up
##### 1. Hostname
You need to modify the file `application/config/config.php` to whatever your webserver is setup as. For example:

`$config['base_url'] = 'http://localhost/';`

##### 2. Database
Modify `application/config/database.php` to define your MySQL server details.

```
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'database' => 'codeigniter', # this is the database name used in the .sql file for set up
```

In the setup directory, there is a `.sql` which you can run on your mysql server to create the database and table.

##### CodeIgniter
... is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.

##### What is CRUD?
Create / Read / Update / Delete are the four basic operations on Data.

### References
<a href="https://itsolutionstuff.com/post/codeigniter-3-basic-crud-application-with-mysql-example-with-demoexample.html" target="_blank">Codeigniter 3 - Basic CRUD application with MySQL Example with Demo</a>

# Repository-Baru
