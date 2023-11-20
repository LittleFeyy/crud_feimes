<style>
    .container-fluid {
        padding: 20px;
    }
    .h3 {
        color: #333;
    }
    .card {
        margin-top: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-left: 200px;;
    }
    .card-header {
        background-color: #f8f9fa;
        font-weight: bold;
    }
    .card-body {
        padding: 20px;
    }
    .card-title {
        font-size: 24px;
        font-weight: bold;
    }
    .card-subtitle {
        color: #777;
    }
    .row {
        margin: 10px 0;
    }
    .col-md-4 {
        font-weight: bold;
    }
    .col-md-2 {
        text-align: center;
    }
    .col-md-6 {
        color: #555;
    }
    .card-footer {
        background-color: #f8f9fa;
        text-align: center;
        padding: 10px 0;
    }
    .btn-danger {
        background-color: #d9534f;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }
    .btn-danger:hover {
        background-color: #c9302c;
    }
</style>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h2 class="card-title">Ardiyanto</h2>
                    <h6 class="card-subtitle mb-2-muted">ardiyanto@alumni.pcr.ac.id</h6>
                    <div class="row">
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">165243582</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">Laki-Laki</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">Sistem Informasi</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">MAN 1 Rokan hilir</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">0821********</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">Umban Sari</div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= site_url('Mahasiswa') ?>"class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>