<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.

  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20210701
  @date updated: 20210906
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
	<base href="http://localhost/usbong_newsletters/" target="_blank">
<!-- //edited by Mike, 20210831
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
		↑ available PRODUCTS・SERVICES<br/>
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
			<b>Reminder:</b> With .png image files, we can opt to use only a select set of colors per pixel. This is instead of all available colors for each pixel of the image file. Because of this, we can set only 24 colors, with transparency, instead of over this number.
		</td>
	</tr>
</table>
<br/>

TO-DO: -update: this<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<table>
	<tr>
		<td width="35%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202108/drawCircleStackoverflowAnswerPart1V20210908T0917.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td width="35%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202108/drawCircleStackoverflowAnswerPart2V20210908T0917.jpg">
			</div>
		</td>
	</tr>
</table>

<h5>1.1.2) shared: computer instructions to climb diagonal of right triangle tile on <a class="webServiceLink" href="http://www.github.com/usbong/story">www.github.com</a>
</h5>

<table>
	<tr>
		<td width="50%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202108/diagonalMovementTriangleTileWorkInProgressV20210803T1149.jpg">
			</div>
		</td>
		<td width="40%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202108/usbongExampleSOH-CAH-TOA.jpg">
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
			We need to find the correct position in the Hypothenous, i.e. diagonal line of the right triangle. We know the following:<br/>
			<br/>
			1) right triangle, i.e. has 90degrees angle inside;<br/>
			--> There exist 3 angle values in a triangle; added total is 180degrees<br/>
			--> In this case, the two (2) remaining angle degrees vales: 45 and 45;<br/>
			--> from 90/2=45;<br/>
			<br/>
			2) step in X-axis; we set it to be the A, i.e. adjacent side of angle theta<br/>
			3) step in Y-axis; we set it to be the O, i.e. opposite side of angle theta<br/>
			<br/>
			Recommended Action: learn: Maparaang Pagbibilang;<br/>
			Recommended Reference:<br/> 
			learn: <a class="webServiceLink" href="http://www.mathisfun.com/sine-cosine-tangent.html">http://www.mathisfun.com/sine-cosine-tangent.html</a><br/>
			--> last accessed: 20210810<br/> 
			<br/> 
			Additional Note:<br/> 
			1) added: gravity in the world<br/> 
			--> Otherwise, Pilot as Unit member shall appear to float when moving in the opposite direction, e.g. in the x-axis;<br/>
			--> This is instead of moving down due to gravity.<br/> 
			--> 重力がなかったら、山を登れない。<br/> 
			--> juuryoku ga nakattara, yama wo noborenai.<br/> 
			--> Kung walang bigat+lakas, i.e. gravity, hindi makaaakyat ng bundok.<br/>
		</td>
	</tr>
</table>

<h4>1.2) added: web page version of select forms, e.g. from Laboratory Unit</h4>
--> This action is to assist Unit members who need to find, answer, and print the correct forms.
<table>
	<tr>
		<td>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202108/moscLabResultsMiscFormV20210809V2.png">
			</div>
		</td>
	</tr>
