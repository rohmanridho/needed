<x-app-layout>
		<x-slot name="header">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
						{{ __('Dashboard') }}
				</h2>
		</x-slot>

		<div class="py-8">
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
						<div class="bg-white overflow-hidden sm:rounded-lg">
								<div class="min-w-screen min-h-screen bg-gray-100 flex justify-center font-sans overflow-hidden">
										<div class="w-full lg:w-5/6">
												<div class="mb-5">
														<a href="" class="inline-block bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold">
																+ &nbsp; Create new industries
														</a>
												</div>
												<div class="bg-white shadow-md rounded my-6">
														<table class="min-w-max w-full table-auto">
																<thead>
																		<tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
																				<th class="py-3 px-6 text-left">Name</th>
																				<th class="py-3 px-6 text-left">slug</th>
																				<th class="py-3 px-6 text-center">Photo</th>
																				<th class="py-3 px-6 text-center">Actions</th>
																		</tr>
																</thead>
																<tbody class="text-gray-600 text-sm font-light">
																		<tr class="border-b border-gray-200 hover:bg-gray-100">
																				<td class="py-3 px-6 text-left whitespace-nowrap">
																						<div class="flex items-center">
																								<span class="font-medium">Technology</span>
																						</div>
																				</td>
																				<td class="py-3 px-6 text-left">
																						<div class="flex items-center">
																								<span>technology</span>
																						</div>
																				</td>
																				<td class="py-3 px-6 text-center">
																						<div class="flex items-center justify-center">
																								<img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
																										src="https://randomuser.me/api/portraits/men/1.jpg" />
																						</div>
																				</td>
																				<td class="py-3 px-6 text-center">
																						<div class="flex item-center justify-center">
																								<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
																										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
																												stroke="currentColor">
																												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																														d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
																										</svg>
																								</div>
																								<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
																										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
																												stroke="currentColor">
																												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																														d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
																										</svg>
																								</div>
																						</div>
																				</td>
																		</tr>
																</tbody>
														</table>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</x-app-layout>
