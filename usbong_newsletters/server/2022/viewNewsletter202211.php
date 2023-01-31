<!--
  Copyright 2021~2023 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20230131; from 20230130
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
		<b>トイレをきれいにすること</b><br/>
		<b>toire wo kire ni suru koto</b><br/>
				Linisin ang TOILET
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	November & December 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) observed: system efficiency as OUTPUT assisted in identifying <b>ERRORS</b>,</h4>
--> where: system efficiency caused by computer automation<br/> 
--> where: <b>ERRORS</b> had been classified to be acceptable,<br/>
--> due to: <b>PROFITABLE</b> OUTPUT,<br/>
--> adds: <b>ELAPSED TIME of ACTIONS</b> of over 10 years<br/>
--> has after all caused increase in <b>INCOME</b> for clinic,<br/>
--> instead of its decrease; <b>PROFITABLE</b>,<br/>
--> based on an <b>ECONOMIC view</b><br/>
<br/>
--> <b>Example ERROR#1</b>: Telephone Calls are answered after over 1 Telephone Ring,<br/>
--> where: Telephone Calls are of <b>patient questions</b>,<br/>
--> including among others: orthopedic surgeon schedule, item availability;<br/>
--> <b>ACTION:</b> showed: already <b>SOLVABLE</b><br/>
<br/>
--> <b>Example ERROR#2</b>: noticeable <b>UNSOLD</b> and <b>EXPIRED</b> items<br/>
--> where: items are of <b>medicine items</b>;<br/>
--> <b>ACTION:</b> showed: already <b>SOLVABLE</b><br/>
<br/>
--> <b>Example ERROR#3</b>: noticeable <b>DELAY</b> to identify items,<br/>
--> where: items are of <b>non-medicine items</b>;<br/>
--> adds: items have increasing count and variation;<br/>
--> <b>ACTION:</b> remained: <b>NOT SOLVED</b>,<br/>
--> due to: clinic opts to dismiss recommendation<br/>
<br/>
<table class="reminderTable">
	<tr>
		<td>
<a class="webServiceLink" target="_blank" href="https://www.youtube.com/watch?v=075AAaehmN8
">Why Germany's health care system is in crisis<br/> 
(and how the government plans to fix it) | DW News</a>;<br/> 
last accessed: 20230131; from 20230124<br/>
		<br/>
		<b>PROBLEM:</b>	Staff shortages, ECONOMICS > HEALTH,<br/>
<br/>		
		<b>OUTPUT#1:</b> increase of low-cost workers from abroad,<br/>
		--> where: example low-cost workers : nurses<br/>
		<br/>
		<b>OUTPUT#2:</b> increase of in-patient care, <br/>
		--> based: on patient DIAGNOSIS<br/>
		<br/>		
		<b>OUTPUT#3:</b> increase in overall COST,<br/>
		--> where: less money available for pediatric care<br/>
		<br/>
		<b>ACTION as SOLUTION</b><br/>
		1) increase out-patient care;<br/>
		--> <b>REMINDER:</b> pediatric care seasonal
		</td>
	</tr>
</table>



<br/>
<br/>
<br/>
<br/>

<b>non-medicine item quantity</b> is already @<b>zero</b><br/>
--> adds: previously, such items were <b>still displayed</b> to be <b>selectable</b> for purchase;<br/>
--> admits: <b>non-medicine items</b> noticeably have <b>INCORRECT COUNTS</b>;<br/>
--> observed: <b>OUTPUT</b> caused by <b>increasing counts of new items</b><br/> 
--> with <b>varying names</b> and <b>prices</b><br/>
--> <b>recommended:</b> to partner, MOSC, to maintain <b>variation count</b> to only <b>500</b> (MAX);<br/>
--> This is as with select stores in <b>GERMANY</b>;<br/>
<br/>
--> <b>Example#1</b>: <b>ALDI</b> Discount Super Store : <b>600</b> items<br/>
--> <b>Example#2</b>: <b>Spar</b> Discount Super Store : <b>200</b> items<br/>
<br/>
where: items = bought regularly by households;<br/>
<br/>
--> <b>Reference:</b><br/> 
Drucker, P. (1995). "Managing in a time of great change". USA: Penguin Group<br/>
<br/>
--> received: notification to simply <b>continue adding</b><br/>
--> <b>objective:</b> <b>REDUCE</b> non-medicine item <b>PRICES</b> for patients<br/>
--> remembers: <b>PROBLEM</b> to also have existed with <b>medicine items</b><br/> 
--> to cause noticeable <b>UNSOLD</b> and <b>EXPIRED</b> items;<br/>
--> however, <a class="webServiceLink" target="_blank" href="https://github.com/usbong/KMS">KMS</a> has assisted in <b>SOLVING</b> this problem<br/>
--> adds: <b>VARIATIONS</b> in <b>medicine items</b><br/>
--> <b>do NOT increase</b> as with that of non-medicine<br/>
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
			--> TO: <b>INCOME</b> > <b>30K PHP</b> per MONTH as <b>OFW</b><br/>
			--> where: <b>OFW</b> = <b>O</b>verseas <b>F</b>ilipino <b>W</b>orker<br/>
			--> where: <b>OFW</b> : <b>Training @Headquarters</b><br/>
			--> <b>TOTAL ELAPSED TIME</b>: <= <b>5years</b>;<br/>
			--> however, <b>"OFW"</b> keyphrase becomes <b>noticeable</b><br/>
			--> by <b>MANLOLOKO group</b> to cause <b>ATTACKS</b>,<br/> 
			--> e.g. <b>NOISE POLLUTION, THEFT</b><br/>
			--> where: <b>MANLOLOKO group</b> : <b>budol-budol</b>/<b>CARNAPPER</b>/<br/>
			--> <b>SMUGGLER</b>/<b>cybercriminal</b>/<b>Teroristang Komunista</b><br/>
			--> <b>NOT QUICK MONEY</b>; <br/>
			--> <b>TOTAL ELAPSED TIME</b>: >= <b>10years</b>;<br/>

		</td>
	</tr>
