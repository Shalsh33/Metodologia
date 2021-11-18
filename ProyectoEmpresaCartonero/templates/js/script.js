'use strict'

document.addEventListener('DOMContentLoaded', (e)=>{
    document.querySelector("#addColumn").addEventListener("click", addColumn);
    console.log("asd");

        function addColumn(e){
            e.preventDefault();
            let mat = document.querySelector("#mat");
            let form = document.querySelector("#content");

            let div = document.createElement("div");
            div.innerHTML = mat.innerHTML;
            div.classList = mat.classList;
            form.appendChild(div);
        }
});
