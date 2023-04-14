<!--
  Copyright 2021~2023 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20230414; from 20230310
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
    
  TO-DO: -reverify: technique to quickly share INFORMATION/know-how;
 lessons-learned; CORE know-how that causes SYSTEM EFFICIENCY;
 adds: noticeable CHANGE shall be caused by MAJORITY, having such CORE know-how

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
						
						blockquote.usbongNewspaperBlock {
							background: #ffffff;
							color: rgb(85,43,0); /*rgb(80,80,80);*/

							margin:0;		
							border: 5px solid #444444;
							padding: 2px;					
							padding-left: 3%;
						}
												
						table.reminderTable
						{
							border: 1px solid #ab9c7d;
							
							font-weight: bold;											font-size: 11pt;
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
	<base href="http://localhost/usbong_newsletters/" target="_blank">

<!-- //edited by Mike, 20220831; from 20220325
	<base href="http://store.usbong.ph/" target="_blank">
-->

  </head>
	  <script>
	  </script>
  <body>
    
<?php
	date_default_timezone_set('Asia/Hong_Kong');
	
	//edited by Mike, 20200726
	$dateToday = Date('Y-m-d');

	// connect to the database
	//edited by Mike, 20210813
//	include('usbong-kms-connect.php');

	//Reference: https://stackoverflow.com/questions/16048818/include-php-files-when-they-are-in-different-folders;
	//answer by: AbsoluteƵERØ, 20130416T2355
	//edited: 20171021T0640	
		
	//echo $_SERVER['DOCUMENT_ROOT']; //example output: C:/xampp/htdocs


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
		<b>波 (なみ)　： Welle ("vell")</b><br/>
		<b>ALON　：　WAVE</b><br/>
		RADIO				
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	January & February 2023
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) shared: know-how to combine multiple <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL Database (DB)</a> Tables using spreadsheet tool, <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a>,</h4>
--> where: <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a> file can also be opened using <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en/microsoft-365/excel">MS EXCEL</a>


<h5><b>Example <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL</a> COMMAND (@<span class='solvableSpan'>COLUMN K</span>):</b></h5>

<table class="noteTable">
<tr><td>
<b>
"IF("<span class='solvableSpan'>J1</span>"=0,"","update `item` set `item_total_sold`="<span class='solvableSpan'>J1</span>" where `item_id`="<span class='solvableSpan'>G1</span>";")"
</b>
</td></tr>
</table>
<br/>
<img class="newsletterImage" width="90%" height="90%" src="assets/images/newsletter/202303/exampleLibreOfficeCalcMySQLCommand.jpg">
<br/>
<br/>
<br/>
TO-DO: -update: this<br/>
<br/>
<br/>
<br/>
<img class="newsletterImage" width="90%" height="90%" src="assets/images/newsletter/202303/exampleLibreOfficeCalcMacro.jpg">
<br/>
<br/>
<br/>

<table class="noteTable">
<tr><td>
<b>
"INSERT INTO usbong_kms.x_ray_service (x_ray_service_id, x_ray_body_location_id, x_ray_type_id, x_ray_price) VALUES (NULL, (SELECT x_ray_body_location_id FROM x_ray_body_location WHERE x_ray_body_location_name ='" & TRIM(<span class="solvableSpan">A5</span>) & "')," & "(select x_ray_type_id from x_ray_type where x_ray_type_name ='" & TRIM(<span class="solvableSpan">C5</span>) & "'), " & TRIM(<span class="solvableSpan">E5</span>) & ");"
</b>
</td></tr>
</table>

<br/>
--> shares: this <b>COMMAND</b> can be set as a reusable template,<br/>
--> to be auto-generated using <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a>,<br/>
--> where: the <b>COLUMN</b> values are auto-updated<br/>
--> notes: <b>NULL</b> value due to already auto-generated by <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL DB</a><br/>

