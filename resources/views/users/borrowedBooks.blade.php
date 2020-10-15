<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('borrowed_Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


                <div class="mt-8 text-2xl text-center">
                    <h2 style="color:#124;font-size: 200%;margin-bottom:15px;">All Books You Are Borrowed</h2>

                    @section('body')
                    <table class="table">
                    <thead class="thead-dark">
                    <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Auther</th>
                    <th>Edition Number</th>
                    <th>Rutern</th>
                    </tr>
                    </thead>
                    @foreach($b as $bborrow)
                    <tr>
                    <td>{{$bborrow["id"]}}</td>
                    <td>{{$bborrow["book_name"]}}</td>
                    <td>{{$bborrow["auther"]}}</td>
                    <td>{{$bborrow["edition_number"]}}</td>
                    <td><a class="btn btn-info" href="/rebook/{{$bborrow['id']}}">Return</a></td>
                    </tr>
                    @endforeach
                    
                    
                    
                    </table>



                    @endsection
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


