<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20221021; from 20221020	
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
							font-size: 14pt;						
						}
					
						h4
						{
							color: rgb(64,64,64);
							font-size: 12.5pt;						
						}

						h5
						{							
							color: rgb(85,43,0);	
							font-size: 12pt;
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
							color: rgb(40,40,40); /* from black to white */ 
							margin:0;		
							border-left: 5px solid #ab9c7d;
							padding: 2px;					
							padding-left: 3%;
							
							/* text-indent: 5%;*/

						}
												
						table.reminderTable
						{
							border: 1px solid #ab9c7d;
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
<!-- //edited by Mike, 20220831; from 20220325
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
		<b>SURGEON</b> : <b>外科 (げか (geka))</b>, <b>KNIFE</b><br/>
		Maparaang Pagbubukod ng LABAS (ng Kaharian)
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	September 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) verified: eleminating excess displayed OUTPUT;</h4>

--> where: <b>non-medicine item quantity</b> is already @<b>zero</b><br/>
--> adds: previously, such items were <b>still displayed</b> to be <b>selectable</b> for purchase;<br/>
--> admits: <b>non-medicine items</b> noticeably have <b>incorrect counts</b>;<br/>
--> observed: <b>OUTPUT</b> caused by <b>increasing counts of new items</b><br/> 
--> with <b>varying names</b> and <b>prices</b><br/>
--> <b>recommended:</b> to partner, MOSC, to maintain <b>variation count</b> to only <b>500</b> (MAX);<br/>
--> This is as with select stores in <b>GERMANY</b>;<br/>
<br/>
--> <b>Example#1</b>: <b>ALDI</b> Discount Super Store : <b>600</b> items (household regularly buys)<br/>
--> <b>Example#2</b>: <b>Spar</b> Discount Super Store : <b>200</b> items (household regularly buys)<br/>
<br/>
--> <b>Reference:</b><br/> 
Drucker, P. (1995). "Managing in a time of great change". USA: Penguin Group<br/>
<br/>
--> received: notification to simply <b>continue adding</b><br/>
--> <b>objective:</b> <b>REDUCE</b> non-medicine item <b>PRICES</b> for patients<br/>
--> remembers: <b>PROBLEM</b> to also have existed with <b>medicine items</b><br/> 
--> to cause noticeable <b>UNSOLD</b> and <b>EXPIRED</b> items;<br/>
--> however, <a class="webServiceLink" target="_blank" href="https://github.com/usbong/KMS">KMS</a> has assisted in <b>SOLVING</b> this problem<br/>
--> adds: <b>VARIATIONS</b> in medicine items do NOT increase as with that of non-medicine<br/>
--> adds: with medicine items, <b>NAMES</b> and <b>PRICES</b> as labels <b>CLEARER</b>;
<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			<b>FALSE BELIEFS</b><br/>
			<br/>
			#1) <b>NEW Medical Doctor (MD)</b> : <b>"QUICK MONEY"</b><br/>
			observed: <b>classification</b> due to own family members, e.g. <b>Senior Citizens (SC)</b>, who begin to have noticeable <b>NEED for MD</b>;<br/>
			--> where: <b>COST</b> for <b>MD service</b> becomes <b>noticeable</b>;<br/>
			<br/>						
			<b>Medical School COST</b> >= <b>1 Million PHP</b>;<br/>
			--> <b>TOTAL tuition</b> @<b>Private School</b>;<br/>
			--> After 5 years, <b>Residency Training</b> @<b>Public Hospital</b>:<br/> 
			--> <b>INCOME</b>  >= <b>30K PHP</b> per MONTH;<br/>
			--> however, after training, to set new <b>Private Practice</b>;<br/>
			--> <b>INCOME</b> may be < <b>30K PHP</b> per MONTH;<br/>
			--> <b>NOT QUICK MONEY</b>; <br/>
			--> <b>TOTAL ELAPSED TIME</b>: >= <b>10years</b>;<br/>
			<br/>
			<br/>
			#2) <b>NEW Information Technology (IT) Worker</b> : <b>"QUICK MONEY"</b><br/>
			observed: <b>classification</b> due to <b>news reports</b> from the <b>U.S.A.</b>;<br/>
			--> example: <b>Forbes Asia</b>'s <b>List of Wealthiest Americans</b>,<br/>
			--> where: <b>TOP 10</b> in List classified to be in <b>I.T.</b>;<br/>
			--> observed: in the <b>90's</b>, increase of <b>I.T.</b> (and <b>Nursing</b>) <b>students</b>,<br/>
			--> whose <b>objective:</b> to go to <b>U.S.A.</b>;<br/>
			<br/>
			<b>I.T. Computer Programmer Training</b> = <b>1 YEAR (approx)</b><br/>
			--> notes: self by <b>19 years old</b>, already <b>worked to receive payment</b>, <br/>
			--> while as <b>part-time student</b>;<br/>
			--> learns: <b>BUSINESS (: ease people)</b>;<br/>
			--> adds: <b>ACCOUNTING</b> : <b>INCOME</b> > <b>EXPENSES</b>;<br/>	
			--> <b>objective:</b> <b>BUILD COMPANY</b> in <b>PHILIPPINES</b>;<br/>			
			--> FROM: <b>INCOME</b> < <b>30K PHP</b> per MONTH<br/>
			--> TO: <b>INCOME</b> > <b>30K PHP</b> per MONTH as <b>Overseas Filipino Worker (OFW)</b><br/>
			--> <b>TOTAL ELAPSED TIME</b>: <= <b>5years</b>;<br/>
			--> however, <b>"OFW"</b> keyphrase becomes <b>noticeable</b> by <b>MANLOLOKO group</b><br/>
			--> to cause <b>ATTACKS</b>, e.g. <b>NOISE POLLUTION, THEFT</b><br/>
			--> <b>NOT QUICK MONEY</b>; <br/>
			--> <b>TOTAL ELAPSED TIME</b>: >= <b>10years</b>;<br/>
