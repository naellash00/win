<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <div class="col-md-5 p-lg-5 mx-auto my-5">
   <img src="images/winpic.jpg" width= "200" height= "200" alt="">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
   </div>
   
     <div class="container">
      <h3> للدخول في السحب اتبع ما يلي: </h3>
       <ul class="list-group list-group-flush">
       <li class="list-group-item">تابع صفحتنا على فيس بوك بالتاريخ المذكور اعلاه</li>
       <li class="list-group-item">سنقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبة</li>
       <li class="list-group-item">خلال فترة البث سنقوم بتسجيل اسمك وايميلك</li>
       <li class="list-group-item">في نهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
       <li class="list-group-item">الرابح سيحصل على نسخة مجانية من ربنامج كامتازيا</li>
    </ul>
   </div>
 </div>

 <div class = "container">
 <div class="position-relative  text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
 <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> -->
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h3> الرجاء ادخل معلوماتك </h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name = "firstName" class="form-control" id="firstName" value ="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name = "lastName" class="form-control" id="exampleInputEmail1" value ="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الاكتروني</label>
    <input type="text" name = "email" class="form-control" id="email" value ="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
  </div>

<!--Enter modal here-->
<div class="loader-con">
  <div id="loader">
	  <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button" id="winner" class="btn btn-primary">
    اختيار الرابح 
  </button>
</div> 

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       
         <h5 class="modal-title" id="modalLabel"> الرابح في المسابقة </h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h5 class="display-3 text-center modal-title" id="modalLabel1"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
      <?php endforeach; ?>
      </div>
     
    </div>
  </div>
</div>


<?php include_once './parts/footer.php'; ?>