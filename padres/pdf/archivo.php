<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select * from materialdidactico where id_material = " . $_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
            if($datos['nombre_archivo']==""){
               echo "NO TIENE ARCHIVOS";
                ?>
                <?php } else { ?>
                <?php    
                    header('content-type: application/pdf');
                    readfile('archivos/' . $datos['nombre_archivo']);
                    ?>
      <?php  } } ?>
</body>
</html>