<br/>			
<br/>
TO-DO: -update: this<br/>
<br/>
<br/>

			--> observed: <b>MANLOLOKO</b> to be <b>INGGIT (ENVIOUS)</b><br/>
			--> due to <b>OFW INCOME</b> appears > <b>ILLEGAL ACTION INCOME</b><br/>
			--> where: <b>ILLEGAL ACTION</b> : <b>smuggling</b>, <b>carnapping</b><br/>
			<br/>
			--> <b>REMINDER: QUICK MONEY</b> : <b>Vehicle COST</b></br>  
			--> where: <b>Vehicle COST</b> >= <b>500K PHP</b> in <b>one (1) MONTH</b><br/>
			--> adds: <b>Vehicle MOTORCYCLE COST</b> @ <b>100K PHP (APPROX)</b><br/>
<br/>
<br/>
<br/>
<br/>			
--> learns: business (: ease people); accounting; income > expenses;
--> pay 10K, monthly; receives 20K income?
--> paid-up capital: @40K PHP; 
--> 4 months; no income; add another 40K PHP to continue;
--> IF has investment, with 4% interest as income;
--> opts: for that investment, instead of start new business with < 4% income; LOGIC;
--> examples: 
--> investment: peso-bond @6.74% net income;
--> PAG-IBIG MP2 @6% (minimum) net income;
--> NOT QUICK MONEY;
--> total approx: 10 years;

			
			
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<table class="reminderTable">
			<tr><td>
			<b>REMINDER:</b><br/> 
			<b>Former President RAMOS, Fidel V (RIP)</b>'s <b>RECOMMENDATION:</b><br/>
			<br/>
			<b>INCREASE</b> of <b>Overseas Filipino Workers (OFW)</b> to <b>INCREASE MONEY</b> in Philippines via <b>U.S. Dollar remittances</b>;<br/>
			<br/>
			--> added: as <b>WARNING</b>, that such <b>ACTION</b>, shall cause <b>BRAIN DRAIN</b> if <b>CONTINUED</b> in <b>EXCESS</b>;<br/>
			--> where: <b>BRAIN DRAIN</b>: <b>know-how</b> <b>shared abroad</b>, NOT in Philippines;<br/>
			<br/>
			--> adds: <b>observation</b> that select BANKS, e.g. <b>BDO</b>, to have noticeable <b>LESS SERVICE FEE</b> for received <b>U.S. Dollar remittances</b> classified as <b>SUPPORT</b> for the <b>ACTION</b>;<br/>
			</td></tr>
			</table>
			<br/>
			<b>OUTPUT</b><br/>
			--> from <b>HISTORY</b>, <b>I.T. workers and Nurses</b><br/>
			--> <b>CHANGE CITIZENSHIP</b> to be that of the U.S.A.;<br/> 
			--> however, <b>ZERO</b> noticeable <b>FILIPINO I.T. workers</b> in <b>WEALTHIEST LIST</b><br/>			
			--> adds: with <b>FILIPINO Nurses</b>, <b>MONEY still NOT sufficient</b> due to they send their children to study in Philippines, instead of in U.S.A.<br/>
			<br/>
			<br/>
			
