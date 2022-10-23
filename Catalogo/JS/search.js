var search = document.getElementById('pesquisar');

function searchData(){
    window.location = 'catalogo.php?search='+search.value;
    alert(search);
}