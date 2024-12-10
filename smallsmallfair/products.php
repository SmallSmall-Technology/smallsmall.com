<?php include('header-page.php'); ?>

        <!-- Sidebar -->
         <?php include('sidebar.php'); ?>
        <!-- End of Sidebar -->

                <!-- Topbar -->
                <?php include('topbar.php'); ?>

                <?php
                
                    require 'vendor/autoload.php';
                    use Appwrite\Client;
                    use Appwrite\Query;
                    use Appwrite\Services\Databases;
                    
                    $client = new Client();
                    
                    $client
                        ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
                        ->setProject('66585770002d67cf6caa') // Your project ID
                        ->setKey('standard_4dfaaa5a5cb819e500774dfd1bdc7245668cb1df43b62b855a76d0a9ea841d154d7b304cef8fba67f645dc9be02e8e45aa1630ee31214bebc936d43b42826321e86c392a396a5cf1c3280f9e1f74a70ed5efdb61e12c8c217e0148c1cea26e30ce790d193dcd95233ab9ed9d3ef4c469773f9f8a00d6e6686a677e3ed96801a3') // Your secret API key
                    ;
                    
                    $databases = new Databases($client);
                    
                    //$result = $databases->create('665b5930002cd0d6258b', 'smallsmallfair');
                ?>

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Products</h1>
                    <!---<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>--->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Product list</h6>
                        </div>
                        <div class="card-body">
                        <?php
                            //$query = [ Query::limit(10) ];
                               
                            $products = $databases->listDocuments('665b5930002cd0d6258b', '665f4dca0032a163db47');

                            

                            //exit;
                        ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Product Name</th>
                                            <th>Vendor</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Product Name</th>
                                            <th>Vendor</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($products as $product => $value){ ?>
                                            <?php for($i = 0; $i < count($value); $i++){ ?>
                                            <tr>
                                                <td><div class="cover-image"><img src="<?php echo $value[$i]['coverImage'] ?>" width="100%" /></div></td>
                                                <td><?php echo $value[$i]['productName'] ?></td>
                                                <td>
                                                    <?php echo $value[$i]['vendor']['brandName'] ?>
                                                    <span class="sub-line-text">Vendor: <?php echo $value[$i]['vendor']['firstName'].' '.$value[$i]['vendor']['lastName'] ?></span>
                                                </td>
                                                <td><?php echo '₦'.number_format($value[$i]['productPrice']) ?></td>
                                                <td><?php echo ($value[$i]['inStock'])? '<span class="text-success">In Stock</span>' : '<span class="text-danger">Out Of Stock</span>' ?></td>
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