let express = require('express'); 
let http = require('http'); 
let path = require('path'); 
let nodemailer = require('nodemailer'); 

let app = express();
let server = http.Server(app);
let port = 8080; 
