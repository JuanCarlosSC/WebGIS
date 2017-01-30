
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() { 
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,
                    // zoomControl: false,
                    // scaleControl: false,
                    scrollwheel: false,
                    // disableDoubleClickZoom: true,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(31.292328, -110.921954), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: 
                    // [
                    //     {
                    //         "featureType": "administrative",
                    //         "elementType": "labels.text.fill",
                    //         "stylers": [
                    //             {
                    //                 "color": "#444444"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "landscape",
                    //         "elementType": "all",
                    //         "stylers": [
                    //             {
                    //                 "color": "#f2f2f2"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "poi",
                    //         "elementType": "all",
                    //         "stylers": [
                    //             {
                    //                 "visibility": "off"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road",
                    //         "elementType": "all",
                    //         "stylers": [
                    //             {
                    //                 "saturation": "100"
                    //             },
                    //             {
                    //                 "lightness": "-8"
                    //             },
                    //             {
                    //                 "visibility": "on"
                    //             },
                    //             {
                    //                 "hue": "#00bfff"
                    //             },
                    //             {
                    //                 "gamma": "0.83"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road",
                    //         "elementType": "geometry",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "all",
                    //         "stylers": [
                    //             {
                    //                 "visibility": "simplified"
                    //             },
                    //             {
                    //                 "hue": "#00bfff"
                    //             },
                    //             {
                    //                 "gamma": "1.33"
                    //             },
                    //             {
                    //                 "lightness": "-18"
                    //             },
                    //             {
                    //                 "saturation": "86"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "geometry",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "geometry.fill",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "geometry.stroke",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "labels",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "labels.text",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             },
                    //             {
                    //                 "saturation": "-45"
                    //             },
                    //             {
                    //                 "lightness": "-64"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "labels.text.fill",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "labels.text.stroke",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.highway",
                    //         "elementType": "labels.icon",
                    //         "stylers": [
                    //             {
                    //                 "hue": "#00bfff"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "road.arterial",
                    //         "elementType": "labels.icon",
                    //         "stylers": [
                    //             {
                    //                 "visibility": "off"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "transit",
                    //         "elementType": "all",
                    //         "stylers": [
                    //             {
                    //                 "visibility": "off"
                    //             }
                    //         ]
                    //     },
                    //     {
                    //         "featureType": "water",
                    //         "elementType": "all",
                    //         "stylers": [
                    //             {
                    //                 "color": "#46bcec"
                    //             },
                    //             {
                    //                 "visibility": "on"
                    //             }
                    //         ]
                    //     }
                    // ]

                    [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#444444"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 45
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#46bcec"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(31.292328, -110.921954),
                    map: map,
                    title: 'GIS!'
                });
            }
