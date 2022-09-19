{{-- @php
		dd($industries)
@endphp --}}
@extends('layouts.main')

@section('title', 'You Need a Job, Come to Needed')

@section('content')
		<div class="container mx-auto">
				<div class="search">
						<form action="">
								<div class="flex justify-between flex-wrap mx-auto mt-5 md:mt-10 max-w-sm md:max-w-4xl">
										<input type="search"
												class="border w-full md:w-[39%] focus:outline-none px-4 py-2 rounded-md mb-2 hover:border-blue-700 focus:border-blue-700 focus:shadow"
												placeholder="Job title, keywords, or company">
										<input type="search" class="border w-full md:w-[39%] focus:outline-none px-4 py-2 rounded-md mb-2"
												placeholder="city province or region">
										<button
												class="w-full md:w-[20%] py-2 bg-blue-700 hover:bg-blue-800 rounded-md text-white font-semibold mb-2">Find
												jobs</button>
								</div>
						</form>
				</div>
		</div>

		<div class="tabs pt-10">
				<div class="tab flex justify-center mt-5 border-t text-xl text-slate-700">
						<button class="tab-links py-3 px-10" onclick="openTab(event, 'job')" id="defaultOpen">Job feed</button>
						<button class="tab-links py-3 px-10" onclick="openTab(event, 'search')">Popular search</button>
				</div>
		</div>

		<div class="tab-contents bg-slate-100 py-10">
				<div id="job" class="tab-content">
						<div class="container mx-auto">
								<div
										class="wrapper mx-auto max-w-sm grid grid-cols-2 gap-2 sm:grid-cols-3 md:grid-cols-4 lg:max-w-6xl lg:grid-cols-6">
										<div class="border rounded p-4 bg-white ">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px] leading-5">
														<a href="">Product Designer jlajflka </a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
										<div class="border rounded p-4 bg-white">
												<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
														alt="" class="w-16 rounded mb-2">
												<div class="font-semibold h-[50px]">
														<a href="">Product Designer</a>
												</div>
												<div class="h-[38px] text-[15px] mb-2">
														<a href="">Tokopedia</a>
												</div>
												<div class="h-[37px] text-sm mb-2">
														<i class="fa-solid fa-location-dot"></i> &nbsp;Jakarta Selatan
												</div>
												<div class="text-[15px] mb-3">
														IDR 15.000.000
												</div>
												<div class="text-[10px]">
														5 days ago
												</div>
										</div>
								</div>
						</div>
				</div>

				<div id="search" class="tab-content">
						<div class="container mx-auto">
								<div
										class="wrapper mx-auto max-w-sm sm:max-w-xl md:max-w-4xl lg:max-w-5xl flex justify-center flex-wrap gap-2 text-sm text-slate-900 font-medium">
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;General</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;General Manager</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;Accounting</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;General Manager</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;Manager</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;Director</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;General Manager</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;General Manager</a>
										<a href="" class="bg-slate-300 py-2 px-5 rounded-md hover:bg-slate-400"><i
														class="fa-solid fa-magnifying-glass"></i>
												&nbsp;General Manager</a>
								</div>
						</div>
				</div>
		</div>

		<div class="container mx-auto py-10">
				<div class="text-center text-2xl font-bold text-blue-900 mb-5">Industries</div>
				<div
						class="grid grid-cols-2 mx-auto max-w-sm md:max-w-4xl lg:max-w-6xl md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
						@forelse($industries as $industry)
								<a href="" class="block rounded-lg bg-blue-800 h-[120px] relative overflow-hidden md:h-[160px]">
										<div
												class="w-full h-full bg-cover opacity-25 transition duration-500 hover:scale-110"style="background-image: url('{{ Storage::url($industry->photo) }}')">
										</div>
										<div
												class="text-lg absolute font-semibold text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 md:text-2xl md:font-bold">
												{{ $industry->name }}
											</div>
								</a>
						@empty
								<div class="text-7xl">Tolol</div>
						@endforelse
				</div>
		</div>
@endsection

@push('script')
		<script>
				function openTab(event, tabName) {
						let i, tabContent, tabLinks;

						tabContent = document.getElementsByClassName("tab-content");

						for (i = 0; i < tabContent.length; i++) {
								tabContent[i].style.display = "none";
						}

						tabLinks = document.getElementsByClassName("tab-links");

						for (i = 0; i < tabLinks.length; i++) {
								tabLinks[i].className = tabLinks[i].className.replace(" font-semibold border-b-4 border-blue-800 text-slate-900",
										"");
						}

						document.getElementById(tabName).style.display = "block";
						event.currentTarget.className += " font-semibold border-b-4 border-blue-800 text-slate-900";
				}

				const defaultOpen = document.getElementById("defaultOpen");
				defaultOpen.click();
		</script>
@endpush
