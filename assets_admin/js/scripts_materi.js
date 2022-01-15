$(document).ready(function () {
	$("#materi-table").DataTable({
		lengthMenu: [
			[5, 10, 25, -1],
			[5, 10, 25, "All"],
		],
	});
});

$(document).on("click", "#browse", function () {
	var file = $(this).parents().find(".file-materi");
	file.trigger("click");
});
$('input[type="file"]').change(function (e) {
	var fileName = e.target.files[0].name;
	$("#file").val(fileName);

	var reader = new FileReader();
	reader.onload = function (e) {
		// get loaded data and render thumbnail.
		$("#frame").show();
		document.getElementById("frame").src = e.target.result;
	};
	// read the image file as a data URL.
	reader.readAsDataURL(this.files[0]);
});
$(document).on("click", "#editMateri", function () {
	$("#formMateri").modal("show");
	$.ajax({
		type: "GET",
		url: "admin/getMateri/" + $(this).data("id"),
		dataType: "json",
		success: function (data) {
			$("#form-materi").attr("action", "admin/editMateri/" + data[0].id);
			$("#nama-materi").val(data[0].nama);
			$("#deskripsi-materi").val(data[0].deskripsi);
			$("#frame").attr("src", "storage/image/" + data[0].image);
			$("#frame").show();
		},
	});
});
$("#close-form-materi").on("click", function () {
	$("#form-materi").attr("action", "admin/addMateri");
	$("#nama-materi").val("");
	$("#deskripsi-materi").val("");
	$("#frame").attr("src", "");
	$("#frame").hide();
	$("#formMateri").modal("hide");
});
$(document).on("click", "#deleteMateri", function () {
	$("#modal-delete").modal("show");
	$("#idMateri").val($(this).data("id"));
	$("#nama-materi-delete").html($(this).data("nama"));
	var id = $(this).data("id");
	var img = $(this).data("img");
	$("#confirmDelete", function () {
		$.ajax({
			type: "post",
			url: "admin/deleteMateri/" + id + "/" + img,
			success: function () {
				window.location.reload();
			},
		});
	});
});
// $(document).on("click", "#confirmDelete", function () {
// 	var id = $("#idMateri").val();
// 	$.ajax({
// 		type: "post",
// 		url: "admin/deleteMateri/" + id,
// 		success: function () {
// 			window.location.reload();
// 		},
// 	});
// });
