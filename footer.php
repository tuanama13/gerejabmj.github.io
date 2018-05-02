	<footer class="page-footer grey darken-3">
	    <div class="container">
	      <div class="row">
	        <div class="col l5 s12">
	          <h5 class="white-text">Company Bio</h5>
	          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


	        </div>
	        <div class="col l4 s12">
	          <h5 class="white-text">Alamat</h5>
			  <p>Jl. Kom. Yos. Sudarso 100, Pontianak Barat <br>

				Pontianak – Indonesia <br>

				Telp : (0561) 7208640 <br>

				Fax : (0561) 7268611 <br>
			  </p>
	        </div>
	        <div class="col l3 s12">
	          <h5 class="white-text">Media Sosial</h5>
	          <ul class="social-link">
	            <li>
	            	<a class="circle-bg" href="#!" style="margin-left: 5px; color: #3b5999;"><i class="ion-social-facebook-outline small" ></i></a>
					<a class="white-text" href="#!" style="margin-left: 5px;"><i class="ion-social-twitter-outline small"></i></a>
	            	<a class="white-text" href="#!" style="margin-left: 5px;"><i class="ion-social-youtube-outline small"></i></a></a>
	            	<a class="white-text" href="#!" style="margin-left: 5px;"><i class="ion-social-instagram-outline small"></i></a></a>
	            </li>
	            
	          </ul>
	        </div>
	      </div>
	    </div>
	    <div class="footer-copyright  grey darken-4">
	      <div class="container">
	      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
	      </div>
	    </div>
	  </footer>

		<!--JavaScript at end of body for optimized loading-->
      	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
  		<!-- <script src="js/init.js"></script> -->

		<!-- sidenav script -->
  		<script>
  			const sideNav = document.querySelector('.sidenav');
  			M.Sidenav.init(sideNav);
  		</script>
  		<script>
  			var elem = document.querySelector('.slider');
  			M.Slider.init(elem, {
  				indicators: false,
  				height: 450,
  				transition: 500,
  				interval: 6000
  			});
  		</script>
  		<script>
  			  
			    var elems = document.querySelectorAll('.dropdown-trigger');
			    M.Dropdown.init(elems, {
			    	hover : true, 
			    	coverTrigger: false,
			    	constrainWidth : false
			    });
			  

  		</script>
  		<script>
  			var elems = document.querySelectorAll('.collapsible');
    		M.Collapsible.init(elems);
  		</script>
    </body>
  </html>