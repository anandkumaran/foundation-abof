/*!
 * Custom scripts 
 */
 $(document).ready(function() {
	$.validator.addMethod(
    'regex',
    function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    'Check your input!'
  );

  $('#frmContactUs').validate({
		errorElement: 'span',
      onkeyup: function(element) {
        if ($(element).val() || $(element).val() !== '') {
          this.element(element);
        }
      },
      onfocusout: function(element) {
        if ($(element).val() || $(element).val() !== '') {
          this.element(element);
        }
      },
      rules: {
				firstname: {
					required: true
				},
				lastname: {
					required: true
				},
				email: {
					required: true,
					regex: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i
				},
				country: {
					required: true
				},
				pincode: {
					required: true,
					number: true
				}
      },
      messages: {

      }
  });
 });