<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Film <?= $movieclient['judul']; ?>
                </div>
                <div class="card-body">

                <li class="list-group-item">
                    Judul : <?= $movieclient['judul']; ?><br>
                    Poster : <img src="<?= $movieclient['poster']; ?>" height="300px" width="200px;"><br>
                    Trailer : <iframe width="450" height="300" src="<?= $movieclient['trailer']; ?>"></iframe>  <br>
                    Sinopsis :<?= $movieclient['sinopsis']; ?><br>
                    Pemeran :<?= $movieclient['pemeran']; ?><br>
                    Genre :<?= $movieclient['genre']; ?><br>
                    Tahun Rilis :<?= $movieclient['tahun_rilis']; ?><br>
                    Durasi :<?= $movieclient['durasi']; ?><br>
                    Negara :<?= $movieclient['negara']; ?>

                </li>

                 <a href="<?= base_url(); ?>movieclient" class="btn btn-primary">Kembali</a>

                </div>
            </div>
        
        </div>
    </div>
</div>