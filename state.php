<?php 

   $servername="localhost";
$username="root";
$password="codes22";
$dbname="edispatch";
$conn = mysqli_connect($servername,$username,$password,$dbname);

 

$country_id = $_POST['country_id'];

$query= "select * from scholarname where cat_id='".$country_id."'";

$result= mysqli_query($conn,$query);

 

while ($row= mysqli_fetch_array($result)) {

    ?>

    <option value='<?php echo $row['id'] ?>'><?php echo $row['scholarname']; ?></option>;

<?php } ?>