$(document).ready(start);

function start() {
	console.log("response");
	$(".alert-success").hide();
	$("#ajax").on("keydown", () => {
		console.log("response");

		let palabra = $("#ajax").val();
		$.ajax({
			url: `translate.php?pal=${palabra}`,
			type: "GET",
			dateType: "JSON",
			success: (response) => {
				console.log("response");
				console.log(response);
				if (response == "") {
					$("#response").text("No hay traducciones");
				}
				else {
					var response = JSON.parse(response);
				 console.log(response);
					$("#response").html(response.espanol);
				}
			},
			complete: () => {
				$(".alert-success").show();
			}
		}, false);
	});
}