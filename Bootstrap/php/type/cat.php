<?php

  $sql = <<< SQL
SELECT * 
FROM  `cat`
WHERE `$type_id` = $id
SQL;

				  if(!$result = $dbcon->query($sql))
				  {
				    die('fgefe');
				  }
				  else
				  { 
				    while($row = $result->fetch_assoc())
				    {

				    	$cat_id = $row['cat_id'];
				    	$cat_naam = $row['cat_naam'];
				    	$sub_id1 = $row['sub_id1'];
				    	$sub_id2 = $row['sub_id2'];
				    	$sub_id3 = $row['sub_id3'];
				    	$sub_id4 = $row['sub_id4'];
				    	

				    }

				 }
$sql = <<<SQL
SELECT * 
FROM  `subcat`
WHERE `subcat_id` = $sub_id1 OR `subcat_id` = $sub_id2 OR `subcat_id` = $sub_id3 OR `subcat_id` = $sub_id4
SQL;


				  if(!$result = $dbcon->query($sql))
				  {
				    die('fgefe');
				  }
				  else
				  { 
				  	$i = 0;
				    while($row = $result->fetch_assoc())
				    {
				    	      $i ++;
						      if($i == 1 || $i == 3 || $i == 5)
						      {
						        echo '<div class="row">';
						       }
						         echo '




						          <div class="col-md-6">
						          <a href="getcontent.php?type=sub&id='.$row['subcat_id'].'">
						             <button type="button" class="btn btn-danger knop"> '.$row['subcat_naam'].'</button>
						          </a>
						           </div>



						          '; 
							
						      if($i == 2 || $i == 4)
						      {
						        echo "</div>";
						      }
				    }
				  }


?>