<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			The <b>three</b> (3) <b>COLUMNS</b> each are from <b>three TABLES</b><br/> 
			<b>JOIN</b>ED together in the <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL DB</a> <b>COMMAND</b>.<br/>
			<br/>
			<b>x_ray_body_location</b> :
			<span class="solvableSpan">A5</span> : Shoulder...<br/>			
			<b>x_ray_type</b> : 
			<span class="solvableSpan">C5</span> : AP only...<br/>
			<b>x_ray_service</b> : 
			<span class="solvableSpan">E5</span> : 400...<br/>
			<br/>
			where: AP = <b>Anterior-Posterior</b><br/>
			where: <b>TABLE</b> : <b>spreadsheet</b> with own <b>COLUMNS</b> and <b>ROWS</b>
			<br/>
			<br/>
			EXAMPLE?<br/>
			<br/>
			<b>Technique used to quickly COMBINE?</b><br/> 
			<br/>
			We create <b>one (1) NEW spreadsheet</b> with our <b>intended OUTPUT</b><br/>
			--> includes: a <b>KEY COLUMN</b> from each <b>spreadsheet</b> of the <b>INPUT TABLES</b><br/>
			--> adds: in this case, <b>NOT</b> its <b>IDENTIFICATION NUMBER</b><br/>
			--> classified: to be the <b>PRIMARY KEY</b><br/>
			<br/>
			<b>Example</b>: <b>x_ray_body_location</b> :
			<span class="solvableSpan">A5</span> : Shoulder<br/>
			<br/>
			--> due to: <b>ACTION</b> causes <b>QUICK IDENTIFICATION</b> for <b>HUMAN PERSON</b><br/>
			--> adds: however, <b>VALUE</b> of <b>KEY COLUMN</b><br/> 
			--> has: to be <b>EXACT (spelling)</b> to be <b>identified</b> in the <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL DB</a>
		</td>
	</tr>
</table>
<br/>
<br/>




<br/>
<br/>
<br/>
<br/>
<br/>

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
<h5>
<b>damage#1)</b> DEATH of Physical Therapist<br/>
--> *BEFORE COVID-19<br/>
<br/>
<b>damage#2)</b> MAJOR SURGICAL OPERATION of Orthopedic Surgeon<br/> 
--> <b>whose OUTPUT:</b> be NON-PRACTICING<br/>
--> *BEFORE COVID-19<br/>
<br/>
<b>damage#3)</b> ILLNESS of Assisting Secretary and Family<br/> 
--> <b>whose OUTPUT:</b> be in CONTINUOUS NEED of QUICK MONEY<br/>
--> *BEFORE and DURING COVID-19<br/>
<br/>
<b>damage#4)</b> DEATH of Secretary<br/>
--> *BEFORE COVID-19
</h5>
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
<table class="reminderTable">
<tr>
<td>
<br/>
<b>QUESTION: "It's NOTHING!" signifying the OPPOSITE</b>, <b>LIAR CLASSIFICATION</b>?<br/>
--> due to: <b>TRUE</b> significance is <b>"HAS VALUE"</b>.<br/>
<br/>

<b>ANSWER:</b> <b>CLARIFICATION</b> causes classification to be <b>NOT OPPOSITE</b>;<br/>
--> where:  <b>"IT'S NOTHING!"</b> signifies:<br/>
<br/>
<b>
"IT (GIFT) MAY be NOTHING for YOU (MY LOVE), but it has VALUE to ME..."</b>;<br/>
<br/>
--> notes: <b>ANSWER</b> to be classified to be as with QUESTIONS,<br/>
--> where: in select countries, e.g. JAPAN, saying <b>"NO"</b> as <b>ANSWER</b><br/> 
--> to <b>person offering assistance</b> in fact signifies its opposite: <b>"YES"</b>;<br/>
--> adds: in this case, <b>adding TIME for the person to CONTINUE THE SENTENCE</b><br/>
--> shall assist in <b>CLARIFYING significance</b>;<br/>
--> EXAMPLE: <b>"NO, not this set, but you CAN DO the next set."</b><br/>
<br/>
<b>Reference:</b> <a class="webServiceLink" target="_blank" href="https://www.tumblr.com/crabapplebread/708165923974070272/so-cute-vol-24-ch-237">crabapplebread.tumblr.com</a>; last accessed: 20230211; from 20230210;<br/>
--> <b>keyphrase:</b> example part from <b>Detective CONAN MANGA/COMIC</b>
</td>
</tr>
</table>


<h3>3) shares: Security Defense Force and Health</h3>

