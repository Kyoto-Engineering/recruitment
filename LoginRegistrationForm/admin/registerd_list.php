<?php include_once "inc/header.php";?>
<?php include_once '../helpers/format.php';?>
<?php include_once "../Classes/module.php";?>
<?php
    $allM = new Module();
    $fm = new Format();
?>
 <?php include_once "inc/sidebar.php";?>    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Control panel
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-md-12 col-sm-8 col-xs-6">
             <span style="color: green">
                    <?php
                        /*if (isset($deldep)) {
                            echo $deldep;
                        }*/
                    ?>
                </span>
                <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birth Date</th>
                        <th>Specialization</th>
                        <th>SignUp-Time </th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                      $getdept = $allM->getAllpeople();
                       if ($getdept) {
                          $i = 0;
                           while ($value = $getdept->fetch_assoc()) {
                             $i++; 
                         
                    ?>
                      <tr>
                      <?php
                      $Udob = $value['dob'];
                      ?>
                        <td><?php echo $i;?></td>
                        <td><?php echo $value['userName'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['phone'];?></td>
                        <td><?php
//An example date of birth.
$userDob =  $value['dob'];

//Create a DateTime object using the user's date of birth.
$dob = new DateTime($userDob);

//We need to compare the user's date of birth with today's date.
$now = new DateTime();

//Calculate the time difference between the two dates.
$difference = $now->diff($dob);

//Get the difference in years, as we are looking for the user's age.
$age = $difference->y;

//Print it out.
echo $age;?></td>
                        <td><?php echo $value['specialization'];?></td>
                        <td><?php echo $fm->formatDate($value['date']);?></td>
                       
                      </tr>
                      </tr>
                      <?php } } ?>
                    </tbody>
                  </table>

            </div>
      </div>
      <!-- /.row -->

      
      <!-- Main row -->
      <div class="row">
        
            </div>
           
    
         

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include_once "inc/footer.php";?> 