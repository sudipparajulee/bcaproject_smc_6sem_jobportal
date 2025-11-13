@extends('layouts.app')
@section('title','Tags')
@section('content')
    <div class="flex justify-end mb-4">
        <button onclick="showModal()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Tag</button>
    </div>

    <table class="w-full">
        <tr class="bg-blue-600 text-white">
            <th class="p-2 border">S.N.</th>
            <th class="p-2 border">Tag Name</th>
            <th class="p-2 border">Action</th>
        </tr>
        <tr class="text-center">
            <td class="p-2 border">1</td>
            <td class="p-2 border">Sample Tag</td>
            <td class="p-2 border">
                <a href="#" class="bg-blue-600 text-white px-4 py-1 rounded mr-2">Edit</a>
                <a class="bg-red-600 text-white px-4 py-1 rounded">Delete</a>
            </td>
        </tr>
    </table>

    <div id="modal" class="hidden fixed inset-0 bg-blue-500 bg-opacity-25 backdrop-blur-sm items-center justify-center">
        <form action="{{route('tags.store')}}" method="POST" class="p-4 bg-white rounded-lg w-1/2">
            @csrf
            <h1 class="font-bold text-xl">Add a New Tag</h1>
            <input type="text" name="name" placeholder="Enter Tag" class="block w-full rounded ">
            <div class="flex justify-end mt-4">
                <input onclick="hideModal()" type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2" value="Cancel">
                <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" value="Add Tag">
            </div>
        </form>
    </div>

    <script>
        function showModal(){
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modal').classList.add('flex');
        }
        function hideModal(){
            document.getElementById('modal').classList.remove('flex');
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
@endsection
