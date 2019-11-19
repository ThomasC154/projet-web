
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
	<section id="section_event">
		<!-- Left Box -->
		<div class="leftBox">
			<div class="content">
				<h1>Évenements</h1>
				<p>Les Évenements dont participe le bde cesi nice sont listés ici: </p>
			</div>
			<div class="addRmButtons">
				<div id="button">
					<hr class="main-hr" />
					<button id='addButton' class="icon-btn add-btn">
						<div type="button" class="add-icon"></div>
						<a class="btn-txt">Add</a>
					</button>
					<button  id='rmButton' class="icon-btn add-btn">
						<a class="btn-txt">Remove</a>
						
					</button>
					<!-- BUTTON IS CLICKED SCRIPT -->
				</div><!-- end button -->
			</div><!-- end addRmButtons -->

		</div>
		<!-- Right Box -->
		<div class="rightBox">
			<ul>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
				<li>
					<div class="time">
						<h2>24
							<br>
							<span>June</span>
						</h2>
					</div>
					<div class="details">
						<h3>Where does it come from</h3>
						<p>text bla bla event fun lol</p>
						<a href="#">View Details</a>
					</div>
					<div id="clear"></div>
				</li>
			</ul>

		</div>
	</section>
	<script type="text/javascript" src="js/event.js"></script>
	@endsection
