<html>
  <head>
    <script src="js/aframe.min.js"></script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <a-asset-item id="room" src="models/room.obj"></a-asset-item>
        <a-asset-item id="room-mtl" src="models/room.mtl"></a-asset-item>
      </a-assets>

      <a-obj-model src="#room" mtl="#room-mtl"></a-obj-model>
    </a-scene>
  </body>
</html>