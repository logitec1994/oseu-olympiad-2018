function initMap() {
    var uluru = {lat: 46.4000724, lng: 30.7414017};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15.5,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}