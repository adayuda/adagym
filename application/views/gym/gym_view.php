<?php $this->load->view('header');?>
<div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data GYM</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right"> 
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            <li class="active">Data GYM</li>
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
                            <button id = "btnAdd" class="btn btn-primary" style="margin-left:15px; margin-top:10px;">Add New</button>
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

        <div id="addModal" class="modal fade"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    <form id="myForm" action="" method="post" class="form-horizontal">
                        <!-- <input type="hidden" name="txtId" value="0"> -->
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="label-control col-md-4">Nama GYM</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtNama" placeholder="Masukan Nama GYM">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="label-control col-md-4">Alamat </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtAlamat" placeholder="Masukan Alamat GYM">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">No Telp</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtTelp" placeholder="Masukan No Telp GYM"></input>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="name" class="label-control col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtEmail" placeholder="Masukan Email GYM"></input>
                            </div>
                        </div>
                    </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id = "btnSaveAdd" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
</div>

<script>
    $(function(){
        $('#btnAdd').click(function(){
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Gym');
            $('#addForm').attr('action', '<?php echo base_url('gym/addGym'); ?>');
            
            });
        //Add New
        $('#btnSaveAdd').click(function(){
            // var url = $('#addForm'.attr('action'));
            // var data = $('#addForm'.serialize());
            var nama = $('#txtNama').val();
            var alamat = $('#txtAlamat').val();
            var no_telp = $('#txtTelp').val();
            var email = $('#txtEmail').val();
                $.ajax({
                type: 'ajax',
                method: 'POST',
                url: '<?php echo base_url() ?>gym/addGym',
                data:  {nama    : nama, 
                        alamat  : alamat,
                        no_telp : no_telp,
                        email   : email
                        },
                dataType : 'json',
                success: function(data){
                   // var a = JSON.parse(data);
                    $('input[name=txtNama]').val("");
                    $('input[name=txtAlamat]').val("");
                    $('input[name=txtTelp]').val("");
                    $('input[name=txtEmail]').val("");
                    $('#addModal').modal('hide');
                    
                    setTimeout(function(){
                        window.location = "gym";},2000);
                    swal("Data GYM successfully","You clicked the button!","success");
                },
                error: function(data){
                    alert(data);
                }
                });
        });
    });
</script>

 <?php $this->load->view('footer');?>       