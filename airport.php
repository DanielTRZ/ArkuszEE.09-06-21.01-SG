<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>Odloty Samolotów</title>
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="styl6.css">

  </head>
  <body>
  <div id="ban1"><h2>Odloty z lotniska</h2></div>
  <div id="ban2"><img src="zad6.png" alt="logotyp"></div>
  <div id="glowny"><h4>tabela odlotów</h4>
  <table>
      <tr>
          <th>lp</th> <th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th>
      </tr>
      
      <?php
      
      
      
    mysql_connect("localhost", "root", " ");
    mysql_select_db("samoloty2");

    $query = "SELECT * FROM users";
    $result = mysql_query($query);
    while ($row = mysql_fetch_array  ($result))
    {
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "</tr>";
    }

      
      
      
      
      
      
      
      
      
      
      ?>
        
      </table>
      
  </div>
  <div id="stop1"><a href="Kwerendy.txt" target="_blank">Pobierz obraz</a></div>
  <div id="stop2">
      <?php
      
      
      
      
      
      
      
      
      
      
      
      ?>
      
  </div>
  <div id="stop3"><p>Autor:00000000</p></div>
  

  </body>

</html>