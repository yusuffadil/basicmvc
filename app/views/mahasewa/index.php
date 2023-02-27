<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasewa
            </button>
            <h3>Daftar Mahasewa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasewa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end ms-1" onClick="return confirm('yakin?')">hapus</a>
                        <a href="<?= BASEURL; ?>/mahasewa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-1">detail</a>
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
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasewa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasewa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <select id="pekerjaan" class="form-select" name="pekerjaan">
                            <option value="Musisi">Musisi</option>
                            <option value="Buzzer">Buzzer</option>
                            <option value="Magatron">Magatron</option>
                            <option value="Penjual Ludah">Penjual Ludah</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>