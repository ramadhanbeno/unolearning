<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white-50 fixed-top">

  <a class="navbar-brand" href="<?= base_url(); ?>home"><i class="fas fa-angle-double-left back"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav p-2" style="font-family: Viga">
      <a class="nav-item nav-link" style="text-transform: capitalize;" href="#">Exercise</a>
      <div class="dropdown">
        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Example List
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">1</a>
          <a class="dropdown-item" href="#">2</a>
          <a class="dropdown-item" href="#">3</a>
        </div>
      </div>
    </div>
  </div>
</nav>
<?php foreach ($example as $ex) : ?>

  <!-- Query Join Example with example_code -->
  <?php
    $ex_id = $ex->id;
    $codec = "SELECT *
                    FROM `examples_code` JOIN `examples`
                    ON `examples_code`.`examples_id` = `examples`.`id`
                    WHERE `examples_code`.`examples_id` = $ex_id
                ";
    $co = $this->db->query($codec)->result_array();
    ?>


  <section>
    <div class="container" style="margin-bottom: 100px; margin-top:30px;">

      <?php foreach ($co as $c) : ?>
        <div class="row justify-content-center">
          <div class="col-sm examples">
            <h1>Examples 1</h1>

            <p style="padding: 0 80px"><?= $c['desc']; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="<?= base_url(); ?>assets/images/example1.png">
            <div class="code">
              <?= $c['source_code'] ?>
              <?php
                  if (isset($_POST['run1'])) {
                    $codeid = $_POST['code-id'];
                    $answ_1 = $_POST['answ_1'];
                    $answ_2 = $_POST['answ_2'];
                    $answ_3 = $_POST['answ_3'];

                    if ($codeid && $answ_1) {
                      if (($answ_1 == $c['answer_a']) && ($answ_2 == $c['answer_b']) && ($answ_3 == $c['answer_c'])) {
                        echo '<div class="flash-data" data-flashdata="True"></div>';
                      } else {
                        echo '<div class="flash-data" data-flashdata="False"></div>';
                      }
                    } else {
                      echo '<div class="flash-data" data-flashdata="null"></div>';
                    }
                  }
                  ?>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </section>