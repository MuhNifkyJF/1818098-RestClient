
                <div class="container-fluid" id="container-wrapper">
                          <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="./">Home</a></li>
                              <li class="breadcrumb-item">Forms</li>
                              
                            </ol>
                          </div>
                <div class="card mb-4">

<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah Film
                </div>
                <div class="card-body">
                    <form action="" method="post">
                      <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" placeholder ="Masukan Judul Film">
                      <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="poster">Poster</label>
                      <input type="text" name="poster" class="form-control" id="poster" placeholder ="Masukan link poster">
                      <small class="form-text text-danger"><?= form_error('poster'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="trailer">Trailer</label>
                      <input type="text" name="trailer" class="form-control" id="trailer" placeholder ="Masukan link trailer">
                      <small class="form-text text-danger"><?= form_error('trailer'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="sinopsis">Sinopsis</label>
                      <input type="text" name="sinopsis" class="form-control" id="sinopsis" placeholder ="Masukan link trailer">
                      <small class="form-text text-danger"><?= form_error('sinopsis'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="pemeran">Pemeran</label>
                      <input type="text" name="pemeran" class="form-control" id="pemeran" placeholder ="Masukan Pemeran Film">
                      <small class="form-text text-danger"><?= form_error('pemeran'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="genre">Genre</label>
                      <input type="text" name="genre" class="form-control" id="genre" placeholder ="Masukan Genre Film">
                      <small class="form-text text-danger"><?= form_error('genre'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="tahun_rilis">Tahun Rilis</label>
                      <input type="text" name="tahun_rilis" class="form-control" id="tahun_rilis" placeholder ="Masukan Tahun Rilis Film">
                      <small class="form-text text-danger"><?= form_error('tahun_rilis'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="durasi">Durasi</label>
                      <input type="text" name="durasi" class="form-control" id="durasi" placeholder ="Masukan Durasi Film">
                      <small class="form-text text-danger"><?= form_error('durasi'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="negara">Negara</label>
                      <input type="text" name="negara" class="form-control" id="negara" placeholder ="Masukan Nama Negara">
                      <small class="form-text text-danger"><?= form_error('negara'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    <a href="<?= base_url(); ?>movieclient" class="btn btn-primary">Kembali</a>
                        
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>