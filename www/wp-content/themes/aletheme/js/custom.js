(function() {
    var container, button, menu, links, i, len;
    container = document.getElementById('site-navigation');
    if (!container) {
        return;
    }
    button = container.getElementsByTagName('button')[0];
    if ('undefined' === typeof button) {
        return;
    }
    menu = container.getElementsByTagName('ul')[0];
    if ('undefined' === typeof menu) {
        button.style.display = 'none';
        return;
    }
    menu.setAttribute('aria-expanded', 'false');
    if (-1 === menu.className.indexOf('nav-menu')) {
        menu.className += ' nav-menu';
    }
    button.onclick = function() {
        if (-1 !== container.className.indexOf('toggled')) {
            container.className = container.className.replace(' toggled', '');
            button.setAttribute('aria-expanded', 'false');
            menu.setAttribute('aria-expanded', 'false');
        } else {
            container.className += ' toggled';
            button.setAttribute('aria-expanded', 'true');
            menu.setAttribute('aria-expanded', 'true');
        }
    };
    links = menu.getElementsByTagName('a');
    for (i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('focus', toggleFocus, true);
        links[i].addEventListener('blur', toggleFocus, true);
    }

    function toggleFocus() {
        var self = this;
        while (-1 === self.className.indexOf('nav-menu')) {
            if ('li' === self.tagName.toLowerCase()) {
                if (-1 !== self.className.indexOf('focus')) {
                    self.className = self.className.replace(' focus', '');
                } else {
                    self.className += ' focus';
                }
            }
            self = self.parentElement;
        }
    }(function(container) {
        var touchStartFn, i, parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');
        if ('ontouchstart' in window) {
            touchStartFn = function(e) {
                var menuItem = this.parentNode,
                    i;
                if (!menuItem.classList.contains('focus')) {
                    e.preventDefault();
                    for (i = 0; i < menuItem.parentNode.children.length; ++i) {
                        if (menuItem === menuItem.parentNode.children[i]) {
                            continue;
                        }
                        menuItem.parentNode.children[i].classList.remove('focus');
                    }
                    menuItem.classList.add('focus');
                } else {
                    menuItem.classList.remove('focus');
                }
            };
            for (i = 0; i < parentLink.length; ++i) {
                parentLink[i].addEventListener('touchstart', touchStartFn, false);
            }
        }
    }(container));
})();


(function() {
    var isIe = /(trident|msie)/i.test(navigator.userAgent);
    if (isIe && document.getElementById && window.addEventListener) {
        window.addEventListener('hashchange', function() {
            var id = location.hash.substring(1),
                element;
            if (!(/^[A-z0-9_-]+$/.test(id))) {
                return;
            }
            element = document.getElementById(id);
            if (element) {
                if (!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))) {
                    element.tabIndex = -1;
                }
                element.focus();
            }
        }, false);
    }
})();

jQuery(document).ready(function(){
    jQuery('input[type=tel]').inputmask("+7 (999) 999-99-99");  //static mask


    // Контакты страница
    if (jQuery('#map_contact').length > 0){
        ymaps.ready(function () {
            var map = new ymaps.Map("map_contact", {
                    center: [59.942467, 30.421882],
                    zoom: 14,
                    type: "yandex#map"
                }
            );
            map.controls.add(
                new ymaps.control.ZoomControl()
            );
            var secondMark = new ymaps.Placemark(
                [59.942467, 30.421882], {
                    hintContent: 'Компания «АВС»',
                    balloonContent: "Компания «АВС». г. Санкт-Петербург, ул. Якорная, БЦ «Престиж», оф. 20."
                },
                {
                    // iconLayout: 'default#image',
                    // iconImageHref: 'http://clicke.ru/image/catalog/placeholder.png',
                    // iconImageSize: [40, 56],
                    // iconImageOffset: [-20, -50]
                }
            );


            map.geoObjects.add(secondMark);
        });
    }

    // Главная страница
    if (jQuery('#map-field').length > 0){
        ymaps.ready(function () {
            var map = new ymaps.Map("map-field", {
                    center: [59.942467, 30.421882],
                    zoom: 10,
                    type: "yandex#map",
                    controls: []
                }
            );

            map.behaviors.disable('scrollZoom'); // отключаем zoom

            map.controls.add(
                new ymaps.control.ZoomControl()
            );
            var secondMark = new ymaps.Placemark(
                [59.942467, 30.421882], {
                    hintContent: 'РљРѕРјРїР°РЅРёСЏ В«РђР’РЎВ»',
                    balloonContent: "РљРѕРјРїР°РЅРёСЏ В«РђР’РЎВ». Рі. РЎР°РЅРєС‚-РџРµС‚РµСЂР±СѓСЂРі, СѓР». РЇРєРѕСЂРЅР°СЏ, Р‘Р¦ В«РџСЂРµСЃС‚РёР¶В», РѕС„. 20."
                },
                {
                    // iconLayout: 'default#image',
                    // iconImageHref: 'http://clicke.ru/image/catalog/placeholder.png',
                    // iconImageSize: [40, 56],
                    // iconImageOffset: [-20, -50]
                }
            );


            map.geoObjects.add(secondMark);
        });
    }


    if (jQuery('.price').length > 0)
    {
        jQuery('.price').on('click', '.datlink', function (e) {
            e.preventDefault();
            jQuery(this).hide();
            jQuery(this).parent('p').prev().slideDown();
        });

        jQuery('.price-container h2').on('click', function () {
            let parent = jQuery(this).parents('.price-container');
            parent.slideUp();
            parent.next().find('.datlink').show();
        });

        jQuery('.price').on('click', '.formopen', function (e) {
            let target = jQuery(this).parents('tr').find('td').first().text();
            console.log(target)
            jQuery('input[name=material]').val(target);
        });

        // очищаем поле 'Материал / Услуга*' в pop-up 'Заказать'
        jQuery("[data-fancybox]").fancybox({
            'afterClose': function() {
                if (jQuery('input[name=material]').length > 0){
                    jQuery('input[name=material]').val('');
                }
            }
        });


    }

    if (jQuery('#topMenu').length > 0)
    {
        jQuery('#topMenu').slicknav();
    }
});

