<?php

class Controller
{
    public function view($view)
    {
        $viewFile = __DIR__ . '/../views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            throw new Exception("View file not found: " . $viewFile);
        }

        require_once $viewFile;
    }
}
