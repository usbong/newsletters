<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220807; from 20220806
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
							color: rgb(20,20,20); /*rgb(40,40,40);*/ /* from black to white */ 
							margin:0;		
							border-left: 5px solid #ab9c7d;
							padding: 2px;					
							padding-left: 3%;
							
							/* text-indent: 5%;*/
							
							font-size: 14pt;
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

						span.usbongTranslationSpan
						{
							font-size: 12pt;
							/*color: rgb(30,30,30);*/							
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
	July 2022
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
--> to cause select <b>appliances</b>, e.g. <b>Light Emitting Diode (LED) LAMPS</b>, <b>local router</b>, to function;<br/>
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
			--> where: <b>IdeaPad</b> classified to be <b>Laptop Personal Computer (PC)</b><br/>
			--> observed: execution of <b>Computer Web Browser</b>, e.g. <a class="webServiceLink" target="_blank" href="https://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a>, to have <b>noticeable DELAY</b><br/>
			<br/>
			<b>OUTPUT:</b> opted: to <b>USE Tablet PC</b> for <b>Web Browser</b> ACTIONS,<br/>
			while using <b>recycled LENOVO Laptop Computer</b> as <b>Server</b><br/> 
			during <b>NO ELECTRICITY POWER</b> incidents<br/>
			<br/>
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202207/exampleTabletPCSoftwareHardwareWithMedItemBoxTechnique20220314T1158.jpg"><br/>
				<b>Example Tablet PC on BATTERY Power</b>
			<br/>
			<br/>
			<b>Additional Notes:</b><br/>
			1) installed: in <b>LENOVO IdeaPad</b>, the following Web Server Tools:<br/>
			1.1) <a class="webServiceLink" target="_blank" href="https://httpd.apache.org/">Apache Web Server</a><br/>			
			1.2) <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL</a><br/>						
			1.3) <a class="webServiceLink" target="_blank" href="https://www.phpmyadmin.net/">phpMyAdmin Tools</a><br/>
			<br/>
			--> observed: <a class="webServiceLink" target="_blank" href="https://www.apachefriends.org/index.html">XAMPP</a> <b>did NOT install successfully</b>, in contrast with another <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu</a> <b>Computer Server</b><br/>
			<br/>
			--> <b>ACTION:</b> wrote: in a file, <a class="webServiceLink" target="_blank" href="https://github.com/usbong/KMS/blob/master/Miscellaneous%20Commands/installWebServerInLinuxMachineNotViaXAMPP.sh">List of Install Commands for Auto-execution</a><br/>
			--> where: <b>classification</b>: NON-XAMPP Web Server<br/>		
			<br/>
			2) observed: in <b>LENOVO IdeaPad</b>, <b>applications</b> that I wrote in the following Computer Languages <b>execute</b> WITHOUT noticeable DELAY:<br/>
			<br/>
			2.1) <b>C/C++ COMPUTER LANGUAGE</b><br/>
			2.2) <a class="webServiceLink" target="_blank" href="https://www.java.com/en/">JAVA COMPUTER LANGUAGE</a></b>
			<br/>
			<br/>
			<b>Example:</b> Setup System for Quick Execution of <b>WORKBOOK Reports</b><br/>
		<video width="416" height="312" controls>
		  <source src="assets/images/videos/halimbawaSetupSystemForQuickExecution20220713T1018.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video><br/>
		<br/>
		    --> observed: <b>noticeable DELAY</b> due to the following:<br/>
		    <br/>
		    1) increase in computation tasks<br/>
		    --> <b>Example:</b> COMMANDS with 3-Dimensional Graphics techniques, e.g. floating-point numbers/fractions, for drawing the resizable DISPLAY <br/>
		    <br/>
		    2) decrease in available memory storage<br/>
		    --> <b>Example:</b> Spreadsheet with multiple worksheets with ROW and COLUMN counts whose Total FILE SIZE is 700MB<br/>
			<br/>
		    <b>Recommended Action:</b> use: for such tasks, MACHINES with the following:<br/>
		    1) <b>faster microcomputers</b> (processors);<br/>
		    2) <b>higher memory storage</b> (Random-Access Memory (RAM));<br/>		    
		<br/>
		</td>
	</tr>
</table>
<br/>
<br/>
TO-DO: -add: notification on BIR Income Tax Return Notes<br/>

