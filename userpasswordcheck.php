
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
          $id = $_POST["userid"];
          $pass = $_POST["password"];

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

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
          // printf("%s %s                 ", $row["User_id"],$row["Password"] );
          if($pass == $row["Password"]){
              session_start();
              $_SESSION['userid'] = $id;
              $_SESSION['password']= $pass;
              header('Location: ../../users/all/userinfo.php');
              // printf("yes");
          }
          else
          {
            printf("incorrect id or password!");
            printf("<br><button class='ui inverted blue button'><a href='userlogin.php'>Try Again</a></button>");
          }

        }
        $result->free(); //free result set
        }

        else
        {
          printf("incorrect id or password!");
        }
      }
        $conn->close();

    ?>
 
    </body>

</html>


