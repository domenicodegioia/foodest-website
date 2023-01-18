window.onscroll = function()
{
    if(pageOffset >= 1000)
    {
        document.getElementById('gotopbtn').style.visibility="visible"
    }else
    {
        document.getElementById('gotopbtn').style.visibility="hidden";
    }
};