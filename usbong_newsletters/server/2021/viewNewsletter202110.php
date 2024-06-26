<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211001
  @date updated: 20211029
  
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
<!-- //edited by Mike, 20211021
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
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				Computer
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				Services
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				Team
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				Partners
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				Open Source
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				EXCEL
			</a>
		</td>	
		<td class="menuColumn">				
			<a class="menuLink" href="https://creativecommons.org/licenses/by/4.0/">		
				Contact
			</a>
		</td>
	</table>

	<br>
	<br>	
	<div class="newsletterTitle">
		｢無関心は協力者？！｣<br/> 
		"mukanshin ha kyouryokusha?!"<br/>
		"Ang walang paki, taong tumutulong (sa Terorista)?!"<br/>
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	OCTOBER  2021
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Unit Members who have Middle~High School Level children, key points for concentration: Wikang Filipino & Maparaang Pagbibilang<br/>
--> Wikang Filipino Example: learn: from parents and/or grandparents, correct usage of language<br/>
--> Maparaang Pagbibilang Example: with Trigonometry, learn: correct usage of Triangles<br/>
--> Example: Use Triangle know-how to identify correct movement direction of Robot Ship after rotation<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/bulalakawWarsExampleUseTriangleKnowHowToIdentifyRobotShipMovementDirectionAfterRotationFocused.jpg">
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/bulalakawWarsExampleUseTriangleKnowHowToIdentifyRobotShipMovementDirectionAfterRotation.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			Bulalakaw Wars<br/>
			Year 2007 School Project
			</div>
		</td>
	</tr>
</table>
<br/>
--> <b>Reminders:</b> SOH-CAH-TOA<br/> 
SOH = SINE(angle) = Opposite / Hypothenus<br/>
CAH = COSINE(angle) = Adjacent / Hypothenus<br/>
TOA = TANGENT(angle) = Opposite / Adjacent<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/robotShipDirectionMovementAfterRotationUseTriangleKnowHow.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Computation Instructions to be Auto-executed by Computer<br/>
			Noticeable System Efficiency with Multiple Updating Position Inputs
			</div>
		</td>
	</tr>
</table>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202110/robotShipDirectionMovementAfterRotationUseTriangleKnowHowOutput.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Output: Robot Ship's New Position
			</div>
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
		I was classified to be with the "slow" group in English and Math back when students were classified to be such in elementary school.<br/>
		<br/>
		Years afterward, I learned that we can speed-up know-how of Math as Maparaang Pagbibilang with tools, e.g. Computers. This is due to we can receive immediate feedback to verify results of actions. In addition, we can quickly execute updated actions for feedback.<br/>
		<br/>
		With writing computer instructions to execute 3-Dimensional computations, it is faster to write the Command and verify with the Computer the output to get the correct answer. This is instead of using majority of available time to attempt to identify output positions without at all sending the Command to the Computer to confirm the output from the inputs.<br/>
		<br/>
		As with the German Luger Gun, as a weapon, it is more effective and efficient to destroy the target, e.g. Teroristang Komunista, by empowering Unit Member as part of Law Enforcement to execute multiple rapid-fire shots. This is instead of having only one (1) shot before need for ammo reload. In this case, the Unit member receives immediate feedback of output of used weapon. In addition, if target is NOT yet destroyed, quick execution by weapon tool of updated action as input for feedback is necessary.<br/>
		<br/>
		In Japan, Year 2008, I observed Law Enforcement to NOT use Guns as weapon. It was NOT needed due to system has been updated to cause Japanese citizens to value honest work.<br/>
		<br/>
		The system executes this action by identifying people who shall cause problems, e.g. those classified to be actions of Teroristang Komunista.<br/>		
		<br/>
		<b>Example:</b> Children who still execute chaotic actions<br/>
		--> This is due to NOT having yet learned to be contributing members of whole society.<br/>		
		<br/>
		<b>Example Incident Report:</b><br/>
		from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">朝日新聞 (asahi shimbun; https://www.asahi.com)</a> (2021-10-12):<br/> 

		<a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASPBC5GM4PBCPTIL018.html">集団暴走の疑い、少年ら51人逮捕・送検　「自分たちが世界の中心」</a><br/>
		Hinalang Samahan ng Magulong Takbo, i.e. Motorcycle Gang, mga kabataan 51 tao hinuli・ipinasiyasat "Ang kanilang mga sarili, gitnang puso, i.e. centro, ng daigdig"
		<br/>
		<br/>
		In the Philippines, Year 2021, we have identified members of the Teroristang Komunista group to be the previous generation's children who despite years of age, have NOT learned the value of honest work. They execute chaotic actions, e.g. panlolokong ingay, pisikal na pananakit, using wireless broadcasting technology to quickly get money, e.g. from vehicular theft, i.e. carnapping.<br/>
		<br/>
		<b>Reminder:</b><br/>
		Teroristang Komunista are NOT Filipino citizens; They are citizens of their Teroristang Komunista group with fake Filipino citizenship.<br/>
		<br/>
		<b>Result:</b><br/>
		Overall skill level and know-how of Filipino people do NOT increase.<br/>
		<br/>
		<b>Recommended Actions:</b><br/>
		1) File written incident reports with Law Enforcement<br/>
		2) Puksain ang Teroristang Komunista; No need for negotiation.<br/>
		</td>
	</tr>
