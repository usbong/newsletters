<!--
  Copyright 2021~2023 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20230210; from 20230209
  @website address: http://www.usbong.ph
  Input:
  1) Newsletter file with details
  Output:
  1) Newsletter file that is viewable on a Computer Web Browser  
  
  Computer Browser: Website Address (Example):
  1) local: http://localhost/usbong_newsletters/server/2021/viewNewsletter202110.php  
  2) public internet: http://store.usbong.ph/server/2021/viewNewsletter202110.php
  
  Recommended Reference:
  1) https://www.w3schools.com/howto/howto_css_table_center.asp;
  //last accessed: 20210703
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
							font-size: 12pt;
/*
							color: rgb(120,63,4);
*/
							color: rgb(85,43,0);	
							
							font-weight: bold;

							/* This makes the width of the output page that is displayed on a browser equal with that of the printed page. */
							/* Legal Size; Landscape*/							

							width: 670px;/*860px;*//* 802px;*//* 670px */

							/* removed by Mike, 20210105 */
							/* use zoom 67% scale*/
							/* at present, command not support in Mozilla Firefox */				
/*							zoom: 67%; 
	
							transform: scale(0.67);
							transform-origin: 0 0;	
*/							
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
							font-size: 14pt;						
						}
					
						h4
						{
							color: rgb(64,64,64);
							font-size: 12.5pt;						
						}

						h5
						{							
							color: rgb(85,43,0);	
							font-size: 12pt;
						}
						
						b
						{
							color: rgb(0,0,0); /* from black to white */ 							
						}

						img.Image-companyLogo {
							max-width: 60%;
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
												
						table.reminderTable
						{
							border: 1px solid #ab9c7d;
						}
						
						table.imageTable
						{
							width: 100%;
						}						

						td.imageTableColumn
						{
							border: 1px solid #ab9c7d;
						}

						table.noteTaxTable
						{
							width: 86%;
							border: 1px solid #ab9c7d;
							border-collapse: collapse;							 
							font-size: 10pt;
							/* Commands to Center-Align Table */
							margin-left: auto;
							margin-right: auto;
						}
						
						td.noteTaxTableColumnHeader
						{
							border: 1px solid #ab9c7d;
							background-color: #dddddd;
							text-align: center;
						}

						td.noteTaxTableColumn
						{
							border: 1px solid #ab9c7d;
							text-align: left;
						}

						table.noteTable
						{
							border: 1px solid #ab9c7d;
							width: 90%;
							margin: 0px;
							padding: 0px;
						}
						
						span.solvableSpan {
							color: rgb(255,168,0);
							font-weight: bold;
						}

						span.notSolvedSpan {
							color: rgb(255,0,0);
							font-weight: bold;
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
<!--							border: 1px solid #ab9c7d;		
-->
						}						

						table.tablePart3
						{
							width: 100%;
<!--							border: 1px solid #ab9c7d;		
-->
						}	

						a.webServiceLink
						{
							color: rgb(51,145,23);
							font-weight: bold;							
						}
						
						a.menuLink
						{
							color: rgb(64,64,64);
							text-decoration: none;
						}

						a.menuLink:hover
						{
							color: rgb(64,64,64);
							text-decoration: underline;
						}

						table.menuTable
						{
							width: 80%;
							border: 1px solid rgb(146,208,80);
							border-collapse: collapse;							 
							font-size: 10pt;
							/* Commands to Center-Align Table */
							margin-left: auto;
							margin-right: auto;
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
							width: 40%;
							display: inline-block;
						}						

						td.pageNameColumn
						{
							width: 50%;
							display: inline-block;
							text-align: right;
						}												
    /**/
    </style>
    <title>
      USBONG Newsletter
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
    </style>
<!-- //edited by Mike, 20220831; from 20220325
	<base href="http://localhost/usbong_newsletters/" target="_blank">
-->

	<base href="http://store.usbong.ph/" target="_blank">

  </head>
	  <script>
	  </script>
  <body>
    
<?php
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

	//TO-DO: -update: this

?>
	<table class="imageTable">
	  <tr>
		<td class="imageColumn">				
			<img class="Image-companyLogo" src="assets/images/usbongLogo.png">
		</td>	
		<td class="pageNameColumn">
			<div class="formTitle">
				<b>USBONG NEWSLETTER</b>
			</div>		
		</td>
	</table>
	<br/>
<!--	<b>DATE:</b><?php echo " ".$dateToday; ?>
-->
	
	<!-- menu bar -->
	<table class="menuTable">
	  <tr class="menuRow">
		<td class="menuColumn">				
<!--
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
-->
			<a class="menuLink" target="_blank" href="http://www.usbong.ph">		
				Computer
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/Training">		
				Services
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/team">		
				Team
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/team">		
				Partners
			</a>
		</td>	
		<td class="menuColumn">		
			<a class="menuLink" target="_blank" href="https://github.com/usbong">		
				Open Source
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/excel">		
				EXCEL
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" target="_blank" href="https://www.usbong.ph/contact">		
				Contact
			</a>
		</td>
	</table>

	<br>
	<br>	
	<div class="newsletterTitle">
		<b>トイレをきれいにすること</b><br/>
		<b>toire wo kire ni suru koto</b><br/>
				Linisin ang TOILET
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	November & December 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) observed: system efficiency as OUTPUT assisted in identifying <b>ERRORS</b>,</h4>
--> where: system efficiency caused by computer automation<br/> 
--> where: <b>ERRORS</b> had been classified to be acceptable,<br/>
--> due to: <b>PROFITABLE</b> OUTPUT,<br/>
--> adds: <b>ELAPSED TIME of ACTIONS</b> of over 10 years<br/>
--> has after all caused increase in <b>INCOME</b> for clinic,<br/>
--> instead of its decrease; <b>PROFITABLE</b>,<br/>
--> based on an <b>ECONOMIC view</b><br/>
<br/>
<b>Example ERROR#1</b>: Telephone Calls are answered after over 1 Telephone Ring,<br/>
--> where: Telephone Calls are of <b>patient questions</b>,<br/>
--> including among others: orthopedic surgeon schedule, item availability;<br/>
<table class="noteTable">
<tr><td>
<b>ACTION:</b> showed: already <span class="solvableSpan">SOLVABLE</span>
</td></tr>
</table>

