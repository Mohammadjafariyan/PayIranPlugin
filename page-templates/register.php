<?php

/* Template Name: Api Template */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();



?>

<style>
.sec * {
direction:rtl;
text-align:right;
}
    </style>
<section class="vh-100 sec" style="background-color: #eee;" dir="rtl">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">ثبت نام</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">نام و نام خانوادگی</label>
                      <input type="text" id="form3Example1c" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">ایمیل</label>
                      <input type="email" id="form3Example3c" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">رمز عبور</label>
                      <input type="password" id="form3Example4c" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">تکرار رمز عبور</label>
                      <input type="password" id="form3Example4cd" class="form-control" />
                    </div>
                  </div>

                  <div class="form-check  row d-flex  ">
                  
                  
                  <div class="col-2"><input class="form-check-input " type="checkbox" value="" id="form2Example3c" />
</div>
                  <label class="col-10 form-check-label " for="form2Example3">
                  <a href="#!">قوانین</a>
                      را می پذیرم 
                    </label>
                    
                  </div>

                  <br/>
                  <div  class="d-flex justify-content-around  flex-column">
                    <button style="text-align:center" type="button" class="btn btn-primary btn-lg">ثبت نام</button>
                 
                    <a  style="text-align:center" class="btn btn-outline-dark mt-2" href="/users/googleauth" role="button" style="text-transform:none">
      <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
      ثبت نام با Google
    </a>
</div>

                 
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="<?php echo plugin_dir_url( __DIR__  ) . 'assets/draw1.webp'; ?>"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>