--> self; since 19 years old, worked to receive payment as computer programmer; part-time student;
--> learns: business (: ease people); accounting; income > expenses;
--> pay 10K, monthly; receives 20K income?
--> paid-up capital: @40K PHP; 
--> 4 months; no income; add another 40K PHP to continue;
--> IF has investment, with 4% interest as income;
--> opts: for that investment, instead of start new business with < 4% income; LOGIC;
--> examples: 
--> investment: peso-bond @6.74% net income;
--> PAG-IBIG MP2 @6% (minimum) net income;
--> NOT QUICK MONEY;
--> total approx: 10 years;
--> by 30 years old (approx) be self-sufficient to build NEW FAMILY UNIT;
--> investment to be part of EDUCATION of children (count: 2);
--> send: to JAPAN for at least 10 months to study;
--> does: not require UTANG-NA-LOOB (loan for tuition) from children;

--> history, attacks to senior citizens;
--> exist: in Japan, Philippines;
--> to steal money; QUICK MONEY;
--> defense: children, grand children in same house compound;
--> however, spouse of married children causes speed-up of DEATH;
--> due to NEED for QUICK MONEY

remembers: doraemon

--> prefers: increase in use of MACHINES/ROBOTS to assist, instead of increase in people;
--> due to people have emotion, 
--> which: causes NEED for QUICK; problems;
--> adds: to cause intentionally cause harm;
--> adds: MACHINE/ROBOTS do NOT intentionally cause us harm
--> example: electric fan;

			
		</td>
	</tr>
</table>


<br/>
<br/>


tiyakin sa Medical Doctor ang mga hindi tiyak

<br/>
<br/>

QUESTION: STOCK MARKET as GAMBLING system; QUICK MONEY?

ANSWER: 

Understanding of STOCK MARKET causes classification of system to be NOT GAMBLING, NOT QUICK MONEY;

Example: invest: in STOCK of CORPORATION whose product/service is VITAL;
--> keyphrase: MOBILITY, e.g. via ROADS, inexpensive FUEL;
--> put: MONEY for over 10 years so CORPORATION continues with product/service;
--> adds: NOT as HIGH-FREQUENCY TRADERS, who buys and sells multiple stocks in a MONTH;
--> adds: SYSTEM earns via each buy and sell, NOT the HIGH-FREQUENCY TRADER;
--> adds: CAN withdraw MONEY from CORPORATION after over 10 years;
--> Example: to receive stored MONEY to pay for self's MEDICAL TREATMENT;
--> observed: however, due to select CRISIS, e.g. CORONA VIRUS, select value of stocks decreased to cause noticeable low MONEY for investor;
--> OUTPUT: select investors began to NEED QUICK MONEY;
--> Recommended Action: invest in multiple investments, e.g. ADMINISTRATION (PAMAHALAAN), NOT only via Philippine Stock Exchange Index (PSEI)



<br/>
<br/>



Lessons-learned from: Manila Bulletin
"BSP wants stronger email cybersecurity for banks, non-banks" (20221013; WEDNESDAY)
Author

CHIPONGIAN, LEE C
Keyphrase

Bangko Sentral ng Pilipinas (BSP)
Memorandum No. M-2022-043
--> signed: by BSP Deputy Governor: FONACIER, CHUCHI G in 2022-10-07

Cybercrime Prevention Act of 2012
EMAIL

--> used: as main verification and authentication
--> linked: with banks, financial, e-payments
Business Email Compromise (BEC)

--> identified: as most prevalent and costly cyberattack

    "...utilizes seemingly legitimate email accounts from another organization to fraudulently trick employees of another business into giving their credentials, money, personal information, financial details or other sensitive data"

--> FALSE IDENTITY to MISLEAD PEOPLE
--> Example: spoofing of individual's identity via email address
BSP's Recommended Actions

    verify: email system used

    verify: email header information
    --> sender, receiver

    verify: email content
    --> Phishing, links, file attachments,
    --> unsolicited requests for personal information, sense of urgency, act quickly

    contact: sender via another trusted channel, e.g. in-person meeting, to verify validity of email

Dagdag

    file: incident reports, et cetera with email system, Police/Law Enforcement

    observed: CRIMINAL members near target,
    --> e.g. kamag-anak, kaklase, kunwaring kaibigan, nakahanap-buhay
    --> keyphrase: NEED for QUICK MONEY


<br/>
<br/>
<br/>
<br/>
to share know-how on computers・Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, <b>VALUE</b> of <b>SYSTEM EFFICIENCY</b><br/>
<br/>
--> observed: using <b>GAINED TIME</b>, <b>INFORMATION</b> CAN already be added<br/>
--> from the <b>Index Card</b> to the <b>Computer Database</b><br/>
--> <b>Example INFORMATION:</b> barangay, Senior Citizen Card Number<br/>
<br/>
--> This <b>ACTION</b> assists with the printing of the <b>Acknowledgment Form</b>;<br/>
--> where: <b>PAID SERVICES</b> and <b>ITEMS</b> are auto-written by the <b>COMPUTER</b> in a <b>LIST</b><br/>
--> <b>Example SERVICES:</b> X-RAY, LABORATORY<br/>
--> <b>Example ITEMS:</b> ARM SLING, KNEE IMMOBILIZER<br/>
--> adds: the <b>Acknowledgment Form</b> is given with the <b>Official Receipt (OR)</b><br/>
--> where: <b>OR</b> is <a class="webServiceLink" target="_blank" href="https://www.bir.gov.ph">Bureau of Internal Revenue (BIR)</a>-approved<br/>
--> This is due to <b>handwritten text</b> using the <b>OR</b> appears <b>UNCLEAR</b><br/>

