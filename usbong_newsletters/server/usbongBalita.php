<!--
  Copyright 2021~2025 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIcS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.

  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20251226; from 20251222
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
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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

						div.not-scrollable-div
						{
							width: 100%;
							height: 100%;
							overflow: hidden;
							border: 1px solid #aaaaaa;
						}

						td.not-scrollable-td
						{
							width: 5%;
							height: 100%;
							overflow: hidden;
							border: 0px solid #aaaaaa;
						}
						
	                    div.mainTextDiv
                        {
 							color: rgb(30,30,30);

							width: 100%;
							height: auto;

							padding-left: 5%;
							padding-right: 5%;
							
							margin-top: 1%;

							border: 1px solid #aaaaaa;

							text-align: justify;
							text-justify: inter-word;
							
							display: block;
                        }

						div.newsListAtRightPanelDiv
                        {
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
							font-size: 12pt;
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
							visibility: hidden; /*visible;*/
																						
							z-index: 4; /*2;*/
						}
						
						img.ImageTileFrame1:hover {
							position: absolute;

							clip: rect(0px,32px,32px,0px);
							visibility: hidden; /*visible;*/
																						
							z-index: 4; /*2;*/

							opacity: 0.6;
						}

						img.ImageTileFrameSapphire {
							position: absolute;
								
							clip: rect(0px,32px,64px,0px);
							visibility: visible;
	
							z-index: 4; /*2;*/
						}

						img.ImageTileFrameSapphire:hover {
							position: absolute;

							clip: rect(0px,32px,64px,0px);
							visibility: visible;
	
							z-index: 4; /*2;*/
							
							opacity: 0.6;
						}

						img.ImageTileFrameSoldier {
							position: absolute;
								
							clip: rect(0px,64px,64px,0px);
							visibility: visible;
	
							z-index: 4;
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
							font-size: 18pt; /*24pt;*/

							margin:0;
							margin-bottom: 3%;/*5%;*/
							margin-top: 3%;

							border-left: 5px solid #ababab; /*#ab9c7d;*/
							padding: 2px;
							padding-left: 3%;

							/* text-indent: 5%;*/
							
							display: block;
						}

						blockquote.usbongBlockquotePersonal {
							width: 100%;
							
							line-height: 2;

							text-align: justify;
							text-justify: inter-word;
							
							background: #fff;
							color: rgb(20,20,20);
							font-size: 18pt;

							margin:0;
							margin-bottom: 3%;/*5%;*/
							margin-top: 3%;

							border-left: 0px solid #ab9c7d; /*#ababab;*/
							
							padding: 2px;
							
							/*padding-left: 3%;*/

							/* text-indent: 5%;*/
							
							display: block;
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
							font-size: 18pt;
						}

						table.imageTable
						{
							width: 100%;
						}

						table.bodyTableLatest
						{
							width: 100%;
							height: auto;
						}

						table.bodyTable
						{
							width: 100%;
							height: auto;
							
							border-top: 4em dotted #ffffff;/*#aaaaaa;*/
						}

						table.bodyTableHiddenLatest
						{
							width: 100%;
							height: auto;
							
							display: none;
						}

						table.bodyTableHidden
						{
							width: 100%;
							height: auto;
							
							display: none;

							border-top: 4em dotted #ffffff;/*#aaaaaa;*/
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

						td.soldierTd
                        {

							float: left;
							display: inline-block;
							
							/*margin-top: 0.6em;*/
                        }
						
						td.playTd
                        {
							
							float: left;
							display: inline-block;
														
							/*margin-top: 0.6em;*/
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
							/*font-size: 16pt;*/
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
							opacity: 0.6;
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
							font-size: 12pt; /*20pt*/
							
							margin-top: 1%;/*0.5%;*/
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
							background-color: #dddddd; 
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
							background: #E9E9ED;
							border: 0.1em solid #AAA;
							border-radius: 4px;
						}

						button.languageButton:hover {
							background: #C1C1C4;
							border: 0.1em solid #AAA;
							border-radius: 4px;
						}
						
/*
						button.languageButton:active {
							background-color:yellow;
						}
*/
						span.spanFileNotFound, span.spanKeyphraseNotFound
						{
							width: 100%;
							padding-left: 60px;
							color: rgb(252,60,3);
						}

						span.usbongNoteSpan {
						}					
						
						span.spanAudioDuration {
							width: 65%;
							
							text-align: left;

							position: absolute;
							font-size: 1.5em;
							margin:0;
							margin-top: 0;
							
							word-wrap: break-word;
							
							visibility: visible;
						}

						span.spanAudioInfoText {
							width: 10%;
							
							text-align: left;

							position: absolute;
							font-size: 1.5em;
							margin:0;
							margin-top: 0;
														
							visibility: hidden;
						}

						span.webServiceLinkRowIncomingDraftSpan {
							text-align: right;
							color: rgb(80,52,37);
							font-weight: bold;
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
							font-size: 16pt; /*24pt;*/ /*1em;*/
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
							font-size: 20pt;

							font-weight: Normal;							
							font-family: Tahoma, Garamond, sans-serif;
							/*font-family: "Times New Roman", Times, serif;*/
							/*font-family: Garamond, "Times New Roman", serif;*/

							text-align: justify;
							text-justify: inter-word;
/*							
							margin-top: -0.4em;
*/
							/* note doesn't use full width when zooming in and out */
							display: block; /*none;//block;*/
							visibility: visible; /*hidden;*/
						}

						span.moreTextSpanIIISummaryReportsApple
						{
							width: 100%;

							line-height: 2;
							font-size: 22pt;

							font-weight: Normal;							
							font-family: Tahoma, Garamond, sans-serif;
							/*font-family: "Times New Roman", Times, serif;*/
							/*font-family: Garamond, "Times New Roman", serif;*/

							text-align: justify;
							text-justify: inter-word;
/*							
							margin-top: -0.4em;
*/
							/* note doesn't use full width when zooming in and out */
							display: block; /*none;//block;*/
							visibility: visible; /*hidden;*/
						}


						span.moreTextSpanIIISummaryReportsHeader
						{
							width: 100%;
							
							line-height: 2;
							font-size: 22pt;

							font-weight: Normal;
							font-family: Tahoma, Garamond, sans-serif;
							/*font-family: "Times New Roman", Times, serif;*/
							/*font-family: Garamond, "Times New Roman", serif;*/

							text-align: justify;
							text-justify: inter-word;
							
							display: block; /*none;*/
							margin-bottom: 2%;
						}

						span.moreTextSpanIIISummaryReportsHeaderApple
						{
							width: 100%;
							
							line-height: 2;
							font-size: 24pt;

							font-weight: Normal;
							font-family: Tahoma, Garamond, sans-serif;
							/*font-family: "Times New Roman", Times, serif;*/
							/*font-family: Garamond, "Times New Roman", serif;*/

							text-align: justify;
							text-justify: inter-word;
							
							display: block; /*none;*/
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
						  height: 480px; /*320px;*/
						  display: block;
						  margin: 0 0; /*auto;*/
/*						  
						   background-image: url('http://img.youtube.com/vi/XqVgGZ4ON7c/hqdefault.jpg');
						   background-size: cover;
*/						   
						}

						img.youtubeCoverImg
						{
						  width: 100%;
						  height: auto;
						  
						  display: block;
						  margin: 0 0; /*auto;*/

						   background-size: cover;
						}
						
						iFrame.storeSteamIFrame
						{
						  width: 100%;
						  height: 200px;
						  display: block;
						  
						  border: 0px solid black;
						  margin: 0 0;
						}

						iFrame.youtubeIFrameCover
						{
						  width: 100%;
						  height: 480px; /*320px;*/
						  display: block;
						  margin: 0 0; /*auto;*/
						}

						iFrame.youtubeIFrameIpad
						{
						  width: 100%;
						  height: 512px; /*100%*/
						  display: block;
						  margin: 0 0; /*auto;*/
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
						  
						  margin-left: 120%;
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
							margin-top: -0.8em;
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
/*		
		//removed by Mike, 20250809; from 20250612
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
*/
		//added by Mike, 20250809
		var sapphireImageTile = document.getElementById("sapphireImageId");
		var iSapphireAnimationCount=-1;//0; start at -1
		var iSapphireAnimationCountMax=5;
		var iSapphireAnimationDelayCount=64;//10; 
		var iSapphireAnimationDelayCountMax=60;//6;
		
		var iSapphireImageFrameWidth=32;//16;//128;
		var iSapphireImageFrameHeight=64;//24;//192;

		var iSapphireImageFrameWidthDefault=32;//16;//128;
		var iSapphireImageFrameHeightDefault=64;//24;//192;

		//added by Mike, 20251011
		var soldierImageTile = document.getElementById("soldierImageId");
		var iSoldierAnimationCount=-1;//0; start at -1
		var iSoldierAnimationCountMax=5;
		var iSoldierAnimationDelayCount=64;//10; 
		var iSoldierAnimationDelayCountMax=10;//60;//6;
		
		var iSoldierImageFrameWidth=64;//16;//128;
		var iSoldierImageFrameHeight=64;//24;//192;

		var iSoldierImageFrameWidthDefault=64;//16;//128;
		var iSoldierImageFrameHeightDefault=64;//24;//192;


//Reference: Google AI
function detectZoomLevel() {
  const browserZoomLevel = Math.round(window.devicePixelRatio * 100);
  //console.log(`Current browser zoom level: ${browserZoomLevel}%`);
/*
  if (browserZoomLevel > 100) {
    console.log("Page is zoomed in.");
	
	alert("Page is zoomed in: "+browserZoomLevel);

  } else if (browserZoomLevel < 100) {
    console.log("Page is zoomed out.");
	
	alert("Page is zoomed out");
	
  } else {
    console.log("Page is at 100% zoom.");

	alert("Page is at 100% zoom.");

  }
*/  
  var myAudioInfoText = document.getElementById("myAudioInfoTextId");

/*	TODO: -reverify;
  if (browserZoomLevel >= 150) {
	  myAudioInfoText.style.visibility="hidden";
  }
  else {
	  myAudioInfoText.style.visibility="visible";
  }
*/  
}

// Call the function on page load and on resize events
window.addEventListener('load', detectZoomLevel);
window.addEventListener('resize', detectZoomLevel);

		function myUpdateFunction() {
			
	//removed by Mike, 20250729			
			var dMyAudioCurrentTimeDurationInSec = document.getElementById("myAudioId").currentTime; 
			var sMyAudioDurationText = document.getElementById("myAudioDurationTextId"); 

			var myAudioInfoText = document.getElementById("myAudioInfoTextId");


////			//edited by Mike, 20250130		
////			dMyAudioCurrentTimeDurationInMin=Math.round(dMyAudioCurrentTimeDurationInSec/60);
////			iMyAudioCurrentTimeDurationInSec=Math.round(dMyAudioCurrentTimeDurationInSec%60);

			dMyAudioCurrentTimeDurationInMin=Math.floor(dMyAudioCurrentTimeDurationInSec/60);

			iMyAudioCurrentTimeDurationInSec=Math.floor(dMyAudioCurrentTimeDurationInSec%60);
			sMyAudioCurrentTimeDurationInSec=iMyAudioCurrentTimeDurationInSec;
			
			if (iMyAudioCurrentTimeDurationInSec<10) {
				sMyAudioCurrentTimeDurationInSec="0"+iMyAudioCurrentTimeDurationInSec;
			}
			
			if (myAudioInfoText.style.visibility=="hidden") {
				myAudioInfoText.innerHTML="";
			}
			
			//sMyAudioDurationText.innerHTML=dMyAudioCurrentTimeDurationInMin+":"+sMyAudioCurrentTimeDurationInSec+" / "+getAudioTotalDuration();
			
		//sMyAudioDurationText.innerHTML=dMyAudioCurrentTimeDurationInMin+":"+sMyAudioCurrentTimeDurationInSec+" / "+getAudioTotalDuration()+" | <b>El mundo que podemos encontrar en el Octopath Traveler 0 de Square Enix</b>";
			
			//sMyAudioDurationText.innerHTML=dMyAudioCurrentTimeDurationInMin+":"+sMyAudioCurrentTimeDurationInSec+" / "+getAudioTotalDuration()+"<span>"+myAudioInfoText.innerHTML+"</span>";
			
			
			sMyAudioDurationText.innerHTML=dMyAudioCurrentTimeDurationInMin+":"+sMyAudioCurrentTimeDurationInSec+" / "+getAudioTotalDuration()+"<span>"+myAudioInfoText.innerHTML+"</span>";
			
						
/*
			//added by Mike, 20250612
			if (isBatMonsterTileActive) {
				executeBatMonsterWalkingAnimation();
			}
*/			
			executeSapphireAnimation()
			
			//added by Mike, 20251011
			if (!bIsAudioPaused) {
				executeSoldierAnimation()
			}
			else {
				executeSoldierStandAnimation()
			}
		}

		//added by Mike, 20250804
		//reference: Google AI Overview
	    function replaceCharAtIndex(str, index, char) {
			if (index < 0 || index >= str.length) {
				return str; // Handle out-of-bounds index
			}
			return str.substring(0, index) + char + str.substring(index + 1);
		}
	
		function onLoad() {
/*
			var myAudio = document.getElementById("myAudioId");
			var myAudioInfoText = document.getElementById("myAudioInfoTextId");
			
			//myAudioInfoText.style.left=parseInt(myAudio.style.left);
*/

		  //alert ("HALLO");
		  //added by Mike, 20250804 
		  var sInput = window.location.href;
		  		  
		  if (sInput.indexOf("?d=") !== -1) {
		
			sDisplayBasedOnDayInput=sInput.substring(sInput.indexOf("?d="));
		
			//incoming draft
			if (sInput.indexOf("-") !== -1) {

				sDisplayBasedOnDayInput=sDisplayBasedOnDayInput.replace("-","");
				
				iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+1);
				
				//alert(iDay);
				
				//TODO: -fix: if "-01";
				//if (iDay>1) {
				//if (iDay!==1) {
				if (iDay!=1) {

/*
					iDay=-1;
					iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+2);
*/					
					sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";
					window.location.href = ""+sInput;
				}
			}
			else {

				//alert("DITO!!!");

				iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+1);
				
				//alert(iDay);
				
				if (iDay>=10) {
					sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";
					window.location.href = ""+sInput;
				}
			}
		  }
		  
		  //added by Mike, 20250731
		  var selectBox = document.getElementById("newsSelectId");
		  var selectedValue = selectBox.options[selectBox.selectedIndex].value;

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
				
				//removed by Mike, 20250801; 20250730
				//even ipad uses Safari
/*				
				if (navigator.userAgent.includes("Safari")) {
					bIsMobile=false;
				}
*/

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
			  
			  //added by Mike, 20250804
			  if (event.button === 0) { //left click
				//alert("LEFT CLICK!");
				//note: ZOOM function causes position ERROR via screenX
				var iXPos = event.clientX;//screenX;

				//note: screenY includes BROWSER address bar, et cetera;
				var iYPos = event.pageY; //screenY;

				//note increases/decreases based on zoom
				var iScreenWidth = screen.width;
				
				//alert("screen width: "+iScreenWidth);
				//alert("LEFT CLICK! iXPos,iYPos: "+iXPos+","+iYPos);
								
				//iXPosInRelationToScreenWidth=iXPos/iScreenWidth*100;
				//alert("LEFT CLICK! iXPos: "+iXPos);
				//alert("iScreenWidth*0.10: "+iScreenWidth*0.10);
				
				//removed by Mike, 20250805
				//zoom affecting dMargin?
				//dMargin=iScreenWidth*0.02; //2%

				//alert("dMargin: "+dMargin);
								
				//----------------------------------------------------
				//TODO: -add in other news sources;
				//note: last article may not be the previous day; 
				
				var sInput = window.location.href;

/*				//removed by Mike, 20250805; show incoming draft even for other news sources via forward movement	
				//if not home page; default; has "N"
				if (sInput.indexOf(".php/N") !== -1) {
					//if not PERSONAL
					if (sInput.indexOf("N8") === -1) {
						return;
					}
				}
*/				
				//added by Mike, 20250731
				var sDisplayBasedOnDayInput="";
				var iDay=0;
				
				sDisplayBasedOnDayInput="?d=0";

				if (sInput.indexOf("?d=") !== -1) {
					sDisplayBasedOnDayInput=sInput.substring(sInput.indexOf("?d="));

					//incoming draft
					if (sInput.indexOf("-") !== -1) {
						sDisplayBasedOnDayInput=sDisplayBasedOnDayInput.replace("-","");
						iDay=-1;
						//iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+2);
					}
					else {
						iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+1);
					}
				}
				
				//alert(iDay);
				
				var bHasPressedPageMove=false;
				
/*				//removed by Mike, 20250805				
				if (iXPos<iScreenWidth*0.10-dMargin) { //-margin
					//alert("MOVE LEFT!!!");
					//move left
					//alert(sDisplayBasedOnDayInput);
					iDay++;

					if (iDay>10) {
					  iDay=10;
					}
					else {
						bHasPressedPageMove=true;
					}
				}
*/
/*	//removed by Mike, 20250809
				//if not mobile; TODO: -update to use swipe?
				if (!bIsMobile) {
					if (iXPos>iScreenWidth-iScreenWidth*0.10) {
						//alert("MOVE RIGHT!!!");
						//move right
						iDay--;

						//-1 is incoming draft
						if (iDay<-1) {
						  iDay=-1;
						}
						else {
							bHasPressedPageMove=true;
						}
					}
				}				
*/				
				
				//added by Mike, 20250731; from 20240801
				//var sRadioInput=sInput.substring(sInput.indexOf("/R"));
				var sRadioInput=sInput.substring(sInput.indexOf("/R"),sInput.indexOf("?d="));

				//alert(sInput.substring(0,sInput.indexOf(".php")));
				sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";

				if (bHasPressedPageMove) {
/*					
					alert("iDay: "+iDay);
					alert(sDisplayBasedOnDayInput);
					alert(sDisplayBasedOnDayInput.indexOf("=")+1);
*/					
					//sDisplayBasedOnDayInput=replaceCharAtIndex(sDisplayBasedOnDayInput, sDisplayBasedOnDayInput.indexOf("=")+1, iDay);
					sDisplayBasedOnDayInput=sDisplayBasedOnDayInput.substring(0,sDisplayBasedOnDayInput.indexOf("=")+1)+iDay;
					
					
					//alert("sDisplayBasedOnDayInput: "+sDisplayBasedOnDayInput);
					
					if (sRadioInput.length<=3) { //has "/R1", etc.			
						window.location.href = ""+sInput+selectedValue+sRadioInput+sDisplayBasedOnDayInput;
					}
					else {
						window.location.href = ""+sInput+selectedValue+sDisplayBasedOnDayInput;
					}
				}
				//----------------------------------------------------

				//var bodyTable = document.getElementById("bodyTableId"+0+"-EN");
				//alert("bodyTable left: "+bodyTable.style.left);
				
			  }

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
/*			
			var sMyAudioDurationText = document.getElementById("myAudioDurationTextId"); 

			sMyAudioDurationText.innerHTML="0:00 / "+getAudioTotalDuration();
*/						

			//edited by Mike, 20250731; from 20250612
			if (selectedValue!=="N8") {
				if (sessionStorage.getItem('isDisplayOriginalText')==='false') {
					//also used with isDisplayIncomingDraft;
					toggleOriginalTextDisplay();
				}
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
		//function playAudio() {
		function playAudio(bIsMusicTime) {
			
			//alert("DITO");
			//alert(sAudioInput);
			
			//var sAudioSource = document.getElementById("audioSourceId").src;
			//alert(sAudioSource);

			//var soldierImage = document.getElementById("soldierImageId"); 

			var sImagePlayRadioSource = document.getElementById("imagePlayRadioId").src;
			var myAudio = document.getElementById("myAudioId");
			var myAudioInfoText = document.getElementById("myAudioInfoTextId");
			
			//>>>http://localhost/usbong_newsletters/assets/images/radioPlay.png?lastmod=20241230T1418
			//alert(">>>"+sImagePlayRadioSource);
		
			var dMyAudioCurrentTimeDurationInSec = document.getElementById("myAudioId").currentTime; 
			var dAudioTotalDuration = getAudioTotalDuration();
			
			//myAudioInfoText.style.left=parseInt(myAudio.style.left);
									
			//alert("dMyAudioCurrentTimeDurationInSec: "+dMyAudioCurrentTimeDurationInSec);
			
			var fMyAudioVolume=1.0;//0.4;
			myAudio.volume=fMyAudioVolume;
			
			if (bIsMusicTime) {
				myAudio.loop=true;		
			}
			else {
				myAudio.loop=false;		
			}	
			//myAudio.play();
			
			myAudio.addEventListener("ended", function() {
			  //console.log("Audio playback has finished.");
			  // You can add any other actions here that you want to perform when the audio ends.
			  // For example, playing the next track in a playlist, resetting the audio, etc.
			  //alert("DITO!!!");
			  
			  document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPause","radioPlay");
			  
			  bIsAudioPaused=true;
			});
			
						
			if (dMyAudioCurrentTimeDurationInSec==0) {
				document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPlay","radioPause");
				myAudio.play();
				bIsAudioPaused=false;
			}
			else {
				//if currently paused
				if (sImagePlayRadioSource.indexOf("radioPlay")!=-1) {
					document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPlay","radioPause");
					
					myAudio.play();
					bIsAudioPaused=false;
					
					//alert("PLAY AUDIO NOW!");					
				}
				//if currently playing;
				else {
					document.getElementById("imagePlayRadioId").src=sImagePlayRadioSource.replace("radioPause","radioPlay");
					
					myAudio.pause();
					bIsAudioPaused=true;
					
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

			//added by Mike, 20250731
			var sDisplayIncomingDraftInput="";
			if (sInput.indexOf("?d=") !== -1) {
				sDisplayIncomingDraftInput=sInput.substring(sInput.indexOf("?d="));
/*				
				//incoming draft
				if (sDisplayIncomingDraftInput.indexOf("-") !== -1) {
					sDisplayBasedOnDayInput="?d=-1";
				}
				else {
					sDisplayBasedOnDayInput="?d=0";
				}
*/				
				sDisplayIncomingDraftInput="";
			}

			//added by Mike, 20250731; from 20240801
			//var sRadioInput=sInput.substring(sInput.indexOf("/R"));
			var sRadioInput=sInput.substring(sInput.indexOf("/R"),sInput.indexOf("?d="));

			//alert(sInput.substring(0,sInput.indexOf(".php")));
			sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";

			//added by Mike, 20240801						
			if (sRadioInput.length<=3) { //has "/R1", etc.			
				window.location.href = ""+sInput+selectedValue+sRadioInput+sDisplayIncomingDraftInput;
			}
			else {
				window.location.href = ""+sInput+selectedValue+sDisplayIncomingDraftInput;
			}
			
			//TODO: -update: selected option;
			//note: use of "+" (in Javascript), instead of "." (in PHP);
		}

	  //added by Mike, 20250612
	  function toggleOriginalTextDisplay() {
		const usbongBlockquoteCollection = document.getElementsByClassName("usbongBlockquote");
		
		var selectBox = document.getElementById("newsSelectId");
		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			
		//var batMonsterImageTile = document.getElementById("batMonsterImageId");
		var sapphireImageTile = document.getElementById("sapphireImageId");
		
		//added by Mike, 20250730
		//const displayIncomingDraft = document.getElementById("displayIncomingDraftId");

		//alert(selectedValue);

		if (selectedValue==="N8") { //PERSONAL
			//edited by Mike, 20250730
/*			batMonsterImageTile.style.visibility="hidden";
			isBatMonsterTileActive=false;
*/			
			//removed by Mike, 20250809
			//sapphireImageTile.style.visibility="hidden";
			//----------------------------------------------
			var sInput = window.location.href;

			var sDisplayBasedOnDayInput="";
			var iDay=0;
			
			sDisplayBasedOnDayInput="?d=0";

			//added by Mike, 20250809
			//INCOMING DRAFT already displayed
			if (sInput.indexOf("?d=-1") !== -1) {
				return;
			}
			if (sInput.indexOf("?d=") !== -1) {
				sDisplayBasedOnDayInput=sInput.substring(sInput.indexOf("?d="));

				//incoming draft
				if (sInput.indexOf("-") !== -1) {
					sDisplayBasedOnDayInput=sDisplayBasedOnDayInput.replace("-","");
					iDay=-1;
					//iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+2);
				}
				else {
					iDay=sDisplayBasedOnDayInput.substring(sDisplayBasedOnDayInput.indexOf("=")+1);
				}
			}
				
			bHasPressedPageMove=false;
			
			//if not mobile; 
			if (!bIsMobile) {
				//alert("MOVE RIGHT!!!");
				//move right
				iDay--;

				//-1 is incoming draft
				if (iDay<-1) {
				  iDay=-1;
				}
				
				bHasPressedPageMove=true;
			}		
				
			//var sRadioInput=sInput.substring(sInput.indexOf("/R"));
			var sRadioInput=sInput.substring(sInput.indexOf("/R"),sInput.indexOf("?d="));

			//alert(sInput.substring(0,sInput.indexOf(".php")));
			sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/";

				
			if (bHasPressedPageMove) {
				sDisplayBasedOnDayInput=sDisplayBasedOnDayInput.substring(0,sDisplayBasedOnDayInput.indexOf("=")+1)+iDay;
					
				//alert("sDisplayBasedOnDayInput: "+sDisplayBasedOnDayInput);
					
				if (sRadioInput.length<=3) { //has "/R1", etc.			
					window.location.href = ""+sInput+selectedValue+sRadioInput+sDisplayBasedOnDayInput;
				}
				else {
					window.location.href = ""+sInput+selectedValue+sDisplayBasedOnDayInput;
				}
			}
			//----------------------------------------------
				

/*
			batMonsterImageTile.style.visibility="visible";
			isBatMonsterTileActive=true;
*/
			//------------------------------------------	
/*			
	//removed by Mike, 20250804; change to move forward in personal; showing incoming draft;
			//added by Mike, 20250731
			var selectBox = document.getElementById("newsSelectId");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			
			//alert("selectedValue: "+selectedValue);
			
			var sInput = window.location.href;
			sInput=sInput.substring(0,sInput.indexOf(".php"))+".php/"+selectedValue;
			//------------------------------------------
			
			//added by Mike, 20250731
			if ((sessionStorage.getItem('isDisplayIncomingDraft')===null) || (sessionStorage.getItem('isDisplayIncomingDraft')==='false')) {
				sessionStorage.setItem('isDisplayIncomingDraft', 'true');
				window.location.href = ""+sInput+"?d=-1"; //edited by Mike, 20250804
			}
			else {
				sessionStorage.setItem('isDisplayIncomingDraft', 'false');
				window.location.href = ""+sInput+"?d=0";
			}			
*/			
		}
		else {
/*			
			batMonsterImageTile.style.visibility="visible";
			isBatMonsterTileActive=true;
*/
			sapphireImageTile.style.visibility="visible";

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
/*	//removed by Mike, 20250807
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
*/

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
							sLanguageTemp="CH";//"CN";//"ch";
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
					  currSummaryReportsId.style.visibility = "visible";
					  
					  currSummaryReportsHeaderId.style.display = "none";
				  }
				  else if (currSummaryReportsHeaderId.style.display === "block") {
					  //currSummaryReportsId.style.display = "inline";
					  currSummaryReportsId.style.display = "block";
					  currSummaryReportsId.style.visibility = "visible";

					  currSummaryReportsHeaderId.style.display = "none";
				  }
				  else if (currSummaryReportsId.style.display === "none") {
					  //currSummaryReportsId.style.display = "inline";
					  currSummaryReportsId.style.display = "block";
					  currSummaryReportsId.style.visibility = "visible";

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
					  

					  //edited by Mike, 20250725; from 20250517; if header text is in CN, width decreases;
					  //alert(sLanguageTemp);
					  //location.reload();
/*					  
					  currSummaryReportsId.style.display = "none";
					  currSummaryReportsHeaderId.style.display = "inline";
					  currMainTextDivId.scrollIntoView();
*/
					  //removed by Mike, 20250731
					  //currMainTextDivId.scrollIntoView();
					  //note: usable with next or previous page;
					  //currMainTextDivId.scrollIntoView({ behavior: 'smooth'});

					  //TODO: -add: this
//					  currMainTextDivId.style.border = "5px solid #1c9bdf"; 

/*
window.location
location.href = location.href;
add news row; language
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

/*	  
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
*/
	
	//added by Mike, 20250809
	function executeSapphireAnimation() {
		var sapphireImageTile = document.getElementById("sapphireImageId");
		
		sapphireImageTile.style.visibility="visible";

		//iMonsterAnimationDelayCountMax=15;
		
		if (iSapphireAnimationDelayCount>=iSapphireAnimationDelayCountMax) {
			iSapphireAnimationCount=(iSapphireAnimationCount+1)%2; //3; //last hidden

			iSapphireAnimationDelayCount=0;			

		}
		else {
			iSapphireAnimationDelayCount++;

	//		alert("iExplosionEffectAnimationCount: "+iExplosionEffectAnimationCount);
		}

		//var iFrameY=0;
		var iFrameY=iSapphireImageFrameHeight*0;//2;//64*2; 128;

		//currently two frames only
		if (iSapphireAnimationCount==0) { 
			sapphireImageTile.style.objectPosition = "-" + 0 + "px -" + iFrameY + "px";
		}
		else if (iSapphireAnimationCount==1) { 
			sapphireImageTile.style.objectPosition = "-" + iSapphireImageFrameWidthDefault + "px -" + iFrameY + "px";
		}
	}

	//added by Mike, 20251011
	function executeSoldierAnimation() {
		var soldierImageTile = document.getElementById("soldierImageId");
		
		soldierImageTile.style.visibility="visible";

		//iMonsterAnimationDelayCountMax=15;
		
		if (iSoldierAnimationDelayCount>=iSoldierAnimationDelayCountMax) {
			iSoldierAnimationCount=(iSoldierAnimationCount+1)%4; //3; //last hidden

			iSoldierAnimationDelayCount=0;			

		}
		else {
			iSoldierAnimationDelayCount++;

	//		alert("iExplosionEffectAnimationCount: "+iExplosionEffectAnimationCount);
		}

		//var iFrameY=0;
		var iFrameY=iSoldierImageFrameHeight*0;//2;//64*2; 128;

/*
		//currently two frames only
		if (iSoldierAnimationCount==0) { 
			soldierImageTile.style.objectPosition = "-" + 0 + "px -" + iFrameY + "px";
		}
		else if (iSoldierAnimationCount==1) { 
			soldierImageTile.style.objectPosition = "-" + iSoldierImageFrameWidthDefault + "px -" + iFrameY + "px";
		}
*/		
		soldierImageTile.style.objectPosition = "-" + iSoldierImageFrameWidthDefault*iSoldierAnimationCount + "px -" + iFrameY + "px";

	}

	//added by Mike, 20251011
	function executeSoldierStandAnimation() {
		var soldierImageTile = document.getElementById("soldierImageId");
		
		soldierImageTile.style.visibility="visible";

		//iMonsterAnimationDelayCountMax=15;
		
		iSoldierAnimationCount=0;
		iSoldierAnimationDelayCount=0;
/*		
		if (iSoldierAnimationDelayCount>=iSoldierAnimationDelayCountMax) {
			iSoldierAnimationCount=(iSoldierAnimationCount+1)%4; //3; //last hidden

			iSoldierAnimationDelayCount=0;			

		}
		else {
			iSoldierAnimationDelayCount++;

	//		alert("iExplosionEffectAnimationCount: "+iExplosionEffectAnimationCount);
		}
*/
		//var iFrameY=0;
		var iFrameY=iSoldierImageFrameHeight*0;//2;//64*2; 128;
	
		soldierImageTile.style.objectPosition = "-" + iSoldierImageFrameWidthDefault*0 + "px -" + iFrameY + "px";

	}
	
      //added by Mike, 20250517; from 20250515
	  function myLanguageChangeFunction(iNewsRankCount,sLanguage) {
/*	
			  alert(iNewsRankCount);
			  alert(sLanguage);
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

/*			//TODO: -reverify: this; the language button other than the first do not get displayed as pressed			  
			  alert("DITO!!!! languageButtonId"+iNewsRankCount+"-"+sLanguage);		
			  
			  var languageButton = document.getElementById("languageButtonId"+iNewsRankCount+"-"+sLanguage);	
			  
			  var languageButtonEN = document.getElementById("languageButtonId"+iNewsRankCount+"-EN");	
			  var languageButtonJP = document.getElementById("languageButtonId"+iNewsRankCount+"-JP");	
			  var languageButtonES = document.getElementById("languageButtonId"+iNewsRankCount+"-ES");	
			  var languageButtonCH = document.getElementById("languageButtonId"+iNewsRankCount+"-CH");	
			  var languageButtonPH = document.getElementById("languageButtonId"+iNewsRankCount+"-PH");	
			  
			  if (languageButtonEN!==null) {
				languageButtonEN.style.background = "#E9E9ED";
			  }
			  
			  if (languageButtonJP!==null) {
				languageButtonJP.style.background = "#E9E9ED";
			  }

			  if (languageButtonES!==null) {
				//alert(sLanguage);
				alert(sLanguage.indexOf("ES"));
				
				if (sLanguage.indexOf("ES")===0) { //clicked
					alert("HALLO!!!");
					languageButtonES.style.background = "#C1C1C4";
					alert(">>>>");
				}
				else {
					alert("HOHO");
					languageButtonES.style.background = "#E9E9ED";
				}
			  }

			  if (languageButtonCH!==null) {
				languageButtonCH.style.background = "#E9E9ED";
			  }

			  if (languageButtonPH!==null) {
				languageButtonPH.style.background = "#E9E9ED";
			  }

			  if (languageButton!==null) {
				alert("YAHOOO!!!");
				languageButton.style.background = "#C1C1C4";
			  }
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
			  
			  //removed by Mike, 20250804
			  //mainTextDivId.scrollIntoView();
		  }
	  </script>	  

<?php
	//added by Mike, 20250610
	//TODO: -update: this
	$bIsShowOriginalText=true; //true; //false; //default

	//added by Mike, 20250701
	$sWebAddressBasePath = "http://store.usbong.ph";

	//added by Mike, 20220628
	//reference: https://github.com/usbong/UsbongStore/blob/master/usbong_store/application/core/MY_Controller.php;
	//last accessed: 20220628
	function isMobile() {
//		echo "CLIENT USER DETAILS: " . $_SERVER["HTTP_USER_AGENT"];

		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
	
	//added by Mike, 20250729
	function isMobileAndUsingAppleWebKit() {
		//echo "CLIENT USER DETAILS: " . $_SERVER["HTTP_USER_AGENT"];
/*
		if (preg_match("/(Safari)/i", $_SERVER["HTTP_USER_AGENT"])) {
			return false;
		}
*/
		//return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

		return preg_match("/(iPad|iPod|AppleWebKit)/i", $_SERVER["HTTP_USER_AGENT"]);
	}

	if (isMobile()) {
		//edited by Mike, 20250701
		//echo "<body id='myBodyId' class='mobileBody' onload='onLoad()'>";

		$url=$sWebAddressBasePath."/server/usbongBalitaLite.php";

		echo "<script>location.href = '".$url."';</script>";
		
		echo "<body>";

		echo "<br/>Redirecting to mobile...<br/>";
		
		echo "<br/>".$url."<br/>";

		echo "</body>";
		echo "</html>";
		
		die();
	}
	else {
		echo "<body id='myBodyId' class='body' onload='onLoad()'>";
	}

	date_default_timezone_set('Asia/Hong_Kong');

	//edited by Mike, 20200726
	//$dateToday = (new DateTime())->format('Y-m-d');
	$dateToday = Date('Y-m-d');
	
//	$result = array();
	$sYearDirectory="/server/2021/";

	//edited by Mike, 20211020
//    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory);
    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory, SCANDIR_SORT_DESCENDING);

	//echo idate("Y");
	//edited by Mike, 20220619
	$iYearCount=2022; //2021;
	$iCurrentYear = idate("Y");

	while ($iYearCount<=$iCurrentYear) {
		//edited by Mike, 20230110
		$sYearDirectoryPartTwo="/server/".$iYearCount."/";

		if (file_exists(dirname(__DIR__).$sYearDirectoryPartTwo)) {
			$arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));
		}

		$iYearCount++;
	}

	//echo $arrayFilesInCurrentDirectory[0];

//--

	$usbongSearchBasePath=str_replace('/', DIRECTORY_SEPARATOR, "/server/usbongSearch.php");

	//added by Mike, 20211013; edited by Mike, 20211014
	//note: update this
//	$sWebAddressBasePath = "http://localhost";
	
	//removed by Mike, 20250701; from 20220304
	//$sWebAddressBasePath = "http://store.usbong.ph";
		
	//added by Mike, 20240726
	//------------------------------------------
	//TODO: -add: MySQL DB; put IP addresses; MVC
/*	
	$ipAddress = $_SERVER['REMOTE_ADDR'];
	
	if (strpos($ipAddress, "::")!==false) {
		$ipAddress = "SERVER ADDRESS";
		
		echo "<font color='#FF0000'><b>Please set as default in the Computer Server Browser,<br/>the Computer Server Internet Protocol (IP) Address<br/>that is not \"localhost\".<br/><br/></b></font>";
	}		

	//$this->session->set_userdata('client_ip_address', $ipAddress);

	//TO-DO: -set: value for blank machine address due to Windows Machine		
//		echo $_SESSION["client_ip_address"];
//		echo $_SESSION["client_machine_address"];

	//edited by Mike, 20240727	
	//note: excess space before text;
	//example:  YOUR INTERNET PROTOCOL ADDRESS: 127.0.0.1
	echo "<b><font color='#FF4500'>YOUR INTERNET PROTOCOL ADDRESS: </font></b>".$ipAddress."<br/>";	
		
	//browser and machine specs
	//example: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0
	echo $_SERVER["HTTP_USER_AGENT"]."<br/>";
*/	
	//------------------------------------------

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

//edited by Mike, 20250808; from 20250807
$iDateTodayAndNewsLastAccessedDifferenceMax=1;//2;//1;//4; //3

//default
$updatedDirDueToURL="";

if (strpos($_SERVER['REQUEST_URI'],".php/")!==false) {
	$updatedDirDueToURL="../";
	
	if (strpos($_SERVER['REQUEST_URI'],"/R")!==false) {
	//if (strpos($_SERVER['REQUEST_URI'],"/N")!==false) {
		$updatedDirDueToURL=$updatedDirDueToURL."../";
	}
}


//added by Mike, 20230913
$sInputURL=$_SERVER['REQUEST_URI'];
$sNewsNumberLocationPart="";
//edited by Mike, 20250430
$iNewsNumberRaw=8;//0; //8

//step#1
$sNewsNumber=substr($sInputURL, strpos($sInputURL,".php/"));

//echo $sNewsNumber;

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
	//edited by Mike, 20240512
	$sNewsNumber=substr($sNewsNumber, strpos(strtoupper($sNewsNumber),"N"));

	//echo ">>>>".$sNewsNumber;
	
	//http://localhost/usbong_newsletters/server/usbongBalita.php
	if (strpos($sNewsNumber,".php")!==false) {
		$sNewsNumber="N8";
	}

	//step#3
	//get the question number in integer
	//start date: 20230815

	$iNewsNumber=intval(substr($sNewsNumber,1));
	$iNewsNumberRaw=$iNewsNumber;

	//echo "sNewsNumber: ".$sNewsNumber."<br/>";
}

	if (isMobile()) {
		echo "<img class='Image-companyLogoMobile' src='../".$updatedDirDueToURL."assets/images/usbongLogo.png'>";
	}
	else {
		echo "<img class='Image-companyLogo' src='../".$updatedDirDueToURL."assets/images/usbongLogo.png'>";
	}
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
			<a class='webServiceGameOffLink' target='_blank' href='https://masarapmabuhay.itch.io/outer-waves'>
<?php
		//blue-sapphire-galaxy
		echo "<img class='Image-favicon' src='../".$updatedDirDueToURL."assets/images/favicon.png'>";
?>
			</a>
			<br/>
				<?php
					//$dateToday="2023-05-08";
					$dateTodayDay = strtoupper(date('D', strtotime($dateToday)));
					//echo $dateToday;

					//edited by Mike, 20230711
					//echo "$dateTodayDay | ".$dateToday;

					//note: can select previous days?...

					//edited by Mike, 20250612
					echo "<span class='dateTodaySpan'>$dateTodayDay | ";

					//echo "<span class='dateTodaySpan'><button class='origTextButton'><img class='Image-radio' src='../".$updatedDirDueToURL."assets/images/jeep.png?lastmod=20241023' onclick='changeAudio()'></button>$dateTodayDay | ";
					
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
<?php

	//edited by Mike, 20251204
	$currentDateTime = new DateTime();

//echo $currentDateTime->format('Y-m-d H:i:s')."<br/>"; // Example output: 2025-12-04 10:36:00

//echo $currentDateTime->format('H')."<br/>"; // Example output: 2025-12-04 10:36:00
	
	$bIsMusicTime=false;
	$sAudioInput="";
	$sAudioInputText="";
	
	//echo ">>>>>".$updatedDirDueToURL;
	
	if ((intval($currentDateTime->format('H')>=20)) and (intval($currentDateTime->format('H')<21))) { //the hour of 8PM
	//if (true) {

		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording LastChristmasMusicTravelLoveAndFriendsWhamLyricsMusixmatch 20251203T2100Amplified.mp3?lastmod=20251204T1042";
		
		$sAudioInputText=" | <b>🎵 \"Last Christmas\"...</b>";

		$bIsMusicTime=true;
	}
	else if ((intval($currentDateTime->format('H')>=21)) and (intval($currentDateTime->format('H')<=21))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording BABYMONSTERWildYouTubeGoogleLyricsMusixmatch 20251208.mp3?lastmod=20251209T1416";
		
		$sAudioInputText=" | <b>🎵 \"WILD\"...</b>";
		
		$bIsMusicTime=true;
	}		
	else if ((intval($currentDateTime->format('H')>=22)) and (intval($currentDateTime->format('H')<=22))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording EnglishPractice Solving the problem of hurting others with VR.mp3?lastmod=20251206T1449";
		
		$sAudioInputText=" | <b>Solving the problem of hurting others with VR...</b>";
	}	
	else if ((intval($currentDateTime->format('H')>=23)) and (intval($currentDateTime->format('H')<=5))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording EnglishPractice why do cats fight each other 20251213.mp3?lastmod=20251215T1427";
		
		$sAudioInputText=" | <b>Why do cats fight each other...</b>";
	}	
	else if ((intval($currentDateTime->format('H')>=6)) and (intval($currentDateTime->format('H')<=6))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording EnglishPractice cats are more than just robots, action figures 20251213.mp3?lastmod=20251215T1419";
		
		$sAudioInputText=" | <b>Cats are more than just robots, action figures...</b>";
	}
	else if ((intval($currentDateTime->format('H')>=7)) and (intval($currentDateTime->format('H')<=7))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording EnglishPractice OctopathTraveler0 20251204.mp3?lastmod=20251204T2047";
		
		$sAudioInputText=" | <b>Talking about the new Octopath Traveler 0</b>";
	}
	else if ((intval($currentDateTime->format('H')>=8)) and (intval($currentDateTime->format('H')<=8))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording JohnMayerSayYouTubeMusixmatch 20251224.mp3?lastmod=20251226T1545";
		
		$sAudioInputText=" | <b>🎵 \"Say\"...</b>";
		
		$bIsMusicTime=true;
	}
	else if ((intval($currentDateTime->format('H')>=10)) and (intval($currentDateTime->format('H')<=11))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/spanish/2025/202512/Recording SpanishPractice OctopathTraveler0 20251204.mp3?lastmod=20251204T1144";
		
		$sAudioInputText=" | <b>El mundo que podemos encontrar en el Octopath Traveler 0 de Square Enix</b>";
	}
	else if ((intval($currentDateTime->format('H')>=12)) and (intval($currentDateTime->format('H')<=14))) {
		//$sAudioInput="../".$updatedDirDueToURL."assets/audio/nihongo/2025/202512/Recording UsbongNihongo Singapore 20251206.mp3?lastmod=20251206T1159";
		
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/nihongo/2025/202512/Recording UsbongNihongo Singapore 20251206.mp3?lastmod=20251206T1159";
		
		$sAudioInputText=" | <b>シンガポールに移動してどうなる・・・</b>";
	}
	else if ((intval($currentDateTime->format('H')>=15)) and (intval($currentDateTime->format('H')<=16))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording EnglishPractice Finding Singapore in the News.mp3?lastmod=20251206T1437";
		
		$sAudioInputText=" | <b>Finding Singapore in the News...</b>";
	}
	else if ((intval($currentDateTime->format('H')>=17)) and (intval($currentDateTime->format('H')<=17))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/mandarin/2025/202512/Recording MandarinPractice Talking about Octopath Traveler 0 to practice Mandarin.mp3?lastmod=20251206T1534";
		
		$sAudioInputText=" | <b>讲Octopath Traveler 0练习普通话</b>";
	}
	else if ((intval($currentDateTime->format('H')>=18)) and (intval($currentDateTime->format('H')<=18))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/mandarin/2025/202512/Recording UsbongTabi ReferenceNiZaiShenBianAcousticVersionYoutubeChannelKimberleyChen.mp3?lastmod=20251206T1616";
		
		$sAudioInputText=" | <b>🎵 \"你在身边\"</b>";

		$bIsMusicTime=true;
	}
	else if ((intval($currentDateTime->format('H')>=19)) and (intval($currentDateTime->format('H')<=19))) {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/english/2025/202512/Recording UsbongTabiReferenceNeverLetHerGoTheDavidGatesSongbookGoogle 202402112031.mp3?lastmod=20251206T1622";
		
		$sAudioInputText=" | <b>🎵 \"Never Let Her Go\"</b>";

		$bIsMusicTime=true;
	}
	else {
		$sAudioInput="../".$updatedDirDueToURL."assets/audio/nihongo/2025/202512/Recording UsbongNihongo GameOff2025 20251202 short.mp3?lastmod=20251203T1210";
		
		$sAudioInputText=" | <b>頭の中に住んでいる者たちへ・・・</b>";
	}
	
	//echo $sAudioInput;
?>


<td class="soldierTd">
<?php
	//added by Mike, 20251011
	echo "<img id='soldierImageId' class='ImageTileFrameSoldier' src='../".$updatedDirDueToURL."assets/images/soldier.png?lastmod=20251203T1111'>"; 
?>	

<span id="myAudioInfoTextId" class="spanAudioInfoText"><?php echo $sAudioInputText;?></span>
</td>



<td class="playTd">

<div class="divAudioPlayerContainer">
<button class="playRadioButton">
<?php
	//removed by Mike, 20250729
	//echo "<img id='imagePlayRadioId' class='ImagePlayRadio' src='../".$updatedDirDueToURL."assets/images/radioPlay.png?lastmod=20241230T1418' onclick='playAudio()'>"; 

	echo "<img id='imagePlayRadioId' class='ImagePlayRadio' src='../".$updatedDirDueToURL."assets/images/radioPlay.png?lastmod=20241230T1418' onclick='playAudio(".$bIsMusicTime.")'>";
	
?>
</button>

<span id="myAudioDurationTextId" class="spanAudioDuration">
</span>

<br/>


<!--
		<audio id="myAudioId" class="audioPlayerDefault" width="416" height="312" controls>
-->
<?php
	echo "<audio id='myAudioId' class='audioPlayerDefault' width='416' height='312' controls>";
?>		
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
	//edited by Mike, 20250809
	//echo "<img id='batMonsterImageId' class='ImageTileFrame1' src='../".$updatedDirDueToURL."assets/images/monsters.png?lastmod=20250612' onclick='toggleOriginalTextDisplay()'>"; 
	
	echo "<img id='sapphireImageId' class='ImageTileFrameSapphire' src='../".$updatedDirDueToURL."assets/images/sapphire.png?lastmod=20250809T1255' onclick='toggleOriginalTextDisplay()'>"; 

	
	//echo "<img class='Image-radio' src='../".$updatedDirDueToURL."assets/images/jeep.png?lastmod=20241023' onclick='changeAudio()'>"; //radio
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

						//edited by MIke, 20250430
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
						//added by Mike, 20231003
						else if ($i==4) {
							$sNewsSource="famitsu";
							$sNewsDisplayedName="FAMITSU";
						}
						//added by Mike, 20231201
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
						
						//added by Mike, 20250531
						$sIncomingDraftTextSelectOption="";
						
					    //iDateTodayAndNewsLastAccessedDifferenceMax = 3;
						
						//verify if an incoming draft is present						
						//for ($iDayCount=0; $iDayCount<3; $iDayCount++) {
						//edited by Mike, 20250802
						//for ($iDayCount=0; $iDayCount<$iDateTodayAndNewsLastAccessedDifferenceMax; $iDayCount++) { 
						for ($iDayCount=0; $iDayCount<=$iDateTodayAndNewsLastAccessedDifferenceMax; $iDayCount++) { 
							$dateTodayTemp = Date('Y-m-d',strtotime('-'.$iDayCount.'days'));

						//echo $dateTodayTemp."<br/>";

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
				
							//echo ">>>>".$iDateTodayAndNewsLastAccessedDifference;
							//edited by Mike, 20250802
							//if ($iDateTodayAndNewsLastAccessedDifference<$iDateTodayAndNewsLastAccessedDifferenceMax) {
							if ($iDateTodayAndNewsLastAccessedDifference<=$iDateTodayAndNewsLastAccessedDifferenceMax) {
								//edited by Mike, 20250614
								$sIncomingDraftTextSelectOption="<span class='incomingDraftTextSelectOptionSpan'>⭐</span>"; //*
								
								//image not displayed in select option
								//$sIncomingDraftTextSelectOption="<span class='incomingDraftTextSelectOptionSpan'><img class='ImageTileFrame1' src='../".$updatedDirDueToURL."assets/images/monsters.png?lastmod=20250614'></span>";
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
			  </select>
			</td>
		</tr>
	</table>
	<br/>
	
<?php
	//added by Mike, 20250224
	function replaceFirstOccurence($sToken,$needle,$replace) {
		//$needle=">";
		//$replace="";			
		$haystack=$sToken;
		$pos = strpos($haystack, $needle);
		if ($pos !== false) {
			$sToken = substr_replace($haystack, $replace, $pos, strlen($needle));
		}
		
		return $sToken;
	}

	//added by Mike, 20240516
	function processDateTodayAndNewsLastAccessedDifferencePrev($sLastAccessed) {
		//echo str_replace("; last accessed: ","",$sLastAccessed);
		$iNewsLastAccessedDate=intval(str_replace("; last accessed: ","",$sLastAccessed));

		//echo "<br/>".Date('Y-m-d');

		$iDateToday=intval(str_replace("-","",Date('Y-m-d')));

		echo "iNewsLastAccessedDate: ".$iNewsLastAccessedDate."<br/>";
		echo "iDateToday: ".$iDateToday."<br/>";

		//echo ">>>date_diff: ".date_diff(date_create("2025-05-30"),date_create("2025-06-02"))->format("%R%a days")."<br/>";

		echo ">>>date_diff: ".intval(date_diff(date_create("2025-05-30"),date_create("2025-06-02"))->format("%a"))."<br/>";


		//echo $iDateToday-$iNewsLastAccessedDate;
		$iDateTodayAndNewsLastAccessedDifference = $iDateToday-$iNewsLastAccessedDate;

		return $iDateTodayAndNewsLastAccessedDifference;
	}
	
	//edited by Mike, 20250808; 20250602
	//TODO: -use date in filename
	function processDateTodayAndNewsLastAccessedDifference($sLastAccessed) {
		//echo str_replace("; last accessed: ","",$sLastAccessed);
		//$iNewsLastAccessedDate=intval(str_replace("; last accessed: ","",$sLastAccessed));

		//echo "<br/>".Date('Y-m-d');

		//$iDateToday=intval(str_replace("-","",Date('Y-m-d')));

		$dateNewsLastAccessedDate=date_create(str_replace("; last accessed: ","",$sLastAccessed));//->format('Y-m-d');
		$dateToday=date_create(Date('Y-m-d'));

		$iDateTodayAndNewsLastAccessedDifference=intval(date_diff($dateNewsLastAccessedDate,$dateToday)->format("%a"))."<br/>";

		//echo $iDateToday-$iNewsLastAccessedDate;
		//$iDateTodayAndNewsLastAccessedDifference = $iDateToday-$iNewsLastAccessedDate;

		return $iDateTodayAndNewsLastAccessedDifference;
	}	

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

	function getGitHubLinkFromInput($cellValue, $updatedDirDueToURL, $completeFilename) {
		$sGitHubLink = $cellValue;
		
		$sGitHubLink = substr($sGitHubLink, strpos($sGitHubLink,"github.com"), strpos($sGitHubLink,".md")-strpos($sGitHubLink,"github.com"));

		//example: ## https://github.com/usbong/newsletters/blob/main/notes/LessonsLearned/famitsuDotCom/2024/202412/20241220.md
		if (strlen(trim($sGitHubLink))>0) {
			$sGitHubLink="https://".$sGitHubLink.".md";
			
			//$sGitHubLink="<a class='webServiceLink' target='_blank' href='".$sGitHubLink."'>A</a>";

			$sGitHubLink="<a class='webServiceGitHubLink' target='_blank' href='".$sGitHubLink."'><img class='Image-github-mark' src='../".$updatedDirDueToURL."assets/images/github-mark.png'></a>";			
		}
		else {
			//example: C:\xampp\htdocs\usbong_newsletters\server\notes\LessonsLearned\gamedeveloper\2024\202412\20241218.md			
			
			//create temp variable
			$sGitHubLinkTemp=str_replace("\\","/",$completeFilename);
			
			//famitsu
			$sGitHubLinkTemp=str_replace("famitsu","famitsuDotCom",$sGitHubLinkTemp);
			//gameDeveloper; case sensitive
			$sGitHubLinkTemp=str_replace("gamedeveloper","GameDeveloperDotCom",$sGitHubLinkTemp);
			//ignjapan; case sensitive
			$sGitHubLinkTemp=str_replace("ignjapan","IGNJapan",$sGitHubLinkTemp);
			//ignchina; case sensitive
			$sGitHubLinkTemp=str_replace("ignchina","IGNChina",$sGitHubLinkTemp);
			//asahiShimbun
			$sGitHubLinkTemp=str_replace("asahishimbun","asahiShimbun",$sGitHubLinkTemp);
			//eurogamerspain
			$sGitHubLinkTemp=str_replace("eurogamerspain","Eurogamerspain",$sGitHubLinkTemp);
			//added by Mike, 20250429
			//TODO: -update: this
//$sGitHubLinkTemp=str_replace("personal","Personal",$sGitHubLinkTemp);
						
			$sGitHubLinkTemp="https://github.com/usbong/newsletters/blob/main/notes/".substr($sGitHubLinkTemp,strpos($sGitHubLinkTemp,"LessonsLearned"));
			
			//added by Mike, 20250806
			//$sGitHubLinkTemp=trim($sGitHubLinkTemp);
			
			//echo "DITO".$sGitHubLinkTemp."<br/>";
			
			//$sGitHubLink=$sGitHubLinkTemp;
			
			//print_r(get_headers($sGitHubLinkTemp, 1));

			//not valid URL
			if (filter_var($sGitHubLinkTemp, FILTER_VALIDATE_URL) === FALSE) {
			}
			else {
				//edited by Mike, 20250612
				//if (strpos(get_headers($sGitHubLinkTemp, 1)[0],"404 Not Found")!==false)
				//Warning: get_headers(): php_network_getaddresses: getaddrinfo failed: No such host is known.
			
				//TODO: -add: suppress warning due to get_headers(...); when there's no internet connectivity
			
				if ((strpos(get_headers($sGitHubLinkTemp, 1)[0],"404 Not Found")!==false) || (strpos(get_headers($sGitHubLinkTemp, 1)[0],"Warning: get_headers()")!==false))
				{
					//URL throws a 404 error
				}
				else {
					$sGitHubLink="<a class='webServiceGitHubLink' target='_blank' href='".$sGitHubLinkTemp."'><img class='Image-github-mark' src='../".$updatedDirDueToURL."assets/images/github-mark.png'></a>";
				}
			}
		}
		
		return " ".$sGitHubLink;
	}

	//added by Mike, 20250513
	function processLanguageTagToDisplay($completeFilename,$iNewsRankCount) {
		//-----
		$sLanguage="EN";//"English"; //default
		
		//edited by Mike, 20250725
		//if ((strpos($completeFilename, "cn.md")!==false) or (strpos($completeFilename, "zaobao")!==false) or (strpos($completeFilename, "ignchina")!==false)) {
		if ((strpos($completeFilename, "ch.md")!==false) or (strpos($completeFilename, "zaobao")!==false) or (strpos($completeFilename, "ignchina")!==false)) {
			$sLanguage="cn";//"ch";//"Chinese Mandarin";
		}
		else if ((strpos($completeFilename, "jp.md")!==false)or (strpos($completeFilename, "asahishimbun")!==false) or (strpos($completeFilename, "ignjapan")!==false) or (strpos($completeFilename, "famitsu")!==false) or (strpos($completeFilename, "gamedeveloper")!==false)) {
			$sLanguage="JP";//"Japanese";
		}
		else if ((strpos($completeFilename, "es.md")!==false) or (strpos($completeFilename, "eurogamerspain")!==false)){
			$sLanguage="ES";//"Spanish";
		}
		else if (strpos($completeFilename, "ph.md")!==false) {
			$sLanguage="PH";//"Filipino";
		}
		
		//-----
		//edited by Mike, 20250515
		$languageCompleteFilenameArray=processCheckLanguageAvailability($completeFilename);
		
		//$iValueCount=0;
		
		//added by Mike, 20250515
		$sLanguage="";

		foreach($languageCompleteFilenameArray as $value) {
			if (file_exists($value[0])) {	
				//echo ">>>>>sLanguageTemp: ".$sLanguageTemp."<br/>";
/*
				echo ">>>>>value[0]: ".$value[0]."<br/>";
				echo ">>>>>value[1]: ".$value[1]."<br/>";
*/
				if ($value[1]==="") {
					$value[1]="en";
					$sLanguage="";
				}
	
				$sLanguage=$sLanguage.strtoupper($value[1]).";";

				//added by Mike, 20250515
				//processReadFile($completeFilenameTemp);
			}
			
			//$iValueCount++;
		}
		
		//$sLanguage = str_replace("ch","EN",$sLanguage);
		
		//echo "OUTPUT: ".$sLanguage."<br/>";
		
		return processDisplayedLanguages($sLanguage,$iNewsRankCount);
	}

	//edited by Mike, 20250516; from 20250515
	function processCheckLanguageAvailability($completeFilename) {
		//added by Mike, 20250514
		//check if other languages exist
		$iLanguageCountMax=5; //TODO: -update: this
		$bIsLanguageBlank=false;
		
		$languageCompleteFilenameArray = array();
		$completeFilenameTemp="";
		$sLanguageTemp="";
		
		for ($iLanguageCount=0; $iLanguageCount<$iLanguageCountMax; $iLanguageCount++) {

			//echo ">>>".$completeFilename."<br/>";
			$sLanguageInCompleteFilename=substr($completeFilename,strpos($completeFilename,".md")-2,2);
			
			//echo "!!!!!".$sLanguageInCompleteFilename."<br/>";
			
			if (is_numeric($sLanguageInCompleteFilename)==1) {
				$bIsLanguageBlank=true;
				//echo "BLANK!!!<br/>";
			}
			//echo "iLanguageCount: ".$iLanguageCount."<br/>";
			
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

			//echo "HALLO: ".$sLanguageTemp."<br/>";			
						
			if ($bIsLanguageBlank) {
				$completeFilenameTemp = str_replace(".md",$sLanguageTemp.".md",$completeFilename);
				
				$bIsLanguageBlank=false;
			}
			else {
				//echo "DITO!".$sLanguageInCompleteFilename."<br/";
				//echo "sLanguageTemp: ".$sLanguageTemp."<br/";

				//edited by Mike, 20250516
				//replace only the last occurrence by adding ".md"
				//$completeFilenameTemp = str_replace($sLanguageInCompleteFilename,$sLanguageTemp,$completeFilename);
				$completeFilenameTemp = str_replace($sLanguageInCompleteFilename.".md",$sLanguageTemp.".md",$completeFilename);

				//echo "completeFilenameTemp: ".$completeFilenameTemp."<br/";

			}

			//echo ">>completeFilenameTemp: ".$completeFilenameTemp."<br/>";
			
			//TODO: -update: this; read each file and put into memory,
			//so that the text can be displayed rapidly;
			if (file_exists($completeFilenameTemp)) {	
				//echo ">>>>>sLanguageTemp: ".$sLanguageTemp."<br/>";
				
				//echo ">>>>>completeFilenameTemp: ".$completeFilenameTemp."<br/>";

				//$sLanguage=$sLanguage.strtoupper($sLanguageTemp).";";
				
				//added by Mike, 20250515
				//processReadFile($completeFilenameTemp);

				array_push($languageCompleteFilenameArray,array($completeFilenameTemp,$sLanguageTemp));
			}
		}
		
		return $languageCompleteFilenameArray; //$sLanguage;
	}

	//added by Mike, 20250515
	function processReadFile($completeFilename) {
		if (!file_exists($completeFilename)) {
		  return null;
		}

		if (($handle = fopen($completeFilename, "r")) !== FALSE) {
		  while (!feof($handle)) {
			$data = fread($handle,filesize($completeFilename));
			$cellValue = $data;
			
			//echo ">>>".$cellValue."<br/>";
		  }
		}
	}

	//added by Mike, 20231207
	//return sOutput
	//edited by Mike, 20240516
	//function processWebsiteReferenceForHeaderTitle($cellValue) {
	//function processWebsiteReferenceForHeaderTitle($cellValue, $iNewsRankCount,$iDateTodayAndNewsLastAccessedDifferenceMax) {
	function processWebsiteReferenceForHeaderTitle($cellValue, $iNewsRankCount,$iDateTodayAndNewsLastAccessedDifferenceMax, $updatedDirDueToURL,$completeFilename) {
		
		//echo ">>>>".$completeFilename;
		
		//edited by Mike, 20250516; from 20250513
		//$sLanguage=processLanguageTagToDisplay($completeFilename);
		$sLanguage=processLanguageTagToDisplay($completeFilename,$iNewsRankCount);
				
		$sToken = strtok($cellValue, "\n");

		$sGitHubLink = getGitHubLinkFromInput($cellValue, $updatedDirDueToURL,$completeFilename);

		//note: space after "##"
		$sToken = str_replace("## ", "", $sToken);
		
		$sReferenceWebsite=substr($sToken,0,25)."... ";
		
		$sReferenceWebsiteComplete=substr($sToken,strpos($sToken,"http"),strpos($sToken,";")-strpos($sToken,"http"));
		
		//added by Mike, 20250903
		//--------------------------
		$sReferenceWebsiteComplete = str_replace("/edit/main/", "/blob/main/", $sReferenceWebsiteComplete);
		
		$sReferenceWebsiteComplete = str_replace("/tree/main/", "/blob/main/", $sReferenceWebsiteComplete);
		
		//echo ">>>>".$sReferenceWebsiteComplete;
		//--------------------------
		
		$sLastAccessed=getLastAccessedFromReferenceWebsite($sToken);

		//added by Mike, 20240516
		$sIncomingDraftText="";
		if ($iNewsRankCount==0) {
			$iDateTodayAndNewsLastAccessedDifference=processDateTodayAndNewsLastAccessedDifference($sLastAccessed);
				
			if ($iDateTodayAndNewsLastAccessedDifference<$iDateTodayAndNewsLastAccessedDifferenceMax) {
				$sIncomingDraftText="<span class='webServiceLinkRowIncomingDraftSpan'>| INCOMING DRAFT</span>";				
			}	
		}
			
		$sOutput="";
		
		//echo "DITO!!!!";

		$sLanguage=processDisplayedLanguages($sLanguage,$iNewsRankCount);
		
		//edited by Mike, 20250729
		//$sOutput=$sOutput."<h3>
		//<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteComplete."'>".$sReferenceWebsite."</a>".$sLastAccessed."".$sIncomingDraftText.$sGitHubLink." ".$sLanguage."</h3><hr>";
		
		//added by Mike, 20250806
		//if this is the first article
		if ($iNewsRankCount==0) { 
			if (strlen($sIncomingDraftText)==0) {
			//echo ">>>>".$sIncomingDraftText;
				$sIncomingDraftText="<span class='webServiceLinkRowIncomingDraftSpan'>| LATEST</span>";
			}			
		}
		
		if (!isMobileAndUsingAppleWebKit()) {
			
			//echo "sLastAccessed: ".$sLastAccessed."".$sIncomingDraftText."<br/>";
			
			//echo ">>>>".$sIncomingDraftText;
			
			//echo ">>>>".$sGitHubLink;

			$sOutput=$sOutput."<h4>
			<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteComplete."'>".$sReferenceWebsite."</a>".$sLastAccessed."".$sIncomingDraftText.$sGitHubLink." ".$sLanguage."</h4><hr>";
			
			//echo "DITO!!".$sOutput;
		}
		else {
			$sOutput=$sOutput."<h3>
			<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteComplete."'>".$sReferenceWebsite."</a>".$sLastAccessed."".$sIncomingDraftText.$sGitHubLink." ".$sLanguage."</h3><hr>";
		}
		
		return $sOutput;
	}
	
	//added by Mike, 20250514
	function processDisplayedLanguages($sLanguage,$iNewsRankCount) {
		$languageTokensArray=explode(";",$sLanguage);
		$iNumOfLanguageTokens=count($languageTokensArray)-1;
		
		//echo ">>>iNumOfLanguageTokens: ".$iNumOfLanguageTokens."<br/>";
		
		if ($iNumOfLanguageTokens>1) {
			//echo ">>>".$languageTokensArray[3]."<br/>";
			$sLanguage="";
			for ($iCount=0; $iCount<$iNumOfLanguageTokens; $iCount++) {
				//echo "languageTokensArray".$iCount.": ".$languageTokensArray[$iCount]."<br/>";
				
				//edited by Mike, 20250801
				//$sLanguage=$sLanguage."<button onclick='myLanguageChangeFunction(\"".$iNewsRankCount."\",\"".$languageTokensArray[$iCount]."\")'>".$languageTokensArray[$iCount]."</button>";
				
				//echo "languageButtonId".$iNewsRankCount."-".$languageTokensArray[$iCount]."<br/>";
				
				$sLanguage=$sLanguage."<button class='languageButton' id='languageButtonId".$iNewsRankCount."-".$languageTokensArray[$iCount]."' onclick='myLanguageChangeFunction(\"".$iNewsRankCount."\",\"".$languageTokensArray[$iCount]."\")'>".$languageTokensArray[$iCount]."</button>";
			}
		}
		else {
			$sLanguage=str_replace(";","",$sLanguage);
		}		
		
		return $sLanguage;
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

		//edited by Mike, 20240131
	    //TODO: -fix: error without last accessed;
		$sReferenceWebsiteTemp=substr($sToken,strpos($sToken,"http"),strpos($sToken,";"));
	   
		$sReferenceWebsiteAccessedDate=substr($sToken,strpos($sToken,";"));

		//echo "DITO: ".$sReferenceWebsiteAccessedDate;

		//echo "DITO: ".strpos($sToken,";");

		//echo "HALLO: ".$sReferenceWebsiteTemp;

		$sTokenTemp=substr($sToken,0,strpos($sToken,$sReferenceWebsiteTemp));

		//added by Mike, 20240511
		//embed sample: https://www.youtube.com/embed/tgbNymZ7vqY
		//https://www.youtube.com/watch?v=YDu-7EFRrb0
		//echo ">>>>".$sReferenceWebsiteTemp;
		
		//reference: https://www.w3schools.com/html/html_youtube.asp; last accessed: 20240511		
		//if (strpos($sReferenceWebsiteTemp,"www.youtube.com")!==false) {
		if ((strpos($sReferenceWebsiteTemp,"www.youtube.com")!==false) or (strpos($sReferenceWebsiteTemp,"youtu.be")!==false)) {
		
			//edited by Mike, 20251222
			//https://youtu.be/hJnAHzo4-KI?si=eOZVUOIa965xCmoX&t=51
			if (strpos($sReferenceWebsiteTemp,"youtu.be")!==false) {
				//$sReferenceWebsiteTemp="https://www.youtube.com/watch?v=hJnAHzo4-KI";
				
				//OK
				//$sReferenceWebsiteTemp="https://www.youtube.com/watch?v=hJnAHzo4-KI?start=51";
				
				
				//echo ">>>>".$sToken;
				
				//get start time if available
				$sReferenceWebsiteTempStartTime=substr($sToken,strpos($sToken,"&"));
				$sReferenceWebsiteTempStartTime=str_replace("&t=","?start=",$sReferenceWebsiteTempStartTime);
				
				$sReferenceWebsiteTemp=substr($sToken,strpos($sToken,"https://youtu.be/"),strpos($sToken,"?"));
				
				$sReferenceWebsiteTemp=str_replace("youtu.be/","www.youtube.com/watch?v=",$sReferenceWebsiteTemp).$sReferenceWebsiteTempStartTime;
			}
		
			$sReferenceWebsiteAccessedDateShortened=str_replace("; last","Last",$sReferenceWebsiteAccessedDate);
		
			echo $sReferenceWebsiteAccessedDateShortened."<br/>";

			$sReferenceWebsiteTempUpdated = str_replace("watch?v=","embed/",$sReferenceWebsiteTemp);
			
			//added by Mike, 20250526
			$sReferenceWebsiteTempUpdated = str_replace("shorts/","embed/",$sReferenceWebsiteTempUpdated);
			
			//echo ">>>>".$sReferenceWebsiteTempUpdated;
			
			//edited by Mike, 20250812; from 20250729
			if (!isMobileAndUsingAppleWebKit()) {
				echo "<iframe class='youtubeIFrame' src='".$sReferenceWebsiteTempUpdated."' allow='fullscreen'></iframe>"; //removed "</>"
				
				//added by Mike, 20250812
/*
				$sReferenceWebsiteTempUpdated = str_replace("embed/","vi/",$sReferenceWebsiteTempUpdated);

				$sReferenceWebsiteTempUpdated = str_replace("https://www.youtube.com/","https://img.youtube.com/",$sReferenceWebsiteTempUpdated);
				
				//echo "HALLO!!!".$sReferenceWebsiteTempUpdated;
				//note size too small or too big; maxresdefault
				echo "<br/><img class='youtubeIFrameCover' src='".$sReferenceWebsiteTempUpdated."/hqdefault.jpg'>";
*/				
			}
			else {
				echo "<iframe class='youtubeIFrameIpad' src='".$sReferenceWebsiteTempUpdated."' allow='fullscreen'></iframe>"; //removed "</>"
			}
			
			$sReferenceWebsiteTempUpdatedCover = str_replace("www.youtube.com","img.youtube.com",$sReferenceWebsiteTempUpdated);
			
			//$sReferenceWebsiteTempUpdatedCover = str_replace("embed/","vi/",$sReferenceWebsiteTempUpdatedCover)."/mqdefault.jpg";
			$sReferenceWebsiteTempUpdatedCover = str_replace("embed/","vi/",$sReferenceWebsiteTempUpdatedCover)."/mqdefault.jpg";
			
			//echo "!!!!!".$sReferenceWebsiteTempUpdatedCover;
			
			//http://img.youtube.com/vi/<YouTube_Video_ID_HERE>/mqdefault.jpg
			
			//echo "<img class='youtubeIFrame' src='http://img.youtube.com/vi/YDu-7EFRrb0/mqdefault.jpg'>";

			//echo "<img class='youtubeIFrame' src='http://img.youtube.com/vi/YDu-7EFRrb0/hqdefault.jpg'>";
			
			//TODO: -add: this
			//echo "<img class='youtubeCoverImg' src='".$sReferenceWebsiteTempUpdatedCover."'>";
		}
		//added by Mike, 20250815
		else if (strpos($sReferenceWebsiteTemp,"store.steampowered.com")!==false) {
			$sReferenceWebsiteAccessedDateShortened=str_replace("; last","Last",$sReferenceWebsiteAccessedDate);
		
			echo $sReferenceWebsiteAccessedDateShortened."<br/>";

			$sReferenceWebsiteTempUpdated = str_replace("watch?v=","widget/",$sReferenceWebsiteTemp);
						
			//echo ">>>>".$sReferenceWebsiteTempUpdated;
			
			//echo "<iframe src='".$sReferenceWebsiteTempUpdated."'></iframe>";		
			
			//if (!isMobileAndUsingAppleWebKit()) {
				echo "<iframe class='storeSteamIFrame' src='".$sReferenceWebsiteTempUpdated."'></iframe>"; 
			//}
/*			
			else {
				echo "<iframe class='youtubeIFrameIpad' src='".$sReferenceWebsiteTempUpdated."' allow='fullscreen'></iframe>"; //removed "</>"
			}
*/			
		}
		//added by Mike, 20240711
		else if ((strpos($sReferenceWebsiteTemp,"twitter.com")!==false) || (strpos($sReferenceWebsiteTemp,"x.com")!==false)) {
			echo "$sTokenTemp<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>"; //"<br/>";
			//added by Mike, 20230801
			echo $sReferenceWebsiteAccessedDate."<br/>";
		
			//Reference: https://stackoverflow.com/questions/41090108/how-to-embed-a-tweet-on-a-page-if-i-only-know-its-id; last accessed: 20240711
			//answer by: Daren Chandisingh, 20200522T1126
			//note: use of twitter.com; instead of x.com
			
			$sReferenceWebsiteTwitterX=substr($sReferenceWebsiteTemp,strpos($sReferenceWebsiteTemp,";"));
					
			//echo $sReferenceWebsiteTwitterX."<br/>";
			
			$sReferenceWebsiteTwitterX=substr($sReferenceWebsiteTwitterX,strpos($sReferenceWebsiteTwitterX,"status/")+strlen("status/"));

			//echo $sReferenceWebsiteTwitterX."<br/>";
			//edited by Mike, 20250520
			echo "<div align='center'>";		
			echo "<blockquote class='twitter-tweet'><a href='https://twitter.com/x/status/".$sReferenceWebsiteTwitterX."'></a></blockquote> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>";
			echo "</div>";
		}
		//added by Mike, 20250519
		else if (strpos($sReferenceWebsiteTemp,"instagram.com")!==false) {
			echo "$sTokenTemp<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>"; //"<br/>";
			//added by Mike, 20230801
			echo $sReferenceWebsiteAccessedDate."<br/>";
		
			//reference: https://help.instagram.com/620154495870484?helpref=faq_content; last accessed: 20250519
			
			//edited by Mike, 20250521
			if (strpos($sReferenceWebsiteTemp,"reel/")!==false) {
				//echo "!!!".$sReferenceWebsiteTemp."<br/>";
				//example input: https://www.instagram.com/yenfukayan/reel/DGfAHD-SyDo/
				//example output: reel/DGfAHD-SyDo/
							
				$sReferenceWebsiteInstagram=substr($sReferenceWebsiteTemp,strpos($sReferenceWebsiteTemp,"reel"));
			}
			else {
				//$sReferenceWebsiteInstagram="yenfukayan";
				//echo ">>>>>".$sReferenceWebsiteTemp."<br/>";
				
				$sReferenceWebsiteInstagram=substr($sReferenceWebsiteTemp,strpos($sReferenceWebsiteTemp,"instagram.com/")+strlen("instagram.com/"));
				
				//echo "HALLO".$sReferenceWebsiteInstagram."<br/>";
			}
					
			//echo $sReferenceWebsiteTwitterX."<br/>";
			//sample			
			//echo ">>>>>".$sReferenceWebsiteInstagram."<br/>";
			echo "<div align='center'>";
			echo "<blockquote class='instagram-media' data-instgrm-permalink='https://www.instagram.com/".$sReferenceWebsiteInstagram."'></blockquote>
			<script async src='//www.instagram.com/embed.js'></script>";
			echo "</div>";
		}
		//TODO: -reverify: this		
		//added by Mike, 20250513
		else if (strpos($sReferenceWebsiteTemp,"bsky.app")!==false) {
			echo "$sTokenTemp<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>"; //"<br/>";
			echo $sReferenceWebsiteAccessedDate."<br/>";
			
			$sReferenceWebsiteBlueSky=substr($sReferenceWebsiteTemp,strpos($sReferenceWebsiteTemp,";"));
					
			//echo "Reference: ".$sReferenceWebsiteBlueSky."<br/>";
			
			$sDataBlueSkyUri=substr($sReferenceWebsiteBlueSky,strpos($sReferenceWebsiteBlueSky,"/did:"));
			
			//echo ">>".$sDataBlueSkyUri."<br/>";

			$sDataBlueSkyUri=str_replace("post","app.bsky.feed.post",$sDataBlueSkyUri);
			
			//echo ">>>>>".$sDataBlueSkyUri."<br/>";
			
			$sReferenceWebsiteBlueSky=substr($sReferenceWebsiteBlueSky,strpos($sReferenceWebsiteBlueSky,"status/")+strlen("status/"));
			
			//echo "href: ".$sReferenceWebsiteBlueSky."<br/>";
			//edited by Mike, 20250520
			echo "<div align='center'>";		
			echo "<blockquote class='bluesky-embed' data-bluesky-uri='at:/".$sDataBlueSkyUri."'' data-bluesky-cid='bafyreice34caadm5ucpc7yh5jto6a2e5bwh4g47lz2cfuuinhiel5sfg4q' data-bluesky-embed-color-mode='system'><a href='https:/".$sReferenceWebsiteBlueSky."'></a></blockquote> <script async src='https://embed.bsky.app/static/embed.js' charset='utf-8'></script>";
			echo "</div>";		
			
			//Reference: 
			//1) https://embed.bsky.app/; last accessed: 20250513
			//2) https://bsky.app/profile/did:plc:rcyyjldt7topi6fz3dxnsaxx/post/3lotio37mwz2b; last accessed: 20250513
			//<blockquote class="bluesky-embed" data-bluesky-uri="at://did:plc:rcyyjldt7topi6fz3dxnsaxx/app.bsky.feed.post/3lotio37mwz2b" data-bluesky-cid="bafyreice34caadm5ucpc7yh5jto6a2e5bwh4g47lz2cfuuinhiel5sfg4q" data-bluesky-embed-color-mode="system"><p lang="">You encounter this enigmatic man early in #FF15. Ardyn proves to be so much more.Plus, his outfit is incredible. Just look at it. A true work of art from FINAL FANTASY XV character designer, Roberto Ferrari! #MTGxFINALFANTASY<br><br><a href="https://bsky.app/profile/did:plc:rcyyjldt7topi6fz3dxnsaxx/post/3lotio37mwz2b?ref_src=embed">[image or embed]</a></p>&mdash; Magic: The Gathering (<a href="https://bsky.app/profile/did:plc:rcyyjldt7topi6fz3dxnsaxx?ref_src=embed">@magic.wizards.com</a>) <a href="https://bsky.app/profile/did:plc:rcyyjldt7topi6fz3dxnsaxx/post/3lotio37mwz2b?ref_src=embed">May 11, 2025 at 1:46 AM</a></blockquote><script async src="https://embed.bsky.app/static/embed.js" charset="utf-8"></script>
		
			//echo "<blockquote class='twitter-tweet'><a href='https://twitter.com/x/status/".$sReferenceWebsiteTwitterX."'></a></blockquote> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>";
		}		
		else {
			echo "$sTokenTemp<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>"; //"<br/>";
			//added by Mike, 20230801
			echo $sReferenceWebsiteAccessedDate."<br/>";
		}
	}

	//added by Mike, 20240723
	//output: slastAccessed
	function getLastAccessedFromReferenceWebsite($sToken) {		
		$sReferenceWebsite=substr($sToken,0,25)."... ";
		$sReferenceWebsiteComplete=substr($sToken,strpos($sToken,"http"),
				strpos($sToken,";")-strpos($sToken,"http"));
		$sLastAccessed=substr($sToken,strpos($sToken,";"));
		
		//added by Mike, 20240723
		//auto-remove "; from date";		
		if (strpos($sLastAccessed,"; from ")!==false) {
			$sLastAccessedPartToKeep=substr($sLastAccessed, 0, strpos($sLastAccessed,"; from "));
			$sLastAccessed=$sLastAccessedPartToKeep." ";
			//echo ">>>>$sLastAccessedPartToKeep";
		}
		
		return $sLastAccessed;
	}
	
	function updateTextInputWithLink($sToken) {	
		//$sOutput=$sToken;
	
		//edited by Mike, 20250128
		//if (strpos(strtolower($sToken), "[")!==false) {
		while ((strpos(strtolower($sToken), "[")!==false) and (strpos(strtolower($sToken), "](")!==false)) {			
		
			//echo "!!!!!!!";
				
			//example input: Usbong [has announced](http://www.usbong.ph) its plan for the year.

			$sReferenceWebsiteTempStart=substr($sToken,strpos($sToken,"[")+1);
			$sReferenceWebsiteTempTail=substr($sToken,strpos($sToken,"]"));
						
			//has announced
			$sReferenceWebsiteTempText=str_replace($sReferenceWebsiteTempTail,"",$sReferenceWebsiteTempStart);
			
			//echo ">>>>>> ".$sReferenceWebsiteTempTail."<br><br>";
			//echo ">>>>>> TAIL: ".$sReferenceWebsiteTempAddress."<br><br>";

			$sReferenceWebsiteTempTailTwo=substr($sReferenceWebsiteTempTail,strpos($sReferenceWebsiteTempTail,")"));

			//echo ">>>>>> TAIL TWO: ".$sReferenceWebsiteTempTailTwo."<br><br>";

			$sReferenceWebsiteTempTail=str_replace($sReferenceWebsiteTempTailTwo,"",$sReferenceWebsiteTempTail);

			$sReferenceWebsiteAddress=replaceFirstOccurence($sReferenceWebsiteTempTail,"(","");
			
			$sReferenceWebsiteAddress=replaceFirstOccurence($sReferenceWebsiteAddress,")","");

			$sReferenceWebsiteAddress=replaceFirstOccurence($sReferenceWebsiteAddress,"]","");

			$sLink="<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteAddress."'>".$sReferenceWebsiteTempText."</a>";			
			//$sOutput=str_replace($sReferenceWebsiteTempText,$sLink,$sToken);
			$sOutput=str_replace("[".$sReferenceWebsiteTempText."]",$sLink,$sToken);

			$sOutput=str_replace("(".$sReferenceWebsiteAddress.")","",$sOutput);
			
			//echo ">>>>>".$sLink;
			//echo ">>>>>".$sReferenceWebsiteTempStart;

			$sToken=$sOutput;
		}	
		return $sToken;
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

				//added by Mike, 20211014
				//String Find COMMAND: case sensitive OFF; output case sensitive
				$sKeyphraseCaseSensitive = stristr($cellValue,$sKeyphrase, false); //after needle
				//note: output of stristr also includes part of string after the $sKeyphrase
				$sKeyphraseCaseSensitive = substr($sKeyphraseCaseSensitive,0,strlen($sKeyphrase));

				$cellValue=str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue);

				//edited by Mike, 20211017
//				if (strlen($cellValue)>118) {
				if (strlen($cellValue)>100) {

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
					$cellValue=substr($cellValue,$iStartPos,$iKeyPhraseStartPos+$iOffset);
				}

				//edited by Mike, 20211022
				echo substr(str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue),0,160);

				echo " ...";
			echo "</td>
				</tr>
					</table>";

			echo "<br/><br/>";
	}

	//edited by Mike, 20250728; from 20230504
	//==========================================
?>	
	<table>
		<tr>
<?php
		if (!isMobileAndUsingAppleWebKit()) {
?>	
		<td class="not-scrollable-td">
<!--		
			<div class="not-scrollable-div">A</div>
			
			<td id="closeReportId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="closeReportTableTd" onmousedown="toggleMoreStart('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')" onmouseup="toggleMoreEnd('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')">
-->			
		</td>
<?php
		}
?>	
		<td>
<?php
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

	//added by Mike, 20250805
	$iDayCount=0;
	//$iDayCount+=2; //to move back; add; start at 2

	if (strpos($_SERVER['REQUEST_URI'],"?d=")!==false) {
		$sCurrURL = $_SERVER['REQUEST_URI'];
		//echo ">>>>>".explode("?d=",$sCurrURL)[1];
		$iDayCount+=(explode("?d=",$sCurrURL)[1]+1);
	}

	//added by Mike, 20231201; from 20230526
	//set to max 5; to iterate from highest in count
	//edited by Mike, 20250512
	//$iReportForTheDayCountMax=5;
	//added by Mike, 20250729
	//TODO: -reverify: this; cause of lag
	//edited by Mike, 20250805
	//video loading on iPad
	$iReportForTheDayCountMax=7;//1; //8;	

	//added by Mike, 20250805
	if (isMobileAndUsingAppleWebKit()) {
/*
		if (strpos($_SERVER['REQUEST_URI'],"?d=-1")!==false) {
			$iReportForTheDayCountMax=4;
		}
		else {
			$iReportForTheDayCountMax=3;
		}
*/		
		$iReportForTheDayCountMax=3;
	}
	
	$iReportForTheDayCount=$iReportForTheDayCountMax; //0

	//edited by Mike, 20230920	//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory."eurogamerspain/".$filename);

	//echo $sNewsSourceSelected;

	$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory.$sNewsSourceSelected."/".$filename);

	//echo $completeFilename;

