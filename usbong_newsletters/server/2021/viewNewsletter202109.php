<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20210701
  @date updated: 20211011
  @website address: http://www.usbong.ph

  Input:
  1) MySQL Database with Newsletter details
  Output:
  1) Auto-generated print-ready Newsletter that is viewable on a Computer Web Browser  
  
  Computer Web Browser Address (Example):
  1) http://localhost/usbong_kms/server/viewNewsletter.php   
  
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
<!--
 //edited by Mike, 20210831
--> 
	<base href="http://localhost/usbong_newsletters/" target="_blank">
<!--
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
		↑ KNOW-HOW causes<br/>
		RANK-UP TO BE UNIT CHIEF<br/>
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	SEPTEMBER  2021
	</div>
	<br>
	<br>

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: answers to questions via <a class="webServiceLink" href="http://www.stackoverflow.com" target="_blank">www.stackoverflow.com</a>, <a class="webServiceLink" href="http://www.askubuntu.com" target="_blank">www.askubuntu.com</a>, et cetera<br/>
--> Example Question: <a class="webServiceLink" href="https://askubuntu.com/questions/786300/how-to-install-all-sdl-libraries-in-ubuntu-14-04/1358288#1358288" target="_blank">"How to install all SDL libraries in Ubuntu 14.04?"</a>?<br/>
--> where: SDL = Simple Directmedia Layer (SDL)<br/>
--> Example Answer (executed on <a class="webServiceLink" href="http://www.lubuntu.me">LUBUNTU (LTS 20.04)</a> machine):<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202109/askUbuntuHowToInstallSDLInUbuntu.jpg">
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
			As with macOS (macintosh Operating System), we also need to install the SDL libraries so that the machine can execute the application.<br/>
			<br/>
			<b>Reminder:</b> Libraries contain reusable sets of instructions<br/>
			<br/>
			In addition, during installation, I observed that SDL is used with computer interactive machines, e.g. Microsoft XBOX, Nintendo Switch.<br/>
			<br/>
			We are already building reusable component parts to speed-up development of applications.<br/>
			<br/>
			<b>Example Reusable Component Part:</b><br/>
			<b>Part Function:</b> Load compressed image files for use as texture with 2-Dimensional and 3-Dimensional objects<br/>
			<br/>			
			<b>Example Compressed Image File Classification:</b> .png<br/>	
			<b>Image File Size#1 (Font):</b> 5.6KB (from 256KB as .tga)<br/>
			<b>Image File Size#2 (Cartoon Character):</b> 13.3KB (from 256KB as .tga)<br/>
			<br/>
			<b>Reminder:</b> With .png image files, we can opt to use only a select set of colors per pixel. This is instead of all available colors for each pixel of the image file. Because of this, we can set only 24 colors, with transparency, instead of over this number.<br/>
			<br/>
			<b>Result:</b> Smaller output image files
		</td>
	</tr>
</table>

<h5>1.1.2) shared: know-how to repair Computers<br/>
--> <b>Example Problem#1:</b> Computer does NOT open <a class="webServiceLink" target="_blank" href="http://lubuntu.me">LUBUNTU (LTS 20.04) Operating System (OS)</a><br/>
--> <b>Cause:</b> Reset Button does not correctly function;<br/>
--> <b>Known Problem:</b> Defective Motherboard to cause NO Reset/Reboot Command via Software/Hardware<br/>
--> <b>Solution:</b><br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="60%" src="assets/images/newsletter/202109/removeSwResetHardwareCableHeadToFixProblem.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Removed Software (SW) Reset Hardware Cable Head
			</div>
		</td>
	</tr>
