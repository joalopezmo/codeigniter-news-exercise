<?php

namespace App\Controllers;

use App\Models\NoticiasModel;
use CodeIgniter\RESTful\ResourceController;

class ApiNoticias extends ResourceController
{
    protected $modelName = 'App\Models\NoticiasModel';
    protected $format = 'json';

    public function index()
    {
    
        return $this->respond($this->model->findAll());
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
 

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        return $this->respond($this->model->find($id));
    }
 
  
    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model= new NoticiasModel();
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
