/*================================VALIDATORS==================================*/
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
/*===============================END=VALIDATORS===============================*/


function reset_select() {
  $('.article .actions select').val('none');
  $('.whitepapers .actions select').val('none');
  $('.quotes .actions select').val('none');
  $('.interviews .actions select').val('none');
  $('.awards .actions select').val('none');
}

function add_article() {
  $('#add-article').submit(function(e) {
    var valid = true;
    var msg = 'Validation errors. Please fill in all the fields.';
    
    e.preventDefault();
    var art_date = $('#add_date').val();
    var art_name = $('#add_name').val();
    var art_url = $('#add_url').val();
    var art_source = $('#add_source').val();
    
    if (!ValidateInput(art_date)) {
      valid = false;
      $('#add_date').parent().parent().addClass('has-error');
    } else {
      $('#add_date').parent().parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_name)) {
      valid = false;
      $('#add_name').parent().addClass('has-error');
    } else {
      $('#add_name').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_url)) {
      valid = false;
      $('#add_url').parent().addClass('has-error');
    } else {
      $('#add_url').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_source)) {
      valid = false;
      $('#add_source').parent().addClass('has-error');
    } else {
      $('#add_source').parent().removeClass('has-error');
    }
    
    if (!valid) {
      e.preventDefault();
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-danger"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
    } else {
      var msg = 'Article was successfully added.';
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
      $.ajax({
          type: 'post',
          url: 'include/ajax.php',
          data: {
              method: 'addArticle',
              date: art_date,
              name: art_name,
              url: art_url,
              source: art_source
          },
          success: function (data) {
            location.reload();
          }
      });
    }
    
  });
}

function add_whitepaper() {
  $('#add-whitepaper').submit(function(e) {
    var valid = true;
    var msg = 'Validation errors. Please fill in all the fields.';
    
    e.preventDefault();
    var art_date = $('#add_date').val();
    var art_name = $('#add_name').val();
    var art_url = $('#add_url').val();
    var art_source = $('#add_source').val();
    
    if (!ValidateInput(art_date)) {
      valid = false;
      $('#add_date').parent().parent().addClass('has-error');
    } else {
      $('#add_date').parent().parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_name)) {
      valid = false;
      $('#add_name').parent().addClass('has-error');
    } else {
      $('#add_name').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_url)) {
      valid = false;
      $('#add_url').parent().addClass('has-error');
    } else {
      $('#add_url').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_source)) {
      valid = false;
      $('#add_source').parent().addClass('has-error');
    } else {
      $('#add_source').parent().removeClass('has-error');
    }
    
    if (!valid) {
      e.preventDefault();
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-danger"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
    } else {
      var msg = 'Whitepaper was successfully added.';
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
      $.ajax({
          type: 'post',
          url: 'include/ajax.php',
          data: {
              method: 'addWhitepaper',
              date: art_date,
              name: art_name,
              url: art_url,
              source: art_source
          },
          success: function (data) {
            location.reload();
          }
      });
    }
    
  });
}

function add_Interview() {
  $('#add-interview').submit(function(e) {
	 
    var valid = true;
    var msg = 'Validation errors. Please fill in all the fields.';
    
    e.preventDefault();
    var art_date = $('#add_date').val();
    var art_name = $('#add_name').val();
    var img = $('#image').val();
    var add_url = $('#add_url').val();
    
    if (!ValidateInput(art_date)) {
      valid = false;
      $('#add_date').parent().parent().addClass('has-error');
    } else {
      $('#add_date').parent().parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_name)) {
      valid = false;
      $('#add_name').parent().addClass('has-error');
    } else {
      $('#add_name').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(add_url)) {
      valid = false;
      $('#add_url').parent().addClass('has-error');
    } else {
      $('#add_url').parent().removeClass('has-error');
    }

    if (!valid) {
      e.preventDefault();
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-danger"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
    } else {
      var msg = 'Whitepaper was successfully added.';
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
      $.ajax({
          type: 'post',
          url: 'include/ajax.php',
          data: new FormData(this),
		  contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
          success: function (data) {
           /*  location.reload(); */
          }
      }); 
    }
    
  });
}


