<?php

/** @no_class */
	
	$origen = '';
	if ($continua != '')
		$continua = '?continua='.$continua;
?>

		<form name="login" action="login.php<?php echo $continua?>" method="post">
		<div id="formLogin">

			

			<div id="lblTengoCuentaLogin">
				<?php echo _TENGO_CUENTA?>
			</div>

			<div id="lblEmailLogin">
				<?php echo _EMAIL?>
			</div>

			<div id="emailLogin">
				<input type="text" size="30" name="email">
			</div>

			<div id="lblPassLogin">
				<?php echo _PASSWORD?>
			</div>

			<div id="passLogin">
				<input type="password" size="30" name="password" maxlength="40">
			</div>

			<div id="botLogin">
				<input type="submit" value="<?php echo _ENTRAR?>">
			</div>

		</div>
		
		<input type="hidden" name="procesar" value="1">

		</form>
