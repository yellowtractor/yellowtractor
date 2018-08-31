<?php
/**
 * Template name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yellowtractor
 */

get_header(home);
?>


<div class="page-home">

  <div class="wrap wrap--sm">

  <div class="container">
    <div class="row">

        <div class="col col--6-of-12">
          <h1 class="m-top--0">We are<br/>Fabulous<span class="text-highlight">.</span></h1>
        </div>
        <div class="col col--6-of-12">
         <div class="txt-side--r">
				  <h2 class="m-top--0">Sub header</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
      </div>
    </div>
   </div>
  </div>
	<div class="wrap bg-yellow">
  <div class="container">

   </div>
  </div>

  <div class="wrap">


       <div class="row">
          	<div class="col col--6-of-12 bg-white"></div>

            <div class="col col--6-of-12 bg-grey">
               <div class="txt-services">
					  	  <h2><span>Services 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>

      </div>

			 <div class="row">
							<div class="col col--6-of-12 bg-grey">
								  <div class="txt-services">
							   	<h2><span>Services 2</h2>
							  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					     	</div>
						  </div>

						<div class="col col--6-of-12 bg-white"></div>
			</div>

	</div>


<!--Team  -->

<div class="wrap bg-grey">

    <div class="row">
			<div class="col col--4-of-12 card-3"></div>
			<div class="col col--4-of-12"></div>
			<div class="col col--4-of-12"></div>
      </div>
			<div class="row">
				<div class="col col--4-of-12"></div>
				<div class="col col--4-of-12"></div>
				<div class="col col--4-of-12"></div>
	      </div>

  </div>

<!-- quote strip  -->

 <div class="wrap wrap--med bg-blue">
     <div class="projectLead">
     <div class="centerParent">
      <div class="centerChild">
        <p class="testimonial txt-white">“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, laboriosam facere dolor blanditiis esse sequi rerum numquam minus ea totam, ab deserunt beatae,
        doloribus adipisci possimus. Modi dolores provident rerum?.”</p>
        <h4 class="t-a">John Fab<span class="t-a-pipe"> | </span><span class="t-f">Director of Fabulous Ltd.</span></h4>
      </div>
     </div>
   </div>
 </div>




</div>

<?php

get_footer();
