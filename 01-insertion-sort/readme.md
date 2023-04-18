# Insert sort

<img src="https://www.w3resource.com/w3r_images/insertion-sort.png"><br>
<img src="https://www.w3resource.com/w3r_images/searching-and-sorting-algorithm-exercise-3.png">


## Visualização em pseudocódigo
## __Sempre se inícia pelo segundo elemento, já que uma lista composta por apenas 1 elemento já está ordenada__.

### Lista = [90, 75, 88, 2, 0, 10]

### $i  = 1; -> indice inicial
### $tamLista = 6

### cópia: $lista[$i]
### indice: $i


### portugol código

<br>

```php
    inteiro lista[6] = [90, 75, 88, 2, 0, 10]
    inteiro copia, indice, i

    para(i = 1; i < tamLista; i ++){
           copia = lista[i]
           indice = i
    
           enquanto(indice > 0 e lista[indice - 1] > copia){
               lista[indice] = lista[indice - 1]
               indice--
           }
           lista[indice] = copia
    }

    imprimir(lista, 6)
```

