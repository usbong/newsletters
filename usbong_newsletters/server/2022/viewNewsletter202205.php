<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220531; from 20220528
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
							color: rgb(120,63,4);
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
	<!-- //edited by Mike, 20220325
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
		<b>高</b> (あきら	; たかい; HIGH; EXPENSIVE);<br/>
		<b>明</b> (あきら; CLEAR・BRIGHT)<br/>
		<b>AKIRA</b> (MAHAL; MALINAW・MALIWANAG)<br/>
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	May 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) reminded: Public, to classify all <b>DIGITAL INFORMATION</b> set to <b>PRIVATE</b> to be <b>PUBLIC</b><br/>
--> where: <b>DIGITAL INFORMATION</b> : text, photographs, videos, sound<br/>
<br/>
--> <b>objective:</b> increase <b>Security Defense</b> against the <b>MANLOLOKO</b>/budol-budol/<br/>
carnapper/smuggler/cybercriminal/Teroristang Komunista group<br/>
<br/>
--> observed: stolen information misused by the <b>MANLOLOKO</b><br/> 
--> to cause stalking, intimidation, harrassment, et cetera; <b>NOISE POLLUTION</b>;<br/>
<br/>
--> <b>MANLOLOKO</b>'s <b>objective</b>: <b>QUICK MONEY</b> via causing <b>TARGET</b> to obey their <b>gawa-gawang RULES</b><br/>
--> where: <b>gawa-gawang RULES</b> is NOT of the community<br/>
--> where: misuses even religious beings, e.g. <b>観音 (guanyin; kannon)</b><br/>
--> with: <b>gawa-gawang EXPLANATION</b> that is supposedly NOT learnable by Filipino citizens<br/>
<br/>
<b>Examples of gawa-gawang RULES:</b><br/>
--> <b>Example#1:</b> Do NOT file incident reports with Police;<br/>
--> <b>Example#2:</b> Do NOT answer questions for clarification<br/> 
due to among others: <b>SECRET</b>, <b>SURPRISE WEDDING</b>;<br/>
--> observed: <b>CLARIFICATION </b> shall show <b>MANLOLOKO</b> group's <b>INCORRECT ACTIONS</b><br/>
--> where: <b>INCORRECT ACTIONS</b> : <b>ILLEGAL</b>, e.g. smuggling, carnapping, human trafficking, murder<br/>
<br/>
--> <b>Output#1:</b> <b>UNCLEAR/MALABO</b> Communication for abuse by the <b>MANLOLOKO</b> group;<br/>
--> <b>Output#2:</b> <b>DELAYS</b> in system execution @<b>Accounting Unit</b>,<br/> 
--> e.g. @partner Sta. Lucia Health Care Center (SLHCC), MOSC<br/>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			<b>Question:</b> How does the <b>MANLOLOKO</b> group steal <b>DIGITAL INFORMATION</b> that is set to be <b>PRIVATE?</b><br/>
			<br/>
			<b>DIGITAL INFORMATION</b> stored in a computer, e.g. outside the Philippines, may pass through networks whose security settings are NOT secure.<br/>
			<br/>
			<b>reminder#1:</b> electronic mail services, e.g. <b>GMAIL</b>, may store the electronic letters of a country, e.g. the Philippines, in another country, e.g. Singapore<br/>
			<br/>
			<b>reminder#2:</b> GMAIL classified with <b>CLOUD-based SERVICES</b><br/>
			<br/>
			The <b>MANLOLOKO</b> group connects to a <b>PUBLIC</b> and/or <b>PRIVATE</b>-accessible network to <b>steal</b> using tools, e.g. <a class="webServiceLink" target="_blank" href="https://www.wireshark.org/#learnWS">WIRESHARK</a>, <b>DIGITAL INFORMATION</b>;<br/>
			<br/>
			<b>Example of STOLEN DIGITAL INFORMATION:</b><br/> 
			1) visited website addresses<br/>
			2) passwords<br/> 
			3) text messages<br/>
			<br/>
			This is even if website as service is encrypted via <b>HTTPS</b><br/> 
			where: <b>HTTPS</b> = Hypertext Transfer Protocol Secure</b><br/>
			<br/>
			<b>reminder#3:</b> Multiple network nodes CAN be created using Multiple routers<br/>
			<br/>
			<b>Example:</b><br/>
			<b>router#1</b> CAN be set to be accessible using <b>PRIVATE</b> passwords<br/>
			<b>router#2</b> CAN be set to be accessible to be <b>PUBLIC</b> without password<br/>
			<br/>
			<b>router#1</b> and <b>router#2</b> are CONNECTED to each other;<br/> 	
			<b>DIGITAL INFORMATION</b> from <b>router#1</b> are <b>stolen</b> using <b>router#2</b>;<br/>
			<br/>
			<b>where: router#2</b> can be located in the Philippines or another country<br/> 
			<br/>
			TO-DO: -update: this
		</td>
	</tr>
