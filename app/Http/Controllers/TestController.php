<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library\Services\Contracts\CustomServiceInterface;

class TestController extends Controller
{
    public function index(CustomServiceInterface $customServiceInstance)
    {
        //https://code.tutsplus.com/tutorials/how-to-register-use-laravel-service-providers--cms-28966
        echo $customServiceInstance->doSomethingUseful();
    }
}
