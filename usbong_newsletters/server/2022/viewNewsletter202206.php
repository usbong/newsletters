<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220701; from 20220628
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
		<b>メモリー</b> (memori-) : <b>LALAGYAN ng ALAALA</b>
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
<h5>1.1.1) shared: with Public, <b>VALUE</b> of <b>QUICK START-UP</b>;<br/>
--> where: <b>START-UP</b> : <b>VEHICLE ENGINE IGNITION</b><br/>
--> observed: during <b>EMERGENCY (ER)</b> situation, <b>START-UP ELAPSED TIME</b> noticeably <b>INCREASES</b><br/> 
--> This is due to Unit member shall <b>START</b> via OPEN COMMAND <b>multiple applications together</b><br/>
--> to attempt to decrease <b>WAITING TIME</b><br/>
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
1) <b>0</b> : "BERGSTEIN, AKI"<br/>
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


<br/>
<br/>
<br/>
TO-DO: -update: this<br/>
<br/>
<br/>
<br/>


</h5>

<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) shares: Lessons-learned: ファミ通.com　(famitsu.com)</h4>
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
    少年ジャンプ」は、新しい作品創出の基地です。創刊以来50年以上もの間、クリエイターが集まり、成長を促し、読者と共に新作を人気作に導くエコシステムが機能してきました。
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
			<br/>
			TO-DO: -add: lessons-learned from Italia<br/>
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
<br/>
<br/>
<br/>
TO-DO: -update: this<br/>
<br/>
<br/>
<br/>
2.1.2) <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQ5H73RVQ5FULFA01V.html?iref=comtop_7_01">（半導体工場、国内で巨額投資続々　政府は経済安保観点からも支援;</a><br/> 
last accessed: 20220602; from 20220516<br/>
<br/>
<b>土居新平2022年5月16日 5時00分</b><br/>
Doi Shinpei; 2022-05-16T05:00<br/>
<br/>
<b>
    スマートフォンや家電、自動車などあらゆる製品に使われる半導体は世界的に不足しており、争奪戦が激しい。 企業は巨額の投資をし、政府は経済安全保障の観点からも補助金を出して、生産力を高めようとしている。<br/>
<br/>
    東芝が約4割の株式を持つ半導体大手のキオクシアホールディングスは、北上工場（岩手県北上市）に新たな製造棟を建てる。建屋面積は約3万1千平方メートル。総事業費は1兆円規模とされ来春にも完成する。生産するのはスマホなどに使う記憶用半導体「NAND（ナンド）型フラッシュメモリー」だ。<br/>
<br/>
    キオクシアは世界最大級のメモリー工場である四日市工場（三重県四日市市）で新たな製造棟を4月に完成させた。秋にも稼働する。こちらも総事業費は1兆円規模。北上工場の分を合わせ、米半導体大手のウエスタンデジタル（WD）と共同で負担する見通しだ。<br/>
<br/>
    政府は半導体産業を支援する…<br/>
<br/>
</b>
<b>keyphrase:</b> <b>半導体工場</b> (half-guided body engineering area; <b>TRANSISTOR FACTORY</b>) in JAPAN;<br/>
--> TOSHIBA; IWATE PREFECTURE; MIE <b>PREFECTURE</b>; <b>MEMORY</b>, e.g. NAND FLASH MEMORY;<br/>
<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			<b>ASAHI Newspaper Observations:</b><br/>
			<br/>
			1) observed: correction in spelling during <b>QUICK SMS Reporting</b> for select words, e.g. MIE <b>PREFERECTURE</b><br/>
			--> <b>"PREFERECTURE"</b> with the excess <b>"ER"</b>, should be <b>"PREFECTURE"</b><br/>
			<br/>
			emphasis: <b>VALUE</b> of UNIT's <b>EDITOR</b> to re-verify quickly translated sentences' grammar, sentence structure, significance, et cetera.<br/>
			<br/>
			2) observed: <b>problems in JAPANESE SOCIETY</b> due to among others:<br/> 
			2.1) <b>young people</b> executing <b>CHAOTIC behavior</b><br/> 
			2.2) people with <b>NO WORK</b><br/> 
			2.3) <b>senior people</b> with <b>errors in MONEY</b><br/>
			<br/>
			<b>ACTION:</b><br/>
			2A.1) <b>STRICT</b> with <b>newly elected politicians</b>, e.g. Prime Minister KISHIDA,<br/> 
			2A.2) sharing that <b>problem WORSE in Foreign Countries</b>;<br/> 
			where: increased DEATH COUNT due to FIRE during WINTER<br/>
		</td>
	</tr>
