<!--
  Copyright 2021~2023 SYSON, MICHAEL B. 
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20230505; from 20230504
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
  
  //TO-DO: -add: LINE NUMBERS;
  
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
	
    <style type="text/css">
	/**/
	
 						body
                        {
							/*font-family: Tahoma, sans-serif;*/ /*Arial*
							
							/*	//removed by Mike, 20220701
							  font-size: 16pt;
							*/

							color: rgb(30,30,30); /*rgb(120,63,4);*/
							
							/*font-weight: bold;*/

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
							
							/* //edited by Mike, 20221208
							width: 50%;
							*/	
							width: 100%;
							height: 100%;

/*
							padding-left: 5%;
*/							
							/* //added by Mike, 20220628 
							   //reference: https://www.w3schools.com/cssref/css3_pr_text-justify.asp;
							   //last accessed: 20220628
							*/
							
							text-align: justify;
							text-justify: inter-word;							
							
							
							-webkit-user-select: none; /* Safari */
							-ms-user-select: none; /* IE 10 and IE 11 */
							user-select: none; /* standard syntax */
							
							transform: scale(1.0);
							/*touch-action: none;*/
                        }
                        	
	                    div.mainTextDiv
                        {
 /*                       
							font-family: Arial;
*/
							
							/*	//removed by Mike, 20220701
							  font-size: 16pt;
							*/

							color: rgb(30,30,30); /*rgb(120,63,4);*/
							
							/*font-weight: bold;*/

							width: 100%;
							
							padding-left: 5%;

							text-align: justify;
							text-justify: inter-word;							
                        }
                        
						div.newsListAtRightPanelDiv
                        {
/*                        
							font-family: Arial;
	*/						
							/*	//removed by Mike, 20220701
							  font-size: 16pt;
							*/

							color: rgb(30,30,30); /*rgb(120,63,4);*/
							font-weight: bold;

							width: 50%;

							padding-left: 5%;
														
							text-align: justify;
							text-justify: inter-word;							
                        }                        
									
						/* TO-DO: -update: this to include body */
						body.mobileBody {
							/* added by Mike, 20220627 
							  //reference: https://github.com/usbong/UsbongStore/blob/master/usbong_store/application/views/templates/style_v2.php;
							  last accessed: 20220627							  
							*/
							max-width: 100%;
							position: relative;	
							
							padding: 2%;
						}
									
						div.formTitle
						{
							text-align: right;
/*							font-weight: bold;*/	
							font-size: 24pt; /*30pt*80%;*/
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
							font-size: 16pt;
							color: rgb(0,0,0); /* black */
							font-weight: bold;
						}
					
						h3
						{
							color: rgb(0,0,0); /* black */
							text-align: left;
							
						}
					
						h4
						{
							color: rgb(64,64,64);	
						}

						h5
						{							
							color: rgb(85,43,0);	
						}

						/* note: no horizontal line is displayed, albeit a blank row is added*/						
						hr {							
						}
												
						b
						{
							color: rgb(0,0,0); /* from black to white */ 							
						}

						img.Image-companyLogo {
							/*  //edited by Mike, 20220630
								//TO-DO: -reverify: this
							*/
/*
							max-width: 100%;
*/
							width: 50%; 

							
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
							/*background: #eee;*/
							background: #fff;
							
							/*color: rgb(40,40,40); *//* from black to white */ 
							color: rgb(20,20,20); 

							/*font-weight: bold;*/							
							font-size: 24pt; /*30pt*80%;*/
														
							margin:0;
							margin-bottom: 3%;/*5%;*/

							border-left: 5px solid #ababab; /*#ab9c7d;*/
							padding: 2px;					
							padding-left: 3%;
							
							/* text-indent: 5%;*/
						}
						
						p.usbongTranslatedQuote {
							margin:0;
							margin-bottom: 3%;/*5%;*/
						}

