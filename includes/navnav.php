  <!-- USED FOR SECONDARY NAV ELEMENTS -->
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
					<a class="navbar-brand" href="../index-2.php"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if ($page == 'index-2.php') { ?>class="active"<?php } ?>>
							<a href="../index-2.php" ><i class="fa fa-home"></i><br>Home</a>
						</li>
                       
							<li <?php if ($page == 'artpre1.php' || $page == 'artpre2.php'|| $page == 'artpre3.php'|| $page == 'artpre4.php'|| $page == 'artpre5.php'|| $page == 'artpre6.php'|| $page == 'artpre7.php'|| $page == 'artpre8.php'|| $page == 'artpre9.php'|| $page == 'artpre10.php' || $page == 'artpost1.php' || $page == 'artpost2.php' || $page == 'artpost3.php' || $page == 'artpost4.php' || $page == 'artpost5.php' || $page == 'artpost6.php' || $page == 'artpost7.php' || $page == 'artpost8.php' || $page == 'artpost9.php' || $page == 'artpost10.php') { ?>class=" active"<?php } ?> class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-paint-brush"></i><br>ART <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="../portfolio.php">Art Pre</a></li>
								<li><a href="../artpost.php">Art Post</a></li>
							</ul>
						</li>
                        <li <?php if ($page == 'musicpre1.php' || $page =='musicpre2.php' || $page =='musicpre3.php' || $page =='musicpre4.php' || $page =='musicpre5.php' || $page =='musicpre6.php' || $page =='musicpre7.php' || $page =='musicpre8.php' || $page =='musicpre9.php' || $page =='musicpost.php' || $page =='musicpre10.php' || $page =='musicpost1.php' || $page =='musicpost2.php' || $page =='musicpost3.php' || $page =='musicpost4.php' || $page =='musicpost5.php' || $page =='musicpost6.php' || $page =='musicpost7.php' || $page =='musicpost8.php' || $page =='musicpost9.php' || $page =='musicpost10.php') { ?>class="active"<?php } ?> class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-music"></i><br>MUSIC <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="../musicpre.php">Music Pre</a></li>
								<li><a href="../musicpost.php">Music Post</a></li>
                               </ul>
                               </li> 
                               
                               <li <?php if ($page == 'movies.php') { ?>class="active"<?php } ?> class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-video-camera"></i><br>MOVIES <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="../movies.php">Movies Overall</a></li>
								
                               </ul>
                               </li> 
						<li>
                               
						<li <?php if ($page == 'about.php') { ?>class="active"<?php } ?>>
							<a href="../about.php"><i class="fa fa-user"></i><br>About</a>
						</li>
						<li <?php if ($page == 'contact.php') { ?>class="active"<?php } ?>>
							<a href="../contact.php"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
			
            
            
					</ul>
				</div>
			</div>
		</nav>