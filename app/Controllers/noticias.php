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
        $noticias['header'] = view('template/header');
        $noticias['footer'] = view('template/footer');
        return view('noticias/noticias', $noticias);
    }
    public function crear(){
        $noticias['header'] = view('template/header');
        $noticias['footer'] = view('template/footer');
        return view('noticias/crear', $noticias);
    }
    public function save(){
        $model = new NoticiasModel();
        
        if($imagen=$this->request->getFile('image')){
            $nuevoNombre=$imagen->getRandomName();
            $imagen->move('../public/uploads',$nuevoNombre);
            $noticias=array(
                'title'=>$this->request->getPost('title'),
                'autor'=>$this->request->getPost('autor'),
                'content'=>$this->request->getPost('content'),
                'image'=>$nuevoNombre
            );
            $model->insert($noticias);
        }


        return redirect()->to(base_url('noticias'));
    }
    public function eliminar($id){
        $model = new NoticiasModel();
        $datoNoticia= $model->where('id',$id)->first();
        $rutaImagen='../public/uploads/'.$datoNoticia['image'];
        unlink($rutaImagen);

        $model->delete($id);
        return redirect()->to(base_url('noticias'));
    }
}
