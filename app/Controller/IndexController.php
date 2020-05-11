<?php


namespace App\Controller;

use AF\Tool\Config;

class IndexController extends BaseController
{
    public function main()
    {
        $config = Config::get('app');

        return [
            'msg' => 'success',
            'data' => [
                'a' => 1,
                'b' => 2
            ]
        ];
    }
}