</table>

<h5>1.1.2) shared: with public, know-how to execute web address routing using Amazon Web Services (AWS)<br/>
--> This action speeds-up system by eliminating excess inputs in web address name by Unit members.<br/>
<br/>
<b>Step.1)</b> update: <b>.htaccess</b> file stored in <b>html</b> folder<br/>
--> add: ReWrite Condition and ReWrite Rule<br/>
--> where: ReWrite Condition: if received request for web address <a class="webServiceLink" href="http://search.usbong.ph/" target="_blank">search.usbong.ph</a><br/> 
--> ReWrite Rule: serve web address <a class="webServiceLink" href="http://store.usbong.ph/server/usbongSearch.php" target="_blank">http://store.usbong.ph/server/usbongSearch.php</a><br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/step1UpdateHtAccess.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Updated .htaccess file
			</div>
		</td>
	</tr>
</table>
<br/>
--> Reminder: file accessed from Windows Machine to Linux Machine via <a class="webServiceLink" href="https://www.putty.org/" target="_blank">PuTTY Network Tool</a><br/>
<br/>
<b>Step.2)</b> update: <b>Route53</b> settings of AWS<br/>
--> add: Record with details, e.g. Name, Public Internet Protocol (IP) Address of Computer Server<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/step2AddRecordRoute53Part1.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Route53: New Record Details
			</div>
		</td>
	</tr>
</table>
<br/>
--> Reminder: Computer Client requests for Web Page File using Record Name, e.g. <a class="webServiceLink" href="http://search.usbong.ph" target="_blank">search.usbong.ph</a>.<br/>
--> AWS receives request, executes routing action<br/>
--> where: routing action = connects Client to Server's Public IP Address, e.g. 192.168.1.110<br/>
--> Computer Server receives request from Client, connects Client to web address:<br/>
--> <a class="webServiceLink" href="http://store.usbong.ph/server/usbongSearch.php" target="_blank">http://store.usbong.ph/server/usbongSearch.php.</a><br/>
--> Reminder: Web address is a publicly accessible local file<br/>
<br/>
<b>Step.3)</b> receive: notification of successful AWS Route53 Record creation<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/step3AddRecordRoute53Part2.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Route53: Record Creation Successful
			</div>
		</td>
	</tr>
</table>
<br/>
<b>Step.Done!</b><br/>
<br/>
--> With only one (1) Domain Address, we have increased available Sub-domain Addresses.<br/>
--> Example Domain Address: <a class="webServiceLink" target="_blank" href="http://www.usbong.ph">www.usbong.ph</a><br/>
--> Example Sub-domain Address: <a class="webServiceLink" target="_blank" href="http://search.usbong.ph">search.usbong.ph</a><br/>
--> In addition, we did NOT need to use additional AWS services, e.g. Simple Storage Service (S3). <br/>
--> Reminder: With AWS, additional service usage causes additional cost.
</h5>

