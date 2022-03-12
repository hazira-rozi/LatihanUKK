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
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                        <th>Hasil</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        $no=1;
                        $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                        $user = $_SESSION['nisn']."|".$_SESSION['nama_lengkap'];
                        foreach($data as $value){
                            $fragment = explode("|", $value);
                            @$key = $fragment['0']."|".$fragment['1'];
                            if($key == $user){
                        
                        ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $fragment['2']; ?></td>
                        <td><?= $fragment['3']; ?></td>
                        <td><?= $fragment['4']; ?></td>
                        <td><?= $fragment['5']; ?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
                </table>
                
        </div>
    </div>
</div>