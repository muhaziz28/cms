<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('article.add') }}" class="px-4 py-2 rounded-lg bg-blue-500 text-white">Add new article</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full text-sm text-left border-collapse border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">#</th>
                                <th class="border border-gray-300 px-4 py-2">Article</th>
                                <th class="border border-gray-300 px-4 py-2">Author</th>
                                <th class="border border-gray-300 px-4 py-2">Categories</th>
                                <th class="border border-gray-300 px-4 py-2">Tags</th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->title}}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->author->name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->articleCategory->category->name}}</td>
                                <td class="border border-gray-300 px-4 py-2 space-x-2">
                                    @foreach ($item->articleTags as $articleTag)
                                    <span class="px-4 py-2 bg-gray-400 rounded-lg">{{ $articleTag->tag->name }}</span>
                                    @endforeach
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a href="{{ route('article.update', $item->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>