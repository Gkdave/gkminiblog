<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <style>
        h1{
            color: red;
            text-align: center;
            padding: 10px 30px 10px 30px;
            background-color: black;
        }
     /* body{ 
            background-color: black;
           
        }  */
               
    </style>
 
        <div class="py-12">
        <!-- <div class="max-w-7xl mx-auto sm:px-2 lg:px-4"> -->
        <div class="max-w-7xl mx-auto">
                <h1>User's Post Data</h1>
                    <table class="table table-bordered">
                    
                        <thead style="background-color:powderblue;">
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $ps)
                                <tr>
                                <th scope="row">{{$ps->id}}</th>
                              
                                <td>{{$ps->user->name}}</td>
                                <td>{{$ps->title}}</td>
                                <td>{{$ps->body}}</td>
                               @can('isAdmin',$ps)
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-mediun">
                                    <a href="{{ url('/post/edit',$ps->id) }}" class="bg-success hover:bg-success-400 focus:shadowoutline focus:outline-none text-white text-sm py-1 px-2 rounded" >Edit</a>
                                    <a href="{{ url('/post/delete',$ps->id) }}" class="bg-danger hover:bg-danger-400 focus:shadowoutline focus:outline-none text-white text-sm py-1 px-2 rounded" >Delete</a>

                                </td>
                               @endcan
                                <br>
                                </tr>
                            @endforeach
                            
                        </div>
                        </tbody>
                    </table>
                    <div>
                      @if(session()->has('status'))
                            <div class="mt-2  text-danger py-2 px-4">
                            <h4>{{session('status')}}</h4>
                            </div>
                        @endif
                        </div>
                      
        </div>
    
    </div>
   
</body> 

</x-app-layout>
