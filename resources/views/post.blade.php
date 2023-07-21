<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold mx-4 text-3xl text-yellow-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        form{
            background-color:grey;
        }
        h2{
            background-color:black;
            color:yellow;
           padding:25px;
            
        }
        
       

    </style>

    <div class="py-2">
   
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="col-md-10 mb-2 mx-2 mt-2">
                        <h2 class="padding-top:10px">Create Post</h2>
                    </div>
                    <div class="col-10">
                        <form href="" method="post" class="mx-2 mt-4 padding: 30px">
                                
                                @csrf 
                                <div class="col-md-7 mb-2 mx-4">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                
                                </div>
                                <div  class="col-md-7 mb-2 mx-4">
                                    <label for="text" class="form-label">Body</label>
                                    <textarea class="form-control" placeholder="" id="Textarea" name="body"></textarea>
                                </div>
                            
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <div style="padding: 15px">
                                    <input type="submit"  class="btn btn-success mb-2 mx-3 px-4" value="Post" >
                                    @if(session()->has('status'))
                                        <div class="mt-2 shadow font-bold bg-white text-danger py-2 px-4 rounded">{{session('status')}}</div>

                                    @endif
                                </div>
                            
                        </form>

                    </div>

                   
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>
