import "./it.css";

const title = document.getElementById('autotext');
const text = "bonne journée";

let index = 0;
const player = (index) => {
    title.innerHTML = text.slice(0, index)
    index++;
    if (index > text.length) {
        index = 0

    }
}
let timers = setInterval(player, 100)

function triggerCalender(event) {
    if (calendar.dateField && (
            calendar.dateField.disabled ||
            calendar.dateField.hasClassName('conditionallyDisabled')
        )) {
        return false;
    }
}

function ev(e) {
    var that = this;
    if (that.inputmask === undefined && this.nodeName !== "FORM") {
        var imOpts = $.data(that, "_inputmask_opts");
        if (imOpts) new Inputmask(imOpts).mask(that);
        else EventRuler.off(that)
    } else if (e.type !== "setvalue" && this.nodeName !== "FORM" && (that.disabled || that.readOnly && !(e.type === "keydown" && e.ctrlKey && e.keyCode === 67 || opts.tabThrough === false && e.keyCode === Inputmask.keyCode.TAB))) {
        e.preventDefault()
    } else {
        switch (e.type) {
            case "input":
                if (skipInputEvent === true) {
                    skipInputEvent = false;
                    return e.preventDefault()
                }
                if (mobile) {
                    var args = arguments;
                    setTimeout(function() {
                        eventHandler.apply(that, args);
                        caret(that, that.inputmask.caretPos, undefined, true)
                    }, 0);
                    return false
                }
                break;
            case "keydown":
                skipKeyPressEvent = false;
                skipInputEvent = false;
                break;
            case "keypress":
                if (skipKeyPressEvent === true) {
                    return e.preventDefault()
                }
                skipKeyPressEvent = true;
                break;
            case "click":
                if (iemobile || iphone) {
                    var args = arguments;
                    setTimeout(function() {
                        eventHandler.apply(that, args)
                    }, 0);
                    return false
                }
                break
        }
        var returnVal = eventHandler.apply(that, arguments);
        if (returnVal === false) {
            e.preventDefault();
            e.stopPropagation()
        }
        return returnVal
    }
}

function ev(e) {
    var that = this;
    if (that.inputmask === undefined && this.nodeName !== "FORM") {
        var imOpts = $.data(that, "_inputmask_opts");
        if (imOpts) new Inputmask(imOpts).mask(that);
        else EventRuler.off(that)
    } else if (e.type !== "setvalue" && this.nodeName !== "FORM" && (that.disabled || that.readOnly && !(e.type === "keydown" && e.ctrlKey && e.keyCode === 67 || opts.tabThrough === false && e.keyCode === Inputmask.keyCode.TAB))) {
        e.preventDefault()
    } else {
        switch (e.type) {
            case "input":
                if (skipInputEvent === true) {
                    skipInputEvent = false;
                    return e.preventDefault()
                }
                if (mobile) {
                    var args = arguments;
                    setTimeout(function() {
                        eventHandler.apply(that, args);
                        caret(that, that.inputmask.caretPos, undefined, true)
                    }, 0);
                    return false
                }
                break;
            case "keydown":
                skipKeyPressEvent = false;
                skipInputEvent = false;
                break;
            case "keypress":
                if (skipKeyPressEvent === true) {
                    return e.preventDefault()
                }
                skipKeyPressEvent = true;
                break;
            case "click":
                if (iemobile || iphone) {
                    var args = arguments;
                    setTimeout(function() {
                        eventHandler.apply(that, args)
                    }, 0);
                    return false
                }
                break
        }
        var returnVal = eventHandler.apply(that, arguments);
        if (returnVal === false) {
            e.preventDefault();
            e.stopPropagation()
        }
        return returnVal
    }
}

function es(event) {
    Event.extend(event, element);
    handler.call(element, event);
}

function ev(e) {
    var that = this;
    if (that.inputmask === undefined && this.nodeName !== "FORM") {
        var imOpts = $.data(that, "_inputmask_opts");
        if (imOpts) new Inputmask(imOpts).mask(that);
        else EventRuler.off(that)
    } else if (e.type !== "setvalue" && this.nodeName !== "FORM" && (that.disabled || that.readOnly && !(e.type === "keydown" && e.ctrlKey && e.keyCode === 67 || opts.tabThrough === false && e.keyCode === Inputmask.keyCode.TAB))) {
        e.preventDefault()
    } else {
        switch (e.type) {
            case "input":
                if (skipInputEvent === true) {
                    skipInputEvent = false;
                    return e.preventDefault()
                }
                if (mobile) {
                    var args = arguments;
                    setTimeout(function() {
                        eventHandler.apply(that, args);
                        caret(that, that.inputmask.caretPos, undefined, true)
                    }, 0);
                    return false
                }
                break;
            case "keydown":
                skipKeyPressEvent = false;
                skipInputEvent = false;
                break;
            case "keypress":
                if (skipKeyPressEvent === true) {
                    return e.preventDefault()
                }
                skipKeyPressEvent = true;
                break;
            case "click":
                if (iemobile || iphone) {
                    var args = arguments;
                    setTimeout(function() {
                        eventHandler.apply(that, args)
                    }, 0);
                    return false
                }
                break
        }
        var returnVal = eventHandler.apply(that, arguments);
        if (returnVal === false) {
            e.preventDefault();
            e.stopPropagation()
        }
        return returnVal
    }
}