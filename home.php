<?php 
session_start();
include('header.php');
?>


<h1>This is the home page, man.</h1>


<body id="page" onload="initULMenu('menu_main')"> 
<div id="header" class="canvas"> 
  <div id="headerTransparent"> 
    <div id="logo"><a href="index.php?src="><h1>Stingrays Swim Team</h1></a></div><!-- end logo --> 
    <div id="headerMenu"></div> 
  </div> 
</div> 
 
<div id="content" class="canvas"> 
 <div id="contentTop"> 
 <div id="contentBot"> 
  <div class="left"> 
    <div id="menu_main"> 
  <ul class="menu_main"> 
     <li class="item1"><a class="first"  href="index.php?submenu=Home&amp;src=gendocs&amp;ref=Home&amp;category=Home" >Home</a></li> 
     <li class="item2"><a  href="index.php?submenu=item1&amp;src=gendocs&amp;ref=Team%20Info&amp;category=Team%20Info" >Team Info</a></li> 
     <li class="item3"><a  href="index.php?submenu=Coaches_Contacts&amp;src=directory&amp;view=coaches" >Coaches</a></li> 
     <li class="item4"><a  href="index.php?submenu=MANNA&amp;src=gendocs&amp;ref=MANNA&amp;category=Team%20Info" ><img alt="MANNA (NEW!!!)" src="MANNA_off.gif" style="border:0" onmouseout="this.src='MANNA_off.gif'" onmouseover="this.src='MANNA_hover.gif'" /></a></li> 
     <li class="item5"><a  href="index.php?submenu=MeetInfo&amp;src=gendocs&amp;ref=Meets&amp;category=Meets" >Meet Information and Results</a></li> 
     <li class="item6"><a  href="index.php?submenu=Times&amp;src=gendocs&amp;ref=TIme%20Standards%20and%20Qualifying%20Times&amp;category=Times" >Times Standards</a></li> 
     <li class="item7"><a  href="index.php?submenu=Meets&amp;src=gendocs&amp;ref=Home&amp;category=Home" >Meet Sign Up</a></li> 
     <li class="item8"><a  href="clientuploads/documents0910/RAYSTriFold2010.pdf"  onclick="window.open(this.href,'_blank'); return false;">Recruiting Brochure</a></li> 
     <li class="item9"><a  href="index.php?submenu=Photos&amp;src=photo" >Photo Albums </a></li> 
     <li class="item10"><a  href="index.php?submenu=Team_Records&amp;src=directory&amp;view=records" >Team Records</a></li> 
     <li class="item11"><a  href="index.php?submenu=Equipment&amp;src=gendocs&amp;ref=Equipment&amp;category=Equipment" >Equipment Info</a></li> 
     <li class="item12"><a  href="index.php?src=gendocs&amp;ref=College%20101&amp;category=College" >College Swimming</a></li> 
     <li class="item13"><a  href="index.php?submenu=Swimming101&amp;src=gendocs&amp;ref=Swimming%20101&amp;category=Swim%20Team%20101" >Swimming 101</a></li> 
     <li class="item14"><a  href="index.php?submenu=NewsFeed&amp;src=newsfeed&amp;ref=USA%20Swimming%20News" >USA Swimmimg News</a></li> 
     <li class="item15"><a  href="https://www.rainedout.net/team_page.php?a=a5682788cd34d0e0b9f9"  onclick="window.open(this.href,'_blank'); return false;">Alert Sign Up </a></li> 
     <li class="item16"><a  href="index.php?submenu=TeamContactInfo&amp;src=gendocs&amp;ref=Stingrays%20Board&amp;category=RAYS%20Board%20Members" >Team Contact Information</a></li> 
     <li class="item17"><a  href="index.php?submenu=Registration&amp;src=forms&amp;ref=Registration" >Registration</a></li> 
     <li class="item18"><a class="last"  href="index.php?submenu=Contact&amp;src=forms&amp;ref=Contact%20Us" >Contact Us</a></li> 
  </ul> 
</div> 
    <div style="padding:20px 0px 0px 25px;"><iframe src="index.php?src=calendar&amp;srctype=tag&amp;m=&amp;y=&amp;v5_tagname=calendar&amp;direct=y" width="200" height="210" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true"><a href="index.php?src=calendar&amp;srctype=tag&amp;m=&amp;y=&amp;v5_tagname=calendar">Click here to view calendar.</a></iframe></div> 
    <div class="bannerLeft"><span id="bnrinst_1_2" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=2" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_2.jpg" style="border:0px;width:120px;height:103px" alt=""  /></a></span> 
</div> 
    <div class="bannerLeft"><span id="bnrinst_2_1" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=1" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_1.jpg" style="border:0px;width:120px;height:106px" alt=""  /></a></span> 
</div> 
    <div class="bannerLeft" style="padding-top:8px;"><span id="bnrinst_3_16" ><img src="cache/sql/fba/fs_16.jpg" style="border:0px;width:100px;height:90px" alt=""  /></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_4_4" ><img src="cache/sql/fba/fs_4.jpg" style="border:0px;width:100px;height:90px" alt=""  /></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_5_9" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=9" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_9.jpg" style="border:0px;width:120px;height:89px" alt="Sport Fair"  /></a></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_6_3" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=3" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_3.jpg" style="border:0px;width:120px;height:98px" alt=""  /></a></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_7_10" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=10" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_10.jpg" style="border:0px;width:90px;height:140px" alt="SwimNetwork"  /></a></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_8_13" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=13" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_13.jpg" style="border:0px;width:115px;height:75px" alt=""  /></a></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_9_15" ><img src="cache/sql/fba/fs_15.jpg" style="border:0px;width:115px;height:75px" alt=""  /></span> 
</div> 
    <div class="bannerLeft" style="padding-top:15px;"></div> 
    <div class="bannerLeft" style="padding-top:15px;"><span id="bnrinst_11_17" ><a class="fba_links" href="index.php?src=fba&amp;srctype=click&amp;id=17" onclick="window.open(this.href); return false;"><img src="cache/sql/fba/fs_17.png" style="border:0px;width:79px;height:79px" alt=""  /></a></span> 
</div> 
    <br /><br /> 
  </div> 
</html>