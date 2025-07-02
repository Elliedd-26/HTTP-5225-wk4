<?php
// 打开 CSV 文件
$filename = "colors.csv";
$colors = [];

// 打开文件
if (($handle = fopen($filename, "r")) !== FALSE) {
    // 第一行：读取表头
    $headers = fgetcsv($handle);

    // 逐行读取
    while (($data = fgetcsv($handle)) !== FALSE) {
        $colors[] = array_combine($headers, $data);
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colors List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Colors List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Hex</th>
            <th>Color Preview</th>
            <th>Red</th>
            <th>Green</th>
            <th>Blue</th>
            <th>Hue</th>
            <th>HSLS</th>
            <th>HSLL</th>
        </tr>
        <?php foreach ($colors as $color): ?>
            <tr>
                <td><?php echo htmlspecialchars($color['Name']); ?></td>
                <td><?php echo htmlspecialchars($color['Hex']); ?></td>
                <td style="background-color: <?php echo htmlspecialchars($color['Hex']); ?>;"></td>
                <td><?php echo htmlspecialchars($color['Red']); ?></td>
                <td><?php echo htmlspecialchars($color['Green']); ?></td>
                <td><?php echo htmlspecialchars($color['Blue']); ?></td>
                <td><?php echo htmlspecialchars($color['Hue']); ?></td>
                <td><?php echo htmlspecialchars($color['HSLS']); ?></td>
                <td><?php echo htmlspecialchars($color['HSLL']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
