<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220306; from 20220305
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
	<base href="http://localhost/usbong_newsletters/" target="_blank">
<!-- //edited by Mike, 20220218
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
		<b>防衛大学校</b> (bouei daigakkou; Defense Force University)<br/> 
		<b>Past Examinations</b>; <b>Reminder:</b><br/>
		"Ipaubaya ang aking katawan sa Panginoon."<br/>		
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	March 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, <a class="webServiceLink" href="https://www.usbong.ph/excel" target="_blank">Usbong Computer Software Automation</a> applied @OFFICE Workplace to auto-generate Weekly Health Maintenance Organization (HMO) Reports<br/>
<br/>
<b>Example Work Output:</b> 
<div>
		<video width="416" height="312" controls>
		  <source src="assets/images/videos/exampleWeeklyHMOReportWithComputerAutomationAssistance20220302T1459.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video><br/>	
</div>
<br/>
Patient Names, et cetera in video set to be unreadable;<br/>
<b>Output Design Format</b> based on Template<br/>
<b>Template:</b> print-ready (size A4 paper)<br/>
<b>Softcopy of Report</b> also auto-generated<br/>
<br/>
<b>Output Notes:</b><br/>
Each Medical Doctor with HMO transaction has a Report,<br/> 
PLUS Physical Therapy Unit's HMO Report<br/>
<br/>
--> reminder#1: <b>Service Desk Industry</b>: Billion United States Dollar (USD) Industry<br/>
--> reminder#2: <b>Business Process Outsourcing (BPO) Industry</b>: Billion USD Industry<br/>
--> where: <b>BPO Industry</b> : top private sector employer in the Philippines<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			The movie and video games industries are also Billion USD Industries. However, from history, we learn that outputs via continuous production do NOT immediately cause: <b>Income > Expenses</b>;<br/>
			<br/>
			The Family Computer as product generated <b>Income > Expenses</b> to cause a new version, i.e. the Super Family Computer.<br/>
			<br/>
			However, select add-on hardware and software services, e.g. <b>Family Computer Network System with Satellite Online Service</b>, were SHUTDOWN due to <b>Income < Expenses</b>;<br/>
			<br/>
			observed: that when investment on expensive equipment, e.g. wireless broadcasting technology, does NOT cause <b>Income > Expenses</b>, equipment is reused for <b>criminal, i.e. illegal, actions</b>, e.g. noise pollution, tax-evasion<br/>
			<br/>
			<b>reminder:</b> Quarterly Percentage Tax on Amusements, e.g. Karaoke, is @18% of Gross Sales<br/>
			<br/>			
			With <b>Income < Expenses</b> from Sales, and with investment on equipment classified as LOSS, <b>QUICK MONEY</b> to get Return of Investment (RoI) becomes the focus.<br/>
			<br/>
			<b>松下電器 (matsushita denki; PANASONIC)</b> founder, <b>松下幸之助 (Matsushita, Kounosuke)</b>, reminds us that when we start to think about quickly getting money, actions become dirty; People classified to be Mandurugas increases.<br/>
			<br/>
			<b>Mandurugas</b> = <b>Masama, e.g. budol-budol/manloloko/carnapper/cybercriminal/communist terrorist group</b><br/>
			<br/>
			<b>reminder:</b> Increase in Tamad causes Increase in Masama.<br/>
			<br/>
			<b>Recommended Action:</b><br/>
			TO-DO: -update: this			
		</td>
	</tr>
