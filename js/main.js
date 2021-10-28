const id = document.querySelector('.loading');
console.log(id)


let f = setTimeout(() => {
    id.classList.add('vanish');
    clearTimeout(f);
}, 1000);


window.addEventListener('load', f);


