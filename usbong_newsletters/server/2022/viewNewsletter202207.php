<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220721; from 20220718
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
						
						blockquote.usbongBlockquote {
							background: #eee;
							color: rgb(40,40,40); /* from black to white */ 
							margin:0;		
							border-left: 5px solid #ab9c7d;
							padding: 2px;					
							padding-left: 3%;
							
							/* text-indent: 5%;*/

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
		<b>コンピュータ情報</b> (kompyu-ta jouhou) : <b>BALITA</b><br/>
		Kompyuter; Damdamin Pinagpapala;
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	June 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, <b>VALUE</b> of multiple Computer Servers<br/>
--> observed: recent <b>NO ELECTRICITY POWER incident</b> near <b>SCHOOL BUILDING CONSTRUCTION</b><br/> 
--> in <b>Barangay Sto. Niño, Marikina City</b> caused <b>WAITING TIME</b><br/> 
--> for <b>ELECTRICITY to RETURN</b> to be <b>OVER one (1) HOUR</b>.<br/> 
--> Previously, in <b>5mins (APPROX)</b>, <b>ELECTRICITY POWER</b> returns for Computer Servers to <b>auto-start</b>;<br/>
--> added: partner MOSC, has <b>POWER GENERATOR</b> using <b>FUEL</b><br/> 
--> to cause select <b>appliances</b>, e.g. <b>LAMPS</b>, <b>local router</b>, to function;<br/>
--> added: however, <b>desktop computers</b> to be set to <b>OFF</b>;<br/>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			verified: using <b>Uninterruptible Power Supply (UPS)</b> devices;<br/> 
			however, opted <b>NOT to use</b> due to among others:<br/>
			1) <b>STORED ELECTRICITY POWER</b> decreased<br/> 
			--> from <b>5mins</b> to <b>zero seconds</b> with <b>CONTINUED USE</b>;<br/>
			--> <b>UPS</b> device remained connected to <b>electrical outlet</b> to <b>refill electricity</b><br/>			
			<br/>
			<b>Current ACTION:</b><br/>
			1) using: recycled <b>LENOVO IdeaPad with BATTERY</b> as Computer Server<br/>
			--> where: <b>IdeaPad</b> classified to be <b>Laptop Computer</b><br/>
			--> observed: execution of <b>Computer Web Browser</b>, e.g. Mozilla Firefox, to have <b>noticeable DELAY</b><br/>
			<br/>
			<b>OUTPUT:</b> opted: to <b>USE another Computer</b> for Web Browser ACTIONS<br/>
			<br/>
			<br/>
				TO-DO: -add: TABLET PC photograph<br/>
			<br/>
			<br/>
			<b>Additional Note:</b><br/>
			1) installed: in <b>LENOVO IdeaPad</b>, the following Web Server Tools:<br/>
			1.1) <a class="webServiceLink" target="_blank" href="https://httpd.apache.org/">Apache Web Server</a><br/>			
			1.2) <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL</a><br/>						
			1.3) <a class="webServiceLink" target="_blank" href="https://www.phpmyadmin.net/">phpMyAdmin Tools</a><br/>
			<br/>
			--> With this <b>Computer Server</b>, <a class="webServiceLink" target="_blank" href="https://www.apachefriends.org/index.html">XAMPP</a> <b>did NOT install successfully</b> as with another <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu</a> <b>Computer Server</b><br/>
			<br/>
			--> adds: however, <b>applications</b> that I wrote in the following Computer Languages <b>execute</b> WITHOUT noticeable DELAY:<br/>
			<br/>			
			1.1) <b>C/C++ COMPUTER LANGUAGE</b><br/>
			1.2) <a class="webServiceLink" target="_blank" href="https://www.java.com/en/">JAVA COMPUTER LANGUAGE</a></b>
			<br/>
			<br/>
			<b>Example:</b> Setup System for Quick Execution of <b>WORKBOOK Reports</b><br/>
		<video width="416" height="312" controls>
		  <source src="assets/images/videos/halimbawaSetupSystemForQuickExecution20220713T1018.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video><br/>											
		<br/>
		</td>
	</tr>
</table>

