<div class="container mt-5">
  <div class="card">
    <div class="card-body">

      <div class="row">

        <div class="col-sm-9">
          <div class="card" style="">
            <img class="card-img-top" src="<?= base_url('imghouse/') ?><?= $detail['foto'] ?>" alt="Card image cap">
           <!--  <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div> -->
          </div>
        </div>  
        <div class="col-sm-3">
          <div class="row">
            <div class="col-sm-12 mt-2 col-4">
              <div class="card" style="">
               <img class="card-img-top" src="<?= base_url('imghouse/') ?><?= $detail['foto'] ?>" alt="Card image cap">
             </div>
           </div>
           <div class="col-sm-12 mt-2  col-4">
            <div class="card" style="">
             <img class="card-img-top" src="<?= base_url('imghouse/') ?><?= $detail['foto'] ?>" alt="Card image cap">

           </div>
         </div>
         <div class="col-sm-12 mt-2  col-4">
          <div class="card" style="">
            <img class="card-img-top" src="<?= base_url('imghouse/') ?><?= $detail['foto'] ?>" alt="Card image cap">

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-9">

      <div class="mt-5">
        <h4 class="text-primary">Rp. <?= $detail['harga'] ?></h4>
        <?php 
        $prov = $this->db->get_where('tbl_provinsi', ['id' => $detail['prov']])->row_array();
        $kab = $this->db->get_where('tbl_kabupaten', ['id' => $detail['kab']])->row_array();
        ?>
        <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?= $kab['name'] ?>, <?= $prov['name'] ?></p>
      </div>
      <hr>


      <div class="mt-5">
        <h6 class="">Informasi Property</h5>
          <p class="text-secondary">Spesifikasi</p>
          <div class="row mt-3">
            <div class="col-sm-2 col-4 mt-1">
              <div class="card">
                <div class="text-center">
                  <small> Kamar Tidur</small>
                  <h6><?= $detail['jml_kamar_tidur'] ?></h6>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-4 mt-1">
              <div class="card">
                <div class="text-center">
                 <small> Kamar Mandi </small>
                 <h6><?= $detail['jml_kamar_mandi'] ?></h6>
               </div>
             </div>
           </div>
           <div class="col-sm-2 col-4 mt-1">
            <div class="card">
              <div class="text-center">
                <small> Luas Tanah</small>
                <h6><?= $detail['luas_tanah'] ?> M</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-4 mt-1">
            <div class="card">
              <div class="text-center">
               <small>Luas Bangunan</small>
               <h6><?= $detail['luas_bangunan'] ?></h6>
             </div>
           </div>
         </div>

         <div class="col-sm-2 col-4 mt-1">
          <div class="card">
            <div class="text-center">
              <small>Garasi</small>
              <h6><?= $detail['jml_garasi'] ?></h6>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-4 mt-1">
          <div class="card">
            <div class="text-center">
             <small>Type Property</small>

             <?php 
             $kategori = $this->db->get_where('tbl_kategori', ['kode' => $detail['kategori']])->row_array();
             ?>
             <h6><?= $kategori['kategori'] ?></h6>
           </div>
         </div>
       </div>
     </div>
     <hr>
     <div class="deskripsi">
      <p class="text-secondary">Deskripsi</p>
      <p><?= $detail['deskripsi'] ?></p>
    </div>

    <hr>
    <div class="fasilitas">
      <h6 class="text-dark">Fasilitas</h6>

      <div class="row mt-3">
        <?php 
        $text = $detail['fasilitas'];
        $arr = explode(',', $text);
        $count = count($arr);
        for ($i=0; $i < $count ; $i++) { 
          ?>
          <div class="col-sm-2 col-4 mt-1">
            <div class="card">
              <div class="text-center">
                <small><?= $arr[$i] ?></small>
                <h6><i class="fa fa-check"></i> </h6>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>



    </div>
  </div>

</div>

<div class="col-sm-3">
  <div class="card mt-5 shadow">
    <div class="my-2 mx-2">
      <h6 class="text-primary text-center"><?= $member['nama_lengkap'] ?></h6>
      <hr>
      <button type="button" class="btn btn-outline-info" style="width: 100%;"><i class="fa fa-phone"></i> <?= $member['nowa'] ?></button>
      <button type="button" class="btn btn-outline-primary mt-2" style="width: 100%;"><i class="fa-brands fa-whatsapp"></i> <?= $member['nowa'] ?></button>
    </div>
  </div>
</div>



</div>
</h6>
</div>

</div>

<h5 class="text-primary mt-5 mb-5 ">Property Lainnya </h5>

<div class="row">
  <div class="owl-carousel detail-crousel">

    <?php foreach ($rumah as $produk) { ?>
      <div class="wow fadeInUp" data-wow-delay="0.1s">
        <div class="property-item rounded overflow-hidden">
          <div class="position-relative overflow-hidden">
            <a href="<?= base_url('app/detail/') ?><?= $produk['kode_rumah'] ?>"><img class="img-fluid" src="<?= base_url('imghouse/') ?><?= $produk['foto'] ?>" alt=""></a>
            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>

            <?php 
            $kategori = $this->db->get_where('tbl_kategori', ['kode' => $produk['kategori']])->row_array();
            ?>
            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"><?= $kategori['kategori'] ?></div>
          </div>
          <div class="p-4 pb-0">
            <h5 class="text-primary mb-3">Rp.<?= $produk['harga'] ?></h5>
            <a class="d-block h5 mb-2" href=""><?= $produk['nama_produk'] ?></a>
            <?php 
            $prov = $this->db->get_where('tbl_provinsi', ['id' => $produk['prov']])->row_array();
            $kab = $this->db->get_where('tbl_kabupaten', ['id' => $produk['kab']])->row_array();
            ?>
            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?= $kab['name'] ?>, <?= $prov['name'] ?></p>
          </div>
          <div class="d-flex border-top">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i><?= $produk['luas_tanah'] ?> Sqft</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i><?= $produk['jml_kamar_tidur'] ?> Bed</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i><?= $produk['jml_kamar_mandi'] ?> Bath</small>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

</div>

</div>
