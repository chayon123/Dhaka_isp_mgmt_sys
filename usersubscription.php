<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>User Panel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">    <!-- semantic-ui cdn -->   <!--bootstrep-->
        <link rel="stylesheet" href="../css/userstyle.css">
    </head>
    <body>
        <div class="topbar">
            <div class="topleft">
              
            </div>
            <div class="topright">
              
            </div>
        </div>
        <div class="main">
            <div class="menubar">
                <div class="menuinfo">
                    <a class="active" href="/home/all/index.html"><button class="ui inverted teal button">HOME</button></a>
                </div>

                <div class="menuinfo">
                    <a href="userreport.php"><button class="ui inverted teal button">ISSUE REPROT</button></a>
                </div>

                <div class="menuinfo">
                    <a href="usersubscription.php"><button class="active ui inverted teal button">SUBCRIPTIONS</button></a>
                </div>

                <div class="menuinfo">
                    <a href="userbilling.php"><button class="ui inverted teal button">BILLING</button></button></a>
                </div>

                <div class="menuinfo">
                    <a href="userinfo.php"><button class="ui inverted teal button">USER INFO</button></a>
                </div>

                <div class="menuinfo">
                    <a href="logout.php"><button class="ui inverted teal button">LOGOUT</button></a>
                </div>

            </div>
            <div class="body">
                <div class="welcome">
                    <?php
                        // starting the session
                        session_start();
                        if(isset($_SESSION['userid'])){
                                $id = $_SESSION['userid'];

                            // connection to the database
                            require_once("db_connection.php");
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_errno) {
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                            }

                            // performing query selection from database.
                            $query = "SELECT First_Name,Last_Name FROM user where user_id='$id'";
                            if ($result = $conn->query($query)) {
                                        
                                if($result->num_rows>"0"){
                                    //print("%s",$row["First_Name"]);

                                    while ($row = $result->fetch_assoc()) {
                                        extract($row);
                                        print("<h1>WELCOME &nbsp <span> $First_Name $Last_Name </span></h1>");
                                    }
                

                                    $result->free(); //free result set
                                }
                                else{
                                    printf("<h3><b>Requirement not match!</b></h3>");
                                }
                            }
                            else
                            {
                                printf("No record found!");
                            }
                            
                        }
                        else{
                            print("please login first");
                            exit();
                                
                        }
                    ?>
                </div>
                
                <div class="myinfo">
                    <h3>MY SUBSCRIPTIONS</h3>
                </div>

                <div class="info">
                    <table class="">
                        <thead>
                            <th>ISP Name</th>
                            <th>Package Speed</th>
                            <th>Package fees</th>
                            <th>Subscription Status</th>
                            <!--<th>Rating</th>-->
                        </thead>
                            <?php
                                    $status = "Subscribed";
                                    $query = "SELECT isp_name,sub_fee,package_speed FROM user_info WHERE user_id = $id";
                                    if ($result = $conn->query($query)) {
                                        printf("<br><b>You have %d Subcribed Packages!</b><br>", $result->num_rows);
    
                                        if($result->num_rows>"0"){
                    
        
                                            while ($row = $result->fetch_assoc()) {
                                                printf("<tr>");
                                                printf(" <td> %s</td> <td>%s</td> <td> %s</td> <td> %s</td> <br>", $row["isp_name"], $row["package_speed"],$row["sub_fee"], $status   );
                                                printf("</tr>");
                                            }
            
                                            
            
                                            $result->free(); //free result set
                                        }
                                        else{
                                            printf("<h3><b>Requirement not match!</b></h3>");
                                        }
                                    }
                                    else
                                    {
                                        printf("No record found!");
                                    }
                                    $conn->close();

                        ?>
                    </table>
                </div>

            </div>

        </div>
    </body>
</html>