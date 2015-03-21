/**
 * Created by Q on 3/21/2015.
 */
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
    res.sendfile('./time.html');
});

var interval = setInterval(function() {
    var date = new Date();
    var time = date.getHours()+":"+date.getMinutes()+" "+date.getSeconds()+"s";
    io.emit('timer',time);

},5000);


http.listen(3000, function(){
    console.log('listening on *:3000');
});