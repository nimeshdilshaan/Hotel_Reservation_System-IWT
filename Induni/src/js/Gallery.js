function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    // Update active button
    const buttons = document.querySelectorAll('.gallery-nav button');
    buttons.forEach(button => {
        button.classList.remove('active');
    });
    document.querySelector(`.gallery-nav button[onclick="filterGallery('${category}')"]`).classList.add('active');
}

