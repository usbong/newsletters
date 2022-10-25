<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20221025; from 20221023	
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
	September & October 2022
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
			--> where: <b>OFW</b> : <b>Training @Headquarters</b><br/>
			--> <b>TOTAL ELAPSED TIME</b>: <= <b>5years</b>;<br/>
			--> however, <b>"OFW"</b> keyphrase becomes <b>noticeable</b> by <b>MANLOLOKO group</b><br/>
			--> to cause <b>ATTACKS</b>, e.g. <b>NOISE POLLUTION, THEFT</b><br/>
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
			--> added: as <b>WARNING</b>, <b>ACTION</b>, causes <b>BRAIN DRAIN</b> if <b>CONTINUED</b> in <b>EXCESS</b>;<br/>
			--> where: <b>BRAIN DRAIN</b>: <b>know-how</b> <b>shared abroad</b>, NOT in Philippines;<br/>
			<br/>
			--> adds: <b>observation</b> that select BANKS, e.g. <b>BDO</b>, to have noticeable <b>LOW SERVICE FEE</b> for received <b>U.S. Dollar remittances</b> classified as <b>SUPPORT</b> for the <b>ACTION</b>;<br/>
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
			--> adds: There also exists <b>BANAWE (RICE TERRACES, ISABELA CITY; REGION 2)</b><br/>
			--> keyphrase: <b>MANLOLOKO group</b> connected to <b>BANAWE (QC & REGION 2)</b>;<br/>
			--> budol-budol/<b>CARNAPPER</b>/<b>SMUGGLER</b>/cybercriminal/Teroristang Komunista<br/>
			
			<h3>
			<b>Agriculture product:</b> "BIGAS" (RICE)
			</h3>
			
			<h3>
			<b>Carnapped vehicle:</b> <b>ISUZU</b> Crosswind <b>(AT)</b><br/> 
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
<br/>
identified: <b>MANLOLKO group members</b> to include among others:<br/>
			<b>keyphrase:</b> <b>ATTACKERS</b> and <b>PROMULGATORS</b> of <b>"QUICK MONEY"</b><br/>
			--> adds: <b>WIRELESS BROADCASTING TECHNOLOGY</b><br/>
			<br/>
			1) <b>Ramon Syson</b>, younger brother of father, Dr. Pedro Syson<br/>
			2) <b>Ryan Syson</b>, eldest son of Ramon Syson<br/>
			3) <b>Joan Syson</b>, sister of Ryan Syson<br/>			
			4) <b>Tyrone Tang</b>, basketball player;<br/>
			5) <b>Keith Haw</b>, friend and classmate of Tyrone Tang<br/>
			<br/>
			Both <b>Tyrone Tang</b> and <b>Keith Haw</b> are classmates of SYSON, MICHAEL B. @<b>XAVIER SCHOOL</b>, San Juan, Greenhills;<br/> 
			<br/>
<br/>
<b>ADDITIONAL REMINDERS</b><br/>
<h5>
<b>MANLOLOKO group</b> <b>LOST</b> > <b>50 Million PHP</b> of smuggled luxury/non-luxury vehicles, agriculture products, et cetera after being caught by Police<br/>
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
reminder: <b>NOISE POLLUTION</b> is OUTPUT of <b>MANLOLOKO</b> with <b>ILLEGAL DRUGS</b><br/>
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
			<b>EXECUTED ACTIONS as RECOMMENDED ACTIONS:</b><br/> 
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
			<b>Additional Notes:</b><br/>
			--> <b>Report ACTION</b> classified as <b>start of EXECUTION</b> of <b>LAW ENFORCEMENT</b><br/>
			--> adds: noticeable <b>DELAY</b> to <b>finish EXECUTION</b>;<br/>
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
			--> where: <b>MP2</b> = MODIFIED PAG-IBIG 2<br/>
			--> <b>NOT QUICK MONEY</b>;<br/>
			--> <b>TOTAL ELAPSED TIME</b>: >= <b>10 years</b>;<br/>
			</td></tr>
			</table>
<br/>			
			<br/>
			<br/>
			
		
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

<br/>			
<br/>			
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
