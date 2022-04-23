<div class="container">
   <section class="content mt-4">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card card-primary">
             <div class="card-header">
             <?php 
                 include "page/koneksi.php";
                   $q=$_POST['q'];
                   $result="SELECT * FROM View_KonKeluarBUD WHERE OPD LIKE '%".$q."%' OR NOSPM LIKE '%".$q."%' OR NOSP2D LIKE '%".$q."%' OR NOSPP LIKE '%".$q."%' OR KEPERLUAN LIKE '%".$q."%' ORDER BY NOSP2D, TGLSP2D";
                   $query=sqlsrv_query($conn,$result, array(), array("Scrollable"=>'static'));
                   $num_count=sqlsrv_num_rows($query);
                   ?>
               <h3 class="card-title"><?=$num_count;?> Dokumen Ditemukan</h3>
             </div>
             <div class="card-body">
               <div class="row">
                  <?php
                   while ($data=sqlsrv_fetch_array($query)) 
                     {
                       if($data['SPP']>0){
                       $status='Dokumen di Bandahara';
                       }elseif($data['SPM']>0){$status='Dokumen di Kepala OPD';	
                       }elseif($data['SP2DBLMSAH']>0){$status='SP2D di Kasda (Belum Pengesahan)';
                       }elseif($data['SP2DSDHSAH']>0){$status='SP2D di Kasda (Sudah Pengesahan)';
                       }elseif($data['SP2DCAIR']>0){$status='SP2D Sudah Cair';
                       }else {$status='SP2D Tidak Langkap';
                     }
                 ?>
                 <div class="col-sm-4 mb-4">
                   <div class="position-relative p-3 
                   <?php if($data['NOSP2D'] == NULL){ echo 'bg-danger'; } else {echo 'bg-success';}?> ">
                     <div class="ribbon-wrapper">
                       <div class="ribbon bg-primary"></div>
                     </div>
                       <p>OPD: <small><?=$data['OPD']?></small></p>
                       <p>SPP: <small><?=$data['NOSPP']?></small></p>
                       <p>SPM: <small><?=$data['NOSPM']?></small></p>
                       <p>SP2D: <small><?=$data['NOSP2D']?></small></p>
                       <p>KEPERLUAN: <small><?=$data['KEPERLUAN']?></small></p>
                       <p>Posisi: </p><h5><b><?=$status?></b></h5>
                   </div>
			          </div>
				        <?php } ?> 
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
</div>
<?php include 'page/footer.php'; ?>