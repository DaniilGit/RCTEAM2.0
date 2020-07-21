let blockSlider = "block-slider";
let prev = 0;

function changeCategoryPortfolio(count, name)
{
    document.getElementsByClassName(blockSlider)[count].style.opacity = '100';
    for (i = 0; i < 5; i++) {
        if (i == count) {
            document.getElementsByClassName(blockSlider)[count].style.display = 'block';
        }
        else if (document.getElementsByClassName(blockSlider)[i].style.display = 'block')
            document.getElementsByClassName(blockSlider)[i].style.display = 'none';
    }
    

    document.getElementsByClassName(name)[0].style.backgroundColor = '#0B6F4B';
    document.getElementsByClassName(name)[0].style.color = 'white';

    if (name != "room") {
        document.getElementsByClassName("room")[0].style.backgroundColor = 'white';
        document.getElementsByClassName("room")[0].style.color = '#60606e';
    }
    if (prev != 0 && prev != name && prev != "room") {
        document.getElementsByClassName(prev)[0].style.backgroundColor = '';
        document.getElementsByClassName(prev)[0].style.color = '';
        document.getElementsByClassName(prev)[0].style.fontSize = '';
        document.getElementsByClassName(prev)[0].style.right = '';
    }

    prev = name;

}