<?php

namespace App\Controllers;

use Spirit\Structure\Controller;

class UndercoverController extends Controller {

    public function index()
    {
        return $this->view('index.php');
    }

}