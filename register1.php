<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marathon";
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn, "utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


session_start();
$event_id = $_SESSION['event_id'];

$sql = "SELECT * FROM events  WHERE event_id = $event_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();

?>
<!doctype html>
<?php require_once("header.php"); ?>

<link href="css/pic.css" rel="stylesheet">
<link href="css/register1_new.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="javascript/validateregister.js"></script>

  

    <!-- process step bar -->
    <!-- <br><div class="containerbar">
        <ul class="progressbarbar">
            <li class="active">ลงทะเบียน</li>
            <li>ตรวจสอบ</li>
            <li>ยืนยันข้อมูล</li>
            <li>ชำระเงิน</li>
            <li>เสร็จสิ้น</li>
        </ul>
    </div> -->
    <center><h4 style="color:green">ความคืบหน้าในการสมัคร</h4></center>
    <center><div class="container">
        <div class="progress" style="width:50%;background:gray;height:20px;margin-top:10px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;background:green">
            20%
            </div>
        </div>
    </div>
    </center>

    <div class="container" style="background-color: white;margin-bottom:30px;">
        <div class="col-lg-12">
            <div class="row">
                <form class="form-horizontal" role="form" action="add/addregister.php" method="POST"  enctype="multipart/form-data">    
                    <div class="col-sm-12">

                        <!-- form1 -->
                        <br><center><h1 class="">1.กรอกข้อมูลผู้เข้าแข่งขัน</h1></center><br>

                        <!-- firstname and lastname -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="first_name" >ชื่อ(ภาษาอังกฤษ)<font color="red"> *</font></label>
                                <input type="text" name="frist_name" placeholder="ชื่อจริง" class="form-control" autofocus required id = "txt" onkeyup = "Validate(this)">
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="lastName" style="margin-left:10px">นามสกุล(ภาษาอังกฤษ)<font color="red"> *</font></label>
                                <input type="text" name="last_name" placeholder="นามสกุล" class="form-control" autofocus required id = "txt" onkeyup = "Validate(this)" style="margin-left:10px">
                            </div>
                        </div>	

                        <!-- gender and date of birth -->
                        <div class="row">
                            <label for="brith_date">วัน/เดือน/ปีเกิด<font color="red"> *</font></label>
                            <div class="col-sm-12 form-group">
                                <div class="col-sm-4">
                                    <select name="day" class="form-control" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');" id="field_terms">
                                        <option value="">--DD--</option> 
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select name="month" class="form-control" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');" id="field_terms">
                                        <option value="">--MM--</option> 
                                        <option value="1">มกราคม</option>
                                        <option value="2">กุมภาพันธ์</option>
                                        <option value="3">มีนาคม</option>
                                        <option value="4">เมษายน</option>
                                        <option value="5">พฤษภาคม</option>
                                        <option value="6">มิถุนายน</option>
                                        <option value="7">กรกฏาคม</option>
                                        <option value="8">สิงหาคม</option>
                                        <option value="9">กันยายน</option>
                                        <option value="10">ตุลาคม</option>
                                        <option value="11">พฤศจิกายน</option>
                                        <option value="12">ธันวาคม</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select name="year" class="form-control" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');" id="field_terms">
                                        <option value="">--YY--</option> 
                                        <option value="2017">2560</option>
                                        <option value="2016">2559</option>
                                        <option value="2015">2558</option>
                                        <option value="2014">2557</option>
                                        <option value="2013">2556</option>
                                        <option value="2012">2555</option>
                                        <option value="2011">2554</option>
                                        <option value="2010">2553</option>
                                        <option value="2009">2552</option>
                                        <option value="2008">2551</option>
                                        <option value="2007">2550</option>
                                        <option value="2006">2549</option>
                                        <option value="2005">2548</option>
                                        <option value="2004">2547</option>
                                        <option value="2003">2546</option>
                                        <option value="2002">2545</option>
                                        <option value="2001">2544</option>
                                        <option value="2000">2543</option>
                                        <option value="1999">2542</option>
                                        <option value="1998">2541</option>
                                        <option value="1997">2540</option>
                                        <option value="1996">2539</option>
                                        <option value="1995">2538</option>
                                        <option value="1994">2537</option>
                                        <option value="1993">2536</option>
                                        <option value="1992">2535</option>
                                        <option value="1991">2534</option>
                                        <option value="1990">2533</option>
                                        <option value="1989">2532</option>
                                        <option value="1988">2531</option>
                                        <option value="1987">2530</option>
                                        <option value="1986">2529</option>
                                        <option value="1985">2528</option>
                                        <option value="1984">2527</option>
                                        <option value="1983">2526</option>
                                        <option value="1982">2525</option>
                                        <option value="1981">2524</option>
                                        <option value="1980">2523</option>
                                        <option value="1979">2522</option>
                                        <option value="1978">2521</option>
                                        <option value="1977">2520</option>
                                        <option value="1976">2519</option>
                                        <option value="1975">2518</option>
                                        <option value="1974">2517</option>
                                        <option value="1973">2516</option>
                                        <option value="1972">2515</option>
                                        <option value="1971">2514</option>
                                        <option value="1970">2513</option>
                                        <option value="1969">2512</option>
                                        <option value="1968">2511</option>
                                        <option value="1967">2510</option>
                                        <option value="1966">2509</option>
                                        <option value="1965">2508</option>
                                        <option value="1964">2507</option>
                                        <option value="1963">2506</option>
                                        <option value="1962">2505</option>
                                        <option value="1961">2504</option>
                                        <option value="1960">2503</option>
                                        <option value="1959">2502</option>
                                        <option value="1958">2501</option>
                                        <option value="1957">2500</option>
                                        <option value="1956">2499</option>
                                        <option value="1955">2498</option>
                                        <option value="1954">2497</option>
                                        <option value="1953">2496</option>
                                        <option value="1952">2495</option>
                                        <option value="1951">2494</option>
                                        <option value="1950">2493</option>
                                        <option value="1949">2492</option>
                                        <option value="1948">2491</option>
                                        <option value="1947">2490</option>
                                        <option value="1946">2489</option>
                                        <option value="1945">2488</option>
                                        <option value="1944">2487</option>
                                        <option value="1943">2486</option>
                                        <option value="1942">2485</option>
                                        <option value="1941">2484</option>
                                        <option value="1940">2483</option>
                                        <option value="1939">2482</option>
                                        <option value="1938">2481</option>
                                        <option value="1937">2480</option>
                                        <option value="1936">2479</option>
                                        <option value="1935">2478</option>
                                        <option value="1934">2477</option>
                                        <option value="1933">2476</option>
                                        <option value="1932">2475</option>
                                        <option value="1931">2474</option>
                                        <option value="1930">2473</option>
                                        <option value="1929">2472</option>
                                        <option value="1928">2471</option>
                                        <option value="1927">2470</option>
                                        <option value="1926">2469</option>
                                        <option value="1925">2468</option>
                                        <option value="1924">2467</option>
                                        <option value="1923">2466</option>
                                        <option value="1922">2465</option>
                                        <option value="1921">2464</option>
                                        <option value="1920">2463</option>
                                        <option value="1919">2462</option>
                                        <option value="1918">2461</option>
                                    </select>   
                                </div>        
                            </div>
                        </div>

                        <!-- email and id -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email">Email<font color="red"> *</font></label>
                                <input type="email" name="email" placeholder="example@gmail.com" class="form-control" required id = "email"  onchange="email_validate(this.value);" />
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="essn" style="margin-left:10px">เลขบัตรประชาชน/passport<font color="red"> *</font></label>
                                <input type="id" name="essn" placeholder="1549900XXXXXX" class="form-control" required minlength="7" maxlength="13" id = "pass1" style="margin-left:10px">
                            </div>
                        </div>

                        <!-- country and nationality -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="country">ประเทศ<font color="red"> *</font></label>
                                <div>
                                    <select name="country" class="form-control" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');" id="field_terms">
                                        <option value="">-------------------------ประเทศ-------------------------</option>
                                        <option value="TH">Thailand</option>
                                        <option value="0000">------------------------------------------------------------</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, The Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and Mcdonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic Of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Democratic People's Republic of Korea</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="nationality" style="margin-left:10px">สัญชาติ<font color="red"> *</font></label>
                                <input type="text" name="nationality" placeholder="Thai" class="form-control" autofocus required id = "txt" onkeyup = "Validate(this)" style="margin-left:10px">
                            </div>
                        </div>	

                        <!-- gender -->
                        <div class="row">
                            <label>เพศ<font color="red"> *</font></label>
                            <div class="col-sm-12 form-group">
                                <div class="col-sm-3">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" id="maleRadio" value="M" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');" id="field_terms">ชาย
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" id="femaleRadio" value="F">หญิง
                                    </label>
                                </div> 
                            </div>
                        </div>	

                        <!-- form2 -->
                        <br><center><h1 class="">2.กรอกข้อมูลติดต่อ</h1></center><br>

                        <!-- phone and address -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="tel">โทรศัพท์<font color="red"> *</font></label>
                                <input type="text" name="phone" placeholder="08X-XXXXXXX" class="form-control" autofocus required id="phone" maxlength="10" onkeyup="validatephone(this);">
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="address" style="margin-left:10px">ที่อยู่<font color="red"> *</font></label>
                                <input type="text" name="address" placeholder="111/1 หมู่ 1 ต.สุเทพ อ.เมือง จ.เชียงใหม่" class="form-control" autofocus required id = "txt" onkeyup = "Validate(this)" style="margin-left:10px">
                            </div>
                        </div>	

                        <!-- province and postcode -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="province">จังหวัด<font color="red"> *</font></label>
                                <input type="text" name="province" placeholder="เชียงใหม่" class="form-control" autofocus required id = "txt" onkeyup = "Validate(this)">
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="postcode" style="margin-left:10px">รหัสไปรษณีย์<font color="red"> *</font></label>
                                <input type="text" name="postcode" placeholder="50300" class="form-control" autofocus required id="postcode" maxlength="5" onkeyup="validatephone(this);" style="margin-left:10px">
                            </div>
                        </div>

                        <!-- emergency_contact_name and emergency_contact_phone -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="Emergency Contacts">ผู้ติดต่อกรณีฉุกเฉิน<font color="red"> *</font></label>
                                <input type="text" name="emergency_contact_name" placeholder="ขวัญชัย จงกล" class="form-control" autofocus required id = "txt" onkeyup = "Validate(this)">
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="Emergency number" style="margin-left:10px">เบอร์ติดต่อกรณีฉุกเฉิน<font color="red"> *</font></label>
                                <input type="text" name="emergency_contact_phone" placeholder="08X-XXXXXXX" class="form-control" autofocus required id="phone" maxlength="10" onkeyup="validatephone(this);" style="margin-left:10px">
                            </div>
                        </div>	

                        <!-- form3 -->
                        <br><center><h1 class="">3.กรอกข้อมูลสุขภาพ</h1></center><br>

                        <!-- disease and allergic_drug -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="disease">โรคประจำตัว</label>
                                <input type="text" name="disease" placeholder="หอบหืด" class="form-control" autofocus>
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="allergic_drug" style="margin-left:10px">การแพ้ยา</label>
                                <input type="text" name="allergic_drug" placeholder="แพ้ยาแก้แพ้" class="form-control" autofocus style="margin-left:10px">
                            </div>
                        </div>	

                        <!-- disease and allergic_drug -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="medicine">ยาที่ใช้ประจำ</label>
                                <input type="text" name="medicine" placeholder="ยาแก้หอบหืด" class="form-control" autofocus>
                            </div>
                            <div class="col-sm-6 form-group" >
                                <label for="blood" style="margin-left:10px">กรุ๊ปเลือด<font color="red"> *</font></label>
                                <div>
                                    <select name="blood" class="form-control" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');" id="field_terms" style="margin-left:10px">
                                        <option value="">--BLOOD--</option> 
                                        <option>O</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- form4 -->
                        <br><center><h1 class="">4.กรอกข้อมูลการแข่งขัน</h1></center><br>

                        <!-- disease  -->
                        <div class="row">
                            <label>ประเภท<font color="red"> *</font></label>
                            <div class="col-sm-12 form-group">
                                <div class="col-sm-12">
                                    <?php 
                                        if(!empty($row['flag_full'])){
                                    ?>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio"  name="flag" id="fullmarathonRadio" value="1" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');">Fullmarathon
                                        </label>
                                    </div>
                                    <?php 
                                        }
                                        if(!empty($row['flag_half'])){
                                    ?>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="flag" id="halfmarathonRadio" value="2">Halfmarathon
                                        </label>
                                    </div>
                                    <?php 
                                        }
                                        if(!empty($row['flag_mini'])){
                                    ?>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="flag"  id="minimarathonRadio" value="3">Minimarathon
                                        </label>
                                    </div>
                                    <?php 
                                        }
                                        if(!empty($row['flag_fun'])){
                                    ?>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="flag" id="funrunRadio" value="4">Funrun
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!-- type_shirt -->
                        <?php if( $row['shirtimg1'] != "none" or $row['shirtimg2'] != "none" ){ ?>
                        <div class="form-group">
                            <label>รูปแบบเสื้อ<font color="red"> *</font></label>
                            <div class="col-sm-12">
                                <div class="row">
                                    <?php if( $row['shirtimg1'] != "none"){?>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" id="longRadio" name="type_shirt" value="1" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');">แบบที่ 1
                                        </label> 
                                        <img id="myImg" alt="แบบที่ 1"src="<?=$row['shirtimg1']?>" width="300" height="200">
                                    </div>
                                    <?php 
                                        }
                                        if( $row['shirtimg2'] != "none"){
                                    ?>
                                    <div class="col-sm-6">  
                                        <label class="radio-inline">
                                            <input type="radio"  id="shortRadio" name="type_shirt" value="2">แบบที่ 2
                                        </label>
                                        <!-- <img id="myImg" src="picture/longarm.jpg" alt="" width="300" height="200"> -->
                                        <img id="myImg1" alt="แบบที่ 2" src="<?=$row['shirtimg2']?>" width="300" height="200">
                                    </div>
                                    <?php } ?> 
                                </div>
                            </div>
                            <center><font color="red"> * คลิ๊กที่รูปเพื่อดูรูปขนาดใหญ่</font></center>
                        </div>   

                        <!-- disease and allergic_drug -->
                        <div class="row">
                            <label>ไซต์เสื้อ<font color="red"> *</font></label>
                            <div class="col-sm-12 form-group">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" id="SSRadio" name="size" value="1" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');">SS
                                        </label>
                                    </div>
                                    <div class="col-sm-4">  
                                        <label class="radio-inline">
                                            <input type="radio"  id="SRadio" name="size" value="2">S
                                        </label>
                                    </div>
                                    <div class="col-sm-4">  
                                        <label class="radio-inline">
                                            <input type="radio"  id="MRadio" name="size" value="3">M
                                        </label>
                                    </div>
                                    <div class="col-sm-4">  
                                        <label class="radio-inline">
                                            <input type="radio"  id="LRadio" name="size" value="4">L
                                        </label>
                                    </div>
                                    <div class="col-sm-4">  
                                        <label class="radio-inline">
                                            <input type="radio"  id="XLRadio" name="size" value="5">XL
                                        </label>
                                    </div>
                                    <div class="col-sm-4">  
                                        <label class="radio-inline">
                                            <input type="radio"  id="XXLRadio" name="size" value="6">XXL
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <?php } ?>

                        <!-- disease and allergic_drug -->
                        <div class="row">
                            <label>ท่านสะดวกรับเสื้อด้วยวิธีไหน<font color="red"> *</font></label>
                            <div class="col-sm-12 form-group">
                                <div class="col-sm-12">
                                    <label class="radio-inline">
                                        <input type="radio" id="longRadio" name="getting" value="0" required onchange="this.setCustomValidity(validity.valueMissing ?  : '');">รับด้วยตัวเองที่สถานที่จัดงาน
                                    </label>
                                </div>
                                <div class="col-sm-12">  
                                    <label class="radio-inline">
                                        <input type="radio"  id="shortRadio"  name="getting" value="1">ส่งไปรษณีย์ (ค่าส่ง 100 บาท)
                                    </label>
                                </div>
                            </div>
                        </div>					
                    </div>
                    <!-- /.form-group-button-->
                    <div class="form-group" style="margin-bottom:30px;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <br><br><a href="register2.5.1.php"><button type="submit" class="btn">บันทึก</button></a>
                            </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <!-- The-Modal-img1 -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <!-- The-Modal-img2 -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption"></div>
    </div>

    <!--script-modal-->
    <script src="javascript/imgModal.js"></script>
    <script src="javascript/java.js"></script> 

    <?php require_once("footer.php"); ?>      