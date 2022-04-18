<?php
namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\NoticiasModel;
class Noticias extends BaseController
{
    public function index()
    {
        $model = new NoticiasModel();
        $noticias['noticias'] = $model->findAll();
        return view('noticias/noticias', $noticias);
    }
}