</table>
			<br/>
			<table class="reminderTable">
			<tr><td>
			<b>REMINDER:</b><br/> 
			<b>Former President RAMOS, Fidel V (RIP)</b>'s <b>RECOMMENDATION:</b><br/>
			<br/>
			<b>INCREASE</b> of <b>Overseas Filipino Workers (OFW)</b> to <b>INCREASE MONEY</b> in Philippines via <b>U.S. Dollar remittances</b>;<br/>
			<br/>
			--> added: as <b>WARNING</b>, <b>ACTION</b>, causes <b>BRAIN DRAIN</b> if <b>CONTINUED</b> in <b>EXCESS</b>; where: <b>BRAIN DRAIN</b>: <b>know-how</b> <b>shared abroad</b>, NOT in Philippines;<br/>
			<br/>
			--> adds: <b>observation</b> that select BANKS to have noticeable <b>LOW SERVICE FEE</b> for received <b>U.S. Dollar remittances</b> classified as <b>SUPPORT</b> for the <b>ACTION</b>;<br/>
			--> Example: <b>BDO</b>; where: <b>BDO</b> = <b>B</b>ANCO <b>D</b>E <b>O</b>RO<br/>
			</td></tr>
			</table>
			<br/>

			<b>OUTPUT#1: ABROAD</b><br/>
			--> from <b>HISTORY</b>, <b>I.T. workers and Nurses (OFW)</b><br/>
			--> <b>CHANGE CITIZENSHIP</b> to be that of the <b>U.S.A.</b>;<br/> 
			--> however, <b>ZERO</b> noticeable such <b>I.T. workers</b> in <b>WEALTHIEST LIST</b><br/>			
			--> adds: with <b>Nurses</b>, <b>MONEY still NOT sufficient</b><br/>
			--> due to they send their children to study in Philippines, instead of in <b>U.S.A</b>.<br/>
			<br/>
			<b>OUTPUT#2: PHILIPPINES</b><br/>
			--> observed: <b>MANLOLOKO</b> to be <b>INGGIT (ENVIOUS)</b><br/>
			--> due to <b>OFW INCOME</b> appears > <b>ILLEGAL ACTION INCOME</b><br/>
			--> where: <b>ILLEGAL ACTION</b> : <b>smuggling</b>, <b>carnapping</b><br/>

			<h3>
				REMINDER: QUICK MONEY : <b>Vehicle COST</b>
			</h3>
			--> where: <b>Vehicle COST (MOTORCYCLE)</b> @<b>100K PHP (approx)</b> in <b>1 MONTH</b><br/>
			--> adds: <b>STOLEN Vehicle COST</b> CAN be >= <b>500K PHP</b> ("HALF MILYON")<br/>
			--> keyphrase: vehicle parts, know-how, <b>BANAWE (QUEZON CITY (QC))</b>;<br/>
			--> where: <b>BANAWE (QC)</b> : <b>Vehicle Service Shops</b>, <b>POC</b><br/>
			--> <b>POC</b> = <b>PHILIPPINE ORTHOPEDIC CENTER</b><br/>
			<br/>
			--> adds: There also exists <b>BANAWE (RICE TERRACES)</b>;<br/>
			--> location: <b>ISABELA CITY; REGION 2</b><br/>
			--> keyphrase: <b>MANLOLOKO group</b> connected to <b>BANAWE (QC & REGION 2)</b>;<br/>
			--> budol-budol/<b>CARNAPPER</b>/<b>SMUGGLER</b>/cybercriminal/Teroristang Komunista<br/>			
<br/>
<table class="reminderTable">
<tr>
<td>
<h4>
	EXAMPLES OF ITEMS AS QUICK MONEY
