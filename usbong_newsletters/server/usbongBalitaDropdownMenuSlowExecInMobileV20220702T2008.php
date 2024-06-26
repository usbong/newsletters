<!--
  Copyright 2021~2022 SYSON, MICHAEL B. 
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20220702; from 20220701
  @website address: http://www.usbong.ph
  Input:
  1) Lessons-learned HTML TEXT FILE
  Output:
  1) Usbong Balita viewable using Computer/Mobile Web Browsers  
  
  Computer Browser: Website Address (Example):
  1) local: http://localhost/usbong_newsletters/server/usbongBalita.php
  2) public internet: http://store.usbong.ph/server/usbongBalita.php
  
  Recommended References:
  1) https://www.w3schools.com/howto/howto_css_table_center.asp;
  //last accessed: 20210703
  2) https://www.asahi.com/; last accessed: 20220626
  
  3) https://www.1101.com/home.html; last accessed: 20220626
  
  4) AMAZON.COM Kindle eBOOK Reader
  //TO-DO: -add: mobile responsiveness via reusing USBONG STORE computer instructions received from ZENT as paid sub-contractor  
  reminder: pay: to learn technique for USBONG to share lessons-learned with PUBLIC
  
  //TO-DO: -update: newsletter pages system to be more organized  
-->
<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <!-- <meta charset="utf-8"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Reference: Apache Friends Dashboard index.html -->
    <!-- "Always force latest IE rendering engine or request Chrome Frame" -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <style type="text/css">
	/**/
	                    body
                        {
							font-family: Arial;
							
							/*	//removed by Mike, 20220701
							  font-size: 16pt;
							*/

							color: rgb(30,30,30); /*rgb(120,63,4);*/
							font-weight: bold;

							/* This makes the width of the output page that is displayed on a browser equal with that of the printed page. */
							/* Legal Size; Landscape*/							

							/* //removed by Mike, 20220627 */
							/*width: 670px;*//*860px;*//* 802px;*//* 670px */

							/* removed by Mike, 20210105 */
							/* use zoom 67% scale*/
							/* at present, command not support in Mozilla Firefox */				
/*							
							zoom: 67%; 	
							transform: scale(0.67);
							transform-origin: 0 0;	
*/							

							/* //edited by Mike, 20220630
							   //note: faster to read, without NEED to move head from left to right; */
							/*
							width: 520px;
							*/
							width: 50%;

							padding-left: 5%;
							
							/* //added by Mike, 20220628 
							   //reference: https://www.w3schools.com/cssref/css3_pr_text-justify.asp;
							   //last accessed: 20220628
							*/
							
							text-align: justify;
							text-justify: inter-word;							
                        }
									
						/* TO-DO: -update: this to include body */
						body.mobileBody {
							/* added by Mike, 20220627 
							  //reference: https://github.com/usbong/UsbongStore/blob/master/usbong_store/application/views/templates/style_v2.php;
							  last accessed: 20220627							  
							*/
							width: 100%; /*max-width*/
							position: relative;	
							
							padding: 2%;
						}
									
						div.formTitle
						{
							text-align: right;
/*							font-weight: bold;*/	
							font-size: 12pt;
							color: rgb(0,0,0); /* black */
						}
						
						div.newsletterTitle
						{
							text-align: center;
							font-size: 16pt;
							font-weight: bold;
						}

						div.newsletterSubTitle
						{
							text-align: center;
							font-size: 12pt;
							color: #222222; /* rgb(0,0,0); //black */
							font-weight: bold;
						}
						
						div.newsletterDate
						{
							text-align: right;
							font-size: 12pt;
							font-weight: bold;
							color: #cd580f /* #e69138 orange */
						}

						div.copyright
						{
							text-align: center;
							font-size: 10pt;
							color: rgb(0,0,0); /* black */
						}
					
						h3
						{
							color: rgb(0,0,0); /* black */							
						}
					
						h4
						{
							color: rgb(64,64,64);	
						}

						h5
						{							
							color: rgb(85,43,0);	
						}
						
						b
						{
							color: rgb(0,0,0); /* from black to white */ 							
						}

						img.Image-companyLogo {
							/*  //edited by Mike, 20220630
								//TO-DO: -reverify: this
							*/
							max-width: 100%; /*60%;*/
							height: auto;
							float: left;
							text-align: center;
							padding-left: 20px;
							padding-top: 10px;
						}

						img.Image-moscLogo {
							max-width: 20%;
							height: auto;
							float: left;
							text-align: center;
						}
						
						img.newsletterImage {
							max-width: 100%;
							height: auto;
							border: 1px solid #ab9c7d;
						}

						img.noteImage {
							max-width: 100%;
							height: auto;
							border: 1px solid #ab9c7d;
						}
						
						div.newsletterImageTextDiv {
							text-align: center;							
							font-weight: bold;
						}
						
						blockquote.usbongBlockquote {
							background: #eee;
							color: rgb(40,40,40); /* from black to white */ 
							margin:0;		
							border-left: 5px solid #ab9c7d;
							padding: 2px;					
							padding-left: 3%;
							
							/* text-indent: 5%;*/

						}