</table>
</h5>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			From this solution, we learn that we can remove hardware parts to fix problems that are NOT solved via software techniques. In addition, we can use software techniques to solve hardware parts problems.<br/>
			<br/>
			<b>Example:</b> Hardware Central Processing Unit (CPU) does NOT quickly compute 3-Dimensional object positions.<br/>
			<br/>
			<b>Solution:</b> We remove 3-Dimensional computations; In its stead, we use 2-Dimensions only.
			<br/>
			<br/>
			<b>verified:</b> Defensive techniques against the budol-budol/manloloko/carnapper/cybercriminal/Communist Terrorist group who continue to misuse wireless broadcasting technology to quickly get money.<br/>
			<br/>
			1) removing the hardware part that transmits and receives, i.e. transceiver, wireless signals, e.g. classified to be from cellular towers<br/>
			<br/>
			2) setting to FLIGHT mode to remove wireless network connectivity<br/>
			--> reminder: MANNER mode = SILENT mode;<br/> 
			--> wireless network connectivity still ACTIVE.<br/>
			--> verified: misuse of wireless network to cause mobile telephone to output excess electric wave, heat, et cetera near it<br/>
			--> <b>Recommended Reading</b>: <a class="webServiceLink" href="https://www.bbc.com/future/article/20130227-what-is-killing-smartphones" target="_blank">www.bbc.com/future/article/20130227-what-is-killing-smartphones</a>; last accessed: 20210915<br/>
			<br/>
			<b>learned:</b> technique can assist in identifying the Teroristang Komunista group's target device to cause wireless broadcasting, e.g. classified to be electric wave (電波; dempa), sound wave (音波; ompa).<br/>
			<br/>
			This is executed by turning OFF own telephone, such that there exists only one (1) remaining Philippine telephone that is turned ON.<br/>
			<br/>
			<b>Reminder:</b> This target telephone is connected internationally with Philippine network. With Unauthorized Access, telephone speakers and microphones are misused to cause noise pollution.<br/>
			<br/>
			<b>identified:</b> telephone to be DR. SYSON, PEDRO's to cause noise pollution during most recent Host/Foster Family visit in Japan (datetime stamp: 2016-04-29T14:31).<br/>
			<br/>
			Noise pollution included Filipino words pertaining to DR. SYSON, PEDRO does NOT explain what 阿嬤 (Amah, i.e. Lola (Father side)), says in 福建話 (hokkienoue; Southern China Fujian language), so that he ought to feel what it is like.<br/>
			<br/>
			<b>identified:</b> Teroristang Komunista to include among others: DR. SYSON, PEDRO's younger brother, SYSON, RAMON.<br/>
			<br/>
			<b>Note:</b> My Japanese Host/Foster Family and I speak and write in 日本語 (nihongo, i.e. Japanese Language).<br/>
			<br/>
			<b>Executed Action:</b><br/>
			1) filed: incident reports to Law Enforcement, e.g. Office of Public Safety and Security (OPSS), <a class="webServiceLink" href="https://www.cidg.pnp.gov.ph/" target="_blank">Criminal Investigation and Detection Group (CIDG)</a>.<br/>
			--> This is to speed-up system to destroy the Teroristang Komunista group.<br/>
			<br/>
			<b>Observation:</b><br/>
			1) Contrary to what this Teroristang Komunista group promulgates, their "people's language" spoken using "liannanoue", i.e. 福建話 (hokkienoue), is learnable by Filipino citizens.<br/>
			--> observed: children of this Teroristang Komunista group themselves have become less capable, e.g. in speaking their "people's language" and Maparaang Pagbibilang.<br/>
			--> Because of this, they again misuse wireless broadcasting technology, so that Filipino citizens do NOT achieve financial success greater than their group's children.<br/>
			<br/>
			<b>Result:</b><br/>
			Overall skill level and know-how of Filipino people do NOT increase.<br/>
			<br/>
			<b>Reminder:</b><br/>
			Teroristang Komunista are NOT Filipino citizens; They are citizens of their Teroristang Komunista group with fake Filipino citizenship.<br/>
			<br/>
			<b>Recommended Action:</b><br/>
			Puksain ang mga Teroristang Komunista; No need for negotiation.<br/>			
			<br/>
			<b>Additional Note:</b><br/>
			verified: this Teroristang Komunista group has established connections with so-called "elite" schools, e.g. Ateneo de Manila University (ADMU) via former President, VILLARIN, RAMON (pari ng Society of Jesus (SJ));<br/>
			<b>Cause:</b> Quick Money<br/>
			<b>Reminder:</b> Select corporations use as basis for compensation, school performance written in the Transcript of Records.<br/>
			<b>Additional Reminder:</b> In addition to money, there exists exchange of goods and services.<br/>
			<br/>
			--> On 2017-12-11 Evening, until 12:00MN (MONDAY), VILLARIN, RAMON shouted "STRIP", i.e. hubad, to a female whom I was able to identify due to being my former student when I was still teaching at ADMU.<br/>
			--> The wireless broadcasting reached our place of residence and workplace:<br/> 
			--> <b>#2 E. Manalo Ave., Barangay Sto. Niño, 1820, Marikina City</b><br/>
			--> This shout was answered by basketball player, TANG, TYRONE, with "ANG KAILANGAN NIYA SUPPORT..."<br/>
			--> However, after verification, he and his friend, HAW, KEITH, also use wireless broadcasting technology to make noise pollution;<br/>
			--> identified: both due to being my classmates at Xavier High School, San Juan, Greenhills.<br/>
			--> <b>Example Incident:</b> On 2017-11-03, their noise pollution reached my vehicle going (19:00) and while at ROBINSONS MAGNOLIA (20:00).<br/>
			--> learned: during the return home, electricity in vehicle battery has become insufficient to POWER the vehicle.<br/>
			--> filed: incident report to Security Unit of ROBINSONS MAGNOLIA on that evening.<br/>			
			<br/>
			<b>verified:</b> datetime stamp (2021-08-25T05:11), VILLARIN, RAMON's photograph is still on <u>ateneo.edu</u> website.<br/>
			<b>Tanong sa Tagapagpatupad ng Batas:</b> Umamin na ba siya sa Pulis?<br/>
			Umamin na rin ba sina TANG, TYRONE, HAW, KEITH, atbp sa Pulis?<br/>
		</td>
	</tr>
