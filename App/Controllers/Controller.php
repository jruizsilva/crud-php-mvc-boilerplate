<?php

namespace App\Controllers;

class Controller
{
  public function view($view, $data = [])
  {
    extract($data);
    $view = str_replace('.', '/', $view);
    $viewPath = "App/views/content/$view.php";
    if (file_exists($viewPath)) {
      ob_start();
      include($viewPath);
      $content = ob_get_clean();

      return $content;
    } else {
      return "El archivo no existe";
    }
  }

  public function redirect($route)
  {
    header("Location: {$route}");
  }
}
