<?php
require_once 'init.php';
  
$rs = $db->query("SELECT* FROM T_Cat order by sort");
    $cats = $rs->fetchAll();

  $rs = $db->query("SELECT* FROM T_Page where id=1");
    $about = $rs->fetch();


?>
<?php
require_once 'header.php';
?>
 <link rel="stylesheet" href="_/css/about.css">

	<div class="sector-banner"></div>

    <div class="sector-txt">
    	<div class="warpper">Kerry Express is Thailand’s Leading Parcel Delivery Company</div>
</div>
    
    <div class="sector-map">
    	<div class="warpper">
        	<div class="row">
            	<div class="map"></div>
                <div class="txt">
                    <h3>Who Are We ?</h3>
    
                    Established in 2006, we are now having more than 200 offices in all provinces in Thailand.  Our next-day (ND) delivery service covers 99.9% of Thai population, and 97% of the parcels are delivered at the first attempt.<br><br>
Everyday, Kerry Express delivers tens of thousands of parcels to offices, warehouses, retail shops and households. Our key customers include international express firms, e-commerce companies, home shopping channels, banks, technology firms, telecom companies, financial institutes, schools, as well as local retail chains.  <br> <br>
Since 2013, Kerry Express started to provide over-the-counter parcel service (C2C) by opening Parcel Shops in local communities and Service Points on Bangkok’s sky train stations.  We also operate Parcel Lockers in offices and condominiums.     These service locations help thousands of individuals and SMEs in Bangkok sending parcels at ease to their families, friends, customers and business partners across the nation.<br><br>
Kerry Express is also Thailand’s biggest cash-on-delivery (COD) operator, and the only company which accepts credit card and debit card payment over the doorstep.<br><br>
Outside Thailand, Kerry Express has its presence in Hong Kong, Taiwan, Vietnam, Cambodia and Malaysia.
<br>
<br>

                </div>
          	</div>
        </div>
    </div>
    
    
    <div class="sector-delivery">
    	<div class="warpper">
        	<div class="txt">
            	<h3>Delivery last mile delivery network<br />
           	  </h3>
                
          Kerry Express is a subsidiary of Kerry Logistics Network Limited (KLN, a company listed in Hong Kong Stock Exchange) and a member of the Kerry Group’s of companies. Our sister companies include <br>
          <br>
          &nbsp; &nbsp;- Shangri-La Hotel Group<br>
          &nbsp; &nbsp;- SCMP Group<br>
          &nbsp; &nbsp;- Wilmar International<br>
          &nbsp; &nbsp;- Kerry Logistics<br>
          &nbsp; &nbsp;- Kerry Siam Seaport <br>
           &nbsp; &nbsp;- Kerry Asia Road Transport<br>
       	   <br>
       	   <br>
       	  </div>
      	</div>
	</div>	


	<div class="sector-our">
    	<div class="warpper">
        	<div class="txt">
            	<h3>Our philosophy</h3>

                <div class="subject">Focus</div>
                Instead of trying to do everything, we focus on being a domestic parcel delivery company
                
                <div class="subject">Simplicity</div>
                We make things simple Anywhere in Thailand, next-day delivery, service guaranteed
                <div class="subject">Services</div>
                We run the country-best platform in terms of speedcoverage and deliverables
                
                <div class="subject">Neutrality</div>
                We partner with banks, international couriers, e-commerce companies, trading firms
                and home shopping channels with our best services
                We never consider to do their businesses
                
                <div class="subject">Sustainable Growth</div>
                We strive for sustainable growth.   Kerry Express re-invests most of its earnings into making
                the nationwide platform stronger and our  customers and staffs happier
            </div>
      	</div>
 	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37743575-4', 'auto');
  ga('send', 'pageview');

</script>

<?php
require_once 'footer.php';
?>

