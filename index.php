<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>els-energo</title>
    <link rel="stylesheet" href="./html/css/fonts/fonts.css">
    <link rel="stylesheet" href="./html/css/bootstrap.min.css">
    <link rel="stylesheet" href="./html/css/normalize.css">
    <link rel="stylesheet" href="./html/css/swiper.min.css">
    <link rel="stylesheet" href="./html/css/style.css?v=3">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
          try {
            w.yaCounter41101094 = new Ya.Metrika({
              id:41101094,
              clickmap:true,
              trackLinks:true,
              accurateTrackBounce:true
            });
          } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div style="display: none;"><img src="https://mc.yandex.ru/watch/41101094" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
  <header class="header">
    <div class="header__top">
      <a class="header__logo-block" href="./"></a>
      <!-- <div class="nav">
            <span data-toggle="modal" data-target=".price-list" class="nav__item nav__item--contacts">Прайс лист</span>
            <a href="#sale" class="nav__item nav__item--services">спец предложение</a>
            <a href="#catalog-objects" class="nav__item nav__item--advantages">каталог</a>
            <a href="#contacts" class="nav__item nav__item--advantages">контакты</a>
            <span data-toggle="modal" data-target=".question-for-specialist" class="nav__item nav__item--advantages">заказать звонок</span>
        </div> -->
      <div class="header__phone">
        <a href="tel:+8422712099" class="phone__block--link">8 (8422) 71-20-99</a>
        <a href="tel:+79176334396" class="phone__block--link">+7 (917) 633-43-96</a>
        <a href="mailto:nva073@yandex.ru" class="phone__block--link phone__block--link-mail">nva073@yandex.ru</a>
      </div>
    </div>

    <div class="header__bottom">
      <div class="header-catalog">
        <div class="header-catalog__btn" data-catalog-btn>
          <img src="./html/img/header-catalog-icon.svg" alt="catalog icon">

          <span>Каталог товаров</span>
          <picture>
            <source media="(max-width: 991px)" srcset="./html/img/header-catalog-tringle-mobile.svg" />
            <source media="(min-width: 992px)" srcset="./html/img/header-catalog-tringle.svg" />
            <img src="./html/img/header-catalog-tringle.svg" alt="catalog tringle">
          </picture>

        </div>

        <ul class="header-catalog__list" data-catalog-list>
          <li>
            <a href="#auto-off">
              <img src="./html/img/header-catalog-item-1.svg" alt="Автоматические выключатели">
              Автоматические выключатели</a>

            <div class="header-catalog__arrow">
              <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
              </svg>

            </div>

            <ul>
              <li>
                <a href="/" onclick="event.preventDefault()">Серия ВА </a>
                <div class="header-catalog__arrow">
                  <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
                  </svg>

                </div>

                <ul>
                  <li><a href="#">ВА55-43 до 1600А</a></li>
                  <li><a href="#">ВА51-39, 400-630А</a></li>
                  <li><a href="#">ВА57-35 до 250А</a></li>
                  <li><a href="#">ВА57-35 до 250А</a></li>
                  <li><a href="#">ВА04-36 до 630А</a></li>
                  <li><a href="#">ВА51-39 до 630А</a></li>
                  <li><a href="#">ВА50-41 до 1000А</a></li>
                  <li><a href="#">ВА50-43 до 2000А</a></li>
                </ul>
              </li>

              <li>
                <a href="/" onclick="event.preventDefault()">Серия А3790

                </a>
                <div class="header-catalog__arrow">
                  <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
                  </svg>

                </div>
              </li>

              <li>
                <a href="/" onclick="event.preventDefault()">Серия АВМ

                </a>
                <div class="header-catalog__arrow">
                  <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
                  </svg>

                </div>
              </li>

              <li>
                <a href="/" onclick="event.preventDefault()">Серия А2ВМ

                </a>
                <div class="header-catalog__arrow">
                  <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
                  </svg>

                </div>
              </li>

              <li>
                <a href="/" onclick="event.preventDefault()">Серия Электрон

                </a>
                <div class="header-catalog__arrow">
                  <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
                  </svg>

                </div>
              </li>
            </ul>
          </li>

          <li>
            <a href="#vakum-off">
              <img src="./html/img/header-catalog-item-2.svg" alt=" Вакуумные выключатели">
              Вакуумные выключатели</a>

            <div class="header-catalog__arrow">
              <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
              </svg>

            </div>
          </li>

          <li>
            <a href="#contactor-off">
              <img src="./html/img/header-catalog-item-3.svg" alt="Контакторы вакуумные">
              Контакторы вакуумные</a>

            <div class="header-catalog__arrow">
              <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M1 1L4.65217 5L8 1" stroke="#7D7D7D" />
              </svg>

            </div>
          </li>
        </ul>
      </div>

      <div class="nav">
        <a href="./html/files/price.xls" download="./html/files/price.xls" class="nav__item nav__item--contacts">
          Скачать
          прайс-лист
        </a>

        <a href="#contacts" class="nav__item">Контакты</a>
      </div>

      <span data-toggle="modal" data-target=".question-for-specialist" class="nav__item nav__item--advantages">
        Заказать
        звонок
      </span>

      <div class="burger">
        <span></span>
      </div>
    </div>

  </header>
  <div class="loader-window"></div>

  <div class="welcome">

    <div class="welcome__item-wrp welcome__item-wrp--form">
      <div class="welcome__logo">
        <img src="./html/img/welcome-logo.svg" alt="">
      </div>

      <div class="welcome__border"></div>

      <div class="welcome__info">
        <h1>
          <span> ELS-Energo (ООО «ЭлСнаб»)</span> входит в число крупнейших торговых организаций электротехнической
          промышленности России.
        </h1>

        <h2>
          Высококачественная продукция используется на всех ведущих предприятиях энергоемких отраслей России, а также
          стран ближнего зарубежья
        </h2>
      </div>

      <div class="welcome__border"></div>

      <form action="./mail.php" method="POST" class="welcome__form" name="callback">
        <div class="welcome__header-form">Задайте вопрос специалисту</div>
        <div class="welcome__form-groups">
          <div class="welcome__form-group">
            <input class="js-input" type="text" name="name" placeholder="Имя*">
            <input class="js-input js-input-phone" type="tel" name="phone" placeholder="Телефон*">
            <input class="js-input js-input-email" type="email" name="email" placeholder="Электронная почта*">
          </div>

          <div class="welcome__form-group">
            <textarea type="text" name="question" placeholder="Вопрос"></textarea>

            <div class="welcome__form-att-middle">* — Поля обязательные к заполнению</div>

            <label class="welcome__form-checkbox-label js-checkbox-label" for="checkbox-1">
              <input class="js-checkbox" type="checkbox" id="checkbox-1">
              <div class="welcome__form-checkbox-decor"></div>

              <span>Я согласен на обработку персональных данных</span>
            </label>
          </div>
        </div>

        <div class="welcome__form-footer">
          <div class="welcome__form-att">* — Поля обязательные к заполнению</div>
          <button type="submit" class="welcome__button">Отправить</button>
        </div>
      </form>
    </div>

    <div class="welcome__picture">
      <div class="welcome__logo-middle">
        <img src="./html/img/welcome-logo.svg" alt="">
      </div>

      <img src="./html/img/welcome-pic.png" alt="welcome">
    </div>
  </div>

  <div class="welcome__border"></div>

  <div class="advantages">
    <div class="container">
      <div class="h3 h3--line h3--white">
        <span>Наши приемущества</span>
      </div>
      <div class="advantages-wrp">
        <div class="advantages__item advantages__item--quality">
          <div class="advantages__header">Гарантия</div>
          <div class="advantages__desc">Гарантия 3 года на любой товар</div>
        </div>
        <div class="advantages__item advantages__item--wallet">
          <div class="advantages__header">Бесплатная доставка</div>
          <div class="advantages__desc">Доставка до любой транспортной компании за наш счет</div>
        </div>
        <div class="advantages__item advantages__item--money">
          <div class="advantages__header">Выгодно</div>
          <div class="advantages__desc">Гибкая ценовая политика для отдела снабжения</div>
        </div>
        <div class="advantages__item advantages__item--delivery">
          <div class="advantages__header">СРОЧНО</div>
          <div class="advantages__desc">Отгрузка оборудования от 2-х дней</div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="catalog catalog--sale sale">
    <div class="container">
      <div class="h3 h3--line">
        <span>Выгодные предложения</span>
      </div>
      <div class="catalog-wrp">
        <div class="catalog__item">
          <a class="catalog__link" href="./va55-43.html"></a>
          <div class="catalog__price">67 000 руб.</div>
          <div class="catalog__img" style="background: url(./html/img/55-43.jpg) no-repeat top center"></div>
          <p class="catalog__desc">Автоматические выключатели <span>ВА55-43 до 1600А, стационарный, с
              электроприводом</span></p>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./electron-a25vuz.html"></a>
          <div class="catalog__price">123 000 руб.</div>
          <div class="catalog__img" style="background: url(./html/img/electron.jpg) no-repeat top center"></div>
          <p class="catalog__desc">Автоматические выключатели <span>Электрон Э25ВУ3</span></p>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./va51-39.html"></a>
          <div class="catalog__price">6 300 руб.</div>
          <div class="catalog__img" style="background: url(./html/img/5139.png) no-repeat top center"></div>
          <p class="catalog__desc">Автоматические выключатели <span>ВА51-39, 400-630 А</span></p>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./avm-20sv.html"></a>
          <div class="catalog__price">57 000 руб.</div>
          <div class="catalog__img" style="background: url(./html/img/avm20cv.jpg) no-repeat top center"></div>
          <p class="catalog__desc">Автоматические выключатели <span>АВМ-20СВ</span></p>
          <div class="catalog__button">подробнее</div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="catalog catalog-objects">
    <div class="container">
      <div class="h3 h3--line h3--white" id="auto-off">
        <span>Автоматические выключатели</span>
      </div>
      <div class="catalog-wrp">
        <div class="catalog__item">
          <a class="catalog__link" href="./va55-43.html"></a>
          <!-- <div class="catalog__price">67 000 руб.</div> -->
          <div class="catalog__img" style="background: url(./html/img/55-43.jpg) no-repeat top center"></div>
          <p class="catalog__desc">Автоматические выключатели <span>ВА55-43 до 1600А, стационарный, с
              электроприводом</span></p>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./va57-35.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/ba57-35.jpg) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>ВА57-35 до 250А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./va04-36.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/0436.png) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>ВА04-36 до 630А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./avm-20sv.html"></a>
          <!-- <div class="catalog__price">57 000 руб.</div> -->
          <div class="catalog__img" style="background: url(./html/img/avm20cv.jpg) no-repeat top center"></div>
          <p class="catalog__desc">Автоматические выключатели <span>АВМ-20СВ</span></p>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./va51-39.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/5139.png) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>ВА51-39 до 630А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./a3790.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/3790.jpg) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>А3790 до 630А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./va50-41.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/50-41.jpg) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>ВА50-41 до 1000А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./va50-43.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/50-43.jpg) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>ВА50-43 до 2000А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./avm.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/avm.png) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>АВМ до 2000А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./av2m.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/av2m.jpg) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>АВ2М до 2000А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./electron.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/electron.jpg) no-repeat center"></div>
          <div class="catalog__desc">Автоматические выключатели <span>Электрон до 6300А</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
      </div>

      <div class="h3 h3--line h3--white" id="vakum-off">
        <span>Вакуумные выключатели</span>
      </div>
      <div class="catalog-wrp">

        <div class="catalog__item">
          <a class="catalog__link" href="./vakuumnye-vyklyuchateli-bb-tel-ism.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/bb-tel.png) no-repeat center"></div>
          <div class="catalog__desc">Вакуумные выключатели <span>ВВ/TEL(ISM)</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
        <div class="catalog__item">
          <a class="catalog__link" href="./bloki-upravleniya-i-pitaniya-bb-tel-ism.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/bp--tel.jpg) no-repeat center"></div>
          <div class="catalog__desc">Блоки управления и питания <span>BB/TEL(ISM)</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
      </div>

      <div class="h3 h3--line h3--white" id="contactor-off">
        <span> Вакуумные контакторы</span>
      </div>
      <div class="catalog-wrp">
        <div class="catalog__item">
          <a class="catalog__link" href="./kvt-10.html"></a>
          <!--<div class="catalog__price">770 000 руб.</div>-->
          <div class="catalog__img" style="background: url(./html/img/kvt-10.jpg) no-repeat center"></div>
          <div class="catalog__desc">Контакторы вакуумные <span>КВТ 10</span></div>
          <div class="catalog__button">подробнее</div>
        </div>
      </div>
    </div>
  </div>

  <div class="customers">
    <div class="container">
      <div class="h3 h3--line h3--white">
        <span>География наших поставок</span>
      </div>
      <div class="customers__item-wrp">
        <div class="customers__item customers__item--header">Россия</div>
        <div class="customers__item">Москва</div>
        <div class="customers__item">Санкт-Петербург</div>
        <div class="customers__item">Новосибирск</div>
        <div class="customers__item">Екатеринбург</div>
        <div class="customers__item">Казань</div>
        <div class="customers__item">Челябинск</div>
        <div class="customers__item">Омск</div>
        <div class="customers__item">Екатеринбург</div>
        <div class="customers__item">Самара</div>
        <div class="customers__item">Уфа</div>
        <div class="customers__item">Ростов-на-Дону</div>
        <div class="customers__item">Красноярск</div>
        <div class="customers__item">Пермь</div>
        <div class="customers__item">Воронеж</div>
        <div class="customers__item">Волгоград</div>
        <div class="customers__item">Краснодар</div>
        <div class="customers__item">Саратов</div>
        <div class="customers__item">Тюмень</div>
        <div class="customers__item">Тольятти</div>
        <div class="customers__item">Барнаул</div>
        <div class="customers__item">Ижевск</div>
        <div class="customers__item">Ульяновск</div>
        <div class="customers__item">Иркутск</div>
        <div class="customers__item">Хабаровск</div>
        <div class="customers__item">Ярославль</div>
        <div class="customers__item">Владивосток</div>
        <div class="customers__item">Махачкала</div>
        <div class="customers__item">Томск</div>
        <div class="customers__item">Оренбург</div>
        <div class="customers__item">Кемерово</div>
        <div class="customers__item">Новокузнецк</div>
        <div class="customers__item">Рязань</div>
        <div class="customers__item">Астрахань</div>
        <div class="customers__item">Чебоксары</div>
        <div class="customers__item">Калининград</div>
        <div class="customers__item">Нижний Новгород</div>
        <div class="customers__item customers__item--header">Казахстан</div>
        <div class="customers__item customers__item--header">Украина</div>
        <div class="customers__item customers__item--header">Молдавия</div>
      </div>
    </div>
  </div>

  <div class="partners">
    <div class="container">
      <div class="h3 h3--line h3--white">
        <span>Наши партнеры</span>
      </div>
      <div class="partners__item-wrp">
        <div class="partners__item partners__item--kontaktor"></div>
        <div class="partners__item partners__item--keaz"></div>
        <div class="partners__item partners__item--tfl"></div>
        <div class="partners__item partners__item--kontakt"></div>
      </div>
    </div>
  </div>
  <div class="contacts">
    <div class="h3 h3--line h3--white">
      <span>Контакты</span>
    </div>
    <div class="contacts-wrp">
      <div class="contacts__map-wrp">
        <div class="contacts__map" id="contactMap"></div>
      </div>
      <div class="contacts__content">
        <div class="contacts__header">Название компании:</div>
        <div class="contacts__text">ООО "ЭлСнаб"</div>
        <div class="contacts__header">Адрес:</div>
        <div class="contacts__text">г.Ульяновск, ул. Локомотивная 10, офис 105</div>
        <div class="contacts__header">Телефон:</div>
        <a href="#" class="contacts__text">8(8422)71-20-99</a>
        <a href="#" class="contacts__text">+7(917)633-43-96</a>
        <div class="contacts__header">Электронная почта:</div>
        <a href="#" class="contacts__text">elsnab73@gmail.com</a>
        <a href="#" class="contacts__text">nva073@yandex.ru</a>
      </div>
    </div>
  </div>

  <div class="modal fade bd-example-modal-sm question-for-specialist" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M1 1L13 13M1 13L13 1" stroke="white" />
          </svg></span>
      </button>
      <form action="./mail.php" method="POST" class="welcome__form" name="callback">
        <div class="welcome__header-form">Заказать звонок</div>
        <div class="welcome__header-form-sended">
          Ваш запрос принят

          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
            <path
              d="M8.49049 16.8025L2.55058 10.4128L0 13.1565L8.49049 22.2899L26 3.45463L23.4494 0.710938L8.49049 16.8025Z"
              fill="white" />
          </svg>
        </div>
        <input class="js-input" type="text" name="name" placeholder="Имя*">
        <div class="welcome__form-att">* — Поля обязательные к заполнению</div>
        <input class="js-input js-input-phone" type="tel" name="phone" placeholder="Телефон*">
        <div class="welcome__form-att">* — Поля обязательные к заполнению</div>

        <label class="welcome__form-checkbox-label js-checkbox-label" for="checkbox-2">
          <input class="js-checkbox" type="checkbox" id="checkbox-2">
          <div class="welcome__form-checkbox-decor"></div>

          <span>Я согласен на обработку персональных данных</span>
        </label>
        <button class="welcome__button" type="submit">Отправить</button>
      </form>
    </div>
  </div>

  <div class="modal fade bd-example-modal-sm submit-application" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="./mail.php" method="POST" class="welcome__form" name="callback">
        <div class="welcome__header-form">Заказать звонок</div>
        <div class="welcome__header-form-sended">
          Ваш запрос принят

          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
            <path
              d="M8.49049 16.8025L2.55058 10.4128L0 13.1565L8.49049 22.2899L26 3.45463L23.4494 0.710938L8.49049 16.8025Z"
              fill="white" />
          </svg>
        </div>
        <input class="js-input" type="text" name="name" placeholder="Имя*">
        <div class="welcome__form-att">* — Поля обязательные к заполнению</div>
        <input class="js-input js-input-phone" type="tel" name="phone" placeholder="Телефон*">
        <div class="welcome__form-att">* — Поля обязательные к заполнению</div>

        <label class="welcome__form-checkbox-label js-checkbox-label" for="checkbox-5">
          <input class="js-checkbox" type="checkbox" id="checkbox-5">
          <div class="welcome__form-checkbox-decor"></div>

          <span>Я согласен на обработку персональных данных</span>
        </label>
        <button class="welcome__button" type="submit">Отправить</button>
      </form>
    </div>
  </div>

  <div class="modal fade bd-example-modal-sm price-list" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <form action="./mail.php" method="POST" class="welcome__form" name="donwload_price">
        <div class="welcome__header-form">Запрос на прайс-лист</div>
        <div class="welcome__header-form-sended">
          Ваш запрос принят

          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none">
            <path
              d="M8.49049 16.8025L2.55058 10.4128L0 13.1565L8.49049 22.2899L26 3.45463L23.4494 0.710938L8.49049 16.8025Z"
              fill="white" />
          </svg>
        </div>
        <input class="js-input" type="text" name="name" placeholder="Имя*">
        <div class="welcome__form-att">* — Поля обязательные к заполнению</div>
        <input class="js-input js-input-email" type="email" name="email" placeholder="Электронная почта*">
        <div class="welcome__form-att">* — Поля обязательные к заполнению</div>

        <label class="welcome__form-checkbox-label js-checkbox-label" for="checkbox-3">
          <input class="js-checkbox" type="checkbox" id="checkbox-3">
          <div class="welcome__form-checkbox-decor"></div>

          <span>Я согласен на обработку персональных данных</span>
        </label>
        <button class="welcome__button" type="submit">Отправить</button>
      </form>
    </div>
  </div>


  <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.full&lang=ru-RU" type="text/javascript"></script>
  <script src="./html/script/jquery-2.1.3.min.js"></script>
  <script src="./html/script/bootstrap.min.js"></script>
  <script src="./html/script/parallax.min.js"></script>
  <script src="./html/script/swiper.jquery.min.js"></script>
  <script src="./html/script/script.js?v=1"></script>
</body>
</html>