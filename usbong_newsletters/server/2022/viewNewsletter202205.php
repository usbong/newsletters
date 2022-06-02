<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220602; from 20220601
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
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202205/wireSharkUsedAsDefenseExampleComputerNetworkSchematicDiagram.jpg"><br/>	
			<br/>
installed:  <a class="webServiceLink" target="_blank" href="https://www.wireshark.org/#learnWS">WIRESHARK</a> on <b>Computer Server</b> as <b>DEFENSE</b><br/>
<br/>
<b>Computer Server's Internet Protocol (IP) Address</b>: @<b>192.168.1.10</b><br/>
<b>Computer Client's IP Address</b>: @<b>192.168.1.40</b><br/>
<br/>
<b>Computer Client</b> requests from <b>Computer Server</b> the following file located in its directory system:<br/> 
<b>website address:</b> <a class="webServiceLink" target="_blank">/usbong_kms/index.php/report/viewWebAddressList</a><br/>
<br/>
<a class="webServiceLink" target="_blank" href="https://www.wireshark.org/#learnWS">WIRESHARK</a> identifies the requesting <b>source IP Address</b>.<br/>
<br/>			
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202205/wireSharkSourceDestinationExamplePart1.jpg">	
			<br/>
			<br/>
<b>Requested File as Website Address:</b><br/> 
<a class="webServiceLink" target="_blank">/usbong_kms/index.php/report/viewWebAddressList</a><br/>			
			<br/>			
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202205/wireSharkSourceDestinationExamplePart2.jpg">	
			<br/>
			<br/>
			<b>Manloloko</b> misuses <a class="webServiceLink" target="_blank" href="https://www.wireshark.org/#learnWS">WIRESHARK</a> to steal <b>INFORMATION</b> to execute <b>network abuse</b> classified to be <b>ATTACKS</b>;<br/>
			<br/>
			<b>Example ATTACKS:</b> NOISE POLLUTION, i.e. <b>PANLOLOKONG INGAY</b><br/>
			<b>Example OUTPUT:</b> <b>DELAY</b> in service execution<br/>			 
			<br/>
			<br/>
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202205/wireSharkMisusedByManlolokoToAttackExampleComputerNetworkSchematicDiagram.jpg"><br/>	
			<br/>
			identify: <b>IP Addresses</b> from <b>captured network traffic LIST</b><br/>
			<br/>
			where: <b>Computer Client</b> requests for <b>Google Web Service</b>;<br/>
			<b>Computer Client</b> located inside <b>Local Area Network</b>;<br/>
			<b>Google Web Service</b> located outside;<br/>
<br/>			 
--> use: <a class="webServiceLink" target="_blank" href="ipinfo.io">ipinfo.io</a> to assist in identifying among others:<br/>
1) <b>physical location</b><br/>
2) <b>contact information</b><br/>
<br/>
<b>Example Address List in Sequence:</b><br/>
1) <b>142.250.66.99</b> : <a class="webServiceLink" target="_blank" href="https://www.google.com/">Google LLC, U.S.A.</a><br/>
--> 1600 Amphitheatre Parkway, Mountain View, CA, U.S.A.<br/>
<br/>
2) <b>122.2.215.143</b> : <a class="webServiceLink" target="_blank" href="https://main.pldt.com/">Philippine Long Distance Telephone Company</a><br/>

--> Taguig, Metro Manila, Philippines<br/>
<br/>
3) <b>142.251.85.103</b> : <a class="webServiceLink" target="_blank" href="https://www.google.com/">Google LLC, Singapore</a><br/>
--> Singapore, Singapore<br/>
<br/>
<b>"To report abuse and illegal activity":</b><br/> 
1) <a class="webServiceLink" target="_blank" href="https://www.google.com/contact/">https://www.google.com/contact/</a><br/>
2) <a class="webServiceLink" target="_blank" href="abuse@pldt.net">abuse@pldt.net</a><br/>
3) <a class="webServiceLink" target="_blank" href="network-abuse@google.com">network-abuse@google.com</a><br/>
<br/>
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
--> 1.1.2) continued: to share know-how in <b>日本語 (にほんご; nihongo)</b><br/>
--> <b>Usbong SCHOOL:</b> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/school/">https://github.com/usbong/school/
</a><br/>
--> <b>Japanese Language Proficiency Test (JLPT):</b> <a class="webServiceLink" target="_blank" href="https://www.jlpt.jp/">https://www.jlpt.jp/
</a><br/>

