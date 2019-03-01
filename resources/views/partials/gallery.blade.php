<div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Galerija</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">


                        @foreach($tripods as $tripod)
                            <div class="single-shot">
                                <img src = "{{url($tripod->img_url)}}" alt="">
                            </div>
                        @endforeach
                    </div>

                    <!-- @foreach($tripods as $tripod)
                        <div class="col-md-3" style = "float:left;">
                            <img src="{{url($tripod->img_url)}}" class = "img-fluid" alt="">
                        </div>
                    @endforeach -->
                </div>
            </div>
        </div>