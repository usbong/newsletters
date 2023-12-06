﻿<!--
  Copyright 2021~2023 SYSON, MICHAEL B. 
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20231206; from 20231202
  @website address: http://www.usbong.ph
  
  Note: "default.md", not "default.md.txt";
  //causes additional delay if has forgotten format, etc.
  
  Input:
  1) Lessons-learned HTML TEXT FILE
  
  Output:
  1) Usbong Balita viewable using Computer/Mobile Web Browsers  
  
  Computer Browser: Website Address (Example):
  1) local: http://localhost/usbong_newsletters/server/usbongBalita.php
  
  2) public internet: http://store.usbong.ph/server/usbongBalita.php
  
  Recommended References:
  0) Usbong Knowledge Management System (KMS)
  // https://github.com/usbong/kms; last accessed: 20230506;
  // notes: noticeable margin space @right side;
  // OUTPUT: USBONG logo, et cetera; size correct even on MOBILE TABLET PC
  
  1) https://www.w3schools.com/howto/howto_css_table_center.asp;
  //last accessed: 20210703
  //https://www.w3schools.com/css/css_font_size.asp;
  //last accessed: 20230828; "Responsive Font Size"
  
  2) https://www.asahi.com/; last accessed: 20220626
  
  3) https://www.1101.com/home.html; last accessed: 20220626
  
  4) AMAZON.COM Kindle eBOOK Reader
  //TO-DO: -add: mobile responsiveness via reusing USBONG STORE computer instructions received from ZENT as paid sub-contractor  
  reminder: pay: to learn technique for USBONG to share lessons-learned with PUBLIC
  
  //TO-DO: -update: newsletter pages system to be more organized    
  //TO-DO: -add: LINE NUMBERS?
  
  //note: Android mobile telephone; PORTRAIT mode has excess horizontal scrolling;
  //auto-set font-size to be smaller; AMAZON.COM; Kindle;
  //verify width x height; 
  //notes: self had read eBOOKS on Kindle, PORTRAIT mode
  //removed: excess touch screen movement on iPAD Table PC;
  //TO-DO: -fix: excess movement returns after change from PORTRAIT to LANDSCAPE, and vice-versa;
  //UsbongV2 -> UsbongV3?  
  //TO-DO: -delete: excess instructions
  
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
							
							/* //added by Mike, 20230828 */
							font-size: 100%;

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

