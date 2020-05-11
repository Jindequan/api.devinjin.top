<?php

namespace App\Controller;
use AF\AbstractCenter\AbstractController;
use AF\Common\Request;
use AF\Common\Response;

abstract class BaseController extends AbstractController
{
    protected $params;
    protected $response = [];

    public function handle() {
        $this->beforeHandle();
        $this->response = $this->main();
        $this->afterHandle();
    }

    abstract public function main();

    public function beforeHandle()
    {
        $this->params = Request::getInstance()->getParams();
        //privilege etc.
        /**
         * you can use privilege code / request uri to judge user's access
         */
    }

    public function afterHandle()
    {
        //standard output
        Response::successJson($this->response);
    }
}