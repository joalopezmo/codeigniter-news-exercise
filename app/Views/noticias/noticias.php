<?=$header?>
    <h1>Noticias</h1>
    <a href="<?=base_url('noticias/crear')?>">Crear noticia</a>
    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Fecha</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($noticias as $noticia): ?>
                <tr>
                    <td><?php echo $noticia['id']; ?></td>
                    <td><a href="<?=base_url('noticias/'.$noticia['id'])?>"><?php echo $noticia['title']; ?></a></td>
                    <td><?php echo $noticia['autor']; ?></td>
                    <td><?php echo $noticia['publication_date']; ?></td>
                    <td><?php echo $noticia['category']; ?></td>
                    <td>
                        <a href="<?=base_url('noticias/editar/'.$noticia['id'])?>">Editar</a>
                        <a href="<?=base_url('noticias/eliminar/'.$noticia['id'])?>">Eliminar</a>
                </tr>
                <?php endforeach; ?>
            </tbody>
                
        </table>
    </div>
<?=$footer?>
