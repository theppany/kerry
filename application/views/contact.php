<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <link rel="stylesheet" href="rs/css/contact.css">
    
	<div class="sector-banner">
    	<div class="warpper">
    		<div class="area">
            
                <div class="box boxAddr">
                    <h1>Kerry Express (Thailand) Limited</h1>
                    <table class="tb" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" width="70">Address</td>
                        <td valign="top">
                            906, 9/F, Chao Phya Tower, 89 Soi Wat Suan Plu,<br />
                            New Road, Bangrak, Bangkok, 10500  Thailand
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Tel.</td>
                        <td valign="top">+662 238 5558</td>
                    </tr>
                    <tr>
                        <td valign="top">Fax.</td>
                        <td valign="top">+662 237 3752</td>
                    </tr>
                    </table>
                    <div class="btnArea">
                    	<a href="https://www.google.co.th/maps/place/Kerry+Express+HQ/@13.7191982,100.5130438,17z/data=!4m2!3m1!1s0x30e298c46bb9d5c3:0xbbec0a13a0ce440f" target="_blank" class="btn">Google Map</a>
                        </div>
              </div>
                
                
                <div class="box boxForm">
                	<h2>General Enquires</h2>
                    <div class="sub-title">All fields marked with an asterisk (<span class="require">*</span>) are mandatory</div>
                    <div id="myfrmContact">
                        <form name="contactForm" id="contactForm" method="post" autocomplete="off" action="http://www.kerryexpress.com/en/contact/?">
                            
                            <div class="line"><input type="text" class="txt" value="Your Name *" id="inputName" name="inputName" maxlength="200" /></div>
                            
                            <div class="line">
                                <div class="col"><input type="text" class="txt" value="Your E-Mail Address *" id="inputEmail" name="inputEmail" maxlength="100" /></div>
                                <div class="col"><input type="text" class="txt" value="Your Postcode/Zip *" id="inputZip" name="inputZip" maxlength="20" /></div>
                            </div>
                            
                            <div class="line">
                                <div class="col"><input type="text" class="txt" value="Your Account Number" id="inputAccNo" name="inputAccNo" maxlength="100" /></div>
                                <div class="col"><input type="text" class="txt" value="Telephone Number *" id="inputTel" name="inputTel" maxlength="30" /></div>
                            </div>
                            
                            <div class="line">
                                <textarea class="txt" rows="5" id="inputDetail" name="inputDetail" >Details *</textarea>
                            </div>
                            <div class="line btnArea">
                                <div id="error-msg"></div>
                                <input type="submit" class="btn" id="btnSent" value="SUBMIT" />
                            </div>
                        </form>
                    </div>
                </div>
                
        	</div><!-- End Area -->
    	</div>
 	</div>
    
    



    
    <div class="sector-tab">
    	<div class="warpper">
    
    		<div class="tabset" id="tabSet">
            	<div class="tab"><a href="javascript:;" onClick="mapDetail('HQ',true)" class="active" id="btnHQ">Headquarters</a></div>
                <div class="tab"><a href="javascript:;" onClick="mapDetail('DC',true)" id="btnDC">Kerry Bangna  Logistics Center</a></div>
                <div class="tab"><a href="javascript:;" onClick="mapDetail('CS',true)" id="btnCS">Customer Care Service</a></div>
                <div class="tab"><a href="javascript:;" onClick="mapDetail('CC',true)" id="btnCC">Claim Center</a></div>
            </div>
            
            <div class="tabset tabMobile">
            
            	<div class="tab al"><a href="javascript:;" onClick="$('#tabSet .active').parent().prev().find('a').click()" id="btnMPrev"><img src="../img/page_contact/al.png" /></a></div>
                
            	<div class="tab center"><a href="javascript:;" class="active"  id="btnMTxt">Headquarters</a></div>
                
                <div class="tab ar"><a href="javascript:;" onClick="$('#tabSet .active').parent().next().find('a').click()" id="btnMNext"><img src="../img/page_contact/ar.png" /></a></div>
                
            </div>
    
    	</div>
    </div>
    
    
    <div class="mapArea">
	    
  <div class="sector-detail">
            
            <div id="addrHQ">
                <div class="box boxTitle">
                    <h1>Headquarters</h1>
                </div>
                <div class="box">
                    <table class="tb" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" width="70">Address</td>
                        <td valign="top">
