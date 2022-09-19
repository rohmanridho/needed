<nav class="bg-blue-50 shadow shadow-blue-500/20 relative">
		<div class="container lg:container h-16 mx-auto flex items-center justify-between md:justify-start px-3 md:px-0">
				<a class="mr-5" href="/">
						<img src="./img/needed.png" class="h-14 block">
				</a>

				<div class="flex items-center md:hidden">
						<a href="login.html"
								class="text-[15px] mr-3 bg-blue-700 pl-3 pr-3 pt-1 pb-2 rounded hover:bg-blue-800 font-semibold text-white"><i
										class="fa-solid fa-user text-white"></i>
								&nbsp;Login</a>
						<span onclick="navbarResponsive();" class="cursor-pointer">
								<i class="fa-solid fa-bars text-xl"></i>
						</span>
				</div>

				<div class="hidden md:flex justify-between w-full text-[15px] text-slate-600">
						<ul class="flex items-center">
								<li class="mr-4">
										<a class="hover:text-slate-900 active" href="/">Find jobs</a>
								</li>
								<li class="mr-4">
										<a class="hover:text-slate-900" href="companies.html">Company reviews</a>
								</li>
								<li class="">
										<a class="hover:text-slate-900" href="salaries.html">Find salaries</a>
								</li>
						</ul>
						<ul class="flex items-center">
								<li class="mx-4">
										<a href="bookmark.html">
												<i class="fa-solid fa-bookmark text-lg"></i>
										</a>
								</li>
								<li class="mr-8 ml-4">
										<div class="dropdown inline-block relative">
												<button class="dropdown-btn text-gray-700 inline-flex items-center cursor-pointer" id="dropdownNav">
														<i class="dropdown-btn fa-solid fa-user text-xl"></i>
												</button>

												<ul class="menu hidden absolute text-gray-700 pt-1" id="menu">
														<li><span
																		class="rounded-t bg-gray-200 py-3 px-4 block whitespace-nowrap font-bold">queenjisoo@gmail.com</span>
														</li>
														<li><a class="bg-gray-200 hover:bg-gray-300 py-3 px-4 block whitespace-nowrap font-medium"
																		href="profile.html"><i class="fa-regular fa-user"></i> &nbsp; Profile</a></li>
														<li><a class="bg-gray-200 hover:bg-gray-300 py-3 px-4 block whitespace-nowrap font-medium"
																		href="star.html"><i class="fa-solid fa-star"></i> &nbsp; Stars</a></li>
														<li><a class="bg-gray-200 hover:bg-gray-300 py-3 px-4 block whitespace-nowrap font-medium"
																		href="account-settings.html"><i class="fa-solid fa-gear"></i> &nbsp; Settings</a></li>
														<li class="text-center"><a
																		class="rounded-b border-t border-slate-300/70 bg-gray-200 hover:bg-gray-300 py-3 px-4 block whitespace-nowrap font-semibold"
																		href="#">Logout</a></li>
												</ul>
										</div>
								</li>
								<li>
										<div class="h-6 w-[.25px] bg-blue-900 opacity-50"></div>
								</li>
								<li class="ml-4">
										<a class="hover:text-slate-900" href="#">Employers / Post Jobs</a>
								</li>
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
