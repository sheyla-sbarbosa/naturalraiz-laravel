require('./bootstrap');



const masks = {


    
    
    
    phone (value) {
        return value 
        .replace (/\D/g, '')
        .replace (/(\d{2}) (\d)/, '($1) $2' )
        .replace (/(\d{4}) (\d)/, '$1-$2' )
        .replace (/(-\d{4, 5}) \d+?$/, '$1')
        
        
    }
    
}

document.querySelectorAll('input').forEach((input) => {
    const field = $input.dataset.js

    $input.addEventListiner('input', (e) => {
        e.target.value = masks[field](e.target.value)}, false)
})