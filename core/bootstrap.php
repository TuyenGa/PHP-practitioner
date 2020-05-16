<?php

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

App::bind('conn', Connection::make(App::get('config')['database']));

function view($name, $data = [])
{
  // ['user' => 'lucas', 'age' => 30]
  extract($data);
  // return $user = 'lucas', $age = 30;
  $viewss = explode('.', $name);
  if (count($viewss) < 2) {
    return require("app/views/{$viewss[0]}.view.php");
  }
  return require("app/views/{$viewss[0]}/{$viewss[1]}.view.php");
}
  
function redirect($path) {

  header("Location: /{$path}");

}