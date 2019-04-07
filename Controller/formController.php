<?php
   if(isset($_POST["Sent"])){
        header('Content-type: text/csv');
        header('Content-Disposition: attachment; filename="formulario.csv"');
        $data = array('Nombre' => '', 
        'Telefono' => '', 'Email' => '',
        'Direccion' => '');
   }
?>