3.1) notes: MANLOLOKO/<b>SMUGGLER</b>/CYBERCRIMINAL/LIAR group<br/>
--> continues: to <b>ATTACK</b> via <b>NOISE POLLUTION</b>;<br/>
--> remembers: <b>ANNOUNCEMENT</b> from MANLOLOKO GROUP members,<br/>
--> SYSON, RAMON, with SYSON, RYAN, et al. of <b>TARGET</b> and <b>OBJECTIVE</b>,<br/>
--> where: <b>CAUSE</b> due to <b>POLICE CAUGHT SMUGGLED ITEMS</b>;<br/>
--> recommends: <b>SYSON, RAMON</b>, with <b>SYSON, RYAN et al.</b><br/> 
--> to send <b>WRITTEN ANNOUNCEMENT</b><br/>
--> to <b>POLICE</b> to speed-up system via <b>CLARITY</b>;<br/>
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


<h3>4) shares: Lessons-learned from NEWSPAPERS</h3>

<h4>4.1) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="#">The Daily Tribune</a></h4>
<h5>
4.1.1) FROM: <a class="webServiceLink" target="_blank" href="#">"Hackers down hospital websites" (20230204; SATURDAY)</a>
<br/>
<br/>
<blockquote class="usbongNewspaperBlock">
<p>
<b>Author:</b><br/>
WITH AGENCE FRANCE-PRESSE (AFP)
</p>
<p>
<b>Keyphrase:</b>
<br/>
<b>WEBSITES of hospitals in Europe</b>;<br/>
--> CRASHED via CYBERATTACK;<br/>
--> example: UMCG hospital in Groningen City, Netherlands;<br/>
<br/>
<b>Dutch National Cyber Security Center</b><br/>
--> noted: hackers ANNOUNCED that DDoS attacks were targeted at hospitals<br/>
--> where: hospital classification : helping UKRAINE in its war against RUSSIA<br/>
--> where: DDoS = Distrubuted Denial of Service
<br/>
<br/>
<b>CLEAR</b> via <b>WRITTEN ANNOUNCMENT</b> of <b>TARGET</b> and <b>OBJECTIVE</b><br/>
</p>
</blockquote>

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
			1.3) <b>Eastern District Anti-Cybercrime Team (EDACT)</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:maniladact@gmail.com">maniladact@gmail.com</a><br/>			
			<br/>
			Example#2) <b>Marikina City</b><br/>
			<br/>
			2.1) <b>Office of Public Safety and Security (OPSS: Marikina City) Team</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:opss@marikina.gov.ph">opss@marikina.gov.ph</a><br/>
			<br/>
			2.2) <b>Barangay Sto. Niño, Marikina City</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:brgystonino@gmail.com">brgystonino@gmail.com</a><br/>
			<br/>			
			reminder: <b>EMERGENCY NUMBER</b> in MARIKINA CITY: <b>161</b><br/>
			<br/>	
			</td></tr>
			</table>

<h4>4.2) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">ASAHI.COM (NEWSPAPER)</a></h4>
<h5>
4.2.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASR1F6JR8R1FPTIL015.html">「止まりなさい」盗難車追跡中　警官2人、計4発発砲し運転の男死亡</a>; last accessed: 20230209; from 20230114
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


<h4>4.3) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="#">BULGAR (TABLOID)</a></h4>
<h5>
4.3.1) FROM: <a class="webServiceLink" target="_blank" href="#">"KARNAPER NA WANTED SA ROBBERY, TIMBOG" (20221202; BIYERNES)</a>
<br/>
<br/>
<blockquote class="usbongNewspaperBlock">
<p>
<b>Author:</b><br/>
SANTOS, MAENG
</p>
<p>
<b>Keyphrase:</b>
<br/>
<b>Miyembro ng "Limos Carnapping Group"</b><br/>
--> Catalan, Romeo (36), Brgy. Maybunga, Pasig City<br/>
--> nasa TOP 10 most wanted sa Pasig City;<br/>
--> robbery;<br/>
--> Caloocan City<br/>
<br/>
<b>District Special Operation Unit</b><br/>
--> nakatanggap: ng balitang:<br/>
<br/>
<b>
"naispatan ang presensiya ng akusado sa Bagong Silang, Caloocan City"
</b>
<br/>
<br/>
--> joint manhunt operation,<br/>
--> kabilang: ang NDIT RIU-NCR, RID-NCRPO,<br/>
--> DID-NPD, HPG-NPD;<br/>
<br/>
<b>Regional Trial Court (RTC)</b>s<br/>
--> Branch 268, Pasig City<br/>
--> warrant of arrest due to ROBBERY
</p>
</blockquote>