<h4>1.2) added: <a class="webServiceLink" target="_blank" href="http://search.usbong.ph">Usbong Search Engine</a></h4>
<h5> 
--> This action speeds-up system development due to computer assists in organizing information.<br/>
--> Example: I need the website address of the <a class="webServiceLink" href="https://www.putty.org/" target="_blank">PuTTY Network Tool</a>.<br/>
--> Using the keyphrase, "<b>PuTTY</b>", the <a class="webServiceLink" target="_blank" href="http://search.usbong.ph">Usbong Search Engine</a> identifies which newsletter file/s it exists.<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202110/usbongSearchEngineNewsletterKeyphrasePuTTY.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<a class="webServiceLink" target="_blank" href="http://search.usbong.ph">Usbong Search Engine</a>: Found newsletter with <b>PuTTY</b> keyphrase
			</div>
		</td>
	</tr>
</table>
<br/>
--> <b>PUBLICLY USABLE VERSION DEVELOPMENT TIME:</b> 4days<br/>
--> Existing technologies caused speed-up of development.<br/>
<br/>
--> 1.2.1) Computer Hardware specification (NOT newest; 2007 technology):<br/>
--> Development Machine<br/>
--> <b>Processor:</b> Genuine Intel(R) CPU T2130 @1.86GHz<br/>
--> <b>Installed memory (RAM):</b> 3.00GB<br/>
--> <b>System type:</b> 32-bit Operating System (OS)<br/>
<br/>
--> 1.2.2) Computer Software Infrastructure & Tools:<br/>
--> Development Machine<br/>
--> <b>OS:</b> <a class="webServiceLink" target="_blank" href="https://docs.microsoft.com/en-us/lifecycle/products/windows-7">Windows 7 Ultimate Service Pack 1 (2009 technology)</a><br/>
--> <b>Web Server:</b> <a class="webServiceLink" target="_blank" href="https://www.apachefriends.org/index.html">Apache Web Server</a><br/>
--> <b>Computer Languages:</b> <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP Hypertext Preprocessor (PHP)</a>, <a class="webServiceLink" target="_blank" href="https://www.w3schools.com/html/">Hypertext Markup Language (HTML)</a><br/>
<!-- removed by Mike, 20211020
 <b>Computer Language Framework:</b> <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP</a> + <a class="webServiceLink" target="_blank" href="https://codeigniter.com/download">CodeIgniter Web Framework (version 2.0)</a><br/>
-->
--> <b>Computer Web Browser:</b> <a class="webServiceLink" target="_blank" href="https://www.mozilla.org/en-US/firefox/products/">Mozilla Firefox</a><br/>
--> <b>Computer Software:</b> <a class="webServiceLink" target="_blank" href="https://notepad-plus-plus.org/">Notepad++</a><br/>
--> <b>Reused Software Parts:</b> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/KMS">Usbong Knowledge Management System (KMS)</a><br/>
--> <b>Computer Server Network Communication:</b> <a class="webServiceLink" target="_blank" href="https://www.putty.org/">PuTTY</a>, <a class="webServiceLink" target="_blank" href="https://winscp.net/eng/index.php">WinSCP</a>
</h5>

<h3>2) Continued to share information on Health</h3>
--> verified: decrease of >= 1kg in body weight after executing <b>No meat dinner</b><br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202110/noMeatDinner20211005.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			No meat dinner
			</div>
		</td>
	</tr>
</table>
<br/>
--> reminder: burn excess body fats via continuous walking of at least 20mins every day<br/>
--> <b>Recommended Action:</b> verify: pig's heart at the Palengke<br/>
--> Squeezing pig's heart causes this blood to come out:<br/>
--> <b>Thick blood that has become more solid and less liquid</b><br/>
--> reminder: such thick blood can block passage of liquid blood to cause physical pain<br/>
--> due to insufficient food coming to cells via the blood river system<br/>
--> Increased physical pain classified as heart attack leads to death.<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		The budol-budol/manloloko/carnapper/cybercriminal/Communist Terrorist group continues to misuse wireless broadcasting technology to cause physical injury.<br/>
		<br/>
		<b>Example:</b> Breathing difficulty leading to physical pain due to insufficient oxygen going to the brain.<br/>
		<br/>
		<b>Reminder:</b> There exists Ear, Nose, Throat (ENT) connection.<br/>
		<br/>
		<b>Recommended Actions:</b><br/>
		1) File written incident reports with Law Enforcement<br/>
		2) Puksain ang Teroristang Komunista; No need for negotiation.<br/>
		<br/>
		<b>Recommended Reading:</b><br/>
		1) Cassa, A. (2005). Essential Atlas of Physiology (Essential Atlas Series). Spain: Barron's Educational Series. Translated from Spanish by: Marcela Estibill.
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202110/essentialAtlasOfPhysiology.jpg">
			<br/>
			Used Book bought @BookSale, Philippines
			</div>
		</td>
	</tr>