<br/>
<b>Example ERROR#2</b>: noticeable <b>UNSOLD</b> and <b>EXPIRED</b> items<br/>
--> where: items are of <b>medicine items</b>;<br/>
<table class="noteTable">
<tr><td>
<b>ACTION:</b> showed: already <span class="solvableSpan">SOLVABLE</span>
</td></tr>
</table>
<br/>
<b>Example ERROR#3</b>: noticeable <b>DELAY</b> to identify items and their physical location,<br/>
--> where: items are of <b>non-medicine items</b>;<br/>
--> adds: items have increasing count and variation;<br/>

<table class="noteTable">
<tr><td>
<b>ACTION:</b> remained: <span class="notSolvedSpan">NOT SOLVED</span><br/>
</td></tr>
</table>

--> due to: clinic opts to dismiss recommendation<br/>
<br/>
<table class="reminderTable">
	<tr>
		<td>
<a class="webServiceLink" target="_blank" href="https://www.youtube.com/watch?v=075AAaehmN8
">Why Germany's health care system is in crisis<br/> 
(and how the government plans to fix it) | DW News</a>;<br/> 
last accessed: 20230131; from 20230124<br/>
		<br/>
		<b>PROBLEM:</b>	Staff shortages, ECONOMICS > HEALTH<br/>
<br/>		
		<b>OUTPUT#1:</b> increase of low-cost workers from abroad,<br/>
		--> where: example low-cost workers : nurses<br/>
		<br/>
		<b>OUTPUT#2:</b> increase of in-patient care, <br/>
		--> based: on patient DIAGNOSIS<br/>
		<br/>		
		<b>OUTPUT#3:</b> increase in overall COST,<br/>
		--> where: less money available for pediatric care<br/>
		<br/>
		<b>ACTION as SOLUTION</b><br/>
		1) increase out-patient care;<br/>
		--> <b>REMINDER:</b> pediatric care seasonal
		</td>
	</tr>
</table>

<br/>
<b>Example ERROR#4</b>: <b>LOST</b> index cards with patient information,<br/>
--> which: may also have <b>missing answers</b> to patient details,<br/>
--> where#1: <b>LOST</b> : in <3 years<br/>
--> where#2: <b>incomplete details</b> : no contact number, occupation, et cetera<br/>

<table class="noteTable">
<tr><td>
<b>ACTION:</b> remained: <span class="notSolvedSpan">NOT SOLVED</span><br/>
</td></tr>
</table>

