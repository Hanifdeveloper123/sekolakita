@include('partial.header')
<section class="hero" id="home">
    <main class="content">
        <div class="typing" data-aos="fade-up">Selamat Datang...</div>
        <h1 data-aos="fade-up"> SMK SALAFIYAH</h1>
        <p data-aos="fade-up">
            Sekolah Modern berbasis pesantren yang mencetak generasi unggul
            yang ahli di bidang fashion dan teknologi ilmu Komputer
        </p>
        <a href="#" class="cta" data-aos="fade-right">Daftar Sekarang</a>
        <a href="#" class="cto"  data-aos="fade-left">Cara Mendaftar</a>
    </main>
    {{-- <img src="{{asset('/landing-user/image/02-min.png')}}" id="img2" class="img"/>
      <img src="{{asset('/landing-user/image/01-min.png')}}" id="img1" class="img"/>
      <img src="{{asset('/landing-user/image/Remove-bg.ai_1717511009620-min.png')}}" id="img" class="img1"/>
      <img src="{{asset('/landing-user/image/03-min.png')}}" id="img3" class="img"/> --}}
</section>

<section class="about">
    <div>
        <p data-aos="fade-up" data-aos-duration="1000">Kompetensi Keahlian</p>
        <div data-aos="fade-up" data-aos-duration="1000"
            style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 15px;">
        </div>
    </div>
    <div class="container">
        <div class="card" data-aos="fade-up" >
            <div class="card-header">
                <img src="{{ asset('/landing-user/image/tata-busana-min.jpg') }}" />
            </div>
            <div class="card-body">
                <h4
                    style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                    Merancang dan mendesain custome busana dengan model terkini guna menciptkan seorang fashion desainer
                    yang handal</h4>
                <a href="{{ route('jurusan.busana.index') }}" class="cta">Tata Busana</a>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <div class="card-header">
                <img src="{{ asset('/landing-user/image/teknik-komputer-jaringan-min.jpg') }}" />
            </div>
            <div class="card-body">
                <h4
                    style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                    Mendidik siswa dibidang teknologi informasi untuk menjadi tenaga yang handal di bidang Teknik
                    Komputer Jaringan.</h4>
                <a href="{{ route('jurusan.tjkt.index') }}" class="cta">Teknik Jaringan Komputer & Telekomunikasi</a>
            </div>
        </div>
        <div class="card" style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="2000">
            <div class="card-header">
                <img src="{{ asset('/landing-user/image/rpl-min.jpg') }}" />
            </div>
            <div class="card-body">
                <h4
                    style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                    Mendidik siswa dibidang arsitektur perangkat lunak guna menciptakan seorang progammer yang handal
                </h4>
                <a href="{{ route('jurusan.pplg.index') }}" class="cta">Pengembangan Perangkat Lunak & Game</a>
            </div>
        </div>
    </div>
</section>


<section class="blog">
    <div>
        <p data-aos="fade-up" data-aos-duration="1000">Berita Terbaru</p>
        <div data-aos="fade-up" data-aos-duration="1000"
            style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 15px;">
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
                    <h4
                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                        {{ $post->title }}</h4>
                    <a href="{{ route('berita.index', $post->slug) }}">lihat Selengkapnya</a>
                </div>
            </div>
        @endforeach
        <a href="#" class="cta">Berita Terbaru Lainnya</a>
    </div>
</section>

<section class="mitra" id="mitra">
    <div>
        <p data-aos="fade-up" data-aos-duration="1000">Mitra Kerja Sama</p>
        <div data-aos="fade-up" data-aos-duration="1000"
            style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 15px;">
        </div>
    </div>
    <main class="container" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('/landing-user/image/logo-CAN-CREATIVE-colour-new-01-1.webp') }}" alt="">
        <img src="{{ asset('/landing-user/image/logo-web-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/PAS_56f070e71fca39286a82c7b837f3f076-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/Remove-bg.ai_1717646362486-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/logo-jsn-black-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/Telkom_Indonesia.svg-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/images-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/PLN-Icon-Plus-min.png') }}" alt="">
        <img src="{{ asset('/landing-user/image/Logo_BUMN_Untuk_Indonesia_2020.svg-min.png') }}" alt="">
    </main>
</section>

<section>
    <div class="people">
        <div class="person">
            <h1 data-aos="fade-up" data-aos-duration="1000">Sambutan Kepala Sekolah</h1>
            <div data-aos="fade-up" data-aos-duration="1000"
                style="width: 80px; margin: auto; margin-top:5px; display: flex; justify-content: center; align-items: center; height: 5px; background-color: orange; z-index: 50;     margin-bottom: 15px;">
            </div>
            <p style="text-indent: 45px;" data-aos="fade-up" data-aos-duration="1000">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum fugiat eius perspiciatis ut rerum
                aperiam dolorum voluptatem et aspernatur odit vitae iste corporis tenetur, iusto ullam, ad consequatur
                suscipit saepe minus aut blanditiis. Aspernatur quae dignissimos in nam, facere sunt totam reprehenderit
                delectus. Provident molestias quidem iure quaerat hic minus tempore laudantium dolor sapiente corporis
                distinctio iste maiores labore perferendis quos, deserunt perspiciatis esse iusto aspernatur
                repudiandae! Ipsam, natus recusandae. Architecto magni nihil culpa quo, obcaecati ad eligendi ab
                distinctio consectetur officia libero numquam similique temporibus explicabo nemo repellendus. Culpa
                perferendis eos ea! Itaque officiis similique temporibus tempore vel facere!
            <p style="text-indent: 45px;" data-aos="fade-up" data-aos-duration="1000">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptate consequuntur adipisci sequi!
                Voluptatem sit quia, ea quidem aperiam nostrum. Expedita nisi, sunt placeat asperiores praesentium totam
                perspiciatis officiis quibusdam dicta consequuntur reprehenderit accusamus cupiditate, adipisci dolor
                veritatis architecto maxime impedit rem cum nulla mollitia necessitatibus! Expedita quas earum possimus!
            </p>
            </p>
        </div>
        <div class="pict" data-aos="fade-up" data-aos-duration="1000">
            <div class="circle"></div>
            <div class="image">
                <div class="bact1">Ahmad Hanif Dzikron, M. Kom.</div>
                <div class="bact2"></div>
                <img src="{{ asset('/landing-user/image/kepala-min.png') }}">
            </div>
        </div>
    </div>
</section>




<section id="contact" class="contact">
    <h2 data-aos="fade-up" data-aos-duration="1000">Hubungi Kami</h2>
    <p data-aos="fade-up" data-aos-duration="1000">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut quas porro consequatur,<br>
        dicta dolor temporibus deleniti necessitatibus aperiam reiciendis odit.
    </p>
    <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7928338288857!2d111.04548937402986!3d-6.547821864008055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e712b7f3a7416bf%3A0x530521968b328db9!2sSMA%20Negeri%201%20Tayu!5e0!3m2!1sid!2sid!4v1703731657810!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" placeholder="email">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="text" placeholder="no hp">
            </div>
            <button type="submit" class="btn">kirim pesan</button>
        </form>
    </div>
</section>
@include('partial.footer')
