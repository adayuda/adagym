<?php $this->load->view('header');?>
          <div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data Barang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Barang</li>
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
                        <!-- <strong class="card-title">Data Barang</strong> -->
                            <!-- <a href="<?php echo base_url('barang/input') ?>" class="btn btn-success">Add New</a> -->
                            <button id = "btnAdd" class="btn btn-primary" style="margin-left:15px; margin-top:10px;">Add New</button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th style="width:50px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="showdata"></tbody>

                        <tfoot>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th style="width:50px;">Action</th>
                        </tr>
                        </tfoot>
                    </table>
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
                            <label for="exampleInputEmail1" class="label-control col-md-4">Kode barang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtKode" placeholder="Masukan Kode Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="label-control col-md-4">Nama barang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtNama" placeholder="Masukan Nama Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Harga</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtHarga" placeholder="Masukan Harga Barang"></input>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="name" class="label-control col-md-4">Stok</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="txtStok" placeholder="Masukan Stok Barang"></input>
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
                            <label for="name" class="label-control col-md-4">Harga</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtHarga"></input>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="name" class="label-control col-md-4">Stok</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtStok"></input>
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
            $('#addModal').find('.modal-title').text('Add New Barang');
            $('#addForm').attr('action', '<?php echo base_url('barang/addBarang'); ?>');
            
            });
        showAllBarang();

        //Add New
        $('#btnSaveAdd').click(function(){
            // var url = $('#addForm'.attr('action'));
            // var data = $('#addForm'.serialize());
            var kode = $('#txtKode').val();
            var nama_barang = $('#txtNama').val();
            var harga = $('#txtHarga').val();
            var stok = $('#txtStok').val();
                $.ajax({
                type: 'POST',
                //method: 'POST',
                url: '<?php echo base_url() ?>barang/addBarang',
                data:  {kode        : kode, 
                        nama_barang : nama_barang,
                        harga       : harga,
                        stok        : stok
                        },
                success: function(data){
                    // var a = JSON.parse(data);
                    $('input[name=txtId]').val("");
                    $('input[name=txtNama]').val("");
                    $('input[name=txtHarga]').val("");
                    $('input[name=txtStok]').val("");
                    $('#addModal').modal('hide');
                    
                    window.location = "<?=site_url('barang') ?>";
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
            var nama_barang = $('input[name=txtNama]');
            var harga = $('input[name=txtHarga]');
            var stok = $('input[name=txtStok]');
            var result = '';
            if(nama_barang.val()==''){
                nama_barang.parent().parent().addClass('has-error');
            }else{
                nama_barang.parent().parent().removeClass('has-error');
                result +='1';
            }
            if(harga.val()==''){
                harga.parent().parent().addClass('has-error');
            }else{
                harga.parent().parent().removeClass('has-error');
                result +='2';
            }
            if(stok.val()==''){
                stok.parent().parent().addClass('has-error');
            }else{
                stok.parent().parent().removeClass('has-error');
                result +='3';
            }

            // if(result=='12'){
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: {
                        id : $('input[name=txtId]').val(),
                        harga : $('input[name=txtHarga]').val(),
                        stok : $('input[name=txtStok]').val()
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
                            $('.alert-success').html('Barang '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllBarang();
                            console.log(response.data);
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
            var kd_barang = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Barang');
            $('#myForm').attr('action', '<?php echo base_url() ?>barang/qupdateBarang');
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>barang/editBarang',
                data: {kd_barang: kd_barang},
                async: false,
                success: function(data){
                    var a = JSON.parse(data);

                    $('input[name=txtHarga]').val(a[0].harga);
                    $('input[name=txtStok]').val(a[0].stok);
                    $('input[name=txtId]').val(a[0].kd_barang);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        //delete- 
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
        function showAllBarang(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('Barang/showAllBarang'); ?>',
                success: function(data){
                    var a = JSON.parse(data);

                    var html = '';
                    var i;
                    for(i=0; i<a.length; i++){
                    
                        html +='<tr>'+
                                    // '<td>'+data[i].id+'</td>'+
                                    '<td>'+a[i].nama_barang+'</td>'+
                                    '<td>'+a[i].harga+'</td>'+
                                    '<td>'+a[i].stok+'</td>'+
                                    
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+a[i].kd_barang+'">Edit</a>'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete" data-target="#deleteModal"  data="'+a[i].kd_barang+'">Delete</a>'+
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

<?php $this->load->view('footer'); ?>
