@include('partial.header')
<section class="blog-prestasi">
    <div>
      <p data-aos="fade-up" data-aos-duration="1000">Berita Terbaru</p>
      <div data-aos="fade-up" data-aos-duration="1000" style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 15px;"></div>
      <div style="display: flex; justify-content:center;" data-aos="fade-up" data-aos-duration="1000">
        @foreach ($category as $cat)
        <button data-aos="fade-up" data-aos-duration="1000" style=" margin:10px; padding:10px;  background-color:orange;"><a href="{{ route('category.index', $cat->name) }}" style="color: white; font-weight:bold;">{{$cat->name}}</a></button>
        @endforeach
      </div>
    </div>
    <div class="container">
      @foreach ($posts as $post)
      <div class="card" data-aos="fade-up" data-aos-duration="1000">
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
          <div style="text-align: center; margin-bottom:10px;">
      {{$posts->links("vendor.pagination.tailwind")}}
  </div>  
    </section>
@include('partial.footer')