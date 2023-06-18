@extends('layouts.vie')
@section('css')
    
@endsection

@section('content')
    {!! $post->description ?? "" !!}
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('#player')
            GreenAudioPlayer.init({
                selector: '#player',
                stopOthersOnPlay: true,
                enableKeystrokes: true
            });
        });
    </script>