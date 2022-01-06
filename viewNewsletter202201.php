<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211219
  @date updated: 20220106
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
<!-- //edited by Mike, 20211029
	<base href="http://store.usbong.ph/" target="_blank">
-->

  </head>
	  <script>
	  </script>
  <body>
  
  
  TO-DO: -update: this;<br/>
  TO-DO: -add: reusable CSS instructions
  <br/>
  <br/>
  
  
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
		<b>｢得点王｣</b><br/> 
		"tokutenou"<br/>
		"kumuha ng tuldok (punto) hari";<br/>
		Computer Simulation Game<br/>
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	JANUARY 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, select IT know-how to learn<br/> 
--> <b>VALUE</b> noticeable when transactions count > 1000 per year<br/>
--> <b>Output of Action:</b><br/> 
1) Increased Work Income<br/> 
2) Increased Work Contribution to Community, Family, Company<br/>
<br/>
<div>
		<b>Example Work Output:</b> <a class="webServiceLink" href="https://www.usbong.ph/excel" target="_blank">Usbong Computer Software Automation</a><br/>
<!--
		<video width="320" height="240" controls>
		  <source src="assets/images/newsletter/202108/usbongPagongExecSpeedSDLPlusImage32BitOSWin7IntelSoloCPU1Dot2GHz1GBRAMV20210819T1734.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video><br/>	

		<video width="320" height="240" controls>
		<video width="480" height="360" controls>
-->
		<video width="416" height="312" controls>
		  <source src="assets/images/videos/exampleAnnualReportWithBarChartsUsingMSExcelMacroEtCeteraFinishIn11Secs20220101T1049.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video><br/>	
	</div>
<br/>

--> <b>Recommended Actions:</b><br/> 
--> <b>Skill-Level#1)</b> learn: correct use of rows and columns to quickly execute computations<br/> 
--> verify: first using pen-and-paper Workbook<br/>
--> verify: next using Computer Software Workbook, e.g. from <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ww/microsoft-365/buy/microsoft-365?market=ph">Microsoft Excel</a>, <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a><br/>
<br/>
--> <b>Skill-Level#2)</b> learn: correct use of <b>MACRO</b>, i.e. set of instructions, to auto-execute computations<br/>
--> learn: <b>Visual Basic for Applications (VBA)</b> with <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ww/microsoft-365/buy/microsoft-365?market=ph">Microsoft Excel</a><br/>
--> observed: Offices of Private Companies usually have at least one (1) Computer with Microsoft Excel<br/>
--> <b>Example#1:</b> Weekly Health Maintenance Organization (HMO) Report<br/>
<br/>
--> learn: <b>BASIC</b> with <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a><br/>
--> observed: VALUE of output reports that are quickly and corrected finished > VALUE of technique used
--> <b>Example#1:</b> X-ray Unit Charge Slip<br/>
--> <b>Example#2:</b> Weekly Cash Payment Collection Report<br/>
<br/>
--> <b>Reminder#1:</b> <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ww/microsoft-365/buy/microsoft-365?market=ph">Microsoft Office License</a>
<br/>
<table>
<tr>
	<td>
Office Home & Student 2021<br/> 
One-time purchase for PC and Mac<br/> 
₱6,999.00
	</td>
</tr>
</table>
<br/>
--> <b>Reminder#2:</b> <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a>
<br/>
<table>
<tr>
	<td>
		Downloadable version (Legitimate, GRATIS)
	</td>
</tr>
</table>
<br/>

