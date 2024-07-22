@include('partial.header')
<section class="galeri">
    <div>
        <p data-aos="fade-up" data-aos-duration="1000">Galeri Foto </p>
        <div data-aos="fade-up" data-aos-duration="1000"
            style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 1px;">
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        @foreach ($foto as $item)
            <div class="card" style="margin-right:10px;">
                <div class="card-header">
                    <img src="{{ $item->image }}" />
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center; margin-bottom:10px;">
        {{ $foto->links('vendor.pagination.tailwind') }}
    </div>
</section>


@include('partial.footer')
