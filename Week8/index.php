<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<h2>Hello Everyone!</h2>
<h3>Asia Pacific College</h3>


<?php 
   echo "<p>Server Time: " . date("Y-m-d H:i:s") . "</p>";

?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        $userMessage = $_POST["user_message"];         
        echo "<p>Your Message: $userMessage</p>";    
    }
 
    $directory = "uploads/";     
    $files = scandir($directory);

    echo "<p>Files in $directory:</p>";     
    echo "<ul>";     
    foreach ($files as $file) {        
        if ($file != "." && $file != "..")  {             
            echo "<li>$file</li>";         
        }     
    }     
    echo "</ul>";
?> 

<?php 
    session_start(); 

    if (!isset($_SESSION["visit_count"])) {         
        $_SESSION["visit_count"] = 1;     
    } else {
        $_SESSION["visit_count"]++;
    }

    echo "<p>Number of Visits: " . $_SESSION["visit_count"] . "</p>";
?> 

<?php
    $randomNumber = rand(1, 100); 
    echo "<p>Random Number: $randomNumber</p>";
?>

<?php
$visitorIP = $_SERVER['REMOTE_ADDR'];    
echo "<p>Your IP Address: $visitorIP</p>";
?>
 
<form method="post">     
    <label for="user_message">Enter Your Message:</label>     
    <input type="text" name="user_message" id="user_message" />     
    <button type="submit">Submit</button> 
</form>

</body>
</html>