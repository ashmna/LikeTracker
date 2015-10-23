(function(){
    var dispatchMouseEvent = function(target, var_args) {
        var e = document.createEvent("MouseEvents");
        e.initEvent.apply(e, Array.prototype.slice.call(arguments, 1));
        target.dispatchEvent(e);
    };
    var click = function (selector) {
        var element = document.querySelector(selector);
        dispatchMouseEvent(element, 'click', true, true);
    };
    var convertUrl = function (url) {
        var res = '';
        var pos = url.indexOf('vk.com/');

        if(pos != -1) {
            url = url.substr(pos+7);
            pos = url.indexOf('?');
            if(pos != -1) {
                url = url.substr(pos+1);
                var pair, obj  = {}, vars = url.split('&');
                for (var i = 0; i < vars.length; i++) {
                    pair = vars[i].split('=');
                    obj[pair[0]] = pair[1];
                }
                if(obj['z']) {
                    res = url = obj['z'];
                } else if(obj['w']) {
                    res = url = obj['w'];
                }
                pos = url.indexOf('%2F');
                if(pos != -1) {
                    res = url.substr(0, pos);
                } else {
                    pos = url.indexOf('/');
                    if(pos != -1) {
                        res = url.substr(0, pos);
                    }
                }
            } else {
                res = url;
            }
        }
        return res;
    };

    document.onreadystatechange = function () {
        if (document.readyState == "complete") {
            main();
        }
    };


    function main() {
        var url = convertUrl(window.location.href);
        if(url) {
            var request = {
                cmd : 'lt.task.get',
                url : url
            };
            chrome.extension.sendMessage(request, function(task) {
                if(task) {
                    console.log(task);
                }
            });
        }


    }



})();



//dispatchMouseEvent(element, 'mouseover', true, true);
//dispatchMouseEvent(element, 'mousedown', true, true);
//dispatchMouseEvent(element, 'click',     true, true);
//dispatchMouseEvent(element, 'mouseup',   true, true);


//chrome.extension.onMessage.addListener(function(request){
//
//});

















































