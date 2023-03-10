<div class="container mt-5">
  <div class="card" style="height: 100%; width: 100%;">
    <div class="card-body">

      <div class="row">
        <div class="col-sm-3">
          <div class="card shadow">
           <?php if ($profil == false) { ?>
            <img class="card-img-top" src="<?= base_url('assets/img/agen.png') ?>" alt="Card image cap">
          <?php }else{ ?>
            <img class="card-img-top" src="<?= base_url('profil/') ?><?= $profil['foto'] ?>" alt="Card image cap">
          <?php } ?>
          <div class="card-body">
            <?php if ($profil == false) { ?>
              <div class="alert alert-danger text-center" role="alert">
                Profil anda belum terisi
              </div>

            <?php }else{ ?>
              <div class="alert alert-primary text-center" role="alert">
                <b>Hello <?= $profil['nama_lengkap'] ?> </b>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="card shadow">
          <?php if ($profil == false) { ?>
            <div class="alert alert-primary mt-3 my-2 mx-2" role="alert">
              Mohon isi profil biodata anda dengan benar
            </div>

          <?php }else{ ?>
            <div class="alert alert-primary mt-3 my-2 mx-2" role="alert">
              Selamat Datang <?= $profil['nama_lengkap'] ?>
            </div>
          <?php } ?>

          <div class="form mx-2 my-2">
            <form method="post" action="" enctype="multipart/form-data">
             <div class="form-group mb-4">
              <label class="text-primary">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" style="width: 500px;" placeholder="Masukan nama lengkap">
              <?php echo form_error('nama_lengkap', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label class="text-primary">Email</label>
              <input type="text" name="email" class="form-control" style="width: 500px;" placeholder="Masukan email">
              <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group mt-3 ">
              <label class="text-primary">Nomor whatsapp</label>
              <input type="text" name="nowa" class="form-control" style="width: 500px;" placeholder="Masukan nomor whatsapp">
              <?php echo form_error('nowa', '<div class="text-danger">', '</div>'); ?>
            </div>


            <div class="form-group mt-3">
              <label class="text-primary">Provinsi</label>
              <select class="form-control" id="prov" name="prov" style="width: 500px;">
                <option value=""> == Pilih Provinsi ==</option>
                <?php foreach ($prov as $data) { ?>
                  <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                <?php } ?>
              </select>
              <?php echo form_error('prov', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group mt-3">
              <label class="text-primary">Kota / Kabupaten</label>
              <select class="form-control" id="kab" name="kab" style="width: 500px;" >
                <option value=""> == Pilih Kota ==</option>
              </select>
              <?php echo form_error('kab', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group mt-3">
              <label class="text-primary">Kecamatan</label>
              <select class="form-control" id="kec" name="kec" style="width: 500px;">
                <option value=""> == Pilih Kecamatan ==</option>
                <?php echo form_error('kec', '<div class="text-danger">', '</div>'); ?>
              </select>
            </div>

            <div class="form-group mt-3">
              <label class="text-primary">Foto Profil</label>
              <input type="file" name="foto" class="form-control" style="width: 500px;" >
              <?php echo form_error('foto', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group mt-3">
              <button type="submit" class="btn btn-primary">Simpan profil <i class="fa fa-user"></i></button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

</div>



</div>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $("#prov").change(function(){
      const prov = $(this).val();
      const url = "<?= base_url('member/get_kab?id=') ?>"+prov;
      $("#kab").load(url);
    });

    $("#kab").change(function(){
      const kab = $(this).val();
      const url = "<?= base_url('member/get_kec?id=') ?>"+kab;
      $("#kec").load(url);
    });


  })
</script>
