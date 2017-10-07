<?php

	function url_origin( $s, $use_forwarded_host = false )
{
    $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
    $sp       = strtolower( $s['SERVER_PROTOCOL'] );
    $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
    $port     = $s['SERVER_PORT'];
    $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
    $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
    $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}

function full_url( $s, $use_forwarded_host = false )
{
    return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
}

$absolute_url = full_url( $_SERVER );
echo $absolute_url;

?>


<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgenjour.com%2Fpost.php%3Fpost_id%3D18&amp;src=sdkpreparse" role="button" target="_blank" class="btn btn-primary"><i class="fa fa-facebook " aria-hidden="true"></i></a>

<a href="" role="button" class="btn btn-danger"><i class="fa fa-google-plus  " aria-hidden="true"></i></a>

<a href="" role="button" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i></a>

<a href="" role="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>





<div class="fb-share-button" data-href="http://genjour.com/post.php?post_id=18" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgenjour.com%2Fpost.php%3Fpost_id%3D18&amp;src=sdkpreparse">Share</a></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=585527498502433";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>