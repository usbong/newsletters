<!--
  Copyright 2021~2022 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20220217
  @date updated: 20220228; from 20220223
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
<!-- //edited by Mike, 20220218
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
		<b>防衛大学校</b> (bouei daigakkou; Defense Force University)<br/> 
		<b>Past Examinations</b>; <b>Reminder:</b><br/>
		"Ipaubaya ang aking katawan sa panginoon."<br/>		
	</div>
	<br>
	<div class="newsletterSubTitle">
		PHILIPPINES: USBONG CONTINUES TO PROVIDE<br/>
		COMPUTER SERVICE ASSISTANCE<br/>
		BY SHARING KNOW-HOW ON MAPARAANG PAGBIBILANG<br/>
	</div>
	<br>	
	<div class="newsletterDate">
	February 2022
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, lessons learned from Bureau of Internal Revenue (BIR): Regional District Office 45 (RDO45), Brgy. Sto. Niño, Marikina City<br/> 
--> <b>Quarterly Percentage Tax (Form 2551): </b> CAN be set to <b>Tax Rate 1.0%</b> if classified to be <b>Person exempt from Value-Added Tax (PT010)</b> under Sec. 109 (BB) (Sec. 116)<br/>
--> where: VAT required for GROSS SALES <b>>PHP3 Million</b><br/>
--> offline software tool from BIR: <b>eBIR (version: 7.9.2)</b><br/>
--> <b>added:</b> due to <b>Bayanihan Act as One</b><br/>
--> <b>effective (expected):</b> until June 2022<br/>
--> received: information after visiting BIR:RDO45 for Annual <b>Certificate of Registration</b><br/>
<br/>
<table>
<tr>
	<td>
		<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202202/eBIRV7Dot9Dot2Form2551Qv2018BayanihanActAsOneHalimbawaV20220107.png">
	</td>
</tr>
<tr>
	<td>
		BIR Form 2551: <b>Quarterly Percentage Tax Return</b><br/>
	</td>
</tr>
</table>
<br/>
--> Instead of filing <b>Quarterly Percentage Tax Returns</b> AND <b>Graduated Income Tax Returns</b>, a person can opt to file <b>Income Tax Returns</b> set to the <b>8% Income Tax Rate of Gross Sales</b> in excess of PHP250,000;<br/>
--> reminder: we immediately pay the <b>8% Income Tax</b> as soon as our <b>Gross Sales</b> are over PHP250,000<br/>
--> With this action, we CAN eliminate work TIME used for excess report filings.<br/>
--> reminder: paying @banks costs at least 2hours of work TIME;<br/>
--> <b>References:</b><br/>
--> received: explanation @BIR RDO45, Brgy. Sto. Niño, Marikina City<br/>
--> <a class="webServiceLink" href="https://www.bir.gov.ph/index.php/tax-information/income-tax.html" target="_blank">https://www.bir.gov.ph/index.php/tax-information/income-tax.html; last accessed: 20220218
</a>

<h5>1.1.2) shared: with Public, regular security updates of Computers used at partner Units<br/>
--> increased: network security by removing connection to the Internet<br/>
--> where: Internet classified to add excess connections to the local Unit's network;<br/>
--> <b>reminder:</b> Internet: public network of Computer Database Storages<br/>
--> added: Internet connectivity to execute regular security updates;<br/>
<br/>
<table>
<tr>
	<td>
		<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202202/computerBoxSecurityUpdatePCStatusProtected20220130T0917.jpg">
	</td>
</tr>
<tr>
	<td>
		Step#1 update: Virus and spyware definitions<br/>
		Step#2 execute: Computer Storage Scan<br/>
		<br/>
		observed: LESS NEED to add <b>Anti-virus Software</b> with the following actions:<br/>
		1) executing: <b>Non-pirated Software</b><br/>
		2) visiting: websites with <b>NO PIRATED, i.e. illegal, software</b> for download;<br/>
		<br/>
		<br/>
	</td>	
</tr>
<tr>
	<td>
		<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202202/internetToComputerBoxAsAirToVehicleTireAtPetronEnergyStation20220130T091416.jpg">
	</td>