</table>
<br/>
--> added: .csv (Comma Separated Values) template for this form<br/>
--> reminder: computer auto-generates the Hypertext Markup Language (HTML) web page<br/>
--> Template used as input to identify the positions,<br/>
--> when creating the table with columns and rows<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			Recommended Reading:<br/>
			Johnson, S. (1998). Who moved my cheese? UK: Vermilion<br/>
			<br/>
			Johnson writes a story of mice and the value of change to achieve cheese, i.e. wealth.<br/>
			<br/>
			There exist variations of mice:<br/>
			1) Those who do NOT change due to already hve cheese; Did NOT want to accept the pattern of decreasing cheese.<br/>
			<br/>
			2) Those who do NOT change due to FEAR of NOT finding more cheese; Prefers to stay as is, despite the pattern of decreasing cheese.<br/>
			<br/>
			3) Those who do change to find new cheese; accepts the pattern of decreasing cheese; Executes action despite need for movement.<br/>
			<br/>
			Additional Notes:<br/>
			1) observation: Expenses > Income Pattern;<br/>
			--> Budol-budol/manloloko/carnapper/cybercriminal/communist terrorist group continues to misues wireless broadcasting technology to cause noise pollution and physical injury.<br/>
			--> Objective: Quick money;<br/>
			--> Recommended Action: Puksain and Teroristang Komunista;<br> 
			No need for negotion<br/> 
			<br/>
			2) Increase in Tamad causes Increase in Masama, e.g. Manloloko<br/>
			--> This is due to as wealth increases, people classified as communist increase.<br/>
			--> "Communist"/Komunista: Tao na naniniwala na dahil sagana na tayo, hindi na natin kailangang maghanap-buhay.<br/>
			--> We clarify that a Communist is NOT necessarily evil.<br/>
			--> Indeed, a Communist may still go to work, albeit believes that it's NOT necessary.<br/>
			--> The problem occurs when they become Terrorists.<br/>
			--> "Terrorist"/Terorista: Tao na gumagawa ng panloloko at pisikal na pananakit sa isa at higit pang mga tao.<br/>
			--> "Communist Terrorist": Tao na naniwala na sagana na siya, kaya lang naubasan gawa ng pagwawaldas; naging Terorista upang mabilis na makakuha ng pera.<br/>
			--> As the next generation continues, e.g. the family business, the increasing number of members in the household causes the previously sufficient income to become insufficient.<br/>
			--> Solution: It is vital that each communist・family・company member learn the value of honest work.
		</td>
	</tr>
</table>

<h3>2) Continued to share information on Health</h3>
--> Security Defense Force: Part 23: BMI: Body Mass Index = 体格指数 (katawan maramihang turong bilang)<br/>
<br/>
BMI＝体重［kg］/ 身長［m]^2 ≧ 25のもの<br/>
where: BMI = Body Mass Index<br/>
体重 (taijuu) = katawan bigat<br/>
身長 (shinchou) = katawan haba<br/>
<br/>
Example: 80kg / (1.80mm)^2 = 24.69<br/>
Reminder: 180cm = 1.80mm<br/>
Reminder: 18.5 ≦～＜25 普通体重 (futsuu taijuu; ordinary body weight); Normal Range<br/>
<h4>2.1) Dagdag na Sanggunian:</h4>
<a class="webServiceLink" href="http://www.jasso.or.jp/data/magazine/pdf/chart_A.pdf">http://www.jasso.or.jp/data/magazine/pdf/chart_A.pdf</a>; last accessed: 20210809<br/>
日本肥満学会　(nihon himan gakkai)<br/>
Japan Society for the Study of Obesity<br/>
<br/>

<h4>2.2) Mungkahing Aksyon:</h4>
<h5>2.2.1) verify: body weight each day; increasing, decreasing, no change?<br/>
--> verify: actions to achieve correct body weight for your height<br/>
--> example#1: continuous walking of at least 20mins daily.<br/> 
--> This action reduces body weight by at least 1kg.<br/>
--> example#2: choosing NOT to eat meat in the evening.<br/> 
--> This is after already eating meat during lunch.<br/>
--> In its stead, eat fruits, vegetables, even rice.<br/>
--> This action also reduces body weight by at least 1kg.<br/>
--> example#3: drink milk <1/2 cup every other day (approx).<br/>
--> Otherwise, due to not as physically active as growing children, we shall grow excessively big.<br/>
</h5>

<h3>3) Continued with Research & Development (R&D)</h3>
--> increased know-how causes increased available products・services<br/>
--> Example: know-how of computer hardware parts and software instructions<br/>

<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				<br/>
				<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202108/makeCommandNotFound.jpg">
				<br/>
				g++ library not yet installed<br/>
				reminder: library contains reusable sets of instructions<br/>			
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				<br/>
				<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202108/fatalError.jpg">
				<br/>
				GL not yet installed<br/>
				where: GL = Graphics Library from OpenGL<br/>			
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				<br/>
				<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202108/ComputerNoInstallDueToDependenciesToAcceptOrNot.jpg">
				<br/>
				Computer Solution#1: Not to install<br/>
				Computer Solution#2: Downgrade existing packages to install<br/>			
			</div>
		</td>
	</tr>
