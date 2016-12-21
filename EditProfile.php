<?php
	session_start();
	
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
 jQuery(document).ready(function() {
  var sideHeight = jQuery('.row').height();
  jQuery('.content').css('height', sideHeight + 'px');
});
</script>
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {min-height: 300px;} 
	
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
	
/* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
	
	.bottompad 
		{
      margin-bottom: 50px;
}

ul.nav > li > a:hover {
	background-color: #6A5ACD;
	color: #FFFFFF;
	border-style: none;
}
</style>


<script language="JavaScript1.2">

var howOften = 6; //number often in seconds to rotate
var howOften2 = 6;
var howOften3 = 6;
var current = 0; //start the counter at 0
var current2 = 3;
var current3 = 5;
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<a href='http://onf.coop/' ><img alt='image0 (9K)' src='Ozark.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[1]="<a href='http://www.thefarmerstablecafe.com/'><img alt='image1 (9K)' src='Farmerstable.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[2]="<a href='http://arsagas.com/'><img alt='image2 (9K)' src='Arsagas.png' height='200' width='200' border='0' /></a>"; //a linked image
	items[3]="<a href='http://www.nwaescaperoom.com/'><img alt='image3 (9K)' src='Escaperoom.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[4]="<a href='https://khanaindiangrill.com/'><img alt='image4 (9K)' src='Khana.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[5]="<a href='http://stonemillbread.net/'><img alt='image5 (18K)' src='Stonemill.png' height='200' width='200' border='0' /></a>"; //a linked image
	items[6]="<a href='http://puritancoffeebeer.com/'><img alt='image4 (9K)' src='Puritan.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[7]="<a href='https://www.fayettechill.com/'><img alt='image5 (18K)' src='Fayettechill.png' height='200' width='200' border='0' /></a>"; //a linked image
	
   
function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);
}

function rotater2() {
	if(document.layers) {
        document.placeholderlayer2.document.write(items[current2]);
        document.placeholderlayer2.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv2").innerHTML=items[current2]
        if(document.all)
            placeholderdiv2.innerHTML=items[current2];

    current2 = (current2==items.length-1) ? 0 : current2 + 1; //increment or reset
    setTimeout("rotater2()",howOften2*1000);
}

function rotater3() {
	if(document.layers) {
        document.placeholderlayer3.document.write(items[current3]);
        document.placeholderlayer3.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv3").innerHTML=items[current3]
        if(document.all)
            placeholderdiv3.innerHTML=items[current2];

    current3 = (current3==items.length-1) ? 0 : current3 + 1; //increment or reset
    setTimeout("rotater3()",howOften3*1000);
}

function rotaterall() {
	rotater();
	rotater2();
	rotater3();
	}


window.onload=rotaterall;

</script>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h3>My TweetBook</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="MyHomePage.php">Home</a></li>
        <li><a href="ProfileInfo.php">Profile Info</a></li>
        <li class="active"><a href="EditProfile.php">Edit Profile</a></li>
        <li><a href="MyWall.php">My Wall</a></li>
      </ul><br>
      <form method="get" action="./Pageview.php" enctype="multipart/form-data">
      <div class="input-group">
        <input type="text" class="form-control" name="searchDisplayName" placeholder="Search Posts by username/DisplayName"/>
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
	  </form>
    <br><h4>U of A Links</h4>
	   <ul class="nav nav-pills nav-stacked">
        <li><a href="http://www.uark.edu/">University of Arkansas</a></li>
        <li><a href="www.arkansasrazorbacks.com/">Razorback Athletics</a></li>
        <li><a href="https://uaconnect.uark.edu/">UAConnect</a></li>
        <li><a href="https://learn.uark.edu/">UARK Blackboard</a></li>
      </ul><br>
	</div>
  <div class="col-sm-6 bottompad">
    <form  method="post" action="./EditProfileInfoHandel.php" enctype="multipart/form-data">	
				<h1 align="center">Edit Profile</h1>
				<br>
				<?php
	$username=$_SESSION["username"];
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$sql = "Select Password,DisplayName,DateOfBirth,Gender,City,State,Country,Email,RelStatus,PubOrPri,IndOrBusnot from UserInfo where Username='$username'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	?>
				
   			    <div class="form-group">
					<label>Password</label>
					<input type="password" name="PasswordInput" class="form-control" id="" value="<?=$row["Password"]?>"/>
				</div>
				
				<div class="form-group">
					<label>Display Name</label>
					<input type="text" name="DisplayNameInput" class="form-control" id="" value="<?=$row["DisplayName"]?>"/>
				</div>
				
				<div class="form-group">
                <label class="form-label">Date of Birth</label>  
                <input id="Dateofbirth" class="form-control" type="date" name="DateofbirthInput" value="<?=$row["DateOfBirth"]?>"/>				
                </div>  
				
				<div class="form-group">
				<label>Do you wish your profile / tweets to be Public &nbsp; &nbsp; </label> 
				<input type="radio" name="puborpriInput" value="Public"/>
				<label>&nbsp; &nbsp; or Private &nbsp; &nbsp;  </label>
				<input type="radio" name="puborpriInput" value="Private">
				</div>
		

                 <div class="form-group">
					<label class="form-label" for="selectbasic">Relationship Status</label>
                    <select id="selectbasic" name="relstatInput" class="form-control" value="<?=$row["RelStatus"]?>">
					<option>Select</option>
                        <option value="Married">Married</option>
                       <option value="Commited">Commited</option>
                        <option value="Single">Single</option>
                           </select>
				</div>				
								
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" name="emailInput" class="form-control" id="" value="<?=$row["Email"]?>"/>
				</div>
				
				<div class="form-group">
					<label>City</label>
					<input type="text" name="cityInput" class="form-control" id="" value="<?=$row["City"]?>"/>
				</div>
				
				<div class="form-group">
					<label>State</label>
					<input type="text" name="stateInput" class="form-control" id="" value="<?=$row["State"]?>"/>
				</div>

				<div class="form-group">
                    <label class="form-label" for="selectbasic">Country</label>
                        <select id="selectbasic" name="countryInput" class="form-control"<?=$row["Country"]?>>
                            <option value="">Select a country</option>
                            <option value="AF">Afghanistan</option>
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
                            <option value="BA">Bosnia and Herzegowina</option>
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
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote d'Ivoire</option>
                            <option value="HR">Croatia (Hrvatska)</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
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
                            <option value="FX">France, Metropolitan</option>
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
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard and Mc Donald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran (Islamic Republic of)</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
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
                            <option value="MO">Macau</option>
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
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint LUCIA</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia (Slovak Republic)</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SH">St. Helena</option>
                            <option value="PM">St. Pierre and Miquelon</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
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
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (U.S.)</option>
                            <option value="WF">Wallis and Futuna Islands</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="YU">Yugoslavia</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
				</div>
<?
mysql_close();
?>
				<br>
				<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button> 
				</div>
	 <div class="clearfix visible-lg"></div>
	 </form>
	  </div>
	  
	  <div class="col-sm-3 sidenav navbar-right">
   <form method="get" action="./Logout.php" enctype="multipart/form-data">
   <button type="submit" style="background-color: #00BFFF; float: right" class="btn btn-default btn-sm navbar-right">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button><br><br>
	</form>
      <h4 class="dark-grey"><center>Support Local Fayetteville Businesses<center></h4><br>
<center><layer id="placeholderlayer"></layer><div id="placeholderdiv"></div></center><br>
<center><layer id="placeholderlayer2"></layer><div id="placeholderdiv2"></div></center><br>
<center><layer id="placeholderlayer3"></layer><div id="placeholderdiv3"></div></center>
 <div class="clearfix visible-lg"></div>
      </div>
 </div>	
</div>

<footer class="navbar-default navbar-fixed-bottom" style="background-color: #555; color: white; padding: 15px;">
  <div class="container-fluid">
  <h4>UARKTweetBook.com</h4>
<div class="clearfix visible-lg"></div>  
  </div>
</footer>

</body>
</html>