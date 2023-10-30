<?php

// echo 'Database FruitsAndVegetables';

require "database.php";

$sql = "SELECT *    FROM tools";
$result = mysqli_query($conn, $sql);
$tools4ever = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($tools4ever);
// echo "<pre>";
$title = "Tools overzicht";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($tools4ever as $tool):
            ?>
            <tr>
                <td class="id-style"><?php echo $tool["tool_id"] ?></td>
                <td><?php echo $tool["tool_name"] ?></td>
                <td><?php echo $tool["tool_category"] ?></td>
                <td><?php echo $tool["tool_price"] ?></td>
                <td><?php echo $tool["tool_brand"] ?></td>
                <td><a href="tools_detail.php?id=<?php  echo $tool["tool_id"] ?>">Bekijk meer details</a></td>
            </tr>
            <?php
                endforeach
            ?>
        </tbody>
    </table>
</body>
</html>