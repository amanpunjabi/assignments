<!DOCTYPE html>
<html>
<head>
	<title>ajaxdemo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style type="text/css">
		table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
	</style>
</head>
<body>
<label >name</label>
<input type="text" id="name" onkeyup="suggestion();"/>
<div id="student"></div>
<script type="text/javascript">
	function suggestion() {

		// alert($('#name').val());
		$.ajax({
		    type: "post",
		    url: "ajaxserver.php",
		    data: {
		        name: $('#name').val()
		    },
		    success: function (data) {
		        $('#student').html(data);

		    }

		});
	}
</script>
</body>
</html>

