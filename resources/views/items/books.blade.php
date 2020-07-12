@extends('app')

@section('title', '関連書籍')

@section('content')
  @include('nav')
    <div class="container">
	<div class="card-deck">
		@foreach($response as $item)
		<div class="row">
			@include('items.card')
		</div>
		@endforeach
	</div>
    </div>
@endsection


