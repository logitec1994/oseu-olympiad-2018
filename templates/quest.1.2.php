<link rel="stylesheet" href="/static/styles/quest.1.2.css">
<script src="/static/javascript/quest.1.2.js"></script>

<style>
    #map {
        width: 100%;
        height: 400px;
        background-color: grey;
    }
</style>

<script>
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
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8jTZRt5PgZfAdfKl5FfJjn7_1ZBLOw08&callback=initMap">
</script>


<div class="home-event-wrap">
    <div class="disc-oseu"></div>
    <div class="disc-fkn"></div>
    <h3>Одесский Государственный Экологический Университет</h3>
    <div id="map"></div>

</div>

