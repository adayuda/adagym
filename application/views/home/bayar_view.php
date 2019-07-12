<?php $this->load->view('header');?>

        <div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data Pembayaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right"> 
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Pembayaran</li>
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
                            <!-- <div class="card-header">
                                 <a href="<?php echo base_url('member/input') ?>" class="btn btn-success" style="margin-left:15px; margin-top:10px;">Add New</a>
                            </div> -->
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No Daftar</th> 
											<th>Nama Member</th>
											<th>Nama Rekening</th>
                                            <th>Bank</th>
											<th>Total Bayar</th>
											<th>Bukti Transfer</th>
											<th width="30px">Act</th>
											
										</tr>
									</thead>

									<?php
									
									foreach ($bayar as $m) {
										# code...
										echo "<tr>
												<td>".$m->kd_daftar."</td>
												<td>".$m->nama."</td>
												<td>".$m->nama_rek."</td>
												<td>".$m->nama_bank."</td>
                                                <td>".$m->total_bayar."</td>
                                                <td><img src=".base_url('../adagym.com/assets/gambar/'.$m->bukti_bayar)."></td>
												<td>".anchor('buktibayar/acc/'.$m->kd_daftar,'<a class="btn btn-info item-edit">Acc</a>')."</td>   
												
												
											  </tr>
								        ";
									}
									?>
									<tfoot>
										<tr>
                                        <th>No Daftar</th> 
											<th>Nama Member</th>
											<th>Nama Rekening</th>
                                            <th>Bank</th>
											<th>Total Bayar</th>
											<th>Bukti Transfer</th>
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