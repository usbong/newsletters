<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220831; from 20220829
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

	<base href="http://localhost/usbong_newsletters/" target="_blank">

<!-- //edited by Mike, 20220325
	<base href="http://store.usbong.ph/" target="_blank">
-->

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
	August 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers・Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, <b>VALUE</b> of <b>SYSTEM EFFICIENCY</b><br/>
<br/>
--> observed: using <b>GAINED TIME</b>, <b>INFORMATION</b> CAN already be added<br/>
--> from the <b>Index Card</b> to the <b>Computer Database</b><br/>
--> <b>Example INFORMATION:</b> barangay, Senior Citizen Card Number<br/>
<br/>
--> This <b>ACTION</b> assists with the printing of the <b>Acknowledgment Form</b>;<br/>
--> where: <b>PAID SERVICES</b> and <b>ITEMS</b> are auto-written by the <b>COMPUTER</b> in a <b>LIST</b><br/>
--> <b>Example SERVICES:</b> X-RAY, LABORATORY<br/>
--> <b>Example ITEMS:</b> ARM SLING, KNEE IMMOBILIZER<br/>
--> adds: the <b>Acknowledgment Form</b> is given with the <b>Official Receipt (OR)</b><br/>
--> where: <b>OR</b> is <a class="webServiceLink" target="_blank" href="https://www.bir.gov.ph">Bureau of Internal Revenue (BIR)</a>-approved<br/>
--> This is due to <b>handwritten text</b> using the <b>OR</b> appears <b>UNCLEAR</b><br/>

<br/>
<img width="80%" src="assets/images/newsletter/202208/exampleAcknowledgmentFormV20220831.jpeg">

<h3> Gained TIME from System Efficiency is REUSED<br/> 
to FURTHER increase Gained TIME via System Efficiency</h3>

<b>Output:</b> GINHAWA<br/>

--> observed: people who are <b>NOT GINHAWA</b> cause another to be also so;<br/>
--> where: <b>CAUSE</b> due to <u>insufficent</u> <b>TIME</b>;<br/> 
--> where: <b>TIME</b> can be classified as <b>MONEY</b><br/>
<br/>
--> <b>Example:</b><br/> 
Request to NOT verify <b>Medical Prescription</b> to QUICKLY receive <b>Medicine Item</b><br/>
<br/>
<b>reminder#1:</b> <b>Medical Prescription</b> contains <b>INFORMATION</b><br/> 
--> <b>Examples:</b> patient name, last visit, prescribed medicine tablet count/grams;<br/>
<br/>
observed: select patients request <b>family member</b> to buy medicine item for them;<br/>
--> where: <b>family member</b>'s LIST of TASK has increased to be <b>NOT GINHAWA</b><br/>
<br/>
<b>reminder#2:</b> <b>SPEED-UP</b> of patient's <b>DEATH</b> caused by increasing <b>COST</b><br/>
--> where: <b>COST</b> classified with <b>TIME</b> and <b>MONEY</b><br/>
<br/>
verified: <b>NOISE POLLUTION</b> with <b>PHYSICAL INJURY</b> to be from the <b>MANLOLOKO group</b><br/>
--> <b>OUTPUT:</b> speed-up of <b>DEATH</b> and increase in <b>COST</b><br/> 
--> where: <b>MANLOLOKO group</b> includes among others:<br/>
--> <b>budol-budol/carnapper/smuggler/cybercriminal/Teroristang Komunista</b>
<br/>
<br/>
observed: continuous wireless broadcasting of <b>NOISE POLLUTION</b>;<br/>
<br/>
<b>Examples:</b> "TANGA", "TATANGA-TANGA", "'TANGINA", "BOBONG PULIS",<br/> 
"PEKPEK/PEPE", "PATAYIN", "ESTUPIDO", "BABOY", "HINGA";<br/>
<br/>
--> adds: <b>UNSOLICITED</b> <u>breathing interference</u> causes <b>PHYSICAL STIMULATION</b><br/>
--> due to among others: <b>INSUFFICIENT OXYGEN IN BRAIN</b> via blood stream<br/>
--> where: <u>breathing interference</u> caused by among others:<br/> 
--> <b>"HINGA"</b> classified: as <b>NOISE POLLUTION</b><br/>
--> keyphrase: <b>UNSOLICITED</b><br/>
<br/>
<b>EXECUTED ACTIONS:</b> filed: incident reports with <b>Law Enforcement</b>;<br/>
<b>Examples:</b><br/>
1) <b>Philippine National Police (PNP)</b><br/>
<br/>
1.1) <b>Anti-cybercrime Group (ACG): Women and Children Cybercrime Protection Unit</b><br/>
--> <a class="webServiceLink" target="_blank" href="mailto:pnp.acg.wccpu@gmail.com">pnp.acg.wccpu@gmail.com</a><br/>
<br/>
1.2) <b>CRIMINAL INVESTIGATION AND DETECTION GROUP (CIDG)</b><br/>
--> <a class="webServiceLink" target="_blank" href="mailto:cidgnhqcrmc@gmail.com">cidgnhqcrmc@gmail.com</a><br/>
<br/>
2) <b>Office of Public Safety and Security (OPSS: Marikina City) Team</b><br/>
--> <a class="webServiceLink" target="_blank" href="mailto:opss@marikina.gov.ph">opss@marikina.gov.ph</a><br/>
<br/>
reminder: <b>EMERGENCY NUMBER</b> in MARIKINA CITY: <b>161</b><br/>
<br/>
TO-DO: -add: Cainta, Rizal
<br/>
<br/>
TO-DO: -add: COST of STROKE; based on PhilHealth coverage;<br/>
--> remembers: COST higher than coverage for CANCER;
<br/>
<br/>
</h5>

