function resize_cover_index()
{
    var element = document.getElementById('cover-container-homepage');
    var parent = element.parentElement;
    console.log(parent);

    setWidth(element, parent.clientWidth*2);
    setHeight(element, parent.clientWidth*2);
}

function setWidth(element, size)
{
    element.style.width = size + 'px';
}

function setHeight(element, size)
{
    element.style.height = size + 'px';
}