/*
						Reference: https://www.w3schools.com/css/css_text_spacing.asp;
						last accessed: 20220626
*/
						div.textDoubleSpacedDiv {
							line-height: 2;
							font-size: 14pt;							
						}
						

						
						table.imageTable
						{
							width: 100%;
						}						

						td.imageTableColumn
						{
							border: 1px solid #ab9c7d;
						}

						table.noteTable
						{
							border: 1px solid #ab9c7d;
							width: 90%;
							margin: 0px;
							padding: 0px;
						}

						td.noteTableImageColumn
						{
							width:10%;
							vertical-align: top;
						}
				
						td.noteTableTextColumn
						{
							width:100%;
							text-align: left;							
							float: left;
							margin:0;
							padding:0;
							display: inline-block;
							font-weight: bold;							
							font-size: 11pt;
							border: 1px solid #ab9c7d;							
						}
				
						table.tablePart2
						{
							width: 100%;
/*							border: 1px solid #ab9c7d;		
*/
						}						

						table.tablePart3
						{
							width: 100%;
/*							border: 1px solid #ab9c7d;		
*/
						}	

						a.webServiceLink
						{
							color: rgb(51,145,23);
							font-weight: bold;							
						}
						
						a.menuLink
						{
							background-color: rgb(146,208,80);
							color: rgb(64,64,64);
							text-decoration: none;
							width: 100px;
						}

						a.menuLink:hover
						{
							color: rgb(64,64,64);
							text-decoration: underline;
						}

						table.menuTable
						{
							width: 50%;
							border: 1px solid rgb(146,208,80);
							border-collapse: collapse;							 
							font-size: 10pt;
							
							/* Commands to Center-Align Table */
							margin-left: auto;
							margin-right: auto;
						}
						
						table.searchTable
						{
							width: 100%;
							padding-left: 60px;
						}

						tr.menuRow
						{
							background-color: rgb(146,208,80);
							text-align: center;							
							font-weight: 1;
						}
						
						td.menuColumn
						{
							background-color: rgb(146,208,80);
							text-align: center;							
						}

						td.menuColumn:hover
						{
							background-color: rgb(121,176,62);
							text-align: center;							
						}

						tr.rowEvenNumber {
							background-color: #dddddd; <!--#dddddd; = gray #95b3d7; = sky blue; use as row background color-->
							border: 1pt solid #00ff00;		
						}

						td.tableHeaderColumnPart1
						{
							text-align: left;
/*							font-weight: bold;
*/
						}						

						td.tableHeaderColumnPart2
						{
							border: 1px solid #000000;		
							text-align: center;
/*							font-weight: bold;
*/
						}						

						td.tableHeaderColumnPart3dot1
						{
							text-align: left;
/*							font-weight: bold;
*/
							width: 70%;							
						}						

						td.tableHeaderColumnPart3dot2
						{
							text-align: left;
/*							font-weight: bold;
*/
							width: 30%;							
						}						


						td.column
						{
							border: 1px dotted #000000;		
							text-align: center;
						}						

						td.columnFee
						{
							border: 1px dotted #000000;		
							text-align: right;
						}

						td.columnFeeTotal
						{
							border: 1px dotted #000000;		
							text-align: right;
							font-size: 14pt;
							font-weight: bold;
						}
						

						td.columnBorderBottom
						{
							border: 1px dotted #ab9c7d;		
							border-bottom: 4px double black;
							text-align: center;
						}						

						td.columnBorderBottomDotted
						{
							border: 1px dotted #ab9c7d;		
							border-bottom: 2px dotted black;
							text-align: center;
						}						

						td.columnBorderTopBottom
						{
							border: 1px dotted #ab9c7d;		
							border-top: 2px solid black;
							border-bottom: 4px double black;
							text-align: center;
						}						
						
						td.imageColumn
						{
							width: 45%;
							display: inline-block;
						}						

						td.pageNameColumn
						{
							width: 40%;
							display: inline-block;
							text-align: right;
						}				
						
						td.menuColumn
						{
							width: 10%;
							background-color: #fff;							
						}

					
						input.search-input
						{
							width: 100%;
							max-width: 500px;
														
							resize: none;

							height: 100%;
						}	

						span.spanFileNotFound, span.spanKeyphraseNotFound
						{
							width: 100%;
							padding-left: 60px;
							color: rgb(252,60,3);
						}

						/* //added by Mike, 20220701 
						   //reference: https://www.w3schools.com/howto/howto_css_menu_icon.asp;
						   //last accessed: 20220701
						*/
						div.menuIconDiv {
						  display: inline-block;
						  cursor: pointer;
						}

						.bar1, .bar2, .bar3 {
						  width: 35px;
						  height: 5px;
						  background-color: #333;
						  margin: 6px 0;
						  transition: 0.4s;
						}
						
						/* TO-DO: -reverify: putting MENU BUTTON in LEFT corner to NOT use such left and top percentiles;
						*/
						nav.myMenuNav {
							display: none;
							z-index: 1;
							
							position: absolute; /*relative;*/
							left: 0; /*40%;*/
							top: 0; /*8%;*/									
							width: 10%; /*160px;*/							
						}

						.change .myMenuNav {
						  display: inline-block;
						}
						
    /**/
    </style>
    <title>
      USBONG BALITA
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
    </style>
