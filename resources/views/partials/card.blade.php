

<div class="card mb-4" style="width: 18rem;">
    <a href="{{route('detailCard' , $movie->id)}}">


        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{{$movie['title']}}</p>
          <p class="card-text">{{$movie['original_title']}}</p>
          <p class="card-text">{{$movie['nationality']}}</p>
          <p class="card-text">{{$movie['date']}}</p>
          <p class="card-text">{{$movie['vote']}}</p>
        </div>
    </a>
</div>

