@extends('layouts.app')
@section('content') 
<div id="wrapper">


    
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit News</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="../updateNews/{{$news->id}}" enctype="multipart/form-data">
							@csrf	
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" placeholder="News Title" name="title" value="{{$news->title}}">
							</div>

							<div class="form-group margin-bottom-20">
								<label >Category</label>
								<select class="form-control" name="cat">
									@php
										$category = App\category::where("id",$news->category_id)->get();
									@endphp
									<option value="" disabled selected>{{$category[0]['title']}}</option>
									@if(!empty($cats))
									@foreach ($cats as $cat)
									<option value="{{$cat->id}}">{{$cat->title}}</option>

									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group">
								<label for="desc" class="control-label">Description</label>
								
									<textarea class="form-control" id="desc" placeholder="Write News Description" name="desc" >{{$news->description}}</textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">News Image</label>
								<input type="file" id="exampleInputFile" name="image">
                                {{-- <p class="help-block">Example block-level help text here.</p> --}}
                                <img src="{{$news->image}}" alt="" width="70">
							</div>
							<div class="form-group">
								<label for="vdolink">News Video Link</label>
								<input type="text" class="form-control" id="vdolink" placeholder="News Video Link" name="vdolink" value="{{$news->vdolink}}">
							</div>
							
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
            </div>
        </div>
    </div>
</div>
@endsection