</table>
<br/>
<h3>3) Continued to share information on Security Defense Force</h3>
<h5>
--> verified: in the Year 2008, over 10years ago, the budol-budol/manloloko/carnapper/cybercriminal/Communist Terrorist group also misused wireless broadcasting technology.<br/>
<br/>
--> <b>Target Attacked:</b> SYSON, MICHAEL B. + people near <br/>
<br/>
--> <b>Example#1:</b> May 2008, Bonifacio Global City (BGC), Taguig City, Philippines<br/>
--> vehicular incident between Motorcycle Bike and FORD Escape Sports Utility Vehicle (SUV)<br/>
--> Both parties in incident had to set meetings at Taguig City Public Trial Court.<br/>
--> Total Elapsed Time to Finish (between both parties): <b>3 years</b><br/>
--> <b>Reminder:</b> Meeting re-set to another day due to absence causing delay<br/>
--> Teroristang Komunista group who caused the incident by adding noise pollution still has NOT confessed crime to Law Enforcement.<br/>
--> In its stead, Teroristang Komunista group continues to cause noise pollution with physical injury.<br/>
--> <b>Reminder:</b> No need to negotiate with Teroristang Komunista group.<br/>
<br/>
--> identified: the Teroristang Komunista group to be the same repeating criminal group due to <b>repeating techniques</b> that were executed in 2008 are reused in the Year 2021 and earlier.<br/>
--> identified: wirelessly broadcasted noise pollution to be the same technique used and reused by SYSON, RAMON (younger brother of DR. SYSON, PEDRO, who is SYSON, MICHAEL B.'s father)<br/>
<br/>
--> Members, e.g. SYSON, RAMON, became clear in 2017 when by mistake and yabang, they began to let themselves be identified.<br/>
<br/>
--> observed: income from their criminal actions, e.g. vehicular theft, became insufficient to their growing group whose members marry and have children.<br/>
--> This is while the senior members grow older and the income does NOT increase due to members have NOT learned the value of honest work.<br/>
--> <b>reminder#1:</b> NO tax paid from income due to vehicular theft<br/>
--> <b>reminder#2:</b> Teroristang Komunista group intentionally causes vehicular incidents.<br/>
--> <b>reminder#3:</b> Vehicular incidents increases excess expenses @Insurance Company.<br/>
--> observed: pattern of selling household's vehicles at lesser value after incidents.<br/>
<br/>
--> <b>Example#2:</b> March 2008~November 2008, Tokyo, Japan.<br/>
--> Note: Returned momentarily to the Philippines from Japan in May 2008<br/>
--> <b>Criminal Attacks by Teroristang Komunista group:</b> International classification<br/>
<br/>
--> <b>Example Attacks:</b><br/> 
--> a) hearing difficulty, b) noise pollution, c) physical stimulation via wireless waves<br/>
--> identified: c) to be caused by among others:<br/>
--> electricity, magnetic, heat waves, et cetera from overworked mobile telephones<br/>
--> <b>Recommended Reading:</b><br/> 
--> <a class="webServiceLink" target="_blank" href="www.bbc.com/future/article/20130227-what-is-killing-smartphones">www.bbc.com/future/article/20130227-what-is-killing-smartphones</a>; last accessed: 20210915<br/>
--> Technique using sound wave to cause breathing difficulty is also reused to cause c).<br/>
--> <b>reminder#1:</b> People near the target's mobile telephone shall also experience the attack.<br/>
--> <b>reminder#2:</b> Noise pollution causes increase in incidents with vehicular damage and physical injury.<br/>
<br/>
--> <b>Expenses Notes</b><br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202110/2008-03-15ShibuyaToShinjukuWalkAtBookstoreEarPoppingSoundTechniqueHearingDifficulty.jpg">
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="90%" height="90%" src="assets/images/newsletter/202110/2008-10-28~29hosuukeiWalkNumberMeasure.jpg">
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202110/2008-10-30EndOfDailyExpensesNoteTelephoneBroadcastingNetworkMisusedAsWeaponByTeroristangKomunistaGroup.jpg">
			</div>
		</td>

	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				2008-03-15 (Saturday)
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
				2008-10-28 (Tuesday) &<br/> 2008-10-29 (Wednesday)
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
				2008-10-30 (Thursday)
			</div>
		</td>
	</tr>