<br/>
<br/>
			1.1) <b>Bash Shell</b><br/>
			
			<b>Example#1:</b> Database Saved Work<br/>
					<video width="416" height="312" controls>
		  			<source src="assets/images/videos/usbongKmsDatabaseSavedWorkReminderDeleteExcessDBFiles20220714T1620.mp4" type="video/mp4">
		  			Your browser does not support the video tag.
					</video><br/>	
			<br/>

<br/>
<br/>
TO-DO: -update: this</br>
</br>
</br>
b) <b>SINGLE PROPRIETOR: BIR FORM 1701</b></br>
1st Quarter 15-APR</br>
2nd Quarter 15-AUG</br>
3rd Quarter 15-NOV</br>
Annual 15-APR (Following Year)</br>
</br>
</br>
eBIR Form No. 1701Qv2018</br>
</br>
TABLE 1 - Tax Rates (effective January 1, 2018 to December 31, 2022)</br>
If Taxable Income is:  Tax Due is:  </br>
Not over P250,000  0%  </br>
Over P250,000 but not over P400,000  20% of the excess over P250,000  </br>
Over P400,000 but not over P800,000  P30,000 + 25% of the excess over P400,000  </br>
Over P800,000 but not over P2,000,000  P130,000 + 30% of the excess over P800,000  </br>
Over P2,000,000 but not over P8,000,000  P490,000 + 32% of the excess over P2,000,000  </br>
Over P8,000,000  P2,410,000 + 35% of the excess over P8,000,000  </br>
</br>
TABLE 2 - Tax Rates (effective January 1, 2023 and onwards) </br>
If Taxable Income is:  Tax Due is:  </br>
Not over P250,000  0%  </br>
Over P250,000 but not over P400,000  15% of the excess over P250,000  </br>
Over P400,000 but not over P800,000  22,500 + 20% of the excess over P400,000  </br>
Over P800,000 but not over P2,000,000  102,500 + 25% of the excess over P800,000  </br>
Over P2,000,000 but not over P8,000,000  402,500 + 30% of the excess over P2,000,000  </br>
Over P8,000,000  P2,202,500 + 35% of the excess over P8,000,000  </br>
 
</br>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<b>QUICK START-UP</b>;<br/>
--> where: <b>START-UP</b> : <b>VEHICLE ENGINE IGNITION</b><br/>
--> observed: during <b>EMERGENCY (ER)</b> situation, <b>START-UP ELAPSED TIME</b> noticeably <b>INCREASES</b><br/> 
--> This is due to Unit member shall <b>START</b> via OPEN COMMAND <b>multiple applications together</b><br/>
--> to attempt to decrease <b>WAITING TIME</b><br/><a class="webServiceLink" target="_blank" href="https://www.java.com/en/">JAVA COMPUTER LANGUAGE</a>
--> <b>Example:</b> <b>re-starting</b> COMPUTER MACHINES and <b>re-opening</b> applications, e.g. web browsers,<br/> 
--> after a <b>NO ELECTRICITY POWER incident, CONTINUOUS WAITING TIME for COMPUTATION TO FINISH</b><br/>
--> <b>OUTPUT:</b> <b>WAITING TIME</b> becomes <b>OVER</b> one (1) minute<br/>

