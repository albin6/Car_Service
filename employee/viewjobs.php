<?php
ob_start();
include '../db.php';
$uns=$_SESSION['admin']['Username'];
$qkl=  mysqli_query($con, "select *from worker where Email='$uns'");
$rr1=  mysqli_fetch_array($qkl);
$eid=$rr1['Id'];
?>
<!DOCTYPE HTML>

<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Registration <i class="fa fa-angle-right"></i>View Details</li>
            </ol>






<div style="margin-left: 320px;">


<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
					  <h2>View jobs</h2>
                                          <form name="f1" method="post" action="up_status.php">
                                          <table id="table">
						<thead>
						  <tr>
							<th>Id</th>
							<th>Title</th>
                                                        <th>Request</th>
                                                        
                                                        <th>Status</th>
                                                         <th>Change</th>
                                                        <th>Actions</th>
                                                       
                                                        
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                  $qr="select  * from tbl_request where Employee='$eid' order by Id desc";
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                  ?>
                                                    <tr>
                                                        
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $r['Title'];?></td>
                                                          <td><?php echo $r['Request'];?></td>
                                                       
                                                        <td><?php echo $r['Status'];?></td>
                                                        
                                                      <td>
                                                          <select name="sltstatus">
                                                              <option>select status</option>
                                                              <option value="Completed">Completed</option>
                                                              <option value="Can not Rectified">Can not Rectified</option>
                                                          </select>
                                                               
                                                       </td>
                                                       <td><input type="hidden" name="hid" value="<?php echo $r['Id'];?>"/>
                                                           <input type="submit" name="upsub" class="btn btn-info" value="Update"></td>
                                                      
                         
                                                        
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
                                                   }
                                                    ?>
						
               
                
                                              </tbody>  
                                                
					  </table>
                                                  </form>  
    </div>
    
    
    
    
    
    



<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
</br>

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				   
                        <?php
                        if($_SESSION['admin']['Usertype']=='Staff')
                        {
                            include './adminsidebar.php';  
                            
                       
                        }
 
                        ?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php
                             ob_flush();


?>
