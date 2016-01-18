function initMap(){
	//Initialize google map for contact section with your location.  
    var coord = {lat:"45.849698", lon:"10.147321"};
    
    /* Style of the map */
    var styles = [
    {
      stylers: [
        { hue: "#00558c" },
        { saturation: 0 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 0 },
        { saturation: 0 },
        { invert_lightness: false }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "on" }
      ]
    },{
         featureType: "poi",
         elementType: "labels",
         stylers: [
           { visibility: "on" }
         ]
       }

     ];
     

    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

    /* Lat. and Lon. of the center of the map */
    var myCenter = new google.maps.LatLng(coord.lat, coord.lon);

    var myOptions = {
        scrollwheel: true,
        draggable: false,
        disableDefaultUI: true,
        center: myCenter,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,

        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style'] 
        }
    };

    function checkLanguage(){
        var langCode = "";

        if(window.location.pathname.indexOf("/en/") != -1){
            langCode = "en";
        } else {
            langCode = "it";
        }

        return langCode;
    }

    //Bind map to elemet with id map-wrap
    var image = 'images/marker.png';
    if(checkLanguage() == "en"){
        image = '../images/marker.png';
    } 

    var map = new google.maps.Map(document.getElementById('map-wrap'), myOptions);
    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(coord.lat, coord.lon),
	      icon: image
    });

    var contentStringMilano = '<p class="txt-c">Romec dei fratelli Romele S.n.c.</p>';

    var infowindowMilano = new google.maps.InfoWindow({
             content: contentStringMilano,
		});

    google.maps.event.addListener(marker, 'click', function () {
        infowindowMilano.open(map, marker);
    });

    infowindowMilano.open(map, marker);
}