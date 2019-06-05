
<?php $this->load->view('header'); ?>
 
   <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12"> 
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Package</strong>
                                <a href="<?php echo base_url('paket/input') ?>" class="btn btn-success">Add New</a>        
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $no=1;
                                        foreach ($paket as $p) {
                                            # code...
                                            echo "<tr>
                                                    <td>".$no."</td>
                                                    <td>".$p->nama."</td>
                                                    <td>".$p->harga."</td>
                                                    <td>".anchor('paket/edit/'.$p->kd_paket,'<i class="fa fa-pencil"></i>')."       ".anchor('paket/delete/'.$p->kd_paket,'<i class="fa fa-trash-o"></i>')."</td>   
                                                  </tr>
                                            ";
                                            $no++;
                                            // anchor('paket/edit','<a class="btn btn-info item-edit" >edit</a>', array('kd_paket' => $kd_paket))
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

 <?php $this->load->view('footer');?>