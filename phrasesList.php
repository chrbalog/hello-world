<?php
  $filename = "test.txt";
  $text = file_get_contents($filename);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Die Phrases-Liste</title>
    <?php
     $link = mysqli_connect("localhost", "root", "", "i218_phrases");
    ?>
    </head>
<body>
   
    
<table class="table-striped table">
        <th>ID</th>
        <th>Phrase</th>
        <?php
        $link = mysqli_connect("localhost", "root", "", "i218_phrases");
        $stmt = "SELECT * FROM `phrases`";
        $result = $link->query($stmt);

        if ($result->num_rows > 0){
            while ($row = mysqli_fetch_row($result)){
            echo "<tr>\n";
            echo "<td>" . $row[0] . "</td>\n";
            echo "<td>" . $row[1] . "</td>\n";
            echo "</tr>";
            }
        }
        else {
            echo "<tr><td colspan='2'>No data found</td></tr>";
        }
        ?>
    </table>

  
</body>
</html>

