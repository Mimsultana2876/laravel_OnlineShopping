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
                    @elseif(session()->get('message')=='edit')
                    <div class="alert alert-success">
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
                    <form  method="post"  action="{{route('category.store')}}" class="form-horizontal form-material mx-2">
                        @csrf
                    
                        
                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">Add Category</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='category_name' type="text" placeholder="Insert Category" class="form-control form-control-line" >
                            </div>
                        </div>

                        
                        
                        <div class="form-group d-flex">
                            <div class="col-sm-12" style="width: 25%;"></div>
                            <div class="col-sm-12" style="width: 75%;">
                                <button class="btn btn-success text-white">Add</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            
            <br>
            <h3>Show Category</h3>
            <div class="row">
                <!-- column -->
                <div class="col-12   m-auto">
                
                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-center">S.L.</th>
                                    <th class="border-top-0 text-center">Category Name</th>
                                    <th class="border-top-0 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key=>$data)
                                <tr>
                                
                                    <td style='line-height: 0.5;padding: .5rem;text-align: center'>{{$key+1}}</td>
                                    <td style='line-height: 0.5;padding: .5rem;text-align: center'>{{$data->category_name}}</td>
                                    <td>
                                        <a href="{{route('category.edit',$data->id)}}"  style="font-size:20px;padding: 5px;" ><i class="fa fa-edit"></i></a>
                                        <a href=""  style="font-size:20px;padding: 5px;" ><i class="fa fa-trash"></i></a>
                                       
                                    </td>

                                
                                </tr>
                            @endforeach
                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
          
    </div>
          
         
</div>



@endsection