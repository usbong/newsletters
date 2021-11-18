<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211117
  @date updated: 20211118
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
	DECEMBER 2021
	</div>
	<br>
	<br>			

To eliminate excess steps and inefficient time usage, Marikina Orthopedic Specialty Clinic (MOSC) requested Usbong's services to automate routine, monotonous tasks and share with unit members know-how on computers.

<h3>1) Continued to update Knowledge Management System (KMS)</h3>
<h4>1.1) continued: to share know-how on computers and Information Technology (IT) tools</h4>
<h5>1.1.1) shared: with Public, count total Elapsed Time per Usage before rest<br/>
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
		--> practice languages, e.g. nihongo, Deutsche<br/>
		--> where: nihongo = Japanese language<br/>
		--> where: Deutsche = German language<br/>		
		<br/>
		shared: with nephew (5yrs old), in school, make friends with those who are learning nihongo and/or Deutsche<br/>
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
			<div class="newsletterImageTextDiv">
<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/cdrKingAudioMusicPlayerTransmitterFMRadioWirelessSignal.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				CDR-KING Item: PHP500~600
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
			Over 10years ago, Year 2008, I also verified another CDR-KING audio transmitter. However, instead of using Bluetooth technology to connect the transmitter with the Audio player, we used an audio cable and port.<br/>
			<br/>
			<b>Example Usage:</b> We set the transmitter's frequency to use, e.g. 100. We also set the vehicle radio's receiver frequency to use 100.<br/>
			<br/>
			With this technique, the vehicle radio shall play the transmitted sound using its speakers. In addition, nearby vehicles who also use the frequency 100 shall receive to play the transmitted sound.<br/>
			<br/>
			<b>Reminder:</b> Select frequencies are used by broadcasting networks.<br/>
			<b>Examples:</b> 94.7 Mellow; 100.3 RJ<br/>
			<br/>
			Using the same frequency shall cause the output sound of the vehicle speaker to include the received audio from the CDR-King transmitter.<br/>
			<br/>
			<b>Result:</b> Excess, i.e. Noise, instead of Clear Music.<br/>
			<br/>
			<b>Additional Notes:</b><br/>
			1) The transmitter's electric wave as measured by signal strength is NOT as strong as a wireless broadcasting tower's.<br/>
			--> verified: the budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group to misuse wireless broadcasting towers such that the transmitted signal reaches Brgy. Marikina Heights <b>AND</b> Brgy. Sto. Niño.<br/>
			<br/>
			--> executed: walking from <b>Brgy. Sto. Niño</b> to <b>Brgy. Marikina Heights</b> during non-raining Sunday mornings; <b>Walk Elapsed Time:</b> 40mins (one way)<br/>
			<br/>
			<b>Reminder:</b> Brgy. Marikina Heights is located at a higher, elevated part of the Marikina Valley;
			Brgy. Sto. Niño is located at a lower part.<br/>
			<br/>
			2) observed: finding such audio transmitter in the Year 2008 to be NOT the usual, albeit included in a pattern of related carnapping, vehicle incidents, et cetera that would continue in the coming years<br/>
			--> identified: in 10 years, members of the budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group<br/>
			--> filed: with Law Enforecement, incident reports with identification 
		</td>
	</tr>
</table>

<br/>
<br/>
TO-DO: -update: this<br/>
<br/>
<br/>


