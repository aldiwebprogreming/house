<div class="container mt-5">
  <div class="card" style="height: 100%; width: 100%;">
    <div class="card-body">

      <div class="row">

        <h5 class="text-primary">Data upload rumah anda</h5>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Harga</th>
              <th scope="col">Luas Bangunan</th>
              <th scope="col">Luas Tanah</th>
              <th scope="col">Jml K.Mandi</th>
              <th scope="col">Jml K.Tidur</th>
              <th scope="col">Opsi</th>
              
            </tr>
          </thead>
          <tbody>
            <?php foreach ($upload as $data) { ?>
              <tr>
                <th scope="row"><?= $data['harga'] ?></th>
                <td><?= $data['luas_bangunan'] ?></td>
                <td><?= $data['luas_tanah'] ?></td>
                <td><?= $data['jml_kamar_mandi'] ?></td>
                <td><?= $data['jml_kamar_tidur'] ?></td>
                <td>
                  <a href="<?= base_url('member/detail_rumah/') ?><?= $data['id'] ?>" class="btn btn-primary">Detail</a>
                  <a href="" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>

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
