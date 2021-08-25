<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
<link rel="stylesheet" href="rs/css/career-form.css">
<link rel="stylesheet" href="rs/css/datepicker.css">
<script src="rs/js/jquery2.js"></script>
 <script src="rs/js/datepicker.js"></script>
<script src="rs/js/custom.min.js"></script> 

	<div class="registerForm">
    	<div class="warpper">
        
    		<form id="frmRegisterJob">
            	<input type="hidden" class="" id="ref" name="ref" maxlength="255" value="177">
                <input type="hidden" class="" id="position" name="position" title="Position Applied" maxlength="255" value="Key Account Officer">
        	<h1 class="pageTitle"><span>Job Application Online</span></h1>
    		
            <div class="box">
            	<h3>Position Applied for</h3>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col col-name"><span class="req">*</span> Position Applied for</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input" title="Position Applied" style="border:0px;font-weight:bold;text-align:center" maxlength="255" readonly="" value="Key Account Officer"></div>
                        <div class="col col-desc"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Expected Salary</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center number" id="salary" name="salary" maxlength="10"></div>
                        <div class="col col-desc">Bath/Month</div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Start Date</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center date hasDatepicker" id="ready" name="ready" maxlength="10" readonly=""></div>
                        <div class="col col-desc"><img src="rs/img//calendar.png"></div>
                    </div>
                </div>
            </div>
            
            
            <div class="box">
            	<h3>Personal Details </h3>
                <div class="subtitle">Name</div>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col col-name"><span class="req">*</span> Title</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input input-radio-area">
                        	<input type="radio" id="title" name="title" value="Mr." checked=""> Mr.
                            <input type="radio" id="title" name="title" value="Mrs."> Mrs.
                            <input type="radio" id="title" name="title" value="Miss."> Miss
                            <input type="radio" id="title" name="title" value="Other"> Other
                       	</div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> First Name &amp; Last Name <br>&nbsp;&nbsp;&nbsp;(In Thai)</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input _req" id="name" name="name" title="First Name &amp; Last Name (In Thai):" maxlength="255"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> First Name &amp; Last Name <br>&nbsp;&nbsp;&nbsp;(In English)</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input _req" id="nameen" name="nameen" title="First Name &amp; Last Name (In English)" maxlength="255"></div>
                    </div>
                </div>
                
                <div class="subtitle">Personal Information</div>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col col-name"><span class="req">*</span> Date of birth</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center date _req hasDatepicker" id="birthdate" name="birthdate" title="Date of birth" maxlength="10" readonly=""></div>
                        <div class="col col-desc"><img src="rs/img//calendar.png"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> Weight</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center number _req" id="weight" name="weight" title="Weight" maxlength="3"></div>
                        <div class="col col-desc">Kilograms</div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> Height</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center number _req" id="height" name="height" title="Height" maxlength="3"></div>
                        <div class="col col-desc">Centimeters</div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> Marital Status</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input input-radio-area">
                        	<input type="radio" id="status" name="status" checked="" value="Single"> Single
                            <input type="radio" id="status" name="status" value="Married"> Married
                            <input type="radio" id="status" name="status" value="Widowed"> Widowed
                            <input type="radio" id="status" name="status" value="Divorced"> Divorced
                       	</div>
                    </div>
                </div>
                
                <div class="subtitle">Address</div>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col col-name"><span class="req">*</span> Present Address</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><textarea class="txt_input _req" id="addr" name="addr" title="Present Address" rows="4"></textarea></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> Telephone No</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center _req" id="tel" name="tel" title="Telephone No" maxlength="20"></div>
                        <div class="col col-desc"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> Mobile No.</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center _req" id="mobile" name="mobile" title="Mobile No." maxlength="20"></div>
                        <div class="col col-desc"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"> E-Mail</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center" id="email" name="email" maxlength="50"></div>
                        <div class="col col-desc"></div>
                    </div>
               	</div>
                
            </div><!-- End .box -->
            
            
            <div class="box">
            	<h3>Indicate HighestEducation Level</h3>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col col-name"><span class="req">*</span> School / University</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input _req" id="eduins" name="eduins" title="School /University" maxlength="200"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name"><span class="req">*</span> Degree Obtained</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input _req" id="edubg" name="edubg" title="Degree Obtained" maxlength="200"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Faculty</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input" id="edufaculty" name="edufaculty" maxlength="200"></div>
                        <div class="col col-desc"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Major</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input" id="edubranch" name="edubranch" maxlength="200"></div>
                        <div class="col col-desc"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Year of graduation</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center number" id="eduyaer" name="eduyaer" maxlength="4"></div>
                        <div class="col col-desc"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Grade Point Average</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center number" id="edugpa" name="edugpa" maxlength="4"></div>
                        <div class="col col-desc"></div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="box">
            	<h3>Employment</h3>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col"><input type="radio" id="inputWorked" name="inputWorked" value="N" checked=""> No Experience</div>
                        <div class="col"><input type="radio" id="inputWorked" name="inputWorked" value="Y"> Work Experience &nbsp;
                        	<input type="text" class="txt_input txt-width-auto txt-center number" id="wkexp" name="wkexp" size="3" maxlength="2">&nbsp; Year</div>
                    </div>
               	</div>
                
                <div class="subtitle">Present or Latest Employer</div>
                <div class="inputArea">
                	<div class="row">
                    	<div class="col col-name">From</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center date hasDatepicker" id="wkhiststart" name="wkhiststart" maxlength="10" readonly=""></div>
                        <div class="col col-desc"><img src="rs/img//calendar.png"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">To</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input txt-center date hasDatepicker" id="wkhistend" name="wkhistend" maxlength="10" readonly=""></div>
                        <div class="col col-desc"><img src="rs/img//calendar.png"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Name of Employer</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input" id="wkhistname" name="wkhistname" maxlength="200"></div>
                    </div>
                    <div class="row">
                    	<div class="col col-name">Position</div>
                        <div class="col col-separate">:</div>
                        <div class="col col-input"><input type="text" class="txt_input" id="wkhistpos" name="wkhistpos" maxlength="200"></div>
                    </div>
               	</div>
                
          	</div>
                
                
           	<div class="confirmArea">
            	<div><input type="checkbox" value="Y" id="acceptFlag">  I certify that all statements given in this application form are true.</div>
                <input type="submit" class="btn btn-submit" value="Submit">
          	</div>
            
      	</form>
        
    	</div>
    </div>


<script src="rs/js/Form.js"></script>

