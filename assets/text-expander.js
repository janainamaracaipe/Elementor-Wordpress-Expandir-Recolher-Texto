document.addEventListener('DOMContentLoaded', function () {
    const widgets = document.querySelectorAll('.text-expander-widget');

    widgets.forEach(widget => {
        const textContainer = widget.querySelector('.text-container');
        const textContent = widget.querySelector('.text-content');
        const fadeEffect = widget.querySelector('.fade-effect');
        const button = widget.querySelector('.expand-button');

        let expanded = false;

        button.addEventListener('click', function () {
            if (!expanded) {
                // Expande o texto e adiciona um pequeno offset para evitar cortes
                const fullHeight = textContent.scrollHeight + 5; // Adiciona 5px de margem extra
                textContainer.style.maxHeight = `${fullHeight}px`;
                fadeEffect.style.display = 'none';  // Oculta o fade
                button.textContent = button.getAttribute('data-collapse-text');
                expanded = true;
            } else {
                // Recolhe o texto
                textContainer.style.maxHeight = '150px';  // Altura inicial configurável
                fadeEffect.style.display = 'block';  // Exibe o fade
                button.textContent = button.getAttribute('data-expand-text');
                expanded = false;
            }
        });
    });
});