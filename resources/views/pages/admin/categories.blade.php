{{-- @php
dd($industries);
@endphp --}}
<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Dashboard Admin Categories') }}
		</h2>
</x-slot>

@if ($modal)
		@include('livewire.admin.create-categories')
@endif

@if ($deleteConfirmation)
		@include('livewire.delete-confirmation')
@endif

<div class="py-8">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden sm:rounded-lg">
						<div class="min-w-screen min-h-screen bg-gray-100 flex justify-center font-sans overflow-hidden">
								<div class="w-full lg:w-5/6">
										<div>
												<button wire:click="openModal()" type="button"
														class="inline-block bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold">
														+ &nbsp; Create new category
												</button>
										</div>
										<div class="bg-white shadow-md rounded my-6">
												<table class="min-w-max w-full table-auto">
														<thead class="rounded-t">
																<tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
																		<th class="py-3 px-6 text-left">Name</th>
																		<th class="py-3 px-6 text-left">Slug</th>
																		<th class="py-3 px-6 text-center">Actions</th>
																</tr>
														</thead>
														<tbody class="text-gray-600 text-sm font-light">
																@forelse ($categories as $category)
																		<tr class="border-b border-gray-200 hover:bg-gray-100">
																				<td class="py-3 px-6 text-left whitespace-nowrap">
																						<div class="flex items-center">
																								<span class="font-medium">{{ $category->name }}</span>
																						</div>
																				</td>
																				<td class="py-3 px-6 text-left">
																						<div class="flex items-center">
																								<span>{{ $category->slug }}</span>
																						</div>
																				</td>
																				<td class="py-3 px-6 text-center">
																						<div class="flex item-center justify-center">
																								<button wire:click="edit({{ $category->id }})"
																										class="p-3 mx-1 transform hover:text-purple-500 hover:scale-110 rounded-full hover:bg-slate-200">
																										<svg width="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
																												stroke="currentColor">
																												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																														d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
																										</svg>
																								</button>
																								<button wire:click="openDeleteModal({{ $category->id }})" class="p-3 mx-1 transform hover:text-purple-500 hover:scale-110 rounded-full hover:bg-slate-200">
																										<svg width="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
																												stroke="currentColor">
																												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																														d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
																										</svg>
																								</button>
																						</div>
																				</td>
																		</tr>
																@empty
																<tr>
																	<td class="text-2xl lg:text-4xl text-gray-700 font-semibold text-center py-32" colspan="4">
																	Data Not Found
																</td>
																</tr>
																@endforelse
														</tbody>
												</table>
										</div>
										{{ $categories->links() }}
								</div>
						</div>
				</div>
		</div>
</div>
