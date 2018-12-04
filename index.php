<?php
include("config.ini");
 $text = urldecode($_GET['greetings']) . " " . urldecode($_GET['name']) . "\n" . urldecode($_GET['begrüßung']) . ' ' . urldecode($_GET['anrede']) . ' ' . urldecode($_GET['spruch']) . "\n";
    
    file_put_contents($filename, $text, FILE_APPEND); 
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Der großartige Begrüßungsgenerator - Startseite</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>
    <?php
    include("nav.inc");
    ?>

<h1>Deine Begrüßung</h1>
    
<?php 
echo $_GET['greetings'] . " " ; 
    
?>
    <?php
    if(empty($_GET['name'])){
        die('Du hast keinen Namen eingegeben. Bitte geh zurück und gib einen Namen ein!');
            }
            else{
                echo $_GET['name'];
            }
    ?>   
<br>
<?php	
echo $_GET['begrüßung'] . " " . $_GET['anrede'] . " " . $_GET ['spruch'];

?>
<br>
    <?php
    include("footer.php");
    ?>
    
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>


 
