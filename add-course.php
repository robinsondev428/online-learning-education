<?php require_once('include/top.php'); ?>
<?php require_once('include/config.php'); ?>
<?php require_once('server.php'); ?>

<?php
echo "COURSE NAME GET : '", $_GET['course_name'], "'<BR> ";
if ($_GET['course_name']) {
    $sql = "INSERT INTO registration.courses (course_name) VALUES ('" . $_GET['course_name'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
  </head>
  <body>
    <div id="wrapper">
      <?php require_once('include/header.php'); ?>

      <div class="container-fluid body-section">
        <div class="row">
          <div class="col-md-3">
            <?php require_once('include/left-sidebar.php'); ?>
          </div>
          <div class="col-md-9">
            <h1><i class="fa fa-book" aria-hidden="true"></i> Courses <small>Add new course</small></h1><hr>
            <ol class="breadcrumb">
              <li><a href="home.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-folder-open"></i> Add New Course</li>
            </ol>

            <div class="row">
              <div class="col-md-6">
                <form action="">
                  <div class="form-group">
                    <label for="course">New Course Name:</label>
                    <input type="text" name="course_name" placeholder="Course Name" class="form-control">
                  </div>
                  <input type="submit" value="Add New Course" name="submit" class="btn btn-primary">
                </form>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php require_once('include/footer.php'); ?>