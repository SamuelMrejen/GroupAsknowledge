var map = null;
var latitude = " ";
var longitude = " ";
var nomOrganisation = " ";
var descriptionOrganisation = " ";
var Markers = {};
var navtext = $('.nav-text');

for (var i = 0; i <= navtext.length; i++) {
// au click sur chaque element de la navbar
    navtext.click(function (e) {
        //on recharge pas la page
        e.preventDefault();
//tableaux des nom d'url qu'on veut
        var tabOrganisation = ["AssociationPartenaireAsk", "ConsultingAsk", "FormationAsk", "PartenaireFormationAsk", "PartenaireOperationnelAsk", "PartenaireRechercheAsk", "SousPrestataireFormation"];
        // switch sur le text du lien de la navbar
        switch ($(this).text()) {
// cas si le text de la navabr = ...
            case "Association Partenaire ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }
// on declare dans l'url que nomOrganisation= "premier element du tableau"
                queryParameters['nomOrganisation'] = tabOrganisation[0];
// location.search = url
                location.search = $.param(queryParameters);
// on arrete le cas
                break;
            case "Consulting ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }

                queryParameters['nomOrganisation'] = tabOrganisation[1];

                location.search = $.param(queryParameters);
                break;

            case "Formation ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }

                queryParameters['nomOrganisation'] = tabOrganisation[2];

                location.search = $.param(queryParameters);
                break;
            case "Partenaire Formation ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }

                queryParameters['nomOrganisation'] = tabOrganisation[3];

                location.search = $.param(queryParameters);
                break;
            case "Partenaire Operationnel ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }

                queryParameters['nomOrganisation'] = tabOrganisation[4];

                location.search = $.param(queryParameters);
                break;
            case "Partenaire Recherche ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }

                queryParameters['nomOrganisation'] = tabOrganisation[5];

                location.search = $.param(queryParameters);
                break;
            case  "Sous Prestataire Formation ASK":
                var queryParameters = {}, queryString = location.search.substring(1),
                    re = /([^&=]+)=([^&]*)/g, m;

                while (m = re.exec(queryString)) {
                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }

                queryParameters['nomOrganisation'] = tabOrganisation[6];

                location.search = $.param(queryParameters);
                break;
            default:


        }


    });
}


function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: 48.862725, lng: 2.287592},
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.HYBRID,
            mapTypeControl: false,
            scrollwheel: false,
            disableDefaultUI: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.VERTICAL_BAR
            },
            navigationControl: true,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.ZOOM_PAN
            }

        }, $('.buttonPlus').click(function () {


            if (map.zoom < 8 && map.zoom >= 4) {
                map.zoom++;

                map.setZoom(map.zoom);


            }

        }
        ), $('.buttonMoin').click(function () {
            if (map.zoom <= 8 && map.zoom > 4) {
                map.zoom--;

                map.setZoom(map.zoom);


            }

        })
    );