</table>
<h5>--> <b>Example Problem#2:</b> Computer opens Ubuntu BusyBox<br/>
--> This is instead of <a class="webServiceLink" target="_blank" href="http://lubuntu.me">LUBUNTU (LTS 20.04) Operating System (OS)</a>.<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202109/fileSystemErrorFsckCommandToFix.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Executed fsck COMMAND to fix File System count
			</div>
		</td>
	</tr>
</table>
</h5>
<h4>1.2) executed: Technology Transfer action from Classic Google Sites to Usbong Sites</h4>
--> received: notification from Google that Classic Google Sites shall auto-update<br/>
--> By 2021-08, it becomes classified to be version New Google Sites<br/>
--> observed: problems, e.g. font size excessively big or small, after the update<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202109/exampleAutoUpdatedToBeNewGoogleSites.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Example Auto-updated Page: <a class="webServiceLink" target="_blank" href="https://www.usbong.ph/excel/excel-2021-05">Newsletter 2021-05</a>
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
1. <a class="webServiceLink" href="http://store.usbong.ph/server/2021/viewNewsletter202108.php" target="_blank">		
store.usbong.ph/server/2021/viewNewsletter202108.php</a><br/>
--> Web Page with Computer Instructions written using among others:<br/>
--> <a class="webServiceLink" target="_blank" href="https://www.w3schools.com/html/">Hypertext Markup Language (HTML)</a>, <a class="webServiceLink" target="_blank" href="https://www.w3schools.com/html/html_scripts.asp">Javascript</a>, <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP Hypertext Preprocessor (PHP)</a><br/>


			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="96%" height="96%" src="assets/images/newsletter/202109/newsletterWrittenInHTMLEtc.jpg">
			</div>
<br/>
where: Newsletter 2021-08<br/>
Size on Disk: 2.74MB = 32KB + 2.42MB<br/>
note: total = HTML file + resource folder;<br/>
video file in resource folder = 1.44MB<br/>
<br/>
2. <a class="webServiceLink" href="http://store.usbong.ph/server/2021/EXCEL%202021-07%20-%20usbong.htm" target="_blank">		
store.usbong.ph/server/2021/EXCEL%202021-07%20-%20usbong.htm</a><br/>
--> Web Page with Computer Instructions auto-generated by Classic Google Sites; version: 2021-08-21; edited by hand: 2021-09-01<br/>
<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="96%" height="96%" src="assets/images/newsletter/202109/newsletterClassicGoogleSitesAutoGeneratedInstructionsWithEditByHand.jpg">
			</div>

