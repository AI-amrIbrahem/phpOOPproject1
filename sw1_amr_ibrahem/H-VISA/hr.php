<!DOCTYPE html>
<?php 
session_start();
require_once '../db_functions.php';
$db = new DB_FUNCTIONS();
//echo $_SESSION["Type"];
$visaHr = $db->getVisaHR($_SESSION["ID"]);
$visas  = $db->getVisaAvaliable($_SESSION["ID"]);
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
                        <li class="breadcrumb-item active" aria-current="page">HR</li>
                    </div>
                </ol>   
            </nav>
        </div>


        <div class="hr-page">
            <div class="container">
                <div class="hr-heading text-uppercase">
                    <h3 class="text-center">Human Resources</h3>
                </div>





                <div class="add-emps">
                    <h5 class="text-center">All Avaliable VISA a</h5>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($visas as  $value) {
                            echo '
                        <li class="list-group-item">
                                <span>Visa id: '.$value['id'].'</span>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7" >Visa Details</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7-1" >Update Visa Request</button>
                                <div class="modal fade" id="exampleModal7" tabindex="-6" role="dialog" aria-labelledby="exampleModal7" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal7">visa details for this employee</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label for="hr-name" class="col-form-label">Source</label>
                                                    <label for="hr-name" name="x" class="form-control">'.$value['source'].'</label>
                                                    <label for="hr-name" class="col-form-label">Destination</label>
                                                    <label for="hr-name" class="form-control">'.$value['destination'].'</label>
                                                    <label for="hr-name" class="col-form-label">Start Date</label>
                                                    <label for="hr-name" class="form-control">'.$value['start_date'].'</label>
                                                    <label for="hr-name" class="col-form-label">End Date</label>
                                                    <label for="hr-name" class="form-control">'.$value['end_date'].'</label>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="modal fade" id="exampleModal7-1" tabindex="-7" role="dialog" aria-labelledby="exampleModal7-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal7-1">Update Statu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                     
                                        <div class="modal-body">
                                            <form method="POST" action="../editInterview.php">
                                                <div class="form-group">
                                                    
                                                    <label for="hr-name"  class="col-form-label">Interview Datea</label>
                                                    
                                                    <input type="date" class="form-control" name="InterviewDate" required>
                                                    
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="Visaid" value='.$value["id"].' class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </li>
                        ';
                        } ?>
                        
                    </ul>
                </div>







                <div class="add-emps">
                    <h5 class="text-center">Added VISA</h5>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($visaHr as  $value) {
                            echo '

                        <li class="list-group-item">
                                <span>Visa id: '.$value['id'].'</span>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7" >Visa Details</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7-1" >Update Visa Request</button>
                                <div class="modal fade" id="exampleModal7" tabindex="-6" role="dialog" aria-labelledby="exampleModal7" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal7">visa details for this employee</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label for="hr-name" class="col-form-label">Source</label>
                                                    <label for="hr-name" name="x" class="form-control">'.$value['source'].'</label>
                                                    <label for="hr-name" class="col-form-label">Destination</label>
                                                    <label for="hr-name" class="form-control">'.$value['destination'].'</label>
                                                    <label for="hr-name" class="col-form-label">Start Date</label>
                                                    <label for="hr-name" class="form-control">'.$value['start_date'].'</label>
                                                    <label for="hr-name" class="col-form-label">End Date</label>
                                                    <label for="hr-name" class="form-control">'.$value['end_date'].'</label>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="modal fade" id="exampleModal7-1" tabindex="-7" role="dialog" aria-labelledby="exampleModal7-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal7-1">Update Statu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="../editStatu.php">
                                                <div class="form-group">
                                                    <label for="hr-name"  class="col-form-label">Interview Date</label>
                                                    
                                                    <label for="hr-name"  class="form-control">'.$value['interview_date'].'</label>
                                                    <label for="message-text" class="col-form-label">Updated Interview result </label>

                                                    <select class="form-control" name="Statu">
                                                        <option>refuse</option>
                                                        <option>accept</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="Visaid" value='.$value["id"].' class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </li>
                        ';
                        } ?>
                        
                    </ul>
                </div>
                  
                <div class="reports text-center">
                    <h3 class="text-uppercase">Reports</h3>
                    <div class="card">
                        <div class="card-header">
                            Report
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Report title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="change-password">
                    <h3 class="text-uppercase text-center">Change Password?</h3>
                    <form method="POST" method="POST" action="../changePassword.php" >
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
                <div class="send-feedback">
                    <h3 class="text-uppercase text-center">Send feedback</h3>
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
            </div>
        </div>



        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
