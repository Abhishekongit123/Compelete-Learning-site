<?php include 'All links and CDN.php'; ?>
<div class="container-sm mt-2">
	<h2 class="text-center text-dark bg-light rounded font-weight-bold py-2 "><i class="fab fa-bootstrap mr-3" style="font-size: 50px; color: #5f27cd;"></i>LEARN ABOUT JQUERY<i class="fas fa-code text-primary ml-3" style="font-size: 50px;"></i>
	<small><p class="text-center text-muted font-weight-bold" style="font-size: 17px;">Java Scripy Library</p></small>
	</h2>
	<div class="col-sm-6 bg-light float-left mr-auto">
		<strong style="font-size: 30px;color: black;">What is JQuery ?</strong>
		<p class="text-dark"><strong>jQuery</strong> is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.</p>
		<strong class="font-weight-bold mb-2">Features<i class="fas fa-heart ml-2" style="font-size: 15px; color:red;"></i></strong>
		<ul style="list-style: circle;">
			<li>Lightweight Footprint.</li>
			<li>CSS3 Compliant.</li>
			<li>Cross-Browser.</li>
			<label class="text-muted mt-2 font-weight-bold text-center"><small>More Advantages</small><i class="fas fa-caret-right ml-2" style="font-size: 20px; color:green;"></i></label>
			<li>Events.</li>
			<li>Effects and Animation.</li>
		</ul>
		<strong>CDN Link <i class="fas fa-link ml-2 text-muted" style="font-size: 15px;"></i></strong>
		<p class="overflow-auto p-3 rounded" style="background-color: #F8EFBA;">
			<label class="text-muted">&lt;!--Minified version --&gt;</label><br>
			&lt;script src="https://code.jquery.com/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
		</p>
		<strong style="font-size: 30px;color: black;">What we should already know ?</strong>
		<p>Before you start studying jQuery, you should have a basic knowledge of:</p>
		<ul class="font-weight-bold" style="list-style: square;">
			<li>HTML</li>
			<li>CSS</li>
			<li>Java Script</li>
		</ul>
		<strong style="font-size: 30px;color: black;">Syntax</strong>
		<p class="lead">With jQuery you select (query) HTML elements and perform "actions" on them</p>
		<label>Basic syntax is:</label><p style="background-color:#F8EFBA; " class="font-weight-bold p-2">$(selector).action()</p>
		<strong style="font-size: 30px;color: black;">How to impliment JQuery </strong>
		<p>There are two way to impliment jquery-</p>
				<div class="border p-3 font-weight-bold bg-transparent border-dark" style="color: #6c5ce7;">
					$(document).ready(function(){<br>
                         // jQuery methods go here...<br>
                    });
                    <hr>
                    	<p class="font-weight-bold text-dark">It is good practice to wait for the document to be fully loaded and ready before working with it. This also allows you to have your JavaScript code before the body of your document, in the head section.</p>
                    	<p class="font-weight-bold text-dark">This is to prevent any jQuery code from running before the document is finished loading (is ready).</p>
				</div><br>
				<div class="border p-3 font-weight-bold bg-transparent border-dark" style="color: #6c5ce7;">
					$(function(){<br>
                       // jQuery methods go here...<br>
                    });   
                     <hr>
                    	<p class="text-danger font-weight-bold"> The jQuery team has also created an even shorter method for the document ready event</p>
				</div><br>
		<div>
			<strong>jQuery Effects</strong>
			<ul class="list-inline">
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">Show() & Hide()</a></li>
				<li class=" list-inline- item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">Fade()</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">Slide()</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text"> Animate</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">Stop()</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">Callback</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">Chaining</a></li>
			</ul>
		</div>		
		<div>
			<strong>jQuery HTML</strong>
			<ul class="list-inline">
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">jQuery Get</a></li>
				<li class=" list-inline- item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">jQuery Set</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">jQuery Add</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">jQuery Remove</a></li>
				<li class=" list-inline-item m-2"><a class="waves-effect waves-green btn blue lighten-2 black-text">jQuery CSS Classes</a></li>
			</ul>
		</div>
		<p class="text-success">If you want to learn and start working with jQuery than click on below official website:<a href="https://jquery.com/" class="text-decoration-none font-weight-bold"> jquery.com</a></p>		
	</div>
	<div class="col-sm-6 bg-transparent ml-auto">
		<div class="card mt-3 mb-3 border-dark">
			<img src="images/jq brandname.png" class="card-img ml-auto mt-3 mb-3 mr-3" style="width: 200px; height: 150px;">
			<div class="card-body border-dark border-top">
				<h2 class="card-title">Jquery</h2>
				<small class="card-subtitle text-muted">Java Script Libaray</small>
				<p class="card-text">
					<strong>Bootstrap</strong> is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components. 
					<a href="https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework)">Wikipedia</a> 
					<table class="table bg-white">
						<tbody>
							<tr>
								<td class="text-left border-0"><a href="#" class="text-dark">Original author(s)</a></td>
								<td class="text-left border-0">John Resig</td>
							</tr>
							<tr>
								<td class="text-left border-0"><a href="#" class="text-dark">Devepoler(s)</a></td>
								<td class="text-left border-0"><a href="#">	The jQuery Team</a></td>
							</tr>
							<tr>
								<td class="text-left border-0">Initial release</td>
								<td class="text-left border-0">August 26, 2006</td>
							</tr>
							<tr>
								<td class="text-left border-0 font-weight-bold">Written In</td>
								<td class="text-left border-0"><a href="#">javascript</a></td>
							</tr>
							<tr>
								<td class="text-left border-0 font-weight-bold">Platform</td>
								<td class="text-left border-0">	See § <a href="#">Browser support</a></td>
							</tr>
							<tr>
								<td class="text-left border-0 font-weight-bold">Latest version</td>
								<td class="text-left border-0">4.5.0 / May 12, 2020; </td>
							</tr>
							<tr>
								<td class="text-left border-0 font-weight-bold">Size</td>
								<td class="text-left border-0">	30–263 KB </td>
							</tr>
							<tr>
								<td class="text-left border-0 font-weight-bold">Type</td>
								<td class="text-left border-0"><a href="#">	JavaScript library</a></td>
							</tr>
							<tr>
								<td class="text-left border-0 font-weight-bold">License</td>
								<td class="text-left border-0"><a href="#">	MIT></a></td>
							</tr>
						</tbody>
					</table>
				</p>
			</div>
		</div>
		<div>
			<strong style="font-size: 30px;color: black;">What is jQuery Selector? </strong>
			<p class="font-weight-bold">jQuery selectors allow you to select and manipulate HTML element(s).<br>
			jQuery selectors are used to "find" (or select) HTML elements based on their name, id, classes, types, attributes, values of attributes and much more. It's based on the existing CSS Selectors, and in addition, it has some own custom selectors.</p>
			<p>All selectors in jQuery start with the dollar sign and parentheses:<strong>$().</strong></p>
			<ul class="list-group overflow-auto ">
				<li class="list-group-item p-1 border-dark">The element Selector
					<a class="waves-effect waves-green btn-flat blue-text">Learn More</a>
				</li>
				<li class="list-group-item p-1 border-dark">The #id Selector
					<a class="waves-effect waves-green btn-flat blue-text">Learn More</a>
				</li>
				<li class="list-group-item p-1 border-dark">The .class Selector
					<a class="waves-effect waves-green btn-flat blue-text">Learn More</a>
				</li>
			</ul>
			<strong style="font-size: 30px;color: black;">What is jQuery Events? </strong>
			<p class="font-weight-bold">All the different visitors' actions that a web page can respond to are called events.</p>
			<p class="font-weight-bold">An event represents the precise moment when something happens.</p>
			<small>Some common jQuery Events:</small>
			<table class="striped responsive-table table-hover border">
				<thead>
					<th>Mouse Events</th>
					<th>Keyboard Events</th>
					<th>Form Events</th>
					<th>Document/Window Events</th>
				</thead>
				<tbody>
					<tr class="border">
						<td>click</td>
						<td>keypress</td>
						<td>submit</td>
						<td>load</td>
					</tr>
					<tr class="border">
						<td>dblclick</td>
						<td>keydown</td>
						<td>change</td>
						<td>scrol</td>
					</tr>
					<tr class="border">
						<td>mouseenter</td>
						<td>keyup</td>
						<td>focus</td>
						<td>resize</td>
					</tr>
					<tr class="border">
						<td>mouseleave</td>
						<td></td>
						<td>blur</td>
						<td>unload</td>
					</tr>
				</tbody>
			</table>
			<strong style="font-size: 30px;color: black;">jQuery Syntax For Event Methods </strong>
			<p>There are two steps involved-</p>
			<label class="font-weight-bold text-primary">Step 1:</label>
			<span class="font-weight-bold text-dark">To assign a event to ayn element on a page, you can do this</span>
			<div class="border border-dark p-3 rounded font-weight-bold" style="color: #44bd32;">$("HTML element").event();</div>
			<label class="font-weight-bold text-primary">Step 2:</label>
			<span class="font-weight-bold text-dark">The next step is to define what should happen when the event fires. You must pass a function to the event</span>
			<div class="border border-dark p-3 rounded font-weight-bold mb-4" style="color: #44bd32;">
				$("p").click(function(){<br>

                    // action goes here!!<br>

                });
			</div>
		</div>
	</div>
</div>
<div class="container-sm bg-transparent text-center py-4">
	<nav style="background-color: white;" class="shadow-none">
		<ul class="pagination pagination-lg justify-content-center py-2">
			<li class="page-item"><a class="page-link" href="#">Privous</a></li>
			<li class="page-item"><a class="page-link" href="COMPUTERdoc.php">1</a></li>
			<li class="page-item"><a class="page-link" href="CSS3doc.php">2</a></li>
			<li class="page-item"><a class="page-link" href="BOOTSTRAPdoc.php">3</a></li>
			<li class="page-item active"><a class="page-link" href="JQUERYdoc.php">4</a></li>
			<li class="page-item"><a class="page-link" href="JSdoc.php">5</a></li>
			<li class="page-item"><a class="page-link" href="PHPdoc.php">6</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>
</div>