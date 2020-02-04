<?php
namespace App;

use duncan3dc\Laravel\BladeInstance;

abstract class Controller {
  protected $blade;

  public function __construct() {
    $this->blade = new BladeInstance( ABSPATH . 'src/Views', ABSPATH . 'caches/templates');
  }

  protected function render( string $template, array $params ) {
    return $this->blade->render( $template, $params );
  }
}
