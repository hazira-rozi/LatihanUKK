<div class="card">
    <div class="card-header">
        <div class="col-xl-12 col-lg-12 col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <a href="user.php" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <a href="?url=tulis_catatan" text-align="right" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Catatan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                        <th>Hasil</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                        <th>Hasil</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                                $no=1;
                                $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                $user = $_SESSION['nisn']."|".$_SESSION['nama_lengkap'];
                                foreach($data as $value){
                                    $fragment = explode("|", $value);
                                    @$key = $fragment['1']."|".$fragment['2'];
                                    if($key == $user){
                                
                                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $fragment['3']; ?></td>
                        <td><?= $fragment['4']; ?></td>
                        <td><?= $fragment['5']; ?></td>
                        <td><?= $fragment['6']; ?></td>
                        <td><a href="?url=edit_kegiatan&id_catatan=<?=$fragment['0'] ?>" class="btn btn-warning"><i
                                    class="fa fa-pen"></i> Edit</a>
                        </td>
                        <td><a onclick="return confirm('Apakah anda yakin menghapus data ini')" href="do_hapus_catatan.php?id_catatan=<?=$fragment['0'] ?>" class="btn btn-danger"><i
                                    class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