--> due to: clinic opts to <b>quickly finishing patient payment</b>,<br/>
--> via#1: <b>creating a new index card</b> for <b>LOST</b> cards,<br/> 
--> via#2: <b>ignoring missing answers</b> to patient details<br/>
--> adds: however, select patient details, e.g. <b>Senior Citizen number</b>,<br/> 
--> can be added in <b>index card</b> and <b>computer database</b> @CASHIER UNIT<br/>
<br/>
<b>Example ERROR#5</b>: <b>Official Receipts</b> are given to only those who <b>REQUEST</b>;<br/>
<table class="noteTable">
<tr><td>
<b>ACTION:</b> remained: <span class="notSolvedSpan">NOT SOLVED</span><br/>
</td></tr>
</table>
--> due to: clinic opts to <b>quickly finishing patient payment</b><br/>
--> adds: however, notified clinic of <b>filed POLICE report</b> on the corresponding <b>ACTION</b>,<br/>
--> where: <b>ACTION</b> with <a class="webServiceLink" target="_blank" href="https://www.bir.gov.ph">Bureau of Internal Revenue (BIR)</a><br/> 
--> notes: <b>AVAILABLE REASONS for ERROR#5</b> to include among others:<br/> 
--> <b>COVID-19</b>, <b>PAYMENT DELAYS</b> from <b>HMO</b> transactions @partner clinics,<br/>
--> where: <b>HMO</b> = <b>H</b>ealth <b>M</b>aintenance <b>O</b>rganization<br/>
--> shares: clinic receives payment only via <b>CASH</b> and <b>DIRECT BANK TRANSFER</b><br/>
--> notes: <b>INCOME</b> also exists <b>prior to COVID-19</b><br/>
--> adds: received notification in 2023 JAN of <b>shutdown</b> of <b>UNIT</b> in <b>2023 FEB</b><br/> 
--> @partner Sta. Lucia Health Care Clinic (<b>SLHCC</b>)<br/> 
--> due to <b>DELAYS</b> caused <b>EXPENSES > INCOME @UNIT in SLHCC</b> <br/>
--> adds: notification of noticeable <b>decrease</b> in I.T. Unit's <b>compensation</b>;<br/>
<br/>
<b>Example ERROR#6</b>: <b>CASH THEFT</b> @clinic is <b>IGNORED</b>;<br/>
<table class="noteTable">
<tr><td>
<b>ACTION:</b> remained: <span class="notSolvedSpan">NOT SOLVED</span><br/>
</td></tr>
</table>
--> due to: clinic opts to <b>focus on earning INCOME</b>,<br/>
--> whose: <b>VALUE</b> is noticeably <b>LARGER than stolen CASH</b>,<br/>
--> observed: however, <b>stolen VALUE</b> has <b>increased to be >200PHP per week</b><br/>
--> adds: had previously recommended to <b>increase Unit member salary</b>;<br/>
--> adds: instead had <b>only received approval to share know-how on I.T.</b>;<br/>
--> however, <b>training stopped</b> due to <b>COVID-19</b> lockdowns, quaranties<br/>
--> adds: select <b>Unit members</b> now <b>NEED QUICK MONEY</b>,<br/>
--> whose: <b>VALUE</b> shall <b>NOT be gained</b> via <b>I.T. EDUCATION</b> and <b>HONEST WORK</b><br/>
<br/>
--> <b>CURRENT ACTION</b>: continue: to <b>share food</b>, e.g. fruits, tokwa, and <b>know-how</b><br/>
--> expects: however, <b>THEFT</b> to still <b>CONTINUE</b>;<br/>
--> observed: however, executed <b>CURRENT ACTION</b> <b>decreases ERRORS</b><br/> 
--> <b>to assisting MACHINES/COMPUTERS</b> by Unit Members,<br/>
--> due to: <b>VALUE</b> has become <b>CLEAR</b>,<br/>
--> example: use <b>photocopy machine</b> and <b>template</b> to print multiple <b>INDEX CARDS</b>, <br/>
--> instead of writing by-hand the TEXT<br/>
<br/>
--> adds: <b>I.T. Unit</b> opts to <b>decrease USED TIME</b> for the following:<br/>
--> <b>IDENTIFICATION</b> of <b>excess/missing</b> ITEMS,<br/>
--> <b>CAUSE</b> of <b>excess/missing</b> CASH (MONEY)<br/>
--> due to: recommendations dismissed;<br/> 
--> OUTPUT: <b>GAINED TIME</b><br/>
<br/>
<b>Example ERROR#7</b>: <b>NOISE POLLUTION</b> @clinic continues,<br/>
--> where: observed <b>CCTV</b> accessed and information misused<br/> 
--> by <b>MANLOLOKO/TERRORIST/LIAR GROUP</b>;<br/>
--> Example <b>NOISE POLLUTION</b> to attack Unit Members and Patients:<br/>
--> "squeeze breast", "bobo", "walang paki", "mamamatay na 'yan", "cancer"<br/>
--> keyphrase: <b>FEAR/TERROR</b>, <b>unsolicited ideas</b>;<br/>
<br/>
--> Example <b>NOISE POLLUTION</b> to cause <b>PHYSICAL INJURY</b>:<br/>
--> <b>HEAD PAIN</b> classified to be with keyphrase for <b>EMERGENCY CASE</b><br/>
--> keyphrase: <b>unsolicited physical stimulation/PAIN</b>;<br/>
<table class="noteTable">
<tr><td>
<b>ACTION:</b> remained: <span class="notSolvedSpan">NOT SOLVED</span><br/>
</td></tr>
</table>
--> due to: clinic opts to <b>focus on earning INCOME</b>,<br/>
--> whose: <b>VALUE</b> is supposedly <b>LARGER than damage</b>;<br/>
<br/>
--> observed: however, <b>damage</b> as <b>OUTPUT</b> to <b>Unit Members</b>:<br/>
<br/>

<table class="noteTable">
<tr><td>

<b>damage#1)</b> DEATH of Physical Therapist<br/>
<br/>
<b>damage#2)</b> MAJOR SURGICAL OPERATION of Orthopedic Surgeon<br/> 
--> <b>whose OUTPUT:</b> be NON-PRACTICING<br/>
<br/>
<b>damage#3)</b> ILLNESS of Assisting Secretary and Family<br/> 
--> <b>whose OUTPUT:</b> be in CONTINUOUS NEED of QUICK MONEY<br/>
<br/>
<b>damage#4)</b> DEATH of Secretary

</td></tr>
</table>

