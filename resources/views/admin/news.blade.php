@extends('layouts.app')
@section('content')
<div id="wrapper">

    
	<div class="main-content">
		<div class="row small-spacing">
            
            <div class="mb-3 ml-3" > <a href="{{route('admin.add_news')}}" class="btn btn-default"><i class="fa fa-plus"></i> Add New News</a></div>
           
			<div class="col-xs-12">
				<div class="box-content">
					<div class="table-responsive" data-pattern="priority-columns">
						<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
							<thead>
								<tr>
									<th data-priority="1">No</th>
									<th data-priority="3">News ID</th>
									<th data-priority="3">Category ID</th>
									<th data-priority="1">Image</th>
									<th data-priority="3">Title</th>
									<th data-priority="6">Action</th>
								</tr>
                            </thead>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($news as $newz)
                                
                           
							<tbody>
                            
								<tr>
									<th>{{$i++}} </th>
									<td>{{$newz->id}}</td>
									<td>{{$newz->category_id}}</td>
									<td><img src="{{$newz->image}}" alt="" width="50"></td>
									<td>{{$newz->title}}</td>
                                    <td><a href="editNews/{{$newz->id}}"><i class="fa fa-edit"></i></a>
                                  <a href="deleteNews/{{$newz->id}}">  <i class="fa fa-trash"></i></a></td>
                                </tr>     
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection