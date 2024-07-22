@include('partial.header')
<section class="blog-prestasi">
    <div>
      <p>#{{$category->name}}</p>
      <div style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 15px;"></div>
    </div>
    <div class="container">
      @foreach ($posts as $post)
      <div class="card">
        <div class="card-header">   
          <img src="{{ $post->image }}" />
        </div>
        <div class="card-body">
          <span class="tag tag-teal">{{ $post->category->name }}</span>
          <h4 style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">{{ $post->title }}</h4>
          <a href="{{ route('berita.index', $post->slug) }}">lihat Selengkapnya</a>
        </div>
       </div>
       @endforeach
    </div>
  </section>
@include('partial.footer')