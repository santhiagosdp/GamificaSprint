var express = require('express');
var router = express.Router();
//const gitlab = require('node_modules/node-gitlab-api')
//const Gitlab = require('node-gitlab-api/');
var gitlab = require('node-gitlab');

/* GET home page. */
router.get('/', function(req, res, next) { 
  res.render('index', { title: 'title' });  
});


router.get('/git', function(req, res, next) {
  
  //import Gitlab from 'node-gitlab-api';
  
	 var api = new Gitlab({
		url:   'https://gitlab.com/',
		token: '9AgBi674yykXAo7Gd_yf'	 // chave gitlab santhiago
	}) 
	  
  var n1=1;
  var n2=5;
  var valor = "api";
  res.render('git', { vall: valor }); 

  
});
router.get('/await', function(req, res, next) {
	
var client = gitlab.create({
  api: 'https://gitlab.com/',   
  privateToken: '9AgBi674yykXAo7Gd_yf'   // chave gitlab santhiago
});

function _issuesList ( id) {

        gitlab.Client.issues.list({
            id: id,
            state: 'opened',
            per_page: 100
        });
    }
/*  
var dados = client.milestones.list({id:0}, function (err, milestones) {
  console.log(err, milestones);
}); */

var valor = _issuesList(0);

res.render('await', { vall: valor });
});

module.exports = router;

















