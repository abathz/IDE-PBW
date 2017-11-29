
<?php include('../../phpScript/connection.php')?>
<?php include('../../layout/header.php');?>
<?php include('../../layout/sidebar.php');?>

<?php
  $courseID = $_GET['id'];
  $course = $_GET['courseTitle'];
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="heading-overview">
        <h2><?php echo $course; ?></h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div id="accordion" role="tablist">
      <?php
        for ($i = 1; $i <= 4; $i++) {
          echo "<div class='card card-topics'>";
          echo "<div class='card-header' role='tab' id='headingOne'>";
          echo "<h5 class='mb-0'>";
          echo "<a data-toggle='collapse' href='#collapse$i' aria-expanded='true' aria-controls='collapse$i'>";
          echo "<i class='fa fa-newspaper-o'></i> Topic " . $i;
          echo "</a>";
          echo "</h5>";
          echo "</div>";
          echo "<div id='collapse$i' class='collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>";
          echo "<div class='card-body'>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
        }
      ?>
      </div>
    </div>
  </div>
</div>

<?php include('../../layout/footer.php');?>