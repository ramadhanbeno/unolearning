<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white-50 fixed-top">

    <a class="navbar-brand" href="<?= base_url(); ?>home"><i class="fas fa-angle-double-left back"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

</nav>
<section>

    <div class="row justify-content-center" style="margin-top:50px">
        <div class="col-sm arduinouno justify-content-center">

            <h1><?= $addcomp['nama_add'] ?></h1>
            <p style="padding: 0 80px"><?= $addcomp['desc_add'] ?></p>
        </div>
        <div class="col-sm-5">

            <div class="row">
                <div class="component-info">
                    <div class="col-lg">
                        <img src="<?= base_url(); ?>assets/images/<?= $addcomp['image_add'] ?>" style="width:400px;height:400px">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>