@extends('template_blog.content')

@section('isi')
	
				<div class="col-md-8 hot-post-left">	
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-2.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">hobby</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">bernyanyi "refresh our mind"</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Faris Wahyu</a></li>
								<li>20 march 2021</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-1.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">olahraga baik untuk tubuh</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Faris Wahyu</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-3.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">my trip my adventure</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Faris Wahyu</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
		<!-- /container -->
		</div>
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
                        @foreach ($data as $post_terbaru)   
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
                        @endforeach
						<!-- /post -->
                        
					<!-- /row -->
					</div>
				
	</div>	
			<!-- /row -->
@endsection



	