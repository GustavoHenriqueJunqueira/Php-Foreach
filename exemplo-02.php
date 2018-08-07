<form>

	<input type="text" nome="nome">	
	<imput type="date" nome="nascimento">
	<imput type="submit" value="ok">

</form>	
<?php

if(isset($_GET)){

	foreach ($_GET as $key => $value){

		echo "Nome do campo: " . $key;
		echo "Valor do campo: " . $value;
		echo "<hr>";

	}

}

?>