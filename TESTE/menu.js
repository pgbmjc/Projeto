
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

//para expandir o sub-menu 1//

var btn_sub_expandir1 = document.querySelector('#btn_sub_expandir1')
var sub_menu_ul1 = document.querySelector('#sub_menu_ul1')

btn_sub_expandir1.addEventListener('click', function(){
    sub_menu_ul1.classList.toggle('expandir1')
})

//para expandir o sub-menu 2//

var btn_sub_expandir2 = document.querySelector('#btn_sub_expandir2')
var sub_menu_ul2 = document.querySelector('#sub_menu_ul2')

btn_sub_expandir2.addEventListener('click', function(){
    sub_menu_ul2.classList.toggle('expandir2')
})