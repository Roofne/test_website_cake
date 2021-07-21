<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

class TesteursController extends AppController
{
  /*
  Pages Principales permettant de changer les options
  */
  public function index() {
    Configure::load('app_local');
    $this->set('config', Configure::read('Datasources.default'));
    $this->set('config_2', Configure::read('Datasources.test'));
  }
}
