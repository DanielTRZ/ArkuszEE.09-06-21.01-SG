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
      
      
      $baza=mysqli_connect('localhost','root','','egzaminsamoloty');
     if(mysqli_connect_errno())
     {echo"wystapil blad polaczenia z baza";}
      $wynik=mysqli_query($baza,'SELECT `czas`,`kierunek`,`nr_rejsu`,`status_lotu` FROM `przyloty` ORDER BY `czas` ASC');
      while($r=mysqli_fetch_array($wynik))
      {
     echo "<tr>";
     echo "<td>";
     echo $r["czas"];
     echo "</td>"; 
   
         
       
     echo "<td>";
     echo $r["kierunek"];
     echo "</td>";   
     
          
     echo "<td>";
     echo $r["nr_rejsu"];
     echo "</td>";  
        
     echo "<td>";
     echo $r["status_lotu"];
     echo "</td>";
     echo "</tr>"; 

      
      }
      
   
      
      
      
     
      
      
       mysqli_close($baza);
      
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