// switch sur le nom de l'url
    switch (location.search) {
        case "?p=map&nomOrganisation=AssociationPartenaireAsk":
            $.ajax({
                // requete sur le controller qui renvoi le json
                url: "Controllers/mapAssocController.php",
                error:function(jqXHR, textStatus){
                    console.log('error :' + textStatus + ' : ' + jqXHR.responseText);
                    alert('Erreur ' + jqXHR.responseText );
                }
            }).done(function (json) { // Si on obtient une réponse, elle est stockée dans la variable json
                // On construit l'objet villes à partir de la variable json
                var villes = JSON.parse(json);
                // On parcourt l'objet villes
                for (i = 0; i < villes.length; i++) {
                    //position = latitude et longitude de la bdd
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);
                    // le marker est place a la position donné
                    var marker = new google.maps.Marker({
                        position: position,
                        map: map,
                    });

                    var compteur = 0;
                    //au click sur le marker
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            //on creer une nouvelle div
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            // si on appuie deux fois sur le marker la div se retire
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();
                            }
                            // si on appui sur la croix  la div se retire
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");
                            })
                        }
                    })(marker, i));
                    Markers[villes[i].id] = marker
                }
            });
            break;
        case "?p=map&nomOrganisation=ConsultingAsk":
            $.ajax({
                url: "Controllers/mapConsController.php",
            }).done(function (json) {
                var villes = JSON.parse(json);
                // On parcourt l'objet villes
                var compteur = 0;

                for (i = 0; i < villes.length; i++) {
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);
                    var marker = new google.maps.Marker({
                        position: position,
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        map: map,
                    });
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();

                            }
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");

                            })
                        }
                    })(marker, i));
                    Markers[villes[i].id] = marker


                }

            });

            break;
        case "?p=map&nomOrganisation=FormationAsk":
            $.ajax({

                url: "Controllers/mapFormController.php",

            }).done(function (json) { // Si on obtient une réponse, elle est stockée dans la variable json
                // On construit l'objet villes à partir de la variable json

                var villes = JSON.parse(json);

                // On parcourt l'objet villes

                for (i = 0; i < villes.length; i++) {
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);
                    var marker = new google.maps.Marker({
                        position: position,
                        icon: 'http://maps.google.com/mapfiles/ms/icons/purple-dot.png',
                        map: map,
                    });
                    var compteur = 0;
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();

                            }
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");

                            })


                        }

                    })(marker, i));


                    Markers[villes[i].id] = marker;


                }
            });
            break;
        case "?p=map&nomOrganisation=PartenaireFormationAsk":
            $.ajax({

                url: "Controllers/mapPartFormController.php",

            }).done(function (json) { // Si on obtient une réponse, elle est stockée dans la variable json
                // On construit l'objet villes à partir de la variable json

                var villes = JSON.parse(json);

                // On parcourt l'objet villes
                var compteur = 0;


                for (i = 0; i < villes.length; i++) {
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);

                    var marker = new google.maps.Marker({
                        position: position,
                        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png',
                        map: map,
                    });
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();

                            }
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");

                            })
                        }
                    })(marker, i));
                    Markers[villes[i].id] = marker


                }
            });
            break;
        case "?p=map&nomOrganisation=PartenaireOperationnelAsk":
            $.ajax({

                url: "Controllers/mapPartOpController.php",

            }).done(function (json) { // Si on obtient une réponse, elle est stockée dans la variable json
                // On construit l'objet villes à partir de la variable json
                var villes = JSON.parse(json);

                // On parcourt l'objet villes
                var compteur = 0;

                for (i = 0; i < villes.length; i++) {
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);
                    var marker = new google.maps.Marker({
                        position: position,
                        icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
                        map: map,
                    });
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();

                            }
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");

                            })
                        }
                    })(marker, i));
                    Markers[villes[i].id] = marker


                }
            });
            break;
        case "?p=map&nomOrganisation=PartenaireRechercheAsk":
            $.ajax({

                url: "Controllers/mapPartRechController.php",

            }).done(function (json) {
                // Si on obtient une réponse, elle est stockée dans la variable json
                // On construit l'objet villes à partir de la variable json console.log(json);

                var villes = JSON.parse(json);

                // On parcourt l'objet villes
                var compteur = 0;

                for (i = 0; i < villes.length; i++) {
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);
                    var marker = new google.maps.Marker({
                        position: position,
                        map: map,
                    });
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();

                            }
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");

                            })
                        }
                    })(marker, i));
                    Markers[villes[i].id] = marker


                }
            });
            break;
        case "?p=map&nomOrganisation=SousPrestataireFormation":
            $.ajax({
                url: "Controllers/mapSousPrestController.php",
            }).done(function (json) {
                // Si on obtient une réponse, elle est stockée dans la variable json
                // On construit l'objet villes à partir de la variable json

                var villes = JSON.parse(json);

                // On parcourt l'objet villes
                var compteur = 0;

                for (i = 0; i < villes.length; i++) {
                    var position = new google.maps.LatLng(villes[i].latitude, villes[i].longitude);
                    var marker = new google.maps.Marker({
                        position: position,
                        map: map,
                    });
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            var div = '<i class="fas fa-times"></i>' + '<h3 class="nomOrg styOrg" >' + villes[i].nomOrganisation + '</h3>' + '<h3 class="styOrg titreOrg">Description</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg">' + villes[i].descriptionOrganisation + '</p>' + '<h3 class="styOrg titreOrg">Adresse</h3>' + '<div class="bordure" ></div>' + '<p class="descOrg styOrg" style="color: white">' + villes[i].adresse + '</p>';
                            if ($(".infomap").css("display", "none")) {
                                compteur++;
                                $(".infomap").css("display", "block");
                                $(".infomap").append(div);
                            }
                            if (compteur % 2 == 0) {
                                $(".infomap").css("display", "none");
                                $(".infomap").children().remove();

                            }
                            $('.fa-times').click(function () {
                                $(".infomap").css("display", "none");

                            })
                        }
                    })(marker, i));
                    Markers[villes[i].id] = marker


                }
            });
            break;
        default:
            console.log("error");

    }

}


window.onload = function () {
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();
};