--> <b>Skill-Level#3)</b> learn: correct use of <b>JAVA Computer Language</b> to auto-execute computations with Multiple Computers<br/>
--> Output JAVA application receives as input another computer's Workbook.<br/>
--> <b>note#1:</b> Workbook can be from <a class="webServiceLink" target="_blank" href="https://www.microsoft.com/en-ww/microsoft-365/buy/microsoft-365?market=ph">Microsoft Excel</a> and/or <a class="webServiceLink" target="_blank" href="https://www.libreoffice.org/discover/calc/">LibreOffice Calc</a>.<br/>
--> <b>note#2:</b> File transfer can first be via <b>Universal Serial Bus (USB) Memory Storage</b>.<br/>
--> <b>Example#1:</b> Patient Referral 5% Incentive Summary Report<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		After verification, the next Skill-Level shall require an increased know-how in multiple Computer Languages.<br/><br/>
<b>Skill-Level#4)</b> learn: correct use of <b>Computer Network</b><br/>
--> learn: <b>Computer Web Technologies</b><br/>
<b>4.1) <a class="webServiceLink" target="_blank" href="https://www.apachefriends.org">Apache Web Server</a></b><br/>
<b>4.2) <a class="webServiceLink" target="_blank" href="https://www.w3schools.com/html/">Hypertext Markup Language (HTML)</a></b><br/>
<b>4.3) <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP Hypertext Preprocessor (PHP) Computer Language</a></b><br/>
<b>4.4) <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL (Structured Query Language) Database</a></b><br/>
note: file transfer via computer network</b><br/>
<br/>		
		<b>Additional Notes:</b><br/>
		1) We use the <a class="webServiceLink" target="_blank" href="https://www.apachefriends.org">Apache Web Server</a> so that multiple computers connected to the network can access files in another computer classified to be the Server.<br/>
		<br/>
		2) We use <a class="webServiceLink" target="_blank" href="https://www.w3schools.com/html/">HTML</a> to write the instructions of the page files stored in the Server to be viewed by multiple computers.<br/> 
		<br/>
		3) We use <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP</a> to write the instructions that connect the page files to the Database in the Server.<br/> 
		<b>Example:</b> Auto-write in the page file all the patient names in the Database with the keyword "Miguel"<br/>
		<br/>
		4) We use <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL</a> to create a structure of all the data, e.g. patient names, to quickly execute actions, e.g. search.<br/> 
		<b>Reminder:</b> No structure : CHAOS/GULO<br/>
		<br/>
		
		In addition to <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP</a>, there also exist Computer Languages, e.g. <a class="webServiceLink" target="_blank" href="https://www.python.org/">Python</a>, <a class="webServiceLink" target="_blank" href="https://www.perl.org/">Perl</a>, that can be used for Web Development. However, after verification, I still use PHP due to being faster to write the computer instructions and also maintain with assistance from <a class="webServiceLink" target="_blank" href="https://www.codeigniter.com/">CodeIgniter Framework (version 2)</a>.
	</tr>
</table>

<br/>
<br/>
TO-DO: -update: this
</h5>
<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) Usbong Tugon: Auto-resize Output Image Tile based on Computer/Television Monitor</h4>
<h5>
		--> 2.1.1) verified: using OpenGL (Graphics Library) Technology's scale COMMAND, tile image size CAN be quickly and correctly resized to be SMALLER or LARGER than its original size<br/>
		--> This is due to among others:<br/> 
		--> floating-point numbers are accepted as inputs, instead of ONLY whole numbers<br/>
		--> where: floating-point numbers : numbers with decimal point<br/>
		--> <b>Examples:</b> 2.5, 3.0<br/>
		--> where: whole numbers : integers, numbers with NO decimal point<br/>
		--> <b>Examples:</b> 2, 3<br/>
		--> <b>Reminder#1:</b> 10/3=3.333...<br/>
		--> <b>Reminder#2:</b> Shall need to download and install OpenGL, in addition to SDL (SimpleDirect Library)<br/>	
		<br/>
		--> 2.1.2) verified: using <b>ONLY</b> SDL Technology's set width and height, tile image size CAN be quickly and correctly resized to be SMALLER than its original size if using the same ratio;<br/>
		--> where: same ratio : from 64x64 to 32x32; NOT from 64x64 to 32x35<br/>
		--> <b>Incorrect Output:</b> excess or missing pixel markings, near the tile image's borders<br/>
		<br/>
		--> <b>Additional Note:</b> If size increased to make tile image LARGER, also incorrect output<br/>
		--> <b>Present actions:</b><br/>
		--> 1) use the original Tile Image's pixel width and height, e.g. 64x64;<br/>
		--> 2) resize to be LARGER only Tile Image with transparent borders<br/>
		--> Example: Font texture
				
</h5>
<br/>
<br/>


