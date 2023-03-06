<div class="container mt-5">
  <div class="card" style="height: 100%; width: 100%;">
    <div class="card-body">

      <div class="row">
        <div class="col-sm-3">
          <div class="card shadow">
            <img class="card-img-top" src="<?= base_url('assets/img/agen.png') ?>" alt="Card image cap">
            <div class="card-body">
              <div class="alert alert-danger text-center" role="alert">
                Profil anda belum terisi
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="card shadow">
            <div class="alert alert-primary mt-3 my-2 mx-2" role="alert">
              Mohon isi profil biodata anda dengan benar
            </div>

            <div class="form mx-2 my-2">
              <form method="post" action="<?= base_url('member/act_profil') ?>">
               <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" style="width: 500px;" placeholder="Masukan email" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" style="width: 500px;" placeholder="Masukan email" required>
              </div>

              <div class="form-group mt-3">
                <label>Nomor whatsapp</label>
                <input type="number" name="nowa" class="form-control" style="width: 500px;" placeholder="Masukan nomor whatsapp" required>
              </div>


              <div class="form-group mt-3">
                <label>Provinsi</label>
                <select class="form-control" id="prov" name="prov" style="width: 500px;">
                  <option> == Pilih Provinsi ==</option>
                  <?php foreach ($prov as $data) { ?>
                    <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group mt-3">
                <label>Kota / Kabupaten</label>
                <select class="form-control" id="kab" name="kab" style="width: 500px;" >
                  <option> == Pilih Kota ==</option>
                </select>
              </div>

              <div class="form-group mt-3">
                <label>Kecamatan</label>
                <select class="form-control" id="kec" name="kec" style="width: 500px;">
                  <option> == Pilih Kecamatan ==</option>
                </select>
              </div>

              <div class="form-group mt-3">
                <label>Foto Profil</label>
                <input type="file" name="foto" class="form-control" style="width: 500px;" >
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
