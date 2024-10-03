<?php session_start(); 
include 'config/profileconfig.php';

$manga_id = 7; 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (username, comment, manga_id) VALUES ('$username', '$comment', $manga_id)";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Comment added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Details</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'components/header.php'; ?>
</head>
<body>

<section class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <img src="./assets/Berserk.jpg" class="img-fluid" alt="Manga Cover">
        </div>

        <div class="col-md-9 d-flex flex-column justify-content-between">
            <div class="mb-3">
                <h1 class="display-4 fw-bold">Berserk</h1>
            </div>

            <div class="d-flex justify-content-between">
                <div>
                    <h5>Miura, Kentarou</h5>
                    <h5>Action, Adventure, Award Winning, Drama, Fantasy, Horror, Supernatural</h5>
                </div>
                <div>
                    <h5>Ongoing</h5>
                </div>
            </div>

            <div class="mt-4">
                <h5>Summary:</h5>
                <p>Guts, a former mercenary now known as the Black Swordsman, is out for revenge. After a tumultuous childhood, he finally finds someone he respects and believes he can trust, only to have everything fall apart when this person takes away everything important to Guts for the purpose of fulfilling his own desires. Now marked for death, Guts becomes condemned to a fate in which he is relentlessly pursued by demonic beings. <br>

Setting out on a dreadful quest riddled with misfortune, Guts, armed with a massive sword and monstrous strength, will let nothing stop him, not even death itself, until he is finally able to take the head of the one who stripped him—and his loved one—of their humanity.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h5>Chapters:</h5>
        <div class="container mt-2">
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="container mt-2 d-flex flex-column justify-content-center">
        <h3>Comments:</h3>

        <div class="container">
            <!-- Comment Form -->
            <?php if (isset($_SESSION['username'])): ?>
                <form action="manga7.php" method="POST">
                    <input type="hidden" name="manga_id" value="<?php echo $manga_id; ?>">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Add a Comment:</label>
                        <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-dark">Submit Comment</button>
                </form>
            <?php else: ?>
                <p>Please <a class="btn btn-sm btn-outline-dark" href="login.php">log in</a> to post a comment.</p>
            <?php endif; ?>
        </div>

        <!-- Display Comments -->
        <div class="mt-5">
            <?php
            $sql = "SELECT comments.*, users.profile_picture 
                FROM comments 
                JOIN users ON comments.username = users.username 
                WHERE comments.manga_id = $manga_id 
                ORDER BY comments.created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $profile_picture = !empty($row['profile_picture']) && file_exists('uploads/profile_pictures/' . $row['profile_picture']) 
                        ? 'uploads/profile_pictures/' . $row['profile_picture'] 
                        : './assets/profile_placeholder.png';

                    echo "<div class='card mb-3'>
                            <div class='card-body align-items-center'>
                        
                                <div class='d-flex justify-content-between mb-1'>  
                                    <div class='d-flex align-items-center'>  
                                      <img src='{$profile_picture}' alt='Profile Picture' class='rounded-circle me-3' width='40' height='40'>
                                      <h5 class='card-title'>{$row['username']}</h5>
                                    </div>
                                    <div>
                                       <p class='card-text'><small class='text-muted'>Posted on {$row['created_at']}</small></p>
                                    </div>
                                </div>
                                <div class='ms-5'>
                                    <p class='card-text'>{$row['comment']}</p>
                                </div>
                            </div>
                          </div>";
                    }
                } else {
                    echo "<p>No comments yet.</p>";
                }
            ?>
        </div>

    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
