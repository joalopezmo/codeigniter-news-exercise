<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Noticias</h1>
    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($noticias as $noticia): ?>
                <tr>
                    <td><?php echo $noticia['id']; ?></td>
                    <td><?php echo $noticia['title']; ?></td>
                    <td><?php echo $noticia['autor']; ?></td>
                    <td><?php echo $noticia['publication_date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
                
        </table>
    </div>

   
   
</body>
</html>