<?php
include('tw-config/functions.php');
error_reporting(E_ALL | E_STRICT);

$title = 'REGISTER';
if (isset($_POST['action']) && $_POST['action'] == 'submitted') {
    $initial="etc";
    $Email = $_POST['txtEmail'];
    $UserID = $_POST['txtUser'];
    $Password = $_POST['txtPass'];
    $CPassword = $_POST['txtPass2'];
    $UserKey = $_POST['txtKey'];
    $TWCode = $_POST['txtTWCode'];
    $SecretQuestion = $_POST['txtQuest'];
    $Answer = $_POST['txtAnswer'];
    $FirstName = $_POST['txtName'];
    $MI = substr($UserID,0,1);
    $LastName = $_POST['txtLastName'];
    $Month = $_POST['txtMonth'];
    $Day = $_POST['txtDay'];
    $Year = $_POST['txtYear'];
    $Sex = $_POST['txtSex'];
    $Country = $_POST['txtCountry'];

    function is_email($email) {
        $x = '\d\w!\#\$%&\'*+\-/=?\^_`{|}~';    //just for clarity

        return count($email = explode('@', $email, 3)) == 2
                && strlen($email[0]) < 65
                && strlen($email[1]) < 256
                && preg_match("#^[$x]+(\.?([$x]+\.)*[$x]+)?$#", $email[0])
                && preg_match('#^(([a-z0-9]+-*)?[a-z0-9]+\.)+[a-z]{2,6}.?$#', $email[1]);
    }

    $error = "";
    function AllOK() {
        global $error,$Email,$UserID,$Password,$CPassword,$UserKey,$SecretQuestion,$Answer,$FirstName,$MI,$LastName,$Month,$Day,$Year,$Sex,$Country,$TWCode;

        if (strlen($UserID) < 6 || strlen($UserID) > 50 || !preg_match("/^[a-zA-Z0-9_-]+$/", $UserID)) {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>'$UserID', Nombre de usuario no v&aacute;lido. Solo letras, se permiten n&uacute;meros en este campo. (longitud 6 ~ 50).</i></b></FONT><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/>";
            return false;
        }

        if (strlen($Password) < 6 || strlen($Password) > 30 || !preg_match("/^[a-zA-Z0-9_-]+$/", $Password)) {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Contrase&ntilde;a no v&aacute;lida. Solo letras, se permiten n&uacute;meros en este campo (longitud 6 ~ 30).</i></b></FONT><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/>";
            return false;
        }

        if (strlen($UserKey) != 7 || !preg_match("/^[0-9]/", $UserKey)) {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Llave secreta no v&aacute;lida. Debe ser un n&uacute;mero de 7 d&igrave;gitos.</i></b></FONT><br/><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/>";
            return false;
        }

        if ($Password != $CPassword) {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Las contrase&ntilde;as no coinciden...</i></b></FONT><br/><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/>";
            return false;
        }

        $SecretQuestion = str_replace("'", "''", $SecretQuestion);

        if (!is_email($Email)) {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Correo electr&oacute;nico no v&aacute;lido.</i></b></FONT><br/><FONT FACE='arial' SIZE=1 COLOR=gray>Un Email debe ser del tipo: minombre@midominio.com </FONT><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/><br/>";
            return false;
        }

        if (!preg_match("/^[a-zA-Z 0-9_-]+$/", $Answer) || strlen($Answer) == "0") {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Respuesta no v&aacute;lida.. Solo letras y n&uacute;meros estan permitidos. </i></b></FONT><br/><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/>";
            return false;
        }

/*        if (!preg_match("/^[a-zA-Z_-]+$/", $FirstName) || strlen($FirstName) == "0") {  //deshabilitado por ser mas amable con el usuario
            $error .= "Nombre no valido. Solo letras estan permitidas.<br/>";			  //
            return false;
        }

        if (!preg_match("/^[a-zA-Z_-]+$/", $LastName) || strlen($LastName) == "0") {
            $error .= "Apellido no valido. Solo letras estan permitidas.<br/>";
            return false;
        }
*/
        if (strlen($MI) != 1 || !preg_match("/^[a-zA-Z_-]+$/", $MI)) {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>No se permiten usuarios que comiencen con n&uacute;meros....</i></b></FONT><br/><FONT FACE='arial' SIZE=1 COLOR=gray>Pueden ser como el siguiente ejemplo: miusuario123, miusuario </FONT> <br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/><br/>";
            return false;
        }

        if ($Month > 12 || $Month < 1 || !preg_match("/^[0-9]/", $Month) || strlen($Month) == "0") {
            $error .= "Mes de fecha de nacimiento no valido.<br/>";
            return false;
        }

        if ($Day > 31 || $Day < 1 || !preg_match("/^[0-9]/", $Day) || strlen($Day) == "0") {
            $error .= "Dia de fecha de nacimiento no valido.<br/>";
            return false;
        }

        if ($Year > 2007 || $Year < 1950 || !preg_match("/^[0-9]/", $Year) || strlen($Year) == "0") {
            $error .= "Año de fecha de nacimiento no valido.<br/>";
            return false;
        }

        if ($Sex != 1 && $Sex != 2) {
            $error .= "Genero no valido.<br/>";
            return false;
        }

     
        if (!preg_match("/^[a-zA-Z 0-9_-]+$/", $Country)) {
            $error .= " <DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Pa&igrave;s no v&aacute;lido.</i></b></FONT><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV>";
            return false;
        }




             $wea = mssql_query("SELECT UserID FROM Account where UserID='$UserID'");
        $row = mssql_fetch_row($wea);

        if ($row[0] != "") {
            $error .= "<DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i>Nombre de usuario en uso, Porfavor elije otro. </i></b></FONT><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV>";
            return false;
        }

        $wea2 = mssql_query("SELECT Email FROM Account where Email='$Email'");
        $row2 = mssql_fetch_row($wea2);

        if ($row2[0] != "") {
            $error .= "  <DIV ALIGN='CENTER'><br/><img src='tw-content/images/error_icon.png'> <br><br><FONT FACE='arial' SIZE=3 COLOR=red><b><i> Email en uso, Porfavor ingresa otro.</i></b></FONT><br/><br/><br/><br/><br/><a href='javascript:history.go(-1)'> <img src='tw-content/images/regresar.png' border='0'/></a></DIV><br/>";
            return false;
        }
        
        return true;
    }

    if (!AllOK()) {
	
	 	
        echo $error;
       
    }
    else {
        $password2=strtoupper(md5(trim($Password)));
        $initial=substr($UserID,0,1);
        $userlenght=strlen(trim($UserID));

        $result = "Cuenta registrada con exito!";
        $f=fopen("./tw-includes/sample.tad", "r");
        $acc = fread($f,7124);
        $demoid=substr($acc,0,$userlenght);
        $demopass=substr($acc,52,32);
        $acc = str_replace($demoid,$UserID,$acc);
        $acc = str_replace($demopass,$password2,$acc);
//        echo ".$accdir."\\".$initial."\\".$UserID;
        $f2=fopen($accdir."\\".$initial."\\".$UserID.".tad", "a");
        fwrite($f2,$acc);
        fclose($f);
        echo "<div align='center'><img src='tw-content/images/bienvenido.png' border='0'/></div><br>
 <FONT FACE='arial' SIZE=2 COLOR=Silver><center>!! Felicidades, t&uacute; cuenta ha sido creada con &eacute;xito !!</center><br /><br />

Los datos de tu cuenta son los siguientes:<br /><blockquote>
<li>Usuario: <font color='Orange'>$UserID</font></li>
<li>Email: <font color='Orange'>$Email</font></li>
<li>Contrase&ntildea: <font color='Orange'>$Password</font></li>
<li>TachiCode: <font color='Red'>$TWCode</font> <font size='1'></font></li>
<li>Nacimiento: <font color='Orange'>$Day-$Month-$Year</font></li>
<li>Nombre: <font color='Orange'>$FirstName $LastName</font></li>
<li>Pa&iacute;s: <font color='Orange'>$Country</font></li>
<li>$SecretQuestion: <font color='Orange'>$Answer</font></li>
</blockquote></FONT><br />
<p><center><FONT FACE='arial' SIZE=1 COLOR=YellowGreen>Te recomendamos guardar estos datos en un lugar seguro, el personal no se hace responsable de hackeos o robo de cuentas/items.</FONT></center></p>";
        
      
        mssql_query("INSERT INTO Account VALUES ('$Email', '$UserID', '$Password' , '$UserKey', '0', NULL, NULL, NULL, '$SecretQuestion', '$Answer', '$FirstName', '$MI', '$LastName', '$Month/$Day/$Year 00:00:00', '$Sex', 'NULL', NULL, NULL, '$Country', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$_SERVER[REMOTE_ADDR]', newid(), GETDATE(), 1, NULL, 0, 0, 0, NULL, 0, 1, NULL, 0, 0, NULL, '$TWCode', 0)");
        mssql_query("DECLARE	@return_value int,
		@NCashResult int,
		@NCashMsg nvarchar(100)

EXEC	@return_value = [dbo].[AccountInsertUserInBilling]
		@Email = N'".$Email."',
		@NCashResult = @NCashResult OUTPUT,
		@NCashMsg = @NCashMsg OUTPUT");

    }

// **ENVIO DE EMAIL**
$asunto = "¡Datos de su Cuenta!";
@include('tw-includes/mailregistro.php');
		@include('tw-includes/registro-email.php');

}
else {
    @include('registro.php');
}

?>