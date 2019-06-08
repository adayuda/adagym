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
                             <?php
                              $year = date("Y");
                              if(isset($_GET['year'])) {
                                $year = $_GET['year'];
                              }
                             ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                  		<tr>
                                  		<th rowspan="2">No</th>
                                  		<th rowspan="2">Nama</th>
                                      <th rowspan="2">Tgl Aktif</th>
                                  		<th colspan="12">Bulan <?=$year?></th>

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
                                      // $awal   = $i->awal; 
                                      // $akhir  = $i->akhir; 
                                      $jani   = date('4');

                                      echo "<tr>

                                          <td>".$no."</td>
                                          <td>".$i['nama']."</td>
                                          <td>".$i['tgl_akhir']."</td>
                                          ";

                                      // for ($b = 1; $b <= $awal; $b++) {
                                        
                                      //   if ($b == $awal) {
                                      //     echo "<td> <i class=\"fa fa-check\"></i> </td>";
                                      //   }
                                      //   else {
                                      //     echo "<td></td>";
                                      //   }
                                      // }

                                      // for ($u = 1; $u <= $akhir-$awal-1; $u++) {
                                      //   echo "<td><i class=\"fa fa-check\"></i></td>";
                                      // }
                                       
                                      

                                      // for ($y=1; $y <= $akhir ; $y++) { 
                                        // if($akhir ==$jani){
                                        //   echo "<td><a href=".site_url('iuran/update/'.$i->kd_iuran)."><i class=\"fa fa-exclamation\"></i></a></td>";

                                        //   for ($x = $akhir+2; $x <= 13; $x++) {
                                        //       echo "<td> </td>";
                                        //    }
                                        // }

                                        // else {
                                        //   for ($x = $akhir+2; $x <= 12+2; $x++) {
                                        //       echo "<td> </td>";
                                        //    }
                                        // }
                                     
                                      $dt = 0;
                                      $start = intval($year."01");
                                      $end = intval($year."12");

                                      for($x = $start; $x <= $end; $x++){
                                        $isCheck = false;
                                        foreach($i["data"] as $data){
                                          if($x >= intval($data["tgl_bayar"]) && $x < intval($data["tgl_akhir"])){
                                            $isCheck = true;
                                            break;
                                          }
                                        }
                                        if($isCheck){
                                          echo "<td style=\"width:40px\"><i class=\"fa fa-check fa-fw\"></i></td>";
                                        }else{
                                          echo "<td style=\"width:40px\"></td>";
                                        }
                                        // $data = $i["data"][$dt];
                                        // if($x == intval($data["tgl_bayar"])){
                                        //   echo "<td style=\"width:40px\"><i class=\"fa fa-check fa-fw\"></i></td>";
                                        //   while(($x+1) < intval($data["tgl_akhir"])){
                                        //     echo "<td style=\"width:40px\"><i class=\"fa fa-check\"></i></td>";
                                        //     $x++;
                                        //   }
                                        //   if(isset($i["data"][$dt+1]))$dt++;
                                        // }else{
                                        //   echo "<td style=\"width:40px\"></td>";
                                        // }
                                      }

                                      echo "</tr>";
                                      $no++;
                                    }
                                   
                                    ?>
  <?php $this->load->view('footer'); ?>

  