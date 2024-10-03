<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Manga Hinog</title>
    <!-- nav  -->
    <?php include 'components/header.php' ?>
    
    
      <div>
        <div class="flex flex-col items-center  gap-6 w-full">
          <h2 class="text-latest text-[60px] font-bold">Latest Updates</h2>
      
          <div class="recomend-section">
            
          </div>
        </div>
      <!-- header  -->
  
      <div id="carouselExampleAutoplaying" class="car carousel slide" data-bs-ride="carousel">
        <div class="car carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</head>
<body>

  <div>
    <div class="flex flex-col items-center p-5 gap-6 w-full">
      <h2 class="text-pop text-[60px] font-bold">Most Popular</h2>
      
      <div class="recomend-section">
       
      </div>
    </div>
    
   
    <div class="most-popular-section">
    
    </div>
  </div>
 
   <!-- manga -->
   
      <div class="manga-list">
       <a href="./manga1.php">
          <div class="manga">
            <img src="./assets/One Piece.jpg" class="" />
            <div class="layer">
             <h3>One Piece</h3>
             <p>
             Gol D. Roger, a man referred to as the King of the Pirates, is set to be executed by the World Government. But just before his demise, he confirms the existence of a great treasure, One Piece, located somewhere within the vast ocean known as the Grand Line. Announcing that One Piece can be claimed by anyone worthy enough to reach it, the King of the Pirates is executed and the Great Age of Pirates begins.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga2.php">
          <div class="manga">
            <img src="./assets/Dragon Ball.jpg" />
            <div class="layer">
             <h3>Dragon Ball</h3>
             <p>
             Having defeated Boo, Goku is starting to get bored with his life on Earth. His wife, Chi-chi, wants him to get a job, but all he wants to do is train and fight stronger enemies. Elsewhere in the universe, the God of Destruction, Beerus, and his attendant Whis are traveling from planet to planet in search of food and entertainment. After blowing up some hapless victims, Beerus is reminded of a man from his dreams with the moniker "Super Saiyan God," or something like that... The God of Destruction sets his sights on Earth to track down this mysterious man! Maybe this will give Goku something to do?
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga3.php">
          <div class="manga">
            <img src="./assets/Naruto T70.jpg" />
            <div class="layer">
             <h3>Naruto</h3>
             <p>
             And so when he is assigned to Team 7—along with his new teammates Sasuke Uchiha and Sakura Haruno, under the mentorship of veteran ninja Kakashi Hatake—Naruto is forced to work together with other people for the first time in his life. Through undergoing vigorous training and taking on challenging missions, Naruto must learn what it means to work in a team and carve his own route toward becoming a full-fledged ninja recognized by his village.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga4.php">
          <div class="manga">
            <img src="./assets/Slam Dunk.jpg" />
            <div class="layer">
             <h3>Slam Dunk</h3>
             <p>
             Hanamichi Sakuragi, a tall, boisterous teenager with flame-red hair and physical strength beyond his years, is eager to put an end to his rejection streak of 50 and finally score a girlfriend as he begins his first year of Shohoku High. However, his reputation for delinquency and destructiveness precedes him, and most of his fellow students subsequently avoid him like the plague. As his first day of school ends, he is left with two strong thoughts: "I hate basketball" and "I need a girlfriend."
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga5.php">
          <div class="manga">
            <img src="./assets/Attack on titan.jpg" />
            <div class="layer">
             <h3>Attack on Titan</h3>
             <p>
             Hundreds of years ago, horrifying creatures which resembled humans appeared. These mindless, towering giants, called Titans, proved to be an existential threat, as they preyed on whatever humans they could find in order to satisfy a seemingly unending appetite. Unable to effectively combat the Titans, mankind was forced to barricade themselves within large walls surrounding what may very well be humanity's last safe haven in the world.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga6.php">
          <div class="manga">
            <img src="./assets/Chainsaw Man.jpg" />
            <div class="layer">
             <h3>Chainsaw Man</h3>
             <p>
             Denji has a simple dream—to live a happy and peaceful life, spending time with a girl he likes. This is a far cry from reality, however, as Denji is forced by the yakuza into killing devils in order to pay off his crushing debts. Using his pet devil Pochita as a weapon, he is ready to do anything for a bit of cash.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga7.php">
          <div class="manga">
            <img src="./assets/Berserk.jpg" />
            <div class="layer">
             <h3>Berserk</h3>
             <p>
             Guts, a former mercenary now known as the Black Swordsman, is out for revenge. After a tumultuous childhood, he finally finds someone he respects and believes he can trust, only to have everything fall apart when this person takes away everything important to Guts for the purpose of fulfilling his own desires. Now marked for death, Guts becomes condemned to a fate in which he is relentlessly pursued by demonic beings.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga8.php">
          <div class="manga">
            <img src="./assets/Hunter X Hunter.jpg" />
            <div class="layer">
             <h3>Hunter X Hunter</h3>
             <p>
             Gon Freecss wants to become a Hunter so he can find his father, a man who abandoned him to pursue a life of adventure. But it's not that simple: only one in one hundred thousand can pass the Hunter Exam, and that is just the first obstacle on his journey. During the Hunter Exam, Gon befriends many other potential Hunters, such as the mysterious Killua; the revenge-driven Kurapika; and Leorio, who aims to become a doctor. There's a world of adventure and peril awaiting, and those who embrace it with open arms can become the greatest Hunters of them all!

             </p>
            
            </div>
          </div>
       </a>

      </div>
</div>

<!-- footer.html -->
<?php include 'components/footer.php' ?>

          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="carousel.js"></script>
</body>
</html>