<br/>
<img width="80%" src="assets/images/newsletter/202208/exampleAcknowledgmentFormV20220831.jpeg">

<h3> Gained TIME from System Efficiency is REUSED<br/> 
to FURTHER increase Gained TIME via System Efficiency</h3>

<b>Output:</b> GINHAWA<br/>

--> observed: people who are <b>NOT GINHAWA</b> cause another to be also so;<br/>
--> where: <b>CAUSE</b> due to <u>insufficent</u> <b>TIME</b>;<br/> 
--> where: <b>TIME</b> can be classified as <b>MONEY</b><br/>
<br/>
--> <b>Example:</b><br/> 
Request to NOT verify <b>Medical Prescription</b> to QUICKLY receive <b>Medicine Item</b><br/>
<br/>
<b>reminder#1:</b> <b>Medical Prescription</b> contains <b>INFORMATION</b><br/> 
--> <b>Examples:</b> patient name, last visit, prescribed medicine tablet count/grams;<br/>
<br/>
observed: select patients request <b>family member</b> to buy medicine item for them;<br/>
--> where: <b>family member</b>'s LIST of TASK has increased to be <b>NOT GINHAWA</b><br/>
<br/>
<b>reminder#2:</b> <b>SPEED-UP</b> of patient's <b>DEATH</b> caused by increasing <b>COST</b><br/>
--> where: <b>COST</b> classified with <b>TIME</b> and <b>MONEY</b><br/>
<br/>
verified: <b>NOISE POLLUTION</b> with <b>PHYSICAL INJURY</b> from <b>MANLOLOKO group</b><br/>
--> <b>OUTPUT:</b> speed-up of <b>DEATH</b> and increase in <b>COST</b><br/> 
--> where: <b>MANLOLOKO group</b> includes among others:<br/>
--> <b>budol-budol/carnapper/smuggler/cybercriminal/Teroristang Komunista</b>
<br/>
<br/>
observed: continuous wireless broadcasting of <b>NOISE POLLUTION</b>;<br/>

<table width="90%">
<tr>
 <td>
    <br/>
	<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/miniSpeakerRadioApproxSize6x6cm.jpg"><br/>
	Approx size: 6x6cm
 </td>
 <td>
	NOTE: <b>RADIO FREQUENCY</b> set to <b>STATIC</b>;<br/>
	<br/>
	<b>WIRELESS BROADCASTING TOWER</b> misused to <b>TRANSMIT SIGNAL</b> to <b>FREQUENCY</b> set to <b>STATIC</b>
 </td>
</tr>			
</table>		
<br/>	 
<b>Examples:</b> "TANGA", "TATANGA-TANGA", "'TANGINA", "BOBONG PULIS",<br/> 
"PEKPEK/PEPE", "PATAYIN", "ESTUPIDO", "BABOY", "HINGA";<br/>
<br/>
--> adds: <b>UNSOLICITED</b> <u>breathing interference</u> causes <b>PHYSICAL STIMULATION</b><br/>
--> due to among others: <b>INSUFFICIENT OXYGEN IN BRAIN</b> via blood stream<br/>
--> where: <u>breathing interference</u> caused by among others:<br/> 
--> <b>"HINGA"</b> classified: as <b>NOISE POLLUTION</b><br/>
--> keyphrase: <b>UNSOLICITED</b><br/>
<br/>
<b>EXECUTED ACTIONS:</b> filed: incident reports with <b>Law Enforcement</b>;<br/>
<b>Examples:</b><br/>
1) <b>Philippine National Police (PNP)</b><br/>
<br/>
1.1) <b>Anti-cybercrime Group (ACG): Women and Children Cybercrime Protection Unit</b><br/>
--> <a class="webServiceLink" target="_blank" href="mailto:pnp.acg.wccpu@gmail.com">pnp.acg.wccpu@gmail.com</a><br/>
<br/>
1.2) <b>CRIMINAL INVESTIGATION AND DETECTION GROUP (CIDG)</b><br/>
--> <a class="webServiceLink" target="_blank" href="mailto:cidgnhqcrmc@gmail.com">cidgnhqcrmc@gmail.com</a><br/>
<br/>
2) <b>Office of Public Safety and Security (OPSS: Marikina City) Team</b><br/>
--> <a class="webServiceLink" target="_blank" href="mailto:opss@marikina.gov.ph">opss@marikina.gov.ph</a><br/>
<br/>
reminder: <b>EMERGENCY NUMBER</b> in MARIKINA CITY: <b>161</b><br/>
<br/>
TO-DO: -add: Cainta, Rizal
<br/>
<br/>
TO-DO: -add: COST of STROKE; based on PhilHealth coverage;<br/>
--> remembers: COST higher than coverage for CANCER;
<br/>
<br/>
</h5>

