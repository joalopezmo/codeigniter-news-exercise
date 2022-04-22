<?php
namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\NoticiasModel;
use CodeIgniter\RESTful\ResourceController;

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
                'category'=>$this->request->getPost('category'),
                'publication_date'=>$this->request->getPost('publication_date'),
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

    public function editar($id){
        $model = new NoticiasModel();
        $noticias['noticia'] = $model->where('id',$id)->first();
        $noticias['header'] = view('template/header');
        $noticias['footer'] = view('template/footer');
        return view('noticias/editar', $noticias);
    }

    public function actualizar(){
        $model = new NoticiasModel();
        $noticias=array(
            'title'=>$this->request->getPost('title'),
            'autor'=>$this->request->getPost('autor'),
            'content'=>$this->request->getPost('content'),
            'category'=>$this->request->getPost('category'),
            'publication_date'=>$this->request->getPost('publication_date'),
        );
        $id=$this->request->getPost('id');
        $model->update($id,$noticias);
        $validacion=$this->validate([
            'image'=>['uploaded[image]',
            'mime_in[image,image/jpg,image/jpeg,image/png,image/gif]',
            'max_size[image,1024]',
            ]
        ]);
        if($validacion){
            if($imagen=$this->request->getFile('image')){
                $datoNoticia= $model->where('id',$id)->first();
                $rutaImagen=('../public/uploads/'.$datoNoticia['image']);
                unlink($rutaImagen);

                $nuevoNombre=$imagen->getRandomName();
                $imagen->move('../public/uploads/',$nuevoNombre);
                $dato=array(
                    'image'=>$nuevoNombre
                );
                $model->update($id,$dato);
                
            }
    
        }
        
    
        return redirect()->to(base_url('noticias'));
    }

    public function view($id=null){
        $model['noticia'] = $this->post_model->get_post($id);
        $model['header'] = view('template/header');
        $model['footer'] = view('template/footer');
        return view('noticias/view', $model);
    }



}
