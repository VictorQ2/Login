<?php
    session_start();

    //! negación, !isset = Que no exista
    if(!isset($_SESSION['Nombre'])){
        header('Location: inicio.php');
    }

    echo "Bienvenido, ".$_SESSION['Nombre']."<br><br><br>";
    echo"
                    <script>
                        alert('Inicio de sesion exitoso');
                    </script>
                ";
    
    
?>

