<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
  
  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211117
  @date updated: 20220102; from 20211226
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
<!-- removed by Mike, 20211226 
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
		<b>｢合気道｣</b>: <b>aikidou</b><br/> 
		pinagsamang kaluluwa daan;<br/> 
		<b>｢平安｣</b>: <b>heian</b><br/> 
		payapa; patag babae may bubong<br/>
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
		<br/>
			<div class="newsletterImageTextDiv">
				<img class="newsletterImage" width="60%" height="60%" src="assets/images/newsletter/202112/builtPopsickleStickSaunaHouseWith7YrOldNephew20161217.jpg"><br/>
				<b>Built Popsickle Stick FINNISH Sauna House with 7yr old Nephew<br/> 
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
<h4>2.3) Paalala#1:</h4>
<b>2.3.1) 結局、歴史では、戦争が伸びてると、</b><br/>
<b>kekkyoku, rekishideha, sensou ga nobiru to,</b><br/>
Kinalauanan, sa kasaysayan, sa paghaba ng digmaan,<br/>
<br/>
<b>兵士が疲れるし、供給なども切れる・・・</b><br/>
<b>heishi ga tsukarerushi, kyoukyuu nado mo kireru...</b><br/>
napapagod ang sundalong mag-aaral, napuputol ang bigay na pagsasaluhan (supply)...<br/>
<br/>
<b>敵がわかれば、ターゲットして、</b><br/>
<b>teki ga wakareba, ta-gettoshite,</b><br/>
Kapag alam na ang kalaban, gawing target,<br/>
<br/>
<b>優柔不断をせずに、早めに終わりにすること。</b><br/>
<b>yuujuu fudan wo sezu ni, hayame ni owarini suru koto.</b><br/>
hindi gawin ang walang hintong bait at pag-aakma (flexible), tapusin na habang maaga pa.<br/>
<br/>
<b>わくわくすることなく、仕事としての決断でね。</b><br/>
<b>wakuwaku suru koto naku, shigoto toshite no ketsudan de ne.</b><br/>
hindi gawin nang may excitement; bilang hanap-buhay pagpasiyahan, hinto.<br/>
<br/>
<h4>2.4) Paalala#2:</h4>
<b>うまくできることをして、</b><br/>
<b>umaku dekiru koto wo shite,</b><br/>
Gawin ang maiging nagagawa,<br/>
<br/>
<b>意味がわからず、うまくできないことを</b><br/>
<b>imi ga wakarazu, umaku dekinai koto wo</b><br/>
hindi maunawaan ang saysay, hindi maiging magawa,<br/>
<br/>
<b>他にして良い。</b><br/>
<b>hoka ni shite yoi</b><br/>
Sa magagawa ipagawa, ayos.<br/>
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

