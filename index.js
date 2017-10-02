'use strict';

var express = require('express');
var php = require("php");
var path = require("path");

const PORT = process.env.PORT || 3000;

var app = express();

app.use("/", php.cgi("./"));

app.listen(PORT);

app.listen(PORT, function listening() {
    console.log('Listening on %d', PORT);
});