<br/>
--> observed: select Unit Members also executing <b>NOISE POLLUTION</b>,<br/>
--> based on: <b>PROMISE of QUICK MONEY</b>, obedience to <b>MANLOLOKO GROUP</b><br/>
--> "ALL ARE MANLOLOKO", "ALL ARE LIARS"<br/>
--> adds: <b>OUTPUT</b> when <b>DIRECTLY questioned</b>: <b>LIES</b>,<br/>
--> "Anong NOISE POLLUTION?", "walang naririnig"<br/>
<br/>
<table width="90%">
<tr>
 <td>
    <br/>
	<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/miniSpeakerRadioApproxSize6x6cm.jpg"><br/>
	Approx size: 6x6cm
 </td>
 <td>
	NOTE: <b>RADIO FREQUENCY</b> set to <b>STATIC</b>;<br/>
	<br/>
	<b>WIRELESS BROADCASTING TOWER</b> misused to <b>TRANSMIT SIGNAL</b> to <b>FREQUENCY</b> set to <b>STATIC</b>
 </td>
</tr>			
</table>
<br/>
<br/>
--> reminder: <b>EAST GERMANY HISTORY</b>,<br/> 
--> where: Unit Members cause <b>ACTIONS to destroy own Unit</b>,<br/>
--> where: <b>ACTIONS</b> : <b>INDIRECT</b>, <b>UNCLEAR</b>,<br/>
--> <b>OUTPUT</b>: continuous <b>UNNECESSARY THINKING</b>, <b>NOT SYSTEM EFFICIENCY</b><br/>
<br/>
--> shared: <b>INFORMATION</b> with clinic and Unit Members,<br/>
--> adds: <b>BARANGAY</b>, <b>POLICE</b>, <b>LAW ENFORCEMENT</b>;<br/>
--> continuous: to be against <b>MANLOLOKO GROUP</b> via <b>NOT</b> "ALL ARE LIARS"<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			<b>LIAR</b> = continuous LYING;<br/>
			DEVIL/DEMONYO = <b>LIAR</b>;<br/>
			CANCER CELL = <b>LIAR</b>;<br/>
			<br/>
			<b>OUTPUT</b> of "ALL ARE LIARS" = <b>DEATH</b><br/>
			<br/>
			<b>CAUSE:</b> YES is NO, and NO is YES;<br/>
			--> OUTPUT: <b>CHAOS</b> (MAGULO);<br/>
			--> reminder: CHILDREN still execute <b>CHAOS/ERRATIC MOVEMENTS</b>	<br/>
			--> Example: continuously <b>KICKING</b> while <b>SITTED</b><br/>
			--> where: ACTION has <b>NO REASON</b><br/>
			<br/>
			observed: <b>MANLOLOKO</b> executes <b>NOISE POLLUTION</b><br/> 
			--> objective: SURVIVAL of FAMILY UNIT<br/>
			--> where: <b>NOISE POLLUTION</b> = <b>CHAOS</b>;<br/>
			--> adds: "SURVIVAL of FAMILY UNIT" = <b>NOT REASON</b><br/>
			--> due to: <b>CHAOS</b> also to <b>OWN FAMILY UNIT</b>!<br/>
			<br/>
			<b>Recommended Reading:</b> <a class="webServiceLink" target="_blank" href="https://www.amazon.com/Montessori-Method-Maria/dp/149924309X">MONTESSORI METHOD</a><br/>
			
		</td>
	</tr>
</table>
<br/>
<br/>
<table class="reminderTable">
<tr>
<td>
<br/>
<b>QUESTION: "It's NOTHING" to signify the OPPOSITE?</b><br/>
--> where: significance is <b>"HAS VALUE"</b>.
<br/>
<br/>

<b>ANSWER: </b><br/>
<br/>
TO-DO: -update: this<br/>
<br/>
</td>
</tr>
</table>


			<h3>
				REMINDER: QUICK MONEY : <b>Vehicle COST</b>
			</h3>
			--> where: <b>Vehicle COST (MOTORCYCLE)</b> @<b>100K PHP (approx)</b> in <b>1 MONTH</b><br/>
			--> adds: <b>STOLEN Vehicle COST</b> CAN be >= <b>500K PHP</b> ("HALF MILYON")<br/>
			--> keyphrase: vehicle parts, know-how, <b>BANAWE (QUEZON CITY (QC))</b>;<br/>
			--> where: <b>BANAWE (QC)</b> : <b>Vehicle Service Shops</b>, <b>POC</b><br/>
			--> <b>POC</b> = <b>PHILIPPINE ORTHOPEDIC CENTER</b><br/>
			<br/>
			--> adds: There also exists <b>BANAWE (RICE TERRACES)</b>;<br/>
			--> location: <b>ISABELA CITY; REGION 2</b><br/>
			--> keyphrase: <b>MANLOLOKO group</b> connected to <b>BANAWE (QC & REGION 2)</b>;<br/>
			--> budol-budol/<b>CARNAPPER</b>/<b>SMUGGLER</b>/cybercriminal/Teroristang Komunista<br/>			
<br/>
<table class="reminderTable">
<tr>
<td>
<h4>
	EXAMPLES OF ITEMS AS QUICK MONEY
