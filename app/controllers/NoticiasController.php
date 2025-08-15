<?php
require_once __DIR__ . '/../core/Controller.php';

class NoticiasController extends Controller
{
    public function index()
    {
        $this->view('noticias/index');
    }

    public function noticia($idNoticia = null, $secondParam = [])
    {
        $this->view('noticias/noticia', ['idNoticia' => $idNoticia, 'secondParam' => $secondParam]);
    }
}
