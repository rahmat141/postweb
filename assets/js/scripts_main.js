$("#open-allMateri").on("click", function () {
	$("#modal-allMateri").modal("show");
});

$("#filter").on("keyup", function () {
	var input = $(this).val().toLowerCase();

	$(".material").each(function () {
		var nodes = $(this);
		for (i = 0; i < nodes.length; i++) {
			if (nodes[i].innerText.toLowerCase().includes(input)) {
				$(this).show();
			} else {
				$(this).hide();
			}
		}
		// if ($(this).data("string").toUpperCase().indexOf(input) < 0) {
		// 	$(this).hide();
		// } else {
		// 	$(this).show();
		// }
	});
});

$(document).on("click", "#downloadMateri", function () {
	var a = document.createElement("a");
	a.href = $(this).data("img");
	a.download = $(this).data("name") + ".jpg";
	document.body.appendChild(a);
	a.click();
	document.body.removeChild(a);
});
