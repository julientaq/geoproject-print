<script>
    var tilesProviders = [{
            name: 'osm',
            providerName: 'osm',
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution: '<a href="https://openstreetmap.org">OpenStreetMap</a>',
            maxZoom: 18
        },
        {
            name: 'cyclosm',
            providerName: 'osm',
            url: 'https://dev.{s}.tile.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png',
            attribution: '<a href="https://github.com/cyclosm/cyclosm-cartocss-style/releases" title="CyclOSM - Open Bicycle render">CyclOSM</a> | Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 20
        }, {
            name: 'esrigrey',
            providerName: 'esri',
            url: 'https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}',
            attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
            maxZoom: 16
        }, {
            name: 'esristreet',
            providerName: 'esri',
            url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}',
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, Delorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012',
            maxZoom: 18
        }, {
            name: 'esriworld',
            providerName: 'esri',
            url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>, Tiles courtesy of <a href="https://hot.openstreetmap.org/" target="_blank">Humanitarian OpenStreetMap Team</a>',
            maxZoom: 18
        }, {
            name: 'osmhot',
            providerName: 'osm',
            url: 'https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png',
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
            maxZoom: 18
        }, {
            name: 'hydda',
            providerName: 'osm',
            url: 'https://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png',
            attribution: 'Tiles courtesy of <a href="https://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 18
        }, {
            name: 'opentopo',
            providerName: 'osm',
            url: 'https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png',
            attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a>',
            maxZoom: 18
        }, {
            name: 'worldimagery',
            providerName: 'arcgis',
            url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Shaded_Relief/MapServer/tile/{z}/{y}/{x}',
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri',
            maxZoom: 13
        }, {
            name: 'delorme',
            providerName: 'esri',
            url: 'https://server.arcgisonline.com/ArcGIS/rest/services/Specialty/DeLorme_World_Base_Map/MapServer/tile/{z}/{y}/{x}',
            attribution: 'Tiles &copy; Esri &mdash; Copyright: &copy;2012 Delorme',
            maxZoom: 11
        }, {
            name: 'stadia_alida',
            providerName: 'stadia',
            url: 'https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png',
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 20
        }, {
            name: 'stadia_osmbright',
            providerName: 'stadia',
            url: 'https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png',
            maxZoom: 20,
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
        }, {
            name: 'stadia_outdoors',
            providerName: 'stadia',
            url: 'https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.png',
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 20
        }, {
            name: 'stadia_dark',
            providerName: 'stadia',
            url: 'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png',
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 20
        }, {
            name: 'mtmap',
            providerName: 'mtmap',
            url: 'https://tile.mtbmap.cz/mtbmap_tiles/{z}/{x}/{y}.png',
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &amp; USGS',
        }, {
            name: 'stamentoner',
            providerName: 'stamen',
            url: 'https://stamen-tiles-{s}.a.ssl.fastly.net/toner/{z}/{x}/{y}{r}.png',
            attribution: 'Map tiles by <a href="https://stamen.com">Stamen Design</a>, <a href="https://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            minZoom: 0,
            maxZoom: 20,
            ext: 'png'
        }, {
            name: 'stamentonerlight',
            providerName: 'stamen',
            url: 'https://stamen-tiles-{s}.a.ssl.fastly.net/toner-lite/{z}/{x}/{y}{r}.png',
            attribution: 'Map tiles by <a href="https://stamen.com">Stamen Design</a>, <a href="https://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            minZoom: 0,
            maxZoom: 20,
            ext: 'png'
        }, {
            name: 'stamenwater',
            providerName: 'stamen',
            url: 'https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.png',
            attribution: 'Map tiles by <a href="https://stamen.com">Stamen Design</a>, <a href="https://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            minZoom: 0,
            maxZoom: 20,
            ext: 'png'
        }, {
            name: 'stamenterrain',
            providerName: 'stamen',
            url: 'https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}{r}.png',
            attribution: 'Map tiles by <a href="https://stamen.com">Stamen Design</a>, <a href="https://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            minZoom: 0,
            maxZoom: 20,
            ext: 'png'
        }, {
            name: 'geoportail',
            providerName: 'geoportail',
            url: 'https://wxs.ign.fr/choisirgeoportail/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE=normal&TILEMATRIXSET=PM&FORMAT=image/jpeg&LAYER=GEOGRAPHICALGRIDSYSTEMS.MAPS.SCAN-EXPRESS.STANDARD&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}',
            attribution: '<a target="_blank" href="https://www.geoportail.gouv.fr/">Geoportail France</a>',
            bounds: [
                [-75, -180],
                [81, 180]
            ],
            minZoom: 2,
            maxZoom: 18,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }, {
            name: 'geoportailimg',
            providerName: 'geoportail',
            url: 'https://wxs.ign.fr/choisirgeoportail/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE=normal&TILEMATRIXSET=PM&FORMAT=image/jpeg&LAYER=GEOGRAPHICALGRIDSYSTEMS.MAPS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}',
            attribution: '<a target="_blank" href="https://www.geoportail.gouv.fr/">Geoportail France</a>',
            bounds: [
                [-75, -180],
                [81, 180]
            ],
            minZoom: 2,
            maxZoom: 18,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }, {
            name: 'geoportailorthos',
            providerName: 'geoportail',
            url: 'https://wxs.ign.fr/choisirgeoportail/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE=normal&TILEMATRIXSET=PM&FORMAT=image/jpeg&LAYER=ORTHOIMAGERY.ORTHOPHOTOS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}',
            bounds: [
                [-75, -180],
                [81, 180]
            ],
            minZoom: 2,
            maxZoom: 18,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }, {
            name: 'mapbox',
            providerName: 'mapbox',
            url: 'https://api.mapbox.com/styles/v1/' + 'v11' + '/tiles/{z}/{x}/{y}?access_token=' + `token`,
            attribution: '© <a href="https://apps.mapbox.com/feedback/">Mapbox</a> © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 15,
            tileSize: 512,
            zoomOffset: -1
        }
    ];





    function filterMap(center) {
        center = center.replace(`LatLng(`, '')
        center = center.replace(`)`, '');
        let value = center.split(',')
        return value;


    }

    // copyToClip

    function copyToClip(text) {
        navigator.clipboard.writeText(text)
            .then(() => {
                console.log('Text copied to clipboard');
            })
            .catch(err => {
                console.log('Error in copying text: ', err);
            });
    }

    // find all map.



    function move() {

        interact('.drag').draggable({
            inertia: false,
            onmove: function(event) {
                var target = event.target,
                    // keep the dragged position in the data-x/data-y attributes
                    x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
                    y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

                // translate the element
                target.style.webkitTransform =
                    target.style.transform =
                    'translate(' + x + 'px, ' + y + 'px)';

                // update the position attributes
                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
            },
            onend: function(event) {
                console.log(event);
            }
        }).allowFrom('.move');
    }



    function mapDataUI() {
        let mapDataStyle = `<style>
        .mapData pre {
            white-space: pre-wrap;
             font-size: 0.9em;
             border: 1px solid black;
             padding: 1ch;
        }
        .mapData button {
            margin:1em 0;
            display: block;
        }
        .mapData{
            padding: 1em 2ch;
            position: fixed;
            z-index: 90000;
            top: 2em;
            left:2em;
            width: 200px;
            background: white;
            border: 2px solid black;
            display: none} .mapData.show{display: block;
            } 
        .mapData .move {width: 2em;
            height: 2em;
            position: absolute;
            top: 0;
            right: 0;
        }  
        @media print {
            .mapData.show, .leaflet-control-container {display: none;}

        }

        
         </style>`
        document.head.insertAdjacentHTML('beforeend', mapDataStyle);


        let mapDataHTML = `
        <div class="move"> <svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.592,8.936l-6.531-6.534c-0.593-0.631-0.751-0.245-0.751,0.056l0.002,2.999L5.427,9.075H2.491c-0.839,0-0.162,0.901-0.311,0.752l3.683,3.678l-3.081,3.108c-0.17,0.171-0.17,0.449,0,0.62c0.169,0.17,0.448,0.17,0.618,0l3.098-3.093l3.675,3.685c-0.099-0.099,0.773,0.474,0.773-0.296v-2.965l3.601-4.872l2.734-0.005C17.73,9.688,18.326,9.669,17.592,8.936 M3.534,9.904h1.906l4.659,4.66v1.906L3.534,9.904z M10.522,13.717L6.287,9.48l4.325-3.124l3.088,3.124L10.522,13.717z M14.335,8.845l-3.177-3.177V3.762l5.083,5.083H14.335z"></path></svg></div>    
        <h3>CSS for the map </h3>
            <pre class="mapDataCss"></pre>

            <button id="copyMapData">Copy to the clipboard</button>
            <button class="close">close</button>
        `

        let mapData = document.createElement('div');
        mapData.classList.add('mapData', 'drag');
        mapData.innerHTML = mapDataHTML;


        document.body.insertAdjacentElement('afterbegin', mapData)
    }

    function makeMaps() {

        mapDataUI();


        const mapContainers = document.querySelectorAll(".map-container");

        const markers = document.querySelectorAll('.marker');


        mapContainers.forEach((container, index) => {


            // set container zoom from css?

            let mapCSSvalues = getComputedStyle(container);

            let zoom = mapCSSvalues.getPropertyValue('--zoom-level') ? mapCSSvalues.getPropertyValue('--zoom-level') : 10;

            // let zoom = container.dataset.zoom;


            let center = mapCSSvalues.getPropertyValue('--map-center') ? filterMap(mapCSSvalues.getPropertyValue('--map-center')) : [43.838071, 4.355146];

            console.log(`zoom`, zoom)
            console.log(`center`, center)

            let mapid = container.dataset.mapid;
            let tiles = container.dataset.tiles;

            let tileset = {};

            Object.values(tilesProviders).forEach(provider => {
                if (provider.name == tiles) {
                    tileset = provider;
                }
            });




            const mapLocation = L.map(container.id, {
                    zoomControl: true,
                })
                .setView(center, zoom);


            L.tileLayer(tileset.url, {
                attribution: tileset.attribution,
                maxZoom: tileset.maxZoom ? tileset.maxZoom : "",
            }).addTo(mapLocation);



            var markergroup = new L.featureGroup();

            if (!container.classList.contains('markeronly')) {

                markers.forEach((marker, markindex) => {
                    if (marker.dataset.map == container.dataset.map) {

                        // check if custom marker then push the marker to the right map

                        // custom marker
                        if (marker.dataset.icon && marker.dataset.icon != "") {


                            // limit the amount of marker

                            // create the icon

                            var myIcon = L.icon({
                                iconUrl: marker.dataset.icon,
                                iconSize: [50, 50]
                            });


                            marker = new L.Marker([marker.dataset.lat, marker.dataset.lng], {
                                icon: myIcon
                            })
                        } else {


                            marker = new L.Marker([marker.dataset.lat, marker.dataset.lng])

                        }



                        marker.addTo(markergroup);

                    }
                })
            } else if (container.classList.contains('markeronly')) {
                markers.forEach((marker, markindex) => {
                    if (marker.dataset.markerId == container.dataset.markerId) {

                        // check if custom marker then push the marker to the right map

                        // custom marker
                        if (marker.dataset.icon && marker.dataset.icon != "") {


                            var myIcon = L.icon({
                                iconUrl: marker.dataset.icon,
                                iconSize: [50, 50]
                            });


                            marker = new L.Marker([marker.dataset.lat, marker.dataset.lng], {
                                icon: myIcon
                            })
                        } else {

                            marker = new L.Marker([marker.dataset.lat, marker.dataset.lng])

                        }

                        marker.addTo(markergroup);
                    }
                })
            }


            //bounds for the marker
            markergroup.addTo(mapLocation);

            // --- to resize to show all markers  ---
            // mapLocation.fitBounds(markergroup.getBounds().pad(0.5));


            let mapDataUI = document.querySelector('.mapData')
            mapLocation.on('zoomstart zoom zoomend dragend', function(ev) {
                mapDataUI.classList.add('show');
                mapDataUI.querySelector('.mapDataCss').innerHTML = `#${mapLocation._container.id}{
--zoom-level: ${mapLocation.getZoom()}; 
--map-center: ${mapLocation.getCenter()};
}`;
            })


        });







        // capes 
        // . . . . . . . . . . . . . //

        const capes = document.querySelectorAll('.capes-container');

        capes.forEach((container) => {

            let mapCSSvalues = getComputedStyle(container);

            let zoom = mapCSSvalues.getPropertyValue('--zoom-level') ? mapCSSvalues.getPropertyValue('--zoom-level') : 6;

            // let zoom = container.dataset.zoom;


            let center = mapCSSvalues.getPropertyValue('--map-center') ? filterMap(mapCSSvalues.getPropertyValue('--map-center')) : [43.838071, 4.355146];


            let mapid = container.dataset.map;
            // let zoom = container.dataset.zoom;
            let tiles = container.dataset.tiles;

            let tileset = {};

            Object.values(tilesProviders).forEach(provider => {
                if (provider.name == tiles) {
                    tileset = provider;
                }
            });






            const capLocation = L.map(container.id, {
                // minZoom: 0,
                // maxZoom: 20,
                zoomControl: true,
            }).setView(center, zoom);

            L.tileLayer(tileset.url, {
                attribution: tileset.attribution,
                maxZoom: tileset.maxZoom ? tileset.maxZoom : "",
            }).addTo(capLocation);

            var polylineOption = {
                color: 'var(--color-primary)'
            };



            // remake the data for the capes (:scream:)

            // console.log(container.dataset.polylines);
            let polylinesClean = container.dataset.polylines.replace(/lat\:/g, '"lat": ');
            polylinesClean = polylinesClean.replace(/lng\:/g, '"lng": ');
            polylinesClean = `[${polylinesClean}]`
            // console.log(`polylinesClean`, polylinesClean)



            let jsonPolylines = JSON.parse(polylinesClean);




            let latlng = [];
            jsonPolylines.forEach(values => {

                let line = [];
                values.forEach((pointLatLng) => {
                    let point = [];
                    point.push(pointLatLng.lat);
                    point.push(pointLatLng.lng);

                    line.push(point);
                })
                latlng.push(line);
            })



            var polyline = L.polyline(latlng, polylineOption);
            polyline.addTo(capLocation);
            // capLocation.fitBounds(polyline.getBounds().pad(0.5));
            // 

            let mapDataUI = document.querySelector('.mapData');
            // capLocation.on('zoomstart zoom zoomend dragend', function(ev) {
            //     mapDataUI.innerHTML = `#${mapLocation._container.id}{--zoom-level: ${mapLocation.getZoom()}; \n --map-center: ${mapLocation.getCenter()};}`;
            // });
            capLocation.on('zoomstart zoom zoomend dragend', function(ev) {
                mapDataUI.classList.add('show');
                mapDataUI.querySelector('.mapDataCss').innerHTML = `#${mapLocation._container.id}{
--zoom-level: ${mapLocation.getZoom()}; 
--map-center: ${mapLocation.getCenter()};
}`;
            })

        })
    }