--> <b>Example:</b> verify: if > 1hr in front of computer/television monitor<br/>
--> observed: when there exists no set task to execute, Unit member shall watch videos on the Internet<br/>
--> observed: This action is equal with verifying news feeds from <b>Social Networking Service (SNS)</b><br/>
--> <b>Recommended Actions:</b><br/> 
--> 1) Stop using Internet access when there is NO clear task to execute<br/>
--> 2) Turn OFF Internet access by 21:00 MAX<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		At present, I <b>STOP</b> Computer (and Internet access) use earlier than 21:00, e.g. 20:00. This is due to excess noise from passing vehicles, e.g. Delivery Trucks, causes me to also wake earlier than 05:00.<br/>
		<br/>
		<b>identified:</b> excess noise to be from wireless signals transmitted by the budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group.<br/>
		--> <b>excess noise</b> classified to be <b><u>noise pollution</u></b> due to vehicles, e.g. Trucks, do NOT ordinarily make such sounds<br/>
		<br/>
		<b>notified:</b> Barangay Sto. Niño, Office of Public Safety and Security (OPSS)<br/>
		<br/>
		<b>Additional Note:</b><br/>
		1) observed: increase in available Time after stopping use of Internet access<br/>
		<br/>
		<b>Recommended Action:</b><br/> 
		received: Time be used with face-to-face interaction with spouse, children...<br/>
		<b>Example Activities:</b><br/> 
		--> play musical instruments, physical training, e.g. swimming,<br/> 
		--> build house using popsickle sticks (which uses Maparaang Pagbibilang),<br/> 
		<br/>
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/builtPopsickleStickSaunaHouseWith7YrOldNephew20161217.jpg"><br/>
				<b>Built Popsickle Stick Sauna House with 7yr old Nephew<br/> 
				in the Year 2016</b>
			</div>
		<br/>
		--> practice languages, e.g. nihongo, Deutsche<br/>
		--> where: nihongo = Japanese language<br/>
		--> where: Deutsche = German language<br/>		
		<br/>
		shared: with another nephew (now 5yrs old; Year 2021), in school, make friends with those who are learning nihongo and/or Deutsche<br/>
		--> verified: Filipino citizens who learn such languages also more quickly learn <b>Maparaang Pagbibilang</b> than those who only learn as foreign language English<br/> 
		--> <b>reminder:</b> learning the language includes learning the history<br/>
		--> <b>Example</b>: History of East and West Germany<br/>
		--> where: progress became <b>efficient</b> in West Germany than East Germany<br/>
		--> This is due to <b>clear communication</b>, i.e. MALINAW, hindi MALABO;<br/>
		--> In addition, statements are based on evidence.<br/>
		--> After result became clear, the Berlin Wall that separated East and West Germany fell; Germany re-unified in the 90's. By the Year 2000's, majority of the German people became classified to be content, i.e. ginhawa na.<br/>
		<br/>
		--> The actions of the budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group with their <b>continuous misuse of wireless broadcasting technology to make noise pollution with physical injury</b> cause delays and inefficiency in progress.<br/>
		--> <b>Recommended Action:</b> Puksain ang mga Teroristang Komunista;<br/> 
		--> No need for negotiation.<br/>
		<br/>
		<b>Recommended Action:</b><br/>
		verify: <b>Deutsche Welle (German Language Wave) Documentary</b><br/>
		--> <a class="webServiceLink" target="_blank" href="https://www.youtube.com/watch?v=YJLzd8EK__g">Angela Merkel - Navigating a world in crisis | DW Documentary</a><br/>
		"Angela Merkel has been Germany’s Chancellor for 16 years. In that time, she has steered the country through countless international crises, frequently crossing swords with other world leaders."
	</tr>
</table>

<h3>2) Continued to share know-how regarding Security Defense Force</h3>
<h4>2.1) Audio Player Transmitter of Frequency Modulator (FM) Radio Wireless Signal</h4>			
<table>
	<tr>
		<td>
			<b>CDR-KING Item</b><br/>
			<div class="newsletterImageTextDiv">
