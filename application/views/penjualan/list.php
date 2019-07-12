<script>
   $('document').ready(function() {
    $('#setBayar').on('keypress', function(e) {
        if(e.which == 13) {
            var kembalian = $('#setBayar').val() - $('#setTotal').val();

            $('#setKembalian').val(kembalian);

            swal.fire({
                title : "Transaksi Selesai",
                showCancelButton: true, 
                confirmButtonColor: "#1FAB45",
                confirmButtonText: "Save",
                cancelButtonText: "Cancel",
                buttonsStyling: true 
            }).then(function() {
                $.ajax({
                    type    : 'post',
                    url     : '<?php echo site_url()?>/penjualan/insert_tbl',
                    success : function() {
                        $('#listbarang').load('<?php echo site_url();?>/penjualan/list');

                        $('#kode_barang').focus();
                    }
                });
            })
        }
    });

    $('#qty_barang_new').on('keypress', function(e) {
        if (e.which == 13) {
            var newkode     = $('#rowid').val();
            var qty         = $('#qty_barang_new').val();
            var harga_barang= $('#harga_barang').val();

            $.ajax({
              type    : 'post',
              url     : '<?php echo site_url();?>/penjualan/update_cart',
              // data    : "kd_barang=" + newkode + ",qty_barang=" + qty,
              data    : {
                rowid : newkode, qty_barang : qty, harga : harga_barang
              },
              success : function(data) {
                var a = JSON.parse(data);

                $('#listbarang').load('<?php echo site_url();?>/penjualan/list');
                $('#setTotal').val(a);

                $('#kode_barang').focus();
              }
            });
            $('#listbarang').load('<?php echo site_url();?>/penjualan/list');
        }
    });
   });
</script>
<div class="box-body">
  <div class="col-lg-12 style-col pad">
        <div class="table-responsive">
          <table class="table table-bordered">
              <thead>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Qty</th>
                  <th>Sub Total</th>
              </thead>
              <?php
              $no = 0;
                foreach ($this->cart->contents() as $items) {
                    $no++;
                    echo '
                        <tr>
                            <td><input type="text" name="" value="'. $no .'" id="rowid" readonly/></td>
                            <td><input type="text" name="" value="'. $items['id'] .'" id="kd_barang" class="form-control input-bg" readonly></td>
                            <td><input type="text" name="" value="'. $items['name'] .'" class="form-control input-bg id-JL" readonly></td>
                            <td><input type="number" name="" value="'. $items['price'] .'" id="harga_barang" class="form-control input-bg" readonly></td>
                            <td><input type="number" name="" value="'. $items['qty'] .'" id="qty_barang_new" class="form-control input-bg" required></td>
                            <td><input type="number" name="" value="'. $items['sub'] .'" id="sub_total" class="form-control input-bg" readonly></td>
                        </tr>
                    ';
                }
                ?>

                <tr>
                    <td colspan="4"><p align="right">TOTAL</p></td>
                    <td colspan="2"><input type="text" name="total" id="setTotal" value="<?php echo $this->cart->total(); ?>" style="width:100%;font-size:30;" readonly></td>
                </tr>
                <tr>
                    <td colspan="4"><p align="right">Bayar</p></td>
                    <td colspan="2"><input type="text" name="total" id="setBayar" style="width:100%;font-size:30;"></td>
                </tr>
                <tr>
                    <td colspan="4"><p align="right">Kembalian</p></td>
                    <td colspan="2"><input type="text" name="total" id="setKembalian" style="width:100%;font-size:30;" readonly></td>
                </tr>
          </table>
        </div>

    </div>
</div>
