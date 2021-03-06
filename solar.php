<!DOCTYPE html>
 <html>
    <head>		
		<title>Solar System</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		
		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
				<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css" />

		<style>
		body { margin: 0; padding: 0;}

		canvas { 
		/*max-width: 60%!important;*/
		/*max-width: 60%!important;*/
		width: 60%!important;
		z-index: 98;
		height: 46%;
		opacity: 1;
		 border-radius: 100%;
		 top: 12%!important;
		 border-radius: 100%;
		 	padding-left: 12%;
		 	padding-right: 16%;
		 	padding-bottom: 0%;
		 	left: 0px!important;
		 /*padding-left: 15%;
		 padding-right: 13%;*/
	  


		}

		@media only screen and (max-width: 700px) {
			canvas { 
		max-width: 100%!important;
		width: 100%!important;
		 /*height: 37vh;*/
		 height: 31vh;
		 padding-left: 23%;
		 padding-right: 25%;
		 padding-top: 2%;
		 padding-bottom: 2%;
		 overflow-x: hidden;
		 border-radius: 100%;
		 top: 2.5%!important;

	  


		}

		}


		/*@media only screen and (max-width: 500px) {
			canvas {
				padding-top: 3%;
			}
		}


		@media only screen and (max-width: 400px) {
			canvas {
				padding-top: 4%;
			}
		}

		@media only screen and (max-width: 300px) {
			canvas {
				padding-top: 5%;
			}
		}


		@media only screen and (max-width: 275px) {
			canvas {
				padding-bottom: 3%;
			}
		}

		@media only screen and (max-width: 250px) {
			canvas {
				padding-top: 6%;
			}
		}

		@media only screen and (max-width: 200px) {
			canvas {
				padding-top: 7%;
				padding-bottom: 5%;
			}
		}

		@media only screen and (max-width: 170px) {
			canvas {
				padding-top: 9%;
				padding-bottom: 6%;
			}
		}

		@media only screen and (max-width: 130px) {
			canvas {s
				padding-top: 11%;
				padding-bottom: 8%;
			}
		}


		@media only screen and (max-width: 110px) {
			canvas {
				padding-top: 13%;
				padding-bottom: 10%;


			}
		}*/

		/*@media only screen and (max-width: 600px){
			canvas {
				padding-bottom: 6%;
				top: 32px!important
			}
		}

		@media only screen and (max-width: 500px){
			canvas {
				padding-bottom: 7%;
				
			}
		}


		@media only screen and (max-width: 450px){
			canvas {
				padding-top: 5%!important;
				padding-left: 24.5%!important;
				padding-bottom: 8%!important;
			}
		

		@media only screen and (max-width: 400px){
			canvas {
				padding-top: 6%!important;
				padding-left: 25%!important;
				padding-bottom: 9%!important;
			}
		}

		@media only screen and (max-width: 375px){
			canvas {
				padding-top: 13%!important;
				
				padding-bottom: 10%!important;
			}
		}

		@media only screen and (max-width: 300px){
			canvas {
				padding-top: 8%!important;
				
				padding-bottom: 12%!important;
			}
		}

		@media only screen and (max-width: 250px){
			canvas {
				padding-top: 10%!important;
				
				padding-bottom: 14%!important;
			}
		}*/



		
		
		
		
	  </style>

	  			<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	      <script src="js/three.min.js"></script>
		  <script src="js/OrbitControls.js"></script>
		  <script src="js/GLTFLoader.js"></script>
		  <script src="js/AnimationMixer.js"></script>
		  <script src="js/stats.min.js"></script>
		  <script src="js/CSS2DRenderer.js"></script>
		  <script src="js/libs/dat.gui.min.js"></script>
		  
  </head>
    <body>
    	<div id="info">
	</div>
	
	<script>	


	
 	// Load 3D Scene
	var scene = new THREE.Scene(); 
	scene2 = new THREE.Scene();
	var Stats;
	var innerw,height;
	var stars=[];
	var guic, controlConfig= {
	freezState: false,
	revolveSpeed: 24
	};


	// For orbit
	var marker, spline;
	var matrix = new THREE.Matrix4();
	var up = new THREE.Vector3( 0, 1, 0 );
	var axis = new THREE.Vector3();

	
	// Planet Orbit Variable Declaration
	var mercpath,venpath,earthpath,moonpath,marspath,juppath,satpath,urapath,neppath;

	var planobj=[];
	var pathobj=[];
	// the getPoint starting variable - !important - You get me ;)
	var mt=vet=eat=mat=jupt=satt=urat=nept = 0;


	// Ellipse class, which extends the virtual base class Curve
	function Ellipse( xRadius, yRadius ) {
	THREE.Curve.call( this );
	// add radius as a property
	this.xRadius = xRadius;
	this.yRadius = yRadius;
	}

	Ellipse.prototype = Object.create( THREE.Curve.prototype );
	Ellipse.prototype.constructor = Ellipse;

	// define the getPoint function for the subClass
	Ellipse.prototype.getPoint = function ( t ) {

		var radians = 2 * Math.PI * t;

		return new THREE.Vector3( this.xRadius * Math.cos( radians ),
								0,
								this.yRadius * Math.sin( radians ) );

	};




 	// Load Camera Perspective 10 30 100
	// var camera = new THREE.PerspectiveCamera( 25, window.innerWidth / window.innerHeight, 1, 20000 );
	// camera.position.set( 160, 2, 9 );

	var scene = new THREE.Scene();