<h5>1.1.2) shared: with Public, <b>technique</b> to <b>SPEED-UP</b> system;<br/>
--> <b>Problem:</b> already noticeable <b>DELAY</b> finding <b>PATIENT HISTORY</b><br/> 
--> with set <b>TOTAL PATIENT ID count</b> in <b>TRANSACTIONS LIST</b><br/> 
--> where: <b>PATIENT ID</b> : <b>659</b> TOTAL COUNT<br/> 
--> where: <b>TRANSACTIONS LIST</b> : <b>91,478</b> TOTAL COUNT<br/> 
<br/>
--> <b>Technique:</b> create a <b>NEW Identification Number</b> for the <b>SAME PATIENT</b><br/>
--> <b>Example Name:</b><br/> 
1) <b>0</b> : "BERGSTEIN, AKI"<br/><a class="webServiceLink" target="_blank" href="https://www.java.com/en/">JAVA COMPUTER LANGUAGE</a>
2) <b>3543</b> :  "BERGSTEIN, AKIv2"<br/>
3) <b>11682</b> : "BERGSTEIN, AKIv3"<br/>
...<br/>
<br/>
--> add: in <b>PATIENT's LIST</b>, <b>ALL</b> the <b>Identification Numbers</b> of the <b>SAME PATIENT</b> <br/>
<br/> 
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			Previously, we eliminated excess <b>JOIN COMMANDS</b>;<br/> 
			where: <b>JOIN COMMAND</b> : verify the <b>ROWS</b> and <b>COLUMNS</b> of <b>Multiple LISTS</b><br/>
			<br/>
			<b>Example:</b> Identify PATIENT's <b>PURCHASED HISTORY</b> using the following:<br/>
			<b>PATIENT LIST</b>, <b>MEDICINE LIST</b>, and <b>TRANSACTIONS LIST</b><br/>
			<br/>
			adds: We can execute <b>SYSTEM SPEED-UP</b> by updating the <b>first PATIENT PAGE</b> viewed to <b>NOT</b> yet include the <b>PURCHASED HISTORY</b>
		</td>
	</tr>
</table>
<br/>
<br/>
1.1.2) shared: with Public, technique to auto-generate <b>REPORTS</b>;<br/>
--> <b>Example:</b> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/SLHCC/blob/master/generateMonthlySummaryReport/add-on%20software/software/generateMonthlySummaryReportForEachMedicalDoctorOfAllInputFiles.java">Monthly Summary Report for each Medical Doctor</a>;<br/>
--> opted: to use <a class="webServiceLink" target="_blank" href="https://www.java.com/en/">JAVA COMPUTER LANGUAGE</a><br/>
--> due to using Multiple Computers with variation in <b>Operating System (OS)</b> and <b>Spreadhsheet Tool</b>;<br/>
--> where: <b>OS</b> : <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ph/windows">Microsoft Windows</a>, <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu (LUBUNTU)</a><br/>
--> where: <b>Spreadhsheet Tool</b> : <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-us/microsoft-365/excel">Microsoft Office</a>, <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a>
<br/> 
<br/> 
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			We now have more Machines using the following:<br/>
			<a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu (LUBUNTU)</a> than <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ph/windows">Microsoft Windows</a>.<br/> 
			<br/>
			observed: select Machines from a previous <b>SUPPLIER</b> were using <b>NON-ACTIVATED</b> <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ph/windows">Microsoft WINDOWS</a> and <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-us/microsoft-365/excel">OFFICE</a><br/>
			<br/>
			<b>OUTPUT#1:</b> Auto-software update from <b>Windows 7</b> to <b>Windows 10</b> caused noticeable <b>DELAY</b> in <b>SYSTEM EXECUTION</b>;<br/>
			<br/>
			<b>OUTPUT#2:</b> <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-us/microsoft-365/excel">Microsoft Office</a> continuously requested to be <b>ACTIVATED</b><br/>
			--> observed: this appeared to have <b>NOT</b> caused <b>DELAY</b><br/> 
			--> <b>RESPONSE</b> by UNIT: simply <b>IGNORE</b> notification<br/>
			<br/>
			<b>EXECUTED ACTION#1:</b> replaced Installed Software with <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu (LUBUNTU)</a> and <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a><br/>
			<br/>
			<b>EXECUTED ACTION#2:</b> wrote Computer Instructions using among others:<br/>
			<b>OS#1:</b> <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu (LUBUNTU)</a>:<br/> 
			BASIC Computer Language, Bash Shell COMMAND<br/>
			<br/>
			<b>OS#2:</b> <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ph/windows">Microsoft WINDOWS</a>:<br/>
			Visual BASIC for Applications Computer Language, COMMAND Prompt<br/>			
			<br/>
			observed: <b>minimal TRAINING</b> during execution to shift from <b>OS#2</b> to <b>OS#1</b><br/> 
			<br/>
			observed: noticeable <b>SPEED-UP</b> in <b>development</b> for execution<br/> 
			--> via using <b>only ONE (1) Computer Language</b><br/> 
			--> that executes using a <b>VIRTUAL MACHINE</b><br/>
			--> where: <b>VIRTUAL MACHINE</b> executes regardless of <b>OS</b>;<br/>
			<br/>
			--> where: <b>ACTION</b> to auto-execute by computer uses as <b>INPUT text files</b><br/>
			--> where: <b>INPUT text files</b> come from <b>Spreadsheet's Workbooks</b><br/>
			--> where: <b>OUTPUT : </b> <b>Web Browser-viewable</b>, <b>Screenshot Photographs</b>,<br/> 
			--> <b>Spreadsheet-readable</b>, et cetera<br/>
			<br/>
			observed: noticeable <b>SPEED-UP</b> in <b>execution</b> in this <b>context</b><br/> 
			--> This is instead of using a <b>Web Server</b><br/> 
			--> where: <b>files</b> can be accessed by <b>multiple computers</b> via <b>Web Browser</b><br/>
			<br/>
			--> where: <b>context</b> : does <b>NOT QUICKLY NEED</b> to <b>VIEW</b> and <b>UPDATE</b> files<br/>
			--> using <b>multiple computers</b> such as with <b>ITEM INVENTORY</b>;<br/>
		</td>
	</tr>
