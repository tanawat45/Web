<!doctype html>
<html lang="en">
<?php require_once("header.php"); ?>
    
    <!-- process step bar -->
    <div class="container">
        <ul class="progressbar">
            <li class="active">ลงทะเบียน</li>
            <li>ตรวจสอบ</li>
            <li>ยืนยันข้อมูล</li>
            <li>ชำระเงิน</li>
            <li>เสร็จสิ้น</li>
        </ul>
    </div>


    <!-- write information -->
    <form>
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <div>
                <label for="inputCity">1.กรอกข้อมูลผู้เข้าแข่งขัน</label>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">ชื่อ *</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">นามสกุล *</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="">
            </div>
        </div>
        <div class="form-group col-md-3 bg-2"> </div>
            <!-- <div class="form-group col-md-3">
                <label for="inputEmail4">ชื่อ *</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <div class="form-group col-md-6">
                        <label selected>สัญชาติ  *</label>
                        <select id="inputState" class="form-control">
                            <option value="0000"></option>
                            <option value="TH">Thailand</option>
                            <option value="0000">---------------------------------------------------</option>
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
            <div class="form-group col-md-6">
                <label for="inputAddress">นามสกุล</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">ชมรม/ทีม</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">เพศ</label>
                <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>ชาย</label>     
                <label class="checkbox-inline"><input id="checkbox8" type="checkbox"><label for="checkbox8"></label>หญิง</label>
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">ที่อยู่</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div> 
            <div class="form-group col-md-6">
                    <label for="inputState">วันเกิด  *</label>
                        
                            <select class="w3-select w3-white w3-border">
                                <option value="-1"></option> 
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
                            <select class="w3-select w3-white w3-border">
                                <option value="-1"></option> 
                                <option value="0">มกราคม</option>
                                <option value="1">กุมภาพันธ์</option>
                                <option value="2">มีนาคม</option>
                                <option value="3">เมษายน</option>
                                <option value="4">พฤษภาคม</option>
                                <option value="5">มิถุนายน</option>
                                <option value="6">กรกฏาคม</option>
                                <option value="7">สิงหาคม</option>
                                <option value="8">กันยายน</option>
                                <option value="9">ตุลาคม</option>
                                <option value="10">พฤศจิกายน</option>
                                <option value="11">ธันวาคม</option>
                            </select>
                            <select class="w3-select w3-white w3-border">
                                <option value="-1"></option> 
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
            <div class="form-group col-md-3">
                    <label for="inputState">จังหวัด  *</label>
                    <input type="text" class="w3-input w3-border" name="address.province" value="">
            </div> 
            <div class="form-group col-md-3">
                    <label for="inputState">รหัสไปรษณีย์ *</label>
                    <input type="text" class="w3-input w3-border" name="address.zip" value="">
            </div> 
            <div class="form-group col-md-6">
                <label for="inputAddress">เลขบัตรประชาชนหรือพาสปอร์ต *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">ประเทศ *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">อีเมลล์ *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">ผู้ติดต่อฉุกเฉิน *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">โทรศัพท์ *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">โทรศัพท์ฉุกเฉิน *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
        </form>
		
		<!-- write information -->
    <!-- <form>
        <div class="form-group col-md-12">
            <label for="inputCity">3. รุ่น </label>
        </div>
        <div class="form-group col-md-6">
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>ชาย 16-19 (590 บาท)</label>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">4. ข้อมูลเพิ่มเติม </label>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity" style="color:red">กรุณาเลือกขนาดเสื้อ * </label>
        </div>
        <div class="form-group col-md-12">
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>2S-34"*25"</label>     
            <label class="checkbox-inline"><input id="checkbox8" type="checkbox"><label for="checkbox8"></label>S-36"*26"</label>
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>M-38"*27"</label>
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>L-40"*28"</label>
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>XL-42"*29"</label>
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>2XL-44"*30"</label>
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>3XL-46"*30"</label>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">ช่องทางรับเสื้อและเบอร์วิ่ง * </label>
        </div>
        <div class="form-group col-md-12">
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>รับด้วยตัวเองที่งาน</label>     
            <label class="checkbox-inline"><input id="checkbox8" type="checkbox"><label for="checkbox8"></label>ส่งไปรษณีย์(+100 บาท)</label>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">ทราบข่าวสารการแข่งจากแหล่งใด * </label>
        </div>
        <div class="form-group col-md-12">
            <label class="checkbox-inline"><input id="checkbox7" type="checkbox"><label for="checkbox7"></label>Facebook</label>     
            <label class="checkbox-inline"><input id="checkbox8" type="checkbox"><label for="checkbox8"></label>Webside</label>
            <label class="checkbox-inline"><input id="checkbox8" type="checkbox"><label for="checkbox8"></label>จากเพื่อน</label>
        </div>
    </form>  -->

    <div class="carousel-inner">
            <div class="item active container" > 
                <button onclick="location.href='registerrunner2_1.html'" class="btn" >ถัดไป</button>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>