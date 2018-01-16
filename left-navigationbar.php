<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function ($) {
    //Set default open/close settings
    var divs=$('.accordion>div').hide(); //Hide/close all containers

    var h2s=$('.accordion>h4').click(function () {
        h2s.not(this).removeClass('active')
        $(this).toggleClass('active')
        divs.not($(this).next()).slideUp()
        $(this).next().slideToggle()
        return false; //Prevent the browser jump to the link anchor

    });
});
</script>
<link rel="stylesheet" type="text/css" href="left-navigator.css">
<div id="mySidenav" class="sidenav">
  <label>Components</label>
<div class="accordion">
<h4 class="acc_trigger"><a href="#">Update Users</a></h4>
<div class="acc_container">
<div class="block"><li><a  href="welcome.php"   id="defaultOpen">Users</a></li></div>
</div>
<h4 class="acc_trigger"><a href="#">Header</a></h4>
<div class="acc_container">
<div class="block"><li><a  href="nav.php"   id="defaultOpen">Navigation</a></li></div>
</div>
<h4 class="acc_trigger"><a href="#">Home</a></h4>
<div class="acc_container">
<ol> <li><a  href="corelsection.php"   id="defaultOpen">CorelSection</a></li>
<li><a  href="bodysection.php"   id="defaultOpen">BodySection</a></li>
 <li><a  href="clients.php"   id="defaultOpen">Company Clients</a></li></ol>
</div>
<h4 class="acc_trigger"><a href="#">What we do?</a></h4>
<div class="acc_container">
<li><a  href="servicebodysection.php"   id="defaultOpen">ServiceBodySection</a></li>
</div>
<h4 class="acc_trigger"><a href="#">About US</a></h4>
<div class="acc_container">
<ol>    
<li><a  href="welcomeheader.php"   id="defaultOpen">Welcome header</a></li>
<li><a  href="thumbnailaboutus.php"   id="defaultOpen">About us thumbnail</a></li>
<li><a  href="testimonials.php"   id="defaultOpen">Testimonials</a></li>
<li><a  href="aboutmainheader.php"   id="defaultOpen">Main header</a></li>
<li><a  href="news.php"   id="defaultOpen">News</a></li></ol>
</div>
<h4 class="acc_trigger"><a href="#">Portfolio</a></h4>
<div class="acc_container">
<ol>  
<li><a  href="welcomeportfolio.php"   id="defaultOpen">Welcome header</a></li>
<li><a  href="thumbnailportfolio.php"   id="defaultOpen">Portfolio</a></li>
<li><a  href="testimonials.php"   id="defaultOpen">Testimonials</a></li>
</ol>
</div>
<h4 class="acc_trigger"><a href="#">Blog</a></h4>
<div class="acc_container">
<ol> <li><a  href="tags.php"   id="defaultOpen">Categories</a></li>
<li><a  href="thumbnailaboutus.php"   id="defaultOpen">DefaultThumbnail</a></li>
<li><a  href="archieve.php"   id="defaultOpen">Archieves</a></li>
<li><a  href="tags.php"   id="defaultOpen">Tags</a></li>
<li><a  href="blogthumbnail.php"   id="defaultOpen">BlogThumbnail</a></li>
<li><a  href="blogcorosel.php"   id="defaultOpen">BlogCarousel</a></li>
 </ol>
</div>
<h4 class="acc_trigger"><a href="#">ContactUs</a></h4>
<div class="acc_container">
<ol> <li><a  href="details.php"   id="defaultOpen">Details</a></li>
<li><a  href="contactdetails.php"   id="defaultOpen">ContactedUs</a></li>
 </ol>
</div>
</div>

 