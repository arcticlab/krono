$(document).ready(function() {

$('.main-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000
}); 

$('.store-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000
}); 

$('.news-slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  responsive: [
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1
      }
    }

  ]
}); 

if ($('.datepicker').length>0) {
  var pickerBefore = new Pikaday({ 
  field: document.getElementById("datepicker-before"),
  i18n: {
    previousMonth : 'Предыдцщий месяц',
    nextMonth     : 'Следующий месяц',
    months        : ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
    weekdays      : ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'],
    weekdaysShort : ['Вс','Пн','Вт','Ср','Чт','Пт','Сб']
  },
  firstDay : 1,
  format: 'DD/MM/YYYY'
});
var pickerAfter = new Pikaday({
  field: document.getElementById("datepicker-after"),
  i18n: {
    previousMonth : 'Предыдцщий месяц',
    nextMonth     : 'Следующий месяц',
    months        : ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
    weekdays      : ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'],
    weekdaysShort : ['Вс','Пн','Вт','Ср','Чт','Пт','Сб']
  },
  firstDay : 1,
  format: 'DD/MM/YYYY'
});
};


if ($('#price-range').length > 0) {
  var priceSlider = document.getElementById('price-range');
  var minslider = $('#price-range').data('min');
  var maxslider = $('#price-range').data('max');

  noUiSlider.create(priceSlider, {
    start: [minslider, maxslider],
    range: {
      'min': [ minslider ],
      'max': [ maxslider ]
    }
  });

  var snapValues = [
    document.getElementById('price-min'),
    document.getElementById('price-max')
  ];

  priceSlider.noUiSlider.on('update', function( values, handle ) {
    snapValues[handle].value = parseInt(values[handle]);
  });

  $('#price-min').blur(function(){
    pmval = $(this).val();
    priceSlider.noUiSlider.set([pmval,null]);
  });

  $('#price-max').blur(function(){
    pmxval = $(this).val();
    priceSlider.noUiSlider.set([null,pmxval]);
  });

};


if ($('.cut-block').length > 0) {
  $('.cut-block').dotdotdot({
      after: "span",
      ellipsis: '',
      watch: 'true'
  });
};

if ($('.cut-caption').length>0) {
  $('.cut-caption').dotdotdot({
    ellipsis: '...',
    watch: 'true'
  });
};

$('.mm-ico').click(function(){
  $(this).toggleClass('open');
  $('.mm-block').slideToggle();
})

$('.hnews').hover(function(){
  if (!($(this).data('id') ==  $('.dnews.active').attr('id'))){
    $('.dnews.active').removeClass('active').hide();
    $('#'+ $(this).data('id')).show().addClass('active');
  }
  
}, function(){})


$('.hmark').hover(function(){
  if (!($(this).data('num') ==  $('.route-item.active').attr('id'))){
    $('.route-item.active').removeClass('active').slideUp();
    $('#'+ $(this).data('num')).slideDown().addClass('active');
  }
  $('.hmark[data-num='+$(this).data('num')+']').addClass('active');
  
}, function(){
  $('.hmark[data-num='+$(this).data('num')+']').removeClass('active');
})


$('.sfilter-clear').click(function(){
  $(this).closest('.sfilter').find('.check-wrap input').prop('checked',false);
  if ($('#price-range').length > 0){
    priceSlider.noUiSlider.reset();
  }
})


$('.route-select').change(function(){
  if (!($(".route-select option:selected").data('route')==0)) {
    var routeId = $(".route-select option:selected").data("route");
    $('.routes-list').append('<div class="routes-item" id="'+ routeId +'"><div class="route-item__txt">'+ $(".route-select option:selected").html() +'</div><span class="route-delete"></span></div>')
    initDel();
    $(".route-select option:selected").attr('disabled',true);
  };  
  $('.route-select :nth-child(1)').prop('selected', true);

})

$('.add-route').click(function(){
  var routeTxt =  $('input.route-txt').val();
  var pattern = /^[\s]+$/;
  if (!(pattern.test(routeTxt)) && !(routeTxt == '')) {
    $('.routes-list').append('<div class="routes-item"><div class="route-item__txt">'+ routeTxt +'</div><span class="route-delete"></span></div>');
    $('input.route-txt').val('');
    initDel();
  };
})

 initFile();
 var countfile = 2; 
$('.addfile').click(function(){
   $('.file-list').append('<div class="file-input"><input class="inputfile" id="file'+countfile+'" type="file"><label for="file'+countfile+'" class="file-label">Прикрепить файл (Не более 20Мб)</label></div>');
   countfile++; 
   initFile();
})

$('.price-top').click(function(){
  $(this).toggleClass('active').next().slideToggle();
})

$('.sfilter-item__top').click(function(){
  $(this).toggleClass('active').next().slideToggle();
})


 
$('.numeric').on('input', function (event) { 
  this.value = this.value.replace(/[^0-9]/g, '');
});


$('.map-area').hover(
  function(){
    $('#descr-'+$(this).data('map')).fadeIn();
  },
  function(){
    $('#descr-'+$(this).data('map')).fadeOut();
  })


$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
  responsive: [
    {
      breakpoint: 600,
      settings: {
       arrows: true
      }
    }
  ]
});

$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  focusOnSelect: true,
  arrows: true
});

$('.count-minus').click(function(){
  var getCount = parseInt($(this).next().val()) - 1;
  var price = parseInt($(this).closest('.cartlist-price').find('.price').html());
  var sum = $(this).closest('.cartlist-price').find('.summary i');
  if (!(getCount == 0)){
    $(this).next().val(getCount);
    sum.html(price * getCount)
  }
})

$('.count-plus').click(function(){
  var getCount = parseInt($(this).prev().val()) + 1;
  var price = parseInt($(this).closest('.cartlist-price').find('.price').html());
  var sum = $(this).closest('.cartlist-price').find('.summary i');
  if (!(getCount == 0)){
    $(this).prev().val(getCount);
    sum.html(price * getCount)
  }
})

$('.product-prop input').change(function(){
  $(this).closest('.product-prop').find('.prop-val').html($(this).val()); 
})

});

function initDel(){
  $('.route-delete').click(function(){
    $('option[data-route='+$(this).parent().attr('id')+']').attr('disabled', false);
    $(this).parent().remove();
  })
}


function initFile(){
  $( '.inputfile' ).each( function()
  {
    var $input   = $( this ),
      $label   = $input.next( 'label' ),
      labelVal = $label.html();

    $input.on( 'change', function( e )
    {
      var fileName = '';

      if( this.files && this.files.length > 1 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else if( e.target.value )
        fileName = e.target.value.split( '\\' ).pop();

      if( fileName )
        $label.html( fileName );
      else
        $label.html( labelVal );
    });

    // Firefox bug fix
    $input
    .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
    .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
  });
}




