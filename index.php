<?php include("config.php"); ?>
<!doctype html>
<html>
    <head>
        <title></title>
        <!-- Datatable CSS -->
      <style>
table {
	width:100%; 
	border-collapse: separate;
	border-spacing: 0 10px;
	border:0px;
}
td,th {
  padding: 7px;
  border:1px solid;
  text-align:center
} 
</style>
        
    </head>
    <body >

        <div >
            <!-- Table -->
            <table id='empTable' class='display dataTable'>
                <thead>
                <tr>
                    <th>Employee name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>City</th>
                </tr>
                </thead>
                
            </table>
        </div>
        <?php 
		$sql = "SELECT * FROM product_catagory";
$rows = $conn->query($sql);
foreach($rows as $result)
{
    echo $result['category'];
}
		
		?>
        <!-- Script -->
        
    </body>

</html>
