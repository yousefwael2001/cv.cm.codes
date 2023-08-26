<!doctype html>
<html lang="en">
<head>
	<title>Add or Remove Input Fields Dynamically</title>
	@vite('resources/css/app.css')
    
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<style>
		
	</style>
</head>
<body>
    <div class="w-full flex gap-4 my-4">
        <input type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-8/12 shadow-sm">

        <button id="rowAdder" class = "w-3/12 bg-desaturated-blue rounded-xl text-grayish text-xl font-bold"> Add</button>
    </div>
    <div id="newinput"></div>
						                      
	<script type="text/javascript">
		$(".rowAdder").click(function () {
			newRowAdd =
                '<div class="row">'+
                    '<div class="w-full flex gap-4 my-4">'+
                        '<input type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-8/12 shadow-sm">'+
                        '<button class = "DeleteRow w-3/12 bg-desaturated-blue rounded-xl text-grayish text-xl font-bold">Remove</button>'+
                    '</div>'+
                '</div>'
			$('.newinput').append(newRowAdd);
		});
		$("body").on("click", ".DeleteRow", function () {
			$(this).parents(".row").remove();
		})
	</script>
</body>
</html>
