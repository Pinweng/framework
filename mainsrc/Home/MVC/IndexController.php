<?php 

namespace App\Home\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Home\IndexDatabase;

class IndexController extends AbstractController
{
  protected $indexDatabase;

  public function __construct(IndexDatabase $indexDatabase)
  {
    $this->indexDatabase = $indexDatabase;
  }

  public function home()
  {
    $this->pageload("Home", "home",[]);
  }

}

?>