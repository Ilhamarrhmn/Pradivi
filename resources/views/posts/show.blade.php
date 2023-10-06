@extends('layouts.app')

<title>{{$post->title}}</title>

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('artikel', $post) }}</small>
    </div>

    <div class="bg-white p-5 shadow-sm rounded mt-3 mb-5" style="overflow: hidden;">
        <h2 style="font-family: Sans-serif;">{{$post->title}}</h2>
        <p class="text-muted"><i class="bi bi-person-fill"></i>{{ $post->author }}, <i class="bi bi-calendar-check-fill"></i> {{date('Y-m-d', strtotime($post->created_at))}}</p>
        <div>
            <img src="/app/public/{{ $post->gambar }}" class="card-img-top" height="500" alt="imghighlight">
            {!!$post->body!!}
        </div>

        <div class="mt-5">
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
    </div> 
@endsection