<?php
    require 'conexion.php';

    $nombre  = $_POST['nombre'];
    $direccion  = $_POST['direccion'];
    $comuna = $_POST['comuna'];
    $telefono = $_POST['telefono'];
    $material = $_POST['material'];
    $pesomin = $_POST['pesomin'];
    $pesomax = $_POSR['pesomax'];

    //el valor de comuna ingresado debe ser el id.
    //al igual que el material!

    //hacer una query que consulte si la empresa ya se encuentra insertada
    $validar = "SELECT * FROM empresa WHERE nombre = '$nombre' || direccion = '$direccion'";

    $validando = $conecta->mysqli_query($validar);

    

    if($validando->num_rows > 0){
        $mensaje.="<h5>La empresa ya se encuentra registrada</h5>";
    }
    else{
        $insertarEmpresa = "INSERT INTO empresa VALUES ('','$comuna','$nombre','$direccion','$telefono')";

    }

    $id_empresa;

    $sql = "SELECT id_empresa FROM empresa WHERE nombre = '$nombre'";

    $datos = mysqli_query($conectar, $sql);

    while($row = mysqli_fetch_array($datos)){
        $id_empresa = $row;
    }


    //encontrar el valor de id ingresado

    $query1 = mysqli_query($conectar, $insertarEmpresa);

    $insertar = "INSERT INTO reciclan VALUES ('','$id_empresa','$material','$pesomin','$pesomax') ";

    $query = mysqli_query($conectar, $insertar);

    if($query){

        echo "<script> alert('correcto');
        location.href = '../index.html';
        </script>";

    }else{
        echo "<script> alert('incorrecto');
        location.href = '../index.html';
        </script>";
    }


?>