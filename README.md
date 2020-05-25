# SERVER MANGA READER

## Cấu trúc thư mục.


```javascript
- app // Chứa các thư mục controller, view, routes của project.
-- controllers  // thư mục chứa các file controller
--- AuthController.php
--- ChapterController.php
--- ImagesController.php
--- MangesController.php
--- PagesController.php
--- UsersController.php

-- views // thư mục chứa các file frontend của project

-- routes.php // file định nghĩa router cho project

- core // chứa các thành phần logic như Router, Request, Models, Database

-- database // config database và model của project

--- Connection.php 
--- QueryBuilder.php // Model

-- App.php // file khai báo và định nghĩa các biến cho Global định dạng khai báo App::bind('key', 'value');  định dạng get App::get('key')
-- bootstrap.php // file khai báo các function global của project.
-- Request.php // file xử lý request cho project
-- Router.php // file defind router của project


- dist // chứa các thành phần public như css javascript và images ...
- plugins // chứa thành phần về animation và các icon
- composer.json // setup composer package của php
- config.php // là file config database. có thể config nhiều hơn trong thư mục này
- index.php // file chạy của project

```

1. Cài đặt [Composer](https://getcomposer.org/download/) 

2. `git clone https://github.com/TuyenGa/PHP-practitioner`

3. cd PHP-practitioner

4. composer install

5. php -S localhost:3000