<br/>
<br/>
continued: with <b>AUTOMATIC</b> transferring as copies <b>Database files</b><br/>
--> from <b>MAIN Computer Server</b> to available <b>Multiple Computer Servers</b><br/>
--> where: <b>Computer Server</b> : <b>combination of Operating Systems (OS)</b>,<br/> 
--> e.g. <a class="webServiceLink" target="_blank" href="https://lubuntu.me/">Linux Ubuntu</a>, <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ph/">Windows 7</a>;<br/>
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
<span class="usbongTranslationSpan">
Una sa Daigdig: MINI LALAGYAN ng LAMAN;<br/>
Binuo mula sa CELL (Binalutan ng Manipis) ng May-sakit<br/>
sa panglulunas ng Nasusunog na Pakiramdam<br/>
ng Malaking Bahagi ng Tiyan (LARGE INTESTINE)<br/>
na may Sakit sa Pagpisa (ULCER)<br/>
<br/>
</span>

<blockquote class="usbongBlockquote">
<p>
    有料会員記事
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
Sulatin sa nagbabayad na kasapi<br/>
</span>
<br/>
<blockquote class="usbongBlockquote">
<p>
    野口憲太2022年7月8日 7時00分
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
NOGUCHI, KENTA; 2022-07-08T07:00<br/>
</span>
<br/>
<blockquote class="usbongBlockquote">
<p>
東京医科歯科大学は7日、大腸の粘膜に炎症が起こる難病「潰瘍（かいよう）性大腸炎」の患者1人に対して、患者本人から採取した細胞を増やして腸の「ミニ臓器（腸上皮オルガノイド）」を作り、患部に移植したと発表した。この大腸炎に限らず、治療のためにオルガノイドを患者に移植したのは、世界で初めてという。
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
Sa ika-7 araw, ipinahayag ng Malaking Paaralan (Pamantasan) ng TOKYO sa Maparaang Panggagamot kabilang ang Ngipin, na nailipat sa May-sakit ang binuong MINI LALAGYAN ng LAMAN (Balat ng Tiyan na ORGANOID) mula sa pagdagdag ng ginagamit niyang CELL, upang bigyang-lunas ang "Sunog sa Malaking Bahagi ng Tiyan na may Sakit sa Pagpisa (ULCER)"<br/>
<br/>
Una sa daigdig; inilipat sa May-sakit ang ORGANOID upang bigyang-lunas hindi lamang ang Nasusunog na Pakiramdam sa Malaking Bahagi ng Tiyan.<br/>
<br/>
</span>

<blockquote class="usbongBlockquote">
<p>
    　潰瘍性大腸炎は、大腸の粘膜で慢性的な炎症が起きる難病で、腹痛や下痢、血便などの症状が続く。
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
Sunog sa Malaking Bahagi ng Tiyan na may Sakit sa Pagpisa (ULCER): Mahirap na sakit na nagaganap dulot ng Mabagal na Nasusunog na Pakiramdam, sa Malagkit na Takip (MEMBRANE) ng Malaking Bahagi ng Tiyan (LARGE INTESTINE); Tuluy-tuloy na karamdaman na may dugo sa dumi, pagtatae, pananakit ng tiyan, atbp<br/>
<br/>
</span>
<blockquote class="usbongBlockquote">
<p>
    国内には22万人の患者がいると推計される。薬で炎症を抑える治療が一般的だが、傷ついた粘膜が治らないと、大腸を摘出する手術が必要になる場合もある。
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
Sa loob ng Kaharian, nasusukat na may 220K ang May-sakit nito. Bagama't karaniwan ang paggamit ng GAMOT upang malunasan ito sa pamamagitan ng pangangasiwa (CONTROL) ng Nasusunog na Pakiramdam, kapag hindi nalunasan ang nasugatang
Malagkit na Takip, nangyayari rin ang pangangailangang ilabas ang Malaking Bahagi ng Tiyan gamit ang Paraan ng Kamay (SURGERY).
<br/>
<br/>
</span>
<blockquote class="usbongBlockquote">
<p>
    　東京医科歯科大の臨床研究チ…
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
Ang pangkat ng mananaliksik ng TOKYO sa Maparaang Panggagamot kabilang ang Ngipin...<br/>
</span>
<br/>
<blockquote class="usbongBlockquote">
<p>
    この記事は有料会員記事です。残り362文字有料会員になると続きをお読みいただけます。