</table>
<br/>
--> computer repair skill increased; service via computer repair unlocked
<br/>
<h4>3.1) Example Computer Repaired:</h4>
<h5>3.1.1) Hardware:</h4>

<table>
	<tr>
		<td width="65%">
			<div class="newsletterImageTextDiv">
				<br/>
				System: 64-bit Operating System (OS)<br/>
				Processor: Intel(R) Core(TM) i3-4160 CPU @3.60GHz<br/>			
				Memory: 4GB Random Access Memory (RAM)<br/>			
				+Digial Video Disc (DVD) hardware device<br/>			
			</div>
		</td>
		<td width="35%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202108/repairedComputerMachine.jpg">
			</div>
		</td>
	</tr>
</table>

<br/>
--> SATA Harddisk Storage read problem;<br/>
--> where: SATA = Serial Advanced Technology Attachment<br/>
<br/>
<div class="newsletterImageTextDiv">
	<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202108/repairHardDiskStorageV2.jpg">
</div>
<br/>
--> verified: replacing SATA cable part (PHP35) to connect to POWER<br/>
--> and data transfer unit;<br/>
--> reminder: variations in SATA cable part exist;<br/>
<br/>
<table>
	<tr>
		<td width="30%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202108/sataCableVariation1.jpg">
			</div>
		</td>
		<td width="30%">
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202108/sataCableVariation2.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td width="30%">
			<div class="newsletterImageTextDiv">
				SATA cable head variation#1
			</div>
		</td>
		<td width="30%">
			<div class="newsletterImageTextDiv">
				SATA cable head variation#2
			</div>
		</td>
	</tr>
</table>
<br/>
--> available physical space still insufficient to cause excess bending of cable to cause read problem<br/>
--> replaced: SATA Harddisk Storage with mini version (PHP650; 160GB) used with Laptop computers<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">		
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202108/sataHarddiskMiniAndNotMini.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				LEFT: SATA HARDDISK (MINI VERSION);<br/>
				RIGHT: SATA HARDDISK
			</div>
		</td>		
	</tr>
</table>

<br/>
--> Computer Estimated Cost with SATA Harddisk Storage (250GB): PHP6,000<br/>

<h5>3.1.2) Software:</h4>
--> Basic Input Output System (BIOS) Only

<h5>3.1.3) Results:</h5>
<h5>3.1.3.1) Hardware:<br/>
obtained: computer valued at PHP4,000 from &#60;PHP4,000 due to un-repaired<br/>
obtained: know-how to execute service repair valued at >PHP685 from PHP0<br/>
obtained: computer product valued at >PHP4,685 from &#60;PHP4,000<br/>
</h5>
<h5>3.1.3.2) Software:<br/>
obtained: <a class="webServiceLink" target="_blank" href="http://lubuntu.me">LUBUNTU (LTS 20.04) OS</a>; from None<br/>
obtained: <a class="webServiceLink" target="_blank" href="http://www.gimp.org">GNU Image Manipulation Program (GIMP)</a>; from None<br/>
obtained: <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Suite, e.g. Calc</a>; from None<br/>
obtained: <a class="webServiceLink" target="_blank" href="https://github.com/usbong/pagong">Usbong Pagong</a>; from <a class="webServiceLink" target="_blank" href="https://github.com/usbong/story">Usbong Story</a><br/>
</h5>

<h4>3.2) Example Computer Reused:</h4>
<div class="newsletterImageTextDiv">
	<!-- added by Mike, 20210828 -->
	<!-- TO-DO: -reverify: adding video -->
	<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202108/reuseMiniComputerV20210815T1215.jpg">
