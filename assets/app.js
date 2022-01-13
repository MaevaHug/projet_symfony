/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// You can specify which plugins you need
import { Tooltip, Toast, Popover, Collapse } from 'bootstrap';

$(document).ready(() => {

    /* Gestion form-collection stepLines et ingredientLines */
    const newItem = (e) => {
        const collectionHolder = document.querySelector(e.currentTarget.dataset.collection);

        const item = document.createElement("li");
        item.classList.add("inline");
        item.innerHTML = collectionHolder
            .dataset
            .prototype
            .replace(
                /__name__/g,
                collectionHolder.dataset.index
            );

        item.querySelector(".btn-remove").addEventListener("click", () => {
            item.remove();
        });
        collectionHolder.appendChild(item);
        collectionHolder.dataset.index++;
    };

    document
        .querySelectorAll('.btn-remove')
        .forEach(btn => btn.addEventListener("click", (e) => e.currentTarget.closest(".inline").remove()));

    document
        .querySelectorAll('.btn-new')
        .forEach(btn => btn.addEventListener("click", newItem));

    /* Fermeture messages confirmation delete et login */
    $('.onDelete').on('click', () => {
        $('.overlay').css('display', 'flex');
    });

    $('.msgClose').on('click', () => {
        $('.overlay').css('display', 'none');
    });

    /* Fermeture addflashes */
    $('.flashClose').on('click', () => {
        $('.flashClose').parent().slideUp("slow");
    });

    /*Gestion Ajax des favoris */
    function onClickBtnLike(event) {
        event.preventDefault();
        let url = $(this).attr("href");
        const icone = $(this).children('i');
        $.ajax({
            method: "GET",
            url: url,
        }).done(function (response) {
            if (icone.hasClass("bi-heart-fill")) {
                icone.addClass("bi-heart").removeClass("bi-heart-fill");
            }
            else {
                icone.addClass("bi-heart-fill").removeClass("bi-heart");
            }
        }).fail(function () {
            alert("error");
        });
    }

    $('a.js-like').each(function (link) {
        $(this).on('click', onClickBtnLike);
    });

    init();

    /* bouton close responsive login/register*/
    function init() {
        if ($(".popup").length) {
            let popupTop = $(".popup").offset().top;
            $('.close').css('top', popupTop - 20);
            let popupLeft = $('.popup').offset().left;
            $('.close').css('right', popupLeft - 20);
        }
    }

    $(window).on('resize', () => {
        init();
    });

});

