<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta charset="utf-8" />
    @if (file_exists(public_path("/theme/{$theme}/static/custom.css")))
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    @endif
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="{{$title}}" />
    <link rel="icon" href="/favicon.ico" />
    <link rel="stylesheet" href="/theme/aurora/static/phosphor-icons/duotone/style.css" />
    <link rel="stylesheet" href="/theme/aurora/static/phosphor-icons/regular/style.css" />
    
      <link rel="stylesheet" href="/theme/aurora/static/custom.css?v=20230509222354" />
    
    <style>
      html,
      body {
        height: 100%;
      }
      body {
        margin: 0;
      }
      .is-darkmode {
        background-color: #272827;
      }
      .hourglassx {
        width: 120px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }
      .hourglass {
        stroke-dasharray: 210;
        -webkit-animation: snake 3s linear infinite both;
        animation: snake 3s linear infinite both;
      }
      @-webkit-keyframes snake {
        0% {
          stroke-dashoffset: 0;
        }
        100% {
          stroke-dashoffset: 420;
        }
      }
      @keyframes  snake {
        0% {
          stroke-dashoffset: 0;
        }
        100% {
          stroke-dashoffset: 420;
        }
      }
    </style>
  <link href="/theme/aurora/static/css/n.b6e9aa0f.css" rel="stylesheet"><link href="/theme/aurora/static/css/app.20b2e6b0.css" rel="stylesheet"></head>
  <body>
    <noscript>
      <strong>Browser Disable JavaScript, Please Eanble.</strong>
    </noscript>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="hourglassx" x="0px" y="0px" viewBox="0 0 203 203" enable-background="new 0 0 203 203" xml:space="preserve">
      <g>
        <path
          class="hourglass"
          fill="none"
          stroke="#C0E5FA"
          stroke-width="5"
          stroke-linecap="round"
          stroke-miterlimit="10"
          d="M137.5,169.5h-72
		c0-72,63-73,63-126h-54C74.5,96.5,137.5,97.5,137.5,169.5z"
        />
        <path
          class="hourglass"
          fill="none"
          stroke="#74C2EE"
          stroke-width="5"
          stroke-linecap="round"
          stroke-miterlimit="10"
          d="M65.5,34.5h72
		c0,71-63,71-63,126h54C128.5,105.5,65.5,105.5,65.5,34.5z"
        />
      </g>
    </svg>
    <div id="app"></div> 

      <script>
      window.EnvConfig = {
        serverUrl: '{{$serverUrl}}',
        licenseKey: '{{$licenseKey}}',
        landPage: '{{$landPage}}',
        showRegInvite: '{{$showRegInvite}}',
        appTheme: '{{$appTheme}}',
        appColor: '{{$appColor}}',
        appName: '{{$appName}}',
        appDesc: `{{$appDesc}}`,
        appLogo: '{{$appLogo}}',
        appVersion: '{{$appVersion}}',
        staticUrl: '{{$staticUrl}}'
      }
      </script>

    <div id="k8n9u0c" style="display: none">{{$title}}</div>
    <script>
      window.langs = {}
      function isDarkMode() {
        var themeMedia = window.matchMedia('(prefers-color-scheme: dark)')
        var isDark = false
        var localMode = JSON.parse(localStorage.getItem('__AURORA__Darkmode') || '{}').value

        if (localMode !== undefined) {
          isDark = localMode === 'dark'
        } else if (EnvConfig.appTheme === 'dark') {
          isDark = true
        } else if (EnvConfig.appTheme === 'auto') {
          isDark = themeMedia.matches
        }
        return isDark
      }
      if (isDarkMode()) {
        document.body.classList.add('is-darkmode')
      }
      document.body.classList.add(EnvConfig.appColor)

      function getLocaleLang() {
        try {
          var str = localStorage.getItem('__AURORA__Language') || '{}'
          var res = JSON.parse(str).value
          if (res) {
            return res.substring(0, 2) + '-' + res.substring(2)
          }
        } catch (e) {
          return undefined
        }
      }
    </script>

    <script src="/theme/aurora/static/wasm_exec.js?v=20230509222354"></script>
    <script src="/theme/aurora/static/i18n/zh-CN.js?v=20230509222354"></script>
    <script src="/theme/aurora/static/i18n/zh-TW.js?v=20230509222354"></script>
    <script src="/theme/aurora/static/i18n/en-US.js?v=20230509222354"></script>
    <!-- built files will be auto injected -->
    
      <script src="/theme/aurora/static/custom.js?v=20230509222354"></script>
    
  <script>(function(e){function n(n){for(var t,r,f=n[0],d=n[1],o=n[2],h=0,i=[];h<f.length;h++)r=f[h],Object.prototype.hasOwnProperty.call(u,r)&&u[r]&&i.push(u[r][0]),u[r]=0;for(t in d)Object.prototype.hasOwnProperty.call(d,t)&&(e[t]=d[t]);k&&k(n);while(i.length)i.shift()();return a.push.apply(a,o||[]),c()}function c(){for(var e,n=0;n<a.length;n++){for(var c=a[n],t=!0,r=1;r<c.length;r++){var f=c[r];0!==u[f]&&(t=!1)}t&&(a.splice(n--,1),e=d(d.s=c[0]))}return e}var t={},r={runtime:0},u={runtime:0},a=[];function f(e){return d.p+"static/js/"+({}[e]||e)+"."+{"chunk-131c13e9":"8318419b","chunk-6942f3f6":"4f85267b","chunk-0105eebc":"cf9c4639","chunk-74278536":"b6c08dd8","chunk-ffde04e0":"ef74129e","chunk-1c70aef8":"0d943bc6","chunk-20baa6f8":"813166f6","chunk-2d0aa5b8":"c404707e","chunk-169230a3":"51a45d86","chunk-6184e6e2":"6ad05de5","chunk-34243db2":"829606f6","chunk-2d21d665":"7e99fb9d","chunk-48fc9e9a":"db34285b","chunk-4e68e31e":"71db130d","chunk-74c7d858":"bea01404","chunk-7ba2e1c9":"4eefb5ff","chunk-8646552a":"a35170bb","chunk-8c5d225c":"c54f04d9","chunk-2d0daec5":"b949f28f","chunk-fe2e11dc":"7e4b48df","chunk-39db48c4":"6a008e72","chunk-3fc7716f":"ff66e293","chunk-93df4642":"ae0b5743","chunk-f5d581a2":"3fa57ac4","chunk-dbf5619c":"4ec1c3ff"}[e]+".js"}function d(n){if(t[n])return t[n].exports;var c=t[n]={i:n,l:!1,exports:{}};return e[n].call(c.exports,c,c.exports,d),c.l=!0,c.exports}d.e=function(e){var n=[],c={"chunk-0105eebc":1,"chunk-74278536":1,"chunk-ffde04e0":1,"chunk-1c70aef8":1,"chunk-20baa6f8":1,"chunk-169230a3":1,"chunk-6184e6e2":1,"chunk-34243db2":1,"chunk-48fc9e9a":1,"chunk-4e68e31e":1,"chunk-74c7d858":1,"chunk-7ba2e1c9":1,"chunk-8646552a":1,"chunk-fe2e11dc":1,"chunk-39db48c4":1,"chunk-3fc7716f":1,"chunk-93df4642":1,"chunk-f5d581a2":1};r[e]?n.push(r[e]):0!==r[e]&&c[e]&&n.push(r[e]=new Promise((function(n,c){for(var t="static/css/"+({}[e]||e)+"."+{"chunk-131c13e9":"31d6cfe0","chunk-6942f3f6":"31d6cfe0","chunk-0105eebc":"af821085","chunk-74278536":"356d6ee8","chunk-ffde04e0":"849c317a","chunk-1c70aef8":"35ac871d","chunk-20baa6f8":"6f518162","chunk-2d0aa5b8":"31d6cfe0","chunk-169230a3":"9c5371bc","chunk-6184e6e2":"ee916e85","chunk-34243db2":"7cf5de6d","chunk-2d21d665":"31d6cfe0","chunk-48fc9e9a":"fc124b3a","chunk-4e68e31e":"0922692c","chunk-74c7d858":"59d4b738","chunk-7ba2e1c9":"28757872","chunk-8646552a":"ad105b38","chunk-8c5d225c":"31d6cfe0","chunk-2d0daec5":"31d6cfe0","chunk-fe2e11dc":"a686443c","chunk-39db48c4":"d6e75b87","chunk-3fc7716f":"d6e75b87","chunk-93df4642":"d6e75b87","chunk-f5d581a2":"16092d09","chunk-dbf5619c":"31d6cfe0"}[e]+".css",u=d.p+t,a=document.getElementsByTagName("link"),f=0;f<a.length;f++){var o=a[f],h=o.getAttribute("data-href")||o.getAttribute("href");if("stylesheet"===o.rel&&(h===t||h===u))return n()}var i=document.getElementsByTagName("style");for(f=0;f<i.length;f++){o=i[f],h=o.getAttribute("data-href");if(h===t||h===u)return n()}var k=document.createElement("link");k.rel="stylesheet",k.type="text/css",k.onload=n,k.onerror=function(n){var t=n&&n.target&&n.target.src||u,a=new Error("Loading CSS chunk "+e+" failed.\n("+t+")");a.code="CSS_CHUNK_LOAD_FAILED",a.request=t,delete r[e],k.parentNode.removeChild(k),c(a)},k.href=u;var l=document.getElementsByTagName("head")[0];l.appendChild(k)})).then((function(){r[e]=0})));var t=u[e];if(0!==t)if(t)n.push(t[2]);else{var a=new Promise((function(n,c){t=u[e]=[n,c]}));n.push(t[2]=a);var o,h=document.createElement("script");h.charset="utf-8",h.timeout=120,d.nc&&h.setAttribute("nonce",d.nc),h.src=f(e);var i=new Error;o=function(n){h.onerror=h.onload=null,clearTimeout(k);var c=u[e];if(0!==c){if(c){var t=n&&("load"===n.type?"missing":n.type),r=n&&n.target&&n.target.src;i.message="Loading chunk "+e+" failed.\n("+t+": "+r+")",i.name="ChunkLoadError",i.type=t,i.request=r,c[1](i)}u[e]=void 0}};var k=setTimeout((function(){o({type:"timeout",target:h})}),12e4);h.onerror=h.onload=o,document.head.appendChild(h)}return Promise.all(n)},d.m=e,d.c=t,d.d=function(e,n,c){d.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:c})},d.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},d.t=function(e,n){if(1&n&&(e=d(e)),8&n)return e;if(4&n&&"object"===typeof e&&e&&e.__esModule)return e;var c=Object.create(null);if(d.r(c),Object.defineProperty(c,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var t in e)d.d(c,t,function(n){return e[n]}.bind(null,t));return c},d.n=function(e){var n=e&&e.__esModule?function(){return e["default"]}:function(){return e};return d.d(n,"a",n),n},d.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},d.p="/theme/aurora/",d.oe=function(e){throw console.error(e),e};var o=window["webpackJsonp"]=window["webpackJsonp"]||[],h=o.push.bind(o);o.push=n,o=o.slice();for(var i=0;i<o.length;i++)n(o[i]);var k=h;c()})([]);</script><script type="text/javascript" src="/theme/aurora/static/js/n.2733fb7b.js"></script><script type="text/javascript" src="/theme/aurora/static/js/app.cf3ded62.js"></script></body>
</html>
