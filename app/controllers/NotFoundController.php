<?php
require_once __DIR__ . '/../controllers/NotFoundController.php';

class NotFoundController extends Controller
{
    public function index()
    {
        Http_response_code(404);

        $this->view('404/404');
    }
}
