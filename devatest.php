<html>
                
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	    
	<body>
<p><font size="5" font face="Chandas">
&#2343;&#2352;&#2381;&#2350;&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2375;&#32;
&#2325;&#2369;&#2352;&#2369;&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2375;&#10;
&#2360;&#2350;&#2357;&#2375;&#2340;&#2366;&#2351;&#2369;&#2351;&#2369;&#2340;&#2381;&#2360;&#2357;&#2307;&#10;</font><p>
<?php

  $con = mysql_connect("127.0.0.1","root","manju");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

   $db_select = mysql_select_db("website_database",$con);
  if (!$db_select) {
  die("Database selection also failed miserably: " . mysql_error());
  }
 
    $result = mysql_query("SELECT * FROM doc_test", $con);
 if (!$result) {
 die("Database query failed: " . mysql_error());

 }
//Step4
 while ($row = mysql_fetch_array($result)) {
 echo $row[0]." ".$row[1]." <br />";
 }


mysql_close($con);
  ?>

		
        </body>
</html>
