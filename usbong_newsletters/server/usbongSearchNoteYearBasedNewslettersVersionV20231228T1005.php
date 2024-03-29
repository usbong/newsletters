<!--
  Copyright 2021~2023 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.

  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20231228; from 20230116
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
  
  
  //added: year folder for 2020, et cetera
  //TO-DO: -update: newsletter pages system to be more organized
  
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
	//edited by Mike, 20230110
	$sYearDirectory="/server/2021/";
//	$sYearDirectory="/server/2022/";
	
	//edited by Mike, 20211020
//    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory);
    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectory, SCANDIR_SORT_DESCENDING);
	
	//added by Mike, 202202302;
//--
	//added by Mike, 20220304	
	//TO-DO: -remove: metadata, e.g. text/css, in search output

	//edited by Mike, 20220305
	//TO-DO: -reverify: added filename in search input

	
/* 	//edited by Mike, 20220304	
	//auto-add until current YEAR

	$sYearDirectoryPartTwo="/server/2022/";

    $arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));
*/
	//echo idate("Y");
	//edited by Mike, 20220619
	$iYearCount=2022; //2021;	
	$iCurrentYear = idate("Y");

	while ($iYearCount<=$iCurrentYear) {
		//edited by Mike, 20230110
		$sYearDirectoryPartTwo="/server/".$iYearCount."/";

		//edited by Mike, 20230103
/*		
		if (file_exists($sYearDirectoryPartTwo)) {
			$arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));			
			
			echo "dito";
		}
*/
		if (file_exists(dirname(__DIR__).$sYearDirectoryPartTwo)) {
			$arrayFilesInCurrentDirectory = array_merge($arrayFilesInCurrentDirectory, scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING));			
		}

		$iYearCount++;
	}

//    $arrayFilesInCurrentDirectory = scandir(dirname(__DIR__).$sYearDirectoryPartTwo, SCANDIR_SORT_DESCENDING);

//--

	$usbongSearchBasePath=str_replace('/', DIRECTORY_SEPARATOR, "/server/usbongSearch.php");
	
	//added by Mike, 20211013; edited by Mike, 20211014
	//note: update this
