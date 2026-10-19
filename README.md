# ANOTAÇÕES DAS AULAS
## Polimofismo

Mesmo objeto podendo assumir formas diferentes, que é possível através da herança.

Quarto dos quatro pilares da Orientação a Objetos:

- Abstração
- Encapsulamento
- Herança
- Polimorfismo

O Polimorfismo se refere à capacidade de objetos de diferentes classes serem tratados de maneira uniforme através de uma interface comum. Isso permite que diferentes tipos de objetos respondam de maneira diferente a uma mesma mensagem ou método, de acordo com sua implementação específica.

No exemplo da aula, tanto objetos do tipo Serie quanto objetos do tipo Filme podem ser tratados de maneira uniforme como um Titulo, que provê uma interface comum como os métodos media() e duracaoEmMinutos(). Eles puderam responder de maneira diferente à mesma mensagem (a chamada do método duracaoEmMinutos) graças à sobrescrita do método.