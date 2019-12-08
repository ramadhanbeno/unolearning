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
                    Exercise List
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php foreach ($exercises as $exer) : ?>
                        <a class="dropdown-item" href="<?= base_url() ?>exercise/soal/<?= $exer->no_exercise ?>"><?= $exer->no_exercise ?></a>
                    <?php endforeach; ?>
                    <?php foreach ($list_essay as $list) : ?>
                        <a class="dropdown-item" href="<?= base_url() ?>exerciseEssay/essay/<?= $list->id ?>">Essay <?= $list->id ?></a>
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
                <h1>Exercise Essay</h1>
                <p style="padding: 0 80px; padding-top:50px; color:rgba(0,128,255);"><?= $essay['question'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex align-items-center" style="padding: 0 95px;">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Please enter your answer</label>
                        <input type="text" class="form-control" name="answer">
                    </div>
                    <button class="btn btn-primary" type="submit" id='run2' name="run2" value="run2" style="float: left;">Submit</button>
                </form>

                <?php
                $es_id = $essay['id'];
                $join = "SELECT *
                                FROM `exercise_essay` JOIN `component`
                                ON `exercise_essay`.`component_id` = `component`.`no_component`
                                WHERE `exercise_essay`.`id` = $es_id
                            ";
                $essay1 = $this->db->query($join)->result_array();
                ?>
                <?php foreach ($essay1 as $es) : ?>
                    <?php
                        if (isset($_POST['run2'])) {
                            $answer = $_POST['answer'];

                            if ($answer) {
                                if ($answer == $es['nama_component']) {
                                    echo '<div class="flash-data" data-flashdata="True"></div>';
                                } else {
                                    echo '<div class="flash-data" data-flashdata="False"></div>';
                                }
                            } else {
                                echo '<div class="flash-data" data-flashdata="null"></div>';
                            }
                        }

                        ?>
                    <?= $es['nama_component'] ?>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>