@extends('layouts.app')

<title>{{$post->title}}</title>

@section('content')
    <div class="mt-5" style="max-width: 100%; overflow: hidden;">
        <h2 style="font-family: Sans-serif;">{{$post->title}}</h2>
        <p class="text-muted">{{$post->author}}, Tanggal Publikasi {{date('Y-m-d', strtotime($post->published_at))}}</p>
        <div style="text-align: justify;">
            {!!$post->body!!}
        </div>
    </div>
    <div class="card p-4 mt-5 mb-5">
        <h4 class="text-center">Berikan Komentar</h4>
        <hr>
        <div id="disqus_thread"></div>
        <script>
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ilhamarrahman-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <script id="dsq-count-scr" src="//ilhamarrahman-com.disqus.com/count.js" async></script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
@endsection