<br/>
where: Newsletter 2021-07<br/>
Size on Disk (raw): 3.588MB = 608KB + 2.98MB<br/>
Size on Disk (edited): 1.427MB = 417KB + 1.01MB<br/>
note: total = HTML file + resource folder;<br/>
<br/>
3. Observation: increased file size via Google Sites auto-generation tool<br/>
--> has excess, repeating instructions due to User Interface Editor Tool<br/>
--> note: without Editor Tool, Unit member shall need to learn to use HTML, et cetera; where: HTML = Hypertext Markup Language<br/>
--> increased HTML file size: over 10x...<br/>
		</td>
	</tr>
</table>


<h4>1.3) executed: system update to speed-up report re-verification</h4>
<h5>
--> 1.3.1) added: computer instructions to add Official Receipts (OR) numbers to transactions from previous days<br/>
--> <b>reminder:</b> select patients return to partner MOSC to request for OR to receive company reimbursement, et cetera<br/>
--> Patients tend to NOT request for OR to eliminate waiting time inside clinic<br/>
</h5>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		<b>Recommended Actions:</b><br/> 
		1) verify: as Unit member used time to finish tasks<br/>
		--> execute: actions to speed-up system<br/>
		<br/>
		If INCORRECT, shall increase delay to finish tasks.<br/>
		If CORRECT, shall decrease, if NOT eliminate, delay to finish tasks.<br/>
		<br/>
		2) verify: ADIDAS History<br/>
		--> goal: assist Football Players as Unit members by updating sport shoes<br/>
		--> Assisting Unit Member NOT sufficient to be Football Player.<br/>
		<br/>				
		<b>Additional Notes:</b><br/> 
		1) There exists increased value with multiple Unit members using system.<br/>
		<br/>
		2) Preferable to Worker than select Computer Interactive systems?<br/>
		2.1) <b>Example:</b> New Game+ of Super Mario Odyssey;<br/> 
		--> where: Unit member collects all remaining items by finishing tasks<br/>
		--> whose value to worker efficiency NOT clear<br/>
		2.2) <b>Example:</b> Super Mario Galaxy 2: Collect 10,000 coins Saru Challenge;<br/> 		
		--> where: Saru = Monkey in nihongo<br/>
		--> where: To finish, shall need to execute consecutive hits;<br/>
		--> however, due to created 3-Dimensional world system,<br/> 
		--> positions of moving targets difficult to identify<br/>
		<br/>
		<b>Reminder:</b><br/>
		1) We CAN STOP use of time to execute tasks<br/> 
		--> whose value is NOT clear;<br/>
		--> where due to created system, tasks are inefficiently finished<br/>
		--> With this action, we classify system to be SOLVED.<br/>
		<br/>
		<b>Examples:</b><br/>
		1.1) School Examination:<br/> 
		--> Guided Preparation Deliberately Insufficient<br/>
		1.2) Securities & Exchange Commission (SEC):<br/>
		--> Online Submission has System Error, Recycled Paper NOT accepted<br/>
		1.3) Human Communication:<br/>
		--> Unclear with Attacks to cause Physical Injury
	</tr>
</table>

<h5>
--> 1.3.2) added: computer instructions to auto-generate Summary Report for the End Day<br/>
--> This action eliminates excess steps for Unit members to re-verify Cash Register's output report.<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202109/endDaySummaryReportHalimbawa.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Auto-generated: Example End Day Summay Report
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
		At present, the Cash Register prints as output the End Day Report. We verify this with the Computer's Report.<br/>
		<br/>
		We experience delay in re-verification to reach 60mins due to among others:<br/>
		1) UNCLEAR printing of Cash Register's report<br/>
		<br/>
		We executed the following actions among others to solve the problem:<br/>
		1) replaced Cash Register's Printer ink<br/>
		2) cleaned Cash Register's Printer part<br/>
		3) requested assistance from Repair Service<br/>
		<br/>
		<b>Output:</b> Actions NOT yet effective to solve the problem. 		
	</tr>
</table>

<h5>
--> 1.3.3) replaced: PLDT Post-paid SIM Card used with PLDT Android telephone with GLOBE's<br/>
--> verified: with PLDT Service Unit along Marcos Highway, there exists "dead-spot", i.e. no or fluctuating network signal, at Sta. Lucia East Grand Mall area;<br/>
-->  verified: action solved unable to successfully send SMS Report at parter Sta. Lucia Healthcare Center (SLHCC) Unit.<br/>
--> <b>recommended:</b> Unit member to bring Android telephone outside Orthopedic & Physical Therapy Unit near the Unit's door or if necessary, near the entrance/exit.<br/>
--> <b>reminder:</b> SLHCC Unit at basement floor.<br/>
</h5>

