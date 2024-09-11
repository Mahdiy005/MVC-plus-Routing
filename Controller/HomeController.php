<?php
declare(strict_types=1);
namespace App\Controller;

use App\View;

class HomeController
{
  public static function index(): View
  {
    return View::make('index');
  }

  public static function download()
  {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="myfile.pdf"');
    readfile(PATH_STORAGE . 'file ');
  }

  public static function upload()
  {
    echo $_SERVER['REQUEST_METHOD'];
    move_uploaded_file($_FILES['myFile']['tmp_name'], PATH_STORAGE . $_FILES['myFile']['name']);
    header('Location: /php_revision/', true);
  }
}
