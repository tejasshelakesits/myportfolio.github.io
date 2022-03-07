<?php
$insert = false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection failed due to ". $mysqli_connect_error());
        
    }
    // else{
    //     $stmt = $con->prepare("Insert into rgistration(name,email,project,message)values(?,?,?,?)");
    //     $stmt->bind_param("ssss",$name,$email,$project,$message);
    //     $stmt ->execute();
    //     echo "Registration Successfully...";
    //     $stmt->close();
    //     $con->close();
    // }

    // echo "Successfully connecting to the database.";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `myinfo`.`contact1` (`name`, `email`, `project`, `message`, `date`) VALUES ('$name', '$email', '$project', '$message', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == TRUE){
        //echo "Successfully inserted.";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- header section starts -->
    <header>
        <div class="user">
            <img src="myphoto2.jpg" alt="myphoto">
            <h3 class="name">Tejas M. Shelake</h3>
            <p class="post">Computer Engineering Student</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span>TEJAS SHELAKE</span></h1>
        <p>Organized and dependable candidate successful at managing multiple priorities with a positive attitude. Committed to expanding my skill set and learning in the position given. Considered hardworking, punctual, and driven.</p>

        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>
    <!-- home section ends -->

    <!-- about section starts -->

    <section class="about" id="about">

        <h1 class="heading"><span>about </span>me</h1>
        <div class="row">
            <div class="info">
                <h3><span> name : </span> tejas shelake </h3>
                <h3><span> age : </span> 20 </h3>
                <h3><span> qualification : </span> Computer Engineering Student</h3>
                <h3><span> post : </span> developer </h3>
                <h3><span> language : </span> marathi/Hindi/English </h3>
                <a href="Tejas's Resume.pdf"><button download class="btn">download CV <i class="fas fa-download"></i></button></a>
                <a href="https://www.surveyheart.com/form/6220ffcf8b49886ad8bcedc7" target="_blank"><button class="btn"> Connect Me <i class="fas fa-paper-plane"></i></button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>SE</span>
                    <h3>Computer Engineering</h3>
                </div>

                <div class="box">
                    <span> Progr.</span>
                    <h3> & Data Structures</h3>
                </div>

                <div class="box">
                    <span> Social Media </span>
                    <h3> Marketing </h3>
                </div>

                <div class="box">
                    <span> Front - End </span>
                    <h3> Development </h3>
                </div>

            </div>
        </div>

    </section>
    <!-- about section ends -->
    <!-- education section starts -->
    <section class="education" id="education">

        <h1 class="heading"> my <span>education </span></h1>
        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2024</span>
                <h3>Computer Engineering</h3>
                <p>Sinhgad Institutes Of Technology And Science(SITS), Narhe Pune</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020</span>
                <h3>HSC 12th Science</h3>
                <p>Shri Shivaji Vidyalaya And Junior College, Dhamani - Pune</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>SSC 10th</h3>
                <p>Shri Shivaji Vidyalaya And Junior College, Dhamani - Pune</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2012</span>
                <h3>Primary Education</h3>
                <p>Zilla Parishad Primary School, Dhamani - Pune</p>
            </div>

        </div>

    </section>
    <!-- education section ends -->

    <!-- portfolio section starts -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> my <span>portfolio </span></h1>
        <div class="box-container">

            <div class="box">
                <img src="images1.png" alt="image1">
            </div>
            <div class="box">
                <img src="images2.png" alt="image2">
            </div>
            <div class="box">
                <img src="images3.jpeg" alt="image3">
            </div>
            <div class="box">
                <img src="images4.jpeg" alt="image4">
            </div>
            <div class="box">
                <img src="images5.jpeg" alt="image5">
            </div>
            <div class="box">
                <img src="images6.jpeg" alt="image6">
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact </span>me</h1>
        <div class="row">
            <div class="content">

                <h3 class="title">contact info</h3>

                <div class="info">
                    <h3><i class="fas fa-envelope"></i>tejasshelake20@gmail.com</h3>
                    <h3><i class="fas fa-phone"></i>+91 7057879221</h3>
                    <h3><i class="fas fa-phone"></i>+91 9975951129</h3>
                    <h3><i class="fas fa-map-marker-alt"></i>dhamani pune, maharashtra - 410508</h3>
                </div>

            </div>

            <form action="index.php" method = "post">

                <input type="text" name="name" placeholder="name" class="box">
                <input type="email" name="email" placeholder="email" class="box">
                <input type="text" name="project" placeholder="project" class="box">
                <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
                <?php
                if($insert == true){
                    echo "<p class='submsg'>Thanks for joining me...</p>";
                }
                ?>
                <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>

            </form>

        </div>

    </section>
    <!-- contact section ends -->

    <!-- scroll top button -->

    <a href="#home" class="top">
        <img src="scroll-top-img.png" alt="top">
    </a>

    <div id="menu" class="fas fa-bars"></div>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>

<!-- INSERT INTO `contact1` (`sr`, `name`, `email`, `project`, `message`, `date`) VALUES ('1', 'test', 'test@gmail.com', 'yes', 'yes', current_timestamp()); -->

