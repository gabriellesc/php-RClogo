var express = require('express');
var php = require("php");
var path = require("path");

var app = express();

app.use("/", php.cgi("./"));

app.listen(3000);

console.log("Server listening!"); 
