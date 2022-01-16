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
      
      
      
    mysqli_connect("localhost","root","","samoloty2");
   

    $query = "SELECT `id`,`nr_rejsu`,`czas`,`kierunek`,`status_lotu` FROM `odloty` ORDER BY `czas` DESC ";
    $result = mysqli_query($query);
    while ($row = mysqli_fetch_array ($result))
    {
       echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nr_rejsu']."</td>";
        echo "<td>".$row['czas']."</td>";
       echo "</tr>";
    }

      
      
      
      
      mysqli_close("samoloty2");
      
      
      
      
      
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