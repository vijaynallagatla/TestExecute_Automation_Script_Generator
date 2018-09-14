<!DOCTYPE HTML>
<html>
 <head>
  <title>TouchStone</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
	<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<style>
	.navbar{
		background-color=#1ABC9C;
	}
	</style>
	<script>
	//Variable to Give Unique ID to all Children Tags in Project XML FIle
	var counter = 2;
	
	//Hide Status Division
	
	$('#projectStatus').show();
		
	//Function to create Project with Variables and Dummy Objects
	function createProject() {
		var objectType=document.getElementById('objectType').value;
		var objectName=document.getElementById('objectName').value;
		var projectname=document.getElementById("pName").value;
		document.getElementById("projectStatus").value="Please Wait ...";
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
					$('#projectStatus').show();
				document.getElementById("projectStatus").innerHTML = xhttp.responseText;	
			}
		};
		xhttp.open("POST", "CreateProject.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("projectname="+projectname);
	}

	//Ajax for sending Request to Zip a project Folder and Provide Zipped Folder to Download
	$(document).ready(function(){
		$("#downloadProject").click(function(e) {
			document.getElementById("downloadStatus").value="Project Downloaded Successfully";
			//To get the projectName
			var projectname=document.getElementById("pName").value;
			var xhttp5 = new XMLHttpRequest();
			xhttp5.onreadystatechange = function() {
				if (xhttp5.readyState == 4 && xhttp5.status == 200) {
					document.getElementById("downloadStatus").innerHTML = xhttp5.responseText;
					//After Zipping is Successfull let it to download to local Machine
					var zip="projects/"+document.getElementById("pName").value+".zip";
					e.preventDefault();  //stop the browser from following
					window.location.href = zip;	
				}
			};
			xhttp5.open("POST", "ZipFolder.php", true);
			xhttp5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp5.send("projectname="+projectname);
		});
	});

	//Jquery function to handle 'Add Modules' Button to create Modules and insert into project's xml file
	$(document).ready(function(){
    	var objectType=document.getElementById('objectType').value;
		var objectName=document.getElementById('objectName').value;
		jQuery('button.add').click(function(){
			var objectType=document.getElementById('objectType').value;
			var objectName=document.getElementById('objectName').value;
			var newRow = "<tr><td><h4>"+objectName +"<h4></td><td><h4>"+objectType+"</h4></td></tr>";
			//Increment Counter after atleast 4 Module creation for each Object
			counter+=10;
			//Function to create Modules -> CreateModule.php
			createModules(objectName,objectType,counter);
      
			document.getElementById('objectName').value="";
			document.getElementById('objectName').focus;
			$("#dataTable").append(newRow);
	    });
	});

	//Function to create Modules after hitting Create new Modules Button
	function createModules(objectName,objectType,counter){
		var projectname=document.getElementById("pName").value;

		var xhttp3 = new XMLHttpRequest();
		xhttp3.onreadystatechange = function() {
			if (xhttp3.readyState == 4 && xhttp3.status == 200) {
				//document.getElementById("objectStatus").innerHTML = xhttp3.responseText;
			}
		};
		xhttp3.open("POST", "addModules.php", true);
		xhttp3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp3.send("projectname="+projectname+"&objectName="+objectName+"&objectType="+objectType+"&counter="+counter);
	}
	
	/*
	$(document).ready(function() {
    $('#dataTable').DataTable();
} );
	*/
	</script>
  </head>
	<body>
	<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" style="font-size:20pt;color:#1ABC9C" href="#page-top">TouchStone Project</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php" style="font-size:16pt;color:#1ABC9C">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="aboutPage.php" style="font-size:16pt;color:#1ABC9C">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="well">
					<h3 style="color:#1ABC9C"><center><u>Enter Project Details</u></center></h3><br/>
					<div class="row">
						
						<div class="col-md-6">
							<input placeholder="Specify the Project Name" class="form-control" type="text" id="pName"/> 
						</div>
						<div class="col-md-6">
							<button class="btn btn-md btn-success" onclick="createProject()" style="width:"90%">  Create Project</button><br/>
						</div>

					</div>
					<br/>

					<p id="projectStatus" class="text-success">	<strong >Success!</strong> Indicates a successful or positive action.</p>
					
					<div class="alert alert-info" >
					<center>	<strong><p> Enter Object Name and Object Type to create Modules</strong></center>
					<input  placeholder="Specify the Object Name "class="form-control" id="objectName"> </input><br/>
					<Label style="display:inline;">Specify Object Type</Label>

					<select id="objectType" class="selectpicker" >
						<option value="Textbox">Textbox</option>
						<option value="Button">Button</option>
						<option value="CheckBox">CheckBox</option>
						<option value="ComboBox">ComboBox</option>
						<option value="List">List</option>
						<option value="Grid">Grid</option>
						<option value="RadioButton">RadioButton</option>
					</select>
					<br/>
					<br/>
					<center><button class="btn btn-primary add">Create New Referenceable Module</button>	
					
				</div>
				
				</div>
				<div class="well"><center>
					<a class="btn btn-lg btn-info"  style="width:100%" id="downloadProject">Download </a> 	
				</div>
				<div class="alert alert-success" id="downloadStatus">
					<strong>Success!</strong> Indicates a successful or positive action.
				</div>
			</div>
			<div class="col-md-8">
				<div class="well">
					<table id="dataTable" class=class="table table-bordered " style="color:#1ABC9C" cellspacing="0" width="100%">  
						<thead>  
							<tr>  
								<th>Object Name</th>  
								<th>Object Type</th>   
							</tr>  
						</thead> 
					</table>
				</div>
			</div>
			</div>
	</div>
	<center> <h5 style="margin-top:50px"> &copy; All Rights Reserved. Developer: Vijay,N. Email: vijai.nallagatla@gmail.com </h5></center> 
</div>

</body>
</html>