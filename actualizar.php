<?php

require "conexion.php";

$actualizar=actualizar();

include "header.php"
?>

    <title>Actualizar</title>
</head>
<body id="fondo">
    <main class="m-3">
        <div class="row">
            <div class="col-12 col-sm-4 pt-1 pb-3">
                <h1>Editar Alumno</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4" style="margin-left: 5%;">
                    <form action="" method=post>
                        <?php while ($resulset = mysqli_fetch_array($actualizar)){?> 
                            
                            <div class="pb-3">
                                <input type="text" name="txtMatricula" id="txtMatricula" value="<?php echo $resulset[0]?>"
                                    class="form-control shadow" readonly="true" title="Matricula" require>

                            </div>
                            <div class="pb-3">
                                <input type="text" name="txtNombre" id="txtNombre" placeholder="<?php echo $resulset[1]?>"
                                    class="form-control shadow" title="Nombre" value="<?php echo $resulset[1]?>" require >
                            </div>
                            <div class="pb-3">
                                <input type="text" name="txtapellido" id="txtapellido" placeholder="<?php echo $resulset[2]?>"
                                    class="form-control shadow" title="Apellido" value="<?php echo $resulset[2]?>" require >
                            </div>
                            <div class="pb-3">
                                <input type="text" name="txtdni" id="txtdni" placeholder="<?php echo $resulset[3]?>"
                                 class="form-control shadow" title="DNI" value="<?php echo $resulset[3]?>" require >
                            </div>
                            <div class="pb-3">
                                <input type="date" name="txtFecha" id="txtFecha" placeholder="<?php echo $resulset[4]?>"
                                    class="form-control shadow" title="Fecha de nacimiento" value="<?php echo $resulset[4]?>" require >
                            </div>
                            <div class="pb-3">
                                <input type="text" name="txtDireccion" id="txtDireccion" placeholder="<?php echo $resulset[5]?>"
                                    class="form-control shadow" title="Direcci??n" value="<?php echo $resulset[5]?>" require >
                            </div>
                            <div class="pb-3">
                                <input type="text" name="txtLocalidad" id="txtLocalidad" placeholder="<?php echo $resulset[6]?>"
                                    class="form-control shadow" title="Localidad" value="<?php echo $resulset[6]?>" require >
                            </div>
                            <div class="pb-3">
                                <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="<?php echo $resulset[7]?>"
                                    class="form-control shadow" title="Telefono" value="<?php echo $resulset[7]?>" require >
                            </div>
                        <?php ;} ?>
                        <div>
                            <button type="submit" id="btnActualizar" name="btnActualizar" class="btn btn-primary">Actualizar</button>
                            <a class="btn btn-primary" href="index.php" role="button">Volver</a>
                        </div>
                        <?php
                            
                            if (isset($_POST['btnActualizar'])){
                                update();
                                $_SESSION['mensaje'] = 'Los datos fueron actualizados';
                                $_SESSION['tipo_mensaje'] = 'warning';
                                Header("location: index.php");
                            }
                        ?>
                    </form>                        
            </div>
            
<?php include "footer.php" ?>