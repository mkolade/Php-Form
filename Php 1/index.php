<?php


if(isset($_POST['submit']))
{
    require_once "validate.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<fieldset>

<legend>Employment Form</legend>


 <form method="post" action="">
        <div>
            <label>
            First Name
            </label>
            <br/>
            <input value="<?php echo @$_POST['firstname']  ?>" type="text" name="firstname"/>
            <?php  if(isset($err_firstname))  echo $err_firstname;  ?>
        </div>
        <br/>
        <div>
            <label>
            Last Name
            </label>
            <br/>
            <input type="text" value="<?php echo @$_POST['lastname']  ?>" name="lastname"/>
            <?php  if(isset($err_lastname))  echo $err_lastname;  ?>
        </div>

        <br/>
        <div>
            <label>
          Email Address
            </label>
            <br/>
            <input type="text" value="<?php echo @$_POST['email']  ?>" name="email"/>
            <?php  if(isset($err_email))  echo $err_email;  ?>
        </div>
        <br/>
        <div>
            <label>
            Mobile Number
            </label>
            <br/>
            <input type="text" value="<?php echo @$_POST['phone']  ?>" name="phone"/>
            <?php  if(isset($err_phone))  echo $err_phone;  ?>
        </div>


        <br/>
        <div>
            <label>
           Country
           </label>
            <br/>
            <input type="text" value="<?php echo @$_POST['country']  ?>" name="country"/>
            <?php  if(isset($err_country))  echo $err_country;  ?>
        </div>

        <br/>
        
        <div>
            <label>
           State
           </label>
            <br/>
            <input type="text" value="<?php echo @$_POST['state']  ?>" name="state"/>
            <?php  if(isset($err_state))  echo $err_state;  ?>
        </div>
        <br/>
        <div>
            <label>
           Address
            </label>
            <br/>
            <textarea name="address"><?php echo @$_POST['firstname']  ?></textarea>
            <?php  if(isset($err_address))  echo $err_address;  ?>
        </div>

        <br/>
        <button type="submit" name="submit" value="submit">Submit</button>

    </form>

</fieldset>


</body>
</html>