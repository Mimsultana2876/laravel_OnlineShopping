@extends('admin.layout.layout')
@section('content')
<div class="right_col" role="main">   
   <div class="col-12  w-75 m-auto">
            @if(session()->has('message'))
                @if(session()->get('message')=='inserted')
                    <div class="alert alert-success">
                        <p>Successfully inserted</p>

                    </div>
                    @elseif(session()->get('message')=='fail')
                    <div class="alert alert-danger">
                        <p>Successfully Not inserted</p>

                    </div>
                @endif
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <div class="card main_category">
                <div class="card-body">
                    <!-- <h2 class="card-title text-center" style="text-transform: uppercase;">Add Police Station</h2>-->
                    <form  method="post" action="{{url('category/edit')}}" class="form-horizontal form-material mx-2">
                        @csrf
                    
                        
                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">Edit Category</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='category_name' value="{{$category->category_name}}" type="text" placeholder="Insert Category" class="form-control form-control-line" >
                            </div>
                        </div>

                        
                        
                        <div class="form-group d-flex">
                            <div class="col-sm-12" style="width: 25%;"></div>
                            <div class="col-sm-12" style="width: 75%;">
                                <button class="btn btn-success text-white">Edit</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            
            <br>
            
        </div>
          
    </div>
          
         
</div>



@endsection