<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202112/cdrKingAudioMusicPlayerTransmitterFMRadioWirelessSignal.jpg">
			</div>
		</td>
		<td width="50%">
			<div class="newsletterImageTextDiv">
				<b>Cost:</b> PHP500~600<br/>
				<b>Net Weight:</b> 21g; <b>Size:</b> 55 x 21 x 15mm<br/>
				<b>Frequency:</b> FM 87.5 – 108MHZ<br/>
				<b>Input:</b> Max DC 5V/2.1A<br/>
				<b>Battery:</b> Built-in 300mAh Battery<br/>
				<b>Charging Time:</b> About 1 Hour<br/>
				<b>Standby Time:</b> About 30 Days<br/>
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
			Over 10years ago, Year 2007~2008, I also verified another CDR-KING audio transmitter. However, instead of using Bluetooth technology to connect the transmitter with the Audio player, we used an audio cable and port.<br/>
			<br/>
			<b>Example Usage:</b> We set the transmitter's frequency to use, e.g. 100. We also set the vehicle radio's receiver frequency to use 100.<br/>
			<br/>
			With this technique, the vehicle radio shall play the transmitted sound using its speakers. In addition, nearby vehicles who also use the frequency 100 shall receive to play the transmitted sound.<br/>
			<br/>
			<b>Reminder:</b> Select frequencies are used by broadcasting networks.<br/>
			<b>Examples:</b> 94.7 Mellow; 100.3 RJ<br/>
			<br/>
			Using the same frequency shall cause the output sound of the vehicle speaker to include the received audio from the CDR-KING transmitter.<br/>
			<br/>
			<b>Result:</b> Excess, i.e. Noise, instead of Clear Music.<br/>
			<br/>
			<b>Additional Notes:</b><br/>
			<b>1) learned: audio transmitter item from younger brother in 2007</b><br/>
			--> observed: item NOT the usual for me due to used vehicle radio, cassette<br/>
			--> observed: vehicle Compact Disc (CD) player (if available) malfunctions to destroy inserted CD<br/>
			--> observed: vehicle air-conditioning machine malfunctions, e.g. loss of freon gas; after incident, vehicle quickly sold<br/>
			--> noted: observations to be included in <b>pattern</b> of related carnapping, vehicle incidents, et cetera that would continue in the coming years<br/>
			--> identified: in 10 years, members of the budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group<br/>
			--> filed: with Law Enforcement, incident reports with identification<br/> 
			<br/>
			<b>2) The transmitter's electric wave as measured by signal strength is NOT as strong as a wireless broadcasting tower's.</b><br/>
			--> verified: the budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group to misuse wireless broadcasting towers such that the transmitted signal reaches Brgy. Marikina Heights <b>AND</b> Brgy. Sto. Niño.<br/>
			<br/>
			<b>Reminder#1:</b> Brgy. Marikina Heights is located at a higher, elevated part of the Marikina Valley;
			Brgy. Sto. Niño is located at a lower part.<br/>
			--> executed: walking from <b>Brgy. Sto. Niño</b> to <b>Brgy. Marikina Heights</b> during non-raining Sunday mornings;<br/> 
			--> <b>Walk Elapsed Time:</b> 40mins (one way)<br/> 
			--> <b>Walk Distance:</b> 960meters (one way)<br/>
			<br/>
			<b>Reminder#2:</b> While at place of residence and workplace in <b>Brgy. Sto. Niño</b>, the budol-budol/manloloko/carnapper/cybercriminal/Teroristang Komunista group transmitted such signal to my <b>CDR-KING mini wireless radio/speaker</b>, while I was attempting to defend myself from their noise using static sound from a supposedly unused radio frequency.<br/>
			<br/>
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="40%" height="40%" src="assets/images/newsletter/202112/miniSpeakerRadioApproxSize6x6cm.jpg"><br/>
				Approx size: 6x6cm
			</div>
			<br/>
			<b>Reminder#3:</b> Android telephone speaker can reach >= 40meters<br/>
			--> The Teroristang Komunista group continues without permit to misuse:<br/> 
			--> Telephone mic to execute eavesdropping,<br/> 
			--> Telephone speaker to cause noise pollution<br/>
			--> verified: wired/wireless-tapping executed using telephone network, GLOBE, and Dr. SYSON, Pedro's GLOBE post-paid SIM telephone number.<br/>
			<br/>
			--> <b> Recommended Actions:</b><br/>
			--> 1) <b>Turn OFF</b> telephone and/or <b>Set to Flight mode</b> to disconnect from wireless network<br/>
			--> 2) <b>notify:</b> spouse, siblings, et cetera to send you a written message via, e.g. Short Messaging Service (SMS) if CALL is NOT received.<br/>
			--> Telephone network shall send you the written message when you re-connect to wireless network.<br/>
			--> 3) <b>notify:</b> Law Enforcement
			<br/>
		</td>
	</tr>
</table>