<h3>2) Continued with HEALTH・Security Defense Force</h3>
<h4>2.1) shared: KNOW-HOW and Lessons-learned from <b>WORK</b></h4>
<h5>
<b>MANLOLOKO group</b> <b>LOST</b> > 50 Million PHP of smuggled luxury/non-luxury vehicles, agriculture products, et cetera after being caught by Police<br/>
<br/>
<b>Paalala</b>) verified: <b>Bureau of Customs (BOC)</b> NEWS<br/>
--> 1) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/">https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/</a>;<br/> 
last accessed: 20220322<br/>
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
keyphrase: <b>58.55Million PHP</b> used for <b>YABANG</b><br/> 
<br/>
--> <b>ADDITIONAL OUTPUT#1:</b> increase in <b>NOISE POLLUTION</b> <br/>
--> identified: to be caused by growing <b>MANLOLOKO group</b> <br/>
--> where: <b>MANLOLOKO members</b> are <b>TAMAD</b>, i.e. DO NOT VALUE HONEST WORK;<br/>
--> keyphrase: <b>QUICK MONEY</b><br/>
<br/>
--> <b>MANLOLOKO group</b> now <b>TARGETS</b> people with <b>"PROMISES"</b>;<br/> 
<br/>
<b>Example of "PROMISE":</b> Give you <b>QUICK MONEY</b> via <b>INFORMATION</b><br/>
--> when: a <b>HOUSEHOLD</b> shall <b>NOT be @HOME</b> AND<br/> 
--> where: <b>MONEY</b> is located<br/> 
<br/>
--> <b>TARGET</b>'s received <b>VALUE</b> of item is <b>LESS THAN</b> that of the <b>EXCHANGE</b>;<br/>
<br/>
<b>Example of EXCHANGE:</b> <b>QUICK MONEY</b> for <b>REPEAT CRIMINAL ACTIONS</b><br/> 
<b>where:</b> <b>TARGET</b> shall be continuously <b>USED</b> by <b>MANLOLOKO group</b><br/>
<br/>
<b>CAUSE:</b> <b>SHALL NOT REPORT</b> to <b>POLICE</b> due to <b>FEAR</b><br/>
--> reminder: shall <b>NEED</b> to <b>REVEAL</b> <b>CRIMINAL HISTORY of ACTIONS</b><br/>
<br/>
--> keyphrase: <b>MANLOLOKO group</b>, <b>INGGIT</b><br/>
--> where: <b>SHALL NOT ACCEPT</b> receiving <b>EXCHANGED ITEM/SERVICE</b><br/>
--> whose: <b>VALUE</b> is <b>LOWER THAN</b> their <b>"PROMISE"</b><br/>
<br/>
--> <b>ADDITIONAL OUTPUT#2:</b><br/>
--> <b>Example#1:</b> MOSC PT Unit Member <b>DIED</b>; keyphrase: <b>Ear, Nose, Throat (ENT)</b>;<br/>
--> <b>Example#2:</b> MOSC Orthopedic Surgeon Member suffered <b>STROKE</b><br/> 
--> to be <b>NON-PRACTICING</b> (previously trained @<b>UP INTARMED</b>)<br/>
--> where: <b>UP</b> = University of the Philippines<br/>
--> where: <b>INTARMED (INTegrated Liberal–ARts MEDicine)</b><br/>
--> where: <b>INTARMED</b>: intense yet quick Medical Doctor training<br/>
--> where: <b>Orthopedic</b>: dagdag na pagsasanay na may kinalaman sa mga ito:<br/>
--> <b>BUTO</b>, <b>MASEL</b>, at sa mga <b>NAGDIDIKIT</b> sa mga iyon, e.g. <b>JOINT</b><br/>
--> where: <b>SURGEON</b> : <b>KNIFE</b>, <b>外科</b><br/> 
--> where: <b>外科</b> = <b>げか</b> (geka); <b>Maparaang Pagbubukod ng LABAS (ng Kaharian)</b><br/>