</table>
<br/>
<b>Recommended Actions:</b><br/>
1) file: incident reports with Police;<br/>
2) Ignore, if NOT endure, NOISE POLLUTION;<br/>
3) clarify: with Family Unit, e.g. Wife, directly and in-person<br/> 
--> any information/gossip heard, viewed, et cetera;<br/>
--> <b>Halimbawa:</b> Kung may narinig kang hindi ayos ukol sa akin, kausapin mo muna ako nang direkta at harap-harapan upang ating LINAWIN ang anumang MALABO.<br/>
<br/>
<br/>
<br/>
<br/>
instructions for computer automation BOTS to assist in QUICKLY and CORRECTLY counting transactions</br>
--> where: counting : Maparaang Pagbibilang</br>
--> <b>Examples used with Linux Machine:</b></br>
--> auto-access and transfer Database (DB) from Windows Machine to <a class="webServiceLink" href="lubuntu.me" target="_blank">Linux Machine (LUBUNTU)</a></br>
--> auto-import Transactions DB to be classified as <a class="webServiceLink" href="https://www.mysql.com/" target="_blank">MySQL (Structured Query Language)</a>DB</br>
--> auto-start <a class="webServiceLink" href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a> Web Server</br>
</br>
--> reminder: Increase in <b>Computer BOTS</b> that execute <b>QUICK</b> and <b>CORRECT</b> outputs<br/>
--> CAUSES increase in <b>INCOME</b> due to in a set TIME, increase in <b>WORK OUTPUTS</b><br/>
--> observed: IF <b>Humans</b> do NOT execute as <b>Computer BOTS</b>,<br/> 
--> increase in <b>COUNT</b> does NOT cause increase in <b>INCOME</b>;<br/>
--> reminder: History of Industrial Revolution;<br/> 
--> where: <b>Humans</b> tasked to execute as <b>Computer BOTS</b> via <b>assembly line</b>,<br/>
--> however, system became inefficient due to Humans have <b>EMOTION</b>;<br/>
--> where: <b>EMOTION</b> : execute ACTIONS that are <b>NOT LOGICAL</b> caused by: <b>INCORRECT BELIEFS</b><br/>
--> reminder: There exists a <b>CORRECT LOGICAL</b> answer to a <b>LOGICAL</b> question;<br/>
--> where: <b>NOT LOGICAL</b> : <b>UNCLEAR/MALABO</b> due to among others: <b>CANNOT be identified/classified</b><br/>
<br/>
--> observed: from <b>FORBES (ASIA) Magazine (November 2017)</b>,<br/> 
--> <b>LIST</b> of Wealthiest in the United States of America (U.S.A.)<br/> 
--> in the TOP 10, <b>MAJORITY</b> of people classified to be in the <b>COMPUTER SERVICES</b> Industry<br/>
<br/>
--> shared: with current USBONG Trainee: <b>INCOME</b> mainly comes from Maparaang Pagbibilang;<br/>
--> Teaching <b>日本語 (nihongo; Japanese Language)</b> @<a class="webServiceLink" href="https://github.com/usbong/school" target="_blank">USBONG SCHOOL</a> classified to be <b>BONUS</b><br/>
<br/>
--> <b>Recommended Action:</b> IF <b>LANGUAGE TEACHING</b> set to be the <b>MAIN WORK</b>,<br/> 
--> find <b>SPOUSE</b> who has know-how in Computers/Maparaang Pagbibilang,<br/> 
--> to increase <b>HOUSEHOLD INCOME</b><br/>
<br/>
--> reminder: <b>HUSBAND & WIFE</b> strong individually,<br/> 
--> but <b>CHOOSE</b> to be TOGETHER due to <b>STRONGER</b> via <b>BUILDING OWN FAMILY UNIT</b>;<br/>
--> observed: in Germany, Small-Medium Enterprises form <b>BACKBONE</b> of ECONOMY<br/>
--> where: <b>MAJORITY</b> of Small-Medium Enterprises classified to be <b>FAMILY BUSINESSES</b><br/>
--> <b>Reference:</b> Hintereder, P. (2010). "FACTS about Germany". Germany: Societäts-Verlag<br/>
<br/>
--> adds: in select <b>FAMILY UNITs</b>, due to increasing variations in use of TIME,<br/>
--> caused by increasing <b>EXCESS INCOME</b> received,<br/>
--> <b>BOTH SPOUSES</b> forget <b>VALUE</b> of being <b>TOGETHER</b>;<br/>
--> where: <b>EACH</b> opts self is already sufficiently <b>STRONG individually</b>.<br/>
--> <b>OUTPUT:</b> Increase of <b>PROBLEMS</b> within <b>FAMILY UNIT</b> and its <b>social network</b><br/>
<br/>
--> <b>EXAMPLE#1:</b> Continuous <b>INDIRECT COMMUNICATION</b> of SPOUSES via the CHILDREN<br/> 
--> <b>EXAMPLE#2:</b> <b>NEGATIVE EMOTION</b> caused by among others:<br/> 
--> <b>ENVY of OTHERS</b>, <b>LESS PHYSICAL ACTIVITY</b><br/> 
--> as with continuous viewing of <b>NEWSFEEDS</b> via <b>social media</b>, e.g. Facebook<br/>
<br/>
--> remembers: <b>HISTORY of EAST and WEST Germany</b><br/>
--> where: in <b>EAST Germany</b>, people began to use <b>INDIRECT COMMUNICATION</b><br/>
--> due to <b>POLICE</b> may <b>ARREST</b> those who were against the <b>SYSTEM</b><br/> 
--> where: <b>SYSTEM</b> : <b>PUBLIC sharing</b> of items/services, despite <b>UNCLEAR contribution</b> of <b>ALL members</b><br/>
--> <b>OUTPUT</b>: <b>WEST Germany</b> became <b>WEALTHIER</b> than the EAST due to <b>SYSTEM efficiency</b>,<br/>
--> caused by: <b>DIRECT COMMUNICATION</b> with <b>SUPPORT</b> from <b>FACTS</b>.<br/>
<br/>

