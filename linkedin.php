<!doctype html>
<html>
	<head>
		<title>Linked In</title>
		
		<!-- 1. Include the LinkedIn JavaScript API and define a onLoad callback function -->
		<script type="text/javascript" src="http://platform.linkedin.com/in.js">/*
		  api_key: ogyp7pit17h1
		  onLoad: onLinkedInLoad
		  authorize: true
		*/</script>
		<script type="text/javascript">
		  // 2. Runs when the JavaScript framework is loaded
		  function onLinkedInLoad() {
		    IN.Event.on(IN, "auth", onLinkedInAuth);
		  }

		  // 2. Runs when the viewer has authenticated
		  function onLinkedInAuth() {
			 IN.API.Profile("me","url=http://www.linkedin.com/in/jakobheuser","url=http://www.linkedin.com/in/deepumohanp")
			    .fields("firstName", "lastName", "industry")
			    .result(displayProfiles)
			    .error(displayProfilesErrors);

			  IN.API.Connections("me")
			    .fields("firstName", "lastName", "industry")
			    .result(displayConnections)
			    .error(displayConnectionsErrors);
		  }

		  // 2. Runs when the Profile() API call returns successfully
		  function displayProfiles(profiles) {
			 var profilesDiv = document.getElementById("profiles");

			  var members = profiles.values;
			  for (var member in members) {
			    profilesDiv.innerHTML += "<p>" + members[member].firstName + " " + members[member].lastName 
			      + " works in the " + members[member].industry + " industry.";
			  }
		  }

		function displayProfilesErrors(error) {
		  profilesDiv = document.getElementById("profiles");
		  profilesDiv.innerHTML = "<p>Oops! Profiles load error.</p>";
		  console.log(error);
		}

		function displayConnections(connections) {
		  var connectionsDiv = document.getElementById("connections");

		  var members = connections.values; // The list of members you are connected to
		  connectionsDiv.innerHTML += "<p><i>Listing "+members.length+" connections</i></p>";
		  for (var member in members) {
		    connectionsDiv.innerHTML += "<p>" + members[member].firstName + " " + members[member].lastName
		      + " works in the " + members[member].industry + " industry</p>";
		  }     
		}

		function displayConnectionsErrors(error) { 
		  profilesDiv = document.getElementById("connections");
		  profilesDiv.innerHTML = "<p>Oops! Connections load error.</p>";
		  console.log(error);
		}
		</script>
	</head>
	<body>
		<!-- 3. Displays a button to let the viewer authenticate -->
		<script type="in/Login">
			Hello, <?js= firstName ?> <?js= lastName ?>.
		</script>

		<!-- 4. Placeholder for the greeting -->
		<div id="profiles"></div>
		<hr/>
		<div id="connections"></div>
	</body>
</html>


