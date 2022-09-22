<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
		<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
				<div class="fixed inset-0 transition-opacity">
						<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
				</div>
				<!-- This element is to trick the browser into centering the modal contents. -->
				<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

				<div
						class="inline-block align-bottom bg-white rounded-md text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
						role="dialog" aria-modal="true" aria-labelledby="modal-headline">
						<div class="px-5 py-4 text-lg bg-slate-50">Are you sure?</div>
						<form>
								<div class="px-24 py-3 sm:px-6 flex sm:flex sm:flex-row-reverse gap-3">
										<span class="flex w-full rounded shadow-sm sm:w-auto">
												<button wire:click.prevent="destroy({{ $deleteId }})" type="button"
														class="inline-flex justify-center w-full rounded border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm focus:outline-none sm:text-sm sm:leading-5">
														Delete
												</button>
										</span>
										<span class="flex w-full rounded shadow-sm sm:mt-0 sm:w-auto">
												<button wire:click="closeDeleteModal()" type="button"
														class="inline-flex justify-center w-full rounded border border-slate-300 px-4 py-2 bg-white text-base leading-6 font-medium text-slate-700 shadow-sm focus:outline-none sm:text-sm sm:leading-5">
														Cancel
												</button>
										</span>
						</form>
				</div>
		</div>
</div>
</div>