1.1.2) received: <a class="webServiceLink" target="_blank" href="https://www.usbong.ph/contact">USBONG JOB/Trainee applicants</a><br/>
--> requested: to answer <a class="webServiceLink" target="_blank" href="https://github.com/usbong/documentation/tree/master/Usbong/company/HR/Usbong%20Education%20Training%20Courses/Introduction%20to%20Maparaang%20Pagbibilang">Maparaang Pagbibilang Questions:</a><br/>

--> <b>TOPIC:</b><br/> 
--> Q.1) ALGEBRA<br/> 
--> Q.2) COORDINATE SYSTEM<br/>
--> Q.3) 2D SHAPES<br/>
--> Q.4) 3D SHAPES<br/>
--> Q.5) TRIGONOMETRY<br/>
<br/>
--> reminder: Middle~High School Level<br/>
--> focused: on practical application as applied in Computer Automation<br/>
--> Example#1 (COORDINATE SYSTEM): Correct <b>IDENTIFICATION</b> of <b>ROW&COLUMN POSITIONS</b><br/> 
--> in Spreadsheet Tool, e.g. <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ww/microsoft-365/excel">Microsoft Office EXCEL</a>, <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice CALC</a>;<br/>
<br/>
<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202202/financeCompoundNotesV20220215.png">	
<br/>
<br/>
--> Example#2 (3D SHAPES): <b>INK Cartridge Replacement</b> of <a class="webServiceLink" target="_blank" href="https://support.hp.com/ph-en/document/c02227508">Hewlett Packard (HP) Printer</a><br/>
<br/>
<img class="newsletterImage" width="40%" height="40%" src="assets/images/newsletter/202204/exampleFromSupportHPDotComSlideInkCartridgeIntoSlotc02232542.gif">	
<br/>
<br/>
--> shared: know-how in 日本語 (にほんご; nihongo)<br/>
--> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/school/">https://github.com/usbong/school/
</a><br/>
<br/>
<table class="noteTable">
	<tr>
		<td>
		<b>OBJECTIVE</b><br/>
		</td>
	</tr>	
	<tr>
		<td>
		to create <b>ORDER</b> from the <b>CHAOS</b> of <b>disorganized THOUGHTS and IDEAS</b><br/>
		i.e.: <b>SCIENCE (理系(りけい)、科学(かがく))</b><br/>
		<b>science keyphrase:</b> CORRECT, identification, classification<br/>
		<br/>
		where: <b>MANLOLOKO</b>/budol-budol/carnapper/smuggler/<br/>
		cybercriminal/Teroristang Komunista group causes CHAOS<br/>		
		<br/>
		<b>reminder:</b> Increase in Teroristang Komunista : Speed-up of <b>SOCIAL CANCER</b><br/>
		</td>	
	</tr>	