<h3>PAALALA: NO JOKE</h3>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			observed: <b>LIFE DELAYS</b> caused by this <b>MANLOLOKO group</b>;<br/> 
			<br/>
			<b>Example#1:</b> <b>WORK</b> as OFW in I.T. COMPANY in JAPAN, <b>STOPPED</b>,<br/> 
			where: OFW = Overseas Filipino Worker<br/>
			<br/>			
			<b>Example#2:</b> <b>WORK</b> as Teacher @UNIVERSITY, <b>STOPPED</b><br/>
			<br/>
			--> adds: <b>INCOME HIGH</b> or <b>LOW</b> causes <b>INGGIT</b>;<br/>			
			<br/>
			observed: <b>MANLOLOKO group</b> shall continue with the <b>NOISE POLLUTION</b>;<br/> 
			<br/>			
			This is despite <b>TARGET</b> obeys by <b>NOT</b> filing reports with <b>POLICE</b>;<br/>
			<br/>
			<b>GAWA-GAWANG RULE:</b> Keep CRIMINAL ACTIONS <b>"secret"</b><br/>
			where: <b>"secret"</b> : <b>KNOW-HOW</b> of their <b>CRIMINAL techniques</b>;<br/> 
			where: <b>"secret"</b> : <b>NOT to be filed</b> as report with <b>POLICE</b><br/>
			where: <b>"secret"</b> : <b>NOT to be shared</b> with <b>WORK</b> & <b>Family Units</b></b><br/>
			<br/>
			<b>Example KNOW-HOW:</b> unauthorized access to CCTV, misuse of wireless broadcasting<br/>
			<br/>
			<b>Example OUTPUT:</b> "Anong NOISE POLLUTION?", "Wala akong naririnig.", "Wala kaming naririnig.", "Ikaw lang ang nag-iisip niyan.",<br/>
			<br/>
			observed: <b>MANLOLOKO group</b> has been <b>attempting</b> to classify the continuous <b>NOISE POLLUTION</b> as <b>RECOMMENDED</b> by <b>Law Enforcement</b> to <b>catch</b> NOT yet identified <b>MANLOLOKO members</b><br/>
			<br/>
			adds: I have <b>NOT received</b> such <b>RECOMMENDATION</b>,<br/>
			from <b>ALL</b> the <b>LAW ENFORCEMENT UNITS</b> that I contacted<br/> 
			where: <b>RECOMMENDATION</b> = to execute <b>NOISE POLLUTION</b><br/> 
			<br/>
			observed: <u>consistent</u> and <u>continuous</u> <b>NOISE POLLUTION</b><br/>
			--> AND <b>INCORRECT identification and classification</b><br/>
			<b>keyphrase:</b> <u>consistent</u> and <u>continuous</u><br/> 
			<br/>
			
			observed: <b>MANLOLOKO members</b> intentionally choose the <b>WORDS</b><br/> 
			where: <b>WORDS</b> : to be part of their <b>NOISE POLLUTION</b><br/>
			<br/>
			<b>Example:</b> identification errors: <b>hand sign</b> as <b>"baril"</b>;<br/>
			--> Even after 5 years (approx) of <b>JOAN SYSON</b>'s <b>"may baril siya"</b> incident,<br/> 
			<b>MANLOLOKO members</b> have <b>NOT learned</b><br/>
			--> keyphrase: <b>ILLEGAL DRUGS</b>, <b>WIRELESS BROADCASTING</b><br/>
			--> where: <b>JOAN SYSON</b> : <b>MANLOLOKO member</b> and sister of <b>RYAN SYSON</b>,<br/>
			--> assists <b>MANLOLOKO group</b> with <b>CRIMINAL ACTIONS</b><br/>
			--> <b>QUESTION as REMINDER</b>: where is <b>JOAN SYSON</b>'s <b>POLICE REPORT</b>?<br/>
			--> observed: within <b>MANLOLOKO GROUP</b>, <b>FIGHTING</b> exists;<br/>
			--> due to has already <b>ADMITTED</b> to self, <b>CRIMINAL ACTIONS INCORRECT</b><br/> 
			<br/>
			--> added: in my reports, <b>JOAN SYSON</b> executes <b>UNAUTHORIZED ACCESS</b> to <b>web services</b> including among others: <b>ONLINE BANKING</b><br/>
			--> observed: continuous verification of <b>ANOTHER person</b>'s <b>MONEY</b><br/>
			--> <b>keyphrase:</b> <b>INGGIT</b><br/>
			--> adds: <b>MANLOLOKO</b> does <b>NOT</b> understand <b>WHY<br/> 
			--> MANLOLOKO</b> regularly has <b>INSUFFICIENT MONEY</b><br/>		
			<br/>	
			<b>Result as OUTPUT</b>:<br/> 						
			<b>MANLOLOKO members</b> do <b>NOT learn</b> even after over 5 years; still continues with <b>NOISE POLLUTION</b><br/>  
			<br/>						
			<b>CAUSE</b>: <b>"secret"</b>, i.e. <b>KNOW-HOW that is NOT to be shared</b><br/>
			<br/>
			reminder: <u>consistent</u> and <u>continuous</u> <b>NOISE POLLUTION</b>,<br/>
			<b>INCORRECT identification and classification</b>;<br/>
			<br/>
			<b>CAUSE keyphrase:</b> <b>ILLEGAL DRUGS</b> : <b>WHITE SALT (PUTING ASIN)</b><br/> 
			--> where: <b>"SAL (from LATIN)"</b> = <b>"SALARY"</b>;<br/>
			<br/>
			<b>reminder:</b> <b>NO NEED TO AGREE</b> by classifying as <b>CORRECT</b>, item identifications from <b>MANLOLOKO group</b>
			<br/>
			<br/>			
			adds: <b>EXCESS MONEY</b>, <b>SMUGGLING</b>, <b>ILLEGAL DRUGS</b>, <b>NO COMMUNICATION IN FAMILY UNIT</b><br/>
			<br/>
			identified: <b>MANLOLKO group members</b> to include among others:<br/>
			<b>keyphrase:</b> <b>ATTACKERS</b> and <b>PROMULGATORS</b> of <b>"secret"</b><br/>
			<br/>
			1) <b>Ramon Syson</b>, younger brother of father, Dr. Pedro Syson<br/>
			2) <b>Ryan Syson</b>, eldest son of Ramon Syson<br/>
			3) <b>Joan Syson</b>, sister of Ryan Syson<br/>			
			4) <b>Tyrone Tang</b>, basketball player;<br/>
			5) <b>Keith Haw</b>, friend and classmate of Tyrone Tang<br/>
			<br/>
			Both <b>Tyrone Tang</b> and <b>Keith Haw</b> are classmates of SYSON, MICHAEL B. @<b>XAVIER SCHOOL</b>, San Juan, Greenhills;<br/> 
			<br/>
			<b>Recommended ACTIONS</b>:<br/> 
			1) <b>NO NEED</b> to even attempt to <b>COMMUNICATE</b> with <b>MANLOLOKO</b><br/>
			--> reminder: <b>LECTURES</b> on <b>VALUES NOT</b> anymore <b>EFFECTIVE</b> after <b>K-12</b><br/>
			--> where: <b>K-12</b> : High School<br/>
			<br/>
			2) <b>PREPARE</b> to <b>BE READY</b> to <b>DESTROY MANLOLOKO</b><br/> 
			--> keyphrase as reminder: <b>COST</b>, <b>NO EXCITEMENT</b><br/>
			--> where: <b>DESTROY</b> : <b>PUKSAIN</b><br/>
			<h3>PAALALA: NO JOKE</h3>
			</td>	
	</tr>
