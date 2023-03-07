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
              <form method="post" action="<?= base_url('member/act_upload') ?>">
                <?php echo form_open_multipart('upload/do_upload');?>

                <div class="card">
                  <h5 class="my-2 mx-2">Lokasi</h5>
                  <hr>
                  <div class="form row mb-2 mx-2">
                    <div class="col-sm-6">
                      <label>Harga Rumah</label>
                      <input type="number" name="harga" class="form-control">
                    </div>

                    <div class="col-sm-6">
                      <label>Provinsi</label>
                      <select class="form-control" name="prov">
                        <option value="<?= $prov['id'] ?>"><?= $prov['name'] ?></option>
                      </select>
                    </div>
                  </div>
                  <div class="form row mb-2 mx-2">
                    <div class="col-sm-6">
                      <label>Kota / Kabupaten</label>
                      <select class="form-control" name="kab">
                        <option value="<?= $kab['id'] ?>"><?= $kab['name'] ?></option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                     <label>Kecamatan</label>
                     <select class="form-control" name="kec">
                      <option value="<?= $kec['id'] ?>"><?= $kec['name'] ?></option>
                    </select>
                  </div>
                  <div class="col-sm-6 mt-2">
                    <label>Alamat Detail</label>
                    <textarea class="form-control" name="alamat_detail"></textarea>
                  </div>
                </div>

                <div class="card mt-3">
                  <h5 class="my-2 mx-2">Spesifikasi</h5>
                  <hr>
                  <div class="form row mb-2 mx-2">
                    <div class="col-sm-6">
                      <label>Kamar Tidur</label>
                      <input type="number" name="jml_kamar_tidur" class="form-control">
                    </div>
                    <div class="col-sm-6">
                      <label>Kamar Mandi</label>
                      <input type="number" name="jml_kamar_mandi" class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                      <label>Luas Tanah</label>
                      <input type="number" name="luas_tanah" class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                      <label>Luas Bangunan</label>
                      <input type="number" name="luas_bangunan" class="form-control">
                    </div>

                    <div class="col-sm-6 mt-2">
                      <label>Garasi</label>
                      <input type="number" name="jml_garasi" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="card">
                  <h5 class="my-2 mx-2">Fasilitas</h5>
                  <hr>
                  <div class="form row mb-2 mx-2">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-check form-check-inline" style="position: inline;">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox1" value="Taman">
                          <label class="form-check-label" for="inlineCheckbox1">Taman</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox2" value="Pondok">
                          <label class="form-check-label" for="inlineCheckbox2">Pondok</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox2" value="Kolam Renang">
                          <label class="form-check-label" for="inlineCheckbox2">Kolam Renang</label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check form-check-inline" style="position: inline;">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox1" value="L.Olahraga">
                          <label class="form-check-label" for="inlineCheckbox1">L.Olahraga</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox2" value="Parkir">
                          <label class="form-check-label" for="inlineCheckbox2">Parkir</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox2" value="Keamanan">
                          <label class="form-check-label" for="inlineCheckbox2">Keamanan</label>
                        </div>

                      </div>

                      <div class="col-sm-3">
                        <div class="form-check form-check-inline" style="position: inline;">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Kolam Ikan</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Tempat Ibadah</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="fasilitas[]" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Kebersihan</label>
                        </div>

                      </div>
                    </div>
                  </div>


                  <div class="card">
                    <h5 class="my-2 mx-2">Deskripsi</h5>
                    <hr>
                    <div class="form row mb-2 mx-2">
                      <div class="row">
                        <textarea class="form-control" name="deskripsi" placeholder="Masukan deskpripsi rumah anda"></textarea>
                      </div>
                    </div>

                    <div class="card">
                      <h5 class="my-2 mx-2">Foto</h5>
                      <hr>
                      <div class="form row mb-2 mx-2">
                        <div class="row">
                          <input type="file" name="foto[]" class="form-control">
                        </div>
                      </div>

                      <div class="form row mb-2 mx-2">
                        <div class="row">
                          <input type="file" name="foto[]" class="form-control">
                        </div>
                      </div>
                      <div class="form row mb-2 mx-2">
                        <div class="row">
                          <input type="file" name="foto[]" class="form-control">
                        </div>
                      </div>
                      <div class="form row mb-2 mx-2">
                        <div class="row">
                          <input type="file" name="foto[]" class="form-control">
                        </div>
                      </div>
                      <div class="form row mb-2 mx-2">
                        <div class="row">
                          <input type="file" name="foto[]" class="form-control">
                        </div>
                      </div>

                      <button class="btn btn-primary"> Upload Rumah <i class="fa fa-home"></i> </button>

                    </form>
                  </div>
                </div>
              </div>
            </div>   

          </div>
        </div>

      </div>



    </div>

  </div>

</div>

</div>

