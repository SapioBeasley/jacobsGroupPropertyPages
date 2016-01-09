<div class="container">

	<!-- SECTION TITLE -->
	<div class="row">
		<div class="col-sm-12 titlebar">

			<h3>Property Images</h3>
			<p>View you new beautiful home </p>

		</div>
	</div>  <!-- END SECTION TITLE -->

	<!-- PORTFOLIO IMAGES HOLDER -->
	<div class="row">
		<ul class="portfolio-items-list">

			@foreach ($property['images'] as $images)

				<!-- IMAGE #1 -->
				<li class="col-xs-6 col-sm-6 col-md-4 portfolio-item illustration web" data-cat="2">
					<div class="hover-overlay">

						<!-- Image Link -->
						<img class="img-responsive" src="{{asset($images['url'])}}" alt="Portfolio Image">

					</div>
				</li>   <!-- END IMAGE #1 -->

			@endforeach

		</ul>    <!-- End portfolio-items-list  -->
	</div>    <!-- End row -->

</div>
