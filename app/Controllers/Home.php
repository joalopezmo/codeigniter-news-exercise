<?php

namespace App\Controllers;

use App\Models\NoticiasModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new NoticiasModel();
        $noticias['noticias'] = $model->findAll();
        $noticias['header'] = view('template/header');
        $noticias['footer'] = view('template/footer');
        return view('welcome_message', $noticias);
    }

}