<!-- //edited by Mike, 20211014
	<base href="http://localhost/usbong_newsletters/" target="_blank">
-->
	<base href="http://store.usbong.ph/" target="_blank">

	<!-- added by Mike, 20220630 -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="fIE_s1RlOUpi0n7Yi2lEawdU_P6W003_QNSF1hKGu1A" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
	  <script>	  
		//added by Mike, 20220701
		function myFunction(x) {
		  //alert ("HALLO");
			
		  //x.classList.toggle("change");

		  //edited by Mike, 20220702
		  //var myMenuNav = document.getElementById("myMenuNavId").style.display="block";		  
		  
		  var myMenuNav = document.getElementById("myMenuNavId");		  
		  
		  //alert(document.activeElement);		  		  
	//	  alert(myMenuNav.style.display+"hallo"); 
		  		  
		  if ((myMenuNav.style.display==="none")) {// or (myMenuNav.style.display==null)) {
			myMenuNav.style.display="block";
		  }		  
		  else if ((myMenuNav.style.display==="block")) {
			myMenuNav.style.display="none";
		  }
		  else { //captures empty value @START
			myMenuNav.style.display="block";
		  }
		} 	  
		
/*		
		//TO-DO: -reverify: this 
		//https://www.w3schools.com/howto/howto_js_mobile_navbar.asp
		//last accessed: 20220702
		//TO-DO: -reverify: this 		
		//https://www.w3schools.com/howto/howto_js_dropdown.asp;
		//last accessed: 20220702
		
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.myMenuNav')) {
    var dropdowns = document.getElementsByClassName("myMenuNav");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('myMenuNav')) {
        openDropdown.classList.remove('myMenuNav');
      }
    }
  }
} 
*/
	  </script>
	  
