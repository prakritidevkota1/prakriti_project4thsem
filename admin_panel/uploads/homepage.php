<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
    <style>

    </style>
</head>

<body>
    <div class="container-2">
        <div class="main-container " >
            <ul>
                <div class="logo">
                    <li>LOGO</li>
                </div>

                <div class="midinfo">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="">Sizeguide</a></li>
                    <li><a href="">Contact</a></li>

                </div>

                <div class="signin-login">
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">Login</a></li>
                </div>
            </ul>

        </div>

        <section class="hi" >
            <h1 class="text">Elegance, Beautiful, Ethical</h1>
            <h2>The Joy Of Dressing Is An Art..</h2>
          <input type="submit" class="btn" value="Shop Now">

        </section>
        <marquee behavior="" direction=""></marquee>
    </div>
    <div class="featured-Products">
        <h2 class="featured">Featured Products</h2>
        <div class="clothes-picture">
            <div class="cloth"> 
                <img src="jeans.webp">
            <h5>hi k cha</h5>
            <p>Price:Rs 200</p></div>
           
            <div class="cloth">
                <img src="luga.webp">
            <h4>HELLOOOO</h4>
        <p>Price:Rs 500</p></div>
                <div class="cloth"><img src="blazer.webp" alt="Clothes Picture">
                    <h4>jgjkghj</h4>
                    <p>Price:Rs 2200</p>
            </div>     
            <div class="cloth">
                <img src="luga.webp">
            <h4>HELLOOOO</h4>
        <p>Price:Rs 1500</p></div>
                     
      </div>
      </div>
      <!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <script src="https://kit.fontawesome.com/f6481011f6.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    .contact-info {
      margin-top: 20px;
    }
    
    .contact-info p {
      margin-bottom: 10px;
    }
    
    .contact-form {
      margin-top: 30px;
    }
    
    .contact-form input[type="text"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }
    
    .contact-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    
    .social-media-links {
      margin-top: 20px;
      text-align: center;
    }
    
    .social-media-links a {
      display: inline-block;
      margin: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    
    <div class="contact-info">
      <p>Email: example@example.com</p>
      <p>Phone: +1 123-456-7890</p>
      <p>Address: 123 Main St, City, State, ZIP</p>
    </div>
    
    <div class="contact-form">
      <h2>Send us a message</h2>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="text" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <input type="submit" value="Send Message">
      </form>
    </div>
    
    <div class="social-media-links">
        <h4>FOLLOW US ON: </h4>
      <a href="https://www.facebook.com/prakriti.devkota.543" target="_blank">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/prakrity___/" target="_blank">
     <i class="fa-brands fa-square-instagram"></i>
      </a>
    </div>
  </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>

      
            

    <!-- <div class="inner-maincontainer">
        <div class="info-container1">
            <h2>welcome</h2>
            <p>you can order clothes through this website where you can get different kinds of clothes in suitable
                price. </p>
        </div> -->
    <!-- <div class="info-container-img">
            <img src="clothes.jpg" alt="" width="600px" height="600px" style="border-radius: 8px; margin-top: 10px;">
        </div> -->
    <!-- </div> -->
<!-- Code injected