</table>
<br/>
--> By 2008-10, attacks still continued to cause need to be at Tokyo Metro Police Station.<br/>
--> Noise pollution, e.g. sound of talking dog, continued even at the Police Station.<br/>
--> Existence of attack and technique became clear with Police Unit, et cetera.<br/>
--> After identification to be the target of attack, returned to Company Dormitory.<br/>
--> However, noise pollution continued.<br/>
--> Returned to the Philippines; Noise pollution still continued.<br/>
<br/>
--> verified: as recommended to ignore the noise pollution by classifying it as <b>thoughts and ideas</b><br/>
--> Between Years 2009~2011, attacks by the Teroristang Komunista were ignored to be NOT noticeable.<br/>
--> However, criminal incidents, e.g. carnapping/vehicular theft, continued.<br/>
--> <b>Example:</b> ISUZU Sports Utility Vehicle (SUV; Automatic Transmission) disappeared outside Santuario de San Jose Church during the Simbang Gabi (Month of December);<br/> 
--> Incident reported with Police Unit @San Juan, Greenhills.<br/>
<br/>
--> verified: incident caused by the Teroristang Komunista group who even in October 2021 continues to execute without permit household observation with noise pollution.<br/> 
--> observed: pattern of theft inside house occurs by notifying thieves of date and time when househould members are outside.<br/> 
--> <b>reminder:</b> Teroristang Komunista group misuses wireless broadcasting technology.<br/>
--> <b>result#1:</b> Filipino citizens do NOT learn Maparaang Pagbibilang.<br/>
--> <b>result#2:</b> Filipino citizens do NOT achieve financial success greater than their group's children.<br/>
<br/>
--> verified: ignoring noise pollution has become insufficient due to increase in physical attacks<br/>
--> <b>Example:</b> Electric wave to become dizzy when executing quick and correct accounting computations for Bureau of Internal Revenue (BIR) Tax Reporting<br/>
--> identified: attackers who due to need for quick money made mistakes and became arrogant<br/>
--> where: arrogant = mayabang<br/>
--> classified: attackers to be Teroristang Komunista<br/>
--> filed: incident reports with Law Enforcement, Banks, BIR, Electricity Company, et cetera<br/>
--> identified: members to include among others:<br/> 
--> SYSON, RYAN (son of SYSON, RAMON who is also a Teroristang Komunista)<br/>
<br/>
--> <b>Recommended Actions:</b><br/>
--> 1) <b>Report (報告; <u>hou</u>koku)</b> incident with Law Enforcement<br/>
--> 2) <b>Contact (連絡; <u>ren</u>raku)</b> Law Enforcement<br/>
--> 3) <b>Consult (相談; <u>sou</u>dan)</b> with Law Enforcement<br/>
<br/>
--> <b>Reminder:</b><br/>
-->  ｢無関心は協力者？！｣<br/> 
--> "mukanshin ha kyouryokusha?!"<br/>
--> "Ang walang paki, taong tumutulong (sa Terorista)?!"<br/>
--> Anti-Terrorism Partnership, TOKYO<br/>
--> <a class="webServiceLink" target="_blank" href="https://www.keishicho.metro.tokyo.jp/kurashi/heion/antep_mpd.html">https://www.keishicho.metro.tokyo.jp/kurashi/heion/antep_mpd.html</a>; last accessed: 20211021<br/>
--> <b>Layunin:</b> Mapabilis ang sistema upang mapuksa na ang mga Teroristang Komunista.<br/>
</h5>
	<br>
	<br />
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
