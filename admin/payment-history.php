<?php include('header.php');?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>idgets eCommerce</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Widgets</li>
                            <li class="breadcrumb-item active">Widgets eCommerce</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card product_item_list product-order-list">
                        <div class="header">
                            <h2>Product Order List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th data-breakpoints="sm xs">Order ID</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th data-breakpoints="xs">Amount</th>
                                            <th>Date</th>
                                            <th data-breakpoints="xs md">Status</th>
                                            <th data-breakpoints="sm xs md">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Smith</td>
                                            <td>#291989</td>
                                            <td><img src="../assets/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                            <td><h5>Simple Black Clock</h5></td>
                                            <td>$16.00</td>
                                            <td>01-05-2018</td>
                                            <td><span class="badge badge-success bg-success text-white">Paid</span></td>
                                            <td>
                                                <a href="order-view.php" class="btn btn-outline-secondary"><i class="icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hossein Shams</td>
                                            <td>#291990</td>
                                            <td><img src="../assets/images/ecommerce/10.png" width="48" alt="Product img"></td>
                                            <td><h5>Brone Candle</h5></td>
                                            <td>$15.00</td>
                                            <td>7-05-2018</td>
                                            <td><span class="badge badge-danger bg-danger text-white">Failed</span></td>
                                            <td>
                                                <a href="order-view.php" class="btn btn-outline-secondary"><i class="icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maryam Amiri</td>
                                            <td>#291991</td>
                                            <td><img src="../assets/images/ecommerce/11.png" width="48" alt="Product img"></td>
                                            <td><h5>Wood Simple Clock</h5></td>
                                            <td>$16.00</td>
                                            <td>09-05-2018</td>
                                            <td><span class="badge badge-success bg-success text-white">Paid</span></td>
                                            <td>
                                                <a href="order-view.php" class="btn btn-outline-secondary"><i class="icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tim Hank</td>
                                            <td>#291992</td>
                                            <td><img src="../assets/images/ecommerce/5.png" width="48" alt="Product img"></td>
                                            <td><h5>Unero Small Bag</h5></td>
                                            <td>$23.00</td>
                                            <td>14-05-2018</td>
                                            <td><span class="badge badge-warning bg-warning text-white">Pending</span></td>
                                            <td>
                                                <a href="order-view.php" class="btn btn-outline-secondary"><i class="icon-eye"></i></a>
                                            </td>
                                        </tr>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                    
                </div>                
            </div>

        </div>
    </div>
    
</div>

<?php include('js.php');?>
</body>
</html>
