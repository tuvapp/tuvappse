@extends('master')

@section('content')

<div class="wrapper">
		<div class="parallax filter-black">
				<div class="parallax-image">
						<img src="../assets/img/thumb.jpg" alt="..." />
				</div>
				<div class="small-info">
						<h1>Brace yourself!</h1>
						<h3>25% Off and Free global delivery for all products</h3>
				</div>
		</div>

		 <div class="section">
					 <div class="container">
							 <h2 class="section-title">Latest Offers</h2>
							 <div class="row">
										<div class="col-md-4">
												<div class="card card-product card-plain">
														<div class="image">
																<a href="#">
																		<img src="../assets/img/product.jpg" alt="..."/>
																</a>
														</div>
														<div class="content">
																<a href="#">
																		<h4 class="title">Gucci</h4>
																</a>
																<p class="description">
																	 Beautifully tailored from rich burgundy velvet, this impeccable piece has lustrous black satin lining and smart satin-covered buttons.
																</p>
																<div class="footer">
																		<span class="price price-old"> &euro;1,930</span>
																		<span class="price price-new">&euro;1,330</span>
																		<button class="btn btn-danger btn-simple pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
																				<i class="fa fa-heart"></i>
																		</button>
																</div>
														</div>
												</div> <!-- end card -->
										 </div>
											<div class="col-md-4">
												<div class="card card-product card-plain">
														<div class="image">
																<a href="#">
																		<img src="../assets/img/product.jpg" alt="..."/>
																</a>
														</div>
														<div class="content">
																<a href="#">
																		<h4 class="title">Canali</h4>
																</a>
																<p class="description">
																	 The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.
																</p>
																<div class="footer">
																		 <span class="price price-old"> &euro;1,430</span>
																		<span class="price price-new">&euro;1,030</span>

																		<button class="btn btn-danger btn-simple btn-hover pull-right">
																				<i class="fa fa-heart-o"></i> Wishlist
																		</button>
																</div>
														</div>
												</div> <!-- end card -->
										 </div>
											<div class="col-md-4">
												<div class="card card-product card-plain">
														<div class="image">
																<a href="#">
																		<img src="../assets/img/product.jpg" alt="..."/>
																</a>
														</div>
														<div class="content">
																<a href="#">
																		<h4 class="title">Canali</h4>
																</a>
																<p class="description">
																	 The smooth woven-wool is water resistant to ensure you stay pristine after a long-haul flight. Cut in a trim yet comfortable regular fit.
																</p>
																<div class="footer">
																		<span class="price price-old"> &euro;1,299</span>
																		<span class="price price-new"> &euro;760</span>
																		<button class="btn btn-danger btn-simple btn-hover pull-right">
																				<i class="fa fa-heart-o"></i> Wishlist
																		</button>
																</div>
														</div>
												</div> <!-- end card -->
										 </div>
							 </div>
					 </div>
		</div><!-- section -->

		<div class="section">
					 <div class="container">
							 <h2 class="section-title">Find what you need</h2>
							 <div class="row">


										<div class="col-md-3">
												<div class="card card-refine card-plain">
														<div class="header">
																<h4 class="title">Refine
																		<button class="btn btn-default btn-xs btn pull-right btn-simple" rel="tooltip" title="Reset Filter">
																				<i class="fa fa-refresh"></i>
																		</button>
																 </h4>
														</div>
														<div class="content">
																	<div class="panel-group" id="accordion">

																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<h6 class="panel-title">
																				<a data-toggle="collapse" href="#refinePrice">
																					Price Range
																					<i class="fa fa-caret-up pull-right"></i>
																				</a>
																			</h6>
																		</div>
																		<div id="refinePrice" class="panel-collapse collapse in">
																			<div class="panel-body">
																				 <span class="price price-left">&euro; 100</span>
																				 <span class="price price-right">&euro; 850</span>
																				 <div class="clearfix"></div>
																				 <div id="refine-price-range" class="slider slider-info"></div>
																			</div>
																		</div>
																	</div>

																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<h6 class="panel-title">
																				<a data-toggle="collapse" href="#refineClothing" class="collapsed">
																					Clothing
																					<i class="fa fa-caret-up pull-right"></i>
																				</a>
																			</h6>
																		</div>
																		<div id="refineClothing" class="panel-collapse collapse">
																			<div class="panel-body">
																				 <label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox" checked="">
																						Blazers
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Casual Shirts
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Formal Shirts
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Jeans
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Polos
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Pyjamas
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Shorts
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Trousers
																					</label>
																			</div>
																		</div>
																	</div>


																	 <div class="panel panel-default">
																		<div class="panel-heading">
																			<h6 class="panel-title">
																				<a data-toggle="collapse" href="#refineDesigner">
																					Designer
																					<i class="fa fa-caret-up pull-right"></i>
																				</a>
																			</h6>
																		</div>
																		<div id="refineDesigner" class="panel-collapse collapse in">
																			<div class="panel-body panel-scroll">
																				 <label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox" checked="">
																						All
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Acne Studio
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Alex Mill
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Alexander McQueen
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Alfred Dunhill
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						AMI
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Berena
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Berluti
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Burberry Prorsum
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Calvin Klein
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Canali
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Club Monaco
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Dolce & Gabbana
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Gucci
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Kolor
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Lanvin
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Loro Piana
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Massimo Alba
																					</label>
																			</div>
																		</div>
																	</div><!-- end panel -->

																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<h6 class="panel-title">
																				<a data-toggle="collapse" href="#refineColour" class="collapsed">
																					Colour
																					<i class="fa fa-caret-up pull-right"></i>
																				</a>
																			</h6>
																		</div>
																		<div id="refineColour" class="panel-collapse collapse">
																			<div class="panel-body">
																				 <label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox" checked="">
																						All
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Black
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Blue
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Brown
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Gray
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Green
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Neutrals
																					</label>
																					<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																						Purple
																					</label>
																			</div>
																		</div>
																	</div> <!-- end panel -->

																</div>
														</div>
												</div> <!-- end card -->
										</div>

										<div class="col-md-9">
												<div class="row">
														<div class="col-md-4">
																<div class="card card-product card-plain">
																		<div class="image">
																				<a href="#">
																						<img src="../assets/img/product.jpg" alt="..."/>
																				</a>
																		</div>
																		<div class="content">
																				<a href="#">
																						<h4 class="title">Lutwyche</h4>
																				</a>
																				<p class="description">
																					 Blue check wool and cashmere-blend blazer
																				</p>
																				<div class="footer">
																						<span class="price"> &euro; 3,330</span>
																						<button class="btn btn-danger btn-simple pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
																								<i class="fa fa-heart"></i>
																						</button>
																				</div>
																		</div>
																</div> <!-- end card -->
														 </div>
														 <div class="col-md-4">
																<div class="card card-product card-plain">
																		<div class="image">
																				<a href="#">
																						<img src="../assets/img/product.jpg" alt="..."/>
																				</a>
																		</div>
																		<div class="content">
																				<a href="#">
																						<h4 class="title">Canali</h4>
																				</a>
																				<p class="description">
																					 Blue water-resistant wool travel blazer

																				</p>
																				<div class="footer">
																						<span class="price">&euro; 1,930</span>
																						<button class="btn btn-danger btn-simple btn-hover pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
																								<i class="fa fa-heart-o"></i>
																						</button>
																				</div>
																		</div>
																</div> <!-- end card -->
														 </div>
															<div class="col-md-4">
																<div class="card card-product card-plain">
																		<div class="image">
																				<a href="#">
																						<img src="../assets/img/product.jpg" alt="..."/>
																				</a>
																		</div>
																		<div class="content">
																				<a href="#">
																						<h4 class="title">Lutwyche</h4>
																				</a>
																				<p class="description">
																					 Brown check wool and cashmere-blend blazer
																			</p>
																				<div class="footer">
																						<span class="price"> &euro; 3,330</span>
																						<button class="btn btn-danger btn-simple btn-hover pull-right"  rel="tooltip" title="Add to wishlist" data-placement="left">
																								<i class="fa fa-heart-o"></i>
																						</button>
																				</div>
																		</div>
																</div> <!-- end card -->
														 </div>

															<div class="col-md-4">
																<div class="card card-product card-plain">
																		<div class="image">
																				<a href="#">
																						<img src="../assets/img/product.jpg" alt="..."/>
																				</a>
																		</div>
																		<div class="content">
																				<a href="#">
																						<h4 class="title">Lutwyche</h4>
																				</a>
																				<p class="description">
																					 Brown check wool and cashmere-blend blazer
																			</p>
																				<div class="footer">
																						<span class="price"> &euro; 3,330</span>
																						<button class="btn btn-danger btn-simple btn-hover pull-right"  rel="tooltip" title="Add to wishlist" data-placement="left">
																								<i class="fa fa-heart-o"></i>
																						</button>
																				</div>
																		</div>
																</div> <!-- end card -->
														 </div>

														 <div class="col-md-4">
																<div class="card card-product card-plain">
																		<div class="image">
																				<a href="#">
																						<img src="../assets/img/product.jpg" alt="..."/>
																				</a>
																		</div>
																		<div class="content">
																				<a href="#">
																						<h4 class="title">Lutwyche</h4>
																				</a>
																				<p class="description">
																					 Blue check wool and cashmere-blend blazer
																				</p>
																				<div class="footer">
																						<span class="price"> &euro; 3,330</span>
																						<button class="btn btn-danger btn-simple pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
																								<i class="fa fa-heart"></i>
																						</button>
																				</div>
																		</div>
																</div> <!-- end card -->
														 </div>
														 <div class="col-md-4">
																<div class="card card-product card-plain">
																		<div class="image">
																				<a href="#">
																						<img src="../assets/img/product.jpg" alt="..."/>
																				</a>
																		</div>
																		<div class="content">
																				<a href="#">
																						<h4 class="title">Canali</h4>
																				</a>
																				<p class="description">
																					 Blue water-resistant wool travel blazer

																				</p>
																				<div class="footer">
																						<span class="price">&euro; 1,930</span>
																						<button class="btn btn-danger btn-simple btn-hover pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
																								<i class="fa fa-heart-o"></i>
																						</button>
																				</div>
																		</div>
																</div> <!-- end card -->
														 </div>
														 <div class="col-md-3 col-md-offset-4">
																	<button rel="tooltip" title="This is a morphing button" class="btn btn-default btn-round" id="successBtn" data-toggle="morphing" data-rotation-color="gray">Load more...</button>
														 </div>
												</div>
										</div>
							 </div>
					 </div>
		</div><!-- section -->

@endsection
