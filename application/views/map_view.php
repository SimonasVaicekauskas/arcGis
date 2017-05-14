
	<div id="map">
	<div id="LocateButton"></div>
	</div>	
	<script>
    var map; 

    require([
      "esri/map", 
      "esri/dijit/LocateButton",
      "dojo/domReady!"
    ], function(
      Map, LocateButton
    )  {

      map = new Map("map", {
        center: [-56.049, 38.485],
        zoom: 3,
        basemap: "streets"
      });
            
      geoLocate = new LocateButton({
        map: map
      }, "LocateButton");
      geoLocate.startup();
    });

		</script>
	</div>
