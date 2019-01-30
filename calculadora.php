 <html>

<head>

<title>Calculadora Paloma y German 192.168.204.101</title>

</head>
<body>
		<?php 
		$n=$_POST['var1'];
		$m=$_POST['var2'];
		$suma=0;
		$resta=0;
		$producto=0;
		$division=0;
		
		if($n==null or $m==null){
		echo ("La variable esta vacia.");
		
		}
		
		function suma($n,$m){
		$suma=$n+$m;
		return $suma;
		}
		
		function resta($n,$m){
		$resta=$n-$m;
		return $resta;
		}
		
		function producto($n,$m){
		$producto=$n*$m;
		return $producto;
		}
		
		
			function division($n,$m){
			if($m!=0){
				$division=$n/$m;
				return $division;
			}else{
			return -1;
			}
		}
		?>
		
		<?php
		$suma=suma($n,$m);
		$resta=resta($n,$m);
		$producto=producto($n,$m);
		echo $_POST["radio"]($_POST["var1"],$_POST['var2']);
		if($division=division($n,$m)>=0){
		
		
		echo $_POST["radio"]($_POST["var1"],$_POST['var2']);
		}else{
		echo ("<br> No puedes dividir por 0");
		}
		
		?>
</body>
</html>