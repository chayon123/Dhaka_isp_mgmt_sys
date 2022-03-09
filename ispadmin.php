<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title>Dhaka ISP Solution</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css'>    <!-- semantic-ui cdn -->   <!--bootstrep-->
        <link rel='stylesheet' href='../css/style.css'>
        <style>

        </style>
    </head>
    <body>
        
        <?php
            session_start();
            if(isset($_SESSION['ispid'])){
                $id = $_SESSION['ispid'];
                require_once("db_connection.php");
                $conn = new mysqli($servername,$username,$password,$dbname);
                if($conn->connect_errno){
                    printf("database Connection failed:%s\n",$conn->connect_error);
                    exit();
                }
            }
            else{
                printf("Please Login first");
                exit();
            }
        ?>    
                <div class='outer'>
                    <div class='topbar'>
                        <div class='topleft'>
                        <a class='' href='index.html'>My Info</a>
                        <a href='usersignup.php'>Users & Complain</a>
                        <!-- <a href='userlogin.php'>USER-LOGIN</a> -->
                        </div>
                        <div class='topright'>
                        <!-- <a href='ispsignup.php'>Users & Complain</a>
                        <a href='isplogin.php'>My info</a> -->
                        <a href='isplogin.php'>LogOut</a>
                        </div>
                    </div>

                    <div class='mainbody'>
                        <div>
                            <?php
                                // printf($id);
                                $query = "SELECT isp_name FROM isp_admin where isp_id=$id";
                                if ($result = $conn->query($query)) {
                                            
                                    if($result->num_rows>"0"){
                                        //print("%s",$row["First_Name"]);

                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            print("<h1> $isp_name </h1>");
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
                            ?>
                            
                        </div>

                    </div>
                </div>

                <div class='title1'>
                    <h1>OUR <span>PACKAGES<span><h1>
                </div>

                <div class='lower_body'>

                    <div class ='all_pck'>
                        <?php
                            $query = "SELECT package_name,packages,package_cost,offers FROM isp_info where isp_id='$id'";
                            if($result = $conn->query($query)){
                                while($row = $result->fetch_assoc()){
                                    extract($row);
                                    print("<div class = 'package'>
                                        <div class='image'>
                                            <img src='../images/main.png' width=300px hight=300px>
                                        </div>
                                        <div class ='info'>
                                            <h1>$package_name</h2>
                                            <h2>Speed:&nbsp<span>$packages Mbps</span></h2>
                                            <h2>price:&nbsp <span>$package_cost tk</span></h2>
                                            <h2>Offer Price: &nbsp<span>$offers tk</span></h2><br>
                                        </div>
                                        <div class='btn'>
                                            <button class='ui violet button'><a href='temp.php? p_name=$package_name & p_speed=$packages & P_cost=$package_cost & p_offer=$offers'>Update Package</a></button>
                                        </div>
                                        <div class='btn'>
                                            <button class='ui red button'><a href='temp.php? p_name=$package_name & p_speed=$packages & P_cost=$package_cost & p_offer=$offers'>Delete Package</a></button>
                                        </div>
                                    </div>");

                                }

                            }
                        ?>

                    </div>

                </div>

                <div class='footer'>

                </div>
        



    </body>
</html>