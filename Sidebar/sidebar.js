function openSidebar(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'flex';
}

function closeSidebar(event) {
    event.preventDefault();
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'none';
}
