<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO schools (school_name, address, city, province, postal_code)
            VALUES (:school_name, :address, :city, :province, :postal_code)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":school_name" => $_POST["school_name"],
        ":address" => $_POST["address"],
        ":city" => $_POST["city"],
        ":province" => $_POST["province"],
        ":postal_code" => $_POST["postal_code"]
    ]);
    header("Location: index.php");
    exit;
}
?>

<h1>Add New School</h1>
<form method="post">
    Name: <input type="text" name="school_name"><br><br>
    Address: <input type="text" name="address"><br><br>
    City: <input type="text" name="city"><br><br>
    Province: <input type="text" name="province"><br><br>
    Postal Code: <input type="text" name="postal_code"><br><br>
    <button type="submit">Save</button>
</form>