</h4>

			<h3>
			<b>Smuggled Agriculture Product:</b> "BIGAS" (RICE)
			</h3>
			
			<h3>
			<b>Carnapped Vehicle:</b> <b>ISUZU</b> Crosswind <b>(AT)</b><br/> 
			</h3>

			--> where: <b>AT</b> = <b>A</b>utomatic <b>T</b>ransmission<br/>
			--> where: <b>MT</b> = <b>M</b>anual <b>T</b>ransmission<br/>

			<h3>
			--> <b>Stolen/copied/modified/destroyed vehicle parts:</b>
			</h3>
<b>			
			--> Part#1) Vehicle Key (SUSI)<br/>
</b>
<br/>
			<b>ISUZU</b> Crosswind <b>(AT)</b>, <b>TOYOTA</b> Innova <b>(AT)</b>, <b>HONDA</b> City <b>(AT)</b>,<br/> 
			<b>MITSUBISHI</b> Montero <b>(AT)</b>, <b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>
			<br/>
<b>			
			--> Part#2) SHIFT-GEAR (KAMBYO)<br/>
</b>			
<br/>
			<b>TOYOTA</b> Innova <b>(AT)</b>, <b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>
			<br/>
<b>
			--> Part#3) AIR-CONDITIONING UNIT<br/>
</b>			
<br/>

			<b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>
			<br/>
<b>
			--> Part#4) Excess RADIO TRANSMITTER/RECEIVER<br/>
</b>			
<br/>
			<b>TOYOTA</b> Innova <b>(AT)</b>, <b>MITSUBISHI</b> Montero <b>(AT)</b>, <b>HONDA</b> City <b>(AT)</b>,<br/> 
			<b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>	
<br/>
keyphrase: <b>FAKE ACCOUNTS</b>, <b>SELLER</b> of <b>STOLEN/SMUGGLED items</b>,<br/> <b>intentionally destroys VEHICLE PARTS</b>, <b>QUICK MONEY<b/>, <b>NO TAX</b><br/> 
<br/>
</td>
</tr>
</table>
<br/>
<br/>

<table class="reminderTable">
<tr>
<td>	
<h4>
	IDENTIFICATION & CLASSIFICATION of MANLOLOKO GROUP MEMBERS
</h4>
identified: <b>MANLOLKO group members</b> to include among others:<br/>
			1) <b>Ramon Syson</b>, younger brother of father, Dr. Pedro Syson<br/>
			2) <b>Ryan Syson</b>, eldest son of Ramon Syson<br/>
			3) <b>Joan Syson</b>, sister of Ryan Syson<br/>			
			4) <b>Tyrone Tang</b>, basketball player;<br/>
			5) <b>Keith Haw</b>, friend and classmate of Tyrone Tang<br/>
			<br/>
			Both <b>Tyrone Tang</b> and <b>Keith Haw</b> are classmates of SYSON, MICHAEL B. @<b>XAVIER SCHOOL</b>, San Juan, Greenhills;<br/> 
			<br/>
			<b>keyphrase:</b> <b>ATTACKERS</b> and <b>PROMULGATORS</b> of <b>"QUICK MONEY"</b><br/>
			--> adds: <b>WIRELESS BROADCASTING TECHNOLOGY</b><br/>
			<br/>

</td>
</tr>
</table>

<br/>
<b>ADDITIONAL REMINDERS</b><br/>
<h5>
<b>MANLOLOKO group</b> <b>LOST</b> > <b>50 Million PHP</b> of <b>smuggled</b> luxury/non-luxury <b>vehicles</b>, <b>agriculture</b> products, et cetera after being <b>caught by Police</b><br/>
<br/>
verified: <b>Bureau of Customs (BOC)</b> NEWS<br/>
1) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/">https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/</a>;<br/> 
last accessed: 20221023; from 20220322<br/>
<br/>
<b>
    | BOC Destroys 21 Smuggled Vehicles<br/>
    | Posted on June 18, 2021<br/>
</b>
<br/>
--<br/>
<br/>
<b>
    The Bureau of Customs (BOC) led the simultaneous destruction of twenty-one (21) smuggled motor vehicles worth P58.55 million on Friday, June 18, 2021, in Manila and Cagayan de Oro.<br/>
