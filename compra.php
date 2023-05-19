<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de compra</title>
    <link rel="icon" href="https://business.ticketmaster.com.mx/wp-content/uploads/2020/08/t_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./compra.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <div class="formulario">
            <form action="./boleto.php" method="post" enctype="multipart/form-data" target="_self">
                <legend>Datos de compra<br><br></legend>
                <label>Nombre(s):<br>
                    <input type="text"  id="nmb" name="nombre" class="pregunta"><br><br>
                    
                </label>
                <label>Apellidos:<br>
                    <input type="text" id="apo" name="apellido" class="pregunta"><br><br>
                </label>
                <label>Artistas:<br></label>
                <select name="artista" id="art" class="pregunta">
                    <option value="Luis Miguel">Luis Miguel</option>
                    <option value="Christian Nodal">Christian Nodal</option>
                    <option value="Molotov">Molotov</option>
                    <option value="Arctic Monkeys">Arctic Monkeys</option>
                </select><br><br>
                <label>Fecha del evento:<br>
                    <input type="date" name="fecha" class="pregunta">
                </label><br><br>
                <label id="zonaa">Zona:<br></label>
                <select name="zona" id="zn" class="pregunta">
                    <option value="Pista">Pista</option>
                    <option value="Gradas">Gradas</option>
                    <option value="Palco">Palco</option>
                    <option value="PalcoPremium">Palco Premium</option>
                </select><br><br>
                <label>Boletos [Max. 15]
                    <input type="range" min="1" max="15" id="myRange" oninput="updateValue()" name="boletos" class="pregunta2">
                    <output id="rangeValue"></output>
                    <script>
                        function updateValue() {
                        var rangeValue = document.getElementById("myRange").value;
                        document.getElementById("rangeValue").textContent = rangeValue;
                        }
                    </script>
                </label><br><br>
                <label id="lugar">Lugar:<br></label>
                <select name="lugar" id="lg" class="pregunta">
                    <option value="Foro Sol">Foro Sol</option>
                    <option value="Arena Mexico">Arena Mexico</option>
                    <option value="Arena Citibanamex">Arena Citibanamex</option>
                    <option value="Auditorio Nacional">Auditorio Nacional</option>
                </select><br><br>
                <label>
                    Extras: <br>
                    <input type="checkbox" name="stc" value="Estacionamiento">
                    Estacionamiento
                    <input type="checkbox" name="comida" value="Comida">
                    Paquete de comida
                    <input type="checkbox" name="vip" value="Pase Vip">
                    Pase VIP <br><br>   
                </label>
                <button type="submit" id="boton" href="./compra.php">Enviar</button>
            </form> 
            <img src="https://www.rockandpop.cl/wp-content/uploads/2019/07/queen-live-aid-4.jpg" alt="queen" id="queen">
    </div>
</body>
</html>