</tr>
<tr>	
	<td>
		Internet to Computer Box as AIR to Vehicle Tire @Petron Energy Station<br/>
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
		This observation is based on my actually putting AIR to vehicle Tires @Petron Energy Station.<br/>
		<br/>
		<table>
			<tr>
				<td>
		<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202202/petronWavesSandTimeSunadokeiTimesTwoMeccaIpaubayaAngAkingKatawanSaPanginoonReferenceBouEiDaiGakkou20220223T1851.jpg">
				</td>
				<td>
					<b>Reference#1:</b> Petron Logo from Receipts;<br/>
					<br/>
					<b>Reference#2:</b> 防衛大学校 (bouei daigakkou; Defense Force University) Past Examinations;<br/>
					<b>Reminder:</b> "Ipaubaya ang aking katawan sa panginoon."<br/>
				</td>
			</tr>
		</table>
		<br/>
		Petron Energy Stations sell <b>Petron Value Cards</b> @PHP100, where amount inside Card is also @PHP100;<br/>
		<br/>
		<b>reminder:</b> @select grocery stores, <b>Value Cards</b> purchased @PHP100 contain PHP0;<br/>
		<br/>
		<b>Value</b> inside <b>Card</b> increases with increasing fuel added to vehicle.<br/>
		<br/>
		<b>Example:</b> 2021-12-28;<br/> 
		<b>Paid Amount:</b> PHP200 = 3.74L (FUEL) @PHP53.50;<br/>
		<b>Received:</b> Points valued @PHP5.23 <br/>
		<br/>
		<b>reminder:</b> Points in <b>Value Card</b> CAN be used to pay for services, e.g. FUEL;<br/>
		<br/>
		<b>Additional Note:</b><br/>
		1) In the Year 2008, in Tokyo, Japan, I was able to use the Electronics Discount Store's <b>Value Card</b> points to receive a <b>WACOM Tablet set</b>@10,000yen (PHP5,000; approx) used for digital illustrations;<br/>		
		--> I had previously used the <b>Value Card</b> to mainly buy an <b>electronic dictionary</b> @10,000yen (PHP5,000; approx) in Year 2004~2005, Osaka, Japan;<br/>
		<br/>
		<b>Example Electronics Discount Stores in Japan:</b><br/> 
		1) <a class="webServiceLink" target="_blank" href="https://www.biccamera.co.jp/bicgroup/index.html">BIC Camera</a>
		2) <a class="webServiceLink" target="_blank" href="https://www.yodobashi.com/">YODOBASHI Camera</a>
		</td>
	</tr>
</table>
</h5>
<h5>1.1.3) updated: auto-generated Summary Report from Computer to verify with Cash Register Report<br/>
--> added: <b>DIRECT PAYMENT</b> and updated Grand Total computations;<br/>
--> where: <b>DIRECT PAYMENT</b> : payment received via Bank Transfer, et cetera<br/>
<br/>
		<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202202/exampleUpdatedAutoGeneratedSummaryReportCashRegisterPlusComputerMachineV20220128T1001.png">
</h5>
<h5>1.1.4) shared: with Public, <b>COMPOUND</b> notes<br/>
--> where: <b>COMPOUND</b>: income from interest is returned to the current invested amount<br/>
--> result: increased total income;<br/>
--> <b>Example:</b><br/>
--> where: <b>A2</b> = <b>INPUT AMOUNT</b>; <b>B2</b> = <b>INTEREST RATE</b><br/>
--> equation (<b>NON-COMPOUND</b>): =A2+(A2*B2*0.01)*5<br/>
--> equation (<b>COMPOUND</b>): =A2*((1+B2*0.01)^5)<br/>
<br/>
		<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202202/financeCompoundNotesV20220215.png">
		<br/>
		<br/>
