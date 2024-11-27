<!DOCTYPE html>  
<html lang="en">  

<head>  
  <meta charset="utf-8" />  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logoapp.png'); ?>">  
  <title>Tugas Web</title>  

  <!-- Fonts and icons -->  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />  
  <link href="<?php echo base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />  
  <link href="<?php echo base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />  
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>  
  <link href="<?php echo base_url('assets/css/soft-ui-dashboard.css?v=1.0.7'); ?>" rel="stylesheet" />  
<!-- CDN alternatif untuk Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



  <style>  
    .form-control {  
      padding: 12px;  
    }  

    .btn {  
      padding: 10px 16px;  
      font-size: 1rem;  
    }  

    .highlight-box {  
      background-color: #f5f5f5;  
      border-radius: 15px;  
      padding: 30px;  
      box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);  
      border: 1px solid #ddd;  
      display: flex;  
      flex-direction: column;  
      justify-content: center;  
      align-items: center;  
    }  

    .page-header {  
      min-height: 100vh;  
      display: flex;  
      justify-content: center;  
      align-items: center;  
    }  

    .password-toggle-container {  
      position: relative;  
    }  

    .password-toggle {  
      cursor: pointer;  
      position: absolute;  
      right: 15px;  
      top: 50%;  
      transform: translateY(-50%);  
      font-size: 1.2rem;  
      color: #999;  
    }  

    .password-toggle.fa-eye-slash {  
      color: #333;  
    }  

    label {  
      font-size: 1.1rem;  
      font-weight: bold;  
    }  

    .error-message {  
      color: red;  
      font-size: 0.9rem;  
      margin-top: 5px;  
    }  

    @media (max-width: 768px) {  
      .highlight-box {  
        padding: 20px;  
      }  

      .mobile-form-image {  
        display: block;  
        width: 100%;  
        min-height: 100px;  
        background-image: url('<?php echo base_url("assets/img/logoapp.png"); ?>');  
        background-color: #f0f0f0;  
        background-size: cover;  
        background-position: center;  
        border-top-left-radius: 15px;  
        border-top-right-radius: 15px;  
        margin-bottom: 20px;  
      }  
    }  

    .mobile-form-image {  
      display: none;  
    }  
  </style>  
</head>  

<body>  
  <main class="main-content mt-0">  
    <section>  
      <div class="page-header">  
        <div class="container">  
          <div class="row">  
            <!-- Form Section -->  
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 d-flex flex-column mx-auto">  
              <!-- Highlight Box Around Form -->  
              <div class="highlight-box">  
                <!-- Image for mobile view -->  
                <div class="mobile-form-image"></div>  
                <div class="login-logo">  
                  <img src="<?php echo base_url('assets/images/logoapp.png'); ?>" alt="Logo">  
                </div>  

                <div class="card card-plain mt-2">  
                  <div class="card-header pb-0 text-left bg-transparent">  
                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>  
                    <p class="mb-0">Enter your email & password to sign in</p>  
                  </div>  
                  <div class="card-body">  
                    <!-- Form with POST method -->  
                    <form role="form" method="POST" action="<?php echo base_url('login'); ?>">  
                      <!-- Error Message -->  
                      <?php if ($this->session->flashdata('error')): ?>  
                        <div class="error-message"><?php echo $this->session->flashdata('error'); ?></div>  
                      <?php endif; ?>  

                      <label>Email</label>  
                      <div class="mb-3">  
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="<?php echo set_value('email', $this->session->flashdata('email')); ?>" required>  
                      </div>  

                      <label>Password</label>  
                      <div class="mb-3 password-toggle-container">  
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" aria-label="Password" required>  
                        <!-- Eye Icon Toggle for Password Visibility -->
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>  
                      </div>  

                      <div class="form-check form-switch">  
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember" <?php echo isset($_COOKIE['remember_me']) ? 'checked' : ''; ?>>  
                        <label class="form-check-label" for="rememberMe">Remember me</label>  
                      </div>  

                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>  
                    </form>  
                  </div>  
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">  
                    <p class="mb-4 text-sm mx-auto">  
                      Don't have an account?  
                      <a href="<?php echo base_url('signup'); ?>" class="text-info text-gradient font-weight-bold">Sign up</a>  
                    </p>  
                  </div>  
                </div>  
              </div>  
            </div>  

            <!-- Background Image Section for Desktop -->  
            <div class="col-md-6 d-none d-md-block">  
              <div class="oblique position-absolute top-0 h-100 me-n8">  
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?php echo base_url("assets/images/curved-images/curved6.jpg"); ?>');">  
                </div>  
              </div>  
            </div>  
          </div>  
        </div>  
      </div>  
    </section>  
  </main>  

  <!-- Core JS Files -->  
  <script>  
    const togglePassword = document.querySelector('#togglePassword');  
    const password = document.querySelector('#password');  

    togglePassword.addEventListener('click', function () {  
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';  
      password.setAttribute('type', type);  
      this.classList.toggle('fa-eye-slash');  
    });  
  </script>  
</body>  

</html>
