




            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php if($this->session->userdata('akses')=='1'):?>
                    <li>
                        <a href="<?php echo base_url('page')?>"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>

                    <li><a href="<?php echo base_url('page/data_gym')?>"><i class="menu-icon fa fa-laptop"></i>Data Gym</a></li>
                    


                  <?php elseif($this->session->userdata('akses')=='2'):?>
                    <li>
                        <a href="<?php echo base_url('page')?>"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>

                    <h3 class="menu-title">Membership GYM</h3><!-- /.menu-title -->
                    

                    <li>
                        <a href="<?php echo base_url('page/data_iuran')?>"><i class="menu-icon fa fa-laptop"></i>Data Iuran</a>
                    </li>

                    
                    <li>
                        <a href="<?php echo base_url('page/data_member')?>"><i class="menu-icon fa fa-table"></i>Data member</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('page/data_paket')?>"><i class="menu-icon fa fa-table"></i>Data Package</a>
                    </li>

                    <h3 class="menu-title">Penjualan GYM</h3> <!-- /.menu-title-->

                     <li>
                        <a href="<?php echo base_url('page/data_penjualan')?>"><i class="menu-icon fa fa-laptop"></i>Data Penjualan</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('page/data_barang')?>"><i class="menu-icon fa fa-table"></i>Data Barang</a>
                    </li>

                     <li>
                        <a href="<?php echo base_url('penjualan/detail_transaksi')?>"><i class="menu-icon fa fa-table"></i>Data Transaksi</a>
                    </li>
                    
                    <h3 class="menu-title">Laporan</h3> <!-- /.menu-title-->

                    <li>
                        <a href="<?php echo base_url('penjualan/detail_transaksi')?>"><i class="menu-icon fa fa-table"></i> Laporan Iuran</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('penjualan/detail_transaksi')?>"><i class="menu-icon fa fa-table"></i>Laporan Penjualan</a>
                    </li>

                  <?php elseif($this->session->userdata('akses')=='3'):?>
                    <li class="treeview"><a href="<?php echo base_url('page')?>"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="treeview"><a href="<?php echo base_url('page/iuran_member')?>"><i class="menu-icon fa fa-table"></i>Data Iuran</a></li>
                    

                  <?php else:?>
                    <li class="treeview"><a href="<?php echo base_url('page')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="treeview"><a href="<?php echo base_url('login/logout')?>"><i class="fa fa-table"></i>logout</a></li>

                  <?php endif;?>
                </ul>
            </div><!-- /.navbar-collapse -->
            
            
           