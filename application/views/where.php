<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
<link rel="stylesheet" href="rs/css/where.css">

	<div class="mapArea">
    	<div id="sector-map"></div>
        <div id="sector-search">
        	<div class="warpper">
            	
                <div class="box boxForm">
                	<h1>Kerry Location
                    	<div>Kerry Express Service Points</div>
                    </h1>
                    
                    <form class="frmSearch" id="frmSearch" onSubmit="$('#btnSearch').click();return false;"  style="display:none;">
                    	<div class="input-inline">
                        	<input type="text" class="txt" id="inputSearch" value="Search by keyword" autocomplete="off" />
                            <div class="selectType" id="selectType">
                            	<div class="inner">All</div>
                           	</div>
                       	</div>
                        <div class="selectPopArea" id="selectPopArea">
                        	<div class="pop">
                            	<a class="list" href="javascrtip:;" onclick="filterMarker('')">All</a>
                                <a class="list bShop" href="javascrtip:;" onclick="filterMarker('shop')">Parcel Shop</a>
                                <a class="list bBTS" href="javascrtip:;" onclick="filterMarker('bts')">BTS Service</a>
                                <a class="list bLocker" href="javascrtip:;" onclick="filterMarker('locker')">Point Parcel Locker</a>
                                <a class="list bDC" href="javascrtip:;" onclick="filterMarker('dc')">Distribution Center Service Point</a>    
                            </div>
                        </div>
                        <input type="button" class="btn" id="btnSearch" value="Find Us" />
                        <input type="hidden" name="fillter_type" id="fillter_type" value="" />
                    </form>
                    
                    <div class="loadLocation"><br /><center><img src="rs/img/loader.gif" align="absmiddle" hspace="10" /> Searching your location.</center><br /></div>
                    <div id="loadSearch" style="display:none"><br /><center><img src="icon/loader.gif" align="absmiddle" hspace="10" /> Searching ...</center><br /></div>
                </div>
            	
                
                <div class="box boxDetail" id="map-detail">
                                  </div>
       	  </div>
        </div>
   	</div>
    
    <div class="sector-type">
    	<div class="warpper">
    		<div class="type location">You Are Here</div>
            <div class="type parcel">Parcel Shop</div>
            <div class="type bts"> BTS Service Point</div>
            <div class="type lockers">Parcel  Locker </div>
          <div class="type dcsp">Distribution Center Service Point</div>
   	  </div>
    </div>
    

    
    <div class="sector-branch">
    	<div class="warpper"  >
            <div id="SearchBranch"></div>
    		<div id="ListBranch">
			
                <script> var PAGE_TYPE = "";	</script>
     
            </div>
    	</div>
    </div>

<script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCSejJUl7On-oPLXXD4a0ThxHcozcQ7Cds&amp;signed_in=true&amp;callback=initMap"></script>
<script src="rs/js/where.js"></script>