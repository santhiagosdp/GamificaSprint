var express = require('express');
var router = express.Router();
var gitlab = require('node-gitlab');
//var Gitlab = require('node-gitlab-api/dist/latest');

/* GET home page. */
router.get('/', function(req, res, next) {
	var t = "Express";
	if(req.query.title){
		t = req.query.title;
	}
	
	 //acesso a API GITLAB
	 var client = gitlab.create({
	  api: 'http://gitlab.com',
	  privateToken: '9AgBi674yykXAo7Gd_yf'
	});
	client.milestone.list({id: 1}, function (err, milestones) {
	  console.log(milestones);
	});  
  /* const api = new Gitlab({
  url:   'http://gitlab.com', // Defaults to http://gitlab.com
  token: '9AgBi674yykXAo7Gd_yf'	//Can be created in your profile. 
}) */
  
	
  
  res.render('index', { title: t });
});

module.exports = router;
