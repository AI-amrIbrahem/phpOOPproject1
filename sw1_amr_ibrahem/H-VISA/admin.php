<!DOCTYPE html>
<?php 
session_start();
require_once '../db_functions.php';
$db = new DB_FUNCTIONS();

if (isset($_POST['search'])){
echo $_POST['search'];
    $emp = $db->getEmpl($_POST['search']);

}else{
    $emp = $db->getEmployees();
}
    $hr = $db->getHrs();
?>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Page</title>
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
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                    </div>
                </ol>   
            </nav>
        </div>

        <!-- Login Content -->

        <div class="admin">
            <div class="container">
                <div class="admin-heading text-uppercase">
                    <h3 class="text-center">Admin Dashboard</h3>
                </div>
                <div class="search">
                    <div class="col-md-12">
                        <div class="search-employees">
                            <form action="admin.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search for Employees">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="admin-content">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="admin-info">
                                <div class="admin-profile-photo">
                                    <img src="https://via.placeholder.com/120C/O https://placeholder.com/" width="120" height="120" alt="Admin Photo" class="rounded-circle" draggable="false">
                                </div>
                                <div class="admin-name">
                                    <span><?php echo $_SESSION['Name']?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="add-hr">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Add HR</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add a new HR</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="../addhr.php">
                                                    <div class="form-group">
                                                        <label for="hr-name" class="col-form-label">HR Name</label>
                                                        <input type="text" name='Name' class="form-control" id="hr-name" required>
                                                        <label for="hr-name" class="col-form-label">HR Phone</label>
                                                        <input type="text" name='Phone' class="form-control" id="hr-name" required>
                                                    </div>
                                                    <h5 class="modal-title">HR Login Credentials</h5>
                                                    <div class="form-group">
                                                        <label for="hr-email" class="col-form-label" >hr email</label>
                                                        <input type="email" name='Email' class="form-control"  id="hr-email" required>
                                                        <label for="hr-password" class="col-form-label">hr password</label>
                                                        <input type="password" name='Password' class="form-control" id="hr-password" required>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Add HR</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="manage-hr">
                                <div class="manage-hr">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Manage HR</button>
                                        <div class="modal fade" id="exampleModal1" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Manage HR</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" action="?">
                                                    <form method="POST" >
                                                        <div class="form-group">
                                                            <label for="hr-name" class="col-form-label">HR Email</label>
                                                            <input type="email" name="Email" class="form-control" id="hrEmail" required>
                                                        </div>
                                                        <h5 class="modal-title">HR Login Credentials</h5>
                                                        <div class="form-group">
                                                            <label for="hr-email" class="col-form-label">hr Name</label>
                                                            <input type="text" name="Name"  class="form-control" id="hrName" >
                                                            <label for="hr-email" class="col-form-label">hr Phone</label>
                                                            <input type="text" name="Phone" class="form-control" id="hrPhone" ">
                                                            <label for="hr-password" class="col-form-label">hr password</label>
                                                            <input type="password" name="Password" class="form-control" id="hrPassword" >
                                                        </div>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit"  class="btn btn-primary"  onclick="<?php $x=1;?>">View</button>
                                                        <button type="submit" class="btn btn-warning" onclick="action='../edithr.php'">Edit</button>
                                                        <button type="submit" class="btn btn-danger"  onclick="action='../deletehr.php'">Delete</button>

                                                    </form>

                                                    <?php 
                                                                
                                                                if($x==1){
                                                                    if (isset($_POST['Email'])){
                                                                            $users = $db->getHr($_POST['Email']);
                                                                            $name = $users['name'];
                                                                            $phone = $users['phone'];
                                                                            $password = $users['password'];
                                                                            echo json_encode($users);
                                                                            echo "<script>
                                                                                  document.getElementById('hrName').value = $name;
                                                                                  document.getElementById('hrPhone').value = $phone;
                                                                                  document.getElementById('hrPassword').value = $password;
                                                                            </script>";
                                                                    }
                                                                } 
                                                        ?> 
                                                   
                                                        
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="add-employee">
                                <div class="add-employee">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >Add Employee</button>
                                        <div class="modal fade" id="exampleModal2" tabindex="-3" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModal2">Add a new Employee</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="../addemployee.php">
                                                        <div class="form-group">
                                                            <label for="hr-name" class="col-form-label">Employee Name</label>
                                                            <input type="text" name="Name" class="form-control" id="employee-name" required>
                                                             <label for="hr-name" class="col-form-label">Employee Phone</label>
                                                            <input type="text" name="Phone" class="form-control" id="employee-phone" required>
                                                             <label for="hr-name" class="col-form-label">Employee Passportnum</label>
                                                            <input type="text" name="Passportnum" class="form-control" id="employee-pass" required>
                                                             <label for="hr-name" class="col-form-label">Employee City</label>
                                                            <input type="text" name="City" class="form-control" id="employee-city" required>

                                                        </div>
                                                        <h5 class="modal-title">Employee Login Credentials</h5>
                                                        <div class="form-group">
                                                            <label for="employee-email" class="col-form-label">employee email</label>
                                                            <input type="email" name="Email" class="form-control" id="employee-email" required>
                                                            <label for="employee-password" class="col-form-label">employee password</label>
                                                            <input type="password" name="Password" class="form-control" id="employee-password" required>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Add Employee</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="manage-employee">
                                <div class="manage-employee">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Manage Employee</button>
                                        <div class="modal fade" id="exampleModal3" tabindex="-4" role="dialog" aria-labelledby="exampleModal3" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModal3">Manage Employees</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST">
                                                        <div class="form-group">
                                                            <label for="hr-name" class="col-form-label">Employee Email</label>
                                                            <input type="text" name="Email" class="form-control" id="empEmail" required>
                                                        </div>
                                                        <h5 class="modal-title">Employee Login Credentials</h5>
                                                        <div class="form-group">
                                                            <label for="employee-email" class="col-form-label">employee Name</label>
                                                            <input type="text" name="Name" class="form-control" id="empName" required>
                                                            <label for="employee-password" class="col-form-label">employee password</label>
                                                            <input type="password" name="Password" class="form-control" id="empPass" required>
                                                            <label for="employee-password" class="col-form-label">employee Passportnum</label>
                                                            <input type="text" name="Passportnum" class="form-control" id="empPassp" required>
                                                            <label for="employee-password" class="col-form-label">employee City</label>
                                                            <input type="text" name="City" class="form-control" id="empCity" required>
                                                            <label for="employee-password" class="col-form-label">employee Phone</label>
                                                            <input type="text" name="Phone" class="form-control" id="empPhone" required>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" onclick="<?php $a=1;?>">View</button>
                                                        <button type="submit" class="btn btn-warning" onclick="action='../editemployee.php'">Edit</button>

                                                        <button type="submit" class="btn btn-danger" onclick="action='../deleteemployee.php'">Delete</button>
                                                        <?php 
                                                                
                                                                if($a==1){
                                                                    if (isset($_POST['Email'])){
                                                                            $users = $db->getHr($_POST['Email']);
                                                                            $name = $users['name'];
                                                                            $phone = $users['phone'];
                                                                            $password = $users['password'];
                                                                            echo json_encode($users);
                                                                            echo "<script>
                                                                             //     document.getElementById('empName').value = $name;
                                                                             //     document.getElementById('hrPhone').value = $phone;
                                                                             //     document.getElementById('hrPassword').value = $password;
                                                                            </script>";
                                                                    }
                                                                } 
                                                        ?> 
                                                    </form>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visa-status text-center">
                    <h3 class="text-uppercase">Visa Status</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <span>EMPLOYEE ID</span>
                        </div>
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
                            <span>INTERVIEW STATUE</span>
                        </div>
                    </div>
                    <table>
                        <?php
                            $visa = $db->getAllVisa();
                            if($visa >0){
                                foreach($visa as $raw){
                                    echo "<tr>
                                        <td>".$raw['em_id']."</td>
                                        <td>".$raw['source']."</td>
                                        <td>".$raw['destination']."</td>
                                        <td>".$raw['start_date']."</td>
                                        <td>".$raw['end_date']."</td>
                                         <td>".$raw['interview_statu']."</td>
                                    </tr>";
                                }
                            }
                        ?>
                    </table>
                </div>
                 <div class="visa-status text-center">
                    <h3 class="text-uppercase">EMPLOYEES</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <span>ID</span>
                        </div>
                        <div class="col-md-4">
                            <span>NAME</span>
                        </div>
                        <div class="col-md-4">
                            <span>EMAIL</span>
                        </div>
                         <div class="col-md-4">
                            <span>PHONE</span>
                        </div>
                        <div class="col-md-4">
                            <span>CITY</span>
                        </div>
                        
                    </div>
                    <table>
                        <?php                            
                            if($emp >0){
                                foreach($emp as $raw){
                                    echo "<tr>
                                        <td>".$raw['id']."</td>
                                        <td>".$raw['name']."</td>
                                        <td>".$raw['email']."</td>
                                        <td>".$raw['phone']."</td>
                                        <td>".$raw['city']."</td>
                                         <td>".$raw['passportnum']."</td>
                                    </tr>";

                                }
                            }
                        ?>
                    </table>
                </div>

                <div class="visa-status text-center">
                    <h3 class="text-uppercase">Hr</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <span>ID</span>
                        </div>
                        <div class="col-md-4">
                            <span>NAME</span>
                        </div>
                        <div class="col-md-4">
                            <span>EMAIL</span>
                        </div>
                         <div class="col-md-4">
                            <span>PHONE</span>
                        </div>
                      
                        
                    </div>
                    <table>
                        <?php    

                            if($hr >0){
                                foreach($hr as $raw){
                                    echo "<tr>
                                        <td>".$raw['id']."</td>
                                        <td>".$raw['name']."</td>
                                        <td>".$raw['email']."</td>
                                        <td>".$raw['phone']."</td>
                                    
                                    </tr>";
                                }
                            }
                        ?>
                    </table>
                </div>
                

                <div class="feedbacks text-center">
                    <h3 class="text-uppercase">Feedbacks</h3>
                    <p class="text-muted">feedbacks send via employees and HR</p>
                    <?php
                            $feed = $db->getAllFeedback();
                            //echo json_encode($feed);
                            
                            if($feed >0){
                                foreach($feed as $raw){
                                echo '
                                <div class="card">
                                    <div class="card-header">
                                        Feedback
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">'.$raw["type"].'</h5>
                                        <p class="card-text">'.$raw["topic"].'</p>
                                    </div>
                                </div>';
                                  
                                }
                            }
                        ?>
                    
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
