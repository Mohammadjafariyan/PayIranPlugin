<?php

/* Template Name: Api Template */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();


require_once(MJ_PAYMENT_ROOT_PATH . '/client/vendor/autoload.php');


?>


<?php

if($_SERVER['REQUEST_METHOD']==='POST') {


if($_POST["password"]===$_POST["confirmpassword"]){

$apiInstance = new Swagger\Client\Api\UsersApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client()
);
$body =
' {
"first_name":"'.$_POST["first_name"].'",
"last_name":"'.$_POST["last_name"].'",
"email":"'.$_POST["email"].'",
"password":"'.$_POST["password"].'",
"role":"5534c379-7a14-437d-befd-14da26bde9ec"
}';


echo $body;
//new \Swagger\Client\Model\Users(); // \Swagger\Client\Model\Users |
$meta = ""; // string | What metadata to return in the response.

try {
  $result = $apiInstance->createUser($body, $meta);

  print_r($result);

  ?>  <div class="alert alert-success" role="alert">
  <strong>پیغام موفق</strong> ثبت نام با موفقیت انجام شد
  می توانید از <a target="_blank" href="http://37.120.222.28:8055/admin/login">لینک ورود</a> به سیستم اقدام فرمایید

</div>
  <?php
} catch (Exception $e) {
  echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}


}else {

    ?>  <div class="alert alert-danger" role="alert">
      <strong>رمز عبور با تکرار رمز عبور برابر نیست</strong> لطفا رمز عبور و تکرار رمز عبور را یکسان وارد نمایید

    </div>
      <?php

}
}



?>

<style>
.sec * {
    direction: rtl;
    text-align: right;
}

.sec .fa {
  margin-top:30px
}
</style>
<form method="post">
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
                                        <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label"  for="form3Example1c">نام</label>
                                            <input maxlength="50" required="required"   oninvalid="validate(this,'لطفا نام خود را وارد نمایید')" name="first_name"  value="saeed" type="text" id="form3Example1c"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">نام خانوادگی</label>
                                            <input maxlength="50" required="required" name="last_name"  oninvalid="validate(this,'لطفا نام خانوادگی خود را وارد نمایید')"  value="khoshzaban " type="text" id="form3Example1c"
                                                class="form-control" />
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label"  for="form3Example3c">ایمیل</label>
                                            <input maxlength="50" required="required" dir="ltr" oninvalid="validate(this,'لطفا ایمیل خود را وارد نمایید')"   style="text-align:left;direction:ltr"  value="saeed.kho@gmail.com" name="email" type="email" id="form3Example3c" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">رمز عبور</label>
                                            <input maxlength="50" required="required" name="password"  oninvalid="validate(this,'لطفا رمز عبور خود را وارد نمایید')"  value="saeed"   type="password" id="form3Example4c"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4cd">تکرار رمز عبور</label>
                                            <input  maxlength="50"  required="required" name="confirmpassword"  oninvalid="validate(this,'لطفا رمز عبور خود را وارد نمایید')"  value="saeed" type="password" id="form3Example4cd"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-check  row d-flex  ">


                                        <div class="col-2"><input required="required"
                                        oninvalid="validate(this,'پذیرفتن قوانین جهت ثبت نام ضروری است لطفا جهت ادامه این چک باکس را تیک بزنید')"

                                        class="form-check-input " type="checkbox" value=""
                                                id="form2Example3c" />
                                        </div>
                                        <label class="col-10 form-check-label " for="form2Example3">
                                            <a href="#!">قوانین</a>
                                            را می پذیرم
                                        </label>

                                    </div>
                                    <hr/>
                                    <div class="form-check  row d-flex  ">


                                        <div class="col-2">
                                        </div>
                                        <label class="col-10 form-check-label " for="form2Example3">
                                          اکانت دارید ؟

                                           <a href="http://37.120.222.28:8055/admin/login">ورود به سیستم</a>

                                        </label>

                                    </div>

                                    <br />
                                    <div class="d-flex justify-content-around  flex-column">
                                        <button style="text-align:center" type="submit"
                                            class="btn btn-primary btn-lg">ثبت نام</button>

                                        <a style="text-align:center" class="btn btn-outline-dark mt-2"
                                            href="/users/googleauth" role="button" style="text-transform:none">
                                            <img width="20px" style="margin-bottom:3px; margin-right:5px"
                                                alt="Google sign-in"
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
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
</form>


<script>

function validate(inputID,text) {
  const input = inputID;
  const validityState = input.validity;

  if (validityState.valueMissing) {
    input.setCustomValidity(text);
  } else if (validityState.rangeUnderflow) {
    input.setCustomValidity("We need a higher number!");
  } else if (validityState.rangeOverflow) {
    input.setCustomValidity("Thats too high!");
  } else {
    input.setCustomValidity("");
  }

  console.log(validityState);
  console.trace(validityState);

 // input.reportValidity();
}
</script>
