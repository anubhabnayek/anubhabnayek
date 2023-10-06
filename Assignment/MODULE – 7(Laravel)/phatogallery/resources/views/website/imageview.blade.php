@extends('website.layout.structure')

@section('main_container')
</br>

@foreach($data as $d)
<div class="card-container">
 <div class="text-right">
   <a href="{{url('/imageupload')}}" class="btn btn-primary">Imageupload</a>
    </div>
  <div class="card" class="tex-center">
    <img src="{{url('website/upload/'.$d->file)}}" width="200px" height="120px" alt="Denim Jeans">
    <h2>{{$d->name;}}</h2>
    <p class="price">$19.99</p>
    <p>Some text about the jeans..</p>
    <p><button>Add to Cart</button></p>
  </div>
</div>
@endforeach

@endsection