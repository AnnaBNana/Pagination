$(document).ready(function() {

  var run_filters = function() {
    var inputs = $('.grid').serialize();
    console.log(inputs);
    $.post('/leads/filter/', inputs, function(res) {
      $('.target').html(res);
      return false;
    })
  }

  $(function() {
    $( ".from" ).datepicker({
      onSelect: function()
        {
          var from_date = $(this).datepicker('getDate');
          $(this).val(from_date);
          // console.log(from_date);
          run_filters();
        }
    });
    $( ".to" ).datepicker({
      onSelect: function()
        {
          var to_date = $(this).datepicker('getDate');
          $(this).val(to_date);
          run_filters();
        }
    });
  });

  $.get('/leads/table', function(res) {
    $('.target').html(res);
  })

  $('.item').click(function() {
    var page = $(this).html();
    if ($(this).is(':last-child') && page < 34) {
      $('.item').each(function() {
        var increment_page = parseInt($(this).html()) + 1;
        $(this).html(increment_page);
      })
    }
    if ($(this).is(':first-child')  && page > 1) {
      $('.item').each(function() {
        var decrement_page = parseInt($(this).html()) - 1;
        $(this).html(decrement_page);
      })
    }
    $('.page').val(page);
    run_filters();
  });

  $('.name').keyup(function() {
    run_filters();
  });

})