</b>
<br/>
--<br/>
<br/>
2) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-reports-efforts-against-smuggling-of-agricultural-products/">https://customs.gov.ph/boc-reports-efforts-against-smuggling-of-agricultural-products/</a>; last accessed: 20221023; from 20220322<br/>
<b><br/>
| MICP Seizes php 9M Worth of Smuggled Agricultural Products<br/>
| Posted on October 15, 2021<br/> 
</b>
<br/>
--<br/>
<br/>
<b>
BOC-IG recorded a total estimated value of 545.06 million worth of seized smuggled agricultural products. In terms of value, the following are the top three commodities: (1) rice amounting to 206.80 million (2) onions amounting to 190.48 million, and (3) garlic amounting to Php 55 million.<br/>
</b>
<br/>
--<br/>
<br/>
keyphrase: > <b>58.55Million PHP</b> used for <b>YABANG</b><br/> 
--> adds: <b>QUICK MONEY</b>, <b>EXCESS MONEY</b>, <b>ILLEGAL DRUGS</b><br/>
--> where: due to <b>LOST MONEY</b>, <b>MANLOLOKO</b> <b>ATTACKS</b> via <b>NOISE POLLUTION</b><br/>
<br/>
reminder: <b>NOISE POLLUTION</b>=OUTPUT of <b>MANLOLOKO WITH ILLEGAL DRUGS</b><br/>
<br/>
<b>Example NOISE POLLUTION:</b> "TANGA", "'TANGINA", "BOBONG INA",<br/>
"BOBONG PULIS", "PEKPEK/PEPE", "PATAYIN", "ESTUPIDO", "BABOY", "HINGA";<br/>
<br/>
--> adds: <b>MANLOLOKO</b> group misuses <b>WIRELESS BROADCASTING TECHNOLOGY</b> to cause the <b>EFFECT</b> equal with <b>ILLEGAL DRUGS</b>;<br/> 
<table width="90%">
<tr>
 <td>
    <br/>
	<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/miniSpeakerRadioApproxSize6x6cm.jpg"><br/>
	Approx size: 6x6cm
 </td>
 <td>
	NOTE: <b>RADIO FREQUENCY</b> set to <b>STATIC</b>;<br/>
	<br/>
	<b>WIRELESS BROADCASTING TOWER</b> misused to <b>TRANSMIT SIGNAL</b> to <b>FREQUENCY</b> set to <b>STATIC</b>
 </td>
</tr>			
</table>
<br/>
--> <b>Example ILLEGAL DRUGS</b>:  marijuana, 大麻 (taima);<br/>
--> <b>Example EFFECT</b> : excitement, dizziness, illusion</b><br/>
--> via <b>ATTACKING CENTRAL NERVE (BRAIN)</b><br/>
--> keyphrase: <b>NOISE POLLUTION</b>, <b>ENT</b>, <b>INSUFFICIENT OXYGEN</b><br/> 
--> where: <b>ENT</b> = <b>Ear, Nose, Throat</b><br/>
<br/>
<br/> 
<table class="reminderTable">
			<tr><td>
<h4>
			EXECUTED ACTIONS as RECOMMENDED ACTIONS:
</h4>

			<b>ACTION#1</b>) continue: to <b>file incident reports</b> with <b>Law Enforcement</b>;<br/>
			Example#1) <b>Philippine National Police (PNP)</b><br/>
			<br/>
			1.1) <b>Anti-cybercrime Group (ACG): Women and Children Cybercrime Protection Unit</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:pnp.acg.wccpu@gmail.com">pnp.acg.wccpu@gmail.com</a><br/>
			<br/>
			1.2) <b>CRIMINAL INVESTIGATION AND DETECTION GROUP (CIDG)</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:cidgnhqcrmc@gmail.com">cidgnhqcrmc@gmail.com</a><br/>
			<br/>
			Example#2) <b>Office of Public Safety and Security (OPSS: Marikina City) Team</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:opss@marikina.gov.ph">opss@marikina.gov.ph</a><br/>
			<br/>
			reminder: <b>EMERGENCY NUMBER</b> in MARIKINA CITY: <b>161</b><br/>
			<br/>	
			</td></tr>
			</table>

<h3>3) shares: Security Defense Force and Health</h3>


<h3>3.1) shares: Tanong at Sagot</h3>
<table class="reminderTable">
<tr>
<td>
<br/>
<b>QUESTION: STOCK MARKET as GAMBLING system; QUICK MONEY?</b>
<br/>
<br/>

<b>ANSWER: 
</b><br/>
<br/>
<b>Understanding of STOCK MARKET</b> causes <b>system classification</b> to be <b>NOT GAMBLING</b>, <b>NOT QUICK MONEY</b>;<br/>
<br/>
<b>Example:</b> invest: in <b>STOCK of CORPORATION</b> whose <b>product/service</b> is <b>VITAL</b>;<br/>
--> <b>keyphrase:</b> MOBILITY, e.g. via ROADS, inexpensive FUEL;<br/>
--> put: <b>MONEY</b> for <b>over 10 years</b> so <b>CORPORATION continues</b> with product/service;<br/>
--> adds: <b>NOT</b> as <b>HIGH-FREQUENCY TRADERS</b>,<br/> 
--> who: buy and sell multiple stocks in a MONTH;<br/>
--> adds: <b>SYSTEM earns</b> via each buy and sell, <b>NOT</b> the <b>HIGH-FREQUENCY TRADER</b>;<br/>
--> adds: <b>CAN withdraw MONEY</b> from <b>CORPORATION</b> after <b>over 10 years</b>;<br/>
--> <b>Example:</b> to receive stored <b>MONEY</b> to pay for self's <b>MEDICAL TREATMENT</b>;<br/>
--> observed: however, due to select <b>CRISES</b>, e.g. <b>CORONA VIRUS</b>, select <b>STOCK VALUE</b> <b>decreased</b> to cause noticeable <b>low MONEY</b> for <b>investor</b>;<br/>
--> <b>OUTPUT:</b> select <b>investors</b> began to <b>NEED QUICK MONEY</b>;<br/>
--> <b>Recommended Action:</b> invest in <b>multiple investments</b>, e.g. <b>ADMINISTRATION (PAMAHALAAN)</b>, <b>NOT ONLY</b> via <b>Philippine Stock Exchange index (PSEi)</b>
<br/>
<br/>
</td>
</tr>
</table>