<h4>4.4) shares: Lessons-learned from THE PHILIPPINE STAR (NEWSPAPER)</h4>

<h5>
4.4.1) FROM: <a class="webServiceLink" target="_blank" href="#">“Why are smugglers left untouched?” (20230113; FRIDAY)</a>
<br/>
<br/>
<blockquote class="usbongNewspaperBlock">
<p>
<b>Author:</b><br/>
BONDOC, JARIUS
</p>
<p>
<b>Keyphrase:</b>
<br/>
Billionaire Cartelist-smugglers

<h4>MODUS; Technique#1</h4>

<b>Smugglers</b> use Customs bosses' favorite consignees<br/>
--> where: <b>30PHP per kilo</b> + <b>bulk freight cost</b>, sold to retailers @<b>450~650PHP</b><br/>
--> adds: <b>BRIBERY</b> via in <b>5 containers</b>,<br/> 
--> <b>3 for smugglers</b>; <b>2 for Customs accomplices</b>;

<h4>Smuggling PORT Locations</h4>

<b>Biggest smuggler</b> @PORT of <b>SUBIC</b><br/>
--> front consignees receive duty- and inspection-free privilege

<h4><b>Three (3)</b> new Contrabandist Lords:</h4>

<b>1) PORT of MANILA; Manila International Container Port (MICP)</b><br/>
--> "Mike Ma." (30's); naturalized Filipino from China<br/>
<br/>
<b>2) PORT of SUBIC</b><br/>
--> "Gene Ang" (40's), Chinoy<br/>
<br/>
<b>3) PORT of BATANGAS</b><br/>
--> "Beverly Peres" (50's);

<h4>MODUS; Technique#2</h4>

--> uses: with Custom crooks, <b>RECYCLED LAPSED PERMITS</b><br/>
--> to bring in more <b>SHIPLOADS YEAR-ROUND</b>

<h4>Examples</h4>

<b>1) FROM: Sotto, Tito (former Senate President)</b><br/>
--> named: <b>4</b> of 22 <b>culprits</b> in <b>INTELLIGENCE REPORTS</b><br/>
<br/>
<b>1.1)</b> Leah "Luz" Cruz, operating in <b>Cagayan de Oro</b> and <b>MICP</b>;<br/>
<b>1.2)</b> Manuel Tan, <b>CdO</b>, <b>Subic</b>, <b>Batangas</b>;<br/>
<b>1.3)</b> Jun Diamante, <b>CdO</b>;<br/>
<b>1.4)</b> Andrew Chang, <b>MICP</b>, <b>Port of Manila</b>, <b>Batangas</b><br/>
<br/>

<b>2) FROM: Layug, James (Agricutlure Assistant Secretary)</b><br/>
--> requested: CUSTOMS to issue:<br/>
--> ALERT ORDERS and JOINT 100% inspection;<br/>
--> all cargos of <b>6 consignees</b>:<br/>
<br/>
<b>2.1)</b> Victory JM Enterprises;<br/>
<b>2.2)</b> Taculog Int'l Consumers Goods Trading;<br/>
<b>2.3)</b> Asterzenmed Aggregates;<br/>
<b>2.4)</b> Veneta Consumer Goods Trading;<br/>
<b>2.5)</b> Lalavy Aggregates Trading;<br/>
<b>2.6)</b> SB Express Logistics Business Solution;<br/>
<br/>
<b>3) FROM: Additional Entities</b><br/>
<b>3.1)</b> Frankie Trading Enterprises @<b>CdO</b><br/>
<b>3.2)</b> Primex Export-Import Producer @<b>CdO</b>

<h4>USBONG: Dagdag</h4>

