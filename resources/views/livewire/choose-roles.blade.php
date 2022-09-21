<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>​
        <div class="inline-block align-bottom bg-white rounded text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="px-5 py-4 text-2xl font-semibold bg-blue-100 text-blue-900">Find your goal</div>
            <div class="px-5 pt-3 pb-2">Choose your role?</div>
            <form>
              <div class="px-5 mb-5 flex gap-2">
                <div class="">
                  <input checked type="radio" id="job-seeker" name="roles_id" value="3" class="hidden peer" required>
                  <label for="job-seeker" class="flex justify-between items-center px-4 py-2 text-slate-500 bg-white rounded-md border-2 border-slate-200 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600">
                          <div class="w-full text-lg font-semibold">Job seeker</div>
                  </label>
                </div>
                <div class="">
                  <input type="radio" id="employer" name="roles_id" value="2" class="hidden peer" required>
                  <label for="employer" class="flex justify-between items-center px-4 py-2 text-slate-500 bg-white rounded-md border-2 border-slate-200 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600">                           
                    <div class="w-full text-lg font-semibold">Employer</div>
                </label>
                </div>
              </div>
                <div class="px-24 py-4 sm:px-6 sm:flex justify-center">
                    <span class="flex w-full rounded shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="destroy({{ $deleteId }})" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Let's Go
                        </button> 
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>