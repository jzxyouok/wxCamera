<?php 
include('ddconfig/wxconfig.php');

$callbackURL = urlencode("http://numberwolf.top/wxCamera/ddbe/api.php?action=getuserinfo");

header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=".AppID."&redirect_uri=$callbackURL&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect");





