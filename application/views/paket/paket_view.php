<?php $this->load->view('header');?>

        <div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data Package</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right"> 
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Package</li>
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
                                        
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Lama</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showdata"></tbody>
                                    <tfoot>
                                        <tr>
                                        
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Lama</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

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
                            <label for="exampleInputEmail1" class="label-control col-md-4">Nama Pakage </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtNama" placeholder="Masukan Nama Package">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="label-control col-md-4">Harga Package</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtHarga" placeholder="Masukan Harga Package">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Lama Package</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtLama" placeholder="Masukan Lama Package"></input>
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
    </div>

        <div id="myModal" class="modal fade"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    <form id="myForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Nama</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtNama"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Harga</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtHarga"></input>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="name" class="label-control col-md-4">Lama</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtLama"></input>
                            </div>
                        </div>
                    </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id = "btnSave" class="btn btn-primary">Save</button>
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
                Do you want to delete this record?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<script>
$(function(){
    $('#btnAdd').click(function(){
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Package');
            $('#addForm').attr('action', '<?php echo base_url('paket/addPaket'); ?>');
            
            });
    showAllPaket();

    $('#btnSaveAdd').click(function(){
        var nama   = $('#txtNama').val();
        var harga  = $('#txtHarga').val();
        var lama   = $('#txtLama').val();
            $.ajax({
                type : 'POST',
                url  : '<?php echo base_url()?>paket/addPaket',
                data : {nama : nama,
                        harga : harga,
                        lama : lama
                },
                success: function(data){
                    $('input[name=txtNama]').val("");
                    $('input[name=txtHarga]').val("");
                    $('input[name=txtLama]').val("");
                    $('#addModal').modal('hide');

                    window.location ="<?= site_url('paket')?>";
                },
                error: function(data){
                     alert(data);
                } 
            });
    });
    
    $('#btnSave').click(function(){
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            //validate form
            var nama_paket = $('input[name=txtNama]');
            var harga = $('input[name=txtHarga]');
            var lama = $('input[name=txtLama]');
            var result = '';
            if(nama_paket.val()==''){
                nama_paket.parent().parent().addClass('has-error');
            }else{
                nama_paket.parent().parent().removeClass('has-error');
                result +='1';
            }
            if(harga.val()==''){
                harga.parent().parent().addClass('has-error');
            }else{
                harga.parent().parent().removeClass('has-error');
                result +='2';
            }
            if(lama.val()==''){
                lama.parent().parent().addClass('has-error');
            }else{
                lama.parent().parent().removeClass('has-error');
                result +='3';
            }

            // if(result=='12'){
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: {
                        id : $('input[name=txtId]').val(),
                        nama_paket : $('input[name=txtNama]').val(),
                        harga : $('input[name=txtHarga]').val(),
                        lama : $('input[name=txtLama]').val()
                    },
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(!response.error){
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if(response.type=='add'){
                                var type = 'added'
                            }else if(response.type=='update'){
                                var type ="updated"
                            }
                            // $('.alert-success').html('Package '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                            // showAllBarang();
                            // console.log(response.data);
                            window.location ="<?= site_url('paket')?>";

                        }else{
                            alert('Error:'+response.message);
                        }
                    },
                    error: function(error){
                        alert('Could not add data');
                        console.log(error);
                    }
                });
            // }
        });

        //edit
        $('#showdata').on('click', '.item-edit', function(){
            // console.log('as');
            var kd_paket = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Paket');
            $('#myForm').attr('action', '<?php echo base_url() ?>paket/updatePaket');
            $.ajax({
                type: 'ajax',
                // dataType: 'json',
                method: 'post',
                url: '<?php echo base_url() ?>paket/editPaket',
                data: {kd_paket: kd_paket},
                
                success: function(data){
                    var a = JSON.parse(data);
                    $('input[name=txtNama]').val(a[0].nama_paket);
                    $('input[name=txtHarga]').val(a[0].harga);
                    $('input[name=txtLama]').val(a[0].lama);
                    $('input[name=txtId]').val(a[0].kd_paket);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        //delete- 
        $('#showdata').on('click', '.item-delete', function(){
            var kd_paket = $(this).attr('data');
            $('#deleteModal').modal('show');
           //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo base_url() ?>paket/deletePaket',
                    data:{kd_paket:kd_paket}, 
                    dataType: 'json',
                    success: function(response){
                        if(!response.error){
                            alert(response.message);
                            $('#deleteModal').modal('hide');
                            // $('.alert-success').html('Barang Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            // showAllBarang();
                            window.location ="<?= site_url('paket')?>";
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
    function showAllPaket(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('Paket/showAllPaket'); ?>',
            success: function(data){
                var a = JSON.parse(data);

                var html = '';
                var i;
                for(i=0; i<a.length; i++){
                
                    html +='<tr>'+
                                // '<td>'+data[i].id+'</td>'+
                                '<td>'+a[i].nama_paket+'</td>'+
                                '<td>'+a[i].harga+'</td>'+
                                '<td>'+a[i].lama+'</td>'+
                                
                                '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+a[i].kd_paket+'">Edit</a>'+
                                    '<a href="javascript:;" class="btn btn-danger item-delete" data-target="#deleteModal"  data="'+a[i].kd_paket+'">Delete</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#showdata').html(html);
            },
            error: function(){
                alert('Could not get Data from Database');
            }
        });
    }
});
</script>
 <?php $this->load->view('footer');?>