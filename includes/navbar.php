
  <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index-2.php"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if ($page == 'index-2.php') { ?>class="active"<?php } ?>>
							<a href="index-2.php" ><i class="fa fa-home"></i><br>Home</a>
						</li>
                       
							<li <?php if ($page == 'portfolio.php'|| $page == 'artpost.php') { ?>class=" active"<?php } ?> class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-paint-brush"></i><br>ART <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="portfolio.php">Art Pre</a></li>
								<li><a href="artpost.php">Art Post</a></li>
							</ul>
						</li>
                        <li <?php if ($page == 'musicpre.php' || $page =='musicpost.php') { ?>class="active"<?php } ?> class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-music"></i><br>MUSIC <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="musicpre.php">Music Pre</a></li>
								<li><a href="musicpost.php">Music Post</a></li>
                               </ul>
                               </li> 
                               
                               <li <?php if ($page == 'movies.php') { ?>class="active"<?php } ?> class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-video-camera"></i><br>MOVIES <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="movies.php">Movies Overall</a></li>
								
                               </ul>
                               </li> 
						<li>
                               
						<li <?php if ($page == 'about.php') { ?>class="active"<?php } ?>>
							<a href="about.php"><i class="fa fa-user"></i><br>About</a>
						</li>
						<li <?php if ($page == 'contact.php') { ?>class="active"<?php } ?>>
							<a href="contact.php"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
			
            
            
					</ul>
				</div>
			</div>
		</nav>