<?php include('header-page.php'); ?>

        <!-- Sidebar -->
         <?php include('sidebar.php'); ?>
        <!-- End of Sidebar -->

                <!-- Topbar -->
                <?php include('topbar.php'); ?>

                <?php
                
                    require 'vendor/autoload.php';
                    use Appwrite\Client;
                    use Appwrite\ID;
                    use Appwrite\Query;
                    use Appwrite\Services\Databases;
                    
                    $client = new Client();
                    
                    $client
                        ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
                        ->setProject('66585770002d67cf6caa') // Your project ID
                        ->setKey('standard_4dfaaa5a5cb819e500774dfd1bdc7245668cb1df43b62b855a76d0a9ea841d154d7b304cef8fba67f645dc9be02e8e45aa1630ee31214bebc936d43b42826321e86c392a396a5cf1c3280f9e1f74a70ed5efdb61e12c8c217e0148c1cea26e30ce790d193dcd95233ab9ed9d3ef4c469773f9f8a00d6e6686a677e3ed96801a3') // Your secret API key
                    ;
                    
                    $databases = new Databases($client);

                    $orders = $databases->listDocuments('665b5930002cd0d6258b', '665f8386000d17d1367f');

                    //print_r($orders);
                    
                    //$result = $databases->create('665b5930002cd0d6258b', 'smallsmallfair');
                ?>

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Orders </h1>

                    <!-- CYop cards row -->
                    <div class="row">
                    <?php
                        $total_sales = 0;
                        $items_delivered = 0;
                        $total_refunds = 0;
                        $total_canceled = 0;
                        $total_orders = 0;
                    ?>
                    <?php 
                        foreach($orders as $order => $value){ 
                            for($i = 0; $i < count($value); $i++){ 
                                //Calculate total sales from total paid column
                                $total_sales = $total_sales + $value[$i]['totalPaid'];


                                if($value[$i]['orderStatus'] == 'delivered'){
                                    $items_delivered = $items_delivered + 1;
                                }
                                
                                if($value[$i]['orderStatus'] == 'canceled'){
                                    $total_canceled = $total_canceled + 1;
                                }

                                if($value[$i]['orderStatus'] == 'refunded'){
                                    $total_refunds = $total_refunds +1;
                                }
                                $total_orders = $total_orders + 1;
                            }
                        }
                    ?>

                        <!-- Total Sales -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Sales</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">₦<?php echo number_format((float)$total_sales, 2, '.', ','); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Orders -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Orders</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($total_orders); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cart-arrow-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Items delivered -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Items delivered
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo number_format($items_delivered) ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Refunds -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Refunds</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($total_refunds); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-recycle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total canceled -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Canceled</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($total_canceled) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-trash fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top cards row -->

                    <!-- Order list table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Order list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer Name</th>
                                            <th>Product</th>
                                            <th>Paid</th>
                                            <th>Outstanding</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer Name</th>
                                            <th>Product</th>
                                            <!---<th>Vendor</th>--->
                                            <th>Paid</th>
                                            <th>Outstanding</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($orders as $order => $value){ ?>
                                            <?php for($i = 0; $i < count($value); $i++){ ?>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                            echo $value[$i]['orderID'];
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            echo $value[$i]['buyerProfile']['firstName'].' '.$value[$i]['buyerProfile']['lastName'];
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $value[$i]['productName'] ?>
                                                        <span class="sub-line-text">Vendor: <?php echo $value[$i]['vendor']['brandName'] ?></span>
                                                    </td>
                                                    <!---<td>
                                                        <?php 
                                                            //echo $value[$i]['vendor']['firstName'].' '.$value[$i]['vendor']['lastName'];
                                                        ?>
                                                    </td>--->
                                                    <td><?php echo '₦'.number_format((float)$value[$i]['totalPaid'], 2, '.', ',') ?></td>
                                                    <td><?php echo '₦'.number_format((float)$value[$i]['totalToBePaid'], 2, '.', ',') ?></td>
                                                    <td><?php echo ($value[$i]['orderStatus'] == 'active')? '<span class="text-success">Active</span>' : '<span class="text-danger">Canceled</span>' ?></td>
                                                    <td>
                                                        <a href="single-order?orderID=<?php echo $value[$i]['orderID'] ?>">View</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                       <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<?php include('footer-page.php'); ?>