function Mobile_redirect(e, r) {
    try {
        if (document.getElementById("dmRoot") != null) {
            return
        }
        var n = (document.location.search || "").substr(1) || "";
        if (n.indexOf("no_redirect=true") > -1) {
            return
        }
        if (!navigator.userAgent.match(/^[^\[]*(iPhone|iPod|BlackBerry|Android.*Mobile|BB10.*Mobile|webOS|Windows CE|IEMobile|Opera Mini|Opera Mobi|HTC|LG-|LGE|SAMSUNG|Samsung|SEC-SGH|Symbian|Nokia|PlayStation|PLAYSTATION|Nintendo DSi).*$/im)) {
            return
        }
        var o = ["^utm_.+?", "^gclid"],
            i = n.split("&") || [],
            t = [],
            a, c;
        for (a = 0; a < i.length; a++) {
            for (c = 0; c < o.length; c++) {
                if (i[a].match(o[c] + "=")) {
                    t.push(i[a]);
                    break
                }
            }
        }
        // if (!r) {
        //     var ur = location.href;
        //     var url = ur.replace("hville.com.br","m.hville.com.br")
        //     // t.push("url=" + encodeURIComponent(location.href))
        //     t.push(url);

        //     // t.push("/");


        // }
        // //t.push("utm_referrer=" + encodeURIComponent(document.referrer));
        // if (t.length) {
        //     // e += "?" + t.join("&")
        //     e = t.join("&")
        // }
         // location.replace(e)
         // location.replace("http://m.hville.com.br")


        var ur = location.href;
        console.log(ur);
        
        var url = ur.replace("hville.com.br","m.hville.com.br")
        url = url.replace("www.","")
        console.log(url);
        // location.replace("http://m.hville.com.br")
        location.replace(url);

    } catch (l) {}
}