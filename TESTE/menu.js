
// para ficar marcado o utimo item clicado//

var menu_a = document.querySelectorAll('.menu_a')

function selectlink(){
    menu_a.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')

}

menu_a.forEach((item)=>
    item.addEventListener('click', selectlink)
)

//para funcionar o botao expandir//

var btn_expandir = document.querySelector('#btn_expandir')
var menu_lateral = document.querySelector('.menu_aside')

btn_expandir.addEventListener('click', function(){
    menu_lateral.classList.toggle('expandir')

})

//para //

var btn_sub_expandir = document.querySelector('#btn_sub_expandir')
var sub_menu_ul = document.querySelector('.sub_menu_ul')

btn_sub_expandir.addEventListener('click', function(){
    sub_menu_ul.classList.toggle('expandir1')
})
