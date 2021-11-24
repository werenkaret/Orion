<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/template/header.php');
        echo view('/template/body.php');
        echo view('/template/footer.php');
    }

    public function shop()
    {
        echo base_url();
        echo view('/template/header.php');
        echo view('/template/shop.php');
        echo view('/template/footer.php');
        
    }
}
