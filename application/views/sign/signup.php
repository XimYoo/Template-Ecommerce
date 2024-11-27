<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/images/apple-icon.png'); ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">
  <title>Tugas Web</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="<?php echo base_url('assets/css/soft-ui-dashboard.css?v=1.0.7'); ?>" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Add Choices.js CSS -->
  <link href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" />
  <style>
    /* Custom styles for Choices.js to match Tailwind CSS */
    .choices {
      @apply border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500;
    }

    .choices__inner {
      @apply py-2 px-4;
    }

    .choices__list--dropdown {
      @apply border border-gray-300 rounded-lg shadow-lg bg-white;
    }

    .choices__item {
      @apply py-2 px-4 text-gray-700 hover:bg-blue-100 cursor-pointer;
    }

    .choices__item--highlighted {
      @apply bg-blue-200;
    }

    .choices__placeholder {
      @apply text-gray-400;
    }
  </style>
</head>

<body class="">
  <main class="main-content mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?php echo base_url('assets/images/curved-images/curved14.jpg'); ?>');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Get started by logging in or creating a new account with ease<br>Join us and enjoy a seamless shopping experience!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Register here</h5>
              </div>
              <div class="card-body">
                <!-- Registration Form -->
                <form role="form text-left" method="POST" action="<?php echo base_url('signup/register'); ?>">

                  <!-- Full Name -->
                  <div class="mb-3">
                    <input type="text" name="full_name" class="form-control" placeholder="Full Name" aria-label="Full Name" required>
                  </div>

                  <!-- Email -->
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" required>
                  </div>

                  <!-- Password -->
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" required>
                  </div>

                  <!-- Address -->
                  <div class="mb-3">
                    <textarea name="address" class="form-control" placeholder="Address" aria-label="Address" required></textarea>
                  </div>

                  <!-- Phone Number -->
                  <div class="mb-3">
                    <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" aria-label="Phone Number" required>
                  </div>

                  <!-- Province Dropdown with searchable option -->
                  <div class="mb-3 relative">
                    <label for="province-select" class="text-sm font-medium text-gray-900 dark:text-gray-300">Select City</label>
                    <select name="province" class="form-control mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="province-select" required>
                      <option value="" disabled selected>Select Provincy</option>
                      <?php foreach ($provinces as $province): ?>
                        <option value="<?php echo $province['id']; ?>"><?php echo $province['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                  <!-- Terms and Conditions Checkbox -->
                  <div class="form-check form-check-info text-left mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>

                  <!-- Submit Button -->
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                  </div>

                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?php echo base_url('login'); ?>" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Core JS Files -->
  <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/smooth-scrollbar.min.js'); ?>"></script>

  <!-- Initialize Choices.js for searchable dropdown -->
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const provinceSelect = document.getElementById('province-select');
      const choices = new Choices(provinceSelect, {
        searchEnabled: true,
        itemSelectText: '',
        placeholder: true,
        placeholderValue: 'Select Province',
        noResultsText: 'No provinces found',
        searchResultLimit: 5,
        shouldSort: true,
      });
    });
  </script>
</body>

</html>