</h4>

			<h3>
			<b>Smuggled Agriculture Product:</b> "BIGAS" (RICE)
			</h3>
			
			<h3>
			<b>Carnapped Vehicle:</b> <b>ISUZU</b> Crosswind <b>(AT)</b><br/> 
			</h3>

			--> where: <b>AT</b> = <b>A</b>utomatic <b>T</b>ransmission<br/>
			--> where: <b>MT</b> = <b>M</b>anual <b>T</b>ransmission<br/>

			<h3>
			--> <b>Stolen/copied/modified/destroyed vehicle parts:</b>
			</h3>
<b>			
			--> Part#1) Vehicle Key (SUSI)<br/>
</b>
<br/>
			<b>ISUZU</b> Crosswind <b>(AT)</b>, <b>TOYOTA</b> Innova <b>(AT)</b>, <b>HONDA</b> City <b>(AT)</b>,<br/> 
			<b>MITSUBISHI</b> Montero <b>(AT)</b>, <b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>
			<br/>
<b>			
			--> Part#2) SHIFT-GEAR (KAMBYO)<br/>
</b>			
<br/>
			<b>TOYOTA</b> Innova <b>(AT)</b>, <b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>
			<br/>
<b>
			--> Part#3) AIR-CONDITIONING UNIT<br/>
</b>			
<br/>

			<b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>
			<br/>
<b>
			--> Part#4) Excess RADIO TRANSMITTER/RECEIVER<br/>
</b>			
<br/>
			<b>TOYOTA</b> Innova <b>(AT)</b>, <b>MITSUBISHI</b> Montero <b>(AT)</b>, <b>HONDA</b> City <b>(AT)</b>,<br/> 
			<b>MITSUBISHI</b> Adventure <b>(MT)</b><br/>	
<br/>
keyphrase: <b>FAKE ACCOUNTS</b>, <b>SELLER</b> of <b>STOLEN/SMUGGLED items</b>,<br/> <b>intentionally destroys VEHICLE PARTS</b>, <b>QUICK MONEY<b/>, <b>NO TAX</b><br/> 
<br/>
</td>
</tr>
</table>
<br/>
<br/>

<table class="reminderTable">
<tr>
<td>	
<h4>
	IDENTIFICATION & CLASSIFICATION of MANLOLOKO GROUP MEMBERS
</h4>
identified: <b>MANLOLKO group members</b> to include among others:<br/>
			1) <b>Ramon Syson</b>, younger brother of father, Dr. Pedro Syson<br/>
			2) <b>Ryan Syson</b>, eldest son of Ramon Syson<br/>
			3) <b>Joan Syson</b>, sister of Ryan Syson<br/>			
			4) <b>Tyrone Tang</b>, basketball player;<br/>
			5) <b>Keith Haw</b>, friend and classmate of Tyrone Tang<br/>
			<br/>
			Both <b>Tyrone Tang</b> and <b>Keith Haw</b> are classmates of SYSON, MICHAEL B. @<b>XAVIER SCHOOL</b>, San Juan, Greenhills;<br/> 
			<br/>
			<b>keyphrase:</b> <b>ATTACKERS</b> and <b>PROMULGATORS</b> of <b>"QUICK MONEY"</b><br/>
			--> adds: <b>WIRELESS BROADCASTING TECHNOLOGY</b><br/>
			<br/>

</td>
</tr>
</table>

