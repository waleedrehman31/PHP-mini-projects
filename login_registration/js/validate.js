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
