<!-- Sidebar -->

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?php echo base_url('admin/dashboard'); ?>">
                <img src="<?php echo base_url('assets/images/logoapp.png'); ?>" class="navbar-brand-img" alt="main_logo" style="height: 60px; width: auto;">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <!-- Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <!-- User Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/user'); ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/1999/xlink">
                                <title>customer-support</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                                <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                                <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">User</span>
                    </a>
                </li>

                <!-- Product Menu -->
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('admin/product'); ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/1999/xlink">
                                <title>product</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background opacity-6" d="M38.25,0 L3.75,0 C2.78,0 2,0.78225 2,1.75 L2,34.25 C2,35.21775 2.78,36 3.75,36 L38.25,36 C39.21775,36 40,35.21775 40,34.25 L40,1.75 C40,0.78225 39.21775,0 38.25,0 Z M12.5,27.5 L7.5,27.5 L7.5,22.5 L12.5,22.5 L12.5,27.5 Z M17.5,17.5 L7.5,17.5 L7.5,12.5 L17.5,12.5 L17.5,17.5 Z M32.5,27.5 L17.5,27.5 L17.5,22.5 L32.5,22.5 L32.5,27.5 Z M17.5,7.5 L7.5,7.5 L7.5,2.5 L17.5,2.5 L17.5,7.5 Z M32.5,7.5 L17.5,7.5 L17.5,2.5 L32.5,2.5 L32.5,7.5 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Product</span>
                    </a>
                </li>

                <!-- Pages Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/pages'); ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/1999/xlink">
                                <title>settings</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(304.000000, 151.000000)">
                                                <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                                                <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Pages</span>
                    </a>
                </li>

                <!-- Home Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home'); ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/1999/xlink">
                                <title>home</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background opacity-6" d="M42,21 L21,0 L0,21 L7.5,21 L7.5,42 L14,42 L14,28 L28,28 L28,42 L34.5,42 L34.5,21 L42,21 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Home</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- End Sidebar -->

        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-4 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-2">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- Admin page breadcrumb without link -->
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admin</li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Product</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0"></h6>
                </nav>

                <!-- Navbar Controls -->
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <ul class="navbar-nav ms-auto"> <!-- Use ms-auto to align items to the right -->
                        <!-- Search Bar -->
                        <li class="nav-item d-flex align-items-center me-3">
                            <div class="input-group">
                                <span class="input-group-text text-body">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Search here..." aria-label="Search" style="width: 200px;">
                            </div>
                        </li>

                        <!-- Admin Account -->
                        <li class="nav-item d-flex align-items-center me-3">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-2"></i>
                                <span class="d-sm-inline d-none"><?php echo $this->session->userdata('name') ? $this->session->userdata('name') : 'Admin'; ?></span>
                            </a>
                        </li>

                        <!-- Logout Button -->
                        <li class="nav-item d-flex align-items-center">
                            <a href="<?php echo base_url('logout'); ?>" class="nav-link text-body">
                                <i class="fa fa-sign-out-alt me-2"></i>
                                <span class="d-sm-inline d-none">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <!-- Tables -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0">Product Table</h6>
                <a href="<?php echo site_url('admin/create_product'); ?>" class="btn btn-primary btn-sm">
                    Create New Product
                </a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Sale End Date</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($products)): ?>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo base_url('assets/images/products/' . $product->image); ?>" class="rounded" alt="product-image" style="width: 60px; height: 60px;">
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-bold" style="font-size: 0.875rem;"><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary" style="font-size: 0.875rem;"><?php echo number_format($product->price, 2, ',', '.'); ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-success" style="font-size: 0.875rem;"><?php echo $product->discount_percentage . '%'; ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary" style="font-size: 0.875rem;"><?php echo ucfirst($product->status); ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary" style="font-size: 0.875rem;"><?php echo date('Y-m-d', strtotime($product->sale_end_date)); ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary" style="font-size: 0.875rem;"><?php echo date('Y-m-d', strtotime($product->created_at)); ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary" style="font-size: 0.875rem;"><?php echo $product->stock_quantity; ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="<?php echo site_url('admin/edit_product/' . $product->id); ?>"
                                                   class="btn btn-success btn-sm px-2 me-1"
                                                   title="Edit"
                                                   style="font-size: 0.55rem;">
                                                   Edit
                                                </a>
                                                <a href="<?php echo site_url('admin/delete_product/' . $product->id); ?>"
                                                   class="btn btn-danger btn-sm px-2"
                                                   title="Delete"
                                                   style="font-size: 0.55rem;"
                                                   onclick="return confirm('Are you sure you want to delete this product?');">
                                                   Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="9" class="text-center text-secondary" style="font-size: 0.875rem;">No products found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Tables -->



        </div>
    </main>
    <!-- Core JS Files -->
    <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/smooth-scrollbar.min.js'); ?>"></script>

    <script>
        // Initialize scrollbar if on Windows platform
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            };
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="<?php echo base_url('assets/js/soft-ui-dashboard.min.js?v=1.0.7'); ?>"></script>
</body>

</html>