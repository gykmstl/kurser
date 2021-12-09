let shapes: Shape[] = []
    
shapes.push(new Rectangle(5, 3))
shapes.push(new Rectangle(10, 7))
// shapes.push(new Ellipse(5, 3))
// shapes.push(new Ellipse(10, 7))
// shapes.push(new Triangle(5, 3, 4))
// shapes.push(new Triangle(10, 10, 10))
// shapes.push(new Square(3))
// shapes.push(new Square(10))
// shapes.push(new Circle(5))
// shapes.push(new Circle(10))

for (let i = 0; i &lt; shapes.length; i++) {
    output(`${shapes[i]} Area: ${shapes[i].area.toFixed(1)} Perimeter: ${shapes[i].perimeter.toFixed(1)}`)
}