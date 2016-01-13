<?php
/**
 Template name: contacto
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <h1> Contacto </h1>
        
        <div class="bodycontacto">
        
		
        <form  name="contacto" id="contacto" method="post" action="enviar-formulario.php">
	
	  <p ><label for="name">Name</label>
	  <input class="remove-bottom" type="text" name="name" id="name" placeholder="Name" required >
      </p>
     
	  <p ><label for="website">Website</label>
	  <input class="remove-bottom" type="text" name="website" id="website" placeholder="Website" required>
      </p>
     
	  <p ><label for="email">email</label>
	  <input class="remove-bottom" type="email" name="email" id="email" placeholder="Email" required>
      </p>
      
	  <p ><label for="budget">budget</label>
	  <input type="text" name="budget" id="budget" placeholder="Budget"></p>
      
      <p ><label for="message"></label>
	  <textarea   name="message" id="message" cols="45" rows="5" placeholder="Message"></textarea>	      </p>
	  
	  <p>
	    <label for="send"></label>
	    <input type="submit" name="send" id="send" value="Send">
	  </p>
	</form>
    
    </div>	
		
       

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
