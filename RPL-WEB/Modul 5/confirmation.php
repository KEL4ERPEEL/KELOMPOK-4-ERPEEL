<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="active">

    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
            <div class="profile">
                <img src="https://www.thexpressng.com/wp-content/uploads/2020/01/RONALDO.jpg" alt="profile_picture">
                <h3><?php echo $_SESSION['userLogin'] ?></h3>
                <p>Pelatih</p>
            </div>

            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span class="item">Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="far fa-newspaper"></i></span>
                        <span class="item">News</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Teams</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Progress</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Result</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-comment-dots"></i></span>
                        <span class="item">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-money-bill-wave"></i></span>
                        <span class="item">Payment</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>


        <script>
            var hamburger = document.querySelector(".hamburger");
            hamburger.addEventListener("click", function() {
                document.querySelector("body").classList.toggle("active");
            })
        </script>
</body>

</html>

<!-- <center>
        <br>
        <h2>Halo <?php //echo $_SESSION['userLogin'] 
                    ?></h2>
        <br>
        <a href="index.php" class="btn btn-danger" role="button">Logout</a>
    </center> -->