</table>





</h5>

<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) shares: Lessons-learned: <a class="webServiceLink" target="_blank" href="https://www.famitsu.com">MEDSCAPE.COM</a>ファミ通.com　(famitsu.com)</h4>
<h5>
2.1.1) <a class="webServiceLink" target="_blank" href="https://www.famitsu.com/news/202206/08264224.html">“ジャンプアプリ開発コンテスト2022”のエントリー開始。募集内容は“マンガ創出につながる斬新なアプリ・Webサービス企画、受賞企画には開発資金最大5000万円が提供</a>;
last accessed: 20220701; from 20220609;<br/>
<br/>
<b>
    2022.06.08 23:00<br/>
</b>
2022-06-08T23:00<br/>
<br/>
<b>
KEYPHRASE:<br/>
</b>
JUMP COMICS APP DEV CONTEST 2022;<br/>
MANGA COMICS APP+WEB SERVICE PROJECT<br/>
WINNING PROJECT: DEV CAPITAL <b>50Millon YEN (MAX)</b><br/>
where: <b>50Millon YEN</b> : <b>25Millon PHP (approx)</b><br/>
<br/>
<b>
    「少年ジャンプ」は、新しい作品創出の基地です。創刊以来50年以上もの間、クリエイターが集まり、成長を促し、読者と共に新作を人気作に導くエコシステムが機能してきました。