</p>
</blockquote>
<br/>
<span class="usbongTranslationSpan">
Sa nagbabayad na kasapi ang sulating ito. May natitira pang 362titik. Kapag naging nagbabayad na kasapi na po kayo, maaari niyo na pong mabasa ang kasunod.<br/>
<br/>
</span>
<h3><b>Sanggunian:</b></h3>
<span class="usbongTranslationSpan">
    GOOGLE SEARCH ENGINE; TRANSLATE<br/>
    Japanese-English Dictrionary (JED) Android Application<br/>
    PLECO Chinese-English Dictionary Android Application<br/>
</span>
<br/>

<h3>3) SECURITY DEFENSE FORCE</h3>
<h4>
--> 3.1) <b>NOISE POLLUTION</b> from <b>Manloloko/budol-budol/carnapper/smuggler/<br/>
</h4>
<h5>
--> Cybercriminal/Teroristang Komunista group</b> continues<br/>
--> <b>Example#1:</b> wireless broadcasting of IDEAS on how to improve OUTPUTs, e.g. in computer programming;<br/>
--> observed: <b>IDEAS</b> appear to be among others: JARGON, obvious, came from another who appeared to have know-how, but were NOT verified by his/herself;<br/>
--> <b>OUTPUT:</b> INCORRECT;<br/> 
--> classification: <b>NOISE POLLUTION</b><br/>
<br/>
--> <b>Example#2:</b> continuous broadcasting of "panaginip"<br/> 
--> by Manloloko group to cause RE-ACTION, e.g. regrets;<br/>
--> <b>SOLUTION#1:</b> classify: as <b>NOISE POLLUTION</b>;<br/> 
--> where: <b>NO NEED</b> to use available TIME to identify significance, et cetera<br/>
--> <b>SOLUTION#2:</b> file: incident reports with Law Enfocement, e.g. Police<br/> 
</h5>
<h4>
--> 3.2) <b>FRATERNITY</b>: Question & Answer for CLARIFICATION<br/>
</h4>
<h5>
<blockquote class="usbongBlockquote">
<p>
Q&A#1) Please teach me about fraternities, sororities, New People's Army (NPA), and Communist Party of the Philippines (CPP).<br/> 
What have you encountered?
</p>
</blockquote>
<br/>

1) classifies: Those that execute harm, e.g. <b>NOISE POLLUTION</b>, <b>PHYSICAL INJURIES</b>, are with the <b>Manloloko/Teroristang Komunista group</b>;<br/>
<br/>
<b> reminder:</b> <b>smuggler/carnapper</b> classified with the <b>Manloloko/Teroristang Komunista group</b><br/>
<br/>
2) Use of Greek letters, e.g. <b>Alpha</b>, <b>Epsilon</b>, due to based on <b>American School System</b>, e.g. Harvard;<br/>
--> notes: adds <b>"MYSTERY"</b>, causing <b>INCORRECT IDEAS</b><br/>
--> where: <b>INCORRECT IDEAS</b> cause <b>FEAR</b>, <b>DESIRE</b>, et cetera;<br/>
--> where: may accept <b>PANLOLOKO</b> to CORRECT via INFORMATION the <b>INCORRECT IDEAS</b>;<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
Q&A#2) Have you been invited before?
</p>
</blockquote>
<br/>
During my visits as student to <b>University of the Philippines (UP) Diliman</b>, <b>Manila</b>, <b>Asian Institute of Management (AIM)</b>, et cetera;<br/>
<br/>
observed: <b>NOISE POLLUTION</b> about <b>Fraternity/Sorority</b> groups;<br/>
<br/>
--> <b>Example:</b> "Epsilon group is FRIENDS with ALL";<br/>
--> notes: <b>increase in excess USE of TIME to think of significance</b><br/>
--> <b>ACTION:</b> classify: as <b>NOISE POLLUTION</b><br/>
<br/>
remembers: @<b>Medical City Hospital</b>, Ortigas, Pasig City, meeting female students who introduced themselves as part of SORORITY who work on Mental Health;<br/>
<br/>
<b>reminder:</b> Those that execute <b>NOISE POLLUTION<br/>  
with PHYSICAL HARM</b> are with the Manloloko group;<br/>

</h5>
<br/>
<br/>
TO-DO: -update: this<br/>
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
