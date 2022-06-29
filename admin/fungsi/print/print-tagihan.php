<?php 
require 'fungsi/fungsi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
   
    <!-- Icon -->
    <link rel="icon" type="image/png" href="<?=url()?>images/logo.JPG">
    <!-- Title Page-->
    <title>Print</title>

    <!-- Fontfaces CSS-->
    <link href="<?=url()?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=url()?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- <?=url()?>Vendor CSS-->
    <link href="<?=url()?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=url()?>css/theme.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="jumbotron">
				<center>
					<?=gambar("logo.JPG","120")?>
				</center>
			</div>
		</div>
	</div>
	
						
						 <div class="table-responsive table--no-card m-b-30 ml-5 mr-5">
						 	 <?php 
						                           					
						                           						foreach (print_tagihan() as $key):
						                                            ?>
																		<table class="table">
																<tr>
						                                            	 <th>NIS</th>
																		 <th>Nama</th>
																		 <th>Kelas</th>
																		 <th>Program Studi</th>
																		 <th>Bulan</th>
																		 <th>Keterangan</th>
																</tr>													
																		   <tr>
																			
						                                            	     <td> <?=  $key['nis'];?></td>
						                                            		 <td>  <?=  $key['nama'];?></td>
						                                             	   	 <td>  <?= $key['kelas'];?></td>                             	
						                                             		 <td>  <?=  $key['prodi'];?></td>
																			  <td> <?php 
																				if ($key['bulan']==1) {
																				echo '<p style="color: black;">Januari</p>';
																				}else if ($key['bulan']==2) {
																				echo '<p style="color: black;">Febuari</p>';
																				}elseif ($key['bulan']==3) {
																				echo '<p style="color: black;">Maret</p>';
																				}elseif ($key['bulan']==4) {
																				echo '<p style="color: black;">April</p>';
																				}elseif ($key['bulan']==5) {
																				echo '<p style="color: black;">Mei</p>';
																				}elseif ($key['bulan']==6) {
																				echo '<p style="color: black;">Juni</p>';
																				}elseif ($key['bulan']==7) {
																				echo '<p style="color: black;">Juli</p>';
																				}elseif ($key['bulan']==8) {
																				echo '<p style="color: black;">Agustus</p>';
																				}elseif ($key['bulan']==9) {
																				echo '<p style="color: black;">September</p>';
																				}elseif ($key['bulan']==10) {
																				echo '<p style="color: black;">Oktober</p>';
																				}elseif ($key['bulan']==11) {
																				echo '<p style="color: black;">November</p>';
																				}elseif ($key['bulan']==12) {
																				echo '<p style="color: black;">Desember</p>';
																				}
																				?>
																				</td>
						                                               	      <td> <?= $key['keterangan'];?> </td>
						                                               </tr>
																			</table>
																			</tr>
						                                               <?php endforeach; ?>
						                                                
						                                        
						                                   
						                                        
							                       

						                                         
						</div>
							
		
			
	<script>
					window.print();
				</script>
  <script src="<?= url() ?>vendors/jquery/jquery.min.js"></script>
  <script src="<?= url() ?>vendors/js/bootstrap.min.js"></script> </body>
</body>
</html>
