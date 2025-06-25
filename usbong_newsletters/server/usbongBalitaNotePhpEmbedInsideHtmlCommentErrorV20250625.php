﻿<!--
  Copyright 2021~2025 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIcS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.

  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20250623; from 20250613
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


  //added by Mike, 20250612
  //TODO: -fix: delay when loading audio text and bat image;
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
							font-size: 100%;
							color: rgb(30,30,30);

							width: 100%;
							height: 100%;
							
							/* 
								//added by Mike, 20250601
								//LINUX LUBUNTU; OS brightness resets
							*/
/*							
//reference: Usbong KMS; viewReportPatientQueue
//TODO: -update: to include the rest of the parts in the page
							background-color: #cacaca; 							
							filter: brightness(80%);
*/
							
							padding: 2%;							
							padding-top: 0%;

/*	//TODO: -reverify: this							
							padding-left: 10%;
							padding-right: 10%;
*/							

							/* //added by Mike, 20220628
							   //reference: https://www.w3schools.com/cssref/css3_pr_text-justify.asp;
							   //last accessed: 20220628
							*/

/*removed by Mike, 20250516
							text-align: justify;
							text-justify: inter-word;
*/							
							
							/*-webkit-user-select: none;*/ /* Safari */
							/*-ms-user-select: none;*/ /* IE 10 and IE 11 */
							/*user-select: none;*/ /* standard syntax */
							transform: scale(1.0);
							
							/*touch-action: none;*/
							overflow: auto;
                        }

	                    div.mainTextDiv
                        {
 							color: rgb(30,30,30);

							width: 100%;
							height: auto;

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
						
						div.newsTitleDiv {
							float: right;
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
							
							/*
							visibility: hidden;
							*/
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
						
						h2
						{
							color: rgb(0,0,0); /* black */
							text-align: left;
							font-weight: Normal;
							font-family: Arial;
						}

						h3
						{
							color: rgb(0,0,0); /* black */
							text-align: left;
							font-weight: Bold;
							font-family: Arial;
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
							color: #222222;
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

						img.Image-usbongYouTubeLogo {
							width: 100%;
							height: auto;
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

						img.Image-favicon {
/*							
							width: 10%;
							height: auto;
*/							
							margin-bottom: 1%;
						}

						img.Image-github-mark {
							width: 3%;
							height: auto;
							margin-bottom: 1%;
							margin-left: 0%;							
						}

						img.ImageTileFrame1 {
							position: absolute;

							clip: rect(0px,32px,32px,0px);
							visibility: hidden;
							
							z-index: 4; /*2;*/
						}
						
						img.Image-radio {
/*
							width: 100%;
							height: auto;
*/
							float: left;							
							margin-bottom: 5%;
						}			

						img.ImagePlayRadio {
							height: 100%;
							width: 100%;
							
							float: left;							
							margin-bottom: 5%;

							visibility: visible;
						}			

						img.ImagePauseRadio {
							height: 100%;
							width: 100%;
							
							float: left;							
							margin-bottom: 5%;
							
							visibility: hidden;
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
							width: 100%;
							
							line-height: 2;

							text-align: justify;
							text-justify: inter-word;
							
							background: #fff;
							color: rgb(20,20,20);
							font-size: 24pt;

							margin:0;
							margin-bottom: 3%;/*5%;*/
							margin-top: 3%;

							border-left: 5px solid #ababab; /*#ab9c7d;*/
							padding: 2px;
							padding-left: 3%;

							/* text-indent: 5%;*/
						}

						blockquote.usbongBlockquotePersonal {
							width: 100%;
							
							line-height: 2;

							text-align: justify;
							text-justify: inter-word;
							
							background: #fff;
							color: rgb(20,20,20);
							font-size: 24pt;

							margin:0;
							margin-bottom: 3%;/*5%;*/
							margin-top: 3%;

							border-left: 0px solid #ab9c7d; /*#ababab;*/
							
							padding: 2px;
							
							/*padding-left: 3%;*/

							/* text-indent: 5%;*/
						}
	 
						iframe {
							width: 100% !important;
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
							width: 100%;
							line-height: 2;
							font-size: 24pt;
						}

						table.imageTable
						{
							width: 100%;
						}

						table.bodyTable
						{
							width: 100%;
							height: auto;
						}

						table.bodyTableHidden
						{
							width: 100%;
							height: auto;
							
							display: none;
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
						
						td.radioImageTd
                        {
							width: 1%;
                        }

						td.selectNewsSourceTd
                        {
							/*width: 1%;*/
							float: right;
							display: inline-block;
							margin-top: 0.6em;
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
							font-family: Arial;
						}

						a.webServiceGitHubLink
						{
							color: rgb(51,145,23);
							font-weight: bold;
							font-family: Arial;
						}

						a.webServiceGitHubLink:hover
						{
							background-color: #f3f3f3;
							margin-left: 0%;							
							padding: 0;
							border-radius: 10px;								
						}

						a.webServiceTimeOffLink
						{
							color: rgb(0,0,0);
							margin-bottom: 2%;
						}

						a.webServiceGameOffLink:hover
						{
							color: rgb(0,0,0);
							background-color: rgb(0,128,255);
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
						
						a.usbongYoutubeLink
						{
						}
						
						a.usbongYoutubeLink:hover
						{
							background-color: #f3f3f3;
							padding-top:15%;
							padding-bottom:15%;	
							border-radius: 10px;							
						}
						
						a.usbongRadioLink
						{
						}
						
						/* currently not used */
						a.usbongRadioLink:hover
						{
							background-color: #000000;
							padding-top:15%;
							padding-bottom:15%;						
							border-radius: 10px;							
						}
	
						select.newsSelect
						{
							float: right;
							font-size: 16pt;
							margin-top: 0.5%;
							margin-bottom: 1%;
							
							background-color: #ffffff;
							border: 1px solid #aaaaaa;
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
						
						button.languageButton {
						}

						span.spanFileNotFound, span.spanKeyphraseNotFound
						{
							width: 100%;
							padding-left: 60px;
							color: rgb(252,60,3);
						}

						span.usbongNoteSpan {
						}					
						
						span.spanAudioDuration {
							text-align: left;

							position: absolute;
							font-size: 2em;
							margin:0;
							margin-top: -4px;					
						}

						span.webServiceLinkRowIncomingDraftSpan {
							text-align: right;
							color: rgb(80,52,37);
							font-weight: bold;
							
							/*							
							background-color: rgb(220,220,220);
							padding: 4px;
							*/
						}

						span.usbongTextSectionPart {
							text-align: left;
							color: rgb(50,50,50);
							font-weight: bold;							
						}

						span.usbongLastUpdatedTextSectionPart {
							width: 100%;
							display: inline-block;
							text-align: right;
							color: rgb(50,50,50);
							/*font-weight: bold;*/
							font-size: 0.8em;							
						}
						
						span.usbongTextReferencePart {
							text-align: left;
							color: rgb(50,50,50);
							font-weight: bold;
						}
						
						span.dateTodaySpan, .balitaSpan {
							font-size: 24pt; /*1em;*/
						}
						
						span.incomingDraftTextSelectOptionSpan {
							vertical-align: middle;
							/*font-size: 8pt; no change*/
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

						span.moreTextSpanIIISummaryReports
						{
							width: 100%;

							line-height: 2;
							font-size: 24pt;

							font-weight: Normal;							
							font-family: Tahoma, Garamond, sans-serif;

							text-align: justify;
							text-justify: inter-word;
/*							
							margin-top: -0.4em;
*/

							display: none;
						}

						span.moreTextSpanIIISummaryReportsHeader
						{
							width: 100%;
							
							line-height: 2;
							font-size: 24pt;

							font-weight: Normal;
							font-family: Tahoma, Garamond, sans-serif;

							text-align: justify;
							text-justify: inter-word;
							
							display: block; /*inline;*/
							margin-bottom: 2%;
						}

						span.spanSummaryReportsCount
						{
							display: none;
						}
						
						/* edited by Mike, 20240515; from 20240511 */
						iFrame.youtubeIFrame
						{
						  width: 100%;
						  height: 512px; /*100%*/
						  display: block;
						  margin: 0 auto;
						}
						
						iFrame.youtubeIFrameMini
						{
						  width: 24%;
						  height: 24%;
						  display: block;
						  margin: 0 auto;
						}
						
						audio::-webkit-media-controls-play-button,
							 audio::-webkit-media-controls-panel {
							background-color: rgb(255,255,255);
						}				

						audio::-webkit-media-controls-enclosure {						
							border-radius: 0;
/*							
							border: 4px solid black;
*/							
						}
						
						audio.audioPlayerDefault {
							width: 0;
							height: 0;
							visibility: hidden;
						}

						div.divAudioPlayerContainer {
						  border: 4px solid white;
						  background-color: white; /*#f1f1f1;*/
						  border-radius: 10px;
						  width: 100%;
						  height: auto;
						  padding-top: 2%;
						}

						button.jeepRadioButton
						{
							background-color: white;
							border: 0px solid;	
						}

						button.origTextButton
						{
							background-color: white;
							border: 0px solid;	
							margin-right: 2.5em;
						}

						button.playRadioButton
						{
/*							
							width: 10%;
							height: 100%;
*/							
							background-color: white;
							border: 0px solid;	
							margin: 0;
							padding: 0;
							margin-left: 2%;
							margin-right: 5%;							
						}

						button.jeepRadioButton:hover
						{
							background-color: #f1f1f1;
							border-radius: 10px;
						}						

						button.origTextButton:hover
						{
							background-color: #f1f1f1;
							border-radius: 10px;
						}						

						button.playRadioButton:hover
						{				
/*						
							width: 10%;
							height: 100%;
*/							
							background-color: #f1f1f1; /*#d6d6d6;*/
							border: 0px solid;	
							border-radius: 10px;
							margin: 0;
							padding: 0;
							margin-left: 2%;
							margin-right: 5%;		
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

		//added by Mike, 20231215
		bHasPressedRightClick=false;
		bHasPressedLeftClickFromRightClick=false;
		
		//added by Mike, 20231218
		bHasLongPressed=false;
		
		//1000/60=16.66; 60 frames per second
		//1000/30=33.33; 30 frames
		const fFramesPerSecondDefault=16.66;
		//const fFramesPerSecondDefault=33.33;
		var fFramesPerSecond=fFramesPerSecondDefault;
		var iCurrentIntervalId=-1;		
		
		//added by Mike, 20250514
		bHasPressedLanguageChange=false;
		
		//added by Mike, 20250612
		var batMonsterImageTile = document.getElementById("batMonsterImageId");
		var iBatMonsterAnimationCount=-1;//0; start at -1
		var iBatMonsterAnimationCountMax=5;
		var iBatMonsterAnimationDelayCount=10; //bat; //0
		var iBatMonsterAnimationDelayCountMax=6;
		
		var iImageFrameWidth=32;// 64; //0;
		var iImageFrameHeight=32;// 64;

		var iImageFrameWidthDefault=32;
		var iImageFrameHeightDefault=32;
		
		var isBatMonsterTileActive=true;

		function myUpdateFunction() {
			var dMyAudioCurrentTimeDurationInSec = document.getElementById("myAudioId").currentTime; 
			var sMyAudioDurationText = document.getElementById("myAudioDurationTextId"); 

/*			//edited by Mike, 20250130		
			dMyAudioCurrentTimeDurationInMin=Math.round(dMyAudioCurrentTimeDurationInSec/60);
			iMyAudioCurrentTimeDurationInSec=Math.round(dMyAudioCurrentTimeDurationInSec%60);
*/
			dMyAudioCurrentTimeDurationInMin=Math.floor(dMyAudioCurrentTimeDurationInSec/60);
			
			iMyAudioCurrentTimeDurationInSec=Math.floor(dMyAudioCurrentTimeDurationInSec%60);

			sMyAudioCurrentTimeDurationInSec=iMyAudioCurrentTimeDurationInSec;
			
			if (iMyAudioCurrentTimeDurationInSec<10) {
				sMyAudioCurrentTimeDurationInSec="0"+iMyAudioCurrentTimeDurationInSec;
			}
			
			sMyAudioDurationText.innerHTML=dMyAudioCurrentTimeDurationInMin+":"+sMyAudioCurrentTimeDurationInSec+" / "+getAudioTotalDuration();
			
			//added by Mike, 20250612
			if (isBatMonsterTileActive) {
				executeBatMonsterWalkingAnimation();
			}
		}
	
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
				//edited by Mike, 20231212
				if (navigator.userAgent.includes("Edge")) { //Edg
					bIsMobile=false;
				}

				//added by Mike, 20230510
				//mobile telephone; not tablet pc
				if (bIsMobile) {
/*					//removed by Mike, 20250623
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
*/
					
					//if not iPad (mobile)
					if (!bIsUsingAppleWebKit) {
						//redirect to lite version;
						var sInput = window.location.href;			
						sInput=sInput.replace("usbongBalita.php","usbongBalitaLite.php");
						sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";

						window.location.href = ""+sInput;

						return;
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

			//added by Mike, 20231215
			//OK;
			onmousedown = (event) => {
			  //alert("DITO");
/*
			  if (event.button === 0) { //left click
          alert("LEFT CLICK!");
        }
*/
			  if (event.button === 2) { //right click
				//alert("DITO");
				bHasPressedRightClick=true;

        //added by Mike, 20231217
        //TODO: -verify: this
        bHasPressedLeftClickFromRightClick=false;
		
				//added by Mike, 20231218
				bHasLongPressed=false;
			  }
			  else {
				//edited by Mike, 20231215
				//bHasPressedRightClick=false;
/*
				if (bHasPressedRightClick) {
					bHasPressedLeftClickFromRightClick=true;
				}
*/

				if (bHasPressedRightClick) {
				  if (bHasPressedLeftClickFromRightClick) {
					bHasPressedRightClick=false;
					bHasPressedLeftClickFromRightClick=false;
				  }
				  else {
					bHasPressedLeftClickFromRightClick=true;
				  }
				}
				else {
					bHasPressedRightClick=false;
          //alert("HALLO!");
				}
			  }
			};
			
			var sMyAudioDurationText = document.getElementById("myAudioDurationTextId"); 

			sMyAudioDurationText.innerHTML="0:00 / "+getAudioTotalDuration();
						
			//added by Mike, 20250612
			if (sessionStorage.getItem('isDisplayOriginalText')==='false') {
				toggleOriginalTextDisplay();
			}

			//fFramesPerSecond=16.66; //100.00; //16.66;
			clearInterval(iCurrentIntervalId);
			iCurrentIntervalId=setInterval(myUpdateFunction, fFramesPerSecond);	
			
			//TODO: -update: this
			//updateNewsNameIfHasIncomingDraft();
		}

/*		
		//TODO: -reverify: this if still necessary
		function updateNewsNameIfHasIncomingDraft() {
			var sSummaryReportsHeader = document.getElementById("summaryReportsHeaderId"+"0").innerHTML; 

			//alert(sSummaryReportsHeader);
			
			var selectBox = document.getElementById("newsSelectId");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			
			var selectedText = selectBox.options[selectBox.selectedIndex].innerHTML
			
			//N1
			//alert(selectedValue);
			//alert (sSummaryReportsHeader.toLowerCase().includes("| incoming draft"));
			if (sSummaryReportsHeader.toLowerCase().includes("| incoming draft")) {
				//alert (selectedText);
				
				//selectBox.options[selectBox.selectedIndex].innerHTML = selectedText + "<span style='color:red;'> *</span>";
				
				selectBox.options[selectBox.selectedIndex].innerHTML = selectedText + " +";
			}
		}
*/
			
		function getAudioTotalDuration() {
			var dMyAudioDurationInSec = document.getElementById("myAudioId").duration; 
			var sMyAudioDurationText = document.getElementById("myAudioDurationTextId"); 
			
			//alert("TOTAL dMyAudioDurationInSec: "+dMyAudioDurationInSec);
			
			dMyAudioDurationInMin=Math.floor(dMyAudioDurationInSec/60);
			iMyAudioDurationInSec=Math.floor(dMyAudioDurationInSec%60);
			sMyAudioDurationInSec=iMyAudioDurationInSec;
			
			if (iMyAudioDurationInSec<10) {
				sMyAudioDurationInSec="0"+iMyAudioDurationInSec;
			}
			
			return dMyAudioDurationInMin+":"+sMyAudioDurationInSec;
		}

		//added by Mike, 20240801
		function changeAudio() {			
			var selectBox = document.getElementById("newsSelectId");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			
			//alert("selectedValue: "+selectedValue);

			var sInput = window.location.href;
			
			var sRadioInput=sInput.substring(sInput.indexOf("/R"));
			
			//alert(sRadioInput);
			
			//alert(sInput.substring(0,sInput.indexOf(".php")));
			sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/"+selectedValue;
				
			//edited by Mike, 20241021
			//if (sRadioInput.length<=3) { //has "/R1", etc.			
			if (sRadioInput.length<=4) { //has "/R1", etc.
				//alert("DITO: "+sRadioInput);
/*	//edited by Mike, 20240820
				if (sRadioInput.includes("/R1")) {
					
					window.location.href = ""+sInput+sRadioInput.replace("/R1","/R2");
				}
				else {
					window.location.href = ""+sInput+sRadioInput.replace("/R2","/R1");
				}				
*/
				if (sRadioInput.includes("/R1")) {					
					window.location.href = ""+sInput+sInput.substring(0,sInput.indexOf("/R"))+"/R2";
				}
				else if (sRadioInput.includes("/R2")) {			
					window.location.href = ""+sInput+sInput.substring(0,sInput.indexOf("/R"))+"/R3";
				}	
				//added by Mike, 20241021
				else if (sRadioInput.includes("/R3")) {			
					window.location.href = ""+sInput+sInput.substring(0,sInput.indexOf("/R"))+"/R4";
				}
				//edited by Mike, 20250131
				else if (sRadioInput.includes("/R4")) {			
					window.location.href = ""+sInput+sInput.substring(0,sInput.indexOf("/R"))+"/R1";
				}					
				else {
					//window.location.href = ""+sInput+sInput.substring(0,sInput.indexOf("/R"))+"/R1";
					window.location.href = ""+sInput+sInput.substring(0,sInput.indexOf("/R"))+"/R2";					
				}	
								
				//window.location.href = ""+sInput+sRadioInput;
			}
			else {
				//alert(">>> "+sInput);
				window.location.href = ""+sInput+"/R2"; //R1
				//selectedValue;
			}
		}
		
		//Game Off 2024
		function playAudio() {
			//alert("DITO");
			//alert(sAudioInput);
			
			//var sAudioSource = document.getElementById("audioSourceId").src;
			//alert(sAudioSource);

			var sImagePlayRadioSource = document.getElementById("imagePlayRadioId").src;
			var myAudio = document.getElementById("myAudioId");
			//>>>http://localhost/usbong_newsletters/assets/images/radioPlay.png?lastmod=20241230T1418
			//alert(">>>"+sImagePlayRadioSource);
		
			var dMyAudioCurrentTimeDurationInSec = document.getElementById("myAudioId").currentTime; 
			var dAudioTotalDuration = getAudioTotalDuration();
			
			//alert("dMyAudioCurrentTimeDurationInSec: "+dMyAudioCurrentTimeDurationInSec);
			
			var fMyAudioVolume=1.0;//0.4;
			myAudio.volume=fMyAudioVolume;
			myAudio.loop=false;		
			//myAudio.play();
						
			if (dMyAudioCurrentTimeDurationInSec==0) {
				document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPlay","radioPause");
				
				myAudio.play();
			}
			else {
				//if currently paused
				if (sImagePlayRadioSource.indexOf("radioPlay")!=-1) {
					document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPlay","radioPause");
					myAudio.play();
					
					//alert("PLAY AUDIO NOW!");					
				}
				//if currently playing;
				else {
					document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPause","radioPlay");
					myAudio.pause();
					
					//alert("PAUSE AUDIO NOW!");
				}				
			}
			//myAudio.setAttribute("src", sAudioSource);
/*
			var fMyAudioVolume=1.0;//0.4;
			myAudio.volume=fMyAudioVolume;
			myAudio.loop=false;		
			myAudio.play();
*/			
			//alert("HALLO!");
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

			//added by Mike, 20240801
			var sRadioInput=sInput.substring(sInput.indexOf("/R"));

			//alert(sInput.substring(0,sInput.indexOf(".php")));
			sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";

			//added by Mike, 20240801						
			if (sRadioInput.length<=3) { //has "/R1", etc.			
				window.location.href = ""+sInput+selectedValue+sRadioInput;
			}
			else {
				window.location.href = ""+sInput+selectedValue;
			}
			
			//TODO: -update: selected option;
			//note: use of "+" (in Javascript), instead of "." (in PHP);
		}

	  //added by Mike, 20250612
	  function toggleOriginalTextDisplay() {
		const usbongBlockquoteCollection = document.getElementsByClassName("usbongBlockquote");
		
		var selectBox = document.getElementById("newsSelectId");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			
		var batMonsterImageTile = document.getElementById("batMonsterImageId");

		//alert(selectedValue);

		if (selectedValue==="N8") { //PERSONAL
			batMonsterImageTile.style.visibility="hidden";
			isBatMonsterTileActive=false;
			//sessionStorage.setItem('isDisplayOriginalText', 'true');
		}
		else {
			batMonsterImageTile.style.visibility="visible";
			isBatMonsterTileActive=true;

			//reference: Google AI; last accessed: 20250612
			for (let i = 0; i < usbongBlockquoteCollection.length; i++) {
			  //console.log(array[i]);
			  //usbongBlockquoteCollection[i].style.display = "none";
			  
			  if (usbongBlockquoteCollection[i].style.display === "none") {
				usbongBlockquoteCollection[i].style.display = "block";
				sessionStorage.setItem('isDisplayOriginalText', 'true');
			  }
			  else {
				usbongBlockquoteCollection[i].style.display = "none";
				sessionStorage.setItem('isDisplayOriginalText', 'false');
			  }
			}
		}
		
		//alert("DITO!!!");
	  }

	  //added by Mike, 20231215
	  function toggleMoreStart(sParamId) {
/*		  
		  //added by Mike, 20250516
		  return;
*/
		  var summaryReportsCount = document.getElementById("summaryReportsCountId"+sParamId.substring("summaryReportsHeaderId".length));

		  //current start time;
		  summaryReportsCount.innerHTML = new Date().getTime();
		  
		  //alert("HALLO!!!!");
	  }


	  //added by Mike, 20231207
	  //toggles in displayed full text;
	  function toggleMoreEnd(sParamId) {
/*
		  //added by Mike, 20250516
		  return;
*/		  
		  //language change button is activated first before toggleMoreEnd function
/*		  
		  alert (bHasPressedLanguageChange);
		  
		  if (bHasPressedLanguageChange) {
			  bHasPressedLanguageChange=false;
			  return;
		  }
*/
		  
		  //alert("toggleMoreEnd");

		  //added by Mike, 20231215
		  if (bHasPressedRightClick) {
//			  bHasPressedRightClick=false;

			  //alert("DITO");
			  return;
		  }
		  
		  //alert(sParamId);
		  
		  var summaryReportsCount = document.getElementById("summaryReportsCountId"+sParamId.substring("summaryReportsHeaderId".length));
		  
		  //edited by Mike, 20250516; from 20231221
		  //TODO: -update: this
		  var mainTextDivId = document.getElementById("mainTextDivId"+sParamId.substring("summaryReportsHeaderId".length));	
		  
		  //note: when article element is selected, the previous is given;
		  //var sSelectedMainTextDivId = sParamId.substring("summaryReportsHeaderId".length);
		  
		  //edited by Mike, 20250517
		  //var sSelectedRow = sParamId.substring("summaryReportsHeaderId".length);
		  var sSelectedRow = sParamId.substring("summaryReportsHeaderId".length);
		  
		  sSelectedRow = sSelectedRow.substring(0,1);
		  
		  //alert("sSelectedRow: "+sSelectedRow);
		  //alert("sSelectedRow.indexOf(...): "+sSelectedRow.indexOf("-"));
		  
		  //alert("sParamId: "+sParamId);
		  
		  //alert(sParamId.substring("sHeaderId".length));
		  
		  //alert("mainTextDivId: "+mainTextDivId);

		  //current start time;
		  //summaryReportsCount.innerHTML = new Date().getTime();

		  //alert("START: "+summaryReportsCount.innerHTML);

		  //fast click
		  //START: 1702621771879
		  //NOW:   1702621771960
		  //DIFFERENCE: 81

		  //long click
		  //START: 1702621799188
		  //NOW:   1702621801029
		  //DIFFERENCE: 1841

		  var iDifference = parseInt(new Date().getTime())-parseInt(summaryReportsCount.innerHTML);

		  //alert("DIFFERENCE: "+iDifference);

		  //alert("START: "+summaryReportsCount.innerHTML+"\n"+"NOW: "+new Date().getTime()+"\n"+"DIFFERENCE: "+iDifference);

		  //OK
		   
		  //alert("toggleMoreEnd; summaryReportsCount.innerHTML "+summaryReportsCount.innerHTML);

		  //alert("iDifference"+iDifference);
		  		  
		  
		  //if NOT fast click
      //edited by Mike, 20231217
		  if (iDifference>=120) {//100) {
			  
			  //added by Mike, 20231218
			  bHasLongPressed=true;
			  
			  return;
		  }
		  //added by Mike, 20231218
		  else {
			if (bHasLongPressed) {
				bHasLongPressed=false;
				return;
			}
			
			bHasLongPressed=false;
		  }

		  //alert("toggleMoreEnd >>>>");


/*		  
		  //removed by Mike, 20231218
		  if (bHasLongPressed) {
			  bHasLongPressed=false;
			  return;
		  }
*/		  

		  //alert("sParamId: "+sParamId);

		  //var summaryReportsId = document.getElementById("summaryReportsId");//+sParamId.substring(0,indexOf(summaryReportsHeaderId));

		  var summaryReportsId = document.getElementById("summaryReportsId"+sParamId.substring("summaryReportsHeaderId".length));
			
	      //edited by Mike, 20250516
		  //var summaryReportsHeaderId = document.getElementById(sParamId);
		  var summaryReportsHeaderId = document.getElementById("summaryReportsHeaderId"+sParamId.substring("summaryReportsHeaderId".length));
		  
		  //alert ("YOYO!!!");

		  //alert(sParamId);
		  
		  //alert(summaryReportsHeaderId.innerHTML);
		  
/*
		  //alert(summaryReportsHeaderId);
		  alert("summaryReportsHeaderId".length);
*/

		  //alert("summaryReportsHeaderId".length);
		  //alert(sParamId.substring(sParamId.indexOf("summaryReportsHeaderId".length)));

		  //sParamId.indexOf("summaryReportsHeaderId"));
		  //alert(sParamId.substring(sParamId.indexOf("summaryReportsHeaderId")));
/*
	//removed by Mike, 20250516
		  //removed by Mike, 20231207
		  //if (sParamId=="summaryReportsHeaderId") {
			  //alert("dito"+summaryReportsId.style.display);
			  //note: 1st summaryReportsId.style.display value is blank, i.e. "";
			  
			  //alert("dito"+summaryReportsHeaderId.style.display);
			  
			  //edited by Mike, 20241031
			  //if display set by CSS to "inline"; blank
			  if (summaryReportsHeaderId.style.display === "") {
				  summaryReportsId.style.display = "inline";

				  summaryReportsHeaderId.style.display = "none";
			  }
			  else if (summaryReportsHeaderId.style.display === "inline") {
				  summaryReportsId.style.display = "inline";

				  summaryReportsHeaderId.style.display = "none";
			  }
			  
////			  else if (summaryReportsId.style.display === "") {
////				  summaryReportsId.style.display = "inline";
////
////				  summaryReportsHeaderId.style.display = "none";
////			  }
			  
			  else if (summaryReportsId.style.display === "none") {
				  summaryReportsId.style.display = "inline";

				  summaryReportsHeaderId.style.display = "none";
			  }
			  else {
				  summaryReportsId.style.display = "none";

				  summaryReportsHeaderId.style.display = "inline";
////				  
////				  //added by Mike, 20231220
////				  //reference: https://www.w3schools.com/howto/howto_js_scroll_to_top.asp; 
////				  //last accessed: 20231220
////				  document.body.scrollTop = 0; // For Safari
////				  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera				  
////
				  //reference: https://www.w3schools.com/jsref/met_element_scrollintoview.asp;
				  //last accessed: 20231220
				  //edited by Mike, 20231221
				  //summaryReportsHeaderId.scrollIntoView();		
				  mainTextDivId.scrollIntoView();
			  }
*/

/*
			  summaryReportsId.style.display = "inline";
			  summaryReportsHeaderId.style.display = "none";
*/
			  
			  //added by Mike, 20250516
			  //set mainTextDivId border of all elements in the list to default;
			  //----------
			  for(iCount=0; iCount<7; iCount++) {				  
				var sLanguageTemp="";
				
				for(iLanguageCount=0; iLanguageCount<5; iLanguageCount++) {		
					switch (iLanguageCount) {
						case 0: //en
							sLanguageTemp="EN";
							break;
						case 1: //jp
							sLanguageTemp="JP";
							break;
						case 2: //es
							sLanguageTemp="ES";
							break;
						case 3: //ch
							sLanguageTemp="ch";
							break;
						case 4: //ph
							sLanguageTemp="PH";
							break;
					}	
/*			
						alert("iCount: "+iCount);
						alert("sLanguageTemp: "+sLanguageTemp);
*/						
					sCurrText=iCount+"-"+sLanguageTemp;
						
					//alert(sCurrText);

					var currMainTextDivId = document.getElementById("mainTextDivId"+sCurrText);
					
					var currSummaryReportsId = document.getElementById("summaryReportsId"+sCurrText);
			
					var currSummaryReportsHeaderId = document.getElementById("summaryReportsHeaderId"+sCurrText);

					
					//alert("!!!!!");					
/*
					alert("sCurrText: "+sCurrText);
					alert("sSelectedMainTextDivId: "+sSelectedMainTextDivId);
*/
					
					//if (otherMainTextDivId!=mainTextDivId) {
/*						
					if (!sCurrText.includes(sSelectedMainTextDivId)) {
*/						
						//removed by Mike, 20250517
						//otherMainTextDivId.style.border = "1px solid #aaaaaa";

/*
					}
					else {
						//alert ("HERE!!!");
					}
*/					
/*
					//get only the iCount; then, updated the border for all available languages;
					alert("sCurrText: "+sCurrText);
					alert("iCount: "+iCount);
					alert("sSelectedRow: "+sSelectedRow);
*/					
					if (currMainTextDivId!==null) {
						//if (!sCurrText.indexOf(iCount)!==-1) {
						//if ((!sCurrText.indexOf(iCount)!==-1) && (sSelectedRow.indexOf(iCount)!==-1)) {
						if ((!sCurrText.indexOf(iCount)!==-1) && (iCount==parseInt(sSelectedRow))) {
	
							currMainTextDivId.style.border = "5px solid #1c9bdf"; 
							
/*							
							if (currSummaryReportsId!==null) {
								currSummaryReportsId.style.display = "inline";
							}
							if (currSummaryReportsHeaderId!==null) {
								currSummaryReportsHeaderId.style.display = "none";
							}
*/
			  if ((currSummaryReportsId!==null) && (currSummaryReportsHeaderId!==null)) {
				  //if display set by CSS to "block"; blank
				  if (currSummaryReportsHeaderId.style.display === "") {
					  //currSummaryReportsId.style.display = "inline";
					  currSummaryReportsId.style.display = "block";
					  
					  currSummaryReportsHeaderId.style.display = "none";
				  }
				  else if (currSummaryReportsHeaderId.style.display === "block") {
					  //currSummaryReportsId.style.display = "inline";
					  currSummaryReportsId.style.display = "block";

					  currSummaryReportsHeaderId.style.display = "none";
				  }
				  else if (currSummaryReportsId.style.display === "none") {
					  //currSummaryReportsId.style.display = "inline";
					  currSummaryReportsId.style.display = "block";
					  currSummaryReportsHeaderId.style.display = "none";
				  }
				  else {
					  //alert("START"+currMainTextDivId.clientWidth);
					  //alert("START currMainTextDivId: "+currMainTextDivId.offsetWidth);
					  //alert("START currSummaryReportsHeaderId: "+currSummaryReportsHeaderId.offsetWidth);
					  
					  var iStartCurrMainTextDivOffsetWidth=currMainTextDivId.offsetWidth;
					  					  
					  ///alert ("DITO!!!!");
					  var usbongBlockquote = document.getElementById("usbongBlockquoteId"+sCurrText);

					  //currSummaryReportsHeaderId.style.width = "%";
					  //currSummaryReportsHeaderId.innerHTML+="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
					  
/*
				//removed by Mike, 20250517; if header text is in CN, width decreases;
					  currSummaryReportsId.style.display = "none";
					  currSummaryReportsHeaderId.style.display = "inline";

					  currMainTextDivId.scrollIntoView();
*/					  
					  //alert(currSummaryReportsHeaderId.innerHTML);
					  //alert(currSummaryReportsHeaderId.clientWidth);
					  //alert(currSummaryReportsHeaderId.style.width);

					  //currMainTextDivId.style.width="100%";//"1213px";
/*					  					  
					  var iNewCurrMainTextDivOffsetWidth=currMainTextDivId.offsetWidth;
					  
					  while (iNewCurrMainTextDivOffsetWidth<iStartCurrMainTextDivOffsetWidth) {
						  currMainTextDivId.innerHTML+="X";
						  
						  iNewCurrMainTextDivOffsetWidth+="X".width;
					  }
*/					  

/*
					  if (iNewCurrMainTextDivOffsetWidth<iStartCurrMainTextDivOffsetWidth) {
					    //currSummaryReportsHeaderId.width=iStartCurrMainTextDivOffsetWidth;
						currSummaryReportsHeaderId.innerHTML+="XXXXXXXXXXXXXX";
					  }
*/					  

/*
					  //alert(currMainTextDivId.clientWidth);
					  alert("currMainTextDivId: "+currMainTextDivId.offsetWidth);
					  alert("currSummaryReportsHeaderId: "+currSummaryReportsHeaderId.offsetWidth);
*/

/*
					  alert(usbongBlockquote.innerHTML);
					  alert(usbongBlockquote.offsetWidth);
*/					  
/*
					  //usbongBlockquote.offsetWidth="1082";
					  alert(usbongBlockquote.innerHTML);
					  alert(usbongBlockquote.clientWidth); //1077
*/					  
					  //usbongBlockquote.clientWidth=1077;
					  
					  //currSummaryReportsHeaderId.style.width="3000px";
					  //currMainTextDivId.style.width="1082px";
					  //currMainTextDivId.style.width="100%";
				  }
			  }
			  

							//alert ("!!!!");
						}
						else {
							currMainTextDivId.style.border = "1px solid #aaaaaa";
/*							
							if (currSummaryReportsId!==null) {
								currSummaryReportsId.style.display = "none";
							}
							if (currSummaryReportsHeaderId!==null) {
								currSummaryReportsHeaderId.style.display = "inline";
							}
*/							
							//alert ("WALA!!!");
						}
					}
				}
			  }
			  //----------
			  
			  
			  //alert("DITO!!!");
			  
			  //alert(sSelectedMainTextDivId);
			  
			  //edited by Mike, 20250516; from 20231221
			  //TODO: -update: this
			  //mainTextDivId.style.border = "5px solid #1c9bdf"; //37b819; green; 1c9bdf; blue

			  //alert(">>>>DITO!!!");
			  
			  
/*			  //removed by Mike, 20250516
			  //TODO: -update: max count 7 to use variable
			  //example: 0-EN
			  var iSelectedMainTextDivId = sParamId.substring("summaryReportsHeaderId".length);
			  
			  alert("iSelectedMainTextDivId: "+iSelectedMainTextDivId);
			  
			  //max articles to display at 7 now; 
			  //TODO: -update to use variable
			  //for(iCount=0; iCount<5; iCount++) {
			  for(iCount=0; iCount<7; iCount++) {				  
				  //alert(iCount);
				//if (iCount!=iSelectedMainTextDivId) {
					//edited by Mike, 20250516
					//var otherMainTextDivId = document.getElementById("mainTextDivId"+iCount);	

					var sLanguageTemp="";
					for(iLanguageCount=0; iLanguageCount<5; iLanguageCount++) {		
						switch (iLanguageCount) {
							case 0: //en
								sLanguageTemp="EN";
								break;
							case 1: //jp
								sLanguageTemp="JP";
								break;
							case 2: //es
								sLanguageTemp="ES";
								break;
							case 3: //ch
								sLanguageTemp="ch";
								break;
							case 4: //ph
								sLanguageTemp="PH";
								break;
						}	
			
////						alert("iCount: "+iCount);
////						alert("sLanguageTemp: "+sLanguageTemp);
						
						sCurrText=iCount+"-"+sLanguageTemp;
						
						//alert(iCount);
						
						if (!sCurrText.includes(iSelectedMainTextDivId)) {

							var otherMainTextDivId = document.getElementById("mainTextDivId"+sCurrText);	

							otherMainTextDivId.style.border = "1px solid #aaaaaa";
						}
						else {
							alert(sCurrText);
						}
					}			
			  }
*/				  
				  
		  //}
		}
		
	  //added by Mike, 20250517; from 20250515
	  //TODO: -update: this
	  function myLanguageChangeFunctionPREV(iNewsRankCount,sLanguage) {
/*
		  alert(sLanguage);
		  alert(iNewsRankCount);
*/
		  //toggleMoreStart("summaryReportsHeaderId"+iNewsRankCount+"-"+sLanguage);
		  //toggleMoreEnd("summaryReportsHeaderId"+iNewsRankCount+"-"+sLanguage);
		  
		  //bHasPressedLanguageChange=true;
/*		  
		  if (sLanguage.includes("EN")) {
			  sLanguage="";
		  }
*/		  
/*		  
		  var bodyTable = document.getElementById("bodyTableId");	
		  bodyTable.style.display = "none";		  
*/		  
/*
		  alert("bodyTableId"+iNewsRankCount+"-"+sLanguage);
*/
		  //set to none all the available languages
		  //var bodyTable = document.getElementById("bodyTableId");	
		  //example
		  //var bodyTable = document.getElementById("'bodyTableId0-ES'");
		  //var bodyTable = document.getElementById("bodyTableId"+iNewsRankCount+"-"+sLanguage);
		  var bodyTableEN = document.getElementById("bodyTableId"+iNewsRankCount+"-EN");
		  if (bodyTableEN) {
			bodyTableEN.style.display = "none";		  
		  }

		  //alert("DITO!");

		  var bodyTableJP = document.getElementById("bodyTableId"+iNewsRankCount+"-JP");
		  if (bodyTableJP) {
			bodyTableJP.style.display = "none";		  
		  }

		  var bodyTableES = document.getElementById("bodyTableId"+iNewsRankCount+"-ES");
		  if (bodyTableES) {
			bodyTableES.style.display = "none";		  
		  }

		  var bodyTableCH = document.getElementById("bodyTableId"+iNewsRankCount+"-CH");
		  if (bodyTableCH) {
			bodyTableCH.style.display = "none";		  
		  }

		  var bodyTablePH = document.getElementById("bodyTableId"+iNewsRankCount+"-PH");
		  if (bodyTablePH) {
			bodyTablePH.style.display = "none";		  
		  }
		  
		  //alert ("sLanguage: "+sLanguage);
		  
		  var bodyTable = document.getElementById("bodyTableId"+iNewsRankCount+"-"+sLanguage);	
		  //bodyTable.style.display = "inline"; 
		  bodyTable.style.display = "block"; 
		  
		  var summaryReports = document.getElementById("summaryReportsId"+iNewsRankCount+"-"+sLanguage);

		  var summaryReportsHeader = document.getElementById("summaryReportsHeaderId"+iNewsRankCount+"-"+sLanguage);
		  
		  //set this here to open the article;
		  //note CN resizes to smaller width otherwise;
		  //summaryReports.style.display = "inline";
		  summaryReports.style.display = "block";
		  summaryReportsHeader.style.display = "none"; 
		  
		  var mainTextDivId = document.getElementById("mainTextDivId"+iNewsRankCount+"-"+sLanguage);	
		  
		  mainTextDivId.scrollIntoView();
		  
		  //alert("DITO!!!!");
		  
/*
		  var bodyTableJP = document.getElementById("bodyTableIdJP");
		  if (bodyTableJP!==null) {
			bodyTableJP.style.display = "none";		  
		  }

		  var bodyTableES = document.getElementById("bodyTableIdES");
		  if (bodyTableES!==null) {
			bodyTableES.style.display = "none";		  
		  }

		  var bodyTableCH = document.getElementById("bodyTableIdch");
		  if (bodyTableCH!==null) {
			bodyTableCH.style.display = "none";		  
		  }

		  var bodyTablePH = document.getElementById("bodyTableIdPH");
		  if (bodyTablePH!==null) {
			bodyTablePH.style.display = "none";		  
		  }
		  
		  var bodyTable = document.getElementById("bodyTableId"+sLanguage);	
		  bodyTable.style.display = "inline"; 
*/		  

	  }
	  
	  //added by Mike, 20250612
	  function executeBatMonsterWalkingAnimation() {
		var batMonsterImageTile = document.getElementById("batMonsterImageId");
		
		batMonsterImageTile.style.visibility="visible";

		//iMonsterAnimationDelayCountMax=15;
		
		if (iBatMonsterAnimationDelayCount>=iBatMonsterAnimationDelayCountMax) {
			iBatMonsterAnimationCount=(iBatMonsterAnimationCount+1)%2; //3; //last hidden

			iBatMonsterAnimationDelayCount=0;			

		}
		else {
			iBatMonsterAnimationDelayCount++;

	//		alert("iExplosionEffectAnimationCount: "+iExplosionEffectAnimationCount);
		}

		//var iFrameY=0;
		var iFrameY=iImageFrameHeight*2;//64*2; 128;

		//currently two frames only
		if (iBatMonsterAnimationCount==0) { 
			batMonsterImageTile.style.objectPosition = "-" + 0 + "px -" + iFrameY + "px";
		}
		else if (iBatMonsterAnimationCount==1) { 
			batMonsterImageTile.style.objectPosition = "-" + iImageFrameWidthDefault + "px -" + iFrameY + "px";
		}
	}
	
	
      //added by Mike, 20250517; from 20250515
	  function myLanguageChangeFunction(iNewsRankCount,sLanguage) {
	/*
			  alert(sLanguage);
			  alert(iNewsRankCount);
	*/
			  
			  //alert(sLanguage);
			  //alert("usbongBlockquoteId"+iNewsRankCount+"-"+sLanguage);
/*			  
			  //noted: 52 characters; required for header;
			  usbongBlockquote = document.getElementById("usbongBlockquoteId"+iNewsRankCount+"-"+sLanguage);
			  
			  //alert(usbongBlockquote.innerHTML);
			  alert(usbongBlockquote.innerHTML.length);
*/			  
/*
			  //TODO: -update: this
			  //if (sLanguage.indexOf("ch")!=-1) {
				  //alert("DITO!!!");
				  //noted: 51 characters; required for header;
				  usbongBlockquote = document.getElementById("usbongBlockquoteId"+iNewsRankCount+"-"+sLanguage);
				  
				  alert(usbongBlockquote.innerHTML.length);
				  
				  iUsbongBlockquoteStrLen=usbongBlockquote.innerHTML.length;
				  iUsbongBlockquoteStrLenMax=102; //51;
				  
				  iUsbongBlockquoteStrLenDiffFromMax=iUsbongBlockquoteStrLenMax-iUsbongBlockquoteStrLen;
				  
				  if (iUsbongBlockquoteStrLenDiffFromMax>0) {
					  //usbongBlockquote.innerHTML
					  alert("HALLO!!!!: "+iUsbongBlockquoteStrLenDiffFromMax);
					  
					  usbongBlockquote.style.fontSize = "2em"; 
					  
					  for (var iCharCount=0; iCharCount<iUsbongBlockquoteStrLenDiffFromMax; iCharCount++) {
						//usbongBlockquote.innerHTML=usbongBlockquote.innerHTML+"<font color='#FFFFFF'>哈</font>";
					  }
				  }
			  //}
*/
			  
			  //set to none all the available languages
			  //var bodyTable = document.getElementById("bodyTableId");	
			  //example
			  //var bodyTable = document.getElementById("'bodyTableId0-ES'");
			  //var bodyTable = document.getElementById("bodyTableId"+iNewsRankCount+"-"+sLanguage);
			  var bodyTableEN = document.getElementById("bodyTableId"+iNewsRankCount+"-EN");
			  if (bodyTableEN) {
				bodyTableEN.style.display = "none";		  
			  }

			  //alert("DITO!");

			  var bodyTableJP = document.getElementById("bodyTableId"+iNewsRankCount+"-JP");
			  if (bodyTableJP) {
				bodyTableJP.style.display = "none";		  
			  }

			  var bodyTableES = document.getElementById("bodyTableId"+iNewsRankCount+"-ES");
			  if (bodyTableES) {
				bodyTableES.style.display = "none";		  
			  }

			  var bodyTableCH = document.getElementById("bodyTableId"+iNewsRankCount+"-CH");
			  if (bodyTableCH) {
				bodyTableCH.style.display = "none";		  
			  }

			  var bodyTablePH = document.getElementById("bodyTableId"+iNewsRankCount+"-PH");
			  if (bodyTablePH) {
				bodyTablePH.style.display = "none";		  
			  }
			  
			  //alert ("sLanguage: "+sLanguage);
			  
			  var bodyTable = document.getElementById("bodyTableId"+iNewsRankCount+"-"+sLanguage);	
			  //bodyTable.style.display = "inline"; 
			  bodyTable.style.display = "block"; 
			  
			  var summaryReports = document.getElementById("summaryReportsId"+iNewsRankCount+"-"+sLanguage);

			  var summaryReportsHeader = document.getElementById("summaryReportsHeaderId"+iNewsRankCount+"-"+sLanguage);
			  
			  //set this here to open the article;
			  //note CN resizes to smaller width otherwise;
			  //summaryReports.style.display = "inline";
			  summaryReports.style.display = "block";
			  summaryReportsHeader.style.display = "none"; 
			  
			  var mainTextDivId = document.getElementById("mainTextDivId"+iNewsRankCount+"-"+sLanguage);	
			  
			  mainTextDivId.scrollIntoView();
			  
			  //alert("DITO!!!!");		
		  }
	  </script>	  

<?php
	//added by Mike, 20250610
	//TODO: -update: this
	$bIsShowOriginalText=true; //true; //false; //default

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
		echo "<body id='myBodyId' class='body' onload='onLoad()'>";
	}

	date_default_timezone_set('Asia/Hong_Kong');

	//edited by Mike, 20200726
	//$dateToday = (new DateTime())->format('Y-m-d');
	$dateToday = Date('Y-m-d');
	
	//default
	$updatedDirDueToURL="";

	if (strpos($_SERVER['REQUEST_URI'],".php/")!==false) {
		$updatedDirDueToURL="../";
		if (strpos($_SERVER['REQUEST_URI'],"/R")!==false) {
			$updatedDirDueToURL=$updatedDirDueToURL."../";
		}
	}	
	
?>
	<table class="imageTable">
	  <tr>
		<td class="imageColumn">
		<a class="menuLink" target="_blank" href="http://www.usbong.ph">
<?php
		echo "<img class='Image-companyLogo' src='../".$updatedDirDueToURL."assets/images/usbongLogo.png'>";
?>		
		</a>
		</td>
		<td class="imageColumnPartTwo">
		<a class="menuLink" target="_blank" href="https://philnits.org/review-38/">
<?php
		echo "<img class='Image-philnitsLogo' src='../".$updatedDirDueToURL."assets/images/philnitsLogo.jpg'>";
?>		
		</a>
		</td>
		<td class="imageColumnPartTwo">
		<a class="usbongYoutubeLink" target="_blank" href="https://www.youtube.com/@usbong">

<?php
		echo "<img class='Image-usbongYouTubeLogo' src='../".$updatedDirDueToURL."assets/images/usbongYouTubeLogo.png'>";
?>
		</a>
		</td>
		<td class="pageNameColumn">
			<div class='formTitle'>
				<span class='balitaSpan'>
				<b>BALITA</b>
				</span>
				<a class='webServiceGameOffLink' target='_blank' href='https://masarapmabuhay.itch.io/blue-sapphire-galaxy'>
				<?php
						echo "<img class='Image-favicon' src='../".$updatedDirDueToURL."assets/images/favicon.png'>";
				?>
				</a>
				<br/>
				<?php
					//$dateToday="2023-05-08";
					$dateTodayDay = strtoupper(date('D', strtotime($dateToday)));
					echo "<span class='dateTodaySpan'>$dateTodayDay | ";
					echo "<a class='webServiceTimeOffLink' target='_blank' href='http://store.usbong.ph/timeoff'>";
					echo $dateToday;
					echo "</a></span>";
				?>
			</div>
		</td>
	   </tr>
	   </table>	   
	
	   <table class="searchTable">
		<tr>
			<td class="radioImageTd">
				<button class='jeepRadioButton'>
				<?php
				//https://stackoverflow.com/questions/321865/how-to-clear-or-replace-a-cached-image; last accessed: 20241026
					//answer by: Greg, 20081126T1928
					
					echo "<img class='Image-radio' src='../".$updatedDirDueToURL."assets/images/jeep.png?lastmod=20241023' onclick='changeAudio()'>"; //radio
				?>	
				</button>
			</td>
			<td>
<?php
			if (strpos($_SERVER['REQUEST_URI'],"/R1")!==false) {
				$sAudioInput="../../../assets/audio/nihongo/2024/202412/Recording UsbongNihongoGozareba 20241221T1918.mp3";
			}
			else if (strpos($_SERVER['REQUEST_URI'],"/R2")!==false) {
				$sAudioInput="../../../assets/audio/english/2024/202407/Recording UsbongEnglishLove 20240728T1908.mp3";
			}
			else if (strpos($_SERVER['REQUEST_URI'],"/R3")!==false) {
				$sAudioInput="../../../assets/audio/spanish/2024/202408/Recording UsbongSpanishMolestarnos 20240819T1854.mp3";
			}
			else if (strpos($_SERVER['REQUEST_URI'],"/R4")!==false) {
				$sAudioInput="../../../assets/audio/filipino/2024/202410/Recording UsbongFilipinoSFZ 20241019T1929.mp3";
			}	
			else {
				if (substr($_SERVER['REQUEST_URI'],strlen($_SERVER['REQUEST_URI'])-1)==="/N") {
					$sAudioInput="../../assets/audio/nihongo/2024/202412/Recording UsbongNihongoGozareba 20241221T1918.mp3";
				}		
				else { 
					//no slash at the end
					//http://localhost/usbong_newsletters/server/usbongBalita.php
					//edited by Mike, 20241010			
					$sAudioInput=$updatedDirDueToURL."../assets/audio/nihongo/2024/202412/Recording UsbongNihongoGozareba 20241221T1918.mp3";
				}
			}
	
	//echo $sAudioInput;
?>
				<div class="divAudioPlayerContainer">
				<button class="playRadioButton">
				<?php
					echo "<img id='imagePlayRadioId' class='ImagePlayRadio' src='../".$updatedDirDueToURL."assets/images/radioPlay.png?lastmod=20241230T1418' onclick='playAudio()'>"; 
					
				?>
				</button>

				<span id="myAudioDurationTextId" class="spanAudioDuration">
				</span>

				<audio id="myAudioId" class="audioPlayerDefault" width="416" height="312" controls>
				  <source id="audioSourceId" src="<?php echo $sAudioInput;?>" type="audio/mp3">
				  Your browser does not support the audio tag.
				</audio>	

				</div>
			</td>
			<td class="selectNewsSourceTd">
				<button class='origTextButton'>
				<?php
				//https://stackoverflow.com/questions/321865/how-to-clear-or-replace-a-cached-image; last accessed: 20241026
					//answer by: Greg, 20081126T1928
					echo "<img id='batMonsterImageId' class='ImageTileFrame1' src='../".$updatedDirDueToURL."assets/images/monsters.png?lastmod=20250612' onclick='toggleOriginalTextDisplay()'>"; 
					
				?>	
				</button>
			<?php
				//added by Mike, 20250430; from 20230920
				//default
				$sNewsSource="famitsu";//"personal";//asahishimbun";//"personal";
				$sNewsSourceSelected=$sNewsSource;
				//added by Mike, 202504240; from 20241017
				$sNewsDisplayedName="FAMITSU";//"PERSONAL";//ASAHI SHIMBUN"; //"PERSONAL";

			?>
				<select class="newsSelect" id="newsSelectId" onchange="showNews()">
			 <?php
				//reference: https://www.w3schools.com/php/php_looping_for.asp; last accessed: 20230913
					for ($i=1; $i<=8; $i++) { //<=7; 6
						//default
	//					$sNewsSource="asahishimbun";

						if ($i==1) {
							$sNewsSource="asahishimbun";
							$sNewsDisplayedName="ASAHI SHIMBUN";
						}
						else if ($i==2) {
							$sNewsSource="eurogamerspain";
							$sNewsDisplayedName="EUROGAMER SPAIN";
						}
						else if ($i==3) {
							$sNewsSource="ignjapan";
							$sNewsDisplayedName="IGN JAPAN";
						}
						else if ($i==4) {
							$sNewsSource="famitsu";
							$sNewsDisplayedName="FAMITSU";
						}
						else if ($i==5) {
							$sNewsSource="gamedeveloper";
							$sNewsDisplayedName="GAME DEVELOPER";
						}
						else if ($i==6) {
							$sNewsSource="zaobao";
							$sNewsDisplayedName="ZAOBAO";
						}
						else if ($i==7) {
							$sNewsSource="ignchina";
							$sNewsDisplayedName="IGN CHINA";
						}
						else if ($i==8) {
							$sNewsSource="personal";
							$sNewsDisplayedName="PERSONAL";
						}
						
						$sIncomingDraftTextSelectOption="";
						
						//verify if an incoming draft is present						
						for ($iDayCount=0; $iDayCount<$iDateTodayAndNewsLastAccessedDifferenceMax; $iDayCount++) { 
							$dateTodayTemp = Date('Y-m-d',strtotime('-'.$iDayCount.'days'));

							$dateTodayTemp=str_replace('-','',$dateTodayTemp);
							
							//2023-07-07; output: 202307
							$currYearMonthBasedOnDateTodayTemp=substr(str_replace('-','',$dateTodayTemp),0,6);

							$currYearOnlyBasedOnDateTodayTemp=substr(str_replace('-','',$dateTodayTemp),0,4);
				
							//WINDOWS machine
							//edited by Mike, 20230707
							//if (strpos(dirname(__DIR__), ":\"")!==false) {
							if (strpos(dirname(__DIR__), ":\\")!==false) {
								$filename=$currYearOnlyBasedOnDateTodayTemp."\\".$currYearMonthBasedOnDateTodayTemp."\\".$dateTodayTemp;
							}
							//LINUX machine
							else {				
								$filename=$currYearOnlyBasedOnDateTodayTemp."/".$currYearMonthBasedOnDateTodayTemp."/".$dateTodayTemp;
							}
							
							$sInputDirectory="/server/notes/LessonsLearned/";
							
							$iLanguageCountMax=5;
							$bIsLanguageBlank=false;
			
							for ($iLanguageCount=0; $iLanguageCount<$iLanguageCountMax; $iLanguageCount++) {
								switch ($iLanguageCount) {
									case 0: //en
										$sLanguageTemp="";
										break;
									case 1: //jp
										$sLanguageTemp="jp";
										break;
									case 2: //es
										$sLanguageTemp="es";
										break;
									case 3: //ch
										$sLanguageTemp="ch";
										break;
									case 4: //ph
										$sLanguageTemp="ph";
										break;
								}			

							$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory.$sNewsSource."/").$filename.$sLanguageTemp.".md";

							//echo $completeFilename."<br/>";

							if (!file_exists($completeFilename)) {
								continue;
							}

							$iDateTodayAndNewsLastAccessedDifference=processDateTodayAndNewsLastAccessedDifference($dateTodayTemp);
								
							if ($iDateTodayAndNewsLastAccessedDifference<$iDateTodayAndNewsLastAccessedDifferenceMax) {
								$sIncomingDraftTextSelectOption="<span class='incomingDraftTextSelectOptionSpan'>⭐</span>"; //*
							}	
						}
					}
			
						//TODO: -verify: this
						if ($i==$iNewsNumberRaw) {							
							echo "<option value='N".$i."' selected>".$sNewsDisplayedName.$sIncomingDraftTextSelectOption."</option>";

							//added by Mike, 20230920
							//note using string, instead of int
							$sNewsSourceSelected=$sNewsSource;
						}
						else {
							echo "<option value='N".$i."'>".$sNewsDisplayedName.$sIncomingDraftTextSelectOption."</option>";
						}
					}
			?>
<!--
			  <option value="N1">asahishimbun</option>
			  <option value="N2">eurogamerspain</option>
-->
			  </select>
			</td>
		</tr>
	</table>
	<br/>
<?php
		echo ">>>>>";
		$sInputDirectory="/server/notes/LessonsLearned/";

		//WINDOWS machine
		if (strpos(dirname(__DIR__), ":\\")!==false) {
			$filename=$currYearOnlyBasedOnDateTodayTemp."\\".$currYearMonthBasedOnDateTodayTemp."\asahishimbun".$dateTodayTemp;
		}
		//LINUX machine
		else {				
			$filename=$currYearOnlyBasedOnDateTodayTemp."/".$currYearMonthBasedOnDateTodayTemp."/asahishimbun".$dateTodayTemp;
		}
		
		$filename=str_replace("asahishimbun","",$filename);
			
		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory.$sNewsSourceSelected."/".$filename);

		echo "Complete Filename: ".$completeFilename."<br/>";
		
/*
		if (!file_exists($completeFilename)) {
			break;
		}
*/
		if (($handle = fopen($completeFilename, "r")) !== FALSE) {
			  while (!feof($handle)) {
				//edited by Mike, 20211014;
				//TO-DO: -update: to identify if keyphrase uses
				//the previous read batch and the next batch
				//edited by Mike, 20211014; edited again by Mike, 20211022
				//$data = fread($handle, 128);
				$data = fread($handle,filesize($completeFilename));
			  }
		}
?>
<!-- TODO: -add: this 

<span id="summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="moreTextSpanIIISummaryReportsHeader" onmousedown="toggleMoreStart('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')" onmouseup="toggleMoreEnd('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')"><?php echo $newsTitleOutput."";?></span>

<span id="summaryReportsCountId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="spanSummaryReportsCount"></span>

<span id="summaryReportsId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="moreTextSpanIIISummaryReports" onmousedown="toggleMoreStart('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')" onmouseup="toggleMoreEnd('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')">

-->
	
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