<br/>
<b>ADDITIONAL REMINDERS</b><br/>
<h5>
<b>MANLOLOKO group</b> <b>LOST</b> > <b>50 Million PHP</b> of <b>smuggled</b> luxury/non-luxury <b>vehicles</b>, <b>agriculture</b> products, et cetera after being <b>caught by Police</b><br/>
<br/>
verified: <b>Bureau of Customs (BOC)</b> NEWS<br/>
1) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/">https://customs.gov.ph/boc-destroys-21-smuggled-vehicles/</a>;<br/> 
last accessed: 20221023; from 20220322<br/>
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
2) @<a class="webServiceLink" target="_blank" href="https://customs.gov.ph/boc-reports-efforts-against-smuggling-of-agricultural-products/">https://customs.gov.ph/boc-reports-efforts-against-smuggling-of-agricultural-products/</a>; last accessed: 20221023; from 20220322<br/>
<b><br/>
| MICP Seizes php 9M Worth of Smuggled Agricultural Products<br/>
| Posted on October 15, 2021<br/> 
</b>
<br/>
--<br/>
<br/>
<b>
BOC-IG recorded a total estimated value of 545.06 million worth of seized smuggled agricultural products. In terms of value, the following are the top three commodities: (1) rice amounting to 206.80 million (2) onions amounting to 190.48 million, and (3) garlic amounting to Php 55 million.<br/>
</b>
<br/>
--<br/>
<br/>
keyphrase: > <b>58.55Million PHP</b> used for <b>YABANG</b><br/> 
--> adds: <b>QUICK MONEY</b>, <b>EXCESS MONEY</b>, <b>ILLEGAL DRUGS</b><br/>
--> where: due to <b>LOST MONEY</b>, <b>MANLOLOKO</b> <b>ATTACKS</b> via <b>NOISE POLLUTION</b><br/>
<br/>
reminder: <b>NOISE POLLUTION</b>=OUTPUT of <b>MANLOLOKO WITH ILLEGAL DRUGS</b><br/>
<br/>
<b>Example NOISE POLLUTION:</b> "TANGA", "'TANGINA", "BOBONG INA",<br/>
"BOBONG PULIS", "PEKPEK/PEPE", "PATAYIN", "ESTUPIDO", "BABOY", "HINGA";<br/>
<br/>
--> adds: <b>MANLOLOKO</b> group misuses <b>WIRELESS BROADCASTING TECHNOLOGY</b> to cause the <b>EFFECT</b> equal with <b>ILLEGAL DRUGS</b>;<br/> 
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
--> <b>Example ILLEGAL DRUGS</b>:  marijuana, 大麻 (taima);<br/>
--> <b>Example EFFECT</b> : excitement, dizziness, illusion</b><br/>
--> via <b>ATTACKING CENTRAL NERVE (BRAIN)</b><br/>
--> keyphrase: <b>NOISE POLLUTION</b>, <b>ENT</b>, <b>INSUFFICIENT OXYGEN</b><br/> 
--> where: <b>ENT</b> = <b>Ear, Nose, Throat</b><br/>
<br/>
<br/> 
<table class="reminderTable">
			<tr><td>
<h4>
			EXECUTED ACTIONS as RECOMMENDED ACTIONS:
