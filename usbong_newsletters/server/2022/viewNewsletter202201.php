<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211219
  @date updated: 20220202; from 20220129
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
		<b>SAVED TIME</b> : Geld, i.e. GOLD, MONEY<br/>
		スーパーファミリーコンピュータ<br/>
		Su-pa- Famiri- Kompyu-ta<br/>
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
		<b>Example:</b> Auto-write in the page file all the patient names in the Database with the keyword <b>"Miguel</b>"<br/>
		<br/>
		4) We use <a class="webServiceLink" target="_blank" href="https://www.mysql.com/">MySQL</a> to create a structure of all the data, e.g. patient names, to quickly execute actions, e.g. search.<br/> 
		<b>Reminder:</b> No structure : CHAOS/GULO<br/>
		<br/>
		This structure uses the technique that we use with the pen-and-paper TABLE with rows and columns;<br/>
		<br/> 
		With TABLE count > 1, we connect each TABLE in the set using a unique identification (ID) that exists in the two (2) connected TABLEs.<br/>
		<br/>
		<b>Example:</b> <b>Patient ID</b> as used by both <b>Patient</b> TABLE and <b>Transaction</b> TABLE<br/> 
		<br/>
		<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202201/exampleTransactionTableWithPatientId.png">
		<br/>
		<br/>
		<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202201/examplePatientTableWithPatientId.png">
		<br/>
		<br/>
		From observation, I share that Database know-how is a fundamental concept in Computer Science, as applied using
		Information Technology.<br/>
		where: <b>Science</b> : identification and classification of objects<br/>
 		<br/>		
		In addition to <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP</a>, there also exist Computer Languages, e.g. <a class="webServiceLink" target="_blank" href="https://www.python.org/">Python</a>, <a class="webServiceLink" target="_blank" href="https://www.perl.org/">Perl</a>, that can be used for Web Development. However, after verification, I still use <a class="webServiceLink" target="_blank" href="https://www.php.net/">PHP</a> due to being faster to write the computer instructions and also maintain with assistance from the <a class="webServiceLink" target="_blank" href="https://www.codeigniter.com/">CodeIgniter Framework (version 2)</a>.<br/>
		where: <a class="webServiceLink" target="_blank" href="https://www.codeigniter.com/">CodeIgniter Framework</a>: guide to create structure for the files;<br/>		
	  <br/>
		<b>Example:</b><br/> 
		1) <b>View</b> Folder for the page files that is viewed by Humans of the Unit;<br/>
		2) <b>Model</b> Folder for instructions to access the Database<br/>
		3) <b>Controller</b> Folder for instructions to connect the <b>View Folder</b> and the <b>Model</b> Folder by identifying which items to use in the Database <b>query</b>, i.e. <b>question</b>, based on the input from the page files in the <b>View</b> folder
	</tr>