/*
						Reference: https://www.w3schools.com/css/css_text_spacing.asp;
						last accessed: 20220626
*/
						div.textDoubleSpacedDiv {
							line-height: 2;
							font-size: 24pt; /*30pt*80%;*/						
						}
						
						
						table.imageTable
						{
							width: 90%;
						}						

						table.bodyTable
						{
							width: 50%;
							padding-left: 10%;

/*
							margin-left: 5%;
*/							
							margin-left: 5%;		

						}	
						
	                    td.mainTextTd
                        {
							width: 100%; /*50%;*/
							border: 1px solid #aaaaaa;/*#ab9c7d;*/	
/*	
							padding-right: 2%;		
*/							
                        }


						td.imageTableColumnTd
						{
							border: 1px solid #ab9c7d;
						}
						
						td.newsListAtRightPanelColumnTd {
							border: 1px solid #ab9c7d;
							vertical-align: top;
							padding: 5%;
							padding-left: 0%;
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
							width: 50%; /*40%;*/
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
						
						span.usbongNoteSpan {
						}
						
						span.usbongTextSectionPart {
							text-align: left;
							color: rgb(50,50,50);
							font-weight: bold;
						}
						
						span.usbongTextReferencePart {
							text-align: left;
							color: rgb(50,50,50);
							font-weight: bold;
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
							left: 40%;
							top: 8%;									
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
		//edited by Mike, 20230110
		$sYearDirectoryPartTwo="/server/".$iYearCount."/";

		//edited by Mike, 20230116
/*		
		if (file_exists($sYearDirectoryPartTwo)) {
			$arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));			
			
			echo "dito";
		}
*/
		if (file_exists(dirname(__DIR__).$sYearDirectoryPartTwo)) {
			$arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));		
		}

		$iYearCount++;	
	}
	
	//echo $arrayFilesInCurrentDirectory[0];


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
	</table>
	<br/>
<!--	<b>DATE:</b><?php echo " ".$dateToday; ?>
-->

<!-- right column -->
<!--	
	<td class="newsListAtRightPanelColumnTd">
	<div class='newsListAtRightPanelDiv'>
		1. Halimbawa <br/>
		2. Halimbawa <br/>
		3. Halimbawa <br/>
	</div>
	</td>
-->	
	</tr></table>
	

<?php
	//added by Mike, 20220305
	function getUpdatedWebAddress($completeFilename, $sWebAddressBasePath) {
		if (strpos($completeFilename,"www.usbong.ph")!==false) {
			$sWebAddress = $completeFilename;
			$sWebAddressUpdated = $sWebAddress;					
		}
		else {				
			//if Windows machine
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
				$sWebAddress = str_replace("\\","/",$completeFilename);
				$sWebAddress = "usbong_newsletters".$sWebAddress;
			}
			else {
				$sWebAddress = $completeFilename;
			}

//							echo ">>".$completeFilename;

			$sWebAddress = explode("server", $sWebAddress)[1];
			$sWebAddress = $sWebAddressBasePath."/server".$sWebAddress;
				
			//removed by Mike, 20220305
			//$sWebAddressUpdated = str_replace(" ","%20",$sWebAddress);
		}

		return $sWebAddress;
	}

	//added by Mike, 20211016
	//note: reusable function
	function autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase) {		
//		echo "hallo: ".$cellValue;
		
			echo "<table class='searchTable'>
				<tr>
				  <td>";						

				$sWebAddress = getUpdatedWebAddress($completeFilename, $sWebAddressBasePath);
				$sWebAddressUpdated = str_replace(" ","%20",$sWebAddress);

				if (strpos($sWebAddress,"downloaded")!==false) {
					$sYearDate=substr($sWebAddress,strpos($sWebAddress,"downloadedNewsletter"));
					$sYearDate=str_replace("downloadedNewsletter","",$sYearDate);
					$sYearDate=str_replace(".php","",$sYearDate);
					
//					echo "sYearDate: ".$sYearDate;
					
					echo "<a class='webServiceLink' href='http://www.usbong.ph/excel/excel-".$sYearDate."'>
						http://www.usbong.ph/excel/excel-".$sYearDate."</a><br/>";
				}
				else {
					echo "<a class='webServiceLink' href=".$sWebAddressUpdated.">".$sWebAddress."</a><br/>";
				}

				echo "... ";
				//edited by Mike, 20211013
	//				echo $cellValue;
				
				//edited by Mike, 20211014
	//							echo str_replace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue)."<br/>";

				//added by Mike, 20211014
				//String Find COMMAND: case sensitive OFF; output case sensitive
				$sKeyphraseCaseSensitive = stristr($cellValue,$sKeyphrase, false); //after needle
				//note: output of stristr also includes part of string after the $sKeyphrase
				$sKeyphraseCaseSensitive = substr($sKeyphraseCaseSensitive,0,strlen($sKeyphrase));

				//String Replace COMMAND: case sensitive OFF
	//							echo str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue)."<br/>";
				$cellValue=str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue);

