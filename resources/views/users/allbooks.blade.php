<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AllBooks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


                <div class="mt-8 text-2xl text-center">
                    <h2 style="color:#124;font-size: 200%;margin-bottom:15px;">Library's  Shelves</h2>
                   
                    @section('body')
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Auther</th>
                            <th>Edition Number</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Borrow</th>
                            </tr>
                        </thaed>
                        @foreach($allbook as $books)
                        <tr>
                        <td>{{$books["id"]}}</td>
                        <td>{{$books["book_name"]}}</td>
                        <td>{{$books["auther"]}}</td>
                        <td>{{$books["edition_number"]}}</td>
                        <td>{{$books["created_at"]}}</td>
                        <td>{{$books["updated_at"]}}</td>
                        <td><a class="btn btn-success" href="borrowBooks/{{$books['id']}}">Borrow</a></td>
                        </tr>
                        @endforeach
                        @foreach($revallbook as $books)
                        <tr>
                        <td>{{$books["id"]}}</td>
                        <td>{{$books["book_name"]}}</td>
                        <td>{{$books["auther"]}}</td>
                        <td>{{$books["edition_number"]}}</td>
                        <td>{{$books["created_at"]}}</td>
                        <td>{{$books["updated_at"]}}</td>
                        <td style="color:red">Borrowed</td>
                        </tr>
                        @endforeach
                    
                    </table>



                    @endsection

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


