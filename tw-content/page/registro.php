<script language=""="JavaScript">
    function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}
</script>
<script language=""="JavaScript">
	function comprobar(nick) 
	{
	var url = 'ajax/comprobar_nick.php';
	var pars= ("nickname=" + nick);
	var myAjax = new Ajax.Updater( 'comprobar_mensaje', url, { method: 'get', parameters: pars});
	}
	  </script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/validar.js"></script>    

<?php
/* John Am Torres: Ramdom Code */
function RandomString($length=7, $lt=TRUE, $uc=TRUE)
{
$source = '1234567890';

if($lt==1)$source .= 'abcdefghijklmnopqrstuvwxyz';

if($uc==1)$source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

if($length>0){

$rstr = "";

$source = str_split($source,1);

for($i=1; $i<=$length; $i++){

mt_srand((double)microtime () * 1000000);

$num = mt_rand(1,count($source));

$rstr .=$source[$num-1];
}
}
return $rstr;
}
?>
<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text"><?php echo LANG_RCUENTAS; ?></span></div>
<br /><br />
    	<div class="tooltip" ></div> 
<div class="tw-registro"><form action="?tw=register" id="regis" method="POST"  autocomplete="off">
<table width="100%" height="100%" border="0" align="center">
  <tr>
<td>
<label><?php echo LANG_RUSUARIO; ?>:</label>
<br /><input name="txtUser" type="text" class="myinputstyle"  title ="Escribe tu nombre de usuario de 6 a 50 letras."  onkeyup="comprobar(this.value)"  minlength="5" maxlength="50" /></td>
<td><label><?php echo LANG_REMAIL; ?>:</label><br />
  <input name="txtEmail" type="text" class="required email"   title="Debes escribir un correo válido; Te servirá para restablecer tu contraseña"></td>
</tr>
<tr>
<td><label><?php echo LANG_RCONTRA; ?>:</label>
  <br />
  <input name="txtPass" type="password" class="required password" id="password" title="Intenta escribir una contraseña segura. De 6 a 30 letras"
           value="" minlength="5" maxlength="30" ></td>
<td><label><?php echo LANG_RCCONTRA; ?>:</label>
  <br />
  <input name="txtPass2" type="password" class="required" equalTo="#password" title="Escribe de nuevo tu contraseña para que el sistema la compruebe." value="" minlength="6" maxlength="50" ></td>
</tr>
<tr>
<td><label><?php echo LANG_RPREGUNTA; ?>:</label>
  <br />
  <select name="txtQuest" class="required error" title="Elige una pregunta secreta.">
    <OPTION id="selected" value="<?php echo LANG_RSPREGUNTA; ?>..." selected><?php echo LANG_RSPREGUNTA; ?>...</option>
    <OPTION id="selected" value="<?php echo LANG_RMASCOTA; ?>"><?php echo LANG_RMASCOTA; ?></option>
    <OPTION id="selected" value="<?php echo LANG_RESCUELA; ?>?"><?php echo LANG_RESCUELA; ?></option>
    <OPTION id="selected" value="<?php echo LANG_RHEROE; ?>"><?php echo LANG_RHEROE; ?></option>
    <OPTION id="selected" value="<?php echo LANG_RPASATIEMPO; ?>"><?php echo LANG_RPASATIEMPO; ?></option>
    <OPTION id="selected" value="<?php echo LANG_RDEPORTE; ?>"><?php echo LANG_RDEPORTE; ?></option>
    <OPTION id="selected" value="<?php echo LANG_RSAPELLIDO; ?>"><?php echo LANG_RSAPELLIDO; ?></option>
    <OPTION id="selected" value="<?php echo LANG_RNOVIA; ?>"><?php echo LANG_RNOVIA; ?></option>
  </select></td>
<td><label><?php echo LANG_RRESPUESTA; ?>:</label>
  <br />
  <input name="txtAnswer" type="text" class="required error" title="Escribe una respuesta secreta." ></td>
</tr>
<tr>
<td><label><?php echo LANG_RNOMBRE; ?>:</label>
  <br />
  <input name="txtName" type="text" class="required error" title="Escribe tu nombre real." /></td>
