<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;
class BaseController{
    protected function view($viewfile, $data = []){
        $blade = new Blade('./app/views', './storage');
        echo $blade->make($viewfile, $data)->render();
    }
}
?>