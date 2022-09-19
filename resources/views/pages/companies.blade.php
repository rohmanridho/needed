@extends('layouts.main')

@section('title', 'Companies')

@section('content')
		<section>
				<div class="container mx-auto pt-14">
						<div class="mx-auto max-w-sm md:max-w-4xl lg:max-w-6xl">
								<form action="">
										<h1 class="text-4xl font-bold mb-3">Find great places to work</h1>
										<h2 class="mb-8 text-lg">Get access to millions of company reviews</h2>
										<label for="" class="text-sm flex-none font-semibold mb-1 block">Company name or job title</label>
										<div class="flex flex-wrap gap-4 w-full md:max-w-4xl lg:max-w-5xl">

												<input type="search" name="" id=""
														class="w-full block border rounded px-5 py-2 focus:outline-none mb-2 md:w-2/3">
												<button type="button"
														class="w-full rounded bg-blue-700 font-semibold text-white first-letter:text-xl py-2 mb-2 md:w-1/4">Find
														Companies</button>
										</div>
								</form>

								<h3 class="text-2xl font-bold pt-10 mb-4">Popular Companies</h3>
								<div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 mb-5">
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
										<a href="" class="border p-4 rounded group">
												<div class="flex gap-3 items-center">
														<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/bb45fcbde221cc5789506c52752573de"
																alt="" class="w-12 h-12 object-cover border rounded">
														<div class="font-bold group-hover:underline">Nokia</div>
												</div>
										</a>
								</div>
						</div>
				</div>
		</section>
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