goal: execute in 1month work valued by client at >=3months<br/>
--> <b>Example (3months):</b> Total Income: PHP90,000 (100%)<br/>
--> Total Expenses (Tax, SSS, PhilHealth, Pag-Ibig, et cetera included): PHP30,000 (33.3%)<br/>
--> Total Saved: PHP60,000 (66.7%)<br/>
--> <b>Note:</b> Total Income (1month) PAYS Total Expenses (3months) @PHP30,000 (33.3%)<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		It is doable to start at 10% Total Saved money.<br/>
		Increase this with increasing know-how.<br/>
		<br/>
		<b>Example:</b> Execute investment in Mutual Funds, e.g. Peso Bonds.<br/>
		where: <b>Peso Bonds</b> = money lent with interest to Philippine government for Administration to execute public projects<br/>
		where: <b>public project example</b> = road building to speed-up delivery of products, e.g. fresh milk<br/>
		<br/>
		<b>Reminder#1:</b> verify: increase in your work years also causes increase in your know-how<br/> 
		<b>Reminder#2:</b> Increase in Total Income causes Increase in Total Expenses<br/>
		<b>Reminder#3:</b> With those who are already married and have children, Total Saved money decreases.<br/>
		<br/>
		<b>Recommended Actions:</b><br/>	
		1) Spouse contributes in family work by increasing income and/or decreasing expenses.<br/>
		<br/>
		2) Children Count: 2; increase if financially capable after computation<br/>
		--> learn: <b>Fertility Awareness Method (FAM) of Contraception</b><br/> 
		--> Female egg and NO-egg counting<br/>
		--> <b>Example (NO-egg):</b> Count 25 days after 1st Day of Menstruation<br/>
		--> Executable whether regular or irregular menstrual cycle pattern<br>
		--> <b>Reminder:</b> Female egg + Male sperm causes conception</b><br/> 
		<br/>
		<b>Reference:</b><br/>
		2.1) Insel, P., et al. 2008. Core Concepts in Health (10th Ed.). NY: McGraw-Hill<br/>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="40%" height="40%" src="assets/images/newsletter/202111/CoreConceptsInHealth10thEd.jpg">
			<br/>
			Used Book bought @BookSale, Philippines
			</div>
		<br/>
		3) When child reaches 16yrs old, set household to be as company dormitory.<br/>
		<br/>
		4) By 18yrs old, allow children to execute skilled work,<br/> 
		--> e.g. computer program writing.<br/>		
		<br/>
		5) By 20yrs old, send children to Japan for >=10months of study abroad.<br/>
		--> verify: savings pattern results in sufficient money to execute this action.<br/>
	</tr>
</table>
</h5>

<h5>1.1.2) shared: with Unit members, Telephone Network Prepaid Load Reserve System<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202111/globeTelephoneNetworkPrepaidLoadReserveSystem.jpg">
			</div>
		</td>
		<td width="50%">
			We add PHP100 load value from the 1st Prepaid Card to the Unit's mobile telephone.<br/>
			<br/>
			We use the 2nd Card when we've used up all the 1st Card's load value.<br/>
			<br/>
			Whenever a Card is used, we immediately replace it by buying a new Card.<br/>
			<br/>
			<b>Reminder:</b> PLDT/SMART network has fluctuating wireless signal inside partner Sta. Lucia Health Care Center Clinic (SLHCC). Clinic located on basement floor.
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			GLOBE Prepaid Cards<br/>
			each with PHP100 load value<br/>
			Cost: PHP100 each<br/>
			</div>
		</td>
	</tr>
</table>
<br/>
--> reminded: Unit members to verify Load Usage<br/> 
--> This is to identify frequency of Card replacement and Total Cost<br/>
<br/>

