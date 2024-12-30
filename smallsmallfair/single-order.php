<?php include('header-page.php'); ?>

        <!-- Sidebar -->
         <?php include('sidebar.php'); ?>
        <!-- End of Sidebar -->

                <!-- Topbar -->
                <?php include('topbar.php'); ?>

                <?php

                    $orderID = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['orderID']);
                
                    require 'vendor/autoload.php';
                    use Appwrite\Client;
                    use Appwrite\Services\Databases;
                    
                    $client = new Client();
                    
                    $client
                        ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
                        ->setProject('66585770002d67cf6caa') // Your project ID
                        ->setKey('standard_4dfaaa5a5cb819e500774dfd1bdc7245668cb1df43b62b855a76d0a9ea841d154d7b304cef8fba67f645dc9be02e8e45aa1630ee31214bebc936d43b42826321e86c392a396a5cf1c3280f9e1f74a70ed5efdb61e12c8c217e0148c1cea26e30ce790d193dcd95233ab9ed9d3ef4c469773f9f8a00d6e6686a677e3ed96801a3') // Your secret API key
                    ;
                    
                    $databases = new Databases($client);

                    $result = $databases->getDocument('665b5930002cd0d6258b', '665f8386000d17d1367f', $orderID);


                    //print_r($result);
                
                ?>

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Order ID - <?php echo $orderID ?></h1>
                    <!---<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>--->

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Item</h6>
                                </div>
                                    <div class="card-body">
                                        <!---- table ---->
                                        <table width="100%">
                                                <thead>
                                                    <tr>
                                                        <th style="padding:15px 0">Product Name</th>
                                                        <th style="padding:15px 0">Price</th>
                                                        <th style="padding:15px 0">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <tr>
                                                        <td style="padding:15px 0">
                                                            <?php 
                                                                echo $result['productName'];
                                                            ?>
                                                        </td>
                                                        <td style="padding:15px 0">
                                                            <?php 
                                                                echo '₦'.number_format((float)$result['fairAppPrice'], 2, '.', '');
                                                            ?>
                                                        </td>
                                                        <td style="padding:15px 0">
                                                            <?php 
                                                                echo $result['quantity'];
                                                            ?>
                                                        </td>
                                                        
                                                    </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        Item: <?php echo $result['quantity']; ?>
                                    </div>
                                    <!---- table  ----->
                            </div>
                            <!--- Items ---->
                            <!---- Transactions ------>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
                                </div>
                                <div class="card-body">
                                    <table width="100%">
                                        <tr>
                                            <th style="padding:15px 0">Payment type</th>
                                            <th style="padding:15px 0">Pickup Rule</th>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Short Term</td>
                                            <td style="padding:15px 0"><?php echo $result['pickUpRuleID']; ?></td>
                                        </tr>
                                    </table>
                                    <?php $total = 0; $num = 1; ?>
                                    <?php for( $i = 0; $i < count($result['paymentScheduleAmount']); $i++ ){ 
                                        ?>
                                        <?php $total = $result['paymentScheduleAmount'][$i] + $total; ?>
                                        <hr>
                                        <table width="100%">
                                            <tr>
                                                <td width="50%"><strong>Installment <?php echo $num .':</strong> <span class="text-success">'. date('d M, Y', strtotime($result['paymentScheduleDate'][$i])) .'</span>'; ?></td>
                                                <td>
                                                    <?php echo '₦'.number_format((float)$result['paymentScheduleAmount'][$i], 2, '.', ''); ?> 
                                                    <?php

                                                        $icon = 'info-circle';
                                                        $color = 'btn-secondary';
                                                        $status = 'Pending';

                                                        if($result['totalPaid'] >= $total){
                                                            $icon = 'check';
                                                            $color = 'btn-success';
                                                            $status = 'Paid';
                                                        }

                                                        if($result['isRefundRequested']){
                                                            $icon = 'exclamation-triangle';
                                                            $color = 'btn-danger';
                                                            $status = 'Refunded';
                                                        }

                                                    ?>
                                                    <a class="btn <?php echo $color; ?> btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-<?php echo $icon; ?>"></i>
                                                        </span>
                                                        <span class="text"><?php echo $status; ?></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                        <p>&nbsp;</p>
                                        <table width="100%">
                                            <tr>
                                                <th style="padding:15px 0">Payment type</th>
                                                <th style="padding:15px 0">Payment ID</th>
                                                <th style="padding:15px 0">Payment Status</th>
                                            </tr>
                                            <tr>
                                                <td style="padding:15px 0"><span class="text-success">Fincra</span></td>
                                                <td style="padding:15px 0"><span class="text-success">uiuuuu83Uh28hde</span></td>
                                                <td style="padding:15px 0"><span class="text-success">uiuuuu83Uh28hde</span></td>
                                            </tr>
                                        </table>
                                        <?php $num++; ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <!--- Transactions ---->

                            <!---- Balance ------>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Balance</h6>
                                </div>
                                <div class="card-body">
                                    
                                    <table width="100%" cellspacing="10px">
                                        <tr>
                                            <td style="padding:15px 0">Order Total</td>
                                            <td style="padding:15px 0" width="150px"><?php echo '₦'.number_format((float)$result['totalToBePaid'], 2, '.', ',') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Paid by customer</td>
                                            <td style="padding:15px 0" width="150px"><?php echo '₦'.number_format((float)$result['totalPaid'], 2, '.', ',') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Refunded</td>
                                            <td style="padding:15px 0" width="150px"><?php echo '₦'.number_format((float)$result['refundedAmount'], 2, '.', ',') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Balance</td>
                                            <td style="padding:15px 0" width="150px">
                                                <?php $balance = $result['totalToBePaid'] - $result['totalPaid']; ?>
                                                <?php echo '₦'.number_format((float)$balance, 2, '.', ',') ?>
                                            </td>
                                        </tr>
                                    </table>
                                        
                                </div>
                            </div>
                            <!--- Balance ---->


                        </div>

                        <!-- Summary -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Summary</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table width="100%">
                                        <tr>
                                            <td style="padding:15px 0" width="100px">Order ID:</td>
                                            <td style="padding:15px 0"><?php echo $orderID; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Date:</td>
                                            <td style="padding:15px 0"><?php echo date('d M Y', strtotime($result['$createdAt'])); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Total</td>
                                            <td style="padding:15px 0"><span class="text-danger"><?php echo '₦'.number_format((float)$result['fairAppPrice'], 2, '.', ','); ?></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <!---- Shipping address ---->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Shipping Address</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php echo $result['shippingFullAddress']; ?>
                                </div>
                            </div>
                            <!---- Shipping address ----->

                            <!---- Customer ---->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table width="100%">
                                        <tr>
                                            <td style="padding:15px 0" width="150px">Customer Name</td>
                                            <td style="padding:15px 0"><?php echo $result['buyerProfile']['firstName'].' '.$result['buyerProfile']['lastName']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Email</td>
                                            <td style="padding:15px 0"><?php echo $result['buyerProfile']['email']; ?></td>
                                        </tr>
                                        <tr> 
                                            <td style="padding:15px 0">Phone</td>
                                            <td style="padding:15px 0"><?php echo $result['buyerProfile']['phoneNumber']; ?></td>
                                        </tr>
                                        <tr> 
                                            <td style="padding:15px 0">Registered On</td>
                                            <td style="padding:15px 0"><?php echo date('d M Y', strtotime($result['buyerProfile']['$createdAt'])); ?></td>
                                        </tr>
                                        
                                    </table>
                                    <hr>
                                        Number of orders: <span class="text-success"><?php echo count($result) ?></span>
                                </div>
                            </div>
                            <!---- Customer ----->

                            
                            <!---- Customer ---->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Delivery Status</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
  
                                <!-- The Timeline -->
                                
                                <ul class="timeline">
                                    
                                    <!-- Item 1 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="flag-wrapper">
                                                <span class="flag <?php echo ($result['deliveryStatus'] == 'Processing' || $result['deliveryStatus'] == 'Awaiting' || $result['deliveryStatus'] == 'Out for Delivery' || $result['deliveryStatus'] == 'Complete' || $result['deliveryStatus'] == 'In transit')? 'active': ''; ?>">Processing</span>
                                                <span class="time-wrapper"><span class="time"><?php echo date('d.m.y', strtotime($result['$createdAt']))  ?></span></span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Item 2 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="flag-wrapper">
                                                <span class="flag <?php echo ($result['deliveryStatus'] == 'Awaiting' || $result['deliveryStatus'] == 'Out for Delivery' || $result['deliveryStatus'] == 'Complete' || $result['deliveryStatus'] == 'In transit')? 'active': ''; ?>">Packaged</span>
                                                <span class="time-wrapper"><span class="time"><?php echo ($result['deliveryStatus'] == 'Awaiting')? date('d.m.y', strtotime($result['$updatedAt'])) : ''; ?></span></span>
                                            </div>
                                        </div>
                                    </li>
                                
                                    <!-- Item 3 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="flag-wrapper">
                                                <span class="flag <?php echo ($result['deliveryStatus'] == 'Out for Delivery' || $result['deliveryStatus'] == 'Complete' || $result['deliveryStatus'] == 'In transit')? 'active': ''; ?>">Picked Up</span>
                                                <span class="time-wrapper"><span class="time"><?php echo ($result['deliveryStatus'] == 'Out for Delivery')? date('d.m.y', strtotime($result['$updatedAt'])) : ''; ?></span></span>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="direction-r">
                                            <div class="flag-wrapper">
                                                <span class="flag <?php echo ($result['deliveryStatus'] == 'Complete')? 'active': ''; ?>">Delivered</span>
                                                <span class="time-wrapper"><span class="time"><?php echo ($result['deliveryStatus'] == 'Complete')? date('d.m.y', strtotime($result['$updatedAt'])) : ''; ?></span></span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
  
                                </div>
                            </div>
                            <!---- Customer ----->

                        </div>
                    </div>


                    <!-- 

                        <div class="col-xl-8 col-lg-7">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the area chart can be found in the
                                    <code>/js/demo/chart-area-demo.js</code> file.
                                </div>
                            </div>

                        </div> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<?php include('footer-page.php'); ?>