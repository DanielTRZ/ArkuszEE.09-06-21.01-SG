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
      
      
     $baza=mysqli_connect('localhost','root','','samoloty2');
     if(mysqli_connect_errno())
     {echo"wystapil blad polaczenia z baza";}
      $wynik=mysqli_query($baza, 'SELECT`id`,`nr_rejsu`,`czas`,`kierunek`,`status_lotu` FROM `odloty` ORDER BY `czas` DESC ');
      while($r=mysqli_fetch_array($wynik))
      {
     echo "<tr>";
     echo "<td>";
     echo  $r["id"]  ;
     echo "</td>"; 
   
         
       
     echo "<td>";
     echo $r["nr_rejsu"];
     echo "</td>";   
     
          
     echo "<td>";
     echo $r["czas"];
     echo "</td>";  
        
     echo "<td>";
     echo $r["kierunek"];
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
    
      
      if (isset($_COOKIE["ciasteczko"])) {
				echo "<p style='font-style:italic;'>Dzień dobry! Sprawdż regulamin naszej strony</p>";
			} else {
				$cookie_name = "cookie";
				$cookie_value = "";
				$cookie_time = time() + 60*1;
				$cookie_path = "";
				$cookie_domain = "";
				$cookie_secure  = false;
				$cookie_httponly = false;
				setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httponly);
				echo "<p><b>Miło nam ,że nas znowu odwiedziłeś</b></p>";
			}   
  
      
      ?>
      
  </div>
  <div id="stop3"><p>Autor:00000000</p></div>
  

  </body>

</html>