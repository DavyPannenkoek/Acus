<?php
 $sql = <<< SQL
SELECT * 
FROM  `subcat`
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

						$sub_id = $row['subcat_id'];
						$sub_naam = $row['subcat_naam'];
						$pro1 = $row['probleem_id1'];
						$pro2 = $row['probleem_id2'];
						$pro3 = $row['probleem_id3'];
						$pro4 = $row['probleem_id4'];

				    }

				 }
$sql = <<<SQL
SELECT * 
FROM  `probleem`
WHERE `probleem_id` = $pro1 OR `probleem_id` = $pro2 OR `probleem_id` = $pro3 OR `probleem_id` = $pro4
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
						          	<a href="getcontent.php?type=pro&id='.$row['probleem_id'].'">
						             <button type="button" class="btn btn-danger knop"> '.$row['probleem_naam'].'</button>
						           </div>



						          '; 
							
						      if($i == 2 || $i == 4)
						      {
						        echo "</div>";
						      }
				    }
				  }

?>