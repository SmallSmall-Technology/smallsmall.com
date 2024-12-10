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
                    <h1 class="h3 mb-2 text-gray-800">Orders - <?php echo $_SESSION['user_is_logged_in'] ?></h1>
                    <!---<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>--->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Order list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Buyer</th>
                                            <!---<th>Vendor</th>--->
                                            <th>Paid</th>
                                            <th>Outstanding</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Product</th>
                                            <th>Buyer</th>
                                            <!---<th>Vendor</th>--->
                                            <th>Paid</th>
                                            <th>Outstanding</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($orders as $order => $value){ ?>
                                            <?php for($i = 0; $i < count($value); $i++){ ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $value[$i]['productName'] ?>
                                                        <span class="sub-line-text">Vendor: <?php echo $value[$i]['vendor']['brandName'] ?></span>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            echo $value[$i]['buyerProfile']['firstName'].' '.$value[$i]['buyerProfile']['lastName'];
                                                        ?>
                                                    </td>
                                                    <!---<td>
                                                        <?php 
                                                            //echo $value[$i]['vendor']['firstName'].' '.$value[$i]['vendor']['lastName'];
                                                        ?>
                                                    </td>--->
                                                    <td><?php echo '₦'.number_format($value[$i]['totalPaid']) ?></td>
                                                    <td><?php echo '₦'.number_format($value[$i]['totalToBePaid']) ?></td>
                                                    <td><?php echo ($value[$i]['orderStatus'] == 'active')? '<span class="text-success">Active</span>' : '<span class="text-danger">Cancelled</span>' ?></td>
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