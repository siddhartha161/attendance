<?php
	require_once('auth.php');
	require_once('../com/connection.php');
	require_once('../funcs/alertfuncs.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	  <base  />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="joomla, Joomla" />
  <meta name="description" content="Joomla! - the dynamic portal engine and content management system" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>Welcome to MVSR Engineering College</title>
  <link href="indexc0d0.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="index7b17.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="../templates/rhuk_milkyway/Yynd25lNXkH4JRMZ.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="../modules/mod_signallogin/templates/default-light/signal.css" type="text/css" />
  <script type="text/javascript" src="../media/system/js/caption.js"></script>
  <script type="text/javascript">
 var tabber_slide_speed = 500; var tabber_fade_in_speed = 500; var tabber_scroll = 0; 
 var slider_speed = 500; var slider_fade_in_speed = 1000; var slider_fade_out_speed = 400; var slider_scroll = 2; 
  </script>

	
	<link rel="stylesheet" href="../templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="../templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/template.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/rounded.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/login.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/sprinkle.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/uitable.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/calendar1.css" type="text/css" />
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/css/white.css"
		type="text/css"
	/>
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/css/green_bg.css"
		type="text/css"
	/>
	<link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
	
	<!--[if lte IE 6]>
	<link href="/templates/rhuk_milkyway/css/ieonly.css" rel="stylesheet" type="text/css" />
	<link href="/templates/rhuk_milkyway/css/demo.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	
	<!-- Javascript JQuery code starts -->
	<script type="text/javascript" src="../includes/js/mootools-core-1.4.1-full-compat.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/tablesort.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/jquerylib.min.js"></script>
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/js/JQuery%20form%20validation/css/validationEngine.jquery.css"
		type="text/css"
	/>
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/js/JQuery%20form%20validation/css/template.css"
		type="text/css"
	/>
	<script src="../templates/rhuk_milkyway/js/JQuery%20form%20validation/js/jquery-1.6.min.js" type="text/javascript"></script>
	<script
		src="../templates/rhuk_milkyway/js/JQuery%20form%20validation/js/languages/jquery.validationEngine-en.js"
		type="text/javascript"
		charset="utf-8"
	></script>
	<script
		src="../templates/rhuk_milkyway/js/JQuery%20form%20validation/js/jquery.validationEngine.js"
		type="text/javascript"
		charset="utf-8"
	></script>
	<!-- Javascript JQuery code ends -->
	
	<!-- Datepicker code starts here -->
	<link rel="stylesheet" href="../templates/rhuk_milkyway/js/datepicker/development-bundle/themes/base/jquery.ui.all.css">
	<script src="../templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.datepicker.js"></script>
	<!-- Datepicker code ends here -->
	
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/noconflict.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/jquery.validate.pack.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/paginate.js"></script>
	<script type="text/javascript" language="javascript" src="../templates/rhuk_milkyway/js/tooltip.js"></script>
	<link href="../templates/rhuk_milkyway/css/demo.css" rel="stylesheet" type="text/css" />
	
	<!-- Javascript  JQuery code for menus starts-->
	<link type="text/css" href="../templates/rhuk_milkyway/menus/menu.css" rel="stylesheet" />
	<!-- Javascript  JQuery code for menus ends-->
	
	<!--for pagination and table sort -->
	<!--[if lt IE 7]>
	<style type="text/css" media="screen">
	body { behavior:url("/templates/rhuk_milkyway/csshover.htc"); }
	</style>
	<![endif]-->
	
	<!--[if IE]>
	<style type="text/css">
	ul.fdtablePaginater { display: inline-block; }
	ul.fdtablePaginater { display: inline; }
	ul.fdtablePaginater li { float: left; }
	ul.fdtablePaginater { text-align: center; }
	</style>
	<![endif]-->
	
	<script type="text/javascript">
	//<![CDATA[
	var callbackTest=
	{
		calculateTotalRating:function(opts)
		{
			var trs=document.getElementById("theTable").getElementsByTagName("tbody")[0].rows,
			tot=0,
			cnt=0,
			cell=document.getElementById("visibleTotal");
			
			for(var i=0,tr;tr=trs[i];i++)
			{
				// If the row is visible i.e. has not display:none or the className "invisibleRow" (used by the fake filter)
				if(tr.style.display!="none" && tr.className.search(/(^|\s)invisibleRow($|\s)/)==-1)
				{
					tot+=Number(fdTableSort.getInnerText(tr.cells[6]));
					cnt++;
				};
			};
			
			while(cell.firstChild) { cell.removeChild(cell.firstChild); };
			
			cell.appendChild(document.createTextNode(Number(tot / cnt).toFixed(2)));
		},
		displayTextInfo:function(opts)
		{
			if(!("currentPage" in opts)) { return; }
			
			var p=document.createElement('p'),
			t=document.getElementById('theTable-fdtablePaginaterWrapTop'),
			b=document.getElementById('theTable-fdtablePaginaterWrapBottom');
			
			p.className="paginationText";
			p.appendChild(document.createTextNode("Showing page"+opts.currentPage+" of "+Math.ceil(opts.totalRows/opts.rowsPerPage)));
			
			t.insertBefore(p.cloneNode(true),t.firstChild);
			b.appendChild(p);
		}
	};
	//]]>
	</script>
	
		<link rel="stylesheet" type="text/css" media="screen, projection" href="../templates/rhuk_milkyway/css/slider.css" />
	
	<style type="text/css" media="screen">
	#tooltip
	{
		position: absolute;
		top: 0px;
		left: -999px;
		width: 100px;
		height: 25px;
		line-height: 25px;
		background: transparent url(../templates/rhuk_milkyway/images/tooltip-dongle.png) no-repeat 50% 100%;
		padding-bottom: 5px;
		z-index: 9999;
		display: none !important;
	}
	#tooltipInner1
	{
		padding-left: 5px;
		overflow: hidden;
		color: #fff;
		background: transparent url(../templates/rhuk_milkyway/images/tooltipleft.png) no-repeat 0 0;
		display: none !important;
	}
	#tooltipInner2
	{
		padding: 0 5px 0 0;
		height: 22px;
		line-height: 22px;
		overflow: hidden;
		color: #fff;
		text-align: center;
		background: transparent url(../templates/rhuk_milkyway/images/tooltip.png) no-repeat 100% 0;
		text-shadow: #000 1px 1px 1px;
		display: none !important;
	}
	</style>
	
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" media="screen, projection" href="/../ie.css" />
	<style type="text/css">
	/* Basic styles for non png aware Internet Explorer 6 */
	#tooltip
	{
		background-image: url(/templates/rhuk_milkyway/images/tooltip-dongle.gif); 
		display: none !important;
	}
	#tooltipInner1
	{
		background-image: none;
		padding: 0;
		display: none;
	}
	#tooltipInner2
	{
		background-image: none;
		background: #000;
		padding: 0;
		display: none;
	}
	</style>
	<![endif]-->
	
	<script type="text/javascript" src="../templates/rhuk_milkyway/slider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	var imgList=["slider-disabled.png","slider-disabled-1.png","slider.png","slider-1.png"];
	var preloadImg=[]
	for(var i=0,imgSrc;imgSrc=imgList[i];i++)
	{
		preloadImg[i]=new Image();
		preloadImg[i].src="/../"+imgSrc;
	};
	
	var TT=
	{
		tooltip: null,
		tooltipInner: null,
		handle: null,
		timer: null,
		init: function(cbObj)
		{
			// Grab a reference to the slider handle
			var handle=document.getElementById("fd-slider-handle-"+cbObj.elem.id);
	
			// If something has gone wrong then bail out.
			if(!handle) { return; };
	
			// Create the tooltip if needs be.
			if(!document.getElementById('tooltip'))
			{
				var tt=document.createElement("div");
				tt.id="tooltip";
				
				var TTinner1=document.createElement("div");
				TTinner1.id="tooltipInner1";
	
				var TTinner2=document.createElement("div");
				TTinner2.id="tooltipInner2";

				TTinner1.appendChild(TTinner2);
				tt.appendChild(TTinner1);
				
				document.getElementsByTagName('body')[0].appendChild(tt);

				// Cache a reference to the tooltip and tooltip inner
				TT.tooltip=tt;
				TT.tooltipInner=TTinner2;
			};
			
			// Show the tooltip when the slider is focused
			fdSliderController.addEvent(handle,"focus",TT.show);
			// Show the tooltip on mouseover
			fdSliderController.addEvent(handle,"mouseover",TT.show);
			
			// Hide the tooltip when the slider is blurred
			fdSliderController.addEvent(handle,"blur",TT.hide);
			// Hide the tooltip on mouseout using a slight delay
			fdSliderController.addEvent(handle,"mouseout",
				function()
				{
					var elem=document.getElementById("fd-slider-"+this.id.replace(/fd-slider-handle-|fd-slider-/,""));
					if(elem.className.search("focused")!=-1) { return; };
					TT.timer=setTimeout(TT.hide, 1000);
				});
			
			TT.tooltip.style.display="block";
			TT.tooltip.style.visibility="hidden";
			TT.update(cbObj);
			TT.tooltip.style.display="none";
			TT.tooltip.style.visibility="hidden";
		},
		// A function that positions the tooltip and updates it's value
		// This is also used as the callback function for the slider
		update:function(cbObj)
		{ 
			clearTimeout(TT.timer);
			
			var curleft=0,
			curtop=0,
			obj=document.getElementById("fd-slider-handle-"+cbObj.elem.id),
			osw=obj.offsetWidth;
		
			// Try catch for IE's benefit
			try
			{
				while(obj.offsetParent)
				{
					curleft+=obj.offsetLeft;
					curtop+=obj.offsetTop;
					obj=obj.offsetParent;
				};
			}
			catch(err) { };
			
			TT.tooltip.style.left=Math.round((curleft-((TT.tooltip.offsetWidth-osw)/2)))+"px";
			TT.tooltip.style.top=(curtop-30)+"px";
			
			while(TT.tooltipInner.firstChild) { TT.tooltipInner.removeChild(TT.tooltipInner.firstChild); };
			
			var txt=cbObj.elem.tagName.toLowerCase()=="select" ? cbObj.elem.options[cbObj.elem.selectedIndex].text : cbObj.elem.value;
			TT.tooltipInner.appendChild(document.createTextNode(txt));                
		},
		show:function(e)
		{
			clearTimeout(TT.timer);
			e=e || window.event;
			if(e && e.type && (e.type!="focus" && e.type!="mouseover")) return;
			
			TT.tooltip.style.display="block";
			TT.tooltip.style.visibility="visible";
			TT.update({"elem":document.getElementById(this.id.replace(/fd-slider-handle-|fd-slider-/,""))});
		},
		hide:function(e)
		{
			e=e || window.event;
			if(e && e.type && (e.type!="blur" && e.type!="mouseout")) return;
			TT.tooltip.style.display="none";
			TT.tooltip.style.visibility="hidden";
		}
	};
	</script>
</head>



<style type="text/css">
#menu li .drop
{
	background: url("../templates/rhuk_milkyway/menus/img/menu_divider.png") no-repeat right 0px;
}
</style>

<body background="BG.jpg">
<div class="evaluationwrapper">
<div class="evaluationpage_top"></div>
<div class="evaluationpage_center">
	<div class="evaluationwrapper">
<div class="evaluationpage_center">
	<div >
		<div>
		<table border="0" width="100%" cellpadding="5" cellspacing="0">
			<tr valign="center">
								<td class="uitop_col">
					<span style="font-size: 150%; font-weight: 600;"><span style="font-family: arial; color: orange;"></span><span style="font-family: arial; color: #2485DB;"></span></span>
					MVSR Engineering College				</td>
				<td class="uitop_menu" align="right">
										<style type="text/css">
.vline { background-color: #404040; width: 2px; height: 20px; vertical-align: middle; }
.menu_name { color:#404040 !important; font-weight: bold; }
</style>
<table border="0" cellspacing="2">
    <tr>
        <td><a href="home.php"><span class="menu_name">Home</span></a></td>
                <td><div class="vline"></div></td>
        <td><a href="changepwd.php" ><span class="menu_name">Change Password</span></a></td>
                <td><div class="vline"></div></td>
        <td><a href="../com/logout.php"><span class="menu_name">Log Out</span></a></td>
    </tr>
</table>

									</td>
			</tr>
		</table>
	</div>
	<div class="clr"></div>
	</div>
	<script type="text/javascript">
function menu_hold(ele)
{
    var leftOffset=parseInt($(window).width()-$(ele).offset().left);
    var menuBox=parseInt($(ele).children("div").width());
    var activeLeft=parseInt(menuBox-$(ele).width()-7);
    
    if(leftOffset<menuBox) { $(ele).children("div").css("left",-activeLeft); }
    else { $(ele).children("div").css("left","-1px"); }
}

function menu_out(ele)
{
    $(ele).children("div").css("left","-999em"); 
}
</script>
<div style=" display: inline-block; width: 100%; background: #474747; padding: 0px 0px 5px 0px;">
    <ul id="menu" style="margin-top: 0px; vertical-align: middle;">
                    <li  onmouseover="menu_hold(this)" onmouseout="menu_out(this)">
                <a href="#" class="drop"><span>Admissions </span></a>
                
                                <div class="dropdown_1column">
                                            <div class="col_1">            
                            <h3>Admissions</h3>
                            <ul>
                                                                    <li><a href="studentdetails.php" ><span>student Details</span></a></li>
																	<li><a href="viewstuatt.php" ><span>view Attendance</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>
                    <li  onmouseover="menu_hold(this)" onmouseout="menu_out(this)">
                <a href="#" class="drop"><span>Academics</span></a>
                
                                <div class="dropdown_1column">
                                            <div class="col_1">            
                            <h3>Acad View</h3>
                            <ul>
                                                                    <li><a href="editschedule.php" ><span>View/edit Schedule</span></a></li></ul>
																	<h3>Enter Attendance</h3>
                            <ul>                                    <li><a href="view_tt.php" ><span>As per Schedule</span></a></li>
							                                        <li><a href="enter_att_wnou.php" ><span>Previous date</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>
			<?php
			
			if($_SESSION['user_level']==2)
			{
			
			echo"<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>create</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            
                            <ul>
                                                                    <li><a href=\"createstudent.php\" ><span>student Creation</span></a></li>
																	<li><a href=\"createfaculty.php\" ><span>create Faculty</span></a></li>
																
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			echo"<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>Edit</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            
                            <ul>
                                                                    <li><a href=\"edit.php\" ><span>Edit Student Details</span></a></li>
																	<li><a href=\"edit4.php\" ><span>Edit Faculty Details</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			echo"<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>Schedule</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            
                            <ul>
                                                                    <li><a href=\"createctt.php\" ><span>create class schedule</span></a></li>
																
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			echo "<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>View Passwords</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            <h3>Passord</h3>
                            <ul>
                                                                    <li><a href=\"excel.php\" ><span>Faculty</span></a></li>
																    <li><a href=\"sel_sec_pwd.php\" ><span>Student</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			}
			if($_SESSION['user_level']==4)
			{
			
			echo "<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>View Passwords</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            <h3>Passord</h3>
                            <ul>
                                                                    
																    <li><a href=\"sel_sec_pwd1.php\" ><span>Parent</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			}?>
			
			
			
			
			
			
			
			
			
			
			
                       <li class="menu_right" style="color: #CCC;"><?php if($_SESSION['user_level']!=4) echo "<a href=\"../com/contactadmin.php\">Contact admin</a>"; ?></li> 
    </ul>
    </div>
		<div class="maincontent">
						<div class="evaluationcontent-support">
			<span style="color: #B22222; font-weight: bold; font-size: 12px;">
				Welcome<?php echo " ".$_SESSION['NAME']; ?>		</span>
		</div>
		
				<div class="evaluationcontent-middle">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" style="margin-top: 10px;">
					<tr>
						<td >
							<div id="sprinkle-box" width="100%">
								<div style="height: 300px;">
									<p class="sprinkle"><!--[if lt IE 9]>
<script type="text/javascript" src="/modules/mod_sprinkle/excanvas.js"></script>
<![endif]-->
<script src="../modules/mod_sprinkle/tagcanvas.min.js" type="text/javascript"></script>

<div class="major-div">
<div class="demo-wrapper">
<div id="slider" class="swipe">
<div class="swipe-wrap">
<div class="tiles_box" >
<?php
$count=checkNewAlertCount(); 
$maxtime = 60;
if(function_exists('set_time_limit')) set_time_limit($maxtime);
if($_SESSION['user_level']==1)
{
	/*echo "<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #00d4d6; \">
		<table border=\"0\" width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"enterschedule.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%; align:center; cellspacing:10px;\"><center>Enter Schedule</span>
									</td>
			</tr>
		</table>
	</div>
	";
	echo "<br />	<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #014d60; \">
		<table border=\"0\" width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"editschedule.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Edit Schedule</span>
									</td>
			</tr>
		</table>
	</div>
	
";
	echo "<br />	<td><div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #9966FF; margin-top:10px;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"view_tt.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Enter attendence</span>
									</td>
			</tr>
		</table>
	</div>
	</div></div>

";
	echo "<br />	<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: blue; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"alert_section.php\"); '><span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Alerts<br />";
				if($count==0)
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>no Alerts";
				}
				elseif($count==1)
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>$count new alert";
				}
				else
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>$count new alerts";
				}
					echo "</span>
									</td>
			</tr>
		</table>
	</div>
	</td>


				
";
	echo "<br /><td><div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: orange; margin-top:10px;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"viewstuatt.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>View Attendance</span>
									</td>
			</tr>
		</table>
	</div>";
	echo "<br /><div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color:#00FF99; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"studentdetails.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Student Details</span>
									</td>
			</tr>
		</table></div></td>
	";*/
	
	echo "<center><a href=\"view_tt.php\"target=\"_blank\"><h3><center>Enter Attendence</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"enterschedule.php\"><h3><center>Enter Schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"editschedule.php\"><h3><center>Edit Schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"studentdetails.php\"><h3><center>View Personal details \n of a student</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"viewstuatt.php\"><h3><center>View Attendence</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"alert_section.php\"><h3><center>Alerts ";if($count==0){echo "No new alerts";}
				elseif($count==1)
				{
					echo "$count <img src=\"new.gif\" width=\"28\" height=\"15\"> new Alert";
				}
				else
				{
					echo "$count <img src=\"new.gif\" width=\"28\" height=\"15\">new Alerts ";
				}
	
	
	
	
	
	
	
	
	
}
elseif($_SESSION['user_level']==2)
{
	
	/*echo "<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #00d4d6; \">
		<table border=\"0\" width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"enterschedule.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Enter Schedule</span>
									</td>
			</tr>
		</table>
	</div>
	";
	echo "<br />	<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #014d60;\">
		<table border=\"0\" width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"editschedule.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center> Edit Schedule</span>
									</td>
			</tr>
		</table>
	</div>
	

					
		

";
	echo "<br />	<td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: #9966FF; margin-top:10px;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"view_tt.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Enter Attendence</span>
									</td>
			</tr>
		</table>
	</div>
	</div></div>

";
	echo "<br />	<div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: blue; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"alert_section.php\"); '><span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Alerts <br />";
					if($count==0)
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>No alerts";
				}
				elseif($count==1)
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>$count new alert";
				}
				else
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>$count new alerts";
				}
									echo "</span></td>
			</tr>
		</table>
	</div>
	</td>


				
";
	echo "<br /><td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: orange; margin-top:10px;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"viewstuatt.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px ;line-height: 150%;\"><center>View Attendance</span>
									</td>
			</tr>
		</table>
	</div>";
	echo "<br /><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color:#00FF99; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"studentdetails.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Student Details</span>
									</td>
			</tr>
		</table></div></td>
	";
	echo "<br /><td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color:#FF6699; margin-top:10px; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"fac_det.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>View time table Branch wise</span>
									</td>
			</tr>
		</table></div>
	";
	echo "<br /><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color:#800000;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"notes1.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>View Daily Report</span>
									</td>
			</tr>
		</table></div></td>
	";
	
	echo "<br />	<td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: #9966FF; margin-top:10px;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"edit_att.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Edit Attendence</span>
									</td>
			</tr>
		</table>
	</div>
	</div></div>

";
	echo "<br />	<div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: blue; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"msem.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Manage Semester</span>
									</td>
			</tr>
		</table>
	</div>
	</td>
";*/
    echo "<center><a href=\"view_tt.php\"target=\"_blank\"><h3><center>Enter Attendence</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"enterschedule.php\"><h3><center>Enter Schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"editschedule.php\"><h3><center>Edit Schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"studentdetails.php\"><h3><center>View Personal details \n of a student</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"viewstuatt.php\"><h3><center>View Attendence</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"notes1.php\"><h3><center>View Daily Report</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"fac_det.php\"><h3><center>View Branch wise schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"edit_att.php\"><h3><center>Edit Attendence</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"msem.php\"><h3><center>Manage Semester</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"alert_section.php\"><h3><center>Alerts ";if($count==0){echo "No new Alerts";}
				elseif($count==1)
				{
					echo "$count <img src=\"new.gif\" width=\"28\" height=\"15\">new Alert";
				}
				else
				{
					echo "$count <img src=\"new.gif\" width=\"28\" height=\"15\">new Alerts ";
				}




}
elseif($_SESSION['user_level']==3)
{
	
	/*echo "<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #00d4d6; \">
		<table border=\"0\" width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"enterschedule.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Enter Schedule</span>
									</td>
			</tr>
		</table>
	</div>
	";
	echo "<br />	<div class=\"tiles\" style=\"width: 95%; height: 150px;; background-color: #014d60;\">
		<table border=\"0\" width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"editschedule.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Edit Schedule</span>
									</td>
			</tr>
		</table>
	</div>
	

					
		

";
	echo "<br />	<td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: #9966FF; margin-top:10px; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"view_tt.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Enter Attendence</span>
									</td>
			</tr>
		</table>
	</div>
	</div></div>

";
	echo "<br />	<div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: blue; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"alert_section.php\");'><span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Alerts<br />";
				if($count==0)
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>no Alerts";
				}
				elseif($count==1)
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>$count new alert";
				}
				else
				{
					echo "<span style=\"font-weight: bold; font-size: 12px; line-height: 150%;\"><center>$count new alerts";
				}
				echo	"</span>
									</td>
			</tr>
		</table>
	</div>
	</td>


				
";
	echo "<br /><td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color: orange; margin-top:10px; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"viewstuatt.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px ;line-height: 150%;\"><center>View Attendance</span>
									</td>
			</tr>
		</table>
	</div>";
	echo "<br /><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color:#00FF99; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"studentdetails.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>Student Details</span>
									</td>
			</tr>
		</table></div></td>
	";
	echo "<br /><td><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color:#993366; margin-top:10px;\">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"fac_det.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>&nbsp;&nbsp;&nbsp;&nbsp;View timetable Branch wise</center></span>
									</td>
			</tr>
		</table></div>
	";
	echo "<br /><div class=\"tiles\" style=\"width: 88%; height: 150px;; background-color:#E65050; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"chk_free.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\"><center>View free slots</span>
									</td>
			</tr>
		</table></div></td>
	";*/
	
	
	echo "<center><a href=\"view_tt.php\"target=\"_blank\"><h3><center>Enter Attendence</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"enterschedule.php\"><h3><center>Enter Schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"editschedule.php\"><h3><center>Edit Schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"studentdetails.php\"><h3><center>View Personal details \n of a student</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"viewstuatt.php\"><h3><center>View Attendence</center></h3></a></center>";
	echo "<br><br>";
	
	echo "<center><a href=\"fac_det.php\"><h3><center>View Branch wise schedule</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"chk_free.php\"><h3><center>Manage Free slots</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"alert_section.php\"><h3><center>Alerts ";if($count==0){echo "No new Alerts";}
				elseif($count==1)
				{
					echo "$count <img src=\"new.gif\" width=\"28\" height=\"15\">new Alert";
				}
				else
				{
					echo "$count <img src=\"new.gif\" width=\"28\" height=\"15\">new Alerts ";
				}
	
}
elseif($_SESSION['user_level']==4)
{
/*echo "<br />	<td><div class=\"tiles\" style=\"width: 88%; height: 210px;; background-color: #9966FF; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"edit_att.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\">&nbsp;&nbsp;&nbsp;Edit Attendence</span>
									</td>
			</tr>
		</table>
	</div>
	</div></div>

";
	echo "<br /><div class=\"tiles\" style=\"width: 88%; height: 210px;; background-color:#993366; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF' ;this.style.textShadow='';\"
				onclick='window.open(\"fac_det.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\">&nbsp;&nbsp;&nbsp;View time table Branch wise</span>
									</td>
			</tr>
		</table></div>
	";
	echo "<br />	<td><div class=\"tiles\" style=\"width: 88%; height: 210px;; background-color: #9966FF; margin-top:10px; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer'; this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"createh.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\">&nbsp;&nbsp;Create/delete HOD</span>
									</td>
			</tr>
		</table>
	</div>
	</div></div>

";
	echo "<br />	<div class=\"tiles\" style=\"width: 88%; height: 210px;; background-color: blue; \">
		<table border=\"0\" width=\"88%\" cellpadding=\"0\" cellspacing=\"0\" style=\"height: 150px;\">
			<tr>
				<td style=\"color: #FFF;\" onmouseover=\"this.style.color='#FFF'; this.style.cursor='pointer' ;this.style.textShadow='0px 0px 10px #FFC';\"
				onmouseout=\"this.style.color='#FFF'; this.style.textShadow='';\"
				onclick='window.open(\"makpri.php\"); '>
					<span style=\"font-weight: bold; font-size: 22px; line-height: 150%;\">&nbsp;&nbsp;Create/delete principal</span>
									</td>
			</tr>
		</table>
	</div>
	</td>


				
";*/
	echo "<center><a href=\"edit_att.php\"><h3><center>Edit Attendance</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"fac_det.php\"><h3><center>View time table branch wise</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"createh.php\"><h3><center>Create/delete HOD</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"makpri.php\"><h3><center>Create/delete Principal</center></h3></a></center>";
	echo "<br><br>";
	echo "<center><a href=\"addordltsub.php\"><h3><center>Add/delete Subject</center></h3></a></center>";
	echo "<br><br>";
	
	
}
?>

        </table>
</div></p>
								</div>
							</div>
						</td>
						 		
      
				<br />
						</div></table>
						
						
						</div></div>
				<div class="evaluationfooter">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="34" >
				<tr>
					<td width="50%" valign="middle" style="color: #ffffff; text-align:center; font-weight: bold;">
					Developed by <a target="_blank" href="#" style="color:orange !important;font-size:12px;">MPP</a>
					</td>
				</tr>
			</table>
		</div>
			</div>
	<div class="evaluationpage_bottom"></div>
</div>
</div>

</body>

                          
</body>
</html>