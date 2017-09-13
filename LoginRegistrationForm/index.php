<?php include_once "inc/header.php";?>
<?php include_once "Classes/address.php";?>

<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>

      <div class="container">
      
          <img class="img-responsive" src="images/careers.jpg" alt="image">
        
      </div>
        <div class="container">
              <div class="row">
              <div class="alert alert-success alert-dismissible" role="alert">
            
               <marquee><p style="font-family: Impact; font-size: 14pt"><b><i> Well Come to Kyoto Automation & Engineering. Dear Candidate At first Fill your Address.</i></b></p></marquee>
            </div>
              </div>
        </div>

    <div class="container">
      <div id="row">
        <div class="btn-group" role="group" aria-label="Basic example">
           <a href="basicinfo.php#toregister"><button type="button" class="btn btn-info">Basic Info</button></a>
 
          </div>

<br><br>
<div class="jumbotron">
        <div class="row">
        <label for="username" class="uname" data-icon="u" > Job List </label>
        <table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>Sl</th>
      <th>Job Title</th>
      <th>Post Date</th>
      <th>Last Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="#"> Mark</a></td>
      <td>12-09-17</td>
      <td>24-09-17</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
          </div>
    </div>
      </div>
    </div>
      

<?php include_once "inc/footer.php";?>

  