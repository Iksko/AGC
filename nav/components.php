<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemické složky</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <?php session_start(); ?>
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-logo">
            <?php if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
                ?>
                <a href="../login.php">
                    <img src="../images/agc-logo.png" alt="agc-logo">
                </a>
                <?php
            }
            else if(isset($_SESSION["readonly"]) && $_SESSION["readonly"] = true){
                ?>
                <a href="../readonly.php">
                    <img src="../images/agc-logo.png" alt="agc-logo">
                </a>
                <?php
            }
            else{
                ?>
                <a href="../index.php">
                    <img src="../images/agc-logo.png" alt="agc-logo">
                </a>
                <?php
            }
            ?>
        </div>
        <div class="hamburger" id="ham">
            <div class="bars"></div>
        </div>
    </div>
    <div id="mobile-navbar">
        <div class="mobile-nav-links">
            <a href="./projects.php">
                <div class="mobile-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"/></svg>
                    <p>Projekty</p>
                </div>
            </a>
            <a href="./sheets.php">
                <div class="mobile-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#ffffff}</style><path d="M0 448c0 35.3 28.7 64 64 64H224V384c0-17.7 14.3-32 32-32H384V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V448zM171.3 75.3l-96 96c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l96-96c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6zm96 32l-160 160c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l160-160c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6zM384 384H256V512L384 384z"/></svg>
                    <p>Technické listy</p>
                </div>
            </a>
            <a href="./materials.php">
                <div class="mobile-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#ffffff}</style><path d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg>
                    <p>Materiály</p>
                </div>
            </a>
            <a href="./components.php">
                <div class="mobile-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><style>svg{fill:#ffffff}</style><path d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96V64C14.3 64 0 49.7 0 32S14.3 0 32 0H96h64 64c17.7 0 32 14.3 32 32s-14.3 32-32 32V309.9l-49 79.6zM96 64v96h64V64H96zM352 0H480h32c17.7 0 32 14.3 32 32s-14.3 32-32 32V214.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4H261.4c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9V64c-17.7 0-32-14.3-32-32s14.3-32 32-32h32zm32 64V224c0 5.9-1.6 11.7-4.7 16.8L330.5 320h171l-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8V64H384z"/></svg>
                    <p>Chemické složky</p>
                </div>
            </a>
            <a href="./suppliers.php">
                <div class="mobile-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><style>svg{fill:#ffffff}</style><path d="M32 96c0-35.3 28.7-64 64-64H320c23.7 0 44.4 12.9 55.4 32h51.8c25.3 0 48.2 14.9 58.5 38l52.8 118.8c.5 1.1 .9 2.1 1.3 3.2H544c35.3 0 64 28.7 64 64v32c17.7 0 32 14.3 32 32s-14.3 32-32 32H576c0 53-43 96-96 96s-96-43-96-96H256c0 53-43 96-96 96s-96-43-96-96H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V288c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32V96zM384 224h85.9l-42.7-96H384v96zM160 432a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm368-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                    <p>Dodavatelé</p>
                </div>
            </a>
            <?php if(isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
            <div class="logout">
                <a href="">
                    <form action="" method="post">
                        <button type="submit" name="logout">
                            <div class="mobile-nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                                <p>Odhlásit se</p>
                            </div>
                        </button>
                    </form>
                </a>
            </div>
            <?php } 
            if(isset($_POST['logout'])){

                $_SESSION = [];

                session_destroy();
                ?>
                <script type="text/javascript">
                    window.onload = function() {
                        window.location.href = "<?php echo $_SERVER['REQUEST_URI']; ?>"
                    }
                </script>
                <?php

            }

            ?>
        </div>
    </div>
    <header id="header">
        <nav>
            <div class="nav-wrapper">
                <div class="nav-logo" id="nav-logo">
                <?php  
                        if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
                            ?>
                            <a href="../login.php">
                                <img class="agc-logo" src="../images/agc-logo.png" alt="agc-automotiv-logo">
                                <img class="agc-motto" id="agc-motto" src="../images/agc-motto.png" alt="agc-automotiv-motto">
                            </a>
                            <?php
                        }
                        else if(isset($_SESSION["readonly"]) && $_SESSION["readonly"] = true){
                            ?>
                             <a href="../readonly.php">
                                <img class="agc-logo" src="../images/agc-logo.png" alt="agc-automotiv-logo">
                                <img class="agc-motto" id="agc-motto" src="../images/agc-motto.png" alt="agc-automotiv-motto">
                            </a>
                            <?php
                        }
                        else{
                            ?>
                             <a href="../index.php">
                                <img class="agc-logo" src="../images/agc-logo.png" alt="agc-automotiv-logo">
                                <img class="agc-motto" id="agc-motto" src="../images/agc-motto.png" alt="agc-automotiv-motto">
                            </a>
                            <?php
                        }
                    ?>
                </div>
                <div class="nav-icons" id="nav-icons">
                    <a href="./projects.php">
                        <div class="nav-link">
                            <div class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"/></svg>
                            </div>
                            <div class="nav-text">
                                <p>Projekty</p>
                            </div>
                        </div>
                    </a>
                    <a href="./sheets.php">
                        <div class="nav-link">
                            <div class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#ffffff}</style><path d="M0 448c0 35.3 28.7 64 64 64H224V384c0-17.7 14.3-32 32-32H384V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V448zM171.3 75.3l-96 96c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l96-96c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6zm96 32l-160 160c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l160-160c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6zM384 384H256V512L384 384z"/></svg>
                            </div>
                            <div class="nav-text">
                                <p>Technické listy</p>
                            </div>
                        </div>
                    </a>
                    <a href="./materials.php">
                        <div class="nav-link">
                            <div class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#ffffff}</style><path d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg>
                            </div>
                            <div class="nav-text">
                                <p>Materiály</p>
                            </div>
                        </div>
                    </a>
                    <a href="./components.php">
                        <div class="nav-link">
                            <div class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><style>svg{fill:#ffffff}</style><path d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96V64C14.3 64 0 49.7 0 32S14.3 0 32 0H96h64 64c17.7 0 32 14.3 32 32s-14.3 32-32 32V309.9l-49 79.6zM96 64v96h64V64H96zM352 0H480h32c17.7 0 32 14.3 32 32s-14.3 32-32 32V214.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4H261.4c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9V64c-17.7 0-32-14.3-32-32s14.3-32 32-32h32zm32 64V224c0 5.9-1.6 11.7-4.7 16.8L330.5 320h171l-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8V64H384z"/></svg>
                            </div>
                            <div class="nav-text">
                                <p>Chemické složky</p>
                            </div>
                        </div>
                    </a>
                    <a href="./suppliers.php">
                        <div class="nav-link">
                            <div class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><style>svg{fill:#ffffff}</style><path d="M32 96c0-35.3 28.7-64 64-64H320c23.7 0 44.4 12.9 55.4 32h51.8c25.3 0 48.2 14.9 58.5 38l52.8 118.8c.5 1.1 .9 2.1 1.3 3.2H544c35.3 0 64 28.7 64 64v32c17.7 0 32 14.3 32 32s-14.3 32-32 32H576c0 53-43 96-96 96s-96-43-96-96H256c0 53-43 96-96 96s-96-43-96-96H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V288c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32V96zM384 224h85.9l-42.7-96H384v96zM160 432a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm368-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                            </div>
                            <div class="nav-text">
                                <p>Dodavatelé</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php if(isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
            <div class="logout">
                <a href="">
                    <form action="" method="post">
                        <button type="submit" name="logout">
                            <div class="nav-link logout">
                                <div class="nav-icon logout">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                                </div>
                                <div class="nav-text logout">
                                    <p>Odhlásit se</p>
                                </div>
                            </div>
                        </button>
                    </form>
                </a>
            </div>
            <?php 
            } 
            if(isset($_POST['logout'])) {

                $_SESSION = [];
            
                session_destroy();
                ?>
                <script type="text/javascript">
                    window.onload = function() {
                        window.location.href = "<?php echo $_SERVER['REQUEST_URI']; ?>"
                    }
                </script>
                <?php
            
            }
            
            ?>
        </nav>
    </header>
    <main>
        <div class="container">
            <a class="arrow-back-link" href="javascript:history.back()">
                <svg class="arrow-back" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><style>svg{fill:#ffffff}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
            </a>
            <div class="search-container">
                <div class="heading">
                    <h1>Chemické složky</h1>
                    <?php
                    if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
                    ?>
                        <a href="./add_component.php">
                            <svg class="add-plus" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#ffffff" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                        </a>
                    <?php
                    }
                    else{
                                
                    }
                    ?>
                </div>
                <form action="#" method="get">
                    <div class="search-input">
                        <input type="text" id="search" name="search" placeholder="CAS nebo název složky">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    </div>
                    <div class="search-btn">
                        <input type="submit" value="Vyhledat">
                    </div>
                </form>
                <div class="num-of-records">
                    <?php 
                        function Connect(){
                            $servername = "spsrakovnik.tech";
                            $username = "acg";
                            $password = "ACGAutomotive";
                            $database = "acg";
                        
                            $conn = new mysqli($servername, $username, $password, $database);
                        
                            mysqli_set_charset($conn, "utf8");
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                        
                            return $conn;
                        }

                        $conn = Connect();
                
                        $recordsCount = 0;

                        $sql2 = "SELECT CASNumber, ChemicalComponentName FROM `agc_ChemicalComponent` ORDER BY ChemicalComponentName";
                        $result2 = mysqli_query($conn, $sql2);
                        
                        if ($result2->num_rows > 0) {
                            while($row2 = mysqli_fetch_assoc($result2)) {
                                $recordsCount++;
                            }
                        }
                        else {
                            
                        }
                        
                    ?>
                    <p>Nalezeno celkem záznamů: <?php echo $recordsCount; ?></p>
                </div>
            </div>
            <div class="result-wrapper">
                <div class="parameters">
                    <?php
                        $orderby = "ChemicalComponentName";
                        if (isset($_GET["orderby"])){
                            if (!empty($_GET["orderby"])){
                                if ($_GET["orderby"] == "CASNumber") $orderby = "CASNumber";
                            }
                        }
                    ?>
                    <div class="sort">
                        <?php 
                        if ($orderby == "CASNumber"){
                        ?>
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path fill="#ffffff" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                        <?php
                        }
                        ?>
                        <p><a href="?orderby=CASNumber">CAS</a></p>
                    </div>
                    <div class="sort">
                        <?php 
                        if ($orderby == "ChemicalComponentName"){
                        ?>
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path fill="#ffffff" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                        <?php
                        }
                        ?>
                        <p><a href="?orderby=ChemicalComponentName">Název</a></p>
                    </div>
                </div>
                <div class="result" id="result">
                    <?php
                        if(isset($_GET["search"]) && !empty($_GET["search"])){
                            $conn = Connect();
                            $search = $_GET["search"];
                            $search = htmlentities(strip_tags(mysqli_real_escape_string($conn, $search)));

                            $sql = "SELECT CASNumber, ChemicalComponentName FROM `agc_ChemicalComponent` WHERE CASNumber LIKE '%$search%' OR ChemicalComponentName LIKE '%$search%' ORDER BY $orderby LIMIT 15";
                        
                            $result = mysqli_query($conn, $sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    
                                    if($row["CASNumber"]){
                                        $hint = "<a class=\"hint\" href=\"component_detail.php?CASNumber=".$row["CASNumber"]."\"><div class=\"results\"><p>".$row["CASNumber"]."</p><p>".$row["ChemicalComponentName"]."</p></div></a>";
                                        echo $hint;
                                        $_SESSION["CASNumber"] = $row["CASNumber"];
                                    }
                                    else{
                                        $hint = "<a class=\"hint\" href=\"component_detail.php?ChemicalComponentName=".$row["ChemicalComponentName"]."\"><div class=\"results\"><p></p><p>".$row["ChemicalComponentName"]."</p></div></a>";
                                        echo $hint;
                                        $_SESSION["ChemicalComponentName"] = $row["ChemicalComponentName"];
                                    }
                                }
                            }
                            else {
                                echo "Žádné výsledky pro ". $search;
                            }

                            
                            mysqli_close($conn);
                        }
                        else{

                            $conn = Connect();

                            $sql = "SELECT CASNumber, ChemicalComponentName FROM `agc_ChemicalComponent` ORDER BY $orderby LIMIT 15";
                            $result = mysqli_query($conn, $sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)) {

                                    if($row["CASNumber"]){
                                        $hint = "<a class=\"hint\" href=\"component_detail.php?CASNumber=".$row["CASNumber"]."\"><div class=\"results\"><p>".$row["CASNumber"]."</p><p>".$row["ChemicalComponentName"]."</p></div></a>";
                                        echo $hint;
                                        $_SESSION["CASNumber"] = $row["CASNumber"];
                                    }
                                    else{
                                        $hint = "<a class=\"hint\" href=\"component_detail.php?ChemicalComponentName=".$row["ChemicalComponentName"]."\"><div class=\"results\"><p></p><p>".$row["ChemicalComponentName"]."</p></div></a>";
                                        echo $hint;
                                        $_SESSION["ChemicalComponentName"] = $row["ChemicalComponentName"];
                                    }
                                }
                            }
                            else {
                                echo "Žádné výsledky.";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
   
    <script src="../script.js"></script>
</body>
</html>