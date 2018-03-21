
console.log('hallo world');
console.log('Link: http://localhost:8080/');

var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.end('hallo world!');
}).listen(8080); 
