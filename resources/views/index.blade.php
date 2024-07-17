<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@vite('resources/css/app.css')
	@vite('resources/js/app.js')

	<link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

	<title>Mahezza</title>
</head>
<body>
	<!-- Header -->
	<header class="w-full flex items-center z-50 fixed top-0 left-0">
		<div class="container mx-auto">
			<div class="flex items-center justify-between relative">
				<div class="px-4">
					<a href="#home" class="font-bold text-lg text-primary block py-6">
						<img src="img/logo.png" alt="logo" class="w-24">
					</a>
				</div>
				<div class="flex items-center px-4">
					<button id="hamburger" name="hamburger" type="button" class="block lg:hidden">
						<span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
						<span class="hamburger-line transition duration-300 ease-in-out"></span>
						<span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
					</button>

					<nav id="nav-menu" class="hidden absolute py-5 bg-green rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
						<ul class="block lg:flex">
							<li class="group">
								<a href="/" class="nav-link text-base font-semibold text-black p-2 mx-4 flex rounded-full {{ request()->is('/') ? 'active' : '' }}">Home</a>
							</li>
							<li class="group">
								<a href="/about" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/about') ? 'active' : '' }}">About</a>
							</li>
							<li class="group">
								<a href="/projects" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/projects') ? 'active' : '' }}">Project</a>
							</li>
							<li class="group">
								<a href="/gallery" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/gallery') ? 'active' : '' }}">Gallery</a>
							</li>
							<li class="group">
								<a href="/contact" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/contact') ? 'active' : '' }}">Kontak</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	{{-- Carousel --}}
	<section class="sm:mb-10 lg:mb-20">
		<div class="w-full">
			<div class="flex flex-wrap">
				<div id="default-carousel" class="relative w-full" data-carousel="slide">
					<!-- Carousel wrapper -->
					<div class="relative overflow-hidden lg:h-[40rem] md:h-[27rem] h-[15rem]">
						<!-- Item 1 -->
						<div class="duration-700 ease-in-out" data-carousel-item>
							<img src="{{ asset('img/img3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 2 -->
						<div class="hidden duration-700 ease-in-out" data-carousel-item>
							<img src="{{ asset('img/img2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 3 -->
						<div class="hidden duration-700 ease-in-out" data-carousel-item>
							<img src="{{ asset('img/img3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
					</div>
					<!-- Slider indicators -->
					<div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
						<button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
						<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
						<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
					</div>
					<!-- Slider controls -->
					<button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
						<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white focus:outline-none">
							<svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
							</svg>
							<span class="sr-only">Previous</span>
						</span>
					</button>
					<button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
						<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white focus:outline-none">
							<svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
							</svg>
							<span class="sr-only">Next</span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</section>
	{{-- Carousel end --}}


	{{-- About --}}
	<section class="sm:mb-10 py-8 lg:mb-20">
		<div class="w-3/4 mx-auto">
			<div class="text-center">
			<h2 class="text-3xl font-bold mb-4">ELEVATING YOUR BRAND WITH CREATIVE PRECISION</h2>
			<p class="text-lg">
				Mahezza Project offers a one-stop creative solution that includes Wedding Photography and Videography, Social Media Management, Company Profile Design, and Ads Management. We are dedicated to advancing your business with effective and innovative design solutions.
			</p>
			</div>
		</div>
	</section>
	{{-- endAbout --}}

	{{-- why us --}}
	<section class="sm:mb-10 py-8 lg:mb-20">
		<div class="container mx-auto">
			<div class="flex flex-wrap w-full">
				<!-- Bagian Kiri -->
				<div class="sm:w-full lg:w-1/2 flex items-center justify-center">
					<img src="{{ asset('img/about.jpg') }}" class="rounded-2xl shadow-2xl w-3/4 lg:w-3/4 alt="Gambar Besar">
				</div>
				<!-- Bagian Kanan -->
				<div class="sm:w-full lg:w-1/2 flex flex-col justify-center lg:pr-16  md:text-left lg:text-left sm:text-center">
					<h2 class="text-4xl font-bold mb-10">Why Choose Mahezza Project</h2>
					<p class="text-lg mb-4">
						We pride ourselves on our professional team with years of experience, delivering high-quality services that exceed expectations. Our innovative approach ensures creative solutions tailored to stand out in a competitive market, all while maintaining a customer-centric philosophy that prioritizes your needs. With comprehensive offerings ranging from wedding photography and videography to social media management and ads management, we are dedicated to supporting your business's growth and success.
					</p>
					<p class="text-lg mb-4">
						Our commitment to excellence drives us to continuously improve our skills and services. We believe in building long-term relationships with our clients, understanding their unique needs, and providing personalized solutions that foster growth. Choosing us means choosing a partner that genuinely cares about your vision and is ready to bring it to life with creativity and professionalism.
					</p>
				</div>
			</div>
		</div>
	</section>
	
	{{-- end why us --}}

	{{-- Projects --}}
	<section class="sm:mb-10 py-8 lg:mb-20">
		<div class="container mx-auto">
			<h2 class="text-4xl font-bold text-center mb-20">Explore Our Creative Journey</h2>
			<div class="flex flex-wrap justify-between">
				<div class="relative w-1/2 p-0">
					<img src="{{ asset('img/img1.jpg') }}" class="w-full h-64 object-cover" alt="img 1">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
				<div class="relative w-1/2 p-0">
					<img src="{{ asset('img/img2.jpg') }}" class="w-full h-64 object-cover" alt="img 2">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
				<div class="relative w-1/2 p-0">
					<img src="{{ asset('img/img3.jpg') }}" class="w-full h-64 object-cover" alt="img 3">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
				<div class="relative w-1/2 p-0">
					<img src="{{ asset('img/img1.jpg') }}" class="w-full h-64 object-cover" alt="img 4">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
				<div class="relative w-1/2 p-0">
					<img src="{{ asset('img/img3.jpg') }}" class="w-full h-64 object-cover" alt="img 3">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
				<div class="relative w-1/2 p-0">
					<img src="{{ asset('img/img1.jpg') }}" class="w-full h-64 object-cover" alt="img 4">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End Projects --}}

	{{-- testimoni --}}
	<section class="sm:mb-10 py-8 lg:mb-20">
		<div class="container mx-auto">
			<div class="flex flex-wrap w-full">
				<!-- Bagian Kiri -->
				<div class="w-1/2 flex flex-col text-right justify-center pt-8 pr-8">
					<h2 class="text-4xl font-bold">Hear From</h2>
					<h2 class="text-4xl font-bold mb-4">Our Satified Clients</h2>
					<p class="text-lg mb-4">
						Real Stories, Real Success
					</p>
				</div>
				<!-- Bagian Kanan -->
				<div class="w-1/2 flex items-center justify-center pr-4">
					<div id="testimonial-carousel" class="relative w-full" data-carousel="slide">
						<!-- Carousel wrapper -->
						<div class="relative overflow-hidden md:h-48">
							<!-- Item 1 -->
							<div class="duration-700 ease-in-out" data-carousel-item>
								<div class="bg-gray-100 rounded-lg p-4 h-48 flex flex-col justify-center">
									<h3 class="text-lg font-semibold">Client Name 1</h3>
									<p class="text-md">"This service exceeded my expectations! Highly recommended."</p>
								</div>
							</div>
							<!-- Item 2 -->
							<div class="hidden duration-700 ease-in-out" data-carousel-item>
								<div class="bg-gray-100 rounded-lg p-4 h-48 flex flex-col justify-center">
									<h3 class="text-lg font-semibold">Client Name 2</h3>
									<p class="text-md">"A fantastic experience from start to finish. Will definitely come back."</p>
								</div>
							</div>
							<!-- Item 3 -->
							<div class="hidden duration-700 ease-in-out" data-carousel-item>
								<div class="bg-gray-100 rounded-lg p-4 h-48 flex flex-col justify-center">
									<h3 class="text-lg font-semibold">Client Name 3</h3>
									<p class="text-md">"A fantastic experience from start to finish. Will definitely come back."</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- end testimoni --}}

	{{-- Footer --}}
	<footer class="bg-gray-900 text-white py-8">
		<div class="container mx-auto">
			<div class="flex flex-col md:flex-row justify-between items-center">
				<div class="text-center md:text-left mb-4 md:mb-0">
					<p class="font-bold text-xl">Hubungi Kami</p>
					<p class="mt-2">Alamat: Jalan Raya No. 123, Bandung, Indonesia</p>
					<p>Email: info@mahezza.com</p>
					<p>Telepon: +62 123 4567 890</p>
				</div>
				<div class="text-center md:text-left mb-4 md:mb-0">
					<p class="font-bold text-xl">Ikuti Kami</p>
					<div class="flex justify-center md:justify-start mt-2">
						<a href="#" class="mr-4">
							<i class="fab fa-facebook-f">Facebook</i>
						</a>
						<a href="#" class="mr-4">
							<i class="fab fa-twitter">twitter</i>
						</a>
						<a href="#" class="mr-4">
							<i class="fab fa-instagram">instagram</i>
						</a>
						<a href="#" class="mr-4">
							<i class="fab fa-linkedin">linkedin</i>
						</a>
					</div>
				</div>
			</div>
			<hr class="border-gray-600 my-4">
			<div class="text-center">
				<p>&copy; 2024 Mahezza Project. All Rights Reserved.</p>
			</div>
		</div>
	</footer>	
	{{-- End Footer --}}

	<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>