<br/>

<h3>4) shares: Lessons-learned from NEWSPAPERS</h3>
<h4>4.1) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">ASAHI.COM (NEWSPAPER)</a></h4>
<h5>
4.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASR1F6JR8R1FPTIL015.html">「止まりなさい」盗難車追跡中　警官2人、計4発発砲し運転の男死亡</a>; last accessed: 20230209; from 20230114
<br/><br/>
<blockquote class="usbongBlockquote">
<p>
「止まりなさい」盗難車追跡中　警官2人、計4発発砲し運転の男死亡
</p>
</blockquote>
<br/>
"HINTO!" Sa gitna ng paghahabol sa nakaw na sasakyan; Patay ang nagpapatakbong lalake, sa 4 na putok ng baril mula sa 2 Pulis;
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
     2023年1月13日 20時30分
</p>
</blockquote>
<br/>
2023-01-13T20:30
<br/>
<h3>keyphrase</h3>

<blockquote class="usbongBlockquote">
<p>
乗用車に乗っていたのは運転の男1人。パトカーは追跡中、サイレンを鳴らし、赤色灯をつけていた。追いついた直後、車がバックして後続のパトカーにぶつかってきたという。
</p>
</blockquote>
<br/>

Isang lalake ang nagpapatakbo ng sasakyan. Habang hinahabol, pinatunog ng PATROL CAR ang SIRENA, at binuksan ang pulang ilaw. Agad nang mahabol, pinatakbo ng lalake patalikod ang sasakyan, at binangga raw ang kasunod na PATROL CAR.
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
地域課の男性巡査長（26）がパトカーから降り、車の助手席側の窓ガラスを警棒でたたきながら、止まるよう指示。だが男は従わず、信号待ちをする前方のトラックとの間で前進とバックを繰り返したという。
</p>
</blockquote>
<br/>
Bumaba ang Lalakeng Pulis (26) na namumuno sa pag-iikot sa bahaging iyon, at kinatok gamit ang Pulis batuta ang salamin sa katabing upuan ng sasakyan, bilang pahiwatig na huminto. Gayunman, hindi sumunod ang lalake, at pinasulong sa pagitan ng TRAFFIC LIGHT sa harapan ng riles ng tren ang sasakyan, at muli raw ito ipinatakbo palikod.
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
パトカーを運転していた同課の男性警部補（47）も降りて車の運転席側に回り、止まらないと発砲すると警告した上で2人が撃った、と府警は説明している。
</p>
</blockquote>
<br/>
Bumaba rin sa sasakyan ang Lalakeng Pulis (47) ng nabanggit na Unit, at ang siyang nagpapatakbo ng PATROL CAR. Umikot siya tungo sa banda ng upuan ng nagpapatakbo ng sasakyan. Pagkatapos balalaan na magpapaputok kapag hindi huminto, nagpaputok ang dalawa, ayon sa paliwanag ng Kapulisan ng Rehiyon.
<br/>
<h3>Dagdag: PLATE NUMBER of stolen vehicle</h3>
<blockquote class="usbongBlockquote">
<p>
パトカーで巡回中だった八尾署員が盗難届が出されているナンバーをつけた乗用車を発見し追跡。
</p>
</blockquote>
<br/>	
Natagpuan ng Unit na nag-iikot sa PATROL CAR, ang sasakyan na may PLATE NUMBER ng nakaw na sasakyan, at hinabol ito.

<h3>Sanggunian:</h3>	
    GOOGLE SEARCH ENGINE; TRANSLATE<br/>
</h5>


<h4>4.2) shares: Lessons-learned from THE PHILIPPINE STAR (NEWSPAPER)</h4>
<h5>
4.2.1) <b>“Why are smugglers left untouched?” (20230113; FRIDAY)</b><br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
	AUTHOR: BONDOC, JARIUS
</p>
</blockquote>
<br/>

<b>keyphrase:</b> 

Billionaire Cartelist-smugglers

<h4>MODUS; Technique#1</h4>

Smugglers use Customs bosses' favorite consignees<br/>
--> where: 30PHP per kilo plus bulk freight cost, sold to retailers @450~650PHP<br/>
--> adds: BRIBERY via in 5 containers, 3 for smugglers; 2 for Customs accomplices;

<h4>Smuggling PORT Locations</h4>

Biggest smuggler @PORT of SUBIC<br/>
--> front consignees receive duty- and inspection-free privilege

<h4>Three (3) new Contrabandist Lords:</h4>

1) PORT of MANILA; Manila International Container Port (MICP)<br/>
--> "Mike Ma." (30's); naturalized Filipino from China

2) PORT of SUBIC<br/>
--> "Gene Ang" (40's), Chinoy

3) PORT of BATANGAS<br/>
--> "Beverly Peres" (50's);

<h4>MODUS; Technique#2</h4>

--> uses: with Custom crooks, recycled lapsed permits to bring in more shiploads year-round

<h4>Examples</h4>

1) Sotto, Tito (former Senate President)<br/>
--> named: 4 of 22 culprits in intelligence reports<br/>
1.1) Leah "Luz" Cruz, operating in Cagayan de Oro and MICP;<br/>
1.2) Manuel Tan, CdO, Subic, Batangas;<br/>
1.3) Jun Diamante, CdO;<br/>
1.4) Andrew Chang, MICP, Port of Manila, Batangas