</b><br/>
<br/>
SHOUNEN JUMP (COMICS): Simulang pook kung saan inilalabas ang mga bagong LIKHA. Simula nang naglathala, sa loob ng higit sa 50 taon, nagsama ang mga CREATOR (MANLILIKHA), ipinairal ang paglaki nito, kasama ang mga Mambabasa, bumuo ng ECO-SYSTEM upang gabayan ang mga bagong LIKHA na maging tanyag.<br/>
<br/>
<b>keyphrase:</b> increase <b>know-how</b> in among others: <b>drawing techniques</b>, <b>reading&writing</b><br/>
reminder#1: Use of <b>RIFLE</b> requires such <b>know-how</b> to <b>CORRECTLY IDENTIFY and CLASSIFY target object</b><br/>
--> where: <b>IDENTIFY and CLASSIFY</b> : <b>SCIENCE (AGHAM)</b><br/>
--> where: <b>target object</b> : <b>ANIMAL</b>, <b>Teroristang Komunista</b>, et cetera<br/>
<br/>
reminder#2: <b>Teroristang Komunista/MANLOLOKO group</b> misuses <b>wireless broadcasting</b> to attack <b>target</b><br/>
--> where: <b>target</b> with <b>RIFLE</b> is intentionally provoked to <b>ATTACK</b><br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			In Switzerland, a household may carry <b>RIFLES</b> as part of <b>self-defense</b>;<br/>
			<br/>
			Self-defense <b>CAN</b> be executed even with <b>EMPTY HANDS</b><br/>
			where: <b>EMPTY HANDS</b> : <b>KARATE; 空手; からて</b><br/>
			<br/>
			observed: <b>KARATE</b> techniques + <b>WEAPON</b>, e.g. <b>KATANA (日本刀; Japanese Sword)</b>, <b>INCREASES STRENGTH</b><br/>
			<br/>
			--> <b>paalala#1:</b> Kabilang sa <b>pagtatanggol</b> sa sarili ang pagpatay sa <b>Mananalakay</b> sa kanyang sariling bahay.<br/><br/>		
			where: <b>Mananalakay</b> : <b>MANLOLOKO/budol-budol/carnapper/smuggler/cybercriminal/Teroristang Komunista group</b><br/>
			<br/>
			--> <b>paalala#2:</b> <b>WALANG PANANABIK</b> (EXCITEMENT) <b>sa PAGPATAY</b>;<br/>
			<br/>
			<b>Additional Reminders:</b><br/>
			<b>reminder#1:</b> file: incident reports with Police as part of <b>due process</b>;<br/>
			<b>reminder#2:</b> prepare: to execute own <b>RECOMMENDED ACTIONS</b>;<br/>
			where: <b>RECOMMENDED ACTION</b> : PUKSAIN -> TERORISTANG KOMUNISTA<br/>
			<br/>
			<b>Additional Notes (Lessons-learned from ITALIA):</b><br/>		
			1) <b>Chief Prosecutor</b> against <b>MAFIA (MAGULONG SAMAHAN)</b> killed;<br/>
			--> <b>OUTPUT:</b> Prosecution CASE continues; MAFIA still NOT ENDED;<br/>
			<br/>
			--> <b>paalala:</b> Tinuturi ng mga <b>Teroristang Komunista</b> na sila ang <b>"MAFIA/YAKUZA"</b> sa Pinas<br/>
			--> <b>Teroristang Komunista</b> :  <b>MANLOLOKO</b>/budol-budol/carnapper/smuggler/cybercriminal/Teroristang Komunista group<br/>
			<br/>
			--> Higit na <b>MABILIS</b> at <b>WASTO</b> na <b>PUKSAIN</b> ang mga ito ng <b>Tagapagpatupad ng BATAS</b>, sa halip na idaan sa <b>HUKOM</b><br/>
			--> <b>paalala</b>: Habang inaayos pa lamang ang mga ihahain panlaban sa kanila, ginagamitan na <b>TAYO</b> ng mga <b>PANLOLOKONG INGAY</b> at <b>PISIKAL na PANANAKIT</b> sa pamamagitan ng <b>wireless broadcasting technology</b>.<br/>
			 
			 <br/>

			<b>Example#1 Physical Attacks causing Injury to Target:</b><br/>
			<b>Target:</b> SYSON, MICHAEL B.<br/>			 
<br/>
identified: <b>Teroristang Komunista Members</b> as <b>ATTACKERS</b><br/>
1) <b>Ramon Syson</b>, younger brother of father Dr. Pedro Syson<br/>
2) <b>Ryan Syson</b>, eldest son Ramon Syson<br/>
<br/>
Both Knees (datetime stamp: 2020-10-15T13:34)<br/>
			 <table>
			 <tr>
			 <td>
					<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202112/20201021_075857LEFTOccurred20201015T1334.jpg">
					<br/>
					LEFT Knee
			</td>
			 <td>
					<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202112/20201021_075812RIGHTOccurred20201015T1334.jpg">
					<br/>
					RIGHT Knee
			</td>			
			</tr>
			</table>			 

<br/>
			<b>Example#2 Noise Pollution via <b>RADIO FREQUENCY</b><br/> 
			previously set to <b>STATIC</b>:</b><br/>
			<b>Target:</b> SYSON, MICHAEL B.<br/>			 
			<br/>
			identified: <b>Teroristang Komunista Members</b> as <b>ATTACKERS</b><br/>
1) <b>Tyrone Tang</b>, basketball player<br/>
2) <b>Keith Haw</b>, friend and classmate of <b>Tyrone Tang</b><br/>
<br/>
Both are classmates of <b>SYSON, MICHAEL B.</b> @<b>XAVIER SCHOOL</b>, San Juan, Greenhills;
			
			 <table>
<tr>
			 <td>
			 <br/>
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/miniSpeakerRadioApproxSize6x6cm.jpg"><br/>
				Approx size: 6x6cm
			</td>
			<td>
			</td>
			</tr>			
			</table>		
			<br/>	 