--> reminder: new vehicle cost now >= <b>PHP400,000</b><br/>
--> The budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group <b>illegally shortens TIME</b> to obtain such vehicle via among others:<br/> 
<br/>
--> 1) carnapping, i.e. theft<br/> 
--> 2) replacement of parts to be defective<br/>
--> 3) noise pollution<br/>
<br/>
--> <b>output#1:</b> promulgation of <b>QUICK MONEY</b>, instead of <b>WORK</b><br/>
--> where: <b>WORK</b> = unti-unting pagkita ng pera mula sa hanap-buhay<br/>
--> <b>output#2:</b> increase in vehicle incidents, e.g. excess vehicle collision;<br/>
--> <b>output#3:</b> increase in patients @Hospitals and Clinics to further cause increase in excess workload;<br/>
--> <b>output#4:</b> increase in <b>insurance expenses</b> due to excess vehicle and health claims, to cause insurance company to close with <b>brankrupt</b> classification;<br/>
<br/>
--> <b>Recommended Action via Law Enforcement:</b> Mula sa mga <b>output</b> dahil sa kanilang pinagloloko, maiging puntahan na sa kanilang Tirahan at puksain.<br/>
<br/>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		In the Year 2005 (School Year: 2005~2006), I was driving the household's <b>Mitsubishi Adventure vehicle (Manual Transmission)</b> with two (2) Japanese Exchange Students to Little Tokyo, in Pasay Road, Makati City.<br/>
		<br/>
		At the bridge, as we were about to go down from the upward slope, the clutch of the gear box malfunctioned. Shift of gears to increase or decrease max acceleration became NOT executable;<br/>
		<br/>
		At the time, I heard the sound of the words, <b>"engine break"</b>, coming from a person using wireless broadcasting technology as used by the Teroristang Komunista group. After verification, I identify the person to be Xavier School classmate during High School, in San Juan, Greenhills, <b>Keith Haw</b>, who due to <b>YABANG</b> and <b>mistake</b>, still continues to misuse wireless broadcasting technology to cause noise pollution with physical injury.<br/>
		<br/>
		<b>Reminder#1:</b> <b>Keith Haw</b> is friends with classmate and basketball player, <b>Tyrone Tang</b>; I classify <b>Tyrone Tang</b> to be with the <b>Teroristang Komunista group</b>;<br/>
		<b>Reminder#2:</b> Teroristang Komunista group also includes among others:<br/> 
		<b>2.1) Ramon Syson</b>, younger brother of father <b>Dr. Pedro Syson</b><br/>
		<b>2.2) Ryan Syson</b>, eldest son <b>Ramon Syson</b><br/>
		<br/>
		Despite the clutch problem, I was able to park the vehicle in front of Little Tokyo, Makati City. I did NOT observe noticeable physical wounds with the two (2) Japanese exchange students. I did NOT also receive any such notifications from them.<br/>
		<br/>
		However, due to the <b>Mitsubishi Adventure vehicle</b> could NOT yet be driven <b>HOME</b> to <b>Marikina City</b>, we rode with another male Filipino student back.<br/>
		<br/>
		<b>Reminder#3:</b> Increase in <b>identification</b> of Teroristang Komunista group members speeds-up system for <b>Law Enforcement</b> to destroy it.<br/>
		<b>Reminder#4:</b> verified: filing law suit case against Teroristang Komunista group members is ineffective due to shall be attacked during process execution, which include among others: paperwork.<br/>
		<br/>
		observed: <b>system efficiency</b> achieved via <b>Law Enforcement</b> executing quick action with assistance from people who file incident reports that include Teroristang Komunista group member identification, et cetera;<br/>
		<br/>
		Teroristang Komunista <b>keywords</b>:<br/> 
		<b>QUICK MONEY</b> via among others: <b>carnapping</b>, <b>smuggling</b>
		</td>
	</tr>
</table>
</h5>
<h5>1.1.4) shared: with Public, adding used items, e.g. telephones, and parts<br/>
--> This action is to <b>decrease Expenses</b> and <b>increase know-how</b>.<br/>
<br/>
<table>
<tr>
	<td>
		<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202202/increaseObservableNihongoAlphabetWritingsInWorkplace20220131T0718.jpg">
	</td>
</tr>
<tr>	
	<td>
		Increased Obsevable addingnihongo Alphabet Writings @Workplace<br/>
	</td>