<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202109/recycledAndroidHTCTelephone.jpg">
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202109/unableToSendSMSFixedByReplacingPLDTSIMWithGlobeCard.jpg">
			</div>
		</td>

	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Recycled Android HTC Telephone
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			Unable to Send SMS;<br/>
			Fixed by Replacing SIM Card<br/>
			</div>
		</td>

	</tr>	
</table>
<br/>
<h5>
--> put: PLDT Post-paid SIM Card in available reserve SAMSUNG non-Android telephone<br/>
--> now used at MOSC HQ for patient notifications, e.g. computation corrections.
</h5>

<h3>4) Continued to share information on Security Defense Force</h3>
<h4>4.1) Example: Usbong Store @Amazon Web Services (AWS)</h4>
--> AWS Console: User Interface Tool to update Computer Server settings<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202109/awsConsoleSecurityInboundRulesHalimbawa.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Halimbawa: AWS Console Security Inbound Rules
			</div>
		</td>
	</tr>
</table>
<br/>
--> We set the Inbound Internet Protocol (IP) Address that is accepted by the Computer Server to receive Commands.<br/>
--> We need to set this due to the IP Address from <a class="webServiceLink" href="https://beta.pldt.com/" target="_blank">PLDT</a> is non-static, i.e. changes.<br/>
--> <b>Reminder:</b> static IP Addresses are available, albeit with additional service fee.<br/>
--> verified: With non-static IP Addresses, attacks from the Teroristang Komunista by accessing computers in the local network become difficult.<br/>
--> However, data going out of the local network become less secure.<br/>
--> verified: even with increased security using HTTPS, with the "S", the Teroristang Komunista has Unauthorized Access to data on web pages.<br/>
--> <b>Web Page Examples:</b> Usbong Store@AWS, <a class="webServiceLink" href="https://www.bpi.com.ph/" target="_blank">Bank of the Philippine Islands (BPI)</a><br/>
--> verified: members of this Teroristang Komunista group who by mistake and yabang misused wireless broadcasting technology to read out-loud text on the web pages after I logged-in.<br/>
--> identified: members to include among others:<br/>
--> cousin, SYSON, JOAN, who is the daughter of SYSON, RAMON,<br/>
--> also a member of this Teroristang Komunista group<br/>
--> <b>Action:</b> filed: incident reports with among others: <a class="webServiceLink" href="https://www.bpi.com.ph/" target="_blank">BPI</a>, Law Enforcement
<table>
	<tr>
		<td>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202109/awsConsoleSecurityInboundRulesHalimbawaFocusedSSH.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Halimbawa: Secure Shell (SSH) Security Inbound Rules
			</div>
		</td>
	</tr>
</table>


<br/>
--> <b>Reminder:</b> We use SSH to execute Commands classified to be UNIX/UNIX-like.<br/>
--> We use the <a class="webServiceLink" href="https://www.putty.org/" target="_blank">PuTTY Tool</a> to connect via SSH to the Computer Server hosted @AWS.<br/>
--> Computer Server Operating System (OS): <a class="webServiceLink" href="https://ubuntu.com/" target="_blank">UBUNTU</a><br/>
--> Computer Client Operating System (OS): <a class="webServiceLink" href="https://docs.microsoft.com/en-us/lifecycle/products/windows-7" target="_blank">Microsoft Windows 7</a><br/>
--> We use Computer Client to access Computer Server.
<br/>
<table>
	<tr>
		<td>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202109/awsPuttyTerminalHalimbawaPart0.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Halimbawa: Computer Server Access via Secure Shell (SSH) 
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
			We reuse the Computer Server @AWS to execute Web Page redirection.<br/>
			<br/>
			Example Input Web Address: <a class="webServiceLink" target="_blank" href="school.usbong.ph">school.usbong.ph</a><br/>
			Example Output Web Address: <a class="webServiceLink" target="_blank" href="www.usbong.ph">www.usbong.ph</a><br/>
			<br/>
			<b>Reminder:</b> We reuse this technique to shorten Web Addresses.<br/>
			<br/>
			We execute this action by editing the .htaccess file.<br/>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="96%" height="96%" src="assets/images/newsletter/202109/awsPuttyEditDotHtAccessHalimbawaPart1.png">
			</div>
			<br/>
			We edit the .htaccess file using the <a class="webServiceLink" target="_blank" href="http://manpages.ubuntu.com/manpages/bionic/man1/nvi.1.html">vi Text Editor tool</a>.<br/>
			This tool is already included with <a class="webServiceLink" href="https://ubuntu.com/" target="_blank">UBUNTU OS</a>.<br/>
			<br/>
			<b>Example Commands:</b><br/>
			<b>i key</b> : INSERT character state<br/>
			<b>ESC key</b> : CANCEL<br/>
			<b>x key</b> : DELETE target character<br/>
			<b>dd key</b> : DELETE target row of characters<br/>
			<b>wq: keys</b> : WRITE, QUIT; save file before exit Editor<br/>
			<b>q: keys</b> : QUIT; exit Editor without saving file<br/>	
		</td>
	</tr>
