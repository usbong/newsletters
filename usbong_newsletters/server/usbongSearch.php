<!--
  Copyright 2021 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.

  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20211016
  @website address: http://www.usbong.ph

  Input:
  1) Keyphrase

  Output:
  1) identified Newsletter where keyphrase exists  
  
  Computer Browser: Website Address (Example):
  1) local: http://localhost/usbong_newsletters/server/usbongSearch.php
  2) public internet: http://store.usbong.ph/server/usbongSearch.php
  
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
						
						table.searchTable
						{
							width: 100%;
							padding-left: 60px;
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

					
						input.search-input
						{
							width: 100%;
							max-width: 500px;
														
							resize: none;

							height: 100%;
						}	

						span.spanFileNotFound, span.spanKeyphraseNotFound
						{
							width: 100%;
							padding-left: 60px;
							color: rgb(252,60,3);
						}
    /**/
    </style>
    <title>
      USBONG Newsletter
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
    </style>
<!-- //edited by Mike, 20211014
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

	//edited by Mike, 20211012
//	$filename="C:\\xampp\\htdocs\\usbong_kms\\usbongTemplates\\Cashier\\moscGetSalesReportForEndDayLibreOfficeCalc.csv";

	//gets directory where usbongSearch.php file is located
	//example: C:\xampp\htdocs\usbong_newsletters\server
	//echo __DIR__;
	
	//added by Mike, 20211014
	//TO-DO: -add: auto-verify all existing newsletters
/*	//edited by Mike, 20211014
	$path="/server/2021/viewNewsletter202109.php";
	$filename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $path);
*/

//	$result = array();
	$sYearDirectory="/server/2021/";
    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory);

	$usbongSearchBasePath=str_replace('/', DIRECTORY_SEPARATOR, "/server/usbongSearch.php");
	
	//added by Mike, 20211013; edited by Mike, 20211014
	//note: update this
//	$sWebAddressBasePath = "http://localhost";
	$sWebAddressBasePath = "http://store.usbong.ph";
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

	<table class="searchTable">
		<tr>
			<td>
			<h2>
				Search Newsletters
			</h2>		
			</td>
		</tr>
		<tr>
			<td>
			<?php //TO-DO: -update: this ?>
			<form id="search-form" method="get" action="<?php /*echo site_url('browse/confirmPatient')*/?>">
				<?php
					$itemCounter = 1;
				?>
		<!--		<input type="hidden" name="reportTypeIdParam" value="1" required>
				<input type="hidden" name="reportTypeNameParam" value="Incident Report" required>
		-->

				<div>
					<table width="100%">
					  <tr>
						<td>				
						  <!-- edited by Mike, 20211014 -->
<!--						  
						  <input type="text" class="search-input" placeholder="" name="nameParam" required>
-->						  
						  <input type="text" class="search-input" placeholder="" name="q" required>
						</td>
					  </tr>
					</table>
				</div>
				<br />
				<!-- Buttons -->
				<button type="submit" class="Button-login">
					Enter
				</button>
			</form>
			</td>
		</tr>
	</table>
	<br/>
	<br/>
<?php
	//added by Mike, 20211016
	//note: reusable function
	function autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase) {		
//		echo "hallo: ".$cellValue;
		
			echo "<table class='searchTable'>
				<tr>
				  <td>";						

				//edited by Mike, 20211016
				if (strpos($completeFilename,"www.usbong.ph")!==false) {
					$sWebAddress = $completeFilename;
					$sWebAddressUpdated = $sWebAddress;					
				}
				else {				
					//if Windows machine
					if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
						$sWebAddress = str_replace("\\","/",$completeFilename);
						$sWebAddress = "usbong_newsletters".$sWebAddress;
					}
					else {
						$sWebAddress = $completeFilename;
					}

		//							echo ">>".$completeFilename;

					$sWebAddress = explode("server", $sWebAddress)[1];
					$sWebAddress = $sWebAddressBasePath."/server".$sWebAddress;
												
					$sWebAddressUpdated = str_replace(" ","%20",$sWebAddress);
				}

				echo "<a class='webServiceLink' href=".$sWebAddressUpdated.">".$sWebAddress."</a><br/>";

				echo "... ";
				//edited by Mike, 20211013
	//				echo $cellValue;
				
				//edited by Mike, 20211014
	//							echo str_replace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue)."<br/>";

				//added by Mike, 20211014
				//String Find COMMAND: case sensitive OFF; output case sensitive
				$sKeyphraseCaseSensitive = stristr($cellValue,$sKeyphrase, false); //after needle
				//note: output of stristr also includes part of string after the $sKeyphrase
				$sKeyphraseCaseSensitive = substr($sKeyphraseCaseSensitive,0,strlen($sKeyphrase));

				//String Replace COMMAND: case sensitive OFF
	//							echo str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue)."<br/>";
				$cellValue=str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue);

				//added by Mike, 20211016
