<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="icon" type="picture/png" href="gallery/furina_logo.png">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch images for gallery
    $sql_images = "SELECT src, alt FROM images";
    $result_images = $conn->query($sql_images);

    // Fetch blog posts
    $sql_blogs = "SELECT date, category, title, content, image_src FROM blogs";
    $result_blogs = $conn->query($sql_blogs);
    ?>

    <audio class="audio-background" controls autoplay loop>
        <source src="audio/Fontaine Main Theme 1 hour [ Genshin Impact ].mp3" type="audio/mp3">
    </audio>

    <audio id="myAudio" style="display: none;" controls></audio>

    <nav class="navigator">
        <div class="nav-logo">
            <a href="#" onclick="playRandomAudio()">
                <img src="gallery/furina_logo.png" alt="Furina Logo Picture">
            </a>
        </div>
        <ul class="nav-links">
            <li class="link"><a href="#">Home</a></li>
            <li class="link" id="link1"><a href="#">Gallery</a></li>
            <li class="link" id="link2"><a href="#">Blog</a></li>
            <li class="link" id="link3"><a href="#">Contact</a></li>
        </ul>
        <button class="btn" onclick="showPopup()">Pat~Pat Me</button>
    </nav>
    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <h4>HOMEPAGE</h4>
            <h1>Hi, I'm <span>Fachsyan</span>.<br>Creator Of This Web</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis necessitatibus est ab, obcaecati animi eius facilis dicta, corporis eligendi, vero enim. Laudantium voluptates, quas qui magni incidunt numquam illum fuga.
            </p>
            
            <button class="btn" id="toggleAudioBtn">Pause Audio Background</button>
        </div>
        <div class="image">
            <img src="gallery/furina_container.png" alt="Furina Cute" onclick="playRandomAudio()">
        </div>
    </header>

    <section class="section">
        <h2 class="header">The <span>Gallery</span></h2>
        <div class="gallery">
            <?php
            if ($result_images->num_rows > 0) {
                while($row = $result_images->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img src="' . $row["src"] . '" alt="' . $row["alt"] . '">';
                    echo '</div>';
                }
            } else {
                echo "No images found.";
            }
            ?>
        </div>
    </section>

    <section class="section">
        <h2 class="header">Our Blog</h2>
        <p class="sub-header">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia qui omnis, asperiores odit enim cumque quaerat nisi. Magni libero tempore dignissimos fugiat non accusamus consectetur repellat tempora! Minus, sint similique?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nam voluptatem id, minus nemo reiciendis fuga dolorum nihil odio repellat nesciunt iste recusandae error laborum aspernatur veritatis, neque corrupti officiis?
        </p>
        <div class="blog">
            <?php
            if ($result_blogs->num_rows > 0) {
                while($row = $result_blogs->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<div class="blog-img">';
                    echo '<img src="' . $row["image_src"] . '" alt="Blog Image">';
                    echo '</div>';
                    echo '<div class="blog-text">';
                    echo '<span>' . date("d F Y", strtotime($row["date"])) . ' / ' . $row["category"] . '</span>';
                    echo '<a class="blog-title">' . $row["title"] . '</a>';
                    echo '<p>' . $row["content"] . '</p>';
                    echo '<a>Read More</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No blog posts found.";
            }
            ?>
        </div>
    </section>

    <footer class="section">
        <span class="blur"></span>
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo" onclick="playRandomAudio()">
                <img src="gallery/furina_logo.png" alt="Furina Logo Picture">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a soluta adipisci error, saepe quae doloremque autem tempora maxime! Beatae aspernatur quod id eaque et incidunt! Velit eveniet voluptatem est.
            </p>
            <div class="socials">
                <a href="https://www.facebook.com/yanzfrwe.yanzfrwe" target="_blank"><i class="ri-facebook-box-line"></i></a>
                <a href="https://www.instagram.com/mosaku1236/" target="_blank"><i class="ri-instagram-line"></i></a>
                <a href="https://twitter.com/Spongebar1232" target="_blank"><i class="ri-twitter-x-line"></i></a>
            </div>
        </div>
        <div class="column">
            <h4>About Me</h4>
            <div class="row">
                <div class="icon"><i class="ri-information-line"></i></div>
                <div class="text">
                    <h5>Name</h5>
                    <p>Fachsyan Rajendra Ismail</p>
                </div>
            </div>
            <div class="row">
                <div class="icon"><i class="ri-mail-line"></i></div>
                <div class="text">
                    <h5>Email</h5>
                    <p>fachsyanismail026@student.unsrat.ac.id</p>
                </div>
            </div>
            <div class="row">
                <div class="icon"><i class="ri-whatsapp-line"></i></div>
                <div class="text">
                    <h5>Contact</h5>
                    <p>+6281325321495</p>
                </div>
            </div>            
        </div>
        <div class="column">
            <form id="contactForm" method="post">
                <h4>Send Messages</h4>
                <div class="inputBox">
                    <input type="text" name="fullName" required>
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" required>
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="message" required></textarea>
                    <span>Type your Messages...</span>
                </div>
                <div class="inputBox">
                    <input type="submit">
                </div>
            </form>
        </div>
    </footer>
    
    <div class="copyright">
        Copyright © 2024 Fachsyan Rajendra Ismail. All Rights Reserved.
    </div>
    
    <script src="javascript/script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
