$(document).ready(function() {
  var wrapper = $(".formInstance");
  var filler = $(".formInstance").html();
  var num = 1;

  $("body").on('click', ".add-guest", function(e) {
    e.preventDefault();
    if(num < 6) {
      $(wrapper).append('<div class="namefield row">'+
          '<div class="input-group col-xs-offset-2 col-xs-8">'+
            '<span class="input-group-addon" id="basic-addon1">'+
                '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>'+
            '</span>'+
            '<input type="text" class="form-control" name="name'+num+'" placeholder="Guest Name">'+
            '<span class="input-group-btn">'+
              '<button class="btn btn-default add-guest" type="button">+ Guest</button>'+
            '</span>'+
          '</div>'+
        '</div>'+

        '<div class="row">'+
          '<div class="text_padding col-xs-offset-2 col-xs-8">'+
            '<label class="radio-inline">'+
              '<input type="radio" name="coming'+num+'" id="Yes" value="Yes"> Accept: Will be there!'+
            '</label>'+
            '<label class="radio-inline">'+
              '<input type="radio" name="coming'+num+'" id="No" value="No"> Decline: Will celebrate from afar'+
            '</label>'+
          '</div>'+
        '</div>');
      num = num + 1;
    }
    else {
    }
  });
});

//<div class="row"><div class="input-group col-xs-offset-2 col-xs-8"><span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span><input type="text" class="form-control" name="name" placeholder="Guest Name"><span class="input-group-btn"><button class="btn btn-default add-adult" type="button">+ Adult</button><button class="btn btn-default add-child" type="button">+ Child</button></span></div></div>
