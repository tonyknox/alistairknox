(function(){'use strict';var h=this||self;function k(a,b,c){return a.call.apply(a.bind,arguments)}function m(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}function n(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?n=k:n=m;return n.apply(null,arguments)}var p=Date.now||function(){return+new Date};function q(a,b){a=a.split(".");var c=h;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b};function r(a){let b=!1,c;return function(){b||(c=a(),b=!0);return c}};function t(a){t[" "](a);return a}t[" "]=function(){};var u=document;function w(a,b){if(!a||!b)return!1;if(a.contains&&1==b.nodeType)return a==b||a.contains(b);if("undefined"!=typeof a.compareDocumentPosition)return a==b||!!(a.compareDocumentPosition(b)&16);for(;b&&a!=b;)b=b.parentNode;return b==a};function x(){var a=y;try{var b;if(b=!!a&&null!=a.location.href)a:{try{t(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}};var z={capture:!0},A=r(function(){let a=!1;try{const b=Object.defineProperty({},"passive",{get:function(){a=!0}});h.addEventListener("test",null,b)}catch(b){}return a});function B(a){return a?a.passive&&A()?a:a.capture||!1:!1}function D(a,b,c,d){a.addEventListener&&a.addEventListener(b,c,B(d))};var E=!!window.google_async_iframe_id;let y=E&&window.parent||window;let F=null;class G{constructor(a,b,c,d=0,e){this.label=a;this.type=b;this.value=c;this.duration=d;this.uniqueId=Math.random();this.slotId=e}};const I=h.performance,J=!!(I&&I.mark&&I.measure&&I.clearMarks),K=r(()=>{var a;if(a=J){var b;if(null===F){F="";try{a="";try{a=h.top.location.hash}catch(c){a=h.location.hash}a&&(F=(b=a.match(/\bdeid=([\d,]+)/))?b[1]:"")}catch(c){}}b=F;a=!!b.indexOf&&0<=b.indexOf("1337")}return a});function L(a){a&&I&&K()&&(I.clearMarks(`goog_${a.label}_${a.uniqueId}_start`),I.clearMarks(`goog_${a.label}_${a.uniqueId}_end`))}class aa{constructor(a,b){this.a=[];this.c=b||h;let c=null;b&&(b.google_js_reporting_queue=b.google_js_reporting_queue||[],this.a=b.google_js_reporting_queue,c=b.google_measure_js_timing);this.b=K()||(null!=c?c:Math.random()<a)}start(a,b){if(!this.b)return null;var c=(c=h.performance)&&c.now?c.now():null;c||(c=(c=h.performance)&&c.now&&c.timing?Math.floor(c.now()+c.timing.navigationStart):p());a=new G(a,b,c);b=`goog_${a.label}_${a.uniqueId}_start`;I&&K()&&I.mark(b);return a}};var M;if(E&&!x()){let a="."+u.domain;try{for(;2<a.split(".").length&&!x();)u.domain=a=a.substr(a.indexOf(".")+1),y=window.parent}catch(b){}x()||(y=window)}M=y;const N=new aa(1,M);var O=()=>{M.google_measure_js_timing||(N.b=!1,N.a!=N.c.google_js_reporting_queue&&(K()&&Array.prototype.forEach.call(N.a,L,void 0),N.a.length=0))};"complete"==M.document.readyState?O():N.b&&D(M,"load",()=>{O()});var P=(a,b,c,d,e)=>{window.css?window.css(b,c,d,e,void 0):a&&(b=a.href,e?d=b+("&"+c+"="+d):(e="&"+c+"=",c=b.indexOf(e),0>c?d=b+e+d:(c+=e.length,e=b.indexOf("&",c),d=0<=e?b.substring(0,c)+d+b.substring(e):b.substring(0,c)+d)),b=2E3<d.length?b:d,a.href=b)};let Q=!1,R=!1,S=null;var ba=()=>{document.addEventListener&&D(document,"click",a=>{S=a},z)},ca=()=>{const a=S;return a?Q||R?!1:(a.preventDefault?a.preventDefault():a.returnValue=!1,!0):!1},da=()=>{D(document,"mousedown",()=>{Q=!0});D(document,"keydown",()=>{R=!0});ba()};var ea=(a,b=17)=>{if(0>b||parseInt(b,10)!==b)b=17;T(a,b)},fa=(a,b)=>{T(a,b||1)},ha=a=>{T(a,2)},ia=(a,b)=>{T(a,b||0)};let U={},V=!0;var T=(a,b)=>{var c;if(c=V)void 0!==U[a]||(U[a]=[]),(c=U[a][b])||(U[a][b]=!0);c||P(document.getElementById(a),a,"nb",b,V)};function W(a,b,c){const d=a.id||"";P(a,d,"nx",b);P(a,d,"ny",c)}class ja{constructor(){this.a=this.b=null;u.addEventListener&&u.addEventListener("mousedown",n(this.c,this),!0);D(u,"DOMContentLoaded",n(function(){this.a=u.getElementById("common_15click_anchor")},this))}c(a){this.b=a}};const ka=[0,2,1];let X=null;var Y=a=>{if(a){var b;{const c=window.event||X;c?((b=c.which?1<<ka[c.which-1]:c.button)&&c.shiftKey&&(b|=8),b&&c.altKey&&(b|=16),b&&c.ctrlKey&&(b|=32)):b=null}b&&P(a,a.id,"mb",b)}};document.addEventListener&&document.addEventListener("mousedown",a=>{X=a},!0);window.mb=Y;var Z={},la=(a,b=2)=>{1!=b&&(void 0!==Z[a]?Z[a]++:Z[a]=1);0!=b&&P(document.getElementById(a),a,"nm",Z[a])};q("init_ssb",(a,b,c,d,e,ma)=>{a&&(da(),q("accbk",ca));b&&(ma&&(V=!1),q("cla",ea),q("cll",fa),q("clb",ha),q("clh",ia));if(c){const C=new ja;q("xy",(g,H,l)=>{{l=l||H;const v=g||C.b;if(v&&H&&l&&!w(C.a,v.target)){g=u.querySelector("a.one-point-five-click.rhbutton");var f;(f=!g)||(g.classList?f=g.classList.contains("preexpanded"):(g.classList?f=g.classList:(f=g.className,f="string"==typeof f&&f.match(/\S+/g)||[]),f=0<=Array.prototype.indexOf.call(f,"preexpanded",void 0)));if(f||!w(g,v.target))f=Math.round(v.clientX-l.offsetLeft),l=Math.round(v.clientY-l.offsetTop),W(H,f,l),C.a&&W(C.a,f,l),g&&W(g,f,l)}}})}d&&q("mb",Y);e&&q("ss",la)});}).call(this);