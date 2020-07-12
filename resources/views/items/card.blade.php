<div class="card mt-5 mb-5 cols-3 mr-5" style="width:18rem;"> 
  <img class="card-img-top" width="100" height="250" src="{{ $item["Item"]["largeImageUrl"] }}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">{{ $item["Item"]["title"]}}</p>
  </div>
  <div class="card-footer text-muted text-center mt-3">
    <a href="{{ $item["Item"]["itemUrl"] }}" class="btn btn-primary">楽天購入ページ</a>
  </div>
</div>