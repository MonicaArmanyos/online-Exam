<?php @header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
     <?php include '../views/header1.php';?>
            <h1>Create a new account</h1>
            <div class="row">
            <div class="col-1"></div>
            <h4>It's free and always will be.</h4>
            </div>
            <?php if($data !==''):?>
            <div class="alert alert-danger" role="alert">
            <?php echo $data ?>
            </div>
            <?php endif;?>
            <form method="POST" enctype="multipart/form-data" action="http://testonline.com/?cont=User_cont/sendMail"> 
               
            <div class="form-group row">
            <label  class="col-2 col-form-label">Username:</label>
                <div class="col-8">
                <input class="form-control" type="text"   placeholder="Username"   name="uname"  required="required">
                </div>
            </div>
            <div class="form-group row">
            <label  class="col-2 col-form-label">Email:</label>
                <div class="col-8">
                    <input class="form-control" type="email"   placeholder="Email"   name="email"  required="required">
                </div>
            </div>
            <div class="form-group row">
            <label  class="col-2 col-form-label">Password:</label>
                <div class="col-8">
                    <input class="form-control" type="password"   placeholder="Password"   name="password"  required="required">
                </div>
            </div>
             <div class="form-group row">
            <label  class="col-2 col-form-label">Retype Password:</label>
                <div class="col-8">
                    <input class="form-control" type="password"   placeholder="Retype Password"   name="repassword"  required="required">
                </div>
            </div>
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
            </div>
          </form>
            <div>Already have account? <a href="http://testonline.com/?cont=User_cont/login">Login</a></div>
             <?php include '../views/footer1.php';?>
</html>