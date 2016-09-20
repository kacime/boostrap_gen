<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bootstrap_gen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connection réussie";
?>

<!-- Une fois la connexion établie, on crée le menu à partir des cat listées dans la base de données, et on évite les doublons avec DISTINCT-->
<select name=cat><option value=""> --Choisr une catégorie-- </option>
<?php $sql= mysqli_query($conn, "SELECT DISTINCT cat FROM bloc");
    while($result = mysqli_fetch_array($sql)){
        echo "<OPTION VALUE='".$result[0]."'>".$result[0]."</OPTION>";
    }
?>
</select>


<?php $conn->close(); ?>