<b>CAUSE:</b> After investigation, <b>Teroristang Komunista</b> group was verifying via CRIMINAL ACTIONS classified as <b>HARASSMENT/EXTORTION</b>, et cetera to identify among others:<br/>
<br/>
1) <b>LOCATION</b> of smuggled vehicles<br/>
2) <b>Police Units</b> who caused DELAY in their <b>smuggling ACTIONS</b><br/>

		</td>
	</tr>
</table>
<br/>
<br/>
<b>Paalala</b>) verified: <b>Bureau of Customs (BOC)</b> NEWS<br/>
--> 1) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/">https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/</a>; last accessed: 20220322<br/>
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
keyphrase: <b>58.55Million PHP</b> used for <b>YABANG</b>,<br/> 
--> instead of increasing <b>know-how</b> in among others: <b>drawing techniques</b>, <b>reading&writing</b>

<h3>3) Continued with HEALTH・Security Defense Force</h3>
<h4>3.1) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.medscape.com">MEDSCAPE.COM</a></h4>
<h5>
3.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.medscape.com/viewarticle/975852?src=mkm_ret_220629_mscpmrk_icymi-ous_int&uac=169845BZ&impID=4375646&faf=1">It's Official. Vitamins Don't Do Much for Health</a>;<br/>
last accessed: 20220707; from 20220630
<br/><br/>

<blockquote class="usbongBlockquote">
<p>
It's Official. Vitamins Don't Do Much for Health</b><br/>
</p>
</blockquote>

<br/>
Tinuwid na: Hindi gaanong gumagawa ang mga Bitamina tungo sa Kalusugan<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
F. Perry Wilson, MD, MSCE
</p>
</blockquote>
<br/>

F. Perry Wilson, MD (Manggagamot), MSCE (Master ng Agham sa Paglaganap ukol sa Panggagamot)<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    Disclosures<br/>
</p>
</blockquote>

<br/>
Mga pag-amin<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    June 22, 2022
</p>
</blockquote>

<br/>
2022-06-22<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    Vitamins. If you are like the majority of American adults, you took a vitamin or supplement recently. Over-the-counter sales of these products in this country amount to over $30 billion a year. That's more than the market for statins — and vitamins aren't covered by insurance.
</p>
</blockquote>

<br/>
Bitamina; Kung katulad ka ng karamihan ng mga matatandang (adult) Amerikano, kumuha ka ng bitamina o supliment kamakailan. Sa isang taon, higit sa 30USD Bilyon ang benta (SALE) ng mga ito sa over-the-counter (nabibili sa tindahan kahit walang reseta). Higit pa iyan sa Mamimili (market) ng statin (gamot upang magpababa ng TABA, kabilang ang triglyceride (Sa gitna ng TABA) at cholesterol) sa dugo; at hindi saklaw ng insurance (tagapagtanggol sa sakuna) ang bitamina.<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    For there to be a $30 billion market, there must be some pretty convincing evidence that vitamin supplements work to improve health, right?
</p>
</blockquote>


<br/>
Kung may 30USD Bilyong Mamimili, kailangan ng nakapagsasang-ayon na patunay (ebidensya) na tumutulong nga ang mga bitamina bilang supliment upang maiayos ang kalusugan, hindi ba?
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    Well, in the most thorough meta-analysis to date, researchers from Kaiser-Permanente crunched the numbers from virtually every randomized trial of vitamin supplements in adults to conclude that, basically, they do nothing.<br/>
</p>
</blockquote>


<br/>
Sa pinakabagong meta-analysis (pagsusuri ng mga Balita ukol sa Balita), pagkatapos gawin ang bilangan ng halos (virtual) bawat isang random na paglilitis ng mga bitaminang supliment, tinapos ng mga tagapagsaliksik mula Kaiser-Permanente na WALANG TULONG ang mga ito.
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    Notable findings for the harm analysis included evidence that vitamin A use might increase the risk for hip fracture, that vitamin E use might increase the risk for hemorrhagic stroke, and that vitamin C or calcium use might increase the risk for kidney stones.
</p>
</blockquote>