</tr>
</table>
<br/>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			I note that <b>regular viewing</b> of nihongo alphabets causes <b>curiosity</b> to learn more;<br/>
			<br/>
			This know-how is also reused with <b>advertising</b> using media, e.g. television, such that viewer eventually buys product for verification after regular viewing;<br/>
			<br/>
			observed: seeing a person regularly in-person or on social media, e.g. Facebook (FB), Instagram, shall cause increase in <b>curiosity</b> to learn more, e.g. the person's <b>LIKES</b>.<br/>
			<br/>
			reminder: There exists decrease in work productivity and speed-up of usage of available TIME using web services, e.g. FB.<br/>
			<br/>
			observed: even @<b>Philippine Long Distance Telephone (PLDT) Corporation</b>, FB, is NOT permitted during <b>WORK TIME</b>;<br/>
			<br/>
			<b>Recommended Actions:</b><br/> 
			1) classify: already FB to be <b>"Entertainment"</b>, instead of <b>COMMUNICATION TOOL</b> for non-trivial cases such as for Consultation @Public Hospitals<br/>
			<br/>
			2) stop: active computer and mobile telephone use by 21:00 (MAX); Use gained TIME to rest with <b>own Family Unit</b><br/>
			<br/>
			<b>reminder:</b> <b>COMMUNICATION TOOLS</b>, e.g.Telephones, Electronic MAILS, have <b>CALLER/SENDER</b> and <b>target RECEIVER</b>;<br/>
			<br/>
			observed: The budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group broadcasts <b>NOISE POLLUTION</b> without first identifying <b>CALLER</b> and <b>RECEIVER</b>; In addition, wireless LINE is CUT even before further clarification can be executed;<br/>
			<br/>
			<b>Example:</b> <b>REGULAR</b> <b>NOISE POLLUTION</b> with identified keywords, e.g. "BOBO", "TANGA", "TANGINA", to signify among others: <b>"STUPID"</b>;<br/>
			<br/>
			<b>reminder:</b> voice recording and manipulation techniques as used @KARAOKE are reused by Manloloko group<br/>
			<br/>
			<b>reminder:</b> <b>Quarterly Percentage Tax</b> on AMUSEMENT PLACES, e.g. KARAOKE: 18% of <b>Quarterly SALES INCOME</b><br/>
			<br/>
			observed: <b>NOISE</b> reaches <b>HOME</b> and <b>WORKPLACE</b> @<b>#2 E. Manalo Ave., Barangay Sto. Niño, 1820, Marikina City</b><br/>
			<br/>
			observed: Members of Manloloko group causing <b>NOISE POLLUTION</b> can be identified due to their <b>YABANG</b> and <b>MISTAKES</b>, albeit still faster to execute identification when Members <b>CLEARLY</b> identify themselves as the <b>CALLER</b> and their <b>target RECEIVERS</b>.<br/>
			<br/>			
			<b>Action Items:</b> filed: incident reports with Police identifying members;<br/>
			--> Endure, if NOT ignored;<br/>
			--> observed: continuous noise pollution targetted @ME among others, due to: <b>GAWA-GAWANG PATAKARAN</b><br/> 
			<b>Examples:</b> do NOT report to POLICE, <b>NEED FOR QUICK MONEY</b><br/>			
			where: <b>QUICK MONEY</b>: ACTION via carnapping, smuggling, et cetera;<br/>
			<b>NEW vehicle cost now</b>	 >= <b>PHP400,000</b><br/>
			<br/>
			TO-DO: -add: ANG WALANG PAKI TAONG TUMUTULONG SA TERORISTA; ANTI-TERRORISM PARTNERSHIP
		</td>
	</tr>
</table>
</h5>

<h5>1.1.5) shared: with Public, techniques to increase <b>security defense</b> against <b>Cybercriminal group</b><br/>
--> where: <b>Cybercriminal</b> : budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group;<br/>
--> As with <b>electronic mail (email) Web Services</b>, we can opt to receive <b>Short-Messaging Service (SMS) text messages</b> during <b>sign-in</b>.<br/>
--> This action notifies us if an attacker entered the Web Service without our <b>authorization</b>.<br/>
<br/>

<table>
<tr>
	<td>
		<img class="newsletterImage" width="40%" height="40%" src="assets/images/newsletter/202202/exampleSmsTextNotificationAfterSignInToAmazonWebService.png">
	</td>
</tr>
<tr>	
	<td>
		Sign-in notification from Amazon Web Service (AWS)<br/>
	</td>
