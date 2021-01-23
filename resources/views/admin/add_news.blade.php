@extends('layouts.app')
@section('content') 
<div id="wrapper">

	

	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add News</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="{{route('admin.store_news')}}" enctype="multipart/form-data">
							@csrf	
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" placeholder="News Title" name="title">
							</div>

							<div class="form-group margin-bottom-20">
								<select class="form-control" name="cat">
									<option value="" disabled selected> Select Category</option>
									@if(!empty($cats))
									@foreach ($cats as $cat)
									<option value="{{$cat->id}}">{{$cat->title}}</option>

									@endforeach
									@endif
								</select>
							</div>

							<div class="form-group">
								<label for="desc" class="control-label">Description</label>
								
									<textarea class="form-control" id="desc" placeholder="Write News Description" name="desc"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">News Image</label>
								<input type="file" id="exampleInputFile" name="image">
								{{-- <p class="help-block">Example block-level help text here.</p> --}}
							</div>
							<div class="form-group">
								<label for="vdolink">News Video Link</label>
								<input class="form-control" type="text" id="vdolink" name="vdolink">
								{{-- <p class="help-block">Example block-level help text here.</p> --}}
							</div>
							{{-- <div class="checkbox margin-bottom-20">
								<input type="checkbox" id="chk-1"><label for="chk-1">Check me out</label> 
							</div> --}}
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