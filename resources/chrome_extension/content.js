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
        console.log('main', window.location.href);
        var url = convertUrl(window.location.href);
        if(url) {
            console.log(url);
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

    //window.lt.task.add = function(task, callBack){
    //    chrome.extension.sendMessage({cmd:'lt.task.add', task:task}, callBack);
    //};
    //window.lt.task.remove = function(task, callBack){
    //    chrome.extension.sendMessage({cmd:'lt.task.remove', task:task}, callBack);
    //};

    document.addEventListener('ltIsExist', function(event){
        var ev = new CustomEvent('ltIsExistCallBack', {detail:true});
        document.dispatchEvent(ev);
    }, false);

    document.addEventListener('ltTaskAdd', function(event){
        //console.log('ltTaskAdd', event.detail);
        chrome.extension.sendMessage({cmd:'lt.task.add', task:event.detail}, function(res){
            var ev = new CustomEvent('ltTaskAddCallBack', {detail:res});
            document.dispatchEvent(ev);
        });
    }, false);

    document.addEventListener('ltTaskRemove', function(event){
        //console.log('ltTaskRemove', event.detail);
        chrome.extension.sendMessage({cmd:'lt.task.remove', task:event.task}, function(res){
            var ev = new CustomEvent('ltTaskRemoveCallBack', {detail:res});
            document.dispatchEvent(ev);
        });
    }, false);

})();



//dispatchMouseEvent(element, 'mouseover', true, true);
//dispatchMouseEvent(element, 'mousedown', true, true);
//dispatchMouseEvent(element, 'click',     true, true);
//dispatchMouseEvent(element, 'mouseup',   true, true);


//chrome.extension.onMessage.addListener(function(request){
//
//});

















