</table>
<br/>
--> continued: with weekly paper transfer<br/>
--> observed: action causes Industry need to regularly update delivery system,<br/>
--> which includes system parts, e.g. <b>ROADS</b>, <b>PEDESTRIAN LANES</b>;<br/>
<br/>
--> observed: items, e.g. FOOD SUPPLY, also use such delivery system<br/>
--> <b>Examples:</b> Fresh Milk; Fruits<br/>
--> <b>Reminder:</b> Such physical items for human digestion do NOT yet transfer via computer digital networks<br/>
<br/>
--> reminder: use of computer digital networks causes increased <b>scale</b>;<br/>
--> where: <b>scale</b> : <b>DAMAGE</b> via stolen <b>INFORMATION</b><br/>
--> where: <b>INFORMATION</b> classified to be exchanged for MONEY<br/>
--> Example: <b>INFORMATION</b> KNOW-HOW of target vehicle's parked location for <b>carnapping actions</b><br/>
--> <b>INFORMATION</b> stolen via <b>Unauthorized Access</b> to CCTV Camera inside household<br/>
--> where: CCTV = Closed-circuit Television (CCTV);<br/>
<table>
	<tr>
		<td>
			Example: <b>Bubo Bubo</b> Android Application (with Digital Video Recorder (DVR) + CCTV Camera System)<br/>
		</td>
		<td>
<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202112/buboBuboAndroidDVRCCTVHalimbawaFromMApkPureDotCom.png">	
		</td>		
	</tr>
</table>
<br/>
--> adds: IF <b>INFORMATION</b> NOT successfully STOLEN, carnapper/Budol-Budol/Manloloko/Teroristang Komunista group executes <b>NOISE POLLUTION</b><br/>
--> where: <b>NOISE POLLUTION</b> causes <b>DELAYS</b> in system execution @Accounting Unit, e.g. @partner Sta. Lucia Health Care Center (SLHCC)<br/>
<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		observed: increased NOISE POLLUTION became noticeable in the Year 2017 continuing to 2018, even to the current Year 2022, with select Teroristang Komunista members identifying themselves due to <b>YABANG</b> and <b>MISTAKE</b>:<br/>
	Members include among others:<br/>
	<br/>
--> <b>1)</b> SYSON, RAMON (younger brother of DR. SYSON, PEDRO)<br/>
--> <b>2)</b> SYSON, RYAN (son of SYSON, RAMON)<br/>
--> <b>3)</b> SYSON, JOAN (daughter of SYSON, RAMON)<br/>
--> <b>4)</b> HAW, KEITH (Xavier School, San Juan, Greenhills Classmate)<br/>
--> <b>5)</b> TANG, TYRONE (Xavier School, San Juan, Greenhills Classmate)<br/>
--> <b>6)</b> VILLARIN, RAMON (former Ateneo de Manila University President)<br/>
	<br/>
--> continued: with observation of identified Teroristang Komunista members' actions<br/>
--> <b>reminder:</b> <b>GUILT</b> exists due to continued misuse of wireless broadcasting technology whose <b>NOISE POLLUTION</b> reaches multiple barangays in Marikina City<br/>
--> observed: Teroristang Komunista members had <b>LOST ITEMS</b> classified to be exchanged for <b>MONEY</b>;<br/>
<br/>
	--> verified: Bureau of Customs (BOC) NEWS<br/>
		--> 1) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/">https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/;</a><br/> 
		last accessed: 20220322
		<br/>
		| <b>BOC Destroys 21 Smuggled Vehicles</b><br/>
		| Posted on June 18, 2021<br/>
		--<br/>
		The Bureau of Customs (BOC) led the simultaneous destruction of twenty-one (21) smuggled motor vehicles worth P58.55 million on Friday, June 18, 2021, in Manila and Cagayan de Oro.<br/>
		--<br/>
		--> 2) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-reports-efforts-against-smuggling-of-agricultural-products/">https://customs.gov.ph/boc-reports-efforts-against-smuggling-of-agricultural-products/</a>; last accessed: 20220322<br/>
		| <b>MICP Seizes php 9M Worth of Smuggled Agricultural Products</b><br/>
		| Posted on October 15, 2021<br/> 
		--<br/>
		BOC-IG recorded a total estimated value of 545.06 million worth of seized smuggled agricultural products. In terms of value, the following are the top three commodities: (1) rice amounting to 206.80 million (2) onions amounting to 190.48 million, and (3) garlic amounting to Php 55 million.<br/>
		--<br/>
		<b>Actions:</b><br/>
		1) <b>file:</b> incident reports with Police;<br/>
		2) <b>Ignore</b>, if NOT <b>endure</b>, <b>NOISE POLLUTION</b>;<br/>
		3) <b>clarify</b>: with Family Unit, e.g. Wife, directly and in-person any information/gossip heard, viewed, et cetera;<br/>
		--> Halimbawa: <b>Kung may narinig kang hindi ayos ukol sa akin, kausapin mo muna ako nang direkta at harap-harapan upang ating LINAWIN ang anumang MALABO.</b><br/>		
	</tr>
