# Usbong Newsletters
## 1. Screenshot
<img src="https://github.com/usbong/newsletters/blob/main/usbong_newsletters/screenshots/usbongNewslettersScreenshotV20210812T1910.png" width="80%">

## 2. Installation
We need to add the `Apache Server` due to web page file is `.php (PHP Hypertext Preprocessor)` format.<br/>
Otherwise, the web page file shall NOT be viewable on a Web Browser.<br/>

### Reminders: 
`.php Web Page` file contains Commands, e.g. written using the `PHP Computer Language`.<br/>
<br/>
We use the PHP Computer Language to execute Commands with the Database (DB) Storage,<br/> 
e.g. `MySQL (Structured Query Language)`.<br/>
<br/>
Outputs from the DB become viewable as web page files using PHP with `Hypertext Markup Language (HTML)` Commands.

### 2.1. Linux Machine ([LUBUNTU LTS 20.4](http://lubuntu.me))
#### 2.1.1. Download Usbong Newsletters .zip file
<img src="https://github.com/usbong/newsletters/blob/main/usbong_newsletters/screenshots/usbongNewslettersDownloadZipFile.jpg" width="80%">

#### 2.1.2. Execute the following Bash Shell Command using the Terminal Window
sudo chmod -R 777 "/var/www/html/"

#### 2.1.3. Copy and Paste the extracted Usbong Newsletters .zip file to the "var/www/html" folder
<img src="https://github.com/usbong/newsletters/blob/main/usbong_newsletters/screenshots/usbongNewslettersLinuxHTMLFolder.jpg" width="50%">

#### 2.1.4. Execute the following Bash Shell Command using the Terminal Window
sudo ./etc.init.d/apache2 start</b><br/>
<br/>
<b>Done!</b>

## 3. Execution
### 3.1. Linux Machine ([LUBUNTU LTS 20.4](http://lubuntu.me))
--> Enter on Web Browser, the following web page address:<br/> 
--> http://localhost/usbong_newsletters/server/2021/viewNewsletter202108.php<br/>

<img src="https://github.com/usbong/newsletters/blob/main/usbong_newsletters/screenshots/usbongNewslettersExampleOutputWebBrowserAddress.jpg" width="50%">

#### Reminder:
We can view the following web page with the list of folders and files:<br/>
<br/>
<img src="https://github.com/usbong/newsletters/blob/main/usbong_newsletters/screenshots/usbongNewslettersFoldersAndFilesList.jpg" width="40%"><br/>
<br/>
<b>Web page address:</b> http://localhost/usbong_newsletters

## 4. Add-on Software Requirements
### 4.1. Linux Machine 
<b>Note:</b> `Apache Web Server` already included in [LUBUNTU LTS 20.4](http://lubuntu.me) Operating System (OS)

### 4.2. Windows Machine
#### XAMPP
https://www.apachefriends.org/index.html; last accessed: 20210823<br/>

<b>Technologies:</b> Apache Web Server, MySQL, PHP, phpMyAdmin

### 4.3. Any
#### PhantomJS
https://phantomjs.org/; last accessed: 20210823<br/>

<b>Install:</b> https://phantomjs.org/download.html; last accessed: 20210823<br/>

## 5. Open Source Software License
Copyright 2019~2021 SYSON, MICHAEL B.

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0
  
Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

@company: USBONG<br/>
@author: SYSON, MICHAEL B.<br/>
@website address: http://www.usbong.ph<br/>
