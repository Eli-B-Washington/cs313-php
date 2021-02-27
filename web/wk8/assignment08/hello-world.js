// Load the http module to create an http server.
const http = require('http');
const hostname = 'localhost';
const port = 8888;

//configure http server to respond with the approptiate response
var server = http.createServer(onRequest);


function onRequest(request, response) {

if (request.url == '/home'){
  response.writeHead(200, {"Content-Type": "text/plain"});
  response.write("Welcome to the Home Page\n");
  response.end();
    }
 else if (request.url == '/getData'){
        response.writeHead(200, {"Content-Type": "text/plain"});
        const fs = require('fs');
        let rawdata = fs.readFileSync('student.json');
        let student = JSON.parse(rawdata);
        response.write(student.name + " " + student.class);
        response.end();
          }

          else if (request.url == '/extra'){
            response.writeHead(200, {"Content-Type": "text/plain"});
            response.write("This is Extra!\n");
            response.end();
              }

else{
  response.writeHead(404, {"Content-Type": "text/html"});
  response.write("Incorrect Address\n");
        response.end();
}
}




// Listen on port 8000, IP defaults to 127.0.0.1
server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
  });