//	$sWebAddressBasePath = "http://localhost";
	//edited by Mike, 20220304	
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
	//added by Mike, 20220305
	function getUpdatedWebAddress($completeFilename, $sWebAddressBasePath) {
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
				
			//removed by Mike, 20220305
			//$sWebAddressUpdated = str_replace(" ","%20",$sWebAddress);
		}

		return $sWebAddress;
	}

	//added by Mike, 20211016
	//note: reusable function
	function autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase) {		
//		echo "hallo: ".$cellValue;
		
			echo "<table class='searchTable'>
				<tr>
				  <td>";						

				$sWebAddress = getUpdatedWebAddress($completeFilename, $sWebAddressBasePath);
				$sWebAddressUpdated = str_replace(" ","%20",$sWebAddress);

/* //removed by Mike, 20220305
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
*/
				//edited by Mike, 20211017
				//echo "<a class='webServiceLink' href=".$sWebAddressUpdated.">".$sWebAddress."</a><br/>";

				if (strpos($sWebAddress,"downloaded")!==false) {
					$sYearDate=substr($sWebAddress,strpos($sWebAddress,"downloadedNewsletter"));
					$sYearDate=str_replace("downloadedNewsletter","",$sYearDate);
					$sYearDate=str_replace(".php","",$sYearDate);
					
//					echo "sYearDate: ".$sYearDate;
					
					echo "<a class='webServiceLink' href='http://www.usbong.ph/excel/excel-".$sYearDate."'>
						http://www.usbong.ph/excel/excel-".$sYearDate."</a><br/>";
				}
				else {
					echo "<a class='webServiceLink' href=".$sWebAddressUpdated.">".$sWebAddress."</a><br/>";
				}

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

/*
				//added by Mike, 20211016
				echo strlen($cellValue)."<br/><br/>";				
				echo strpos($cellValue,$sKeyphrase)."<br/><br/>";				
*/

				//edited by Mike, 20211017
//				if (strlen($cellValue)>118) { 
				if (strlen($cellValue)>100) {
					
//					$cellValue=substr($cellValue,0,118); //118 max character string length
					//edited by Mike, 20211017
//					$cellValue="<b>".substr($cellValue,strpos($cellValue,$sKeyphrase),118); //118 max character string length

					//note: add in the displayed output, 
					//additional characters before the $sKeyphrase, 
					//due to if $sKeyphrase is at end part of $cellValue,
					//$sKeyphrase becomes the only text of the newsletter
					$iOffset=30;
					
					$iStartPos=strpos($cellValue,$sKeyphrase)-$iOffset;
					$iKeyPhraseStartPos=strpos($cellValue,$sKeyphrase);
					$iKeyPhraseCharLength=strlen($sKeyphrase);

					if ($iStartPos<0) {
						$iStartPos=0;
					}

//					$cellValue=substr($cellValue,$iStartPos,$iKeyPhraseStartPos)."<b>";
					$cellValue=substr($cellValue,$iStartPos,$iKeyPhraseStartPos+$iOffset);
				}

				//edited by Mike, 20211022
				//echo str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue);
//				echo substr(str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue),0,280);
				echo substr(str_replace($sKeyphrase,$sKeyphraseCaseSensitive,$cellValue),0,160);
				
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
/*		  
		echo ">".$filename."<br/>";
		echo ">".$sYearDirectory."<br/>";
*/
		if (strpos($filename, "EXCEL")!==false) {
			//echo ">".$filename."<br/>";
			$sYearDirectory="/server/".substr($filename,strlen("EXCEL "),4)."/";
		}
		else if (strpos($filename, "downloaded")!==false) {
//			echo ">".$filename."<br/>";
			$sYearDirectory="/server/".substr($filename,strlen("downloadedNewsletter"),4)."/";
		}
		//edited by Mike, 20230116
//		else {
		else if (strpos($filename, "viewNewsletter")!==false) {
			$sYearDirectory="/server/".substr($filename,strlen("viewNewsletter"),4)."/";
		}
		//added by Mike, 20230116
		else {
			$sYearDirectory="/server/".substr($filename,strlen("viewLessonsLearnedAsahiDotCom"),4)."/";
		}
		
//		echo ">>>".$sYearDirectory."<br/>";


//		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
//$sYearDirectory="/server/2022/";

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
/*		
			//added by Mike, 20211020; removed by Mike, 20211020
			if (strpos($completeFilename, "downloaded")!==false) {
				continue;
			}
*/			
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
					//edited by Mike, 20211014; edited again by Mike, 20211022
					//$data = fread($handle, 128);
					$data = fread($handle,filesize($completeFilename));										
//					$data = fread($handle, 164);
		
					//edited by Mike, 20211013
					//$cellValue = utf8_encode($data);
					//edited by Mike, 20211014
//					$cellValue = strip_tags(utf8_encode($data));
					$cellValue = strip_tags($data);
					
					//added by Mike, 20230110
					//note: list of additional rules to remove select displayed search outputs via updating searched value for use as input
//-----					
//PART 1
					$cellValue = str_replace("by Mike, ".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("server\\".$sKeyphrase, "", $cellValue);

					$cellValue = str_replace("var/www/html/", "", $cellValue);

//-----					
//PART 2
					
					//added by Mike, 20220305
//					$cellValue = "website address: ".getUpdatedWebAddress($completeFilename, $sWebAddressBasePath).";".$cellValue;

					//edited by Mike, 20230110
					//TO-DO: -update: this; 
					//downloaded newsletters, 
					//EXCEL 2021-07 pages @www.usbong.ph;
/*					
					$cellValue = "website address: ".$completeFilename.";".$cellValue;
*/					
/*
					$cellValue = "website address: ".str_replace("\\".$sKeyphrase, "", $completeFilename).";".$cellValue;
*/
					$cellValue = "website address: ".str_replace("var/www/html/", "", $completeFilename).";".$cellValue;
//-----					
										
					
/*					//added by Mike, 20211022
					//TO-DO: -remove: remaining comments, css, functions
					//Reference: https://stackoverflow.com/questions/1886740/php-remove-javascript;
					//last accessed: 20211022
					//answer by: bng44270, 20091211
					//edited by: 20120301T1234
					echo "cellValue: ".$cellValue;

					while (true) {
					  echo "start position: ".strpos($cellValue,"<script");

					  if ($iStart = strpos($cellValue,"<script")) {
						$iStringLength = (strpos($cellValue,"</script>") + strlen("</script>")) - $iStart;
						$cellValue = substr_replace($cellValue, "", $iStart, $iStringLength);
					  } else {
						break;
					  }
					}
*/


/* //removed by Mike, 20211022	
					//added by Mike, 20211022
					$iReadCountOfCellValue=0;
					$iCellValueLength=strlen($cellValue);
					while ($iReadCountOfCellValue<$iCellValueLength) {
*/
	//					echo ">>".$cellValue;

						//added by Mike, 20211014
						//sKeyphrase does NOT exist in $cellValue
						if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))===false) {						
							if (!feof($handle)) {
								//edited by Mike, 20211017; add string of characters after sKeyPhrase
								//$nextData=fread($handle, strlen($sKeyphrase));
								//edited by Mike, 20211022
								$iCellValueTailLength=20;//1020; //note: max 100000000;//42;							
								
								//note: read until there exists Characters in $cellValue
								$nextData=fread($handle, strlen($sKeyphrase)+$iCellValueTailLength);
								
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
							
							//added by Mike, 20211014
							$bHasFoundKeyphrase=true;

							//display only the first result with keyphrase found from each existing file
							break;						
						}
	
/* //removed by Mike, 20211022	
						//added by Mike, 20211022
						$iReadCountOfCellValue=$iReadCountOfCellValue+128;
						if ($iReadCountOfCellValue>$iCellValueLength) {
							$iReadCountOfCellValue=($iReadCountOfCellValue-$iCellValueLength)-$iCellValueLength;
						}		
*/						
					}

