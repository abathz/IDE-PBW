<?php
  $id = $_SESSION['id'];
  $query = "SELECT courses.code as kode, courses.course as course, courses.ID_C as id
            FROM courses join enrollments
            ON courses.ID_C = enrollments.ID_C
            WHERE enrollments.ID_U = $id";
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="heading-overview">
        <h2>Courses Overview</h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <?php
        if ($result = $conn->query($query)) {
          while ($row = $result->fetch_array()) {
            $courseID = $row['id'];
            $course = $row['kode'] . " / " . $row['course'];
            echo "<div class='card-course'>";
            echo "<p><a href='course.php?id=" . $courseID . '&courseTitle=' . $course . "'>" . $course . "</a></p>";
            echo "</div>";
          }
        }
      ?>
    </div>
  </div>
</div>