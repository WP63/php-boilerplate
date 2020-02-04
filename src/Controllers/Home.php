<?php
namespace App\Controllers;

use App\Controller;

class Home extends Controller {
  public function main() {
    $text = "Hello World";

    return $this->render('home', [
      'text' => $text,
    ]);
  }
}
