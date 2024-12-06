const btn = document.querySelector('.teleport-btn');
const consentBox = document.querySelector('.cookie-consent');
const body = document.body;
const threshold = 100; // Distance in pixels to trigger movement

// Darken the rest of the page
body.classList.add('darkened');

// Initialize button position
btn.style.left = '50%';
btn.style.top = '50%';
btn.style.transform = 'translate(-50%, -50%)';

document.addEventListener('mousemove', (e) => {
    const rect = btn.getBoundingClientRect();
    const consentRect = consentBox.getBoundingClientRect();
    const mouseX = e.clientX;
    const mouseY = e.clientY;

    const buttonCenterX = rect.left + rect.width / 2;
    const buttonCenterY = rect.top + rect.height / 2;

    const distance = Math.hypot(mouseX - buttonCenterX, mouseY - buttonCenterY);

    if (distance < threshold) {
        const dx = buttonCenterX - mouseX;
        const dy = buttonCenterY - mouseY;
        const angle = Math.atan2(dy, dx);

        const moveX = Math.cos(angle) * 10; // Adjust movement speed
        const moveY = Math.sin(angle) * 10;

        // Calculate new position
        let newX = rect.left + moveX - consentRect.left;
        let newY = rect.top + moveY - consentRect.top;

        // Ensure the button stays within the consent box
        newX = Math.max(0, Math.min(newX, consentRect.width - rect.width));
        newY = Math.max(0, Math.min(newY, consentRect.height - rect.height));

        // Update button position
        btn.style.left = `${newX}px`;
        btn.style.top = `${newY}px`;
    }
});

btn.addEventListener('click', function() {
    alert('Merci d\'avoir accepté les cookies!');
    consentBox.style.display = 'none';
    body.classList.remove('darkened');
});
