<nav class="bg-blue-50 shadow shadow-blue-500/20 relative">
		<div class="container lg:container h-16 mx-auto flex items-center justify-between md:justify-start px-3 md:px-0">
				<a class="mr-5" href="{{ route('home') }}">
						<img src="{{ asset('images/needed.png') }}" class="h-14 block">
				</a>

				<div class="flex items-center md:hidden">
						@guest
								<a href="{{ route('login') }}"
										class="text-[15px] mr-3 bg-blue-700 pl-3 pr-3 pt-1 pb-2 rounded hover:bg-blue-800 font-semibold text-white"><i
												class="fa-solid fa-user text-white"></i>
										&nbsp;Login</a>
						@endguest
						<span onclick="navbarResponsive();" class="cursor-pointer">
								<i class="fas fa-bars bar text-xl"></i>
						</span>
				</div>

				<div class="hidden md:flex justify-between w-full text-[15px] text-slate-600">
						<ul class="flex items-center">
								<li class="mr-4">
										<a class="hover:text-slate-900 active" href="{{ route('home') }}">Find jobs</a>
								</li>
								<li class="mr-4">
										<a class="hover:text-slate-900" href="{{ route('companies') }}">Company reviews</a>
								</li>
								<li class="">
										<a class="hover:text-slate-900" href="salaries.html">Find salaries</a>
								</li>
						</ul>
						<ul class="flex items-center">
								@guest
										<li class="mr-4">
												<a class="font-bold text-blue-800 hover:text-blue-900" href="{{ route('login') }}">Login</a>
										</li>
										<li class="mr-4">
												<a class="font-bold text-blue-800 hover:text-blue-900 bg-blue-100 px-4 py-2 hover:bg-blue-200 rounded"
														href="{{ route('register') }}">Register</a>
										</li>
								@endguest
								@auth
										<li class="mx-4">
												<a href="bookmark.html">
														<i class="fa-solid fa-bookmark text-lg"></i>
												</a>
										</li>
										<li class="mr-8 ml-4">
												<div x-data="{ open: false }" class="inline-block relative pt-1">
														<button @click="open = !open"
																class="text-gray-700 inline-flex items-center rounded-full border-2 border-transparent focus:bg-gray-200 cursor-pointer">
																<img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
																		alt="{{ Auth::user()->name }}" />
														</button>

														<ul x-show="open" @click.away="open = false"
																class="absolute text-gray-700 top-12 right-1/2 translate-x-1/2 bg-white rounded-md shadow overflow-hidden">
																<li>
																		<span class="rounded-t-md py-3 px-16 block whitespace-nowrap font-bold">{{ Auth::user()->email }}
																		</span>
																</li>
																@if (Auth::user()->roles_id == 1)
																		<li><a class="hover:bg-gray-100 py-3 px-4 block whitespace-nowrap font-medium"
																						href="{{ route('admin') }}"><i class="fa-solid fa-database"></i> &nbsp; {{ __('Dashboard') }}</a>
																		</li>
																@elseif (Auth::user()->roles_id == 2)
																		<li><a class="hover:bg-gray-100 py-3 px-4 block whitespace-nowrap font-medium"
																						href="{{ route('employer') }}"><i class="fa-solid fa-database"></i> &nbsp;
																						{{ __('Dashboard') }}</a>
																		</li>
																@else
																@endif
																<li>
																		<a class="hover:bg-gray-100 py-3 px-4 block whitespace-nowrap font-medium"
																				href="{{ route('profile.show') }}"><i class="fa-solid fa-user"></i> &nbsp; {{ __('Profile') }}
																		</a>
																</li>
																<li>
																		<a class="hover:bg-gray-100 py-3 px-4 block whitespace-nowrap font-medium" href="star.html"><i
																						class="fa-solid fa-star"></i> &nbsp; Stars
																		</a>
																</li>
																<li>
																		<a class="hover:bg-gray-100 py-3 px-4 block whitespace-nowrap font-medium"
																				href="account-settings.html"><i class="fa-solid fa-gear"></i> &nbsp; Settings
																		</a>
																</li>
																<li class="text-center">
																		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
																				@csrf
																		</form>
																		<a class="rounded-b-md border-t border-slate-200/50 hover:bg-gray-100 py-3 px-4 block whitespace-nowrap font-semibold"
																				href="{{ route('logout') }}"
																				onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
																				{{ __('Logout') }}
																		</a>
																</li>
														</ul>
												</div>
										</li>
										<li>
												<div class="h-6 w-[.25px] bg-blue-900 opacity-50"></div>
										</li>
										<li class="ml-4">
												<a class="hover:text-slate-900" href="{{ route('create-companies') }}">Employers / Post Jobs</a>
										</li>
								@endauth
						</ul>
				</div>
		</div>

		<ul class="hidden absolute top-16 w-full bg-blue-50 text-slate-600 font-semibold text-base" id="navRes">
				<li><a href="" class="block border-t border-b py-3 pl-4">Jobs</a></li>
				<li><a href="" class="block border-b py-3 pl-4">Companies</a></li>
				<li><a href="" class="block border-b py-3 pl-4">Salaries</a></li>
				<li class="block h-3 bg-[#eee]"></li>
				<li><a href="" class="block border-b py-3 pl-4">Profile</a></li>
				<li><a href="" class="block border-b py-3 pl-4">Favorite</a></li>
				<li class="block h-3 bg-[#eee]"></li>
				<li><a href="" class="block border-b py-3 pl-4">Account settings</a></li>
				<li><a href="" class="block border-b py-3 pl-4">Contack settings</a></li>
				<li><a href="" class="block border-b py-3 pl-4">Privacy settings</a></li>
				<li><a href="" class="block border-b py-3 pl-4">Logout</a></li>
		</ul>
</nav>
