// JavaScript




// Letters only rule validation
$.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z\s-s]+$/i.test(value);
}, "Letters only please"); 
// Phone only rule validation
$.validator.addMethod("phoneUS", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 && phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
    }, "Please specify a valid phone number");

// Form Validation Rules
$("form").validate({

	 rules: {

    full_name: {
      required: true,
      minlength: 2,
      lettersonly: true
    },

    subject: {
      required: true,
      minlength: 2,
      lettersonly: true
    },
    
    email: {required: true},

    message: {
    	required: true,
    	 minlength: 2				    
    }
    
  }
});


// Js Effects

// Bounce in effect 
  wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       false,       // default
      live:         true        // default
    }
  )
  wow.init();


