
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@Gyani_Bro</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #000;
        color: #fff;
      }

      #player {
        position: absolute;
        width: 100% !important;
        height: 100% !important;
      }

      #tele {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #0088cc;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 50px;
        font-weight: bold;
        display: flex;
        align-items: center;
        cursor: pointer;
        z-index: 1001;
      }

      #tele img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
      }
    </style>
  </head>
  <body>
    <div id="player"></div>

    <script src="//ssl.p.jwpcdn.com/player/v/8.25.1/jwplayer.js"></script>
    <script>
      jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';

      window.onload = function() {
        var playerInstance = jwplayer("player");
        var source = {
          "file": "https://d1yws6emo43ny.cloudfront.net/CH5/masterCH5.mpd",
          "default": true,
          onXhrOpen: function(xhr, url) {
            xhr.setRequestHeader(
              'Authorization',
              'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ3bXZlciI6Miwid21pZGZtdCI6ImFzY2lpIiwid21pZHR5cCI6MSwid21rZXl2ZXIiOjEsIndtaWRsZW4iOjUxMiwid21pZCI6Ik1qY3hZV0ZtWXpZdFptTXhNaTAwWVRrMkxXSTFNbU10TnpZMk0yVTJaVFZoWldJNSIsIndtb3BpZCI6MzIsImV4cCI6MTczMjU5MjcyOCwiaWF0IjoxNzMxOTg4NzI4fQ.4k_BFJaMkyQT_rCnWPBszMzT-gWhCLLzcYv9fuG1fCc'
            );
          }
        };
        source.type = "dash";
        source.drm = {
          "clearkey": {
            "keyId": "a8eb0f152c6e429ca7a53f399aadf257",
            "key": "c593c2eeea62742285b99e4d87b1c84a"
          }
        };
        playerInstance.setup({
          playlist: [{
            "sources": [source]
          }],
          width: "100%",
          height: "100%",
          aspectratio: "16:9",
          autostart: true,
          cast: {
            appid: 'CC1AD845'
          }
        });
      };


    </script>
  </body>
</html>
