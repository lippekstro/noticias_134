var x = document.cookie.split('=')
var frase = x[1].split(";")
var ajustada = decodeURI(frase[0])


document.getElementById('toast').innerHTML = ajustada;
var div_toast = document.getElementById('toast');
if (decodeURI(frase[1].trim()) == 'EDITAR'){
    div_toast.style.backgroundColor = 'blue';
    document.cookie = 'EDITAR=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/noticias_134;';
} else if (decodeURI(frase[1].trim()) == 'DELETAR') {
    div_toast.style.backgroundColor = 'red';
    document.cookie = 'DELETAR=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/noticias_134;';
} else {
    div_toast.style.backgroundColor = 'green';
    document.cookie = 'CRIAR=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/noticias_134;';
}

div_toast.className = 'show';
setTimeout(function(){ div_toast.className = div_toast.className.replace('show', ''); }, 3000);
document.cookie = 'msg=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/noticias_134;';
