<html>
	<head>
		<title>WSSO - Water Sanitation Portal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]>--><script src="assets/js/ie/html5shiv.js"></script><!--[endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]--><link rel="stylesheet" href="assets/css/ie8.css" /><!--[endif]-->
                
                 
                                            <?php
                                                   
                                               
                                                    $sub = "From : WSSO Portal";
                                                   // $msg = $_POST['message'];
                                                    if(isset($_POST['message'])) {
                                                        $msg = $_POST['message'];     
                                                       }
                                                  
                                            ?>
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">WSSO</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#">About US</a>
								<ul>
                                                                    <li><a href="left-sidebar.html">Cautionary</a></li>
                                                                    <li><a href="right-sidebar.html">Preventionary</a></li>
									
								</ul>
							</li>
                                                        <li><a href="statistics.html">Statistics</a></li>
                                                        <li><a href="SignUp.php" class="button special">Contact Us</a></li>
						</ul>
					</nav>
				</header>
                        <br><br><br>
                        <!--  Login Form  -->
                                <section>
                                    <h3>Contact Us</h3>
                                    <form method="post" action="index.html">
                                        <div class="row uniform 50%">
                                            <div class="6u 12u$(xsmall)">
						<input type="text" name="name" id="name" value="" placeholder="Name">
                                            </div>
                                            <div class="6u$ 12u$(xsmall)">
						<input type="email" name="email" id="email" value="" placeholder="Email">
                                            </div>
                                            <div class="12u$">
						<div class="select-wrapper">
                                                    <select name="category" id="category">
							<option value="">- Category -</option>
							<option value="1">User</option>
							<option value="1">Doctor</option>
							<option value="1">Engineer</option>
							<option value="1">Local Body</option>
                                                    </select>
						</div>
                                            </div>
                                            
                                            <div class="12u$">
						<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                                            </div>
                                            <?php
                                                  mail("devlovers.codeutsava@yahoo.com", $sub, $msg);
                                            ?>
                                            <div class="12u$">
                                                
						<ul class="actions">
						<li><input type="submit" value="Send Message" class="special"></li>
						<li><input type="reset" value="Reset"></li>
                                                </ul>
                                            </div>
					</div>
                                    </form>
                                </section>

                </div>
        </body>
</html>
