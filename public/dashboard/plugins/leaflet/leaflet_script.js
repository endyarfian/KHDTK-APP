var data = <?= json_encode($anakpetak) ?>;
            var map = L.map('basic-map').setView([-7.318437, 111.4304215], 13);

            var lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
            var lyrOpenTopoMap = L.tileLayer.provider('OpenTopoMap');
            var lyrWorldImagery = L.tileLayer.provider('Esri.WorldImagery');
            map.addLayer(lyrOSM);

            // control that shows state info on hover
            info = L.control();

            info.onAdd = function(map) {
                this._div = L.DomUtil.create('div', 'info');
                this.update();
                return this._div;
            };

            info.update = function(props) {
                this._div.innerHTML = '<h4><b>Data KHTDK Fakultas Kehutanan UGM</b></h4>' + 'Pilih kawasan untuk melihat data lebih detail' +
                    (props ?
                        '<br> Kode Anak Petak : <b>' + props.KodeAnakPe +
                        '</b> | Anak Petak : <b>' + props.Toponimi_1 +
                        '</b> | Petak : <b>' + props.Petak +
                        '</b><br> Luas Total : <b>' + props.luas +
                        '</b> Ha | Luas Hutan: <b>' + props.luasht +
                        '</b> Ha <br> Persentase: <b>' + props.persentase + '</b> %' :
                        '</b> <br>atau layangkan cursor pada petak');
            };

            info.addTo(map);

            // get color depending on population density value

            function style(feature) {
                return {
                    weight: 1,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.2,
                    fillColor: 'black'
                };
            }


            function highlightFeature(e) {
                var layer = e.target;

                layer.setStyle({
                    weight: 3,
                    color: '#cc4c02',
                    dashArray: '',
                    fillOpacity: 0.3,

                });

                if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                    layer.bringToFront();
                }

                info.update(layer.feature.properties);
            }

            var geojson;

            function resetHighlight(e) {
                geojson.resetStyle(e.target);
                info.update();
            }

            function zoomToFeature(e) {
                map.feature(e.target.getBounds());
            }

            function onEachFeature(feature, layer) {
                layer.on('click', function(ev) {
                    window.open("maps/detail/" + feature.properties.id)
                });
                layer.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight,

                });
            }

            geojson = L.geoJson(data, {
                onEachFeature: onEachFeature,
                style: style,
            }).addTo(map);
            
            // get name
            var petak = L.geoJSON(point, {
                pointToLayer: function(feature, latlng) {
                    label = String(feature.properties.Petak)
                    return new L.CircleMarker(latlng, {
                        radius: 1,
                    }).bindTooltip(label, {
                        permanent: true,
                        direction: "center",
                        className: "my-labels"
                    }).openTooltip();
                }
            });

            var baseLayers = {
                "Open Street Map (Default)": lyrOSM,
                "Open Topo Map (Topography)": lyrOpenTopoMap,
                "Esri World Imagery (Satellite)": lyrWorldImagery

            };

            var overlays = {
                "Batas Anak Petak": geojson,
                "Nama Petak": petak,
            };

            var layerControl = L.control.layers(baseLayers, overlays, {
                position: 'bottomleft'
            }).addTo(map);


            L.control.scale({
                position: 'bottomright'
            }).addTo(map);
            map.attributionControl.addAttribution('Data provider &copy; <a href="http://fkt.ugm.ac.id/">Fakultas Kehutanan UGM</a>');
