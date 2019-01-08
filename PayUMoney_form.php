<?php require 'includes/common.php'; 
        if (isset($_SESSION['email'])) 
        {  
            $email=$_SESSION['email'];
            $password=$_SESSION['password'];
            $email=mysqli_real_escape_string($con,$_SESSION['email']);
            
        
    $user_query="SELECT UserName,Email,Password,Mobile_no,Vehicle_type FROM details WHERE Email='$email'";
    $user_query_result=mysqli_query($con,$user_query);
    $row= mysqli_fetch_assoc($user_query_result);
    $vt=$row["Vehicle_type"];
    
    
    $cust_query="SELECT vechtype,taxamt FROM tax WHERE vechtype='$vt'";
    $cust_query_result=mysqli_query($con,$cust_query);
    $col= mysqli_fetch_assoc($cust_query_result);
    
    


$MERCHANT_KEY = "797iy4Ci";
$SALT = "1Gvybf88oj";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';



$posted = array();

$firstname=$row["UserName"];

$amount=$col["taxamt"];
$phone=$row["Mobile_no"];
$surl="http://localhost/payment/success.php";
$furl="http://localhost/payment/failure.php";
$productinfo="Toll Pay";
$lastname="";
$address1="";
$address2="";
$city="";
$state="";
$zipcode='';
$country='India';
$udf1='';
$udf2='';
$udf3='';
$udf4='';
$udf5='';
$pg='';
$txnid='';
$service_provider='payu_paisa';
$formError = 0;

if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}

$_SESSION['txnid']=$txnid;
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
   $formerror=1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $posted['hash']=$hash;
    $action = $PAYU_BASE_URL . '/_payment';
  }
} 
        }
?>

  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash === '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("black.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
  </head>
  
  <body onload="submitPayuForm()">
    <script>
  if (confirm("You are reaching toll plaza. Are you sure u want to make the payment!")) {
    txt = "You pressed OK!";
} else {
    txt = "You pressed Cancel!";
}

  </script>
   <div class="bg-image"></div>
  <center>
    <div class="bg-text">
        <h2>You are seeing this page because you are near to the toll plaza.</h2>
  <h1 style="font-size:50px">The amount you need to pay is Rs.<?php echo $amount ?> </h1>
  <p>Click on <u><b>Pay Now</b></u> to proceed to payment</p>

                
        
    
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="amount" value="<?php echo $amount ?>" />
      <input type="hidden" name="firstname" value="<?php echo $firstname ?>"/>
      <input type="hidden" name="email" value="<?php echo $email ?>" />
      <input type="hidden" name="phone" value="<?php echo $phone ?>" />
      <input type="hidden" name="productinfo" value="<?php echo $productinfo ?>"/>
      <input type="hidden" name="surl" value="<?php echo $surl ?>" />
      <input type="hidden" name="furl" value="<?php echo $furl ?>" />
      <input type="hidden" name="service_provider" value="payu_paisa"/>
      <input type="hidden" name="lastname" value="<?php echo $lastname ?>"/>
      <input type="hidden" name="address1" value="<?php echo $address1 ?>" />
      <input type="hidden" name="address2" value="<?php echo $address2 ?>" />
      <input type="hidden" name="city" value="<?php echo $city ?>"/>
      <input type="hidden" name="state" value="<?php echo $state ?>" />
      <input type="hidden" name="country" value="<?php echo $country ?>" />
      <input type="hidden" name="zipcode" value="<?php echo $zipcode ?>"/>
      <input type="hidden" name="udf1" value="<?php echo $udf1 ?>" />
      <input type="hidden" name="udf2" value="<?php echo $udf2 ?>" />
      <input type="hidden" name="udf3" value="<?php echo $udf3 ?>" />
      <input type="hidden" name="udf4" value="<?php echo $udf4 ?>" />
      <input type="hidden" name="udf5" value="<?php echo $udf5 ?>" />
      <input type="hidden" name="pg" value="<?php echo $pg ?>" />

 
      <!--<table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr>
        <tr>-->
          <?php if(!$hash) { ?>
      
      <center><input type="submit" value="Pay Now" class="btn btn-primary btn-active" style="font-size: 30px; border-radius: 100px;" ></center>
          <?php } ?>
    </form>
  </center></div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
<!--        </tr>
      </table>
    </form>-->
  </body>
</html>