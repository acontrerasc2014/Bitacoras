<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crear Grupos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.selection').select2();
        });
    
    </script>

</head>
<body>
    <h1>Crear grupos de trabajo</h1>
    <form class="form-group" action="/grupo" method="POST">
         {!!csrf_field() !!} 

        Nombre del Grupo:<br><br>
            <input type="text" name="nombre" id="nombre" placeholder="Inserta Nombre"><br><br>
            Descripción del grupo: <br><br>
            <input type="text" placeholder="Cuentanos mas de tu grupo" size="50" name="desc" id="desc" style="WIDTH: 500px; HEIGHT: 120px"><br><br>

            Integrantes del Grupo: <br><br>

            <select name="select" id="select" class="selection" multiple="multiple" style="width:40%" >
                <option  disabled="disabled"><--Elegir Integrantes--></option>    
                <option>Francisco Giacomozzi</option> 
                <option>Diego Flores</option>
                <option>Maximiliano Cartes</option>
                <option>Diego Zapata</option>
                <option>Rodrigo Becerra</option>

            </select><br><br>

            <input type="submit" name="submit" value="Enviar!" onclick=alert("Grupo-Creado")  >

    </form>
    
</body>
</html>