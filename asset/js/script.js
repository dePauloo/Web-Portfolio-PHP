function opentab(tabname, element){
    for (let tablink of tablinks){
        tablink.classList.remove("active-link");
    }
    for (let tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    element.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}