</table>
<br/>
<table class="noteTable">
	<tr>
		<td>
		<b>REQUEST</b><br/>
		</td>
	</tr>	
	<tr>
		<td>
		purpose: NOT to achieve fame, neither is it to boast; A single-minded enthusiasm with no expectation of material reward, is vital.<br/>
		<br/>
		world goals and ambitions:<br/>
		<br/>
		<b>Examples:</b><br/>
		to fight people<br/>
		for vanity<br/>
		to humiliate people<br/>
		to enhance reputation<br/>
		for financial gain<br/>
		</td>	
	</tr>	
	<tr>
		<td>
		<br/>
		<b>Reference:</b><br/>
		<a class="webServiceLink" target="_blank" href="https://www.amazon.com/Kendo-Definitive-Guide-Hiroshi-Ozawa/dp/4770021194">Ozawa, Hiroshi. (1997). "Kendo: the definitive guide (translated by Angela Turzynski)". Tokyo: Kodansha International, Ltd.</a><br/>
		</td>
	</tr>	
</table>
<br/>
<table class="noteTable">
	<tr>
		<td>
		<h2><b>日本語 (にほんご; nihongo)</b></h2>

		<b>Example Recordings: Training Sessions</b><br/>
		<a class="webServiceLink" target="_blank" href="http://store.usbong.ph/server/audio/viewAudio.php">http://store.usbong.ph/server/audio/viewAudio.php
		</a>
		<br/>
		<br/>
		<b>DOWNLOADABLES</b><br/>
    1) What is <b>とか</b>?<br/>
    <b>keyphrase:</b> とか, Radio, Speaker, Mic, Karaoke<br/>
<br/>
    2) What is <b>つぶし</b>?<br/>
    <b>keyphrase:</b> SOCIAL MEDIA, 時間 (jikan), つぶし(tsubushi)<br/>
<br/>
    3) What is <b>スタックオーバーフロー</b>?<br/>
    <b>keyphrase:</b> DISCORD, スタックオーバーフロー (stackoverflow), LOGICAL Q&A, reddit, Facebook (FB)<br/>
    		</td>	
	</tr>	
	<tr>
		<td>
<br/>
		<b>COMPUTER SOFTWARE TOOLS</b><br/>
<a class="webServiceLink" target="_blank" href="https://www.audacityteam.org/">https://www.audacityteam.org/</a>
; last accessed: 20220427<br/>
--> Multi-track audio editor and recorder<br/>
		</td>
	</tr>
	<tr>
		<td>
<h2><b>Recommended Listening Practice</b></h2>
<h3><b>Minna no Nihongo I 2nd Edition CD</b></h3>
<a class="webServiceLink" target="_blank" href="https://archive.org/details/65-dai-18-ka-mondai-2">https://archive.org/details/65-dai-18-ka-mondai-2
</a>;<br/>
last accessed: 20220420
<h3><b>Technique Notes</b></h3>
    <b>Use:</b> example conversations, instead of individual words;<br/>
    <b>Listen:</b> repeatedly until CAN remember the next conversation in the audio sequence<br/>
    <br/>
    <b>Additional Note:</b><br/> 
    1) as with children, you shall be able to identify individual words that you repeatedly hear, if NOT yet the whole sentence<br/>
    <b>use:</b> dictionary to learn the significance of those individual words that you repeatedly hear;<br/>
    <b>reminder:</b> You may still be able to understand the significance of the whole sentence,<br/>
    even without yet knowing ALL the individual words<br/>

	<h3><b>Output</b></h3>
    High School Level nihongo (Japanese Language Proficiency Level (JLPT) N1)<br/>
    --> Learning Time (Estimated): 5years		
    	</td>	
	</tr>	