</table>
<br/>
--> We use <a class="webServiceLink" href="https://winscp.net/eng/index.php" target="_blank">WinSCP</a> Tool to quickly transfer files from Computer Client to Server.<br/>
--> Computer Client Operating System (OS): <a class="webServiceLink" href="https://docs.microsoft.com/en-us/lifecycle/products/windows-7" target="_blank">Microsoft Windows 7</a><br/>
--> Computer Server Operating System (OS): <a class="webServiceLink" href="https://ubuntu.com/" target="_blank">UBUNTU</a><br/>
<table>
	<tr>
		<td>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202109/awsWinscpFileTransferHalimbawaPart1.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Halimbawa: WinSCP Tool Computer Client to Server
			</div>
		</td>
	</tr>
	
<tr>
		<td>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202109/awsWinscpFileTransferHalimbawaPart2.png">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			WinSCP File Transferring from Computer Client to Server
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
			After using as customer both <a class="webServiceLink" href="https://www.amazon.com/" target="_blank">Amazon.com</a> and <a class="webServiceLink" href="https://aws.amazon.com/console/" target="_blank">Amazon Web Services (AWS)</a>, I learned that a key message of the corporation is <b>to value reading</b>.<br/>
			<br/> 
			This action can be observed in the following Amazon services:<br/>
			1) <b>Electronic Books</b> that I purchase for use with the Electronic Book Reader Kindle.<br/>
			<br/>			
			2) <b>AWS documentation</b>, which the reader has to learn to divide into usable parts due to being a long text of know-how.<br/> 
			--> <b>Reminder:</b> Even the Terms and Agreements contain value, e.g. the techniques/technologies used by the service.<br/>
			<br/>
			<b>Recommended Actions:</b><br/> 
			1) Stop salespersons from hurrying you into writing your signature without reading the Terms and Agreements. I observe this behavior even with local banks.<br/>
			<br/>
			2) Continue to increase know-how to build Electronic Book Readers with Human-Computer Interactivity<br/>
			--> <b>Example:</b> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/newsletters">UsbongLikhaApp (mobile): "Nasaan ang Langit?"</a><br/>
			--> verify: <a class="webServiceLink" target="_blank" href="https://github.com/usbong/documentation/blob/master/Usbong/R%26D/Notes/ComputerInteractiveLessonsLearned/GHOSTS'N%20GOBLINS.md">CAPCOM GHOSTS'N GOBLINS (G'NG) Year 1985 Family Computer</a>
			<br/>
			<br/>
			<b>Additional Note:</b><br/>
			1) With AWS, another key message that we can learn is this:<br/>
			--> Its know-how causes people to rank-up due to incorrect usage results in additional fees.<br/>
			--> <b>Example:</b> If you do NOT turn OFF an unused Elastic IP Address, AWS shall continue to add it in your billing statement. The additional cost can increase to be PHP1,000 per month.<br/>
			--> where: Elastic IP Address = static IP Address that auto-links to the correct non-static IP Address of Computer Server when it changes.<br/>
			<br/.
			--> <b>Reminder:</b> Unit Chiefs are financially accountable for the project. Unit members tend to prefer NOT to rank-up to become a Unit Chief.
		</td>
	</tr>
</table>
<br/>


	<br>
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
