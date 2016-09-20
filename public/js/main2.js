(function() {
    $(function() {
        var n, e;
        return n = function(n) {
            var e, o;
            return null == n && (n = !0), o = $("#welcome-container"), n || o.addClass("animation-none"), o.removeClass("expanded"), e = function() {
                return o.removeClass("animation-none")
            }, n ? void 0 : setTimeout(e, 1)
        }, e = function() {
            var n;
            return n = $("#welcome-container"), n.addClass("expanded"), n.find("input#address").focus()
        }, $("#welcome-collapse").on("click", function() {
            return n()
        }), $(".js-welcome-expand").on("click", function() {
            return e()
        }), $(document.body).on("click", "a#success-message-close", function() {
            return n(), $.fancybox.close()
        })
    })
}).call(this);
