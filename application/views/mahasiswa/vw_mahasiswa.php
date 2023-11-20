
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">       
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <div class="container-fluid">
                                <h1 class="h3 mb-4 text-gray-808">
                                    <?php echo $judul; ?>
                                </h1>
                                <div class="row">
                                    <div class="col-md-6"><a href="<?= base_url('Mahasiswa/Tambah') ?>" class="btn btn-info mb-2">Tambah
                                            Mahasiswa</a></div>
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama</td>
                                                    <td>Nim</td>
                                                    <td>Email</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>1</td>
                                                <td>Naufal Feimes</td>
                                                <td>2255301138</td>
                                                <td>feimes@alumni.pcr.ac.id</td>
                                                <td>
                                                    <a href="" class="btn btn-danger">Hapus</a>
                                                    <a href="" class="btn btn-warning">Edit</a>
                                                    <a href="<?= site_url() ?> Mahasiswa/detail" class="btn btn-info">Detail</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </script>
