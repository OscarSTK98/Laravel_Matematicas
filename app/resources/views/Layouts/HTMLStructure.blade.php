<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../Style.css">
       
    </head>

    <script>
        function Afirma(idArchivo){
         
            if(confirm("Este archivo es restringido, ten a la mano la clave del profesor")){
        
                var Seleccion = document.getElementById('txt_idArchivo');
                Seleccion.value = idArchivo;

                document.getElementById("Formulario").submit();
            }
        }               
    </script>
    
    <body background="../../www/images/FondoPrincipal.jpg">

        @yield('content');

    </body>
</html>