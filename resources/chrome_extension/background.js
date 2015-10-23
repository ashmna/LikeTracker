(function(){
    var taskList = {};

    function addTask(task) {
        if(task) {
            taskList[task.url] = task;
            return true;
        } else {
            return false;
        }
    }

    function removeTask(task) {
        if(task && taskList[task.url]) {
            delete taskList[task.url];
            return true;
        } else {
            return false;
        }
    }

    function getTask(url) {
        if(taskList[url])
            return taskList[url];
        else
            return null;
    }



    chrome.extension.onMessage.addListener(function(request, sender, callback){
        if (!request) return;
        if (!request.cmd) return;

        var task = null;
        if(request.task)
            task = request.task;

        switch (request.cmd) {
            case "lt.task.add":
                callback(addTask(task));
                break;
            case "lt.task.remove":
                callback(removeTask(task));
                break;
            case "lt.task.get":
                callback(getTask(request.url));
                break;
        }

    });


})();