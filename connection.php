
<!DOCTYPE html>  
 <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" media="screen" type="text/css" href="vet.css"/>
        <script type="text/javascript" src="fonction.js"></script>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <script>
    function alertzoom() {
        var form = $("#imgb");
    $( "#imgb" ).dialog({beforeClose: function(event, ui ) {location.reload(true);}});
    }
    </script>

    </head>
   

<body>
<?php
    $serveur="localhost";
    $user="root";
    $pass="azerty";
    $base="vet2"; 
    $mysqli = new mysqli($serveur, $user, $pass, $base);
    if ($mysqli->connect_error) {
        die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
    }

?>