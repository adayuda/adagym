<?php $this->load->view('header_in');?>

<div class="breadcrumbs" style="margin-top:5px">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
            <h1>Data Iuran</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right"> 
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Data Iuran </li>
                    <li class="active">Laporan Iuran</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <div class="card-body">                           
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                  		<tr>
                                  		<th rowspan="2">No</th>
                                  		<th rowspan="2">Nama</th>
                                        <th rowspan="2">Package</th> 
                                        <th rowspan="2">Harga</th>
                                        <th rowspan="2">Tgl Aktif</th>
                                        <th rowspan="2">Tgl Akhir</th>
                                    </thead>
                                    <?php
                                        $no = 1;
                                        foreach ($iuran as $i){
                                        echo "<tr>

                                          <td>".$no."</td>
                                          <td>".$i->nama."</td>
                                          <td>".$i->nama_paket."</td>
                                          <td>".$i->harga."</td>
                                          <td>".$i->tgl_bayar."</td>
                                          <td>".$i->tgl_akhir."</td>
                                          "; 
                                          $no++;
                                        }
                                       
                                    ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('footer'); ?>