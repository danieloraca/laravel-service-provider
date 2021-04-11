<?php
declare(strict_types=1);

namespace App\Library\Services;

use App\Library\Services\Contracts\CustomServiceInterface;

class DemoOne implements CustomServiceInterface
{
    public function doSomethingUseful()
    {
        return 'Something to test a service provider...';
    }
}
