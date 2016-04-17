(function() {
    //console.log('background.js');

    var taskList = {};

    function addTask(task) {
        log('background - addTask - task', task);
        if (task) {
            if (task.hasOwnProperty('$$hashKey')) {
                delete task['$$hashKey'];
            }
            taskList[task.url] = task;
            log('background - addTask - taskList', taskList);
            return true;
        } else {
            return false;
        }
    }

    function removeTask(task) {
        log('background - removeTask - task , taskList', task, taskList);
        if (task && taskList[task.url]) {
            var resTask = taskList[task.url];
            delete taskList[task.url];
            log('background - removeTask - found in list', resTask);
            return resTask;
        } else {
            log('background - removeTask - task not found');
            return null;
        }
    }

    function getTask(url) {
        log('background - getTask - url', url);
        if (taskList[url]) {
            log('background - getTask - task found', taskList[url]);
            return taskList[url];
        } else {
            log('background - getTask - task not found - taskList', taskList);
            return null;
        }
    }



    chrome.extension.onMessage.addListener(function(request, sender, callback) {
        if (!request) return;
        if (!request.cmd) return;

        var task = null;
        if (request.task)
            task = request.task;

        log('background - extension.onMessage - request', request.cmd, request);

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
            case "lt.task.startWatch":
                var t = getTask(task.url);
                t.watchStart = (new Date()).getTime();
                callback(t);
                log('background - lt.task.startWatch - task', t);
                break;
            default:
                log('background - extension.onMessage - command not found', request.cmd);
        }

    });


})();


function log() {
    if (!window.logging) {
        window.logging = window.location.search.indexOf("logging=true") != -1;
    }
    if (window.logging) {
        console.log.apply(console, arguments);
    }
}
