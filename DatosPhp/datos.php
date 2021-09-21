<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form name="formindex" action="datos.php" method="GET">
            <tr>
                <td><label for="identificacion">Identificacion</label></td>
                <td><input type="text" name="ident" id="ident" value="<?php $ide = $_GET["identificacion"];
                            echo $ide; ?>" disable></td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" name="nombre" id="nombre" value="<?php $nom = $GET["nombre"];
                    echo $nom; ?>" disable> </td>
            </tr>
            <tr>
                <td><label for="direccion">Direccion</label></td>
                <td><input type="text" name="direccion" id="direccion" value="<?php $dir = $GET["direccion"];
                    echo $dir; ?>"disable> </td>
            </tr>
            
        </form>
    </table>
</body>
</html>