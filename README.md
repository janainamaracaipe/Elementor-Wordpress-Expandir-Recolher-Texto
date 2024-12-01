# Documentação do Projeto  
## Elementor Text Expander  

**Versão**: 1.9  
**Autores**: Louy Santana Fernandes Maracaipe e Janaina Fernandes da Silva Maracaipe  

---

## Descrição  
O Elementor Text Expander é um widget personalizado para o Elementor que permite exibir textos longos de maneira interativa. O widget aplica um efeito de fade no final do texto quando ele está recolhido e inclui um botão que alterna entre expandir e recolher o conteúdo.  

---

## Funcionalidades  
1. **Exibição de Texto Recolhido com Fade**:  
    - Mostra apenas uma parte do texto com um efeito de gradiente no final.  
    - O fade desaparece quando o texto é expandido.  
2. **Interação com Botão**:  
    - O botão permite alternar entre Expandir e Recolher o texto.  
    - Personalização total do texto do botão.  
3. **Transições Suaves**:  
    - O contêiner do texto utiliza uma animação suave ao expandir ou recolher.  
4. **Compatibilidade com Elementor**:  
    - Configurações totalmente integradas ao editor Elementor.  

---

## Opções de Personalização  

### 1. Conteúdo  
- **Texto do Conteúdo**:  
    - Tipo: Editor WYSIWYG.  
    - Permite adicionar qualquer texto ou formatação suportada pelo Elementor.  
- **Texto do Botão (Expandir)**:  
    - Texto exibido no botão quando o texto está recolhido.  
    - Exemplo: "Leia mais".  
- **Texto do Botão (Recolher)**:  
    - Texto exibido no botão quando o texto está expandido.  
    - Exemplo: "Fechar".  

### 2. Estilo  
#### Fade  
- **Altura Visível do Texto**:  
    - Define a altura inicial do texto antes de ser expandido (ex.: 150px).  
- **Altura do Fade**:  
    - Altura do gradiente exibido no final do texto recolhido.  
- **Cor do Fade**:  
    - Cor do gradiente (suporta valores RGBA, ex.: `rgba(255, 255, 255, 1)`).  

#### Botão  
- **Alinhamento do Botão**:  
    - Define se o botão aparece à esquerda, centro ou direita do widget.  
- **Cor do Fundo do Botão**:  
    - Cor de fundo padrão do botão.  
- **Cor do Fundo ao Passar o Mouse**:  
    - Cor de fundo ao interagir com o botão (hover).  
- **Tipografia**:  
    - Configurações completas de fonte (tamanho, peso, estilo, etc.).  

---

## Como Usar  
1. **Adicione o Widget**:  
    - No editor Elementor, procure pelo widget Text Expander e arraste-o para a página.  
2. **Configure o Conteúdo**:  
    - Insira o texto no editor WYSIWYG.  
    - Personalize os textos do botão.  
3. **Ajuste o Estilo**:  
    - Configure a altura visível do texto e do fade.  
    - Personalize o botão (alinhamento, cores, fonte).  
4. **Visualize e Publique**:  
    - Use a visualização ao vivo do Elementor para testar o comportamento do widget.  
    - Publique a página quando estiver satisfeito.  

---

## Requisitos  
- **WordPress**: 6.7.1 ou superior.  
- **Elementor**: 3.25.9 ou superior.  
- **Tema Compatível**: Hello Elementor (ou qualquer tema compatível com Elementor).  

---

## Changelog  
**v1.9**  
- Corrigido o problema do botão não funcionar corretamente.  
- Ajustado o fade para desaparecer ao expandir e reaparecer ao recolher.  
- Adicionado cálculo dinâmico da altura do texto para evitar cortes após expansão.  
- Melhorias gerais de estilo e interatividade.  

---

## Licença  
Todos os direitos reservados. Este projeto é propriedade de **Louy Santana Fernandes Maracaipe** & **Janaina Fernandes da Silva Maracaipe** e está protegido por leis de direitos autorais. É estritamente proibida a redistribuição, modificação ou reutilização do código sem autorização expressa dos autores.  
© 2024 Louy Santana Fernandes Maracaipe & Janaina Fernandes da Silva Maracaipe.  
