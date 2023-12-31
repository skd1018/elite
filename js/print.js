(function($) {
    function appendContent($el, content) {
        if (!content) return;
        $el.append(content.jquery ? content.clone() : content)
    }

    function appendBody($body, $element, opt) {
        var $content = $element.clone(opt.formValues);
        if (opt.formValues) { copyValues($element, $content, 'select, textarea') }
        if (opt.removeScripts) { $content.find('script').remove() }
        if (opt.printContainer) { $content.appendTo($body) } else { $content.each(function() { $(this).children().appendTo($body) }) }
    }

    function copyValues(origin, clone, elementSelector) {
        var $originalElements = origin.find(elementSelector);
        clone.find(elementSelector).each(function(index, item) { $(item).val($originalElements.eq(index).val()) })
    }
    var opt;
    $.fn.printThis = function(options) {
        opt = $.extend({}, $.fn.printThis.defaults, options);
        var $element = this instanceof jQuery ? this : $(this);
        var strFrameName = "printThis-" + (new Date()).getTime();
        if (window.location.hostname !== document.domain && navigator.userAgent.match(/msie/i)) {} else {
            var $frame = $("<iframe id='" + strFrameName + "' name='printIframe' />");
            $frame.appendTo("body")
        }
        var $iframe = $("#" + strFrameName);
        if (!opt.debug) $iframe.css({ position: "absolute", width: "0px", height: "0px", left: "-600px", top: "-600px" });
        if (typeof opt.beforePrint === "function") { opt.beforePrint() }
        setTimeout(function() {
            function setDocType($iframe, doctype) {
                var win, doc;
                win = $iframe.get(0);
                win = win.contentWindow || win.contentDocument || win;
                doc = win.document || win.contentDocument || win;
                doc.open();
                doc.write(doctype);
                doc.close()
            }
            if (opt.doctypeString) { setDocType($iframe, opt.doctypeString) }
            var $doc = $iframe.contents(),
                $head = $doc.find("head"),
                $body = $doc.find("body"),
                $base = $('base'),
                baseURL;
            if (opt.base === !0 && $base.length > 0) { baseURL = $base.attr('href') } else if (typeof opt.base === 'string') { baseURL = opt.base } else { baseURL = document.location.protocol + '//' + document.location.host }
            $head.append('<base href="' + baseURL + '">');
            if (opt.importCSS) $("link[rel=stylesheet]").each(function() {
                var href = $(this).attr("href");
                if (href) {
                    var media = $(this).attr("media") || "all";
                    $head.append("<link type='text/css' rel='stylesheet' href='" + href + "' media='" + media + "'>")
                }
            });
            if (opt.importStyle) $("style").each(function() { $head.append(this.outerHTML) });
            if (opt.pageTitle) $head.append("<title>" + opt.pageTitle + "</title>");
            if (opt.loadCSS) { if ($.isArray(opt.loadCSS)) { jQuery.each(opt.loadCSS, function(index, value) { $head.append("<link type='text/css' rel='stylesheet' href='" + this + "'>") }) } else { $head.append("<link type='text/css' rel='stylesheet' href='" + opt.loadCSS + "'>") } }
            var pageHtml = $('html')[0];
            $doc.find('html').prop('style', pageHtml.style.cssText);
            var tag = opt.copyTagClasses;
            if (tag) {
                tag = tag === !0 ? 'bh' : tag;
                if (tag.indexOf('b') !== -1) { $body.addClass($('body')[0].className) }
                if (tag.indexOf('h') !== -1) { $doc.find('html').addClass(pageHtml.className) }
            }
            appendContent($body, opt.header);
            if (opt.canvas) {
                var canvasId = 0;
                $element.find('canvas').addBack('canvas').each(function() { $(this).attr('data-printthis', canvasId++) })
            }
            appendBody($body, $element, opt);
            if (opt.canvas) {
                $body.find('canvas').each(function() {
                    var cid = $(this).data('printthis'),
                        $src = $('[data-printthis="' + cid + '"]');
                    this.getContext('2d').drawImage($src[0], 0, 0);
                    if ($.isFunction($.fn.removeAttr)) { $src.removeAttr('data-printthis') } else { $.each($src, function(i, el) { el.removeAttribute('data-printthis') }) }
                })
            }
            if (opt.removeInline) { var selector = opt.removeInlineSelector || '*'; if ($.isFunction($.removeAttr)) { $body.find(selector).removeAttr("style") } else { $body.find(selector).attr("style", "") } }
            appendContent($body, opt.footer);

            function attachOnBeforePrintEvent($iframe, beforePrintHandler) {
                var win = $iframe.get(0);
                win = win.contentWindow || win.contentDocument || win;
                if (typeof beforePrintHandler === "function") { if ('matchMedia' in win) { win.matchMedia('print').addListener(function(mql) { if (mql.matches) beforePrintHandler() }) } else { win.onbeforeprint = beforePrintHandler } }
            }
            attachOnBeforePrintEvent($iframe, opt.beforePrintEvent);
            setTimeout(function() {
                if ($iframe.hasClass("MSIE")) {
                    window.frames.printIframe.focus();
                    $head.append("<s" + "cript>  window.print(); </s" + "cript>")
                } else {
                    if (document.queryCommandSupported("print")) { $iframe[0].contentWindow.document.execCommand("print", !1, null) } else {
                        $iframe[0].contentWindow.focus();
                        $iframe[0].contentWindow.print()
                    }
                }
                if (!opt.debug) { setTimeout(function() { $iframe.remove() }, 1000) }
                if (typeof opt.afterPrint === "function") { opt.afterPrint() }
            }, opt.printDelay)
        }, 333)
    };
    $.fn.printThis.defaults = { debug: !1, importCSS: !0, importStyle: !1, printContainer: !0, loadCSS: "", pageTitle: "", removeInline: !1, removeInlineSelector: "*", printDelay: 333, header: null, footer: null, base: !1, formValues: !0, canvas: !1, doctypeString: '<!DOCTYPE html>', removeScripts: !1, copyTagClasses: !1, beforePrintEvent: null, beforePrint: null, afterPrint: null }
})(jQuery)