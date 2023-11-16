$(document).ready(function () {

  $(".loader-window").fadeOut("slow");

  $('.mobile-menu-button').click(function () {
    $(this).toggleClass('mobile-menu-button--open');
    $(this).parent().find('.nav').toggleClass('nav--open');
  });

  $('a.nav__item').on('click', function(e){
    var id = $(this).attr('href'), vak = 90;
    id = id.replace('#', '.');
    if($(window).width() <= 1200) {
      vak = 60;
    }
    $('html,body').stop().animate({ scrollTop: $(id).offset().top - vak}, 1000);
    e.preventDefault();
  });

  // $('.price-list .welcome__button').click(function () {
  //   window.open("./html/files/price.xls");
  // });

  var menuLinks = $('.nav__item');
  $(window).scroll(function(){
    var scr = $(this).scrollTop();

    menuLinks.removeClass('active');
    if($('.welcome').offset().top - 200 < scr && scr < ($('.welcome').offset().top + $('.welcome').outerHeight() - 200)) {
     menuLinks.removeClass('active');
     $('.nav__item--contacts').addClass('active');
    }
    if($('.sale').offset().top - 200 < scr && scr < ($('.sale').offset().top + $('.sale').outerHeight() - 200)) {menuLinks.removeClass('active');menuLinks.eq(1).addClass('active');}
    if($('.catalog-objects').offset().top - 200 < scr && scr < ($('.catalog-objects').offset().top + $('.catalog-objects').outerHeight() - 200)) {menuLinks.removeClass('active');menuLinks.eq(2).addClass('active');}
    if($('.contacts').offset().top - 200 < scr && scr < ($('.contacts').offset().top + $('.contacts').outerHeight() - 200)) {menuLinks.removeClass('active');menuLinks.eq(3).addClass('active');}
  });

  function initContactMaps () {
    var myMapFirst = new ymaps.Map("contactMap", {
        center: [54.2858767,48.3582629],
        zoom: 17,
        controls: ['']
      }),
      myPlacemarkFirst = new ymaps.Placemark(myMapFirst.getCenter(), {
      }, {
        // Опции.
        // Необходимо указать данный тип макета.
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: './html/img/logo-small-map.png',
        // Размеры метки.
        iconImageSize: [48, 48],
        // Смещение левого верхнего угла иконки относительно
        // её "ножки" (точки привязки).
        iconImageOffset: [-24, -48]
      });

    myMapFirst.geoObjects.add(myPlacemarkFirst);
    myMapFirst.controls.add('zoomControl');
    myMapFirst.behaviors.disable('scrollZoom');
  }

  ymaps.ready(initContactMaps);
});

function ajaxSendingForm(action, method, body) {
  var promise = new Promise(function (resolve, reject) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState !== 4) return;
      if (xhr.status !== 200) {
        reject(xhr);
      }
      resolve(xhr.responseText);
    };
    xhr.open(method, action);
    xhr.send(body);
  });
  return promise;
}

function sendingDataForm() {
  var allForms = [].slice.call(document.forms);
  const regexPhone = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;


  allForms.forEach(function (form) {
    form.addEventListener('submit', function (e) {
		e.preventDefault();
		var countError = 0;
		const elementsForm = [].slice.call(form.elements);
		elementsForm.forEach((itemForm) => {
		    if ((itemForm.getAttribute('type') !== 'submit')
          	&& (itemForm.getAttribute('name') !== 'question')) {
		      if (itemForm.value === '') {
		        itemForm.classList.add('error');
		        countError += 1;
		        console.log(itemForm.getAttribute('type'));
		      } else {
		        itemForm.classList.remove('error');
	  	      }
		    }
		    if (itemForm.getAttribute('type') === 'tel') {
		      if (regexPhone.test(itemForm.value) === false) {
		        countError += 1;
		        itemForm.classList.add('error');
		      }
		    }
		});

		if (countError === 0) {
	        var action = this.getAttribute('action');
	        var method = this.getAttribute('method');
	        var formData = new FormData(this);

	        if (this.getAttribute('name') == 'donwload_price') {
	          window.open("./html/files/price.xls");
	        }
	 
	        ajaxSendingForm(action, method, formData).then(function (msg) {
	          form.querySelector('.welcome__header-form').innerHTML = 'Заявка отправлена';
	          var popupForm = form.parentNode.parentNode;

	          if (popupForm.classList.contains('modal')) {
	            setTimeout(function() {
	              $(popupForm).modal('hide');
	            }, 800);
	          }
	        }, function (error) {
	          console.log(error);
	        });
        }
    });
  });
}
sendingDataForm();