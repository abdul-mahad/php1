<?php
if (isset($_POST['upload'])) {
    $filetemp = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $imageData = file_get_contents($filetemp);

    // Establish a database connection
    $servername = "localhost";  // Your database server
    $username = "root";    // Your database username
    $password = "";    // Your database password
    $dbname = "mahad"; // Your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL query to insert the image into the database
    $stmt = $conn->prepare("INSERT INTO images (filename, image_data) VALUES (?, ?)");
    $stmt->bind_param("sb", $filename, $imageData);

    if ($stmt->execute()) {
        echo "Image uploaded successfully!";
    } else {
        echo "Error uploading image: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>