<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			I, myself, use Prepaid Cards, instead of Postpaid service with my mobile telephone.<br/>
			<br/>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="50%" height="50%" src="assets/images/newsletter/202111/smartTelephoneNetworkPrepaidLoadReserveSystem.jpg">
			<br/>
			SMART Prepaid Card<br/> 
			with PHP100 load value<br/>
			Cost: PHP100<br/>			
			</div>
			<br/>
			<b>Reminder:</b> Postpaid service = Monthly Paid Load<br/>
			<b>Example:</b> <a class="webServiceLink" target="_blank" href="https://smart.com.ph/Postpaid/signature">SMART Lite</a> 5GB Internet Usage + Unlimited All networks Calls, Text, Landline Calls @PHP599/Month<br/>
			<br/>
			With Prepaid Load, 1 SMS text : PHP1<br/> 
			From observation, I replace Prepaid Cards after 1~1.5 Months.<br/>
			<br/>
			In addition, I do NOT necessarily stop myself from writing Short Messaging Service (SMS) Text and Calling over the network if necessary.<br/>
			<br/>
			As for the Internet, I already have access @the workplace and place of residence in Marikina City, so there is no need to add excess costs.<br/>
			<br/>
			I still use my Android telephone, albeit it's technology of over 5years already.<br/>
			At present, I mainly use the following applications:<br/>
			1) <b>SMS text system</b>; NOT email system<br/>
			2) <b>Viber Application</b> (to upload SMS Reports)<br/>
			3) <b>Dictionaries</b><br/>
			--> e.g, <a class="webServiceLink" target="_blank" href="https://play.google.com/store/apps/details?id=com.umibouzu.jed&hl=en_US&gl=US">Japanese-English Dictionary (JED)</a>, <a class="webServiceLink" target="_blank" href="https://play.google.com/store/apps/details?id=com.pleco.chinesesystem&hl=en_US&gl=US">Chinese Mandarin (PLECO)</a><br/>
			4) <b>Camera</b> (to capture Photographs) & <b>Voice Recorder</b> (to record Sound)<br/>
			5) <b>Firefox Web Browser</b> (to access <a class="webServiceLink" target="_blank" href="https://github.com/usbong/KMS">Usbong KMS</a>)<br/>
			<br/>
			<b>Recommended Action:</b><br/> 
			--> learn: technique to replace telephone's Android Operating System (OS) with a Lightweight version, e.g. <a class="webServiceLink" target="_blank" href="lubuntu.me">LUBUNTU</a>.<br/>
			--> This action is to recycle slower telephones by executing focused set of tasks, e.g. Electronic Book Readers with Human-Computer interactivity.<br/>
			--> I previously used the Android as a <a class="webServiceLink" target="_blank" href="https://www.amazon.com/Kindle-eBooks/b?ie=UTF8&node=154606011">Kindle eBook Reader</a>.<br/>
			--> I now find less books to read with know-how that I do NOT yet know.<br/>
			--> Computer Interactive Games offer added value.<br/>
			--> <b>Example:</b> <a class="webServiceLink" target="_blank" href="https://www.nintendo.co.jp/n01/n64/software/nus_p_nfxj/index.html">スター フォックス６４</a>(Starfox 64;  NINTENDO64 system)<br/>
			--> includes: voice-over of Unit members, instead of only subtitles<br/>
			--> <b>Reminder:</b> Subtitle text difficult to read during active battle<br/>
			<br/>
			<table>
				<tr>
					<td>
						<div class="newsletterImageTextDiv">
						<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202111/joukyouNiYoriBakudanWoUmakuTsukawanaitoSusumenai20211028.jpg">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="newsletterImageTextDiv">
						状況により、爆弾をうまく使わないと、進めない。<br/>
						joukyouNiYoriBakudanWoUmakuTsukawanaitoSusumenai.<br/>
						<b>Batay sa kalagayan, kapag hindi maiging gamitin ang pasabog na bala, hindi maka-uusad.</b>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="newsletterImageTextDiv">
						<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202111/hajimeteSaigoNoSaruTaoseteTabiGa50funMoKakattaKedo20211028.jpg">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="newsletterImageTextDiv">
						初めて最後のサルを倒せて、旅が50分もかかったけど。<br/>
						hajimeteSaigoNoSaruTaoseteTabiGa50funMoKakattaKedo<br/>
						<b>Unang pagkakataong mapataob ang huling Matsing, ang paglalakbay, gumamit pa ng 50hati/minutos nga lang.</b>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</h5>