<br/>
Kabilang sa mga maisusulat na natuklasan ukol sa pagsusuri ng masamang dulot (ng mga bitamina) ang mga ito: patunay na maaaring pataasin ng bitamina A ang risk (panganib) ng BALE sa Balakang, na maaaring pataasin ng bitamina E ang risk (panganib) ng stroke sa pagdudugo, at maaaring pataasin ng bitamina C o Calcium ang panganib ng bato sa BATO (kidney).
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    Why are the observational data that show lower vitamin levels linked to worse outcomes so powerful, and the randomized trial data of supplementation so weak? This is classic confounding. Basically, healthier people have higher vitamin levels, and healthier people have less cardiovascular disease and cancer. Vitamin levels are a marker of overall health, not a driver of overall health.
</p>
</blockquote>

<br/>
Bakit matinding ipinakikita ng mga Namamasdang Datos na may ugnayan ang mababang nibel ng bitamina sa malubhang kinahinatnan, at mahina naman kapag ginawa ang random na paglilitis ng Datos ng supliment? Nakapagtataka ito. Sa panimula, matataas ang nibel ng bitamina ng mga malulusog na tao, at mababa ang kanilang sakit na may kinalaman sa cardiovascular (Daluyan ng Dugo sa Puso) at cancer. Puna ng Pangkalahatang Kalusugan ang nibel ng bitamina, hindi ito ang nag-uudyok ng Pangkalahatang Kalusugan.
<br/><br/>

<blockquote class="usbongBlockquote">
<p>
    Taking a vitamin, though it is a small act, is nevertheless an act of self-care — a moment that we take for ourselves and ourselves alone — a commitment to try to be healthy.
</p>
</blockquote>

<br/>
Bagama't isang maliit na pagkilos ang pagkuha ng bitamina, isa itong pagkilos ng pag-alaga sa sarili; isa itong saglit na tayo lamang at ang sarili lamang natin ang gagawa upang pagpasiyahang subukang maging malusog.
<br/><br/>
<blockquote class="usbongBlockquote">
<p>
    A brief moment of positivity in the morning may not reduce heart attacks or cancer rates, but it may have benefit nonetheless.
</p>
</blockquote>

<br/>
Bagama't hindi makapagpapababa ng rate (pangyayari) ng mga pagsalakay sa puso o cancer, may tulong din naman kahit papaano ang isang saglit ngLTRASOUND THERAPY MABUTI (POSITIBO) sa umaga.
<br/><br/>

<blockquote class="usbongBlockquote">
<p>
    F. Perry Wilson, MD, MSCE, is an associate professor of medicine and director of Yale's Clinical and Translational Research Accelerator. His science communication work can be found in the Huffington Post, on NPR, and here on Medscape. He tweets @fperrywilson and hosts a repository of his communication work at www.methodsman.com.
</p>
</blockquote>

<br/>
Propesor (Mangangaral) ng Gamot at Direktor (Pinuno) ng Pabilisin ang Panggagamot at Pagsasalin ng Pananaliksik sa YALE: F. Perry Wilson, MD, MSCE; Matatagpuan ang kanyang gawaing hanap-buhay ukol sa science communication (pagpapahayag gamit ang agham) sa Huffington Post, NPR, at dito sa Medscape. Gumagamit siya ng tweet @fperrywilson, at ng repository (lalagyan) ng kanyang gawaing hanap-buhay ukol sa pagpapahayag sa <a class="webServiceLink" target="_blank" href="https://www.methodsman.com">www.methodsman.com</a>.
<b>
</h5>

<h4><b>Sanggunian:</b></h4>
<h5>
1) <a class="webServiceLink" target="_blank" href="https://www.google.com"> GOOGLE SEARCH ENGINE</a>; TRANSLATE<br/>
2) <a class="webServiceLink" target="_blank" href="https://www.edrdg.org/cgi-bin/wwwjdic/wwwjdic?1F"> https://www.edrdg.org/cgi-bin/wwwjdic/wwwjdic?1F</a>; last accessed: 20220630
</h5>


<h4><b>Dagdag:</b></h4>
<h5>
LIFESTYLE CHANGE = Pagbabago ng Pamumuhay
</h5>

