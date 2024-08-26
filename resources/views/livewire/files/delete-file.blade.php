  <div>

      <!-- Modal -->
      <div x-data="{ open: false, fileId: null }" 
      @open-modal.window="open = true; fileId = $event.detail;"
      @close-modal.window="open = false"
      x-show="open"
      class="fixed inset-0 z-10 overflow-y-auto"
      style="display: none;">
          <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
              <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                  x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                  class="fixed inset-0 transition-opacity" aria-hidden="true">
                  <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
              </div>

              <!-- Centering container -->
              <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

              <div x-show="open" x-transition:enter="ease-out duration-300"
                  x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave="ease-in duration-200"
                  x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                  <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                      <div class="sm:flex sm:items-start">
                          <div
                              class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                              <!-- Heroicon name: exclamation -->
                              <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 16h-1v-4h-1m0-4h.01M12 20h.01M12 4h.01" />
                              </svg>
                          </div>
                          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                              <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                  Delete file
                              </h3>
                              <div class="mt-2">
                                  <p class="text-sm text-gray-500">
                                      Are you sure you want to delete this file? This action cannot be undone.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <div> 
                        <button type="button"
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                            @click="$wire.deleteFile(fileId);" >
                            Delete
                        </button>
                        
                        <div wire:loading>
                        <span class="loading loading-spinner loading-xs"></span>
                        </div>
                    </div>
                      <button type="button"
                          class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm"
                          @click="open = false">
                          Cancel
                      </button>
                  </div>
              </div>
          </div>
      </div>


  </div>