</h4>

			<b>ACTION#1</b>) continue: to <b>file incident reports</b> with <b>Law Enforcement</b>;<br/>
			Example#1) <b>Philippine National Police (PNP)</b><br/>
			<br/>
			1.1) <b>Anti-cybercrime Group (ACG): Women and Children Cybercrime Protection Unit</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:pnp.acg.wccpu@gmail.com">pnp.acg.wccpu@gmail.com</a><br/>
			<br/>
			1.2) <b>CRIMINAL INVESTIGATION AND DETECTION GROUP (CIDG)</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:cidgnhqcrmc@gmail.com">cidgnhqcrmc@gmail.com</a><br/>
			<br/>
			Example#2) <b>Office of Public Safety and Security (OPSS: Marikina City) Team</b><br/>
			--> <a class="webServiceLink" target="_blank" href="mailto:opss@marikina.gov.ph">opss@marikina.gov.ph</a><br/>
			<br/>
			reminder: <b>EMERGENCY NUMBER</b> in MARIKINA CITY: <b>161</b><br/>
			<br/>
			<b>Additional Notes (ACTION#1):</b><br/>
			--> <b>Report ACTION</b> classified as <b>START of EXECUTION</b> of <b>LAW ENFORCEMENT</b><br/>
			--> adds: noticeable <b>DELAY</b> to <b>FINISH EXECUTION</b>;<br/>
			--> where: <b>finish</b> : <b>MANLOLOKO</b> with <b>NOISE POLLUTION DESTROYED</b><br/>
			--> keyphrase: <b>already as expected</b>;<br/>
			<br/>
			--> adds: <b>CURRENT OUTPUT</b> is due to <b>CURRENT SYSTEM</b>;<br/>
			--> where: <b>CURRENT SYSTEM</b> : <b>U.S.A. economic system</b><br/>
			--> adds: <b>economic system</b> based on <b>MONEY</b> as <b>VOTE</b> to make <b>DECISION</b>,<br/>
			--> with few <b>ADMIN (PAMAHALAAN)</b> intervention via <b>ENFORCED REGULATION</b><br/>
			<br/>
			<b>OUTPUT#1:</b><br/> 
			<b>PRODUCT/SERVICE</b> continues IF <b>PROFITABLE</b> via <b>VOTED</b> using <b>MONEY</b><br/>
			<br/>
			<b>OUTPUT#2:</b><br/> 
			criminal organization, smuggling/carnapping, <b>QUICK MONEY</b>, extortion/harassment<br/>
			<br/>
			--> adds: <b>POLICE REPORTS</b> are part of <b>"DUE PROCESS"</b> and <b>"DEFENSE"</b>;<br/>
			--> adds: execute <b>WORK TASKS</b> to <b>speed-up system</b>;<br/>
			<br/>
			<b>EXAMPLE#1:</b> <b>share know-how</b> of <b>I.T. security defense</b><br/> 
			--> against <b>PANLOLOKO</b> by <b>MANLOLOKO group</b>;<br/>
			<br/>
			<b>EXAMPLE#2:</b> <b>verify</b> to be updated on <b>existing systems</b><br/> 
			--> <b>ADMIN INTERVENTION</b> in Singapore</b><br/>
			--> from: printed newspaper, <b>The Philippine Star (2022-10-14; FRIDAY)</b><br/>
			--> notes: <b>"Singapore jails OnlyFans creator in first such conviction"</b><br/>
			--> <b>3 weeks jail</b> for defying Police Order not to access account during investigation;<br/>
			--> <b>uploaded photos and video</b> for paying subscribers on <b>adults-only platform</b>; <br/>
			--> income USD 240K after taxes;<br/>
			--> <b>transmitting obscene material electronically</b> in Singapore can be jailed for up to 3 months, fined, or both;<br/>
			--> Titus Low (22), <b>fined USD 2,087</b>; <br/>
			--> reminder: <b>CRIMINAL RECORD HISTORY</b> exists to be <b>NOT REPEATED</b><br/>
			<br/>
			<b>EXAMPLE#3:</b> <b>remember:</b> <b>警察</b> : <b>敬語</b>;<br/>
			--> where: <b>警察</b> : <b>POLICE</b>;<br/>
			--> where:  <b>敬語</b> : <b>RESPECTFUL LANGUAGE</b>;<br/>
			--> reminder: <b>Maiging hindi ka aasang tutulungan ka ng taong pinagsabihan mo ng, ayon sa kaniya, masasakit na salita</b>;<br/>
			--> keyphrase: <b>POLICE REPORTS</b>, <b>"DUE PROCESS"</b>, <b>"DEFENSE"</b><br/>
			<br/>
			<br/>
			<b>ACTION#2</b>) LEARN BUSINESS (: ease people);<br/> 
			--> where: <b>ACCOUNTING</b>: <b>INCOME</b> > <b>EXPENSES</b>;<br/>
			--> reminder#1: <b>CARNAPPER/SMUGGLER</b> : NOT ease people<br/>
			--> reminder#2: <b>PORNOGRAPHY</b> : VIOLENCE<br/>
			<br/> 
			--> <b>EXAMPLE as NEW BUSINESS:</b><br/> 
			--> PAY <b>10K PHP</b>, monthly; receives <b>20K PHP</b> in <b>INCOME</b>?<br/>
			--> <b>PAID-UP CAPITAL</b>: @<b>40K PHP</b>;<br/> 
			--> <b>IF</b> after 4 months, <b>NO INCOME</b>;<br/>  
			--> add: another <b>40K PHP</b> to continue;<br/>
			--> <b>PROBLEM:</b> <b>INCOME</b> < <b>EXPENSES</b>;<br/> 
			<br/> 
			--> <b>IF</b> has <b>INVESTMENT</b>, with <b>4% INTEREST INCOME</b>;<br/> 
			--> opts: for <b>INVESTMENT</b>, instead of <b>START NEW BUSINESS</b><br/>
			--> where: <b>INCOME</b> : <b>< 4% </b>; <br/>
			--> keyphrase: <b>LOGIC</b>;<br/>
			<br/>
			--> <b>EXAMPLE INVESTMENTS into ADMIN (PAMAHALAAN):</b><br/> 
			--> 1) <b>PESO-BOND</b> @<b>6.74% NET INCOME</b>;<br/>
			--> 2) <b>PAG-IBIG MP2</b> @<b>6% (minimum) NET INCOME</b>;<br/>
			--> where: <b>MP2</b> = <b>M</b>ODIFIED <b>P</b>AG-IBIG <b>2</b><br/>
			--> <b>NOT QUICK MONEY</b>;<br/>
			--> <b>TOTAL ELAPSED TIME</b>: >= <b>10 years</b>;<br/>
			
			<br/>
			<b>Additional Notes (ACTION#2):</b><br/>
			--> shares: after <b>computation</b>, <b>CAN</b> by <b>30 years old (approx)</b><br/> 
			--> be <b>self-sufficient</b> to <b>build NEW FAMILY UNIT</b>;<br/>
			--> <b>recommends:</b> <b>investment</b> to be part of <b>EDUCATION</b> of <b>children (count: 2)</b>;<br/>
			--> send: to <b>JAPAN</b> for <b>at least 10 months</b> to <b>study</b>;<br/>
			--> does: <b>NOT</b> require <b>UTANG-NA-LOOB (loan for tuition)</b><br/> 
			--> from <b>children</b> to <b>parents</b>, et cetera;	
			</td></tr>
			</table>

<h3>3) shares: Security Defense Force and Health</h3>
--> observed: from <b>history</b>, <b>ATTACKS</b> to <b>Senior Citizens</b>,<br/>
--> to <b>exist</b> in <b>Japan</b> and <b>Philippines</b>;<br/>
--> keyphrase: <b>to steal money</b>, <b>QUICK MONEY</b>;<br/>
--> observed: as <b>DEFENSE</b>, <b>children</b>, <b>grandchildren</b><br/> 
--> put in <b>same house compound</b>;<br/>
--> adds: however, <b>spouse of married children</b> causes <b>speed-up</b> of <b>DEATH</b>;<br/>
--> due to <b>NEED for QUICK MONEY</b><br/>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">			
		remembers:  MANGA/ANIME <b>ドラえもん</b> (doraemon) from FUJIO, FUJIKO,<br/>
		--> where: <b>ドラえもん</b> as <b>ROBOT CAT</b> from <b>FUTURE</b><br/> 
		--> assists <b>CHILD</b> in the <b>current TIME</b><br/>
		--> due to: <b>without assistance</b>, shall <b>CAUSE PROBLEMS</b>;<br/>
		--> keyphrase: <b>NEED for QUICK MONEY</b><br/>
		<br/>
		<b>Example</b> Story#1: <b>DARUMA DOLL</b> from <b>LOLA</b> needs to have its <b>EYEBALLS drawn</b> by <b>CHILD</b>, <b>NOBITA</b>, to fulfill <b>FAMILY DREAM</b><br/>
		--> keyphrase: <b>NEED of ACTION</b> to cause <b>FUTURE</b><br/>
		--> adds: <b>FAMILY DREAM</b> : <b>NO NEED for QUICK MONEY</b><br/>
		<br/>
		<b>Example</b> Story#2: <b>BULLY</b> who <b>BEATS GUARD DOG</b><br/>
		--> exchanges <b>POSITION</b> with the <b>GUARD DOG</b><br/>
		--> where: <b>BULLY</b> : <b>CHILD</b> classified as <b>MINOR</b><br/>
		--> adds: <b>GUARD DOG</b> as the <b>BULLY</b> opts <b>NOT to BEAT</b> the <b>BULLY</b><br/>
		--> keyphrase: <b>GUARD DOG</b> understands <b>POSITION</b>,<br/> 
		--> teaches <b>BULLY</b> of <b>CORRECT ACTION</b><br/>
		<br/>				
		--> reminder: <b>LECTURES</b> on <b>VALUES</b> <b>NOT</b> <b>EFFECTIVE</b> <b>after K-12</b><br/>