/*							padding-left: 5%;*/
							
							padding: 2%;
							padding-top: 1%;
							
							/* //added by Mike, 20220628 
							   //reference: https://www.w3schools.com/cssref/css3_pr_text-justify.asp;
							   //last accessed: 20220628
							*/
							
							text-align: justify;
							text-justify: inter-word;							
							/*-webkit-user-select: none;*/ /* Safari */
							/*-ms-user-select: none;*/ /* IE 10 and IE 11 */
							/*user-select: none;*/ /* standard syntax */							
							transform: scale(1.0);
							/*touch-action: none;*/
							overflow: auto;
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
							padding-right: 5%;

							border: 1px solid #aaaaaa;
							
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
							height: 100%;
							  
							position: relative;	
							padding: 2%;
							
							text-align: justify;
							text-justify: inter-word;			

							/* //added by Mike, 20230828 */
							font-size: 100%;
							

							/*-webkit-user-select: none;*/ /* Safari */
							/*-ms-user-select: none;*/ /* IE 10 and IE 11 */
							/*user-select: none;*/ /* standard syntax */	
							transform: scale(1.0);
							/*touch-action: none;*/
							  overflow: auto;							
						}
									
						div.formTitle
						{
							max-width: 100%;
							height: 100%;
							
							text-align: right;
/*							font-weight: bold;*/	

							/*font-size: 28pt;*/
							font-size: 2em;			
							
							
							color: rgb(0,0,0); /* black */
					
							padding-right: 2%;
							padding-top: 1%;
						}
						
						div.formTitleMobile
						{
							text-align: right;
/*							font-weight: bold;*/	
							font-size: 15pt; 
							color: rgb(0,0,0); /* black */
					
							padding-right: 2%;
							padding-top: 1%;
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
						
						img.Image-philnitsLogo {
				/*
							max-width: 20%;
				*/				
							width: 80%; /* 40%; */
							height: auto;
							
							float: left;
							text-align: center;
/*							
							padding-left: 5%;
*/
						}							

						img.Image-companyLogo {
							/*  //edited by Mike, 20220630
								//TO-DO: -reverify: this
							*/
/*
							max-width: 100%;
*/
							width: 80%; /* 40%; */
							height: auto;
							
							float: left;
							text-align: center;
/*							
							padding-left: 2%;
							padding-top: 1%;
*/
							padding-left: 2%;
							padding-top: 4%;

						}

						img.Image-companyLogoMobile {
							width: 80%; /* 40%; */
							height: auto;
							
							float: left;
							text-align: center;
							
/*							
							padding-left: 2%;
							padding-top: 1%;
*/
							padding-left: 2%;
							padding-top: 4%;
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
							margin-top: 3%;/*5%;*/

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
							width: 100%;
						}						

						table.bodyTable
						{
							width: 100%;/*90%;*/
							height: auto;
						}	
						
	                    td.mainTextTd
                        {
							width: 50%;
							border: 1px solid #aaaaaa;/*#ab9c7d;*/	
							padding-right: 2%;		
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
						
						a.webServiceTimeOffLink
						{
							color: rgb(0,0,0);
							/*font-weight: bold;*/
						}
						
						a.menuLink
						{
							background-color: rgb(146,208,80);
							color: rgb(64,64,64);
							text-decoration: none;
							width: 100%; /*100px;*/
						}

						a.menuLink:hover
						{
							color: rgb(64,64,64);
							text-decoration: underline;
						}
						
						select.newsSelect
						{
							float: right;
							font-size: 16pt;
							margin-top: 0.5%;
							margin-bottom: 1%;
						}
						
						form 
						{
							margin:0px;
							padding: 0px;
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
							margin-top: 0.5%;
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
							/*TODO: verify this*/
							width: 20%; /*40%; 100%*/

/*							
							display: inline-block;		
*/
						}	

						td.imageColumnPartTwo
						{							
							/*TODO: verify this*/
							width: 20%; /*40%; 100%*/
/*								
							display: inline-block;		
*/							
						}							

						td.pageNameColumn
						{
							width: 45%; /*40%;*/
							/*display: inline-block;*/
							text-align: right;
						}				
						
						td.menuColumn
						{
							width: 10%;
							background-color: #fff;							
						}

					
						input.searchInput
						{
							width: 100%;
							max-width: 400px;
														
							resize: none;

							height: 100%;
							
							font-size: 16pt;
							
							margin-top: 0.5%;
							margin-bottom: 1%;							
						}	
						
						button.searchButton
						{								
							font-size: 16pt;
							margin-top: 0.5%;
							margin-bottom: 1%;								
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
						
						hr.usbongTextSectionPartHr {
							border: 0.01em solid #CCC;
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

<!-- //removed by Mike, 20230815
	<base href="http://store.usbong.ph/" target="_blank">
-->

	<!-- added by Mike, 20220630 -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="fIE_s1RlOUpi0n7Yi2lEawdU_P6W003_QNSF1hKGu1A" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
	  <script>	  
		//added by Mike, 20230510
		bIsMobile = false;	  
		bIsUsingAppleWebKit=false;
		iAppleWebKitInnerWidthOffset=0;
		bIsUsingAppleMac=false;
	  		
		function onLoad() {
		  //alert ("HALLO");

			//added by Mike, 20230510
			if (/Mobile|Android|webOS|iPhone|iPad|iPod|AppleWebKit|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
		
		//		alert("detected: Mobile Browser!");
				
				//added by Mike, 20220925
				bIsMobile=true;
				
				//added by Mike, 20221108
				if (navigator.userAgent.includes("AppleWebKit")) {
					bIsUsingAppleWebKit=true;
					bIsUsingAppleMac=false; //default
					
	//				alert("dito");
				}
				
				//added by Mike, 20221113
				//notes: "AppleWebKit" to exist even with "Android"
				if (navigator.userAgent.includes("Android")) {
					bIsUsingAppleWebKit=false;
				}		
		
				//added by Mike, 20221113
				//example: Linux x86_64 (desktop)
				if (navigator.userAgent.includes("Linux x")) {		
					bIsMobile=false;
				}		
		
				//note: iPAD and MacBookPro OS : Mac OS X
				//adds: to be re-classified as iPAD via TOUCH command
				if ((navigator.userAgent.includes("Macintosh")) || navigator.userAgent.includes("Mac")) {
					bIsUsingAppleMac=true;
				}		
				
				//added by Mike, 20230111
				//note: TO-DO: -add: touch/mouse click ACTION COMMANDS
				//if using EDGE browser;
				//observed: shaking on EDGE browser via desktop,
				//caused by bIsMobile=true;
				if (navigator.userAgent.includes("Edg")) {
					bIsMobile=false;			
				}	
				
				//added by Mike, 20230510
				//mobile telephone; not tablet pc
				if (bIsMobile) {
					usbongBlockquoteList = document.getElementsByClassName("usbongBlockquote");
					textDoubleSpacedDivList = document.getElementsByClassName("textDoubleSpacedDiv");
					//added by Mike, 20230511
					formTitleList = document.getElementsByClassName("formTitle");

					//edited by Mike, 20230511
					//reference: https://www.w3schools.com/tags/ref_pxtoemconversion.asp; last accessed: 20230511
					for (var i = 0; i < usbongBlockquoteList.length; i++) {
  						var element = usbongBlockquoteList[i];
  						element.style.fontSize = "1em";//"26px";
					}
					
					for (var i = 0; i < textDoubleSpacedDivList.length; i++) {
  						var element = textDoubleSpacedDivList[i];
  						element.style.fontSize = "1.8em";//"26px";
					}
					
					for (var i = 0; i < formTitleList.length; i++) {
  						var element = formTitleList[i];
  						element.style.fontSize = "1.25em";//"18px";
					}
				}
			}			  
		  
		  	//reference: https://stackoverflow.com/questions/4917664/detect-viewport-orientation-if-orientation-is-portrait-display-alert-message-ad; last accessed: 20220910
			//answer by: Jatin, 20120731T0711;
			//edited by Tisho, 20120731T0730
			//add: listener to detect orientation change
			window.addEventListener("orientationchange", function() {
	  		//orientation number (in degrees) : 90 and -90 for landscape; 0 for portrait
	  		//edited by Mike, 20220911
	  		//alert(window.orientation);
					
				//added by Mike, 20220910; edited by Mike, 20220911	
				var myBody = document.getElementById("myBodyId");
		
				//reference: https://stackoverflow.com/questions/4917664/detect-viewport-orientation-if-orientation-is-portrait-display-alert-message-ad; last accessed: 20220910
				//answer by: crmpicco, 20130515T1414;
				//edited by: posit labs, 20150929T1708	
//				if (screen.orientation==0) { 
				//OK
				if (window.orientation==0) { //Android, iPAD; iOS
		  			//alert("detected: PORTRAIT mode");
//		   			myBody.className='bodyPortraitMode';
					//Android; not LENOVO Tablet PC
//					if ((bIsMobile) && (!bIsUsingAppleWebKit)) {
					if (bIsMobile) {
						//alert("width" + screen.width); //320
						//alert("height" + screen.height); //533			
						//TO-DO: -update: font size
					}
				}
				else {//if (window.matchMedia("(orientation: landscape)").matches) {
		   			//alert("detected: LANDSCAPE mode");	   	   
//		   			myBody.className='bodyLandscapeMode';
					//Android; not LENOVO Tablet PC
//					if ((bIsMobile) && (!bIsUsingAppleWebKit)) {
					if (bIsMobile) {
						//alert("width" + screen.width); //320
						//alert("height" + screen.height); //320; cause?
						//TO-DO: -update: font size
					}
				}			  
		
			}, false);
		}
		
		
		//added by Mike, 20230920
		function showNews() {
			//alert("HALLO!");

			//reference: https://stackoverflow.com/questions/3487263/how-to-use-onclick-or-onselect-on-option-tag-in-a-jsp-page; last accessed: 20230912;
			//answer by: Manu, 20100815T1201
			//edited by: YakovL, 20160717T1433
			
			var selectBox = document.getElementById("newsSelectId");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			
//			alert(selectedValue);	

//alert("<?php echo 'usbongExam.php';?>/"+selectedValue);			

			//window.location.href = "<?php echo 'usbongExam.php';?>/"+selectedValue;
			//output: http://localhost/usbong_newsletters/server/usbongExam.php/Q4

			//window.location.pathname = "<?php echo 'usbongExam.php';?>/"+selectedValue;
			//output: http://localhost/usbongExam.php/Q2
			
			//reference: https://www.w3schools.com; last accessed: 20230912
			
			var sInput = window.location.href;
			//alert(sInput.substring(0,sInput.indexOf(".php")));
			sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";
			
			window.location.href = ""+sInput+selectedValue;
			
			//TODO: -update: selected option;
			//note: use of "+" (in Javascript), instead of "." (in PHP);
			
		}
		
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
		echo "<body id='myBodyId' class='mobileBody' onload='onLoad()'>";
	}
	else {
		echo "<body id='myBodyId' onload='onLoad()'>";
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
<?php 

//reference: https://stackoverflow.com/questions/1283327/how-to-get-url-of-current-page-in-php; last accessed: 20230912
//answer by: Amber, 20090816T0208
//edited by: Brad Larson, 20180309T0122

//echo $_SERVER['REQUEST_URI']."<br/>"; ///usbong_newsletters/server/usbongExam.php/Q4

//echo $_SERVER['QUERY_STRING']."<br/>"; //after ?

$updatedDirDueToURL="";

//added by Mike, 20230913
$sInputURL=$_SERVER['REQUEST_URI'];
$sNewsNumberLocationPart="";
$iNewsNumberRaw=0;

//step#1
$sNewsNumber=substr($sInputURL, strpos($sInputURL,".php/"));

/*
echo "sInputURL: ".$sInputURL."<br/><br/>";
///usbong_newsletters/server/usbongExam.php

echo "sNewsNumber: ".$sNewsNumber."<br/><br/><br/>";
///usbong_newsletters/server/usbongExam.php
*/

//.".php/"
if ($sNewsNumber==$sInputURL) { //default URL; no Q1, etc.

//added by Mike, 20230920
//TODO: -update: this

//default;
$sNewsNumberLocationPart="Q1-20230815";
//	echo "DITO";
}
else {
	
	//added by Mike, 20230920
	//TODO: -update: this

	//step#2
	$sNewsNumber=substr($sNewsNumber, strpos($sNewsNumber,"N"));

	//echo $sNewsNumber;

	//step#3
	//get the question number in integer
	//start date: 20230815

	$iNewsNumber=intval(substr($sNewsNumber,1));
	$iNewsNumberRaw=$iNewsNumber;

	//echo "sNewsNumber: ".$sNewsNumber."<br/>";

	//step#4
	//reminder: did two questions per day;
	//Q1 : 1; Q2 : 1; 
	//Q3 : 2; Q4 : 2;
	//Q5 : 3; Q6 : 3;
	//Q7 : 4; Q8 : 4;
	if ($iNewsNumber%2==0) { //even
		$iNewsNumber=$iNewsNumber/2-1;
	}
	else { //odd
		//note: computation; simpler exists?
		if ($iNewsNumber==1) {
			$iNewsNumber=0;
		}
		else {
			//echo intval($iNewsNumber/2);
			//echo $iNewsNumber%2;
			
			$iNewsNumber=intval($iNewsNumber/2)+$iNewsNumber%2-1;
		}
		
		//echo $iNewsNumber;
	}
	
	$sNewsNumberWithDate=20230815+($iNewsNumber);

	//echo "sNewsNumberWithDate: ".$sNewsNumberWithDate."<br/>";

	//step#5
	$sNewsNumberLocationPart=$sNewsNumber."-".$sNewsNumberWithDate; //output: Q2-20230816

	//echo $sNewsNumberLocationPart;
}


//added by Mike, 20230920;
//default
$updatedDirDueToURL="";//../";

//if (strpos($_SERVER['REQUEST_URI'],".php/Q")!==false) {	
//.php//N
if (strpos($_SERVER['REQUEST_URI'],".php/")!==false) {	
	//echo "HALLO!";	
	$updatedDirDueToURL="../";
}

	if (isMobile()) {	
		//echo "<img class='Image-companyLogoMobile' src='../assets/images/usbongLogo.png'>";
		
		//edited by Mike, 20230912
		//echo "<img class='Image-companyLogoMobile' src='../assets/images/usbongLogo.png'>";
		
		echo "<img class='Image-companyLogoMobile' src='../".$updatedDirDueToURL."assets/images/usbongLogo.png'>";
	}
	else {
		//echo "<img class='Image-companyLogo' src='../assets/images/usbongLogo.png'>";
		//echo "<img class='Image-companyLogo' src='../../assets/images/usbongLogo.png'>";
				
		echo "<img class='Image-companyLogo' src='../".$updatedDirDueToURL."assets/images/usbongLogo.png'>";
	}
	
?>
		</a>
		</td>
		<td class="imageColumnPartTwo">
		
		<a class="menuLink" target="_blank" href="http://philnits.org/reviewcenters.html">	
<!-- edited by Mike, 20230912 		
<img class="Image-philnitsLogo" src='../assets/images/philnitsLogo.jpg'>
-->
<?php
		echo "<img class='Image-philnitsLogo' src='../".$updatedDirDueToURL."assets/images/philnitsLogo.jpg'>";
?>		
		</a>	
		</td>
		
		<td class="pageNameColumn">
		<div class='formTitle'>
<?php 
/*
	if (isMobile()) {	
			echo "<div class='formTitleMobile'>";
	}
	else {
			echo "<div class='formTitle'>";
	}
*/	
?>			
			
				<b>BALITA</b><br/>
				<?php
					//$dateToday="2023-05-08";
					$dateTodayDay = strtoupper(date('D', strtotime($dateToday)));
					//echo $dateToday;
					
					//edited by Mike, 20230711
					//echo "$dateTodayDay | ".$dateToday;

					//note: can select previous days?...
					
					echo "$dateTodayDay | ";
					//class='webServiceLink'
					echo "<a class='webServiceTimeOffLink' target='_blank' href='http://store.usbong.ph/timeoff'>";
					echo $dateToday;
					echo "</a>";
				?>
			</div>		
		</td>
	   </tr>
	</table>
	
<!-- //edited by Mike, 22030929 -->
<table class="searchTable">
		<tr>
<!-- //removed by Mike, 20231003; TODO: -add: this
			<td>			
			<form id="search-form" method="get" action="">
				<?php/*echo site_url('browse/confirmPatient')*/?>
				<?php				
					$itemCounter = 1;

					//added by Mike, 20230929
					//TODO: -remove: space between textbox and button
				?>
					<table width="100%">
					  <tr>
						<td>		  
						  <input type="text" class="searchInput" placeholder="" name="q" required>				
						<button type="submit" class="searchButton">
							Search
						</button>
						</td>
					  </tr>
					</table>

			</form>
			</td>
			<td>
-->	
	
<!-- //edited by Mike, 20230919
	<br/>
-->
			<?php 						
				//added by Mike, 20230920; from 20230919			
				//default
				$sNewsSource="asahishimbun";
				$sNewsSourceSelected=$sNewsSource;
				//echo ">>>".$iNewsNumberRaw;
//				echo "DITO"; //note previously inside select tag;
			?>
			
			<select class="newsSelect" id="newsSelectId" onchange="showNews()">
			 <?php
				//reference: https://www.w3schools.com/php/php_looping_for.asp; last accessed: 20230913
//				for ($i=1; $i<=7; $i++) {
				//edited by Mike, 20231201; from 20231012
				for ($i=1; $i<=7; $i++) { //<=2		
					//default
//					$sNewsSource="asahishimbun";

					if ($i==2) {
						$sNewsSource="eurogamerspain"; 
					}
					//added by Mike, 20230927
					else if ($i==3) {
						$sNewsSource="elpais"; 
					}
					else if ($i==4) {
						$sNewsSource="ignjapan"; 
					}
					//added by Mike, 20231003
					else if ($i==5) {
						$sNewsSource="famitsu"; 
					}
					//added by Mike, 20231012
					else if ($i==6) {
						$sNewsSource="zaobao"; 
					}
					//added by Mike, 20231201
					else if ($i==7) {
						$sNewsSource="gamedeveloper"; 
					}
					
					if ($i==$iNewsNumberRaw) {
						echo "<option value='N".$i."' selected>".$sNewsSource."</option>";
						
						//added by Mike, 20230920
						//note using string, instead of int
						$sNewsSourceSelected=$sNewsSource;
					}
					else {					
						echo "<option value='N".$i."'>".$sNewsSource."</option>";
					}
				}				
			?>		
<!--			
			  <option value="N1">asahishimbun</option>
			  <option value="N2">eurogamerspain</option>
-->			  
			  </select>

<!-- //added by Mike, 20230929 -->			  
			</td>			
		</tr>
	</table>

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

	//added by Mike, 20230801
	function processWebsiteReference($sToken) {
		if (strpos($sToken, "-->")!==false) {
			//includes space after ">"
			$sToken = str_replace("--> ","",$sToken);
		}	
		
		//added by Mike, 20230919
		if (strpos($sToken, "http")>=3) {			
			//example: 1) ...
			echo substr($sToken,0,strpos($sToken,"http"));
			
			//includes space after ">"
			$sToken = substr($sToken,strpos($sToken,"http"));
			
			//echo "dito: ".$sToken."<br/><br/>";			
		}
/*		
		echo $sToken."<br/><br/>";		
		echo strpos($sToken,"http")."<br/><br/>";
*/
		
		$sReferenceWebsiteTemp=substr($sToken,strpos($sToken,"http"),strpos($sToken,";"));

		$sReferenceWebsiteAccessedDate=substr($sToken,strpos($sToken,";"));
		
		//echo "DITO: ".$sReferenceWebsiteAccessedDate;
		
		//echo "DITO: ".strpos($sToken,";");
		
		//echo "HALLO: ".$sReferenceWebsiteTemp;

		$sTokenTemp=substr($sToken,0,strpos($sToken,$sReferenceWebsiteTemp)); 
		
		echo "$sTokenTemp<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";	
		echo $sReferenceWebsiteTemp."</a>"; //"<br/>";
		//added by Mike, 20230801
		echo $sReferenceWebsiteAccessedDate."<br/>";			
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
			
		//edited by Mike, 20230919
		//$sInputDirectory="/server/notes/LessonsLearned/asahiShimbun/";
		//$sInputDirectory="/server/notes/LessonsLearned/eurogamerspain/";
		$sInputDirectory="/server/notes/LessonsLearned/";

		//$sYearDirectory=$sInputDirectory."2023/";
		//$filename="202305/asahiShimbun20230504.md";
//		$filename="202305/asahiShimbun20230508.md";
		//edited by Mike, 20230515
//		$filename="202305/asahiShimbun20230511.md";	
//		$filename="";
		//note: "99";
//		$filename="202305/asahiShimbun20230599.md";	
		$filename="202305/blank.md";	
	
//		echo ">>>".$sYearDirectory."<br/>";

		//added by Mike, 20231201; from 20230526
		//set to max 5; to iterate from highest in count
		$iReportForTheDayCountMax=5;
		$iReportForTheDayCount=$iReportForTheDayCountMax; //0
		
//		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
//$sYearDirectory="/server/2022/";

		//edited by Mike, 20230919; from 20230511
		//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename;
		
	    //edited by Mike, 20230920	//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory."eurogamerspain/".$filename);

		//echo $sNewsSourceSelected;

		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory.$sNewsSourceSelected."/".$filename);

		
		//echo $completeFilename;
				
		$iDayCount=0;

		//added by Mike, 20230527
		$iTotalDayCountWithMultiReportsForTheDay=0;
		
		
	//added by Mike, 20231206
	$prevCompleteFilename="";

	$iNewsRankCountMax=5;
	
	//TODO: -reverify: this when news source changed;
	$iHitSameNewsCount=0;
		
	//multiple news per source; max 5
	for ($iNewsRankCount=0; $iNewsRankCount<$iNewsRankCountMax; $iNewsRankCount++) {
		
		//echo ">>>iNewsRankCount: ".$iNewsRankCount."<br/>";		
		$completeFilename="";
		
		//added by Mike, 20230511
		while (!file_exists($completeFilename)) {
			
//			echo "completeFilename: ".$completeFilename."<br/><br/>";

		/*	//removed by Mike, 20231202
			//edited by Mike, 20231202; from 20230527
			if ($iDayCount>=90) {//10) {
//			if ($iDayCount>=10*5) { //each day can have 5 news reports	

				//edited by Mike, 20230618				
				//set a default news; LINUX machine
				//edited by Mike, 20230919
				//$filename="202305/asahiShimbun20230508.md";
				
				//added by Mike, 20230923
			//$filename="asahiShimbun/202305/asahiShimbun20230508.md";
				//echo ">>>>".$sNewsSourceSelected;

				$filename="asahishimbun/default/20230508.md";

				if ($sNewsSourceSelected=="eurogamerspain") {
					$filename="eurogamerspain/default/20230919.md";
				}	
				//added by Mike, 20230927
				//TODO: -reduce: such multiple editing for each new news source
				else if ($sNewsSourceSelected=="elpais") {
					$filename="elpais/default/20230926.md";
				}				
				else if ($sNewsSourceSelected=="ignjapan") {
					$filename="ignjapan/default/20230822.md";
				}		
				//added by Mike, 20231003
				else if ($sNewsSourceSelected=="famitsu") {
					$filename="famitsu/default/20230930.md";
				}		
				//added by Mike, 20231012
				else if ($sNewsSourceSelected=="zaobao") {
					$filename="zaobao/default/20231005.md";
				}		
				//added by Mike, 20231201
				else if ($sNewsSourceSelected=="gamedeveloper") {
					$filename="gamedeveloper/default/20231201.md";
				}		
					
				//edited by Mike, 20230919; from 20230618
				//WINDOWS machine; note: double back slash
				if (strpos(dirname(__DIR__), ":")!==false) {
					//edited by Mike, 20230919
			//$filename="202305\asahiShimbun20230508.md";
					//edited by Mike, 20230930
		//$filename="asahiShimbun\\202305\\20230508.md";
					$filename="asahishimbun\\default\\20230508.md";

					//echo "HALLO: ".$filename;
					
					if ($sNewsSourceSelected=="eurogamerspain") {
						$filename="eurogamerspain\\default\\20230919.md";
					}				
					//added by Mike, 20230927
					else if ($sNewsSourceSelected=="elpais") {
						$filename="elpais\\default\\20230926.md";
					}				
					else if ($sNewsSourceSelected=="ignjapan") {
						$filename="ignjapan\\default\\20230822.md";
					}		
					//added by Mike, 20231003
					else if ($sNewsSourceSelected=="famitsu") {
						$filename="famitsu\\default\\20230930.md";
					}					
					//added by Mike, 20231012
					else if ($sNewsSourceSelected=="zaobao") {
						$filename="zaobao\\default\\20231005.md";
					}
					//added by Mike, 20231201
					else if ($sNewsSourceSelected=="gamedeveloper") {
						$filename="gamedeveloper\\default\\20231201.md";
					}
					
				}
				
				
				$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename;	

//echo $completeFilename;

				break;
			}
*/			
			
/*			
			else {
				echo ">>>".$iDayCount;
			}
*/
			
//			$dateTodayTemp = Date('Y-m-d');
			$dateTodayTemp = Date('Y-m-d',strtotime('-'.$iDayCount.'days'));

//			echo $dateTodayTemp."<br/>";

			$dateTodayTemp=str_replace('-','',$dateTodayTemp); 
			
			//added by Mike, 20230707
			//2023-07-07; output: 202307
			$currYearMonthBasedOnDateTodayTemp=substr(str_replace('-','',$dateTodayTemp),0,6);		
			
			//edited by Mike, 20230519
//			$filename="202305/asahiShimbun".$dateTodayTemp.".md";

			//edited by Mike, 20230526
//			$filename="202305/asahiShimbun".$dateTodayTemp;

			//edited by Mike, 20230527
			//echo ">>".dirname(__DIR__);

			//edited by Mike, 20230602
			//TO-DO: -update: this to auto-use the current month

			//WINDOWS machine
			//edited by Mike, 20230707
			//if (strpos(dirname(__DIR__), ":\"")!==false) {
			if (strpos(dirname(__DIR__), ":\\")!==false) {

				//edited by Mike, 20230602				//$filename="202305\asahiShimbun".$dateTodayTemp;
				
				//echo $currYearMonthBasedOnDateTodayTemp;				
				//echo $dateTodayTemp;
				
				//edited by Mike, 20230707				
			//$filename="202306\asahiShimbun".$dateTodayTemp;
				//edited by Mike, 20230930
				//$filename=$currYearMonthBasedOnDateTodayTemp."\asahiShimbun".$dateTodayTemp;		
				$filename=$currYearMonthBasedOnDateTodayTemp."\asahishimbun".$dateTodayTemp;				
			}
			//LINUX machine			
			else {
				//edited by Mike, 20230602
				//$filename="202305/asahiShimbun".$dateTodayTemp;

				//edited by Mike, 20230707				
			//$filename="202306/asahiShimbun".$dateTodayTemp;
				//edited by Mike, 20230930
				//$filename=$currYearMonthBasedOnDateTodayTemp."/asahiShimbun".$dateTodayTemp;
				$filename=$currYearMonthBasedOnDateTodayTemp."/asahishimbun".$dateTodayTemp;
				
			}
			
			//edited by Mike, 20230930; from 20230919
			//$filename=str_replace("asahiShimbun","",$filename);	
			$filename=str_replace("asahishimbun","",$filename);	
			
			//echo $filename."<br/>";
						
			//echo "dito".$currYearMonthBasedOnDateTodayTemp;
			
			//added by Mike, 20230707
			//if does not exist due to the 1st day of the new month
			if (!is_dir($currYearMonthBasedOnDateTodayTemp)) {
				$currYearMonthBasedOnDateTodayTemp=((int)$currYearMonthBasedOnDateTodayTemp-1);
				
				//echo ">>>>".$currYearMonthBasedOnDateTodayTemp."<br/>";
			}				

/*	//removed by Mike, 20230520
//			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename;
			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename.".md";
*/

			//TO-DO: -verify: this;
			//TO-DO: -add: instructions so can already put news articles for the day in storage
			//----------
//				echo ">>>>>>>>>>>>>>>>>>>>".Date('Y-m-d')."<br/>";
			
				$iDistanceBetweenDateTodayAndCurrNews=0;

				$currNewsDate=$dateTodayTemp; 				
				$dateTodayTemp=str_replace('-','',Date('Y-m-d')); 
			
////				echo "dateTodayTemp: ".$dateTodayTemp."<br/>";
////				echo "currNewsDate: ".$currNewsDate."<br/>";
			
				$iDistanceBetweenDateTodayAndCurrNews=intval($dateTodayTemp)-intval($currNewsDate);
				
////				echo "iDistanceBetweenDateTodayAndCurrNews: ".$iDistanceBetweenDateTodayAndCurrNews."<br/>";
						
				//TO-DO: -verify: this
				//edited by Mike, 20230526
//				$iReportForTheDayCount=$iDistanceBetweenDateTodayAndCurrNews;//0;
				$iReportForTheDayCountTemp=$iDistanceBetweenDateTodayAndCurrNews;//0;

/*				
				echo ">>>>>>>>>>>>>>>".$iReportForTheDayCount."<br/>";
*/

//echo "iDistanceBetweenDateTodayAndCurrNews: $iDistanceBetweenDateTodayAndCurrNews.<br/><br/>";
	
//echo ">>>>".$iDistanceBetweenDateTodayAndCurrNews."<br/>";	

//				echo ">>>>>>>>>>>>>>>$iReportForTheDayCountTemp.<br/>";				

				//removed by Mike, 20230526
//				$iDayCount++;
			//----------

//			if ($iReportForTheDayCount>0) {
//			if (($iReportForTheDayCount>0) && ($iReportForTheDayCount<5)){
			//edited by Mike, 20230527
//			if ($iReportForTheDayCount<5){
			//edited by Mike, 20231201
//			if ($iReportForTheDayCount<=5){
			if ($iReportForTheDayCount>=0){
	
			/*			
			echo "dateTodayTemp: ".$dateTodayTemp."<br/>";
			echo "sReportForTheDayCount: ".$iReportForTheDayCount."<br/>";
*/				
				//added by Mike, 20230526
				//TO-DO: -update: this to be based on distance from current date
				
				//edited by Mike, 20230527
				if ($iReportForTheDayCount>1) {		
//					$iReportForTheDayCountTempTwo=$iReportForTheDayCountTemp%5;
										
					//edited by Mike, 20230526
					$filename=$filename."-".$iReportForTheDayCount;
//					$filename=$filename."-".$iReportForTheDayCountTemp;
//					$filename=$filename."-".$iReportForTheDayCountTempTwo;

//					$filename=$filename."-".(($iReportForTheDayCount-$iReportForTheDayCountTemp)%5);
				}

				//edited by Mike, 20230527
/*				
				//echo "filename: ".$filename."<br/>";
				if ($iReportForTheDayCount!=0) {						
					echo "filename: ".$filename."<br/>";
				}
*/
				//edited by Mike, 20231201
				//$iReportForTheDayCount++;
				$iReportForTheDayCount--;
			}
			else {
				//added by Mike, 20230526
				$iReportForTheDayCount=$iReportForTheDayCountMax;//0;
				$iDayCount++;
			}
			
			//edited by Mike, 20230707; from 20230520
//			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename.".md";
			//edited by Mike, 20230919		  	//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory).$filename;

			//TODO: -update: to select news source, e.g. eurogamerspain;
			
			//echo $sNewsSourceSelected;
			
		    //edited by Mike, 20230920	//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory."eurogamerspain/").$filename;
			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory.$sNewsSourceSelected."/").$filename;
		
			//echo $completeFilename."<br/>";
			
//			echo "<br/><br/>".$filename."<br/>";
			
			// C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\asahiShimbun\202307\asahiShimbun20230707.md
			
			//C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\asahiShimbun\202307

//C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\asahiShimbun\202307\asahiShimbun20230707.md

			//C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\asahiShimbun\202307
			
			//added by Mike, 20230707
			if (!file_exists($completeFilename)) {
				$completeFilename=$completeFilename.".md";
			}

			//removed by Mike, 20230919; added 20230919
			//echo $completeFilename."<br/>";
	
			//added by Mike, 20231206			
			if (strpos($prevCompleteFilename, $completeFilename)!==false) {				
				$completeFilename="next";

				//echo ">>>>>>>>>>>>iNewsRankCount: ".$iNewsRankCount;
				
				if ($iHitSameNewsCount>=3) {
					//END
					$iNewsRankCount=$iNewsRankCountMax;
				}

				$iHitSameNewsCount++;
				
				continue;
			}			

			$prevCompleteFilename=$completeFilename;
			//echo "prevCompleteFilename: ".$prevCompleteFilename."<br/>";
	
//			C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\eurogamerspain\202309\20230919.md
			
//			C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\eurogamerspain\202309\20230919.md
			
			//echo $completeFilename;
			
//			$iTotalDayCountWithMultiReportsForTheDay++;			
		}
		
//		echo "<br/><br/>".$completeFilename."<br/>";

	//added by Mike, 20230527
//	echo ">>".$iTotalDayCountWithMultiReportsForTheDay."<br/>";
		
//	echo $iDayCount;
/*
	echo ($iReportForTheDayCount-1);		
	echo ">>".($iReportForTheDayCount*$iDayCount)."<br/>";
*/
	//4 is max per day
//	echo ($iDayCount)*4 + ($iReportForTheDayCount-1);
//	$iTotalDayCountWithMultiReportsForTheDay($iDayCount)*4 + ($iReportForTheDayCount-1);

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
*/	
		echo "<table class='bodyTable'><tr><td>";
		echo "<div class='mainTextDiv'>";
/*
	}
*/	
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
		
		//edited by Mike, 20230507
		//https://www.asahi.com/art; //25 characters;
//		$sReferenceWebsite=substr($sToken,0,strpos($sToken,";"));	
		//added: "..." if $sReferenceWebsite + $sLastAccessed,
		//shall exceed one row
/*
echo ">>>>>>".strpos($sToken,"http")."<br/>";
echo ">>>>>>>>>>>>".strpos($sToken,";")."<br/>";
*/
		$sReferenceWebsite=substr($sToken,0,25)."... ";	
		$sReferenceWebsiteComplete=substr($sToken,strpos($sToken,"http"),
				strpos($sToken,";")-strpos($sToken,"http"));	
		$sLastAccessed=substr($sToken,strpos($sToken,";"));

		//echo strpos($cellValue,"<br/>");
				
		echo "<h3>";
//		echo "## <a class='webServiceLink' target='_blank' href='".$sReferenceWebsite."'>";
		//edited by Mike, 20230520
//		echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsite."'>";
		echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteComplete."'>";
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
//			echo "<br/>";
		}	

		$sToken = str_replace(">","",$sToken);	
		echo "<blockquote class='usbongBlockquote'>";
		echo "$sToken";
		echo "</blockquote>";
	}
	else if (strpos($sToken, "-->")!==false) {		
		//added by Mike, 20230801
		if (strpos($sToken, "http")!==false) {
			processWebsiteReference($sToken);
		}
		else {				
	//		$sToken = str_replace("-->","",$sToken);
			echo "<span class='usbongNoteSpan'>";
			echo "$sToken<br/>";
			echo "</span>";		
		}
/*
		//		$sToken = str_replace("-->","",$sToken);
			echo "<span class='usbongNoteSpan'>";
			echo "$sToken<br/>";
			echo "</span>";		
*/				
	}
	else if (strpos(strtolower($sToken), "reference")!==false) {		
		//added by Mike, 20230518
		if (is_numeric($sPrevToken[0])) {
			echo "<br/>";
		}
			
		//noted by Mike, 20230518; "###" also exists for references
		if (strpos(strtolower($sToken), "####")!==false) {
			$sToken = str_replace("#", "", $sToken);

			$sToken = str_replace("Reference:", "", $sToken);
			$sReferenceWebsiteTemp=substr($sToken,0,strpos($sToken,";"));	
			$sLastAccessedTemp=substr($sToken,strpos($sToken,";")+1);	

			//added by Mike, 20230518
			if (is_numeric($sPrevToken[0])) {
				echo "<br/>";
			}
			
			echo "<span class='usbongTextReferencePart'>";
			echo "<br/>Reference:<br/>";
			//echo "$sToken<br/><br/>";
			//echo "$sReferenceWebsiteTemp;<br/>";
			echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>;<br/>";				
			echo "$sLastAccessedTemp<br/><br/>";
			echo "</span>";		
		}
		else {
			//added by Mike, 20230530
			//removed by Mike, 20230919
//			echo "<br/>";
			
			//edited by Mike, 20230519
			//echo "<b>REFERENCE</b><br/>";			
			echo "<b>### REFERENCE</b><br/>";
		}
	}		
	//added by Mike, 20230518
	//else if (strpos($sToken, "### SELECT WORDS")!==false) {
	else if ((strpos($sToken, "### SELECT WORDS")!==false) ||
		(strpos($sToken, "### SELECT PARTS")!==false)) {
		echo "<span class='usbongTextSectionPart'>";
		echo "<br/>$sToken<br/>";
		echo "</span>";
	}
	//added by Mike, 20230923
	else if (strpos($sToken, "## --")!==false) {
		echo "<hr class='usbongTextSectionPartHr'>";
	}
	else if (strpos($sToken, "##")!==false) {
		//added by Mike, 20230526
		echo "<br/>";
		//edited by Mike, 20230923		
		echo "<span class='usbongTextSectionPart'>";
		echo "$sToken<br/>";
		echo "</span>";
		
//		echo "<hr class='usbongTextSectionPartHr'>";

		//added by Mike, 20230923;
		//TODO: -verify: this
//		echo "<br/>";
	}
	//added by Mike, 20230518
	else if (strpos($sToken, "http")!==false) {
/*
		echo "<span class='usbongNoteSpan'>";
		echo "$sToken<br/>";
		echo "</span>";
*/
//		$sReferenceWebsiteTemp=substr($sToken,strpos($sToken," "),strpos($sToken,";")-2);	
	
		//edited by Mike, 20230801
		processWebsiteReference($sToken);
/*
		$sReferenceWebsiteTemp=substr($sToken,strpos($sToken,"http"),strpos($sToken,";"));

		$sTokenTemp=substr($sToken,0,strpos($sToken,$sReferenceWebsiteTemp)); 

		echo "$sTokenTemp<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
		echo $sReferenceWebsiteTemp."</a><br/>";				
*/
	}
	else {
		//if prev token was a note
		if (strpos($sPrevToken, "-->")!==false) {
			echo "<br/>";
		}
		
		if (is_numeric($sToken[0])) { //1st character a number, notes; not "<"
			//echo "dito: ".$sToken[0]."<br/>";
			if (is_numeric($sPrevToken[0])) {
			  echo "<br/>";
			}
			
			echo "$sToken<br/>";
		}	
		else {
			echo "<p class='usbongTranslatedQuote'>";
			//note: technique
			echo "$sToken";
			echo "</p>";
		}
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
	//added by Mike, 20231206
	//multiple news per source; max 5
	}


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

/* //removed by Mike, 20230507
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
*/	
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