1) observed: <b>ENGLISH language</b> and <b>citizenship</b>, e.g. <b>U.S.A.</b>,<br/> 
--> used as parts of technique <b>to cause Filipinos to execute ACTIONS</b>,<br/> 
--> classified in this case, to be <b>obedience to SMUGGLERS/MANLOLOKO group</b>;<br/>
--> where: <b>U.S.A.</b> : <b>supposedly comes as security defense of Philippines</b><br/> 
--> <b>to cause Filipinos to NOT execute ACTIONS against U.S.A. nationals</b>;<br/>
<br/>
--> remembers: received <b>training</b> @<b>Global Unit</b> in <b>Japan</b>;<br/>
--> where: <b>lone Asian</b>, e.g. Filipino, Japanese, <b>can easily be attacked</b><br/> 
--> by <b>lone foreigner</b>, e.g. Caucasian, using such technique;<br/>
--> adds: however, <b>as GROUP, can WIN</b>;<br/>
<br/>
2) remembers: with <b>SMUGGLER GROUP</b>, a <b>key local member</b>,<br/> 
--> e.g. Filipino, Japanese,<br/> 
--> has to noticeably be <b>FLUENT in ENGLISH LANGUAGE</b>;<br/>
--> notes: as <b>reference</b>, select parts observed from younger brother's<br/> 
--> <b>GANGSTER/YAKUZA films</b> that appear to be<br/> 
--> also <b>watched by SMUGGLER GROUP</b>;
</p>
</blockquote>


<h5>
4.4.2) FROM: <a class="webServiceLink" target="_blank" href="#">“Alleged con artist caught in Taguig” (20230205; SUNDAY)</a>
<br/>
<br/>
<blockquote class="usbongNewspaperBlock">
<p>
<b>Author:</b><br/>
TUPAS, EMMANUEL
</p>
<p>
<b>Keyphrase:</b>
<br/>

CON ARTIST duped millions of pesos<br/>
--> where: CON ARTIST : <b>businesswoman</b> and owner of fashion styling company<br/>
--> <b>ARRESTED</b> suspect name: CABRERA, MIKAELA VERONICA (26)<br/>
--> condominium unit, corner McKinley Parkway,<br/>
--> 26th street in Bonifacio Global City,<br/>
--> Year 2023; @18:38

<h4>Warrant of Arrest</h4>

--> due to: <b>VIOLATION</b> of <b>Batas Pambansa 22</b>:<br/>
--> <b>"Bouncing Check Law"</b><br/>
--> issued: <b>2022-10-27</b> by Makati Metropolitan Trial Court Branch 127;

<h4>Technique</h4>

--> using <b>DATING APP</b>, prey on men;<br/>
--> shall <b>REQUEST for MONEY</b> to save her company from going bankrupt,<br/>
--> <b>PROMISED interest rate</b> of <b>20~30%</b>

<h4>USBONG NOTES</h4>
1) expects: <b>INCORRECT/ILLEGAL ACTIONS</b> by people,<br/>
--> who: put "<b>businessman/businesswoman</b>" as occupation,<br/> 
--> AND <b>do NOT clarify the business' industry</b> and <b>technique to generate INCOME</b>;<br/>
--> adds: as observation, such people <b>in Philippines</b> to be of <b>Chinese ancestry</b>;<br/>
<br/>
2) notes: <b>TIKTOK misused</b> as with <b>OnlyFans</b> web service<br/> 
--> to earn <b>INCOME</b> via <b>selling PORNOGRAPHY</b>;<br/>
--> reminder#1: <b>PORNOGRAPHY</b> classified with <b>VIOLENCE</b>;<br/>
--> reminder#2: <b>OnlyFans FOUNDER/CEO</b> <b>ARRESTED</b> in <b>SINGAPORE</b>;<br/>
--> due to: <b>PORNOGRAPHY INCORRECT</b>, based on people with know-how<br/>
--> notes: technique of viewing <b>body parts</b> of select people,<br/>
--> who have <b>physical similarities</b> as those <b>preferred of BUYER</b>;<br/>
--> <b>"kamukha"</b>; <br/>
--> reminder#3: <b>NEED of QUICK MONEY</b> causes <b>male/female</b> to be <b>targeted</b><br/> 
--> by <b>MANLOLOKO/SMUGGLER/LIAR group</b> to execute <b>ILLEGAL ACTIONS</b>;<br/>
--> adds: <b>increase of CRIMINALS</b> created by MANLOLOKO group,<br/>
--> so the <b>ATTACKERS</b> of their group have <b>LIST of CRIMINALS</b><br/> 
--> to be <b>ARRESTED FIRST</b> before them;<br/>
--> recommends: <b>QUICKLY DESTROYING the ATTACKERS</b>;<br/>
<br/>
3) notes: <b>DONATIONS</b> via web services, e.g. <b>PATREON</b>, exists;<br/>
--> adds: <b>DONATIONS</b> have <b>NO TAX</b>;<br/>
--> adds: as alternative, <b>received MONEY NOT anymore REPORTED</b>; <br/>
--> recommends: verifying <b>LIFESTYLE</b>; <br/>
--> adds: <b>USBONG NOTE#1</b><br/>
<br/>
4) notes: <b>INHERITANCE</b> has <b>TAX</b> in <b>U.S.A.</b>, <b>PHILIPPINES</b>, et cetera<br/>
--> observed: however, select people execute action <br/>
--> as that of <b>NORWAY</b>, where: <b>INHERITANCE</b> has <b>low/zero TAX</b>;<br/>
--> adds: <b>people with MONEY</b>, but have <b>NO know-how</b><br/> 
--> of <b>VALUE of WORK</b> cause <b>problems</b>, e.g. HEALTH;<br/>
--> example: <b>"walang naririnig"</b> to cause <b>MENTAL ILLNESS</b>;<br/>
--> adds: <b>USBONG NOTE#3</b>
</p>
</blockquote>

