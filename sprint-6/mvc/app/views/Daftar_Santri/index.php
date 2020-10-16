<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash();?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
              Tambah Data Santri
          </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL;?>/Data_Santri/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari Nama" name="Cari" id="Cari" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

    <div class="row">
        <div class="col-6">
            <h3>Data Santri</h3>
            <ul class="list-group">
                <?php 
                $DATA = $data['Data_Santri'];
                foreach ($DATA as $key) : ?>
    <li class="list-group-item">
    <?= $key['Nama']?>
    <a href="<?= BASEURL; ?>/Data_Santri/hapus/<?= $key['id']?>" class="badge badge-danger float-right ml-1" onclick="return confirm('ingin dihapus?');">hapus</a>
    <a href="<?= BASEURL; ?>/Data_Santri/detail/<?= $key['id']?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $key['id']; ?>">ubah</a>
    <a href="<?= BASEURL; ?>/Data_Santri/detail/<?= $key['id']?>" class="badge badge-primary float-right ml-1">detail</a>
    </li>
                <?php endforeach; ?>
    </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <form action="<?= BASEURL;?>/Data_Santri/Tambah" method="POST">
       <input type="hidden" name="id" id="id">
       <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control" id="Nama" name="Nama">
    </div>
    
    <div class="form-group">
        <label for="Divisi">Divisi</label>
        <input type="text" class="form-control" id="Divisi" name="Divisi">
    </div>
    <div class="form-group">
        <label for="Asal">Asal</label>
        <input type="text" class="form-control" id="Asal" name="Asal">
    </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>