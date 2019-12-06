<div class="pagebackground">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white-50 fixed-top">

    <a class="navbar-brand" href="#home">WebUno</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav ml-auto" style="font-family: Viga">
        <a class="nav-item nav-link" style="text-transform: capitalize;" href="#home">Dashboard</a>
        <a class="nav-item nav-link" style="text-transform:capitalize" href="#komp-in">Physical Components</a>
        <a class="nav-item nav-link" style="text-transform:capitalize" href="#komp-tam">Additional Components</a>
        <a class="nav-item nav-link" style="text-transform:capitalize" href="#">Examples</a>
        <a class="nav-item nav-link" style="text-transform:capitalize" href="#">Exercises</a>
      </div>
    </div>
  </nav>

  <section id="home">
    <div class="row justify-content-center" style="margin-top:30px">
      <div class="col-lg-5 arduinouno">

        <h1>Arduino <mark>UNO</mark> </h1>
        <p style="padding: 0 40px">Arduino merupakan rangkaian elektronik yang bersifat open source, serta memiliki perangkat keras dan lunak yang mudah untuk digunakan. Arduino dapat mengenali lingkungan sekitarnya melalui berbagai jenis sensor dan dapat mengendalikan lampu, motor, dan berbagai jenis aktuator lainnya. Arduino mempunyai banyak jenis, di antaranya Arduino Uno, Arduino Mega 2560, Arduino Fio, dan lainnya.</p>
      </div>
      <!-- arduino -->
      <div class="col-lg">
        <div class="container arduino">
          <div class="row justify-content-center">
            <div class="unoinfo">
              <div class="col-lg">
                <img src="<?= base_url(); ?>assets/images/uno.png">
                <button type="button" class="capt komp1" data-toggle="tooltip" data-placement="top" title="Barrel Jack">.</button>
                <button type="button" class="capt komp2" data-toggle="tooltip" data-placement="top" title="Voltage Regulator">.</button>
                <button type="button" class="capt komp3" data-toggle="tooltip" data-placement="top" title="Power USB">.</button>
                <button type="button" class="capt komp4" data-toggle="tooltip" data-placement="top" title="Arduino Reset">.</button>
                <button type="button" class="capt2 komp5" data-toggle="tooltip" data-placement="top" title="Analog Reference">.</button>
                <button type="button" class="capt3 komp6" data-toggle="tooltip" data-placement="top" title="Digital I/O">.</button>
                <button type="button" class="capt3 komp7" data-toggle="tooltip" data-placement="top" title="Digital I/O">.</button>
                <button type="button" class="capt komp8" data-toggle="tooltip" data-placement="top" title="ICSP Header pins">.</button>
                <button type="button" class="capt komp9" data-toggle="tooltip" data-placement="top" title="USB interface chip">.</button>
                <button type="button" class="capt komp10" data-toggle="tooltip" data-placement="top" title="Crystal oscillator">.</button>
                <button type="button" class="capt komp11" data-toggle="tooltip" data-placement="top" title="Kapasitor">.</button>
                <button type="button" class="capt2 komp12" data-toggle="tooltip" data-placement="top" title="LEDs">.</button>
                <button type="button" class="capt2 komp13" data-toggle="tooltip" data-placement="top" title="TX & RX LEDs">.</button>
                <button type="button" class="capt4 komp14" data-toggle="tooltip" data-placement="top" title="Main microcontroller">.</button>
                <button type="button" class="capt2 komp15" data-toggle="tooltip" data-placement="top" title="IOREF">.</button>
                <button type="button" class="capt2 komp16" data-toggle="tooltip" data-placement="top" title="Arduino Reset">.</button>
                <button type="button" class="capt2 komp17" data-toggle="tooltip" data-placement="top" title="Supply 3.3 volt output">.</button>
                <button type="button" class="capt2 komp18" data-toggle="tooltip" data-placement="top" title="Supply 5 volt output">.</button>
                <button type="button" class="capt2 komp19" data-toggle="tooltip" data-placement="top" title="Ground">.</button>
                <button type="button" class="capt2 komp20" data-toggle="tooltip" data-placement="top" title="Voltage input">.</button>
                <button type="button" class="capt3 komp21" data-toggle="tooltip" data-placement="top" title="Analog Pins">.</button>
                <button type="button" class="capt2 komp22" data-toggle="tooltip" data-placement="top" title="Power LED Indicator">.</button>
                <button type="button" class="capt2 komp23" data-toggle="tooltip" data-placement="top" title="ICSP Header pins">.</button>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Physical Components -->
  <section id="komp-in">
    <div class="container">
      <div class="kompin">
        <h1 class="text-center">Physical Components</h1>
        <div class="row pt-2 mt-4">
          <?php $i = 0;
          $a = array(5, 10, 15, 20);
          foreach ($comp as $com) : ?>
            <div class="col-sm">
              <h2><?= $com->nama_component ?></h2>
              <p><?= $com->desc_component ?></p>
            </div>
          <?php
            if (++$i % 4 == 0) {
              echo '<div class="w-100"></div>';
            };
          endforeach; ?>
          <div class="w-100"></div>

        </div>
      </div>
    </div>
  </section>
  <!-- content3 -->
  <section id="komp-tam">
    <div class="container">
      <div class="komptam">
        <h1 class="text-center">Additional Components</h1>
        <div class="row justify-content-center pt-2 mt-4">
          <?php foreach ($additional as $add) : ?>
            <div class="col-md-auto add">
              <div class="card" style="width:200px">
                <img src="<?= base_url(); ?>/assets/images/<?= $add->image_add ?>" class="card-img-top">
                <div class="card-body">
                  <a href="<?= base_url(); ?>component/index/<?= $add->id_add; ?>" class="card-title"><?= $add->nama_add ?></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->
    </div>
  </section>
</div>