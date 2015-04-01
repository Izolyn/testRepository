<?php
require_once 'userheader.php';
html_header("Sign In");
echo"<p>User Log In</p>";

		
echo <<<_END

 <form id="form1"  action="userlogin.php" onsubmit="return allValid()" method="POST">
Username:<br>
<input type="text" id="nameId" name="username" value="">
<label id="eMName"></label><br>
Password:<br>
<input type="Password" id="pwdId" name="pwd" value="">
<label id="eMPwd"></label>
<br>
<br>
<input type="submit" value="Log In"><br>
</form>

_END;

foot();
?>
<script>
validate();
</script>
