# PlantUML
---
this is the documentation demo of markdown with PlantUML.

Here's the code:
```code
@startuml demo
alice->bob:hello
@enduml
```

And here's the output: 
```plantuml
@startuml demo
alice->bob:hello
@enduml
```

Here's another output demo:

```plantuml
@startuml "Restaurant"
left to right direction
Actor Guest as g
package Professional {
    actor Chef as c
    actor "Food Critics" as fc 
}
package Restaurant {
    usecase "Eat Food" as UC1
    usecase "Pay Food" as UC2
    usecase "Drink" as UC3
    usecase "Review" as UC4
}
fc-->UC4
g-->UC1
g-->UC2
g-->UC3
@enduml
```