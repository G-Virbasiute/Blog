<?php

include 'Classes/Blogposts.php';            //I think we need an 'include' statement in one of the classes too?

try {
      $pdo = new PDO('mysql:host=localhost;dbname=Blog' , 'root' , '');
      
 } catch (PDOException $e) {
            echo "DB Connection Failed: " . $e->getMessage();
        }
        
?>