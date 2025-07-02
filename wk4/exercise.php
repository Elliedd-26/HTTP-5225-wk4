<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSONPlaceholder Users</title>
</head>
<body>
    <h1>List of Users</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            $name = $user['name'];
            $email = $user['email'];
            $address = $user['address']['street'] . ', ' 
                     . $user['address']['suite'] . ', ' 
                     . $user['address']['city'] . ', ' 
                     . $user['address']['zipcode'];
            
            echo "<li>";
            echo "<strong>Name:</strong> $name<br>";
            echo "<strong>Email:</strong> $email<br>";
            echo "<strong>Address:</strong> $address<br>";
            echo "</li><br>";
        }
        ?>
    </ul>
</body>
</html>
