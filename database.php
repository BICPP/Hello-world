<?php
   include ("config.php");
   $query = "CREATE TABLE pdetails( 
            
             sal VARCHAR(5) NOT NULL ,
             Name VARCHAR(30) NOT NULL, 
            Age VARCHAR(5) NOT NULL ,
            Gender VARCHAR(2) NOT NULL, 
            Nationality VARCHAR(15)NOT NULL,
            Farm Category VARCHAR(50) NOT NULL, 
            Feild Address VARCHAR (200)  NOT NULL, 
            District VARCHAR(30) NOT NULL, 
            Size of Feild INT(12) NOT NULL,
            PhoneNo INT(12) NOT NULL,
            email VARCHAR(20) NOT NULL,
            Additional Comments VARCHAR(500) NOT NULL ,
            Seed VARCHAR(20) NOT NULL'
            )";
if(isset($_POST['submit']))
{  
	$sal = $_POST['sal'];
	$fullname = $_POST['Name'];
	
	$Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
	$Nationality = $_POST['Nationality'];
	$FarmCategory= $_POST['Farm Category'];
	$FeildAddress= $_POST['Feild Address'];
	$District = $_POST['District'];
	$Sizeoffeild = $_POST['Size of Feild'];
	$PhoneNo  = $_POST['PhoneNo'];
	
	
    $Email  = $_POST['Email'];
	$AdditionalComments  = $_POST['Additional Comments'];
	$Seed  = $_POST['Seed'];
    if ($sal == "" || $Name == "" || $Age ==""  ||$Gender ==""  || $Nationality ==""  || $FarmCategory ==""  || $FeildAddress ==""  || $District ==""  ||
  $Sizeoffeild ==""  ||$PhoneNo ==""  ||$Email ==""  || $state ==""  || $AdditionalComments ==""  ||  $Seed ==""  )
     $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "youtube";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } 	
        else{
            mysql_query("insert into pdetails
            ('sal'Name ,Age,Gender,Nationality,FarmCategory,FeildAddress,District,Sizeoffeild,PhoneNo,Email,state,AdditionalComments,Seed) 
            values ('$sal','$Name', '$Age','$Gender',  '$Nationality ', '$FarmCategory', '$FeildAddress', '$District','$Sizeoffeild ', '$PhoneNo','$Email','$state','$AdditionalComments', '$Seed')",$conn)
            or die("Error ! refresh the page or relogin .");
            		
		echo" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
       echo"<center>";  
       echo "data updated in the database , click on next to proceed  ";
       echo "<br/>";
       echo "<br/>";
       echo "<a href='edu.php'> NEXT </a>";	
   }
}

PART FOR CONNECTION TO DATABASE


<?php
// -----------------------------------------------------------------------------
// This function is common to all the database operations.
// It makes a connection to the database given its name
// and returns a link to the database.
// -----------------------------------------------------------------------------

function db_connect()
{
   //provide your database credentials 
   $host_name = "root";
   $user_name = "olu02961";
   $password = "12345";
   $db_name = "db_olu02961";
   
   $db_link = mysqli_connect($host_name, $user_name, $password, $db_name);
   
   if (!$db_link) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
	
   return $db_link;
}
?>