<br/>
<b>NOTE (from SYSON, MICHAEL B.):</b>
<table class="noteTable">
	<tr>
		<td class="noteTableImageColumn">
			<img class="noteImage" src="assets/images/Syson,MichaelB.png">
		</td>
		<td class="noteTableTextColumn">
			I had to start going to partner 
			<a class="webServiceLink" target="_blank" href="https://www.staluciacares.com/">Sta. Lucia Health Care Center (SLHCC)</a> due to the <b>CASH</b> and <b>Health Maintenence Organization (HMO)</b> Payments were NOT being received correctly and quickly.<br/>
			<br/>
			DR. SYSON, PEDRO requested my assistance due to NOBODY else was going to work on it. 
			Without yet my wife's physical presence to assist, I had to shift focus away from our <b>USBONG STORE</b>, <b>USBONG SPECIALTY BOOKSTORE</b>, et cetera.<br/>
			<br/>
			While working on the task, I learned that the noise pollution from the Teroristang Komunista group continued at SLHCC.<br/>
			<br/>
			The Accountant who was mainly responsible for working on the task experienced a STROKE on the face, classified to be <b>BELL's PALSY</b>.<br/>
			<br/>
			Previously, a Medical Doctor (Orthopedic Surgeon) who was part of MOSC also had a STROKE, which caused him to have a <b>MAJOR</b> surgical operation on the head.<br/>
			<br/>
			The wireless electric, magnetic, sound waves broadcasted by the budol-budol/manloloko/carnapper/cybercriminal/Teroristang Komunista group is <b>NO JOKE</b>.<br/>
			<br/>
			<b>Additional Note#1:</b> The Medical Doctor trained first at the University of the Philippines Manila as part of <b>INTARMED (INTegrated Liberal–ARts MEDicine)</b>.<br/>
			--> where: <b>INTARMED</b>: intense yet quick Medical Doctor training<br/>
			--> where: <b>Orthopedic</b>: dagdag na training na may kinalaman sa <b>BUTO</b>, <b>MASEL</b>, at sa mga <b>NAGDIDIKIT</b> sa mga iyon, e.g. <b>JOINT</b><br/>
			--> where: <b>Surgeon</b>: keyword: <b>KNIFE</b><br/>
			--> <b>Select Readings:</b> <a class="webServiceLink" target="_blank" href="https://ronibats.ph/2011/how-i-got-into-intarmed/">https://ronibats.ph/2011/how-i-got-into-intarmed/</a>;<br/> 
			last accessed: 20211225<br/>
			<br/>
			<b>Additional Note#2:</b> The Teroristang Komunista group has been misusing the <b>Closed-circuit Television (CCTV) Camera</b> inside the household, in particular where the vehicles are located, and even inside MOSC<br/>
			--> The CCTV Camera exists to supposedly provide security monitor surveillance; It can be accessed using an Android application.<br/>
			--> <b>Example:</b><br/>
			<table>
				<tr>
					<td>
					<b>Bubo Bubo</b> Android Application (with Digital Video Recorder (DVR) + CCTV Camera System)<br/>
					</td>
					<td>
					<img class="newsletterImage" width="100%" height="100%" src="assets/images/newsletter/202112/buboBuboAndroidDVRCCTVHalimbawaFromMApkPureDotCom.png">
					</td>
				</tr>
			</table>
			<br/>
			<a class="webServiceLink" target="_blank" href="https://m.apkpure.com/bubo-bubo/icatch.video.h264#icatch.video.h264-3">https://m.apkpure.com/bubo-bubo/icatch.video.h264#icatch.video.h264-3</a>;<br/>
			last accessed: 20211206<br/>
			<br/>			
			--> <b>Executed Actions:</b><br/> 
			--> notified: DR. SYSON, PEDRO to change the <b>PASSWORD</b> to access the <b>CCTV Camera System</b>, instead of having us with the MOSC Unit continue to endure the attacks, e.g. noise pollution, vehicular theft.<br/>
			--> reminded: DR. SYSON, PEDRO to file a report with the Police identifying his younger brother, SYSON, RAMON, and his family as members of this Teroristang Komunista group.<br/>
			<br/>
			<b>Additional Note#3:</b> observed: Teroristang Komunista group has been promulgating their gawa-gawang <b>INDIRECT COMMUNICATION</b><br/>
			--> This is executed by causing noise pollution, e.g. grave threats "patayin", AND physical injury (falling to the ground) to those who do NOT obey their <b>Gawa-gawang Patakaran (Rules)</b><br/>
			<br/>			
			<b>Example Gawa-gawang Patakaran:</b><br/>
			1) Do NOT share know-how with People, including the Police.<br/>
			2) Do NOT file incident reports with Law Enforcement.<br/>
			<br/>			
			--> observed: this is due to the Teroristang Komunista group aims to be the <b>"Law Enforcement"</b> of their own <b>Gawa-gawang Patakaran</b> that is NOT of the community.<br/>			
			--> In addition, while target UNIT is at <b>CHAOS</b>, having UNCLEAR/MALABO Communication, this Manlolokong/Teroristang Komunista group steals vehicles, et cetera to get quick money.
			<br/>
			<br/>
			<b>Example#1 Physical Attacks causing Injury to Target:</b><br/>
			<b>Target:</b> SYSON, MICHAEL B.<br/>
			Both Knees (datetime stamp: 2020-10-15T13:34)<br/>
			<table>
			<tr>
				<td>
					<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202112/20201021_075857LEFTOccurred20201015T1334.jpg">
					<br/>
					LEFT Knee
				</td>
				<td>
					<img class="newsletterImage" width="80%" height="80%" src="assets/images/newsletter/202112/20201021_075812RIGHTOccurred20201015T1334.jpg">
					<br/>
					RIGHT Knee
				</td>
			</tr>
			</table>
			<br/>			
			<b>Reminder:</b> In Physics, we learn that sound carries energy.<br/>
			That energy hits our eardrums when the sound as wave enters our ears.<br/>
			A sufficient amount of energy can physically hurt our eardrums.<br/>
			We know the amount of energy is sufficient because we already feel pain.<br/>
			This leads to loss of hearing, which further leads to falling to the ground due to being off balance.<br/>
			<br/>
			<b>Reminder:</b> SYSON, MICHAEL B. continues to endure multiple attacks from this Teroristang Komunista group.<br/>
			<b>Example#2:</b> index finger hitting electric fan of computer mother board while executing computer repair service, causing noticeable amounts of blood to come out.<br/>
			<br/>
			observed: Senior Members of this Teroristang Komunista group are dying<br/>
			--> Teroristang Komunista admits to self to be Manloloko<br/>
			--> <b>Result:</b> CHAOS (internal and external) leading to CANCER<br/>
			observed: Senior Citizens have difficulty changing their habits<br/>
			--> The <b>younger generation</b> shall make mistakes due to <b>YABANG</b> from crimes committed while dependent on Senior Members<br/>
			<br/>
			<b>Recommended Action:</b> Destroy the <b>younger generation</b> of this Teroristang Komunista group. No need for negotiation.
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
			<b>生き残りながら、がんばって、</b><br/>
			ikinokorinagara, gambatte,<br/>
			Habang natitirang nabubuhay, gawin nang lubos ang magagawa,<br/>
			<br/>
			<b>この犯罪グループを終わりに致しております。</b><br/>
			kono guru-pu wo owarini itashite orimasu.<br/>
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