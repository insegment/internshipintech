jQuery(document).ready(function($) {

function ValidateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function ValidatePhone(mp) {
    var re = /\(?([0-9]{2})\)?([ .-]?)([0-9]{2})\2([0-9]{2})/;
    return re.test(mp);
}

function ValidatePhoneLength(phone) {
  if (phone.length < 6) {
    return false;
  }
  return true;
}

function ValidateInput(input) {
   var valid = true;
   if ( input === '' || input.length < 2) { 
      valid = false; 
   }
   return valid;
}

function ValidateSelect(select) {
   if ( select === 'none' ) { 
      return false; 
   }
   return true;
}

$(document).ready(function() {
   var ms_ie = false;
    var ua = window.navigator.userAgent;
    var old_ie = ua.indexOf('MSIE ');
    var new_ie = ua.indexOf('Trident/');

    if ((old_ie > -1) || (new_ie > -1)) {
        ms_ie = true;
    }

    if ( ms_ie ) {
        $('body').addClass('inter');
    }
  if($('body.thank-you').length > 0){
        $('html, body').animate({ scrollTop: $('.full-width .menu').offset().top}, 1000);
}
if($('body.not_found').length > 0){
        $('html, body').animate({ scrollTop: $('.full-width .menu').offset().top}, 1000);
}
    // form submit process
    $('.jotform-form').submit(function(e) {
        var isValid = true;
        var first_name = $('#input_1').val();
        var last_name = $('#input_4').val();
        var addr1 = $('#input_8_addr_line1').val();
        var city = $('#input_8_city').val();
        var state = $('#input_8_state').val();
        var postal = $('#input_8_postal').val();
        var country = $('#input_8_country').val();
        var attendance = $('#input_14').val();
        var email = $('#input_17').val();
        var enrollment = $("#input_12").val();  // Added validation for enrollment select field

        if (!ValidateInput(first_name)) {
            $('#input_1').addClass('form-validation-error');
            $('#input_1').parent().parent().addClass('form-line-error');
            if ($('#id_1 .form-error-message').length > 0) {
              $('#id_1 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#input_1').parent().append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else {
            $('#input_1').removeClass('form-validation-error');
            $('#input_1').parent().parent().removeClass('form-line-error');
            if ($('#id_1 .form-error-message').length > 0) {
              $('#id_1 .form-error-message').remove();
            }
        }
        
        if (!ValidateInput(last_name)) {
            $('#input_4').addClass('form-validation-error');
            $('#input_4').parent().parent().addClass('form-line-error');
            if ($('#id_4 .form-error-message').length > 0) {
              $('#id_4 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#input_4').parent().append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else {
            $('#input_4').removeClass('form-validation-error');
            $('#input_4').parent().parent().removeClass('form-line-error');
            if ($('#id_4 .form-error-message').length > 0) {
              $('#id_4 .form-error-message').remove();
            } 
        }
        
        if (attendance === '') {
            $('#input_14').addClass('form-validation-error');
            $('#input_14').parent().parent().addClass('form-line-error');
            if ($('#id_14 .form-error-message').length > 0) {
              $('#id_14 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#input_14').parent().append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else {
          $('#input_14').removeClass('form-validation-error');
          $('#input_14').parent().parent().removeClass('form-line-error');
          if ($('#id_14 .form-error-message').length > 0) {
            $('#id_14 .form-error-message').remove();
          } 
        }
          // Enrollemnt Validation
        if (enrollment === '') {
            $('#input_12').addClass('form-validation-error');
            $('#input_12').parent().parent().addClass('form-line-error');
            if ($('#id_12 .form-error-message').length > 0) {
              $('#id_12 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#input_12').parent().append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else {
          $('#input_12').removeClass('form-validation-error');
          $('#input_12').parent().parent().removeClass('form-line-error');
          if ($('#id_12 .form-error-message').length > 0) {
            $('#id_12 .form-error-message').remove();
          } 
        }
        
        if (addr1 === '' || city === '' || state === '' || postal === '' || country === '') {
            $('#input_8_addr_line1, #input_8_city, #input_8_state, #input_8_postal, #input_8_country').addClass('form-validation-error');
            $('#id_8').addClass('form-line-error');
            if ($('#cid_8 .form-error-message').length > 0) {
              $('#cid_8 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#cid_8').append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else {
          $('#input_8_addr_line1, #input_8_city, #input_8_state, #input_8_postal, #input_8_country').removeClass('form-validation-error');
          $('#id_8').removeClass('form-line-error');
          if ($('#cid_8 .form-error-message').length > 0) {
            $('#cid_8 .form-error-message').remove();
          } 
        }

        if (!ValidateInput(email)) {
            $('#input_17').addClass('form-validation-error');
            $('#input_17').parent().parent().addClass('form-line-error');
            if ($('#id_17 .form-error-message').length > 0) {
              $('#id_17 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#input_17').parent().append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> This field is required.<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else if (!ValidateEmail(email)) {
            $('#input_17').addClass('form-validation-error');
            $('#input_17').parent().parent().addClass('form-line-error');
            if ($('#id_17 .form-error-message').length > 0) {
              $('#id_17 .form-error-message').html('<img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> Enter a valid e-mail address<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div>');
            } else {
              $('#input_17').parent().append('<div class="form-error-message"><img src="http://max.jotfor.ms/images/exclamation-octagon.png" align="left" style="margin-right:5px;"> Enter a valid e-mail address<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>');
            } 
            isValid = false;
        } else {
          $('#input_17').removeClass('form-validation-error');
          $('#input_17').parent().parent().removeClass('form-line-error');
          if ($('#id_17 .form-error-message').length > 0) {
            $('#id_17 .form-error-message').remove();
          }
        }
        
        if (!isValid) {
            e.preventDefault();
        } else {
            $.ajax({
                    type : 'post',
                    url : myAjax.ajaxurl,
                    data: $(this).serialize(),
                    success : function () {
                        location.href = myAjax.site_url + '/open-house/thank-you/';
                    }

            });
            e.preventDefault();
        }

    });
    
    // make sure user can only type in numbers in this input
    $("#contact .input-phone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
  
  });
  
  
$(window).load(function(){
 var selected_elements = '.form-item input, .form-item textarea';
    $(selected_elements).each(function() {
      if ($(this).val() != '') {
        $(this).closest('.form-item').find('label').hide();
      }
    });
    $('.form-item label').click(function(){
      if ($(this).next('input').val() == '') {
        $(this).fadeTo(0, .3);
        $(this).next('input').focus();
      }
    })
    $(selected_elements).not('.form-item-processed')
    .focus(function() {
      $('.form-item input[type="email"]').not(this).blur();
      if ($(this).val() == '') {
        $(this).closest('.form-item').addClass('focus').find('label').fadeTo(0, .3);
      }
      else {
        $(this).closest('.form-item').addClass('focus').find('label').hide();
      }
    })
    .keyup(function() {
      if ($(this).val() == '') {
        $(this).closest('.form-item').addClass('focus').find('label').fadeTo(0, .3);
      }
      else {
        $(this).closest('.form-item').addClass('focus').find('label').hide();
      }
    })
    .blur(function() {
      var $parent = $(this).closest('.form-item');
      $parent.removeClass('focus');
      if ($(this).val() == '') {
        $parent.find('label').fadeTo(0, 1);
      }
    })
    .change(function(){
      if ($(this).val() == '') {
        $(this).closest('.form-item').addClass('focus').find('label').fadeTo(0, .3);
      }
      else {
        $(this).closest('.form-item').addClass('focus').find('label').hide();
      }
    })
    .addClass('form-item-processed');
    
    $('.form-item input').click(function(){
      $(this).removeClass('error');
      $(this).parent('.form-item').removeClass('error_item');
      $(this).next('span').remove('.error_phone');
    });
    $('.form-item input').focus(function(){
      $(this).removeClass('error');
      $(this).parent('.form-item').removeClass('error_item');
      $(this).next('span').remove('.error_phone');
    })
    $('.form-item select').click(function(){
      $(this).removeClass('error');
      $(this).parent('.form-item').removeClass('error_item');
    });
    $('.form-item select').change(function(){
      $(this).removeClass('error');
      $(this).parent('.form-item').removeClass('error_item');
    })
    $('.form-item textarea').click(function(){
      $(this).removeClass('error');
      $(this).parent('.form-item').removeClass('error_item');
    });
    $('.form-item textarea').focus(function(){
      $(this).removeClass('error');
      $(this).parent('.form-item').removeClass('error_item');
    })
    $('.form-item').click(function(){
      $(this).children('input').removeClass('error');
      $(this).children('input').focus();
      $(this).removeClass('error_item');
      $(this).children('span').remove('.error_phone');
    });
    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
       $('body').addClass('iphone');
    }
    var isWindowsPhone = /windows phone/i.test(navigator.userAgent.toLowerCase());
 
    if (isWindowsPhone)
    {
      $('body').addClass('windowph');
    }
});

});