// Add Award
function add_award() {
  $('#add-award').submit(function(e) {
    var valid = true;
    var msg = 'Validation errors. Please fill in all the fields.';
    
    e.preventDefault();
    var art_date = $('#add_date').val();
    var art_name = $('#add_name').val();
    var art_url = $('#add_url').val();
    var art_source = $('#add_source').val(); 
    if (!ValidateInput(art_date)) {
      valid = false;
      $('#add_date').parent().parent().addClass('has-error');
    } else {
      $('#add_date').parent().parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_name)) {
      valid = false;
      $('#add_name').parent().addClass('has-error');
    } else {
      $('#add_name').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_url)) {
      valid = false;
      $('#add_url').parent().addClass('has-error');
    } else {
      $('#add_url').parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_source)) {
      valid = false;
      $('#add_source').parent().addClass('has-error');
    } else {
      $('#add_source').parent().removeClass('has-error');
    }
    
    if (!valid) {
      e.preventDefault();
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-danger"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
    } else {
      var msg = 'Article was successfully added.';
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
      $.ajax({
          type: 'post',
          url: 'include/ajax.php',
          data: {
              method: 'addAward',
              date: art_date,
              name: art_name,
              url: art_url,
              source: art_source
          },
          success: function (data) {
            location.reload();
          }
      });
    }
    
  });
}


function add_quote() {
  $('#add-quotes').submit(function(e) {
    var valid = true;
    var msg = 'Validation errors. Please fill in all the fields.';
    e.preventDefault();
    var art_date = $('#add_date').val();
    var art_name = $('#add_name').val();
    /* var art_url = $('#add_url').val(); */
    var art_source = $('#add_source').val();
    
    if (!ValidateInput(art_date)) {
      valid = false;
      $('#add_date').parent().parent().addClass('has-error');
    } else {
      $('#add_date').parent().parent().removeClass('has-error');
    }
    
    if (!ValidateInput(art_name)) {
      valid = false;
      $('#add_name').parent().addClass('has-error');
    } else {
      $('#add_name').parent().removeClass('has-error');
    }
    
  /*   if (!ValidateInput(art_url)) {
      valid = false;
      $('#add_url').parent().addClass('has-error');
    } else {
      $('#add_url').parent().removeClass('has-error');
    } */
    
    if (!ValidateInput(art_source)) {
      valid = false;
      $('#add_source').parent().addClass('has-error');
    } else {
      $('#add_source').parent().removeClass('has-error');
    }
    
    if (!valid) {
      e.preventDefault();
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-danger"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
    } else {
      var msg = 'Whitepaper was successfully added.';
      $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
      setTimeout(function(){
        $('.first-row').html('');
      }, 2500);
      $.ajax({
          type: 'post',
          url: 'include/ajax.php',
          data: {
              method: 'addQuote',
              date: art_date,
              name: art_name,
              /* url: art_url, */
              source: art_source
          },
          success: function (data) {
            location.reload();
          }
      });
    }
    
  });
}



function delete_article(id, title) {
  var msg = 'Article "' + title + '" was successfully deleted.';
  if (confirm("Are you sure you want to delete \"" + title + "\"?")) {
    $.ajax({
        type: 'post',
        url: 'include/ajax.php',
        data: {
            method: 'deleteArticle',
            post_id: id
        },
        success: function () {
            $('.article[data-id="' + id + '"]').remove();
            reset_select();
            $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
        }
    });
  }
  
  return false;
}

function delete_whitepapers(id, title) {
  var msg = 'Whitepaper "' + title + '" was successfully deleted.';
  if (confirm("Are you sure you want to delete \"" + title + "\"?")) {
    $.ajax({
        type: 'post',
        url: 'include/ajax.php',
        data: {
            method: 'deleteWhitepaper',
            post_id: id
        },
        success: function () {
            $('.whitepapers[data-id="' + id + '"]').remove();
            reset_select();
            $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
        }
    });
  }
  
  return false;
}