<td><label><?php echo LANG_RAPELLIDO; ?>:</label>
  <br />
  <input name="txtLastName" type="text" class="required error" title="Escribe tus apellidos"  ></td>
</tr>
<tr>
<td><label><?php echo LANG_RFECHA; ?>:</label>
  <br />
  <SELECT name="txtDay" class="required error"  title="Elige tu día de nacimiento."  id="asunto">
    <OPTION id="selected2" value="1" selected>1</OPTION>
    <OPTION id="selected2" value="2">2</OPTION>
    <OPTION id="selected2" value="3">3</OPTION>
    <OPTION id="selected2" value="4">4</OPTION>
    <OPTION id="selected2" value="5">5</OPTION>
    <OPTION id="selected2" value="6">6</OPTION>
    <OPTION id="selected2" value="7">7</OPTION>
    <OPTION id="selected2" value="8">8</OPTION>
    <OPTION id="selected2" value="9">9</OPTION>
    <OPTION id="selected2" value="10">10</OPTION>
    <OPTION id="selected2" value="11">11</OPTION>
    <OPTION id="selected2" value="12">12</OPTION>
    <OPTION id="selected2" value="13">13</OPTION>
    <OPTION id="selected2" value="14">14</OPTION>
    <OPTION id="selected2" value="15">15</OPTION>
    <OPTION id="selected2" value="16">16</OPTION>
    <OPTION id="selected2" value="17">17</OPTION>
    <OPTION id="selected2" value="18">18</OPTION>
    <OPTION id="selected2" value="19">19</OPTION>
    <OPTION id="selected2" value="20">20</OPTION>
    <OPTION id="selected2" value="21">21</OPTION>
    <OPTION id="selected2" value="22">22</OPTION>
    <OPTION id="selected2" value="23">23</OPTION>
    <OPTION id="selected2" value="24">24</OPTION>
    <OPTION id="selected2" value="25">25</OPTION>
    <OPTION id="selected2" value="26">26</OPTION>
    <OPTION id="selected2" value="27">27</OPTION>
    <OPTION id="selected2" value="28">28</OPTION>
    <OPTION id="selected2" value="29">29</OPTION>
    <OPTION id="selected2" value="30">30</OPTION>
    <OPTION id="selected2" value="31">31</OPTION>
    </SELECT>
  <SELECT name="txtMonth" class="required error" title="Elige tu mes de nacimiento."  id="asunto">
    <OPTION id="selected2" value="1" selected><?php echo LANG_RENERO; ?></OPTION>
    <OPTION id="selected2" value="2"><?php echo LANG_RFEBRERO; ?></OPTION>
    <OPTION id="selected2" value="3"><?php echo LANG_RMARZO; ?></OPTION>
    <OPTION id="selected2" value="4"><?php echo LANG_RABRIL; ?></OPTION>
    <OPTION id="selected2" value="5"><?php echo LANG_RMAYO; ?></OPTION>
    <OPTION id="selected2" value="6"><?php echo LANG_RJUNIO; ?></OPTION>
    <OPTION id="selected2" value="7"><?php echo LANG_RJULIO; ?></OPTION>
    <OPTION id="selected2" value="8"><?php echo LANG_RAGOSTO; ?></OPTION>
    <OPTION id="selected2" value="8"><?php echo LANG_RSEPTIEMBRE; ?></OPTION>
    <OPTION id="selected2" value="8"><?php echo LANG_ROCTUBRE; ?></OPTION>
    <OPTION id="selected2" value="8"><?php echo LANG_RNOVIEMBRE; ?></OPTION>
    <OPTION id="selected2" value="8"><?php echo LANG_RDICIEMBRE; ?></OPTION>
    </SELECT>
  <SELECT name="txtYear" class="required error" title="Elige tu año de nacimiento."   id="asunto">
    <OPTION id="selected2" value=1950 selected>1950</OPTION>
    <OPTION id="selected2" value=1951>1951</OPTION>
    <OPTION id="selected2" value=1952>1952</OPTION>
    <OPTION id="selected2" value=1953>1953</OPTION>
    <OPTION id="selected2" value=1954>1954</OPTION>
    <OPTION id="selected2" value=1955>1955</OPTION>
    <OPTION id="selected2" value=1956>1956</OPTION>
    <OPTION id="selected2" value=1957>1957</OPTION>
    <OPTION id="selected2" value=1958>1958</OPTION>
    <OPTION id="selected2" value=1959>1959</OPTION>
    <OPTION id="selected2" value=1960>1960</OPTION>
    <OPTION id="selected2" value=1961>1961</OPTION>
    <OPTION id="selected2" value=1962>1962</OPTION>
    <OPTION id="selected2" value=1963>1963</OPTION>
    <OPTION id="selected2" value=1964>1964</OPTION>
    <OPTION id="selected2" value=1965>1965</OPTION>
    <OPTION id="selected2" value=1966>1966</OPTION>
    <OPTION id="selected2" value=1967>1967</OPTION>
    <OPTION id="selected2" value=1968>1968</OPTION>
    <OPTION id="selected2" value=1969>1969</OPTION>
    <OPTION id="selected2" value=1970>1970</OPTION>
    <OPTION id="selected2" value=1971>1971</OPTION>
    <OPTION id="selected2" value=1972>1972</OPTION>
    <OPTION id="selected2" value=1973>1973</OPTION>
    <OPTION id="selected2" value=1974>1974</OPTION>
    <OPTION id="selected2" value=1975>1975</OPTION>
    <OPTION id="selected2" value=1976>1976</OPTION>
    <OPTION id="selected2" value=1977>1977</OPTION>
    <OPTION id="selected2" value=1978>1978</OPTION>
    <OPTION id="selected2" value=1979>1979</OPTION>
    <OPTION id="selected2" value=1980>1980</OPTION>
    <OPTION id="selected2" value=1981>1981</OPTION>
    <OPTION id="selected2" value=1982>1982</OPTION>
    <OPTION id="selected2" value=1983>1983</OPTION>
    <OPTION id="selected2" value=1984>1984</OPTION>
    <OPTION id="selected2" value=1985>1985</OPTION>
    <OPTION id="selected2" value=1986>1986</OPTION>
    <OPTION id="selected2" value=1987>1987</OPTION>
    <OPTION id="selected2" value=1988>1988</OPTION>
    <OPTION id="selected2" value=1989>1989</OPTION>
    <OPTION id="selected2" value=1990>1990</OPTION>
    <OPTION id="selected2" value=1991>1991</OPTION>
    <OPTION id="selected2" value=1992>1992</OPTION>
    <OPTION id="selected2" value=1993>1993</OPTION>
    <OPTION id="selected2" value=1994>1994</OPTION>
    <OPTION id="selected2" value=1995>1995</OPTION>
    <OPTION id="selected2" value=1996>1996</OPTION>
    <OPTION id="selected2" value=1997>1997</OPTION>
    <OPTION id="selected2" value=1998>1998</OPTION>
    <OPTION id="selected2" value=1999>1999</OPTION>
    <OPTION id="selected2" value=2000>2000</OPTION>
    <OPTION id="selected2" value=2001>2001</OPTION>
    <OPTION id="selected2" value=2002>2002</OPTION>
    <OPTION id="selected2" value=2003>2003</OPTION>
    <OPTION id="selected2" value=2004>2004</OPTION>
    <OPTION id="selected2" value=2005>2005</OPTION>
    <OPTION id="selected2" value=2006>2006</OPTION>
    <OPTION id="selected2" value=2007>2007</OPTION>
    </SELECT>
  <SELECT name="txtSex" class="required error" title="Elige tu genero."   id="asunto">
    <OPTION id="selected2" value=1 selected><?php echo LANG_RHOMBRE; ?></OPTION>
    <OPTION id="selected2" value=2><?php echo LANG_RMUJER; ?></OPTION>
  </SELECT></td>
