<!DOCTYPE html>
<?php 
session_start();
require_once '../db_functions.php';
$db = new DB_FUNCTIONS();

?>

<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>HR Page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,900">
    </head>


    <body>

        <div class="path">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <div class="container">
                        <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
                    </div>
                </ol>   
            </nav>
        </div>


        <!-- User Content -->




        <div class="employee-page">
            <div class="container">
                <div class="employee-heading text-uppercase">
                    <h3 class="text-center">Employee Layout</h3>
                </div>

                  <div class="visa-status text-center">
                    <h3 class="text-uppercase">Visa Status</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <span>SOURCE</span>
                        </div>
                        <div class="col-md-4">
                            <span>DESTINATION</span>
                        </div>
                         <div class="col-md-4">
                            <span>START DATE</span>
                        </div>
                        <div class="col-md-4">
                            <span>END DATE</span>
                        </div>
                        <div class="col-md-4">
                            <span>INTERVIEW DATE</span>
                        </div>
                          <div class="col-md-4">
                            <span>INTERVIEW STATUE</span>
                        </div>
                    </div>
                    <table>
                        <?php
                            $visa = $db->getVisaEmp($_SESSION["ID"]);
                            echo json_encode($_SESSION["ID"]);
                            if($visa >0){
                                foreach($visa as $raw){
                                    echo "<tr>
                                        <td>".$raw['source']."</td>
                                        <td>".$raw['destination']."</td>
                                        <td>".$raw['start_date']."</td>
                                         <td>".$raw['end_date']."</td>
                                        <td>".$raw['interview_date']."</td>
                                        <td>".$raw['interview_date']."</td>
                                        
                                    </tr>";
                                }
                            }
                        ?>
                    </table>
                </div>



                <div class="send-feedback">
                    <h3 class="text-uppercase text-center">Sendas feedback</h3>
                    <form method="POST" action="../addFeedback.php">
                         <div class="form-group">
                            <label for="feedback-title" class="col-form-label">Feedback title:</label>
                            <input class="form-control" name="Title" id="feedback-title" required></input>
                            <label for="feedback" class="col-form-label">Write your feedback detailes directly to admin:</label>
                            <textarea class="form-control" name="Topic" id="feedback" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary">Send Feedback</button>
                    </form>
                </div>
                <div class="change-password" >
                    <h3 class="text-uppercase text-center">Change Password?</h3>
                    <form method="POST" action="../changePassword.php">
                        <div class="form-group">
                            <label for="currentPass">Write current password</label>
                            <input type="password" name="oldPass" class="form-control" id="currentPass" required>
                        </div>
                        <div class="form-group">
                            <label for="newPass">Write new password</label>
                            <input type="password" name="Pass" class="form-control" id="newPass" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>




        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
