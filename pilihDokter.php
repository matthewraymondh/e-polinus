<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E-POLINUS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
    
        <!-- MetisMenu CSS -->
        <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    
        <!-- Morris Charts CSS -->
        <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    
        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

         <!-- DataTables Responsive CSS -->
         <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

         <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->


        <style>
        body {
          background-color: #accffe;
        }

        .text-shadow {
         color: white;
         text-shadow: 2px 2px 4px #000000;
        }
        </style>    
	</head>

	<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white shadow-lg pb-3 pt-3 font-weight-bold">
            <div class="container"><a href="index.php" > <img src="assets/img/icons/logo.png" alt="" width="100" height="100" style="margin-right:1000px;"/>
                </a>
            </div>
        </nav>
    

                        

		<div class="container">
		
        
        
        
        
		<div class="inner-2">
        
        <img src="images/m.png" alt="" class="image-3"> 
       
        

        <div class="row mb-5">
    
        <div class="col  mb-5">
            
            <h1 style="text-align: center; font-weight: bold;" class="text-shadow">Daftar Dokter Tersedia</h1>
        </div>
    </div>
               
        
			
        
    <div class="card-body">
                <!-- <div class="table-responsive">
                    <table class="table table-bordered table-light" id="dataTable" width="100%" cellspacing="0">

                    <tr align="center" style="font-weight:bold">
                    <td width="5%">No</td>
                    <td>Nama Dokter</td>
                    <td>Nama Poli</td>
                    <td>Hari</td>
                    <td>Jam Mulai</td>
                    <td>Jam Selesai</td>
                    <td width="15%">Aksi</td>
                    </tr> -->
                      
                            
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = "SELECT * FROM dokter INNER JOIN poli ON dokter.id_poli=poli.id INNER JOIN jadwal_periksa ON jadwal_periksa.id_dokter = dokter.id WHERE dokter.id !='5' AND jadwal_periksa.status !='0'";
                        $result = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_array($result)) :

                            
                        

                        ?>

                                    <!-- <tr align="center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['nama_poli'] ?></td>
                                    <td><?= $row['hari'] ?></td>
                                    <td><?= time('H:i',($row['jam_mulai'])); ?></td>
                                    <td><?= $row['jam_selesai'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                        <a title="Ajukan Periksa" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalPeriksa<?=$no?>"><i class="fa  fa-user-md"></i></a>
                                        
                                        </div>
                                    </td>
                                    </tr> -->
                           
                        <div class="col-md-4">
                        
                        <div class="card mb-3" >
                        
                        <i class="fa fa-user-md icon-dokter" style="font-size:48px; margin-top:15px;"></i>
                            
                        
                            <div class="card-body">
                            <input type="hidden" name="id_jadwal" value="<?= $row['id_jadwal']; ?>">
                            
                            <h5 class="card-title" ><?php echo $row['nama']; ?></h5>
                            <p class="card-text-2"><?php echo $row['hari']; ?>
                            (<?php echo date('H:i', strtotime($row['jam_mulai'])); ?> - <?php echo date('H:i', strtotime($row['jam_selesai'])); ?>)</p>
                            <p class="card-text"><?php echo $row['nama_poli']; ?></p>

                            <a href="pasienLama.php?id_jadwal=<?php echo $row['id_jadwal'];?>" type="button" class="btn btn-sm btn-primary" >Ajukan Periksa</a>
                                     
                             
                            </div>

                            
                           
                           
                            <!-- Awal Modal Ubah-->
                            <!-- <div class="modal fade" id="modalPeriksa<?=$no?>" role="dialog">
                                  <div class="modal-dialog"> -->
        
                                    <!-- Modal content-->
                                    <!-- <div class="modal-content">
                                      <div class="modal-header">
                                        
                                        <h4 class="modal-title">Modal Header</h4>
                                      </div>
        
                                            <div class="modal-body"> -->
                                            <!-- Form ubah data obat disini -->
                                            <!-- <form action="../pages/tambahPoli.php" method="post">
                                            <input type="hidden"  name="id_jadwal" value="<?= $row['id_jadwal']; ?>">
                                           
                                            <div class="form-group">
                                            <label for="nama_obat">NIM</label>
                                            <br>
                                            <input type="text" id="nim" name="nim">
                                            </div>

                                            

                                            <div class="form-group">
                                            <label for="nama_obat">Keluhan</label>
                                                   <textarea name="" id="" placeholder="Message" class="form-control" style="height: 130px;"></textarea>
                                                </div>
                                                
                                                
                                                    <div class="modal-footer">
                                                    <a type="button" class="btn btn-danger" style="color:#ffffff;" data-dismiss="modal">Close</a>
                                                    <a type="submit" class="btn btn-primary" style="color:#ffffff;">Ubah</a>
                                                    </div>
                                                    </form> -->

                                                    <!-- <script>
            function detail(){
                var id = $("#nim").val();
                $.ajax({
                    url: "data.php",
                    method: "POST",
                    data:{id:id},
                    dataType : "json",
                    success:function (data){
                        $('#id_pasien').val(data.id_pasien);

                    }
                }) 
            }
        </script> -->

                                                    

                                            <!-- </div>
        
                                            
       
                                    </div>
        
                                  </div>
                                  </div> -->
                                  <!-- Akhir Modal Ubah-->
                            

                           

                        </div>
                        </div>
                        
                        
                        <?php endwhile; ?>
                        </table>
                    
                    
                    

                    

                    <!-- </div> -->
                </div>
				
				
			
                
		</div>
		</div>

        
        
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="vendor/raphael/raphael.min.js"></script>
        <script src="vendor/morrisjs/morris.min.js"></script>
        <script src="data/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>

        

        
        
        
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>