function delete_quote(id, title) {
  var msg = 'Quote "' + title + '" was successfully deleted.';
  if (confirm("Are you sure you want to delete \"" + title + "\"?")) {
    $.ajax({
        type: 'post',
        url: 'include/ajax.php',
        data: {
            method: 'deleteQuote',
            post_id: id
        },
        success: function () {
            $('.quotes[data-id="' + id + '"]').remove();
            reset_select();
            $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
        }
    });
  }
  
  return false;
}

function delete_interview(id, title) {
  var msg = 'Quote "' + title + '" was successfully deleted.';
  if (confirm("Are you sure you want to delete \"" + title + "\"?")) {
    $.ajax({
        type: 'post',
        url: 'include/ajax.php',
        data: {
            method: 'deleteInterviews',
            post_id: id
        },
        success: function () {
            $('.interviews[data-id="' + id + '"]').remove();
            reset_select();
            $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
        }
    });
  }
  
  return false;
}



function datePickerInit() {
  
  var nowTemp = new Date();
  var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

  var checkin = $('#add_date').datepicker({
    onRender: function(date) {
      return date.valueOf() > now.valueOf() ? 'disabled' : '';
    }
  });
  
}

$(document).ready(function() {
  add_article();
  add_whitepaper();
  add_quote();
  add_Interview();
  add_award();
  datePickerInit();
  
  //initialize ckeditor on settings page
  if ($('.page-settings').length > 0) {
    CKEDITOR.replace('intro');
  }
  
  // actions selector
  $('.article .actions select').change(function() {
      var id = $(this).parent().parent().attr('data-id');
      var title = $(this).parent().parent().find('a').html();
      if ($(this).val() === 'delete') {
        delete_article(id, title);
        reset_select();
      } else if ($(this).val() === 'edit') {
        location.href = 'edit-article.php?id=' + id;
        reset_select();
      } 
  });
 
  // whitepapers selector
  $('.whitepapers .actions select').change(function() {
      var id = $(this).parent().parent().attr('data-id');
      var title = $(this).parent().parent().find('a').html();
      if ($(this).val() === 'delete') {
        delete_whitepapers(id, title);
        reset_select();
      } else if ($(this).val() === 'edit') {
        location.href = 'edit-whitepapers.php?id=' + id;
        reset_select();
      } 
  });
  // quotes selector
  $('.quotes .actions select').change(function() {
      var id = $(this).parent().parent().attr('data-id');
      var title = $(this).parent().parent().find('a').html();
      if ($(this).val() === 'delete') {
        delete_quote(id, title);
        reset_select();
      } else if ($(this).val() === 'edit') {
        location.href = 'edit-quotes.php?id=' + id;
        reset_select();
      } 
  }); 
  
  // interview selector
  $('.interviews .actions select').change(function() {
      var id = $(this).parent().parent().attr('data-id');
      var title = $(this).parent().parent().find('a').html();
      if ($(this).val() === 'delete') {
        delete_interview(id, title);
        reset_select();
      } else if ($(this).val() === 'edit') {
        location.href = 'edit-interview.php?id=' + id;
        reset_select();
      } 
  }); 
    // awards selector
  $('.awards .actions select').change(function() {
      var id = $(this).parent().parent().attr('data-id');
      var title = $(this).parent().parent().find('a').html();
      if ($(this).val() === 'delete') {
        delete_award(id, title);
        reset_select();
      } else if ($(this).val() === 'edit') {
        location.href = 'edit-award.php?id=' + id;
        reset_select();
      } 
  }); 
});






// Delete awards
function delete_award(id, title) {
  var msg = 'Award "' + title + '" was successfully deleted.';
  if (confirm("Are you sure you want to delete \"" + title + "\"?")) {
    $.ajax({
        type: 'post',
        url: 'include/ajax.php',
        data: {
            method: 'deleteAwards',
            post_id: id
        },
        success: function () {
            $('.awards[data-id="' + id + '"]').remove();
            reset_select();
            $('.first-row').append('<div class="col-md-12"><div class="alert alert-dismissable alert-success"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' + msg + '</div></div>');
        }
    });
  }
  
  return false;
}