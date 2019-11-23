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
          <div class="col">
            <h2>Barrel Jack</h2>
            <p>Papan Arduino dapat juga diberikan colokan catu daya secara langsung dari sumber daya AC dengan menghubungkannya ke Barrel Jack yang tersedia. Tegangan maksimal yang dapat diberikan kepada Arduino maksimal 12volt dengan range arus maksimal 2A (Agar regulator tidak panas).</p>
          </div>
          <div class="col">
            <h2>Voltage Regulator</h2>
            <p>Fungsi dari voltage regulator adalah untuk mengendalikan atau menurunkan tegangan yang diberikan ke papan Arduino dan menstabilkan tegangan DC yang digunakan oleh prosesor dan elemen-elemen lain</p>
          </div>
          <div class="col">
            <h2>Power USB</h2>
            <p>Power USB digunakan untuk memberikan catu daya ke Papan Arduino menggunakan kabel USB dari komputer</p>
          </div>
          <div class="col">
            <h2>Arduino Reset</h2>
            <p>Arduino Reset digunakan untuk memulai program pada arduino dari awal bukan untuk menghapus program atau mengosongkan mikrokontroller</p>
          </div>
          <div class="w-100"></div>
          <div class="col">col</div>
          <div class="col">col</div>
          <div class="col">col</div>
          <div class="col">col</div>
        </div>
      </div>
    </div>


  </section>
  <!-- content3 -->
  <section id="komp-tam">
    <div class="container">
      <div class="komptam">
        <h1 class="text-center">Additional Components</h1>
        <div class="row pt-2 mt-4">
          <div class="col-sm-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100">
            <h2>LED</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
            <h2>Buzzer</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
            <h2>Push Button</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>
    </div>

    <div class="row pt-2 mt-4">
      <div class="col-sm">
        <div class="card">
          <div class="card-header text-center">
            Komponen
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm">
                <h5>Komponen 1</h5>
                <p>With supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="col-sm">
                <h5>Komponen 3</h5>
                <p>With supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="col-sm">
                <h5>Komponen 3</h5>
                <p>With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end background -->
</div>