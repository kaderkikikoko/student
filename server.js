


var app = require('http').createServer().listen(8888, function() {
    console.log('Server is running!');
});;
var io = require('socket.io')(app);

io.on('connection',function (socket) {
	console.log('user connected');
   
    socket.on('disconnect',function(socket){
   		console.log('user decconected');
    });
});
