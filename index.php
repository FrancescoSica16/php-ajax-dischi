<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <?php 
    require __DIR__ . "/db/dataBase.php";
    ?>
<div class="container">
    <div class="row">
        <div class="col-10 d-flex flex-wrap m-auto">
    
                <?php foreach ($arrayDischi as $disco) { ?>
                
                <div class="music-card  m-2">
                    <img class="" src="<?php echo $disco["poster"] ?>" alt="Immagine Album">
                    <h5 class="titolo"> <?php echo $disco["title"] ?></h5>
                    <p class="author"> <?php echo $disco["author"] ?></p>    
                    <p class="year"> <?php echo $disco["year"] ?></p>  
                </div>

                <?php }  ?>  
            
        </div>
        
    </div>   
</div>
    

<script type="text/css" src="css/style.css"></script>
</body>
</html>




