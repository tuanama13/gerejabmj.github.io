 <!DOCTYPE html>
  <html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Gereja Bunda Maria Jeruju</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="dist/css/mystyle.css">
      
    </head>

    <body>
      <div class="navbar-fixed">
        <nav class="grey lighten-5">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo teal-text">LOGO</a>
              <a href="#" data-target="slide-out" class="sidenav-trigger">
                <i class="material-icons teal-text">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li>
                  <a href="" class="teal-text">Home</a>
                </li>
                <li>
                  <a href="" class="teal-text dropdown-trigger" data-target="dropdown-pelayanan">Pelayanan</a>
                    <ul id='dropdown-pelayanan' class='dropdown-content'>
                      <li><a href="#!">Pelayanan Gereja</a></li>
                      <li><a href="#!">Pelayanan Lingkungan</a></li>
                      <li><a href="#!">Pelayanan Komunitas</a></li>
                  </ul>
                </li>
                <li>
                  <a href="" class="teal-text">Artikel</a>
                </li>                
                <li>
                  <a href="" class="teal-text dropdown-trigger" data-target="dropdown-tentang">Tentang Gereja</a>
                  <ul id='dropdown-tentang' class='dropdown-content'>
                     <li><a href="#!">Sejarah Gereja</a></li>
                      <li><a href="#!">Pastor Paroki</a></li>
                      <li><a href="#!">DPP BMJ</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="slide-out">
        <li><a href="#!">Home</a></li>
        <!-- <li><a href="#!" class="teal-text">Pelayanan</a></li> -->
             <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header" style="padding-left: 30px;">Pelayanan</a>
                  <div class="collapsible-body" style="padding-left: 30px;">
                    <ul>
                      <li><a href="#!">Pelayanan Gereja</a></li>
                      <li><a href="#!">Pelayanan Lingkungan</a></li>
                      <li><a href="#!">Pelayanan Komunitas</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
        <li>
          <a href="">Artikel</a>
        </li>
         <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header" style="padding-left: 30px;">Tentang Gereja</a>
                  <div class="collapsible-body" style="padding-left: 30px;">
                    <ul>
                      <li><a href="#!">Sejarah Gereja</a></li>
                      <li><a href="#!">Pastor Paroki</a></li>
                      <li><a href="#!">DPP BMJ</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>       
        
      </ul>