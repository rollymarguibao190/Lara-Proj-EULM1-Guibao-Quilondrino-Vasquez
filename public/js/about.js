document.addEventListener('DOMContentLoaded', () => {
    const toggleBgBtn = document.getElementById('toggle-bg-btn');
    const extraBg = document.getElementById('extra-bg');

    if (toggleBgBtn && extraBg) {
        toggleBgBtn.addEventListener('click', () => {
            const isHidden = extraBg.classList.toggle('is-hidden');
            toggleBgBtn.textContent = isHidden ? 'Show More Details' : 'Hide Details';
        });
    }

    const countEl = document.getElementById('selected-count');
    const highlightBtns = document.querySelectorAll('.highlight-btn');
    let highlightedCount = 0;

    highlightBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const card = btn.closest('.cems-team-card');
            if (!card) return;

            const active = card.classList.toggle('is-highlighted');
            if (active) {
                highlightedCount += 1;
                btn.textContent = 'Highlighted';
            } else {
                highlightedCount = Math.max(0, highlightedCount - 1);
                btn.textContent = 'Highlight';
            }

            if (countEl) {
                countEl.textContent = highlightedCount;
            }
        });
    });
});