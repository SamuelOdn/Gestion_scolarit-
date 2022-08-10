const TabsBtn = document.querySelector(".dashboard");
const FormBtn = document.querySelector(".payer");
let ButtonView =  [TabsBtn, FormBtn]

const Tabs = document.querySelectorAll(".dashboard")[1];
const Form = document.querySelectorAll(".payer")[1];
let Views = [Tabs, Form]


ButtonView.forEach((btn)=>{
    btn.addEventListener("click", (e)=>{
        ButtonView.forEach((myBtn)=>{
            myBtn.style.backgroundColor="#111827"
            myBtn.style.color="#495057"
        })
        btn.style.backgroundColor="#007bff"
        btn.style.color="#fff"
        Views.forEach((view)=>{
            if(view)
            if(view.classList.contains(btn.classList[0])){
                view.style.display="block"
            }else{
                view.style.display="none"
            }
        })
    })
})
