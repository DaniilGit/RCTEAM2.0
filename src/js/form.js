function showModalWin(name) {
 
    let darkLayer = document.createElement('div'); 

    darkLayer.style.position = 'fixed';
    darkLayer.style.width = '100%';
    darkLayer.style.height = '100%';
    darkLayer.style.zIndex = 1;
    darkLayer.style.background = '#000';
    darkLayer.style.opacity = 0.5;
    
    document.body.appendChild(darkLayer);

    let modalWin = document.getElementById(name); 
    modalWin.style.display = 'block';

    let main = document.getElementsByClassName('content')[0];
    main.style.position = 'fixed';
    main.style.left = '11%';

    darkLayer.onclick = function () {  
        darkLayer.parentNode.removeChild(darkLayer); 
        modalWin.style.display = 'none';
        main.style.position = ''; 
        return false;
    };
}