﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">
<!-- #region Jssor Slider Begin --><!-- Generator: Jssor Slider Maker --><!-- Source: http://www.jssor.com/demos/scrolling-logo-thumbnail-slider.slider --><!-- This is deep minimized demo which works independently. --><script>(function(h,g,c,j,d,k,l){/*! Jssor */
new(function(){});var e={od:function(a){return-c.cos(a*c.PI)/2+.5},Tc:function(a){return a},Hd:function(a){return-a*(a-2)}},f={pd:e.Tc};var b=new function(){var f=this,F=1,yb=2,fb=3,eb=4,jb=5,G,r=0,i=0,s=0,X=0,z=0,I=navigator,ob=I.appName,o=I.userAgent,p=parseFloat;function Ib(){if(!G){G={de:"ontouchstart"in h||"createTouch"in g};var a;if(I.pointerEnabled||(a=I.msPointerEnabled))G.Sc=a?"msTouchAction":"touchAction"}return G}function v(j){if(!r){r=-1;if(ob=="Microsoft Internet Explorer"&&!!h.attachEvent&&!!h.ActiveXObject){var e=o.indexOf("MSIE");r=F;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on X=@_jscript_version@*/;i=g.documentMode||s}else if(ob=="Netscape"&&!!h.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=yb;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=f>=0?eb:fb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=jb;i=p(a[2])}}}return j==r}function q(){return v(F)}function Q(){return q()&&(i<6||g.compatMode=="BackCompat")}function db(){return v(fb)}function ib(){return v(jb)}function vb(){return db()&&z>534&&z<535}function J(){v();return z>537||i>42||r==F&&i>=11}function O(){return q()&&i<9}function wb(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=l)return c=b})}return c}}function ub(b){var a;return function(c){a=a||wb(b)(c)||b;return a}}var K=ub("transform");function nb(a){return{}.toString.call(a)}var kb={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){kb["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(nb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function C(a){return a==j?String(a):kb[nb(a)]||"object"}function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function rb(b,a){setTimeout(b,a||0)}function H(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function tb(b,a){if(i<9)b.style.filter=a}f.ce=Ib;f.Vc=q;f.ae=db;f.Xd=J;f.cd=O;wb("transform");f.tc=function(){return i};f.nc=rb;function Y(a){a.constructor===Y.caller&&a.mc&&a.mc.apply(a,Y.caller.arguments)}f.mc=Y;f.Hb=function(a){if(f.Td(a))a=g.getElementById(a);return a};function t(a){return a||h.event}f.kc=t;f.Fb=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=f.ic(a);return a};f.hc=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function D(c,d,a){if(a!==l)c.style[d]=a==l?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&h.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function ab(b,c,a,d){if(a!==l){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?ab:D,b;if(a&4)b=ub(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Db(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Fb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=H(h,[i],d);tb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var L={T:["rotate"],H:["rotateX"],F:["rotateY"],ub:["skewX"],tb:["skewY"]};if(!J())L=B(L,{n:["scaleX",2],m:["scaleY",2],D:["translateZ",1]});function M(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.H;delete a.F;delete a.D}b.e(a,function(d,b){var a=L[b];if(a){var e=a[1]||0;if(N[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(J()){if(a.M||a.L||a.D)c+=" translate3d("+(a.M||0)+"px,"+(a.L||0)+"px,"+(a.D||0)+"px)";if(a.n==l)a.n=1;if(a.m==l)a.m=1;if(a.n!=1||a.m!=1)c+=" scale3d("+a.n+", "+a.m+", 1)"}}d.style[K(d)]=c}f.Hc=m("transformOrigin",4);f.Md=m("backfaceVisibility",4);f.Ld=m("transformStyle",4);f.Ud=m("perspective",6);f.he=m("perspectiveOrigin",4);f.ie=function(a,b){if(q()&&s<9||s<10&&Q())a.style.zoom=b==1?"":b;else{var c=K(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=H(e,[g],f);a.style[c]=d}};f.Ec=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!f.Ae(a,d))&&b(c)}};f.c=function(a,d,b,c){a=f.Hb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};f.gb=function(a,c,d,b){a=f.Hb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};f.Vb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};f.we=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};f.wb=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};f.mb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function mb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=mb(a,c,e,b);if(d)return d}}}f.v=mb;function gb(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=gb(a,c,d);if(b)return b}}}f.Id=gb;function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==l){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}f.nb=B;f.uc=function(a){return C(a)=="function"};f.Td=function(a){return C(a)=="string"};f.md=function(a){return!isNaN(p(a))&&isFinite(a)};f.e=n;function R(a){return g.createElement(a)}f.lb=function(){return R("DIV")};f.wc=function(){};function V(b,c,a){if(a==l)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return V(a,b)||V(a,"data-"+b)}f.ob=V;f.f=U;function x(b,a){if(a==l)return b.className;b.className=a}f.zc=x;f.ic=function(a){return a.parentNode};f.A=function(a){f.z(a,"none")};f.rb=function(a,b){f.z(a,b?"none":"")};f.rd=function(b,a){b.removeAttribute(a)};f.Dd=function(){return q()&&i<10};f.Cd=function(d,a){if(a)d.style.clip="rect("+c.round(a.j||a.o||0)+"px "+c.round(a.q)+"px "+c.round(a.r)+"px "+c.round(a.i||a.p||0)+"px)";else if(a!==l){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=H(g,f,"");b.Ib(d,e)}};f.K=function(){return+new Date};f.N=function(b,a){b.appendChild(a)};f.Lb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};f.Uc=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};f.xd=function(a,b){n(a,function(a){f.Uc(a,b)})};f.dc=function(a){f.xd(f.mb(a,d),a)};f.yd=function(a,b){var c=f.ic(a);b&1&&f.C(a,(f.k(c)-f.k(a))/2);b&2&&f.B(a,(f.l(c)-f.l(a))/2)};f.qd=function(b,a){return parseInt(b,a||10)};f.Ed=p;f.Ae=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return k}return b===a};function W(d,c,b){var a=d.cloneNode(!c);!b&&f.rd(a,"id");return a}f.ab=W;f.bb=function(e,g){var a=new Image;function b(e,d){f.gb(a,"load",b);f.gb(a,"abort",c);f.gb(a,"error",c);g&&g(a,d)}function c(a){b(a,d)}if(ib()&&i<11.6||!e)b(!e);else{f.c(a,"load",b);f.c(a,"abort",c);f.c(a,"error",c);a.src=e}};f.Fd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){f.bb(a.src,b)});b()};f.O=D;f.Bb=m("overflow");f.B=m("top",2);f.C=m("left",2);f.k=m("width",2);f.l=m("height",2);f.kd=m("marginLeft",2);f.nd=m("marginTop",2);f.u=m("position");f.z=m("display");f.s=m("zIndex",1);f.Nb=function(b,a,c){if(a!=l)Fb(b,a,c);else return Db(b)};f.Ib=function(a,b){if(b!=l)a.style.cssText=b;else return a.style.cssText};var T={W:f.Nb,j:f.B,i:f.C,xb:f.k,yb:f.l,db:f.u,Ne:f.z,eb:f.s};function w(g,k){var e=O(),b=J(),d=vb(),h=K(g);function i(b,d,a){var e=b.Q(u(-d/2,-a/2)),f=b.Q(u(d/2,-a/2)),g=b.Q(u(d/2,a/2)),h=b.Q(u(-d/2,a/2));b.Q(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.D||0,p=(a.H||0)%360,q=(a.F||0)%360,u=(a.T||0)%360,k=a.n,m=a.m,g=a.Me;if(k==l)k=1;if(m==l)m=1;if(g==l)g=1;if(e){n=0;p=0;q=0;g=0}var c=new Cb(a.M,a.L,n);c.H(p);c.F(q);c.vd(u);c.td(a.ub,a.tb);c.fd(k,m,g);if(b){c.fb(a.p,a.o);d.style[h]=c.wd()}else if(!X||X<9){var o="",j={x:0,y:0};if(a.E)j=i(c,a.E,a.R);f.nd(d,j.y);f.kd(d,j.x);o=c.Bd();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=H(s,[t],o);tb(d,r)}}w=function(e,c){c=c||{};var h=c.p,i=c.o,g;n(T,function(a,b){g=c[b];g!==l&&a(e,g)});f.Cd(e,c.a);if(!b){h!=l&&f.C(e,(c.Gc||0)+h);i!=l&&f.B(e,(c.Fc||0)+i)}if(c.Ad)if(d)rb(f.wb(j,M,e,c));else a(e,c)};f.kb=M;if(d)f.kb=w;if(e)f.kb=a;else if(!b)a=M;f.G=w;w(g,k)}f.kb=w;f.G=w;function Cb(i,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,k||0,o||0,1],h=c.sin,g=c.cos,l=c.tan;function f(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(j,(a||b).concat(c))}d.fd=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.fb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.H=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.F=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.vd=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.td=function(a,c){if(a||c){i=f(a);k=f(c);b=e([1,l(k),0,0,l(i),1,0,0,0,0,1,0,0,0,0,1])}};d.Q=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.wd=function(){return"matrix3d("+b.join(",")+")"};d.Bd=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.n=function(b,c){return a.Bc(b,c,0)};a.m=function(b,c){return a.Bc(b,0,c)};a.Bc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.Q=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var N={Gc:0,Fc:0,p:0,o:0,S:1,n:1,m:1,T:0,H:0,F:0,M:0,L:0,D:0,ub:0,tb:0};f.id=function(a){var c=a||{};if(a)if(b.uc(a))c={Pb:c};else if(b.uc(a.a))c.a={Pb:a.a};return c};f.ld=function(k,m,x,q,z,A,n){var a=m;if(k){a={};for(var g in m){var B=A[g]||1,w=z[g]||[0,1],f=(x-w[0])/w[1];f=c.min(c.max(f,0),1);f=f*B;var u=c.floor(f);if(f!=u)f-=u;var h=q.Pb||e.od,i,C=k[g],o=m[g];if(b.md(o)){h=q[g]||h;var y=h(f);i=C+o*y}else{i=b.nb({Ab:{}},k[g]);var v=q[g]||{};b.e(o.Ab||o,function(d,a){h=v[a]||v.Pb||h;var c=h(f),b=d*c;i.Ab[a]=b;i[a]+=b})}a[g]=i}var t=b.e(m,function(b,a){return N[a]!=l});t&&b.e(N,function(c,b){if(a[b]==l&&k[b]!==l)a[b]=k[b]});if(t){if(a.S)a.n=a.m=a.S;a.E=n.E;a.R=n.R;a.Ad=d}}if(m.a&&n.fb){var p=a.a.Ab,s=(p.j||0)+(p.r||0),r=(p.i||0)+(p.q||0);a.i=(a.i||0)+r;a.j=(a.j||0)+s;a.a.i-=r;a.a.q-=r;a.a.j-=s;a.a.r-=s}if(a.a&&b.Dd()&&!a.a.j&&!a.a.i&&!a.a.o&&!a.a.p&&a.a.q==n.E&&a.a.r==n.R)a.a=j;return a}};function n(){var a=this,d=[];function i(a,b){d.push({Qb:a,Rb:b})}function g(a,c){b.e(d,function(b,e){b.Qb==a&&b.Rb===c&&d.splice(e,1)})}a.ib=a.addEventListener=i;a.removeEventListener=g;a.g=function(a){var c=[].slice.call(arguments,1);b.e(d,function(b){b.Qb==a&&b.Rb.apply(h,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,g=0,m=0,D,l,f,e,p,w=[],x;function O(a){f+=a;e+=a;l+=a;g+=a;m+=a;y+=a}function t(o){var h=o;if(p&&(h>=e||h<=f))h=((h-f)%p+p)%p+f;if(!D||u||g!=h){var j=c.min(h,e);j=c.max(j,f);if(!D||u||j!=m){if(L){var k=(j-l)/(C||1);if(i.ve)k=1-k;var n=b.ld(M,L,k,G,F,H,i);if(x)b.e(n,function(b,a){x[a]&&x[a](J,b)});else b.G(J,n)}a.Sb(m-l,j-l);m=j;b.e(w,function(b,c){var a=o<g?w[w.length-c-1]:b;a.J(m-y)});var r=g,q=m;g=h;D=d;a.vb(r,q)}}}function E(a,b,d){b&&a.Tb(e);if(!d){f=c.min(f,a.gc()+y);e=c.max(e,a.Ub()+y)}w.push(a)}var r=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.msRequestAnimationFrame;if(b.ae()&&b.tc()<7)r=j;r=r||function(a){b.nc(a,i.oc)};function I(){if(q){var d=b.K(),e=c.min(d-A,i.bd),a=g+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}function s(h,i,j){if(!q){q=d;u=j;B=i;h=c.max(h,f);h=c.min(h,e);n=h;o=n<g?-1:1;a.Wc();A=b.K();r(I)}}function K(b){if(q){u=q=B=k;a.Nc();b&&b()}}a.ad=function(a,b,c){s(a?g+a:e,b,c)};a.Oc=s;a.V=K;a.Nd=function(a){s(a)};a.I=function(){return g};a.xc=function(){return n};a.jb=function(){return m};a.J=t;a.fb=function(a){t(g+a)};a.vc=function(){return q};a.dd=function(a){p=a};a.Tb=O;a.Xc=function(a,b){E(a,0,b)};a.Ob=function(a){E(a,1)};a.gc=function(){return f};a.Ub=function(){return e};a.vb=a.Wc=a.Nc=a.Sb=b.wc;a.Mb=b.K();i=b.nb({oc:16,bd:50},i);p=i.Rc;x=i.jd;f=l=z;e=z+C;H=i.hd||{};F=i.ed||{};G=b.id(i.Z)};new(function(){});var i=function(p,fc){var f=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.ee=function(){var b=a.jb(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{U:f,fe:d,db:e}};a.vb=function(b,a){var e=c.floor(a);if(e!=a&&a>b)e++;Tb(e,d);f.g(i.re,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{Rc:r});b.e(C,function(b){D&1&&b.dd(r);a.Ob(b);b.Tb(kb/bc)})}function zc(){var a=this,b=Ub.P;m.call(a,-1,2,{Z:e.Tc,jd:{db:Zb},Rc:r},b,{db:1},{db:-2});a.Cb=b}function mc(o,n){var b=this,e,g,h,l,c;m.call(b,-1e8,2e8,{bd:100});b.Wc=function(){M=d;R=j;f.g(i.Ce,t(w.I()),w.I())};b.Nc=function(){M=k;l=k;var a=w.ee();f.g(i.Wd,t(w.I()),w.I());!a.db&&Dc(a.fe,s)};b.vb=function(i,f){var b;if(l)b=c;else{b=g;if(h){var d=f/h;b=a.Pc(d)*(g-e)+e}}w.J(b)};b.sb=function(a,d,c,f){e=a;g=d;h=c;w.J(a);b.J(0);b.Oc(c,f)};b.je=function(a){l=d;c=a;b.ad(a,j,d)};b.ze=function(a){c=a};w=new Bc;w.Xc(o);w.Xc(n)}function oc(){var c=this,a=Xb();b.s(a,0);b.O(a,"pointerEvents","none");c.P=a;c.zb=function(){b.A(a);b.dc(a)}}function xc(o,g){var e=this,q,L,v,l,y=[],x,B,W,G,Q,F,h,w,p;m.call(e,-u,u+1,{});function E(a){q&&q.Zc();T(o,a,0);F=d;q=new I.hb(o,I,b.Ed(b.f(o,"idle"))||lc);q.J(0)}function Z(){q.Mb<I.Mb&&E()}function M(p,r,o){if(!G){G=d;if(l&&o){var h=o.width,c=o.height,n=h,m=c;if(h&&c&&a.Y){if(a.Y&3&&(!(a.Y&4)||h>K||c>J)){var j=k,q=K/J*c/h;if(a.Y&1)j=q>1;else if(a.Y&2)j=q<1;n=j?h*J/c:K;m=j?J:c*K/h}b.k(l,n);b.l(l,m);b.B(l,(J-m)/2);b.C(l,(K-n)/2)}b.u(l,"absolute");f.g(i.xe,g)}}b.A(r);p&&p(e)}function Y(b,c,d,f){if(f==R&&s==g&&N)if(!Cc){var a=t(b);A.ge(a,g,c,e,d);c.ue();U.Tb(a-U.gc()-1);U.J(a);z.sb(b,b,0)}}function bb(b){if(b==R&&s==g){if(!h){var a=j;if(A)if(A.U==g)a=A.be();else A.zb();Z();h=new vc(o,g,a,q);h.Mc(p)}!h.vc()&&h.Wb()}}function S(d,f,l){if(d==g){if(d!=f)C[f]&&C[f].se();else!l&&h&&h.te();p&&p.Lc();var m=R=b.K();e.bb(b.wb(j,bb,m))}else{var k=c.min(g,d),i=c.max(g,d),o=c.min(i-k,k+r-i),n=u+a.oe-1;(!Q||o<=n)&&e.bb()}}function db(){if(s==g&&h){h.V();p&&p.ne();p&&p.me();h.Yc()}}function eb(){s==g&&h&&h.V()}function ab(a){!P&&f.g(i.ke,g,a)}function O(){p=w.pInstance;h&&h.Mc(p)}e.bb=function(c,a){a=a||v;if(y.length&&!G){b.rb(a);if(!W){W=d;f.g(i.Jd,g);b.e(y,function(a){if(!b.ob(a,"src")){a.src=b.f(a,"src2");b.z(a,a["display-origin"])}})}b.Fd(y,l,b.wb(j,M,c,a))}else M(c,a)};e.gd=function(){var h=g;if(a.bc<0)h-=r;var d=h+a.bc*tc;if(D&2)d=t(d);if(!(D&1)&&!ib)d=c.max(0,c.min(d,r-u));if(d!=g){if(A){var e=A.Vd(r);if(e){var i=R=b.K(),f=C[t(d)];return f.bb(b.wb(j,Y,d,f,e,i),v)}}cb(d)}};e.ac=function(){S(g,g,d)};e.se=function(){p&&p.ne();p&&p.me();e.Qc();h&&h.Rd();h=j;E()};e.ue=function(){b.A(o)};e.Qc=function(){b.rb(o)};e.Zd=function(){p&&p.Lc()};function T(a,c,e){if(b.ob(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.ob(a,"src")){Q=d;a["display-origin"]=b.z(a);b.A(a)}}b.cd()&&b.s(a,(b.s(a)||0)+1)}var f=b.mb(a);b.e(f,function(f){var h=f.tagName,i=b.f(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)O();else b.c(w,"dataavailable",O)}if(i=="caption"){if(c){b.Hc(f,b.f(f,"to"));b.Md(f,b.f(f,"bf"));b.f(f,"3d")&&b.Ld(f,"preserve-3d")}else if(!b.Vc()){var g=b.ab(f,k,d);b.Lb(g,f,a);b.Uc(f,a);f=g;c=d}}else if(!F&&!e&&!l){if(h=="A"){if(b.f(f,"u")=="image")l=b.Id(f,"IMG");else l=b.v(f,"image",d);if(l){x=f;b.z(x,"block");b.G(x,V);B=b.ab(x,d);b.u(x,"relative");b.Nb(B,0);b.O(B,"backgroundColor","#000")}}else if(h=="IMG"&&b.f(f,"u")=="image")l=f;if(l){l.border=0;b.G(l,V)}}T(f,c,e+1)})}e.Sb=function(c,b){var a=u-b;Zb(L,a)};e.U=g;n.call(e);b.Ud(o,b.f(o,"p"));b.he(o,b.f(o,"po"));var H=b.v(o,"thumb",d);if(H){b.ab(H);b.A(H)}b.rb(o);v=b.ab(gb);b.s(v,1e3);b.c(o,"click",ab);E(d);e.Yd=l;e.Kc=B;e.Cb=L=o;b.N(L,v);f.ib(203,S);f.ib(28,eb);f.ib(24,db)}function vc(y,g,p,q){var a=this,n=0,u=0,h,j,e,c,l,t,r,o=C[g];m.call(a,0,0);function v(){b.dc(L);cc&&l&&o.Kc&&b.N(L,o.Kc);b.rb(L,!l&&o.Yd)}function w(){a.Wb()}function x(b){r=b;a.V();a.Wb()}a.Wb=function(){var b=a.jb();if(!B&&!M&&!r&&s==g){if(!b){if(h&&!l){l=d;a.Yc(d);f.g(i.Sd,g,n,u,h,c)}v()}var k,p=i.fc;if(b!=c)if(b==e)k=c;else if(b==j)k=e;else if(!b)k=j;else k=a.xc();f.g(p,g,b,n,j,e,c);var m=N&&(!E||F);if(b==c)(e!=c&&!(E&12)||m)&&o.gd();else(m||b!=e)&&a.Oc(k,w)}};a.te=function(){e==c&&e==a.jb()&&a.J(j)};a.Rd=function(){A&&A.U==g&&A.zb();var b=a.jb();b<c&&f.g(i.fc,g,-b-1,n,j,e,c)};a.Yc=function(a){p&&b.Bb(lb,a&&p.qc.De?"":"hidden")};a.Sb=function(b,a){if(l&&a>=h){l=k;v();o.Qc();A.zb();f.g(i.Qd,g,n,u,h,c)}f.g(i.Pd,g,a,n,j,e,c)};a.Mc=function(a){if(a&&!t){t=a;a.ib($JssorPlayer$.sd,x)}};p&&a.Ob(p);h=a.Ub();a.Ob(q);j=h+q.Ic;e=h+q.Cc;c=a.Ub()}function Kb(a,c,d){b.C(a,c);b.B(a,d)}function Zb(c,b){var a=x>0?x:fb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){qb=M;Ib=z.xc();G=w.I()}function gc(){Pb();if(B||!F&&E&12){z.V();f.g(i.ye)}}function ec(f){if(!B&&(F||!(E&12))&&!z.vc()){var d=w.I(),b=c.ceil(G);if(f&&c.abs(H)>=a.Ac){b=c.ceil(d);b+=jb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&qb)z.Nd(Ib);else if(d==b){tb.Zd();tb.ac()}else z.sb(d,b,e*Vb)}}function Hb(a){!b.f(b.Fb(a),"nodrag")&&b.Vb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.kc(a);var l=b.Fb(a);if(!O&&!b.f(l,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=d;yb=k;R=j;b.c(g,c?"touchmove":"mousemove",Bb);b.K();P=0;gc();if(!qb)x=0;if(c){var h=a.touches[0];ub=h.clientX;vb=h.clientY}else{var e=b.hc(a);ub=e.x;vb=e.y}H=0;hb=0;jb=0;f.g(i.Be,t(G),G,a)}}function Bb(e){if(B){e=b.kc(e);var f;if(e.type!="mousemove"){var l=e.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.hc(e);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||fb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(ob&&x==1&&c.abs(k)-c.abs(j)>3)yb=d}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-hb<-2)jb=0;else if(H-hb>2)jb=-1;hb=H;H=a;sb=G-H/i/(Y||1);if(H&&x&&!yb){b.Vb(e);if(!M)z.je(sb);else z.ze(sb)}}}}}function bb(){qc();if(B){B=k;b.K();b.gb(g,"mousemove",Bb);b.gb(g,"touchmove",Bb);P=H;z.V();var a=w.I();f.g(i.qe,t(a),a,t(G),G);E&12&&Pb();ec(d)}}function jc(c){if(P){b.we(c);var a=b.Fb(c);while(a&&v!==a){a.tagName=="A"&&b.Vb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);tb=C[s];Tb(a);return s}function Dc(a,b){x=0;Jb(a);f.g(i.le,t(a),b)}function Tb(a,c){wb=a;b.e(S,function(b){b.Zb(t(a),a,c)})}function sc(){var b=i.yc||0,a=X;if(ob)a&1&&(a&=1);i.yc|=a;return O=a&~b}function qc(){if(O){i.yc&=~X;O=0}}function Xb(){var a=b.lb();b.G(a,V);b.u(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=k}else if(D&2){b=t(b+wb);d=k}cb(b,a.pb,d)}function xb(){b.e(S,function(a){a.Yb(a.qb.Je<=F)})}function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].ac()}}}function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}function ic(){V={xb:K,yb:J,j:0,i:0};b.e(T,function(a){b.G(a,V);b.u(a,"absolute");b.Bb(a,"hidden");b.A(a)});b.G(gb,V)}function ab(b,a){cb(b,a,d)}function cb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.Jc)){M=d;B=k;z.V();if(f==l)f=Vb;var e=Cb.jb(),b=g;if(j){b=e+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var i=(b-e)%r;b=e+i;var h=e==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.sb(e,b,h||1)}}f.ad=function(){if(!N){N=d;C[s]&&C[s].ac()}};function W(){return b.k(y||p)}function nb(){return b.l(y||p)}f.E=W;f.R=nb;function Eb(c,d){if(c==l)return b.k(p);if(!y){var a=b.lb(g);b.zc(a,b.zc(p));b.Ib(a,b.Ib(p));b.z(a,"block");b.u(a,"relative");b.B(a,0);b.C(a,0);b.Bb(a,"visible");y=b.lb(g);b.u(y,"absolute");b.B(y,0);b.C(y,0);b.k(y,b.k(p));b.l(y,b.l(p));b.Hc(y,"0 0");b.N(y,a);var h=b.mb(p);b.N(p,y);b.O(p,"backgroundImage","");b.e(h,function(c){b.N(b.f(c,"noscale")?p:a,c);b.f(c,"autocenter")&&Lb.push(c)})}Y=c/(d?b.l:b.k)(y);b.ie(y,Y);var f=d?Y*W():c,e=d?c:Y*nb();b.k(p,f);b.l(p,e);b.e(Lb,function(a){var c=b.qd(b.f(a,"autocenter"));b.yd(a,c)})}f.pe=Eb;n.call(f);f.P=p=b.Hb(p);var a=b.nb({Y:0,oe:1,cc:1,Xb:0,Jb:k,pc:1,cb:d,Jc:d,bc:1,ec:3e3,Db:1,pb:500,Pc:e.Hd,Ac:20,jc:0,X:1,rc:0,Od:1,Gb:1,sc:1},fc);a.cb=a.cb&&b.Xd();if(a.Dc!=l)a.ec=a.Dc;if(a.Kd!=l)a.rc=a.Kd;var fb=a.Gb&3,tc=(a.Gb&4)/-4||1,mb=a.Fe,I=b.nb({hb:q,cb:a.cb},a.Ke);I.Eb=I.Eb||I.Ie;var Fb=a.He,Z=a.Le,eb=a.Ge,Q=!a.Od,y,v=b.v(p,"slides",Q),gb=b.v(p,"loading",Q)||b.lb(g),Nb=b.v(p,"navigator",Q),dc=b.v(p,"arrowleft",Q),ac=b.v(p,"arrowright",Q),Mb=b.v(p,"thumbnavigator",Q),pc=b.k(v),nc=b.l(v),V,T=[],uc=b.mb(v);b.e(uc,function(a){if(a.tagName=="DIV"&&!b.f(a,"u"))T.push(a);else b.cd()&&b.s(a,(b.s(a)||0)+1)});var s=-1,wb,tb,r=T.length,K=a.lc||pc,J=a.ud||nc,Wb=a.jc,zb=K+Wb,Ab=J+Wb,bc=fb&1?zb:Ab,u=c.min(a.X,r),lb,x,O,yb,S=[],Qb,Sb,Ob,cc,Cc,N,E=a.Db,lc=a.ec,Vb=a.pb,rb,ib,kb,Rb=u<r,D=Rb?a.pc:0,X,P,F=1,M,B,R,ub=0,vb=0,H,hb,jb,Cb,w,U,z,Ub=new oc,Y,Lb=[];if(r){if(a.cb)Kb=function(a,c,d){b.kb(a,{M:c,L:d})};N=a.Jb;f.qb=fc;ic();b.ob(p,"jssor-slider",d);b.s(v,b.s(v)||0);b.u(v,"absolute");lb=b.ab(v,d);b.Lb(lb,v);if(mb){cc=mb.Ee;rb=mb.hb;ib=u==1&&r>1&&rb&&(!b.Vc()||b.tc()>=8)}kb=ib||u>=r||!(D&1)?0:a.rc;X=(u>1||kb?fb:-1)&a.sc;var Gb=v,C=[],A,L,Db=b.ce(),ob=Db.de,G,qb,Ib,sb;Db.Sc&&b.O(Gb,Db.Sc,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(ib)A=new rb(Ub,K,J,mb,ob);b.N(lb,U.Cb);b.Bb(v,"hidden");L=Xb();b.O(L,"backgroundColor","#000");b.Nb(L,0);b.Lb(L,Gb.firstChild,Gb);for(var db=0;db<T.length;db++){var wc=T[db],yc=new xc(wc,db);C.push(yc)}b.A(gb);Cb=new Ac;z=new mc(Cb,U);b.c(v,"click",jc,d);b.c(p,"mouseout",b.Ec(hc,p));b.c(p,"mouseover",b.Ec(Ec,p));if(X){b.c(v,"mousedown",Yb);b.c(v,"touchstart",rc);b.c(v,"dragstart",Hb);b.c(v,"selectstart",Hb);b.c(g,"mouseup",bb);b.c(g,"touchend",bb);b.c(g,"touchcancel",bb);b.c(h,"blur",bb)}E&=ob?10:5;if(Nb&&Fb){Qb=new Fb.hb(Nb,Fb,W(),nb());S.push(Qb)}if(Z&&dc&&ac){Z.pc=D;Z.X=u;Sb=new Z.hb(dc,ac,Z,W(),nb());S.push(Sb)}if(Mb&&eb){eb.Xb=a.Xb;Ob=new eb.hb(Mb,eb);S.push(Ob)}b.e(S,function(a){a.Kb(r,C,gb);a.ib(o.zd,kc)});b.O(p,"visibility","visible");Eb(W());xb();a.cc&&b.c(g,"keydown",function(b){if(b.keyCode==37)ab(-a.cc);else b.keyCode==39&&ab(a.cc)});var pb=a.Xb;if(!(D&1))pb=c.max(0,c.min(pb,r-u));z.sb(pb,pb,0)}};i.ke=21;i.Be=22;i.qe=23;i.Ce=24;i.Wd=25;i.Jd=26;i.xe=27;i.ye=28;i.re=202;i.le=203;i.Sd=206;i.Qd=207;i.Pd=208;i.fc=209;var o={zd:1};function q(e,d,c){var a=this;m.call(a,0,c);a.Zc=b.wc;a.Ic=0;a.Cc=c}jssor_1_slider_init=function(){var g={Jb:d,Dc:0,bc:4,pb:1600,Pc:f.pd,Db:4,lc:140,X:7},e=new i("jssor_1",g);function a(){var b=e.P.parentNode.clientWidth;if(b){b=c.min(b,809);e.pe(b)}else h.setTimeout(a,30)}a();b.c(h,"load",a);b.c(h,"resize",a);b.c(h,"orientationchange",a)}})(window,document,Math,null,true,false)</script><div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;"><!-- Loading Screen --><div data-u="loading" style="position: absolute; top: 0px; left: 0px;"><div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div><div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div></div><div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden;"><div style="display: none;"><img data-u="image" src="img/amazon.jpg" /></div><div style="display: none;"><img data-u="image" src="img/android.jpg" /></div><div style="display: none;"><img data-u="image" src="img/bitly.jpg" /></div><div style="display: none;"><img data-u="image" src="img/blogger.jpg" /></div><div style="display: none;"><img data-u="image" src="img/dnn.jpg" /></div><div style="display: none;"><img data-u="image" src="img/drupal.jpg" /></div><div style="display: none;"><img data-u="image" src="img/ebay.jpg" /></div><div style="display: none;"><img data-u="image" src="img/facebook.jpg" /></div><div style="display: none;"><img data-u="image" src="img/google.jpg" /></div><div style="display: none;"><img data-u="image" src="img/ibm.jpg" /></div><div style="display: none;"><img data-u="image" src="img/ios.jpg" /></div><div style="display: none;"><img data-u="image" src="img/joomla.jpg" /></div><div style="display: none;"><img data-u="image" src="img/linkedin.jpg" /></div><div style="display: none;"><img data-u="image" src="img/mac.jpg" /></div><div style="display: none;"><img data-u="image" src="img/magento.jpg" /></div><div style="display: none;"><img data-u="image" src="img/pinterest.jpg" /></div><div style="display: none;"><img data-u="image" src="img/samsung.jpg" /></div><div style="display: none;"><img data-u="image" src="img/twitter.jpg" /></div><div style="display: none;"><img data-u="image" src="img/windows.jpg" /></div><div style="display: none;"><img data-u="image" src="img/wordpress.jpg" /></div><div style="display: none;"><img data-u="image" src="img/youtube.jpg" /></div><a data-u="add" href="http://www.jssor.com/demos/scrolling-logo-thumbnail-slider.slider" style="display:none">Scrolling Logo Thumbnail Slider</a></div></div><script>jssor_1_slider_init();</script><!-- #endregion Jssor Slider End --></body>
</html>
