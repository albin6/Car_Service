

<style>
    .logo1 {
    width: 100%;
    padding: 15px 14px 15px;
    box-sizing: border-box;
    background: #2D7DD2;
    text-align: center;
}
#menu li a {
    font-style: normal;
    font-weight: 400;
    position: relative;
    display: block;
    padding: 13px 20px;
    color: #fff;
    white-space: nowrap;
    z-index: 2;
    background-color: #F45D01;
    font-size: 0.9em;
    font-family: 'Roboto', sans-serif;
    border: none;
    border-left: 4px solid #EBAE55;
}
.sidebar-menu {
    position: fixed;
    float: left;
    width: 230px;
    top: 0;
    left: 0;
    bottom: 0;
    background-color: #2D7DD2;
    color: #aaabae;
    box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
    -o-box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
    -webkit-box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
    -moz-box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
    z-index: 999;
}

*, a, button, i, input {
    -webkit-font-smoothing: antialiased;
}
</style>


<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                                                <div class="menu">
                                                 
                                                       <ul id="menu">

									
									
  <li id="menu-academico" ><a href="#"  style="padding: 9px;"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Registration</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
                                                                                   
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="viewuswer.php">View Users</a></li>
                                                                               
										  </ul>
										</li>
                                                                               <li id="menu-academico" ><a href="addshop.php"  style="padding: 9px;"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Add Employee</span> <div class="clearfix"></div></a></li>
                                                                               
                                                                                       <li id="menu-academico" ><a href="#"  style="padding: 9px;"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Request</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
                                                                                   
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="viewrequest.php">View Request</a></li>
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="viewrequest_forward.php">Forwarded Request</a></li>
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="workreport.php">Work Report</a></li>
                                                                    
                                                                    
										  </ul>
										</li>
                                                                                 <li id="menu-academico" ><a href="#"  style="padding: 9px;"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Products</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
                                                                                   
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="addproducts.php">Add Products</a></li>
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="viewpayment.php">Payment</a></li>
                                                                    
                                                                    
										  </ul>
										</li>
                                                               <li id="menu-academico" ><a href="#"  style="padding: 9px;"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Complaint</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
                                                                                   
                                                                                       <li id="menu-academico-avaliacoes"  style="padding: 9px;"><a href="viewcomplaint.php">Complaint</a></li>
                                                                                  
                                                                    
                                                                    
										  </ul>
										</li>
                                                                               
                                                                                <li id="menu-academico" ><a href="viewfeedback.php"  style="padding: 9px;"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Feedback</span> <div class="clearfix"></div></a></li> 
                                                                        
                                                             <li><a href="logout.php"  style="padding: 9px;"><i class="fa fa-table"></i>  <span>Logout</span><div class="clearfix"></div></a></li>
            

								  </ul>
                                                
                                                 
								</div>
							  </div>
<?php 
ob_flush();
?>