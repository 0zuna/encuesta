<?php
$sakura = fopen("r_clima.txt", "a+");
fputs($sakura, "\n");
fputs($sakura, implode(",",$_POST));
//echo implode(",",$_POST);
fclose($sakura);

echo "<script language=\"javascript\">
alert(\"enviada correctamente\");
window.location=\"/clima.html\"

</script>;";


//header ("Location: encuesta.html");
/*foreach($_POST as $nombre_campo => $valor){ 
	$asignacion = $valor . ","; 
	//implode(",",$arr);
   //eval($asignacion); 
	//fputs($sakura, trim($asignacion,','));
	fputs($sakura, substr($asignacion, 0, -1));
   //echo $asignacion;
}

//$linea = fgets($sakura);
//print_r($_POST);*/
//echo $nombre;
?>
