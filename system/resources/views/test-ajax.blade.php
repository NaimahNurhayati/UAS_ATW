@extends('templateadmin.admin')

@section('content')
		<h3 style="text-align: center;">TEST AJAX</h3>
		<div class="card" style="background-color: white">
			<div class="card-header" style="margin: 20px">
				Alamat
			</div>

			<div class="card-body" style="background-color: white;">
				<div class="row">
					<div class="col-md-3">
						<label class="control-label">Provinsi</label>
						<select class="form-control" onchange="gantiProvinsi(this.value)">
								<option>Pilih Provinsi</option>
							@foreach($list_provinsi as $provinsi)
								<option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-3">
						<label class="control-label">Kabupaten</label>
						<select class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
							<option>Pilih Provinsi Terlebih Dahulu</option>
						</select>
					</div>
					<div class="col-md-3">
						<label class="control-label">Kecamatan</label>
						<select class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
							<option>Pilih Kabupaten Terlebih Dahulu</option>
						</select>
					</div>
					<div class="col-md-3">
						<label class="control-label">Desa</label>
						<select class="form-control" id="desa">
							<option>Pilih Kecamatan Terlebih Dahulu</option>
						</select>
					</div>
				</div>
			</div>
		</div>

@endsection

@push('script')
	<script>

		contoh = {
			"id": 6101,
			"id_provinsi": "61",
			"name": "KABUPATEN SAMBAS"
		}
		function gantiProvinsi(id){
			$.get("api/provinsi/" + id, function(result){
				result = JSON.parse(result)
				option = ""
				for(item of result){
					option += `<option value="${item.id}">${item.name}</option}>`;
				}
				$("#kabupaten").html(option)
			});
		}

		function gantiKabupaten(id){
			$.get("api/kabupaten/" + id, function(result){
				result = JSON.parse(result)
				option = ""
				for(item of result){
					option += `<option value="${item.id}">${item.name}</option}>`;
				}
				$("#kecamatan").html(option)
			});
		}

		function gantiKecamatan(id){
			$.get("api/kecamatan/" + id, function(result){
				result = JSON.parse(result)
				option = ""
				for(item of result){
					option += `<option value="${item.id}">${item.name}</option}>`;
				}
				$("#desa").html(option)
			});
		}		
	</script>
@endpush