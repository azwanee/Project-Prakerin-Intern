<!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container" id="kategori">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Whats New</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Jurusan</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Saturday Creativity</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Ekstrakulikuler</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row" style="overflow-x: hidden; overflow-y:scroll; width:100%; height:600px;">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($category as $data)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('/img/berita/' . $data->cover)}}" alt="">
                                                </div>
                                                <div class="what-cap" >
                                                    <span class="color1">{{$data->kategori->nama}}</span>
                                                    <h4   class="pl-3"><a href="{{ route('berita.show', $data->id) }}">{{ substr($data->judul,0,44) }} ...</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Follow Us</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://web.facebook.com/smkassalaam/?locale=id_ID&_rdc=1&_rdr"><img src="{{ asset ('frontend/assets/img/news/icon-fb.png') }}" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>Facebook</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://smkassalaambandung.sch.id"><img src="{{ asset ('frontend/assets/img/news/icon-tw.png') }}" alt="" width="30px"></a>
                            </div>
                            <div class="follow-count">
                                <span>Website</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.instagram.com/smkassalaam/?hl=en"><img src="{{ asset ('frontend/assets/img/news/icon-ins.png') }}" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>Instagram</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.youtube.com/@smkassalaambandung4011"><img src="{{ asset ('frontend/assets/img/news/icon-yo.png') }}" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>Youtube</span>
                                <p>Smk Assalaam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
