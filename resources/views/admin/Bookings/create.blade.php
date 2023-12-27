<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class ="flex m-2 p-2">
    <a href="{{route('admin.Bookings.index')}}"
    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Category Index</a>
</div>
<div class= "m-2 p-2" bg-slate-100 round>
<div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
    <form enctype="multipart/form-data">
      <div class="sm:col-span-6">
        <label for="FName" class="block text-sm font-medium text-gray-700"> First Name </label>
        <div class="mt-1">
          <input type="text" id="FName" wire:model.lazy="FName" name="FName" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
        </div>
      </div>
        <div class="sm:col-span-6">
        <label for="LName" class="block text-sm font-medium text-gray-700"> Last Name </label>
        <div class="mt-1">
          <input type="text" id="LName" wire:model.lazy="LName" name="LName" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
        </div>
      </div>
        <div class="sm:col-span-6">
        <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
        <div class="mt-1">
          <input type="email" id="email" wire:model.lazy="email" name="email" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
        </div>
      </div>
        <div class="sm:col-span-6">
        <label for="date" class="block text-sm font-medium text-gray-700"> Booking Date </label>
        <div class="mt-1">
          <input type="date" id="date" wire:model.lazy="date" name="date" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
        </div>
      </div>
      <div class="mt-6 p-4">
        <button type="submit"
            class="px-4 py2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Save</button>
        </div>
      </div>
    </div>
    </form>
  </div>


<div class="m-2 p-2">
        </div>
    </div>
</x-admin-layout>
