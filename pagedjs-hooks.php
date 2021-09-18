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



    // find all map.





    const mapContainers = document.querySelectorAll(".map-container");
    const markers = document.querySelectorAll('.marker');


    mapContainers.forEach((container, index) => {
        let mapid = container.dataset.mapid;
        let zoom = container.dataset.zoom;
        let tiles = container.dataset.tiles;

        let tileset = {};

        Object.values(tilesProviders).forEach(provider => {
            if (provider.name == tiles) {
                tileset = provider;
            }
        });




        const mapLocation = L.map(container.id, {
            minZoom: 0,
            maxZoom: 0,
            zoomControl: false,
        }).setView([51.505, -0.09], 13);

        // console.log(mapLocation);


        L.tileLayer(tileset.url, {
            attribution: tileset.attribution,
            maxZoom: tileset.maxZoom ? tileset.maxZoom : "",
        }).addTo(mapLocation);


        var markergroup = new L.featureGroup();

        markers.forEach((marker, markindex) => {

            if (marker.dataset.map == container.dataset.map) {

                // check if custom marker then push the marker to the right map

                // custom marker
                if (marker.dataset.icon && marker.dataset.icon != "") {


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






        });


        //bounds for the marker
        markergroup.addTo(mapLocation);

        // --- to resize to show all markers  ---
        mapLocation.fitBounds(markergroup.getBounds().pad(0.5));








    });







    // capes 
    // . . . . . . . . . . . . . //

    const capes = document.querySelectorAll('.capes-container');

    capes.forEach((container) => {
        let mapid = container.dataset.map;
        let zoom = container.dataset.zoom;
        let tiles = container.dataset.tiles;

        let tileset = {};

        Object.values(tilesProviders).forEach(provider => {
            if (provider.name == tiles) {
                tileset = provider;
            }
        });






        const capLocation = L.map(container.id, {
            minZoom: 2,
            // maxZoom: 0,
            // zoomControl: false,
        }).setView([51.505, -0.09], 13);

        L.tileLayer(tileset.url, {
            attribution: tileset.attribution,
            maxZoom: tileset.maxZoom ? tileset.maxZoom : "",
        }).addTo(capLocation);

        var polylineOption = {
            color: 'var(--color-primary)'
        };



        // remake the data for the capes (:scream:)

        console.log(container.dataset.polylines);
        let polylinesClean = container.dataset.polylines.replace(/lat\:/g, '"lat": ');
        polylinesClean = polylinesClean.replace(/lng\:/g, '"lng": ');
        polylinesClean = `[${polylinesClean}]`
        console.log(`polylinesClean`, polylinesClean)



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

        console.log(`latlng`, latlng)


        var polyline = L.polyline(latlng, polylineOption);
        polyline.addTo(capLocation);
        capLocation.fitBounds(polyline.getBounds().pad(0.5));




    })
</script>