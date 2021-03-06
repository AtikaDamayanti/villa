
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'> DAFTAR KAMAR <?php echo anchor('kamar/create/','Tambah',array('class'=>'btn btn-danger btn-sm'));?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="20px">No</th>
		    <th>Id Kamar</th>
		    <th>Nama Kamar</th>
		    <th>No Kamar</th>
		    <th>Kapasitas</th>
		    <th>Status Kamar</th>
		    <th>Harga Kamar</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($kamar_data as $kamar)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $kamar->id_kamar ?></td>
		    <td><?php echo $kamar->nama_kamar ?></td>
		    <td><?php echo $kamar->no_kamar ?></td>
		    <td><?php echo $kamar->kapasitas ?></td>
		    <td><?php echo $kamar->status_kamar ?></td>
		    <td><?php echo $kamar->harga_kamar ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('kamar/read/'.$kamar->id_kamar),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('kamar/update/'.$kamar->id_kamar),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('kamar/delete/'.$kamar->id_kamar),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->