</table>
</h5>
<h5>1.1.2) reminded: Public, <b>VALUE</b> of IT know-how in relation to <b>TIME</b><br/> 
<br/>
<b>Example#1:</b> Incorrect <b>INFORMATION</b> by Human Unit Member that she has already written the Transactions for the Day in the MS Excel Workbook;<br/><br/>
<b>COST to Tech Support:</b> 17mins, attempting to identify in the computer instructions the <b>CAUSE</b> of Incorrect Output<br/>
<br/>
<b>Note:</b> <b>VALUE</b> becomes unclear if <b>SAVED TIME</b> NOT measured;<br/>
where: <b>SAVED TIME</b> : Geld, i.e. GOLD, MONEY<br/>
<br/>
<b>SAVED TIME</b> can be used to execute these actions among others:<br/>
1) Another work task to speed-up system<br/>
2) Rest with own Family Unit<br/>
<br/>
<b>CASIO WRIST WATCH Purchased History</b><br/>
<br/>
<table>
<tr>
	<td>
		<img class="newsletterImage" width="92%" height="92%" src="assets/images/newsletter/202201/purchasedDate20130512_20211224T0912.jpg">
		<b>Purchased Date:</b> 2013-05-12<br/>
		<b>Cost:</b> PHP4950<br/>		
		<b>ELAPSED TIME:</b> OVER 4 YEARS; @PHP3.39/day<br/>		
	</td>
	<td>
		<img class="newsletterImage" width="92%" height="92%" src="assets/images/newsletter/202201/purchasedDate2017090720211224T0909.jpg">
		<b>Purchased Date:</b> 2017-09-07<br/>
		<b>Cost:</b> PHP4950<br/>		
		<b>ELAPSED TIME:</b> OVER 4 YEARS; @PHP3.39/day<br/>		
	</td>
	<td>
		<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202201/purchasedDate20211214_20211224T0907.jpg">
		<b>Purchased Date:</b> 2021-12-14<br/>
		<b>Cost:</b> PHP5000<br/>		
		<b>ELAPSED TIME:</b> ???;<br/>
		@?/day
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
			I recommend using items that I continue to use.<br/>
			<br/>
			<b>Example:</b> CASIO WRIST WATCH<br/>
			<br/>
			In addition, its functions that I mainly use include:<br/>
			1) <b>DAY of the WEEK & Date:</b> to quickly get such information<br/> 
			2) <b>Back LIGHT:</b> to view TIME even when there is insufficient ambient light<br/>
			3) <b>STOP WATCH:</b> to measure <b>ELAPSED TIME</b> when executing physical activities, e.g. <b>RUNNING</b>, <b>SWIMMING</b><br/>
			<br/>
			In the same manner, I recommend eating <b>FOOD</b> that I continue to eat.<br/>
			<b>Example:</b> No need to eat PORK, insects that eat dirt, et cetera<br/>
			<br/>
			<b>Additional Note:</b><br/>			
			1) <b>Question</b> & <b>Answer</b> of whether Husband or Wife is also <b>THIN</b> or <b>BIG</b>;<br/>
			observed: those who eat together the same <b>FOOD</b> shall be of the same size;<br/>
			--> those that are even a little separated due to work, et cetera<br/> 
			--> AND do NOT eat the same <b>FOOD</b> shall NOT be of the same size;<br/>
			<br/>
			<b>Recommended Action:</b><br/>
			1) Work to build <b>OWN Family Unit</b> together @HOME as Husband and Wife<br/>
			2) verify: own weight each morning after waking up and before drinking or eating anything<br/>
			--> If weight increased, this action assists in identifying which <b>FOOD</b> from the previous day caused it.<br/>
			--> <b>Examples of observed FOOD to cause increase in weight:</b><br/> 
			--> chicken gravies, campbell soup, cake cream<br/>
			<br/>
			<b>Recommended Reading:</b><br/>
			--> Suzuki, D.T.'s "Training of a Zen Buddhist Monk"<br/>
			<br/>
			<b>Recommended Computer Game Character:</b><br/>
			--> テリー（ドラゴンクエストVI； スーパーファミリーコンピュータ版）<br/>
			--> teri- (doragonkuesuto VI; su-pa- famiri- kompyu-ta ban)<br/>
			--> classified to be already strong by himself;<br/> 
			--> however, opts to join Unit to be stronger
		</td>
	</tr>
</table>
<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) joined: GitHub Game Off 2021: <b>TUGON</b><br/>
<br/>
<div class="newsletterImageTextDiv">
	<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202201/tugonCoverPage.jpg"><br/>
</div>
<br/>
<div class="newsletterImageTextDiv">
	<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202201/tugonInAction.jpg"><br/>
</div>
<br/>
<div class="newsletterImageTextDiv">
	<img class="newsletterImage" width="70%" height="70%" src="assets/images/newsletter/202201/tugonMissionCompleteChallengeBeatBestHitAccuracyAndElapsedTimeV20211130T0840.jpg"><br/>
</div>

