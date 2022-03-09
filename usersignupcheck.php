
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <title>Dhaka ISP Solution</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">    <!-- semantic-ui cdn -->   <!--bootstrep-->
    </head>

    <body>
      <?php
          $f_name = $_POST["fname"];
          $l_name = $_POST["lname"];
          $id = $_POST["userid"];
          $pass = $_POST["password"];
          $add = $_POST["address"];
          $phone = $_POST["phn"];
          $email ="";
          print($id);

          require_once('db_connection.php');
          
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
            exit();
          }
        // printf("Connected successfully");
        $query = "SELECT User_id,Password FROM user where user_id='$id'";
        if ($result = $conn->query($query)) {

        //printf("<br>%d record(s) found!<br>", $result->num_rows);
        if(($result->num_rows)>0){
            print("This user name already exit");
            $result->free(); //free result set
        }

        else
        {
            $sql = "INSERT INTO user (First_Name, Last_Name, user_id, Password,Address,mobile)
                    VALUES ('$f_name', '$l_name', '$id', '$pass', '$add', '$phone')";
            
            if ($conn->query($sql) === TRUE) {
              echo "SignUp Successfull";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
      }
        $conn->close();

    ?>
 
    </body>

</html>


