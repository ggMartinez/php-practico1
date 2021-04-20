<?php 
    require 'personas.php';

    foreach($personas as $p){
        echo "<a href='/datos.php?id={$p['id']}'> {$p['nombre']} {$p['apellido']} </a> <br>";
    }