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

<section>
    <div class="container" style="margin-bottom: 100px;">
        <div class="row justify-content-center" style="margin-top:30px">
            <div class="col-sm examples">
                <?php foreach ($example as $ex) : ?>
                    <h1>Examples 1<?= $ex->answer_a ?></h1>

                    <p style="padding: 0 80px">Perhatikan gambar rangkaian dibawah! Lengkapilah pemograman arduino LED berikut agar LED dapat dinyalakan</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="<?= base_url(); ?>assets/images/example1.png">
                <div class="code">
                    <?= $ex->source_code ?>
                    <?php
                        if (isset($_POST['run1'])) {
                            $codeid = $_POST['code-id'];
                            $answ_1 = $_POST['answ_1'];
                            $answ_2 = $_POST['answ_2'];
                            $answ_3 = $_POST['answ_3'];

                            if ($codeid && $answ_1) {
                                if (($answ_1 == $ex->answer_a) && ($answ_2 == $ex->answer_b) && ($answ_3 == $ex->answer_c)) {
                                    echo "benarrr";
                                } else {
                                    echo "Salah Coba lagi yyaaaa!";
                                }
                            } else {
                                echo "asdfghjk!!";
                            }
                        }
                        ?>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>