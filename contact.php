<?php include ('header.php'); ?>

<div class="page-head contact">
<div class="vertical">

<h2 class="page-title">Contact Us</h2>
<p>Mauris non mauris varius</p>

</div><!--.vertical-->
</div><!--.page-head-->

<section class="page-content">

<div class="container">


<div class="row">
<div class=" col-sm-6 col-md-6">

<div id="contact-form-holder">
   
   <form method="post" id="contact-form" action='include/contact-process.php'>

  		<label>Name</label>
		<p><input type="text" name="name" class="comm-field" /></p>
  		<label>Email</label>
		<p><input type="text" name="email" class="comm-field"/></p>
   		<label>Subject</label>
		<p><input type="text" name="subject" class="comm-field" /></p>
  		<label>Message</label>
        <p> <textarea name="message" id="msg-contact" rows="7"></textarea></p>
		<p class="contact-btn"><input type="submit" value="Send message" id="submit-contact"/></p>
	</form>
	</div><!-- contact-form-holder-->
    
    <div id="output-contact"></div>


</div><!--.col-md-6-->

<div class=" col-sm-6 col-md-6">

<div class="contact-right">

<h5 class="small-title">Find us:</h5>

<p>Phasellus porttitor posuere tempor. Aenean facilisis, neque a varius porttitor, risus dui tempus libero, dictum aliquet justo enim vitae lorem. Aliquam lacinia lacinia mi ac convallis. Nulla et lacus et risus laoreet consectetur sed non magna.</p>

<ul>
<li><span>Address:</span> 30 New York Street, New York, USA</li>
<li><span>Phone:</span> 000 - 111 - 222</li>
<li><span>Email:</span> contact [at] lawyers [dot] com</li>
</ul>

</div><!--.contact-right-->

</div><!--.col-md-6-->

</div><!--.row-->

</div><!--.container-->

</section><!--.page-content-->


</div><!--.main-->

<?php include ('footer.php'); ?>