// let as = document.querySelectorAll("article")

// for (const a of as) {

//     let b = a.querySelector("button")
//     let d1 = a.querySelector("div:first-of-type")
//     let d2 = a.querySelector("div:last-of-type")
//     let fs = d2.querySelectorAll("iframe")
//     d2.style.display = "none"
    
//     d1.onclick = () => {

//         for (const f of fs) {
//             if (!f.hasAttribute("src")) {
//                 f.setAttribute("src", f.getAttribute("data-src"))
//             }
//         }

//         d2.style.display = d2.style.display == "none" ? "block" : "none"
//     }
// }

let toggle = document.getElementById("toggle")

toggle.onclick = () => {
    document.body.classList.toggle("dark-theme")
}

let ds = document.querySelectorAll("details")

for (const d of ds) {

    let fs = d.querySelectorAll("iframe")
    
    d.ontoggle = () => {
        for (const f of fs) {
            if (!f.hasAttribute("src")) {
                f.setAttribute("src", f.getAttribute("data-src"))
            }
        }
    }
}