</table>
</h5>
</h3>

<h3>3) Continued with Security Defense Force</h3>
<h4>3.1) shares: ULTRASOUND TECHNIQUE</h4>
<h5>
3.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.sciencedirect.com/topics/medicine-and-dentistry/ultrasound-therapy">ULTRASOUND THERAPY</a><br/>
<b>website address:</b> <a class="webServiceLink" target="_blank" href="https://www.sciencedirect.com/topics/medicine-and-dentistry/ultrasound-therapy">https://www.sciencedirect.com/topics/medicine-and-dentistry/ultrasound-therapy</a>;<br/> 
last accessed: 20220530<br/>
<br/>
--> observed: <b>pattern</b> <b>IF</b> tool/technique <b>NOT effective</b> to increase <b>INCOME LEGALLY</b>,<br/> 
shall be <b>MISUSED</b> by <b>MANLOLOKO group</b> to execute <b>ACTIONS</b> classified to be <b>ILLEGAL</b>,<br/>
e.g. intimidation, harassment to get <b>QUICK MONEY</b>;<br/>
<br/>
where: <b>harass</b>: "cause trouble or any mental, economical or any other damage <b>[1]</b>"<br/>
<br/>
<b>MANLOLOKO</b> : MANLOLOKO/budol-budol/carnapper/smuggler/<br/>
cybercriminal/Teroristang Komunista group<br/>
<br/>
<b>keyphrase:</b><br/>
unsolicited physical stimulation,<br/> 
wireless physical attacks,<br/> 
mobile telephone (tech since Year 2008 and earlier)<br/>
<br/>
<b>emphasis:</b><br/>
"...sound waves at very high frequencies (0.5-5 MHz) to produce mechanical vibration within the tissues."<br/>
<h3><b>"Physical therapies"</b></h3>
<h5>
Lindsay M. Bearne PhD MSc MCSP, Michael V. Hurley PhD MCSP,<br/> 
in Rheumatology, 2010 <b>ULTRASOUND THERAPY</b><br/>
<br/>
"In the management of rheumatic diseases, ultrasound therapy (US) is commonly used as an adjunctive therapy for its proposed effects on inflammation as well as for pain relief. It uses <b>sound waves at very high frequencies (0.5-5 MHz) to produce mechanical vibration within the tissues.</b> If applied in high doses absorption of US results in heating, which decreases pain and fluid viscosity, increases metabolic rate and blood flow (thermal effects) (Nussbaum 1997). At lower doses of US or following pulsed US non thermal, mechanical effects such as stable cavitation (formation of gas bubbles in tissues), standing waves (reflected waves superimposed on incident waves) and acoustic streaming (fluid movement which exerts pressure changes on a cell) occur (Maxwell 1992) which cause membrane distortion, increased permeability, increased nutrient transfer and facilitation of tissue repair (Mortimer & Dyson 1988). When applied to acutely inflamed tissues it encourages the inflammatory process to progress to the proliferation stage (Watson 2000).<br/>
<br/>
    Whilst there is evidence to support the physiological effects of US in laboratory or animal studies, (Mortimer & Dyson 1988) evidence for its clinical effectiveness in people with rheumatic conditions is limited (Brosseau et al 2004, Zhang et al 2007) and it is only recommended for those with arthritis of the hand (Casimiro et al 2002, Welch et al 2001). Moreover, a recent review concludes US may only be effective for people with carpal tunnel syndrome and those with calcific tendonitis of the shoulder (Roberston & Baker 2001) despite being a frequently used electrophysical modality in musculoskeletal conditions (Kitchen & Partridge 1996)."
</h5>

<h4><b>Additional Reading:</b></h4>
<h5>
<b>[1]</b> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/newsletters/blob/main/notes/LessonsLearned/nintendoDotCom.md">Notes on Prohibitions In using the Nintendo Account Service</a>
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
