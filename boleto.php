<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
    <link rel="icon" href="https://business.ticketmaster.com.mx/wp-content/uploads/2020/08/t_logo.png" type="image/x-icon">
</head>
<body>
<?php
        $nombre = ( isset ($_POST["nombre"]) && $_POST["nombre"] != "" )? $_POST["nombre"] : false;
        $apellido = ( isset ($_POST["apellido"]) && $_POST["apellido"] != "" )? $_POST["apellido"] : false;
        $artista = ( isset ($_POST["artista"]) && $_POST["artista"] != "" )? $_POST["artista"] : false;
        $fecha = ( isset ($_POST["fecha"]) && $_POST["fecha"] != "" )? $_POST["fecha"] : false;
        $zona = ( isset ($_POST["zona"]) && $_POST["zona"] != "" )? $_POST["zona"] : false;
        $boletos = ( isset ($_POST["boletos"]) && $_POST["boletos"] != "" )? $_POST["boletos"] : false;
        $lugar = ( isset ($_POST["lugar"]) && $_POST["lugar"] != "" )? $_POST["lugar"] : false;
        $vip = ( isset ($_POST["vip"]) && $_POST["vip"] != "" )? $_POST["vip"] : false;
        $comida = ( isset ($_POST["comida"]) && $_POST["comida"] != "" )? $_POST["comida"] : false;
        $stc = ( isset($_POST["stc"]) && $_POST["stc"] != "")? $_POST["stc"] : false;
        for($i=1;$i<=$boletos;$i++)
        {
            echo '
        <table align="center" border="1px" >
            <thead>
                <tr>
                    <th colspan="9">Ticketmaster</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" rowspan="4">Lugar:<br>'.$lugar.'<br>Zona: '.$zona.'</td>
                    <td colspan="3">'.$nombre.' '.$apellido.'<br></td>
                    <td colspan="3" rowspan="4"><img src="https://aceptaelreto.com/pub/problems/v001/06/st/statements/Spanish/images/6583952.png" width=100px height=100px></td>
                    
                </tr>
                <tr>
                    <td colspan="2">'.$artista.'</td>
                    <td rowspan="3">Extras:<br> -'.$vip.'<br> -'.$comida.'<br> -'.$stc.'</td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2">Fecha:'.$fecha.'</td>
                </tr>
            </tbody>
       </table><br><br>
        ';
        }
    ?>
</body>
</html>