<td><label><?php echo LANG_RPAIS; ?> : </label>
  <br />
  <select name="txtCountry" class="required error" title="Elige tu país."  id="txtCountry">
    <option id="selected3" value="" selected="selected"><?php echo LANG_RSPAIS; ?>...</option>
    <option id="selected3" value="Afghanistan">Afghanistan</option>
    <option id="selected3" value="Albania">Albania</option>
    <option id="selected3" value="Algeria">Algeria</option>
    <option id="selected3" value="American Samoa">American Samoa</option>
    <option id="selected3" value="Andorra">Andorra</option>
    <option id="selected3" value="Angola">Angola</option>
    <option id="selected3" value="Anguilla">Anguilla</option>
    <option id="selected3" value="Antarctica">Antarctica</option>
    <option id="selected3" value="Antigua and Barbuda">Antigua And Barbuda</option>
    <option id="selected3" value="Argentina">Argentina</option>
    <option id="selected3" value="Armenia">Armenia</option>
    <option id="selected3" value="Aruba">Aruba</option>
    <option id="selected3" value="Ashmore and Cartier Islands">Ashmore And Cartier Islands</option>
    <option id="selected3" value="Australia">Australia</option>
    <option id="selected3" value="Austria">Austria</option>
    <option id="selected3" value="Azerbaijan">Azerbaijan</option>
    <option id="selected3" value="Bahamas">Bahamas</option>
    <option id="selected3" value="Bahrain">Bahrain</option>
    <option id="selected3" value="Baker Island">Baker Island</option>
    <option id="selected3" value="Bangladesh">Bangladesh</option>
    <option id="selected3" value="Barbados">Barbados</option>
    <option id="selected3" value="Bassas da India">Bassas Da India</option>
    <option id="selected3" value="Belarus">Belarus</option>
    <option id="selected3" value="Belgium">Belgium</option>
    <option id="selected3" value="Belize">Belize</option>
    <option id="selected3" value="Benin">Benin</option>
    <option id="selected3" value="Bermuda">Bermuda</option>
    <option id="selected3" value="Bhutan">Bhutan</option>
    <option id="selected3" value="Bolivia">Bolivia</option>
    <option id="selected3" value="Bosnia and Herzegovina">Bosnia And Herzegovina</option>
    <option id="selected3" value="Botswana">Botswana</option>
    <option id="selected3" value="Bouvet Island">Bouvet Island</option>
    <option id="selected3" value="Brazil">Brazil</option>
    <option id="selected3" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option id="selected3" value="British Virgin Islands">British Virgin Islands</option>
    <option id="selected3" value="Brunei">Brunei</option>
    <option id="selected3" value="Bulgaria">Bulgaria</option>
    <option id="selected3" value="Burkina Faso">Burkina Faso</option>
    <option id="selected3" value="Burma">Burma</option>
    <option id="selected3" value="Burundi">Burundi</option>
    <option id="selected3" value="Cambodia">Cambodia</option>
    <option id="selected3" value="Cameroon">Cameroon</option>
    <option id="selected3" value="Canada">Canada</option>
    <option id="selected3" value="Cape Verde">Cape Verde</option>
    <option id="selected3" value="Cayman Islands">Cayman Islands</option>
    <option id="selected3" value="Chad">Chad</option>
    <option id="selected3" value="Chile">Chile</option>
    <option id="selected3" value="China">China</option>
    <option id="selected3" value="Christmas Island">Christmas Island</option>
    <option id="selected3" value="Clipperton Island">Clipperton Island</option>
    <option id="selected3" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option id="selected3" value="Colombia">Colombia</option>
    <option id="selected3" value="Comoros">Comoros</option>
    <option id="selected3" value="Congo, Democratic Republic of the">Congo, Democratic Republic Of The</option>
    <option id="selected3" value="Congo, Republic of the">Congo, Republic Of The</option>
    <option id="selected3" value="Cook Islands">Cook Islands</option>
    <option id="selected3" value="Coral Sea Islands">Coral Sea Islands</option>
    <option id="selected3" value="Costa Rica">Costa Rica</option>
    <option id="selected3" value="Cote d'Ivoire">Cote D'ivoire</option>
    <option id="selected3" value="Country">Country</option>
    <option id="selected3" value="Croatia">Croatia</option>
    <option id="selected3" value="Cuba">Cuba</option>
    <option id="selected3" value="Cyprus">Cyprus</option>
    <option id="selected3" value="Czech Republic">Czech Republic</option>
    <option id="selected3" value="Denmark">Denmark</option>
    <option id="selected3" value="Djibouti">Djibouti</option>
    <option id="selected3" value="Dominica">Dominica</option>
    <option id="selected3" value="Dominican Republic">Dominican Republic</option>
    <option id="selected3" value="Ecuador">Ecuador</option>
    <option id="selected3" value="Egypt">Egypt</option>
    <option id="selected3" value="El Salvador">El Salvador</option>
    <option id="selected3" value="Equatorial Guinea">Equatorial Guinea</option>
    <option id="selected3" value="Estonia">Estonia</option>
    <option id="selected3" value="Ethiopia">Ethiopia</option>
    <option id="selected3" value="Europa Island">Europa Island</option>
    <option id="selected3" value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
    <option id="selected3" value="Faroe Islands">Faroe Islands</option>
    <option id="selected3" value="Fiji">Fiji</option>
    <option id="selected3" value="Finland">Finland</option>
    <option id="selected3" value="France">France</option>
    <option id="selected3" value="French Guiana">French Guiana</option>
    <option id="selected3" value="French Polynesia">French Polynesia</option>
    <option id="selected3" value="French Southern and Antarctic Lands">French Southern And Antarctic Lands</option>
    <option id="selected3" value="Gabon">Gabon</option>
    <option id="selected3" value="Gaza Strip">Gaza Strip</option>
    <option id="selected3" value="Germany">Germany</option>
    <option id="selected3" value="Ghana">Ghana</option>
    <option id="selected3" value="Gibraltar">Gibraltar</option>
    <option id="selected3" value="Greece">Greece</option>
    <option id="selected3" value="Grenada">Grenada</option>
    <option id="selected3" value="Guadeloupe">Guadeloupe</option>
    <option id="selected3" value="Guam">Guam</option>
    <option id="selected3" value="Guatemala">Guatemala</option>
    <option id="selected3" value="Guernsey">Guernsey</option>
    <option id="selected3" value="Guinea">Guinea</option>
    <option id="selected3" value="Guyana">Guyana</option>
    <option id="selected3" value="Haiti">Haiti</option>
    <option id="selected3" value="Heard Island and McDonald Islands">Heard Island And Mcdonald Islands</option>
    <option id="selected3" value="Holy See (Vatican City)`">Holy See (Vatican City)`</option>
    <option id="selected3" value="HongKong">Hongkong</option>
    <option id="selected3" value="Howland Island">Howland Island</option>
    <option id="selected3" value="Hungary">Hungary</option>
    <option id="selected3" value="Iceland">Iceland</option>
    <option id="selected3" value="India">India</option>
    <option id="selected3" value="Indian Ocean">Indian Ocean</option>
    <option id="selected3" value="Indonesia">Indonesia</option>
    <option id="selected3" value="Iran">Iran</option>
    <option id="selected3" value="Iraq">Iraq</option>
    <option id="selected3" value="Ireland">Ireland</option>
    <option id="selected3" value="Israel">Israel</option>
    <option id="selected3" value="Italy">Italy</option>
    <option id="selected3" value="Jamaica">Jamaica</option>
    <option id="selected3" value="Jan Mayen">Jan Mayen</option>
    <option id="selected3" value="Japan">Japan</option>
    <option id="selected3" value="Jarvis Island">Jarvis Island</option>
    <option id="selected3" value="Jersey">Jersey</option>
    <option id="selected3" value="Jordan">Jordan</option>
    <option id="selected3" value="Juan de Nova Island">Juan De Nova Island</option>
    <option id="selected3" value="Kenya">Kenya</option>
    <option id="selected3" value="Kingman Reef">Kingman Reef</option>
    <option id="selected3" value="Korea, North">Korea, North</option>
    <option id="selected3" value="Korea, South">Korea, South</option>
    <option id="selected3" value="Kuwait">Kuwait</option>
    <option id="selected3" value="Laos">Laos</option>
    <option id="selected3" value="Latvia">Latvia</option>
    <option id="selected3" value="Lebanon">Lebanon</option>
    <option id="selected3" value="Liberia">Liberia</option>
    <option id="selected3" value="Libya">Libya</option>
    <option id="selected3" value="Liechtenstein">Liechtenstein</option>
    <option id="selected3" value="Lithuania">Lithuania</option>
    <option id="selected3" value="Luxembourg">Luxembourg</option>
    <option id="selected3" value="Macau">Macau</option>
    <option id="selected3" value="Macedonia">Macedonia</option>
    <option id="selected3" value="Malaysia">Malaysia</option>
    <option id="selected3" value="Maldives">Maldives</option>
    <option id="selected3" value="Mali">Mali</option>
    <option id="selected3" value="Malta">Malta</option>
    <option id="selected3" value="Martinique">Martinique</option>
    <option id="selected3" value="Mauritius">Mauritius</option>
    <option id="selected3" value="Mexico">Mexico</option>
    <option id="selected3" value="Midway Islands">Midway Islands</option>
    <option id="selected3" value="Moldova">Moldova</option>
    <option id="selected3" value="Monaco">Monaco</option>
    <option id="selected3" value="Mongolia">Mongolia</option>
    <option id="selected3" value="Montserrat">Montserrat</option>
    <option id="selected3" value="Morocco">Morocco</option>
    <option id="selected3" value="Mozambique">Mozambique</option>
    <option id="selected3" value="Namibia">Namibia</option>
    <option id="selected3" value="Nauru">Nauru</option>
    <option id="selected3" value="Navassa Island">Navassa Island</option>
    <option id="selected3" value="Nepal">Nepal</option>
    <option id="selected3" value="Netherlands">Netherlands</option>
    <option id="selected3" value="Netherlands Antilles">Netherlands Antilles</option>
    <option id="selected3" value="New Caledonia">New Caledonia</option>
    <option id="selected3" value="New Zealand">New Zealand</option>
    <option id="selected3" value="Nigeria">Nigeria</option>
    <option id="selected3" value="Niue">Niue</option>
    <option id="selected3" value="Norfolk Island">Norfolk Island</option>
    <option id="selected3" value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option id="selected3" value="Norway">Norway</option>
    <option id="selected3" value="Oman">Oman</option>
    <option id="selected3" value="Pakistan">Pakistan</option>
    <option id="selected3" value="Palau">Palau</option>
    <option id="selected3" value="Palmyra Atoll">Palmyra Atoll</option>
    <option id="selected3" value="Panama">Panama</option>
    <option id="selected3" value="Papua New Guinea">Papua New Guinea</option>
    <option id="selected3" value="Paracel Islands">Paracel Islands</option>
    <option id="selected3" value="Paraguay">Paraguay</option>
    <option id="selected3" value="Peru">Peru</option>
    <option id="selected3" value="Philippines">Philippines</option>
    <option id="selected3" value="Pitcairn Islands">Pitcairn Islands</option>
    <option id="selected3" value="Poland">Poland</option>
    <option id="selected3" value="Portugal">Portugal</option>
    <option id="selected3" value="Puerto Rico">Puerto Rico</option>
    <option id="selected3" value="Qatar">Qatar</option>
    <option id="selected3" value="Reunion">Reunion</option>
    <option id="selected3" value="Romania">Romania</option>
    <option id="selected3" value="Russia">Russia</option>
    <option id="selected3" value="Rwanda">Rwanda</option>
    <option id="selected3" value="Saint Helena">Saint Helena</option>
    <option id="selected3" value="Saint Lucia">Saint Lucia</option>
    <option id="selected3" value="Saint Vincent and the Grenadines">Saint Vincent And The Grenadines</option>
    <option id="selected3" value="Samoa">Samoa</option>
    <option id="selected3" value="San Marino">San Marino</option>
    <option id="selected3" value="Sao Tome and Principe">Sao Tome And Principe</option>
    <option id="selected3" value="Saudi Arabia">Saudi Arabia</option>
    <option id="selected3" value="Senegal">Senegal</option>
    <option id="selected3" value="Seychelles">Seychelles</option>
    <option id="selected3" value="Sierra Leone">Sierra Leone</option>
    <option id="selected3" value="Singapore">Singapore</option>
    <option id="selected3" value="Slovakia">Slovakia</option>
    <option id="selected3" value="Slovenia">Slovenia</option>
    <option id="selected3" value="Somalia">Somalia</option>
    <option id="selected3" value="South Africa">South Africa</option>
    <option id="selected3" value="Southern Ocean">Southern Ocean</option>
    <option id="selected3" value="Spain">Spain</option>
    <option id="selected3" value="Spratly Islands">Spratly Islands</option>
    <option id="selected3" value="Sri Lanka">Sri Lanka</option>
    <option id="selected3" value="Sudan">Sudan</option>
    <option id="selected3" value="Suriname">Suriname</option>
    <option id="selected3" value="Svalbard">Svalbard</option>
    <option id="selected3" value="Swaziland">Swaziland</option>
    <option id="selected3" value="Sweden">Sweden</option>
    <option id="selected3" value="Switzerland">Switzerland</option>
    <option id="selected3" value="Syria">Syria</option>
    <option id="selected3" value="Taiwan">Taiwan</option>
    <option id="selected3" value="Tajikistan">Tajikistan</option>
    <option id="selected3" value="Tanzania">Tanzania</option>
    <option id="selected3" value="Thailand">Thailand</option>
    <option id="selected3" value="Togo">Togo</option>
    <option id="selected3" value="Tokelau">Tokelau</option>
    <option id="selected3" value="Tonga">Tonga</option>
    <option id="selected3" value="Trinidad and Tobago">Trinidad And Tobago</option>
    <option id="selected3" value="Tromelin Island">Tromelin Island</option>
    <option id="selected3" value="Tunisia">Tunisia</option>
    <option id="selected3" value="Turkey">Turkey</option>
    <option id="selected3" value="Turkmenistan">Turkmenistan</option>
    <option id="selected3" value="Turks and Caicos Islands">Turks And Caicos Islands</option>
    <option id="selected3" value="Tuvalu">Tuvalu</option>
    <option id="selected3" value="Uganda">Uganda</option>
    <option id="selected3" value="Ukraine">Ukraine</option>
    <option id="selected3" value="United Arab Emirates">United Arab Emirates</option>
    <option id="selected3" value="United Kingdom">United Kingdom</option>
    <option id="selected3" value="United States">United States</option>
    <option id="selected3" value="Uruguay">Uruguay</option>
    <option id="selected3" value="Uzbekistan">Uzbekistan</option>
    <option id="selected3" value="Vanuatu">Vanuatu</option>
    <option id="selected3" value="Venezuela">Venezuela</option>
    <option id="selected3" value="Vietnam">Vietnam</option>
    <option id="selected3" value="Virgin Islands">Virgin Islands</option>
    <option id="selected3" value="Wake Island">Wake Island</option>
    <option id="selected3" value="Wallis and Futuna">Wallis And Futuna</option>
    <option id="selected3" value="West Bank">West Bank</option>
    <option id="selected3" value="Western Sahara">Western Sahara</option>
    <option id="selected3" value="Yemen">Yemen</option>
    <option id="selected3" value="Yugoslavia">Yugoslavia</option>
    <option id="selected3" value="Zambia">Zambia</option>
    <option id="selected3" value="Zimbabwe">Zimbabwe</option>
  </select></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><center><input name="Enviar" type="submit" id="enviar" value="<?php echo LANG_RENVIAR; ?>" /></center>
  <input type="hidden" name="action" value="submitted" /></td>
</tr>
<tr>
<td colspan="2"><label hidden><?php echo LANG_RNUMEROS; ?> :</label>
  </span>
  <input  name="txtKey" type="text" minlength="7" maxlength="7" value="<?php echo RandomString(7,FALSE,FALSE); ?>" hidden><br />
  <input  name="txtTWCode" type="text" minlength="6" maxlength="6" value="<?php echo RandomString(6,TRUE,FALSE); ?>" hidden>
</td>
</tr>
</table></form></div>

 
<script type="text/javascript">
	$j = jQuery.noConflict(); 
		$j(document).ready(function() {
			$j("#regis").validate();
		});
		</script>
 
<script type="text/javascript">
$j = jQuery.noConflict(); 
$j(document).ready(function(){
$j(function() {

$j("#regis :input").tooltip({

	position: "center right",

	offset: [-2, 20],

	effect: "fade",

	opacity: 0.7,

	tip: '.tooltip'

});
});
});
</script>