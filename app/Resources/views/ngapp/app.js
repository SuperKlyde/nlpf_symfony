var express = require('express');
var bodyParser = require('body-parser')
var app = express();

app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());
app.use('/node_modules', express.static(__dirname + '/node_modules'));
app.use('/css', express.static(__dirname + '/css'));
app.use('/js', express.static(__dirname + '/js'));
app.use('/fonts', express.static(__dirname + '/fonts'));
app.use('/views', express.static(__dirname + '/views'));

/**
 * Web page redirection
 */
app.get('/', function (req, res) {
    res.sendFile('index.html', {'root': __dirname + '/views'});
});

/**
 * Binding express app to port 80
 */
app.listen(1337, function () {
    console.log('Node server running @ http://localhost:1337')
});
