

<html>
<head>
    <title>Der großartige Begrüßungsgenerator - Formularseite</title>
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

<h1>Der großartige Begrüßungsgenerator</h1>
    
<form action='index.php' method='get'>
<h2>Langweilige Begrüßung:</h2>
Name:
    <input type="text" name='name'><br>
    

Begrüßung: 
<select name="greetings">
  <option  value="Guten Morgen">Guten Morgen</option>
  <option  value="Mahlzeit">Mahlzeit</option>
  <option  value="Guten Abend">Guten Abend</option>
  <option  value="Gute Nacht">Gute Nacht</option>
</select>
<br><br><br>

<h1>Krasse Begrüßung:</h1>
<br>
<select name="begrüßung">
  <option  value="Gudä Morgä">Gudä Morgä</option>
  <option  value="Moahlzeit">Moahlzeit</option>
  <option  value="Oabend">Oabend</option>
  <option  value="Hey">Hey</option>
</select>

<select name="anrede">
  <option  value="Alfi">Alfi</option>
  <option  value="Ralfi">Ralfi</option>
  <option  value="Lisa">Lisa</option>
  <option  value="Isa">Isa</option>
  <option  value="Alter">Alter</option>
  <option  value="Walter">Walter</option>
</select>

<select name="spruch">
  <option  value="du harter Hund">du harter Hund</option>
  <option  value="du fleißige Biene">du fleißige Biene</option>
  <option  value="du toller Hecht">du toller Hecht</option>
  <option  value="du blindes Huhn">du blindes Huhn</option>
</select>
<br><br>
   <input type=submit value='Lätz fätz'>

</form>
                                  
   <?php
    include("footer.php");
    ?>
    
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>

