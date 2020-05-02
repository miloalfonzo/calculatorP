<?php
    declare(strict_types = 1);
    include 'includes/class-autoload.inc.php';
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
        <link rel="stylesheet" href="style.css">
        <Title>Calculadora</title>
    </head>
    <body>

    <h1>Calculadora</h1>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 a">
                <div class="card">  
                    <div class="card-body">
                        <form action="includes/calc.obj.php" method="post">
                            <input class="form-control form-control-lg" type="number" name="numero1" placeholder="Introduce el primer número">
                            <div class="input-field col s12">
                                <select class="form-control form-control-lg" name="operador"> 
                                    <option value="" disabled selected>Elegi tu operación</option>
                                    <option value="suma">Sumar</option>
                                    <option value="resta">Restar</option>
                                    <option value="divi">Dividir</option>
                                    <option value="multi">Multiplicar</option>
                                    <option value="porce">Porcentaje de</option>
                                </select>
                            </div>
                            <input class="form-control form-control-lg" type="number" name="numero2" placeholder="Introduce el segundo número">
                            <button class="btn btn-danger" type="submit" name="submit"> Calcular </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
