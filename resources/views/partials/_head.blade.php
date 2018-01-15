<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') | Personal Waiter - Order Delicious Food Online in Nigeria: Food Delivery</title> 
<meta name="description" content="Order delicious food online in Nigeria. Connect with restaurants in Abeokuta and around you and order your favorite meals in three easy steps. Order Now!!!" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/32x32.png">
<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/76x76.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/96x96.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/180x180.png">
<link rel="icon" type="image/png" sizes="196x196" href="/img/favicon/192x192.png">
<script type="text/javascript">var ajaxurl = "",ap_nonce 	= "a66e404814",ap_max_tags = "",disable_hover_card = "";disable_q_suggestion = "";var apMentions = [];
    var cachequeryMentions = [], itemsMentions,
    at_config = {
    at: "@",
    data: apMentions,
    //headerTpl: '<div class="atwho-header">Member List<small>↑&nbsp;↓&nbsp;</small></div>',
    insertTpl: "@${login}",
    displayTpl: '<li data-value="${login}">${name} <small>@${login}</small></li>',
    limit: 50,
    callbacks: {
       remoteFilter: function (query, render_view) {
           var thisVal = query,
           self = jQuery(this);
           if( !self.data("active") && thisVal.length >= 2 ){
               self.data("active", true);                            
               itemsMentions = cachequeryMentions[thisVal]
               if(typeof itemsMentions == "object"){
                        render_view(itemsMentions);
                    }
                    else
                    {                            
                        if (self.xhr) {
                            self.xhr.abort();
                        }
                        self.xhr = jQuery.getJSON(ajaxurl+"?ap_ajax_action=search_mentions&action=ap_ajax&ap_ajax_nonce="+ap_nonce,{
                            term: thisVal
                        }, function(data) {
                            cachequeryMentions[thisVal] = data
                            render_view(data);
                        });
                    }                            
                    self.data("active", false);                            
                }                    
            }
        }
    };
</script>
<script>
  window.Laravel = {!! json_encode([
  'csrfToken' => csrf_token(),
  ]) !!};
</script>
@include('partials._stylesheet')
<link rel="icon" href="/img/favicon/192x192.png" sizes="32x32" />
<link rel="icon" href="/img/favicon/192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="/img/favicon/192x192.png" />
<meta name="msapplication-TileImage" content="/img/favicon/192x192.png" />
<!--    <script src="{{asset('js/vuu2uob.js')}}"></script>  -->
<script>try{Typekit.load({ async: true });}catch(e){}</script>
