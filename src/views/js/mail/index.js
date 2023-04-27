let express = require('express'); 
let http = require('http'); 
let path = require('path'); 
let nodemailer = require('nodemailer'); 

let app = express();
let server = http.Server(app);
let port = process.env.port || 8080; 

app.set('port', port); 
app.use(express.json()); 
app.use(express.urlencoded({extended:true}));
app.use(express.static(path.join(__dirname, 'views/contact.php')));

//Routing 
app.get('/', function(req, response){
   response.sendFile(path.join(__dirname, 'views/contact.php'));
});

app.post('/send_email',function(req, response){
   var from = req.body.from; 
   var to = req.body.to; 
   var subject = req.body.subject; 
   var message = req.body.message; 
   
   var Transport = nodemailer.createTransport({
      service:'gmail',
      auth:{
         user:'yazid.ziad2000@gmail.com',
         pass:''
      }
   }); 

   var mailOptions = {
     from: from, 
     to: to, 
     subject: subject,
     text: message
   }

   Transport.sendMail(mailOptions, function(error,infos){
     if(error){
      console.log('error send mail: '+error); 
     }else{
      console.log('message sent successfuly :' + infos.response); 
     }
     response.redirect('/'); 
   })
})

// initialize Web Server
server.listen(port, function(){
   console.log('port numbre: '+port);
})