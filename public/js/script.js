"use strict";

function replacemoney(t) {
    return t.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
}

function replacenumber(t) {
    return t.replace(/\./g, "")
}

function sum() {
    console.log("ancac");
    var t = Number(replacenumber($(".total-adult span").text())),
        e = Number(replacenumber($(".total-young span").text())),
        a = Number(replacenumber($(".total-zoom span").text())),
        n = String(t + e + a);
    $(".sum-money span").text(replacemoney(n))
}

function tabLinks(t, e) {
    var a, n, o;
    for (n = document.getElementsByClassName("tabcontent"), a = 0; a < n.length; a++) n[a].style.display = "none";
    for (o = document.getElementsByClassName("tablinks"), a = 0; a < o.length; a++) o[a].className = o[a].className.replace(" active", "");
    document.getElementById(e).style.display = "block", t.currentTarget.className += " active"
}

function upAmount() {
    var t = Number($(".unit .amount").text()) + 1;
    $(".unit .amount").text(t), console.log(t)
}

function downAmount() {
    $(".unit .amount").text() <= 0 ? $(".unit .amount").text(0) : $(".unit .amount").text(Number($(".unit .amount").text()) - 1)
}
jQuery(document).ready(function(s) {
    s(".btn-update").click(function() {
        s(".popup-tour-wrap.popup-tour").removeClass("disable")
    }), s(".btn-popup-update").click(function() {
        var t = s(".size-big .amount").text(),
            e = s(".size-small .amount").text(),
            a = s(".size-smallest .amount").text();
        s(".nuberx-big").text(t), s(".nuberx-small").text(e), s(".nuberx-smallest").text(a), s(".pricex-big").text(s(".size-big .price span").text()), s(".pricex-small").text(s(".size-small .price span").text()), s(".pricex-smallest").text(s(".size-smallest .price span").text()), s(".sumx").text(s(".sum-money span").text());
        var n = replacenumber(s(".sum-money span").text()),
            o = String(40 * n / 100);
        s(".prepay").text(replacemoney(o)), s(".popup-tour-wrap.popup-tour").addClass("disable")
    }), s(".section-pay__tab h4").click(function() {
        console.log("a"), s(".section-pay__tab").hasClass("active") && s(".section-pay__tab").removeClass("active"), s(this).parent(".section-pay__tab").addClass("active")
    }), s("#sandbox-container input").datepicker({}), s(window).on("load", function() {}), s(".btn__show-popup").click(function() {
        s(".popup-tour").removeClass("disable")
    }), s(".btn__hide-popup").click(function() {
        s(".popup-tour").addClass("disable")
    }), s(".wrapper-tours-slide__content").owlCarousel({
        items: 5,
        loop: !0,
        autoplay: !0,
        dots: !1,
        autoplayTimeout: 3e3,
        autoplayHoverPause: !0
    }), s(".slide-tour-detail").owlCarousel({
        items: 1,
        loop: !0,
        autoplay: !0,
        autoplayTimeout: 2e3,
        autoplayHoverPause: !0
    }), s(".sidebar-add i").click(function() {
        s(this).hasClass("fa-chevron-down") ? (s(this).removeClass("fa-chevron-down"), s(this).addClass("fa-chevron-up"), s(this).parent().parent().find("ul").addClass("active")) : (s(this).addClass("fa-chevron-down"), s(this).removeClass("fa-chevron-up"), s(this).parent().parent().find("ul").removeClass("active"))
    }), s("#shippingDay").datepicker({
        keyboardNavigation: !1,
        forceParse: !1,
        language: "vi",
        todayHighlight: !0,
        format: "mm/dd/yyyy",
        startDate: "now"
    }).on("changeDate", function(t) {
        if (0 == t.date.getDay());
        else {
            new Date(t.date);
            var e = t.date.getDate().toString().padStart(2, "0") + "/" + (1 + t.date.getMonth()).toString().padStart(2, "0") + "/" + t.date.getFullYear();
            s("#tablink li").css("pointer-events", "auto"), s(".popup-tour__content-left li.activedefaul").css("color", "#414b4f"), s("#tablink li").addClass("tablinks"), s("#tablink li").hasClass("activedefaul") && (s("#tablink li").addClass("active"), s("#tablink li.activedefaul").removeClass("active")), s("#tablink .date-start-tour").removeClass("disable"), s("#tablink .date-start-tour").text(e), s(".popup-tour-tabcontent>div").addClass("tabcontent"), s(".popup-tour-date").hide(), s(".popup-tour-user").show()
        }
    }), s(".unit .plus").click(function() {
        var t = s(this).parent().parent().parent(),
            e = Number(t.find(".unit .amount").text());
        t.find(".minus").removeClass("btn-defaul"), t.find(".amount").text(e + 1), 9 <= e && s(this).addClass("btn-defaul"), 10 <= e && t.find(".amount").text(e);
        var a = Number(t.find(".amount").text()),
            n = replacenumber(t.find(".price span").text()),
            o = String(a * n);
        t.find(".total span").text(replacemoney(o)), sum()
    }), s(".unit .minus").click(function() {
        var t = s(this).parent().parent().parent(),
            e = Number(t.find(".unit .amount").text());
        t.find(".plus").removeClass("btn-defaul"), t.find(".amount").text(e - 1), e <= 1 && s(this).addClass("btn-defaul"), e <= 0 && t.find(".amount").text(e);
        var a = Number(t.find(".amount").text()),
            n = replacenumber(t.find(".price span").text()),
            o = String(a * n);
        t.find(".total span").text(replacemoney(o)), sum()
    })
});