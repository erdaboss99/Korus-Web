<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        @section('title')
            <title>{{{$title}}}</title>
        @show
        {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,500,300') }}
        {{ HTML::style('assets/css/style.css') }}
        {{ HTML::style('assets/css/ystie.css') }}
        {{ HTML::style('assets/css/footer.css') }}
		{{ HTML::style('assets/css/fullcalendar.css') }}
        {{ HTML::style('assets/css/jquery.fancybox.css') }}
        {{ HTML::style('assets/css/nivo-slider.css') }}
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js') }}
		{{ HTML::script('assets/script/script.js') }}
        {{ HTML::script('assets/script/jquery.fancybox.pack.js') }}
        {{ HTML::script('assets/script/fancyboxvideo.js') }}
        {{ HTML::script('assets/script/jquery.nivo.slider.pack.js') }}
        {{ HTML::script('ckeditor/ckeditor.js') }}
		{{ HTML::script('assets/script/moment.min.js') }}
		{{ HTML::script('assets/script/fullcalendar.min.js') }}
		{{ HTML::script('assets/script/lang-all.js') }}
		{{ HTML::script('assets/script/gcal.js') }}
        <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}"/>
        <script>
            $(document).ready(function() {
                $('.fancybox').fancybox();
            });
            
            $(window).load(function() {
                $('#slider').nivoSlider({
                    effect: 'fade',
                    directionNav: false,
                    controlNav: false,
                    prevText: '<',
                    nextText: '>' 
                });
               
            });
        </script>
        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-62145815-1', 'auto');
            ga('send', 'pageview');


        </script>
    </head>
    <body>
        {{$main}}
    </body>
</html>