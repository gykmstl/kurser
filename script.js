// document.getElementById("toggle").onclick = () => {
//     document.body.classList.toggle("dark-theme")
//     console.log(3);
// }

// let iframe = document.getElementById("main")
// iframe.onload = () => {
//     iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
// }

let bs = document.querySelectorAll("body>nav>button")

for (const b of bs) {
    b.onclick = () => {
        location.replace(b.getAttribute("data-src"))
    }
}

let params = new URLSearchParams(location.search)
let link = params.get("link")

if (link != null) {
    let details = document.querySelectorAll("details")
    for (const d of details) {
        d.onclick = () => {
            let summary = encodeURIComponent(d.firstElementChild.textContent);
            let article = encodeURIComponent(d.parentElement.parentElement.firstElementChild.textContent);

            params.delete("link")
            params.set("a", article)
            params.set("s", summary)
            const url = location.origin + location.pathname + "?" + params
            console.log(url);
            open(url)
        }
    }
}

let a = params.get("a")
let s = params.get("s")

if (a && s) {
    let articles = document.querySelectorAll("article")

    for (const article of articles) {
        if (article.firstElementChild.textContent == decodeURIComponent(a)) {

            let details = article.querySelectorAll("details")
            for (const detail of details) {

                if (detail.firstElementChild.textContent == decodeURIComponent(s)) {
                    detail.scrollIntoView()
                    detail.setAttribute("open", "")
                }
            }
        }
    }
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