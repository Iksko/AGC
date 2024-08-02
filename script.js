try {
    //Search
    let SearchInput = document.getElementById("search")
    
    SearchInput.addEventListener("input", () => {
        let xmlhttp = new XMLHttpRequest()
    
        xmlhttp.onreadystatechange = function(){
            if(this.status == 200 && this.readyState == 4){
                result.innerHTML = this.responseText
            }
        }
        console.log(SearchInput.value)
        xmlhttp.open("GET","load.php?search=" + SearchInput.value + "&page=" + document.title)
        xmlhttp.send()
    })
}
catch (error) {
    
}

try {
    //Nav
    const Header = document.getElementById("header")
    const AgcMotto = document.getElementById("agc-motto")
    let NavLink = document.getElementsByClassName("nav-text")
    const NavIcons = document.getElementById("nav-icons")
    const NavLogo = document.getElementById("nav-logo")
    
    Header.addEventListener("mouseover", () => {

        if(!Header.classList.contains("active")){
            Header.classList.add("active")
            AgcMotto.classList.add("active")
            NavIcons.classList.add("active")
            NavLogo.classList.add("active")
        
            Array.from(NavLink).forEach(element => {
                element.classList.add("active")
            })
        }
    })

    Header.addEventListener("mouseout", () => {

        if(Header.classList.contains("active")){
            Header.classList.remove("active")
            AgcMotto.classList.remove("active")
            NavIcons.classList.remove("active")
            NavLogo.classList.remove("active")
            
            Array.from(NavLink).forEach(element => {
                element.classList.remove("active")
            })
        }
    })
}
catch (error) {
    
}
try {
    //Přidávání polí pro záznam k mezi relaci (spojení složek a materiálů)
    const addComponentArray = document.getElementById("add-component-arrays")
    const addComponentArrayIcon = document.getElementById("add-component-arrays-icon")
    const componentNameValue = document.getElementById("componentNameValue").value

    let iconAdded = false

    addComponentArrayIcon.addEventListener("click", () => {
        const componentInputs = document.querySelector(".component-inputs")

        const numberOfInputs = 3

        let lastUsedIndex = componentInputs.children.length

        if (!iconAdded) {
            const newIcon = '<svg id="scroll-down-icon" xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>'

            addComponentArray.insertAdjacentHTML("beforeend", newIcon)
            iconAdded = true
        }

        for (let i = lastUsedIndex; i < lastUsedIndex + numberOfInputs; i++) {

            const newComponentInput = document.createElement("div")
            newComponentInput.className = "component-input"

            const inputCAS = document.createElement("input")
            inputCAS.type = "text"
            inputCAS.name = `componentCAS[]`
            inputCAS.placeholder = "CAS nebo název složky"
            inputCAS.value = componentNameValue
            inputCAS.classList.add("componentCASf")
            inputCAS.readOnly = true

            const inputSplit = document.createElement("div")
            inputSplit.className = "input-split"

            const inputSAP = document.createElement("input")
            inputSAP.type = "text"
            inputSAP.name = `componentSAP[]`
            inputSAP.placeholder = "SAP materiálu"

            const inputShare = document.createElement("input")
            inputShare.type = "text"
            inputShare.name = `componentSHARE[]`
            inputShare.placeholder = "Podíl složky"

            inputSplit.appendChild(inputSAP)
            inputSplit.appendChild(inputShare)

            newComponentInput.appendChild(inputCAS)
            newComponentInput.appendChild(inputSplit)

            componentInputs.appendChild(newComponentInput)
        }

        

    })
} catch (error) {

}

try {
     
    document.addEventListener('DOMContentLoaded', function () {

        // Funkce, která se volá při změně stavu checkboxu
        function handleCheckboxChange(checkbox) {
            let resultDiv = document.getElementById('result')
            let invResultDiv = document.getElementById('inv-result')
            let hint = checkbox.closest('.hint')
    
            // Kontrola, zda prvek již není v cílovém kontejneru
            if (checkbox.checked && !invResultDiv.contains(hint)) {
                // Přesunout do .inv-result
                invResultDiv.appendChild(hint);
                hint.getElementsByTagName("input")[0].name = "matsel[]"
            } else if (!checkbox.checked && !resultDiv.contains(hint)) {
                // Přesunout zpět do #result
                resultDiv.appendChild(hint)
                hint.getElementsByTagName("input")[0].name = "material[]";
            }
    
            // Přepínání třídy .active podle stavu checkboxu
            let resultMat = hint.querySelector('.result.mat')
            resultMat.classList.toggle('active', checkbox.checked)
        }
    
        // Připojení posluchače k rodiči, který bude delegovat události od checkboxů
        let container = document.querySelector('.result')
        container.addEventListener('change', function (event) {
            if (event.target.type === 'checkbox') {
                handleCheckboxChange(event.target)
            }
        })
    
        // Připojení posluchače k rodiči pro .inv-result, který bude delegovat události od checkboxů
        let invResultContainer = document.getElementById('inv-result')
        invResultContainer.addEventListener('change', function (event) {
            if (event.target.type === 'checkbox') {
                handleCheckboxChange(event.target)
            }
        })
    })
    

} catch (error) {
    
}

try {
    const HamMenu = document.getElementById("ham")
    const MobileNavbar = document.getElementById("mobile-navbar")

    HamMenu.addEventListener("click", () => {
        HamMenu.classList.toggle("is-active")
        MobileNavbar.classList.toggle("is-active")
    })

} catch (error) {
    
}
