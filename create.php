        <?php    

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pdo-toets-herkansing";

            try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
            // set the PDO error mode to exception 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO burrito(id, burritoformaat, saus, bonen, rijst) 
            VALUES (:id, :burritoformaat, :saus, :bonen, :rijst)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':burritoformaat', $burritoformaat);
            $stmt->bindParam(':saus', $saus);
            $stmt->bindParam(':bonen', $bonen);
            $stmt->bindParam(':rijst', $rijst); 

            // insert a row
            $id = NULL;
            $burritoformaat = $_POST["burritoformaat"];
            $saus = $_POST["saus"];
            $bonen = $_POST["bonen"];
            $rijst = $_POST["rijst"]; 

            // var_dump($stmt->queryString); 

            $stmt->execute(); 

            // Checks for success / errors and prints message accordingly
            echo '<script>alert("New records created successfully")</script>';
            header("Refresh:3; read.php"); 
            }
            catch(PDOException $e) { 
                echo '<script>alert("Insert Failed")</script>' . $e->getMessage(); 
                header("Refresh:3; index.php"); 
            }
                $conn = null; 

        

?>