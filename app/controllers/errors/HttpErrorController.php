<?php

namespace App\Controllers\Errors;

use App\Core\Controller;

class HttpErrorController extends Controller
{
    public function Aunauthorized()
    {
        Http_response_code(403);

        $this->view('errors/403');
    }

    public function NotFound()
    {
        Http_response_code(404);

        $this->view('errors/404');
    }

    public function InternalServerError()
    {
        Http_response_code(500);

        $this->view('errors/500');
    }
}
