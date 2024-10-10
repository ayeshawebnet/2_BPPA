<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Education - BPPA</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/checkout.css">
    <link href="css/templatemo-nomad-force.css" rel="stylesheet">



</head>


<body>


    <div>
        <main>
            <?php include 'include/header.php'; ?>

            <section class="news-detail page-body section-padding">

<div class="container py-5 ">
    <div class="event-product">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h5 class="display-6 mb-2 text-center">Shopping Cart</h5>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold">3</i> items in your cart
            </p>
            <table id="shoppingCart" class="table table-condensed table-responsive-md">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Product" class="align-middle product-cell">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img width="50" height="50" src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h6 class="product-name">Product Name</h6>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price" class="align-middle price-cell">$49.00</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions align-middle" data-th="Actions">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2 remove-button">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Product" class="align-middle product-cell">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img width="50" height="50" src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h6 class="product-name">Product Name</h6>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price" class="align-middle price-cell">$49.00</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions align-middle" data-th="Actions">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2 remove-button">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Product" class="align-middle product-cell">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img width="50" height="50" src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h6 class="product-name">Product Name</h6>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price" class="align-middle price-cell">$49.00</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions align-middle" data-th="Actions">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2 remove-button">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="subtotal float-right text-right">
                <h4>Subtotal:</h4>
                <h5>$99.00</h5>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn mb-4 btn-lg pl-5 pr-5 checkout-button" style="background:#007c17; color:white">Checkout</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="catalog.html">
                <i class="fas fa-arrow-left mr-2"></i> Browse More Events
            </a>
        </div>
    </div>
</div>

</div>
</section>

            <?php include 'include/footer.php'; ?>
        </main>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>