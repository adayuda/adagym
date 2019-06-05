<?php $this->load->view('header');?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data iuran</strong>

                            </div>
                            <div class="card-body">
                             
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                  		<tr>
                                  		<th rowspan="2">No</th>
                                  		<th rowspan="2">Nama</th>
                                      <th rowspan="2">Tgl Aktif</th>
                                  		<th colspan="12">Bulan</th>

                                      </tr>
                                      <tr>
                                      <th scope="col">1</th>
                                      <th scope="col">2</th>
                                      <th scope="col">3</th>
                                      <th scope="col">4</th>
                                      <th scope="col">5</th>
                                      <th scope="col">6</th>
                                      <th scope="col">7</th>
                                      <th scope="col">8</th>
                                      <th scope="col">9</th>
                                      <th scope="col">10</th>
                                      <th scope="col">11</th>
                                      <th scope="col">12</th>
                                  		</tr> 
                                  		
                                  		</tr>
                                  	</thead>
                                    <?php
                                    $no=1;
                                   
                                    foreach ($iuran as $i) {
                                      $awal   = $i->awal; 
                                      $akhir  = $i->akhir;
                                      $jani   = date('m');

                                      echo "<tr>

                                          <td>".$i->kd_iuran."</td>
                                          <td>".$i->nama."</td>
                                          <td>".$i->tgl_akhir."</td>
                                          ";

                                      for ($b = 1; $b <= $awal; $b++) {
                                        if ($b == $awal) {
                                          echo "<td> <i class=\"fa fa-check\"></i> </td>";
                                        }
                                        else {
                                          echo "<td></td>";
                                        }
                                      }

                                      for ($u = 1; $u <= $akhir-$awal-1; $u++) {
                                        echo "<td><i class=\"fa fa-check\"></i></td>";
                                      }
                                       
                                     

                                      // for ($y=1; $y <= $akhir ; $y++) { 
                                        if($akhir ==$jani){
                                          echo "<td><a href=".site_url('iuran/update/'.$i->kd_iuran)."><i class=\"fa fa-exclamation\"></i></a></td>";

                                          for ($x = $akhir+2; $x <= 13; $x++) {
                                              echo "<td> </td>";
                                           }
                                        }

                                        else {
                                          for ($x = $akhir+2; $x <= 12+2; $x++) {
                                              echo "<td> </td>";
                                           }
                                        }
                                     
                                      

                                      echo "</tr>";
                                      $no++;
                                    }
                                   
                                    ?>
  <?php $this->load->view('footer'); ?>

  