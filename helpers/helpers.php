<?php

use PHPFramework\Request;
use PHPFramework\Application;


function app(): Application
{
    return Application::$app;
}


function request(): Request
{
    return app()->request;
}