<!-- edited by Mike, 20220628	  
  <body>
-->
<?php
	//added by Mike, 20220628
	//reference: https://github.com/usbong/UsbongStore/blob/master/usbong_store/application/core/MY_Controller.php;
	//last accessed: 20220628
	function isMobile() {
//		echo "CLIENT USER DETAILS: " . $_SERVER["HTTP_USER_AGENT"];
		
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
	

	if (isMobile()) {		
		echo "<body class='mobileBody'>";
	}
	else {
		echo "<body>";
	}
	

	date_default_timezone_set('Asia/Hong_Kong');
	
	//edited by Mike, 20200726
	//$dateToday = (new DateTime())->format('Y-m-d');
	$dateToday = Date('Y-m-d');

	// connect to the database
	//edited by Mike, 20210813
//	include('usbong-kms-connect.php');

	//Reference: https://stackoverflow.com/questions/16048818/include-php-files-when-they-are-in-different-folders;
	//answer by: AbsoluteƵERØ, 20130416T2355
	//edited: 20171021T0640	
		
	//echo $_SERVER['DOCUMENT_ROOT']; //example output: C:/xampp/htdocs
/*	//removed by Mike, 20210831
	include($_SERVER['DOCUMENT_ROOT'].'/usbong_newsletters/server/usbong-kms-connect.php');
	$mysqli->set_charset("utf8");
*/

	//edited by Mike, 20211012
//	$filename="C:\\xampp\\htdocs\\usbong_kms\\usbongTemplates\\Cashier\\moscGetSalesReportForEndDayLibreOfficeCalc.csv";

	//gets directory where usbongSearch.php file is located
	//example: C:\xampp\htdocs\usbong_newsletters\server
	//echo __DIR__;
	
	//added by Mike, 20211014
	//TO-DO: -add: auto-verify all existing newsletters
/*	//edited by Mike, 20211014
	$path="/server/2021/viewNewsletter202109.php";
	$filename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $path);
*/

//	$result = array();
	$sYearDirectory="/server/2021/";
	
	//edited by Mike, 20211020
//    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory);
    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory, SCANDIR_SORT_DESCENDING);
	
	//added by Mike, 202202302;
//--
	//added by Mike, 20220304	
	//TO-DO: -remove: metadata, e.g. text/css, in search output

	//edited by Mike, 20220305
	//TO-DO: -reverify: added filename in search input

	
/* 	//edited by Mike, 20220304	
	//auto-add until current YEAR
	$sYearDirectoryPartTwo="/server/2022/";
    $arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));
*/
	//echo idate("Y");
	//edited by Mike, 20220619
	$iYearCount=2022; //2021;
	$iCurrentYear = idate("Y");
	while ($iYearCount<=$iCurrentYear) {
		$sYearDirectoryPartTwo="/server/".$iYearCount."/";

		$arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));
		
		$iYearCount++;
	}

//    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING);

//--

	$usbongSearchBasePath=str_replace('/', DIRECTORY_SEPARATOR, "/server/usbongSearch.php");
	
	//added by Mike, 20211013; edited by Mike, 20211014
	//note: update this
//	$sWebAddressBasePath = "http://localhost";
	//edited by Mike, 20220304	
	$sWebAddressBasePath = "http://store.usbong.ph";
?>


	<table class="imageTable">
	  <tr>
		<td class="imageColumn">			
		<a class="menuLink" target="_blank" href="http://www.usbong.ph">		
			<img class="Image-companyLogo" src="assets/images/usbongLogo.png">
		</a>	
		</td>	
		<td class="pageNameColumn">
			<div class="formTitle">
				<b>BALITA</b>
			</div>		
		</td>
		<td class="menuColumn">
			 <div class="menuIconDiv" onclick="myFunction(this)">
			  <div class="bar1"></div>
			  <div class="bar2"></div>
			  <div class="bar3"></div>
			</div> 		
		</td>
	</table>
	<br/>
