<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    @vite('resources/css/leaflet.css')
    @vite('resources/css/qgis2web.css')
    {{-- <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/qgis2web.css') }}"> --}}
    {{-- <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css"> --}}
    <style>
        #Map {
            width: 1573px;
            height: 813px;
        }
    </style>
    <title></title>
</head>

<body>
    <div id="Map">
    </div>
    <div class="text">
        <h1>Hai</h1>
    </div>
    {{-- <script src="{{ asset('js/qgis2web_expressions.js') }}"></script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/leaflet.rotatedMarker.js') }}"></script>
    <script src="{{ asset('js/leaflet.pattern.js') }}"></script>
    <script src="{{ asset('js/leaflet-hash.js') }}"></script>
    <script src="{{ asset('js/Autolinker.min.js') }}"></script>
    <script src="{{ asset('js/rbush.min.js') }}"></script>
    <script src="{{ asset('js/labelgun.min.js') }}"></script>
    <script src="{{ asset('js/labels.js') }}"></script>
    <script src="{{ asset('data/jatim_1.js') }}"></script> --}}
    {{-- <script src="JsLeaflet/qgis2web_expressions.js"></script>
    <script src="JsLeaflet/leaflet.js"></script>
    <script src="JsLeaflet/leaflet.rotatedMarker.js"></script>
    <script src="JsLeaflet/leaflet.pattern.js"></script>
    <script src="JsLeaflet/leaflet-hash.js"></script>
    <script src="JsLeaflet/Autolinker.min.js"></script>
    <script src="JsLeaflet/rbush.min.js"></script>
    <script src="JsLeaflet/labelgun.min.js"></script>
    <script src="JsLeaflet/labels.js"></script> --}}
    @vite('resources/views/Map/jatim/JsLeaflet/qgis2web_expressions.js')
    @vite('resources/views/Map/jatim/JsLeaflet/leaflet.js')
    @vite('resources/views/Map/jatim/JsLeaflet/leaflet.rotatedMarker.js')
    @vite('resources/views/Map/jatim/JsLeaflet/leaflet.pattern.js')
    @vite('resources/views/Map/jatim/JsLeaflet/leaflet-hash.js')
    @vite('resources/views/Map/jatim/JsLeaflet/Autolinker.min.js')
    @vite('resources/views/Map/jatim/JsLeaflet/rbush.min.js')
    @vite('resources/views/Map/jatim/JsLeaflet/labelgun.min.js')
    @vite('resources/views/Map/jatim/JsLeaflet/labels.js')
    @vite('resources/views/Map/jatim_1.js')
    {{-- <script src="data/jatim_1.js"></script> --}}
    <script>
        var map = L.map('Map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-10.947524725745769, 108.35684907550194],
            [-4.708683936630742, 120.44219911212303]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix(
            '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
            );
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);

        function pop_jatim_1(feature, layer) {
            var popupContent = '<table>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['ID_0'] !== null ? autolinker.link(feature.properties[
                'ID_0'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['ISO'] !== null ? autolinker.link(feature.properties[
                'ISO'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['NAME_0'] !== null ? autolinker.link(feature
                .properties['NAME_0'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['ID_1'] !== null ? autolinker.link(feature.properties[
                'ID_1'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['NAME_1'] !== null ? autolinker.link(feature
                .properties['NAME_1'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['ID_2'] !== null ? autolinker.link(feature.properties[
                'ID_2'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['NAME_2'] !== null ? autolinker.link(feature
                .properties['NAME_2'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['TYPE_2'] !== null ? autolinker.link(feature
                .properties['TYPE_2'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['ENGTYPE_2'] !== null ? autolinker.link(feature
                .properties['ENGTYPE_2'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['NL_NAME_2'] !== null ? autolinker.link(feature
                .properties['NL_NAME_2'].toLocaleString()) : '') + '</td>\
                        </tr>\
                        <tr>\
                            <td colspan="2">' + (feature.properties['VARNAME_2'] !== null ? autolinker.link(feature
                .properties['VARNAME_2'].toLocaleString()) : '') + '</td>\
                        </tr>\
                    </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_jatim_1_0() {
            return {
                pane: 'pane_jatim_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_jatim_1');
        map.getPane('pane_jatim_1').style.zIndex = 401;
        map.getPane('pane_jatim_1').style['mix-blend-mode'] = 'normal';
        var layer_jatim_1 = new L.geoJson(json_jatim_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_jatim_1',
            layerName: 'layer_jatim_1',
            pane: 'pane_jatim_1',
            onEachFeature: pop_jatim_1,
            style: style_jatim_1_0,
        });
        bounds_group.addLayer(layer_jatim_1);
        map.addLayer(layer_jatim_1);
        setBounds();
    </script>
</body>

</html>
