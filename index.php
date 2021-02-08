<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formulario" action="procesar.php" method="POST">
            Intoduce su nombre: <input type="text" name="nombre"><br><br>
            Introduce su edad: <input type="text" name="edad">
            <br>
            <hr>
            <br>
            </form>
        
            <form name="formulario1" action="SUMAR.php" method="POST">
                <h2>SUMA</h2>
            Introduce valor 1: <input type="text" name="valor1"><br><br>
            Introduce valor 2: <input type="text" name="valor2">
            <input type="submit" value="Enviar">
            <br>
            <hr>
        </form>
        
        <form name="formulario2" action="RESTAR.php" method="POST">
            <h2>RESTA</h2>
        Introduce valor 1: <input type="text" name="valor1"><br><br>
        Introduce valor 2: <input type="text" name="valor2">
        <input type="submit" value="Enviar">
        <br>
        <hr>
        </form>

        <form name="formulario3" action="MULTIPLICAR.php" method="POST">
            <h2>MULTIPLICACIÓN</h2>
            Introduce valor 1: <input type="text" name="valor1"><br><br>
        Introduce valor 2: <input type="text" name="valor2">
        <input type="submit" value="Enviar">
        <br>
        <hr>
        </form>
        
        <form name="formulario4" action="DIVISION.php" method="POST">
            <h2>DIVISION</h2>
        Introduce valor 1: <input type="text" name="valor1"><br><br>
        Introduce valor 2: <input type="text" name="valor2">
        <input type="submit" value="Enviar">
        <br>
        <hr>
        </form> 
        
    </body>
</html>
