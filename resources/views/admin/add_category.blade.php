@extends('layouts.app')
@section('content') 
<div id="wrapper">

    

	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Category</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="{{route('admin.store_category')}}" enctype="multipart/form-data">
							@csrf	
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" placeholder="Category Title" name="title">
							</div>
							<div class="form-group">
								<label for="desc" class="control-label">Description</label>
								
									<textarea class="form-control" id="desc" placeholder="Write Category Description" name="desc"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Category Image</label>
								<input type="file" id="exampleInputFile" name="image">
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