<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 

<link rel="stylesheet" href="rs/css/track.css">
	<link rel="stylesheet" href="rs/css/track-status.css">
	<link rel="stylesheet" href="rs/css/ionicons.min.css">
	<link rel="stylesheet" href="rs/css/featherlight.min.css" />
	<script src="rs/js/featherlight.min.js"></script>
	  
	<div class="sector-banner">
    	<form method="get" id="frmTrack">
    	<div class="box">
            <h1>Track &amp; Trace</h1>
            <div class="txt">Track your shipment  anytime</div>
            <div class="form">
            	
            	<div class="col1"><input type="input" class="iCode"  id="track" name="track" value="Enter your tracking number" /></div>
                <div class="col2"><input type="submit" class="btn" value="Track" /></div>
                
            </div>
        </div>
        </form>
    </div>
    <div class="sector-frame">
    	<div class="warpper" id="trackArea">
   		
            
               		</div>
   	</div>

</body>
</html>
<script src="rs/js/track.js"></script>