<h5>1.1.3) shared: with Public, notes on <b>Guidelines and Instructions for Bureau of Internal Revenue (BIR) Form No. 1701Q (January 2018 (ENCS)) Quarterly Income Tax Return for Individuals, Estates and Trusts</b>
</h5>
<table class="noteTaxTable">
	<tr>
		<td class="noteTaxTableColumnHeader">
			<h4><b>Philippines Buwis MAX</b></h4>
		</td>
		<td>
		</td>
		<td class="noteTaxTableColumnHeader">
			<h4><b>日本 税金MAX<br/> 
			(nihon zeikin MAX;<br/> 
			Japan Tax MAX)</b></h4>
		</td>
	</tr>
	<tr>
	<td class="noteTaxTableColumn">
		<h5>
		<b>1) Tax Rates Effective: 2018-01-01 ~ 2022-12-31</b><br/>
		Over 8M, PHP2,410,000 +<br/> 
		35% of the excess over PHP8,000,000<br/>
		</h5>
	</td>
	<td>
	</td>
	<td class="noteTaxTableColumn">
		<h5><b>1) 収入５５％税金</b><br/>
		--> shuunyuu 55% zeikin<br/>
		--> income 55% TAX<br/>
		</h5>
	</td>
	</tr>
	<tr>
	<td class="noteTaxTableColumn">
		<h5>
		<b>2) Tax Rates Effective: 2023-01-01 ~ onwards</b><br/>
		Over 8M, PHP2,202,500 +<br/> 
		35% of the excess over PHP8,000,000<br/>
		</h5>
	</td>
	<td>
	</td>
	<td class="noteTaxTableColumn">
	</td>
	</tr>
	<tr>
	<td class="noteTaxTableColumn">
		<h5>
		<b>3) Stocks via Mutual Funds @BANKS</b><br/>
		TAX payment already included<br/> 
		in the received <b>NET income</b>
		</h5>
	</td>
	<td>
	</td>
	<td class="noteTaxTableColumn">
		<h5><b>2) 株２０％税金</b><br/>
		--> kabu 20% zeikin<br/>
		--> stocks 20% TAX<br/>
		</h5>
	</td>
	</tr>
</table>

<h5><b>1.1.3.3) Additional Note: Dual Citizenship</b><br/>
--> <b>Example:</b> Philippines + United States of America (U.S.A.), <b>double TAX</b><br/>
--> NOT recommended by majority of nations<br/>
--> With Japan, by 21years old, choose only ONE (1): Japan or Philippines<br/>
--> <b>Gabay:</b> <b>SAAN</b> ka umuuwi? <b>KANINO</b> ka umuuwi?<br/>
</h5>

<h5><b>1.1.3.4) References:</b><br/>
1.1.3.4.1)
<a class="webServiceLink" target="_blank" href="https://www.youtube.com/watch?v=qrjLWuEJIt8">OKAMOTO YOSHIKI CHANNEL: 「日本人がお金持ちになるための４つの方法」</a><br/>
--> "Mamamayan ng Bansang Hapon, 4 na paraan upang magkaroon ng salapi"<br/>
--> last accessed: 20211108<br/>
1.1.3.4.2) eBIR Form No. 1701Qv2018
</h5>

<h5><b>1.1.3.5) Recommended Action:</b><br/>
--> verify: Zaide, J. (2004). "Bababa, ba?". Philippines: Academic Publishing Corporation<br/>
--> What is the <b>output</b>?<br/>
--> Misuse of wireless broadcasting technology by budol-budol/carnapper/manloloko/cybercriminal/communist terrorist group NOT yet in <b>Foreign Service Training</b>?<br/>
</h5>

