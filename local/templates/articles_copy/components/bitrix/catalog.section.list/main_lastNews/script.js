document.addEventListener("DOMContentLoaded", ()=>{
    let categoryWrap = document.querySelector(".form-news__body");
    let items = document.querySelectorAll(".item-news");
    let itemLabel = document.querySelectorAll(".item-category__label");
    //Добавляем стиль для 1 элемента закладки
    function addStyle(e=0){
        itemLabel.forEach((elem, ind)=>{
            if(ind == e){
                elem.style.backgroundColor = "#c47a2c";
                elem.style.color = "white";
            }
        })
    };
    //функция для удаления стилей всех закладок
    function deleteStyle(){
        itemLabel.forEach((elem)=>{
            elem.style.backgroundColor = "white";
            elem.style.color = "black";
        })
    };
    addStyle();
    //Функционал для отображения элементов в зависимости от выбраного раздела
    categoryWrap.addEventListener(('click'), (e)=>{
        let target = e.target.dataset.filter;
        //проверяем на всплытие родительского элемента
        if(!target){
            e.stopPropagation();
        }else {
            deleteStyle();
            e.target.style.backgroundColor = "#c47a2c";
            e.target.style.color = "white";
            items.forEach((elem) => {

                if (elem.classList.contains(target) && target !== "all") {
                    elem.style.display = "block";
                } else if (target === "all") {
                    elem.style.display = "block";
                } else {
                    elem.style.display = "none";
                }
            });
        }
    })
})