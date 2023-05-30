import './bootstrap';

const togglePostEditModal = () => {
    const postModalTriggerOpen = document.querySelector('.edit-post-button'),
            postModalTriggerClose = document.querySelector('.close-post-button-modal'),
            postModal = document.querySelector('.edit-post-modal');

    postModalTriggerOpen.addEventListener("click", (e) => {
        if (postModal.style.display === "none") {
            postModal.style.display = "block";
        }
    });

    postModalTriggerClose.addEventListener("click", (e) => {
        if (postModal.style.display === "block") {
            postModal.style.display = "none";
        }
    });
}

togglePostEditModal()