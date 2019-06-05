<?php $this->load->view('header');?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Gym</strong>
                                <a href="<?php echo base_url('gym/input') ?>" class="btn btn-success">Add New</a>    
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>

                                    	<tr>
                                    		<td>Kode Gym</td>
                                    		<td>Nama Gym</td>
                                    		<td>Alamat Gym</td>
                                    		<td>No Telp</td>
                                    		<td>Email</td>
                                            
                                    	</tr>
                                    </thead>

                                	<?php
                                	foreach ($gym as $g) {
                                		# code...
                                		echo "<tr>
                                				<td>".$g->kd_gym."</td>
                                				<td>".$g->nama."</td>
                                				<td>".$g->alamat."</td>
                                				<td>".$g->no_telp."</td>
                                				<td>".$g->email."</td>
                                				
                                			  </tr>";
                                	}
                                	?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <?php $this->load->view('footer');?>       