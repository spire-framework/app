<?php
namespace Modules\App\Controller;

use \View;

class Home extends \Controller
{

    public function home()
    {
        return View::make('home');
    }

}
