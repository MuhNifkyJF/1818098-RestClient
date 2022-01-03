<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Ubah Film
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $movieclient['id']; ?>">

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $movieclient['judul']; ?>">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="text" name="poster" class="form-control" id="poster" value="<?= $movieclient['poster']; ?>">
                            <small class="form-text text-danger"><?= form_error('poster'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="trailer">trailer</label>
                            <input type="text" name="trailer" class="form-control" id="trailer" value="<?= $movieclient['trailer']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="sinopsis">sinopsis</label>
                            <input type="text" name="sinopsis" class="form-control" id="sinopsis" value="<?= $movieclient['sinopsis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pemeran">pemeran</label>
                            <input type="text" name="pemeran" class="form-control" id="pemeran" value="<?= $movieclient['pemeran']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="genre">genre</label>
                            <input type="text" name="genre" class="form-control" id="genre" value="<?= $movieclient['genre']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tahun_rilis">tahun_rilis</label>
                            <input type="number" name="tahun_rilis" class="form-control" id="tahun_rilis" value="<?= $movieclient['tahun_rilis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="durasi">durasi</label>
                            <input type="number" name="durasi" class="form-control" id="durasi" value="<?= $movieclient['durasi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="negara">negara</label>
                            <input type="text" name="negara" class="form-control" id="negara" value="<?= $movieclient['negara']; ?>">
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        <a href="<?= base_url(); ?>movieclient" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>