//				echo strlen($cellValue)."<br/><br/>";				
				if (strlen($cellValue)>118) { 
//					$cellValue=substr($cellValue,0,118); //118 max character string length
					$cellValue="<b>".substr($cellValue,strpos($cellValue,$sKeyphrase),118); //118 max character string length
				}

				echo str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue);
				
				echo " ...";
			echo "</td>
				</tr>
					</table>";
									
			echo "<br/><br/>";
	}


	//added by Mike, 20211012
	//auto-read: newsletters
	//find keyphrase from searchbox
	
	//note: output: displayed web page format incorrect;
	//use text identified via keyphrases

	ini_set('auto_detect_line_endings', true);

	//added by Mike, 20211014
	$sKeyphrase="";
	$bHasFoundKeyphrase=false;
	
	//added by Mike, 20211014
    foreach ($arrayFilesInCurrentDirectory as $key => $filename)
    { 		
	  if (!in_array($filename,array(".","..")))
      {
		//echo ">".$filename."<br/>";

		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;

		if (!is_dir($completeFilename)) {
		
		//echo ">>>".$completeFilename."<br/>";
		  		  
		//added by Mike, 20200523
		if (!file_exists($completeFilename)) {
			//add the day of the week
			$sDateToday = Date('Y-m-d, l');

			echo "<span class='spanFileNotFound'>
					USBONG: We did NOT find the file. Please re-verify filename to be correct.
				  </span><br/><br/>";
	//		echo "<span class='spanFileNotFound'>Filname:</span><br/><br/>";
			echo "<table class='searchTable'>";						
			echo "<tr>";
				echo "<td>";		
				echo $completeFilename;
				echo "</td>";		
			echo "</tr>";		
			echo "</table>";
			echo "<br/>";
		}
		else {
			//added by Mike, 20211013
	//		echo $_GET['nameParam'];
			
			//edited by Mike, 20211014
			if (!isset($_GET['q'])) { //nameParam
			}
			else {
				$sKeyphrase = $_GET['q']; //nameParam

				//added by Mike, 20211014; removed by Mike, 20211014
//				$bHasFoundKeyphrase=false;

				if (($handle = fopen($completeFilename, "r")) !== FALSE) {						
				  while (!feof($handle)) {		  
					//edited by Mike, 20211014;
					//TO-DO: -update: to identify if keyphrase uses 
					//the previous read batch and the next batch
					//edited by Mike, 20211014
					$data = fread($handle, 128);
//					$data = fread($handle, 164);
		
					//edited by Mike, 20211013
					//$cellValue = utf8_encode($data);
					//edited by Mike, 20211014
//					$cellValue = strip_tags(utf8_encode($data));
					$cellValue = strip_tags($data);

//					echo ">>".$cellValue;

					//added by Mike, 20211014
					//sKeyphrase does NOT exist in $cellValue
					if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))===false) {						
						if (!feof($handle)) {
							$nextData=fread($handle, strlen($sKeyphrase));
							
							$data = $data.$nextData;
							$cellValue = strip_tags($data);	
						}						
					}
	

					//edited by Mike, 20211014
					//sKeyphrase: case-sensitive OFF
	//				if (strpos($cellValue,$sKeyphrase)!==false) {
					//edited by Mike, 20211014
					if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))!==false) {

						//added by Mike, 20211016
						autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase);

/*
						echo "<table class='searchTable'>
							<tr>
							  <td>";						
							
							//if Windows machine
							if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
								$sWebAddress = str_replace("\\","/",$completeFilename);
								$sWebAddress = "usbong_newsletters".$sWebAddress;
							}
							else {
								$sWebAddress = $completeFilename;
							}

//							echo ">>".$completeFilename;

							$sWebAddress = explode("server", $sWebAddress)[1];
							$sWebAddress = $sWebAddressBasePath."/server".$sWebAddress;
														
							$sWebAddressUpdated = str_replace(" ","%20",$sWebAddress);

							echo "<a class='webServiceLink' href=".$sWebAddressUpdated.">".$sWebAddress."</a><br/>";

							echo "... ";
							//edited by Mike, 20211013
							
							//added by Mike, 20211014
							//String Find COMMAND: case sensitive OFF; output case sensitive
							$sKeyphraseCaseSensitive = stristr($cellValue,$sKeyphrase, false); //after needle
							//note: output of stristr also includes part of string after the $sKeyphrase
							$sKeyphraseCaseSensitive = substr($sKeyphraseCaseSensitive,0,strlen($sKeyphrase));

							//String Replace COMMAND: case sensitive OFF
//							echo str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue)."<br/>";
							$cellValue=str_ireplace($sKeyphrase,"<b>".$sKeyphrase."</b>",$cellValue);

							echo str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue);
							
							echo " ...";
						echo "</td>
							</tr>
								</table>";
												
						echo "<br/><br/>";
*/
						
						//added by Mike, 20211014
						$bHasFoundKeyphrase=true;

						//display only the first result with keyphrase found from each existing file
						break;						
					}
				  }
				}							
			}
		  //added by Mike, 20211014
		  }
		}
	  }
	}

	//added by Mike, 20211016
	//note: add: newsletters in another computer server, e.g. hosted by Google Sites
	//note: COMMAND includes text, photographs, et cetera
	//note: noticeable delay in output due to use of file_get_contents(...) Command
	//TO-DO: -verify: adding contents in file stored in Usbong Newsletters' Computer Server
	
	//Additional Note: Past Newsletters
	//Web Page with Computer Instructions auto-generated from Classic to New Google Sites;
	//--> where: Format = Year-Month; example: 2021-05
	//--> Earliest Available: 2020-08
	//--> Newest Available: 2021-05
	$iDayCount=7;//to start at 8;
	$iYearCount=2020;
	$completeFilename="https://www.usbong.ph/excel/excel-2020-08";

	//note: @ mark to NOT display warning message; 
	//return of false signifies error
	while (@file_get_contents($completeFilename)!==false ) {
		$data = file_get_contents($completeFilename);
		
	//	echo $data;
		
		$cellValue = strip_tags($data);

//		echo $cellValue;

		if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))!==false) {
			autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase);											
			$bHasFoundKeyphrase=true;
		}

		$sDayCount="";
		$sYearDay="";
		
		$iDayCount=(($iDayCount)%12)+1;
		