<br/>
<table class="noteTable">
	<tr>
		<td>
		<b>JLPT LEVEL: N5~N4; where: N1 highest @HIGHSCHOOL level</b><br/>
		</td>
	</tr>	
	<tr>
		<td>
<b>1) Sectional Pass Mark:</b> >= 31.6%<br/>
<b>1.1) Language Knowledge: (Vocabulary/Grammar）・Reading</b><br/>
38/120 = 0.316;<br/>
31.6%<br/>
<br/>
<b>1.2) Listening</b><br/>
19/60 = 0.316;<br/>
31.6%<br/>
<br/>
<b>2) Total PASS Mark:</b> >= 50.0%<br/>
90/180 = 0.5;<br/>
50.0%
		</td>	
	</tr>	
</table>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			<b>Recommended Actions:</b><br/>
			1) verify: <b>Sample Examinations</b> as practice before <b>Actual Examination</b><br/>
			--> observed: <b>Listening Part</b> to appear to be excessively QUICK due to student has LESS <b>audio material</b> to repeatedly listen as practice<br/>
			where: <b>audio material</b> : @same/similar LEVEL as Examination<br/>
			<br/>
			2) verify: <b>Examination Rules</b> to receive: <b>PASS</b><br/>
			--> observed: with select examinations, question items' difficulty level NOT in increasing sequence, <b>PASS Mark</b> >= 70%<br/> 
			<b>ACTION</b>: finish: questions that <b>CAN be QUICKLY answered CORRECTLY</b>;<br/>
			--> This is instead of using available <b>TIME</b> to answer more difficult questions valued @<b>SAME POINTS</b><br/>
			<br/>
			3) verify: <b>VALUE</b> to receive <b>PASS</b> in Examination<br/>
			<b>Example OUTPUT:</b> increase in <b>RANK</b><br/>
			--> reminder: No need to use available <b>TIME</b> and <b>MONEY</b> to take Examination<br/>
			--> where: <b>VALUE</b> classified to be <b>LOST</b> 
		</td>
	</tr>
</table>

</h5>

<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) shares: Lessons-learned: asahi.com　(朝日新聞　DIGITAL; asahi shimbun digital)</h4>
<h5>
--> <b>note:</b> KEYPHRASE technique as with TELEGRAM/SMS (SHORT MESSAGING SERVICE) MESSAGE<br/>
--> Translation from <b>日本語 (にほんご; nihongo)</b> to English by SYSON, MICHAEL B.<br/>
<br/>
2.1.1) <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/DA3S15294699.html?iref=comtop_Opinion_03">（社説）ゲノム情報　差別防ぐルール作りを</a>;<br/>
<br/> 
last accessed: 20220602; from 20220516
<br/>
<b>2022年5月16日 5時00分
</b><br/>
2022-05-16T05:00<br/>
<br/>
<b>
    ３年前に作られた「全ゲノム解析等実行計画」に基づき、がんと難病の患者を対象に、ＤＮＡの遺伝情報（ゲノム）を網羅的に解析する作業が進む。<br/>
<br/>
    ...保険や雇用分野での差別的な取り扱いを、法律で明確に禁じている国もある。<br/>
<br/>
    　ところが日本にはそうした規定はない。わずかに個人情報保護法によって、ゲノム情報の取得にあたっては本人の同意が必要とされているくらいだ。<br/>
<br/>
    海外の例も参考にしながら具体的な検討を行う場を速やかに設けるよう求める。<br/>
<br/>
    　ゲノム医療のあり方について人々の考えや意識を探る調査を継続して行い、ていねいな説明を通じて、社会の合意形成を図ることも必要だ。
</b><br/>
<br/>
<b>keyphrase:</b> GENOME INFORMATION;<br/>
--> requires: person's <b>AGREEMENT</b> to obtain <b>INFORMATION</b> in JAPAN;<br/>
--> In <b>INSURANCE, EMPLOYMENT</b> FIELDS <b>DISCRIMINATION TREATMENT, NOT YET in JAPAN</b>,<br/>
--> <b>CLEARLY PROHIBITED</b> in LAW @SELECT COUNTRIES<br/>
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