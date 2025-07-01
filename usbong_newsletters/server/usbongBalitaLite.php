<!--
  Copyright 2021~2025 SYSON, MICHAEL B.
  Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIcS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.

  @company: USBONG
  @author: SYSON, MICHAEL B.
  @date created: 20211011
  @date updated: 20250701; from 20250623
  @website address: http://www.usbong.ph

  Computer Browser: Website Address (Example):
  1) local: http://localhost/usbong_newsletters/server/usbongBalitaLite.php

  2) public internet: http://store.usbong.ph/server/usbongBalitaLite.php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>

    <style type="text/css">
	/**/

 						body
                        {
							font-size: 100%;
							color: rgb(30,30,30);

							width: 100%;
							height: 100%;
							
							/* 
								//added by Mike, 20250601
								//LINUX LUBUNTU; OS brightness resets
							*/
/*							
//reference: Usbong KMS; viewReportPatientQueue
//TODO: -update: to include the rest of the parts in the page
							background-color: #cacaca; 							
							filter: brightness(80%);
*/
							
							padding: 2%;							
							padding-top: 0%;

/*	//TODO: -reverify: this							
							padding-left: 10%;
							padding-right: 10%;
*/							

							/* //added by Mike, 20220628
							   //reference: https://www.w3schools.com/cssref/css3_pr_text-justify.asp;
							   //last accessed: 20220628
							*/

/*removed by Mike, 20250516
							text-align: justify;
							text-justify: inter-word;
*/							
							
							/*-webkit-user-select: none;*/ /* Safari */
							/*-ms-user-select: none;*/ /* IE 10 and IE 11 */
							/*user-select: none;*/ /* standard syntax */
							transform: scale(1.0);
							
							/*touch-action: none;*/
							overflow: auto;
                        }
						
						canvas.myCanvas {
							position: absolute;

							padding: 0;
							margin: auto;
							display: block;

							width: 640px;
							height: 360px;
							
							visibility: hidden;

							border: 0px; /*1px dotted gray;*/

							z-index: -1;
						}
						
						
						div.copyright
						{
							text-align: center;
							font-size: 16pt;
							color: rgb(0,0,0); /* black */
							font-weight: bold;
						}
						
						a.webServiceLink
						{
							color: rgb(51,145,23);
							font-weight: bold;
							font-family: Arial;
						}			

						img.ImageTileFrame1 {
							position: absolute;

							clip: rect(0px,32px,32px,0px);
							visibility: hidden;
							
							z-index: 4; /*2;*/
						}
    /**/
    </style>
    <title>
      USBONG BALITA Lite
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
    </style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="fIE_s1RlOUpi0n7Yi2lEawdU_P6W003_QNSF1hKGu1A" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
<script>
		//1000/60=16.66; 60 frames per second
		//1000/30=33.33; 30 frames
		const fFramesPerSecondDefault=16.66;
		//const fFramesPerSecondDefault=33.33;
		var fFramesPerSecond=fFramesPerSecondDefault;
		var iCurrentIntervalId=-1;		
		
		//added by Mike, 20250514
		bHasPressedLanguageChange=false;
		
		//added by Mike, 20250623
		var mainBody = document.getElementById("myBodyId");

				
		//alert(mainBody.clientWidth);
		//alert(document.body.offsetWidth);
		//OK
		//alert(window.innerWidth);
		
		//added by Mike, 20250612
		var batMonsterImageTile = document.getElementById("batMonsterImageId");
		var iBatMonsterAnimationCount=-1;//0; start at -1
		var iBatMonsterAnimationCountMax=5;
		var iBatMonsterAnimationDelayCount=10; //bat; //0
		var iBatMonsterAnimationDelayCountMax=6;
		
		var iImageFrameWidth=32;// 64; //0;
		var iImageFrameHeight=32;// 64;

		var iImageFrameWidthDefault=32;
		var iImageFrameHeightDefault=32;
		
		var isBatMonsterTileActive=true;
		
		function myUpdateFunction() {
			//added by Mike, 20250612
			if (isBatMonsterTileActive) {
				executeBatMonsterWalkingAnimation();
			}
		}
	
		function onLoad() {
			//fFramesPerSecond=16.66; //100.00; //16.66;
			clearInterval(iCurrentIntervalId);
			iCurrentIntervalId=setInterval(myUpdateFunction, fFramesPerSecond);	
		}

		function toggleOriginalTextDisplay() {
			var batMonsterImageTile = document.getElementById("batMonsterImageId");

			batMonsterImageTile.style.visibility="hidden";
			isBatMonsterTileActive=false;
			
			window.location.href = "http://store.usbong.ph/timeoff";
		}
	  
		function executeBatMonsterWalkingAnimation() {
			var batMonsterImageTile = document.getElementById("batMonsterImageId");
			
			batMonsterImageTile.style.visibility="visible";

			//iMonsterAnimationDelayCountMax=15;
									
			//alert(window.getComputedStyle(batMonsterImageTile.style.left));
			
			//added by Mike, 20250623
			var mainBody = document.getElementById("myBodyId");

			//alert(mainBody.clientWidth);
		
			//batMonsterImageTile.style.left = window.innerWidth/2-(iImageFrameWidth/2)+"px";

			batMonsterImageTile.style.left = mainBody.clientWidth/2-(iImageFrameWidth/2)+"px";		
			
			//alert(">>>>"+batMonsterImageTile.style.left);
		
		
			if (iBatMonsterAnimationDelayCount>=iBatMonsterAnimationDelayCountMax) {
				iBatMonsterAnimationCount=(iBatMonsterAnimationCount+1)%2; //3; //last hidden

				iBatMonsterAnimationDelayCount=0;			

			}
			else {
				iBatMonsterAnimationDelayCount++;

		//		alert("iExplosionEffectAnimationCount: "+iExplosionEffectAnimationCount);
			}

			//var iFrameY=0;
			var iFrameY=iImageFrameHeight*2;//64*2; 128;

			//currently two frames only
			if (iBatMonsterAnimationCount==0) { 
				batMonsterImageTile.style.objectPosition = "-" + 0 + "px -" + iFrameY + "px";
			}
			else if (iBatMonsterAnimationCount==1) { 
				batMonsterImageTile.style.objectPosition = "-" + iImageFrameWidthDefault + "px -" + iFrameY + "px";
			}
		}
	  </script>	  
	<body id='myBodyId' class='body' onload='onLoad()'>
<!--	
	<canvas id="myCanvasId" class="myCanvas">
	</canvas>
-->	
	<br/>
	<br/>	
	<div class="copyright">
		USBONG BALITA for mobile devices will be available soon.
	<br/>
	<br/>	
	<?php
		//default
		$updatedDirDueToURL="";

		if (strpos($_SERVER['REQUEST_URI'],".php/")!==false) {
			$updatedDirDueToURL="../";
			
			if (strpos($_SERVER['REQUEST_URI'],"/R")!==false) {
				$updatedDirDueToURL=$updatedDirDueToURL."../";
			}
		}

		echo "<img id='batMonsterImageId' class='ImageTileFrame1' src='../".$updatedDirDueToURL."assets/images/monsters.png?lastmod=20250616' onclick='toggleOriginalTextDisplay()'>"; 
	?>
	<br/>
	<br/>	
		<span>
			© SYSON, MICHAEL B. & USBONG. 2011~<?php echo date("Y");?>. All rights reserved.<br/>
			<a class="webServiceLink" target="_blank" href="https://creativecommons.org/licenses/by/4.0/">
				Creative Commons Attribution License BY 4.0
			</a>
		</span>
	</div>
  </body>
</html>