<h4><b>Paalala:</b></h4>
<h5>
    Isalin ang mga pangalan na may kinalaman sa Panggagamot,<br/>
    --> mula Wikang Ingles tungo sa Wikang Hapon,<br/>
    --> at mula Wikang Hapon tungo sa Wikang Filipino<br/>
</h5>


<h4>3.2) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">ASAHI.COM (NEWSPAPER)</a></h4>
<h5>
3.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQ6P5KPJQ6PPTLC00T.html?iref=comtop_Tech_science_03">サイバー攻撃受けた徳島の病院、22日から通常診療　電子カルテ復旧</a>;<br/>
last accessed: 20220707; from 20220623
<br/><br/>

<blockquote class="usbongBlockquote">
<p>
サイバー攻撃受けた徳島の病院、22日から通常診療　電子カルテ復旧</b><br/>
</p>
</blockquote>

<br/>
Dumanas ng CYBER ATTACK and Pagamutan ng TOKUSHIMA (sa Bansang Hapon),<br/>
Mula ika-22, balik-karaniwang gamutan na ulit;<br/>
Naibalik ang mga DIGITAL CHART;<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
吉田博行2022年6月21日 19時00分</b><br/>
</p>
</blockquote>

<br/>
YOSHIDA, HIROYUKI; 2022-06-21; 19:00
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
ランサムウェア（身代金ウイルス）によるサイバー攻撃を受けた徳島県鳴門市の医療法人久仁会「鳴門山上病院」は21日、電子カルテなどが復旧したとして、22日から通常診療を再開すると発表した。</b><br/>
</p>
</blockquote>

<br/>
Sinalakay ng CYBER ATTACK na RANSOMWARE (VIRUS na maaayos kapalit ng pera), ang "Pagamutan ng NARUTO YAMAGAMI" ng Samahan ng Manggamot ng KUNI, sa Lungsod NARUTO ng TOKUSHIMA-KEN; Nitong ika-21, naibalik ang mga DIGITAL CHART, atbp; Ipinahayag din na muling balik-karaniwan na ang Pagamutan mula ika-22.
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
19日に受けたサイバー攻撃で、電子カルテにアクセスできなくなっていた。再診患者の受け入れや入院患者の治療に支障はなかったが、20日から新規患者の受け入れを停止していた。</b><br/>
</p>
</blockquote>

<br/>
Nitong ika-19, hindi na sila makagawa ng ACCESS sa mga DIGITAL CHART, dahil sa CYBER ATTACK. Tumigil ang pagtanggap ng mga bagong may-sakit mula ika-20, bagama't hindi naman naging baldado ang kanilang pagtanggap ng mga bumabalik na MAY-SAKIT at ang mga ginagamot na ipinasok sa Pagamutan.
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
病院は被害を受けたシステムの復旧作業を進め、21日に「一部の安全な端末で電子カルテ、院内ネットワーク稼働が可能になる」と発表。22日から新規患者の受け入れを含め、可能な範囲で通常診療を再開するという。</b><br/>
</p>
</blockquote>

<br/>
Ipinahayag ng Pagamutan ang pagtuloy sa balik-gawaan ng kanilang sistemang dumanas ng pagtama, at ng ika-21, "Maaari nang pakilusin (maghanap-buhay) ang network sa loob ng Pagamutan, at gamit ang isang bahagi ng ligtas na mga kompyuter, may ACCESS na sa mga DIGITAL CHART". Sinasabing naibalik ang pagbukas sa karaniwang gamutan gamit ang ligtas na bahagi, kabilang na ang paglalagay ng mga bagong may-sakit mula ika-22.
<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
また県によると、病院からは「今のところ個人情報の流出は確認されていない」と報告があったという。県警が、ウイルスの侵入経路などを調べている。（吉田博行）</b><br/>
</p>
</blockquote>

<br/>
Dagdag pa, ayon sa pook KEN, sinasabing may report mula sa Pagamutan: "Hindi pa natitiyak kung may dumaloy pailabas ng mga pansariling (pribadong) BALITA sa kasalukuyan." Sinisiyasat na ng Pulis ng pook KEN, ang pinasok na daan ng VIRUS, atbp. (YOSHIDA, HIROYUKI)
<br/>
<br/>

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