var camera = new THREE.PerspectiveCamera(
  20, // Field of view
  16 / 9, // Aspect ratio
  0.1, // Near plane
  10000 // Far plane
);

//camera.position.set(250, 20, 10);    //250,2,9

	
	function myFunction(x) {
  if (x.matches) { // If media query matches
 camera.position.set(280, 25, 10);    //250,2,9
  		

  } else {
// camera.position.set(230, 25, 10);    //250,2,9
	camera.position.set(240, 90, 120);
  }
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

	// RayCaster 
	raycaster = new THREE.Raycaster();
	mouse = new THREE.Vector2();


	// Load a Renderer
	var ctx = document.body.appendChild(document.createElement('canvas')).getContext('2d');
	var renderer = new THREE.WebGLRenderer({antialias: true , alpha: true});
	// renderer.setClearColor();
	 renderer.setClearColor(0x000000, 0 );
	 renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize(window.innerWidth, window.innerHeight);
	innerw=window.innerWidth;
	height=window.innerHeight;
	document.body.appendChild(renderer.domElement);




	

 	// Load the Orbitcontroller
	var controls = new THREE.OrbitControls( camera, renderer.domElement ); 
	controls.minDistance=10;
	controls.maxDistance=500;
 	// Load Light
	var ambientLight = new THREE.AmbientLight( 0xffffff );
	scene.add( ambientLight );


	var directionalLight = new THREE.DirectionalLight( 0xffffff );
	directionalLight.position.set( 0, 1, 1 ).normalize();
	scene.add( directionalLight );	


	// Stars 
	function addSphere(){
		// The loop will move from z position of -1000 to z position 1000, adding a random particle at each position. 
		for ( var z= -1000; z < 1000; z+=20 ) {
		// Make a sphere (exactly the same as before). 
		var geometry   = new THREE.SphereGeometry(0.5, 32, 32)
		var material = new THREE.MeshBasicMaterial( {color: 0xffffff} );
		var sphere = new THREE.Mesh(geometry, material)
		sphere.position.x= Math.random()*innerw-Math.random()*innerw*2;
		sphere.position.y=Math.random()*height-Math.random()*height*2;
		// Then set the z position to where it is in the loop (distance of camera)
		sphere.position.z = z;	
		// scale it up a bit
		sphere.scale.x = sphere.scale.y = 1;
		//add the sphere to the scene
		scene.add( sphere );
			//finally push it to the stars array 
			stars.push(sphere); 
		}
	}
	 function animateStars() { 
				
	 			// loop through each star
	 			for(var i=0; i<stars.length; i++) {
	 				star = stars[i]; 
	 				// and move it forward dependent on the mouseY position. 
	 				star.position.z +=  i/10;
	 				// if the particle is too close move it to the back
	 				if(star.position.z>2000) star.position.z-=3000; 
					
	 			}
			
	}

	
	 

    // params
    var pathSegments = 128;
    var tubeRadius = 0.03;
    var radiusSegments = 4;
    var closed = false;
	

    // material
    var material = new THREE.MeshPhongMaterial( {
        color: 'grey', 

    } );
	
    // mercury orbit mesh 15 10
	mercpath = new Ellipse( 15, 10 );
    var mercgeometry = new THREE.TubeBufferGeometry( mercpath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( mercgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);

	
	
	// venus orbit mesh
	venpath = new Ellipse(22,15);
    var venusgeometry = new THREE.TubeBufferGeometry( venpath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( venusgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Earth Orbit
	earthpath = new Ellipse( 28, 22 );
    var earthgeometry = new THREE.TubeBufferGeometry( earthpath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( earthgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Moon
	moonpath = new Ellipse( 5, 3 );
    var moongeometry = new THREE.TubeBufferGeometry( moonpath, pathSegments, 0.0001, radiusSegments, closed );
	mesh = new THREE.Mesh( moongeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Mars Orbit
	marspath = new Ellipse( 35, 28 );
    var marsgeometry = new THREE.TubeBufferGeometry( marspath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( marsgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Jupiter Orbit
	juppath = new Ellipse( 46, 34 );
    var jupgeometry = new THREE.TubeBufferGeometry( juppath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( jupgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Saturn Orbit
	satpath = new Ellipse( 57, 42 );
    var satgeometry = new THREE.TubeBufferGeometry( satpath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( satgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Uranus Orbit
	urapath = new Ellipse( 69, 49 );
    var urageometry = new THREE.TubeBufferGeometry( urapath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( urageometry, material );
	scene.add( mesh );
	pathobj.push(mesh);
	// Neptune Orbit
	neppath = new Ellipse( 79, 59 );
    var nepgeometry = new THREE.TubeBufferGeometry( neppath, pathSegments, tubeRadius, radiusSegments, closed );
	mesh = new THREE.Mesh( nepgeometry, material );
	scene.add( mesh );
	pathobj.push(mesh);


	
 	// glTf 2.0 Loader



	var loader = new THREE.GLTFLoader();

	// Planets variables;
	var sun,mercury,venus,earth,moon,mars,jupiter,saturn,uranus,neptune;	

	var moonorbit;		


	loader.load( 'model/sun/sun.gltf', function ( gltf ) {           //   <<--------- Model Path
	sun = gltf.scene;			
	gltf.scene.scale.set( 25, 25, 25 );			   
	gltf.scene.position.x = 0;				    //Position (x = right+ left-) 
    gltf.scene.position.y = -2;				    //Position (y = up+, down-)
	gltf.scene.position.z = -5;				    //Position (z = front +, back-)
	//gltf.animations;
	scene.add( gltf.scene );
	planobj.push(sun);
	});

	loader.load( 'model/mercury/mercury.gltf', function ( gltf ) {           //   <<--------- Model Path
	mercury = gltf.scene;			
	gltf.scene.scale.set( 14, 14, 14 );			   
	var pt = mercpath.getPoint( mt );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(mercury);
	});

	loader.load( 'model/venus/venus.gltf', function ( gltf ) {           //   <<--------- Model Path
	venus = gltf.scene;
	gltf.scene.scale.set( 10, 10, 10 );			   
	var pt = venpath.getPoint( vet );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(venus);
	});

	loader.load( 'model/earth/earth.gltf', function ( gltf ) {           //   <<--------- Model Path
	earth = gltf.scene;			
	gltf.scene.scale.set( 10, 10, 10 );			   
	var pt = earthpath.getPoint( eat );
	moonorbit = earthpath.getPoint( eat );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(earth);
	});

	/*loader.load( 'model/moon/moon.gltf', function ( gltf ) {           //   <<--------- Model Path
	moon = gltf.scene;			
	gltf.scene.scale.set( 1, 1, 1 );			   
	//var pt = moonpath.getPoint( eat );
	gltf.scene.position.set(moonorbit.x+2,moonorbit.y+2,moonorbit.z);
	scene.add( gltf.scene);
	});
	*/
	loader.load( 'model/mars/mars.gltf', function ( gltf ) {           //   <<--------- Model Path
	mars = gltf.scene;			
	gltf.scene.scale.set( 15, 15, 15 );			   
	var pt = marspath.getPoint( mat );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(mars);
	});

	loader.load( 'model/jupiter/jupiter.gltf', function ( gltf ) {           //   <<--------- Model Path
	jupiter = gltf.scene;			
	gltf.scene.scale.set( 15, 15, 15 );			   
	var pt = juppath.getPoint( jupt );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(jupiter);
	});

	
	loader.load( 'model/saturn/saturn.gltf', function ( gltf ) {           //   <<--------- Model Path
	saturn = gltf.scene;			
	gltf.scene.scale.set( 18, 18, 18 );			   
	var pt = satpath.getPoint( satt );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(saturn);
	});

	loader.load( 'model/uranus/uranus.gltf', function ( gltf ) {           //   <<--------- Model Path
	uranus = gltf.scene;			
	gltf.scene.scale.set( 14, 14, 14 );			   
	var pt = urapath.getPoint( urat );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(uranus);
	});

	loader.load( 'model/neptune/neptune.gltf', function ( gltf ) {           //   <<--------- Model Path
	neptune = gltf.scene;			
	gltf.scene.scale.set( 14, 14, 14 );			   
	var pt = neppath.getPoint( nept );
	gltf.scene.position.set(pt.x,pt.y,pt.z);
	scene.add( gltf.scene);
	planobj.push(neptune);
	});


	// FPS stats
	// stats = new Stats();
	// document.body.appendChild( stats.dom );
	window.addEventListener( 'resize', onWindowResize, false );


	document.addEventListener( 'mousedown', onDocumentMouseDown, false );
	document.addEventListener( 'touchstart', onDocumentTouchStart, false );

	// guic = new dat.GUI( { width: 350 } );


	// Controls
	// var controlGUI = guic.addFolder( "Controls" );
	//controlGUI.add(controlConfig.freezState,'Freeze State').listen();

	// controlGUI.add( controlConfig, 'freezState' )
	
	// controlGUI.add( controlConfig, 'revolveSpeed', 1, 24 ).onChange( function() 
	// {
	// 	//sunLight.shadow.camera.near = shadowConfig.shadowCameraNear;
	// 	//sunLight.shadow.camera.updateProjectionMatrix();
	// 	//shadowCameraHelper.update();

	// });



	function onWindowResize( event ) 
	{
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight );
	//controls.handleResize();
	}
	
	function onDocumentTouchStart( event ) {



	event.clientX = event.touches[0].clientX;
	event.clientY = event.touches[0].clientY;
	onDocumentMouseDown( event );
	}

function onDocumentMouseDown( event ) {

	

	mouse.x = ( event.clientX / renderer.domElement.clientWidth ) * 2 - 1;
	mouse.y = - ( event.clientY / renderer.domElement.clientHeight ) * 2 + 1;

	raycaster.setFromCamera( mouse, camera );

	 var intersects = raycaster.intersectObjects( pathobj );

	if ( intersects.length > 0 ) {
	var pt = intersects[0].getPoint( mt );

	
	}

}
	function animate() 
	{
	requestAnimationFrame( animate );
	renderer.render( scene, camera );
	//if (!guic.freezState) return;
	animateStars();
	// TO freeze Planet State

	if(!controlConfig.freezState)
		revolvePlanet();
	// console.log(controlConfig.revolveSpeed);
	// stats.update();
	}

	document.body.appendChild(renderer.domElement);
renderer.domElement.style.position =
  ctx.canvas.style.position = 'absolute';




	function resize() {

  var ratio = 20 / 9,
    preHeight = window.innerWidth / ratio;

  if (preHeight <= window.innerHeight) {
    renderer.setSize(window.innerWidth, preHeight);
    ctx.canvas.width = window.innerWidth;
    ctx.canvas.height = preHeight;
  } else {
    var newWidth = Math.floor(window.innerWidth - (preHeight - window.innerHeight) * ratio);
    newWidth -= newWidth % 2 !== 0 ? 1 : 0;
    renderer.setSize(newWidth, newWidth / ratio);
   ctx.canvas.width = newWidth;
    ctx.canvas.height = newWidth / ratio;
  }

  renderer.domElement.style.width = '';
  renderer.domElement.style.height = '';
  renderer.domElement.style.left = ctx.canvas.style.left = (window.innerWidth - renderer.domElement.width) / 2 + 'px';
  renderer.domElement.style.top = ctx.canvas.style.top = (window.innerHeight - renderer.domElement.height) / 2 + 'px';
}

window.addEventListener('resize', resize);

resize();
var  diffDays;

function planetdate (){

// 	var day = 10 ; 
// 	var month = 5;
// 	var year = 2021;

// 	var getDaysInMonth = function(month,year) {
//   // Here January is 1 based
//   //Day 0 is the last day in the previous month
//  return new Date(year, month, 0).getDate();
// // Here January is 0 based
// // return new Date(year, month+1, 0).getDate();
// };
// for (var i = 1; i<=month; i++){
// 	console.log(getDaysInMonth(i,year))
// }
}
	var today = new Date();
	var date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
	var getDate;
		function revolvePlanet(){
			localStorage.getItem('date')? getDate = localStorage.getItem('date') : getDate = date;
			var date1 = new Date("03/14/2020");
			var date2 = new Date(getDate);
			var diff = date2.getTime() - date1.getTime();
			diffDays = diff/(1000 * 3600 * 24);

			console.log('diff is ', diffDays);
			var point = 1/360;
	
		if (mercury)
		{ 	//mercury.rotation.y+=0.02;
			var pt = mercpath.getPoint( mt );
			var tangent = mercpath.getTangent( mt ).normalize();
			mercury.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// mt = 0.04 + (diffDays * 0.005);
			mt = (43 + (diffDays*(360/88))) * point ; 
		}
		if (venus) 
		{	
			//venus.rotation.y+=0.04;
			var pt = venpath.getPoint( vet );
			var tangent = venpath.getTangent( vet ).normalize();
			venus.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// vet = 0.8 + (diffDays * 0.001);
			vet = (311 + (diffDays*(360/224))) * point;
		}
		if (earth)
		{ 	//earth.rotation.y+=0.02;
			var pt = earthpath.getPoint( eat );
			var tangent = earthpath.getTangent( eat ).normalize();
			earth.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );	
			// eat = 0.02 + (diffDays * 0.0003);
			eat = (0 + (diffDays*(360/365.2564))) * point;
		}
		if (moon)
		{ 	moon.rotation.y+=0.02;
			var pt = earthpath.getPoint( eat );
			var tangent = earthpath.getTangent( eat ).normalize();
			moon.position.set(pt.x+2,pt.y+2,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );	
			eat = (eat >= 1) ? 0 : eat += 0.0003/controlConfig.revolveSpeed;
		}
		if (mars) 
		{	//mars.rotation.z+=0.02;
			var pt = marspath.getPoint( mat );
			var tangent = marspath.getTangent( mat );
			mars.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// mat = 	0.22 + (diffDays * 0.0001);
			mat = (75 + (diffDays*(360/687))) * point;
		}
		if (jupiter) 
		{	jupiter.rotation.y+=0.001;
			var pt = juppath.getPoint( jupt );
			var tangent = juppath.getTangent( jupt ).normalize();
			jupiter.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// jupt = 0.27	+(diffDays * 0.00006);
			jupt = (105+ (diffDays*(360/4329.265))) * point;
		}
		if (saturn) 
		{	saturn.rotation.y+=0.009;
			var pt = satpath.getPoint( satt );
			var tangent = satpath.getTangent( satt ).normalize();
			saturn.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// satt = 0.3 + (diffDays * 0.00003);
			satt = (113+ (diffDays*(360/10759))) * point;
		}
		if (uranus) 
		{	uranus.rotation.y+=0.0004;
			var pt = urapath.getPoint( urat );
			var tangent = urapath.getTangent( urat ).normalize();
			uranus.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// urat = 0.5 + (diffDays * 0.000009);
			urat = (219 + (diffDays*(360/30688.5)))* point;
		}
		if (neptune) 
		{	neptune.rotation.y+=0.0004;
			var pt = neppath.getPoint( nept );
			var tangent = neppath.getTangent( nept ).normalize();
			neptune.position.set(pt.x,pt.y,pt.z);
			// calculate the axis to rotate around
			axis.crossVectors( up, tangent ).normalize();
			// calcluate the angle between the up vector and the tangent
			var radians = Math.acos( up.dot( tangent ) );
			// nept = 0.4 + (diffDays * 0.0000009);
			nept = (171 + (diffDays*(360/60182))) * point ;
		}
		

	}
	addSphere();
	animate();

	
	

</script>	
</body>
</html>