//		echo ">>>>>>iDayCount: ".$iDayCount;
								
		if ($iDayCount<10) { //1 digit only
			$sDayCount="0".$iDayCount;
		}
		else {
			$sDayCount=$iDayCount;
		}
				
		if ($iDayCount==1) { //new year		
			$iYearCount=$iYearCount+1;
		}		

		$sYearDate=$iYearCount."-".$sDayCount;
		
		$completeFilename="https://www.usbong.ph/excel/excel-".$sYearDate;

//		echo ">>>".$completeFilename."<br/>";
	}
	
	//added by Mike, 20211014; edited by Mike, 20211014
	//if (!$bHasFoundKeyphrase$bHasFoundKeyphrase) {
	if ((!empty($sKeyphrase)) and (!$bHasFoundKeyphrase)) {
		echo "<span class='spanKeyphraseNotFound'>
				USBONG: We did NOT find this keyphrase in any of the newsletter files.
			  </span><br/><br/>";
		echo "<table class='searchTable'>";						
		echo "<tr>";
			echo "<td>";		
			echo "Your entered keyphrase: <b>".$sKeyphrase."</b>";
			echo "</td>";		
		echo "</tr>";
		echo "</table>";
		echo "<br/>";					
	}

/* //edited by Mike, 20211013
		echo "<table class='searchTable'>";						

		//Reference: https://stackoverflow.com/questions/9139202/how-to-parse-a-csv-file-using-php;
		//answer by: thenetimp, 20120204T0730
		//edited by: thenetimp, 20170823T1704

		$iRowCount = -1; //we later add 1 to make start value zero (0)
		//if (($handle = fopen("test.csv", "r")) !== FALSE) {
			
		//TO-DO: -add: auto-reverify: if system uses binary or text files
		//reference: https://www.php.net/manual/en/function.fread.php;
		//last accessed: 20211012

		if (($handle = fopen($filename, "r")) !== FALSE) {						
//		  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {			
//		  while (($data = fread($handle, 1000)) !== FALSE) {		
		  while (!feof($handle)) {		  

			//TO-DO: -add: auto-reverify: if file's size is 0

			//note: fread command displays HTML format with text output
			//TO-DO: -reverify: cause of excess displayed text

			$data = fread($handle, 1000);
			
			//we add -1 for the computer to not include the excess cell due to the ending \n
			//removed by Mike, 20211012
//			$num = count($data) -1;
					
			//echo $iRowCount;
					
			$iRowCount++;
						
			echo '<tr class="row">';
				$cellValue = utf8_encode($data);
				echo $cellValue;
			echo '</tr>';
		  }

		  fclose($handle);
		}		
		echo "</table>";		
*/		
?>

	<br/>
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