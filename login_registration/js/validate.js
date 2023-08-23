const validate = new JustValidate("#signup");
validate
	.addField("#name", [
		{
			rule: "required",
		},
	])
	.addField("#email", [
		{
			rule: "required",
		},
		{
			rule: "email",
		},
		{
			validator: async (value) => {
				const response = await fetch(
					"validate_email.php?email=" + encodeURIComponent(value),
				);
				const json = await response.json();
				return json.available;
			},
			errorMessage: "email already taken",
		},
	])
	.addField("#password", [
		{
			rule: "required",
		},
		{
			rule: "password",
		},
	])
	.addField("#password_confirmation", [
		{
			validator: (value, fields) => {
				return value === fields["#password"].elem.value;
			},
			errorMessage: "Password must match",
		},
	])
	.onSuccess((event) => {
		document.getElementById("signup").submit();
	});
