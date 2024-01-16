<?php
session_start();
include("../config/config.php");
include("../config/functions.php");

$user_data = check_login($link);

if ($user_data) {
    $username = $user_data['username'];
    // Retrieve other user data here...

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_image"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["profile_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if ($_FILES["profile_image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
                $imagePath = $targetFile;
                // Store $imagePath in the database for the user
                // Example: $sql = "UPDATE users SET profile_image = '$imagePath' WHERE username = '$username'";
                // Perform SQL query and handle any errors
                echo "The file " . basename($_FILES["profile_image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
        form {
            margin-bottom: 20px;
        }
        img {
            max-width: 300px;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <!-- Display other user details here -->

    <h2>Upload Profile Image</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="profile_image" id="profile_image">
        <input type="submit" value="Upload" name="submit">
    </form>

    <!-- Display user's profile image -->
    <?php
    if (isset($imagePath)) {
        echo "<img src='" . $imagePath . "' alt='Profile Image'>";
    } else {
        echo "No profile image available.";
    }
    ?>
</body>
</html>

<?php
} else {
    echo "<h1>Please log in.</h1>";
}
?>