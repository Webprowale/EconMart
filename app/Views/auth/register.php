<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EconMart || Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css">
</head>

<body style="min-height:100vh">
  <main class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
    <div class="container my-3 shadow rounded px-md-5 px-2 py-4" style="max-width: 30rem;">
      <div class="text-center my-5">
        <h5 class="fs-3 fw-bold heading">Register</h5>
        <p class="fw-semibold mb-1">Expectional service and Expertise -the go-to real product</p>
      </div>
      <form method="post" action="<?=base_url('reg') ?>">
      <div class="form-floating mb-3 shadow rounded" style="background-color: transparent;">
          <input type="text" name="username"  class="form-control text-black" id="floatingInput" placeholder="name.." style="background-color: transparent;">
          <label for="floatingInput" style="background-color: transparent;">Username...</label>
          <?php if (isset($errors['username'])): ?>
                        <small class="text-danger"><?= esc($errors['username']) ?></small>
                    <?php endif; ?>
        </div>
        <div class="form-floating mb-3 shadow rounded" style="background-color: transparent;">
          <input type="text" name="address"  class="form-control text-black" id="floatingInput" placeholder="Enter Address" style="background-color: transparent;">
          <label for="floatingInput" style="background-color: transparent;">Address....</label>
          <?php if (isset($errors['address'])): ?>
                        <small class="text-danger"><?= esc($errors['address']) ?></small>
                    <?php endif; ?>
        </div>
        <div class="form-floating mb-3 shadow rounded" style="background-color: transparent;">
          <input type="text" name="email"  class="form-control text-black" id="floatingInput" placeholder="name@example.com" style="background-color: transparent;">
          <label for="floatingInput" style="background-color: transparent;">Email....</label>
          <?php if (isset($errors['email'])): ?>
                        <small class="text-danger"><?= esc($errors['email']) ?></small>
                    <?php endif; ?>
        </div>
        <div class="form-floating mb-1 shadow rounded p-0" style="background-color: transparent;">
          <input type="password" name="password" id="password" class="form-control text-black" id="floatingInput" placeholder="Enter password..." style="background-color: transparent;">
          <label for="floatingInput" style="background-color: transparent;">Password...</label>
          <?php if (isset($errors['password'])): ?>
                        <small class="text-danger"><?= esc($errors['password']) ?></small>
                    <?php endif; ?>
        </div>
        <div class="mb-4">
          <input type="checkbox" id="togglePassword" class="toggle-password">
          <label for="togglePassword">Show Password</label>
        </div>
        <input type="submit" value="Register" class=" btn-secondary btn border-0 text-white form-control b fs-5">
      </form>
      <div class="mt-2">
        <p>Have Account Already? <a href="<?= base_url('/login') ?>" class='text-black fw-bold'>Login</a>
        </p>
      </div>
    </div>
    
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('change', function() {
      const type = this.checked ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
    });
  </script>
</body>
</html>