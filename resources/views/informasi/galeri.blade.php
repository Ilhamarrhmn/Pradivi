@extends('layouts.app')

@section('title', 'Galeri')

@section('content-fluid')
    <div class="card p-4 mt-5 mb-5">
        <h4>GALERI PRADIVI</h4>
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