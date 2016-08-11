@extends('layout/layout')
@section('content')
	<div class="content">
		
	</div>
	<div class="col-sm-offset-2 col-sm-8" id="budapp">
		<div class="row">
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="ค้นหาคำศัพท์">
			</div>
			<div class="col-sm-6">
				<label>ความหมาย :</label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<select name="" multiple class="form-control">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>
			<div class="col-sm-6">
				<textarea name="" class="form-control"></textarea>
			</div>
		</div>
	</div>
@endsection