</table>
<br/>

reminder: <b>SAVED TIME</b> can be used to execute these actions among others:<br/>
1) Another work task to speed-up system<br/>
2) Rest with own Family Unit<br/>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
<b>CASIO WRIST WATCH</b><br/>
<table>
<tr>
	<td>
		<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202201/purchasedDate20211214_20211224T0907.jpg">
	</td>
	<td>
		<b>Purchased Date:</b> 2021-12-14<br/>
		<b>Cost:</b> PHP5000<br/>		
		<b>ELAPSED TIME:</b> OVER 4 YEARS; @PHP3.42/day (Estimate<br/>
		based on History)<br/>
	</td>
</tr>
<br/>
</table>
		<br/>
		observed: in <b>トイレ (toire; toilet)</b>, when returning <b>CASIO WATCH</b> to <b>LEFT WRIST</b>, hits as reminder self's <b>sternum (胸骨（きょうこつ; chest bone）</b><br/>
		<br/>
		--> reminder#1: <b>sternum</b> protects body organs, e.g. <b>physical HEART</b>.<br/>
		--> reminder#2: <b>Physical PUNCH</b> that hits UP from below <b>sternum</b> causes noticeable <b>physical pain</b>;<br/>
		--> notes: Person can verify this with even a <b>WEAK PUNCH</b>;<br/>
		<br/>	
		--> remembers: from keyword, <b>"sternum"</b>, <b>STERN</b>+<b>NUMBERS</b><br/>
		--> where: <b>STERN</b> : <b>STRICT/MAHIGPIT</b>;<br/> 
		--> where: <b>NUMBERS</b> : <b>BILANG</b><br/>
		--> notes: When investment causes <b>Financial LOSS</b> in <b>Return of Investment (RoI)</b>, select investors shall execute actions classified to be <b>PHYSICAL ATTACKS</b> due to focuses on getting <b>QUICK MONEY</b>;<br/>	
		<br/>
		<b>Example:</b><br/> 
		<b>ACTIONS</b>, e.g. <b>NOISE POLLUTION</b>, by the Teroristang Komunista group<br/>
		<br/>
		<b>Recommended Action:</b> verify: before receiving among others: <b>MONEY</b> and <b>GIFTS</b> to <b>CLEARLY</b> identify <b>CAUSE</b> of giving<br/>
		<br/>
		TO-DO: -add: contribution note from Facebook Effect;<br/>
		<br/>
		remembers: after sufficient investment in corporation, there exists <b>VOTING SYSTEM</b> arriving as printed <b>LETTERS</b> to <b>registered ADDRESS</b><br/>
		--> <b>Example:</b> Voting Item: <b>Financial Auditor</b><br/>
		<br/>
		remembers: with Philippine Administration, after reaching 18years of old and with <b>Philippine Citizenship</b>, there exists <b>VOTING SYSTEM</b><br/>
		--> <b>Example#1:</b> Voting Item: Philippine President (EXECUTION)<br/>
		--> <b>Example#2:</b> Voting Item: Philippine Senator (LEGISLATION; LAW WRITING)<br/>		
		<br/>
		<b>Additional Note:</b><br/>
		1) notes: self wears the <b>CASIO WATCH</b> with the <b>DIGITAL TIME</b> facing myself due to <b>TIME</b> verification <b>FASTER</b> while executing select <b>ACTIONS</b>, e.g. reading printed books<br/>
		<br/>
		2) remembers: from keyword, <b>トイレ (TOIRE)</b>, SHIGESATO ITOI's <b>ほぼ日刊イトイ新聞</b> with keyword, <b>イトイ (ITOI)</b>;<br/>
		<br/>
		3) shares: <b>PRESIDENT</b> : <b>EXECUTION</b>;<br/> 
		--> <b>CAN QUICKLY EXECUTE</b> his/herself the person classified to be Manloloko/Teroristang Komunista appearing <b>IN FRONT</b> of self, without need for explanation due to already <b>CLEAR</b> in the <b>LAW</b><br/>
		--> <b>recommends:</b> IF explains <b>UNABLE</b> to <b>EXECUTE</b> due to existing <b>LAW</b>, be in <b>SENATE</b> to <b>WRITE UPDATES</b> to speed-up <b>EXECUTION</b>,<br/>
		--> NOT as <b>EXECUTIVE</b>, e.g. <b>PRESIDENT</b><br/>
		<br/>
		--> remembers: former Philippine President <b>JOSE P. LAUREL</b> who served during our <b>TIME</b> with the <b>Japanese</b><br/>
		--> adds: former Philippine President <b>LAUREL</b> executed <b>SELF-DEFENSE</b> and killed using knife, the person who first attacked him using the <b>LATIGO</b><br/>
		--> notes: <b>LAUREL LEAF</b> : <b>LIFE</b><br/>
		<br/>		
		--> reminder: from History, <b>POISON</b> has been used to cause <b>DEATH</b>, without use of <b>Projectile Tool</b>, e.g. <b>GUN</b><br/>
		--> observes: Teroristang Komunista group uses among others:<br/> 
		--> <b>POISON</b>, <b>NOISE POLLUTION</b><br/>
		--> recommends: <b>CAUTION</b> due to Teroristang Komunista group <b>KILLS</b> to get <b>QUICK MONEY</b><br/>
		<br/>
		--> recommends: verifying <b>ACTIONS</b> of Teroristang Komunista group members to assist in speed-up of <b>identification</b> and <b>classification</b><br/>
		--> where: <b>ACTIONS</b> : <b>LIFESTYLE</b><br/>
		--> reminder: <b>WORK</b> = <b>HANAP-BUHAY</b>,<br/> 
		--> i.e. unti-unting pagkita ng pera mula sa paggawa
		</td>
	</tr>
