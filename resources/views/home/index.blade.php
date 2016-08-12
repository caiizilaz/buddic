@extends('layout/layout')
@section('content')
	<div class="content">
		
	</div>
	<h2 class="text-center">พจนานุกรมพุทธศาสตร์</h2>
	<div class="col-sm-offset-2 col-sm-8" id="budapp">
		<div class="form-group row">
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="ค้นหาคำศัพท์" v-model="search_word">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-6">
				<label for="word">คำศัพท์ทั้งหมด : </label>
				<select name="word" multiple class="form-control" v-model="add_word">
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
				<label for="mean">ความหมาย : </label>
				<textarea name="mean" class="form-control" v-model="mean"></textarea>
			</div>
		</div>
	</div>
@endsection