/*
				//added by Mike, 20211016
				echo strlen($cellValue)."<br/><br/>";				
				echo strpos($cellValue,$sKeyphrase)."<br/><br/>";				
*/

				//edited by Mike, 20211017
//				if (strlen($cellValue)>118) { 
				if (strlen($cellValue)>100) {
					
//					$cellValue=substr($cellValue,0,118); //118 max character string length
					//edited by Mike, 20211017
//					$cellValue="<b>".substr($cellValue,strpos($cellValue,$sKeyphrase),118); //118 max character string length

					//note: add in the displayed output, 
					//additional characters before the $sKeyphrase, 
					//due to if $sKeyphrase is at end part of $cellValue,
					//$sKeyphrase becomes the only text of the newsletter
					$iOffset=30;
					
					$iStartPos=strpos($cellValue,$sKeyphrase)-$iOffset;
					$iKeyPhraseStartPos=strpos($cellValue,$sKeyphrase);
					$iKeyPhraseCharLength=strlen($sKeyphrase);

					if ($iStartPos<0) {
						$iStartPos=0;
					}

//					$cellValue=substr($cellValue,$iStartPos,$iKeyPhraseStartPos)."<b>";
					$cellValue=substr($cellValue,$iStartPos,$iKeyPhraseStartPos+$iOffset);
				}

				//edited by Mike, 20211022
				//echo str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue);
//				echo substr(str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue),0,280);
				echo substr(str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue),0,160);
				
				echo " ...";
			echo "</td>
				</tr>
					</table>";
									
			echo "<br/><br/>";
	}
	
	//added by Mike, 20230504
	//==========================================

	//added by Mike, 20211012
	//auto-read: newsletters
	//find keyphrase from searchbox
	
	//note: output: displayed web page format incorrect;
	//use text identified via keyphrases

	ini_set('auto_detect_line_endings', true);

	//added by Mike, 20211014
	$sKeyphrase="";
	$bHasFoundKeyphrase=false;
	
		
		///var/www/html/usbong_newsletters/server/notes/LessonsLearned/asahiShimbun/202304		
			
		$sInputDirectory="/server/notes/LessonsLearned/asahiShimbun/";
		//$sYearDirectory=$sInputDirectory."2023/";
		$filename="202305/asahiShimbun20230504.md";
		
//		echo ">>>".$sYearDirectory."<br/>";


//		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
//$sYearDirectory="/server/2022/";

		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename;
		
