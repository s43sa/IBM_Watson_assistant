<!DOCTYPE html>
<html>
<head>
<title>Control Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

/* For mobile phones: */
[class*="col"] {
  width: 100%;
}

body {
  background: content-box radial-gradient(rgb(255, 255, 255), rgb(107, 121, 197));
 
}

.box {
  border-style: inset;
	border-width: 15px;
	border-color: rgb(71, 61, 206);
  }


.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.center1 {
  margin: 0;
  position: absolute;
  top: 35%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.center3 {
  margin: 0;
  position: absolute;
  top: 65%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.center4 {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 35%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.center5 {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 65%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
</head>


<body>
     <form method="POST" action="conn.php">
     
<br><br><br><br><br><br>
<div class="box"></div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="box"></div>   
<div class="col">
  
<div class="center">
<input type="submit" value = "Stop" name = Stop  style="font-size: 40px; background: rgb(192, 191, 191); border-radius: 60px;" > 
</div>

<div class="center1">
<input type="submit" value = "Forward" name = Forward  style="font-size: 40px; background: rgb(192, 191, 191); border-radius: 35px;" > 
</div>

<div class="center3">
<input type="submit" value = "Backward" name = Backward  style="font-size: 40px; background: rgb(192, 191, 191); border-radius: 35px;" > 
</div>

<div class="center4">
<input type="submit" value = "Left" name = Left  style="font-size: 40px; background: rgb(192, 191, 191); border-radius: 35px;" > 
</div>

<div class="center5">
<input type="submit" value = "Right" name = Right  style="font-size: 40px; background: rgb(192, 191, 191); border-radius: 35px;" > 
</div>
</div>
  </form>
  <script>
    window.watsonAssistantChatOptions = {
        integrationID: "6ed3825d-e021-4f67-97ef-c5a9c519d876", // The ID of this integration.
        region: "us-south", // The region your integration is hosted in.
        serviceInstanceID: "1edfc638-81af-4ca1-b897-f7e9a028cf67", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
  </script>
</body>
</html>