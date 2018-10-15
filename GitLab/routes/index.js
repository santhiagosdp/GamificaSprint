var express = require('express');
var router = express.Router();
var gitlab = require('node-gitlab');

/* GET home page. */
router.get('/', function(req, res, next) {
	var t = "Express";
	if(req.query.title){
		t = req.query.title;
	}
	
	//acesso a API GITLAB
	var client = gitlab.create({
	  api: 'http://gitlab.bitstudio.io/api/v4/',
	  privateToken: 'dzaGyDgJBw4_EqexA9sx'
	});
	var t= client.milestone.list({id: 1}, function (err, milestones) {
	  console.log(milestones);
	});
  
	
  
  res.render('index', { title: t });
});

module.exports = router;
