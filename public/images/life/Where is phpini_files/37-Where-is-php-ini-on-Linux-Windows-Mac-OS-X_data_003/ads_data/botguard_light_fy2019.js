(function(){'use strict';var e=this||self;function f(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b}var h=Date.now||function(){return+new Date};var l=(a,b,c,d,g)=>{if(g)c=a+("&"+b+"="+c);else{{var k="&"+b+"=";let m=a.indexOf(k);0>m?c=a+k+c:(m+=k.length,k=a.indexOf("&",m),c=0<=k?a.substring(0,m)+c+a.substring(k):a.substring(0,m)+c)}}return 2E3<c.length?void 0!==d?l(a,b,d,void 0,g):a:c};var n=document,p=window;function q(){this.a="";this.c=r}q.prototype.f=!0;q.prototype.b=function(){return this.a.toString()};var t=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;function u(a){if(a instanceof q)return a;a="object"==typeof a&&a.f?a.b():String(a);t.test(a)||(a="about:invalid#zClosurez");return v(a)}var r={};function v(a){var b=new q;b.a=a;return b}v("about:blank");function w(a){w[" "](a);return a}w[" "]=function(){};function x(a,b,c){if("array"==f(b))for(var d=0;d<b.length;d++)x(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))};function y(){var a=z;try{var b;if(b=!!a&&null!=a.location.href)a:{try{w(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}};var A=/^((market|itms|intent|itms-appss):\/\/)/i;var B=!!window.google_async_iframe_id;let z=B&&window.parent||window;let C=null;class D{constructor(a,b,c,d=0,g){this.label=a;this.type=b;this.value=c;this.duration=d;this.uniqueId=Math.random();this.slotId=g}};const E=e.performance,F=!!(E&&E.mark&&E.measure&&E.clearMarks),G=function(a){let b=!1,c;return function(){b||(c=a(),b=!0);return c}}(()=>{var a;if(a=F){var b;if(null===C){C="";try{a="";try{a=e.top.location.hash}catch(c){a=e.location.hash}a&&(C=(b=a.match(/\bdeid=([\d,]+)/))?b[1]:"")}catch(c){}}b=C;a=!!b.indexOf&&0<=b.indexOf("1337")}return a});function H(a){a&&E&&G()&&(E.clearMarks(`goog_${a.label}_${a.uniqueId}_start`),E.clearMarks(`goog_${a.label}_${a.uniqueId}_end`))}class I{constructor(a,b){this.a=[];this.c=b||e;let c=null;b&&(b.google_js_reporting_queue=b.google_js_reporting_queue||[],this.a=b.google_js_reporting_queue,c=b.google_measure_js_timing);this.b=G()||(null!=c?c:Math.random()<a)}start(a,b){if(!this.b)return null;var c=(c=e.performance)&&c.now?c.now():null;c||(c=(c=e.performance)&&c.now&&c.timing?Math.floor(c.now()+c.timing.navigationStart):h());a=new D(a,b,c);b=`goog_${a.label}_${a.uniqueId}_start`;E&&G()&&E.mark(b);return a}};if(B&&!y()){let a="."+n.domain;try{for(;2<a.split(".").length&&!y();)n.domain=a=a.substr(a.indexOf(".")+1),z=window.parent}catch(b){}y()||(z=window)}const J=z,K=new I(1,J);var L=()=>{J.google_measure_js_timing||(K.b=!1,K.a!=K.c.google_js_reporting_queue&&(G()&&Array.prototype.forEach.call(K.a,H,void 0),K.a.length=0))};if("complete"==J.document.readyState)L();else if(K.b){var M=()=>{L()};J.addEventListener&&J.addEventListener("load",M,!1)}var N=()=>a=>{var b=("http:"===p.location.protocol?"http:":"https:")+"//pagead2.googlesyndication.com/pagead/gen_204";a={id:"unsafeurl",ctx:600,url:a};var c=[];for(d in a)x(d,a[d],c);var d=c.join("&");if(d){a=b.indexOf("#");0>a&&(a=b.length);c=b.indexOf("?");if(0>c||c>a){c=a;var g=""}else g=b.substring(c+1,a);b=[b.substr(0,c),g,b.substr(a)];a=b[1];b[1]=d?a?a+"&"+d:d:a;b=b[0]+(b[1]?"?"+b[1]:"")+b[2]}navigator.sendBeacon&&navigator.sendBeacon(b,"")};window.bgz=a=>{if(a=document.getElementById(a)){var b=N();var c=l(a.href,"bg","10");c=c instanceof q||!A.test(c)?c:v(c);"about:invalid#zClosurez"===(c instanceof q?c:u(c)).b()&&b(String(c));b=c instanceof q?c:u(c);a.href=b instanceof q&&b.constructor===q&&b.c===r?b.a:"type_error:SafeUrl"}};}).call(this);
