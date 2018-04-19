<?php
$sum = $_GET['pay']
?>

<!doctype html>
<?php require_once("header.php"); ?>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/confirmpayment.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="row">
    <form>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-bottom:20px">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1><center><strong>ยืนยันการโอนเงิน</strong></center></h1>
                </div>
                <div class="panel-body">
                <div class="row">
                    <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Tracking Number : </td>
                                <td>YYY-1234</td>
                            </tr>
                            <tr>
                                <td>วันที่สมัคร : </td>
                                <td>DD/MM/YYYY</td>
                            </tr>
                            <tr>
                                <td>Time :</td>
                                <td>HH : MM : SS</td>
                            </tr>
                            <tr>
                                <td>จำนวนเงินรวม :</td>
                                <td>XXX.XX บาท</td>
                            </tr>
                            <tr>
                                <td>ข้อมูลธนาคารสำหรับการโอน</td>
                                <td>ชื่อธนาคาร : <br><br> ประเภทบัญชี : <br><br> หมายเลขบัญชี: <br><br> ชื่อบัญชี : </td>
                            </tr>
                            <tr>
                                <td>จำนวนเงินที่โอน/ฝาก *</td>
                                <td> XXXX.XXX บาท </td>
                            </tr>
                            <tr>
                                <td>วันที่ บนใบโอนเงิน/ฝากเงิน*</td>
                                <td>
                                    <div class="col-sm-9">
                                        <select name="birthDate" class="form-control">
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
                                    </div><br><br>
                                    <div class="col-sm-9">
                                        <select name="birthDate" class="form-control">
                                            <option value="">--MM--</option> 
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
                                    </div><br><br>
                                    <div class="col-sm-9">
                                        <select name="birthDate" class="form-control">
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
                                    </div><br><br> 
                                </td>
                            </tr>
                            <tr>
                                <td>เวลา บนใบโอนเงิน/ฝากเงิน*</td>
                                <td>
                                    <div class="col-sm-9">
                                        <select name="birthDate" class="form-control">
                                            <option value="">--HH--</option> 
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
                                        </select>
                                    </div> <br><br>
                                    <div class="col-sm-9">
                                        <select name="birthDate" class="form-control">
                                            <option value="">--MM--</option> 
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
                                            <option>32</option>
                                            <option>33</option>
                                            <option>34</option>
                                            <option>35</option>
                                            <option>36</option>
                                            <option>37</option>
                                            <option>38</option>
                                            <option>39</option>
                                            <option>40</option>
                                            <option>41</option>
                                            <option>42</option>
                                            <option>43</option>
                                            <option>44</option>
                                            <option>45</option>
                                            <option>46</option>
                                            <option>47</option>
                                            <option>48</option>
                                            <option>49</option>
                                            <option>50</option>
                                            <option>51</option>
                                            <option>52</option>
                                            <option>53</option>
                                            <option>54</option>
                                            <option>55</option>
                                            <option>56</option>
                                            <option>57</option>
                                            <option>58</option>
                                            <option>59</option>
                                            <option>60</option>
                                        </select>   
                                    </div>    
                                </td>
                            </tr>
                            <tr>
                                <td>ภาพถ่ายใบโอน</td>
                                <td>
                                    <button><input type="file" multiple></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
</div>

<center>
<a href="add/sucess.php?pay=<?=$sum?>"><button type="button" class="btn">ส่งข้อมูล</button></a>
</center><br>

<?php require_once("footer.php"); ?>  