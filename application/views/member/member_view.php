<?php $this->load->view('header');?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Package</strong>
                                 <a href="<?php echo base_url('member/input') ?>" class="btn btn-success">Add New</a>
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