<h4>2.2) Usbong Tugon: Auto-resize Output Image Tile based on Computer/Television Monitor</h4>
<h5>
		--> 2.2.1) verified: using OpenGL (Graphics Library) Technology's scale COMMAND, tile image size CAN be quickly and correctly resized to be SMALLER or LARGER than its original size<br/>
		--> This is due to among others:<br/> 
		--> floating-point numbers are accepted as inputs, instead of ONLY whole numbers<br/>
		--> where: floating-point numbers : numbers with decimal point<br/>
		--> <b>Examples:</b> 2.5, 3.0<br/>
		--> where: whole numbers : integers, numbers with NO decimal point<br/>
		--> <b>Examples:</b> 2, 3<br/>
		--> <b>Reminder#1:</b> 10/3=3.333...<br/>
		--> <b>Reminder#2:</b> Shall need to download and install OpenGL, in addition to SDL (SimpleDirect Library)<br/>	
		<br/>
		--> 2.2.2) verified: using <b>ONLY</b> SDL Technology's set width and height, tile image size CAN be quickly and correctly resized to be SMALLER than its original size if using the same ratio;<br/>
		--> where: same ratio : from 64x64 to 32x32; NOT from 64x64 to 32x35<br/>
		--> <b>Incorrect Output:</b> excess or missing pixel markings, near the tile image's borders<br/>
		<br/>
		--> <b>Additional Note:</b> If size increased to make tile image LARGER, also incorrect output<br/>
		--> <b>Present actions:</b><br/>
		--> 1) use the original Tile Image's pixel width and height, e.g. 64x64;<br/>
		--> 2) resize to be LARGER only Tile Image with transparent borders<br/>
		--> Example: Font texture				
</h5>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			Using available TIME received from system efficiency, we are able to execute <b>Research & Development (R&D)</b> work tasks, e.g. <b>Usbong TUGON</b>. From History, we learn that select computer simulation game companies also executed such action.<br/>
			<br/>
			<b>Example:</b> <a class="webServiceLink" target="_blank" href="https://www.fromsoftware.jp/ww/">From Software</a> (Founded in 1986)<br/>
			<br/>			
			<b>Section 2 CS Development Team:</b><br/> 
			Shinichiro Nishida, Associate General Manager<br/> 
			<b>Section 1 CS Development Team:</b><br/> 
			Yasuyoshi Karasawa, Associate General Manager<br/>
			<b>Production Division:</b> Toshifumi Nabeshima, Unit Chief<br/> 
			<br/>
			<b>From Software Example Works:</b> King's Field Saga, Armored Core Series, Shadow Tower, Echo Knight<br/>
			<br/>
			<b>Select Interview Questions:</b><br/> 
			<b>1) Why did you decide to start making games?</b><br/>
			"When we were making home applications there would sometimes be periods of free time between our customers' orders where we had no work to do. Of course we couldn't sit around doing nothing, so we sometimes wrote PC games. Anyway, at the time when the 3DO, Sega Saturn and PlayStation came out we decided to have a go at producing a game for real. In the end we chose to develop on the PlayStation because it had the highest spec."<br/>
			<br/>
			<b>2) Armored Core was a big departure from your hit RPG series. Were you worried that your fans wouldn't like it?</b><br/>
			"Sony actually said to us that a robot fighting game would have a much smaller base market for our target user, and that concerned us. However, while creating Armored Core, we genuinely enjoyed playing with it and we were fairly confident that it would do well, and when we showed it at the PlayStation Expo, we received a lot of positive feedback from the gamers."<br/>
			<br/>				
			<b>Unit Team Notes:</b><br/>
			"At first there was just one team for King's Field. Then we split this team into two and increased their numbers. Then later on we split these two teams again and enlarged them with new staff. Thus, there are both new people and people who have worked on the King's Field series in this team."<br/>
			<br/>
			--> From <b>3</b> people making games, to <b>7</b> by King's Field; in 1998, <b>30</b> people working only on games.<br/>
			<br/>
			<b> Unit 3D Graphic Engine Note:</b><br/>
			Push Engine to the entertaining edge of game creation<br/>
			<br/>
			<b>Reference:</b><br/>
			Halverson, D., et al. (1998). "Gamers' Republic (Issue 7, December 1998)". CA, USA: Millenium Publications, Inc.
		</td>
	</tr>
</table>

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