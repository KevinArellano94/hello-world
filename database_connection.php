<?php
     function Open_Connection( )
     {
          $servername         = "localhost";
          $username           = "id4748912_kevinarellano94";
          $password           = "1AKreevlilnano";
          $databasename       = "id4748912_databasename";
          
          $connection         = new mysqli( $servername, $username, $password, $databasename ) or die( "Connect failed: %s\n". $connection -> error );
          
          return $connection;
     }

     function Close_Connection( $connection )
     {
          $connection -> close( );
     }
?>