<h3>2) Continued with Research & Development (R&D)</h3>
<h4>2.1) <a class="webServiceLink" target="_blank" href="https://github.com/usbong/pagong">Usbong Pagong</a>: Unit Movement Direction from RIGHT to LEFT
</h4>
<div class="newsletterImageTextDiv">
<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202111/usbongPagongFromRightToLeftUnitMovementV20211028T1645.gif">
</div>
<br/>	
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202111/fromRightToLeftUnitMovementNote20211028.jpg">
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202111/fromRightToLeftUnitMovementComputerExecutedNote20211028.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			Plan: Hand Written by Human		
			</div>
		</td>
		<td>
			<div class="newsletterImageTextDiv">
			Actual: Executed by Computer
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
		In this case, it is faster to capture the technique by first writing by hand a plan with the intended output.<br/>
		<br/>
		From the plan, we identify patterns that we can use to write the instructions that the computer can auto-execute repeatedly.<br/>
		<br/>
		<b>Example Pattern:</b> We move Unit members to the RIGHT of the Unit Chief.<br/>
		--> After movement, we move the remaining Unit members still on the LEFT of the Unit Chief a step to the right, but still on the LEFT of Unit Chief.<br/>
		<br/>
		After identifying patterns, we write short notes that we afterward translate into Computer Language, e.g. C/C++.<br/>
		<br/>		
		<b>Example Notes of Execution Steps:</b><br/>
		<b>IF</b> current Unit member still to the LEFT of Unit Chief<br/>
		--> <b>IF</b> current Unit member <u>immediately</u> to the LEFT of Unit Chief<br/>
		----> move to the RIGHT of Unit Chief based on Unit <u>Identification#</u><br/>
		--> <b>ELSE</b><br/>
		----> move 1 STEP to the RIGHT, but still LEFT of Unit Chief<br/>
		<b>ELSE</b><br/>
		--> move to the RIGHT of Unit Chief based on Unit <u>Identification#</u><br/>
		<br/>
		--> <b>Reminder:</b> <b>CHAOS</b> = <b>Gulo</b><br/>
		--> Panlolokong Ingay from the <b>Teroristang Komunita</b> causes <b>CHAOS</b><br/>
		--> Increase in <b>Teroristang Komunista</b> : Speed-up of <b>SOCIAL CANCER</b><br/>
		--> where: <b>Teroristang Komunista</b> = budol-budol/manloloko/carnapper/cybercriminal/Communist Terrorist group who continues to misuse wireless broadcasting technology to cause noise pollution and physical injury.<br/>
		--> <b>Reminder:</b> End Result of SOCIAL CANCER = DEATH<br/>
		--> where: <b>CANCER Cell</b> = <b>Teroristang Komunista・Manloloko</b><br/>
		--> <b>Reminder:</b> Human Body : Human Society; Increased Scale<br/>
		--> <b>Recommended Reading:</b> <a class="webServiceLink" target="_blank" href="https://github.com/usbong/UsbongStore/blob/master/usbong_store/assets/images/books/The%20Lives%20of%20a%20Cell.jpg">Lewis Thomas' "The Lives of a Cell"</a><br/>
		<br/>		
		<b>Recommended Action:</b><br/>
		--> 1) Execute Alles klar, i.e. ALL CLEAR, to eliminate <b>CHAOS/Gulo</b><br/>
		--> <b>Halimbawa:</b> LINAWIN ang MALABO.<br/>
		--> 2) Puksain ang mga Teroristang Komunista・Manloloko;<br/> 
		--> No need for negotiation.<br/>
		<br/>
		<b>Additional Note:</b><br/>
		--> 1) To destroy Teroristang Komunista, increase your available <b>Energy</b>.<br/>
		--> <b>Light & Water</b> create <b>Energy</b> classified to be <b>Nuclear</b>.<br/>
		--> where: <b>Nuclear Energy</b> = Exponential Energy<br/>
		--> where: <b>Nuclear</b> : Community・Family・Company<br/>
		</td>
	</tr>
</table>

