<?php
    print('
        <form method="post">
            Usuario:<input type="text" name="user" ><br>
            Contraseña:<input type="text" name="password" ><br>
            <input type="submit" name="" value="Ingresar">
        
        </form>
    ');

    if(isset($_GET['error'])){
        echo "Credenciales Incorrectas.";
    }
?>