<?php @header("Content-Type: text/html; charset=UTF-8"); ?>

<html>
     <?php include '../views/header1.php';?>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Activating your account</h5>
            <p class="card-text">We have sent you an email on :</p><div class="mail"> <?php echo $data?> </div>
            <p> click on the link sent in your email to activate your account.
            </p>
            <a href="http://testonline.com/?cont=User_cont/login" class="btn btn-primary">Go to login page</a>
            </div>
</div>
         <?php include '../views/footer1.php';?>
</html>

