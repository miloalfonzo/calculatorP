<?php 
    declare(strict_types = 1);
    include 'class-autoload.inc.php';

    $operador = $_POST['operador'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $calculadora = new Calculadora((String) $operador, (int)$numero1, (int)$numero2);
?>
  
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../style.css">
            <Title>Calculadora</title>
        </head>
        <body>
    
        <h1>Calculadora</h1>

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 a">
                <div class="card">  
                    <div class="card-body">
                    <h2 class="resultado"> El resultado es: <?php  echo $calculadora->calcular(); ?> </h2>   
                </div>
                    <a href="../index.php"> Regresar </button>  
                </div>
            </div>
        </div>
        </div>

        </body>
        </html>
        
        