</tr>
</table>
<br/>
--> use: of another language, e.g. <b>español</b>, <b>日本語</b> (nihongo, i.e. Japanese Language), increases to a certain extent <b>security defense</b> against attacks from the <b>Communist Terrorist</b>, i.e. <b>Teroristang Komunista</b>, group in the Philippines;<br/>
<br/>
--> This is due to Teroristang Komunista group members' children, as based on school performance, begin to become dependent on <b>CHEATING</b> via wireless broadcasting technology to get <b>QUICK MONEY</b>;<br/>
<br/>
--> observed: children of this Manloloko group already have difficulty speaking their <b>"people's language"</b>, i.e. <b>"liannanoue"</b>, i.e. <b>福建話 (hokkienoue)</b> of Southern China</b>;<br/> 
--> observed: speaking, listening, reading, and writing skill levels, if such exist at all, are only at <b>ELEMENTARY level (max)</b>;<br/>
--> observed: even with language training @<b>Private Schools</b>, e.g. Xavier School, San Juan, Greenhills, for children with Chinese ancestry, the output know-how of <b>CHINESE MANDARIN</b> is still also at <b>ELEMENTARY level (max)</b>, despite supposedly thirteen (13) years (approx) of training;<br/> 
<br/>
--> However, select people who were previously classified to be <b>"SLOW"</b> advance faster due to learned correct techniques. Such action causes <b>ENVY</b> to Teroristang Komunista group who makes them their targets of attacks.
<br/>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		observed: in the Year 2011 (approx), Tools, e.g. <b>WireShark</b>, CAN be misused to get sign-in passwords to accounts on Web Services, e.g. Facebook (FB).<br/>
		<br/>
		To increase security defense against unauthorized access, SMS text message notifications were added by <b>Web Service</b> companies.<br/>
		<br/>
		<b>Additional Notes:</b><br/>
		1) caution: when connecting to a network @public places, e.g. airports, due to a computer with the <b>WireShark tool</b> may also be connected to the same network to receive without your permit account passwords, et cetera;<br/>
		<br/>
		2) <b>reminder:</b> With unauthorized access to accounts, information, e.g. bank transactions (vehicle payments), investments, photographs (of visited countries), family members, friends, become available for misuse.<br/>
		<br/>
		The <b>objective</b> is to identify if there exists <b>QUICK MONEY</b> to be stolen via among others: carnapping<br/>
		<br/>
		reminder: after finishing to pay tuition @<b>private schools</b>, target Family Unit begins to receive excess <b>MONEY</b> to buy among others: <b>NEW VEHICLES</b><br/>
		<br/>
		An attack is executed to cause <b>CHAOS</b>, i.e. <b>GULO</b>, to target via regular, unsolicited wireless broadcasting, while the Manlolokong/Teroristang Komunista group steals the vehicles, et cetera;<br/>
		<br/>
		<b>Example:</b> Based on the photographs online, a <b>STORY</b> is created to cause target person, family members, and friends to <b>NEED</b> to keep a <b>SECRET</b> due to a <b>SURRISE WEDDING</b> executed to be as a <b>MOVIE</b> with <b>expensive wireless broadcasting technology equipment</b> for production.</br>
		<br/>
		<b>Output:</b> <b>UNCLEAR/MALABO Communication</b> for abuse by Manloloko group</br>
		<br/>
		observed: such <b>pattern</b> to be misused on me among others since the Year 2011, and earlier...<br/>
		observed: even while as a <b>working student</b> in the Year 2004, there was also already such <b>NOISE POLLUTION</b><br/>
		<br/>		
		observed: even after finally marrying, the new Family Unit <b>does NOT COMMUNICATE</b> with the Family members as ordinary people do;<br/> 
		instead, continuous misuse of <b>INDIRECT COMMUNICATION</b><br/>
		<br/>
		observed: this to be due to regular misuse of wireless broadcasting technology, e.g. transmitters and receivers, to cause <b>CHAOS</b> when any member does NOT obey the Manloloko group's <b>gawa-gawang patakaran</b><br/>
		<br/>		
		<b>Actions:</b><br/>
		1) <b>file:</b> incident reports with Police;<br/>
		2) <b>Ignore</b>, if NOT <b>endure</b>, <b>NOISE POLLUTION</b>;<br/>
		3) <b>clarify</b>: with Family Unit, e.g. Wife, directly and in-person any information/gossip heard, viewed, et cetera;<br/>
		--> Halimbawa: <b>Kung may narinig kang hindi ayos ukol sa akin, kausapin mo muna ako nang direkta at harap-harapan upang ating LINAWIN ang anumang MALABO.</b><br/>		
		</td>
	</tr>
</table>
</h5>

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
