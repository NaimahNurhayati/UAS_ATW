@if($errors->has($item))
@foreach($errors->get($item) as $msg)
<label for="" class="label text-danger" style="color: red;">{{$msg}}</label>
@endforeach
@endif