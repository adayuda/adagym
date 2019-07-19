<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>         
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No Transaksi</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody> 
        <?php
            foreach($subtransaksi as $a) {
                echo 
                "<tr>
                    <td>". $a->no_trx ."</td>
                    <td>". $a->nama_barang ."</td>
                    <td>". $a->jumlah ."</td>
                    <td>". $a->harga ."</td>
                    <td>". $a->Total ."</td>
                </tr>";
            }
        ?>
            <tr>
                <th colspan="4">Grand Total</th>
                
                <?php
                    foreach ($sendgrandtotal as $a) {
                        echo "
                            <td>". $a->GrandTotal ."</td>
                        ";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>