let inputCalcu = document.getElementById('inputCalcu');
let btnCalcu = document.querySelectorAll('button');
let emptyCalcu = '';

btnCalcu.forEach(btn =>{
    btn.addEventListener('click', (event)=>{
        if(event.target.id == 'equal'){
            emptyCalcu = String(eval(emptyCalcu));
            inputCalcu.value = emptyCalcu;
        } else if (event.target.id == 'allClear'){
            emptyCalcu = '';
            inputCalcu.value = emptyCalcu;
        } else if(event.target.id == 'clear'){
            emptyCalcu = emptyCalcu.substring(0, emptyCalcu.length-1);
            inputCalcu.value = emptyCalcu;
        } else if(event.target.id == 'plusMinus'){
            emptyCalcu = String(-eval(emptyCalcu));
            inputCalcu.value = emptyCalcu;
        } else if (event.target.id == 'division') {
            emptyCalcu += '/';
            inputCalcu.value = emptyCalcu;
        } else if(event.target.id == 'multiplication') {
            emptyCalcu += '*';
            inputCalcu.value = emptyCalcu;
        }else if(event.target.id == 'power') {
            emptyCalcu += '**';
            inputCalcu.value = emptyCalcu;
        }else{
            emptyCalcu += event.target.innerText;
            inputCalcu.value = emptyCalcu;
        }
    })
})