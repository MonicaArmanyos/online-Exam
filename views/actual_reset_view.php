<?php @header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
     <?php include '../views/header1.php';?>
           <h1>Enter new password</h1>
            <form method="POST" enctype="multipart/form-data" action="http://testonline.com/?cont=User_cont/reset_password"> 
            <div class="form-group row">
            <label  class="col-2 col-form-label">Password:</label>
                <div class="col-8">
                    <input class="form-control" type="password"   placeholder="Password"   name="password"  required="required">
                </div>
            </div>
        
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Reset</button>
            </div>
            </div>
          </form>
            <div>Go <a href="http://testonline.com/?cont=User_cont/login">Log In</a>page</div>
            <div>Don't have account? <a href="http://testonline.com/?cont=User_cont/register">Create one</a></div>
             <?php include '../views/footer1.php';?>
</html>