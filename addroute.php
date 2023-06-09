<html>
<link rel="stylesheet" href="addroute.css">
    <body>
<div id="addroutepanel">
    <input type="button" id="cancelbtn" value="x" ><br>

    
    <p >Add Routes</p>
    <form action=""method="POST">
    <label >Bus type</label><br>
    <input type="text" name="bus" required><br>
    <label for="">From</label><br>
    <input type="text" name="source"required><br>
    <label for="">TO</label><br>
    <input type="text" name="destination"required><br>
    <label for="">Departure Time</label><br>
    <input type="text" name="departuretime"required><br>
    <label for="">Available Seat</label><br>
    <input type="text" name="available"required><br>
    <label for="">Fare</label><br>
    <input type="text" name="price"required><br>
    <label for="">Date</label><br>
    <input type="date" name="date"required><br>
    <label for="">BusNumber</label><br>
    <input type="text" name="busnumber"required><br>
    <input type="submit" value="Add">
   
    </form>
    

</div>
<?php
if(isset($_POST["bus"]))
{
    $bus=$_POST["bus"];
    $source=$_POST["source"];
    $destination=$_POST["destination"];
    $departuretime=$_POST["departuretime"];
    $available=$_POST["available"];
    $price=$_POST["price"];
    $date=$_POST["date"];
    $busnumber=$_POST["busnumber"];

    try{
    $conn=mysqli_connect('localhost','root','','routes');
    
    $sql="INSERT INTO busroutes (bustype,source,destination,departure,available,fare,datee,busnumber)VALUES(
        '$bus','$source','$destination','$departuretime','$available','$price','$date','$busnumber')";

if($conn->query($sql)===true)
{
 echo"<script>window.location.href='routes.php';</script>";
}
else
{
   
}
    }
    finally
    {

    }
}
?>
</body>
<script src="addroute.js">

   </script>
</html>