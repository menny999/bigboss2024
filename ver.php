<?php include ('conec.php');
if(isset($_POST['listo'])){
$correo=$_POST["email"];
$país=$_POST["pais"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["Apellidos"];
$colonia=$_POST["Colonia"];
$calleynum=$_POST["Calle_y_numero_de_casa"];
$referencia=$_POST["Referencia"];
$codigopost=$_POST["Codigo_postal"];
$ciudad=$_POST["Ciudad"];
$estado=$_POST["estado"];
$tel=$_POST["Telefono"];
$numtarjeta=$_POST["tarjeta"];
$mmaa=$_POST["caducidad"];

  $insertardatos="INSERT INTO compra VALUES(
    '$correo',
    '$país',
    '$nombre',
    '$apellidos',
    '$colonia',
    '$calleynum',
    '$referencia',
    '$codigopost',
    '$ciudad',
    '$estado',
    '$tel',
    '$numtarjeta',
    '$mmaa'
    )";
    $ejercutarInsertar=mysqli_query($Conexcion,$insertardatos);
    if(!$ejercutarInsertar){
        echo error;
    }else{
        header("Location: gracias.php");
        exit();
    }

}
 
?>