<?php

namespace App\Tool;
use APF\Tool\log as base_log;

class Log extends base_log
{
    public function log($level, $message, array $context = array())
    {
        file_put_contents(
            LOG_PATH . "/" . APP_NAME . "/" . $level . '/' . date('Y-m-d') . '.log',
            $message,
            FILE_APPEND
        );
    }
}