</div>
<h5>3.2.1) Hardware:<br/>
System: 32-bit Operating System (OS)<br/>
Processor: Intel(R) Core(TM) Solo CPU U1400 @1.20GHz<br/>
Memory: 1GB Random Access Memory (RAM)<br/>
Storage: 40GB Harddisk<br/>
<br/>
Computer Purchased Cost: PHP4,000</h5>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
Computers used at the Cashier Unit need NOT be the fastest.<br/>
<br/>
Even computers with the hardware and software specifications in our example can be reused. In addition, they can execute the following software applications, which our partner clinic, Sta. Lucia Health Care Center (SLHCC), uses.<br/>
<br/>
1) <a class="webServiceLink" href="https://github.com/usbong/SLHCC/tree/master/SLHCC/Cashier/generatePayslipAndORSlipForTheDay" target="_blank">auto-generate Payslip for the Day</a><br/>
2) <a class="webServiceLink" href="https://github.com/usbong/SLHCC/tree/master/SLHCC/Cashier/generatePayslipAndORSlipForTheDay" target="_blank">auto-generate Official Receipt for the Day</a><br/>
<br/>
The output of these are printed using a dot-matrix printer connected to each computer.<br/>
<br/>
The computers also connect to a computer server at another Unit using a router with a small antenna. The wireless signal is sufficient to reach 30m (approx) distance. The computers form a Local Area Network (LAN).<br/>
<br/>
By removing excess Graphical User Interface (GUI), such that only the Command Prompt Window remains, the computers can quickly send the Payslip reports for re-verification at the other Unit. 
		</td>
	</tr>
</table>

<h5>3.1.2) Software:</h5>
--> Basic Input Output System (BIOS)<br/>
--> added: <a class="webServiceLink" href="https://docs.microsoft.com/en-us/lifecycle/products/windows-7" target="_blank">Windows 7 Ultimate Service Pack 1</a>; Year 2009<br/>
--> added: <a class="webServiceLink" href="https://www.java.com/en/" target="_blank">Java Virtual Machine (JVM)</a>; from None<br/>
--> added: <a class="webServiceLink" href="https://www.python.org/downloads/" target="_blank">Python Library (version 2.7.18)</a>; from None<br/>
--> added: <a class="webServiceLink" href="https://www.libreoffice.org/discover/calc/" target="_blank">LibreOffice Suite, e.g. Calc</a>; from None<br/>
--> added: <a class="webServiceLink" href="https://github.com/usbong/story" target="_blank">Usbong Story</a>; from None<br/>
--> added: <a class="webServiceLink" href="https://github.com/usbong/pagong" target="_blank">Usbong Pagong</a>; from <a class="webServiceLink" href="https://github.com/usbong/story" target="_blank">Usbong Story</a><br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			After verification, execution speed by 32-bit computer of OpenGL instructions is noticeably slow.<br/>
			<br/>
			<b>Reminder:</b> OpenGL contains sets of reusable instructions to execute 3D and 2D computations.<br/>
			<br/>
			However, due to technique used in OpenGL's instructions, even 2D computations become as noticeably slow, as those of 3D.<br/>
			<br/>
			To solve this, we used Simple Directmedia Layer (SDL) and SDL Image to speed-up execution of 2D computations, and removed OpenGL.<br/>
			<br/>
			<b>Output:</b> <a class="webServiceLink" href="https://github.com/usbong/pagong" target="_blank">Usbong Pagong</a><br/>
			<video width="320" height="240" controls>
			  <source src="assets/images/newsletter/202108/usbongPagongExecSpeedSDLPlusImage32BitOSWin7IntelSoloCPU1Dot2GHz1GBRAMV20210819T1734.mp4" type="video/mp4">
			  Your browser does not support the video tag.
			</video><br/>			
			<br/>
			<b>Additional Notes:</b><br/>
			1) "Command & Conquer: Red Alert" (Year 1996): execution speed noticeably fast<br/>
			--> even with Windows XP machines (32-bit OS);<br/>
			<br/>
			2) "Command & Conquer: Tiberian Sun" (Year 1999): execution speed became noticeably slow; from SDL to Non-SDL?<br/>
			--> observed: NON-SDL and OpenGL NOT anymore noticeably slow with 64-bit Operating Systems<br/>
			<br/>
			3)  There now exists OpenRA: "Open Source real-time strategy game engine for early Westwood games such as Command & Conquer: Red Alert written in C# using SDL and OpenGL. Runs on Windows, Linux, *BSD and Mac OS X."<br/>
			--> <a class="webServiceLink" href="https://github.com/OpenRA/OpenRA" target="_blank">https://github.com/OpenRA/OpenRA</a>; last accessed: 20210821<br/>
			--> reminder: Open Source = computer instructions are available to the public
		</td>
	</tr>