<!--	<b>DATE:</b><?php echo " ".$dateToday; ?>
-->
	
<!-- //edited by Mike, 20220630 
	 //TO-DO: -reverify: this 
-->	
	
	<!-- menu bar -->
<!-- edited by Mike, 20220630	
	<table class="menuTable">
	  <tr class="menuRow">
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/excel">		
				Computer
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/Training">		
				Services
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/contact">		
				Contact
			</a>
		</td>
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/team">		
				Team
			</a>
		</td>			
	</table>
-->


<!-- Category Header -->
<!-- TO-DO: -reverify: this -->
<!--
<div class="row Image-offers">	
-->	

<nav id="myMenuNavId" class="myMenuNav navbar-static-top categories-navbar">
    <div id="myMenuDivId" class="container-fluid Header-container">
        <ul class="nav navbar-nav container-navbar">
            <li><a class="menuLink" target="_blank" href="https://www.usbong.ph/excel">COMPUTER</a></li>
            <li><a class="menuLink" target="_blank" href="https://www.usbong.ph/Training">SERVICES</a></li>
            <li><a class="menuLink" target="_blank" href="https://www.usbong.ph/contact">CONTACT</a></li>            
			<li><a class="menuLink" target="_blank" href="https://www.usbong.ph/team">TEAM</a></li>			
        </ul>
    </div>
</nav>

	
	
	<div class="textDoubleSpacedDiv">
	<h3>
	<a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/DA3S15330231.html?iref=comtop_Opinion_05">
		「（天声人語）書店消失」</a> 
	</h3>				
last accessed: 20220622<br/>	
07:14~07:37; Ginugol na Panahon: 23MIN~<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
（天声人語）書店消失
</p>
</blockquote>
(Tinig ng Langit; Salaysay ng Tao)<br/>
Pagkawala ng mga Tindahan ng Aklat<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    有料会員記事
</p>
</blockquote>
Sulatin sa nagbabayad na kasapi<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    2022年6月21日 5時00分
</p>
</blockquote>
2022-06-21T05:00<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
夢に本屋が出てきたことがある。書棚で何かを探しているのだが、そこはむかし郷里にあった小さな店なのだ。子どもの頃から通い、マンガ雑誌の発売日に駆け込んでいた。文庫本の棚では星新一の面白さに出会った▼自分のなかでは本屋の原型なのかもしれない。これからの子どもたちには縁のない話になるだろうか。身の回りか…
</p>
</blockquote>
    
May lumabas na Tindahan ng Aklat sa aking panaginip. Isa itong maliit na tindahan na naroon noon sa pook ng aking kinalakihan; May hinahanap akong kung ano sa lagayan ng mga aklat. Simula pa noong dumaan ako sa aking kabataan, hinahabol ko na ang araw ng bentahan ng Magasin ng Komiks (MANGA). May natagpuan akong nakaaaliw kay SEI SHINICHI (Manunulat; Bituin, Bagong Isa) sa lagayan ng mga aklat ng malaking lalagyan ng mga sulatin. Sa loob-loob ko, marahil ito ang pinagmulang hugis ng Tindahan ng Aklat. Mawawala kaya ang usaping ganito sa mga kabataan mula ngayon? Sa paligid...
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    この記事は有料会員記事です。残り454文字有料会員になると続きをお読みいただけます。
</p>
</blockquote>
Sa nagbabayad na kasapi ang sulating ito. May natitira pang 454 na titik. Kapag naging nagbabayad na kasapi na po kayo, maaari niyo na pong mabasa ang kasunod.
	</div>

	<br/>
	<br/>
	<div class="copyright">
		<span>
			© SYSON, MICHAEL B. & USBONG. 2011~<?php echo date("Y");?>. All rights reserved.<br/>
			<a class="webServiceLink" target="_blank" href="https://creativecommons.org/licenses/by/4.0/">
				Creative Commons Attribution License BY 4.0
			</a>
		</span>
	</div>		 
  </body>
</html>