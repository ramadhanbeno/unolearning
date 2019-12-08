<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white-50 fixed-top">

  <a class="navbar-brand" href="<?= base_url(); ?>home"><i class="fas fa-angle-double-left back"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav p-2" style="font-family: Viga">
      <!-- <a class="nav-item nav-link" style="text-transform: capitalize;" href="#">Exercise</a> -->
      <div class="dropdown">
        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Examples List
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <?php foreach ($listexample as $ex) : ?>
            <a class="dropdown-item" href="<?= base_url() ?>example/question/<?= $ex->id ?>">Examples <?= $ex->id ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</nav>

<section>
  <div class="container" style="margin-bottom: 100px;">
    <div class="row justify-content-center" style="margin-top:30px">
      <div class="col-sm examples">
        <h1>Examples</h1>
        <p style="padding: 0 80px"><?= $examples['ex_desc'] ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex align-items-center">
        <img style="width:70%" src="<?= base_url(); ?>assets/images/<?= $examples['ex_image'] ?>">
        <div class="code">
          <?= $examples['source_code'] ?>
        </div>
      </div>
    </div>

  </div>
</section>