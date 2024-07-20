<x-base>
	{{-- Carousel --}}
	<section class="sm:mb-10 lg:mb-20">
		<div class="w-full">
			<div class="flex flex-wrap">
				<div id="default-carousel" class="relative w-full" data-carousel="slide">
					<!-- Carousel wrapper -->
					<div class="relative overflow-hidden lg:h-[44rem] md:h-[27rem] h-[15rem]">
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
				<div class="lg:w-1/2 md:w-1/2 sm:w-full flex items-end justify-center">
					<img src="{{ asset('img/about.jpg') }}" class="rounded-2xl shadow-2xl lg:w-1/2 md:w-1/2 w-3/4 alt="Gambar Besar">
				</div>
				<!-- Bagian Kanan -->
				<div class="lg:w-1/2 md:w-1/2 w-3/4 flex flex-col justify-center mx-auto lg:pr-16 lg:text-left md:text-left">
					<h2 class="text-4xl font-bold mb-10 pt-14">Why Choose Mahezza Project</h2>
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
	<section class="py-8">
		<div class="container mx-auto">
			<h2 class="text-4xl font-bold text-center mb-20">Explore Our Creative Journey</h2>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-0">
				<!-- Card 1 -->
				<div class="relative">
					<img src="{{ asset('img/img1.jpg') }}" class="w-full h-64 object-cover" alt="img 1">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 1</div>
				</div>
				<!-- Card 2 -->
				<div class="relative">
					<img src="{{ asset('img/img2.jpg') }}" class="w-full h-64 object-cover" alt="img 2">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 2</div>
				</div>
				<!-- Card 3 -->
				<div class="relative">
					<img src="{{ asset('img/img3.jpg') }}" class="w-full h-64 object-cover" alt="img 3">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 3</div>
				</div>
				<!-- Card 4 -->
				<div class="relative">
					<img src="{{ asset('img/img1.jpg') }}" class="w-full h-64 object-cover" alt="img 4">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 4</div>
				</div>
				<!-- Card 5 -->
				<div class="relative">
					<img src="{{ asset('img/img3.jpg') }}" class="w-full h-64 object-cover" alt="img 5">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 5</div>
				</div>
				<!-- Card 6 -->
				<div class="relative">
					<img src="{{ asset('img/img1.jpg') }}" class="w-full h-64 object-cover" alt="img 6">
					<div class="absolute inset-0 bg-black opacity-50"></div>
					<div class="absolute bottom-2 left-2 text-white font-bold p-2">Project Title 6</div>
				</div>
			</div>
			<div class="flex justify-center mt-10">
				<button class="px-6 py-3 bg-gray-600 text-white font-bold rounded-full hover:bg-gray-700 focus:outline-none">
					Show More Projects
				</button>
			</div>
		</div>
	</section>	
	{{-- End Projects --}}

	{{-- testimoni --}}
	<section class="mb-10 py-8 lg:mb-20">
		<div class="container mx-auto">
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-0">
				<div class="pt-8 pr-8 text-right">
					<h2 class="text-4xl font-bold">Hear From</h2>
					<h2 class="text-4xl font-bold mb-4">Our Satisfied Clients</h2>
					<p class="text-lg mb-4">
						Real Stories, Real Success
					</p>
				</div>
				
				<!-- Bagian Kanan -->
				<div class="items-center justify-center px-4">
					<div id="testimonial-carousel" class="relative w-full" data-carousel="slide">
						<!-- Carousel wrapper -->
						<div class="relative overflow-hidden lg:h-48 h-48">
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
</x-base>