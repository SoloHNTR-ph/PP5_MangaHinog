<?php
session_start();
include('config/profileconfig.php'); 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'update_profile') {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif'); 

    if (!empty($_FILES['profile_picture']['name'])) {
        $file_name = $_FILES['profile_picture']['name'];
        $file_size = $_FILES['profile_picture']['size'];
        $file_tmp = $_FILES['profile_picture']['tmp_name'];
        $target_dir = 'uploads/profile_pictures/' . $file_name;

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1048576) { 
                if (move_uploaded_file($file_tmp, $target_dir)) {
                    $sql = "UPDATE users SET profile_picture = '$file_name' WHERE username = '$username'";
                    if ($conn->query($sql) === TRUE) {
                        header("Location: profile.php");
                        exit();
                    } else {
                        echo "Error updating profile picture in database: " . $conn->error;
                    }
                } else {
                    echo '<p style="color: red;">Failed to upload profile picture!</p>';
                }
            } else {
                echo '<p style="color: red;">File too large! Please upload a file smaller than 1MB.</p>';
            }
        } else {
            echo '<p style="color: red;">Invalid file type! Please upload JPG, JPEG, PNG, or GIF files.</p>';
        }
    } else {
        echo '<p style="color: red;">Please choose a file to upload.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'components/header.php'; ?>
</head>
<body>
    <!-- profile -->
  <div class="d-flex justify-content-center">
    <div class="container text-center mx-5 mt-5">
        <h2 class="mb-4"><?php echo $user['username']; ?>'s Profile</h2>
        <div class="card">
            <div class="card-body">
                <?php if (!empty($user['profile_picture']) && file_exists('uploads/profile_pictures/' . $user['profile_picture'])): ?>
                    <img src="uploads/profile_pictures/<?php echo $user['profile_picture']; ?>" alt="Profile Picture" class="mb-3 rounded-circle" width="200" height="200">
                <?php else: ?>
                    <img src="./assets/profile_placeholder.png" alt="Profile Picture" class="mb-3 rounded-circle" width="200" height="200">
                <?php endif; ?>
                <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
                <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                <br>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        
        <!-- Form to upload profile picture -->
        <form action="profile.php" method="POST" enctype="multipart/form-data" class="mt-3">
            <input type="hidden" name="action" value="update_profile">
            <div class="mb-3">
                <label for="profile_picture" class="form-label">Update Profile Picture</label>
                <input class="form-control" type="file" id="profile_picture" name="profile_picture">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile Picture</button>
        </form>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
