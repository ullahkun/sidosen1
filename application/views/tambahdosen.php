<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Dosen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="tambahdosen1" method="post">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
               
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama_dosen" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email"placeholder="Masukkan email">
                </div>
                <div class="form-group">
                  <label>Fakultas</label>
                  <select class="form-control select2" name="fakultas" id="fakultas" style="width: 100%;">
                <option value="" >Pilih Fakultas</option>  
                <?php 
                foreach ($tb_fakultas as $key):?>
                <option value="<?php echo $key->name; ?>"><?php echo $key->name; ?></option>  
                <?php endforeach;?>
              </select>
                </div>

                <div class="form-group">
                <label>Departemen</label>
                <select class="form-control select2" name="departemen" id="departemen" style="width: 100%;">
                <option value="">Pilih Departemen</option>  
                <?php 
                foreach ($dept as $key):?>
                <option value="<?php echo $key->name; ?>"><?php echo $key->name; ?></option>  
                <?php endforeach;?>
              </select>
              </div>
              
              <div class="form-group">
                  <label>Spesialisasi</label>
                  <textarea class="form-control" rows="3" name="spesialisasi" id="spesialisasi" placeholder="spesialisasi1, spesialisasi2, ..."></textarea>
                </div>
              <!-- /.box-body -->
              <div class="form-group">
                  <label>Link riset</label>
                  <input type="text" class="form-control" id="linkriset" name="linkriset" placeholder="Masukkan link riset">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div></div></div></form>
    </section>
