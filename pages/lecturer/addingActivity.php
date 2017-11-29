
<?php include('../../phpScript/connection.php');?>
<?php include('../../layout/header.php');?>
<?php include('../../layout/sidebar.php');?>

<?php
  $activity = $_POST['activity'];
  if ($activity == "assignment") {
?>
<div class="scrollable-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="heading-overview">
          <h2>Adding a new assignment</h2>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12 text-right">
        <button id="collapse" class="btn btn-primary" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="collapseOne collapseTwo collapseThree">Collapse All</button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form method="post" action="">
          <div class='card card-topics'>
            <div class='card-header' role='tab' id='headingOne'>
              <h5 class='mb-0'>
                <a data-toggle='collapse' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                  <i class="fa fa-sort-desc"></i> General
                </a>
              </h5>
            </div>
            <div id='collapseOne' class='collapse multi-collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>
              <div class='card-body'>
                <div class="form-group">
                  <label for="nama" style="color: red;">Nama* </label>
                  <input id="nama" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="description">Description </label>
                  <textarea id="description" type="text" class="form-control" rows="5"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class='card card-topics'>
            <div class='card-header' role='tab' id='headingOne'>
              <h5 class='mb-0'>
                <a data-toggle='collapse' href='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>
                  <i class="fa fa-sort-desc"></i> Availability
                </a>
              </h5>
            </div>
            <div id='collapseTwo' class='collapse multi-collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>
              <div class='card-body'>
                <div class="form-group">
                  <label for="dateFrom">Allow submissions from</label>
                  <input id="dateFrom" type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label for="dueDate">Due Date</label>
                  <input id="dueDate" type="date" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class='card card-topics'>
            <div class='card-header' role='tab' id='headingOne'>
              <h5 class='mb-0'>
                <a data-toggle='collapse' href='#collapseThree' aria-expanded='true' aria-controls='collapseThree'>
                  <i class="fa fa-sort-desc"></i> Content
                </a>
              </h5>
            </div>
            <div id='collapseThree' class='collapse multi-collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>
              <div class='card-body'>
              </div>
            </div>
          </div>
          <div class="col-6 offset-lg-3 text-center mt-3">
            <button type="submit" class="btn btn-primary">Save and return to course</button>
            <button type="submit" class="btn btn-primary"><a href="lct.php">Cancel</a></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } else { ?>
<div class="scrollable-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="heading-overview">
          <h2>Adding a new files</h2>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12 text-right">
        <button id="collapse" class="btn btn-primary" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="collapseOne collapseTwo collapseThree">Collapse All</button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form method="post" action="">
          <div class='card card-topics'>
            <div class='card-header' role='tab' id='headingOne'>
              <h5 class='mb-0'>
                <a data-toggle='collapse' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                  <i class="fa fa-sort-desc"></i> General
                </a>
              </h5>
            </div>
            <div id='collapseOne' class='collapse multi-collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>
              <div class='card-body'>
                <div class="form-group">
                  <label for="nama" style="color: red;">Nama* </label>
                  <input id="nama" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="description">Description </label>
                  <textarea id="description" type="text" class="form-control" rows="5"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class='card card-topics'>
            <div class='card-header' role='tab' id='headingOne'>
              <h5 class='mb-0'>
                <a data-toggle='collapse' href='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>
                  <i class="fa fa-sort-desc"></i> Availability
                </a>
              </h5>
            </div>
            <div id='collapseTwo' class='collapse multi-collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>
              <div class='card-body'>
                <div class="form-group">
                  <label for="dateFrom">Allow submissions from</label>
                  <input id="dateFrom" type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label for="dueDate">Due Date</label>
                  <input id="dueDate" type="date" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class='card card-topics'>
            <div class='card-header' role='tab' id='headingOne'>
              <h5 class='mb-0'>
                <a data-toggle='collapse' href='#collapseThree' aria-expanded='true' aria-controls='collapseThree'>
                  <i class="fa fa-sort-desc"></i> Content
                </a>
              </h5>
            </div>
            <div id='collapseThree' class='collapse multi-collapse' role='tabpanel' aria-labelledby='headingOne' data-parent='#accordion'>
              <div class='card-body'>
              </div>
            </div>
          </div>
          <div class="col-6 offset-lg-3 text-center mt-3">
            <button type="submit" class="btn btn-primary">Save and return to course</button>
            <button type="submit" class="btn btn-primary"><a href="lct.php">Cancel</a></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php include('../../layout/footer.php');?>