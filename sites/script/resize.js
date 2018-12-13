function resize_cover_index()
{
    var element = document.getElementById('cover-container-homepage');
    var parent = element.parentElement;
    console.log(parent);

    setWidth(element, parent.style.width);
    
    setHeight(element, parent.style.height);
}

function setWidth(element, size)
{
    element.style.width = size;
}

function setHeight(element, size)
{
    element.style.height = size;
}