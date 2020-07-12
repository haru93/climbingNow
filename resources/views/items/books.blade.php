@extends('app')

@section('title', '関連書籍')

@section('content')
  @include('nav')
    <div class="container">
		<div class="row">
			@foreach($response as $item)
				@include('items.card')
			@endforeach
		</div>
    </div>
@endsection


