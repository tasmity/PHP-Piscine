var	ft_list;
var	cookie;

window.onload = function ()
{
    document.getElementById("new").addEventListener("click", addTodo);
    ft_list = document.getElementById("ft_list");
    var get = getTodo("todos");
    console.log(JSON.parse(get));
    cookie = JSON.parse(get);
    cookie.forEach(function (vol)
    {
        addEntry(vol);
    })
}

window.onunload = function ()
{
    console.log("unload");
    saveTodo();
}

function saveTodo()
{
    var event = ft_list.children;
    var tmp = [];
    for (var i = 0; i < event.length; i++)
    {
        if (event[i].tagName == 'DIV')
        {
            tmp.unshift(event[i].innerHTML);
            console.log(event[i].innerHTML);
        }
    }
    var toset = JSON.stringify(tmp);
    console.log(toset);
    setTodo("todos", toset, 1);
}

function setTodo(cname, cvalue, exdays)
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    var string = cname + "=" + cvalue + ";" + expires + ";path=/";
    document.cookie = string;
}

function getTodo(cname)
{
    var name = cname + "=";
    console.log(document.cookie);
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++)
    {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c =  (c.substring(1));
        if (c.indexOf(name) == 0)
            return c.substring(name.length, c.length);
    }
    return "";
}

function addTodo()
{
    var txt = prompt("Add things to do.", "Nothing special!");
    if (txt)
    {
        addEntry(txt);
    }
}

function addEntry(txt)
{
    var div = document.createElement("div");
    div.className = "todo";
    div.innerHTML = txt;
    div.addEventListener("click", deleteEntry);
    ft_list.insertBefore(div, ft_list.firstChild);
}

function deleteEntry()
{
    if(confirm("Delete this entry?"))
    {
        this.parentElement.removeChild(this);
    }
}