<h3>2) Continued with HEALTH・Security Defense Force</h3>
<h4>2.1) shared: KNOW-HOW and Lessons-learned from <b>WORK</b></h4>
<h5>
<b>MANLOLOKO group</b> <b>LOST</b> > 50 Million PHP of smuggled luxury/non-luxury vehicles, agriculture products, et cetera after being caught by Police<br/>
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
keyphrase: <b>58.55Million PHP</b> used for <b>YABANG</b><br/> 
<br/>
--> <b>ADDITIONAL OUTPUT#1:</b> increase in <b>NOISE POLLUTION</b> <br/>
--> identified: to be caused by growing <b>MANLOLOKO group</b> <br/>
--> where: <b>MANLOLOKO members</b> are <b>TAMAD</b>, i.e. DO NOT VALUE HONEST WORK;<br/>
--> keyphrase: <b>QUICK MONEY</b><br/>
<br/>
--> <b>MANLOLOKO group</b> now <b>TARGETS</b> people with <b>"PROMISES"</b>;<br/> 
--> where: <b>TARGET</b>'s received <b>VALUE</b> of item is <b>LESS THAN</b> that of the <b>EXCHANGE</b>;<br/>
--> reminder: <b>NO NEED</b> to even expect <b>MANLOLOKO group</b> to give item<br/> 
--> whose: <b>VALUE</b> is <b>GREATER THAN</b> what the <b>MANLOLOKO group</b> shall receive;<br/> 
--> keyphrase: <b>INGGIT</b><br/>
<br/>
--> <b>ADDITIONAL OUTPUT#2:</b><br/>
--> <b>Example#1:</b> MOSC PT Unit Member <b>DIED</b>; keyphrase: <b>Ear, Nose, Throat (ENT)</b>;<br/>
--> <b>Example#2:</b> MOSC Orthopedic Surgeon Member suffered <b>STROKE</b><br/> 
--> to be <b>NON-PRACTICING</b> (previously trained @UP INTRAMED)<br/>

<h3>NO JOKE</h3>

<br/>
TO-DO: -add: "secret"<br/>
<br/>
TO-DO: -add: NOTE from SYSON, MICHAEL B.<br/>
<br/>
--> observed: LIFE DELAYS caused by this Manloloko group, where: WORK as OFW in I.T. COMPANY in JAPAN, STOPPED, WORK as Teacher @UNIVERSITY, STOPPED<br/>
--> adds: INCOME HIGH or LOW causes INGGIT;<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

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
continued: with <b>AUTOMATIC</b> transferring copies of <b>Database files</b> from <b>MAIN Computer Server</b> to available <b>Multiple Computer Servers</b><br/>
--> where: <b>Computer Server</b> : <b>combination of Operating Systems (OS)</b>, e.g. <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu</a>, <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ph/">Windows 7</a>;<br/>
--> where: <b>Database files</b> : <b>Saved Work</b><br/>
--> <b>Example Computer Instructions</b> written in <b>Bash Shell</b><br/> 
					<video width="416" height="312" controls>
		  			<source src="assets/images/videos/usbongKmsDatabaseSavedWorkReminderDeleteExcessDBFiles20220714T1620.mp4" type="video/mp4">
		  			Your browser does not support the video tag.
					</video><br/>	
			<br/>

</h5>

