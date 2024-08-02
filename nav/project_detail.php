<!DOCTYPE html>
<html lang="en">
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

    $_SESSION["ProjectID"] = $_GET['ProjectID'];
    $sessionValue = $_SESSION["ProjectID"];

    $sql3 = "SELECT ProjectName FROM agc_Project WHERE ProjectID = '$sessionValue'";

    $result3 = mysqli_query($conn, $sql3);

            
    if ($result3->num_rows > 0) {
        while($row3 = mysqli_fetch_assoc($result3)) {
            $pageTitle = $row3["ProjectName"];
        }
    }
    else {
        
    }
    

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
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
        <?php  
            
            // Basic info
            $sql = "SELECT ProjectID, ProjectName, ProjectShortcut, IMDSName, Customer FROM `agc_Project` WHERE ProjectID = '$sessionValue'";
    
            $result = mysqli_query($conn, $sql);

            
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        
                    $projectID = $row["ProjectID"];
                    $projectName = $row["ProjectName"];
                    $projectShortcut = $row["ProjectShortcut"];
                    $projectIMDS = $row["IMDSName"];
                    $projectCustomer = $row["Customer"];

                    
                    $_SESSION["ProjectID"] = $projectID;
                    $_SESSION["ProjectName"] = $projectName;
                    $_SESSION["ProjectShortcut"] = $projectShortcut;
                    $_SESSION["IMDSName"] = $projectIMDS;
                    $_SESSION["Customer"] = $projectCustomer;
                }
            }
            else {
                echo "Žádné výsledky.";
            }

        ?>
        <div class="detail-container">
            <a class="arrow-back-link" href="javascript:history.back()">
                <svg class="arrow-back" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><style>svg{fill:#ffffff}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
            </a>
            <div class="detail-info">
                <div class="detail-heading">
                    <div class="detail-name">
                        <h1><?php echo $projectName ?></h1>
                        <h2>Zkratka: <?php echo $projectShortcut ?></h2>
                    </div>
                    <div class="detail-edit">
                        <?php
                        if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
                        ?>
                            <a href="./project_update.php">
                                <svg class="edit-icon" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><path fill="#ffffff" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V299.6l-94.7 94.7c-8.2 8.2-14 18.5-16.8 29.7l-15 60.1c-2.3 9.4-1.8 19 1.4 27.8H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg>     
                            </a>
                        <?php
                        }
                        else{
                                
                        }
                        ?>
                    </div>
                </div>
                <div class="detail-des">
                    <p>IMDS: <?php echo $projectIMDS ?></p>
                    <p>Zákazník: <?php echo $projectCustomer ?></p>
                </div>
            </div>
            <div class="detail-materials">
                <div class="table-heading">
                    <h2>Použité materiály</h2>
                </div>
                <div class="result-wrapper project-detail">
                <div class="parameters">
                    <p>SAP</p>
                    <p>Název</p>
                </div>
                <div class="result" id="result">
                <?php

                    $sql2 = "SELECT agc_Material.SAPNumber, agc_Material.MaterialName, agc_Material.MaterialType, agc_Material.MaterialNote FROM agc_MaterialPosition INNER JOIN agc_Material ON agc_MaterialPosition.SAPNumberFK = agc_Material.SAPNumber INNER JOIN agc_TechnicalSheet ON agc_TechnicalSheet.TechnicalSheetNumber = agc_MaterialPosition.TechnicalSheetNumberFK INNER JOIN agc_Project ON agc_Project.ProjectID = agc_TechnicalSheet.ProjectIDFK WHERE agc_Project.ProjectID = '$sessionValue'";

                    $result2 = mysqli_query($conn, $sql2);
                    if($result2->num_rows > 0){
                        while($row2 = mysqli_fetch_assoc($result2)){

                            echo "<a class=\"hint\" href=\"material_detail.php?SAPNumber=".$row2["SAPNumber"]."\"><div class=\"results\"><p>".$row2["SAPNumber"]."</p><p>".$row2["MaterialName"]."</p></div></a>";
                        }
                    }

                ?>
                        
            </div>
        </div>
    </div>
</div>
</main>
    <script src="../script.js"></script>
</body>
</html>