<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Dosen</h3>
              <a class="btn btn-sm btn-social btn-success" style="float: right;" href="<?php echo base_url()?>dosen/tambahdosen">
                <i class="fa fa-plus"></i> Tambah data
              </a>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Fakultas</th>
                  <th>Departemen</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                   $query = $this->model_dosen->selectdb();
                   $no = 1;
                  foreach ($query as $key):?>
                <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $key->nama_dosen;?></td>
                <td><?php echo $key->email;?></td>
                <td><?php echo $key->fakultas;?></td>
                <td><?php echo $key->departemen;?></td>
                  <td>
                  <a href="#" class="btn btn-warning btn-sm fa fa-edit" data-toggle="modal" data-target="#modal-default"></button></a>
                  <a href="#" class="btn btn-danger btn-sm fa fa-trash"></button>
                   
                      </a>    
                  </td>
                  
                </tr>
                <?php endforeach;?>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Dosen</h4>
              </div>
              <div class="box-body">
                <form action="" method="post">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" id="namalengkap" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="namalengkap" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                <label>Fakultas</label>
                <select class="form-control select2" name="fakultas" id="fakultas" style="width: 100%;">
                <option value="">Pilih Fakultas</option>  
                <?php 
                foreach ($tb_fakultas as $key):?>
                <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>  
                <?php endforeach;?>
              </select>
              </div>
              <div class="form-group">
                <label>Fakultas</label>
                <select class="form-control select2" name="departemen" id="departemen" style="width: 100%;">
                <option value="">Pilih Departemen</option>  
                <?php 
                foreach ($dept as $key):?>
                <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>  
                <?php endforeach;?>
              </select>
              </div>

              </div>  
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
<script type="text/javascript">

function test(id,nama){
  $('#id').val(id);
  $('#nama').val(nama);
} 
</script>