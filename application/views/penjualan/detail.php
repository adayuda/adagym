<?php $this->load->view('header');?>
<div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data Penjualan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right"> 
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Penjualan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
    $('document').ready(function() {
        $('#btnDetail').on('click', function() {
            $('#myModal').on('show.bs.modal', function (e) {
                var modal   = $(this);
                var getId   = $(e.relatedTarget).data('id');

                $.ajax({
                    type    : 'post',
                    url     : '<?php echo site_url();?>/penjualan/sub_detail_transaksi',
                    data    : {
                        post_no_trx : getId
                    },
                    success : function(data) {
                        modal.find('.modal-title').text('Detail Transaksi');
                        modal.find('.modal-body').html(data);
                    }
                });
            })
        });
    });
</script>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <strong class="card-title">Detail Data Transaksi</strong>    -->
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>

                                <tr>
                                    <td>No</td>
                                    <td>Tanggal Transaksi</td>
                                    <!-- <td>Total Transaksi</td> -->
                                    <td>Detail</td>
                                </tr>
                            </thead>

                            <?php
                            $no = 1;
                            foreach ($transaksi as $g) {
                                $oDate = new DateTime($g->tanggal);
                                $sDate = $oDate->format("j-M-Y");
                                echo "<tr>
                                        <td>". $no++ ."</td>
                                        <td>". $sDate ."</td>
                                        <td><a href='' data-id='". $g->no_trx ."' class='btn btn-info btn-lg' id='btnDetail' data-toggle='modal' data-target='#myModal'>Detail</a></td>
                                    </tr>
                                ";
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