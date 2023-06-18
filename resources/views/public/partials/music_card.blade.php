<div class="col-lg-4 col-md-6 ">
    
    <div class="mb-4 latest-post" >
        <div class="post-body" style="background-color: F2780C;">
            <h4 class="text-center post-title">
                <a href="#"
                    class="d-inline-block" style="color: #F2A30F">{{ $music['name'] }}</a>
            </h4>
            
            <div class="latest-post-media">
                <a href="#" class="latest-post-img">
                    <img loading="lazy" 
                        src="{{ asset($music['photo']) }}" alt="img">
                </a>
            </div>
            {{-- <p class='text-center description' style="  background-color : {{ $music->hasFeature('muzcina') ? '#68bdfa' : '#ff617a'}};">{{ $music->teaser }} </p>--}}
            
            <div id="player">
                <audio crossorigin preload="none">
                    <source src="{{ asset($music['demo']) }}"
                        type="audio/mpeg">
                </audio>
            </div>
            
            
            
            

        </div>
    </div><!-- Latest post end -->
</div><!-- 1st post col end -->


