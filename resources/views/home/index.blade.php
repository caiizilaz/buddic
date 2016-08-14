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
				<select name="word" multiple class="form-control" v-model="select">
					<option @click="fillmean(word)" v-for="word in words | filterBy search_word" :value="word">@{{word.budtext}}</option>
				</select>
			</div>
			<div class="col-sm-6">
				<label for="mean">ความหมาย : </label>
				<textarea readonly="readonly" name="mean" class="form-control" v-model="mean" placeholder="คลิ๊กเลือกคำที่ช่อง คำศัพท์ทั้งหมด เพื่อดูความหมาย"></textarea>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title" id="myModalLabel">เกี่ยวกับเว็บไซต์</h3>
				</div>
				<div class="modal-body">
					<div>
						เว็บไซต์นี้จัดทำขึ้นเพื่อผู้ที่สนใจหรือศึกษาเกี่ยวกับคำศัพท์ทางพุทธศาสนา และพัฒนาทักษะในการทำเว็บไซต์ของผู้จัดทำ
					ซึ่งขณะนี้อยู่ในระหว่างการพัฒนาเว็บไซต์และระบบให้มีความสมบูรณ์ยิ่งขึ้น หากมีข้อผิดพลาดประการใดต้องขออภัยมา ณ โอกาสนี้ด้วยครับ
					</div>
					<br><div class="text-right">คงฤทธิ์ จันทร์อิน</div>
					<hr>
					<div>
						<h4>แหล่งที่มาของข้อมูลและรูปภาพ</h4>
						<li>รูปภาพพื้นหลังจากเว็บไซต์ vecteezy.com โดยคุณ kevenodes - http://www.vecteezy.com/vector-art/107848-temple-in-bangkok-illustration</li><br>
						<li>ฐานข้อมูลคำศัพท์จากเว็บไซต์ dhammathai.org พจนานุกรมพุทธศาสตร์ ฉบับประมวลผลศัพท์ ป.อ.ปยุตโต - http://www.dhammathai.org/buddhistdic/buddhistdictionary.php</li>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
				</div>
			</div>
		</div>
	</div>
@endsection
