<?php

include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>

      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>

  <ul class="list-group list-group-flush">
   <li class="list-group-item">تابع صفحتنا على فيس بوك بالتاريخ المذكور اعلاه</li>
   <li class="list-group-item">سنقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبة</li>
   <li class="list-group-item">خلال فترة البث سنقوم بتسجيل اسمك وايميلك</li>
   <li class="list-group-item">في نهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
   <li class="list-group-item">الرابح سيحصل على نسخة مجانية من ربنامج كامتازيا</li>
 </ul>

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
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    اختيار الرابح 
  </button>
</div> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       
         <h5 class="modal-title" id="exampleModalLabel"> الرابح في المسابقة </h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h5 class="display-3 text-center modal-title" id="exampleModalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
      <?php endforeach; ?>
      </div>
     
    </div>
  </div>
</div>




<!--
  <div id="cards" class="row mb-5 pb-5">


      <div class="col-sm-6">
        <div class="card my-2 bg-light">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo htmlspecialchars($user) ?></p>
           </div>
         </div>
       </div>


</div> 
       -->


<?php include_once './parts/footer.php'; ?>

