<?php  
	include "init/db.php";
	include "header.php";
?>
	<!-- Section Slidernya -->
	<section class="slider">
		<ul class="slides">
	      <li>
	        <img src="images/slider/slider1.jpg"> <!-- random image -->
	        <div class="caption center-align">
	          <h3 class="teal-text text-lighten-3">This is our big Tagline!</h3>
	          <h5 class="light teal-text text-lighten-4">Suspendisse quis risus a enim tempor vehicula non quis purus. Nam ultrices, mauris et maximus luctus, nulla lectus malesuada arcu, in tincidunt nibh ante quis urna. </h5>
	        </div>
	      </li>
	      <li>
	        <img src="images/slider/slider2.jpg"> <!-- random image -->
	        <div class="caption right-align">
	          <h3 class="teal-text text-lighten-3">This is our big Tagline!</h3>
	          <h5 class="light teal-text text-lighten-4">Suspendisse quis risus a enim tempor vehicula non quis purus. Nam ultrices, mauris et maximus luctus, nulla lectus malesuada arcu, in tincidunt nibh ante quis urna. </h5>
	        </div>
	      </li>
	    </ul>
	</section>

	<!-- section Jadwal Misa -->
	<section id="jadwal">
		<div class="container">
			<div class="row">			
				<div class="col l6 m12 s12">
					<div class="jadwal card-panel">
						<center>
							<h5>JADWAL MISA</h5>
							<div class="divider-header"></div>
						</center>
						<table>
					        <thead>
					          <tr>
					              <th colspan="3">Minggu Biasa</th>
					              
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					          	<td rowspan="2">Minggu, 12 Mei 2018</td>
					            <td>Misa 1</td>
					            <td>06.00</td>
					            
					          </tr>
					           <tr>
					            <td>Misa 2</td>
					            <td>08.00</td>	            
					          </tr>
					          
					        </tbody>
					      </table>
					      <table>
					        <thead>
					          <tr>
					              <th colspan="3">Misa Harian</th>
					              
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					          	<td rowspan="2">Senin - Jumat</td>
					            <td>Misa 1</td>
					            <td>06.00</td>
					            
					          </tr>
					           <tr>
					            <td>Misa 2</td>
					            <td>18.00</td>	            
					          </tr>
					          
					        </tbody>
					      </table>
					       <table>
					        <thead>
					          <tr>
					              <th colspan="3">Misa Jumat Pertama Bulan</th>
					              
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					          	
					            <td>Misa 1</td>
					            <td>18.00</td>
					            
					          </tr>
					    
					          
					        </tbody>
					      </table>
					</div>
				</div>
				<!-- end of jadwal -->

				<div class="col l6 m12 s12">
					<div class="event card-panel">
						<center>
							<h5>EVENT</h5>
							<div class="divider-header"></div>
						</center>
						<table>				        
					        <tbody>

					        	<tr>
					        		<td width="80px"><div class="tgl-event"><h4>21</h4> April 2018</div></td>				        	
					        		<td><h5>Event 1</h5>
					        			<span><i class="material-icons">access_time</i> 18.30 - Selesai</span>
					        		</td>
					        	</tr>	
					        	<tr>
					        		<td width="80px"><div class="tgl-event"><h4>21</h4> April 2018</div></td>				        	
					        		<td><h5>Event 1</h5>
					        			<span><i class="material-icons">access_time</i> 18.30 - Selesai</span>
					        		</td>
					        	</tr>	
					        	<tr>
					        		<td width="80px"><div class="tgl-event"><h4>21</h4> April 2018</div></td>				        	
					        		<td><h5>Event 1</h5>
					        			<span><i class="material-icons">access_time</i> 18.30 - Selesai</span>
					        		</td>
					        	</tr>				          
					        </tbody>
					    </table>
					</div>
				</div>
				<!-- end of event -->
			</div>
		</div>
	</section>
	<!-- end of section Jadwal -->

	<section class="article" id="article">
		<div class="row">
			<div class="col l8 m12 s12" style="margin-bottom: 30px;">
				<div class="kiri">
					<header>
						<center>
							<h4>BERITA TERKINI</h4>
							<div class="divider-header"></div>
						</center>
					</header>

					<div class="card-article">
					    <div class="img-article">
					    	<img src="images/ga.jpg" width="200px" height="200px" >
					    </div>
					    <div class="title-article">
					    	<h5>Lorem Ipsum is simply dummyum has been the </h5>
					    </div>
					     <div class="info-article">
					    	<div class="left"> 21 April 2018 | By : <a href="#">Erwin S.</a> | in : <a href="#"> Artikel</a></div>
					    </div>
					    <div class="content-article">
					    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					    </div>
					    <div class="footer-article">
					    	<a href="#">Read More</a>
					    </div>
					</div>
						
						<div class="divider"></div>
						<div class="clearfix"></div>
					<div class="card-article">
					    <div class="img-article">
					    	<img src="images/ga2.jpg" width="200px" height="200px" >
					    </div>
					    <div class="title-article">
					    	<h5>Lorem Ipsum is simply dummyum has been the </h5>
					    </div>
					     <div class="info-article">
					    	<div class="left"> 21 April 2018 | By : <a href="#">Erwin S.</a> | in : <a href="#"> Artikel</a></div>
					    </div>
					    <div class="content-article">
					    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					    </div>
					    <div class="footer-article">
					    	<a href="#">Read More</a>
					    </div>
					</div>
					<div class="clearfix"></div>

					<div class="divider"></div>

					<div class="card-article">
					    <div class="img-article">
					    	<img src="images/slider/slider3.jpg" width="200px" height="200px" >
					    </div>
					    <div class="title-article">
					    	<h5>Lorem Ipsum is simply dummyum has been the </h5>
					    </div>
					     <div class="info-article">
					    	<div class="left"> 21 April 2018 | By : <a href="#">Erwin S.</a> | in : <a href="#"> Artikel</a></div>
					    </div>
					    <div class="content-article">
					    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					    </div>
					    <div class="footer-article">
					    	<a href="#">Read More</a>
					    </div>
					</div>
					<div class="clearfix"></div>

					<div class="divider"></div>

					<div class="card-article">
					    <div class="img-article">
					    	<img src="images/slider/slider1.jpg" width="200px" height="200px" >
					    </div>
					    <div class="title-article">
					    	<h5>Lorem Ipsum is simply dummyum has been the </h5>
					    </div>
					    <div class="info-article">
					    	<div class="left"> 21 April 2018 | By : <a href="#">Erwin S.</a> | in : <a href="#"> Artikel</a></div>
					    </div>
					    <div class="content-article">
					    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					    </div>
					    <div class="footer-article">
					    	<a href="#">Read More</a>
					    </div>
					</div>
					<div class="clearfix"></div>

					<div class="divider"></div>

					<div class="card-article">
					    <div class="img-article">
					    	<img src="images/slider/slider2.jpg" width="200px" height="200px" >
					    </div>
					    <div class="title-article">
					    	<h5>Lorem Ipsum is simply dummyum has been the </h5>
					    </div>
					     <div class="info-article">
					    	<div class="left"> 21 April 2018 | By : <a href="#">Erwin S.</a> | in : <a href="#"> Artikel</a></div>
					    </div>
					    <div class="content-article">
					    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					    </div>

					    <div class="footer-article">
					    	
					    	<a href="#">Read More</a>
					    </div>
					</div>
					<div class="clearfix"></div>
					
					<div class="divider"></div>

					<div class="paging-article">
						<center>
							<ul class="pagination">
							    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
							    <li class="active teal"><a href="#!">1</a></li>
							    <li class="waves-effect"><a href="#!">2</a></li>
							    <li class="waves-effect"><a href="#!">3</a></li>
							    <li class="waves-effect"><a href="#!">4</a></li>
							    <li class="waves-effect"><a href="#!">5</a></li>
							    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						  </ul>
						</center>
					</div>


				</div>
			</div>
			<!-- end of col l8 -->

			<div class="col l4 m12 s12">
				<div class="kanan card-panel">
					<!-- <div class="event card-panel"> -->
						<center>
							<h5>POPULAR ARTICLE</h5>
							<div class="divider-header"></div>
						</center>
						<ul class="collection">
						    <li class="collection-item avatar">
						    	<a href="" class="collection-item">
						      		<img src="images/ga.jpg" class="circle" width="50px" height="50px">
						      		<p>Lorem Ipsum is simply dummyum has been the </p>
						      	</a>
						    </li>
						    <li class="collection-item avatar">
						    	<a href="" class="collection-item">
						      		<img src="images/ga2.jpg" class="circle" width="50px" height="50px">
						      		<p>Lorem Ipsum is simply dummyum has been the </p>
						      	</a>
						    </li>
						    <li class="collection-item avatar">
						    	<a href="" class="collection-item">
						      		<img src="images/slider/slider2.jpg" class="circle" width="50px" height="50px">
						      		<p>Lorem Ipsum is simply dummyum has been the </p>
						      	</a>
						    </li>
						    <li class="collection-item avatar">
						    	<a href="" class="collection-item">
						      		<img src="images/slider/slider3.jpg" class="circle " width="50px" height="50px">
						      		<p>Lorem Ipsum is simply dummyum has been the </p>
						      	</a>
						    </li>
						    <li class="collection-item avatar">
						    	<a href="" class="collection-item">
						      		<img src="images/slider/slider1.jpg" class="circle" width="50px" height="50px">
						      		<p>Lorem Ipsum is simply dummyum has been the </p>
						      	</a>
						    </li>
						  </ul>
					</div>
				</div>
				<!-- end of kanan -->
				<!-- </div> -->
			</div>
		</div>
	</section>
	<!-- end of section article -->

	<section class="article" id="agenda">
		<div class="row">
		</div>
	</section>
	<!-- end of section agenda -->

	
<?php  
	include "footer.php"
?>