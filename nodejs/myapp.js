var http = require('http');
var url = require('url');

var dt = require('./myfirstmodule');

//create a server object:
http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});//write HTTP header with the correct content type
    
	//res.write("The date and time are currently: " + dt.myDateTime());//write a response to the client
	//res.write(req.url);
	var q = url.parse(req.url, true).query;
	var txt = q.year + " " + q.month;
	//console.log(q);
	res.end(txt);
	//res.end();//end the response
}).listen(3000);//the server object listens on port 3000
