!function(e){e.fn.maskMoney=function(n){return n=e.extend({symbol:"US$",decimal:".",precision:2,thousands:",",allowZero:!1,showSymbol:!1},n),n.symbol=n.symbol+" ",this.each(function(){function r(e){e=e||window.event;var n=e.charCode||e.keyCode||e.which;if(void 0!=n){if(8==n){o(e);var r=u.val().substring(0,u.val().length-1);return u.val(a(r)),!1}if(9==n)return!0;if(48>n||n>57)return o(e),!0;if(u.val().length==u.attr("maxlength"))return!1;var t=String.fromCharCode(n);o(e),u.val(a(u.val()+t))}}function t(e){if(""==u.val()?u.val(l(s())):u.val(l(u.val())),this.createTextRange){var n=this.createTextRange();n.collapse(!1),n.select()}}function i(t){e.browser.msie&&r(t),u.val()==l(s())?n.allowZero||u.val(""):u.val(u.val().replace(n.symbol,""))}function o(e){e.preventDefault?e.preventDefault():e.returnValue=!1}function a(e){e=e.replace(n.symbol,"");var r="0123456789",t=e.length,i="",o="";0==t&&(o="0.00");for(var a=0;t>a&&("0"==e.charAt(a)||e.charAt(a)==n.decimal);a++);for(;t>a;a++)-1!=r.indexOf(e.charAt(a))&&(i+=e.charAt(a));var s=parseFloat(i);s=isNaN(s)?0:s/Math.pow(10,n.precision),o=s.toFixed(n.precision),a=0==n.precision?0:1;var u,c=(o=o.split("."))[a].substr(0,n.precision);for(u=(o=o[0]).length;(u-=3)>=1;)o=o.substr(0,u)+n.thousands+o.substr(u);return l(n.precision>0?o+n.decimal+c+Array(n.precision+1-c.length).join(0):o)}function s(){var e=parseFloat("0")/Math.pow(10,n.precision);return e.toFixed(n.precision).replace(new RegExp("\\.","g"),n.decimal)}function l(e){return n.showSymbol?n.symbol+e:e}var u=e(this);u.bind("keypress",r),u.bind("blur",i),u.bind("focus",t),u.one("unmaskMoney",function(){u.unbind("focus",t),u.unbind("blur",i),u.unbind("keypress",r),e.browser.msie?this.onpaste=null:e.browser.mozilla&&this.removeEventListener("input",i,!1)})})},e.fn.unmaskMoney=function(){return this.trigger("unmaskMoney")}}(jQuery);