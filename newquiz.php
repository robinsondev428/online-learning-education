<?php require_once('include/top.php'); ?>
<?php require_once('include/config.php'); ?>
<?php

echo "MODULE NAME GET : '", $_GET['assessment_name'], "'<BR> ";
echo "MODULE NAME GET : '", $_GET['role'], "'<BR> ";
$a =  $_GET['assessment_name'];
$b =   $_GET['role'];
if ($_GET['assessment_name']) {
    $sql = "INSERT INTO registration.assessments (name, id_module, id_user)
    VALUES ('" . $a ."','". $_GET['role'] ."', '1')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //$conn->close();
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
              <?php
              $query = "select name from registration.modules where id = ".$_GET['role'].";";
              if ($result = $conn->query($query)) {
                  /* fetch associative array */
                  while ($row = $result->fetch_assoc()) {
                      $b = $row['name'];
                  }
                  /* free result set */
                  $result->free();
              }
              ?>
            <h1><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php echo $_GET['assessment_name'] ?> <br><small><?php echo $b ?></small></h1><hr>
            <ol class="breadcrumb">
              <li><a href="home.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-folder-open"></i> Assessments</li>
            </ol>
          </div>

          <div class="col-md-9">
            <a href="allreports.php">All reports</a> &nbsp
	    <a href="add-assessment.php">New assessment</a>
          </div>

        </div>
      </div>
  <?php require_once('include/footer.php'); ?>