//	echo ">>> ".$completeFilename."<br/><br/>";
		
	
	if (($handle = fopen($completeFilename, "r")) !== FALSE) {			
				
				  while (!feof($handle)) {		  
					//edited by Mike, 20211014;
					//TO-DO: -update: to identify if keyphrase uses 
					//the previous read batch and the next batch
					//edited by Mike, 20211014; edited again by Mike, 20211022
					//$data = fread($handle, 128);
					$data = fread($handle,filesize($completeFilename));										
//					$data = fread($handle, 164);
		
					//edited by Mike, 20211013
					//$cellValue = utf8_encode($data);
					
					//edited by Mike, 20211014
//					$cellValue = strip_tags(utf8_encode($data));
					
					$cellValue = strip_tags($data);
					
					//added by Mike, 20230110
					//note: list of additional rules to remove select displayed search outputs via updating searched value for use as input
//-----					
//PART 1
					$cellValue = str_replace("by Mike, ".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("server\\".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("var/www/html/", "", $cellValue);

//-----					
//PART 2

	//note: .md format
	//edited by Mike, 20230504
	//echo ">>>".$cellValue."<br/>";

	//added by Mike, 20221208
/*
	if (isMobile()) {		
	}
	else {
		echo "<table class='bodyTable'><tr><td class='mainTextTd'>";
		echo "<div class='mainTextDiv'>";
	}
*/
		echo "<table class='bodyTable'><tr><td class='mainTextTd'>";
		echo "<div class='mainTextDiv'>";

?>	
	<div class="textDoubleSpacedDiv">

<?php	
//	$cellValue = str_replace("\n", "<br/>", $cellValue);

//	echo ">>>>".$cellValue."<br/>";
	
//$sToken = strtok($cellValue, "<br/>");
$sToken = strtok($cellValue, "\n");
$sPrevToken="";
$iRowCount=0;

while ($sToken !== false)
{
	
	//echo "$sToken<br>";
		
	//if (strpos($cellValue, "##")!==false) {
	if ($iRowCount==0) {
		//note: space after "##"
		$sToken = str_replace("## ", "", $sToken);
		$sReferenceWebsite=substr($sToken,0,strpos($sToken,";"));	
		$sLastAccessed=substr($sToken,strpos($sToken,";"));

		//echo strpos($cellValue,"<br/>");
		
		echo "<h3>";
//		echo "## <a class='webServiceLink' target='_blank' href='".$sReferenceWebsite."'>";
		echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsite."'>";
		echo $sReferenceWebsite."</a>";
		echo "<b>".$sLastAccessed."</b>";		
		//echo $sLastAccessed;
		echo "</h3>";
		echo "<hr>";
	}
	//else if (strpos($cellValue, ">")!==false) {
	else if (substr($sToken,0,1)==">") {
		//if prev token was a note
		if (strpos($sPrevToken, "-->")!==false) {
			echo "<br/>";
		}	
	
		$sToken = str_replace(">","",$sToken);	
		echo "<blockquote class='usbongBlockquote'>";
		echo "$sToken";
		echo "</blockquote>";
	}
	else if (strpos($sToken, "-->")!==false) {
//		$sToken = str_replace("-->","",$sToken);	
		echo "<span class='usbongNoteSpan'>";
		echo "$sToken<br/>";
		echo "</span>";
	}
	else if (strpos($sToken, "##")!==false) {
		echo "<span class='usbongTextSectionPart'>";
		echo "$sToken<br/>";
		echo "</span>";
	}
	else if (strpos(strtolower($sToken), "reference")!==false) {
		$sToken = str_replace("Reference:", "", $sToken);
		$sReferenceWebsiteTemp=substr($sToken,0,strpos($sToken,";"));	
		$sLastAccessedTemp=substr($sToken,strpos($sToken,";")+1);	
	
		echo "<span class='usbongTextReferencePart'>";
		echo "Reference:<br/>";
		//echo "$sToken<br/><br/>";
		//echo "$sReferenceWebsiteTemp;<br/>";
		echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
		echo $sReferenceWebsiteTemp."</a>;<br/>";				
		echo "$sLastAccessedTemp<br/><br/>";		
		echo "</span>";		
	}	
	else {
		//if prev token was a note
		if (strpos($sPrevToken, "-->")!==false) {
			echo "<br/>";
		}
	
		echo "<p class='usbongTranslatedQuote'>";
		//note: technique
		echo "$sToken";
		echo "</p>";
	}

//	echo "<br/>";		
	$sPrevToken = $sToken;	
	$sToken = strtok("\n");
	$iRowCount++;
} 

?>	
	</div>
	</div>
	</td>
	</tr>
	</table>
<?php		
	//TO-DO: -update: this autoWriteOutput(...); .md input
					
/*					
					$cellValue = "website address: ".str_replace("var/www/html/", "", $completeFilename).";".$cellValue;
*/					
//-----					
					

/* //removed by Mike, 20230504
	//					echo ">>".$cellValue;

						//added by Mike, 20211014
						//sKeyphrase does NOT exist in $cellValue
						if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))===false) {						
							if (!feof($handle)) {
								//edited by Mike, 20211017; add string of characters after sKeyPhrase
								//$nextData=fread($handle, strlen($sKeyphrase));
								//edited by Mike, 20211022
								$iCellValueTailLength=20;//1020; //note: max 100000000;//42;							
								
								//note: read until there exists Characters in $cellValue
								$nextData=fread($handle, strlen($sKeyphrase)+$iCellValueTailLength);
								
								$data = $data.$nextData;
								$cellValue = strip_tags($data);	
							}						
						}			

						//edited by Mike, 20211014
						//sKeyphrase: case-sensitive OFF
		//				if (strpos($cellValue,$sKeyphrase)!==false) {
						//edited by Mike, 20211014
						if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))!==false) {

							//added by Mike, 20211016
							autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase);
							
							//added by Mike, 20211014
							$bHasFoundKeyphrase=true;

							//display only the first result with keyphrase found from each existing file
							break;						
						}
			
*/
					}
				}

/* //removed by Mike, 20230504	
	
echo "<br/><br/><br/><br/>";
	
	//added by Mike, 20211014
    foreach ($arrayFilesInCurrentDirectory as $key => $filename)
    { 		
	  if (!in_array($filename,array(".","..")))
      {
		  
////		echo ">".$filename."<br/>";
////		echo ">".$sYearDirectory."<br/>";

		if (strpos($filename, "EXCEL")!==false) {
			//echo ">".$filename."<br/>";
			$sYearDirectory="/server/".substr($filename,strlen("EXCEL "),4)."/";
		}
		else if (strpos($filename, "downloaded")!==false) {
//			echo ">".$filename."<br/>";
			$sYearDirectory="/server/".substr($filename,strlen("downloadedNewsletter"),4)."/";
		}
		//edited by Mike, 20230116
//		else {
		else if (strpos($filename, "viewNewsletter")!==false) {
			$sYearDirectory="/server/".substr($filename,strlen("viewNewsletter"),4)."/";
		}
		//added by Mike, 20230116
		else {
			$sYearDirectory="/server/".substr($filename,strlen("viewLessonsLearnedAsahiDotCom"),4)."/";
		}
		
//		echo ">>>".$sYearDirectory."<br/>";


//		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
//$sYearDirectory="/server/2022/";

		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
		
		if (!is_dir($completeFilename)) {
		
		echo ">>>".$completeFilename."<br/>";
		  		  
		//added by Mike, 20200523
		if (!file_exists($completeFilename)) {
			//add the day of the week
			$sDateToday = Date('Y-m-d, l');

			echo "<span class='spanFileNotFound'>
					USBONG: We did NOT find the file. Please re-verify filename to be correct.
				  </span><br/><br/>";
	//		echo "<span class='spanFileNotFound'>Filname:</span><br/><br/>";
			echo "<table class='searchTable'>";						
			echo "<tr>";
				echo "<td>";		
				echo $completeFilename;
				echo "</td>";		
			echo "</tr>";		
			echo "</table>";
			echo "<br/>";
		}
		else {			
		
			//edited by Mike, 20211014
			if (!isset($_GET['q'])) { //nameParam
			}
			else {
				$sKeyphrase = $_GET['q']; //nameParam

				//added by Mike, 20211014; removed by Mike, 20211014
//				$bHasFoundKeyphrase=false;

				if (($handle = fopen($completeFilename, "r")) !== FALSE) {						
				  while (!feof($handle)) {		  
					//edited by Mike, 20211014;
					//TO-DO: -update: to identify if keyphrase uses 
					//the previous read batch and the next batch
					//edited by Mike, 20211014; edited again by Mike, 20211022
					//$data = fread($handle, 128);
					$data = fread($handle,filesize($completeFilename));										
//					$data = fread($handle, 164);
		
					//edited by Mike, 20211013
					//$cellValue = utf8_encode($data);
					//edited by Mike, 20211014
//					$cellValue = strip_tags(utf8_encode($data));
					$cellValue = strip_tags($data);
					
					//added by Mike, 20230110
					//note: list of additional rules to remove select displayed search outputs via updating searched value for use as input
//-----					
//PART 1
					$cellValue = str_replace("by Mike, ".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("server\\".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("var/www/html/", "", $cellValue);

//-----					
//PART 2
					
					//added by Mike, 20220305
//					$cellValue = "website address: ".getUpdatedWebAddress($completeFilename, $sWebAddressBasePath).";".$cellValue;

					//edited by Mike, 20230110
					//TO-DO: -update: this; 
					//downloaded newsletters, 
					//EXCEL 2021-07 pages @www.usbong.ph;
					
////					$cellValue = "website address: ".$completeFilename.";".$cellValue;
				

////					$cellValue = "website address: ".str_replace("\\".$sKeyphrase, "", $completeFilename).";".$cellValue;

					$cellValue = "website address: ".str_replace("var/www/html/", "", $completeFilename).";".$cellValue;
//-----					


	//					echo ">>".$cellValue;

						//added by Mike, 20211014
						//sKeyphrase does NOT exist in $cellValue
						if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))===false) {						
							if (!feof($handle)) {
								//edited by Mike, 20211017; add string of characters after sKeyPhrase
								//$nextData=fread($handle, strlen($sKeyphrase));
								//edited by Mike, 20211022
								$iCellValueTailLength=20;//1020; //note: max 100000000;//42;							
								
								//note: read until there exists Characters in $cellValue
								$nextData=fread($handle, strlen($sKeyphrase)+$iCellValueTailLength);
								
								$data = $data.$nextData;
								$cellValue = strip_tags($data);	
							}						
						}			

						//edited by Mike, 20211014
						//sKeyphrase: case-sensitive OFF
		//				if (strpos($cellValue,$sKeyphrase)!==false) {
						//edited by Mike, 20211014
						if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))!==false) {

							//added by Mike, 20211016
							autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase);
							
							//added by Mike, 20211014
							$bHasFoundKeyphrase=true;

							//display only the first result with keyphrase found from each existing file
							break;						
						}
			
					}			
				}							
			}
		  //added by Mike, 20211014
		  }
		}
	  }
	}
	*/					

	
	
		
	//added by Mike, 20211017
	//TO-DO: -update: instructions to be a reusable function
	//note: noticeable speed-up to receive search results
	//after downloading the text file of newsletters from www.usbong.ph
	//to be stored inside Computer Server Storage
	if (!empty($sKeyphrase)) {
		//added by Mike, 20211016
		//note: add: newsletters in another computer server, e.g. hosted by Google Sites
		//note: COMMAND includes text, photographs, et cetera

		//Additional Note: Past Newsletters
		//Web Page with Computer Instructions auto-generated from Classic to New Google Sites;
		//--> where: Format = Year-Month; example: 2021-05
		//--> Earliest Available: 2020-08
		//--> Newest Available: 2021-05
/* //edited by Mike, 20211020; descending order
		$iMonthCount=7;//to start at 8;
		$iYearCount=2020;
*/


		$iMonthCount=13;//to start at 12;
		$iYearCount=2020;
		
		//edited by Mike, 20211020
//		$completeFilename="https://www.usbong.ph/excel/excel-2020-08";
		$filename="downloadedNewsletter2020-08.php";
		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, "/server/".$iYearCount."/").$filename;
		
//		echo $completeFilename;
		
		//added by Mike, 20211020
		while (file_exists($completeFilename)) {
			$sMonthCount="";
			$sYearDay="";
	
			//edited by Mike, 20211020
//			$iMonthCount=(($iMonthCount)%12)+1;
//			$iMonthCount=(($iMonthCount-1)%12);
			$iMonthCount=$iMonthCount-1;
		
			//echo ">>>>>>iDayCount: ".$iDayCount;
//			echo ">>>>>>iMonthCount: ".$iMonthCount;
					
					
			if ($iMonthCount<10) { //1 digit only
				$sMonthCount="0".$iMonthCount;
			}
			else {
				$sMonthCount=$iMonthCount;
			}

			//echo "iDayCount: ".$iDayCount."<br/>";
	
/* //edited by Mike, 20211020	
			if ($iMonthCount==1) { //new year		
				$iYearCount=$iYearCount+1;				
			}		
			
			//added by Mike, 20211020
			if ($iYearCount==2021) {
				break; //downloaded newsletters of year 2021 already searched
			}
*/
			//added by Mike, 20211020
			if ($iMonthCount==7) {
				break; //downloaded newsletters until 2020-08
			}


			$sYearDate=$iYearCount."-".$sMonthCount;
			
//			$completeFilename="https://www.usbong.ph/excel/excel-".$sYearDate;

			//edited by Mike, 20211020
//			$filename="downloadedNewsletter".$sYearDate;
			$filename="downloadedNewsletter".$sYearDate.".php";

			//edited by Mike, 20211017
			//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
/*				
				echo ">>>>".$filename;
				echo ">>>>".$iYearCount;
*/				
			$sYearDirectory="/server/".$sYearDate."/";
			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, "/server/".$iYearCount."/").$filename;
							
			//added by Mike, 20220302
			$data="";		
							
			//removed by Mike, 20211020
//			if (file_exists($completeFilename)) {
				//edited by Mike, 20211020
				//added "@" for computer to NOT display warnings
				if (($handle = @fopen($completeFilename, "r")) !== FALSE) {						
				  while (!feof($handle)) {		  
					//edited by Mike, 20211014;
					//TO-DO: -update: to identify if keyphrase uses 
					//the previous read batch and the next batch
					//edited by Mike, 20211014; edited again by Mike, 20211022
//					$data = fread($handle, 128);

					//added by Mike 20211022
					//TO-DO: -reverify: increase in fread
					//to eliminate excess HTML tags
					//using strip_tags(...) COMMAND
					//reminder: with read length @128, 
					//$data as $cellValue NOT classified as HTML
					//execute with downloaded newsletters 2020 and 2021
//					$data = fread($handle, 204800);
					fread($handle,filesize($completeFilename));

//					$data = fread($handle, 164);
		
					//edited by Mike, 20211013
					//$cellValue = utf8_encode($data);
					//edited by Mike, 20211014
//					$cellValue = strip_tags(utf8_encode($data));
					$cellValue = strip_tags($data);

//					echo ">>".$cellValue;

					//added by Mike, 20211014
					//sKeyphrase does NOT exist in $cellValue
					if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))===false) {
						if (!feof($handle)) {
							//edited by Mike, 20211017; add string of characters after sKeyPhrase
							//$nextData=fread($handle, strlen($sKeyphrase));
							//edited by Mike, 20211022
							$iCellValueTailLength=20;//1020; //note: max 100000000;//42;							
							
							//note: read until there exists Characters in $cellValue
							$nextData=fread($handle, strlen($sKeyphrase)+$iCellValueTailLength);
							
							$data = $data.$nextData;
							$cellValue = strip_tags($data);	
						}						
					}
	
					//added by Mike, 20220305
//					$cellValue = "website address: ".getUpdatedWebAddress($completeFilename, $sWebAddressBasePath).";".$cellValue;
					$cellValue = "website address: ".$completeFilename.";".$cellValue;
	
					//edited by Mike, 20211014
					//sKeyphrase: case-sensitive OFF
	//				if (strpos($cellValue,$sKeyphrase)!==false) {
					//edited by Mike, 20211014
					if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))!==false) {
/*
echo ">>>>>".$completeFilename;
//echo ">>>>>".$cellValue;
echo ">>>>>".$sKeyphrase;
*/
						//added by Mike, 20211016
						autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase);
						
						//added by Mike, 20211014
						$bHasFoundKeyphrase=true;

						//display only the first result with keyphrase found from each existing file
						break;						
					}
				  }
				}							
			//removed by Mike, 20211020
//			}
		}
	}	

	//added by Mike, 20211014; edited by Mike, 20211017
//	if (!$bHasFoundKeyphrase) {
	if ((!empty($sKeyphrase)) and (!$bHasFoundKeyphrase)) {
		echo "<span class='spanKeyphraseNotFound'>
				USBONG: We did NOT find this keyphrase in any of the newsletter files.
			  </span><br/><br/>";
		echo "<table class='searchTable'>";						
		echo "<tr>";
			echo "<td>";		
			echo "Your entered keyphrase: <b>".$sKeyphrase."</b>";
			echo "</td>";		
		echo "</tr>";
		echo "</table>";
		echo "<br/>";					
	}
?>	
	
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