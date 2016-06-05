<?php
namespace Modules\App\Controller;

use \View;

class Home extends \Controller
{

    public function welcome()
    {
        return View::make('welcome');
    }

}
