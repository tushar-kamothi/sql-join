
<?php
require_once('config.php');
	
	if(isset($_POST['inner'])){
		
					
			$query = "select * from customer JOIN customer_order ON customer.cid = customer_order.cid";
			$run = mysqli_query($conn,$query);
			if($run){
				$result = 'found';
				$count=0;
				 if(mysqli_num_rows($run) > 0) {
					 echo "<table border=1px;>";
					 echo "<tr>";
					 echo "<th>Numbers</th>";
					 echo "<th>name</th>";
					 echo "<th>Date</th>";
					 echo "<th>Amout</th>";
					 echo "</tr>";
					 
					 while($row = mysqli_fetch_array($run)){
						 $count++;
						echo "<tr>";
						echo "<td>" . $count. "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['order-date'] . "</td>";
						echo "<td>" . $row['amount'] . "</td>";
						
						echo "</tr>";
					 }
					 echo "</table>";
					 mysqli_free_result($run);
				  } else {
					 echo "No records matching your query were found.";
				  }
			}
			else{
				$result = 'Error in register.';
			}
		
	}
	if(isset($_POST['left'])){
		
					
			$query = "select customer.cid,name,amount from customer LEFT JOIN customer_order ON customer.cid = customer_order.cid";
			$run = mysqli_query($conn,$query);
			if($run){
				$result = 'found';
				$count=0;
				 if(mysqli_num_rows($run) > 0) {
					 echo "<table border=1px;>";
					 echo "<tr>";
					 echo "<th>Numbers</th>";
					 echo "<th>Id</th>";
					 echo "<th>Name</th>";
					 echo "<th>Amout</th>";
					 echo "</tr>";
					 
					 while($row = mysqli_fetch_array($run)){
						 $count++;
						echo "<tr>";
						echo "<td>" . $count. "</td>";
						echo "<td>" . $row['cid'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['amount'] . "</td>";
						
						echo "</tr>";
					 }
					 echo "</table>";
					 mysqli_free_result($run);
				  } else {
					 echo "No records matching your query were found.";
				  }
			}
			else{
				$result = 'Error in register.';
			}
		
	}
	if(isset($_POST['right'])){
		
					
			$query = "select customer.cid,name,amount from customer RIGHT JOIN customer_order ON customer.cid = customer_order.cid";
			$run = mysqli_query($conn,$query);
			if($run){
				$result = 'found';
				$count=0;
				 if(mysqli_num_rows($run) > 0) {
					 echo "<table border=1px;>";
					 echo "<tr>";
					 echo "<th>Numbers</th>";
					 echo "<th>Id</th>";
					 echo "<th>Name</th>";
					 echo "<th>Amout</th>";
					 echo "</tr>";
					 
					 while($row = mysqli_fetch_array($run)){
						 $count++;
						echo "<tr>";
						echo "<td>" . $count. "</td>";
						echo "<td>" . $row['cid'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['amount'] . "</td>";
						
						echo "</tr>";
					 }
					 echo "</table>";
					 mysqli_free_result($run);
				  } else {
					 echo "No records matching your query were found.";
				  }
			}
			else{
				$result = 'Error in register.';
			}
		
	}
	include('header.php');
?>

<body>
<div class="signup-form">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<h2>SQL Practice</h2>
		
		<hr>
                
        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="inner">Inner join</button>
            <button type="submit" class="btn btn-primary btn-lg" name="left">Left join</button>
            <button type="submit" class="btn btn-primary btn-lg" name="right">Right join</button>
        </div>
    </form>
    <div class="hint-text"><?php if(isset($result)){ echo $result; } ?></div>
</div>
</body>
</html>                            
