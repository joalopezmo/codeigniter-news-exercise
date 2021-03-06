<?=$header?>
   <h2 class="py-3"> Formulario para crear noticias </h2>

    <form method='post' action="<?=site_url('/save')?>" enctype="multipart/form-data" class="px-5">

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="title">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="autor">Autor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="category">Categoria</label>
            <div class="col-sm-10">
                <select class="form-control" id="category" name="category">
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
                <input type="date" class="form-control" id="publication_date" name="publication_date" placeholder="Fecha de publicacion">
                <small class="form-text text-muted">Fecha de publicacion</small>
            </div>
            
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">Imagen</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="image" name="image" placeholder="Imagen">
                <small id="emailHelp" class="form-text text-muted">
                    Solo se aceptan imagenes en formato jpg, jpeg, png y gif.
                </small>
            </div>
        </div>

        <div class="mb-3">
            <label for="content">Contenido</label>
            <textarea id="content" class="form-control" id="content" name="content" placeholder="Contenido"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
        <a href="<?=site_url('/noticias')?>" class="btn btn-dark">Cancelar</a>
    
    </form>



<?=$footer?>