Kerry Express (Thailand) Limited<br>
906, 9/F, Chao Phya Tower,<br> 
89 Soi Wat Suan Plu,
New Road, Bangrak, Bangkok, 10500
Thailand		<br>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Tel.</td>
                        <td valign="top">+662 238 5558</td>
                    </tr>
                    <tr>
                        <td valign="top">Fax.</td>
                        <td valign="top">+662 237 3752</td>
                    </tr>
  <tr>
                        <td valign="middle">Map</td>
                        <td valign="top"><a href="../img/page_contact/Map_Bangrak_EN-01.jpg" target="_blank" class="btn">Download Map</a></td>
                    </tr> 
                    
                    </table>
                </div>
          	</div>
            
            <div id="addrDC" class="hidden">
                <div class="box boxTitle">
                    <h1>Kerry Bangna  Logistics Center</h1>
                </div>
                <div class="box">
                    <table class="tb" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" width="70">Address</td>
                        <td valign="top">
                            33/2 Moo7  <br> Bang Pla Bang Phli <br> Samut Prakarn 10540 <br> <br>
                        </td>
                    </tr>
                  
                    <tr>
                        <td valign="middle">Map</td>
                        <td valign="top"><a href="../img/page_contact/Map_KBLC_EN-01.jpg" target="_blank" class="btn">Download Map</a></td>
                    </tr> 
                    </table>
                </div>
          	</div>
            
            <div id="addrCS" class="hidden">
                <div class="box boxTitle">
                    <h1>Customer Care Service</h1>
                </div>
                <div class="box">
                    <table class="tb" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" width="70">Address</td>
                        <td valign="top">
                           38, One Udomsuk, Soi Udomsuk1,<br> Bang Na, Bangkok 10260 
                        </td>
                    </tr>
                     <tr>
                        <td valign="top">Tel.</td>
                        <td valign="top">+662 338 4777</td>
                    </tr>
                    <tr>
                        <td valign="top">Fax.</td>
                        <td valign="top">+662 747 9117</td>
                    </tr>
  <tr>
                        <td valign="middle">Map</td>
                        <td valign="top"><a href="../img/page_contact/Map_Udomsuk_EN-01.jpg" target="_blank" class="btn">Download Map</a></td>
                    </tr> 
                    </table>
                </div>
          	</div>
            
            <div id="addrCC" class="hidden">
                <div class="box boxTitle">
                    <h1>Claim Center</h1>
                </div>
                <div class="box">
                    <table class="tb" cellpadding="0" cellspacing="0" width="100%">
                     <tr>
                        <td valign="top" width="70">Address</td>
                        <td valign="top">
Kerry Express (Thailand) Limited<br>
906, 9/F, Chao Phya Tower,<br> 
89 Soi Wat Suan Plu,
New Road, Bangrak, Bangkok, 10500
Thailand		<br>
                        </td>
                    </tr>
 <tr>
                        <td valign="top">Tel.</td>
                        <td valign="top">+6661 414 8383</td>
                    </tr>
                   <tr>
                        <td valign="top" width="70">E-Mail</td>
                        <td valign="top">
                            TH.EX.Claim@kerrylogistics.com
                        </td>
  <tr>
                        <td valign="middle">Map</td>
                        <td valign="top"><a href="../img/page_contact/Map_Bangrak_EN-01.jpg" target="_blank" class="btn">Download Map</a></td>
                    </tr>  
                   
                    </tr>                     </table>
                </div>
          	</div>
            
            
        </div>
        <div id="sector-map"></div>
        
	</div>

<script type="text/javascript" src="rs/js/contact2.js"></script>
<script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCSejJUl7On-oPLXXD4a0ThxHcozcQ7Cds&amp;signed_in=true&amp;callback=initMap"></script>
<script src="rs/js/maps.js"></script>