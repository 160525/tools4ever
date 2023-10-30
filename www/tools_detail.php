<?php   
require 'database.php';
$id = $_GET["id"];
$sql = "SELECT * FROM tools WHERE tool_id = '$id'";
$result = mysqli_query($conn, $sql);
$tools = mysqli_fetch_assoc($result);
// if ($result) {
//     $tools = mysqli_fetch_assoc($result);
// } else {
//     echo "Fout bij het uitvoeren van de query: " . mysqli_error($conn);
//     // Voeg hier eventueel foutafhandeling toe.
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tools["tool_name"] ?></title>
</head>
<body>
    <h1><?php echo $tools["tool_name"] ?></h1>
    
</body>
</html>
