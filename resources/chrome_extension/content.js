var dispatchMouseEvent = function(target, var_args) {
    var e = document.createEvent("MouseEvents");
    e.initEvent.apply(e, Array.prototype.slice.call(arguments, 1));
    target.dispatchEvent(e);
};

function click(selector) {
    var element = document.querySelector(selector);
    dispatchMouseEvent(element, 'click', true, true);
}

//dispatchMouseEvent(element, 'mouseover', true, true);
//dispatchMouseEvent(element, 'mousedown', true, true);
//dispatchMouseEvent(element, 'click',     true, true);
//dispatchMouseEvent(element, 'mouseup',   true, true);


//chrome.extension.onMessage.addListener(function(request){
//
//});

function main() {
    console.log(chrome);
    //var task = getTask();
    //if(task) {
    //    switch (task.type) {
    //        case 'ki' :
    //
    //            break;
    //    }
    //}



    chrome.extension.sendMessage('запрос backMsg', function(backMessage){
        console.log('2. Обратно принято из фона:', backMessage);
    });
    // http://habrahabr.ru/post/174745/


}













































document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        main();
    }
};




