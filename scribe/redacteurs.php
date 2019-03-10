<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scribe - Externaliser la rédaction de vos contenus marketing</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,600,700|Frank+Ruhl+Libre:700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
    <body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
			<div class="header-sun is-revealing">
				<svg width="191" height="201" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient x1="50%" y1="0%" x2="4.666%" y2="38.561%" id="header-sun-c">
							<stop stop-color="#FFE4A2" offset="0%"/>
							<stop stop-color="#FFC570" offset="100%"/>
						</linearGradient>
					</defs>
				</svg>
			</div>
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="/index.html">
                                <svg width="44" height="32" viewBox="0 0 44 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>Scribe.io</title>
                                    <defs>
                                        <linearGradient x1="97.927%" y1="0%" x2="1.669%" y2="0%" id="logo-a">
                                            <stop stop-color="#82DDFC" offset="0%"/>
                                            <stop stop-color="#0181F6" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="96.64%" y1="1.497%" x2="0%" y2="44.56%" id="logo-b">
                                            <stop stop-color="#A3A9F1" offset="0%"/>
                                            <stop stop-color="#6A72E4" offset="99.203%"/>
                                            <stop stop-color="#6A6FEC" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 16h8a8 8 0 1 0 16 0h8c0 8.837-7.163 16-16 16S0 24.837 0 16z" fill="url(#logo-a)"/>
                                    <path d="M12 0h8a8 8 0 1 0 16 0h8c0 8.837-7.163 16-16 16S12 8.837 12 0z" fill="url(#logo-b)" transform="rotate(180 28 8)"/>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
            
        </header>
        
        <section class="testimonials section">
				<div class="container-redacteur">
					<div class="testimonials-inner section-inner">
						<h2 class="section-title mt-0 text-center">Devenez Rédacteur</h2>
                        
                    
                            
                       <?php
                        
                            $bdd = new PDO('mysql:host=localhost;dbname=redacteurs_scribe', 'root', '')
                    ?>
                        
						<div class="testimonials-wrap1">
							<div class="testimonial text-center text-xs is-revealing">
								<div class="testimonial-inner">
									<div class="testimonial-main">
										<div class="testimonial-header">
											<img class="mb-16" src="dist/images/testimonial-01.png" alt="Testimonial">
										</div>
										<div class="testimonial-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
										</div>
									</div>
									<div class="testimonial-footer">
										<div class="testimonial-name">Mark Simons</div>
										<div class="testimonial-link">
											<a href="#">company.com</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <svg width="44" height="32" viewBox="0 0 44 32" xmlns="http://www.w3.org/2000/svg">
                                <title>Sienna</title>
                                <defs>
                                    <linearGradient x1="97.927%" y1="0%" x2="1.669%" y2="0%" id="logo-footer-a">
                                        <stop stop-color="#82DDFC" offset="0%"/>
                                        <stop stop-color="#0181F6" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="96.64%" y1="1.497%" x2="0%" y2="44.56%" id="logo-footer-b">
                                        <stop stop-color="#A3A9F1" offset="0%"/>
                                        <stop stop-color="#6A72E4" offset="99.203%"/>
                                        <stop stop-color="#6A6FEC" offset="100%"/>
                                    </linearGradient>
                                </defs>
                                <path d="M0 16h8a8 8 0 1 0 16 0h8c0 8.837-7.163 16-16 16S0 24.837 0 16z" fill="url(#logo-footer-a)"/>
                                <path d="M12 0h8a8 8 0 1 0 16 0h8c0 8.837-7.163 16-16 16S12 8.837 12 0z" fill="url(#logo-footer-b)" transform="rotate(180 28 8)"/>
                            </svg>
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2018 Sienna, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type='text/javascript'>
/**
 * jQuery serializeObject
 * @copyright 2014, macek <paulmacek@gmail.com>
 * @link https://github.com/macek/jquery-serialize-object
 * @license BSD
 * @version 2.5.0
 */
!function(e,i){if("function"==typeof define&&define.amd)define(["exports","jquery"],function(e,r){return i(e,r)});else if("undefined"!=typeof exports){var r=require("jquery");i(exports,r)}else i(e,e.jQuery||e.Zepto||e.ender||e.$)}(this,function(e,i){function r(e,r){function n(e,i,r){return e[i]=r,e}function a(e,i){for(var r,a=e.match(t.key);void 0!==(r=a.pop());)if(t.push.test(r)){var u=s(e.replace(/\[\]$/,""));i=n([],u,i)}else t.fixed.test(r)?i=n([],r,i):t.named.test(r)&&(i=n({},r,i));return i}function s(e){return void 0===h[e]&&(h[e]=0),h[e]++}function u(e){switch(i('[name="'+e.name+'"]',r).attr("type")){case"checkbox":return"on"===e.value?!0:e.value;default:return e.value}}function f(i){if(!t.validate.test(i.name))return this;var r=a(i.name,u(i));return l=e.extend(!0,l,r),this}function d(i){if(!e.isArray(i))throw new Error("formSerializer.addPairs expects an Array");for(var r=0,t=i.length;t>r;r++)this.addPair(i[r]);return this}function o(){return l}function c(){return JSON.stringify(o())}var l={},h={};this.addPair=f,this.addPairs=d,this.serialize=o,this.serializeJSON=c}var t={validate:/^[a-z_][a-z0-9_]*(?:\[(?:\d*|[a-z0-9_]+)\])*$/i,key:/[a-z0-9_]+|(?=\[\])/gi,push:/^$/,fixed:/^\d+$/,named:/^[a-z0-9_]+$/i};return r.patterns=t,r.serializeObject=function(){return new r(i,this).addPairs(this.serializeArray()).serialize()},r.serializeJSON=function(){return new r(i,this).addPairs(this.serializeArray()).serializeJSON()},"undefined"!=typeof i.fn&&(i.fn.serializeObject=r.serializeObject,i.fn.serializeJSON=r.serializeJSON),e.FormSerializer=r,r});

</script>
        
<script type="text/javascript">
var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbyGWMIN2reyktEy1yO4FGdf7sqVslRqHhpRVu4KHaJwPalGlps/exec';

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
  );
});
</script>
</body>
</html>

 