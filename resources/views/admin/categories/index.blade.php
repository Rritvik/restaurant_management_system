<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Category</a>
            </div>
            
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 bright:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bright:bg-gray-700 bright:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Image
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Description
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="bg-white border-b bright:bg-gray-900 bright:border-gray-700"> 
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap bright:text-white">
                                {{ $category->name }}
                            </td>
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap bright:text-white">
                                <img alt="image" src="{{ Storage::url($category->image) }}" class="h-16 rounded">
                            </td>
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap bright:text-white">
                                {{ $category->description }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
