<?php @header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
     <?php include '../views/header1.php';?>
           <h1>Enter your email</h1>
            <?php if($data !==''):?>
            <div class="alert alert-danger" role="alert">
            <?php echo $data ?>
            </div>
            <?php endif;?>
            <form method="POST" enctype="multipart/form-data" action="http://testonline.com/?cont=User_cont/password_reset"> 
            <div class="form-group row">
            <label  class="col-2 col-form-label">Email:</label>
                <div class="col-8">
                    <input class="form-control" type="email"   placeholder="Email"   name="email"  required="required">
                </div>
            </div>
        
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
            </div>
          </form>
            <div>Go to <a href="http://testonline.com/?cont=User_cont/login">Log In</a> page</div>
            <div>Don't have account? <a href="http://testonline.com/?cont=User_cont/register">Create one</a></div>
             <?php include '../views/footer1.php';?>
</html>