<?php
require "db.php";

$stmt = $pdo->query("SELECT * FROM schools");
$schools = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Schools</h1>
<a href="create.php">Add New School</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Province</th>
        <th>Postal Code</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($schools as $school): ?>
    <tr>
        <td><?= htmlspecialchars($school['id']) ?></td>
        <td><?= htmlspecialchars($school['school_name']) ?></td>
        <td><?= htmlspecialchars($school['address']) ?></td>
        <td><?= htmlspecialchars($school['city']) ?></td>
        <td><?= htmlspecialchars($school['province']) ?></td>
        <td><?= htmlspecialchars($school['postal_code']) ?></td>
        <td>
            <a href="edit.php?id=<?= $school['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $school['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
