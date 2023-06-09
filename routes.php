
<html>
    <head>
    <link rel="stylesheet" href="routes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>YATAYAT routes</title>
</head>
  <?php
     include 'navbar.php';
     ?>

<body >
   <?php include 'signupform.php';?>
        <?php include 'loginform.php';?>
        <?php include 'addroute.php';?>
        <div id="routesbody">
      
          <input type="text" id="" placeholder="From"list="city"> <i class="fa fa-map-marker" style="margin-left:-1.3%;"></i>
          <input type="text" id="" placeholder="To"list="city"	><i class="fa fa-map-marker" style="margin-left:-1%;"></i>
          <input type="date" id="">
          <input type="button" id="" value="Search">
        <select style="height:5%;width:5%;">
          <option value="0">SortBY</option>
          <option value="1">Available seat</option>
          <option value="2">price</option>
</select>

<datalist id="city">
<option value=Mechi></option>
<option value=Panchthar></option>
<option value=Ilam></option>
<option value=Jhapa></option>
<option value=Koshi></option>
<option value=Sunsari></option>
<option value=Dhankutta></option>
<option value=Sankhuwasabha></option>
<option value=Bhojpur></option>
<option value=Terhathum></option>
<option value=Sagarmatha></option>
<option value=Khotang></option>
<option value=Solukhumbu></option>
<option value=Udaypur></option>
<option value=Saptari></option>
<option value=Siraha></option>
<option value=Janakpur></option>
<option value=Mahottari></option>
<option value=Sarlahi></option>
<option value=Sindhuli></option>
<option value=Ramechhap></option>
<option value=Dolkha></option>
<option value=Bagmati></option>
<option value=Kavreplanchauk></option>
<option value=Lalitpur></option>
<option value=Bhaktapur></option>
<option value=Kathmandu></option>
<option value=Nuwakot></option>
<option value=Rasuwa></option>
<option value=Dhading></option>
<option value=Narayani></option>
<option value=Rauthat></option>
<option value=Bara></option>
<option value=Parsa></option>
<option value=Chitwan></option>
<option value=Gandaki></option>
<option value=Lamjung></option>
<option value=Tanahun></option>
<option value=Syangja></option>
<option value=Kaski></option>
<option value=Manag></option>
<option value=Dhawalagiri></option>
<option value=Parwat></option>
<option value=Myagdi></option>
<option value=Baglung></option>
<option value=Lumbini></option>
<option value=Palpa></option>
<option value=Nawalpur></option>
<option value=Parasi></option>
<option value=Rupandehi></option>
<option value=Arghakhanchi></option>
<option value=Kapilvastu></option>
<option value=Rapti></option>
<option value=Rolpa></option>
<option value=Rukum Purba></option>
<option value=Rukum Paschim></option>
<option value=Salyan></option>
<option value=Dang></option>
<option value=Bheri></option>
<option value=Surkhet></option>
<option value=Dailekh></option>
<option value=Banke></option>
<option value=Jajarkot></option>
<option value=Karnali></option>
<option value=Humla></option>
<option value=Kalikot></option>
<option value=Mugu></option>
<option value=Jumla></option>
<option value=Seti></option>
<option value=Bajhang></option>
<option value=Achham></option>
<option value=Doti></option>
<option value=Kailali></option>
<option value=Mahakali></option>
<option value=Dadeldhura></option>
<option value=Baitadi></option>
<option value=Darchula></option>
<option value=mustanag></option>
</datalist>
<br>
<?php


try
{
  $conn=mysqli_connect('localhost','root','','routes');
  $sql="SELECT * from busroutes";
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
   echo"<div id='index'>
   <div id='image'>
   <p>Bus Type</p>
   </div>
   <div id='from'>
   <p>From</p>
   </div>
   <div id='to'>
   <p>TO</p>
   </div>
   <div id='departure'>
   <p>Departure Time</p>
   </div>
   <div id='available'>
   <p>Available Seats</p>
   </div>
   <div id='fare'>
   <p>Fare</p>
   </div>
   <div id='datee'>
   <p>Date</p>
   </div>
   <div id='bussnumber'>
   <p>BusNumber</p>
   </div>
   <div id='delete'>
   <p>Button</p>
   </div>
</div>";
    while($row = $result->fetch_assoc())
    {
    
echo"<form method='POST'>
<div id='businfo'>

<div id='image'>
<input type='text' id='is' name='bustype' value='".$row["bustype"]."'>
</div>
<div id='from'>
<input type='text' name='source' value='".$row["source"]."'>
</div>
<div id='to'>
<input type='text' name='destination' value='".$row["destination"]."'>
</div>
<div id='departure'>
<input type='text' name='departuretime' value='".$row["departure"]."'>
</div>
<div id='available'>
<input type='text' name='availableseat' value='".$row["available"]."'>
</div>
<div id='fare'>
<input type='text' name='price' value='".$row["fare"]."'>
</div>
<div id='datee'>
<input type='text' name='date' value='".$row["datee"]."'>
</div>
<div id='bussnumber'>
<input type='text' name='busnumber' value='".$row["busnumber"]."'>
</div>
<input type='hidden' name='hide' value='".$row["id"]."'>
<div id='delete'>
<input type='submit' name='dbtn' value='remove' style='width:100%;height:100%;'>
</div>
</div>
";
echo"<div id='savechange'>

<input type='submit' value='Save changes'name='submit' style='width:15%;height:9%;margin-top:0.5%;'></div>";echo"</form>";


    
    }
    
  }
 
  
  echo"<div id='addroutes'><input type='button' value='Add Routes' id='addroutebtn'style='width:10%;height:9%;margin-top:0.5%;'onclick='faddroutes();'></div>";
}
finally
{

}

?>

</div>

<?php include 'edit.php';?>
<?php include 'delete.php';?>

</body>
<script>
  addroutes.addEventListener("click",function()
  {
    if(addroutepanel.style.display==="block")
        {
            addroutepanel.style.display="none";
            
        }
        else
        {
          addroutepanel.style.display="block";  
        }
  });
  
  
  



   </script>
       <?php include 'footer.php';?>
</html>
