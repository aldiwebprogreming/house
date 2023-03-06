<div class="container mt-5">
  <div class="card bg-primary" style="height: 100%; width: 100%;">
    <div class="card-body">

      <h2 class="text-center text-white mt-3">Login Member <br></h2>
      <p class="text-white mt-2" style="text-align: center;">Pasarkan properti Anda di HomeStay <br>dan raih makin banyak peluang! Karena kami Ada Buat Anda</p>

      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <div class="card shadow">

            <form method="post" class="mx-3 my-3" action="">


              <div class="alert alert-success text-center" role="alert">
                Masukan nomor whatsapp dan password dengan benar
              </div>


              <div class="form-group mt-3">
                <label for="exampleInputEmail1" class="mb-2 text-primary">Nomor Whatsapp</label>
                <input type="text" name="nowa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nomor whatsapp">
                <?php echo form_error('nowa', '<div class="text-danger">', '</div>'); ?>
              </div>

              <div class="form-group mt-3">
                <label for="exampleInputEmail1" class="mb-2 text-primary">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password" name="pass">

                <?php echo form_error('pass', '<div class="text-danger">', '</div>'); ?>
              </div>

              <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-block" style="width: 100%;">Login Member</button>
              </div>

            </form>

          </div>
        </div>
        <div class="col-sm-4">
        </div>
      </div>

      <center>
        <div class="btn mt-3">
          <a href="<?= base_url('auth/register') ?>" class="btn btn-dark">Daftar Sekarang <i class="fa fa-user"></i> </a>

          <a href="<?= base_url('auth/') ?>" class="btn btn-dark">Masuk<i class="fa fa-home"></i> </a>
          <!-- <button class="btn btn-dark" data-toggle="modal" data-target="#modalRegister">Daftar Sekarang <i class="fa fa-user"></i></button>
            <button class="btn btn-dark">Masuk <i class="fa fa-home"></i> </button> -->
          </div>
          <p class="mt-3"><a href="" class="text-white">Pelajari lebih lanjut</a></p>

        </center>
      </div>
    </h6>
  </div>

</div>



</div>