2) Layug, James (Agricutlure Assistant Secretary)<br/>
--> requested: CUSTOMS to issue:<br/>
--> ALERT ORDERS and JOINT 100% inspection;<br/>
--> all cargos of 6 consignees:<br/>
2.1) Victory JM Enterprises;<br/>
2.2) Taculog Int'l Consumers Goods Trading;<br/>
2.3) Asterzenmed Aggregates;<br/>
2.4) Veneta Consumer Goods Trading;<br/>
2.5) Lalavy Aggregates Trading;<br/>
2.6) SB Express Logistics Business Solution;

3) Additional Entities<br/>
3.1) Frankie Trading Enterprises @CdO<br/>
3.2) Primex Export-Import Producer @CdO

<h4>Dagdag</h4>

1) observed: ENGLISH language and citizenship, e.g. U.S.A.,<br/> 
--> used as parts of technique to cause Filipinos to execute ACTIONS,<br/> 
--> classified in this case, to be obedience to SMUGGLERS/MANLOLOKO group;<br/>
--> where: U.S.A. : supposedly comes as security defense of Philippines<br/> 
--> to cause Filipinos to NOT execute ACTIONS against U.S.A. nationals;<br/>
--> remembers: received training @Global Unit in Japan;<br/>
--> where: lone Asian, e.g. Filipino, Japanese, can easily be attacked<br/> 
--> by lone foreigner, e.g. Caucasian, using such technique;<br/>
--> adds: however, as GROUP, can WIN;

2) remembers: with SMUGGLER GROUP, a key local member, e.g. Filipino, Japanese,<br/> 
--> has to noticeably be FLUENT in ENGLISH LANGUAGE;<br/>
--> notes: as reference, select parts observed from younger brother's<br/> 
--> GANGSTER/YAKUZA films that appear to be also watched by SMUGGLER GROUP;





<h5>
4.2.1) <b>“Alleged con artist caught in Taguig” (20230205; SUNDAY)</b><br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
	AUTHOR: TUPAS, EMMANUEL
</p>
</blockquote>
<br/>

<b>keyphrase:</b> 

CON ARTIST duped millions of pesos<br/>
--> where: CON ARTIST : businesswoman and owner of fashion styling company<br/>
--> arrested suspect name: CABRERA, MIKAELA VERONICA (26)<br/>
--> condominium unit, corner McKinley Parkway,<br/>
--> 26th street in Bonifacio Global City,<br/>
--> @18:38

<h4>Warrant of Arrest</h4>

--> due to: violation of Batas Pambansa 22:<br/>
--> "Bouncing Check Law"<br/>
--> issued: 2022-10-27 by Makati Metropolitan Trial Court Branch 127;

<h4>Technique</h4>

--> using dating app, prey on men;<br/>
--> shall request for money to save her company from going bankrupt,<br/>
--> promised interest rate of 20~30%

<h4>USBONG NOTES</h4>


1) expects: INCORRECT/ILLEGAL ACTIONS by people,<br/>
--> who: put "businessman/businesswoman" as occupation,<br/> 
--> and do NOT clarify the business' industry and technique to generate INCOME;<br/>
--> adds: as observation, such people in Philippines to be of Chinese ancestry;<br/>
<br/>
2) notes: TIKTOK misused as OnlyFans web service<br/> 
--> to earn INCOME via selling pornography;<br/>
--> reminder#1: OnlyFans FOUNDER/CEO arrested in Singpore;<br/>
--> notes: technique of viewing body parts of select people,<br/>
--> who have physical similarities as those preferred of BUYER;<br/>
--> "kamukha"; <br/>
--> reminder#2: NEED of QUICK MONEY causes male/female to be targeted<br/> 
--> by MANLOLOKO/SMUGGLER/LIAR group to execute ILLEGAL ACTIONS;<br/>
--> adds: increase of CRIMINALS created by MANLOLOKO group,<br/>
--> so the ATTACKERS of their group have LIST of CRIMINALS<br/> 
--> to be arrested first before them;<br/>
--> recommends: QUICKLY DESTROYING the ATTACKERS;<br/>
<br/>
3) notes: DONATIONS via web services, e.g. PATREON, exists;<br/>
--> adds: DONATIONS have NO TAX;<br/>
--> adds: as alternative, received MONEY NOT anymore REPORTED; <br/>
--> recommends: verifying LIFESTYLE; <br/>
--> adds: USBONG NOTE#1<br/>
<br/>
4) notes: INHERITANCE has TAX in U.S.A., PHILIPPINES, et cetera<br/>
--> observed: however, select people execute action <br/>
--> as that of NORWAY, where: INHERITANCE has low/zero TAX;<br/>
--> adds: people with MONEY, but have NO know-how<br/> 
--> of VALUE of WORK cause problems, e.g. HEALTH;<br/>
--> example: "walang naririnig" to cause MENTAL ILLNESS;<br/>
--> adds: USBONG NOTE#3

<br/>
<br/>	
<br/>
<br/>	
</h5>
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
