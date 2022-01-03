        <div class="container-fluid" id="container-wrapper">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>

            <?php endif; ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Film</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Film</li>
            </ol>
          </div>
           <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Film</h6>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>movieclient/tambah" class="btn btn-primary">Add Movie</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Judul Film</th>
                        <th>Poster</th>
                        <th>Sinopsis</th>
                        <th>Genre</th>
                        <th>Tahun Rilis</th>
                        <th>Durasi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($movieclient as $mc) : ?>
                      <tr>
                        <td><?= $mc['judul']; ?></td>
                        <td><img src="<?= $mc['poster']; ?>" height="300px" width="200px;"></td>
                        <td><?= $mc['sinopsis']; ?></td>
                        <td><?= $mc['genre']; ?></td>
                        <td><?= $mc['tahun_rilis']; ?></td>
                        <td><?= $mc['durasi']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>movieclient/hapus/<?= $mc['id']; ?>"
                            class="badge badge-danger float-right tombol-hapus">hapus</a>
                            <a href="<?= base_url(); ?>movieclient/ubah/<?= $mc['id']; ?>"
                            class="badge badge-success float-right">ubah</a>
                            <a href="<?= base_url(); ?>movieclient/detail/<?= $mc['id']; ?>"
                            class="badge badge-primary float-right">detail</a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>




