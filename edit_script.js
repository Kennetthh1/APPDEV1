document.getElementById("btnupdatestudent").addEventListener("click", function (e) {
	e.preventDefault();

	let id     = document.getElementById("id").value;
	let lname  = document.getElementById("lname").value;
	let fname  = document.getElementById("fname").value;
	let mname  = document.getElementById("mname").value;
	let gender = document.getElementById("gender").value;
	let bday   = document.getElementById("bday").value;

	fetch("edit_controller.php?id=" + encodeURIComponent(id)
		+ "&lname="  + encodeURIComponent(lname)
		+ "&fname="  + encodeURIComponent(fname)
		+ "&mname="  + encodeURIComponent(mname)
		+ "&gender=" + encodeURIComponent(gender)
		+ "&bday="   + encodeURIComponent(bday), {
		method: "GET"
	})
	.then(response => response.text())
	.then(result => {
		let msg = document.getElementById("message");
		if (result === "SUCCESS") {
			msg.style.color = "green";
			msg.innerHTML = "Student updated successfully!";
		} else {
			msg.style.color = "red";
			msg.innerHTML = result;
		}
	});
});