</table>

<br/>
<br/>
--> remembers: Deutschland system of Pension insurance:
"The statutory pension insurance is the most important pillar of old-age provisions. Its financing is split: The monthly contributions paid by employees and employers pay the pensions of those currently in retirement. Through their contributions, those insured acquire some rights when they themselves become pensioners. In turn, coming generations provide for these future rents with their contributions (cross-generational contract). In addition, company and private pensions are the second and third pillars of provisions for old age. Under certain conditions these also enjoy government support."
(Hintereder, P. (2010). "FACTS about Germany". Germany: Societäts-Verlag)


<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1)<br/>
<br/>
<br/>
TO-DO: -add: lessons-learned from news web services
<br/>
<br/>
TO-DO: -add: in Security Defense Force: Super Mario Galaxy
<br/>
<br/>
</h4>
くる<br/>
くれる<br/>
<br/>
<br/>
<br/>
TO-DO: -update: this
<br/>
<br/>
<br/>

	<div class="copyright">
		<span>
			© SYSON, MICHAEL B. & USBONG. 2011~2021. All rights reserved.<br/>
			<a class="webServiceLink" target="_blank" href="https://creativecommons.org/licenses/by/4.0/">
				Creative Commons Attribution License BY 4.0
			</a>
		</span>
	</div>		 
  </body>
</html>
