<script>
    function initMap() {
        var infowindow = new google.maps.InfoWindow();
        // map bali
        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(-8.454251, 115.2123515),
            zoom: 10
        });

        //    * BALI
        $('button#pills-bali-tab').click(function() {

            var point = new google.maps.LatLng(-8.454251, 115.2123515);
            map.setCenter(point);
            map.setZoom(10);
            console.log('bali')
        });
        $('button#pills-ntb-tab').click(function() {

            var point = new google.maps.LatLng(-8.4628462, 118.727206);
            map.setCenter(point);
            map.setZoom(8);
            console.log('ntb')
        });
        $('button#pills-ntt-tab').click(function() {

            var point = new google.maps.LatLng(-8.738606, 121.0207188);
            map.setCenter(point);
            map.setZoom(9);
            console.log('ntt')
        });
        $('a#kab_Badung').click(function() {

            var point = new google.maps.LatLng(-8.6760533, 115.2100405);
            map.setCenter(point);
            map.setZoom(12);
            console.log('badung')
            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");

            if(a.style.display === "block"){}
            else{
            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            i.style.display = "none";

            }

        });
        $('a#kab_Bangli').click(function() {

            var point = new google.maps.LatLng(-8.3301309, 115.3588664);
            map.setCenter(point);
            map.setZoom(11);
            console.log('kab-bangli')
            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(b.style.display === "none"){
                a.style.display = "none";
                b.style.display = "block";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
            }
        });
        $('a#kab_Buleleng').click(function() {

            var point = new google.maps.LatLng(-8.2557717, 114.8155235);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-buleleng')
            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(c.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "block";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
            }
            
        });

        $('a#kab_Gianyar').click(function() {

            var point = new google.maps.LatLng(-8.4870263, 115.2429088);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-gianyar')

            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(d.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "block";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
            }
        });
        $('a#kab_Jembrana').click(function() {

            var point = new google.maps.LatLng(-8.3349028, 114.6000345);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-jembrana')

            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(e.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "block";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
            }
        });
        $('a#kab_Karangasem').click(function() {

            var point = new google.maps.LatLng(-8.4501, 115.5709772);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-karangasem')
            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(f.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "block";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
            }
        });
        $('a#kab_Klungkung').click(function() {

            var point = new google.maps.LatLng(-8.5407718, 115.3937325);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-klungkung')

            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(g.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "block";
                h.style.display = "none";
                i.style.display = "none";
            }
        });
        $('a#kab_Tabanan').click(function() {

            var point = new google.maps.LatLng(-8.5384332, 115.1020371);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-tabanan')
            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(h.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "block";
                i.style.display = "none";
            }
        });
        $('a#kot_Denpasar').click(function() {

            var point = new google.maps.LatLng(-8.6725969, 115.1892538);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kot-denpasar')

            var a = document.getElementById("TabelPengnyakitBadung");
            var b = document.getElementById("TabelPengnyakitBangli");
            var c = document.getElementById("TabelPengnyakitBuleleng");
            var d = document.getElementById("TabelPengnyakitGianyar");
            var e = document.getElementById("TabelPengnyakitJembrana");
            var f = document.getElementById("TabelPengnyakitKarangasem");
            var g = document.getElementById("TabelPengnyakitKlungkung");
            var h = document.getElementById("TabelPengnyakitTabanan");
            var i = document.getElementById("TabelPengnyakitDenpasar");
            if(i.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "block";
            }
        });

        //  * NTB

        $('a#kab_Bima').click(function() {

            var point = new google.maps.LatLng(-8.4628026,118.7096962);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-bima')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(a.style.display === "block"){

            }
            else{
                a.style.display = "block";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
        });
        $('a#kab_Dompu').click(function() {

            var point = new google.maps.LatLng(-8.4919535,117.556245);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kab-kab_Dompu')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(b.style.display === "none"){
                a.style.display = "none";
                b.style.display = "block";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
        });
        $('a#kab_Lombok_Barat').click(function() {

            var point = new google.maps.LatLng(-8.6663606,116.080009);
            map.setCenter(point);
            map.setZoom(11);
            console.log('kab-kab_Lombok_Barat')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(c.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "block";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
        });

        $('a#kab_Lombok_Tengah').click(function() {

            var point = new google.maps.LatLng(-8.6819335,116.1289857);
            map.setCenter(point);
            map.setZoom(11);
            console.log('kab-kab_Lombok_Tengah')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(d.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "block";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
            
        });
        $('a#kab_Lombok_Timur').click(function() {

            var point = new google.maps.LatLng(-8.5908187,116.2857551);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-kab_Lombok_Timur')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(e.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "block";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
        });
        $('a#kab_Lombok_Utara').click(function() {

            var point = new google.maps.LatLng(-8.3446522,115.9808344);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-kab_Lombok_Utara')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(f.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "block";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
        });

        $('a#kab_Sumbawa').click(function() {

            var point = new google.maps.LatLng(-8.6124051,116.464281);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-kab_Sumbawa')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(g.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "block";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
            }
        });
        $('a#kab_Sumbawa_Barat').click(function() {

            var point = new google.maps.LatLng(-8.7994438,116.6030296);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-kab_Sumbawa_Barat')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(h.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "block";
                i.style.display = "none";
                j.style.display = "none";
            }
        });

        $('a#kot_Bima').click(function() {

            var point = new google.maps.LatLng(-8.4628026,118.7096962);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kab-kot_Bima')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(i.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "block";
                j.style.display = "none";
            }
        });
        $('a#kot_Mataram').click(function() {

            var point = new google.maps.LatLng(-8.5875277,116.0465535);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kot-kot_Mataram')
            var a = document.getElementById("TabelPengnyakitBima");
            var b = document.getElementById("TabelPengnyakitDompu");
            var c = document.getElementById("TabelPengnyakitLombokBarat");
            var d = document.getElementById("TabelPengnyakitLombokTengah");
            var e = document.getElementById("TabelPengnyakitLombokTimur");
            var f = document.getElementById("TabelPengnyakitLombokUtara");
            var g = document.getElementById("TabelPengnyakitSumbawa");
            var h = document.getElementById("TabelPengnyakitSumbawaBarat");
            var i = document.getElementById("TabelPengnyakitKotaBima");
            var j = document.getElementById("TabelPengnyakitKotaMataram");
            if(j.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "block";
            }
        });

        //  * NTT
        $('a#kab_Alor').click(function() {

            var point = new google.maps.LatLng(-8.333405,124.4751755);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kab-kab_Alor')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(a.style.display === "block"){

            }
            else{
                a.style.display = "block";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Belu').click(function() {

            var point = new google.maps.LatLng(-9.1750796,124.7123005);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-kab_Belu')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(b.style.display === "none"){
                a.style.display = "none";
                b.style.display = "block";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Ende').click(function() {

            var point = new google.maps.LatLng(-8.671757,121.1498441);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kab-kab_Ende')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(c.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "block";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });

        $('a#kab_Flores_Timur').click(function() {

            var point = new google.maps.LatLng(-8.3485621,122.4335854);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kab-kab_Flores_Timur')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(d.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "block";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Kupang').click(function() {

            var point = new google.maps.LatLng(-9.8106456,123.188256);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kab-kab_Kupang')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(e.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "block";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });

        $('a#kab_Lembata').click(function() {

            var point = new google.maps.LatLng(-8.3762848,123.0045204);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kab-kab_Lembata')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(f.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "block";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Malaka').click(function() {

            var point = new google.maps.LatLng(-9.5458327,124.5854401);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-kab_Malaka')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(g.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "block";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });

        $('a#kab_Manggarai').click(function() {

            var point = new google.maps.LatLng(-8.577545,120.1071086);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kab-kab_Manggarai')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(h.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "block";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Manggarai_Barat').click(function() {

            var point = new google.maps.LatLng(-8.574164,119.8713535);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kot-kab_Manggarai_Barat')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(i.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "block";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Manggarai_Timur').click(function() {

            var point = new google.maps.LatLng(-8.5722886,120.055851);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kot-kab_Manggarai_Timur')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(j.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "block";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Nagekeo').click(function() {

            var point = new google.maps.LatLng(-8.674479,121.301802);
            map.setCenter(point);
            map.setZoom(11);
            console.log('kot-kab_Nagekeo')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(k.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "block";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Ngada').click(function() {

            var point = new google.maps.LatLng(-8.6493063,120.717135);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kot-kab_Ngada')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(l.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "block";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Rote_Ndao').click(function() {

            var point = new google.maps.LatLng(-10.7174549,122.4818247);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kot-kab_Rote_Ndao')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(m.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "block";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Sabu_Raijua').click(function() {

            var point = new google.maps.LatLng(-10.6222387,121.0783411);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kot-kab_Sabu_Raijua')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(n.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "block";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Sikka').click(function() {

            var point = new google.maps.LatLng(-8.4547045,121.6207464);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kot-kab_Sikka')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(o.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "block";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Sumba_Barat').click(function() {

            var point = new google.maps.LatLng(-9.5845594,119.0631132);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kot-kab_Sumba_Barat')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(p.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "block";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Sumba_Barat_Daya').click(function() {

            var point = new google.maps.LatLng(-9.5432198,118.8901392);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kot-kab_Sumba_Barat_Daya')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(q.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "block";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Sumba_Tengah').click(function() {

            var point = new google.maps.LatLng(-9.5930127,119.3907916);
            map.setCenter(point);
            map.setZoom(10);
            console.log('kot-kab_Sumba_Tengah')

            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(r.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "block";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Sumba_Timur').click(function() {

            var point = new google.maps.LatLng(-9.8035245,119.6996719);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kot-kab_Sumba_Timur')

            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");
            if(s.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "block";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Timor_Tengah').click(function() {

            var point = new google.maps.LatLng(-9.8212582,123.8769969);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kot-kab_Timor_Tengah')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");

            if(t.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "block";
                u.style.display = "none";
                v.style.display = "none";
            }
        });
        $('a#kab_Timor_Tengah_Utara').click(function() {

            var point = new google.maps.LatLng(-9.3387587,123.9132416);
            map.setCenter(point);
            map.setZoom(9);
            console.log('kot-kab_Timor_Tengah_Utara')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");

            
            if(u.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "block";
                v.style.display = "none";
            }
        });
        $('a#kot_Kupang').click(function() {

            var point = new google.maps.LatLng(-10.1747746,123.5446785);
            map.setCenter(point);
            map.setZoom(12);
            console.log('kot-kot_Kupang')
            var a = document.getElementById("TabelPengnyakitAlor");
            var b = document.getElementById("TabelPengnyakitBelu");
            var c = document.getElementById("TabelPengnyakitEnde");
            var d = document.getElementById("TabelPengnyakitFloresTimur");
            var e = document.getElementById("TabelPengnyakitKupang");
            var f = document.getElementById("TabelPengnyakitLembata");
            var g = document.getElementById("TabelPengnyakitMalaka");
            var h = document.getElementById("TabelPengnyakitManggarai");
            var i = document.getElementById("TabelPengnyakitManggaraiBarat");
            var j = document.getElementById("TabelPengnyakitManggaraiTimur");
            var k = document.getElementById("TabelPengnyakitNagekeo");
            var l = document.getElementById("TabelPengnyakitNgada");
            var m = document.getElementById("TabelPengnyakitRoteNdao");
            var n = document.getElementById("TabelPengnyakitSabuRaijua");
            var o = document.getElementById("TabelPengnyakitSikka");
            var p = document.getElementById("TabelPengnyakitSumbaBarat");
            var q = document.getElementById("TabelPengnyakitSumbaBaratDaya");
            var r = document.getElementById("TabelPengnyakitSumbaTengah");
            var s = document.getElementById("TabelPengnyakitSumbaTimur");
            var t = document.getElementById("TabelPengnyakitTimorTengah");
            var u = document.getElementById("TabelPengnyakitTimorTengahUtara");
            var v = document.getElementById("TabelPengnyakitKotaKupang");

            if(v.style.display === "none"){
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
                e.style.display = "none";
                f.style.display = "none";
                g.style.display = "none";
                h.style.display = "none";
                i.style.display = "none";
                j.style.display = "none";
                k.style.display = "none";
                l.style.display = "none";
                m.style.display = "none";
                n.style.display = "none";
                o.style.display = "none";
                p.style.display = "none";
                q.style.display = "none";
                r.style.display = "none";
                s.style.display = "none";
                t.style.display = "none";
                u.style.display = "none";
                v.style.display = "block";
            }
        });
        // google.maps.event.trigger(location_marker, 'click');
        // map.setCenter(location_marker.getPosition());
        // var noPoi = [{
        //     featureType: "poi",
        //     elementType: "labels",

        //     stylers: [{
        //         visibility: "off"
        //     }]
        // }];

        const mapOptions = {
            styles: [{
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "administrative.neighborhood",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }
            ]
        };
        map.setOptions({ mapOptions});
    }
    window.initMap = initMap;
</script>