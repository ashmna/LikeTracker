var taskList = {};

chrome.extension.onMessage.addListener(function (request) {
    if (!request) return;
    if (!request.task) return;
    var task = request.task;

    switch (request.type) {
        case "lt.task.add":
            taskList[task.id] = task;
            break;
        case "lt.task.remove":
            if(taskList[task.id])
                delete taskList[task.id];
            break;
        case "lt.task.get":
            if(task.url) {
                for(var id in taskList) {
                    if(taskList[id].url == task.url) {
                        task = taskList[id];
                        break;
                    }
                }
            }
            break;
    }
    console.log(taskList);
});