/* //removed by Mike, 20211022	
					//added by Mike, 20211022
					if ($bHasFoundKeyphrase) {
						break;
					}
				  }
*/					
				}							
			}
		  //added by Mike, 20211014
		  }
		}
	  }
	}
	
	//added by Mike, 20211017
	//TO-DO: -update: instructions to be a reusable function
	//note: noticeable speed-up to receive search results
	//after downloading the text file of newsletters from www.usbong.ph
	//to be stored inside Computer Server Storage
	if (!empty($sKeyphrase)) {
		//added by Mike, 20211016
		//note: add: newsletters in another computer server, e.g. hosted by Google Sites
		//note: COMMAND includes text, photographs, et cetera

		//Additional Note: Past Newsletters
		//Web Page with Computer Instructions auto-generated from Classic to New Google Sites;
		//--> where: Format = Year-Month; example: 2021-05
		//--> Earliest Available: 2020-08
		//--> Newest Available: 2021-05
/* //edited by Mike, 20211020; descending order
		$iMonthCount=7;//to start at 8;
		$iYearCount=2020;
*/


		$iMonthCount=13;//to start at 12;
		$iYearCount=2020;
		
		//edited by Mike, 20211020
//		$completeFilename="https://www.usbong.ph/excel/excel-2020-08";
		$filename="downloadedNewsletter2020-08.php";
		$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, "/server/".$iYearCount."/").$filename;
		