--> where: <b>K-12</b> : <b>High School (AGE of MINOR)</b><br/>
--> adds: <b>EFFECTIVE ACTION</b> is via <b>PUNISHMENT</b>;<br/> 
--> with: <b>CRIMINAL RECORD HISTORY</b> to be <b>NOT REPEATED</b> by <b>SOCIETY</b><br/>
<br/>
--> shares: self to prefer <b>increase in use</b> of <b>MACHINES/ROBOTS</b> to <b>assist</b>,<br/> 
--> <b>instead of</b> increase in <b>people</b>, due to <b>people</b> have <b>EMOTION</b>,<br/>
--> which: causes <b>problem</b>: <b>NEED for QUICK MONEY</b>;<br/> 
--> whose: <b>OUTPUT</b> = <b>intentionally cause</b> <b>HARM</b>;<br/> 
--> keyphrase: <b>EMOTION</b> : <b>IMPULSE BUYING</b>, <b>Income</b> < <b>Expenses</b><br/>
--> <b>NOT MAPARAANG PAGBIBILANG</b><br/>
--> adds: however, <b>MACHINE/ROBOTS</b> do <b>NOT</b> <b>intentionally cause</b> us <b>HARM</b><br/> 
--> <b>Example</b>: Electric Fan;<br/>
--> keyphrase: <b>people</b> with <b>NEED for QUICK MONEY</b> cause <b>HARM</b>
		</td>
	</tr>
</table>

