<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
   <table width="700px" cellspacing="0px" cellpadding="0px" >

    <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total = $row+$col;
          if($total%2==0)
		  {
          echo "<td height=100px width=100px bgcolor=#FFF></td>";
          }
		  else
		  {
          echo "<td height=100px width=100px bgcolor=#000></td>";
          }
          }
          echo "</tr>";
    }
    ?>
  </table>
  </body>
  </html>