<h3>3) Continued to share know-how regarding Security Defense Force</h3>
<h4>3.1) Deutsche Welle (German Language Wave) Documentary</h4>
--> <a class="webServiceLink" target="_blank" href="https://www.youtube.com/watch?v=iDZPEiYwOA0">"How a neo-Nazi terror network went undetected in Germany | DW Documentary"</a>
<h5>
--> <b>"Between 1998 and 2011, a German neo-Nazi terrorist group murdered ten people. They called themselves the National Socialist Underground or NSU, carried out robberies to finance their terrorist cell, and planted bombs to spread terror in Germany."</b><br/>
<br/>
3.1.1) Select people chose NOT to share information via police incident reports<br/>
3.1.2) Select people (from Domestic Intelligence & Ministry of the Interior) blocked access to all further investigations<br/>
<br/>
observed: vehicular incident with criminal evidence, e.g. guns, neo-Nazi DVDs, dead people<br/>
--> where: dead people identified to be members of group<br/>
<br/>
<b>Paalala:</b> Gumawa ng incident report sa Tagapagpatupad ng Batas, i.e. Law Enforcement.<br/> 
--> Ito'y sa halip na tumanggap ng tulong mula sa mga Teroristang Komunista・Manloloko.<br/> 
--> Mayroon silang sariling gawa-gawang patakaran, na naiiba sa Batas ng Lipunan.<br/>
--> <b>Halimbawa:</b> Huwag ibahagi sa nakararami ang know-how ng kanilang pamamaraan, i.e. technique.<br/>
--> where: <b>nakararami</b> includes Law Enforcement, e.g. Pulis<br/>
--> where: <b>technique</b> = wireless broadcasting technology misused to execute among others:<br/>
--> wireless telephone eavesdropping to identify when household members are outside the house for partner thieves to enter and steal items, e.g. vehicle key.<br/>
--> notified: Law Enforcement after verifying wireless telephone to be DR. SYSON, PEDRO's<br/>
--> wireless telephone connected to GLOBE network; targeted even during international travels<br/>
--> <b>destination:</b> Japan (Year 2016)<br/>
--> <b>destination:</b> Switzerland (Year 2014)<br/>
<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
		Sa bansang Hapon, saan tutungo ang mga iligal na namamalagi roon na kailangan ng tulong?<br/>
		<br/>
		Kapag pumunta sila sa Pulis, hindi sila papayagan pang mamalagi sa bansang Hapon. Kung kaya't, sa halip, tutungo sila sa gawa-gawang samahan na may sariling mga patakaran.<br/>
<br/>
<b>Paalala:</b> Karaniwang ginagawa ang mga iligal na pamamalagi sapagkat nais nilang makakuha ng malaking salapi, kung ihahambing sa halaga, halimbawa, ng Piso sa Pinas.<br/>
--> Pinadadala naman nila ito sa kanilang mga kamag-anak na karaniwan ding hindi natututo ng Maparaang Pagbibilang.<br/>
<br/>
--> Mula sa pagsasanay ng Philippine Overseas Employment Agency (POEA) Taong 2008, matututunang hindi tuluyang nakauuwi sa Pinas ang mga Overseas Filipino Workers (OFW) sapagkat parating nauubos ang kanilang ipinadadalang salapi, bagama't may nais silang mag-ipon.<br/>
<br/>
<b>Mungkahing Mga Aksyon:</b><br/> 
1) Matuto ng Maparaang Pagbibilang.<br/>
2) Gawan ng incident report ang Pulis.<br/>
3) Puksain ang mga Teroristang Komunista.<br/>
--> Hindi na kailangang makipag-usap sa mga Manloloko.<br/>
--> There is <b>NO COMMUNICATION</b> using Teroristang Komunista's wireless broadcasting technology.<br/>
--> In its stead, increased Noise Pollution with Physical Injury
		</td>
	</tr>
</table>