<h4>2.1) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">ASAHI.COM (NEWSPAPER)</a></h4>
<h5>
2.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQ776T1ZQ76UTFL02M.html?iref=comtop_Tech_science_02">潰瘍性大腸炎の治療に「ミニ臓器」　患者本人の細胞から作出　世界初</a>;<br/>
last accessed: 20220708
<br/><br/>

<blockquote class="usbongBlockquote">
<p>
    潰瘍性大腸炎の治療に「ミニ臓器」　患者本人の細胞から作出　世界初
</p>
</blockquote>
<br/>

Una sa Daigdig: MINI Lamang LALAGYAN;<br/>
Binuo mula sa Manipis na Balot (CELL) ng May-sakit<br/>
sa panglulunas ng Nasusunog na Pakiramdam<br/>
ng Malaking Bahagi ng Tiyan (LARGE INTESTINE)<br/>
na may Sakit sa Pagpisa (ULCER)<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    有料会員記事
</p>
</blockquote>
<br/>

Sulatin sa nagbabayad na kasapi<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    野口憲太2022年7月8日 7時00分
</p>
</blockquote>
<br/>

NOGUCHI, KENTA; 2022-07-08T07:00<br/>

<br/>
<blockquote class="usbongBlockquote">
<p>
東京医科歯科大学は7日、大腸の粘膜に炎症が起こる難病「潰瘍（かいよう）性大腸炎」の患者1人に対して、患者本人から採取した細胞を増やして腸の「ミニ臓器（腸上皮オルガノイド）」を作り、患部に移植したと発表した。この大腸炎に限らず、治療のためにオルガノイドを患者に移植したのは、世界で初めてという。
</p>
</blockquote>
<br/>

Ika-7, ipinahayag ng Malaking Paaralan (Pamantasan) ng TOKYO sa Maparaang Panggagamot kabilang ang Ngipin, na nailipat sa May-sakit ang binuong MINI Lamang LALAGYAN (Balat ng Tiyan na ORGANOID) mula sa pagdagdag ng ginagamit niyang Manipis na Balot, upang bigyang-lunas ang "Sunog sa Malaking Bahagi ng Tiyan na may Sakit sa Pagpisa (ULCER)"<br/>
<br/>
Una sa daigdig; inilapat sa May-sakit ang ORGANOID upang bigyang-lunas hindi lamang ang Nasusunog na Pakiramdam sa Malaking Bahagi ng Tiyan.<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    　潰瘍性大腸炎は、大腸の粘膜で慢性的な炎症が起きる難病で、腹痛や下痢、血便などの症状が続く。
</p>
</blockquote>
<br/>

Sunog sa Malaking Bahagi ng Tiyan na may Sakit sa Pagpisa (ULCER): Mahirap na sakit na nagaganap dulot ng Mabagal na Nasusunog na Pakiramdam, sa Malagkit na Takip (MEMBRANE) ng Malaking Bahagi ng Tiyan (LARGE INTESTINE); Tuluy-tuloy na karamdaman na may dugo sa dumi, pagtatae, pananakit ng tiyan, atbp<br/>
<br/>

<blockquote class="usbongBlockquote">
<p>
    国内には22万人の患者がいると推計される。薬で炎症を抑える治療が一般的だが、傷ついた粘膜が治らないと、大腸を摘出する手術が必要になる場合もある。
</p>
</blockquote>
<br/>

Sa loob ng Kaharian, nasusukat na may 220K ang May-sakit na ito. Bagama't karaniwan ang paggamit ng GAMOT upang malunasan ito sa pamamagitan ng pangangasiwa (CONTROL) ng Nasusunog na Pakiramdam, kapag hindi nalunasan ang nasugatang
Malagkit na Takip, nangyayari rin ang pangangailangang ilabas ang Malaking Bahagi ng Tiyan gamit ang Paraan ng Kamay (SURGERY).
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    　東京医科歯科大の臨床研究チ…
</p>
</blockquote>
<br/>
Ang pangkat ng mananaliksik ng TOKYO sa Maparaang Panggagamot kabilang ang Ngipin...<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    この記事は有料会員記事です。残り362文字有料会員になると続きをお読みいただけます。
</p>
</blockquote>
<br/>
Sa nagbabayad na kasapi ang sulating ito. May natitira pang 362titik. Kapag naging nagbabayad na kasapi na po kayo, maaari niyo na pong mabasa ang kasunod.<br/>
<br/>

<b>Sanggunian:</b><br/>
    GOOGLE SEARCH ENGINE; TRANSLATE<br/>
    Japanese-English Dictrionary (JED) Android Application<br/>
    PLECO Chinese-English Dictionary Android Application<br/>
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