//		echo $completeFilename;
		
		//added by Mike, 20211020
		while (file_exists($completeFilename)) {
			$sMonthCount="";
			$sYearDay="";
	
			//edited by Mike, 20211020
//			$iMonthCount=(($iMonthCount)%12)+1;
//			$iMonthCount=(($iMonthCount-1)%12);
			$iMonthCount=$iMonthCount-1;
		
			//echo ">>>>>>iDayCount: ".$iDayCount;
//			echo ">>>>>>iMonthCount: ".$iMonthCount;
					
					
			if ($iMonthCount<10) { //1 digit only
				$sMonthCount="0".$iMonthCount;
			}
			else {
				$sMonthCount=$iMonthCount;
			}

			//echo "iDayCount: ".$iDayCount."<br/>";
	
/* //edited by Mike, 20211020	
			if ($iMonthCount==1) { //new year		
				$iYearCount=$iYearCount+1;				
			}		
			
			//added by Mike, 20211020
			if ($iYearCount==2021) {
				break; //downloaded newsletters of year 2021 already searched
			}
*/
			//added by Mike, 20211020
			if ($iMonthCount==7) {
				break; //downloaded newsletters until 2020-08
			}


			$sYearDate=$iYearCount."-".$sMonthCount;
			
//			$completeFilename="https://www.usbong.ph/excel/excel-".$sYearDate;

			//edited by Mike, 20211020
//			$filename="downloadedNewsletter".$sYearDate;
			$filename="downloadedNewsletter".$sYearDate.".php";

			//edited by Mike, 20211017
			//$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, $sYearDirectory).$filename;
/*				
				echo ">>>>".$filename;
				echo ">>>>".$iYearCount;
*/				
			$sYearDirectory="/server/".$sYearDate."/";
			$completeFilename=dirname(__DIR__).str_replace('/', DIRECTORY_SEPARATOR, "/server/".$iYearCount."/").$filename;
							
			//added by Mike, 20220302
			$data="";		
							
			//removed by Mike, 20211020
//			if (file_exists($completeFilename)) {
				//edited by Mike, 20211020
				//added "@" for computer to NOT display warnings
				if (($handle = @fopen($completeFilename, "r")) !== FALSE) {						
				  while (!feof($handle)) {		  
					//edited by Mike, 20211014;
					//TO-DO: -update: to identify if keyphrase uses 
					//the previous read batch and the next batch
					//edited by Mike, 20211014; edited again by Mike, 20211022
//					$data = fread($handle, 128);

					//added by Mike 20211022
					//TO-DO: -reverify: increase in fread
					//to eliminate excess HTML tags
					//using strip_tags(...) COMMAND
					//reminder: with read length @128, 
					//$data as $cellValue NOT classified as HTML
					//execute with downloaded newsletters 2020 and 2021
//					$data = fread($handle, 204800);
					fread($handle,filesize($completeFilename));

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
							//edited by Mike, 20211017; add string of characters after sKeyPhrase
							//$nextData=fread($handle, strlen($sKeyphrase));
							//edited by Mike, 20211022
							$iCellValueTailLength=20;//1020; //note: max 100000000;//42;							
							
							//note: read until there exists Characters in $cellValue
							$nextData=fread($handle, strlen($sKeyphrase)+$iCellValueTailLength);
							
							$data = $data.$nextData;
							$cellValue = strip_tags($data);	
						}						
					}
	
					//added by Mike, 20220305
//					$cellValue = "website address: ".getUpdatedWebAddress($completeFilename, $sWebAddressBasePath).";".$cellValue;
					$cellValue = "website address: ".$completeFilename.";".$cellValue;
	
					//edited by Mike, 20211014
					//sKeyphrase: case-sensitive OFF
	//				if (strpos($cellValue,$sKeyphrase)!==false) {
					//edited by Mike, 20211014
					if (strpos(strtoupper($cellValue),strtoupper($sKeyphrase))!==false) {
/*
echo ">>>>>".$completeFilename;
//echo ">>>>>".$cellValue;
echo ">>>>>".$sKeyphrase;
*/
						//added by Mike, 20211016
						autoWriteOutput($completeFilename, $sWebAddressBasePath, $cellValue, $sKeyphrase);
						
						//added by Mike, 20211014
						$bHasFoundKeyphrase=true;

						//display only the first result with keyphrase found from each existing file
						break;						
					}
				  }
				}							
			//removed by Mike, 20211020
//			}
		}
	}	

	//added by Mike, 20211014; edited by Mike, 20211017
//	if (!$bHasFoundKeyphrase) {
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
?>

	<br/>
	<br/>
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
