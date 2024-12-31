<?php include('header-page.php'); ?>

        <!-- Sidebar -->
         <?php include('sidebar.php'); ?>
        <!-- End of Sidebar -->

                <!-- Topbar -->
                <?php include('topbar.php'); ?>

                <?php

                    $productID = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['product']);
                
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

                    $result = $databases->getDocument('665b5930002cd0d6258b', '665f4dca0032a163db47', $productID);


                    //print_r($result);
                
                ?>

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Product</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Item</h6>
                                </div>
                                <div class="card-body">
                                    <!---product information container---->
                                    <div class="product-info-container">
                                        <div class="product-info-img">
                                            <img src="<?php echo $result['coverImage'] ?>" />
                                        </div>
                                        <div class="product-info-details">
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        Product Name
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-bottom:15px">
                                                        <?php 
                                                            echo $result['productName'];
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Price
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-bottom:15px"><?php echo '₦'.number_format($result['productPrice']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Availability
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td><?php echo ($result['inStock'])? '<span class="availability text-success">In Stock</span>' : '<span class="availability text-danger">Out Of Stock</span>' ?></td>
                                                    
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!---product information container---->
                                </div>
                            </div>
                            <!--- Items ---->

                            <!---- Customers ------>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Customers</h6>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $orders = get_all_orders($databases, $result['$id']);
                                    
                                        print_r($orders);
                                    
                                    ?>
                                </div>
                            </div>
                            <!--- Customers ---->

                            <!---- Other Images ------>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Other Images</h6>
                                </div>
                                <div class="card-body">
                                    
                                        
                                </div>
                            </div>
                            <!--- Other Images ---->


                        </div>

                        <!-- Summary -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Status</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table width="100%">
                                        <tr>
                                            <td style="padding:15px 0" width="100px">Order ID:</td>
                                            <td style="padding:15px 0"><?php //echo $orderID; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Date:</td>
                                            <td style="padding:15px 0"><?php //echo date('d M Y', strtotime($result['$createdAt'])); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0">Total</td>
                                            <td style="padding:15px 0"><span class="text-danger"><?php //echo '₦'.number_format((float)$result['fairAppPrice'], 2, '.', ','); ?></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <!---- Shipping address ---->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Vendor</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                </div>
                            </div>
                            <!---- Shipping address ----->

                            <!---- Customer ---->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Stats</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                </div>
                            </div>
                            <!---- Customer ----->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<?php include('footer-page.php'); ?>