</table>

<h3>3) shares: Lessons-learned from NEWSPAPERS</h3>
<h4>3.1) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">ASAHI.COM (NEWSPAPER)</a></h4>
<h5>
3.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQ776T1ZQ76UTFL02M.html?iref=comtop_Tech_science_02">（社説）中韓国交３０年　日本含めた連携強化を</a>; last accessed: 20220825
<br/><br/>
<blockquote class="usbongBlockquote">
<p>
（社説）中韓国交３０年　日本含めた連携強化を    
</p>
</blockquote>
<br/>

Usap-Lipunan: 30 Taong Palitan ng Kahariang Tsina at Korea<br/>
Pagpapalakas ng Ugnayan kabilang ang Hapon<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    2022年8月25日 5時00分
</p>
</blockquote>
<br/>
2022-08-25T05:00<br/>

<h4>Dagdag#1</h4>

Unawain ang paraan ng pagsusulat.<br/>
<br/>
<b>keyphrase:</b> kasaysayan, labanan, pagkilos, opinion<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    懸案の解決に向け、政治指導者は率先して汗をかくべきだ。常に風通しを良くし、対話できる環境を整えておくことこそ安全保障の第一歩である。
</p>
</blockquote>
<br/>

Tungo sa paglutas ng suliranin, kailangang nangunguna sa pagkilos ang mga Gumagabay sa PULITIKA. Unang hakbang sa kaligtasan at pagtatanggol mula sa pahamak ang pag-aayos bilang paghahanda ng kapaligiran kung saan maaaring makapag-usap, sa pamamagitan ng parating pagpapabuti ng daloy ng hangin sa paghinga.

<h4>Dagdag#2</h4>

