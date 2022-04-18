<?=$header;?>

<h2 class="py-3"> Formulario para editar noticias </h2>


    <form method='post' action="<?=site_url('/actualizar')?>" enctype="multipart/form-data" class="px-5">
        <input type="hidden" name="id" value="<?=$noticia['id']?>">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="title">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="<?=$noticia['title'];?>" placeholder="Titulo">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="autor">Autor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="autor" name="autor" value="<?=$noticia['autor'];?>" placeholder="Autor">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="category">Categoria</label>
            <div class="col-sm-10">
                <select class="form-control" id="category" name="category" value="<?=$noticia['category'];?>">
                    <option value="">Seleccione una categoria</option>
                    <option value="economics">economics</option>
                    <option value="sports">sports</option>
                    <option value="other">other_one</option>
                </select>
            </div>
        </div>
        
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="publication_date">Fecha de publicacion</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="publication_date" name="publication_date" value="<?=$noticia['publication_date'];?>" placeholder="Fecha de publicacion">
                <small class="form-text text-muted">Fecha de publicacion</small>
            </div>
            
        </div>

        <div class="form-group">
            <label class="" for="image">Imagen</label>
            </br>
            <img class="img-fluid img-thumbnail" src="<?=base_url('uploads/'.$noticia['image'])?>" alt="">
            <div class="">
                <input type="file" class="form-control" id="image" name="image" placeholder="Imagen">
                <small id="emailHelp" class="form-text text-muted">
                    Solo se aceptan imagenes en formato jpg, jpeg, png y gif.
                </small>
            </div>
        </div>

        <div class="mb-3">
            <label for="content">Contenido</label>
            <textarea id="content" class="form-control" id="content" name="content" placeholder="Contenido"><?=$noticia['content'];?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?=site_url('/noticias')?>" class="btn btn-dark">Cancelar</a>
    
    </form>





<?=$footer;?>
