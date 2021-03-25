<?php 
require_once 'koneksi.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title>Input Data Buku Tamu</title>
  </head>
  <body>
   <div class="container">
 		<div class="card-header">
 			<h3>Form Input Buku Tamu</h3>
 		</div>
 		<div class="card-body">
 			<form action="proses_insert_buku_tamu.php" method="POST">
 				<div class="form-group">
 					<input type="text" name="nama" required class="form-control" placeholder="Masukkan nama anda"> </div>
 				<div class="form-group">
 					<input type="email" name="email" required class="form-control" placeholder="Masukkan email anda"> </div>
				<div class="form-group">
 					<textarea name="pesan" required class="form-control" placeholder="Masukkan pesan kesan anda"></textarea> </div>
 				<div class="form-group">
 					<input type="submit" class="btn btn-primary btn-block" value="Kirim"/></div>
 						
			</form>
			<?php 
				$sql = "SELECT * FROM tb_tamu ORDER BY id_tamu ASC";
				$result	=$koneksi->query($sql);
			 ?>
            
                    <table  id="myTable" class="table table-striped table-bordered table-hover" >
			      
				        <thead>
        					<tr align="center">
        						<th width="50">No</th>
        						<th>ID TAMU</th>
        						<th>Nama</th>
        						<th>Email</th>
        						<th>Pesan / Komentar</th>
        						<th>Aksi</th>
            					</tr>
            			</thead>
            			<tbody>
					<?php 
						if ($result->num_rows>0) {
							$no = 1;
							while ($row = $result->fetch_assoc()){
								?>
								<tr align="center">
									<td><?=$no;?></td>
									<td><?=$row['id_tamu'];?></td>
									<td><?=$row['nama_tamu'];?></td>
									<td><?=$row['email_tamu'];?></td>
									<td><?=$row['pesan_tamu'];?></td>
									<td align="center">
                                                <!-- <a href="index.php?url=data_calon_lihat&id=<?php echo $data['id'] ?>" class="btn btn-xs btn-info" title="Lihat">
                                                    <i class="fa fa-eye"></i>
                                                </a> -->
                                                <a href="hal_edit_buku_tamu.php?idTamu=<?php echo $row['id_tamu'] ?>" class="btn btn-xs btn-warning" title="Ubah">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="proses_delete_buku_tamu.php?idTamu=<?=$row['id_tamu'] ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')" >
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
								</tr>
						<?php 
								$no++;
							}
						}
					 ?>
					 
					
				</tbody>

			</table>


 		</div>
    </div>
 

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="asset/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="asset/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="asset/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
   

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            pageLength: 5,
        });
        });

</script>
</body>
</html>

  	
 