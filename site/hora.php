<?php
include('banco.php');

    header("Refresh: 1; url = hora.php");

    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime('-1 minute');
    $data->setTimezone($fuso);
    echo $data->format('Y-m-d H:i:s');


    $sql = "SELECT `hora` FROM `estacionamento2` ";
    $result = mysqli_query($conn, $sql);

   while( $datareserva = mysqli_fetch_array($result)){

        if ( $data->format('Y-m-d H:i:s') > $datareserva['hora'] ){

            $sql2 = "DELETE FROM `estacionamento2`";
            $result2 = mysqli_query($conn, $sql2);

            $sql3 = "DELETE FROM `estacionamento3`";
            $result3 = mysqli_query($conn, $sql3);
            
        }
    
   }
   echo $_SERVER['HTTP_REFERER'];
?>