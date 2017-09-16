<!DOCTYPE html>

<html>
    <head>
        
        <title> Admin Dashboard : Create </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/css/dashboard.css">
        <link rel="stylesheet" href="assets/css/footer.css">
    </head>
    
    
    <body>
        <header class="w3-container w3-padding-48 jumbotron w3-blue w3-xxlarge" id="banner"> Kyoto Engineering &amp; Automation Ltd</header>
        <div class="w3-bar w3-red">
            <a href="modules/degree_creation.php"  class="w3-bar-item w3-button"> Create Degree </a> 
            <a href="modules/department_creation.php"  class="w3-bar-item w3-button"> Create Department </a> 
            <a href="modules/education_level_creation.php"  class="w3-bar-item w3-button"> Create Education Level </a> 
            <a href="modules/job_advert_creation.php"  class="w3-bar-item w3-button"> Create Job </a>
            <a href="modules/job_title_creation.php"  class="w3-bar-item w3-button"> Create Job Title </a>
            <a href="modules/specialization_decipline_creation.php"  class="w3-bar-item w3-button"> Create Specialization</a>
            <a href="index.php"  class="w3-bar-item w3-button" id="dash"> Dashboard </a>
        </div>
        <div id="mainBody">
            
            <div class="row">
                <div class="col-md-6">
                    <h3> Degree </h3>
                    <ul id="degreeList">
                        <li>degree 1</li> <!-- Script generated Degree List -->
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3> Department </h3>
                    <ul id="departmentList">
                        <li>Department 1</li> <!-- Script generated Department List -->
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3> Education Level </h3>
                    <ul id="eduLevelList">
                        <li> Education Level 1</li> <!-- Script generated Education Level List -->
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3> Created Jobs </h3>
                    <ul id="eduLevelList">
                        <li> Job 1 </li> <!-- Script generated job created List -->
                    </ul>
                </div>
            </div>

        </div>
        <footer>Copyright&copy; Kyoto Engineering &amp; Automation Ltd IT Department.</footer>
    </body>
</html>