</table>
</h5>

<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) shares: Lessons-learned: ファミ通.com (famitsu.com)</h4>
<h5>
<a class="webServiceLink" target="_blank" href="https://www.famitsu.com/news/202203/26256047.html">
https://www.famitsu.com/news/202203/26256047.html
</a>; last accessed: 20220327<br/>
<b>INTERVIEW TRANSLATED from 日本語 (にほんご; nihongo) to Filipino</b><br/>
<br/>
2022-03-27T09:06~09:28; 22MINS<br/>
2022-03-27T09:36~10:01; 25MINS<br/>
<br/>
<b>TOTAL ELAPSED TIME:</b> 47MINS<br/>
<br/>
2022-03-27T10:01~10:12; 11MINS; TEXT FORMAT<br/>
<br/>
<b>GRAND TOTAL ELAPSED TIME:</b> 58MINS<br/>
<br/>
<b>EDITOR ELAPSED TIME:</b> 2022-03-29T09:06~09:20;09:36~09:37; 16MINS<br/>
<br/>
<b>    『ドラゴンクエスト』はコンピュータ上に描いたマンガのようなもの</b><br/>
<br/>
"DRAGON QUEST", bagay na tulad sa iginuhit na MANGA sa kompyuter.<br/>
<br/>
<b>    　どうも堀井雄二です。</b><br/>
<br/>
Kumusta, Horii, Yuji po.<br/>
<br/>
<b>    　じつは僕はもともとマンガが大好きな少年で、中学・高校時代ともずっとマンガ家になりたいと思っていました。大学ではマンガ研究会に所属し、マンガを描いたり、プロのマンガ家さんの原作を手伝ったり、雑誌にイラストと記事を書いたりしていました。</b><br/>
<br/>
Ang sa katunayan, simula't simula pa po, sapagkat sa taon pa ng aking kabataan malaki na ang pagkahilig sa MANGA, naisip ko na po noong pang panahon sa Gitna at Mataas na paaralan, nais ko na pong maging Mangguguhit ng MANGA. Sa Malaking Paaralan (college), naging kabilang po ako sa Samahan ng mga Mananaliksik ng MANGA, gumuhit ng MANGA, tumulong sa gawain ng PRO na Mangguguhit ng MANGA, sa mga Magazine, nagsulat ng mga guhit at sulatin, atbp.<br/>
<br/>
<b>    そして、大学を卒業したあとも、フリーランスとしてライターの仕事をしていたのですが、その当時、世の中は大きな変化を迎えていました。コンピュータの登場です。新聞でコンピュータの特集記事を読んだ僕は、このコンピュータという機械にとてつもない魅力を感じました。そして、矢も盾もたまらずマイクロコンピュータ、パーソナルコンピュータを買ったのです。もともと数学が好きだった僕は、たちまちコンピュータというおもちゃに夢中になり、プログラミング言語を覚え、自分でもゲームを趣味で作り始めたのでした。</b><br/>
<br/>
Pagkagawa nito, pagkatapos magtapos sa Malaking Paaralan, bilang isang FREE-LANCER, ginawa ko po bilang hanap-buhay ang tungkulin ng manunulat, kaya lang sa panahong iyon, sa daigdig, may sinasalubong na malaking pagbabago. Ito ang pagdating ng kompyuter. Ako na nagbasa ng mga bukod-tanging pinagsamang sulatin na balita sa kompyuter, naramdaman ko po ang akit nitong kompyuter bilang isang makina. Pagkatapos, sapagkat hindi rin makatiis ng pana at kalasag, bumili ako ng MICROCOMPUTER, PERSONAL COMPUTER. Simula't simula pa, ako na mahilig sa pag-aaral ng pagbibilang, naging babad ako sa panaginip nitong sinasabing kompyuter na laruan, nakabisado ko ang wika ng PROGRAMMING, ang sarili ko rin mismo, bilang pampalipas na panahon (HOBBY), nagsimulang bumuo ng laro.<br/>
<br/>
<b>    そのころ、たまたまエニックス、現在のスクウェア・エニックスですね。が、ゲームプログラミングコンテストをやっていたので、自作のゲームで応募したところ、見事入選しまして、それが僕のゲーム人生の出発点です。いまからおよそ40年前の出来事です。</b><br/>
<br/>
Sa panahong iyon, nagkataon, may ENIX, ang kasalukuyang SQUARE・ENIX. May ginawang GAME PROGRAMMING CONTEST, sinali ko po ang aking sariling binuong laro, napasok at napili, pagkatapos, iyon po ang aking simula (tuldok ng paglabas) sa buhay ng laro. Mula sa kasalukuyan, mga 40 taon ang nakararaan ng maganap po ito.<br/>
<br/>
<b>    　入選作は趣味で自分で遊ぶためのアクションゲームでしたが、つぎは市販されて、人にプレイしてもらえると、当時興味があったアドベンチャーゲームを作ることにしました。プレイ中に物語が進行して、つぎつぎと殺人事件が起きていくゲームです。それが『ポートピア連続殺人事件』でした。ゲーム中、「つぎはなにをしますか？」と聞いてくるコマンドを要求してくるキャラが、じつは犯人という荒業を使いました。</b><br/>
<br/>
Ang napasok at napili, bilang pampalipas ko po ng panahon, isang ACTION GAME na binuo ko po upang sarili ko pong laruin, pagkatapos nailathala, sapagkat sinabing malalaro ng mga tao, pinagpasiyahan ko pong bumuo ng ADVENTURE GAME na nakahiligan ko po sa panahong iyon. Habang naglalaro, umuusad ang salaysay ng laro: sunud-sunod, may nagaganap na insidente ng pagpaslang ng tao. Iyon po ang "PO-TOPIA sunud-sunod na insidente ng pagpaslang ng tao". Sa loob ng laro, "Ano po ang iyong gagawin?" ang dumarating na tanong na COMMAND mula sa Tauhan; ang sa katunayan, ginamit ko pong tawag sa Salarin, ARAWAZA ("madungis na gawa").<br/>
<br/>
<b>    これがさらに好評を得て、ゲーム制作の余裕が増えていきます。コンピュータの魅力のひとつは入力に対して、さまざまなリアクションを取れるインタラクティブ性だと思います。つまり、プレイヤーの行動を想像して、いろいろな仕掛けを作っておく。このシステム上で物語を作るのは、僕はとても楽しい作業だと感じました。</b><br/>
<br/>
Mula rito higit pang nakatanggap ng maayos na pagpuna, nadagdagan pa ang pagdami ng bakanteng panahon upang bumuo ng laro. Aking naisip na isang akit ng kompyuter ang ukol sa INPUT, na kung saan samu't saring REAKSYON (TUGON) ang makukuha: INTERACTIVE. Ibig sabihin, pagmunihan ang magiging pagkilos ng Manlalaro, at samu't saring mga setting ang buuin. Sa sistemang ito, sa pagbuo ng salaysay, naramdaman ko po ang talagang maligayang pagbuo't paggawa.<br/>
<br/>
<b>    　それから、自分自身も好きで遊んでいた『ウイザードリィ』や『ウルティマ』といったRPGにも物語というレールを敷いたら、とても遊びやすくなるのではと思って作ったのが『ドラゴンクエスト』です。</b><br/>
<br/>
Pagkatapos no'n, ang sarili ko pong kinahiligan at nilarong "WIZARDRY", "ULTIMA", atbp na tinatawag na RPG, kapag isinaayos ko po ang RAIL ng salaysay, talagang magiging madali ang paglaro. Ito po ang inisip ko sa pagbuo ng "DRAGON QUEST".<br/>
<br/>
<b>    　『ドラゴンクエスト』もマンガと同じように短い会話で物語が進行します。コンピュータ上に描いたマンガのようなものだと僕は思っています。</b><br/>
<br/>
Ang "DRAGON QUEST", at pati na rin ang MANGA, hinalintulad sa maikling pag-uusap umuusad ang salaysay. Iniisip ko po ito bilang bagay na iginuhit na MANGA sa kompyuter.<br/>
<br/>
<b>    僕たちのチームは、いま新たな本編作品となる『ドラゴンクエストXII』の制作のほか、いくつかの新しい作品を制作しています。これらの作品は、『ドラゴンクエストXI』のように、世界のたくさんの皆さんにプレイしていただけたらと思っています。今後の続報に期待してください。</b><br/>
<br/>
Ang amin pong pangkat, bukod sa kasalukuyang bagong binubuong bagay, "DRAGON QUEST XII", may ilang pang bagong mga binubuo. Ang mga sunod na binubuong bagay na ito, tulad ng "DRAGON QUEST XI", iniisip ko pong, maiging maraming tao sana sa daigdig ang maglalaro. Pakiabangan po ang sunod na balita.<br/>
</h5>
</h3>

