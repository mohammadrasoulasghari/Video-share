@foreach($videos as $video)
<div id="related-posts">
    <!-- video item -->
    <div class="related-video-item">
        <div class="thumb">
            <small class="time">{{$video->lengthInHuman}}</small>
            <a href="{{route('videos.show',$video->slug)}}"><img src="{{$video->thumnail}}" alt=""></a>
        </div>
        <a href="{{route('videos.show',$video->slug)}}" class="title">{{$video->name}}</a>
        <a class="channel-name" href="#">{{$video->name}}<span>
                <i class="fa fa-check-circle"></i></span></a>
    </div>
    <!-- // video item -->
</div>
@endforeach