<?php $this->load->view('header');?>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->

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
                            <li class="active">Data kontol</li>
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
											<th width="30px">Bukti Transfer</th>
											<th width="30px">Act</th>
											
										</tr>
									</thead>

									<?php
									
									// foreach ($bayar as $m) {
									// 	# code...
									// 	echo "<tr>
									// 			<td>".$m->kd_daftar."</td>
									// 			<td>".$m->nama."</td>
									// 			<td>".$m->nama_rek."</td>
									// 			<td>".$m->nama_bank."</td>
                                    //             <td>".$m->total_bayar."</td>
                                    //             <td><img src=".base_url('../adagym.com/assets/gambar/'.$m->bukti_bayar)."></td>
									// 			<td>".anchor('buktibayar/acc/'.$m->kd_daftar,'<a class="btn btn-info item-edit">Acc</a>')."</td>   
												
												
									// 		  </tr>
								    //     ";
									// } 
									// ?>
                                   <tbody id="showdata"></tbody>

                                    
									<tfoot>
										<tr>
                                        <th>No Daftar</th> 
											<th>Nama Member</th>
											<th>Nama Rekening</th>
                                            <th>Bank</th>
											<th>Total Bayar</th>
											<th width="30px">Bukti Transfer</th>
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


<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
            Do you want to accept this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-success">Accept</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
 $(function(){
 	$('#showdata').on('click', '.item-edit', function(){
            var kd_daftar = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo base_url() ?>Buktibayar/acc',
                    data:{kd_daftar:kd_daftar}, 
                    dataType: 'json',
                    success: function(response){
                        if(!response.error){
                            $('#deleteModal').modal('hide');
                           
                            if(response.type=='add'){
                                var type = 'added'
                            }else if(response.type=='update'){
                                var type ="updated"
                            }
                            //$('.alert-success').html('Profil Gym'+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                            //showAllBarang();
                            setTimeout(function(){
                                window.location = "Buktibayar";},2000);
                                swal("Accept Bukti Bayar successfully","You clicked the button!","success");
                               
                            console.log(response.data);
                        }else{
                            alert('Error:'+response.message);
                            swal("Accept Bukti Bayar successfully","You clicked the button!","error");

                        }
                    },
                    error: function(){
                        alert('Error deleting\n'+response.message);
                    }
                });
            });
        });

$('#showdata').on('click', '.item-delete', function(){
            var kd_barang = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo base_url() ?>barang/deleteBarang',
                    data:{kd_barang:kd_barang}, 
                    dataType: 'json',
                    success: function(response){
                        if(!response.error){
                            alert(response.message);
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Barang Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllBarang();
                        }else{
                            alert('Error:'+response.message);
                        }
                    },
                    error: function(){
                        alert('Error deleting\n'+response.message);
                    }
                });
            });
        });

        //function
        $(function showAllBukbar(){
			console.log('kontoloanjasdas');
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('Buktibayar/showAllBukbar'); ?>',
                success: function(data){
                    var a = JSON.parse(data);

                    var html = '';
                    var i;
                    for(i=0; i<a.length; i++){
                    
                        html +='<tr>'+ 
                                    // '<td>'+data[i].id+'</td>'+
                                    '<td>'+a[i].kd_daftar+'</td>'+
                                    '<td>'+a[i].nama+'</td>'+
                                    '<td>'+a[i].nama_rek+'</td>'+
                                    '<td>'+a[i].nama_bank+'</td>'+
									'<td>'+a[i].total+'</td>'+
									'<td><img src ="assets/gambar/'+a[i].bukti_bayar+'"></td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+a[i].kd_daftar+'">Acc</a>'+
                                       
                                    '</td>'+
                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
        });
 });
</script>
<?php $this->load->view('footer'); ?>