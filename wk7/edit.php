<?php
require "db.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM schools WHERE id = :id");
$stmt->execute([":id" => $id]);
$school = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE schools
            SET school_name = :school_name,
                address = :address,
                city = :city,
                province = :province,
                postal_code = :postal_code
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":school_name" => $_POST["school_name"],
        ":address" => $_POST["address"],
        ":city" => $_POST["city"],
        ":province" => $_POST["province"],
        ":postal_code" => $_POST["postal_code"],
        ":id" => $id
    ]);
    header("Location: index.php");
    exit;
}
?>

<h1>Edit School</h1>
<form method="post">
    Name: <input type="text" name="school_name" value="<?= htmlspecialchars($school['school_name']) ?>"><br><br>
    Address: <input type="text" name="address" value="<?= htmlspecialchars($school['address']) ?>"><br><br>
    City: <input type="text" name="city" value="<?= htmlspecialchars($school['city']) ?>"><br><br>
    Province: <input type="text" name="province" value="<?= htmlspecialchars($school['province']) ?>"><br><br>
    Postal Code: <input type="text" name="postal_code" value="<?= htmlspecialchars($school['postal_code']) ?>"><br><br>
    <button type="submit">Update</button>
</form>
