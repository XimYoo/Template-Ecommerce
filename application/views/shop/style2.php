<!-- Body Container -->
<div id="page-content"> 
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>Compare Style2</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url('index.html'); ?>" title="Back to the home page">Home</a>
                        <span class="main-title"><i class="icon anm anm-angle-right-l"></i>Compare Style2</span>
                    </div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">   
        <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
            There are <span class="text-primary fw-600">4</span> products in this Compare list
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!--Compare-->
        <div class="table-wrapper mt-4 compare-table table-responsive">
            <form action="#" method="post">
                <table class="table table-borderless align-middle">
                    <tbody>
                        <tr>
                            <th class="name">Products</th>
                            <td class="item-row">
                                <div class="product-image position-relative">
                                    <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon anm anm-times-r"></i></button>
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <img class="image rounded-0 blur-up lazyload" data-src="<?php echo base_url('assets/images/products/product1.jpg'); ?>" src="<?php echo base_url('assets/images/products/product1.jpg'); ?>" alt="Product" title="Product" width="625" height="808" />
                                    <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal"><i class="icon anm anm-search-plus-l"></i></button>
                                </div>
                                <div class="product-name mt-3"><a href="<?php echo base_url('product-layout1.html'); ?>">Oxford Cuban Shirt</a></div>
                                <div class="product-price fw-500"><span class="old-price">$110.00</span><span class="price">$99.00</span></div>
                                <div class="product-action mt-2 pt-1">
                                    <a href="<?php echo base_url('cart-style1.html'); ?>" class="add-to-cart btn-md btn mb-2">Add to Cart</a>
                                </div>
                            </td>
                            <td class="item-row">
                                <div class="product-image position-relative">
                                    <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon anm anm-times-r"></i></button>
                                    <div class="product-labels"><span class="lbl pr-label3">Trending</span></div>
                                    <img class="image rounded-0 blur-up lazyload" data-src="<?php echo base_url('assets/images/products/product2.jpg'); ?>" src="<?php echo base_url('assets/images/products/product2.jpg'); ?>" alt="Product" title="Product" width="625" height="808" />
                                    <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal"><i class="icon anm anm-search-plus-l"></i></button>
                                </div>
                                <div class="product-name mt-3"><a href="<?php echo base_url('product-layout1.html'); ?>">Cuff Beanie Cap</a></div>
                                <div class="product-price fw-500"><span class="price">$168.00</span></div>
                                <div class="product-action mt-2 pt-1">
                                    <a href="<?php echo base_url('cart-style1.html'); ?>" class="add-to-cart btn-md btn mb-2">Add to Cart</a>
                                </div>
                            </td>
                            <td class="item-row">
                                <div class="product-image position-relative">
                                    <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon anm anm-times-r"></i></button>
                                    <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                    <img class="image rounded-0 blur-up lazyload" data-src="<?php echo base_url('assets/images/products/product3.jpg'); ?>" src="<?php echo base_url('assets/images/products/product3.jpg'); ?>" alt="Product" title="Product" width="625" height="808" />
                                    <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal"><i class="icon anm anm-search-plus-l"></i></button>
                                </div>
                                <div class="product-name mt-3"><a href="<?php echo base_url('product-layout1.html'); ?>">Flannel Collar Shirt</a></div>
                                <div class="product-price fw-500"><span class="price">$184.00</span></div>
                                <div class="product-action mt-2 pt-1">
                                    <a href="<?php echo base_url('product-layout1.html'); ?>" class="add-to-cart btn-md btn soldOutBtn">Out Of stock</a>
                                </div>
                            </td>
                            <td class="item-row">
                                <div class="product-image position-relative">
                                    <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon anm anm-times-r"></i></button>
                                    <div class="product-labels"><span class="lbl pr-label1">Best seller</span></div>
                                    <img class="image rounded-0 blur-up lazyload" data-src="<?php echo base_url('assets/images/products/product4.jpg'); ?>" src="<?php echo base_url('assets/images/products/product4.jpg'); ?>" alt="Product" title="Product" width="625" height="808" />
                                    <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal"><i class="icon anm anm-search-plus-l"></i></button>
                                </div>
                                <div class="product-name mt-3"><a href="<?php echo base_url('product-layout1.html'); ?>">Cotton Hooded Hoodie</a></div>
                                <div class="product-price fw-500"><span class="price">$126.00</span></div>
                                <div class="product-action mt-2 pt-1">
                                    <a href="<?php echo base_url('cart-style1.html'); ?>" class="add-to-cart btn-md btn mb-2">Add to Cart</a>
                                </div>
                            </td>
                        </tr>
                        <!-- Add additional rows as needed -->
                    </tbody>
                </table>
            </form>  
        </div> 
        <!--End Compare--> 
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->
