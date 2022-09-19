document.getElementById('tab-padrao').click();


function openTab(idTab) {

    let conteudos = document.getElementsByClassName('conteudo')
    for (let i = 0; i < conteudos.length; i++) {
        conteudos[i].style.display = 'none'
    }

    document.getElementById(idTab).style.display = 'block'


}