<h3>4) Continued to share know-how regarding Health</h3>
<h4>4.1) observed: patients, e.g. Senior Citizens (SC), with increasing variations of Medicine Items have difficulty in correct identification<br/></h4>
<h5>
--> <b>Example:</b> Five (5) variations of Medicine Items to control the following among others:<br/>
--> Uric Acid (due to Gout), Blood Flow, Joint Pain, Ostheoarthritis, Calcium deficiency<br/>
--> In addition, select set of medicine items taken two (2) times per day.<br/>
--> Another set taken only one (1) time after breakfast.<br/>
--> Select family members provide assistance, albeit may NOT add care equal with that of the patient.<br/>
--> Caregivers may be hired, yet the quality of care may NOT again be equal with that of the patient.<br/>
--> This is even if it is already sufficient with the rest of the family members.<br/>
--> <b>Cause:</b> Increasing cost; Family members now only waiting for patient to accept death.<br/>
--> <b>Result:</b> Speed-up of patient's time of death<br/>
<br/>
--> <b>Recommended Action:</b> verify: own <b>Lifestyle</b> to include among others:<br/>
--> 1) Burn excess Fats via Physical Exercise<br/>
--> <b>Example:</b> Continuous walking of at least 20mins per day<br/>
--> 2) Receive Light from Sunshine<br/>
--> 3) Drink clean Water, instead of sugared beverages<br/>
--> 4) Interact with people who are aligned with your Spirit, i.e. Kaluluwa; <br/>
--> <b>Example:</b> People NOT classified to be Teroristang Komunista・Manloloko.<br/>
--> 5) Eat fruits and vegetables; No meat dinner; No need to eat pork<br/>
--> 6) Execute work that contributes to community<br/>
--> where: work includes among others: cleaning own Toilet, sharing of computer know-how;<br/> 
--> <b>Results:</b> <b>LESS</b> need for Medicine Items; Strong Community・Family・Company<br/>
--> <b>Reminder:</b> Human beings <b>CAN</b> live longer than 100 years old.<br/>
</h5>

<h4>4.2) verified: <b>FOOTBALL Sports Match: Spain and Germany</b></h4>
--> <b>得点王</b> (tokutenou; kumuha ng tuldok (punto) hari); Computer Simulation Game<br/>
<br/>
<table>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
			<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202111/doitsuNiKatsuNiHaAshiYaKaradaWoTsukaiBo-ruWoToriGo-ruNiSutore-toNoKougekiDeAiteGaGa-doSuruNodeNakamaToNoSaikougekiDameNarabaJibunNoAtamaDeButsukatteIkouTo20211108.jpg">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="newsletterImageTextDiv">
				<b>Shin-Nihon Kikaku (SNK)</b> NEO-GEO System<br/>
				<b>新日本</b> (shin nihon; Bagong Pinanggalingan ng Araw (Bansang Hapon))<br/> 
				<b>企画</b> (kikaku; Tinayong Larawan (Plan))<br/> 
				Year 1992
			</div>
		</td>
	</tr>
</table>
<br/>
--> Lessons-Learned: <br/>
<b>ドイツに勝つには足や体を使い、ボールを取り、</b><br/>
doitsuni katsuniha ashi ya karada wo tsukai, bo-ru wo tori,<br/>
<b>Upang manalo sa Aleman, gamitin ang paa, katawan, atbp, kunin ang bola,</b><br/>
<br/>
<b>ゴールにストレートの攻撃で相手がガードするので、</b><br/>
go-runi sutore-to no kougeki de aite ga ga-do surunode,<br/>
<b>Patungong GOAL, sa direktang pagsalakay, dahil gagawa ng GUARD ang katunggali,</b><br/>
<br/>
<b>仲間との再攻撃がダメならば、</b><br/>
nakama to no saikougeki ga dame naraba,<br/>
<b>kapag walang saysay ang muling pagsalakay kasama ang partner,</b><br/>
<br/>
<b>自分の頭で、ボールをぶつかって行こうと</b><br/>
jibun no atama de, bo-ru wo butsukatte ikou to<br/>
<b>gamit ang sariling ulo, tamaan ang bola, sugod! daw</b><br/>
<br/>
<br/>
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
