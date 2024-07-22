
    @include('partial.header')

    <div class="row1">
        <div class="leftcolumn">
          <div class="card1">
            <h2 data-aos="fade-up" data-aos-duration="1000">{{$post->title}}</h2>
            <img data-aos="fade-up" data-aos-duration="1000" src="{{$post->image}}" class="fakeimg">
            <p style="font-weight: bold; margin-top:10px; max-width:450px;" data-aos="fade-up" data-aos-duration="1000">{{$post->title}}</p>
            <p data-aos="fade-up" data-aos-duration="1000">{!!$post->content!!}</p>
          </div>
        </div>
        <div class="rightcolumn">
          @foreach($events as $event)
            <div class="card1">
                <h2 data-aos="fade-up" data-aos-duration="1000">{{$event->title}}</h2>
                <p data-aos="fade-up" data-aos-duration="1000">{{$event->location}}</p>
                <p data-aos="fade-up" data-aos-duration="1000" style="font-weight: bold; background-color:orange; padding:5px; text-align:center; color:white;">{{$event->date}}</p>
                <a href="#" data-aos="fade-up" data-aos-duration="1000">Lihat Selengkapnya</a>
            </div>
            @endforeach
          <div class="card1">
            <h3 data-aos="fade-up" data-aos-duration="1000">Tag</h3>
            @foreach ($post->tags as $tag)
            <button data-aos="fade-up" data-aos-duration="1000" class="link" style="background: orange; padding:5px; margin-bottom:5px;"><a href="{{ route('tag.index', $tag->name) }}" style="font-weight:bold; color:white;">#{{$tag->name}}</a></button>
            @endforeach
          </div>
        </div>
      </div>

    @include('partial.footer')