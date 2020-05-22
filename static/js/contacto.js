$("#contactForm").submit(function(e) {
	e.preventDefault();

	var $form = $(this);
	console.log($form)
	// $.post($form.attr("action"), $form.serialize()).then(function() {
	// 	alert("Gracias!");
	// });
});