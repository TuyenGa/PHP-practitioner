<?php

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
  // ['user' => 'lucas', 'age' => 30]
  extract($data);
  // return $user = 'lucas', $age = 30;

  return require("views/{$name}.view.php");
}
  
function redirect($path) {
  header("Location: /{$path}");
}