Maaalala ang pagkilos sa ganitong pook sa mga sistema ng labanan tulad ng CHESS, I-GO, atbp<br/>
<br/>
<b>keyphrase:</b> turn-based, tactical, strategy, exchange, sanayan<br/>
<br/>
Naiiba ito sa pagkilos sa pook ng pakikipaglaban kung saan naroon ang sundalo.<br/>
<br/>
<b>keyphrase:</b> AKSYON, FIGHTING, impulse, bunsod, sanayan<br/>
<br/>
<b>Sanggunian:</b><br/>
    GOOGLE SEARCH ENGINE; TRANSLATE<br/>
</h5>

<h5>
3.1.2) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/photo/AS20220829002067.html">朝日新聞デジタル【写真】旧日本兵、戦火の下の笑顔　隠れた胸の内は 写真・図版</a>; last accessed: 20220830
<br/><br/>
<blockquote class="usbongBlockquote">
<p>
朝日新聞デジタル【写真】旧日本兵、戦火の下の笑顔　隠れた胸の内は 写真・図版  
</p>
</blockquote>
<br/>

Pahayagan ng ASAHI Digital [LARAWAN] Dating Sundalo ng Hapon, Ngiti sa ilalim ng Sunog ng Labanan; Ang Nakatago sa Loob ng Dibdib; Larawan; Anyo<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    1945（昭和20）年 米軍が沖縄に上陸し、爆弾を積んだ戦闘機で敵艦に体当たりする「特攻」が拡大する中、8人の特攻隊員が出撃する約30分前に記念写真におさまった。
</p>
</blockquote>
<br/>
Taong 1945 (SHOWA 20), lumapag sa OKINAWA ang Hukbo ng Amerika, sa loob ng panahon ng pagpapalaganap ng "TOKKOU (Natatanging Pagsalakay)", kung saan binabangga ang kalabang barko, sa pamamagitan ng Makina ng Pakikipaglaban, na puno ng Balang Pampasabog, isinaayos sa Larawan ng Alaala ang 8 tauhang tao ng Natatanging Pagsalakay, 30minuto bago ang pag-alis upang sumalakay.<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
 知覧特攻基地（鹿児島県）で撮影した本社写真部員は、隊員（左から2人目）に「御両親様　昭和二十年五月十八日十九時二十分頃　沖縄島周辺にて戦死す。十四時三十分出発前書す」と紙切れに走り書きされた「遺書」を託されたという
</p>
</blockquote>
<br/>

Sa Pangunahing Pook ng Natatanging Pagsalakay ng CHIRAN (Pook KAGOSHIMA), kung saan kinuha itong larawan ng mga Tauhan ng Unit, sinasabing tumatakbong isinulat sa hinating papel itong ipinagkatiwalang "Pamanang Sulat" ng Tauhan (ikalawang tao mula kaliwa), "Sa iginagalang na Magulang, SHOWA 20 (Taong 1945), ika-18 araw ng ika-5 buwan, 19:25; Sa paligid ng Isla ng OKINAWA, patay sa labanan. Isinulat bago lumuwas ng 14:30".

<h4>知覧 (CHIRAN): Kita ng Alam</h4>

<b>Paalala:</b> Nasa <b>ASAHI Digital website</b> ang <b>LARAWAN</b>:<br/> 
<a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/photo/AS20220829002067.html">https://www.asahi.com/articles/photo/AS20220829002067.html
</a>;<br/> 
last accessed: 20220830<br/>
<br/>
<b>Sanggunian:</b><br/>
GOOGLE SEARCH ENGINE; TRANSLATE<br/>

<h4>3.2) shares: Lessons-learned from THE PHILIPPINE STAR (NEWSPAPER)</h4>
<h5>
3.2.1) FROM: <b>Pag-IBIG nets P20.48B in H1 (2022-08-12)</b><br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
	Pag-IBIG Fund posted a net income of P20.48 billion in the first half of 2022, up 27 percent compared to the same period last year.
</p>
</blockquote>
<br/>

<b>keyphrase:</b> housing, short-tern loans (cash loans), and trading gains<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
The agency has so far released P51.96 billion in home loans to finance the acquisition of 47,184 homes for its members during the first half of the year.
</p>
</blockquote>

<br/>
<blockquote class="usbongBlockquote">
<p>
Savings from its members reached P38.83 billion, strongly driven by the agency's popular MP2 Savings where members have collectively saved P19.40 billion.</p>
</blockquote>
<br/>
<blockquote class="usbongBlockquote">
<p>
"Pag-IBIG Fund is wholly-owned by the Filipino workers. That is why it is our responsibility, as the administrators of the Fund, to manage their contributions responsibly and excellently. With our second half prospects in terms of loan releases and collections high, we are optimistic that we will achieve at least P30 billion in annual net income for the sixth consecutive year. This is our commitment to our members"
</p>
</blockquote>
<br/>

<b>keyphrase:</b> Pag-IBIG Fund CEO Moti, Acmad Rizaldy<br/>

<br/>	
</h5>
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
