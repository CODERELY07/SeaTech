const tabs = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content]');
const nextContent = document.querySelectorAll('[data-next-content]');
const next = document.querySelectorAll('[data-next-target]');

// Singup and SignIn
tabs.forEach(tab=>{
    tab.addEventListener("click",()=>{
        const target = document.querySelector(tab.dataset.tabTarget);
       
        tabContents.forEach(tabContent =>{
            tabContent.classList.remove('active');
        })
        tabs.forEach(tab =>{
            tab.classList.remove('active');
        })
        target.classList.add('active');
        tab.classList.add('active');
    })
});

// Sing up next and previous
next.forEach(n=>{
    n.addEventListener("click",function(){
        const target = document.querySelector(n.dataset.nextTarget);
        nextContent.forEach(nextContents =>{
            nextContents.classList.remove('nextActive');
        });
    
        target.classList.add('nextActive');
    })
})

// choose position
const radios = document.querySelectorAll('.radio');

radios.forEach((radio) => {
    radio.addEventListener("click", () => {
        radios.forEach(r => {
            r.closest('div').classList.remove('radioActive');
            r.previousElementSibling.previousElementSibling.style.color = ""; 
        });

        radio.closest('div').classList.add('radioActive');
        radio.previousElementSibling.previousElementSibling.style.color = "#fff";
    });
});


function atLeastOneRadio() {
    return ($('input[type=radio]:checked').size() > 0);
}