/*	//removed by Mike, 20250805
	$iDayCount=0;

	//$iDayCount+=2; //to move back; add; start at 2

	if (strpos($_SERVER['REQUEST_URI'],"?d=")!==false) {
		$sCurrURL = $_SERVER['REQUEST_URI'];
		//echo ">>>>>".explode("?d=",$sCurrURL)[1];
		$iDayCount+=(explode("?d=",$sCurrURL)[1]+1);
	}
*/
	
	//added by Mike, 20230527
	$iTotalDayCountWithMultiReportsForTheDay=0;


	//added by Mike, 20231206
	$prevCompleteFilename="";

	//edited by Mike, 20250512
	$iNewsRankCountMax=$iReportForTheDayCountMax;//5;

	//TODO: -reverify: this when news source changed;
	$iHitSameNewsCount=0;
	
	//added by Mike, 20241031
	$iNewsRankCount=0;

	//multiple news per source; max 5
	for ($iNewsRankCount=0; $iNewsRankCount<$iNewsRankCountMax; $iNewsRankCount++) {

		//echo ">>>iNewsRankCount: ".$iNewsRankCount."<br/>";
		$completeFilename="";

		//added by Mike, 20230511
		while (!file_exists($completeFilename)) {

//			echo "completeFilename: ".$completeFilename."<br/><br/>";

			$dateTodayTemp = Date('Y-m-d',strtotime('-'.$iDayCount.'days'));

//			echo $dateTodayTemp."<br/>";

			$dateTodayTemp=str_replace('-','',$dateTodayTemp);

			//added by Mike, 20230707
			//2023-07-07; output: 202307
			$currYearMonthBasedOnDateTodayTemp=substr(str_replace('-','',$dateTodayTemp),0,6);

			//added by Mike, 20231228
			$currYearOnlyBasedOnDateTodayTemp=substr(str_replace('-','',$dateTodayTemp),0,4);
			
			//WINDOWS machine
			//edited by Mike, 20230707
			//if (strpos(dirname(__DIR__), ":\"")!==false) {
			if (strpos(dirname(__DIR__), ":\\")!==false) {

				//edited by Mike, 20231228
//				$filename=$currYearMonthBasedOnDateTodayTemp."\asahishimbun".$dateTodayTemp;
				$filename=$currYearOnlyBasedOnDateTodayTemp."\\".$currYearMonthBasedOnDateTodayTemp."\asahishimbun".$dateTodayTemp;
			}
			//LINUX machine
			else {				
				//$filename=$currYearMonthBasedOnDateTodayTemp."/asahishimbun".$dateTodayTemp;
				
				$filename=$currYearOnlyBasedOnDateTodayTemp."/".$currYearMonthBasedOnDateTodayTemp."/asahishimbun".$dateTodayTemp;
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
				
				$currMonthOnlyBasedOnDateTodayTemp=substr($currYearMonthBasedOnDateTodayTemp,4);
				
				//added by Mike, 20231228
				if ($currMonthOnlyBasedOnDateTodayTemp<0) {
					$currYearOnlyBasedOnDateTodayTemp-=1;
					$currMonthOnlyBasedOnDateTodayTemp=12;
					
					$currYearMonthBasedOnDateTodayTemp=$currYearOnlyBasedOnDateTodayTemp.$currMonthOnlyBasedOnDateTodayTemp;
				}
				
				if ($currYearOnlyBasedOnDateTodayTemp<2018) {
					break; //END
				}
			}

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

			if ($iReportForTheDayCount>1){
				//edited by Mike, 20230526
				$filename=$filename."-".$iReportForTheDayCount;

				//edited by Mike, 20231201
				//$iReportForTheDayCount++;
				$iReportForTheDayCount--;
			}
			else {
				//added by Mike, 20230526
				$iReportForTheDayCount=$iReportForTheDayCountMax;//0;
				$iDayCount++;
			}
			
			//echo $sNewsSourceSelected;

		    //edited by Mike, 20230920	//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory."eurogamerspain/").$filename;
			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sInputDirectory.$sNewsSourceSelected."/").$filename;

/*
			echo $completeFilename."<br/>";
			echo ">>>".$filename."<br/>";
*/
			
			$iLanguageCount=0;
			$iLanguageCountMax=5;
			$sLanguage="";
			$completeFilenameOrig=$completeFilename;
			
			while ($iLanguageCount<$iLanguageCountMax) {
				$completeFilename=$completeFilenameOrig;
				
				switch ($iLanguageCount) {
					case 0: //en
						$sLanguage="";
						break;
					case 1: //jp
						$sLanguage="jp";
						break;
					case 2: //es
						$sLanguage="es";
						break;
					case 3: //ch
						$sLanguage="ch";
						break;
					case 4: //ph
						$sLanguage="ph";
						break;
				}
				
				//echo "sLanguage: ".$sLanguage."<br/>";
					
				$completeFilename=$completeFilename.$sLanguage.".md";

				//echo "completeFilename: ".$completeFilename."<br/>";
				
				if (file_exists($completeFilename)) {				
					//$completeFilename=$completeFilename.$iLanguageCount.".md";
					
					//echo "EXISTS!!!";
					//echo "!!!completeFilename: ".$completeFilename."<br/>";

					//added by Mike, 20250514
					//check other languages if available
					
					
					//edited by Mike, 20250502
					break;
					//continue;
				}
				$iLanguageCount++;
			}

			if ($iLanguageCount>=$iLanguageCountMax) {
				//echo "MAX!!!";
				$completeFilename=$completeFilenameOrig;
			}

			//added by Mike, 20230707
			if (!file_exists($completeFilename)) {				
				$completeFilename=$completeFilename.".md";
			}

			//added by Mike, 20231206
			if (strpos($prevCompleteFilename, $completeFilename)!==false) {
				$completeFilename="next";

				//edited by Mike, 20231208
//				if ($iHitSameNewsCount>=3) {
				//reminder: iReportForTheDayCountMax=5;
				//before moving on to the next day;
				//notes: select news sources do not yet have folders for 3 months due to insufficient content
				if ($iHitSameNewsCount>=30) { //90
					//END
					$iNewsRankCount=$iNewsRankCountMax;
				}

				$iHitSameNewsCount++;

				continue;
			}
			
			//added by Mike, 20250730
			//----------------------------------------------
			//isDisplayIncomingDraft
			//if (false) {
			//if (true) {
			//echo ">>>>>".$_SERVER['REQUEST_URI']."<br/>";
			//edited by Mike, 20250805; from 20250804
			//if (strpos($_SERVER['REQUEST_URI'],"?d=1")===false) {
			//edited by Mike, 20250809
			//TODO: -reverify; files with "-2.md" not added if URL doesn't have "?d=1"
			if (strpos($_SERVER['REQUEST_URI'],"?d=-1")===false) {
				
			//echo ">>>>".$sNewsNumber;
				
			//if ((strpos($_SERVER['REQUEST_URI'],"?d=-1")===false) or 
			//	(strpos($sNewsNumber,"N8")===false)) {
				
				//echo "DITO!!!";
				//echo "!!!completeFilename: ".$completeFilename."<br/>";

				$fileDateArray=explode("\\",$completeFilename);
				//echo "count(fileDateArray): ".count($fileDateArray)."<br/>";
				
				//if Linux server
				if (count($fileDateArray)<=1) {
					$fileDateArray=explode("/",$completeFilename);
				}
				
				$sFileDate=$fileDateArray[count($fileDateArray)-1];
				$sFileDate=str_replace(".md","",$sFileDate);
				$sFileDate=str_replace("en","",$sFileDate);
				$sFileDate=str_replace("jp","",$sFileDate);
				$sFileDate=str_replace("es","",$sFileDate);
				$sFileDate=str_replace("ch","",$sFileDate);
				$sFileDate=str_replace("ph","",$sFileDate);
				
				//echo "sFileDate: ".$sFileDate."<br/>";

				//added by Mike, 20250730
				$iDateTodayAndNewsLastAccessedDifference=processDateTodayAndNewsLastAccessedDifference($sFileDate);
			
				if ($iDateTodayAndNewsLastAccessedDifference<$iDateTodayAndNewsLastAccessedDifferenceMax) {
					//echo "SKIP!!";
					
					$completeFilename="next";
					continue; //skip incoming draft
				}	
			}
			//----------------------------------------------
						

			$prevCompleteFilename=$completeFilename;
			//echo "prevCompleteFilename: ".$prevCompleteFilename."<br/>";

		}
	
	$languageCompleteFilenameArray=processCheckLanguageAvailability($completeFilename);
	
	$languageCompleteFilenameArrayCount=0;
			
	foreach($languageCompleteFilenameArray as $value) {
		$completeFilename=$value[0];
		$languageCompleteFilenameArrayCount++;
		
		//echo "!!!!".$completeFilenameOrig."<br/>";
		
		$sLanguageValue=str_replace($completeFilenameOrig,"",$value[0]);
		
		$sLanguageValue=str_replace(".md","",$sLanguageValue);
		$sLanguageValue=strtoupper($sLanguageValue);

		//echo ">>>>>>".$sLanguageValue."<br/>";

	//added by Mike, 20231228
	if (!file_exists($completeFilename)) {
		break;
	}
	
	//echo "Complete Filename: ".$completeFilename."<br/>";

	if (($handle = fopen($completeFilename, "r")) !== FALSE) {

				  while (!feof($handle)) {
					//edited by Mike, 20211014;
					//TO-DO: -update: to identify if keyphrase uses
					//the previous read batch and the next batch
					//edited by Mike, 20211014; edited again by Mike, 20211022
					//$data = fread($handle, 128);
					$data = fread($handle,filesize($completeFilename));

					$cellValue = $data;
					
					//added by Mike, 20230110
					//note: list of additional rules to remove select displayed search outputs via updating searched value for use as input
//-----
//PART 1
					$cellValue = str_replace("by Mike, ".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("server\\".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("var/www/html/", "", $cellValue);
					
					//added by Mike, 20240717
					$sStringToRemoveInCellValue=substr($cellValue, strpos($cellValue,"?"));
					$sStringToRemoveInCellValue=substr($sStringToRemoveInCellValue, 0,strpos($sStringToRemoveInCellValue,"continuehere"))."continuehere";
					
					//echo ">>>>".$sStringToRemoveInCellValue;
					
					$cellValue = str_replace($sStringToRemoveInCellValue, "", $cellValue);

					
					//added by Mike, 20231207
					if (empty($cellValue)) {
						//echo "HALLO!";
						continue;
					}

//-----
//PART 2

	//echo ">>iNewsRankCount: ".$iNewsRankCount."<br/>";
		
	if ($languageCompleteFilenameArrayCount==1) { //>2){ 
		//echo "sLanguageValue: ".$sLanguageValue."<br/>";
		//edited by Mike, 20250516
		//English in sLanguageValue is blank here
	
		if ($sLanguageValue==="") {
			$sLanguageValue="EN";
		}
				
		if ($iNewsRankCount==0) {
			echo "<table id='bodyTableId".$iNewsRankCount."-".$sLanguageValue."' class='bodyTableLatest'><tr><td>";
		}
		else {
			echo "<table id='bodyTableId".$iNewsRankCount."-".$sLanguageValue."' class='bodyTable'><tr><td>";
		}
	}
	else {
		//echo "<table id='bodyTableId".$sLanguageValue."' class='bodyTableHidden'><tr><td>";

		if ($iNewsRankCount==0) {
			echo "<table id='bodyTableId".$iNewsRankCount."-".$sLanguageValue."' class='bodyTableHiddenLatest'><tr><td>";
		}
		else {
			echo "<table id='bodyTableId".$iNewsRankCount."-".$sLanguageValue."' class='bodyTableHidden'><tr><td>";
		}
	}
	
		echo "<div id='mainTextDivId".$iNewsRankCount."-".$sLanguageValue."' class='mainTextDiv'>";
		
		echo "<div class='textDoubleSpacedDiv'>";

$sNewsTitleWebsiteReference = processWebsiteReferenceForHeaderTitle($cellValue, $iNewsRankCount,$iDateTodayAndNewsLastAccessedDifferenceMax,$updatedDirDueToURL, $completeFilename);

$newsTitleOriginal = substr($cellValue,strpos($cellValue,">")+1); //">" not included

$newsTitleWithTranslation = substr($newsTitleOriginal,0,strpos($newsTitleOriginal,">")); //">" not included

$newsTitleMain = updateTextInputWithLink(substr($newsTitleWithTranslation,0,strpos($newsTitleOriginal,"\n")));

$newsTitleTranslated = updateTextInputWithLink(substr($newsTitleWithTranslation,strlen($newsTitleMain)));

$newsTitleOutput = "";

if (strpos($completeFilename,"\personal\\") or strpos($completeFilename,"/personal/")) {
	$newsTitleOutput = $sNewsTitleWebsiteReference."<blockquote class='usbongBlockquotePersonal' id='usbongBlockquoteId".$iNewsRankCount."-".$sLanguageValue."'>".$newsTitleMain."</blockquote>".$newsTitleTranslated;
}
else {
	if ($bIsShowOriginalText) {
		$newsTitleOutput = $sNewsTitleWebsiteReference."<blockquote class='usbongBlockquote' id='usbongBlockquoteId".$iNewsRankCount."-".$sLanguageValue."'>".$newsTitleMain."</blockquote>".$newsTitleTranslated;
	}
	else {
		$newsTitleOutput = $sNewsTitleWebsiteReference.$newsTitleTranslated;
	}
}

//echo ">>>>".$newsTitleOutput."<br/>END<br/>";

?>
	<input type="hidden" id="displayIncomingDraftId" value="0" required>

<?php
$sClassHeader='moreTextSpanIIISummaryReportsHeader';
$sClass='moreTextSpanIIISummaryReports';

if (isMobileAndUsingAppleWebKit()) {
	$sClassHeader='moreTextSpanIIISummaryReportsHeaderApple';
	$sClass='moreTextSpanIIISummaryReportsApple';
}

?>

<span id="summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="<?php echo $sClassHeader;?>" onmousedown="toggleMoreStart('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')" onmouseup="toggleMoreEnd('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')"><?php //removed by Mike, 20250730 //echo $newsTitleOutput."";?></span>

<span id="summaryReportsCountId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="spanSummaryReportsCount"></span>

<span id="summaryReportsId<?php echo $iNewsRankCount."-".$sLanguageValue;?>" class="<?php echo $sClass;?>" onmousedown="toggleMoreStart('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')" onmouseup="toggleMoreEnd('summaryReportsHeaderId<?php echo $iNewsRankCount."-".$sLanguageValue;?>')">


<?php

//added by Mike, 20240720
$bHasAdditionalReference=false;

//echo ">>>>>>>".$cellValue."<br/>";

//$sToken = strtok($cellValue, "<br/>");
$sToken = strtok($cellValue, "\n");
$sPrevToken="";
$iRowCount=0;

while ($sToken !== false)
{
	if ($iRowCount==0) {
/*		//removed by Mike, 20250806
		//added by Mike, 20250730
		//note: space after "##"
		$sToken = str_replace("## ", "", $sToken);

		$sReferenceWebsite=substr($sToken,0,25)."... ";
		$sReferenceWebsiteComplete=substr($sToken,strpos($sToken,"http"),
				strpos($sToken,";")-strpos($sToken,"http"));

		$sGitHubLink = getGitHubLinkFromInput($cellValue, $updatedDirDueToURL, $completeFilename);

		$sLastAccessed=getLastAccessedFromReferenceWebsite($sToken);
		
		//echo strpos($cellValue,"<br/>");
		//added by Mike, 20240516
		$sIncomingDraftText="";
		
		if ($iNewsRankCount==0) {
			//added by Mike, 20240516
			$iDateTodayAndNewsLastAccessedDifference=processDateTodayAndNewsLastAccessedDifference($sLastAccessed);
			
			//echo ">>>>".$iDateTodayAndNewsLastAccessedDifference;
			
			if ($iDateTodayAndNewsLastAccessedDifference<$iDateTodayAndNewsLastAccessedDifferenceMax) {
				$sIncomingDraftText="<span class='webServiceLinkRowIncomingDraftSpan'>| INCOMING DRAFT</span>";
			}			
		}
*/
		echo $sNewsTitleWebsiteReference;
/*
		echo "<span class='moreTextSpanIIISummaryReportsHeader'>";
		//edited by Mike, 20250729
		if (!isMobileAndUsingAppleWebKit()) {
			echo "<h4>";
		}
		else {
			echo "<h3>";
		}

		echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteComplete."'>";
		echo $sReferenceWebsite."</a>";
		//edited by Mike, 20240723; from 20231208
		//echo "<b>".$sLastAccessed."</b>";
		echo $sLastAccessed;
		//echo $sLastAccessed;
		
		//added by Mike, 20240516
		echo $sIncomingDraftText;
		
		echo $sGitHubLink;
		
		//edited by Mike, 20250516; from 20250513
		$sLanguage=processLanguageTagToDisplay($completeFilename,$iNewsRankCount);
		echo " ".$sLanguage;

		//edited by Mike, 20250729
		if (!isMobileAndUsingAppleWebKit()) {
			echo "</h4>";
		}
		else {
			echo "</h3>";
		}
		echo "</span>";
		echo "<hr>";
*/
	}
	//else if (strpos($cellValue, ">")!==false) {
	else if (substr($sToken,0,1)==">") {
		
		//echo ">>>>>>>>";

		//if prev token was a note
		if (strpos($sPrevToken, "-->")!==false) {
//			echo "<br/>";
		}

		//echo "HALLO!!!";
		
		//edited by Mike, 20250226; from 20250224
		//replace only first instance
		//$sToken = str_replace(">","",$sToken);
		$sToken=replaceFirstOccurence($sToken,">","");
			
		//added by Mike, 20250125
		$sToken=updateTextInputWithLink($sToken);

		//added by Mike, 20250610
		//echo ">>>>".$completeFilename;
		
		if (strpos($completeFilename,"\personal\\") or strpos($completeFilename,"/personal/")) {
			echo "<blockquote class='usbongBlockquotePersonal'>";
			echo "$sToken";
			echo "</blockquote>";
		}
		else {
			if ($bIsShowOriginalText) {
				echo "<blockquote class='usbongBlockquote'>";
				echo "$sToken";
				//echo "HALLO!!!";
				echo "</blockquote>";
			}
		}
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

			//removed by by Mike, 20231221; from 20231212
			//echo "<br/>";

			echo "</span>";
		}
	}
	else if (strpos(strtolower($sToken), "# reference")!==false) {
		//noted by Mike, 20230518; "###" also exists for references
		if (strpos(strtolower($sToken), "####")!==false) {
			$sToken = str_replace("#", "", $sToken);

			//edited by Mike, 20231224
//			$sToken = str_replace("Reference:", "", $sToken);
			$sToken = str_replace(strtolower("reference"), "", $sToken);

			$sReferenceWebsiteTemp=substr($sToken,0,strpos($sToken,";"));
			$sLastAccessedTemp=substr($sToken,strpos($sToken,";")+1);

			//added by Mike, 20230518
			if (is_numeric($sPrevToken[0])) {
				echo "<br/>";
			}

			echo "<span class='usbongTextReferencePart'>";
			echo "<br/>Reference:<br/>";
			
			echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>;<br/>";
			echo "$sLastAccessedTemp<br/><br/>";
			echo "</span>";
		}
		else {
			//echo "DITO";
			
			//echo "<b>## REFERENCE</b><br/>"; //###
			
			echo "<p class='usbongTranslatedQuote'>";
			echo "<b>## REFERENCE</b>";
			echo "</p>";
			
			//added by Mike, 20240720
			$bHasAdditionalReference=true;
		}
	}
	else if (strpos(strtolower($sToken), "# 参考")!==false) {
		//noted by Mike, 20230518; "###" also exists for references
		if (strpos(strtolower($sToken), "####")!==false) {
			$sToken = str_replace("#", "", $sToken);

			//edited by Mike, 20231224
//			$sToken = str_replace("Reference:", "", $sToken);
			$sToken = str_replace(strtolower("reference"), "", $sToken);

			$sReferenceWebsiteTemp=substr($sToken,0,strpos($sToken,";"));
			$sLastAccessedTemp=substr($sToken,strpos($sToken,";")+1);

			//added by Mike, 20230518
			if (is_numeric($sPrevToken[0])) {
				echo "<br/>";
			}

			echo "<span class='usbongTextReferencePart'>";
			echo "<br/>Reference:<br/>";
			
			echo "<a class='webServiceLink' target='_blank' href='".$sReferenceWebsiteTemp."'>";
			echo $sReferenceWebsiteTemp."</a>;<br/>";
			echo "$sLastAccessedTemp<br/><br/>";
			echo "</span>";
		}
		else {
			
			//echo "<b>## 参考</b><br/>"; //###

			echo "<p class='usbongTranslatedQuote'>";
			echo "<b>## 参考</b>";
			echo "</p>";
			
			//added by Mike, 20240720
			$bHasAdditionalReference=true;
		}
	}
	else if ((strpos(strtoupper($sToken), "# LAST UPDATED")!==false) || (strpos(strtoupper($sToken), "# UPDATED")!==false) || (strpos(strtoupper($sToken), "# 更新")!==false)) {
		$sToken=str_replace("#","",$sToken);
		$sToken=str_replace("LAST UPDATED:","<b>Updated:</b>",strtoupper($sToken));
		$sToken=str_replace("更新：","<b>更新：</b>",strtoupper($sToken));
		$sToken=str_replace("更新:","<b>更新:</b>",strtoupper($sToken));
		$sToken=trim($sToken);
		
		//echo ">>>".$sToken.">>>><br/>";
		
		echo "<span class='usbongLastUpdatedTextSectionPart'>";
		//echo "<br/>$sToken<br/>";
		echo "$sToken";
		echo "</span>";
	}
	//added by Mike, 20250123
	else if (strpos(strtolower($sToken), "[")!==false) {
		echo "<p class='usbongTranslatedQuote'>";
		echo updateTextInputWithLink($sToken);	
		echo "</p>";		
	}		
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
		//TODO: -put: in output string, instead of immediately use echo command; to know if has already added <br/>...
		
		if (strpos($sToken,"https://github.com/usbong/")!==false) {
		}
		else {
			//edited by Mike, 20230923
			echo "<span class='usbongTextSectionPart'>";
			echo "$sToken<br/>";
			echo "</span>";
		}
	}
	//added by Mike, 20230518
	else if (strpos($sToken, "http")!==false) {
		processWebsiteReference($sToken);
	}
	//edited by Mike, 20231222
	//else if (strlen($sToken)==strlen("<br/>")) {
	else if (strpos(strtolower($sToken), "<br/>")!==false) {
		//if (strpos(strtolower($sToken), "<br/>")!==false) {
		if (strlen($sToken)==strlen("<br/>")) {
			echo "<br/>";
		}
		
		//echo "HERE!!!".$sToken."END<br/>";
	}
	else {
		//echo ">>>DITO<br/>";

		//if prev token was a note
		if (strpos($sPrevToken, "-->")!==false) {
			echo "<br/>";
		}

		if (is_numeric($sToken[0])) { //1st character a number, notes; not "<"
			//echo "dito: ".$sToken[0]."<br/>";
			if (is_numeric($sPrevToken[0])) {
			  echo "<br/>";
			}
			
			if ((strpos($sPrevToken, "# REFERENCE")!==false) ||
				(strpos($sPrevToken, "# 参考")!==false)) {
			  //echo "<br/>";
			  //ECHO "dito";
			}
			
			//edited by Mike, 20231222
			//echo "$sToken<br/>";
			echo "$sToken";
		}
		else {
			echo "<p class='usbongTranslatedQuote'>";
			//note: technique
			echo "$sToken";
			echo "</p>";
		}
	}

	$sPrevToken = $sToken;
	$sToken = strtok("\n");
	$iRowCount++;

	//added by Mike, 20240717
	//echo ">>>".$iRowCount;
}

//added by Mike, 20250515
}

	//edited by Mike, 20250730; from 20240720
	//add only if has additional reference
	//echo "<br/>";
	if (isset($bHasAdditionalReference)) {
		if ($bHasAdditionalReference) {
		  echo "<br/><br/>";
		}
	}
	//echo "<br/><br/>";

?>

</span>
	</div>
	</div>
	</td>
	</tr>
	</table>
<?php
	}

//-----


					}
				}
	//added by Mike, 20250728
?>
		</td>
<?php
		//added by Mike, 20250729
		if (!isMobileAndUsingAppleWebKit()) {
?>	
		<td class="not-scrollable-td">
		</td>
<?php
		}
		?>	
		</tr>
	<table>
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