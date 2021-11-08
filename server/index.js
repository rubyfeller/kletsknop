var moment = require('moment'); // require
const http = require('http').createServer();
const db = require("./config/database");
let currentTimestamp = moment().format("YYYY-MM-DD HH:mm:ss");
const io = require('socket.io')(http, {
    cors: { origin: "*" }
});

io.on('connection', (socket) => {
    console.log('a user connected');

    socket.on('message', (message) =>     {
        console.log(message);
        io.emit('message', `${socket.id.substr(0,2)} said ${message}` );
        db.query(
            `INSERT INTO buttonclicks (clickId, clickTime, clickMessage) VALUES(NULL, '${currentTimestamp}', '${message}')`)
    })
});

http.listen(8080, () => console.log('listening on http://localhost:8080') );


 
