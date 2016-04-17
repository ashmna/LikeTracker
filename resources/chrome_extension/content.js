(function() {
    var dispatchMouseEvent = function(target, var_args) {
        var e = document.createEvent("MouseEvents");
        e.initEvent.apply(e, Array.prototype.slice.call(arguments, 1));
        target.dispatchEvent(e);
    };
    var click = function(selector) {
        var element = document.querySelector(selector);
        dispatchMouseEvent(element, 'click', true, true);
    };
    var convertUrl = function(url) {
        var res = '';
        var pos = url.indexOf('vk.com/');

        if (pos != -1) {
            url = url.substr(pos + 7);
            pos = url.indexOf('?');
            if (pos != -1) {
                url = url.substr(pos + 1);
                var pair, obj = {},
                    vars = url.split('&');
                for (var i = 0; i < vars.length; i++) {
                    pair = vars[i].split('=');
                    obj[pair[0]] = pair[1];
                }
                if (obj['z']) {
                    res = url = obj['z'];
                } else if (obj['w']) {
                    res = url = obj['w'];
                }
                pos = url.indexOf('%2F');
                if (pos != -1) {
                    res = url.substr(0, pos);
                } else {
                    pos = url.indexOf('/');
                    if (pos != -1) {
                        res = url.substr(0, pos);
                    }
                }
            } else {
                res = url;
            }
        }
        return res;
    };

    document.onreadystatechange = function() {
        if (document.readyState == "complete") {
            main();
        }
    };


    function main() {

        var url = convertUrl(window.location.href);
        log('content - main - url key', url);

        if (url) {
            var request = {
                cmd: 'lt.task.get',
                url: url
            };

            log('content - get task from background - request', request);

            chrome.extension.sendMessage(request, function(task) {
                if (task) {
                    initListener(task);
                } else {
                    log('content - not start listner task is empty - task', task);
                }
            });
        }


    }

    function initListener(task) {
        log('content - init listeners - task', task);

        var isStartWatch = false;
        var videoBoxWrap = document.querySelector('.video_box_wrap');

        var iframe = videoBoxWrap.querySelector('iframe');

        var clickHadler = function() {
            log('content - init listeners - detected click');
            if (!isStartWatch) {
                log('content - init listeners - start watching');

                chrome.extension.sendMessage({ cmd: 'lt.task.startWatch', task: task }, function(res) {
                    isStartWatch = true;
                    initBlockLayer(videoBoxWrap, 20);
                });
            }
        }

        if (iframe) {
            log('content - init listeners - iframe is exists [start listen window blurde end hover]');
            var mouseInIframe = false;

            iframe.addEventListener('mouseover', function() {
                // console.info('iframe - mouseover');
                mouseInIframe = true;
            }, false);

            iframe.addEventListener('mousemove', function() {
                // console.info('iframe - mousemove');
                mouseInIframe = true;
            }, false);

            iframe.addEventListener('mouseenter', function() {
                // console.info('iframe - mouseenter');
                mouseInIframe = true;
            }, false);

            iframe.addEventListener('mouseout', function() {
                // console.info('iframe - mouseout');
                mouseInIframe = false;
            }, false);

            window.addEventListener("blur", function() {
                // console.info('iframe - blur');
                if (mouseInIframe) {
                    clickHadler();
                }
            }, false);

        } else {
            log('content - init listeners - [start listen click on video box]');
            videoBoxWrap.addEventListener('click', function(event) {
                clickHadler();
            }, false);
        }

    }

    function initBlockLayer(box, second) {
        log('content - init BlockLayer - second', second);

        var blockLayer = document.createElement('div');
            blockLayer.style.position = 'absolute';
            blockLayer.style.left = 0;
            blockLayer.style.right = 0;
            blockLayer.style.top = 0;
            blockLayer.style.bottom = 0;
            blockLayer.style.background = 'rgba(0, 0, 0, 0.0)';

        var displayeLayer = document.createElement('div');
            displayeLayer.style.position = 'absolute';
            displayeLayer.style.left = 0;
            displayeLayer.style.color = "rgba(255,255,255, 0.7)";
            displayeLayer.style.margin = "10px";

        var text = document.createElement('h1');
            text.textContent = "LK ";

        var counter = document.createElement('span');

        var startCounter = function() {
            if (second) {
                counter.textContent = second.toString();
                setTimeout(function() {
                    --second;
                    startCounter();
                }, 1000);
            } else {
                box.removeChild(blockLayer);
            }
        };

        text.appendChild(counter);
        displayeLayer.appendChild(text);
        blockLayer.appendChild(displayeLayer);
        box.appendChild(blockLayer);

        startCounter();
    }

    //window.lt.task.add = function(task, callBack){
    //    chrome.extension.sendMessage({cmd:'lt.task.add', task:task}, callBack);
    //};
    //window.lt.task.remove = function(task, callBack){
    //    chrome.extension.sendMessage({cmd:'lt.task.remove', task:task}, callBack);
    //};

    document.addEventListener('ltIsExist', function(event) {
        log('content - Listener - ltIsExist - event', event);

        log('content - Dispatch Custom Event - ltIsExistCallBack ', true);
        var ev = new CustomEvent('ltIsExistCallBack', { detail: true });
        document.dispatchEvent(ev);

    }, false);

    document.addEventListener('ltTaskAdd', function(event) {
        log('content - Listener - ltTaskAdd - event', event);

        chrome.extension.sendMessage({ cmd: 'lt.task.add', task: event.detail }, function(res) {

            log('content - Dispatch Custom Event - ltTaskAddCallBack ', res);
            var ev = new CustomEvent('ltTaskAddCallBack', { detail: res });
            document.dispatchEvent(ev);

        });
    }, false);

    document.addEventListener('ltTaskRemove', function(event) {
        log('content - Listener - ltTaskRemove - event', event);

        chrome.extension.sendMessage({ cmd: 'lt.task.remove', task: event.detail }, function(res) {

            log('content - Dispatch Custom Event - ltTaskRemoveCallBack ', res);
            var ev = new CustomEvent('ltTaskRemoveCallBack', { detail: res });
            document.dispatchEvent(ev);

        });
    }, false);

})();

function log() {
    if (!window.logging) {
        window.logging = window.location.search.indexOf("logging=true") != -1;
    }
    if (window.logging) {
        console.log.apply(console, arguments);
    }
}




//dispatchMouseEvent(element, 'mouseover', true, true);
//dispatchMouseEvent(element, 'mousedown', true, true);
//dispatchMouseEvent(element, 'click',     true, true);
//dispatchMouseEvent(element, 'mouseup',   true, true);


//chrome.extension.onMessage.addListener(function(request){
//
//});
