<?php @header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
     <?php include '../views/header1.php';?>
            <h1>Log In</h1>
            <?php if($data ===TRUE):?>
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Congratulations!</h4>
            <p>Your account has been activated successfully.You can Log in now</p>
            </div>
            <?php elseif($data !==''):?>
            <div class="alert alert-danger" role="alert">
            <?php echo $data ?>
            </div>
            <?php endif;?>
            <form method="POST" enctype="multipart/form-data" action="http://testonline.com/?cont=User_cont/validateLogin"> 
               
            <div class="form-group row">
            <label  class="col-2 col-form-label">Username:</label>
                <div class="col-8">
                <input class="form-control" type="text"   placeholder="Username"   name="uname"  required="required">
                </div>
            </div>
            <div class="form-group row">
            <label  class="col-2 col-form-label">Password:</label>
                <div class="col-8">
                    <input class="form-control" type="password"   placeholder="Password"   name="password"  required="required">
                </div>
            </div>
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Log In </button>
            </div>
            </div>
          </form>
            <div> <a href="http://testonline.com/?cont=User_cont/forget_password">Forgotten password?</a></div>
            <div>Don't have account? <a href="http://testonline.com/?cont=User_cont/register">Create one</a></div>
     <?php include '../views/footer1.php';?>
</html>