<br/>			
<br/>			
--> observed: in <b>Health</b>, <b>patients</b> <b>CLARIFY</b> select <b>MEDICINE ITEMS</b> @<b>CASHIER UNIT</b><br/>
--> <b>Example#1:</b> Tablet is for Morning and Evening? Not Afternoon and Evening?<br/>
--> <b>Example#2:</b> Kailangan pagkatapos kumain?<br/>
--> <b>Example#3:</b> two (2) tablets per Day?<br/>
--> <b>Example#4:</b> Anong ginagawa nitong gamot?<br/>
--> reminder: <b>VARIATION</b> in <b>MEDICINE ITEMS</b> <b>EXISTS</b><br/>
<br/>
<b>Recommended Actions:</b><br/>
--> 1) bring: <b>NOTEBOOK and PEN</b><br/> 
--> 2) execute: <b>Tiyakin</b> sa <b>Manggagamot (Medical Doctor)</b> ang mga <b>HINDI TIYAK</b><br/>
--> adds: Pinakamaiging <b>TIYAK</b> kayo.<br/>
<br/>
--> observed: such <b>CERTAINTY problem</b> to <b>EXIST</b><br/>
--> due to among others: <b>DOUBT</b>, <b>NOT CLARIFIED</b>, <b>PANLOLOKO</b><br/>
<br/> 
--> reminder: as <b>CAUTION</b>, <b>WALANG PAKI</b> causes <b>MANHID</b><br/>
--> where: <b>MANHID</b> = <b>WALANG PAKIRAMDAM</b><br/>
--> keyphrase: <b>WALANG PAKI</b>, <b>APATHY</b>, <b>APARTHEID</b><br/>
<br/> 
--> adds: <b>OUTPUT</b> of <b>HINDI TIYAK</b> : <b>SYSTEM INEFFICIENCY</b><br/>
--> example: <b>DELAY</b> in <b>identification</b> of <b>MANLOLOKO members</b>,<br/>
--> who use <b>FALSE IDENTITIES</b>, <b>recorded/manipulated voice-overs</b>;<br/>
--> shares: <b>MANLOLOKO</b> : <b>NAGKAKAMALI</b>, <b>YABANG</b>, <b>LIFESTYLE</b> from <b>INCOME</b>
<br/>
<br/>
--> adds: <b>NO NEED</b> to use available <b>remaining TIME</b> to identify <b>significance</b><br/> 
--> of <b>objects/IDEAS</b> that are continuously <b>NOT CLARIFIED</b><br/>
--> keyphrase: <b>OUTPUT</b> = <b>NEGATIVE EMOTION</b><br/>
--> adds: as <b>recommendation</b>, <b>WORK</b> to <b>SPEED-UP SYSTEM</b><br/>
--> where: <b>OUTPUT</b> = <b>QUICK</b> and <b>CORRECT</b>; <b>POSITIVE EMOTION</b>
<br/>


<h3>3) shares: Tanong at Sagot</h3>
<table class="reminderTable">
<tr>
<td>
<br/>
<b>QUESTION: STOCK MARKET as GAMBLING system; QUICK MONEY?</b>
<br/>
<br/>

<b>ANSWER: 
</b><br/>
<br/>
<b>Understanding of STOCK MARKET</b> causes <b>system classification</b> to be <b>NOT GAMBLING</b>, <b>NOT QUICK MONEY</b>;<br/>
<br/>
<b>Example:</b> invest: in <b>STOCK of CORPORATION</b> whose <b>product/service</b> is <b>VITAL</b>;<br/>
--> <b>keyphrase:</b> MOBILITY, e.g. via ROADS, inexpensive FUEL;<br/>
--> put: <b>MONEY</b> for <b>over 10 years</b> so <b>CORPORATION continues</b> with product/service;<br/>
--> adds: <b>NOT</b> as <b>HIGH-FREQUENCY TRADERS</b>,<br/> 
--> who: buy and sell multiple stocks in a MONTH;<br/>
--> adds: <b>SYSTEM earns</b> via each buy and sell, <b>NOT</b> the <b>HIGH-FREQUENCY TRADER</b>;<br/>
--> adds: <b>CAN withdraw MONEY</b> from <b>CORPORATION</b> after <b>over 10 years</b>;<br/>
--> <b>Example:</b> to receive stored <b>MONEY</b> to pay for self's <b>MEDICAL TREATMENT</b>;<br/>
--> observed: however, due to select <b>CRISES</b>, e.g. <b>CORONA VIRUS</b>, select <b>STOCK VALUE</b> <b>decreased</b> to cause noticeable <b>low MONEY</b> for <b>investor</b>;<br/>
--> <b>OUTPUT:</b> select <b>investors</b> began to <b>NEED QUICK MONEY</b>;<br/>
--> <b>Recommended Action:</b> invest in <b>multiple investments</b>, e.g. <b>ADMINISTRATION (PAMAHALAAN)</b>, <b>NOT ONLY</b> via <b>Philippine Stock Exchange index (PSEi)</b>
<br/>
<br/>
</td>
</tr>
</table>

<br/>

<h3>4) shares: Lessons-learned from NEWSPAPERS</h3>
<h4>4.1) shares: Lessons-learned from <a class="webServiceLink" target="_blank" href="https://www.asahi.com">ASAHI.COM (NEWSPAPER)</a></h4>
<h5>
3.1.1) FROM: <a class="webServiceLink" target="_blank" href="https://www.asahi.com/articles/ASQBF66N3QBFULFA00T.html?iref=comtop_7_07">「トイレをきれいにすることから始めた」　JR東社長が語る150年</a>; last accessed: 20221027; from 20221014
<br/><br/>
<blockquote class="usbongBlockquote">
<p>
「トイレをきれいにすることから始めた」　JR東社長が語る150年
</p>
</blockquote>
<br/>
"Sinimulan mula sa paglilinis ng TOILET";<br/> 
Salaysay ng Pinuno ng Samahan ng JR ukol sa 150 Taon nito
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    聞き手・松本真弥、細沢礼輝2022年10月14日 8時00分
</p>
</blockquote>
<br/>
Tagapakinig: MATSUMOTO, MAYA; HOSOZAWA, REIKI; 2022-10-14T08:00
<br/>
<h3>keyphrase</h3>

