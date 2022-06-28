<script src="{{asset('meta/js/vendors/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('meta/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('meta/js/vendors/swiper-bundle.min.js')}}"></script>
<script src="{{asset('meta/js/vendors/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('meta/js/vendors/parallax.min.js')}}"></script>
<script src="{{asset('meta/js/vendors/aos.js')}}"></script>
<script src="{{asset('meta/js/app.js')}}"></script>
<script src="{{asset('meta/js/particles.js')}}"></script>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105138358917770");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>