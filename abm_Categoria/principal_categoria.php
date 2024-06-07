<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal ORDENES DE PEDIDOS</title>
    
    <style>
        body{
    background-color: darkred;
}
table {
    margin: 10% auto;
    background-color: rgb(78, 3, 3);
    color: white;
    border-radius: 25px;
    width: 65%;
    text-align: center;
    font-size: 20px;
    padding: 1.5%;
}

th {
    width: 25%;
    border-radius: 25px 0px 5px 0px;
}

button{
    margin-left: 85% ;
    margin-top: 2%;
    border-radius: 25px;
    background-color: #003366;
    padding: 1.5%;
}
a{
    color: white;
}
td{
            border:solid 2px #003366;
            margin: 0 auto;

        }
        
    </style>
</head>
<body>
    <?php
    ?>
    <section>
    <button><a href="alta_categoria1.html">Crear Categoria </a></button>
    </section>
    <table>

        <thead>
            <tr>
                <td>Identificador</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../conexion.php";
            $sql = "SELECT * from CATEGORIA order by ID_CATEGORIA desc";
            $resultado = mysqli_query($conexion,$sql);
            //var_dump($resultado);
            while ($datos = mysqli_fetch_array($resultado)) {
                $id = $datos['ID_CATEGORIA'];
                $nombre = $datos['NOMBRE'];
                $descripcion = $datos['DESCRIPCION'];
                echo "<tr>";
                echo "<td>";
                echo $id;
                echo "</td>";
                echo "<td>";
                echo $nombre;
                echo "</td>";
                echo "<td>";
                echo $descripcion;
                echo "</td>";
                echo "<td>";
                
                
                
                echo ' <a id="boton1" class="mbri-trash mbr-iconfont-btn" href="baja_categoria.php?ID_CATEGORIA='.$id.'"title="borrar
                 Categoria" onClick="confirm("borrar la categoria?")">

                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <style>svg{fill:#9d2}</style>
                <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2
                 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3
                 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80
                 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.
                 2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.
                 8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
                 </svg>
                 
                </a>';

                echo '<a id="boton2" class="mbri-trash mbr-iconfont mbr-iconfont-btn" href="modificar_categoria1.php?ID_CATEGORIA='.$id.'"
                title="Modificar Categoria"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <style>svg{fill:#9d2}</style>
                <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344
                121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.
                7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.
                9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88
                88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.
                9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/>
                </svg>
                
                ';
                echo "</tr>";
            }
                ?>

        </tbody>
    </table>
    
</body>
</html>