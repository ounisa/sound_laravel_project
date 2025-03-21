 <!-- Youtube Section Begin -->
 <style>
    .play-btn:after {
        display: none !important;
    }
</style>
 <section class="youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest concert</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="{{ asset('img/youtube/youtube-1.jpg') }}">
                            <a id="play" href="https://www.youtube.com/watch?v=t5yyqXdhLjA" class="play-btn video-popup "><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Imagine Dragons - I'm So Sorry - LIVE in Vegas
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="{{ asset('img/youtube/youtube-2.jpg') }}">
                            <a href="https://youtu.be/4xqo7D2k8HM?si=AgNNhzaYA005p1tK" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Imagine Dragons - Believer (Live in Vegas)
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="{{ asset('img/youtube/youtube-3.jpg') }}">
                            <a href="https://youtu.be/Fpn1imb9qZg?si=c88vdNRDxSJhynE_" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Coldplay - A Sky Full Of Stars (Live at River Plate)
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Youtube Section End -->

    <script>
        document.getElementById("play").classList.add("d-none")
    </script>