import api from "../../lib/api.js";

const doLogin = async () => {
	try {
		const email = $("#email").val();
		const pin = $("#pin").val();

		const { data } = await api.post("/auth/login.php", {
			email,
			pin,
		});

		toastr.success(`Bienvenido ${data.name}!`, "Exito!");
		window.location.replace("/");
	} catch (err) {
		const { data } = err.response.data;
		toastr.error(data.message, "UPS!");
	}
};

const sendPincode = async () => {
	try {
		const email = $("#email-pincode").val();

		await api.post("/auth/send-pincode.php", {
			email,
		});

		$("#email").val(email);
		$("#modal-pincode").modal("hide");
		$("#email-pincode").val("");
		toastr.success(`El PIN ha sido enviado a su correo`, "Exito!");
	} catch (err) {
		const { data } = err.response.data;
		const message = data ? data.message : err;
		toastr.error(message, "UPS!");
	}
};

$(function() {
	$("#form-login").on("submit", function() {
		doLogin();
		return false;
	});

	$("#open-modal-pincode").on("click", function() {
		$("#modal-pincode").modal();
	});

	$("#form-pincode").on("submit", function() {
		sendPincode();
		return false;
	});
});
