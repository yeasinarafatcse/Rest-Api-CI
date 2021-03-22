<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class ApiDemoController extends RestController
{

    public function __construct()
    {
        parent::__construct();
      
    }

    public function index_get(){
        echo 'This is calling form api';
    }
}

?>