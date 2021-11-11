var ws = new WebSocket("ws://localhost:145.93.144.37/");

ws.onopen = function(){
    console.log("Connection is Established");
    ws.send("Message to Send");
};

ws.onmessage = function(evt) {
    var received_msg = evt.data;
    console.log(received_msg);
};