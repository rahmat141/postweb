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