<h3>3) Continued with Security Defense Force</h3>
<h4>3.1) shares: Lessons-learned: asahi.com　(朝日新聞　DIGITAL; asahi shimbun digital)</h4>
<h5>
3.1.1) <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQ3H7H4TQ3HUTIL020.html?iref=pc_rensai_short_1475_article_5">
事実上の刑罰、取り返しつかない結果に　元裁判官が語る「人質司法」
</a>; last accessed: 20220505<br/>
<b>    2022年4月22日 14時00分</b><br/>
<br/>
<b>    警察、検察が事件を有罪にするにあたって一番メリットがあるやり方だからです。容疑者は身柄を拘束されたことでつらくなり、自白する。あるいは自白しなくても、証拠隠滅や逃亡の危険がなくなるので、捜査当局にとってはメリットしかないわけです。</b><br/>
<br/>
Ang Pulis, sa pagsisiyasat (prosecution), upang umamin ang salarin sa kasalanan sa insidente, ang pinakamay MERIT na paraan: <b>Sariling aamin</b>, sapagkat masakit kapag hindi pinalalaya ang katawan (physical restraint). Sa kabila nito, kahit hindi sariling umamin, dahil mawawala ang panganib sa pagtatago o pagwawasak ng patunay (ebidensiya), pagtakas, sa gumagawa ng pagsisiyasat, MERIT din ito.<br/>
<br/>
--<br/>
<br/>
<b>    みずの・ともゆき　法政大法科大学院教授（刑事法）、弁護士。1962年生まれ。88年に裁判官になり、静岡や大阪、東京、千葉の各地裁の判事などを経て、2012年から現職。フジテレビ系ドラマ「イチケイのカラス」では、裁判所監修を担当した。</b><br/>
<br/>
MIZUNO, TOMOYUKI; Guro (Batas ukol sa Krimen) sa HOUSEI DAIHOUKA DAIGAKUIN (BATAS ADMIN MALAKING BATAS AGHAM MALAKING PAARALAN NG MGA NAGTAPOS (GRADUATE SCHOOL), <b>Mag-aaral ng Tagapagtanggol ng Salita (ABOGADO)</b>. Ipinanganak Taong 1962. Taong 88, naging Taga-husga, gumugol ng panahon sa gawaing Hukom sa mga pook sa SHIZUOKA, OSAKA, TOKYO, CHIBA, atbp, mula Taong 2012, kasalukuyang hanap-buhay. Nanungkulan bilang Supervisor/Editor ng DRAMA na "ICHIKEI no KARASU" ng FUJI-TV.<br/>
<br/>
<b>NOTE: Dinagdag ko ang DIIN</b><br/>
<br/>
3.1.2) <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQ3K4VDTQ3HULFA00S.html?iref=comtop_list_02">
米利上げ　日本にも波及　円安・物価高が加速　日銀の対応は？
</a>; last accessed: 20220329<br/>
<br/>
Increase in United States Dollar (USD) Value; Wave also reaches Japan; Speed-up of Cheaper Yen・Higher Commodity Price; Japanese Bank's response?<br/>
<br/>
<b>    米国の利上げは、日本経済にも大きな影響を及ぼすことになる。まずは、昨年来進んでいる円安傾向がさらに強まる可能性がある。日本より金利が高いドルを買う動きが強まるからだ。円安は輸出企業にとってはプラスだが、輸入物価の上昇につながり、家計や企業の負担を重くする要因にもなる。</b><br/>
<br/>
decreased YEN value to USD;<br/>
輸出 (export) PLUS;<br/>
<b>causes</b>: increased USD in Japan;<br/>
<b>defense</b>: increased YEN price of products/service in Japan;<br/>
</h5>
</h5>


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
