@extends('layouts.main')
@section('content')
	<div class="col-xl-12">
		<div class="card mb-4">
			<h5 class="card-header">Parent Menu Input</h5>
			<div class="card-body">
				<div class="mb-3 row">
					<label for="html5-text-input" class="col-md-2 col-form-label">title</label>
					<div class="col-md-10">
						<input class="form-control" type="text" value="{{ old('title') }}" name="title" id="html5-text-input"
							autofocus />
					</div>
				</div>
				<div class="mb-3 row">
					<label for="html5-text-input" class="col-md-2 col-form-label">URL</label>
					<div class="col-md-10">
						<input class="form-control" type="text" value="{{ old('url') }}" name="url" id="html5-text-input" />
					</div>
				</div>
				<div class="mb-3 row">
					<label for="html5-text-input" class="col-md-2 col-form-label">icon <a href="https://boxicons.com/"
							target="_blank">Show</a></label>
					<div class="col-md-10">
						<input class="form-control" type="text" value="{{ old('icon') }}" name="icon" id="html5-text-input" />
					</div>
				</div>
				<div class="mb-3 row">
					<label for="html5-text-input" class="col-md-2 col-form-label">have child</label>
					<div class="col-md-10">
						<div class="form-check form-switch mb-2">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
