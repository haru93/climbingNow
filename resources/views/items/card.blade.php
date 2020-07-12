<div class="col-sm-3 mb-5">
  <div class="card mt-5 mb-5 h-100"  style="width:18rem;"> 
    <img class="card-img-top" src="{{ $item["Item"]["largeImageUrl"] }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $item["Item"]["title"]}}</h5>
      <p class="card-text"><small class="text-muted">{{ $item["Item"]["itemCaption"]}}</small></p>
    </div>
    <a href="{{ $item["Item"]["itemUrl"] }}" class="btn btn-primary">楽天購入ページ</a>
  </div>
</div>