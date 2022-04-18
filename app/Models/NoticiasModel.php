<?php
namespace App\Models;

use CodeIgniter\Model;
class NoticiasModel extends Model
{
protected $table = 'noticia';
protected $primaryKey = 'id';
protected $allowedFields = ['title', 'autor', 'image'];

}


