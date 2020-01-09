<?php

// This class will load the appropriate dispatcher for the requested url
class Application
{
    protected $page;

    protected $task;

    public function __construct()
    {
        $this->page = Request::param('page', 'login');
        $this->task = Request::param('task', '');
    }

    public function dispatch()
    {
        $filename = BASE_PATH . '/pages/' . $this->page . '.php';

        if (!file_exists($filename))
        {
            throw new Exception("The requested page does not exist", 404);
        }

        require_once $filename;
    }
}