</table>

<h3>4) Continued to share information on Security Defense Force</h3>
Part 24: Pera, Batas<br/>
<h4>4.1) Pera: Money History</h4>
--> exchange of items: guitar to exchange with fish<br/>
--> fish to exchange with vegetables<br/>
--> currency, e.g. Philippine Peso (PHP), speeds-up system<br/>
--> no need to find a person who is willing to exchange his fish for your guitar<br/>
--> we can quickly exchange the guitar for a set amount of money in PHP currency<br/>
--> A set of this set amount we can use in exchange for vegatables, et cetera<br/>
--> <b>Reminder:</b> There also exists exchange of service<br/>
--> <b>Example:</b> Computer repair service<br/>
--> <b>Additional Reminder:</b> What we only need is 金 (money) from those who receive quality products and services from us.<br/>
--> <b>observation:</b> a person in-need of money does not create quality products・services.

<h4>4.2) Batas: Law Interpretation</h4>
--> observation: from American literature, e.g. New York Times, we learn that the law was created to have variations in its interpretation.<br/>
--> Ginawa ang batas na nakabatay sa kung paano mo nauunawaan ito.<br/>
--> However, due to majority wins, a majority group of people has to interpret it in the same way.<br/>
<br/>
--> <b>Problem:</b> in select systems, only a minority has learned Maparaang Pagbibilang<br/>
--> Therefore, the majority can be manipulated to agree in a minority's interpretation<br/>
<br/>
--> <b>Example:</b> A person in-need of money shall accept whatever interpretation to receive money.<br/>
--> A person in such need may be a Father of an ill Mother.<br/>
--> <b>Reminder:</b> maintenance medicine of a Senior Citizen can cost >= PHP5,000 per month<br/>
<br/>
--> However, after verification, the Teroristang Komunista had been using as weapon wireless broadcasting technology<br/>
--> to cause the person to become ill.<br/>
--> <b>Cause:</b> Quick Money;<br/>
--> Kung kailangan-na-kailangan mo ng pera, maipagagawa niya sa iyo ang nais niya.<br/>
--> Therefore, as long as the majority is in-need of money, a minority can manipulate them to accept the interpretation.<br/>
--> <b>Reminder:</b> a pie chart can have one (1) majority and several minorities;<br/>
--> The Teroristang Komunista is an example minority that has NOT learned Maparaang Pagbibilang<br/>
<br/>
--> observation: in nations, e.g. Japan, France, Germany, Switzerland,<br/>
--> people learn to be NOT in-need of money;<br/>
--> <b>Example:</b> eating food readily available to the common people;<br/>
--> contributing via work to the increase in value of the hometown itself<br/>
--> where: hometown is where you live<br/>
<br/>
--> The Teroristang Komunista executes the opposite of these actions,<br/>
--> promulgating: Quick Money<br/>
--> <b>Mungkahing Aksyon:</b> Puksain ang mga Teroristang Komunista; No need for negotiation<br/>

<!-- TO-DO: -update: this -->

	<br>
	<br>
	<br />
	<div class="copyright">
		<span>
			© SYSON, MICHAEL B. & USBONG. 2011~2021. All rights reserved.<br/>
			<a href="https://creativecommons.org/licenses/by/4.0/">
				Creative Commons Attribution License BY 4.0
			</a>
		</span>
	</div>		 
  </body>
</html>
