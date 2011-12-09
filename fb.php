<!doctype html>
<html>
	<head>
	<title>Facebook</title>
	</head>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
  	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=300350406664679";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<body>
	<h1>Facebook</h1>
	<div class="fb-like" data-href="http://social.ebusiness-projects.com/" data-send="true" data-width="450" data-show-faces="true"></div>

	<iframe src="https://www.facebook.com/plugins/registration.php?
             client_id=300350406664679&
             redirect_uri=http://social.ebusiness-projects.com/&
             fields=[
 {'name':'name'},
 {'name':'first_name'},
 {'name':'last_name'},
 {'name':'email'},
 {'name':'location'},
 {'name':'gender'},
 {'name':'birthday'},
 {'name':'phone',      'description':'Phone Number',             'type':'text'},
 {'name':'anniversary','description':'Anniversary',              'type':'date'},
 {'name':'live',       'description':'Best Place to Live',       'type':'typeahead', 'categories':['city','country','state_province']},
 {'name':'employer',   'description':'Current Employer',	 'type':'typeahead', 'categories':['company']}, 
 {'name':'like',       'description':'Do you like this plugin?', 'type':'checkbox',  'default':'checked'},
 {'name':'comment',    'description':'Comments',                 'type':'text'},
 {'name':'captcha'}
]";
        scrolling="auto"
        frameborder="no"
        style="border:none"
        allowTransparency="true"
        width="100%"
        height="600">
	</iframe>
      </body>
</html>
