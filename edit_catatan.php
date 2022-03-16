<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <?php
            $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
            $id_catatan = $_GET['id_catatan'];

            foreach($data as $value){
                $fragment = explode('|', $value);
                if($fragment['0']==$id_catatan){

                 
        ?>
        
        <form action="do_edit_catatan.php" method="post">
        <input type = "hidden" name="id_catatan" value="<?=$fragment['0']; ?>">
            <div class="form-group">
                <label>Tanggal</label>
                <input value="<?=$fragment['3']; ?>" name="tanggal" type="date" required class=form-control placeholder="Pilih Tanggal">
            </div>
            <div class="form-group">
                <label>Waktu</label>
                <input value="<?=$fragment['4']; ?>" name="jam" type="time" required class=form-control placeholder="Masukkan Waktu">
            </div>
            <div class="form-group">
                <label>Kegiatan</label>
                <input value="<?=$fragment['5']; ?>" name="kegiatan" type="text" required class=form-control placeholder="Masukkan Kegiatan">
            </div>
            <div class="form-group">
                <label>Hasil</label>
                <input value="<?=$fragment['6']; ?>" name="hasil" type="text" required class=form-control placeholder="Hasil Kegiatan">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-paint-brush"></i> CLEAR</button>
        </form>
        <?php  } } ?>
    </div>
</div>