<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descrition" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://use.fontawesome.com/98ef42b27b.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        
        <img class="logo" src="/image/logotvu.png" alt="TVU">
        <nav>
            <ul class="nav__link">
                <li class=""><a href="#">Thông tin tuyển sinh</a></li>
                <li><a href="#">Liên hệ</a></li>
                
            </ul>
        </nav>
        
        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}"><button>Login</button></a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" ><button style="background-color: #56c591">Rgister</button></a>
                    @endif
                    
                    @endauth
                </div>
            @endif
    </header>
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Plugin chat code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="107154771483422">
      </div>
    
    @include('layouts.footer');
    
</body>
</html>