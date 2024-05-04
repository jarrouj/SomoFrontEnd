//Run Functions Theme
import $ from "jquery";
window.$ = window.jQuery = $;
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import imagesLoaded from "imagesloaded";
import Mmenu from "mmenu-js";
import "mmenu-js/dist/mmenu.css";
import * as WOW from "wowjs";

/* -------------------------------------------------------
 Menu Mobile
------------------------------------------------------- */

document.addEventListener("DOMContentLoaded", () => {
    new Mmenu("#menu", {
        offCanvas: {
            position: "left-front",
        },
        theme: "light",
        // navbars: [{
        //     position: "bottom",
        //     content: [
        //         "<a class='fa-brands fa-facebook-f' href='#/'></a>",
        //         "<a class='fa-brands fa-x-twitter' href='#/'></a>",
        //         "<a class='fa-brands fa-linkedin-in' href='#/'></a>",
        //     ],
        // }, ],
    });
});

/* -------------------------------------------------------
 Btn to top
------------------------------------------------------- */

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

mybutton.addEventListener("click", topFunction);

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
}

/* -------------------------------------------------------
     Menu Sticky
    ------------------------------------------------------- */
var navStickyTop = function () {
    var mainmenu = document.querySelector(".header");

    var isSticky = false;
    var lastScrollTop = 0;

    window.addEventListener("scroll", function () {
        var currentScroll = window.scrollY;

        if (currentScroll > lastScrollTop) {
            if (isSticky) {
                mainmenu.classList.remove("header_sticky__show");
                mainmenu.classList.remove("header_sticky");
                isSticky = false;
            }
        } else {
            if (!isSticky && currentScroll > 660) {
                mainmenu.classList.add("header_sticky");
                isSticky = true;
                if (isSticky && currentScroll >= 460) {
                    setTimeout(function () {
                        mainmenu.classList.add("header_sticky__show");
                    }, 350);
                }
            }
        }

        if (currentScroll <= 660) {
            mainmenu.classList.remove("header_sticky__show");
            mainmenu.classList.remove("header_sticky");
            isSticky = false;
        }

        lastScrollTop = currentScroll;
    });
};

navStickyTop();

(function ($) {
    /* -------------------------------------------------------
    	Animation's
    ------------------------------------------------------- */
    var mobileAnimation = false;
    if ($(".wow").length > 0) {
        var wow = new WOW.WOW({
            boxClass: "wow",
            animateClass: "animate__animated",
            offset: 30,
            mobile: mobileAnimation,
            live: true,
        });
        imagesLoaded(document, function () {
            wow.init();
        });
    }
    /* ------------------------------------------------------- */

    /* -------------------------------------------------------
    	slider's
    ------------------------------------------------------- */
    $(".slider-hero").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: true,
        asNavFor: ".slider-thumbnail",
    });

    $(".slider-thumbnail").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider-hero",
        dots: false,
        arrows: false,
        centerMode: false,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: false,
        focusOnSelect: true,
    });

    $(".special-offers__content").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 2500,
        touchMove: true,
        pauseOnFocus: true,
    });

    jQuery(".JS-slick-nextSlider").on("click", () => {
        jQuery(".special-offers__content").slick("slickPrev");
    });
    jQuery(".JS-slick-prevSlider").on("click", () => {
        jQuery(".special-offers__content").slick("slickNext");
    });

    $(".special-offers-2__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: true,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 2500,
        touchMove: true,
        pauseOnFocus: true,
    });

    $(".testimonials__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 2500,
        touchMove: true,
        pauseOnFocus: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                dots: true,
                arrow: false,
            },
        }, ],
    });
    /* ------------------------------------------------------- */

    /* -------------------------------------------------------
    	Tab's
    ------------------------------------------------------- */
    var tabLinks = document.querySelectorAll(".tabs__link");
    var tabContent = document.querySelectorAll(".tabs-content__item");

    tabLinks.forEach(function (el) {
        el.addEventListener("click", openTabs);
    });

    function openTabs(el) {
        var btnTarget = el.currentTarget;
        var tab = btnTarget.dataset.tab;

        tabContent.forEach(function (el) {
            el.classList.remove("active");
        });

        tabLinks.forEach(function (el) {
            el.classList.remove("active");
        });

        document.querySelector("#tab-" + tab).classList.add("active");

        btnTarget.classList.add("active");
    }

})(jQuery);


/* -------------------------------------------------------
 Gallery - PhotoSwipe
------------------------------------------------------- */

const lightbox = document.querySelector(".lightbox");
const galleryItems = document.querySelectorAll("[data-lightbox]");
const totalGalleryItems = galleryItems.length;
let itemIndex = 0;
let imgSrc = '';

if (lightbox !== null) {
    const lightboxImg = lightbox.querySelector(".lightbox-img");
    const lightboxclose = lightbox.querySelector(".lightbox-close");
    const lightboxcounter = lightbox.querySelector(".caption-counter");

    for (let i = 0; i < totalGalleryItems; i++) {
        galleryItems[i].addEventListener("click", function () {
            itemIndex = i;
            changeItem();
            toggleLightbox();
        })
    }
    window.nextItem = function () {
        if (itemIndex === totalGalleryItems - 1) {
            itemIndex = 0;
        } else {
            itemIndex++;
        }
        changeItem();
    }
    window.prevItem = function () {
        if (itemIndex === 0) {
            itemIndex = totalGalleryItems - 1;
        } else {
            itemIndex--;
        }
        changeItem();
    }

    function toggleLightbox() {
        lightbox.classList.toggle("open");
        document.body.classList.toggle("lightbox-open");
    }

    lightbox.addEventListener("click", function (event) {
        if (event.target === lightboxclose || event.target === lightbox) {
            toggleLightbox();
        }
    })

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && lightbox.classList.contains('open')) {
            toggleLightbox();
        }
    });

    function changeItem() {
        imgSrc = galleryItems[itemIndex].querySelector(".gallery-block__item-image img").getAttribute("src");
        lightboxImg.src = imgSrc;
        lightboxcounter.innerHTML = (itemIndex + 1) + " of " + totalGalleryItems;
    }
}