<blockquote class="usbongBlockquote">
<p>
    「国鉄民営化から35年。国鉄時代はトイレが汚く、駅員が乗客に切符を投げつけていた。JR東はトイレをきれいにすることから始めた。まずは駅に来てもらえるように。次のステップは駅周辺や駅ナカの開発で、いかに駅を便利にしていくかだった」
</p>
</blockquote>
<br/>

"35 Taon ang lumipas mula nang baguhin ang Bakal ng Kaharian bilang Kalakarang Pantao. Noong mga panahon iyon, madumi ang TOILET, at ang mga Tauhan ng Istasyon, ibinabato nila ang TICKET sa mga Sumasakay. Sinimulan ng JR-Kanluran ang paglilinis ng TOILET. Ito'y upang sa simula man lang, may dumating sa Istasyon. Ito naman ang sunod na hakbang: kung paano sa pamamagitan ng pagpapa-unlad ng paligid at looban nito, mapagiginhawa ang Istasyon."
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    「明治政府が誕生し、その翌年に鉄道の建設を決めた。走り始めたのは明治5年（1872年）。軍備優先の議論もあったなかで、そのスピード感に改めて気概を感じる」
</p>
</blockquote>
<br/>
"Isinilang ang Pamahalaan ng MEIJI, at pinagpasiyahan na sa sumunod na taon, itatayo ang Bakal na Daan. Taong 5 ng MEIJI (Taon 1872) nang nagsimulang tumakbo ito. Sa loob ng talakayan ukol sa pag-una sa mga paghahanda ng Militar, mararamdaman ang sagisag ng panibagong kaluluwa sa bilis niyon."
<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    鉄道が日本で開業して14日で150年を迎えた。
</p>
</blockquote>
<br/>

Sa ika-14 na araw, sasalubungin ng Bakal na Daan sa Bansang Hapon ang 150 Taon ng pagbubukas ng kalakaran nito.
<br/>

<h3>Sanggunian:</h3>	
    GOOGLE SEARCH ENGINE; TRANSLATE<br/>
</h5>


<h4>4.2) shares: Lessons-learned from MANILA BULLETIN (NEWSPAPER)</h4>
<h5>
3.2.1) <b>"BSP wants stronger email cybersecurity for banks, non-banks" (20221013; WEDNESDAY)</b><br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
	AUTHOR: CHIPONGIAN, LEE C
</p>
</blockquote>
<br/>

<b>keyphrase:</b> Cybercrime Prevention Act of 2012, EMAIL Address<br/>
<br/>
<b>Bangko Sentral ng Pilipinas (BSP)</b><br/>
<b>Memorandum No. M-2022-043</b><br/>
--> signed: by BSP Deputy Governor: FONACIER, CHUCHI G in 2022-10-07<br/>
<br/>
<b>Cybercrime Prevention Act of 2012</b><br/>
<br/>
<b>EMAIL Address</b><br/>
--> used: as main verification and authentication<br/>
--> linked: with banks, financial, e-payments<br/>
<br/>
<b>Business Email Compromise (BEC)</b><br/>
--> identified: as most prevalent and costly cyberattack<br/>
<br/>
<blockquote class="usbongBlockquote">
<p>
    "...utilizes seemingly legitimate email accounts from another organization to fraudulently trick employees of another business into giving their credentials, money, personal information, financial details or other sensitive data"
</p>
</blockquote>
<br/>
--> <b>FALSE IDENTITY</b> to <b>MISLEAD PEOPLE</b><br/>
--> Example: spoofing of individual's identity via email address

<h4>BSP's Recommended Actions</h4>

<b>    1) verify: email system used</b><br/>
<br/>
<b>    2) verify: email header information</b><br/>
    --> sender, receiver<br/>
<br/>
<b>    3) verify: email content</b><br/>
    --> Phishing, links, file attachments,<br/>
    --> unsolicited requests for personal information, sense of urgency, act quickly<br/>
<br/>
<b>    4) contact: sender via another trusted channel</b><br/> 
    --> Example: in-person meeting, to verify validity of email<br/>
    
<h4>Dagdag</h4>

    file: <b>incident reports</b>, et cetera with <b>email system</b>, <b>Police/Law Enforcement</b><br/>
<br/>
    observed: <b>CRIMINAL members</b> near target,<br/>
    --> e.g. <b>kamag-anak</b>, <b>kaklase</b>, <b>kunwaring kaibigan</b>, <b>nakahanap-buhay</b><br/>
    --> keyphrase: <b>NEED for QUICK MONEY</b>
<br/>
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
