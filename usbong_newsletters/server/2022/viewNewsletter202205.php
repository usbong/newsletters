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
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202205/wireSharkUsedAsDefenseExampleComputerNetworkSchematicDiagram.jpg"><br/>	
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
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202205/wireSharkMisusedByManlolokoToAttackExampleComputerNetworkSchematicDiagram.jpg"><br/>	
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
			--> observed: Listening Part to appear to be excessively QUICK due to student has LESS <b>audio material</b> to repeatedly listen as practice<br/>
			where: <b>audio material</b> : @same/similar LEVEL as Examination<br/>
			<br/>
			2) verify: <b>Examination Rules</b> to receive: <b>PASS</b><br/>
			--> observed: with select examinations, difficulty level NOT in increasing sequence;<br/> 
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
