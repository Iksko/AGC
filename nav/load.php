<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAXLoad</title>
</head>
<body>
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
        $search = $_GET["search"];
        $page = $_GET["page"];

        $search = htmlentities(strip_tags(mysqli_real_escape_string($conn, $search)));

        //SQL pro projekty
        if($page === "Projekty"){
            
            $sql = "SELECT ProjectID, ProjectName, ProjectShortcut, IMDSName, Customer FROM `agc_Project` WHERE ProjectName LIKE '%$search%' OR ProjectShortcut LIKE '%$search%' OR IMDSName LIKE '%$search%' OR Customer LIKE '%$search%' ORDER BY ProjectName LIMIT 15";
            
            $result = mysqli_query($conn, $sql);
        
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $hint = "<a class=\"hint\" href=\"project_detail.php?ProjectID=".$row["ProjectID"]."\"><div class=\"results\"><p>".$row["ProjectName"]."</p><p>".$row["ProjectShortcut"]."</p><p>".$row["IMDSName"]."</p><p>".$row["Customer"]."</p></div></a>";
                    echo $hint;
                    $_SESSION["ProjectName"] = $row["ProjectName"];
                    $_SESSION["ProjectID"] = $row["ProjectID"];
                }
            }
            else {
                echo "Žádné výsledky pro ". $search;
            }

            
            mysqli_close($conn);
        }
        
        //SQL pro tech. listy
        if($page === "Technické listy"){

            $sql = "SELECT TechnicalSheetNumber, GlassType, LampTemp, Market, `Check` FROM `agc_TechnicalSheet` WHERE TechnicalSheetNumber LIKE '%$search%' OR GlassType LIKE '%$search%' OR LampTemp LIKE '%$search%' OR Market LIKE '%$search%' OR `Check` LIKE '%$search%' ORDER BY TechnicalSheetNumber LIMIT 15";
            
            $result = mysqli_query($conn, $sql);
        
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    
                    if($row["Check"] == 'Ano'){
                        $hint = "<a class=\"hint\" href=\"sheet_detail.php?TechnicalSheetNumber=".$row["TechnicalSheetNumber"]."\"><div class=\"results\"><p>".$row["TechnicalSheetNumber"]."</p><p>".$row["GlassType"]."</p><p>".$row["LampTemp"]."</p><p>".$row["Market"]."</p><p>Ano</p></div></a>";
                    }
                    else{
                        $hint = "<a class=\"hint\" href=\"sheet_detail.php?TechnicalSheetNumber=".$row["TechnicalSheetNumber"]."\"><div class=\"results\"><p>".$row["TechnicalSheetNumber"]."</p><p>".$row["GlassType"]."</p><p>".$row["LampTemp"]."</p><p>".$row["Market"]."</p><p></p></div></a>";
                    }
                    echo $hint;
                    $_SESSION["TechnicalSheetNumber"] = $row["TechnicalSheetNumber"];
                }
            }
            else {
                echo "Žádné výsledky pro ". $search;
            }

            
            mysqli_close($conn);
        }

        //SQL pro materiály
        if($page === "Materiály"){

            $sql = "SELECT SAPNumber, MaterialName, MaterialType, MaterialCategory FROM `agc_Material` WHERE SAPNumber LIKE '%$search%' OR MaterialName LIKE '%$search%' OR MaterialType LIKE '%$search%' OR MaterialCategory LIKE '%$search%' ORDER BY SAPNumber LIMIT 15";
            
            $result = mysqli_query($conn, $sql);
        
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $hint = "<a class=\"hint\" href=\"material_detail.php?SAPNumber=".$row["SAPNumber"]."\"><div class=\"results\"><p>".$row["SAPNumber"]."</p><p>".$row["MaterialName"]."</p><p>".$row["MaterialType"]."</p><p>".$row["MaterialCategory"]."</p></div></a>";
                    echo $hint;
                    $_SESSION["SAPNumber"] = $row["SAPNumber"];
                }
            }
            else {
                echo "Žádné výsledky pro ". $search;
            }

            
            mysqli_close($conn);
        }

        //SQL pro chemické složky
        if($page === "Chemické složky"){

            $sql = "SELECT CASNumber, ChemicalComponentName FROM `agc_ChemicalComponent` WHERE CASNumber LIKE '%$search%' OR ChemicalComponentName LIKE '%$search%'  ORDER BY ChemicalComponentName LIMIT 15";
            
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

        //SQL pro dodavatele
        if($page === "Dodavatelé"){
            
            $sql = "SELECT SupplierID, SupplierName FROM `agc_Supplier` WHERE SupplierName LIKE '%$search%' ORDER BY SupplierName LIMIT 15";
            
            $result = mysqli_query($conn, $sql);
        
            if ($result->num_rows > 0) {
                session_start();
                while($row = mysqli_fetch_assoc($result)) {
        
                    if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
                        $hint = "<div class=\"hint supplier\"><div class=\"results\"><p>".$row["SupplierName"]."</p><div class=\"supp-edit-icon\"><a href=\"./supplier_update.php?SupplierID=".$row["SupplierID"]."\"><svg xmlns=\"http://www.w3.org/2000/svg\" height=\"16\" width=\"18\" viewBox=\"0 0 576 512\"><path fill=\"#000\" d=\"M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V299.6l-94.7 94.7c-8.2 8.2-14 18.5-16.8 29.7l-15 60.1c-2.3 9.4-1.8 19 1.4 27.8H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z\"/></svg></a></div></div></div>";
                    }
                    else{
                        $hint = "<div class=\"hint supplier\"><div class=\"results\"><p>".$row["SupplierName"]."</p></div></div>";
                    }
                    echo $hint;
                }
            }
            else {
                echo "Žádné výsledky pro ". $search;
            }

            
            mysqli_close($conn);
        }

        //SQL pro přidání materiálu
        if($page === "Přidání materiálu"){
            
            $sql3 = "SELECT TechnicalSheetNumber FROM `agc_TechnicalSheet` WHERE TechnicalSheetNumber LIKE '%$search%' ORDER BY TechnicalSheetNumber";
            
            $result3 = mysqli_query($conn, $sql3);
            
            if ($result3->num_rows > 0) {
                while($row3 = mysqli_fetch_assoc($result3)) {
                    
                    $hint = "<div class=\"hint mat\"><div class=\"results mat\"><p>".$row3["TechnicalSheetNumber"]."</p></div><div class=\"materialCheckbox\"><input type=\"checkbox\" name=\"material[]\" value=\"".$row3["TechnicalSheetNumber"]."\" }'></div></div>";
                    echo $hint;
                }
            }
            else {
                echo "Žádné výsledky pro ". $search;
            }

            
            mysqli_close($conn);
        }

        
    ?>
</body>
</html>