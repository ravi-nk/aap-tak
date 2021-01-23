@extends('layouts.app')
@section('content')

<div id="wrapper">

    

	<div class="main-content">
		<div class="row small-spacing">
           
            <div class="mb-3 ml-3" > <a href="{{route('admin.add_category')}}" class="btn btn-default"><i class="fa fa-plus"></i> Add New Category</a></div>
            
			<div class="col-xs-12">
				<div class="box-content">
					<div class="table-responsive" data-pattern="priority-columns">
						<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
							<thead>
								<tr>
									<th data-priority="1">No</th>
									<th data-priority="3">Category ID</th>
									<th data-priority="1">Image</th>
									<th data-priority="3">Title</th>
									<th data-priority="6">Action</th>
								</tr>
                            </thead>
                            @php
                                $i = 1;
                            @endphp
                            @if(!empty($categories))
                            @foreach ($categories as $category)
                                
                           
							<tbody>
                            
								<tr>
									<th>{{$i++}} </th>
									<td>{{$category->id}}</td>
									<td><img src="{{$category->image}}" alt="" width="50"></td>
									<td>{{$category->title}}</td>
                                    <td><a href="editCategory/{{$category->id}}"><i class="fa fa-edit"></i></a>
                                  <a href="deleteCategory/{{$category->id}}">  <i class="fa fa-trash"></i></a></td>
                                </tr>     
                            </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection