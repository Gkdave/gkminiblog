
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page') }}
        </h2>
        
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <style>
        h1{
            color: red;
            text-align: center;
            padding: 60px 30px 0px 40px;
        }
           
       
    </style>
   
        <div class="py-12">
                        
        <!-- <div class="max-w-7xl mx-auto sm:px-2 lg:px-2"> -->
        <div class="max-w-7xl mx-auto">
                    
            <div class="mx-2" style="background-color:black;">
             
            <h1> All Post Data</h1> 
                    <table class="table table-bordered">
                    
                        <thead >
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                <th scope="row">{{$post->id}}</th>
                              
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                
                                <br>
                                </tr>
                            @endforeach
                            
                        </div>
                        </tbody>
                        
                    </table>
                    
                    
                </div>
                    <div class="mb-2">
                        {{$posts->links()}}
                    </div>
            </div>
            
        </div>
    
    </div>
   
</body> 

</x-app-layout>