</script>



<script>
    function iframeToLinks(content) {
        content.querySelectorAll('iframe').forEach(frameIn => {
            let src = frameIn.src.replace('?feature=oembed', '').replace('embed/', 'watch?v=');
            let title = frameIn.title;

            let frameOut = `<p class="frame"><span class="title">${title}</span> <a href="${src}">${src}</a>`;
            frameIn.insertAdjacentHTML('beforebegin', frameOut);
            frameIn.remove();

        })
    }
</script>
<script>
    function metaSlideToGrid(content) {
        content.querySelectorAll('.metaslider').forEach(metaslider => {
            let wrapper = document.createElement('figure');
            wrapper.classList.add("image-grid");

            metaslider.querySelectorAll('img').forEach(imgIn => {
                let imgOut = `<img src="${imgIn.src}" title="${imgIn.title}" />`
                wrapper.insertAdjacentHTML('afterbegin', imgOut);

            })

            metaslider.insertAdjacentElement('beforebegin', wrapper);
            metaslider.remove();

        })
    }
</script>

<script>
    function cleanImg(content) {
        content.querySelectorAll('img').forEach(img => {
            img.removeAttribute("srcset");
            //remove lazy loading as it blocks the rendeing of pagedjs
            img.removeAttribute("loading");
            if(!img.classList.contains('popup-icon')){
            img.classList = "";
            }
        })
    }
</script>
<!-- pagedjs hook! -->




<script>
    class geoProject extends Paged.Handler {
        constructor(chunker, polisher, caller) {
            super(chunker, polisher, caller);
        }
        beforeParsed(content) {
            iframeToLinks(content);
            metaSlideToGrid(content);
            cleanImg(content);
            if(content.querySelector(".project-content p")) {
            content.querySelector(".project-content p").innerHTML = `<span>${content.querySelector(".project-content p").innerHTML}</span>`
        }   
            if(    content.querySelector(".project-content pre")) {
            content.querySelector(".project-content pre").innerHTML = `<span>${content.querySelector(".project-content pre").innerHTML}</span>`
        }
        }
        afterRendered(pages) {
            makeMaps();
            move();
            document.querySelector('#copyMapData').addEventListener('click', function() {
                let data = this.parentElement.querySelector('.mapDataCss').textContent;
                // console.log(`data`, data)
                copyToClip(data)
            })
            document.querySelectorAll('.close').forEach(close => {
                close.addEventListener('click', function() {
                    this.closest('.show').classList.remove("show");
                })
            })
        }
    }
    Paged.registerHandlers(geoProject);
</script>