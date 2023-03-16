



<img src="<?= base_url('assets/img/') ?>benner3.png" class="img-fluid" alt="Responsive image">

<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h3 class="mb-3">Properti <?= $label['kategori'] ?> Baru Buat Kamu</h3>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="owl-carousel owl-theme kategori">

           <?php 
           foreach ($kategori as $data) {
            ?>
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="<?= base_url('app/kategori?kategori=') ?><?= $data['kode'] ?>">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>img/icon-apartment.png" alt="Icon">
                        </div>
                        <h6><?= $data['kategori'] ?></h6>
                        <span tex><?= rand(0,1000) ?> Properties</span>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">

                <?php 
                if ($rumah == false) {
                    echo "<h5 class='text-primary text-center mt-5'> Mohon maaf Property yang anda <br> cari belum tersedia </h5>";
                }else{
                   ?>



                   <?php foreach ($rumah as $produk) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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

            <?php } ?>


        </div>
    </div>
</div>
</div>
</div>
<!-- Property List End -->

