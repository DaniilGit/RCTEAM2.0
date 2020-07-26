let prev = -1;
let numberBlockPrev = 0;
let additionalButtons = [];

function changeServicesMenu(check, numberBlock, count)
{
    let button = document.getElementsByClassName('list-button')[count];
    
    if (check == 'add')
        document.getElementsByClassName('block-item_1')[0].style.display = 'block';

    if (numberBlockPrev != 0)
        document.getElementsByClassName(numberBlockPrev)[0].style.display = 'none';
       
    document.getElementsByClassName(numberBlock)[0].style.display = 'block';

    button.style.borderLeft = '3px solid #0B6F4B';
    button.style.color = '#0B6F4B';

    if (prev != -1 && prev != count) {
        document.getElementsByClassName('list-button')[prev].style.borderLeft = '';
        document.getElementsByClassName('list-button')[prev].style.color = '';           
    }

    numberBlockPrev = numberBlock;
    prev = count;
}