<h3>5) shares: Lessons-learned from COMIC BOOKS</h3>

<h4>5.1) shares: Lessons-learned from <aminiSpeakerRadioApproxSize6x6cm.jpg class="webServiceLink" target="_blank" href="#">The DAREDEVIL: THE MAN WITHOUT FEAR</a></h4>


<blockquote class="usbongNewspaperBlock">
<p>
<b>Author:</b><br/>
Waid, M., et al.
</p>
<p>
<b>Keyphrase:</b>
<br/>
<h4>DAREDEVIL (MURDOCK, MATTHEW)</h4>

--> obtains: <b>THE OMEGA DRIVE</b>,<br/>
--> i.e. <b>digital storage</b> with <b>secrets</b> of <b>TERRORIST/MANLOLOKO/LIAR GROUP</b>;<br/>
--> where: <b>secrets</b> include among others:  <b>techniques</b>, <b>know-how</b><br/>
--> <b>OUTPUT</b>: <b>HUNTED</b> down by <b>TERRORIST GROUP</b>;<br/>
--> meets: <b>PUNISHER (CASTLE, FRANK)</b> who <b>HUNTS</b> <b>TERRORIST GROUP</b>;<br/>
<br/>
--> notes: <b>SPIDERMAN (PARKER, PETER)</b> to also <b>exist</b>,<br/>
--> albeit <b>prefers NOT to add in OWN story</b>;<br/>
--> due to: <b>DAREDEVIL + SPIDERMAN</b> cause <b>TERRORIST GROUP</b> NOT destroyed<br/>
--> opts: for <b>PUNISHER + DAREDEVIL only</b>;<br/>
<br/>
--> reminder: <b>DAREDEVIL's FATHER</b>: <b>NO TO LIARS</b>;<br/> 
--> adds: <b>FATHER KILLED by TERRORIST/LIAR GROUP</b>,<br/>
--> who: execute <b>SPORTS MATCH-FIXING</b><br/>
<br/>
<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202211/referenceCapcomThePunisher,DaredevilComicsV20221223T1413.jpeg"><br/>
<br/>
--> adds: <b>PUNISHER</b> : <b>ACTION</b>;<br/>
--> reminder: <b>PUNISHER</b> is <b>FATHER of OWN FAMILY UNIT</b>,<br/>
--> whose: <b>FAMILY members KILLED by TERRORIST GROUP</b>;<br/>
--> adds: <b>TERRORIST/LIAR GROUP</b> includes: <b>SMUGGLERS/CARNAPPERS</b>;<br/>
<br/>
--> <b>OUTPUT of COMIC BOOK STORY</b>: <b>OMEGA DRIVE</b> passed to <b>MR FANTASTIC</b>,<br/>
--> i.e. <b>RICHARDS, REED</b> of <b>FANTASTIC FOUR</b>;<br/>
--> adds: <b>MR FANTASTIC</b> is <b>HUSBAND</b> of <b>INVISIBLE WOMAN (RICHARDS, SUE)</b>,<br/>
--> remembers: however, to be NOT a FATHER...<br/>
<br/>
--> notes: <b>END does NOT appear to be THE END</b>;<br/>
--> prefers: however, as <b>OUTPUT</b> of <b>OWN STORY</b>:<br/> 
--> <b>TERRORIST/LIAR GROUP DESTROYED</b>; <b>THE END</b>.<br/>
</p>
</blockquote>


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