<h4>2.2) Action Technique: Shotokan Karate</h4>
--> <a class="webServiceLink" target="_blank" href="https://www.youtube.com/user/shotokankataman/videos">https://www.youtube.com/user/shotokankataman/videos</a>;<br/>
--> last accessed: 20211121<br/>
--> <b>Heian Shodan - Shotokan Karate</b><br/>
--> Peace Beginner Level<br/>
<h5>
<b>2.2.1) 合気道 (あいきどう；aikidou）</b><br/>
--> (pinagsamang kaluluwa daan)<br/>
<br/>
<b>2.2.2) 平安　（へいあん、初段～五段; heian, shodan ~ godan）</b><br/>
--> payapa; patag babae may bubong; simulang nibel ~ ikalimang nibel<br/>
<br/>
<b>2.2.3) 鉄騎初段　（てつ＋き＋しょだん; tetsu + ki + shodan）</b><br/>
--> bakal na kabayo malaki maaari simulang nibel<br/>
<br/>
<b>2.2.4) 抜塞大　（ぬく＋ふさぐ＋おおきい; nuku + fusagu + ookii）</b><br/>
--> tanggalin baradong malaki<br/>
<br/>
<b>2.2.5) 観空大　（みる＋くう・そら＋おおきい; miru + kuu・sora + ookii）</b><br/>
--> masdan kawalan・kalangitan malaki<br/>
<br/>
<b>・・・</b><br/>
</h5>
<h4>2.3) Paalala#1:</h4>
<h5>
<b>2.3.1) 結局、歴史では、戦争が伸びてると、</b><br/>
kekkyoku, rekishideha, sensou ga nobiru to,<br/>
Kinalauanan, sa kasaysayan, sa paghaba ng digmaan,<br/>
<br/>
<b>兵士が疲れるし、供給なども切れる・・・</b><br/>
heishi ga tsukarerushi, kyoukyuu nado mo kireru...<br/>
napapagod ang sundalong mag-aaral, napuputol ang bigay na pagsasaluhan (supply)...<br/>
<br/>
<b>敵がわかれば、ターゲットして、</b><br/>
teki ga wakareba, ta-gettoshite,<br/>
Kapag alam na ang kalaban, gawing target,<br/>
<br/>
<b>優柔不断をせずに、早めに終わりにすること。</b><br/>
yuujuu fudan wo sezu ni, hayame ni owarini suru koto.<br/>
hindi gawin ang walang hintong bait at pag-aakma (flexible), tapusin na habang maaga pa.<br/>
<br/>
<b>わくわくすることなく、仕事としての決断でね。</b><br/>
wakuwaku suru koto naku, shigoto toshite no ketsudan de ne.<br/>
hindi gawin nang may excitement; bilang hanap-buhay pagpasiyahan, hinto.<br/>
<br/>
</h5>
<h4>2.4) Paalala#2:</h4>
<h5>
<b>うまくできることをして、</b><br/>
umaku dekiru koto wo shite,<br/>
Gawin ang maiging nagagawa,<br/>
<br/>
<b>意味がわからず、うまくできないことを</b><br/>
imi ga wakarazu, umaku dekinai koto wo<br/>
hindi maunawaan ang saysay, hindi maiging magawa,<br/>
<br/>
<b>他にして良い。</b><br/>
hoka ni shite yoi<br/>
Sa magagawa ipagawa, ayos.<br/>
</h5>
<h4>2.5)　budol-budol/manloloko/carnapper/cybercriminal/Teroristang Komunista group</h4>
<h5>
--> Patuloy araw-gabi ang kanilang maling paggamit ng wireless broadcasting technology sa paggawa ng panlolokong ingay at pisikal na pananakit.<br/>
--> Kahit ang Nanay-nayan kong Hapon binabastos.<br/>
<br/>
--> <b>Mungkahing mga Aksyon:</b><br/>
<b>2.5.1) Matuto ng Maparaang Pagbibilang.</b><br/>
<b>2.5.2) Gawan ng incident report ang Pulis.</b><br/>
<b>2.5.3) Puksain ang mga Teroristang Komunista.</b><br/>
--> Hindi na kailangang makipag-usap sa mga Manloloko.<br/>
--> There is NO COMMUNICATION using Teroristang Komunista's wireless broadcasting technology.<br/>
--> In its stead, increased Noise Pollution with Physical Injury<br/>
</h5>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			<b>生き残りながら、がんばって、</b><br/>
			ikinokorinagara, gambatte,<br/>
			Habang natitirang nabubuhay, gawin nang lubos ang magagawa,<br/>
			<br/>
			<b>この犯罪グループを終わりに致しております。</b><br/>
			kono guru-pu wo owarini itashite ormasu.<br/>
			ang kriminal na samahang ito, wakasin, ginagawa ko po.<br/>
			<br/>
			<b>ご協力をお願い申し上げます。</b><br/>
			gokyouryoku wo onegai moushiagemasu.<br/>
			Ang inyo pong pinagsamang tulong na lakas, aking may galang na pakiusap.<br/>
		</td>
	</tr>
</table>

<br/>
<br/>
TO-DO: -update: this<br/>
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
