<?php $this->load->view('header');?>

        <div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data Member</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right"> 
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Member</li>
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
                                 <a href="<?php echo base_url('member/input') ?>" class="btn btn-success" style="margin-left:15px; margin-top:10px;">Add New</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th> 
											<th>Nama</th>
											<th>Umur</th>
											<th>Jenis Kelamin</th>
											<th>No Telp</th>
											<th>Alamat </th>
											<th>Email</th>
											<th width="30px">Act</th>
											
										</tr>
									</thead>

									<?php
									$no=1;
									foreach ($member as $m) {
										# code...
										echo "<tr>
												<td>".$no."</td>
												<td>".$m->nama."</td>
												<td>".$m->umur."</td>
												<td>".$m->jk."</td>
												<td>".$m->no_telp."</td>
												<td>".$m->alamat."</td>
												<td>".$m->email."</td>
												<td>".anchor('member/delete/'.$m->kd_member,'<i class="fa fa-trash-o"></i>')."</td>   
												
												
											  </tr>
								        ";
										$no++;
									}
									?>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Umur</th>
											<th>Jenis Kelamin</th>
											<th>No Telp</th>
											<th>Alamat </th>
											<th>Email</th>
											<th width="30px">Act</th>
											
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php $this->load->view('footer'); ?>