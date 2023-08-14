@extends('layout')
@section('content')

<x-latest-video>
    
</x-latest-video>
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">
                     @foreach($mostPopularVideo as $video)  
                    
                     <x-video-box :video="$video"></x-video-box>

                     @endforeach
            </div>

            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
                     @foreach($mostViewdVideo as $video)  
                    
                     <x-video-box :video="$video"></x-video-box> 

                     @endforeach
            </div>


    

@endsection