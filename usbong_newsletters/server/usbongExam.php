﻿﻿<!--
  Copyright 2021~2023 SYSON, MICHAEL B. 
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20230918; from 20230914
  @website address: http://www.usbong.ph
  
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
  
  //added by Mike, 20230913
  //TODO: -clean code; simpler computation in odd/even for identifying question/answer locations, etc.
  //TODO: -update: audio file location;
  
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
/*							
							zoom: 80%; 	
							transform: scale(0.8);
							transform-origin: 0 0;	
*/							
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
/*
						body.mobileBody {
							max-width: 100%;
							height: 100%;
							  
							position: relative;	
							padding: 2%;
							
							text-align: justify;
							text-justify: inter-word;					

							overflow: auto;							
						}
*/

						/* edited by Mike, 20230902; TODO: verify: this */
 						body.mobileBody
                        {
							color: rgb(30,30,30); /*rgb(120,63,4);*/
														
							/* //edited by Mike, 20221208
							width: 50%;
							*/	
							width: 100%;
							height: 100%;
							
							padding: 2%;
							padding-top: 1%;
							
							/* //added by Mike, 20220628 
							   //reference: https://www.w3schools.com/cssref/css3_pr_text-justify.asp;
							   //last accessed: 20220628
							*/
							
							text-align: justify;
							text-justify: inter-word;							
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
							
/*							
							position: relative;
							top: -100px;
*/							
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
						
						img.examAnswerImage {
/*
							width: 30%;
							height: auto;
*/
							width: 40%;
							height: auto;							
							
							/* notes: excess space at the bottom */
							display: block;
							vertical-align: top;
							line-height: 0;

							padding-top: 2%;

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
						
						img.examQuestionImage {
/* //TODO: verify: this							
							max-width: 100%;
							height: auto;
*/							

							width: 100%;
							height: auto;

/*	//note: other objects use position relative;
							position: position;
							clip: rect(0px, 800px, 360px, 0px);
*/							
						}
						
/*						
						input.answerSelectInput {
							margin-left: 10%;
						}
*/
						input[type=radio] {
							border: 0px;
							width: 7%;/*10%;*/
							height: 2em;
							margin: 0%;
							padding: 0%;
						}
						
						label.answerSelectLabel {
							margin-right: 8%; /*10%;*/
							font-size: 15pt; /*18%;*/
						}
						
						button.Button-answerDone {

							padding: 12px;
/*
							background-color: #ffe400;
*/
/*
							background-color: #bbbbbb;
*/
/*
							background-color: #222222;
*/
							background-color: #392a14;

							color: /*#00ff00;*/ #ffffff;/*#222222;*/
							font-size: 18px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;	
							
							float: right;							
						}
						
						.Button-answerDone:hover {
							background-color: #261c0e;
							
							/*#888888;*//*#d4be00;*/
							
							color: #719ff4;
						}

						/*added by Mike, 20201013*/
						.Button-answerDone:focus {
							background-color: #261c0e;
							
							/*#888888;*//*#d4be00;*/
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

/* //removed by Mike, 20230830; incorrect output on iPAD, Lenovo TabletPC
							zoom: 80%; 	
							transform: scale(0.8);
							transform-origin: 0 0;
*/

							/*
							border: 1px solid #ab9c7d;						*/	
						}	
						
	                    td.mainTextTd
                        {
							width: 50%;
							border: 1px solid #aaaaaa;/*#ab9c7d;*/	
							padding-right: 2%;		
                        }

						td.questionTd
						{
/*
							width: 60%;
*/							
							width: 100%;
						}
						
						td.answerSelectTd
						{
/*							max-width: 10%;
*/
/*							max-width: 40%;
*/
/*
							width: 100%;
*/							
							text-align: center;
/*
							border: 1px dotted
*/							
/*
							padding-left: 2%;
*/
							
/* //removed by Mike, 20230903							
							border-left: 1px dotted
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
						
						td.answerRightColumnTd {
/*	//removed by Mike, 20230904
							visibility: hidden;
*/							
							padding-top: 0%;
							
							padding-left: 2%;
/* //removed by Mike, 20230903														
							border-left: 1px dotted;	
*/

/* //removed by Mike, 20230914									
							width: 10%;
*/							
							display: none;
						}
						
						td.answerTd {
/*	//removed by Mike, 20230904							
							visibility: hidden;
*/							
							padding-top: 0%;
							padding-bottom: 0%; /*2%*/
							
							padding-left: 2%;
						
							font-weight: bold;							
							font-size: 24pt;

							display: none;
						}

						tr.answerTr {
/*
							border: 1px solid #ab9c7d;
*/							
							/*display: inline-block;
							*/						
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
						
						span.answerTextSpan {
						/*//note: no change in output 
							padding-bottom: 10%;
							font-weight: bold;							
*/							
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
						
						audio.answerAudio {
							width: 240px;
							
							float: right;
/*							
							margin-top: 2%;
*/							
						}
						
						select.questionSelect {
							font-size: 20pt;
							/*font-weight: bold;*/
						}
						
						input.questionNumberInput {
							font-size: 20pt;
							
						}
						
    /**/
    </style>
    <title>
      USBONG EXAM
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
		  
			//added by Mike, 20230824
			//reference: https://stackoverflow.com/questions/7146322/radio-button-needs-to-be-reset-while-refreshing; last accessed: 20230824
			//answer by: Robby Shaw, 20110822T1128
			clearRadioInput.reset();
			
			//added by Mike, 20230825
			//move to top
			window.scrollBy(0, -3000);

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
		
		//added by Mike, 20230912
		//TODO: -add: auto-get question for the day;
		function showQuestion() {
			//alert("HALLO!");

			//reference: https://stackoverflow.com/questions/3487263/how-to-use-onclick-or-onselect-on-option-tag-in-a-jsp-page; last accessed: 20230912;
			//answer by: Manu, 20100815T1201
			//edited by: YakovL, 20160717T1433
			
			var selectBox = document.getElementById("questionSelectId");
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
		
		function showAnswer() {	
			//alert("HALLO!");
			
			//reference: https://www.w3schools.com/jsref/met_document_getelementsbyclassname.asp; last accessed: 20230824
			
			const myAnswerTdColletion = document.getElementsByClassName("answerTd");
								
			//added by Mike, 20230825
/* //edited by Mike, 20230904			
			if (myAnswerTdColletion[0].style.visibility=="") { //still hidden if blank			
				//move downward by 200px
				//edited by Mike, 20230825
				//window.scrollBy(0, 1000);
				//document.getElementsByTagName('h2')[0].scrollIntoView();
				
				document.getElementById("answerH2Id").scrollIntoView();
				
				//edited by Mike, 20230829
				//window.scrollBy(0, -200);
				//removed by Mike, 20230904
				//window.scrollBy(0, -350);
			}
*/

/*	//removed by Mike, 20230904
			if (myAnswerTdColletion[0].style.display=="") { //still hidden if blank
				document.getElementById("answerH2Id").scrollIntoView();
			}
*/			


								
			for (let i = 0; i < myAnswerTdColletion.length; i++) {
				//removed by Mike, 20230904
				//myAnswerTdColletion[i].style.visibility = "visible";
				
				//added by Mike, 20230904
				myAnswerTdColletion[i].style.display ="inline";
			}		
			
			//added by Mike, 20230829
			//removed by Mike, 20230904			//document.getElementById("answerRightColumnTdId").style.visibility = "visible";			
			
			//removed by Mike, 20230914; from 20230904
/*document.getElementById("answerRightColumnTdId").style.display ="inline";			
			*/
			
			//added by Mike, 20230918
			document.getElementById("answerDoneButtonId").style.visibility = "hidden";	
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

/*	//removed by Mike, 20230912		
	//edited by Mike, 20220304	
	$sWebAddressBasePath = "http://store.usbong.ph";
*/	
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
$sQuestionNumberLocationPart="";
$iQuestionNumberRaw=0;

//step#1
$sQuestionNumber=substr($sInputURL, strpos($sInputURL,".php/"));

/*
echo "sInputURL: ".$sInputURL."<br/><br/>";
///usbong_newsletters/server/usbongExam.php

echo "sQuestionNumber: ".$sQuestionNumber."<br/><br/><br/>";
///usbong_newsletters/server/usbongExam.php
*/

//.".php/"
if ($sQuestionNumber==$sInputURL) { //default URL; no Q1, etc.

//default;
$sQuestionNumberLocationPart="Q1-20230815";
//	echo "DITO";
}
else {

	//step#2
	$sQuestionNumber=substr($sQuestionNumber, strpos($sQuestionNumber,"Q"));

	//echo $sQuestionNumber;

	//step#3
	//get the question number in integer
	//start date: 20230815

	$iQuestionNumber=intval(substr($sQuestionNumber,1));
	$iQuestionNumberRaw=$iQuestionNumber;

	//echo "sQuestionNumber: ".$sQuestionNumber."<br/>";

	//step#4
	//reminder: did two questions per day;
	//Q1 : 1; Q2 : 1; 
	//Q3 : 2; Q4 : 2;
	//Q5 : 3; Q6 : 3;
	//Q7 : 4; Q8 : 4;
	if ($iQuestionNumber%2==0) { //even
		$iQuestionNumber=$iQuestionNumber/2-1;
	}
	else { //odd
		//note: computation; simpler exists?
		if ($iQuestionNumber==1) {
			$iQuestionNumber=0;
		}
		else {
			//echo intval($iQuestionNumber/2);
			//echo $iQuestionNumber%2;
			
			$iQuestionNumber=intval($iQuestionNumber/2)+$iQuestionNumber%2-1;
		}
		
		//echo $iQuestionNumber;
	}
	
	$sQuestionNumberWithDate=20230815+($iQuestionNumber);

	//echo "sQuestionNumberWithDate: ".$sQuestionNumberWithDate."<br/>";

	//step#5
	$sQuestionNumberLocationPart=$sQuestionNumber."-".$sQuestionNumberWithDate; //output: Q2-20230816

	//echo $sQuestionNumberLocationPart;
}

if (strpos($_SERVER['REQUEST_URI'],".php/Q")!==false) {	
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
			
				<b>SAMPLE EXAM</b><br/>
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
	<br/>
<?php	
		//TODO: -update: this
?>		
		<table class='bodyTable'>
<!-- added by Mike, 20230911; TODO: add: show input box if Q#; showQuestion() -->
<tr>
	<td>
	<?php 
	//echo "DITO: ".$iQuestionNumberRaw;
?>	

			<select class="questionSelect" id="questionSelectId" onchange="showQuestion()">
			<?php 
				//reference: https://www.w3schools.com/php/php_looping_for.asp; last accessed: 20230913
				for ($i=1; $i<=7; $i++) {
					if ($i==$iQuestionNumberRaw) {
						echo "<option value='Q".$i."' selected>Q".$i."</option>";
					}
					else {					
						echo "<option value='Q".$i."'>Q".$i."</option>";
					}
				}
			?>
<!--			  					
			  <option value="Q1">Q1</option>
			  <option value="Q2">Q2</option>
			  <option value="Q3">Q3</option>
			  <option value="Q4">Q4</option>
			  <option value="Q5">Q5</option>
			  <option value="Q6">Q6</option>
			  <option value="Q7">Q7</option>
			  <option value="QN">Q#</option>
-->

			  </select>
			
<!-- //removed by Mike, 20230912; verify in actual use, randomly generate..., instead of setting the Question number; reminder: sample code for number only input available in Usbong KMS; -->
<!--
<input type="number" class="questionNumberInput" placeholder="" name="questionNumberParam" required>

		<button type="submit" class="Button-login">
			Enter
		</button>
-->		
		
<!--			
			<button onclick="showQuestion()" class="Button-questionGo">
				GO!
			</button>
-->			
	</td>
</tr>		
		
				<tr>
				<td class="questionTd">
<!--<div class='mainTextDiv'>";-->

<!-- //edited by Mike, 20230912; note no wildcards usable in src
//start; 2022A_IP; Q1-20230815 : 2022A_IP-Q1V20230815.jpg
-->
<!-- edited by Mike, 20230912
<img class='examQuestionImage' src='../assets/images/philnits/2022A_IP/Q1-20230815/2022A_IP-Q1V20230815.jpg'>
-->
<?php 
//echo "<img class='examQuestionImage' src='../".$updatedDirDueToURL."assets/images/philnits/2022A_IP/Q1-20230815/2022A_IP-Q1V20230815.jpg'>";

//$sQuestionNumber
//note: variation by Q2
//echo str_replace("-","V",$sQuestionNumberLocationPart);

//echo "<img class='examQuestionImage' src='../".$updatedDirDueToURL."assets/images/philnits/2022A_IP/".$sQuestionNumberLocationPart."/2022A_IP-".str_replace("-","V",$sQuestionNumberLocationPart).".jpg'>";

echo $sQuestionNumberLocationPart;

//TODO: -update: this; variation in filename

//2022A-IPQ1-V20230815
//2022A-IPA1-V20230815

echo "<img class='examQuestionImage' src='../".$updatedDirDueToURL."assets/images/philnits/2022A_IP/".$sQuestionNumberLocationPart."/2022A-IP".str_replace("-","-V",$sQuestionNumberLocationPart).".jpg'>";

?>

<!--
		<img class='examQuestionImage' src='../assets/images/philnits/2022A_IP/Q2-20230815/2022A_IP-Q2V20230815.jpg'>
-->
<!--echo "</div>-->
				</td>
<!--
		</tr>
		<tr>
-->
<!-- added by Mike, 20230903 -->
		</tr>
		</table>
		
		<table class='bodyTable'>
		<tr>

		<td class="answerSelectTd">
<!-- //added by Mike, 20230823; removed by Mike, 20230823;	
			<select name="answerSelect" id="answerSelectId">
			  <option value="A">A</option>
			  <option value="B">B</option>
			  <option value="C">C</option>
			  <option value="D">D</option>
			</select>

<input type="radio" id="answerSelectIdA" name="fav_language" 

TODO: -verify: putting on right column; answer alignment varies based on question image 
			
-->
<form name="clearRadioInput">

<input type="radio" id="answerSelectIdA" value="A" name="fav_language" class="answerSelectInput">
<label class="answerSelectLabel" for="answerSelectIdA">a</label>

<input type="radio" id="answerSelectIdB" value="B" name="fav_language">
<label class="answerSelectLabel" for="answerSelectIdB">b</label>

<input type="radio" id="answerSelectIdC" value="C" name="fav_language">
<label class="answerSelectLabel" for="answerSelectIdC">c</label> 

<input type="radio" id="answerSelectIdD" value="D" name="fav_language">
<label class="answerSelectLabel" for="answerSelectIdD">d</label> 

</form>
</td>
</tr>
<tr>
<td>
		<button id="answerDoneButtonId" onclick="showAnswer()" class="Button-answerDone">
			DONE!
		</button>

<!--
<br/>
<br/>
<br/>
<br/>
		<button onclick="showAnswer()" class="Button-answerDone">
			DONE!
		</button>
-->
		</td>		
				</tr>
				
<!--					
				<tr>
					<td>
						<br/>
						<br/>
						<br/>
						<br/>
					</td>
				</tr>
-->	

				<tr>
				<td class="answerTd">
<!--	//removed by Mike, 20230911		
					<h2 id="answerH2Id"><b>ANSWER</b>
					</h2>
-->
<!-- //edited by Mike, 20230914
				<b>ANSWER</b>
-->
				<span class="answerTextSpan">ANSWER</span>
				<!-- removed by Mike, 20230914 -->
<!--
				</td>
					<td id="answerRightColumnTdId" class="answerRightColumnTd">
-->
					<audio class="answerAudio" width="260" height="312" controls>
	  <source src="../assets/audio/philnits/2022A_IP/Q1-20230815/usbongEnglishSubnetMask - 30 08 2023, 4.25 AM.mp3" type="audio/mp3">
	  Your browser does not support the audio tag.
	</audio>
				</td>
				</tr>
				
				<tr class="answerTr">
				<td class="answerTd">
<!-- edited by Mike, 20230912				
<img class='Image-examAnswer' src='../assets/images/philnits/2022A_IP/Q1-20230815/2022A_IP-A1V20230815.jpg'>
-->
<?php 
//edited by Mike, 20230913
//echo "<img class='Image-examAnswer' src='../".$updatedDirDueToURL."assets/images/philnits/2022A_IP/Q1-20230815/2022A_IP-A1V20230815.jpg'>";

//2022A-IPQ1-V20230815
//2022A-IPA1-V20230815

$sQuestionNumberLocationPartAnswer=str_replace("Q","A",$sQuestionNumberLocationPart);

//echo ">>>>".$sQuestionNumberLocationPartAnswer;

echo "<img class='examAnswerImage' src='../".$updatedDirDueToURL."assets/images/philnits/2022A_IP/".$sQuestionNumberLocationPart."/2022A-IP".str_replace("-","-V",$sQuestionNumberLocationPartAnswer).".jpg'>";

?>
				</td>
				</tr>
			  </table>
<!--
	//note space at the bottom due to bodyTable uses 80% zoom, scale; 
	opting not to use zoom tool anymore; problem with iPAD;
-->

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