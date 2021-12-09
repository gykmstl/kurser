fill("black")

let gh1 = new Grasshopper(10, 10)
gh1.drawBox("blue")
gh1.drawBox("white")
gh1.drawBox("red")
gh1.newLine()
gh1.drawBox("blue")
gh1.drawBox("white")
gh1.drawBox("red")

let gh2 = new Grasshopper(500, 100, 80)
gh2.drawBoxes("bwr bwr")