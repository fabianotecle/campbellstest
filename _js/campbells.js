function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const expanded = button.getAttribute('aria-expanded') === 'true';

    if (expanded) {
        answer.style.maxHeight = null;
        button.setAttribute('aria-expanded', 'false');
        button.querySelector('.arrow').style.transform = 'rotate(0deg)';
    } else {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        button.setAttribute('aria-expanded', 'true');
        button.querySelector('.arrow').style.transform = 'rotate(180deg)';
    }
}
